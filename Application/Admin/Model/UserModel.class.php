<?php
namespace Admin\Model;
use Think\Model;

class UserModel extends Model{   
    //自动完成日期的添加方法
    protected $_auto = array (
        array('reg_date','date','1','function','Y-m-d H:i:s'),  //自动完成日期的添加，注意最后还的有一个参数时间格式
   );
    //添加用户信息
    public function addUser(){
        $userInfo=$this->create();//接收页面提交的数据信息      
        if(!$this->hasUser($userInfo['username'])){
            //$userInfo['reg_date']=date('Y-m-d H:i:s');//表单中没有日期，所以在这里加到数组中将可以了
            if($this->add($userInfo)){
               return true;//添加成功返回true
            }else{
               return false;//添加失败返回false
            }
        }else{
            return false;
        }
    }
    //查看是否添加过用户信息
    public function hasUser($username){
        $map['username']=$username;
        return $this->where($map)->select();//使用数组作为查询条件
    }
    //编辑用户信息
    public function getUserInfo() {
        $userId=I('get.id');//通过大I方法来获取ID号
        return $this->find($userId);
    }
    public function updateUserInfo() {
        $userInfo=$this->create();//获取页面信息
        if($this->save($userInfo)){//保存数据
            return 1;
        }else{
            return 0;
        }
    }
    
    //显示所有用户信息
    public function getUserList(){
        //查询用户信息
        $keyWord=I('post.keyword');
        $type=I('post.type');
        if(!empty($keyWord) && !empty($type)){
            $where=$type." like '%".$keyWord."%'";
            return $this->where($where)->select();
        }else{
           return $this->select();//返回所有用户信息 
        } 
    }
    
    //删除用户信息
    public function deleteUserInfo(){
        $userId=I('get.id');
        return $this->delete($userId);
    }
    
}