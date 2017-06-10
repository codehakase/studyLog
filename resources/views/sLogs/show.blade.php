@extends('layouts.app')

@section('title', 'Log View')

@section('content')
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">
                    #{{ $log->log_id }} - {{ $log->log_day }}
                </div>

                <div class="panel-body">
                    @include('includes.flash')
                    <div class="row">
                        <div class="col-md-10 col-xs-offset-1">
                            <div class="col-md-3">
                                <h4>Hours Spent</h4>
                                <p> {{ number_format($log->hours_spent,2) }} </p>
                            </div>
                            <div class="col-md-3">
                                <h4>Technologies</h4>
                                <p> {{ $log->technologies }} </p>
                            </div>
                            <div class="col-md-3">
                                <h4>Resources Used</h4>
                                <p> {{ $log->resource }} </p>
                            </div>
                            <div class="col-md-3">
                                <h4>Created</h4>
                                <p> {{ $log->created_at->diffForHumans() }} </p>
                            </div>
                            <div class="col-md-12">
                                <h4>Summary</h4>
                                <p> {{ $log->summary }} </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="text-center">
                    <a href="/home" class="btn btn-sm btn-success">&larr; Go Back</a>
            </div>
        </div>
    </div>
@endsection