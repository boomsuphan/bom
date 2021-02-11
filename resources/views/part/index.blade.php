@extends('layouts.main2')
@section('content')
<?php
// Start the session
session_start();
?>
<nav aria-label="breadcrumb">
    <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="{{ url('/part') }}"><strong>Part</strong></a></li>
    </ol>
</nav>

   
    
        <div class="row">
            <div class="col-6">
              
            </div>

           
            
        </div>
        <br>
        <div class="row">
          
            
            <div class="col-4 d-none d-xl-block">
               
                  
                  
                        <form class="form-inline" method="GET" action="{{ url('/part/') }}">
                         
                                @if($check_supplier =='1')         
                                    <input type="checkbox" name="check_supplier" value="1" class="form-check-input" id="exampleCheck1" checked>
                                    <label class="form-check-label"  for="exampleCheck1">Supplier</label>  
                                @else
                                    <input type="checkbox" name="check_supplier" value="1" class="form-check-input" id="exampleCheck1" >
                                    <label class="form-check-label"  for="exampleCheck1">Supplier</label>                  
                                @endif 
                           
                              
                                &nbsp; &nbsp; 
                                @if($check_part_no =='2')         
                                    <input type="checkbox"
                                    class="form-check-input" name="check_part_no" value="2" id="exampleCheck2" checked>
                                    <label class="form-check-label" for="exampleCheck2">Part No.</label> 
                                @else
                                    <input type="checkbox"
                                    class="form-check-input" name="check_part_no" value="2" id="exampleCheck2" >
                                    <label class="form-check-label" for="exampleCheck2">Part No.</label>      
                                @endif
                                &nbsp; &nbsp; 
                                @if($check_description =='3')         
                                    <input type="checkbox" class="form-check-input" name="check_description" value="3" id="exampleCheck3" checked>
                                    <label class="form-check-label" for="exampleCheck3">Description</label>
                                @else
                                    <input type="checkbox" class="form-check-input" name="check_description" value="3" id="exampleCheck3"  >
                                    <label class="form-check-label" for="exampleCheck3">Description</label>    
                                @endif
                  
               
            </div>
            <div class="col-6  d-sm-block d-md-none"> <input class="form-control form-control-sm" name="search" id="inputPassword2" value=""> </div>
            <div class="col-2 d-none d-md-block  d-lg-block d-xl-block"> <input class="form-control form-control-sm" name="search" id="inputPassword2" value="{{$keyword}}"> </div>
            <div class="col-1"> <button type="submit" class="btn btn-success btn-sm"><i class="fas fa-search"></i></button></div>
            
            </form>
        </div>
      
        <br>
        @include ('/part/table/table_part') <!--   แก้ไขปุ่มและฟอร์มได้จาก resources/views/part/table/table_part   (Ohm) -->

<script>
 
   
    </script>
    

@endsection