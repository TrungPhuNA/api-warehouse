<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserBankAccount extends Model
{
    use HasFactory;
    protected $table = 'user_bank_accounts';
    protected $guarded = [''];

    public function user()
    {
        return $this->belongsTo(User::class,'user_id');
    }

    public function bank()
    {
        return $this->belongsTo(Bank::class,'bank_id');
    }
}
