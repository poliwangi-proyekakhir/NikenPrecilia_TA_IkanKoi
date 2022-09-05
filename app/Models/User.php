<?php

namespace App\Models;  # 20. Template Model

use Illuminate\Contracts\Auth\MustVerifyEmail;  # 20. Template Model
use Illuminate\Database\Eloquent\Factories\HasFactory;  # 20. Template Model
use Illuminate\Foundation\Auth\User as Authenticatable;  # 20. Template Model
use Illuminate\Notifications\Notifiable;  # 20. Template Model
use Laravel\Sanctum\HasApiTokens;  # 20. Template Model

# 22. Kita anggap sebagai class blueprint nya, ketika kita mau buat user baru, jadi model sebagai representasi tabel di kodingan kita.
class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    // protected $fillable = [  # 21. $fillable adalah fill2 mana aja yang boleh diisi jadi cuman 3 yaitu nama, email, password sisanya akan diisi oleh laravelnya secara otomatis.
    //     'name',
    //     'username',
    //     'email',
    //     'password',
    // ];

    protected $guarded = ['id'];

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

    public function posts()
    {
        return $this->hasMany(Post::class);
    }
}
