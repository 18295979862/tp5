<?php
namespace app\index\controller;
use think\view;
use think\controller;
use think\Request;
use think\Log;
class News{
    public function read(){
        Log::record('我的日志','ex');
        echo 1;die;
    }

    public function test($id){
        $user=new \app\index\model\User();
        $data=$user::get(1);
        dump($data->name);
        $user->name='h';
        $user->pass='ha';
        $user->phone='1123';
        $user->save();
        dump(url());
        echo $user->setUser(1);
//        $baidu=file_get_contents('https://www.baidu.com');
//        dump($baidu);
        $request=Request();
        $requestBack=$request->create('http://47.91.220.106:8889/','get');
        dump($request->header());
        dump(112311);
//        dump(header());
//        dump($request);
//        dump($requestBack->param());
//        return view('user_test',['name'=>$data->name,'id'=>$id]);
    }
}
