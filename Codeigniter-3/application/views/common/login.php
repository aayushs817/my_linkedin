<body id="login_body">
    <div id="container"><!-- container div contains the body n header parrt signin h-->
            <div id="page_head">Sign in to LinkedIn</div>
            <div id="error">
                 <div id="eror_image"><img src="assets/img/eror.png"></div>
                    <p>
                        <strong>    There were one or more errors in your submission. Please correct the marked fields below. </strong>
                    </p>
            </div>
            <div id="body_log" class="signin">
                <form method="post" action="<?php echo base_url();?>index.php/login_linkedIn/logins/validate_login">
                    <ul>
                        <li>
                            <div class="members">
                             <label for="email_id"> Email address: </label> 
                                <span id="error_email"></span>
                                     <input type="text" id="email_ad" name="EmailID" class="email_" value=""/>
                             
                        </div>
                        </li>                        
                        <li>
                           <div class="members">
                             
                             <label for="pass"> Password: </label> 
                             <div id="password_check">
                                <span id="error_pass">
                                <?php
                                if(isset($msg)) echo $msg;?>
                                </span>
                                <input type="password" id="pass" value="" maxlength="20" name="Password" class="pass_"/>
                               <a href="<?php echo base_url();?>index.php/common/starter/change_password_page" class="forget_pass" >Forgot password? </a>
                            </div>
                          </div>
                        </li>
                        
                        <li class="button_l">
                             <input id="signin_button_" type="submit" Value="Sign In" name="signin"/> 
                                 <label for="login">  
                                    <a href="<?php echo base_url();?>index.php/common/starter/main_page2" >Join LinkedIn.</a>
                                 </label>
                        </li>

                    </ul>
                </form> 
            </div>
    </div>
</div>