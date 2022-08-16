<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Answer extends Model
{
    use HasFactory;
    protected $fillable = [
        'id',
        'content',
        'question_id',
        'correct',
    ];

    public function questions()
    {
        return $this->belongTo(Question::class);
    }
}
