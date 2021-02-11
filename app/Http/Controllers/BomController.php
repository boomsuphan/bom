<?php

namespace App\Http\Controllers;
use App\Bom;
use App\Project;
use App\Part;
use App\BomDetail;
use Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class BomController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('bom.seach');
    }
    public function search(Request $request)
    {
          $search = $request->get('term');
          $result = Bom::where('module', 'LIKE', '%'. $search. '%')->get();
          return response()->json($result);
            
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
     * @return \Illuminate\Http\Responses
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'module' => 'required',
            'project_id' => 'required|max:255',
        ]);    
        $requestData = $request->all();
        
        Bom::create($requestData);
        
        return back();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {   
        if (Auth::check()){
            $Part = Part::all();
            $Part_last = Part::latest()->take(1)->get();
            $Bom = Bom::findOrFail($id);
            $BomDetail = BomDetail::where('bom_id',$id)->orderBy('supplier')->get();
    
            $supplier = BomDetail::distinct()->get(['supplier']);
            return view('bomdetail.index', compact('Bom','Part','supplier','Part_last','BomDetail'));
        }else {
                return redirect()->away('/php_login2/');
        }
      
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }
    public function update(Request $request, $id)
    {
         
        $requestData = $request->all();   
        $Bom = Bom::findOrFail($id);
        $Bom->update($requestData);

        //return  redirect("bom/{$Bom->Project->id}");
        return  back();
    }
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function confirm(Request $request, $id)
    {
         
        $requestData = $request->all();   
        $Bom = Bom::findOrFail($id);
        $Bom->update($requestData);

        //return  redirect("bom/{$Bom->Project->id}");
        return  redirect("bom/{$Bom->Project->id}");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Bom::destroy($id);
        DB::table('bomdetail')->where('bom_id', '=', $id)->delete();
        return back();
    }

  
}
