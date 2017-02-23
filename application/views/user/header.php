<!DOCTYPE html>
<html>

<head>
 <title>SISMUL</title>
  <!--Import Google Icon Font-->
  <link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <link href="https://material.io/icons/" rel="stylesheet">
  <!--Import materialize.css-->
  <link type="text/css" rel="stylesheet" href="<?php echo base_url(); ?>assets/css/materialize.min.css" />
  <link type="text/css" rel="stylesheet" href="<?php echo base_url(); ?>assets/css/custom.css" />
  <!--Let browser know website is optimized for mobile-->
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
</head>

<script type="text/javascript">
 function PreviewImage() {
 	var oFReader = new FileReader();
 	oFReader.readAsDataURL(document.getElementById("uploadImage").files[0]);
 	oFReader.onload = function (oFREvent) {
 		document.getElementById("uploadPreview").src = oFREvent.target.result;
 	};
 };
 </script>

<body>		
 <!-- navigasi -->
 <nav class="z-depth-3 nav-extended purple">
  <div class="container">
   <div class="nav-wrapper">
    <a href="<?php echo base_url() ?>user/welcome" class="brand-logo">Labtigram</a>
    <a href="#" data-activates="mobile-demo" class="button-collapse"><i class="material-icons">menu</i></a>
    <ul id="nav-mobile" class="right hide-on-med-and-down">
     <li><a href="<?php echo base_url() ?>user/welcome">Home</a></li>
     <li><a href="<?php echo base_url() ?>user/welcome/about">About</a></li>
     <li><a href="<?php echo base_url() ?>user/welcome/logout">Sign Out</a></li>
    </ul>
    <ul class="side-nav" id="mobile-demo">
     <li class="center">
      <div class="logo_navigasi purple z-depth-3" style="padding: 10px">
       <img class="circle" src="<?php echo base_url(); ?>assets/user/user.jpg" width="100px" height="100px">
       <h5>Nama Pemilik Akun</h5>
      </div>
     </li>
     <li><a href="<?php echo base_url() ?>user/welcome">Home</a></li>
     <li><a href="<?php echo base_url() ?>user/welcome/about">About</a></li>
     <li><a href="<?php echo base_url() ?>user/welcome/logout">Sign Out</a></li>
    </ul>
   </div>
  </div>
 </nav>
 <!-- akhir navigasi -->