<!-- Begin Page Content -->
<div class="container-fluid">
   <!-- Page Heading -->
   <div class="d-flex justify-content-between">
      <div class="d-flex">
         <select id="month_spending" style="width: 115px;" class="form-control"
            aria-label="Large select example"></select>

         <select id="year_spending" disabled style="width: 90px;" class="form-control mx-1"
            aria-label="Large select example">
            <option selected value="2024">2024</option>
         </select>
      </div>
      <button data-toggle="modal" data-target="#modal_spending"
         class="btn btn-primary mb-3 d-flex justify-content-end"><i class="bi bi-file-plus-fill"></i></button>
   </div>
   <div class="d-flex justify-content-end">
      <b>Tổng: </b>
      <b id="sum_spending" class="mx-1 text-dark"></b>
   </div>
   <!-- Modal Add Spending -->
   <h1 id="empty_spending"></h1>
   <div class="modal fade" id="modal_spending" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog">
         <div class="modal-content">
            <div class="modal-header">
               <h5 class="modal-title" id="exampleModalLabel">Thêm thu tiêu</h5>
               <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
               </button>
            </div>
            <form id="add_spending">
               <div class="modal-body">
                  <div class="form-group">
                     <label for="" class="form-label">Số tiền <span class="text-danger">*</span></label>
                     <input oninput="formatInputValues('#price')" id="price" placeholder="Nhập số tiền chi tiêu"
                        type="text" class="form-control">
                     <small id="price_error" class="text-danger"></small>
                  </div>
                  <div class="form-group">
                     <label for="" class="form-label">Nội dung <span class="text-danger">*</span></label>
                     <input id="main_content" placeholder="Nhập nội dung chi tiêu" type="text" class="form-control">
                     <small id="content_error" class="text-danger"></small>
                  </div>
                  <div class="form-group">
                     <label for="" class="form-label">Ghi chú</label>
                     <textarea id="note" name="" id="" rows="3" class="form-control"
                        placeholder="Nhập ghi chú"></textarea>
                  </div>
               </div>
               <div class="modal-footer">
                  <div class="d-flex justify-content-end">
                     <button type="submit" class="btn btn-primary">Thêm</button>
                  </div>
               </div>
            </form>
         </div>
      </div>
   </div>

   <!-- Bảng chi tiêu người dùng -->
   <div id="table_spending" class="row"></div>

   <!-- Paginate -->
   <nav id="paginate_spending" class="d-flex justify-content-center" aria-label="Page navigation example">
   </nav>
</div>