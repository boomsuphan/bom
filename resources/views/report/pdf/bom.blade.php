<style>

  @font-face {
      font-family: 'THSarabunNew';
      font-style: normal;
      font-weight: normal;
      src: url("{{ asset('fonts/THSarabunNew.ttf') }}") format('truetype');
  }

  @font-face {
      font-family: 'THSarabunNew';
      font-style: normal;
      font-weight: bold;
      src: url("{{ asset('fonts/THSarabunNew Bold.ttf') }}") format('truetype');
  }

  @font-face {
      font-family: 'THSarabunNew';
      font-style: italic;
      font-weight: normal;
      src: url("{{ asset('fonts/THSarabunNew Italic.ttf') }}") format('truetype');
  }

  @font-face {
      font-family: 'THSarabunNew';
      font-style: italic;
      font-weight: bold;
      src: url("{{ asset('fonts/THSarabunNew BoldItalic.ttf') }}") format('truetype');
  }
  @font-face {
      font-family: 'upcfb';
      font-style: normal;
      font-weight: normal;
      src: url("{{ asset('fonts/tahomabd.ttf') }}") format('truetype');
  }
  body {
      font-family: "upcfb";
     
  }

  @page {}

  @media print {

      html,
      body {
          width: 210mm;
          height: 297mm;
          /*font-size : 16px;*/
      }
  }
  table, th, td {
  border: 1px solid black;
 font-size: 11px;
  border-collapse: collapse;
}
</style>

<center>
  <p style="font-size: 14px;"><strong>{{$project->project_name}}</strong></p>
</center>
<p style="font-size: 14px;">
  <strong>Customer:</strong> {{$project->Customer}}
  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
  
  <strong> Date:</strong>  <?php
  $create_at=$project->create_at;
  $create_at_split = explode("-",$create_at)
 
?>
{{$create_at_split[2]}}/{{$create_at_split[1]}}/{{$create_at_split[0]}}
</p>
<p style="font-size: 11px;">
  <strong>BOM list for {{$project->number_of_machines}} machine</strong>
</p>
<p style="font-size: 11px;">
  <strong>All Module</strong>
</p>
<table width="780"  style="font-size: 11px;" >
  <tr >
    <th width="35" style="font-size: 8px;"><center>Item No.</center></th>
    <th width="40" style="font-size: 8px;"><center>Module</center></th> 
    <th width="60" style="font-size: 8px;"><center>Supplier</center></th>
    <th width="120" style="font-size: 8px;"><center>Part No.</center></th>
    <th style="font-size: 8px;"><center>Description</center></th> 
    <th width="40" style="font-size: 8px;"><center>Qty</center></th>
    <th width="60" style="font-size: 8px;"><center>Price</center></th>
    <th width="60" style="font-size: 8px;"><center>Total Price</center></th>
    <th width="60" style="font-size: 8px;" ><center>Stock In</center></th>
        
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
        $number=$Boms->pirce*$Boms->qty;
        echo number_format( $number , 2 )."";
        ?></td>  
         <td>
          {{$Boms->in_stock}}
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

      echo number_format(      $Sub_Total , 2 );
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
      $vat = $Sub_Total *7/100;
      echo number_format(      $vat , 2 );
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
      $Total=$Sub_Total+$vat;
      echo number_format( $Total , 2 );
      ?></td>
      <td ></td>
     
  </tr>
  
</table>
