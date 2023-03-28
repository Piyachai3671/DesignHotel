<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeDataController extends Controller
{
    public function index()
    {
        // $hhh = false;
        // return view('home.index')->with('hhh', $hhh);
        return view('home.index');
    }
    // public function UpdateValue(Request $r){
    //     $hhh = $r->input('hhh');
    //     // ทำการเปลี่ยนค่าตัวแปร $hhh ตามที่ต้องการ
    //     return response()->json(['message' => $hhh]);
    //   }
}
