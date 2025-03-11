<?php

namespace App\Models;
use Illuminate\Support\Arr;

use Illuminate\Database\Eloquent\Model;


    class job {
        public static function all():array {
            return[
                ['id' => 1, 'title' => 'Programming', 'salary' => '$300000'],
                ['id' => 2, 'title' => 'Coder', 'salary' => '$5300000'],
                ['id' => 3, 'title' => 'Teacher', 'salary' => '$3000'],
            ];
        }
        public static function find($id): array {
            $job = Arr::first(job::all(), fn($job) => $job['id'] == $id);
        
            if (!$job) {
                abort(404, 'Job not found');
            }
        
            return $job;
        }
    }

