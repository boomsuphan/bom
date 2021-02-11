<button type="button" class="btn btn-success btn-sm" data-toggle="modal"
                    data-target="#CreatePart">
                    <strong>Add</strong>
                </button>
                <!-- Modal ADD-->
                <div class="modal fade" id="CreatePart" tabindex="-1" role="dialog"
                    aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalCenterTitle">Add</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <form method="POST" action="{{ url('/create_part') }}" accept-charset="UTF-8"
                                class="form-horizontal" enctype="multipart/form-data">
                                {{ csrf_field() }}
                                <div class="modal-body">
                                    <div class="form-group">
                                        <label for="exampleFormControlInput1"><strong>Supplier</strong></label>
                                        <input type="text" name="supplier" class="form-control"
                                            id="exampleFormControlInput1" placeholder="">
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleFormControlInput1"><strong>Part No.</strong></label>
                                        <input type="text" name="part_no" class="form-control"
                                            id="exampleFormControlInput1" placeholder="">
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleFormControlInput1"><strong>Description</strong></label>
                                        <input type="text" name="description" class="form-control"
                                            id="exampleFormControlInput1" placeholder="">
                                    </div>
                                    <div class="row">
                                        <div class="col-3">
                                            <div class="form-group">
                                                <label for="exampleFormControlInput1"><strong>Pirce</strong></label>
                                                <input type="number" name="pirce" class="form-control"
                                                    id="exampleFormControlInput1" placeholder="">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                    <button type="submit" class="btn btn-primary">Add</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>