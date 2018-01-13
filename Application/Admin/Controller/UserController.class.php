<?php
 namespace Admin\Controller;
 use Think\Controller;
 
 class UserController extends Controller{
     //显示所有用于信息
     public function view() {
        $this->assign('userList',D('user')->getUserList());//调用模型里面的方法显示所有的用户
        $this->display('user_list');//渲染的模板所在的目录要和控制器的名称相同
     }
     
     //添加用户信息
     public function add() {
       $this->assign('act',U('user/userInsert'));//将提交的URL地址赋值给变量
       $this->assign('actInfo','添加用户');//将按钮的名称赋值给变量
       $this->display('user_info');//指定显示的页面
     }
     
     public function userInsert() {
         $userModel=D('user');//实例化模型：参数是表的名称，在数据库配置文件中已经写了前缀所以不写
         //$userModel->addUser();//调用模型中的方法
         if($userModel->addUser()){
             $this->success('添加用户信息成功');
         }else{
             $this->error('添加用户信息失败');
         }
     }
    //编辑用户信息
     public function edit(){
         $this->assign('act',U('user/userUpdate'));//将提交的URL地址赋值给变量
         $this->assign('actInfo','更新用户');//将按钮的名称赋值给变量
         $this->assign('userInfo',D('user')->getUserInfo());
         $this->display('user_info');
     }
     
     public function userUpdate($param) {
         $userModel=D('user');
         if($userModel->updateUserInfo()){
             $this->success('更新用户信息成功');
         }else{
             $this->error('更新用户信息失败');
         }
     }
     
     //删除用户信息
     public function delete(){
         if(D('user')->deleteUserInfo()){
             $this->success('删除用户信息成功');             
         }else{
             $this->error('删除用户信息失败');
         }
     }
 }