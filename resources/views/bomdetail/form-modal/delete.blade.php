<form method="POST" action="{{ url('/bomdetail' . '/' . $BomDetail->id) }}"
    accept-charset="UTF-8" style="display:inline">
    {{ method_field('DELETE') }}
    {{ csrf_field() }}
    <button type="submit" class="btn btn-danger btn-sm"><i class="fas fa-trash-alt">
</form>