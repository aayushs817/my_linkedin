
<body class="x_jbody">
<div class="x_one">
	<div> <img src="assets/img/4.png" class="top_img"></div>
	
	<ul class="x_list">
	<li >
	Already on LinkedIn?<a href="<?php echo base_url();?>index.php/common/starter/login_page" id="link" class="signin" >Sign In</a>
	</li>
	</ul>
	
</div>

<div class="x_mainbody">

		<div class="x_main">
			<div id="mainerror" class="x_error" style="display: none;">There were one or more errors in your submission. Please correct the marked field(s) below.</div>
			<div class="x_uppercontainer"><h1 class="h1_">To join LinkedIn, sign up below...it's free!</h1></div>
	</div>
	<div class="x_formleft">
		<div class="x_regcontainer">

				<form  id= "myform"class="x_form" action="<?php echo base_url();?>index.php/signup/signups2/load_user" method="post" name="sign_up">
					<ul class="x_formlist">
						<?php if(isset($msg)) echo $msg;?>
					<div class="f">
					<li>
						<div  id="e1" class="form_errors " style="display: none;" >Please enter a value.</div>	
						<label  class="l"> First Name: </label>
						<input type="text" name="FirstName" value=""  class="x_input" id="box_one">
						 
					</li>
					</div>
					
					<div class="f">
					<li>
						<div id="e2" class="form_errors " style="display: none;" >Please enter a value.</div>	
						<label class="l">Last  Name:</label>
						<input type="text" name="LastName" value=""  class="x_input" id="box_two">
					</li>
					</div>
					<div class="f">
					<li>
						<div id="e3" class="form_errors " style="display: none;" >Please enter a value.</div>
						<div id="e6" class="form_errors " style="display: none;" >Please enter a valid email address.</div>	
						<label class="l">Email:</label>
						<input type="email" name="EmailID" value=""  class="x_input" id="box_three">
					</li>
					</div>
					<div class="f">
					<li>
						<div  id="e4" class="form_errors " style="display: none;" >Please enter a password.</div>
						<div  id="e5" class="form_errors "  style="display: none;" >The password you provided must have at least 6 characters.</div>	
						<label class="l">New Password:</label>
						<input type="password" name="Password" value=""  class="x_input" id="box_four">
					</li>
					</div>
					</ul>
					<p id="paragraph_xxx_">6 or more characters</p>
					<button id="mbtn" class="btn" type="submit">
					<div>Join LinkedIn</div>
					</button>
					<em>*</em>
					</form>
					<p  class="para" >
                                Already on LinkedIn? <a  id="link" href="<?php echo base_url();?>index.php/common/starter/login_page">Sign in</a>
                    </p>
		</div>
		</div>
		<div> 
		<div class="right">
				<p class="x_inner">Save time by using your Facebook account to sign up for LinkedIn.</p>
				<a href="default.html"> <img src= "assets/css/u.png" class="b2"> </a>
				
				
		</div>
		</div>
		<div class="end">
		<p class="endp">
            * By joining LinkedIn, you agree to LinkedIn's <a  id="link" target="_blank" href="default.html">User Agreement</a>, <a id="link" target="_blank" href="default.html">Privacy Policy</a> and <a id="link" target="_blank" href="default.html">Cookie Policy</a>
		</p>
		</div>
</div>
<div class="x_footer">
	<p class="x_e1">LinkedIn Corporation © 2013 </p>
	
	<p class="x_e2">
	Commercial use of this site without express authorization is prohibited.
	</p>
	
	
</div>

