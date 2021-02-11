<div class="table-responsive">
<table class="table table-hover table-sm"  border="1px" style="color: black;font-size: 13px">
    <thead class="bg-success ">
        <tr>
            <th scope="col" style="width: 2%"><strong>No.</strong></th>
            <th scope="col"><strong>Supplier</strong></th>
            <th scope="col" style="width: 18%"><strong>Part No.</strong></th>
            <th scope="col" style="width: 20%"><strong>Description</strong></th>
            <th scope="col" style="width: 6%" ><center><strong>Qty</strong></center></th>
            <th scope="col" style="width: 10%"><center><strong>Price</strong></center></th>
            <th scope="col" style="width: 10%"><center><strong>Total Price</strong></center></th>
            <th scope="col" style="width: 10%"><center><strong>In Stock</strong></center></th>
            <th scope="col"><center><strong>Users</strong></center></th>
            <th scope="col" style="width: 10%"><center><strong>Action</strong></center></th>
            <th scope="col"  style="width:20%"><center><strong>Remark</strong></center></th>
        </tr>
    </thead>
    <tbody>
        <?php $Sub_Total = 0 ?>
        <?php $total_Qty = 0 ?>
        <?php $Total_Item  = 0 ?>
        @foreach ($BomDetail as $BomDetail)
        <tr>
            <th scope="row" ><center>{{$loop->iteration}}</center></th>
            <td> {{ isset($BomDetail->supplier) ?  $BomDetail->supplier : '' }}</td>
            <td>{{ isset($BomDetail->part_no) ? $BomDetail->part_no : '' }}</td>
            <td>{{ isset($BomDetail->description) ? $BomDetail->description : '' }}</td>
            <td align="center"> {{$BomDetail->qty}}</td>
            <td align="right">
                <?php
                $number=$BomDetail->pirce;
                echo number_format( $number , 2 )."";
                ?>
            </td>
            <td align="right">
                <?php
                $number1=$BomDetail->pirce*$BomDetail->qty;
                echo number_format( $number1 , 2 )."";
                ?>
            </td>
            @if($BomDetail->in_stock =='In Stock')
            <td style="color:green;"> <strong>In Stock</strong></td>
            @else
            <td style="color:red"></td>
            @endif
            <td> {{$BomDetail->users->name_user}}</td>
            <td>
                @include ('bomdetail/form-modal/edit')
                @include ('bomdetail/form-modal/delete')
            </td>
            <td>
                @include ('bomdetail/form-modal/remark')
            </td>
        </tr>
        <?php $Sub_Total += $BomDetail->pirce*$BomDetail->qty ?>
        <?php $total_Qty += $BomDetail->qty ?>
        <?php $Total_Item += $loop->depth ?>
        @endforeach
        <tr class="bg-warning">
            <th colspan="2">Total Item {{$Total_Item}}</th>
            <td></td>
            <td align="right"><strong>total Qty</strong> </td>
            <td align="center" >{{$total_Qty}} </td>

            <td  align="right"> <strong>Sub Total </strong></td>
             <td align="right"><?php
                $number2=$Sub_Total;
                $number3= number_format( $number2 , 2 );
                echo  $number3;
                ?> </td>
            <td> </td>
            <td> </td>
            <td> </td>
            <td> </td>
        </tr>
    </tbody>
</table>
</div>
<script>
  

document.getElementById("Total_Item").innerHTML = '{{ $Total_Item }}';
document.getElementById("total_Qty").innerHTML = '{{ $total_Qty }}';
document.getElementById("Sub_Total").innerHTML =  '{{$number3}} ฿'  ;  
document.getElementById("Total_Item_mobile").innerHTML = '{{ $Total_Item }}';
document.getElementById("total_Qty_mobile").innerHTML = '{{ $total_Qty }}';
document.getElementById("Sub_Total_mobile").innerHTML = '{{ $number3 }} ฿';  

</script>