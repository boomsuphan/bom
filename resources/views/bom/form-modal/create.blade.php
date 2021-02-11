<!-- Button trigger modal -->
<button type="button" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#exampleModalCenter">
    Create BOM
</button>
<!-- Modal -->
<div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog"
    aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalCenterTitle">Create BOM</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form method="POST" action="{{ url('/create_bom') }}" accept-charset="UTF-8" class="form-horizontal"
                enctype="multipart/form-data">
                {{ csrf_field() }}
                <div class="modal-body">
                    <div class="form-group">
                        <label for="exampleFormControlSelect1"><strong>Select</strong></label>
                        <input type="text" name="module" class="form-control" id="exampleFormControlInput1"
                            list="module" autocomplete="off" required>

                        <datalist id="module">
                            @foreach ($bom as $boms)
                                <option value="{{$boms->module}}">
                            @endforeach
                        </datalist>
                    </div>
                    <div class="d-none">
                        <label for="exampleFormControlSelect1"><strong>Project_id</strong></label>
                        <input type="number" name="project_id" class="form-control" id="exampleFormControlInput1"
                            placeholder="" value="{{$project->id}}">
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="submit" class="btn btn-primary">Create</button>
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                </div>
            </form>
        </div>
    </div>
</div>