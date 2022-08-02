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

    protected $table = 'users';
    protected $guarded = false;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'surname',
        'patronymic',
        'email',
        'password',
        'age',
        'address',
        'gender'
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

    const GENDER_NULL = '';
    const GENDER_FEMALE = 1;
    const GENDER_MALE = 2;

    static function getGenders() {
        return [
            self::GENDER_NULL => '',
            self::GENDER_FEMALE => 'Женский',
            self::GENDER_MALE => 'Мужской',
        ];
    }

    public function getGenderTitleAttribute() {
        return self::getGenders()[$this->gender];
    }
}
