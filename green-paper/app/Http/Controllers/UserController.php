<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Auth;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('user/index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        try {
            $user = new User;
            $user->name = $request->input("name") ? $request->input("name") : null;
            $user->cell = $request->input("cell") ? $request->input("cell") : null;
            $user->email = $request->input("email") ? $request->input("email") : null;
            $user->email_verified_at = $request->input("email_verified_at") ? $request->input("email_verified_at") : null;
            $user->password = Hash::make($request->input("password"));
            $user->flag_admin = $request->input("flag_admin") ? $request->input("flag_admin") : 0;
            $user->birthday = $request->input("birthday") ? $request->input("birthday") : null;
            $user->gender = $request->input("gender") ? $request->input("gender") : null;
            $user->user_log = Auth::user()->id;
            $user->remember_token = $request->input("remember_token") ? $request->input("remember_token") : null;
            $user->created_at = date('Y-m-d h:m:s');
            $user->save();
            return ["code" => 200, "message" => "Cadastrado com sucesso"];
        } catch (Exception $e) {
            return ["code" => 500, "message" => "Erro ao cadastrar"];
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\UserController  $userController
     * @return \Illuminate\Http\Response
     */
    public function show(UserController $userController)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\UserController  $userController
     * @return \Illuminate\Http\Response
     */
    public function edit(UserController $userController)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\UserController  $userController
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, UserController $userController)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\UserController  $userController
     * @return \Illuminate\Http\Response
     */
    public function destroy(UserController $userController)
    {
        //
    }

    public function dataTable(Request $request)
    {
        $data = User::dataTable($request->all());
        return response()->json(["data" => $data], 200);
    }
}
