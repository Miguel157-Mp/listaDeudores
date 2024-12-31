<?php

namespace App\Http\Controllers;

use App\Models\task;
use Illuminate\Console\View\Components\Task as ComponentsTask;
use Illuminate\Http\Request;

class TaskController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $task['tasks']= Task::all();
        return view('task.index', $task);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // Validar los datos recibidos
        $request->validate([
            'task' => 'required|string|max:255',
        ]);

        // Crear la tarea en la base de datos
        Task::create($request->all());

        // Redirigir con un mensaje de éxito
        return redirect('/')->with('success', 'Tarea agregada exitosamente.');
    }
    

    /**
     * Display the specified resource.
     */
    public function show(task $task)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(task $task)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, task $task)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        //
        $task= Task::FindOrFail($id);
        $task->delete();
        return redirect('/')->with('success', 'Tarea eliminada exitosamente.');
    }
}
