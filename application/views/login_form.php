<!--<div id="login_form">
  <h3>Enter your login details:</h3>
  <form action="<?php /*echo base_url(); ?>login/validate_credentials" method="POST">
  <br>First name:<input type="text" name="fname"><br>
  Password:<input type="password" name="password"><br>
  <input type="submit" value="submit">
  <input type="reset" value="reset"><br>
  Not registered? <a href="<?php echo base_url(); */?>login/signup"> Signup here </a>
  </form>
  
</div>-->
<div id="login_form">
  <h1>Hello there, login!</h1>
  <?php
    echo form_open('login/validate_credentials');
    echo form_input('fname','First Name');
    echo form_password('password','password');
    echo form_submit('submit','Login');
    echo anchor('login/signup','Create Account');

  ?>

</div>


