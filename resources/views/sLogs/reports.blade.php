@extends('layouts.app')

@section('title', 'Reports')

@section('content')
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">
                    Generated {{ date('Y-m-d') }}
                </div>

                <div class="panel-body">
                    @include('includes.flash')
                    <div class="row">
                        <div class="col-md-10 col-xs-offset-1">
                            <div class="col-md-3">
                                <h4>Hours Spent</h4>
                                <p> {{ dd($logs[0]->hours_spent) }} </p>
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