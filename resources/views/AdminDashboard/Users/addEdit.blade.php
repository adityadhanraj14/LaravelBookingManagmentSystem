@extends('AdminDashboard.Layout.adminBaseView')
@section('dashContent')
<form action="{{Request::segment(2) == 'add' ? route('user.save') : route('user.update', ['id' => Request::segment(2)]) }}" method="post">
    @csrf
    <div class="container">
    <div class="mb-3 w-50">
                        <label for="name" class="form-label">Name</label>
                        <input type="name" class="form-control" id="name" name="name" placeholder="Name" value="{{isset($data->name)?$data->name:''}}">
                        <span class="text-danger">
                            @error('name')
                            {{$message}}
                            @enderror
                        </span>
                    </div>
                    <div class="mb-3 w-50">
                        <label for="email" class="form-label">Email Adress</label>
                        <input type="email" class="form-control" id="email" name="email" placeholder="Email" value="{{isset($data->email)?$data->email:''}}">
                        <span class="text-danger">
                            @error('email')
                            {{$message}}
                            @enderror
                        </span>
                    </div>
                    <div class="mb-3 w-50">
                        <label for="phone_no" class="form-label">Phone Number</label>
                        <input type="phone_no" class="form-control" id="phone_no" name="phone_no" placeholder="Phone Number" value="{{isset($data->phone_no)?$data->phone_no:''}}">
                        <span class="text-danger">
                            @error('phone_no')
                            {{$message}}
                            @enderror
                        </span>
                    </div>
                    <!-- <div class="mb-3 w-50">
                        <label for="password" class="form-label">Password</label>
                        <input type="password" class="form-control" id="password" name="password" placeholder="Password">
                        <span class="text-danger">
                            @error('password')
                            {{$message}}
                            @enderror
                        </span>
                    </div> -->
        <div class="mb-3 w-50">
            <label for="user_type" class="form-label">User type</label>
            <select name="user_type" aria-label="Default select example" class="form-select">
                <option value="" selected>User Type</option>
                <option value="1" {{ isset($data->user_type) && $data->user_type == 1 ? 'selected' : '' }}>Admin</option>
                <option value="2" {{ isset($data->user_type) && $data->user_type == 2 ? 'selected' : '' }}>User</option>
            </select>
        </div>
        <button type="submit" class="btn btn-primary">{{ Request::segment(2) == 'add' ? 'Save' : 'Update' }}</button>
    </div>
</form>
@endsection
