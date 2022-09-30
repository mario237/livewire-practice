<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * @property mixed|string $todo
 * @property false|mixed $completed
 * @method static where(string $string, $id)
 * @method static orderBy(string $string, string $string1)
 */
class TodoItem extends Model
{
    use HasFactory;
    protected $guarded = [];
}
