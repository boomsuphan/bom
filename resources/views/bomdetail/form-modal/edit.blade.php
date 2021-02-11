<button type="button" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#exampleModalCenter{{$BomDetail->id}}">
    <i class="fas fa-edit"></i>
</button>
<!-- Modal -->
<div class="modal fade" id="exampleModalCenter{{$BomDetail->id}}" tabindex="-1" role="dialog"
    aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content  text-dark">
            <form method="POST" action="{{ url('/bomdetail' . '/' . $BomDetail->id) }}" accept-charset="UTF-8"
                class="form-horizontal" enctype="multipart/form-data">
                {{ method_field('PATCH') }}
                {{ csrf_field() }}

                <div class="modal-header ">
                    <h5 class="modal-title" id="exampleModalCenterTitle">Edit Part</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div id="dowp">
                    <div class="modal-body">

                        <br>
                        <div class="form-group">
                            <div class="row">
                                <div class="col-8">
                                   
                                    <label for="exampleFormControlSelect1"><strong>Supplier</strong></label>
                                    <input list="browsers" autocomplete="off" name="supplier" id="edit_Supplier3{{$BomDetail->id}}" class="form-control"
                                        id="Supplier" onchange="editpart_no2({{$BomDetail->id}})"  value="{{$BomDetail->supplier}}" required>
                                    <datalist id="browsers">
                                        <option
                                            value="{{$BomDetail->supplier}}">
                                        @foreach ($supplier as $suppliers)
                                            <option value="{{$suppliers->supplier}}">
                                        @endforeach
                                    </datalist>
                                    

                                </div>
                                {{ csrf_field()}}
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="row">
                                <div class="col-8">
                                    <label for="exampleFormControlSelect1"><strong>Part No.</strong></label>
                                    <select type="number" class="form-control" id="edit_part_no2{{$BomDetail->id}}"
                                        onchange="editdescription({{$BomDetail->id}})" name="part_No"  required>

                                        <option value="{{ $BomDetail->part_no}}">
                                            {{$BomDetail->part_no}}
                                        </option>
                                        <option></option>
                                    </select>
                                    <input class="d-none"
                                        value="{{ isset($BomDetail->Part->id) ? $BomDetail->Part->id : '' }}"
                                        name="part_id" type="number" id="edit_part_id" class="form-control"
                                        placeholder="">
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="row">
                                <div class="col-8">
                                    <label for="exampleFormControlInput1"><strong>Description</strong></label>
                                    <textarea class="form-control" name="description" id="edit_dec2{{$BomDetail->id}}"
                                        rows="3">{{$BomDetail->description}}</textarea>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-3">
                                <div class="form-group">
                                    <label for="exampleFormControlInput1"><strong>Qty</strong></label>
                                    <input type="number" name="qty" class="form-control" placeholder=""
                                        value="{{$BomDetail->qty}}">
                                </div>
                            </div>
                            <div class="col-4">
                                <div class="form-group">
                                    <label for="exampleFormControlInput1"><strong>Price</strong></label>
                                    <input type="number" name="pirce" class="form-control" step=0.01
                                        id="edit_price2{{$BomDetail->id}}"
                                        value="{{ $BomDetail->pirce }}" placeholder="">
                                </div>
                                <div class="d-none">
                                    <label for="exampleFormControlInput1"><strong>bom_id</strong></label>
                                    <input type="number" name="bom_id" class="form-control"
                                        id="exampleFormControlInput1" value="{{$Bom->id}}">
                                    <input type="number" name="user_id" class="form-control"
                                        id="exampleFormControlInput1" value="{{$_SESSION["users"]}}">
                                </div>
                            </div>
                            <div class="col-1"></div>
                            <div class=" col-4">
                                <br><br>
                                @if($BomDetail->in_stock =='In Stock')
                                <input type='hidden' value='' name='in_stock'>
                                <input type='checkbox' value='In Stock' name='in_stock' checked>
                                @else
                                <input type='hidden' value='' name='in_stock'>
                                <input type='checkbox' value='In Stock' name='in_stock'>
                                @endif


                                <label class="form-check-label" for="exampleCheck1"><strong>In
                                        Stock</strong></label>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="submit" class="btn btn-primary">Add</button>
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
<script>


    function editpart_no2(id) {
        //INPUT
        var Supplier = $("#edit_Supplier3" + id).val();
        //PARAMETERS
        var url = "{{ url('/') }}/api/part_api/" + Supplier + "/part_no";
        var callback = function (result) {
            //console.log(result);
            $("#edit_part_no2" + id).empty();
            for (var i = 0; i < result.length; i++) {
                $("#edit_part_no2" + id).append(
                    $('<option></option>')
                        .attr("value", "" + result[i].part_no)
                        .html("" + result[i].part_no)
                );
            }
            editdescription(id);

        };
        //CALL AJAX
        ajax(url, callback);
    }
    function editdescription(id) {
        //INPUT

        var part_no = $("#edit_part_no2" + id).val();
        //PARAMETERS
        var url = "{{ url('/') }}/part_api/" + part_no + "/descriptions";
        var callback = function (result) {
            //console.log(result);
            for (var i = 0; i < result.length; i++) {
                $("#edit_dec2" + id).val(result[i].description);
            }
        };
        editPrice(id);
        //CALL AJAX
        ajax(url, callback);
    }

    function editPrice(id) {
        //INPUT

        var part_no = $("#edit_part_no2" + id).val();
        //PARAMETERS
        var url = "{{ url('/') }}/part_api/" + part_no + "/price";
        var callback = function (result) {
            //console.log(result);
            for (var i = 0; i < result.length; i++) {
                $("#edit_price2" + id).val(result[i].pirce);
            }
        };
        EditPart_id(id)
        //CALL AJAX
        ajax(url, callback);
    }
    function EditPart_id(id) {
        //INPUT

        var part_no = $("#edit_part_no2" + id).val();
        //PARAMETERS
        var url = "{{ url('/') }}/part_api/" + part_no + "/part_id";
        var callback = function (result) {
            //console.log(result);
            for (var i = 0; i < result.length; i++) {
                $("#edit_part_id").val(result[i].id);
            }
        };
        //CALL AJAX
        ajax(url, callback);
    }
</script>