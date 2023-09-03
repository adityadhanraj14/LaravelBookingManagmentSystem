@extends('layout.baseview')
@section('title','Login')
@section('style')
<style>
</style>
@endsection
@section('content')
<div class="container h-100 mt-5">
    <div class="row h-100 justify-content-center align-itens-center">
        <div class="card" style= "width:25rem">
        <div class="mt-2 mb-2">
        <a href="{{route('webpage.view')}}"><img class="mx-auto d-block" src="{{asset('assets\image\logo.png')}}" alt="logo" width="100"></a>
        </div>
        <div class="mt-2 mb-2">
            <h5 class="card-title text-center">SignUp</h5>
        <div>
        <div class="mt-2 mb-2">
            <p class="card-tittle text-center">Kindly Provide Your Information for Registeration</p>
        <div>
            <div class="card-body">
                <form action="{{route('signup.create')}}" method="post">
                    @csrf
                    <div class="mb-3">
                        <label for="name" class="form-label">Name</label>
                        <input type="name" class="form-control" id="name" name="name" placeholder="Name">
                        <span class="text-danger">
                            @error('name')
                            {{$message}}
                            @enderror
                        </span>
                    </div>
                    <div class="mb-3">
                        <label for="email" class="form-label">Email Adress</label>
                        <input type="email" class="form-control" id="email" name="email" placeholder="Email">
                        <span class="text-danger">
                            @error('email')
                            {{$message}}
                            @enderror
                        </span>
                    </div>
                    <div class="mb-3">
                        <label for="phone_no" class="form-label">Phone Number</label>
                        <input type="phone_no" class="form-control" id="phone_no" name="phone_no" placeholder="Phone Number">
                        <span class="text-danger">
                            @error('phone_no')
                            {{$message}}
                            @enderror
                        </span>
                    </div>
                    <div class="mb-3">
                        <label for="password" class="form-label">Password</label>
                        <input type="password" class="form-control" id="password" name="password" placeholder="Password">
                        <span class="text-danger">
                            @error('password')
                            {{$message}}
                            @enderror
                        </span>
                    </div>
                    <div class="mb-3">
                        <label for="confirmpassword" class="form-label">Confirm Password</label>
                        <input type="password" class="form-control" id="confirmpassword" name="confirmpassword" placeholder="Renter Password">
                        <span class="text-danger">
                            @error('confirmpassword')
                            {{$message}}
                            @enderror
                        </span>
                    </div>
                    <div class="mb-3 text-center">
                        <button type="submit" class="btn btn-outline-success mb-3 ">SignUp</button>
                    </div>
                    <div class="mb-3">
                        <p class="card-title">Already have an account?<a href="{{route('login')}}" style="text-decoration: none">Click to Login</a></p>
                    </div>
                    
                </form>
            </div>       
        </div>
    </div>
</div>
@endsection
@section('customjs')
<script>
</script>
@endsection
