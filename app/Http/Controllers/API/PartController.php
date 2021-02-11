<?php

namespace App\Http\Controllers\API;
use App\Part;
use App\BomDetail;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PartController extends Controller
{
    public function supplier($Position)
    {
      $supplier = BomDetail::where('position',$Position)
      ->groupBy('supplier')
        ->get();
      return response()->json($supplier);
    }
    public function part_no($supplier)
    {
      $part_no = BomDetail::where('supplier',$supplier)
        ->groupBy('part_no')
        ->get();
      return response()->json($part_no);
    }
    public function descriptions($part_no)
    {
      $description = supplier::where('part_no',$part_no)
        ->groupBy('description')
        ->get();
      return response()->json($description);
    }
    public function price($part_no)
    {
      $pirce = supplier::where('part_no',$part_no)
        ->groupBy('pirce')
        ->get();
      return response()->json($pirce);
    }
}
