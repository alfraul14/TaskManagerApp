<?php

namespace App\Http\Controllers\API;

use App\Models\Task;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Resources\TaskResource;
use App\Http\Requests\SaveTaskRequest;
use App\Http\Requests\SearchTaskRequest;

class TaskController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return response()->json([
            'All' => Task::all(),
            'Completed' => Task::where('completed','=',1)->get()
        ]);
    }
    public function search(SearchTaskRequest $request)
    {
        $search = $request-> get('name');
        return response()->json([            
            'Found' => Task::where('name','like',"%$search%")->get()
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(SaveTaskRequest $request)
    {
         return (new TaskResource(Task::create($request->all())))
                ->additional(['msg'=>"Tarea guardada con éxito"]);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Task $task)
    {
        return new TaskResource($task);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(SaveTaskRequest $request, Task $task)
    {
        $task->update($request->all());
        return (new TaskResource($task))
        ->additional(['msg'=>"Tarea actualizada con éxito"]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Task $task)
    {
        $task->delete();
        return (new TaskResource($task))
        ->additional(['msg'=>"Tarea eliminada con éxito"]);
    }
}
