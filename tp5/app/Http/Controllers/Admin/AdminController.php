<?php

namespace App\Http\Controllers\Admin;




use App\Http\Controllers\Controller;
use app\Models\Admin;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Redirect;

class AdminController extends Controller
{
    public function index()
    {
        return view('Admin.index');
    }

    public function login() {
        echo'123';die;
        $model = new Admin();
        if($model->log($_POST)){
            return Redirect::to('ComController/index');
        }else {
            echo '登录失败';
        }


    }
//    public function add()
//    {
//        return view('Admin.add');
//    }
//
//    public function addsave()
//    {
//        unset($_POST['_token']);
//        $arr = DB::table('admin')->insert($_POST);
//        return redirect('Admin/index');
//    }
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
//    public function delete()
//    {
//        DB::table('admin')->delete($_GET['id']);
//        return redirect('Admin/index');
//    }
}
