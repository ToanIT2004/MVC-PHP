<?php 
   // Kế thừa từ class Model
   class HomeModel {
      protected $_table = 'products';

      public function getList() {
         $data = [
            'item1',
            'item2',
            'item3',
         ];
         return $data;
      }
   }