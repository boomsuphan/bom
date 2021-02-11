<div class="table-responsive">
<table class="table" border="1px" style=" color:black; font-size: 12px">
    <thead class="bg-success">
        <tr>
            <th scope="col" style="width: 1%"><strong>No.</strong></th>
            <th scope="col"><strong>Supplier</strong></th>
            <th scope="col"><strong>Part No.</strong></th>
            <th scope="col"><strong>Description</strong></th>
            <th scope="col" style="width: 9%"><strong>Price</strong></th>

            <th scope="col" style="width: 5%"><strong>Action</strong></th>
        </tr>
    </thead>
    <tbody>
        @foreach ($part as $parts)
        <tr>
            <th scope="row">{{$loop->iteration}}</th>
            <td>{{$parts->supplier}}</td>
            <td>{{$parts->part_no}}</td>
            <td>{{$parts->description}}</td>
            <td align="right"><?php
                $number=$parts->pirce;
                $number= number_format( $number , 2 );
                echo  $number;
                ?> </td>
            <td>
                @include ('/part/form-modal/edit') <!--   แก้ไขปุ่มและฟอร์มได้จาก resources/views/part/table/table_part   (Ohm) -->   

               
</td>
</tr>
@endforeach




</tbody>
</table>
</div>
{{ $part->links() }}