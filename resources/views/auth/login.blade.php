@extends('layouts.guest')

@section('content')
<div class="container">
    <div class="row vh-100 justify-content-between align-items-center">
        <div class="col-12">
            <form action="{{ route('login') }}" class="row row-eq-height lockscreen  mt-5 mb-5" method="POST">@csrf

                <div class="lock-image col-12 col-sm-5"></div>
                <div class="login-form col-12 col-sm-7">
                    @foreach ($errors->all() as $err)
                    <p class="text-danger-text-center">{{ $err }}</p>
                    @endforeach


                    <div class="form-group mb-3">
                        <input type="text" class="form-control" name="email" placeholder="E-mail">
                    </div>

                    <div class="form-group mb-3">
                        <input type="password" class="form-control" name="password" placeholder="password">
                    </div>

                    <div class="form-group mb-0">
                        <button class="btn btn-primary" type="submit"> Login </button>
                    </div>

                    <div class="mt-2">New here? create an account <a href="{{ route('register') }}">Sign In</a></div>
                </div>
            </form>
        </div>

    </div>
</div>
@endsection
