<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class employee extends Model
{
    use HasFactory;

    protected $fillable = [
       'lastname',
       'firstname',
       'middlename',
       'position',
       'employee_id',
       'facebook',
       'telegram',
       'wechat',
       'viber',
       'whatsapp',
       'profile',
       'qrcode',
    ];
}
