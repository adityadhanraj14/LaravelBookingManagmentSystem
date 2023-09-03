@extends('UserDashboard.Layout.userBaseView')
@section('dashContent')
<form action="{{route('user.profile.save')}}" method="post">
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
                    
        </div>
        <button type="submit" class="btn btn-primary">Update</button>
    </div>
</form>
@endsection
