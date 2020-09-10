<?php


use App\User;
namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class UserController extends Controller
{
     public function index(){


       $data = [
        'name' =>'saurabh saxena',
         'email' =>'sorusaxena786@gmail.com',
         'password'=>'1234',
      ];

         User::create($data);
     // $user = new User();
     // dd($user);

      //DB::insert('insert into users (name,email,password) values (?,?,?)',['saurabh','saurabhsaxena072@gmail.com',123456]);
      //$results = DB::select('select * from users where id = ?', array(1));
      // return $results;

      $user1 = User::all();
       return $user1;
        return ('Home');
     }
   
}
