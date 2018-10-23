<footer class="sticky-footer">
    <div class="container-fluid">
      <div class="text-center">
        <small>Copyright © Notice Board 2018</small>
      </div>
    </div>
  </footer>
  <!-- Scroll to Top Button-->
  <a class="scroll-to-top rounded" href="#page-top">
    <i class="fa fa-angle-up"></i>
  </a>
  <!-- Bootstrap core JavaScript-->
  <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
  <script src="{{ URL::to('js/admin/bootstrap.bundle.min.js') }}"></script>
  <!-- Core plugin JavaScript-->
  <script src="{{ URL::to('js/admin/jquery.easing.min.js') }}"></script>
  <!-- Custom scripts for all pages-->
  <script src="{{ URL::to('js/admin/sb-admin.min.js') }}"></script>
  <!-- character counter-->
  <script src="{{ URL::to('js/admin/counter.js') }}"></script>
  <!-- character counter-->
  <script src="{{ URL::to('js/admin/dynamicform.js') }}"></script>
  <script src="{{ URL::to('js/admin/sorttable.js') }}"></script>
  <!-- image upload-->
  <script src="{{ URL::to('js/admin/imageupload.js') }}"></script>
  <!-- image upload-->
  <script src="{{ URL::to('js/admin/starrating.js') }}"></script>

  <!-- Ckeditor-->
  <script src="//cdn.ckeditor.com/4.10.0/basic/ckeditor.js"></script>
  <!-- Custom scripts for this page-->
  <script src="{{ URL::to('js/admin/sb-admin-datatables.min.js') }}"></script>
  <!-- Page level plugin JavaScript-->
  <script src="{{ URL::to('js/admin/jquery.dataTables.js') }}"></script>
  <script src="{{ URL::to('js/admin/dataTables.bootstrap4.js') }}"></script>
  <!-- Toastr -->
  <script src="{{ URL::to('assets/toastr/toastr.min.js') }}"></script>
  
  <script src="//ajax.googleapis.com/ajax/libs/jqueryui/1.10.4/jquery-ui.min.js"></script>

  <script src='//production-assets.codepen.io/assets/common/stopExecutionOnTimeout-b2a7b3fe212eaa732349046d8416e00a9dec26eb7fd347590fbced3ab38af52e.js'></script>
 
  @include("errors.errors")
    
  @section('script')
  @show

</body>

</html>