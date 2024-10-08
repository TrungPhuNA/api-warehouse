<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserType extends Model
{
    use HasFactory;
    protected $table = 'user_types';
    protected $guarded = [''];
    protected $hidden = ['pivot'];

    public function users()
    {
        return $this->belongsToMany(User::class,'user_has_types');
    }
}
