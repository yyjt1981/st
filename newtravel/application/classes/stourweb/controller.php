<?php
/**
 * User: Netman
 * Date: 14-3-27
 * Time: 下午9:53
 */

class Stourweb_Controller extends Controller {

  // 用户数据赋值
   public $_data = array();
   public $params = array();
    /*
     * before
     */
   public function before()
   {
       $params = $this->request->param('params');

       $this->params = $this->analyze_param($params);

       $controller = $this->request->controller();



       if($controller != 'login')
       {

           $needCheck=1;//uplodify检测
           if ($_SERVER['HTTP_USER_AGENT'] == 'Shockwave Flash')
           {
               $needCheck=0; // avoid uplodify check.
           }
           if($needCheck)
           {
               $session = Session::instance();
               $session_username = $session->get('username');
               $cookie_username = Cookie::get('username');
               if(!isset($session_username) && !isset($cookie_username))
               {
                   $this->request->redirect('login/index');
               }
               else if(isset($cookie_username)&&!isset($session_username))
               {
                   $sql="select * from sline_admin where username='{$cookie_username}'";

                   $curuser=DB::query(1,$sql)->execute()->as_array();

                   if(empty($curuser[0]['id']))
                   {
                       $this->request->redirect('login/index');
                   }

                   $session = Session::instance();
                   $session->set('username',$curuser[0]['username']);
                   $session->set('userid',$curuser[0]['id']);
                   $session->set('roleid',$curuser[0]['roleid']);
                   $rolemodule=ORM::factory('role_module')->where("roleid='{$curuser[0]['roleid']}'")->as_array();
                   $session->set('rolemodule',$rolemodule);

               }
              /* if(empty($username))
               {
                   $this->request->redirect('login/index');
               }*/

           }

       }



   }

   /*
    * 显示模板
    * @param string $tpl,模板名
    * */
   public function display($tpl)
   {
       $view = Stourweb_View::factory($tpl);

       foreach($this->_data as $key=>$value)
       {
           $view->set($key,$value);
       }

       $this->response->body($view->render());

   }

  /*
   * 模板赋值,控制器赋值
   * @param string $key
   * @param string $value
   * */
   public function assign($key,$value)
   {

       $this->_data[$key] = $value;

   }
    /*
  * 变量值分析器
  * @param string $param
  * */
    public function analyze_param($param)
    {

        $arr = explode('/',$param);

        $out = array();
        for($i = 0;isset($arr[$i]) ;$i=$i+1)
        {
           if($i % 2 ==0)
           {
               $key = $arr[$i];
               $value= isset($arr[$i+1]) ? $arr[$i+1] : 0;
               $out[$key] = $value;
           }

        }
        return $out;

    }


} 