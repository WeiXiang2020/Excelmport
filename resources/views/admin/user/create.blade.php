
<form action="{{route('admin.store')}}" method="post">
    @csrf
    <div class="form-group">

        <input type="file" name="file"/>

        <button type="submit" class="btn btn-primary">
            Import Excel
        </button>
    </div>



</form>
