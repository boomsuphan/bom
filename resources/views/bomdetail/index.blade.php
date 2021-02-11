@extends('layouts.main')
@section('content')
<?php
// Start the session
session_start();
?>
<nav aria-label="breadcrumb" id="Div-none">
    <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="{{ url('/project/index') }}"><strong>Project</strong></a>
        </li>
        <li class="breadcrumb-item"><a
                href="{{ url('/bom/'.$Bom->Project->id) }}"><strong>{{$Bom->Project->project_name}}</strong></a></li>
        <li class="breadcrumb-item"><a
                href="{{ url('/bomdetail/'.$Bom->id) }}"><strong>Module-{{$Bom->module}}</strong></a></li>
    </ol>
</nav>
<br>
<div class="row">
   
    <div class="col-12">
        <div class="d-none d-md-block  d-lg-block d-xl-block">
        <div class="row ">
            <div class="col-2">
                <br>
                @include ('bomdetail/form-modal/create')

            </div>
            <div class="col-1">
            </div>
            <div class="col-5" style="color:black;">
                <br>
                <?php $Sub_Total = 0 ?>
                <?php $total_Qty = 0 ?>
                <?php $Total_Item  = 0 ?>
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                <strong> Item total :</strong> <a id="Total_Item"></a> &nbsp;&nbsp;<strong> Qty Total :</strong> <a
                    id="total_Qty"></a>&nbsp;&nbsp;&nbsp; <strong>
                    Sub Total :</strong> <a id="Sub_Total"></p>
            </div>
            <div class="col-3">
                <br>
                <div class="row">
                  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    @if($Bom->bom_status =='Success')
                    @include ('bomdetail/confirm/unconfirm')
                    @else
                    @include ('bomdetail/confirm/confirm')
                    @endif
                    &nbsp;

                    <a href="{{ url('/bom/'.$Bom->Project->id) }}" id="Div-none">
                        <button type="button" class="btn btn-secondary btn-sm">
                            back
                        </button>
                    </a>

                </div>
            </div>
        </div>
    </div>
        <div class="d-sm-block d-md-none">
        <div class="row ">
            <div class="col-4">
                <br>
                @include ('bomdetail/form-modal/create')

            </div>
           
           
            <div class="col-7">
                <br>
                <div class="row">
                    <div class="col-7">
            
                    @if($Bom->bom_status =='Success')
                    @include ('bomdetail/confirm/unconfirm')
                    @else
                    @include ('bomdetail/confirm/confirm')
                    @endif
                </div>
                <div class="col-2">
                    <a href="{{ url('/bom/'.$Bom->Project->id) }}" id="Div-none">
                        <button type="button" class="btn btn-secondary  btn-sm">
                            back
                        </button>
                    </a>
                </div>
                </div>
            </div>
        </div>
        <br>
        <div class="row">
           
           
            <div class="col" style="color:black;">
               
                 
                   
                        <strong> Item total :</strong> <a id="Total_Item_mobile"></a>
                    
                    </div>
        
           
        </div>
        <div class="row">
           
           
           
                        <div class="col" style="color:black;">        
                        <strong> Qty Total :</strong> <a id="total_Qty_mobile"></a>
                  
              
        </div>
        </div>
        <div class="row">
           
           
          
                        <div class="col" style="color:black;">       
                        <strong> Sub Total :</strong> <a id="Sub_Total_mobile"></p>
                      
            </div>
           
        </div>
    </div>
        <br>
        <div>
            @include ('bomdetail/table/table_bomdetail')
        </div>
        <br>
    
    </div>
</div>

<script>
    function ajax(url, callback) {
        $.ajax({
            "url": url,
            "type": "GET",
            "dataType": "json",
        })
            .done(callback); //END AJAX
    }
</script>
<script>
    $(document).ready(function () {
        showsuppliers();
        showsuppliers2();
    });
</script>


@endsection