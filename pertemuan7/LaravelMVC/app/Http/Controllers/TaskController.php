<?php

namespace App\Http\Controllers;

use App\Models\Task;
use Illuminate\Http\Request;

class TaskController extends Controller
{
    // mendapatkan dan menampilkan data tugas
    public function index(){
        // mendapatkan data tugas dari model
        $tasks = Task::getALl();

        // mengirim data tugas ke view
        return view('task.index', [
            'tasks' => $tasks
        ]);
    }
    // mendapatkan dan menampilkan detail tugas
    public function show($id) {
        // mencari tugas berdasarkan ID
        $task = collect(Task::getAll())->firstWhere('id', $id);

        if ($task) {
            // mengirim data tugas ke view
            return view('task.show', [
                'task' => $task
            ]);
        } else {
            // jika tugas tidak ditemukan, kembali ke daftar tugas
            return redirect('/tasks');
        }
    }
}

