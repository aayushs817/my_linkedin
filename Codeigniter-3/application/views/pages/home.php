	




</div>


<div >
<?php 


if(isset($pic_exist))
{	
if(!$pic_exist)
		{
?>
<img style="height:250px;width:150px" src="assets/img/upload/default.jpg"/>
<?php }else{

?>

<img style="height:250px;width:150px" src="assets/img/upload/<?php echo $this->session->userdata('email_'); ?>.jpg" />


<?php }}
?>




</div>
</body>









<script src="assets/js/linkedin-js/rao_main.js"></script>
</html>

