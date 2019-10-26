<?php

namespace app\admin\controller;

use think\Controller;
use think\Db;

use Qiniu\Auth;
use Qiniu\Storage\UploadManager;
use think\Session;

class Index extends Controller              //继承
{
    //设置session
    public function __construct()
    {
        parent::__construct();      //构造函数 调用父类的初始化方法
        if (\is_null(Session::get('admin'))) {
            $this->redirect(url('Login/index'));
        }
    }
    /**
     * 七牛图片上传
     */
    public function upload()
    { // 用于签名的公钥和私钥
        $accessKey = 'n_qGILSKxQZ7Vfj4Q-yo8XcPhqo0kkDkckAub8O4';
        $secretKey = 'rHRZxFcvgK49vQMmR2RUdejx5Papb5pFJ8RHA6In';

        if ($this->request->isAjax()) {
            $file = request()->file($_FILES);
            // $a=Db::name('qiye')->where('id',$id)->field('id,img')->find();
            $file = $file['file'];
            // 构建鉴权对象
            $auth = new Auth($accessKey, $secretKey);
            // 要上传的空间
            $bucket = 'byxll';
            $domain = 'z2';
            $url = 'cdn.byxll.cn';
            $token = $auth->uploadToken($bucket);
            // 初始化 UploadManager 对象并进行文件的上传
            $uploadMgr = new UploadManager();
            // 调用 UploadManager 的 putFile 方法进行文件的上传
            list($ret, $err) = $uploadMgr->putFile($token, $file['name'], $file['tmp_name']);
            if ($err !== null) {
                return ["err" => 1, "msg" => $err, "data" => ""];
            } else {
                //返回图片的完整URL
                return ["code" => "2", "msg" => "上传完成", "data" => ('http://' . $url . '/' . $file['name']), "url" => $file['tmp_name']];
            }
        }
    }

    public function test33()
    {
        return view();
    }

    public function index()
    {
        return view();
    }
    //控制台
    public function console()
    {
        return view();
    }
    //托拽上传
    // public function upload()
    // {
    //     return view();
    // }

    //代码修饰
    public function code()
    {
        return view();
    }
    //内容
    public function content_list()    //文章列表
    {
        return view();
    }
    public function content_list_form()    //文章管理页面
    {
        $count =  Db::table('tags')->select();
        $this->assign('tags', $count);
        return  $this->fetch('content_list_form');
    }
    public function content_list_form_add()    //文章管理页面
    {
        return view();
    }

    public function get_content_list()    //获取文章列表    接口
    {
        $count =  Db::table('contents')->count();
        return json([
            'code' => 0,
            'count' => $count,
            'msg' => 'ok',
            'data' => db('contents')->select()
        ]);
    }
    public function get_content_list_id()    //获取文章列表id    接口
    {
        $count =  Db::table('contents')->where('id', input('id'))->find();
        return json(
            $count
        );
    }
    public function add_content_list()    //添加文章    接口
    {
        if (request()->isPost()) {
            $data = [
                'title' => input('title'), 'author' => input('author'), 'content' => input('content'), 'label' => input('label'), 'uploadtime' => input('time'), 'status' => input('status')
            ];
            Db::name('contents')->insert($data);
        }
        return "添加成功";
    }
    public function set_content()    //设置文章     接口
    {
        //Db::table('think_user')->where('id', )->update(['name' => 'thinkphp']);
        Db::table('contents')->where('id', input('id'))->update([
            'title' => input('title'), 'author' => input('author'), 'content' => input('content'), 'label' => input('label'), 'uploadtime' => input('uploadtime'), 'status' => input('status')
        ]);
        return "修改成功";
    }
    public function del_content()    //删除文章     接口
    {

        //$arr = input('id');
        // dump( $_POST['id']);
        if (request()->isPost()) {
            //db('contents')->delete(\input('id'));
            //Db::table('contents')->where('id',\input('id'))->delete();
            //db('contents')->where('id',\input('[id]'))->delete();
            Db::table('contents')->delete($_POST['id']);            //原生php 获取数组id
            return "删除成功";
        }
    }






    public function get_content_tags()     //获取文章分类 接口
    {
        $count =  Db::table('tags')->count();
        return json([
            'code' => 0,
            'count' => $count,
            'msg' => 'ok',
            'data' => db('tags')->select()
        ]);
    }
    public function get_content_tags_id()     //获取文章分类id 接口
    {
        $count =  Db::table('tags')->where('id', input('id'))->find();
        return json(
            $count
        );
    }
    public function set_content_tags()     //编辑文章分类  接口
    {
        Db::table('tags')->update(['tag' => input('tags'), 'id' => \input('id')]);
        return "修改成功";
    }
    public function del_content_tags()     //删除文章分类  接口
    {
        if (request()->isPost()) {
            db('tags')->delete(input('id'));
            return "删除成功";
        }
    }
    public function content_tags()    //分类管理
    {
        if (request()->isPost()) {
            $data = ['tag' => input('tags')];
            Db::name('tags')->insert($data);
            return "添加成功";
        }
        return view();
    }
    public function content_tags_form()    //分类管理编辑页面
    {
        return view();
    }
    public function content_tags_form_add()    //添加分类管理编辑页面
    {
        return view();
    }


    public function comment_list()              //评论列表管理
    {
        return view();
    }
    public function get_comment()              //获取评论
    {
        $count =  Db::table('comments')->count();
        return json([
            'code' => 0,
            'count' => $count,
            'msg' => 'ok',
            'data' => db('comments')->select()
        ]);
    }
    public function get_comment_id()              //获取评论
    {
        $count =  Db::table('comments')->where('id', input('id'))->find();
        return json(
            $count
        );
    }
    public function comment_form()              //评论管理编辑
    {
        return view();
    }
    public function del_comment()     //删除评论  接口
    {
        if (request()->isPost()) {
            Db::table('comments')->delete($_POST['id']);
            //db('comments')->delete(input('id'));
            return "删除成功";
        }
    }
    public function set_comment()     //编辑评论  接口
    {
        Db::table('comments')->update(['reply' => input('content'), 'id' => \input('id')]);
        return "修改成功";
    }
    // public function forum_list()    //帖子列表
    // {
    //     return view();
    // }
    // public function forum_replys()              //回帖列表
    // {
    //     return view();
    // }


    //用户
    public function administrators_list()    //后台管理员
    {
        return view();
    }
    // public function administrator_role()    //角色管理
    // {
    //     return view();
    // }
    public function user_list()              //网站用户
    {
        return view();
    }
    public function get_user_list()              //获取网站用户 接口
    {
        $count =  Db::table('user_web')->count();
        return json([
            'code' => 0,
            'count' => $count,
            'msg' => 'ok',
            'data' => db('user_web')->select()
        ]);
    }
    public function get_user_list_id()              //获取网站用户 接口
    {
        $count =  Db::table('user_web')
            ->where('id', input('id'))
            ->field('username,avatar,phone,email,jointime,sex')
            ->find();
        return json(
            $count
        );
    }
    public function del_user()              //删除用户 接口
    {
        if (request()->isPost()) {
            Db::table('user_web')->delete($_POST['id']);
            //db('comments')->delete(input('id'));
            return "删除成功";
        }
    }
    public function userform()              //用户管理
    {
        return view();
    }
    public function userform_add()              //添加用户页面
    {
        return view();
    }
    public function add_user()              //添加用户  接口
    {
        if (request()->isPost()) {
            $data = [
                'username' => input('username'), 'password' => input('password'), 'phone' => input('phone'), 'email' => input('email'), 'jointime' => input('time'), 'avatar' => input('avatar'), 'sex' => input('sex')
            ];
            Db::name('user_web')->insert($data);
        }
        return "添加成功";
    }
    public function set_user()              //添加用户  接口
    {
        Db::table('user_web')->where('id', input('id'))->update([
            'username' => input('username'), 'phone' => input('phone'), 'password' => input('password'), 'email' => input('email'), 'sex' => input('sex'), 'avatar' => input('avatar')
        ]);
        return "修改成功";
    }










    // public function adminform()              //管理员管理
    // {
    //     return view();
    // }


    //系统设置
    public function website()           //网站设置
    {
        return view();
    }
    public function get_website()           //获取网站设置  接口
    {
        $count =  Db::table('website')->where('id', input('id'))->find();
        return json(
            $count
        );
    }
    public function set_website()           //设置网站  接口
    {

        //Db::table('website')->where('id', 1)->update(data);

        Db::table('website')->where('id', 1)->update([
            'sitename' => input('sitename'), 'title' => input('title'), 'keywords' => input('keywords'), 'descript' => input('descript'), 'copyright' => input('copyright')
        ]);


        // Db::table('website')
        // ->where('id', 1)
        // ->update([
        //     'login_time'  => Db::raw('now()'),
        //     'login_times' => Db::raw('login_times+1'),
        // ]);
        return "修改成功";
    }

    public function info()              //基本资料
    {
        return view();
    }
    public function get_info()              //获取基本资料  接口
    {
        $count =  Db::table('user_admin')
            ->where('id', input('id'))
            ->field('username,loginname,phone,avatar,email,sex')->find();
        return json(
            $count
        );
    }
    public function set_info()              //修改基本资料  接口
    {
        Db::table('user_admin')->where('id', 1)->update([
            'loginname' => input('loginname'), 'username' => input('username'), 'phone' => input('phone'), 'avatar' => input('avatar'), 'email' => input('email'), 'sex' => input('sex')
        ]);
        return "修改成功";
    }


    public function password()          //修改密码
    {
        return view();
    }
    public function set_password()          //修改密码
    {
        $count =  Db::table('user_admin')
            ->where('id', input('id'))
            ->field('password')->find();
        $oldPassword = input('oldPassword');
        $password = input('password');
        if ($count['password'] == $oldPassword) {
            if ($count['password'] == $password) {
                return '新旧密码一样';
            } else {
                Db::table('user_admin')->where('id', 1)->update(
                    ['password' => input('password')]
                );
                return '修改成功';
            }
        } else {
            return '旧密码输入错误';
        }
        return $count;
    }
}
