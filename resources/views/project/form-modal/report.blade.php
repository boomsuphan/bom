
<!-- ปุ่มโมดอล report -->
<button type="button" class="btn btn-warning btn-sm" data-toggle="modal"
    data-target="#report{{$projects->id}}">
    <i class="fas fa-print"></i>
</button>

<!-- ฟอร์มโมดอล -->
<div class="modal fade text-dark" id="report{{$projects->id}}" tabindex="-1" role="dialog"aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header bg-success text-white">
                <h5 class="modal-title" id="exampleModalLabel">Report</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                Print Report all module Project {{$projects->project_name}}
                <br> <br>
                <a href="{{ url('/reportbom/'. $projects->id.'/excel') }}">
                    <button type="button" class="btn btn-warning">
                        <strong>EXCEL</strong>
                    </button>
                </a>
                <a href="{{ url('/reportbom/'. $projects->id.'/pdf') }}">
                    <button type="button" class="btn btn-warning">
                        <strong>PDF</strong>
                    </button>
                </a>
            </div>
        </div>
    </div>
</div>