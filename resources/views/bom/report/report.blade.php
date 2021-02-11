<button type="button" class="btn btn-warning btn-sm" data-toggle="modal" data-target="#reportBom{{$Bom->id}}">
    <i class="fas fa-print"></i>
</button>
<!-- Modal -->
<div class="modal fade" id="reportBom{{$Bom->id}}" tabindex="-1" role="dialog"
    aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Select</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                Print Report  module {{$Bom->module}} Project sas<br><br>
                <a href="{{ url('/reportbomdetail/'. $Bom->id.'/excel') }}">
                    <button type="button" class="btn btn-warning">EXCEL</button></a>
                <a href="{{ url('/reportbomdetail/'. $Bom->id.'/pdf') }}">
                    <button type="button" class="btn btn-warning">PDF</button></a>
            </div>
        </div>
    </div>
</div>
