                 <!-- Button trigger modal -->
                 <button type="button" class="btn btn-danger  btn-sm" data-toggle="modal" data-target="#exampleModal">
                    unconfirm
                </button>
                <form action="{{ url('/') }}/bom/{{ $Bom->id }}/confirm" method="POST">
                    {{ csrf_field() }}
                    {{ method_field('PUT') }}
                <!-- Modal -->
                <div class="modal fade " id="exampleModal" tabindex="-1" role="dialog"
                    aria-labelledby="exampleModalLabel" aria-hidden="true" style="color:black;">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">Comfirm</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                UnConfirm the part of the BOM Vision.
                                <div class="d-none">
                                    <input name="bom_status" type="text" value="">
                                    <input name="bomsuccess_at" type="date" value=""    >
                                </div>
                              
                            </div>
                            <div class="modal-footer">

                                <a href="C:\Users\MINT\Documents\Zinecode Project\view\bom\bomlist.html"><button
                                        type="submit" class="btn btn-primary">comfirm</button></a>
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                            </div>
                        </div>
                    </div>
                </div>
                </form>