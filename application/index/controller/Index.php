<?php
namespace app\index\controller;

use think\Controller;
use think\Db;
use think\Request;

class Index extends Controller              //继承
{
    public function index()
    {
        //$array;
        $count =  Db::table('contents')->select();

        $tags =  Db::table('tags')->select();


        $this-> assign('contents',$count);

        $this-> assign('tags',$tags);


        return  $this->fetch('index');
    }
    public function Footer()
    {


        $count =  Db::table('contents')->select();
        $comments =  Db::table('comments')->where('page', input('page'))->select();
        $tags =  Db::table('tags')->select();

        //dump(input('page'));

        //dump($comments);
        $this-> assign('contents',$count);
        $this-> assign('comments',$comments);
        $this-> assign('tags',$tags);
        return $this->fetch("footer"); 
        //return  view();
    }
    public function Message()
    {

        
        $count =  Db::table('contents')->select();
        $comments =  Db::table('comments')->where('page', input('page'))->select();
        $tags =  Db::table('tags')->select();

        //dump(input('page'));

        $this-> assign('contents',$count);
        $this-> assign('comments',$comments);
        $this-> assign('tags',$tags);
        //return $this->fetch("message"); 
        return view();
    }
    public function About()
    { 
        $count =  Db::table('contents')->select();
        $comments =  Db::table('comments')->where('page', input('page'))->select();
        $tags =  Db::table('tags')->select();

        //dump(input('page'));

        $this-> assign('contents',$count);
        $this-> assign('comments',$comments);
        $this-> assign('tags',$tags);
        
        //return $this->fetch("about"); 
        return view();
    }
    public function Content()
    {
        return $this->fetch("content"); 
        //return view();
    }

    public function Moban()
    {
        return $this->fetch("moban"); 
        //return view();
    }

    public function Detail()
    {
        $count =  Db::table('contents')->where('id', input('id'))->select();
        $comments =  Db::table('comments')->where('page', input('id'))->select();
        $tags =  Db::table('tags')->select();


        $this-> assign('contents',$count);
        $this-> assign('comments',$comments);
        $this-> assign('tags',$tags);


        //$request = Request::instance();

        // var_dump(input('id'));

        
        return $this->fetch("detail"); 
        //return view();
    }

    public function add_comment()
    {
        if (request()->isPost()) {
            $data = [
                'page' => input('page')
                ,'reviewers' => input('reviewers')
                ,'content' => input('content')
                ,'commtime' => input('time')
            ];
            Db::name('comments')->insert($data);
        }
        return "评论成功";
    }


    //接口


    
}
