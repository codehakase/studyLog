@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Your Profile</div>
                <div class="panel-body">
                @include('includes.flash')

                    <form class="form-horizontal" role="form" method="POST" action="{{ url('profile/edit') }}" id="profile_data">
                        {{ csrf_field() }}

                        <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                            <label for="name" class="col-md-4 control-label">Name</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control" name="name" value="{{ $user->name }}" required autofocus>

                                @if ($errors->has('name'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                            <label for="email" class="col-md-4 control-label">E-Mail Address</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control" name="email" value="{{ $user->email }}" required>

                                @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('tag') ? ' has-error' : '' }}">
                            <label for="tag" class="col-md-4 control-label">Current Tag</label>

                            <div class="col-md-6">
                                <input id="tag" type="text" class="form-control" name="tag" value="{{ $tag->tag }}" required>

                                @if ($errors->has('tag'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('tag') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('streaktag') ? ' has-error' : '' }}">
                            <label for="streak" class="col-md-4 control-label">Streak</label>

                            <div class="col-md-6">
                                <input id="streak" type="text" class="form-control" name="streak" value="{{ $tag->streak }}" required>

                                @if ($errors->has('streak'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('streak') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <button type="submit" class="btn btn-primary">
                                    Update Profile
                                </button>
                            </div>
                        </div>
                    </form>
                    <div class="text-center">
                        <a href="" id="update_password" class="text-center">Update Password?</a>
                    </div>
                    <form action="{{ url('profile/password') }}" method="POST" id="password_form" class="form-horizontal">
                    {{ csrf_field() }}
                        <div class="form-group">
                            <label for="password-new" class="col-md-4 control-label">New Password</label>

                            <div class="col-md-6">
                                <input id="password-new" type="password" class="form-control" name="password_new" required>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="password-confirm" class="col-md-4 control-label">Confirm Password</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <button type="submit" class="btn btn-primary">
                                    Update Password
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
<script>
    window.addEventListener("load", () => {
        document.querySelector("form#password_form").style.display = "none";
        document.getElementById("update_password").addEventListener("click", (e) => {
           e.preventDefault();
           document.querySelector("form#password_form").style.display = "block";
           document.querySelector("form#profile_data").style.display = "none";
           document.getElementById("update_password").style.display = "none";
        });
    });
</script>