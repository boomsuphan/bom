<div class="table-responsive-xl">
<table class="table table-hover table-sm text-dark" border="1px">
    <tbody style="color:black;font-size: 13px;">
        <?php $sum_subtotal = 0 ?>
        <?php $sum_unit = 0 ?>
        @foreach ($project->Bom as $Bom)
       
            <tr class="bg-secondary " style="color:black; " >
               <a> <td>
                    <center><strong>{{$Bom->module}}</strong></center>
               </a> </td>
                @if($Bom->bom_status =='Success')
                    <td style="color:lime"><strong>Success</strong> </td>
                @else
                    <td style="color:red"><strong>In Process </strong></td>
                @endif
                <td>
                    {{$Bom->bomsuccess_at}}
                </td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td>
                    <a href="{{ url('/bomdetail/' . $Bom->id) }}">
                        <button type="button" class="btn btn-success btn-sm"><i class="fas fa-search"></i></button>
                    </a>
                    @include ('bom/form-modal/edit')
                    @include ('bom/report/report')
                    @include ('bom/form-modal/delete')
                </td>
            </tr>
        
        <tr>
            <th scope="col" style="width: 7%">
                <center><strong>Item No.</strong></center>
            </th>
            <th scope="col">
                <center><strong>Supplier</strong></center>
            </th>
            <th scope="col" style="width: 20%">
                <center><strong>Part No.</strong></center>
            </th>
            <th scope="col" style="width: 20%">
                <center><strong>Description</strong></center>
            </th>
            <th scope="col" style="width: 4%">
                <center><strong>Qty</strong></center>
            </th>
            <th scope="col" style="width: 7%">
                <center><strong>Price</strong></center>
            </th>
            <th scope="col" style="width: 7%">
                <center><strong>Total Price</strong></center>
            </th>
            <th scope="col" style="width: 7%; ">
                <center><strong>In Stock</strong></center>
            </th>
            <th scope="col" style="width: 16%; ">
                <center><strong>Users</strong></center>
            </th>
        </tr>
        
        <?php $sum_total = 0 ?>
        <?php $unit = 0 ?>
        @forelse ($Bom->BomDetail as $BomDetail)
        <tr>
            <th scope="row">
                <center>{{$loop->iteration}}</center>
            </th>
            <td> <center> {{$BomDetail->supplier}}</center></td>
            <td>{{$BomDetail->part_no}} </td>
            <td>{{$BomDetail->description}} </td>
            <td align="center"> {{$BomDetail->qty}}</td>
            <td align="right"> <?php
                $number=$BomDetail->pirce;
                echo number_format( $number , 2 )."";
                ?></td>
            <td align="right"> <?php
                $number2=$BomDetail->pirce*$BomDetail->qty;
                echo number_format( $number2 , 2 )."";
                ?></td>
            @if($BomDetail->in_stock =='In Stock')
            <td style="color:green;">
                <center><strong>In Stock</strong></center>
            </td>
            @else
            <td style="color:red"></td>
            @endif
            <td>
                <center>{{$BomDetail->users->name_user}}</center>
            </td>
        </tr>
        <?php $sum_total += $BomDetail->pirce*$BomDetail->qty ?>
        <?php $unit += $loop->depth-1 ?>
        @empty
        <tr>
            <td colspan="10">
                <center> No Information</center>
            </td>
        </tr>
        @endforelse
        <tr class="bg-warning">
            <th scope="row"></th>
            <td></td>

            <td></td>
            <td> </td>
            <td></td>
            <td>
                <center><strong>Sub Total</strong></center>
            </td>
            <td align="right"><?php
                $number3=$sum_total;
                echo number_format( $number3 , 2 )."";
                ?></td>
            <td></td>
            <td></td>
        </tr>
        <?php $sum_subtotal += $sum_total ?>
        <?php $sum_unit += $unit ?>
        @endforeach

        <tr class="bg-primary text-white">
            <td scope="row " colspan="2">Total Item : {{$sum_unit}}</td>
         
            <td></td>
            <td><strong> </strong></td>
            <td></td>
            <td>
                <center><strong>Total</strong></center>
            </td>
            <td align="right">
                <?php
                $number4=$sum_subtotal;
                echo number_format( $number4 , 2 )."";
                ?></td>
            <td></td>
            <td></td>
        </tr>
        <tr class="bg-primary text-white">
            <td scope="row " colspan="2"></td>
         
            <td></td>
            <td><strong> </strong></td>
            <td></td>
            <td>
                <center><strong>Vat</strong></center>
            </td>
            <td align="right">
                <?php
                $vat=$sum_subtotal*7/100;
                echo number_format( $vat , 2 )."";
                ?></td>
            <td></td>
            <td></td>
        </tr>
        <tr class="bg-primary text-white">
            <td scope="row " colspan="2"></td>
         
            <td></td>
            <td><strong> </strong></td>
            <td></td>
            <td>
                <center><strong>Amount Price</strong></center>
            </td>
            <td align="right">
                <?php
                $Amount=$sum_subtotal+$vat;
                echo number_format( $Amount , 2 )."";
                ?></td>
            <td></td>
            <td></td>
        </tr>
    </tbody>
</table>
</div>