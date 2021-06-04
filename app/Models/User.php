<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable implements MustVerifyEmail
{
    use Notifiable, HasFactory;


    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $guarded = [];


    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];




    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */


//    protected $casts = [
//        'email_verified_at' => 'datetime',
//    ];
//
//    public function hasVerifiedEmail()
//    {
//        // TODO: Implement hasVerifiedEmail() method.
//    }
//
//    public function markEmailAsVerified()
//    {
//        // TODO: Implement markEmailAsVerified() method.
//    }
//
//    public function sendEmailVerificationNotification()
//    {
//        // TODO: Implement sendEmailVerificationNotification() method.
//    }
//
//    public function getEmailForVerification()
//    {
//        // TODO: Implement getEmailForVerification() method.
//    }
}
