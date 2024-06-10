<?php 
   class Home {
      public function index() {
         echo 'abc';
      }

      public function detail($id, $slug) {
         echo 'id sản phẩm'.$id.'<br/>';
         echo 'slug'.$slug;
      }

      public function search() {
         $keyword = $_GET['keyword'];
         echo 'Từ khóa cần tìm: '. $keyword;
      }
   }