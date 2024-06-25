<?php 
   class ProductModel {
      public function getProductList() {
         $data = [
            'Name' => 'Chương Toàn',
            'Age' => 20,
            'Gender' => 'Nam',
         ];
         return $data;
      }
   }