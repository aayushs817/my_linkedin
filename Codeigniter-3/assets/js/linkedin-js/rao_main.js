
                    
            
        $("#mmb").click(function(){


                alert("hello");
                document.getElementById("mmy").innerHTML="<Button type='Button' >sdasd</Button>"

        });


        $(document).ready(

            function(){


                
                if ( !document.getElementById('clientSideIsPostBack') )
                {$(FN_err1).hide();
                $(LN_err1).hide();
                $(Email_err1).hide();
                $(Email_err2).hide();
                $(Pass_err1).hide();
                $(Pass_err2).hide();
                $(main_error_div).hide();


            }





                         $("#J_button").click(function(){

                    
                    var FN= document.getElementById("F_Name_txt").value;
                    var LN= document.getElementById("L_Name_txt").value;
                    var Em= document.getElementById("Email_txt").value;
                    var Pa= document.getElementById("Password_txt").value;


                $(FN_err1).hide();
                $(LN_err1).hide();
                $(Email_err1).hide();
                $(Email_err2).hide();
                $(Pass_err1).hide();
                $(Pass_err2).hide();
                $(main_error_div).hide();


                    if(FN.length==0)
                    {

                        //$(FN_err1).show();
                        my(1);

                    }
                    
                    if(LN.length==0)
                    {

                        //$(LN_err1).show();
                        my(2);

                    }
                    if(Em.length==0)
                    {

                        //$(Email_err1).show();
                        my(3);

                    }
                    else
                    {
                            if(Em.length<3)
                            {

                                        
                                    document.getElementById('Email_err2').innerHTML="The text you provided is too short (the minimum length is 3 characters, your text contains " +Em.length+" character.";

                                //  $(Email_err2).show();
                                    my(4);
                            }
                            else
                            {

                                var patt1=new RegExp(/^\b[A-Z0-9._%-]+@[A-Z0-9.-]+\.[A-Z]{2,4}\b$/i);

                            if(!patt1.test(Em))
                                {

                            //$(Email_err1).show();
                            my(3);
                                }   
                    

                            }


                    }

                    if(Pa.length==0)
                    {

                    //  $(Pass_err1).show();
                        my(5);
                    }
                    else
                    {
                            if(Pa.length<6)
                                //$(Pass_err2).show();
                            my(6);
                    }

                //  alert("k");

                    

                    /*var patt2=new RegExp(/^[ a-zA-Z ]+$/i);
                    if(!patt2.test(FN))
                    {

                            alert("wrong");
                    }   */
                    /*var patt3=new RegExp(/^[ a-zA-Z ]+$/i);
                    if(!patt3.test(LN))
                    {

                            alert("wrong");
                    }*/


                    /*var patt1=new RegExp(/^\b[A-Z0-9._%-]+@[A-Z0-9.-]+\.[A-Z]{2,4}\b$/i);

                    if(!patt1.test(Em))
                    {

                            alert("wrong");
                    }   
                    */


                    /*

                    if(Pa.length<6)
                    {

                            alert("wrong");


                    }

                    */





                });






                  
                var my =function(err_num)
                {


                    if(err_num==0)
                    {

                    }
                    else
                        if(err_num==1)
                        {
                                $(FN_err1).show();
                                $(main_error_div).show();


                        }
                        else
                            if(err_num==2)
                            {

                                $(LN_err1).show();

                                $(main_error_div).show();
                            }
                            else
                                if(err_num==3)
                                {

                                    $(Email_err1).show();
                                    $(main_error_div).show();
                                }
                                else
                                    if(err_num==4)
                                    {
                                            $(Email_err2).show();

                                        $(main_error_div).show();
                                    }
                                    else
                                        if(err_num==5)
                                        {
                                                $(Pass_err1).show();
                                                $(main_error_div).show();

                                        }
                                        else
                                            if(err_num==6)
                                            {

                                                    $(Pass_err2).show();
                                                    $(main_error_div).show();

                                            }

                                            event.preventDefault();

                }



            }







            );
