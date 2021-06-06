<?php

namespace App;

use Illuminate\Contracts\Auth\Authenticatable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Notifications\Notifiable;

class Customer extends Model
{
    use SoftDeletes;
    use Notifiable;
    protected $fillable = ['fullname','address','contactno','email','password','verify_code'];
    protected $hidden = ['remember_token'];
    protected $casts = ['email_verified_at' => 'datetime'];
    protected $table = 'customers';
}
