<?php

namespace App\Http\Controllers;

use App\BomDetail;
use App\Part;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class BomDetailController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view("bomdetail/index");
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $requestData = $request->all();
        BomDetail::create($requestData);
        return back();
    }
    public function storeNew(Request $request)
    {
        
        request([
            'supplier' =>'required',
            'part_no' =>'required',
            'description' =>'required',
            'qty' =>'required',
            'pirce' =>'required',
            'in_stock'=>'required',
            'bom_id'=>'required',
           
            'user_id'=>'required',
            'bom_name'=>'required'
        ]);
        $search = array('/');
        $replace = array('|');
        $part_no=str_replace($search,$replace,request()->part_no,$var);

        $bomdeatil = BomDetail::create(
            array('supplier' => request()->supplier,
                    'part_no' => $part_no,
                    'description' => request()->description,
                    'qty' => request()->qty,
                    'pirce' => request()->pirce,
                    'in_stock' => request()->in_stock,
                    'bom_id' => request()->bom_id,
                    'user_id' => request()->user_id,
                    'bom_name' => request()->bom_name
                    )
        );
        
       
       // $id_part = $Part->id;
       
        //return redirect("/employee/{$id_part}/edit");
        return back();
    }


    /**
     * Display the specified resource.
     *
     * @param  \App\BomDetail  $bomDetail
     * @return \Illuminate\Http\Response
     */
    public function show(BomDetail $bomDetail)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\BomDetail  $bomDetail
     * @return \Illuminate\Http\Response
     */
    public function edit(BomDetail $bomDetail)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\BomDetail  $bomDetail
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {

        $requestData = $request->all();
             

        $BomDetail = BomDetail::findOrFail($id);
        $BomDetail->update($requestData);

        return back();
    }
    public function remark(Request $request, $id)
    {

        $requestData = $request->all();
             

        $BomDetail = BomDetail::findOrFail($id);
        $BomDetail->update($requestData);

        return back();
    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\BomDetail  $bomDetail
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        BomDetail::destroy($id);
        return back();
    }
}
