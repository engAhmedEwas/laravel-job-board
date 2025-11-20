<?php

namespace App\Models;



class Job
{
    public static function all(){
        return [
            ['name' => 'Ahmed','title' => 'Backend Devlober - Laravel', 'salary' => '$2000'],
            ['name' => 'Yehia','title' => 'Backend Devlober - Next.js', 'salary' => '2100'],
        ];
    }
}
