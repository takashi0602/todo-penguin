<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
  protected $fillable = ['user_id', 'task_name', 'task_description', 'complete_flg'];
}
