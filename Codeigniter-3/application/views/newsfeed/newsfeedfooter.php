


      <script src="assets/css/news_feed/jquery.js"></script>

<script type="text/javascript">
var baseurl = "<?php print base_url();?>"; 
var email= "<?php echo $this->session->userdata('email_'); ?>";
var pic_path="<?php echo $this->session->userdata('pic_path'); ?>";
var firstname="<?php echo $this->session->userdata('f_name_'); ?>";
var lastname="<?php echo $this->session->userdata('l_name_'); ?>";


</script>

<script src="<?php echo base_url("assets/js/linkedin-js/search.js")?>"
type="text/javascript"></script>

<script type="text/javascript">
var baseurl = "<?php print base_url();?>"; 
var email_2= "<?php echo $this->session->userdata('email_'); ?>";
var pic_path="<?php echo $this->session->userdata('pic_path'); ?>";
var firstname_2="<?php echo $this->session->userdata('f_name_'); ?>";
var lastname_2="<?php echo $this->session->userdata('l_name_'); ?>";


</script>


<script src="<?php echo base_url("assets/js/linkedin-js/news_feed_working.js")?>"
type="text/javascript"></script>

<script src="assets/js/jquery.form.js"></script>
<script src="assets/js/jquery.js"></script>
<script src="assets/js/linkedin-js/invi_head.js"></script>
<script src="assets/js/jquery.liveurl.js"></script>

</body>
</html>