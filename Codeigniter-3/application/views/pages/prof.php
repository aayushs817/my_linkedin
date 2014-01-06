	

</div>


<div class="prof_body" id="my_p">
<div class="change_p_p">



<div >
<?php 


if(isset($pic_exist))
{	
if(!$pic_exist)
		{
?>
<img id="my_pic_curr"style="height:250px;width:150px" src="assets/img/upload/default.jpg" alt="porfile pic"/>
<?php }else{

?>

<img id="my_pic_curr" alt="porfile pic" style="height:250px;width:150px" src="assets/img/upload/<?php echo $this->session->userdata('email_'); ?>.jpg" />


<?php }}
?>

<Button type="Button" id="Change_pic_b_1">Change Picture</Button>

<form action="<?php echo base_url();?>index.php/signup/picture" method="post" enctype="multipart/form-data">
                             <input type="file" name="mfile" id="mfile"/><br/>
                             <input type="submit" value="Set Picture" id="mfile_2"/>
                            
                        </form> 
</div>


<Button type="Button" id="Change_cancel_b_2">Cancel</Button>


</div>


</div>

<Button class="like_button"  value="1" >like</Button>

<Button class="show_like" value="1" >liked by</Button>

<div class="liked_bys" id="lk_by"></div>
<Button id="lk_by_can">X</Button>



<textarea  style="width: 300px; height: 100px;" placeholder="write here"></textarea>
         <div class="liveurl-loader"> </div>
         
         <div class="liveurl">
             <div class="close" title="Entfernen"></div>
             <div class="inner">
                 <div class="image" id="hmm"> </div>
                 <div class="details">
                     <span class="title"> </span>
                     <span class="description"> </span> 
                     <span class="url"> </span>
                     
                     <div class="thumbnail">
                         <input type="checkbox" name="no_picture" id="un6qfpc1">
                         
                     </div>
                    
                 </div>
                 <div class="video">
                     
                 </div>
             </div>
         </div>
         <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
       

</body>

</html>
