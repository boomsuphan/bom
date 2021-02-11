
@extends('layouts.main')<!-- ประกาศให้ใช้ layout ที่ชื่อว่า main แก้ไขได้จาก resources/views/layout/main (Ohm) -->
@section('content')<!-- ประกาศให้ใช้ content ไว้ตำแหนงไหนใน main แก้ไขได้จาก  @ yield('content')    resources/views/layout/main (Ohm) -->
<?php
session_start();// ประกาศใช้ เซสชั่น (Ohm)
?>
@forelse ($users as $users)<!-- for loop ค่าผู้ใช้ที่ login เข้ามา ค่ามาจากฟังชั่น index ตัวแปร $users จากไฟล์ app/Http/Controllers/ProjectController (Ohm) -->
    <?php
    // เซตค่า เซสชั่น (Ohm)
 
    $_SESSION["users"] = $users->id_user;   //รหัสผู้ใช้ (Ohm)
    $_SESSION["status"] = $users->position; //ตำแหน่งผู้ใช้ (Ohm)
    $_SESSION["name"] = $users->name_user;  //ชื่อผู้ใช้ (Ohm)
    ?>
   
    <!-- nav แท็กบนสุด (Ohm) -->
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{ url('project/index') }}"><strong>Project</strong></a></li>
        </ol>
    </nav>
    <div class="container-fluid">
    <div class="row " >
      
                <div class="col-sm" >
                  
                  
                        @include ('project/form-modal/create')<!-- ถ้าเ็นตำแหน่ง application-manager ให้แสดง ปุ่ม Create, แก้ไขปุ่มและฟอร์มได้จาก resources/views/project/form-modal/create   (Ohm) -->
                    
                </div>
                <div class="col-sm" >
                </div>
              
                <div class="col-sm" >
                    
                        <form class="form-inline" method="GET" action="{{ url('/project/index') }}">  <!-- ฟอร์ม Search  (Ohm) -->  
                            <div class="row " >
                               <div class="col-10 ">
                                <input class="form-control form-control-sm" id="inputPassword2" name="search" value="{{$keyword}}"> <!--ส่งค่า Search ไปฟังก์ชั่น index จากไฟล์ app/Http/Controllers/ProjectController (Ohm) -->
                               </div>
                               
                                <button type="submit" class="btn btn-success btn-sm"><i class="fas fa-search"></i></button>
                               
                               
                            </div>
                        </form>  <!-- จบฟอร์ม Search  (Ohm) -->
                    
                </div>
           
            <br><br>
           
             
       
    </div>
</div>
<div class="container-fluid">
    <div class="row">
       
        <div class="col-12">
        @include ('project/table/table_project') <!--   แก้ไขปุ่มและฟอร์มได้จาก resources/views/project/table/table_project   (Ohm) -->
        </div>
       
    </div>
</div>
        @empty<!--ถ้า for loop ไม่มีค่าผู้ใช้ที่ login เข้ามา ให้แสดง ไม่มีข้อมูล (Ohm) -->
ไม่มีข้อมูล
@endforelse<!--จบ for loop ค่าผู้ใช้ที่ login เข้ามา  (Ohm) -->
<div class="d-none"><!--แสดงข้อมูล ซ่อนไว้ เซสชั่นเผื่อใช้  (Ohm) -->
    <?php
    echo "SESSION User is " . $_SESSION["users"] . ".<br>";
    echo "SESSION status is " . $_SESSION["status"] . ".<br>";
    echo "SESSION name is " . $_SESSION["name"] . ".<br>";
    ?>
</div>

@endsection