@extends('layouts.app')

@section('content')

    <!-- Bootstrap Boilerplate... -->
   
    <div class="panel-body">
        <!-- Display Validation Errors -->
        @include('includes.flash')

        <!-- New Task Form -->
        <form action="{{ url('task') }}" method="POST" class="form-horizontal">
            {{ csrf_field() }}

            <!-- Task Name -->
            <div class="form-group">
                <label for="task-name" class="col-sm-3 control-label">Task</label>

                <div class="col-sm-6">
                    <input type="text" name="name" id="task-name" class="form-control">
                </div>
            </div>

            <!-- Add Task Button -->
            <div class="form-group">
                <div class="col-sm-offset-3 col-sm-6">
                    <button type="submit" class="btn btn-default">
                        <i class="fa fa-plus"></i> Add Task
                    </button>
                </div>
            </div>
        </form>
    </div>

    @if(count($tasks) > 0)
    <div class="col-lg-10 col-md-offset-1">
        <div class="panel panel-default">
            <div class="panel-heading">
                Current Tasks
            </div>
        <div class="penel-body">
            <table class="table table-striped task-table">
                <thead>
                    <th>Task</th>
                    <th>&nbsp;</th>
                    <th>&nbsp;</th>
                </thead>
                <tbody>
                    @foreach($tasks as $task)
                        <tr>
                            <td class="table-text">
                                <div class="{{$task->status == 1 ? 'done': ''}}">{{ $task->name }}</div>
                            </td>
                            <td>
                                <form action="{{ url('task/'. $task->id) }}" method="POST">
                                {{ csrf_field() }}
                                {{ method_field('DELETE') }}
                                <button type="submit" class="btn btn-danger"> <i class="fa fa-btn fa-trash"></i> Delete</button>
                                </form>
                            </td>
                            <td>
                            @if($task->status == 1)
                                Completed
                            @else
                                <form action="{{ url('task/'. $task->id) }}" method="POST">
                                {{ csrf_field() }}
                                {{ method_field('PUT') }}
                                <button type="submit" class="btn btn-default"> Mark Done</button>
                                </form>
                            @endif
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
    </div>
    @endif
@endsection