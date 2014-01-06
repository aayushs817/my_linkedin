<html>
<head><base href="<?php echo base_url(); ?>"/>
  <!--  <base href="<?php // echo base_url(); ?>" />
    <meta charset="utf-8">
    <title><?php //echo $heading; ?></title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
  -->

    <!-- Le styles -->
    <!--
    <?php echo link_css('bootstrap'); ?>
    <?php echo link_css('style') ?>
    <style type="text/css">
      body {
        padding-top: 60px;
        padding-bottom: 40px;
      }
      .sidebar-nav {
        padding: 9px 0;
      }
      
    </style>
    <?php echo link_css('bootstrap-responsive') ?>

  -->
 <title>Linkedin</title>

</head>

<body class="en member v2 guest chrome-v5 chrome-v5-responsive background-v4 sticky-bg" id="pagekey-reg-broadcast-page">

 <input id="inSlowConfig" type="hidden" value="false" />

<script type="text/javascript">document.body.className += " js ";</script>
<link rel="stylesheet" type="text/css" href="assets/css/stylesheets/congrat1.css">
<link rel="stylesheet" type="text/css" href="assets/css/stylesheets/congrats2.css">
<div id="header" class="member">
 <div class="wrapper">
 <div id="nav-primary">
 <div class="wrapper">
 <div id="logo-linkedin" class="logo">
                    <img width="92" height="22" alt="LinkedIn" src="/images/logo_linkedin_92x22.png"></img>
                </div>
 </div>
 </div>
 </div>
</div>
<div id="body">
 
 <div class="wrapper">
<div id="global-error">
</div>

<div class="progress-container">
      <h1>Congratulations! You've just created your professional profile.</h1>
        <p class="progress">
          <span class="summary">Step <strong>4</strong> of <strong>8</strong></span>
          <span class="progress-meter" title="50% Complete"><span class="has-progress" style=" background-color: rgb(51, 153, 204); width:50%"></span></span>
        </p>
</div>

  <div id="main" class="broadcast-new-account">

<div class="mini-profile">

    <h1><?php

                                                       
                                                        echo  $this->session->userdata('f_name_');

                                                     ?>
    </h1>
    <p class="title">co</p>
      <dl class="demographic-info adr">
          <dt>Location</dt>
          <dd class="location"><span class="locality">Pakistan</span></dd>
          <dt>Industry</dt>
          <dd class="industry">Chemicals</dd>
      </dl>
</div>
      
        <form action="/reg/broadcast-account" method="POST" name="broadcastAccountForm" novalidate="novalidate" class="broadcast-form" target="genie_popup">
       
       
    
      <span class="error" id="broadcastMessage-broadcastAccountForm-error"></span>
      <div class="broadcast-message">
        
          <textarea  name="broadcastMessage" id="broadcastMessage-broadcastAccountForm" maxlength="420">I just joined LinkedIn and created my professional profile. Join my network. http://lnkd.in/bQRGxFz</textarea>
        
        
    
        <p class="public-profile-url">Your profile URL: http://lnkd.in/bQRGxFz</p>
      </div>

    <p class="actions">
            <button data-li-service="FACEBOOK" class="btn-icon facebook">
              <span>
                    Share on Facebook
              </span>
            </button>
            <span class="shared-success" id="shared-facebook">
              Shared on Facebook
            </span>

            <button data-li-service="TWITTER" class="btn-icon twitter">
              <span>
                    Share on Twitter
              </span>
            </button>
            <span class="shared-success" id="shared-twitter">Shared on Twitter</span>
                    <a class="linkkuii" href="<?php echo base_url();?>index.php/common/starter/load_doyouknow">Skip this step</a>

    </p>
   <div flow=1ofgqp7-n0z57x class="skip" id="skip">
         

    </div>
    <a href="http://www.linkedin.com/reg/web-flow?ns=1&amp;flow=1ofgqp7-n0z57x" id="continue">Continue &#187;</a>
    <a href="/reg/fb-import?fd=TEST_ID&amp;flow=1ofgqp7-n0z57x" id="import-continue">Continue &#187;</a>
  
      
     
          
          <input type="hidden" name="provider" value="" id="provider-broadcastAccountForm"><input type="hidden" name="URL" value="http://lnkd.in/bQRGxFz" id="URL-broadcastAccountForm"><input type="hidden" name="previouslyTetheredFB" value="false" id="previouslyTetheredFB-broadcastAccountForm"><input type="hidden" name="csrfToken" value="ajax:2283014468337161654" id="csrfToken-broadcastAccountForm"><input type="hidden" name="sourceAlias" value="0_0azPSPCMv8gVV0KYme9EXbZz1ZrOxIFXXFDO6hzIY18" id="sourceAlias-broadcastAccountForm"><input type="hidden" name="flow" value="1ofgqp7-n0z57x" id="flow-broadcastAccountForm">
          </form>
        
      
    
</div>
 
 </div>
</div>

<div id="footer">
 <div class="wrapper">
 <div id="legal">
 <p id="copyright">LinkedIn Corporation &copy; 2013</p>
 <p id="terms-of-use">
 Commercial use of this site without express authorization is prohibited.
 </p>
 </div>
 </div>
</div>

 </body>
</html>
 