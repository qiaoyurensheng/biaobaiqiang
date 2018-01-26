<?php
namespace Home\Controller;
use Think\Controller;
class IndexController extends Controller {
    public function index(){
    	$m=M('Message');
        $count=$m->count();
        $page=new \Think\Page($count,20);
        $show=$page->show();
        $list=$m->limit($page->firstRow.','.$page->listRows)->order('id desc')->select();
        $this->assign('list',$list);
    	$this->assign('data',$show);
        $this->display();
    }
    public function tell(){
    	$iliguchi=$_SESSION['iliguchi'];
    	if(empty($iliguchi)){
    		$this->display();
    	}else{
    		$this->error('告白过于频繁，我。。。勒个大去');
    	}
    	
    }
    public function dotell () {
    	$m=M('Message');
    	$realname=$_POST['realname'];
    	$towho=$_POST['towho'];
    	$content=$_POST['content'];
        $email=$_POST['email'];
    	if(empty($realname) || empty($towho) || empty($content)){
    		$this->error('请填写所有项目');
    	}else{
    		$m->realname=$realname;
    		$m->towho=$towho;
    		$m->content=$content;
    		$m->lastdate=date("Y-m-d H:i:s");
            $m->email=$email;
    		$m->ip=$_SERVER["REMOTE_ADDR"];
    		$res=$m->add();
    		session('iliguchi','hai');
    		if($res>0){
    			$this->success('成功','index');
    		}else{
    			$this->error('失败');
    		}
    	}
    }
    public function share(){
        $id=$_GET['id'];
        $m=M('Message');
        $res=$m->where("id=$id")->find();
        $this->assign('data',$res);
        $this->display();
    }
    public function getavatar(){
        $email=$_GET['var'];
        $usergravatar = 'http://gravatar.duoshuo.com/avatar/' . md5($email);
        echo $usergravatar;
    }
    public function search(){
        $key=$_POST['key'];
        $search=M('Message');
        $data['towho'] = array('like',"$key");
        $arr=$search->where($data)->order('id desc')->select();
        if(empty($arr)){
            $this->assign('none','抱歉，没有搜到这个结果');
        }else{
            $this->assign('none',"以下是 $key 的搜索结果");
        }
        $this->assign('list',$arr);
        $this->display();
    }
    public function about(){
        $this->display();
    }
}