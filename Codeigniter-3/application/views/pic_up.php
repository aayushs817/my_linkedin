<?php 


?>
<html lang="en">
  <head>
  	<base href="<?php echo base_url(); ?>" />

<link rel="stylesheet" type="text/css" href="assets/css/yum.css">

  <title>Linkedin</title>


  </head> 
 
  
  
	   	<body class="bodyuii" >
		<div> <img src="assets/img/4.png" class="top_imguii"></div>
		<div class="maindivuii">
				<div class="innerdivuii">
					<div class="leftuii"><p>Grow your network on LinkedIn</p></div>
					
				</div>
				<div class="grd">
                        
                        <form action="<?php echo base_url();?>index.php/signup/picture" method="post" enctype="multipart/form-data">
                             Upload: <input type="file" name="mfile" id="mfile"/>
                                     <input type="submit" value="Set Picture" id="mfile"/>
                            
                        </form> 
                        
                </div>
                
			<a class="linkkuii" href="<?php echo base_url();?>index.php/common/starter/load_home">Skip this step</a>
		</div>
		<div class="enduii">LinkedIn Corporation 2013 |  Commercial use of this site without express authoriztion is prohibited </div>
	
	</body>

</html>