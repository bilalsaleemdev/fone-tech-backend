<?php

namespace App\Http\Controllers;
use App\User;
use App\Shop;
use Illuminate\Http\Request;

class SuperAdminController extends Controller
{
      public function myUsers() 
        {
            $data = User::all();
            return response()->json($data,200);
        }
     public function all_shops()
     {
         $data = Shop::all();
         return response()->json($data,200);
     }
}
