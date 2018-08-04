<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;

use Illuminate\Http\Request;

class BlogController extends Controller
{
    public function index(){
        return view('hafidhlar/home');
    }

    public function show($id){
        // inputan dengan id
        $nilai='ini adalah linknya ' . $id;
        
        // inputan string
        $user = 'hafidh julian';

        // inputan array
        $nama = ['hafidh', 'rahman', 'haris', 'rivo'];

        // alert dengan js
        $unescaped = '<script> alert("x!")</script>';

        // get database
        $test = DB::table('users')->get();

        // tag untuk mencari kesalahan pada inisialisasi
        // dd($test);

        // insert database otomatis ketika di reload/refresh
        // DB::table('users')->insert([
        //     ['username' => 'test', 'pasword' => '12354']
        // ]);

        // update database otomatis ketika di reload/refresh
        // DB::table('users')->where('username','test')->update([
        //         'username' => 'test2'
        //     ]);

        // delete database otomatis ketika di reload
        // DB::table('users')->where('id', '<','5')->delete();

        $test2 = DB::table('users')->where('username','like','%a%')->get();

        // select 1 value di database
        $password = DB::table('users')->where('username', 'rahman')->value('pasword');

        return view('hafidhlar/single',['coba' => $nilai, 'user' => $user, 'name' => $nama, 'unescaped' => $unescaped, 'test' => $test, 'pass' => $password,
        'test2' => $test2]);
    }
}
