<?php

namespace Home\Model;
use Think\Model;
/**
 * Created by PhpStorm.
 * User: 孙龙
 * Date: 2016/4/11
 * Time: 20:53
 * 通过RegisterController传进来的id对accountinfo表进行操作
 */
class UserInfoModel extends Model{
    protected $tableName = 'usersinfo';
    public function write($qq,$phone,$address,$about,$uid,$image){
         return $this->where(['uid'=>$uid])->save(['qq'=>$qq,'phone'=>$phone,'address'=>$address,'about'=>$about,'image'=>$image]);
    }
    //通过uid获取用户所有信息
    public function getUsersinfo($uid){
        return $this->where(['uid'=>$uid])->limit(1)->find();
    }
    //为新注册的帐户添加一张照片
    //添加注册时间
    public function addUserImage($uid,$image){
        return $this->add(['uid'=>$uid,'image'=>$image,'regTime'=>time()]);
    }
    //通过users表的id来找到对应usersinfo表的id
    public function getUsersInfoID($usersID){
        return  $this->where(['uid'=>$usersID])->find();
    }
    /**
         * 读取图片路径
         * 删除文件
         * 删除表中图片字段
    */
    public function delUserPictureById($id){
 
        $userPictureName = $this->where(['id'=>$id])->limit(1)->find();
        unlink(UPLOAD_PATH.$userPictureName['image']);//UPLOAD_PATH是index中定义的路径
        return $this->where(['id'=>$id])->save(['image'=>'']);
    }
}
