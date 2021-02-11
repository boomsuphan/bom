<!-- Button trigger modal -->
<button type="button" class="btn btn-success btn-sm" data-toggle="modal" data-target="#exampleModal1">
    confirm
</button>
<form action="{{ url('/') }}/project/{{ $project->id }}/confirm" method="POST">
    {{ csrf_field() }}
    {{ method_field('PUT') }}
<!-- Modal -->
<div class="modal fade" id="exampleModal1" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
    aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">comfirm</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                Confirm the part of the BOM Project {{ $project->project_name }}.
                <div class="d-none">
                    <input name="ses" type="text" value="{{$_SESSION["users"]}}">
                    <input name="project_status" type="text" value="Success">
                    <input name="success_at" type="date" id="today">
                </div>
            </div>
            <div class="modal-footer">

               <button type="submit" class="btn btn-primary">comfirm</button>
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>
</form>
<script>
    let today = new Date().toISOString().substr(0, 10);
    // or...
    document.querySelector("#today").value = today;
    document.querySelector("#today2").valueAsDate = new Date();
</script>