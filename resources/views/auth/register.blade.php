@extends('layouts.guest')

@section('content')
<div class="container">
    <div class="row vh-100 justify-content-between align-items-center">
        <div class="col-12">
            <form action="{{ route('register') }}" class="row row-eq-height lockscreen  mt-5 mb-5" method="POST">@csrf

                <div class="lock-image col-12 col-sm-5"></div>
                <div class="login-form col-12 col-sm-7">
                    @foreach ($errors->all() as $err)
                    <p class="text-danger-text-center">{{ $err }}</p>
                    @endforeach

                    <div class="form-group mb-3">
                        <input type="text" class="form-control" name="name" placeholder="Full Name">
                    </div>

                    <div class="form-group mb-3">
                        <input type="text" class="form-control" name="email" placeholder="E-mail">
                    </div>

                    <div class="form-group mb-3">
                        <input type="password" class="form-control" name="password" placeholder="password">
                    </div>
                    <div class="form-group mb-3">
                        <input type="password" class="form-control" name="password_confirmation"
                            placeholder="Confirm password">
                    </div>

                    <div class="form-group mb-3">
                        <input type="string" class="form-control" name="phone" placeholder="Phone number">
                    </div>

                    <div class="form-group mb-0">
                        <button class="btn btn-primary" type="submit"> Register </button>
                    </div>

                    <div class="mt-2">Already have an account? <a href="page-login.html">Sign In</a></div>
                </div>
            </form>
        </div>

    </div>
</div>
@endsection
