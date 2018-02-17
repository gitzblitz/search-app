<?php
/**
 * Created by PhpStorm.
 * User: george.ngethe
 * Date: 17/02/2018
 * Time: 10:13
 */

namespace App\Http\Controllers;


use Illuminate\Http\Request;

class HomeController
{
    public function __construct()
    {
    }

    public function index(Request $request){

        return 'This is a lumen application';
    }


}