
<?php ?>

	</br>



<script type="text/javascript">

</script>
	


			

					<div id="main_error_div"><img src="assets/img/images/cross2.PNG"></div>
					<div class="inner_body_main">

							<div id="main_info">
								<article style="font-weight:Bolder;color:#3399FF;font-size:21px;width:410px">
									Over 225 million professionals use LinkedIn to exchange information, ideas and opportunities<br/>
									</article><br/>
									<img src="assets/img/images/main_images/main_pic1.png" style="height:28px; width:61px; vertical-align:middle" alt="connected"></img>Stay informed about your contacts and industry<br/>
									<img src="assets/img/images/main_images/main_pic2.png" style="margin-top:10px;height:42px;width:60px;vertical-align:middle" alt="connected"></img>Find the people & knowledge you need to achieve your goals<br/>
									<img src="assets/img/images/main_images/main_pic3.png" style="height:29.5px; width:60px; vertical-align:middle" alt="connected"></img>Control your professional identity online<br/>

							</div>
							
							<div class="join_div_2">
								
								 
									<div id="join_inner_strip"> 
										<div id="join_inner_strip_2">
									<h2>Join LinkedIn Today</h2>
									</div>
									</div>	
									<?php if(isset($msg)){ ?>  
													<div class="acc_already_exists"> Account already exists.</div>


													   <?php } ?>	

													   <div class="join_form_3m">
									<form class="Join_form_2m" action="<?php echo base_url();?>index.php/signup/signups/load_user" method="post" name="sign_up">
									<table >


											<tr class="rows">
												<td class="col1">First Name:
													

												</td>
												<td >
													<div id="FN_err1" class="join_form_errors">Please enter a first name.</div>

													<input type="text" id="F_Name_txt" name="FirstName"  class="text_box" />
													
												</td>
											</tr>	
											

											<tr class="rows">
												<td ></td>
												<td ></td>
											</tr>	


											<tr class="rows">
												<td ></td>
												<td ></td>
											</tr>	

											<tr class="rows">
												<td class="col1">Last Name:</td>
												<td >
													<div id="LN_err1" class="join_form_errors">Please enter a last name.</div>
													<input type="text" id="L_Name_txt"  name="LastName" class="text_box"/>
													

												</td>
											</tr>	
											

											<tr class="rows">
												<td></td>
												<td></td>
											</tr>	
																						

											<tr class="rows">
												<td></td>
												<td></td>
											</tr>	

											<tr class="rows">
												<td class="col1">Email:</td>
												<td >
													<div id="Email_err1" class="join_form_errors">Please enter a valid email address.</div>
													<div id="Email_err2" class="join_form_errors"></div>
													<input type="text" id="Email_txt" name="EmailID" class="text_box"/>
													
												</td>
											</tr>	
											

											<tr class="rows">
												<td></td>
												<td></td>
											</tr>	
																						

											<tr class="rows">
												<td></td>
												<td></td>
											</tr>	

											<tr class="rows">
												<td class="col1">Password:</td>
												<td >
													<div id="Pass_err1" class="join_form_errors">Please enter a password.</div>
													<div id="Pass_err2" class="join_form_errors">The password you provided must have at least 6 characters.</div>
													<input type="password" id="Password_txt"s name="Password"class="text_box"/>

												</td>
											</tr>	
											


											<tr class="rows">
												<td></td>
												<td style="font-size:11px;width:10px;vertical-align:text-top">6 or more characters</td>
											</tr>	
											
											<tr class="rows">
												<td></td>
												<td></td>
											</tr>	
																						
											<tr class="rows">
												<td></td>
												<td></td>
											</tr>	


											<tr class="rows">
												<td></td>
												<td >
													<input type="submit" id="J_button" class="Join_button" name="joinbutton" value="Join Now">*
												</td>
											</tr>	
											


											<tr class="rows">
												<td></td>
												<td class="already_linkedin">
												Already on LinkedIn? <a href="<?php echo base_url();?>index.php/common/starter/login_page">sign in</a>


												</td>
											</tr>	
												
									</table>
									</form>
								</div>
							</div>

					</div>






				<div id="Search_for_someone" style="text-align:center">
					<div class="lines"></div>					
					<br/>
					<div class="sub_search_for_someone">
						<strong class="srch_for_smone">Search for someone by name:</strong>
						<input type="text" id="Fname_txt" placeholder="First Name" />
						<input type="text" id="Lname_txt" placeholder="Last Name" />
						<a href="<?php echo base_url();?>index.php/common/starter/bycountry"><button type="button" value="Go" style="height:24px;width:38px;">Go</button></a>
					</div>
					<br/>


						<div class="member_directory">
							<p>LinkedIn member directory:
								<a href="#">a</a>
								<a href="#">b</a>
								<a href="#">c</a>
								<a href="#">d</a>
								<a href="#">e</a>
								<a href="#">f</a>
								<a href="#">g</a>
								<a href="#">h</a>
								<a href="#">i</a>
								<a href="#">j</a>
								<a href="#">k</a>
								<a href="#">l</a>
								<a href="#">m</a>
								<a href="#">n</a>
								<a href="#">o</a>
								<a href="#">p</a>
								<a href="#">q</a>
								<a href="#">r</a>
								<a href="#">s</a>
								<a href="#">t</a>
								<a href="#">u</a>
								<a href="#">v</a>
								<a href="#">w</a>
								<a href="#">x</a>
								<a href="#">y</a>
								<a href="#">z</a>

								
						<a href="<?php echo base_url();?>index.php/common/starter/bycountry">more</a>
					</p>
						
						<p class="browse_member">

						Browse members <a href="<?php echo base_url();?>index.php/common/starter/bycountry">by country</a>

					</p>		


					</div>
					
				</div>
<div class="lines"></div>
				<div id="before_footer">
							
							
							*By joining LinkedIn, you agree to LinkedIn's <a href="default.html">User Agreement</a>, <a href="default.html">Privacy Policy</a> and
					      <a href="<?php echo base_url();?>index.php/common/starter/cookie_policy">Cookie Policy</a>.
							<br/>
							<br/>

						

		</div>


