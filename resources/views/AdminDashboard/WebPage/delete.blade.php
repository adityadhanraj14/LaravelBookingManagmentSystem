@extends('AdminDashboard.Layout.adminBaseView')
@section('dashContent')
<form action="{{ route('webpage.delete', ['id' => Request::segment(3)]) }}" method="post">
    @csrf
    <div class="mb-3 w-50">
        <h6 class="form-label">Are you sure you want to delete this booking?</h6>
    </div>
    <div class="mb-3 w-50">
        <button type="submit" class="btn btn-danger">
            Delete
        </button>
    </div>
</form>
@endsection
