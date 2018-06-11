<?php

namespace App\Http\Controllers\Com;

use App\Http\Controllers\Controller;
use App\Models\Com;
use Illuminate\Support\Facades\DB;


class ComController extends Controller
{
    public function index()
    {
        $list = DB::table('com')->paginate(2);
            return view('Com.index',['list'=>$list]);
    }

    public function addsave()
    {

        unset($_POST['_token']);

        $_POST['create_time'] = time();
        $_POST['update_time'] = time();

        $arr = DB::table('Com')->insert($_POST);

        return response()->json([
            'error' => 0
        ]);
    }

//        public function add()
//    {
//        return view('Admin.add');
//    }
//
//
//    public function update()
//    {
//        $arr = DB::table('admin')->where(['id'=>$_GET['id']])->get()->toarray();
//        return view('Admin.updates',['list'=>$arr]);
//    }
//
//    public function updates()
//    {
//        unset($_POST['_token']);
//        DB::table('admin')->where(['id'=>$_POST['id']])->update($_POST);
//        return redirect('Admin/index');
//    }
//
    public function delete()
    {
        DB::table('com')->delete($_GET['id']);
        return redirect('Com/index');
    }
}
