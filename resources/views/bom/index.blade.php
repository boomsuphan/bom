@extends('layouts.main')
@section('content')
<?php
// Start the session
session_start();
?>
<nav aria-label="breadcrumb">
    <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="{{ url('/project/index') }}"><strong>Project</strong></a>
        </li>
        <li class="breadcrumb-item"><a href="{{ url('/bom/'.$project->id) }}"><strong>{{$project->project_name}}</strong></a></li>
    </ol>
</nav>
<div class="container-fluid">
    <div class="d-none d-md-block  d-lg-block d-xl-block">
    <div class="row ">
        <div class="col-9">  @include ('bom/form-modal/create')</div>
    
    
        <div class="col-1">  @if ($_SESSION["status"] =='application-manager')
          
            @if($project->project_status =='Success')
                @include ('bom/confirm/unconfirm')
            @else
                @include ('bom/confirm/confirm')
            @endif
        @else   
        @endif      
    </div>
        
        <div class="col-1"> 
           <a href="{{ url('/project/index') }}"> <button type="button" class="btn btn-secondary btn-sm">back</button></a>
        </div>         
    </div>
    </div>
    <div class="d-sm-block d-md-none">
    <div class="row ">
        <div class="col">  @include ('bom/form-modal/create')</div>
      
    
        <div class="col">  @if ($_SESSION["status"] =='application-manager')
          
            @if($project->project_status =='Success')
                @include ('bom/confirm/unconfirm')
            @else
                @include ('bom/confirm/confirm')
            @endif
        @else   
        @endif      
    </div>
        
        <div class="col"> 
           <a href="{{ url('/project/index') }}"> <button type="button" class="btn btn-secondary btn-sm">back</button></a>
        </div>         
    </div>
</div>
    <br>
    @include ('bom/table/table_bom')
    <br>
</div>

@endsection