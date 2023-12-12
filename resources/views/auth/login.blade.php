@extends('layouts.app')
@section('content')
    <body class="login">
    <div>
        <a class="hiddenanchor" id="signup"></a>
        <a class="hiddenanchor" id="signin"></a>
        <div class="login_wrapper">
            <div class="animate form login_form">
                <section class="login_content">
                    <form method="POST" action="{{ route('login') }}">
                        @csrf
                        <h1>Smart Akademiya</h1>
                        <div>
                            <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                        </div>
                        <div>
                            <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">
                        </div>
                        <div>
                            <button type="submit" class="btn btn-default">
                                {{ __('Tizimga kirish') }}
                            </button>
                        </div>
                        <div class="clearfix"></div>
                    </form>
                </section>
            </div>
        </div>
    </div>
    </body>
@endsection
