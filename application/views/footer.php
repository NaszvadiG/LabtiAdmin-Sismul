 <!-- footer -->
 <footer class="page-footer purple">
  <div class="container">
   <div class="row">
    <div class="col l6 s12"> 
     <h5 class="white-text">Labtigram</h5>
    </div>
   </div>
  </div>
  <div class="footer-copyright">
   <div class="container">
    © 2017 Copyright Sistem Multimedia
   </div>
  </div>
 </footer>

 <!--Import jQuery before materialize.js-->
 <script type="text/javascript" src="<?php echo base_url(); ?>assets/js/jquery-2.1.1.min.js"></script>
 <script type="text/javascript" src="<?php echo base_url(); ?>assets/js/materialize.min.js"></script>
 <script type="text/javascript">
  $(document).ready(function(){
    $(".button-collapse").sideNav();
  	$('.slider').slider();
  	$('.modal').modal();
  });
 </script>
</body>
</html>