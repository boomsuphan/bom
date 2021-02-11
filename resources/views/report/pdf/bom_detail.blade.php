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
      font-size: 11px;
  }

  @page {}

  @media print {

      html,
      body {
          width: 210mm;
          height: 297mm;
         
      }
  }
  p{
    font-size: 14px;
  }
  table, th, td {
  border: 1px solid black;
 
  border-collapse: collapse;
}
</style>
<body>

    <center><p > {{$bom->Project->project_name}}</p></center>
    <p > Customer : {{$bom->Project->Customer}}  
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
          
        <?php
            $create_at=$bom->Project->create_at;
            $create_at_split = explode("-",$create_at)
           
        ?>
         Date : {{$create_at_split[2]}}/{{$create_at_split[1]}}/{{$create_at_split[0]}}
    </p>

    <p> BOM list for {{$bom->Project->number_of_machines}} Machine</p>
    <p>Module : {{$bom->module}}</p>
<table width="780"   >
      <tr  style="font-size: 11px;">
        <th width="35"  style="font-size: 8px;" ><center>Item No.</center></th>
        <th width="60" style="font-size: 8px;"><center>Supplier</center></th>
        <th width="140" style="font-size: 8px;"><center>Part No.</center></th>
        <th style="font-size: 8px;"><center>Description</center></th> 
        <th width="40" style="font-size: 8px;"><center>Qty</center></th>
        <th width="60" style="font-size: 8px;"><center>Price</center></th>
        <th width="60" style="font-size: 8px;"><center>Total Price</center></th> 
        <th width="80" style="font-size: 8px;" ><center>Stock In</center></th>
          <th width="150" style="font-size: 8px;" ><center>Remark</center></th> 
      </tr>
      <?php $Sub_Total = 0 ?>
  @foreach ($boms as $boms)
  <tr>
    <td><center>{{$loop->iteration}}</center></td>
    <td><center>{{$boms->supplier}}</center></td>
    <td>{{$boms->part_no}}</td>
    <td>{{$boms->description}}</td>
    
    <td align="right"><center>{{$boms->qty}}<center></td>
    <td align="right">
        <?php
        $pirce=$boms->pirce;
        echo number_format( $pirce , 2 )."";
        ?></td>
    <td align="right">
        <?php
        $boms->qty*$boms->pirce;
        echo number_format( $boms->qty*$boms->pirce , 2 )."";
        ?>
    </td>
    <td>
        {{$boms->in_stock}}
    </td>
    <?php
    $remark=$boms ->remark;
    $remark_split = explode("\n",$remark)
    ?>
    <td >@foreach ($remark_split as $remark_splits)
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
        
        echo number_format( $Sub_Total , 2 );
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
        $Total=$Sub_Total;
        echo number_format( $Total , 2 );
        ?></td>  
        <td></td>   
        <td></td>         
</tr>           
</table>

</body>
