<?php

namespace App\Http\Controllers;

use App\Project;
use App\users;
use App\Bom;
use App\User;
use  Auth;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ProjectController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    /**ฟังก์ชั่นการดัก Login มีการส่งค่า $id --ohm*/
    public function landding(Request $request, $id)
    {
        $User = User::firstOrCreate(['name' => $id]);//**ใช้ฟังก์ชั่น firstOrCreate คือฟังไว้เชคข้อมูลว่ามีอยู่ในฐานข้อมูลหรือไหม ถ้าเจอให้ใช้ข้อมูล ถ้าไม่เจอให้เพิ่มข้อมูลเข้าไป --ohm*/
        Auth::loginUsingId($User->id);//**การใช้ฟังก์ชั่น login โดยใช้ $id --ohm*/
        return  redirect("/project/index");//**ส่งไปหน้า /project/index  --ohm*/
    }
    //**ฟังก์ชั่นนี้ไม่ได้ใช้ สร้างขึ้นมาเผื่ออนาคตอยากจะ logout --ohm*/
    public function logout(Request $request)
    {
        Auth::logout();//**การใช้ฟังก์ชั่น logout โดยใช้ $id --ohm*/
        return redirect()->away('/php_login2/');//**ส่งไปหน้า /php_login2/  --ohm*/
    }

    
    public function index(Request $request)
    {
        if (Auth::check())/**เชคว่ามีการ login เข้ามาไหม ถ้าไม่มีให้กลับไปหน้า Login --ohm*/
        {
            $users = users::where('id_user', Auth::user()->name)->get();/**ใช้ Auth-name มาหาให้ตาราง เพื่อใช้ในการเก็บเชสชั่น --ohm*/
            $keyword = $request->get('search');/**ประการตัวแปรที่รับค่าเข้ามา --ohm*/
            $perPage = 15;/**ประกาศตัวแปร เก็บค่า 15 --ohm*/
            if (!empty($keyword)) /**เชคว่า keyword มีค่าไหม  เขียน Search ธรรมดา --ohm*/
            {
                $project = Project::where('project_name', 'LIKE', "%$keyword%")
                                ->orWhere('support', 'LIKE', "%$keyword%")
                                ->orWhere('Customer', 'LIKE', "%$keyword%")
                                ->orWhere('sale', 'LIKE', "%$keyword%")
                                ->orWhere('project_status', 'LIKE', "%$keyword%")
                                ->latest()->paginate($perPage); /**ฟังก์ชั่น latest() การดึง desc 
                                , paginate()  การแบ่งการแสดงผลข้อมูล ในที่นี้ใช้ 15 ไปดู https://laravel.com/docs/6.x/pagination --ohm*/
                $project->setPath("?search=$keyword");/**การเชต Path ที่ตามหลัง &page --ohm*/
            } else {
                $project = Project::latest()->paginate($perPage); /**ดึงข้อมูลทั้งหมด desc แบ่งหน้า --ohm*/ 
            }
            $projectlist = Project::all();/**ดึงข้อมูลทั้งหมด desc มาใช้ใน dropdorw --ohm*/ 
            $projectsearch = Project::all();/**ดึงข้อมูลทั้งหมด มาใช้ใน dropdorw --ohm*/ 
            $Support = users::where('id_user', 'not like', Auth::user()->name)->where('department', 'application')->get();/**ดึงข้อมูล user เพื่อมาใช้ใน dropdorw เลือกแค่ application  --ohm*/
            $Sale = users::where('id_user', 'not like', Auth::user()->name)->where('position', 'sales')->where('department', 'office')->get();/**ดึงข้อมูล user เพื่อมาใช้ใน dropdorw เลือกแค่ sales,office  --ohm*/
            return view('project.index', compact('project', 'projectlist', 'users', 'Support', 'projectsearch', 'Sale' ,'keyword'));/** compact ตัวแปรออกไปหนเา view  --ohm*/
        } else {
              return redirect()->away('/php_login2/');/**กลับไปหน้า  login --ohm*/
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
        $requestData = $request->all();/*request ทั้งหมด --ohm*/
        Project::create($requestData);/*นำมาเพิ่มข้อมูล --ohm*/
        $project_id = $request->input('clone');/**request clone  --ohm*/
        if ($project_id == "New Project") /**ถ้าเป็น New Project ไม่ต้องทำอะไร --ohm*/
        {

        } else /**ถ้าไม่ใช้  --ohm*/
        {
            $clone_id = Project::where('project_name', $project_id)->get('id');/**where ข้อมูล Project_name เอาแค่ id --ohm*/
            $project = Project::latest()->take(1)->get();/**ดึงข้อมูล project ตัวสุดท้าย --ohm*/
            foreach ($project as $projects) /** วนลูปข้อมูล $Project ตัวล่าสุด  --ohm*/
            {
                foreach ($clone_id as  $clone_ids) /** วนลูปข้อมูล $clone_id ที่ได้จากการ where --ohm*/
                {
                    $last = $projects->id; /**ประกาศตัวแปร เก็บค่า $projects->id ตัวล่าสุด --ohm*/
                    $d =  $clone_ids->id; /**ประกาศตัวแปร เก็บค่า $clone_ids->id ตัวนั้นๆ --ohm*/
                    Project::clone_project($d, $last);/**ใช้ฟังก์ชัน clone_project ส่งค่า ตัวล่าสุด และ ตัวนั้นๆ --ohm*/
                    foreach ($projects->Bom as $boms) /**วนลูปข้อมูล Bom โดยใช้ความสัมพันธ์ที่ได้ประการในโมเดล --ohm*/
                    {
                        $bom_id = $boms->id;/**ประกาศตัวแปร เก็บค่า bom->id --ohm*/
                        if ($boms->module == 'Vision') /**ถ้าเป็น vision ให้สร้างแต่ vision --ohm*/
                        {
                            Project::clone_bomDetail($d, $bom_id);
                        }
                        if ($boms->module == 'Mechanical')  /**ถ้าเป็น Mechanical ให้สร้างแต่ Mechanical --ohm*/
                        {
                            Project::clone_bomDetailMechanical($d, $bom_id);
                        }
                        if ($boms->module == 'Electrical')  /**ถ้าเป็น Electrical ให้สร้างแต่ Electrical --ohm*/
                        {
                            Project::clone_bomDetailElectrical($d, $bom_id);
                        }
                        
                    }
                }
            }
        }
        return back();/**ให้กลับไปหน้าเดิม หรือจะเรียกว่า Refresh --ohm*/
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Project  $project
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        if (Auth::check())/**เชคว่าเข้าสู่ระบบมาไหม --ohm*/
        {
            $project = Project::findOrFail($id);/** where id ธรรมดา --ohm*/
            $bom = Bom::distinct()->get(['module']);/**distin  ข้อมูล เอาแค่ module --ohm*/
            return view('bom.index', compact('project', 'bom'));/**ส่งข้อมูล --ohm*/
        }else {
                return redirect()->away('/php_login2/');/**ถ้าไม่มีการ login ให้ login --ohm*/
        }
       
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Project  $project
     * @return \Illuminate\Http\Response
     */
    public function edit(Project $project)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Project  $project
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $requestData = $request->all();/**request ทั้งหมดใน form --ohm*/
        $Project = Project::findOrFail($id);/**หาโดย $id --ohm*/
        $Project->update($requestData);/**เอา $request มา  update --ohm*/
        return Back();/**กลับมาหน้าเดิม --ohm*/
    }
    public function confirm(Request $request, $id)
    {
        $ses = $request->input('ses');/**ไม่ได้ใช้แล้ว --ohm*/
        $requestData = $request->all();/**request ทั้งหมดใน form --ohm*/
        $Project = Project::findOrFail($id);/**หาโดย $id --ohm*/
        $Project->update($requestData);/**เอา $request มา  update --ohm*/

        return  redirect("project/index");/**กลับมาหน้า project/index --ohm*/
    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Project  $project
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Project::destroy($id);/**ลบ $id --ohm*/
     
        return back();/**กลับมาหน้าเดิม --ohm*/
    }
}
