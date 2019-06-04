<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2019/5/20
 * Time: 10:10
 */

namespace App\Http\Controllers\Admin;


use App\Http\Controllers\Controller;

class ShufflingController extends Controller
{
    public function index()
    {
        return view('admin.shuffling.index');
    }
}