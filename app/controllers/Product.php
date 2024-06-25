<?php 
   class Product extends Controller {

      public $data = [];
      public function index() {
         echo 'Danh sách sản phẩm';
      }
   
      public function list_product() {
         $product = $this->model('ProductModel');
         $dataProduct = $product->getProductList(); 

         // Tên key muốn đặt gì đặt 
         $this->data['sub_content']['product_list'] = $dataProduct;
         
         //Render view
         $this->render('products/list', $this->data);
      }

      public function detail() {
         $this->render('layouts/client_layout', $this->data);
      }
   }