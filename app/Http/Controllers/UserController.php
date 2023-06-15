<?php

namespace App\Http\Controllers;
use App\Models\User;
use App\Models\Project;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class UserController extends Controller
{
    public function index ()
    {
        return view ('index');
    }

    public function SearchPerson (Request $request)
    {
        $keyword = $request->input('keyword');

        // //クエリ生成
        $query = User::query();
    
        // // //もしキーワードがあったら
        if(!empty($keyword)){
            $query->where('name', 'LIKE', "%$keyword%");
        }

        $users = $query->orderBy('created_at','desc')->get();
        // dd($users);
        return view ('SearchPerson', ['users' => $users]);
    }
}
