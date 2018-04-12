<?php
namespace App\Http\Controllers;

class TestController extends Controller
{
    // function indexPage(){
    //     return route('test.addUser',['id'=>'10']);
    // }

    // function addUser($id){
    //     echo 'User id =>'.$id;
    // }

    function indexPage(){
        return view('user.index');
    }

    function addUser($id){
        return view('user.addUser',['id'=>$id]);
    }

}
