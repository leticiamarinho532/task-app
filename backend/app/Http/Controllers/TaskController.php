<?php

namespace App\Http\Controllers;

use App\Models\Task;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class TaskController extends Controller
{
    public function index() 
    {
        $result = Task::all();

        return response()->json($result, 200);
    }

    public function store(Request $request) 
    {
        $validator = Validator::make(
            $request->all(),
            [
                'name' => 'required|string|max:255',
                'description' => 'required|string|max:255',
                'is_completed' => 'required|boolean',
            ]
        );

        if ($validator->fails()) {
            return response()->json($validator->messages(), 422);
        }

        $result = Task::create(
            [
                'name' => $request->input('name'),
                'description' => $request->input('description'),
                'is_completed' => $request->input('is_completed')
            ]
        );

        return response()->json($result, 201);
    }

    public function update($taskId, Request $request)
    {
        $validator = Validator::make(
            $request->all(),
            [
                'is_completed' => 'required|boolean',
            ]
        );

        if ($validator->fails()) {
            return response()->json($validator->messages(), 422);
        }

        $update = Task::where('id', '=', $taskId)
            ->update([
                'is_completed' => (int)$request->input('is_completed')
            ]);


        $result = Task::find($taskId);

        return response()->json($result);
    }

    public function destroy($taskId)
    {
        $result = Task::where('id', '=', $taskId)
            ->delete();

        return response()->json(['message' => 'Task deleted.']);
    }
}
