<?php

namespace App\Exports;
use App\Project;
use App\BomDetail;

use Illuminate\Contracts\View\View;
use Maatwebsite\Excel\Concerns\FromView;


class ReportExport implements FromView
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function view(): View
    {
        return view('report.excel.bom', [
            'BomDetail' => BomDetail::all()
        ]);
    }
}
