<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Tag extends Model
{
    use HasFactory;
    use SoftDeletes;

    public function users()
    {
        return $this->morphedByMany(User::class, 'taggables', 'tag_id', 'taggable_id');
    }
}
