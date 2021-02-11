<?php
$pro=$bom->Project->project_name;
$mod =$bom->module;
header("Content-Type: application/vnd.ms-excel");
header("Content-Disposition: attachment; filename=BOM-$pro-$mod.xls");#ชื่อไฟล์
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
            <td colspan="2"><center>{{$bom->Project->project_name}}</center></td>
            <td></td>
            <td></td>
            <td></td>
         </TR>
         <TR>
            <td colspan="2">Customer:  {{$bom->Project->Customer}}</td>
           
            <td></td>
            <td></td>
            <td></td>
            <td>Date:   
                <?php
                $create_at=$bom->Project->create_at;
                $create_at_split = explode("-",$create_at)
               
            ?>{{$create_at_split[2]}}/{{$create_at_split[1]}}/{{$create_at_split[0]}}</td>
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
            <td colspan="2">BOM list for {{$bom->Project->number_of_machines}} Machine</td>
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
            <td colspan="2">Module : {{$bom->module}}</td>
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
    <table width="780" border="1"  >
        <tr  style="font-size: 11px;">
          <th width="35"  style="font-size: 11px;" ><center>Item No.</center></th>
          <th width="60" style="font-size: 11px;"><center>Supplier</center></th>
          <th width="140" style="font-size: 11px;"><center>Part No.</center></th>
          <th style="font-size: 11px;"><center>Description</center></th> 
          <th width="40" style="font-size: 11px;"><center>Qty</center></th>
          <th width="80" style="font-size: 11px;"><center>Price</center></th>
          <th width="80" style="font-size: 11px;"><center>Total Price</center></th> 
          <th width="80" style="font-size: 11px;" ><center>Stock In</center></th>
          <th width="150" style="font-size: 11px;" ><center>Remark</center></th> 
        </tr>
        <?php $Sub_Total = 0 ?>
    @foreach ($boms as $boms)
    <tr>
      <td><center>{{$loop->iteration}}</center></td>
      <td><center>{{$boms->supplier}}</center></td>
      <td>{{$boms->part_no}}</td>
      <td>{{$boms->description}}</td>
      
      <td align="right" ><center>{{$boms->qty}}</center></td>
      <td align="right">
          <?php
          $pirce=$boms->pirce;
          echo number_format( $pirce , 2 )."";
          ?></td>
      <td align="right">
          <?php
          $sum11=$boms->pirce*$boms->qty;
          echo number_format( $sum11 , 2 )."";
          ?>
      </td>
      <td>
        {{$boms->in_stock}}
    </td>
    <?php
    $remark=$boms ->remark;
    $remark_split = explode("\n",$remark)
    ?>
    <td >
        @foreach ($remark_split as $remark_splits)
        {{$remark_splits}}<br>
        @endforeach
    </td> 
  </tr>
  <?php $Sub_Total += $boms->qty*$boms->pirce ?>
   @endforeach
  <tr>
      <td></td>
      <td></td>    
      <td></td>    
      <td></td>    
      <td></td>   
      <td align="right">Sub Total </td>
      <td align="right"><?php
        
          echo number_format(  $Sub_Total , 2 );
          ?></td>
          <td></td>    
          <td></td>            
  </tr>
 
  <tr>
      <td></td>
      <td></td>    
      <td></td>    
      <td></td>    
      <td></td>    
      <td align="right">Total Price</td>    
      <td align="right"><?php
          $total=$Sub_Total;
          echo number_format( $total , 2 );
          ?></td>    
          <td></td>    
          <td></td>    
  </tr>           
  </table>
      

</BODY>

</HTML>