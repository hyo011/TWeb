<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Illuminate\Support\Facades\DB;
class ApiController extends Controller
{
    //


    
    public function addUser(Request $request){

        $user = User::where('email', '=', $request['email'])->first();
        
        if ($user === null) {

            User::create([
                'name' => $request['name'],
                'email' => $request['email'],
                'password' => bcrypt($request['password']),
            ]);

            echo "
            <script>
                alert('Action:insert name=",$request['name']," and password=",$request['password'],"');
                window.location.pathname='home';
            </script>";

            //return redirect('home');

        }else{

            $user->name = $request['name'];
            $user->password = bcrypt($request['password']);
            $user->save();
            
            echo "
            <script>
                alert('Action:update name=",$request['name']," and password=",$request['password'],"');
                window.location.pathname='home';
            </script>";

        }

        //

    }

    public function deleteUser($email){

        User::where('email',$email)->delete();
        
       // DB::delete('delete from users where id = ?',$email);
       //$user = User::findOrFail($email);
      // $user->delete();

        return redirect('home');
       echo $email + "  asdasd";

    }

}
