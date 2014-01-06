 $(document).ready(
                function()
                {
                  
                    $("#error").hide();
                   $("#eror_image").hide();
                    $("form").submit(
                        function()
                                {
                                  var check=$("#email_id").val();
                                  var x=check.length;
                                    if(x==0)
                                      {
                                       $("#error_limit1").html("Please enter a value.</br>") 
                                      }
                                    else if(x<3)
                                        {
                                          $("#error_limit1").html(
                                            "The text you provided is too short (the minimum length is 3 characters, your text contains "+ x +" characters).")
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
                                            { $("#error_limit1").html("Please enter a valid email address.");}
                                        }
                                  $("#error_limit1").css({"margin": "0px 0px 10px", "padding-bottom": "5px" });
                                  $("#error").show();
                                  $("#eror_image").show();
                                  $("#error").css({"background-color":"#fee", "padding": "2px 7px 10px 25px", "height":"25px", "margin-bottom":"15px"});
                                  return false;    
                                }
                                        );

                }
                ); 