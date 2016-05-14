
  <?php require_once(__DIR__.'/../common/headerView.php'); ?>

    <div class="container">
      <div class="row">
      <div class="col-lg-4 col-lg-offset-4">
          <h3 class="text-center">IDENTIFICATION</h3>
            <p class="text-center">veuillez vous identifier</p>
            <p><div id="infoMessage"><?php echo $message;?></div></p>
            <hr class="clean">

              <?php echo form_open("auth/login");?>
                
                 <div class="form-group input-group">
                      <span class="input-group-addon"><i class="fa fa-envelope"></i></span>
                      <?php 

                      $data = array(
                            'name'        => 'identity',
                            'id'          => 'identity',
                            'value'          =>"",
                            'class'       => 'form-control',
                            'placeholder' =>  'Email/Identifiant'
                      );
                      echo form_input($data);
                      //echo form_input($identity,'','placeholder="Email/Identifiant"');

                      ?>
                  </div>

                 <div class="form-group input-group">
                      <span class="input-group-addon"><i class="fa fa-key"></i></span>

                      <?php 
                       $data = array(
                            'type'        =>  'password',
                            'name'        => 'password',
                            'id'          => 'password',
                            'value'          =>"",
                            'class'       => 'form-control',
                            'placeholder' =>  'Mot de passe'
                      );
                      echo form_input($data);
                      //echo form_input($password,'','placeholder="Mot de passe"');

                      ?>
                  </div>

                <div class="form-group">
                  <label class="cr-styled">
                      
                      <?php echo form_checkbox('remember', '1', FALSE, 'id="remember"');?>
                      <i class="fa"></i> 
                  </label>
                      <?php echo lang('login_remember_label', 'remember');?>
                </div>


                <p><?php echo form_submit('submit', lang('login_submit_btn'),"class='btn btn-purple btn-block'");?></p>

              <?php echo form_close();?>

            <p><a href="forgot_password.html"><?php echo lang('login_forgot_password');?></a></p>

        </div>
        </div>
    </div>
