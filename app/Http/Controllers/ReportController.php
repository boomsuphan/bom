<?php

namespace App\Http\Controllers;
use PDF;
use App\Project;
use App\users;
use App\Bom;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Exports\ReportExport;

use Maatwebsite\Excel\Facades\Excel;



class ReportController extends Controller
{
    
    public function Bom_PDF($id)
    {
        $bom = DB::table('bom2')
            ->join('bomdetail', 'bom2.id', '=', 'bomdetail.bom_id')
            
            ->where('bom2.project_id', $id)
            ->orderBy('bom2.module','ASC')
            ->orderBy('bomdetail.supplier','ASC')
            ->get();
        $project = Project::findOrFail($id);
        $pdf = PDF::loadView('report.pdf.bom',compact('project','bom'))
        ->setPaper('a4', 'landscape');
        return $pdf->stream("project-$project->project_name.pdf"); //แบบนี้จะ stream มา preview
      
    }
    public function BomDetail_PDF($id)
    {
        $bom = Bom::findOrFail($id);
        $boms= DB::table('bom2')
        ->join('bomdetail', 'bom2.id', '=', 'bomdetail.bom_id')
        ->where('bom2.id', $id)
        ->orderBy('bom2.module','ASC')
        ->orderBy('bomdetail.supplier','ASC')
        ->get();
        $Project =$bom->Project->project_name;
        $module =$bom->module;
        $pdf = PDF::loadView('report.pdf.bom_detail',compact('bom','boms'))
        ->setPaper('a4', 'landscape');
        return $pdf->stream("bom-$Project-$module.pdf");
    }
    public function Bom_EXCEL($id) 
    {
        $project = Project::findOrFail($id);
        $bom = DB::table('bom2')
            ->join('bomdetail', 'bom2.id', '=', 'bomdetail.bom_id')
           
            ->where('bom2.project_id', $id)
            ->orderBy('bom2.module','ASC')
            ->orderBy('bomdetail.supplier','ASC')
            ->get();
        return view("report/excel/bom",compact('bom','project'));
       // return Excel::download(new ReportExport(), 'invoices.xlsx');
    }
    public function BomDetail_EXCEL($id) 
    {
        $bom = Bom::findOrFail($id);
        $boms= DB::table('bom2')
        ->join('bomdetail', 'bom2.id', '=', 'bomdetail.bom_id')
        
        ->where('bom2.id', $id)
        ->orderBy('bom2.module','ASC')
        ->orderBy('bomdetail.supplier','ASC')
        ->get();
        return view("report/excel/bom_detail",compact('bom','boms'));
       // return Excel::download(new ReportExport(), 'invoices.xlsx');
    }
    
}
