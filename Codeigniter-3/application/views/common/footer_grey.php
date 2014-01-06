
<div id="footer_all">
    <ul>
       <li  class="h_ft" id="foot_image">
            <img src="assets/img/footer_image.png"/>
        </li>
        <li  class="h_ft">
            <div class="vert_line"><a href="default.html">  User Agreement  </a> </div>    
        </li>
        <li  class="h_ft">
            <div class="vert_line"><a href="default.html">  Privacy Policy  </a>  </div>
        </li>
        <li  class="h_ft">
            <div class="vert_line"><a href="default.html">  Community Guidlines </a> </div>
        </li>
        <li  class="h_ft">
            <div class="vert_line"><a href="default.html">  Cookie Policy   </a> </div>
        </li>
         <li  class="h_ft">   
            <div class="vert_line"><a href="default.html">  Copyright Policy </a> </div>
        </li>
    </ul>
</div>

</body>
<!--<script src="assets/js/linkedin-js/login.js"></script>-->
<script src="<?php echo base_url("assets/js/linkedin-js/login.js")?>"
type="text/javascript"></script>
<!--
    <script>
    $(document).ready(
                function()
                {
                    
                    $("#error").hide();
                   $("#eror_image").hide();
                    $("form").submit(
                        function()
                                {
                                              /*FOR the verification of email*/
                                  var check=$("#email_ad").val();
                                  var x=check.length;

                                            /*FOR the verification of password*/
                                  var check_pass=$("#pass").val();
                                  var x_p=check_pass.length;
                                  
                                // ERROR DISPLAYING

                                    if(x==0)
                                      {
                                       $("#error_email").html("Please enter a value.</br>");
                                       $("#email_ad").css({"margin-left":"0%" }); 
                                      }
                                    if(x!=0 && x<3)
                                        {
                                          $("#error_email").html(
                                            "The text you provided is too short (the minimum length is 3 characters, your text contains "+ x +" characters).")
                                          $("#email_ad").css({"margin-left":"25%" }); 
                                        }
                                    else
                                        {
                                          var regex=  new RegExp(/^\b[A-Z0-9._%-]+@[A-Z0-9.-]+\.[A-Z]{2,4}\b$/i);
                                         //   var demail=$(".emailfield").attr("value");
                                          if((regex.test(check)) && (x_p!=0 && x_p>5))
                                          {
                                            return true;
                                          }
                                          else
                                          {
                                          $("#error_email").html("Please enter a valid email address.")
                                          $("#email_ad").css({"margin-left":"0%" }); 
                                          } 
                                        }

                                    if(x_p==0)
                                      {
                                       $("#error_pass").html("Please enter a value.</br>");
                                      }
                                    else if(x_p<6)
                                        {
                                          $("#error_pass").html(
                                            "The password provided must have at least 6 characters.");
                                        }


                                        // showing divs of error

                                  $("#error").show();
                                  $("#eror_image").show();
                                  $("#error").css({"background-color":"#fee", "padding": "3px 7px 12px 30px", "height":"25px", "margin-bottom":"25px"}); 

                                          // for highligt wrong feilds

                                     $(".members .email_").css({"border": "1px solid rgb(221, 55, 55)", "color":"rgb(221, 55, 55)","padding":"3px 1px 3px 3px"});
                                     $(".members .pass_").css({"border": "1px solid rgb(221, 55, 55)", "color":"rgb(221, 55, 55)","padding":"3px 1px 3px 3px","margin-left":"0px"});
                                           // $("form").submit(function() { return false; });    
                                           return false;       
                                
                                }
                                          
                                          );


//$("form").submit(function() { return false; });
//$('form').on('submit', function(event){event.preventDefault();});
//alert('abc');
//$("form").submit(function() { return true; });
                }
                );    
    </script>
-->
</html>
