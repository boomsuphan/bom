<?php

namespace App\Http\Controllers;

use App\Part;
use App\BomDetail;
use Auth;
use Illuminate\Http\Request;

class PartController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */



     /**จากเดิมที่เคยใช้ Part เปลี่ยนมาใช้ Bomdetail เพราะมีปัญหาในการดึง Part_no 
      * ทำการดึงข้อมูลที่เคยบันทึกมาใช้ --ohm*/

    public function index(Request $request)
    {
        if (Auth::check()) /**เชคการเข้าสู่ระบบ --ohm*/
        {
            $keyword = $request->get('search');/**request search  --ohm*/
            $perPage = 15; /**ระบุจำนวนที่แสดง  --ohm*/
            $check_supplier = 1;/**ประกาศตัวแปร = 1 --ohm*/
            $check_part_no = 2;/**ประกาศตัวแปร = 2 --ohm*/
            $check_description = 3;/**ประกาศตัวแปร = 3 --ohm*/

            if (!empty($keyword)) /**ถ้าตัวแปร มีข้อมูล --ohm*/
            {
                $check_supplier = $request->get('check_supplier');/**เก็บข้อมูลจาก check box --ohm*/
                $check_part_no = $request->get('check_part_no');/**เก็บข้อมูลจาก check box --ohm*/
                $check_description = $request->get('check_description');/**เก็บข้อมูลจาก check box --ohm*/
                if ($check_supplier == "1") /**ถ้าเชคแค่ Supplier  --ohm*/
                {
                    $part = BomDetail::where('supplier', 'LIKE', "%$keyword%")/**ค้นหาตาม keyword --ohm*/
                        ->groupBy('part_no')/**จัดกลุ่ม --ohm*/
                        ->orderBy('supplier', 'asc')->orderBy('part_no', 'asc')/**เรียงข้อมูล --ohm*/
                        ->latest()->paginate($perPage);/**ฟังก์ชั่นแบ่งข้อมูล --ohm*/
                        $part->setPath("part?check_supplier=$check_supplier&check_part_no=$check_part_no&check_description=$check_description&search=$keyword");/**เพิ่ม path เพื่อให้ไม่ error --ohm*/
                        
                } 
                else  if ($check_part_no == "2") /**ถ้าเชคแค่ part_no  --ohm*/
                {
                    $part = BomDetail::Where('part_no', 'LIKE', "%$keyword%")/**ค้นหาตาม keyword --ohm*/
                        ->groupBy('part_no')/**จัดกลุ่ม --ohm*/
                        ->orderBy('supplier', 'asc')->orderBy('part_no', 'asc')/**เรียงข้อมูล --ohm*/
                        ->latest()->paginate($perPage);/**ฟังก์ชั่นแบ่งข้อมูล --ohm*/
                        $part->setPath("part?check_supplier=$check_supplier&check_part_no=$check_part_no&check_description=$check_description&search=$keyword");/**เพิ่ม path เพื่อให้ไม่ error --ohm*/
                } 
                else  if ($check_description == "3") /**ถ้าเชคแค่ description  --ohm*/
                {
                    $part = BomDetail::Where('description', 'LIKE', "%$keyword%")/**ค้นหาตาม keyword --ohm*/
                        ->groupBy('part_no')/**จัดกลุ่ม --ohm*/
                        ->orderBy('supplier', 'asc')->orderBy('part_no', 'asc')/**เรียงข้อมูล --ohm*/
                        ->latest()->paginate($perPage);/**ฟังก์ชั่นแบ่งข้อมูล --ohm*/
                        $part->setPath("part?check_supplier=$check_supplier&check_part_no=$check_part_no&check_description=$check_description&search=$keyword");/**เพิ่ม path เพื่อให้ไม่ error --ohm*/
                }
                if ($check_supplier == "1" && $check_part_no == "2") /**ถ้าเชคแค่ Supplier part_no  --ohm*/
                {
                    $part = BomDetail::where('supplier', 'LIKE', "%$keyword%")
                        ->groupBy('part_no')
                        ->orwhere('part_no', 'LIKE', "%$keyword%")
                        ->orderBy('supplier', 'asc')->orderBy('part_no', 'asc')
                        ->latest()->paginate($perPage);
                        $part->setPath("part?check_supplier=$check_supplier&check_part_no=$check_part_no&check_description=$check_description&search=$keyword");
                }
                if ($check_supplier == "1" && $check_description == "3") /**ถ้าเชคแค่ Supplier description  --ohm*/
                
                {
                    $part = BomDetail::where('supplier', 'LIKE', "%$keyword%")
                        ->groupBy('part_no')
                        ->orwhere('description', 'LIKE', "%$keyword%")
                        ->orderBy('supplier', 'asc')->orderBy('part_no', 'asc')
                        ->latest()->paginate($perPage);
                        $part->setPath("part?check_supplier=$check_supplier&check_part_no=$check_part_no&check_description=$check_description&search=$keyword");
                        
                }
                if ($check_part_no == "2" && $check_description == "3") /**ถ้าเชคแค่  part_no description --ohm*/
                {
                    $part = BomDetail::where('part_no', 'LIKE', "%$keyword%")
                        ->groupBy('part_no')
                        ->orwhere('description', 'LIKE', "%$keyword%")
                        ->orderBy('supplier', 'asc')->orderBy('part_no', 'asc')
                        ->latest()->paginate($perPage);
                        $part->setPath("part?check_supplier=$check_supplier&check_part_no=$check_part_no&check_description=$check_description&search=$keyword");
                        
                }
                if ($check_supplier == "1" && $check_part_no == "2" && $check_description == "3")/**ถ้าเชคแค่ Supplier part_no  description --ohm*/
                 {
                    $part = BomDetail::where('part_no', 'LIKE', "%$keyword%")
                        ->orwhere('description', 'LIKE', "%$keyword%")
                        ->orwhere('supplier', 'LIKE', "%$keyword%")
                        ->groupBy('part_no')
                        ->orderBy('supplier', 'asc')->orderBy('part_no', 'asc')
                        ->latest()->paginate($perPage);
                        $part->setPath("part?check_supplier=$check_supplier&check_part_no=$check_part_no&check_description=$check_description&search=$keyword");
                }
            } else {
                $part = BomDetail::groupBy('part_no')->orderBy('supplier', 'asc')->orderBy('part_no', 'asc')->latest()->paginate($perPage);
                $part->setPath("part?check_supplier=$check_supplier&check_part_no=$check_part_no&check_description=$check_description&search=$keyword");
            }

            return view('part.index', compact('part', 'check_supplier', 'check_part_no', 'check_description', 'keyword'));
        }else {
            return redirect()->away('/php_login2/');
      }
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
        $validatedData = $request->validate([
            'supplier' => 'required',
            'part_no' => 'required',
            'description' => 'required',
            'pirce' => 'required',
        ]);
        $requestData = $request->all();

        Part::create($requestData);

        return back();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Part  $part
     * @return \Illuminate\Http\Response
     */
    public function show(Part $part)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Part  $part
     * @return \Illuminate\Http\Response
     */
    public function edit(Part $part)
    {
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Part  $part
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
      
        $requestData = $request->all();
        $part = BomDetail::findOrFail($id);
        $part->update($requestData);
        return Back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Part  $part
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Part::destroy($id);
        return back();
    }


    public function descriptions($part_no)
    {
        $description = BomDetail::where('part_no', $part_no)
            ->groupBy('description')
            ->get();
        return response()->json($description);
    }



    
    public function price($part_no)
    {
        $pirce = BomDetail::where('part_no', $part_no)
            ->groupBy('pirce')
            ->get();
        return response()->json($pirce);
    }

    public function part_id($part_no)
    {
        $part_id = BomDetail::where('part_no', $part_no)
            ->groupBy('id')
            ->get();
        

      
            
        return response()->json($part_id);
    }
}
