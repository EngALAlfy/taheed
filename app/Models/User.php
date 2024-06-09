<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'email',
        'role',
        'password',
        'phone',
        'national_id',
        'receipt_document',
        'motors_count',
        'email_verified_at',
        'remember_token',
    ];


    public static array $rules = [
        'name' => "required|max:255|min:3",
        'email' => "required|email|max:255|unique:users,email",
        'role' => "required|max:100",
        'password' => "required|max:100|min:4",
    ];

    public static array $updateRules = [
        'name' => "required|max:255|min:3",
        'email' => "required|email|max:255|unique:users,email",
        'role' => "nullable|max:100",
        'password' => "nullable|max:100|min:4",
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
        'password' => 'hashed',
        'points' => 'float',
    ];

    protected static function boot()
    {
        parent::boot();
    }
}
