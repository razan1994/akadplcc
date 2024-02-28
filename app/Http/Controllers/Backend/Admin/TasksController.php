<?php

namespace App\Http\Controllers\Backend\Admin;

use App\Http\Controllers\Controller;
use App\Models\Course;
use App\Models\SupportTicket;
use App\Models\Task;
use Illuminate\Http\Request;
use Illuminate\Routing\Route;
use Illuminate\Support\Facades\DB;

class TasksController extends Controller
{
    public function index($id, Route $route)
    {
        try {

            $id = decrypt($id);
            $course = Course::with('tasks')
                ->withCount('tasks')
                ->find($id);
            return view('admin.tasks.index', compact('course'));
        } catch (\Throwable $th) {
            $function_name =  $route->getActionName();
            $check_old_errors = new SupportTicket();
            $check_old_errors = $check_old_errors->select('*')->where([
                'error_location' => $th->getFile(),
                'error_description' => $th->getMessage(),
                'function_name' => $function_name,
                'error_line' => $th->getLine(),
            ])->get();

            if ($check_old_errors->count() == 0) {
                $new_error_ticket = SupportTicket::create([
                    'error_location' => $th->getFile(),
                    'error_description' => $th->getMessage(),
                    'function_name' => $function_name,
                    'error_line' =>  $th->getLine(),
                ]);
                $end_error_ticket = $new_error_ticket;
            } else {
                $end_error_ticket = $check_old_errors->first();
            }
            return view('errors.support_tickets', compact('th', 'function_name', 'end_error_ticket'));
        }
    }

    public function store(Request $request, $id, Route $route)
    {
        $id = decrypt($id);
        $request->validate([
            'question' => 'required|string',
            'answers' => 'required|array|min:4',
            'correct_answer' => 'required|in:0,1,2,3',
        ]);
        try {

            // Find course
            $course = Course::find($id);
            if (!$course) {
                return redirect()->back()->with('danger', 'Course not found');
            }

            // Create task
            $task = Task::create([
                'question' => $request->question,
                'course_id' => $course->id,
            ]);

            // Create answers for the task
            foreach ($request->answers as $key => $answer) {
                $task->answers()->create([
                    'answer' => $answer,
                    'status' => $request->correct_answer == $key ? 1 : 0,
                ]);
            }
            return redirect()->back()->with('success', 'Task created successfully');
        } catch (\Throwable $th) {
            $function_name =  $route->getActionName();
            $check_old_errors = new SupportTicket();
            $check_old_errors = $check_old_errors->select('*')->where([
                'error_location' => $th->getFile(),
                'error_description' => $th->getMessage(),
                'function_name' => $function_name,
                'error_line' => $th->getLine(),
            ])->get();

            if ($check_old_errors->count() == 0) {
                $new_error_ticket = SupportTicket::create([
                    'error_location' => $th->getFile(),
                    'error_description' => $th->getMessage(),
                    'function_name' => $function_name,
                    'error_line' =>  $th->getLine(),
                ]);
                $end_error_ticket = $new_error_ticket;
            } else {
                $end_error_ticket = $check_old_errors->first();
            }
            return view('errors.support_tickets', compact('th', 'function_name', 'end_error_ticket'));
        }
    }



    public function destroy($id, Route $route)
    {
        try {
            $id = decrypt($id);
            $task = Task::find($id);
            if (!$task) {
                return redirect()->back()->with('danger', 'Task not found');
            }
            // Delete task and its answers
            $task->answers()->delete();
            $task->delete();
            return redirect()->back()->with('success', 'Task deleted successfully');
        } catch (\Throwable $th) {
            $function_name =  $route->getActionName();
            $check_old_errors = new SupportTicket();
            $check_old_errors = $check_old_errors->select('*')->where([
                'error_location' => $th->getFile(),
                'error_description' => $th->getMessage(),
                'function_name' => $function_name,
                'error_line' => $th->getLine(),
            ])->get();

            if ($check_old_errors->count() == 0) {
                $new_error_ticket = SupportTicket::create([
                    'error_location' => $th->getFile(),
                    'error_description' => $th->getMessage(),
                    'function_name' => $function_name,
                    'error_line' =>  $th->getLine(),
                ]);
                $end_error_ticket = $new_error_ticket;
            } else {
                $end_error_ticket = $check_old_errors->first();
            }
            return view('errors.support_tickets', compact('th', 'function_name', 'end_error_ticket'));
        }
    }


    public function update(Request $request, $id, Route $route)
    {

        $request->validate([
            'question' => 'required|string',
            'answers' => 'required|array|min:4',
        ]);
        DB::beginTransaction();
        try {
            $id = decrypt($id);
            // Find task
            $task = Task::find($id);
            if (!$task) {
                return redirect()->back()->with('danger', 'Task not found');
            }

            // Update task question
            $task->update([
                'question' => $request->question,
            ]);

            // Update task answers without deleting them
            foreach ($request->answers as $key => $answer) {
                $task->answers()->updateOrCreate(
                    ['id' => $key],
                    [
                        'answer' => $answer,
                        'status' => $request->correct_answer == $key ? 1 : 0,
                    ]
                );
            }
            DB::commit();
            return redirect()->back()->with('success', 'Task updated successfully');
        } catch (\Throwable $th) {
            $function_name =  $route->getActionName();
            $check_old_errors = new SupportTicket();
            $check_old_errors = $check_old_errors->select('*')->where([
                'error_location' => $th->getFile(),
                'error_description' => $th->getMessage(),
                'function_name' => $function_name,
                'error_line' => $th->getLine(),
            ])->get();

            if ($check_old_errors->count() == 0) {
                $new_error_ticket = SupportTicket::create([
                    'error_location' => $th->getFile(),
                    'error_description' => $th->getMessage(),
                    'function_name' => $function_name,
                    'error_line' =>  $th->getLine(),
                ]);
                $end_error_ticket = $new_error_ticket;
            } else {
                $end_error_ticket = $check_old_errors->first();
            }
            DB::rollBack();
            return view('errors.support_tickets', compact('th', 'function_name', 'end_error_ticket'));
        }
    }
}
