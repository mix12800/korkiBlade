<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Attributes\Fillable;
use Illuminate\Database\Eloquent\Model;

#[Fillable(['course_id', 'date', 'pay', 'user_id'])]

class Order extends Model
{
    public function Course()
    {
        return $this->belongsTo(Course::class);
    }

    public function User()
    {
        return $this->belongsTo(User::class);
    }
}
