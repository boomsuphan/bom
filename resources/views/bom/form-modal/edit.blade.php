<!-- Button trigger modal -->
<button type="button" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#bomedit{{$Bom->id}}">
    <i class="fas fa-edit"></i>
</button>
<!-- Modal -->
<div class="modal fade" id="bomedit{{$Bom->id}}" tabindex="-1" role="dialog"
    aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalCenterTitle">Edit Bom</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form method="POST" action="{{ url('/bom' . '/' . $Bom->id) }}" accept-charset="UTF-8" class="form-horizontal" enctype="multipart/form-data">
                {{ method_field('PUT') }}
                {{ csrf_field() }}
                <div class="modal-body">
                    <div class="form-group">
                        
                        <input type="text" name="module" class="form-control" id="exampleFormControlInput1"
                            list="module" autocomplete="off" value="{{$Bom->module}}" required>

                        <datalist id="module">
                                <option value="{{$Bom->module}}">
                            @foreach ($bom as $boms)
                                <option value="{{$boms->module}}">
                            @endforeach
                        </datalist>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="submit" class="btn btn-primary">Edit</button>
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>

                </div>
            </form>
        </div>
    </div>
</div>