<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Log;
use Illuminate\Support\Facades\Auth;
use App\User;
use App\Tags;

class LogsController extends Controller
{
    
    public function __construct()
    {
        $this->middleware('auth');
    }
    
    public function index()
    {
        $tag = Tags::where('user_id', Auth::user()->id)->firstOrFail();
        $logs = Log::latest()->paginate(10);
        $total_hours = Log::selectRaw("SUM(hours_spent) as hours")->get();
        return view('home', compact('logs', 'total_hours', 'tag'));
    }

    // sends the new log view
    public function newLog()
    {
        // checks
        if (Log::get()) {
            $lastLog = Log::latest()->first();
            $last_log_date = explode(' ', $lastLog->created_at);
            if ($last_log_date[0] == date('Y-m-d')) {
                return redirect('home')->with("error", "Sorry! You can only add a new Log once a day");
            }
        }
        return view('sLogs.create');
    }

    // save log record
    public function storeLog(Request $request)
    {
        $this->validate($request, [
            'log_day' => 'required',
            'hours_spent' => 'required',
            'technologies' => 'required|string',
            'resources' => 'required',
            'summary' => 'required'
        ]);

        $log = Log::create([
            'log_day' => request('log_day'),
            'user_id' => auth()->id(),
            'hours_spent' => request('hours_spent'),
            'summary' => request('summary'),
            'log_id' => strtoupper(str_random(12)),
            'technologies' => request('technologies'),
            'resource' => request('resources'),
        ]);

        $log->save();

        return redirect()->back()->with("status", "Log Record has been added!");
    }

    public function showSingle($log_id)
    {
        $log = Log::where('log_id', $log_id)->firstOrFail();
        return view('sLogs.show', compact('log'));
    }


    public function reports()
    {
        $user = User::where('id', Auth::user()->id)->firstOrFail();
        $logs = $user->logs->all();
        $tag = $user->tags;

        // dd($user, $logs, $tag);
        return view('sLogs.reports', compact('user', 'logs', 'tag'));
    }
}
