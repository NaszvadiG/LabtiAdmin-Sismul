 <main>
  <div class="login container z-depth-3">
   <form method="post" action="<?php echo base_url(); ?>login/cek_login" class="login col s12">
    <div class="center">
     <h5>Login Labtigram</h5>
    </div>
    <div class="input-field col s12 m12">
     <i class="material-icons prefix">account_circle</i>
     <input type="text" class="validate" name="username" required>
     <label for="icon_prefix">First Name</label>
    </div>
    <div class="input-field col s12 m12">
     <i class="material-icons prefix">lock</i>
     <input type="password" class="validate" name="password" required>
     <label for="password">Password</label>
    </div>
    <div class="center">
     <input type="submit" class="waves-effect waves-light btn" value="LOGIN">	
    </div>
   </form>
  </div>
 </main>