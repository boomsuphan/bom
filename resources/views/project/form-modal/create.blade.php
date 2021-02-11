<!-- ปุ่มโมดอล Create -->
<button type="button" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#CreateProject">
    Create Project
</button>
<!-- ฟอร์มโมดอล Create -->
<div class="modal fade " id="CreateProject" tabindex="-1" role="dialog"
    aria-labelledby="exampleModalCenterTitle" aria-hidden="true"
    style="color:black; font-weight: bold;">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content ">
            <div class="modal-header bg-success" style="color:white;">
                <h5 class="modal-title" id="exampleModalCenterTitle"><strong>Create BOM</strong> </h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form method="POST" name="form_create" action="{{ url('/create_project') }}" accept-charset="UTF-8"
                class="form-horizontal" enctype="multipart/form-data">
                {{ csrf_field() }}
                <div class="modal-body">
                    <div class="form-group">
                        <label for="exampleFormControlInput1">Project Name </label>
                        <input type="text" name="project_name" class="form-control"
                            id="exampleFormControlInput1" autocomplete="off" placeholder="" required>
                    </div>
                    <div class="form-group">
                        <label for="exampleFormControlInput1">Create_at</label>
                        <input name="create_at" id="today" type="date" class="form-control"
                            id="exampleFormControlInput1" placeholder="" required>
                    </div>
                    <div class="form-group">
                        <label for="exampleFormControlInput1">Qty </label>
                        <input type="number" name="number_of_machines" class="form-control"
                            id="exampleFormControlInput1" placeholder="" value="1" required>
                    </div>
                    <div class="form-group">
                        <label for="exampleFormControlInput1">Customer </label>
                        <input type="text" name="Customer" class="form-control"
                            id="exampleFormControlInput1" autocomplete="off" placeholder="" required>
                    </div>
                    <div class="form-group">
                        <label for="exampleFormControlSelect1">Support</label>
                        <select class="form-control" name="support" id="exampleFormControlSelect1">
                            <option value="{{$_SESSION["users"]}}"> {{$_SESSION["name"]}} </option>
                            @foreach ($Support as $Supports)
                            <option value="{{$Supports->id_user}}"> {{$Supports->name_user}} </option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="exampleFormControlInput1">Sale </label>
                        <input type="text" name="sale" class="form-control"
                            value="-------Choice--------" onfocus="this.value=''"
                            id="exampleFormControlInput1" list="sele" autocomplete="off" required>
                        <datalist id="sele">
                            <option value="Choice">-------Choice--------</option>
                            @foreach ($Sale as $Sales)
                                <option value="{{$Sales->name_user}}"></option>
                            @endforeach
                        </datalist>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="exampleFormControlInput1">Clone Project </label>
                        <input type="text" name="clone" class="form-control" onfocus="this.value=''"
                            id="exampleFormControlInput1" name="" list="projectlist" value="New Project"
                            autocomplete="off" >
                        <datalist id="projectlist">
                            <option value="New Project">
                            @foreach ($projectlist as $projectlist)
                                <option value="{{$projectlist->project_name}}"></option>
                            @endforeach
                        </datalist>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="submit" class="btn btn-primary">Add</button>
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>

                </div>
            </form>
        </div>
    </div>
</div>
<script>
    //javascript เรียกวันที่ปัจจุบัน ส่งให้ 
    let today = new Date().toISOString().substr(0, 10);
    document.querySelector("#today").value = today;
</script>
