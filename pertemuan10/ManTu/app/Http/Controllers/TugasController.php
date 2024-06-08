<?php

namespace App\Http\Controllers;

use App\Models\Tugas;
use Illuminate\Http\Request;

class TugasController extends Controller
{
    //
    public function index()
    {
        // Mendapatkan data tugas dari model
        $tasks = Tugas::All();
        dd($tasks);
        // Mengirim data tugas ke view
        return view('task.index', [
            'tasks' => $tasks
        ]);
    }

    // Menampilkan detail tugas
    public function show($id)
    {
        // Mendapatkan tugas berdasarkan ID
        $task = Tugas::find($id);
        // Jika tugas ditemukan, tampilkan detailnya
        if ($task) {
            return view('task.show', [
                'task' => $task
            ]);
        } 
    }
}
