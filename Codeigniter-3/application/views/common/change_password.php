<body id="pass_body">
<div id="container">
            <div id="error">
                 <div id="eror_image"><img src="assets/img/eror.png"></div>
                    <p>
                <strong>Please correct the marked field(s) below.</strong>
                    </p>
            </div>
            <h1 id="c_">Changing your password is simple</h1>
            <div id="body_pass">
                <form method="post" action="<?php echo base_url();?>index.php/change_pasword/change_pass_control/validate_email">
                  <?php if(isset($msg)) echo $msg;?>
                   <p id="ins"> Please enter your email address to get instructions.</p>
                            <div id="error_limit1"></div>
                <div id="email">
                             <input type="text" id="email_id" name="EmailID" value="" autocomplete="off" autocorrect="off"/>
                 </div> 
                 <p class="button_">
                    <input id="continue_button" type="submit" Value="Continue" name="forg_pass"/> 
                 </p>     
                </form> 
            </div>
    </div>
</div>