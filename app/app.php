<?php
class App
{
   private $__controller, $__action, $__params;

   function __construct()
   {
      global $routes;
      // Kiểm tra xem $routes có trống không
      if (!empty($routes['default_controller'])) {
         $this->__controller = $routes['default_controller'];
      }
      $this->__action = 'index';
      $this->__params = [];
      $this->handleUrl();
   }

   function getUrl()
   {
      if (!empty($_SERVER['PATH_INFO'])) {
         // Lấy đường dẫn từ dấu /
         $url = $_SERVER['PATH_INFO'];
      } else {
         $url = '/';
      }
      return $url;
   }

   public function handleUrl()
   {
      $url = $this->getUrl();
      // array_filter lọc ra khoảng trắng mảng
      // Ví dụ :
      // (
      // [1] => http:                                    [1] => http: 
      // [2] =>                                          [2] => example.com
      // [3] => example.com      Kết quả  ==>            [3] => path
      // [4] => path                                     [4] => to 
      // [5] => to                                       [5] => resource 
      // [6] => resource                               
      // )
      $urlArr = array_filter(explode('/', $url));

      // Đặt lại kết quả của mảng để chúng liên tiếp bắt đầu từ 0
      $urlArr = array_values($urlArr);


      if (!empty($urlArr[0])) {
         // ucfirst lấy bảng chữ cái đầu tiên
         $this->__controller = ucfirst($urlArr[0]);
      } else {
         $this->__controller = ucfirst($this->__controller);
      }

      if (file_exists('app/controllers/' . ($this->__controller) . '.php')) {
         require_once 'controllers/' . ($this->__controller) . '.php';

         // Kiểm tra class $this->__controller tồn tại 
         if (class_exists($this->__controller)) {
            $this->__controller = new $this->__controller();
            unset($urlArr[0]);
         } else {
            $this->loadError();
         }
      } else {
         $this->loadError();
      }

      // Xử lý action 
      if (!empty($urlArr[1])) {
         $this->__action = $urlArr[1];
         unset($urlArr[1]);
      }

      // Xử lý params
      $this->__params = array_values($urlArr);

      // Kiểm tra method tồn tại
      if (method_exists($this->__controller, $this->__action)) {
         call_user_func_array([$this->__controller, $this->__action], $this->__params);
      } else {
         $this->loadError();
      }
   }

   public function loadError($name = '404')
   {
      require_once 'errors/' . $name . '.php';
   }

}