<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    public $fillable = ['topic_id', 'comment', 'user_id'];
}
