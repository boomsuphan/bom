<div class="table-responsive">
<table class="table table-hover table-sm" style="width: 100;font-size: 12px" border="2px">
    <thead style=" color:black; font-size: 14px" class="bg-success">
        <tr>
            <th scope="col" style="width: 1%">No.</th>
            <th scope="col" style="width: 20%">Project</th>
            <th scope="col" style="width: 20%">Customer</th>
            <th scope="col" style="width: 0.5%">Qty</th>
            <th scope="col" style="width: 5%">Support</th>
            <th scope="col" style="width: 5%">Sale</th>
            <th scope="col" style="width: 7%">Create_at</th>
            <th scope="col" style="width: 7%">Success_at</th>
            <th scope="col" style="width: 6%">confirm</th>
            <th scope="col" style="width: 20%">Action</th>
        </tr>
    </thead>
    <tbody style="color:black;">
        @forelse ($project as $projects)<!-- for loop ค่าโปรเจคทั้งหมด  ค่ามาจากฟังชั่น index ตัวแปร $project จากไฟล์ app/Http/Controllers/ProjectController (Ohm) -->
            <tr>
                <th scope="row"><center>{{$loop->iteration}}</center></th>
                <td>{{ isset($projects->project_name) ? $projects->project_name : '' }}</td>
                <td>{{ isset($projects->Customer) ? $projects->Customer : '' }}</td>
                <td><center>{{ isset($projects->number_of_machines) ? $projects->number_of_machines : '' }}</center></td>
                <td>{{ isset($projects->user->name_user) ? $projects->user->name_user : '' }}</td>
                @if($projects->sale =='-------Choice--------')
                    <td></td>
                @else
                    <td>{{ isset($projects->sale) ? $projects->sale : '' }}</td>
                @endif
                <td>{{ isset($projects->create_at) ? $projects->create_at : '' }}</td>
                <td >{{ isset($projects->success_at) ? $projects->success_at : 'N/A'}}</td>
                    @if($projects->project_status =='Success')<!-- เงื่อนไขถ้าโปรเจคมีค่าเท่ากับ Success (Ohm) -->
                        <td  style="color:green;font-size: 12px"><strong>Success</strong></td>
                    @else
                        <td style="color:red;font-size: 12px"><strong>In Process </strong></td>
                    @endif
                
                <td>
                    <!-- ปุ่มเข้าไปดู BOM (Ohm) -->
                    <a href="{{ url('bom/' . $projects->id) }}">
                        <button type="button" class="btn btn-success btn-sm">
                            <i class="fas fa-search"></i>
                        </button>
                    </a>
                    @include ('project/form-modal/edit')<!-- แก้ไขปุ่มและฟอร์มได้จาก resources/views/project/form-modal/edit   (Ohm) -->
                    @include ('project/form-modal/report')<!-- แก้ไขปุ่มและฟอร์มได้จาก resources/views/project/form-modal/report   (Ohm) -->
                    @if ($users->position =='application-manager') 
                    @include ('project/form-modal/delete')<!-- แก้ไขปุ่มและฟอร์มได้จาก resources/views/project/form-modal/delete   (Ohm) -->
                    @else <!-- เงื่อนไขไม่ใช่ตำแหน่ง application-manager  ไม่แสดงอะไร (Ohm) -->
                    
                    @endif <!-- ปิดเงื่อนไขตำแหน่ง application-manager  (Ohm) -->
                </td>
            </tr>
        @empty <!-- for loop แล้ไม่มีค่าให้แสดง No Information ค่ามาจากฟังชั่น index ตัวแปร $project จากไฟล์ app/Http/Controllers/ProjectController (Ohm) -->
            <tr>
                <td colspan="10">
                    <center> No Information</center>
                </td>
            </tr>
        @endforelse <!-- จบ for loop $project  (Ohm) -->    
    </tbody>
</table>
</div>
<br>
{{ $project->links() }}