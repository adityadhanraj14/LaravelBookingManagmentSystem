@extends('AdminDashboard.Layout.adminBaseView')
@section('dashContent')
<form action="{{Request::segment(2) == 'add' ? route('webpage.save') : route('webpage.update', ['id' => Request::segment(2)]) }}" method="post">
    @csrf
    <div class="container">
    <div class="mb-3 w-50">
            <label for="page_name" class="form-label">Page Name</label>
            <input type="text" class="form-control" id="page_name" name="page_name" placeholder="Page Name" value="{{ isset($data->name) ? $data->slug : '' }}">
        </div>
        <div class="mb-3 w-50">
            <label for="page_slug" class="form-label">Page Slug</label>
            <input type="text" class="form-control" id="page_slug" name="page_slug" placeholder="Page Slug" value="{{ isset($data->slug) ? $data->slug : '' }}">
        </div>
        <div class="mb-3 w-50">
    <label for="page_content" class="form-label">Page Content</label>
    <textarea id="editor" class="h-100" name="page_content" rows="40">
        {!! isset($data->html) ? $data->html : '' !!}
    </textarea>
</div>
        <!-- <div class="mb-3 w-50">
             <label for="page_content" class="form-label">Page Content</label>
            <textarea id="editor" class="h-100" id="pagecontent" name="page_content" row="40" value="{{ isset($data->html) ? $data->html : '' }}"></textarea>
     </div> -->

        <div class="mb-3 w-50">
            <label for="page_status" class="form-label">Page Status</label>
            <select name="page_status" aria-label="Default select example" class="form-select">
                <option value="" selected>Set status</option>
                <option value="1" {{ isset($data->status) && $data->status == 1 ? 'selected' : '' }}>Active</option>
                <option value="2" {{ isset($data->status) && $data->status == 2 ? 'selected' : '' }}>InActive</option>
            </select>
        </div>
        <button type="submit" class="btn btn-primary">{{ Request::segment(2) == 'add' ? 'Save' : 'Update' }}</button>
    </div>
</form>
@endsection
