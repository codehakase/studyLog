@extends('layouts.app')

@section('title', 'New Log Record')

@section('content')
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">Create Log Record</div>

                <div class="panel-body">
                    @include('includes.flash')

                    <form class="form-horizontal" role="form" method="POST" action="{{ url('/new_log') }}">
                        {!! csrf_field() !!}

                        <div class="form-group{{ $errors->has('log_day') ? ' has-error' : '' }}">
                            <label for="log_day" class="col-md-4 control-label">Log Day</label>

                            <div class="col-md-6">
                                <input type="text" name="log_day" class="form-control" id="log_day" value="{{ date('l')}}" >

                                @if ($errors->has('log_day'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('log_day') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('hours_spent') ? ' has-error' : '' }}">
                            <label for="hours_spent" class="col-md-4 control-label">Hours Spent</label>

                            <div class="col-md-6">
                                <input type="text" name="hours_spent" class="form-control" id="hours_spent">

                                @if ($errors->has('hours_spent'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('hours_spent') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                         <div class="form-group{{ $errors->has('technologies') ? ' has-error' : '' }}">
                            <label for="technologies" class="col-md-4 control-label">Technologies</label>

                            <div class="col-md-6">
                                <input type="text" name="technologies" class="form-control" id="technologies">

                                @if ($errors->has('technologies'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('technologies') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                         <div class="form-group{{ $errors->has('resources') ? ' has-error' : '' }}">
                            <label for="resources" class="col-md-4 control-label">Specific Resources used</label>

                            <div class="col-md-6">
                                <input type="text" name="resources" class="form-control" id="resources">

                                @if ($errors->has('resources'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('resources') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('summary') ? ' has-error' : '' }}">
                            <label for="summary" class="col-md-4 control-label">Summary</label>

                            <div class="col-md-6">
                                <textarea rows="10" id="summary" class="form-control" name="summary"></textarea>

                                @if ($errors->has('summary'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('summary') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <button type="submit" class="btn btn-success">
                                    <i class="fa fa-btn fa-ticket"></i> Add Log
                                </button>
                                <a href="{{ url('/home') }}" class="btn btn-md btn-info">Dashboard</a>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection