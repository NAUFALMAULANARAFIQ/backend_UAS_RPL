<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Job extends Model
{
    protected  $table = 'jobs_table';

    protected $guarded = [];

    public function post()
    {
        return $this->belongsTo(Post::class, 'id_post');
    }
}
