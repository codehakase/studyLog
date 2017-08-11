@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-default">
                <div class="panel-heading">Dashboard</div>
                    @include('includes.flash')
                    @if($tag)
                    <div class="col-md-3">
                        {{ (count($logs) > 0) ? count($logs) : 0}} of {{ $tag->streak }} days logged
                    </div>
                    <div class="col-md-3">
                        <b>Tag: #{{ $tag->tag }}</b>
                    </div>
                    @endif
                <div class="col-md-6 col-md-offset-8 text-center">

                    <h2>Total Hours</h2>
                    
                    @if($total_hours->first->hours)
                        @foreach ($total_hours as $hour)
                            <h3> {{ number_format($hour->hours, 2) }} </h3>
                            <p>Avg: {{ number_format($hour->hours / count($logs), 2) }}hrs / Week</p>
                        @endforeach
                    @else<div class="col-md-6">
                        {{ (count($logs) > 0) ? count($logs) : 0}} days logged
                    </div>
                                            
                    @endif
                </div>
                

                <div class="panel-body">

                    @if ($logs->isEmpty())
                        <div class="text-center">
                            <p>There are no Logs present </p>
                            <a href="{{ url('new_log') }}" class="btn btn-md btn-success">New Log</a>
                        </div>
                    @else
                        <a href="{{ url('new_log') }}" class="btn btn-md btn-success">Add New Log</a>
                        <table class="table">
                            <thead>
                                <tr>
                                    <th>Log ID</th>
                                    <th>Day</th>
                                    <th>Hours Spent</th>
                                    <th>Techonolgies</th>
                                    <th>Added</th>
                                    <th>Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($logs as $log) 
                                    <tr>
                                        <td>
                                            #{{ $log->log_id }}
                                        </td>
                                        <td>{{ $log->log_day }}</td>
                                        <td>{{ $log->hours_spent }}</td>
                                        <td>{{ $log->technologies }}</td>
                                        <td>{{ $log->created_at->diffForHumans() }}</td>
                                        <td>
                                            <a href="{{ url('logs/'. $log->log_id)}}" class="btn btn-md btn-info">
                                                View
                                            </a>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                        {{ $logs->render() }}
                    @endif 
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
