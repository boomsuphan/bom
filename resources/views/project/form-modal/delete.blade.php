   <!-- Button trigger modal -->
<button type="button" class="btn btn-danger btn-sm" data-toggle="modal" data-target="#delete_project{{$projects->id}}">
    <i class="fas fa-trash"></i>
</button>

<!-- Modal -->
<div class="modal fade" id="delete_project{{$projects->id}}" tabindex="-1" role="dialog"
    aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Confirm Delete</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                Confirm the deletion of  Project {{$projects->project_name}}.
            </div>

            <div class="modal-footer">
                <form method="POST" action="{{ url('/project' . '/' . $projects->id) }}"
                    accept-charset="UTF-8" style="display:inline">
                    {{ method_field('DELETE') }}
                    {{ csrf_field() }}
                    <button type="submit" class="btn btn-danger">Delete</button>
                </form>
                <button type="button" class="btn btn-secondary"
                    data-dismiss="modal">Close</button>

            </div>
        </div>
    </div>
</div>