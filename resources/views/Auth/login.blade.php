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
            <h5 class="card-title text-center">Login</h5>
        <div>
        <div class="mt-2 mb-2">
            <p class="card-tittle text-center">Kindly Provide Your Login Credintials</p>
        <div>
            <div class="card-body">
                <form action="{{route('login.authenticate')}}" method="post">
                    @csrf
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
                        <label for="password" class="form-label">Password</label>
                        <input type="password" class="form-control" id="password" name="password" placeholder="Password">
                        <span class="text-danger">
                            @error('password')
                            {{$message}}
                            @enderror
                        </span>
                    </div>
                    <div class="mb-3 text-center">
                        <button type="submit" class="btn btn-primary mb-3 ">Login</button>
                    </div>
                    <div class="mb-3">
                        <p class="card-title">Don't have an account?<a href="{{route('signup')}}" style="text-decoration: none">Click to SignUp</a></p>
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
