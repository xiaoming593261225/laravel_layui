<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2019/5/20
 * Time: 11:04
 */

namespace App\Models;
use Illuminate\Foundation\Auth\User as Authenticatable;



class Shuffling extends Authenticatable
{
    protected $table = 'shufflings';
    protected $fillable = ['address_id','title','print'];
}