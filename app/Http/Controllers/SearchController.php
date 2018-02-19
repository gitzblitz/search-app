<?php
/**
 * Created by PhpStorm.
 * User: george.ngethe
 * Date: 17/02/2018
 * Time: 00:46
 */

namespace App\Http\Controllers;


use App\User;
use Illuminate\Http\Request;

class SearchController extends Controller
{
    public function __construct()
    {

    }


    public function index(Request $request){

        return User::all();
    }

    public function search(Request $request){

        $error = ['error' => 'No results found, please try with different keywords.'];

        if ($request->has('q')){

            $candidates = User::search($request->get('q'))->get();

            return $candidates->count()? $candidates : $error;
        }

        return $error;
    }

}