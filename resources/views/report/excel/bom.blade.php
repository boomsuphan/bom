<?php
header("Content-Type: application/vnd.openxmlformats-officedocument.spreadsheetml.sheet");
header("Content-Disposition: attachment; filename=BOM-$project->project_name.xls");#ชื่อไฟล์
?>

<html xmlns:o="urn:schemas-microsoft-com:office:office" xmlns:x="urn:schemas-microsoft-com:office:excel"
    xmlns="http://www.w3.org/TR/REC-html40">

<HTML>

<HEAD>

    <meta http-equiv="Content-type" content="text/html; charset=utf-8" />

</HEAD>

<BODY>
    <TABLE x:str>
        <TR>
           <td></td>
           <td></td>
           <td></td>
           <td></td>
           <td></td>
           <td></td>
           <td></td>
           <td></td>
        </TR>
        <TR>
            <td></td>
            <td></td>
            <td></td>
            <td colspan="2"><center>{{$project->project_name}}</center></td>
            <td></td>
            <td></td>
            <td></td>
         </TR>
         <TR>
            <td colspan="2">Customer:  {{$project->Customer}}</td>
           
            <td></td>
            <td></td>
            <td></td>
            <td>Date: <?php
                $create_at=$project->create_at;
                $create_at_split = explode("-",$create_at)
              ?> {{$create_at_split[2]}}/{{$create_at_split[1]}}/{{$create_at_split[0]}}</td>
            <td></td>
            <td></td>
         </TR>
         <TR>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
         </TR>
         <TR>
            <td colspan="2">BOM list for {{$project->number_of_machines}} machine</td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
         </TR>
         <TR>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
         </TR>
         <TR>
            <td colspan="2">All Module</td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
         </TR>
         <TR>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
         </TR>
    </TABLE>
    <table width="3000" border="1" style="font-size: 11px;" >
        <tr >
          <th width="35" style="font-size: 11px;"><center>Item No.</center></th>
          <th width="40" style="font-size: 11px;"><center>Module</center></th> 
          <th width="60" style="font-size: 11px;"><center>Supplier</center></th>
          <th width="120" style="font-size: 11px;"><center>Part No.</center></th>
          <th style="font-size: 11px;"><center>Description</center></th> 
          <th width="10" style="font-size: 11px;"><center>Qty</center></th>
          <th width="80" style="font-size: 11px;"><center>Price</center></th>
          <th width="80" style="font-size: 11px;"><center>Total Price</center></th> 
          <th width="80" style="font-size: 11px;" ><center>Stock In</center></th>
          <th width="150" style="font-size: 11px;" ><center>Remark</center></th> 
        </tr>
        <?php $Sub_Total = 0 ?>
        
        @foreach ($bom as $Boms)  
          <tr >
            <td ><center> {{$loop->iteration}}</center></td>
            <td ><center>{{$Boms->module}}</center></td>
            <td ><center>{{$Boms->supplier}}</center></td>
            <td >{{$Boms->part_no}}</td>
            <td >{{$Boms->description}}</td>
            <td align="right"><center>{{$Boms->qty}}</center></td>
            <td align="right" ><?php
              $number=$Boms->pirce;
              echo number_format( $number , 2 )."";
              ?></td>
            <td align="right">
              <?php
              $number2=$Boms->pirce*$Boms->qty;
              echo number_format( $number2 , 2 )."";
              ?></td> 
              <td>
                {{$Boms->in_stock}}
            </td>
            <?php
            $remark=$Boms ->remark;
            $remark_split = explode("\n",$remark)
            ?>
            <td >@foreach ($remark_split as $remark_splits)
                {{$remark_splits}}<br>
                @endforeach
            </td> 
               
          </tr>
          <?php $Sub_Total += $Boms->pirce*$Boms->qty ?>
        @endforeach
      
       
        <tr >
          <td ></td>
          <td ></td>
          <td ></td>
          <td ></td>
          <td ></td>
          <td ></td>
          <td align="right">Sub Total</td>
          <td align="right"><?php
            
            echo number_format( $Sub_Total , 2 );
            ?></td>
            <td ></td>
           
        </tr>
        <tr >
          <td ></td>
          <td ></td>
          <td ></td>
          <td ></td>
          <td ></td>
          <td ></td>
          <td align="right">Vat</td>
          <td align="right"><?php
            $vat=$Sub_Total*7/100;
            echo number_format( $vat  , 2 );
            ?></td>
            <td ></td>
           
        </tr>
        <tr >
          <td ></td>
          <td ></td>
          <td ></td>
          <td ></td>
          <td ></td>
          <td ></td>
          <td align="right">Total</td>
          <td align="right"><?php
            $total=$Sub_Total+$vat;
            echo number_format( $total , 2 );
            ?></td>
            <td ></td>
           
        </tr>
        
      </table>
      

</BODY>

</HTML>