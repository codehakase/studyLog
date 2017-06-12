<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Task;
use App\Repositories\TaskRepository;


class TaskController extends Controller
{
    /**
     * Task Repository instance
     *
     * @var TaskRepository
     */
    protected $tasks;

    public function __construct(TaskRepository $tasks)
    {
        $this->middleware('auth');
        $this->tasks = $tasks;
    }

    /**
     * Show list of user's task
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {

        return view('tasks.index', [
            'tasks' => $this->tasks->forUser($request->user()),
        ]);
    }

    /**
     * Create a new Task
     *
     * @param Request $request
     * @return Response
     */
    public function save(Request $request) 
    {
        $this->validate($request, [
            'name' => 'required|max:255',
        ]);

        // create Task
        $request->user()->task()->create([
            'name' => $request->name,
            'status' => 0,
        ]);

        return redirect('tasks')->with("status", "Task Created Successfully!");
    }

    public function destroy(Request $request, Task $task)
    {
        $this->authorize('destroy', $task);
        $task->delete();
        return redirect('tasks')->with("status", "Task deleted successfully!");
    }

    public function done(Request $request, Task $task)
    {
        $this->authorize('destroy', $task);
        $mark = Task::where('id', $task->id)
                    ->update(['status' => 1]);
        
        return redirect('tasks')->with("status", "Task marked as done");
    }
}
