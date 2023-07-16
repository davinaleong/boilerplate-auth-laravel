<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Activity extends Base
{
    use HasFactory;

    protected $guarded = [
        'id', 'created_at', 'updated_at', 'deleted_at'
    ];

    protected $hidden = [
        'id', 'user_id', 'status', 'created_at', 'updated_at', 'deleted_at'
    ];
}
