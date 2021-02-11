<button type="button" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#CreateBomdetail" id="Div-none"><i
    class="fas fa-plus-circle"> </i> &nbsp;Add
</button>
<!-- Modal -->
<div class="modal fade" id="CreateBomdetail" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle"
aria-hidden="true">
<div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title" id="exampleModalCenterTitle">ADD Part</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
        <form method="POST" action="{{ url('/create_bomdetail_new') }}" accept-charset="UTF-8"
            class="form-horizontal" enctype="multipart/form-data">
            {{ csrf_field() }}
            <div id="dowp">
                <div class="modal-body">
                    <br>
                    <div class="form-group">
                        <div class="row">
                            <div class="col-10">
                                <input class="d-none" type="text" id="Position" class="form-control" placeholder=""
                                    value="{{$Bom->module}}">
                                <label for="exampleFormControlSelect1"><strong>Supplier</strong></label>
                                <input list="browsers" autocomplete="off" name="supplier" class="form-control"
                                    id="Supplier" onchange="showpart_no()" required>
                                <datalist id="browsers">
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
                            <div class="col-10">
                                <label for="exampleFormControlSelect1"><strong>Part No.</strong></label>
                                <input list="part_datalist" class="form-control" name="part_no" id="part_no"
                                onchange="Showdescription()" autocomplete="off" required>
                                <datalist id="part_datalist">
                                    <option>
                                </datalist>
                                @forelse ($Part_last as $Part_lasts)
                                <input class="d-none" value="{{$Part_lasts->id+1}}" name="part_id" type="number"
                                    id="part_id" class="form-control" placeholder="">
                                @empty
                                <input class="d-none" value="1" name="part_id" type="number" id="part_id"
                                    class="form-control" placeholder="">
                                @endforelse
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="row">
                            <div class="col-10">
                                <label for="exampleFormControlInput1"><strong>Description</strong></label>
                                <textarea class="form-control" name="description" id="dec" rows="3"></textarea>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-3">
                            <div class="form-group">
                                <label for="exampleFormControlInput1"><strong>Qty</strong></label>
                                <input type="number" name="qty" class="form-control" placeholder="" value="1">
                            </div>
                        </div>
                        <div class="col-5">
                            <div class="form-group">
                                <label for="exampleFormControlInput1"><strong>Price</strong></label>
                                <input type="number" name="pirce" class="form-control" id="price" value="1"
                                step=0.01  placeholder="">
                            </div>
                            <div class="d-none">
                                <label for="exampleFormControlInput1"><strong>bom_id</strong></label>
                                <input type="number" name="bom_id" class="form-control"
                                    id="exampleFormControlInput1" value="{{$Bom->id}}">
                                <input type="text" name="position" class="form-control"
                                    id="exampleFormControlInput1" value="{{$Bom->module}}">
                                <input type="number" name="user_id" class="form-control"
                                    id="exampleFormControlInput1" value="{{$_SESSION["users"]}}">
                                <input type="text" name="bom_name" class="form-control"
                                    id="exampleFormControlInput1" value="{{$Bom->module}}">
                            </div>
                        </div>
                        <div class=" col-4">
                            <br><br>
                            <input type='hidden' value='' name='in_stock'>
                            <input type='checkbox' value='In Stock' name='in_stock'>

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
function showsuppliers() {
    //PARAMETERS
    var Position = $("#Position").val();
    var url = "{{ url('/') }}/api/part_api/" + Position + "/";
    var callback = function (result) {
        $("#Supplier").empty();
        for (var i = 0; i < result.length; i++) {
            $("#Supplier").append(
                $('<option></option>')
                    .attr("value", "" + result[i].supplier)
                    .html("" + result[i].supplier)
            );
        }
        showpart_no();
    };
    //CALL AJAX
    ajax(url, callback);
}

function showpart_no() {
    //INPUT
    var Supplier = $("#Supplier").val();
    //PARAMETERS
 
    var url = "{{ url('/') }}/api/part_api/" + Supplier + "/part_no";
    var callback = function (result)
    {
        //console.log(result);
        $("#part_datalist").empty();
        for (var i = 0; i < result.length; i++) 
        {
            $("#part_datalist").append(
                $('<option>')
                    .attr("value", "" + result[i].part_no)

            );
        }
        Showdescription();

    };
    //CALL AJAX
    ajax(url, callback);
}
function Showdescription() 
{
    //INPUT

    var part_no = $("#part_no").val();
    //PARAMETERS
    var res = encodeURIComponent(part_no);
    var url = "{{ url('/') }}/part_api/" + res + "/descriptions";
    var callback = function (result) 
    {
        //console.log(result);
        for (var i = 0; i < result.length; i++) 
        {
            $("#dec").val(result[i].description);
        }
    };
    ShowPrice();
    //CALL AJAX
    ajax(url, callback);
}

function ShowPrice() {
    //INPUT

    var part_no = $("#part_no").val();
    var res2 = encodeURIComponent(part_no);
    //PARAMETERS
    var url = "{{ url('/') }}/part_api/" + res2 + "/price";
    var callback = function (result) {
        //console.log(result);
        for (var i = 0; i < result.length; i++) {
            $("#price").val(result[i].pirce);
        }
    };
    ShowPart_id()
    //CALL AJAX
    ajax(url, callback);
}
function ShowPart_id() {
    //INPUT

    var part_no = $("#part_no").val();
    //PARAMETERS
    var url = "{{ url('/') }}/part_api/" + part_no + "/part_id";
    var callback = function (result) {
        //console.log(result);
        for (var i = 0; i < result.length; i++) {
            $("#part_id").val(result[i].id);
        }
    };
    //CALL AJAX
    ajax(url, callback);
}
</script>