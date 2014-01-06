 $(document).ready(
                function()
                {
                   


                    $("#error").hide();
                   $("#eror_image").hide();

                    $("#if_yes_check_clicked_selfemployed").hide();
                    $("#if_yes_check_clicked_jobseeker_employed").hide();
                    
                    $("#jobSeeker_button_radio").hide();
                    $("#student_button_radio").hide();

                    //$("#employed_button_radio").hide();

                   $("#self_employ").removeAttr('checked');
                   $("#self_employ_job_seeker").removeAttr('checked');
                   $("#employed_btn").attr('checked',true);
                   
                   $("#employed_btn").click(
                                            function()
                                            {
                                              $("#employed_button_radio").show();
                                              $("#jobSeeker_button_radio").hide();
                                              $("#student_button_radio").hide();
                                            }
                                           )

                   $("#looking-btn").click(
                                            function()
                                            {
                                              $("#jobSeeker_button_radio").show();
                                              $("#employed_button_radio").hide();
                                              $("#student_button_radio").hide();
                                            }
                                           )

                    $("#student-btn").click(
                                            function()
                                            {
                                              $("#student_button_radio").show();
                                              $("#jobSeeker_button_radio").hide();
                                              $("#employed_button_radio").hide();
                                             
                                            }
                                           )
                   
                   // changing check button
                    $("#self_employ").change 
                                            (
                                            function()
                                              {
                                                if($("#self_employ").is(":checked"))
                                               { 
                                                  $("#check_clicked_selfemployed").hide();
                                                  $("#if_yes_check_clicked_selfemployed").show();
                                                  
                                               }       
                                                  else
                                                {
                                                  $("#check_clicked_selfemployed").show();
                                                  
                                                  $("#if_yes_check_clicked_selfemployed").hide();
                                                }            
                                              }
                                            )

                    $("#self_employ_job_seeker").change 
                                            (
                                            function()
                                              {
                                                if($("#self_employ_job_seeker").is(":checked"))
                                                {
                                                
                                                  $("#check_clicked_selfemployed_job").hide();
                                                  $("#if_yes_check_clicked_jobseeker_employed").show();

                                                }
                                                  else
                                                {
                                                  $("#check_clicked_selfemployed_job").show();
                                                  
                                                  $("#if_yes_check_clicked_jobseeker_employed").hide();
                                                }
                                              }
                                            )
 
 

                    $("form").submit(
                        function()
                                {
                                var check_bool=true;

                       /*FOR the verification of employed*/
                         if($("#employed_btn").prop("checked"))
                         {
                         
                                  var check=$("#job_title_input").val();
                                  var x_job=check.length;
                                  var check1=$("#company_code").val();
                                  var company=check1.length;
                                  var indus=$("#industryChooser").val();
                          
                                                          // ERROR DISPLAYING

                                    if(x_job==0)
                                      {
                                       $("#job_title_error").html("Please enter ur title.");
                                      $("#job_title_input").css({"margin-left":"21%","margin-bottom":"5px" });
                                      check_bool=false;
                                      }
                                     if ( (!($("#self_employ").is(":checked"))) && (company==0) )

                                      {
                                       $("#company_title_error").html("    Please enter ur comapany.");
                                      $("#company_code").css({"margin-left":"21%","margin-top":"5px" });
                                      $("#check_clicked_selfemployed").css({"margin-top":"2px"});

                                      check_bool=false;
                                      } 
                                      if( ($("#self_employ").is(":checked")) && (indus=="") )
                                      {
                                        $("#industry_title_error").html("   Please enter ur Industry.</br>");
                                        $("#industryChooser").css({"margin-left":"21%","margin-top":"5px" });
                                        check_bool=false;
                                      }

                         }
                         if($("#looking-btn").prop("checked"))
                         {                 /*FOR the verification of job seeker*/
                                  var check2=$("#job_recent_most").val();
                                  var job_recent=check2.length;

                                  var check3=$("#company_recent_code").val();
                                  var company_recent=check3.length;

                                  var recent_indu=$("#industryChooser_").val();
                                  
                                  var start_time=$("#startYear-previousStartEnd-lookingProfileForm").val();
                                  var end_time=$("#endYear-previousStartEnd-lookingProfileForm").val();

                              //---- job seeker
                                      if(job_recent==0)
                                      {
                                       $("#recent_job_error").html("Please enter ur title.");
                                      $("#job_recent_most").css({"margin-left":"21%","margin-bottom":"5px" });
                                      check_bool=false;
                                      }

                                     if ( (!($("#self_employ_job_seeker").is(":checked"))) && (company_recent==0) )

                                      {
                                       $("#recent_comp_error").html("Please enter an company.</br>");
                                      $("#company_recent_code").css({"margin-left":"21%","margin-bottom":"5px" });
                                      $("#jobSeeker_button_radio").css({"margin-top":"2px"});
                                      check_bool=false;
                                      }
                                     if ( ($("#self_employ_job_seeker").is(":checked")) && (recent_indu=="") )

                                      {
                                        $("#recent_indust_error").html("   Please enter an Industry.</br>");
                                        $("#industryChooser_").css({"margin-left":"21%","margin-top":"5px" });
                                        check_bool=false;
                                      }
                                      if(start_time=="")
                                      {
                                        $("#time_start_error").html("Please enter your start year.</br>");
                                        check_bool=false;
                                      }
                                      if(end_time=="")
                                      {
                                        $("#time_end_error").html("Please enter your end year.</br>");
                                        check_bool=false;
                                      }
                                      if((start_time=="") || (end_time==""))
                                      {
                                        $("#time_period").css({"margin-left":"120px"});
                                      }
                                  
                         }
                          if($("#student-btn").prop("checked"))
                         {
                                  var institution=$("#school_uni_input").val();
                                  var institution_1=institution.length;
                                  var start_time_student=$("#startYear-previousStartEnd-lookingProfileForm_student").val();
                                  var end_time_student=$("#endYear-previousStartEnd-lookingProfileForm_student").val();

                                  //---student
                                      if(institution_1==0)
                                      {
                                        $("#instit_school").html("   Please enter an Institution.</br>");
                                        $("#school_uni_input").css({"margin-left":"21%","margin-top":"5px" });
                                        $("#student_button_radio").css({"margin-top":"5px" });

                                        check_bool=false;
                                      }
                                      
                                      if(start_time_student=="")
                                      {
                                        $("#time_s_std").html("Please enter your start year.</br>");
                                        check_bool=false;
                                      }
                                      if(end_time_student=="")
                                      {
                                       $("#time_e_std").html("Please enter your end year.</br>");
                                        check_bool=false;
                                      }
                                      if((start_time_student=="") || (end_time_student==""))
                                      {
                                        $("#time_period_s").css({"margin-left":"123px"});
                                      }

                         }
                                               
                               
if(check_bool==false)
{
          $("#error").show();
          $("#eror_image").show();
          $("#error").css({"background-color":"#fee", "padding": "3px 7px 12px 30px", "height":"25px", "margin-bottom":"25px"}); 

}
                                                return check_bool;     
                                 
                                }
                                          
                                   );
                }

                );    