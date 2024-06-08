<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    use HasFactory;

    protected $table = "task";

    protected $fillable = ['name', 'deadline', 'status', 'description'];

    public function status(){
        return $this->belongsTo(Status::class);
    }

    // mendefinisakn data tugas
    // protected static $tasks = [
    //     [
    //         'id' => 1,
    //         'name' => 'Bahasa Inggris',
    //         'deadline' => '2024-05-29',
    //         'status' => 'Belum Terpenuhi',
    //         'description' => 'Mengerjakan tugas bahasa inggris chapter 3 di buku LKS Halaman 10-12',
    //     ],
    //     [
    //         'id' => 2,
    //         'name' => 'Matematika',
    //         'deadline' => '2024-05-30',
    //         'status' => 'Belum Selesai',
    //         'description' => 'Mengerjakan soal-soal matematika di buku pr Halaman 20-25',
    //     ],
    //     [
    //         'id' => 3,
    //         'name' => 'Fisika',
    //         'deadline' => '2024-05-31',
    //         'status' => 'Belum Selesai',
    //         'description' => 'Mengerjakan soal-soal fisika di buku pr Halaman 30-35',
    //     ],[
    //         'id' => 4,
    //         'name' => 'Kimia',
    //         'deadline' => '2024-06-01',
    //         'status' => 'Belum Selesai',
    //         'description' => 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Voluptatem tempora corrupti officia numquam ipsam perspiciatis quidem rem sunt placeat, blanditiis veniam. Quis similique architecto, minima blanditiis placeat non vel assumenda eos dolor est! Placeat qui architecto unde ab sunt perferendis veniam quas laboriosam ad ipsam esse aspernatur, obcaecati cupiditate? Error eligendi quod quae praesentium, doloribus harum, odio voluptate molestias quos nam obcaecati, dolor sunt et cum illum. Enim blanditiis impedit ab ratione ullam eaque eligendi repudiandae molestiae, illum, fugiat, fugit ea voluptatum harum inventore sed? Totam sapiente architecto distinctio officia.',
    //     ]
    // ];

    // public static function getAll()
    // {
    //     return self::$tasks;
    // }

    // public static function find($id)
    // {
    //     foreach (self::$tasks as $task)
    //     {
    //         if ($task['id'] == $id)
    //         {
    //             return $task;
    //         }
    //     }
    //     return null;
    // }
}
