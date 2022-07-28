<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Contracts\Auth\MustVerifyEmail;

class User extends Authenticatable implements MustVerifyEmail
{
    use HasApiTokens;
    use HasFactory;
    use Notifiable;
    use SoftDeletes;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    public const TYPE = [
        'admin' => 1,
        'student' => 2,
    ];

    protected $table = 'users';

    protected $fillable = [
        'name',
        'email',
        'username',
        'password',
        'address',
        'school_id',
        'type',
        'parent_id',
        'email_verified_at',
        'closed',
        'code',
        'social_type',
        'social_id',
        'social_name',
        'social_nickname',
        'social_avatar',
        'description',
    ];
    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];
    public function roles()
    {
        return $this->belongsToMany(Role::class, 'users_roles', 'user_id', 'role_id');
    }

    public function tags()
    {
        return $this->morphedToMany(Tag::class, 'taggables', 'tag_id', 'taggable_id');
    }

    public function school()
    {
        return $this->belongsTo(School::class);
    }

    public function messages()
    {
        return $this->hasMany(Message::class);
    }
}
