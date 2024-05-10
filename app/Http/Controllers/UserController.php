<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index(){
        //echo "index";
        return view ("user.index");
    }

    public function show(){
        //echo "show";
        return view ("user.show");
    }

    public function edit($id){
        //echo "edit-".$id;
        return view ("user.edit",[userid=>$id]);
    }

    public function list($page=1){
        //echo "page-".$page;
        $title="Danh sach";
        $data=["name"=>"Thuan Loi","lop"=>"CCQ2211J"];
        return view ("user.list", compact("title","data"));
    }
}


