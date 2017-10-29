<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Auth;

use App\Http\Requests;

class AdminController extends Controller
{
    public function getAdmin() {
        return view('admin.home');
    }

    public function getAdmins(){
        $user = Auth::user();
        $id = Auth::id();
        $admins = User::whereRaw("admin = ? AND id != ?", [1, $id])->get();
        return view('admin.addAdmin.adminsList', compact('admins'));
    }

    public function getCreateAdmin(){
        return view('admin.addAdmin.createAdmin');
    }

    public function newAdmin(Request $request){
        $this->validate($request, [
            'name' => 'required|min:3',
            'phone' => 'required|min:10',
            'email' => 'required|email|unique:users',
            'password' => 'required|min:6',
            'password_confirmation' => 'required|min:5|same:password'
        ]);
        User::create(['name' => $request->name, 'email' => $request->email, 'phone' => $request->phone, 'admin' => 1, 'password' => bcrypt($request->password)]);
        return redirect("/cpanel/admins")->with('message',"Admin Created Successfully");
    }

    public function editAdmin($id){
        $admin = User::find($id);
        if($admin){
            return view('admin.addAdmin.editAdmin', compact('admin'));
        }else{
            return redirect("/cpanel/admins")->withErrors("User Not Found");
        } 
    }

    public function updateAdmin(Request $request, $id){
        $this->validate($request, [
            'name' => 'required|min:3',
            'email' => "required|email|unique:users,email,$id",
            'password' => 'min:6',
            'password_confirmation' => 'same:password',
            'phone' => 'required|min:10'
        ]);
        $saveAdmin = User::find(Input::get('id'));
        if($saveAdmin){
            $saveAdmin->name = Input::get('name');
            $saveAdmin->email = Input::get('email');
            $saveAdmin->password = bcrypt(Input::get('password'));
            $saveAdmin->phone = Input::get('phone');
            $saveAdmin->update();
            return redirect("/cpanel/admins")->with('message',"Admin Updated Successfully");
        }else{
            return redirect("/cpanel/admins")->withErrors("User Not Found");
        }   
    }

    public function deleteAdmin($id){
        $admin = User::whereRaw("id = ? AND admin = ?", [$id, 1])->first();
        if($admin){
            $admin->delete();
            return redirect("/cpanel/admins")->with('message', "User deleted Successfully");
        }else{
            return redirect("/cpanel/admins")->withErrors("User Not Found");
        }
    }
}
