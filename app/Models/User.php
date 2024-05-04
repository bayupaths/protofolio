<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\HasMany;
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
        'username',
        'email',
        'password',
        'full_name', 'place_birth', 'date_birth', 'address', 'phone_number', 'profile_picture', 'bio',
        // 'provinces_id', 'regencies_id', 'zip_code', 'country',
        'education_id', 'experience_id', 'skill_id', 'certification_id'
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
        'password' => 'hashed',
    ];


    /**
     * Get the education for user
     *
     * @return void
     */
    public function education(): HasMany
    {
        return $this->hasMany(Education::class, 'education_id', 'id');
    }


    /**
     * experience
     *
     * @return HasMany
     */
    public function experience(): HasMany
    {
        return $this->hasMany(Experience::class, 'experience_id', 'id');
    }

     /**
     * certification
     *
     * @return HasMany
     */
    public function certification(): HasMany
    {
        return $this->hasMany(Certification::class, 'certification_id', 'id');
    }

     /**
     * skill
     *
     * @return HasMany
     */
    public function skill(): HasMany
    {
        return $this->hasMany(Skill::class, 'skill_id', 'id');
    }
}
