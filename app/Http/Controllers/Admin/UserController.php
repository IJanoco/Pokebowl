<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\User;
use App\Models\Type_Users;
class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users = User::with('type_user')->get();
        $typeusers = Type_Users::all();
        return view('viewsadmin.users.index', [
            'users' => $users,
            'typeusers' => $typeusers
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        User::create([
            'name' => $request['name'],
            'last_name' => $request['last_name'],
            'email' => $request['email'],
            'password' => Hash::make($request['password']),
            'address' => $request['address'],
            'postal_code' => $request['postal_code'],
            'phone' => $request['phone'],
            'dni' => $request['dni'],
            'id_type' => $request['id_type'],
        ]);
        return redirect('user');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $input = $request->all();
        
        User::create($input);
        return redirect('user')->with('flash_message', 'Added!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
       //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(User $item)
    {
        return response()->json($item);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $users = User::find($id);
        $input = $request->all();
        $users->update($input);
        return redirect('user')->with('flash_message', 'Updated!');
    }

    public function update2(Request $request, $id)
    {
        $users = User::find($id);
        $input = $request->all();
        $users->update($input);
        return redirect('user2')->with('flash_message', 'Updated!');
    }

    public function index2()
    {
        
        return view('viewscustomer.profile.index');
    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $users = User::find($id);
        $users->delete();
        return redirect('user')->with('flash_message', 'deleted!');
    }

    
  
}
