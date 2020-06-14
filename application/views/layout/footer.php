      </div>
      <!-- End of Main Content -->

      <!-- Footer -->
      <footer class="sticky-footer bg-white">
        <div class="container my-auto">
          <div class="copyright text-center my-auto">
            <style>.heart{color:#e25555;}</style>
            <span>&copy; PotM Bottom 2019</span>
            . Made with <span class="heart">❤</span> in Condongcatur
          </div>
        </div>
      </footer>
      <!-- End of Footer -->

    </div>
    <!-- End of Content Wrapper -->

  </div>
  <!-- End of Page Wrapper -->

  <!-- Scroll to Top Button-->
  <a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
  </a>

  <!-- Logout Modal-->
  <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
          <button class="close" type="button" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">×</span>
          </button>
        </div>
        <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
        <div class="modal-footer">
          <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
          <a class="btn btn-primary" href="login.html">Logout</a>
        </div>
      </div>
    </div>
  </div>
  
  <script type="text/javascript">

    window.onload = () => {
   let bannerNode = document.querySelector('[alt="www.000webhost.com"]').parentNode.parentNode;
   bannerNode.parentNode.removeChild(bannerNode);
    }


  </script>

  <!-- Bootstrap core JavaScript-->
  <script src="<?php echo base_url()?>assets/admin/vendor/jquery/jquery.min.js"></script>
  <script src="<?php echo base_url()?>assets/admin/vendor/bootstrap/js/bootstrap.min.js">></script>
  

  <!-- Core plugin JavaScript-->
  <script src="<?php echo base_url()?>assets/admin/vendor/jquery-easing/jquery.easing.min.js">"></script>

  <script type="text/javascript">

    $(window).unload(function() {
    $('body').page-top(0);
    });


  </script>

  <!-- Custom scripts for all pages-->
  <script src="<?php echo base_url()?>assets/admin/js/sb-admin-2.min.js"></script>
  <script src="<?php echo base_url()?>assets/ckeditor/ckeditor.js"></script>

</body>

</html>
