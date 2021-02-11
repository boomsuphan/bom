<!-- ปุ่มโมดอล Edit -->
<button type="button" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#EditProject{{$projects->id}}"><i class="fas fa-edit"></i></button>
<!-- ฟอร์มโมดอล Edit -->
<div class="modal fade " id="EditProject{{$projects->id}}" tabindex="-1" role="dialog"
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
            <form method="POST" action="{{ url('/project' . '/' . $projects->id) }}" accept-charset="UTF-8" class="form-horizontal" enctype="multipart/form-data">
                {{ method_field('PUT') }}
                {{ csrf_field() }}
            
                <div class="modal-body">
                    <div class="form-group">
                        <label for="exampleFormControlInput1">Project Name </label>
                        <input type="text" name="project_name" class="form-control"
                            id="exampleFormControlInput1" value="{{$projects->project_name}}" required>
                    </div>
                    <div class="form-group">
                        <label for="exampleFormControlInput1">Create_at</label>
                        <input name="create_at" id="today" type="date" class="form-control"
                            id="exampleFormControlInput1" value="{{$projects->create_at}}" required>
                    </div>
                    <div class="form-group">
                        <label for="exampleFormControlInput1">Qty </label>
                        <input type="number" name="number_of_machines" class="form-control"
                            id="exampleFormControlInput1"  value="{{$projects->number_of_machines}}" required>
                    </div>
                    <div class="form-group">
                        <label for="exampleFormControlInput1">Customer </label>
                        <input type="text" name="Customer" class="form-control"
                            id="exampleFormControlInput1" value="{{$projects->Customer}}" required>
                    </div>
                    <div class="form-group">
                        <label for="exampleFormControlSelect1">Support</label>
                        <select class="form-control" name="support" id="exampleFormControlSelect1">
                            <option value="{{ isset($projects->user->id_user) ?  $projects->user->id_user : '' }}">{{ isset($projects->user->name_user) ?  $projects->user->name_user : '' }}</option>
                            @foreach ($Support as $Supports)
                            <option value="{{$Supports->id_user}}"> {{$Supports->name_user}}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="exampleFormControlInput1">Sale </label>
                        <input type="text" name="sale" class="form-control"
                            value="{{$projects->sale}}" 
                            id="exampleFormControlInput1" list="sele" autocomplete="off" required>
                        <datalist id="sele">
                         @foreach ($Sale as $sales)
                         <option value="{{$sales->name_user}}"> 
                         @endforeach
                        
                               
                         
                        </datalist>
                        </select>
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
<script>
    //javascript เรียกวันที่ปัจจุบัน ส่งให้ 
    let today = new Date().toISOString().substr(0, 10);
    document.querySelector("#today").value = today;
</script>