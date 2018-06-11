<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2018/6/11 0011
 * Time: 下午 12:07
 */

namespace app\Models;


use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Admin extends Model
{
    protected $table="admin";
     function log($data) {
         if(empty($data['uname'])||empty($data['pwd'])) {
             echo '用户名或密码不能为空';
             return false;
         } else {
              $user= DB::table('admin')->where(['uname'=>$data['uname']])->get()->toArray();
              if($user) {
                  if(md5($data['pwd']) == $user[0]->pwd){

                  } else {
                      echo '密码错误';
                      return false;
                  }
              } else {
                  echo '用户名不存在';
                  return false;
              }
         }
     }
}