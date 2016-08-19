@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Register Camp</div>
                <div class="panel-body">
                    <form class="form-horizontal" role="form" method="POST" action="{{ url('/camp') }}">
                        {{ csrf_field() }}

                        <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                            <label for="name" class="col-md-4 control-label">Camp Name</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control" name="name" value="{{ old('name') }}">

                                @if ($errors->has('name'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('phone_number') ? ' has-error' : '' }}">
                            <label for="phone_number" class="col-md-4 control-label">Camp Phone Number</label>

                            <div class="col-md-6">
                                <input id="phone_number" type="text" class="form-control" name="phone_number" value="{{ old('phone_number') }}">

                                @if ($errors->has('phone_number'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('phone_number') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('address') ? ' has-error' : '' }}">
                            <label for="address" class="col-md-4 control-label">Camp Address</label>

                            <div class="col-md-6">
                                <input id="address" type="text" class="form-control" name="address" value="{{ old('address') }}">

                                @if ($errors->has('address'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('address') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('city') ? ' has-error' : '' }}">
                            <label for="city" class="col-md-4 control-label">Camp city</label>

                            <div class="col-md-6">
                                <input id="city" type="text" class="form-control" name="city" value="{{ old('city') }}">

                                @if ($errors->has('city'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('city') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('state') ? ' has-error' : '' }}">
                            <label for="state" class="col-md-4 control-label">Camp State</label>

                            <div class="col-md-6">
                                <input id="state" type="text" class="form-control" name="state" value="{{ old('state') }}">

                                @if ($errors->has('state'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('state') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('zip') ? ' has-error' : '' }}">
                            <label for="zip" class="col-md-4 control-label">Camp Zip</label>

                            <div class="col-md-6">
                                <input id="zip" type="text" class="form-control" name="zip" value="{{ old('zip') }}">

                                @if ($errors->has('zip'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('zip') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('schedule') ? ' has-error' : '' }}">
                            <label for="schedule" class="col-md-4 control-label">Camp Schedule</label>

                            <div class="col-md-6">
                                <input id="schedule" type="text" class="form-control" name="schedule" value="{{ old('schedule') }}">

                                @if ($errors->has('schedule'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('schedule') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('number_of_weeks') ? ' has-error' : '' }}">
                            <label for="number_of_weeks" class="col-md-4 control-label">Camp Number of Weeks</label>

                            <div class="col-md-6">
                                <input id="number_of_weeks" type="text" class="form-control" name="number_of_weeks" value="{{ old('number_of_weeks') }}">

                                @if ($errors->has('number_of_weeks'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('number_of_weeks') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('permissions') ? ' has-error' : '' }}">
                            <label for="permissions" class="col-md-4 control-label">Camp Permissions</label>

                            <div class="col-md-6">
                                <input id="permissions" type="text" class="form-control" name="permissions" value="{{ old('permissions') }}">

                                @if ($errors->has('permissions'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('permissions') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('director_name') ? ' has-error' : '' }}">
                            <label for="director_name" class="col-md-4 control-label">Camp Director Name</label>

                            <div class="col-md-6">
                                <input id="director_name" type="text" class="form-control" name="director_name" value="{{ old('director_name') }}">

                                @if ($errors->has('director_name'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('director_name') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('director_phone_number') ? ' has-error' : '' }}">
                            <label for="director_phone_number" class="col-md-4 control-label">Camp Director's Phone Number</label>

                            <div class="col-md-6">
                                <input id="director_phone_number" type="text" class="form-control" name="director_phone_number" value="{{ old('director_phone_number') }}">

                                @if ($errors->has('director_phone_number'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('director_phone_number') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('council') ? ' has-error' : '' }}">
                            <label for="council" class="col-md-4 control-label">Camp Council</label>

                            <div class="col-md-6">
                                <input id="council" type="text" class="form-control" name="council" value="{{ old('council') }}">

                                @if ($errors->has('council'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('council') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('remember_number') ? ' has-error' : '' }}">
                            <label for="remember_number" class="col-md-4 control-label">Camp Remember Number</label>

                            <div class="col-md-6">
                                <input id="remember_number" type="text" class="form-control" name="remember_number" value="{{ old('remember_number') }}">

                                @if ($errors->has('remember_number'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('remember_number') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                            <label for="email" class="col-md-4 control-label">Director's E-Mail Address</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}">

                                @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                            <label for="password" class="col-md-4 control-label">Password</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control" name="password">

                                @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('password_confirmation') ? ' has-error' : '' }}">
                            <label for="password-confirm" class="col-md-4 control-label">Confirm Password</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation">

                                @if ($errors->has('password_confirmation'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password_confirmation') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <button type="submit" class="btn btn-primary">
                                    <i class="fa fa-btn fa-user"></i> Register
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
