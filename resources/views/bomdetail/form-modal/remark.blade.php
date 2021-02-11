@if($BomDetail->remark =='')
<button id="vv{{$BomDetail->id}}" onclick="myFunction({{$BomDetail->id}})"
    class="btn btn-warning btn-sm">Remark</button>
<form action="{{ url('/') }}/bomdetail_remark/{{ $BomDetail->id }}" method="POST">
    {{ csrf_field() }}
    {{ method_field('PUT') }}

    <p id="demo{{$BomDetail->id}}"></p>
</form>
@else

<form action="{{ url('/') }}/bomdetail_remark/{{ $BomDetail->id }}" method="POST">
    {{ csrf_field() }}
    {{ method_field('PUT') }}
    <textarea class="form-control"  name="remark" id="exampleFormControlTextarea1" rows="3">{{$BomDetail->remark}}&#10;#{{$_SESSION["name"]}} : </textarea>
    <br>
    <button type="submit" class="btn btn-warning btn-sm">Remark</button>
</form>
@endif

<script>
    function myFunction(id) {
        document.getElementById("demo" + id).innerHTML = '<textarea class="form-control" name="remark" id="exampleFormControlTextarea1" rows="3">#{{$_SESSION["name"]}} : </textarea><br><button type="submit" class="btn btn-warning">Remark</button>';
        $("#vv" + id).hide();
    }
</script>