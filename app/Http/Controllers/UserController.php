<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
 function showUser(){
    $users=[
        [
            'id'=>'1',
            'name'=>'viet'
        ],
        [
            'id'=>'2',
            'name'=>'nguyen'
        ]
        ];
        return view('list-user')->with(['abc'=> $users]);
 }
 function showSinhvien(){
    $sinhviens=[
        [
            'ten'=>'Nguyen xuan viet',
            'namsinhvien'=>'2003',
            'que'=>'vinh phuc'
        ]
    ];
    return view('sinh-vien')->with(['sv'=> $sinhviens]);
 }
 
 function getUser($id,$name = ''){
    echo $id;
    echo $name;
 }
 function updateUser(Request $request){
echo $request -> id;
 }
}
