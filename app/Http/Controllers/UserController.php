<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    //添加方法
    /*
     * 获取添加页面
     */
    public function add()
    {
        return view('user.add');
    }

    public function store(Request $request)
    {
//       $data = $request->all();
        //不要token
        $data = $request->except('_token');
//        dd($data);
        $data['password'] = md5($data['password']);

        //表单验证
        //添加操作

//        User::create(['username' => $data['username'],'password'=>$data['password']]);
        $res = User::create($data);

//        dd($res);
        if($res){
            return redirect('user/index');
        }else{
            return back();
        }


    }

    //用户列表
    public function index()
    {
        $data = User::get();
        return view('user.index',['user' =>$data]);
        //return view('user.index')->with('user',$data);
//        return view('user.index',compact('$data'));


    }

    //修改页面
    public function edit($id)
    {
        $user = User::find($id);

        return view('user.edit',compact('user'));
    }


    //修改操作
    public function update(Request $request)
    {
        $input = $request->all();
        $user = User::find($input['id']);
        $res = $user->update(['username'=> $input['username']]);
        if($res){
            return redirect('user/index');
        }else{
            return back();
        }
    }

    //删除
    public function del($id)
    {
        $user = User::find($id);

        $res = $user->delete();

        if($res){
            return redirect('user/index');
            //json
            //$data = ['status'=>0,'message'=>'删除成功'];
            //return $data;

        }else{
            return back();
        }
    }

}
