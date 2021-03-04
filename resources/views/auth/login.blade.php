@extends('layouts.auth.login', ['title' => 'Login'])

@section('content')

<body style="background: #6777ef">
    <div id="app">
        <section class="section">
            <div class="container mt-5">
                <div class="row">
                    <div
                        class="col-12 col-sm-8 offset-sm-2 col-md-6 offset-md-3 col-lg-6 offset-lg-3 col-xl-4 offset-xl-4">
                        <div class="login-brand">
                            <img src="{{ asset('assets/img/logo-wk.png') }}" alt="logo" width="100"
                                class="shadow-light rounded-circle">
                        </div>

                        <div class="card card-primary">
                                <h3 style="text-align:center;padding-top: 25px;">Login</h3>

                            <div class="card-body">
                                <form method="POST" class="form-auth-small" action="{{ route('login') }}">
                                    @csrf
                                    <div class="form-group">
                                        <label for="email" class="control-label">Email</label>
                                        <input type="email" name="email" class="form-control" id="email"
                                            placeholder="Email">
                                        @error('email')
                                            <div class="invalid">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>
                                    <div class="form-group">
                                        <label for="password" class="control-label">Password</label>
                                        <input type="password" name="password" class="form-control" id="password"
                                            placeholder="Password">
                                        @error('password')
                                            <div class="invalid">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                        
                                        <div class="">
                                            <a href="#" class="text-small">
                                                Forgot Password?
                                            </a>
                                        </div>
                                    </div>
                                    <button type="submit" class="btn btn-primary btn-lg btn-block">LOGIN</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
</body>

@endsection
