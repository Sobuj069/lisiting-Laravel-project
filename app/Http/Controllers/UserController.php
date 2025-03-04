<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function show_users()
    {
        $users = DB::table('users')->get();
        return view('info', ['data' => $users]); // Ensure 'data' is used in the Blade file
    }

    public function all_user(string $id)
    {
        $users = DB::table('users')->where('id', $id)->get();
        return view('user', ['data' => $users]); // Ensure 'data' is used in the Blade file
    }


    public function updatepage(string $id)
    {
        $users = DB::table('users')->find($id);
        
        if (!$users) {
            abort(404, 'User not found');
        }
        
        return view('updateuser', ['data' => $users]);
    }
    

    public function updateuser (Request $request,$id)
    {
       
        $user = DB::table('users')
        ->where('id',$id )
        ->update([
            'name' => $request->name,
            'email' => $request->email,
            'age' => $request->age,
            'city' =>$request->city
           
        ]);

        if ($user) {
           echo "<h1>Data Added Successfully</h1";
           return redirect()->route('home');
        } else {
          echo "<h1>Data Not Added Successfully</h1";
        }
    }



    public function delete_user(string $id)
    {
        $deleted = DB::table('users')->where('id', $id)->delete();

        if ($deleted) {
            return redirect()->back()->with('success', 'User deleted successfully!');
        } else {
            return redirect()->back()->with('error', 'User not found or already deleted!');
        }
    }

    public function add_user(Request $request)
    {
        $user = DB::table('users')->insert([
            'name' => $request->name,
            'email' => $request->email,
            'age' => $request->age,
            'city' =>$request->city,
            'created_at' =>now(),
            'updated_at' => now()
        ]);

        if ($user) {
           echo "<h1>Data Added Successfully</h1";
           return redirect()->route('home');
        } else {
          echo "<h1>Data Not Added Successfully</h1";
        }
    }

    public function edit_user(string $id)
    {
        $user = DB::table('users')->where('id', $id)->first(); // Get single user
    
        if (!$user) {
            return redirect()->back()->with('error', 'User not found.');
        }
    
        return view('edit_user', ['user' => $user]); // Pass data to the view
    }
  }

