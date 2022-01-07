<?php
    namespace App\Http\Controllers\Admin;
    // use myframe\Controller;         //导入Controller类
    use App\User; //导入User类
    use myframe\Captcha;   // 导入验证码类  
    class LoginController extends CommonController {
        //输出验证码
        public function Captcha(Captcha $captcha){
            $code = $captcha -> create();
            $this->setCaptcha($code);
            $captcha->show($code);
        }
        protected function setCaptcha($code){
            $_SESSION['cms']['captcha'] = $code;
        }
        //判断验证码
        protected function checkCaptcha($code){
            if(isset($_SESSION['cms']['captcha'])){
                $captcha = $_SESSION['cms']['captcha'];
                unset($_SESSION['cms']['captcha']);
                return strtolower($code) === strtolower($captcha);
            }
            return false;
        }

        //checkLoginExclude 保存不用记录用户登录的方法
        protected $checkLoginExclude = ['index','login','captcha','logout'];

        public function index() {
            return $this -> fetch('admin/login');
        }

        //$user表示User类的一个对象
        public function login(User $user) {
            $username = $this->request->post('username','');
            $password = $this->request->post('password','');
            $captcha = $this->request->post('captcha','');
            if(!$this->checkCaptcha($captcha)){
                $this->error('登录失败：验证码有误');
            }

            $data = $user->where(['username'=>$username])->first();
            if(!$data) {
                $this->error('用户不存在！');
            }
            //判断密码是否正确
            if($data['password'] != $this->passwordMD5($password,$data['salt'])) {
                $this->error('密码不正确。');
            }
            //调用setlogin()记录登录状态
            $this->setLogin(['id' => $data['id'],'name' => $data['username']]);
            
            $this->success('登录成功！');
        }

        //对用户密码进行MD5加密
        protected function passwordMD5($password,$salt) {
            return md5(md5($password).$salt);
        }

        //保存用户信息
        protected function setLogin(array $user = []){
            $_SESSION['cms']['admin'] = $user;
        }
        public function logout(){
            $this->setLogin([]);
            $this->redirect('/index.php/admin/login/index');
        }
    }
?>
