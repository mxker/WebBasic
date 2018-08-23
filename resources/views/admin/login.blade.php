@extends('layouts.admin');

@section('main-content')
    <div class="login-container">

        <div class="row">

            <div class="col-sm-6">

                <!-- Errors container -->
                <div class="errors-container">
                    @if ($errors->has('email'))
                        <span class="help-block">
                            <strong>{{ $errors->first('email') }}</strong>
                        </span>
                    @endif

                    @if ($errors->has('password'))
                        <span class="help-block">
                            <strong>{{ $errors->first('password') }}</strong>
                        </span>
                    @endif
                </div>

                <!-- Add class "fade-in-effect" for login form effect -->
                <form role="form" class="login-form" method="POST" action="{{ route('admin.logining') }}">
                    {{ csrf_field() }}

                    <div class="login-header">
                        <a href="/" class="logo">
                            <img src="admin/images/logo@2x.png" alt="" width="80" />
                            <span>log in</span>
                        </a>

                        <p>Dear user, log in to access the admin area!</p>
                    </div>


                    <div class="form-group">
                        <label class="control-label" for="username">Username</label>
                        <input type="text" class="form-control input-dark" name="email" id="username"/>
                    </div>

                    <div class="form-group">
                        <label class="control-label" for="passwd">Password</label>
                        <input type="password" class="form-control input-dark" name="password" id="passwd"/>
                    </div>

                    <div class="form-group">
                        <br/>
                        <br/>
                    </div>

                    <div class="form-group">
                        <button type="submit" class="btn btn-success  btn-block text-left">
                            <i class="fa-lock"></i>
                            Log In
                        </button>
                    </div>

                </form>

            </div>

        </div>

    </div>
@endsection