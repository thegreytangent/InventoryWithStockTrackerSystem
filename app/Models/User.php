<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\HasOne;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    protected $guarded = [];


    public function getCompleteName() : string {
        if (!$this->UserInfo) return "";

        $info = $this->UserInfo;

        return ucfirst($info->firstname) . " " . ucfirst($info->lastname);
    }

    public function getFirstname(): string {
        if (!$this->UserInfo) return "";
        return $this->UserInfo->firstname;
    }

    public function getLastname(): string {
        if (!$this->UserInfo) return "";
        return $this->UserInfo->lastname;
    }

    public function getUsername(): string {
        return $this->username;
    }

    public function getRole() : string {
        if ($this->role == 'admin') {
            return 'Administrator';
        };
        return 'Stock Personnel';
    }


    public function UserInfo() : HasOne {
        return $this->hasOne(UserInfo::class);
    }




}
