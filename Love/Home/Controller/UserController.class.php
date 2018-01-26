<?php
namespace Home\Controller;
use Think\Controller;
class UserController extends Controller {
    public function _before_admin(){

    }
    public function index(){
        $this->display();
    }
    public function login(){
        $code=$_POST['code'];
        $username=$_POST['username'];
        $password=md5($_POST['password']);
        if(check_verify($code)){
            $m=M('User');
            $data['username']=$username;
            $data['password']=$password;
            $data['pending']=1;
            $res=$m->where($data)->find();
            if($res>0){
                session('hemizi', 'hai');
                $this->success('登陆成功',admin);
            }else{
                $this->error('登陆失败');
            }
        }else{
            $this->error('验证码错误');
        }
    }
    public function admin(){
        $check= session('hemizi');
        if($check!='hai'){
            $this->error('检测到你没有登陆，请登陆后再试','index');
        }
        $m=M('Message');
        $count=$m->count();
        $page=new \Think\Page($count,5);
        $show=$page->show();
        $list=$m->limit($page->firstRow.','.$page->listRows)->select();
        $this->assign('list',$list);
        $this->assign('data',$show);
        $this->display();
    }
    public function del(){
        $id=$_GET['id'];
        $m=M('Message');
        $data['id']=$id;
        $res=$m->where($data)->delete();
        if($res==1){
            $this->success('成功');
        }else{
            $this->error('失败');
        }
    }
    public function edit(){
        $id=$_GET['id'];
        $m=M('Message');
        $data['id']=$id;
        $arr=$m->where($data)->find();
        $this->assign('id',$arr);
        $this->display();
    }
    public function doedit(){
        $id=$_POST['id'];
        $realname=$_POST['realname'];
        $towho=$_POST['towho'];
        $content=$_POST['content'];
        $m=M('Message');
        $m->realname=$realname;
        $m->towho=$towho;
        $m->content=$content;
        $res=$m->where("id=$id")->save();
        if($res!=0){
            $this->success('成功');
        }else{
            $this->error('失败');
        }
    }
}