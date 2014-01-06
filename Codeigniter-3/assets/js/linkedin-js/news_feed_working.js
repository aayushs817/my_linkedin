
 var random_id=1;
 var dumy_4=1;
$(window).scroll(function() {
   if($(window).scrollTop() + $(window).height() == $(document).height()) {
   
   if(dumy_4==1)
   {
   	
	dumy_4=0;
$.ajax({
	type: "POST",
	async: "false",
	url:  baseurl +"index.php/newsfeed/newssfeed/get_end",
	// acess in db :here value
		data: { last_statusi:dum_},
		dataType: "json",
		success: function(data){
			
			//alert(data);
			if(data==0)
			{


				
				
					 show_home_statuses(dum_,5);
			}
			else
			{
	
		
			 		
			}
			dumy_4=1;
					
							},
	error:function(x,e)
	{

	if(x.status==0){
	alert('You are offline!!\n Please Check Your Network.');
	}else if(x.status==404){
	alert('Requested URL not found.');
	}else if(x.status==500){
	alert('Internel Server Error.');
	}else if(e=='parsererror'){
	alert('Error.\nParsing JSON Request failed.');
	}else if(e=='timeout'){
	alert('Request Time out.');
	}else {
	alert('Unknow Error.\n'+x.responseText);
	}
	},

	dataType: 'html'
	});
}



      
   			//alert(dum_);
   }
});
 
$("#lk_by_can").click(function(){
	$("#lk_by").hide();
$("#lk_by_can").hide();

});

$(document).ready(function(){
	//alert("iam in page");
	$("#lk_by").hide();
$("#lk_by_can").hide();




	
	show_home_statuses(0,5);

    
    /*var abc="//localhost/cod/assets/img/profile_pic/ghost_profile.jpg";
	var res= abc.match(/form-nocommentform/g);	
	alert(res);
	*//*
	var random_id=Math.floor((Math.random()*200)+1);
 
	var bigli_id="post"+random_id;
 	var like_id="post"+(random_id+1);
    var comment_id="post"+(random_id+2);
 	var comment_div="post"+(random_id+3);
    var comment_ul="post"+(random_id+4);
alert(bigli_id+" "+like_id+" "+comment_id+" "+comment_div+" "+comment_ul);
*/

document.getElementById("#postText-postModuleForm").innerHTML=null;
				document.getElementById("#slideshare-file-input").innerHTML=null;
						


});



// big work, home page all statuses and comments





function show_home_statuses(last_statusid,limit){
//email


$.ajax({
	type: "POST",
	async: "false",
	url:  baseurl +"index.php/newsfeed/newssfeed/display_page",
	// acess in db :here value
		data: { last_statusid:last_statusid, limit:limit, email:email},

     	dataType: "json",
		success: function(data){
				//alert(data);
				display_statuses_on_home_page(data);
				//show_status(data,email,firstname,lastname,pic_path,baseurl,status,datetime,privacybit,attachment,attachmentbit);

				
				dumy_4=1;
				//show_status(baseurl,status,datetime,privacybit,attachment,attachmentbit);
				
				//alert("the end");			
							},
	error:function(x,e)
	{

	if(x.status==0){
	alert('You are offline!!\n Please Check Your Network.');
	}else if(x.status==404){
	alert('Requested URL not found.');
	}else if(x.status==500){
	alert('Internel Server Error.');
	}else if(e=='parsererror'){
	alert('Error.\nParsing JSON Request failed.');
	}else if(e=='timeout'){
	alert('Request Time out.');
	}else {
	alert('Unknow Error.\n'+x.responseText);
	}
	},

	dataType: 'html'
	});





}







function display_statuses_on_home_page(data){
						var storeFname=firstname;
						var storelname=lastname;
						var storepic_path=pic_path;
						var storeemail=email;	

		var splittedx = data.split("(*)@#(*)");
		var status_id1;

			for(var i =0;  i<splittedx.length-1  ; i++){
					//alert(splittedx[i]);
					if(splittedx[i]!="")
					{
					var abc=splittedx[i];
					//alert(abc);
						var status_recod=abc.split("{**/}");
						
						//alert(status_recod);

						var status_credentials=status_recod[0].split("~/#$%&/~");
						/*alert(status_credentials[0]);
						alert(status_credentials[1]);
						alert(status_credentials[2]);
						alert(status_credentials[3]);
						alert(status_credentials[4]);
						alert(status_credentials[5]);
						alert(status_credentials[6]);
						alert(status_credentials[7]);
						*/
						 status_id1=status_credentials[0];
						
						var firstname1=status_credentials[1];
						var lastname1=status_credentials[2];

						var email1=status_credentials[3];

						var pic_path1=status_credentials[4];
						var status1=status_credentials[5];

						var datetime1=status_credentials[6];
						var attachment1=status_credentials[8];
						var attachmentbit1=+status_credentials[7];

						var id=display_status(status_id1,email1,firstname1,lastname1,pic_path1,baseurl,status1,datetime1,attachment1,attachmentbit1,1);
							firstname=firstname1;							
							lastname=lastname1;
							pic_path=pic_path1;
							email=email1;
		
							callcheckker(id);

							var comments=status_recod[1].split("|_|=|_=");
							//alert(comments[0]);
							var comment_records=comments[0].split("=|+^|");
							
							for(var j=0;j< comment_records.length -1;j++){
								var comment_credentials=comment_records[j].split("~/#$%&/~");	
									email1=comment_credentials[0]														

									firstname1=comment_credentials[1];
									lastname1=comment_credentials[2];


									pic_path1=comment_credentials[3];
									status1=comment_credentials[4];

									datetime1=comment_credentials[5];
									post_my_comment_onhome_page(id,email1,firstname1,lastname1,pic_path1,status1,datetime1);	

							
							}

							/*alert( comment_records[1]);
							alert( comment_records[2]);
							alert( comment_records[3]);
							alert( comment_records[4]);
							alert( comment_records[5]);
							alert( comment_records[6]);
							alert( comment_records[7]);
*/

}

}
		
	
		dum_=status_id1;


						firstname=storeFname;
						lastname=storelname;
						pic_path=storepic_path;
						email=storeemail;


}






function post_my_comment_onhome_page(id,email1,firstname1,lastname1,pic_path1,status1,datetime1){
	//alert(id+" yes id");
			var abc=id;
				var ab=abc.split('t');
				var no=+ab[1];
				var comment_ul=no+4;
			//	alert(comment_ul);
		 comment_ul="#"+"post"+comment_ul;

		
		 //$(comment_ul).append("hehehheheheheh");
	
	var html=" ";
	html="<li class='comment-item first'>";
         html+="<div class='bubble'></div>";
         html+="<div class='sddadsa' style='width:10px;height:10px' ><img class='feed-photo photo' width='10' height='10' alt='Mehreen' src='"+baseurl+"assets/img/upload/"+pic_path1+"'></div>";   
         //html+="<img class='feed-photo photo' width='30' height='30' alt='Mehreen' src='"+baseurl+"assets/img/upload/default.jpg'>";   
         html+="<p>";
 html+="<a id='nus-comment-5809408543589150720' data-li-uscp-action='delete-my-comment' href='#' class='delete feed-delete-comment' data-li-topic-type='U' data-li-topic-id='5809407941207392256' data-li-scope-type='M' data-li-scope-id='275362107' data-li-discussion-id='5809408334230470659' data-li-comment-id='5809408543589150720' data-li-urn-id=''>Delete</a>";
           html+="<a href='#' class='commenter'>"+firstname1+" "+lastname1+"</a>";
           html+="<q>  "+status1+"</q>";
           html+="<span class='nus-timestamp'>"+datetime1+"</span>";
         html+="</p></li>";
         //alert(html);
		 $(comment_ul).append(html);

}






















































































































































































































































//    bakee kam
var click=1;
/*

$("feed-comment").click
(
  function(e)
  {
    if(e.target.className == "focus-comment-form")
    {
      alert("yes yes yes ");
    }
  }
);
*/




	function	 store_comment_in_db(status_id,comment,email){

				//alert(status_id);
				status_id=+status_id;
				

//generation current data and time 
		var currentdate = new Date(); 
    	var datetime = currentdate.getFullYear() + "-"
	                  + (currentdate.getMonth()+1)  + "-" 
	                  + currentdate.getDate()  + "  "  
	                  + currentdate.getHours() + ":"  
	                  + currentdate.getMinutes() + ":" 
	                  + currentdate.getSeconds();
	      //            alert(datetime);


// attachment
/*
		var attachment=$("#slideshare-file-input").val();
		//alert(attachment);
		var attachmentbit=0;
		if(attachment[0]!=null){
			attachmentbit=1;
		}		
*/


	$.ajax({
	type: "POST",
	url:  baseurl +"index.php/newsfeed/newssfeed/adding_comment",
	// acess in db :here value
		data: { status_id:status_id, time:datetime, coment_txt:comment, comenter_email:email },

     	dataType: "json",
		success: function(data){
				
							},
	error:function(x,e)
	{

	if(x.status==0){
	alert('You are offline!!\n Please Check Your Network.');
	}else if(x.status==404){
	alert('Requested URL not found.');
	}else if(x.status==500){
	alert('Internel Server Error.');
	}else if(e=='parsererror'){
	alert('Error.\nParsing JSON Request failed.');
	}else if(e=='timeout'){
	alert('Request Time out.');
	}else {
	alert('Unknow Error.\n'+x.responseText);
	}
	},

	dataType: 'html'
	});

	}












function post_my_comment(id){
	//alert(id+" yes id");
			var abc=id;
				var ab=abc.split('t');
				var no=+ab[1];
				var comment_ul=no+4;
				var status_id=no+5;
				comment_ul="#"+"post"+comment_ul;
				status_id="post"+status_id;

				no=no+6;
				ab[0]=ab[0]+"t"+no;

			var value=document.getElementById(ab[0]).value;
			var status_idindb=document.getElementById(status_id).value;
			value=is_valid_escaping(value);
//			alert(status_idindb);



	var html=" ";
	html="<li class='comment-item first'>";
         html+="<div class='bubble'></div>";
         html+="<img class='feed-photo photo' width='30' height='30' alt='Abdul Wasae' src='"+baseurl+"assets/img/upload/"+email_2+"_3.jpg'>";   
         html+="<p>";
           html+="<a id='nus-comment-5809408543589150720' data-li-uscp-action='delete-my-comment' href='#' class='delete feed-delete-comment' data-li-topic-type='U' data-li-topic-id='5809407941207392256' data-li-scope-type='M' data-li-scope-id='275362107' data-li-discussion-id='5809408334230470659' data-li-comment-id='5809408543589150720' data-li-urn-id=''>Delete</a>";
           html+="<a href='#' class='commenter'>"+firstname+" "+lastname+"</a>";
           html+="<q>   "+value+"</q>";
           html+="<span class='nus-timestamp'>Less than a minute ago</span>";
         html+="</p></li>";
		 $(comment_ul).append(html);

		 store_comment_in_db(status_idindb,value,email);




}

//==DISPLAY COMENT UPON CLICK DIV CREATION
function callcheckker(id){

				var abc=id;
				var ab=abc.split('t');
				var no=+ab[1];
							var cm_text=no+6;
							var coment_text_id="post"+cm_text;

				no=no+3;
				ab[0]="#"+ab[0]+"t"+no;
				var id1=ab[0];
					var abc=document.getElementById(id).value;	
					var abc1=document.getElementById(id).innerHTML;	

					var res= abc1.match(/form-nocomment/g);	
if(res==null){


                var html="<div id='comm' class='form mini form-nocomment'>";
                            html+="<form >";

                              html+="<label for='comment-body-U-5808132853447270400-M-240938327-5808132853447270400' style='display: none;' id='comment-body-U-5808132853447270400-M-240938327-5808132853447270400-label' class='ghost'>Add a comment…</label>";

                              html+="<div id='mentions-container-U-5808132853447270400-M-240938327-5808132853447270400' class='mentions-container'>";
                                html+="<pre class='mentions-highlighter' id='comment-highlighter-U-5808132853447270400-M-240938327-5808132853447270400'></pre>";

                                html+="<textarea id='"+coment_text_id+"' class='texta comment-text mentions-input'  placeholder='Add a comment' data-base-height='40'></textarea>";


                              html+="</div>";


                              html+="<input type='hidden' name='comment-typeahead-U-5808132853447270400-M-240938327-5808132853447270400' id='comment-typeahead-U-5808132853447270400-M-240938327-5808132853447270400'>";
                              html+="<div class='mentions-typeahead-container' id='typeahead-container-U-5808132853447270400-M-240938327-5808132853447270400'>";


										html+="<div class='yui-ac-content' style='display: none;'>";
										               html+="<div class='yui-ac-hd' style='display: none;'></div>";
										               html+="<div class='yui-ac-bd'>";
										                 html+="<ul>";
										                   html+="<li style='display: none;'></li>";
										                   html+="<li style='display: none;'></li>";
										                   html+="<li style='display: none;'></li>";
										                   html+="<li style='display: none;'></li>";
										                   
										                 html+="</ul>";
										               html+="</div>";
										               html+="<div class='yui-ac-ft' style='display: none;'></div>";
										             html+="</div>";
										           html+="</div>";

                              html+="</div>";

                              html+="<input type='hidden' name='mentions' id='mentions-data-U-5808132853447270400-M-240938327-5808132853447270400'>";
                              html+="<div class='actions'>";
                            
                              html+="<input type='submit' onClick=\"post_my_comment(\'"+id+"\')\" class='post-comment btn-primary' value='Comment' ></div>";
                        

                            html+="</form>";
                         


                          html+="</div></div>";

 $(ab[0]).append(html);
}

}

/*
$( "body").on('click','feed-comment',function() {
  //alert($( this ).parent());
  alert("hello");
});*/

 function display_status(status_id,email,firstname,lastname,pic_path,baseurl,status,datetime,attachment,attachmentbit,append_mode1){



 
	var bigli_id="post"+random_id; //entire record of status d
 	var like_id="post"+(random_id+1);//like button
    var comment_id="post"+(random_id+2);//coment butoon
 	var comment_div="post"+(random_id+3);//uls of like n coment
    var comment_ul="post"+(random_id+4);//comment lis
      var status_id2="post"+(random_id+5);
     
      var g;
//alert(email);
 //		alert("done");
//alert("done2");
random_id=random_id+20;




	 	var	html="<li id='"+bigli_id+"' class='feed-item linkedin-post' data-config='{ &quot;mid&quot;: 240938327 }' data-li-update-position='7' data-li-update-token='62e336ccc8a473999a8122ce1a4bacbf' data-li-update-date='1384766833666' data-li-update-id='5808132853447270400' data-li-update-request-id='9dda8d07-a869-470f-90fc-9b355db5ce35' data-li-update-next-batch-offset='15'>";

         html+="<a href='#' title='"+firstname+" "+lastname+"'>";
                      

html+="<img src='"+baseurl+"assets/img/upload/"+pic_path+"' id='event-photo-5808132853447270400' class='feed-photo photo' alt='"+firstname+" "+lastname+"' width='65' height='65'></a>";



                      html+="<div class='feed-body'>";

                        html+="<div class='nus-action-links'>";
                         html+="<a href='http://www.linkedin.com/updates?hide=&key=240938327&format=page&pk=member-home&undoTrackUrl=http%3A%2F%2Fwww%2Elinkedin%2Ecom%2Fnhome%2Fnus-redirect%3FtrkToken%3Daction%253Dunhide-member%2526pageKey%253Dmember-home%2526contextId%253D9dda8d07-a869-470f-90fc-9b355db5ce35%2526isSponsored%253Dfalse%2526distanceFromViewer%253D1%2526aggregationType%253Dnone%2526isPublic%253Dtrue%2526verbType%253Dlinkedin%253Apost%2526activityId%253Dactivity%253A5808132853447270400%2526isDigested%253Dfalse%2526isFolloweeOfPoster%253Dfalse%2526actorType%253Dlinkedin%253Amember%2526feedPosition%253D7%2526actorId%253Dmember%253A240938327%2526objectId%253D%2526rowPosition%253D1%2526objectType%253D&goback=%2Enmp_*1_*1_*1_*1_*1_*1_*1_*1_*1_*1' data-url='/updates?hide=&amp;key=240938327&amp;format=ajax&amp;undoTrackUrl=http%3A%2F%2Fwww%2Elinkedin%2Ecom%2Fnhome%2Fnus-redirect%3FtrkToken%3Daction%253Dunhide-member%2526pageKey%253Dmember-home%2526contextId%253D9dda8d07-a869-470f-90fc-9b355db5ce35%2526isSponsored%253Dfalse%2526distanceFromViewer%253D1%2526aggregationType%253Dnone%2526isPublic%253Dtrue%2526verbType%253Dlinkedin%253Apost%2526activityId%253Dactivity%253A5808132853447270400%2526isDigested%253Dfalse%2526isFolloweeOfPoster%253Dfalse%2526actorType%253Dlinkedin%253Amember%2526feedPosition%253D7%2526actorId%253Dmember%253A240938327%2526objectId%253D%2526rowPosition%253D1%2526objectType%253D' data-li-track-url='http://www.linkedin.com/nhome/nus-redirect?trkToken=action%3Dhide-member%26pageKey%3Dmember-home%26contextId%3D9dda8d07-a869-470f-90fc-9b355db5ce35%26isSponsored%3Dfalse%26distanceFromViewer%3D1%26aggregationType%3Dnone%26isPublic%3Dtrue%26verbType%3Dlinkedin%3Apost%26activityId%3Dactivity%3A5808132853447270400%26isDigested%3Dfalse%26isFolloweeOfPoster%3Dfalse%26actorType%3Dlinkedin%3Amember%26feedPosition%3D7%26actorId%3Dmember%3A240938327%26objectId%3D%26rowPosition%3D1%26objectType%3D' class='nus-hide-member' title='Hide M from your updates' role='button'>Hide</a>";
                        html+="</div>";




                        html+="<div class='feed-content'>";



                          html+="<div class='annotated-body'>";
                            html+="<span class='new-miniprofile-container /profile/mini-profile-with-connections?_ed=0_0yykgZAGbAs3vR3nTUGTutTjT2w8GQcoMB94O65S2No' data-li-url='/profile/mini-profile-with-connections?_ed=0_0yykgZAGbAs3vR3nTUGTutTjT2w8GQcoMB94O65S2No' data-li-tl='tl/shared/profile/mini_profile_shell'>";
                              html+="<strong>";
                                html+="<a href='#'>"+firstname+" "+lastname+"</a>";
                              html+="</strong>";
                            html+="</span>";

                          html+="</div>";

                          html+="<span class='share-body'>";

                            html+="<span class='commentary' id='control_gen_16'>";
                              html+=""+status+"";
                              //html+="<a href='http://www.linkedin.com/nhome/?trk=#' title='Show more' class='toggle-show-more'>more</a>";
                            html+="</span>";


                          html+="</span>";

                          	if(attachmentbit==1){
 									
                          			   html+="<div class='image-share-upload mini-image-size'>";
								       html+="<div class='share-object has-photo linkedin-content'  id='control_gen_17'>";
								          html+="<div class='photo'>";

								            html+="<a href='#' class='image feed-external-url' rel='nofollow' target='_blank'>";
								              html+="<img src='"+baseurl+"assets/img/attachment/"+attachment+"' alt='"+attachment+"' data-li-track-url=''></a>";

								html+="</div> <div class='properties'><span class='share-source'>Image</span> </div></div></div>";



                          	}


                          html+="</div>";

                        html+="<div class='feed-item-meta'>";
                          html+="<ul class='feed-actions'>";
                          
        //if(my_like_==1)
	//{
                         html+="<li><Button class='like_button' style='border-radius:5px;border:none' value=\'"+status_id+"\' >like</Button></li><li><Button class='show_like' style='border-radius:5px;border:none'value=\'"+status_id+"\' >liked by </Button></li>";
                            
//}
//else
//{
 // html+="<li><Button class='like_button' style='border-radius:5px;border:none' value=\'"+status_id+"\' >like</Button></li><li><Button class='show_like' style='border-radius:5px;border:none'value=\'"+status_id+"\' >liked by "+total_likes_of_c+"</Button></li>";
                        

//}



                            /*html+="<li id='"+like_id+"' class='feed-like'>";
                              html+="<span class='show-like'>";
                                html+="<a  href='http://www.linkedin.com/lite/nus-like-update?like=true&scopeType=M&scopeId=240938327&topicType=U&topicId=5808132853447270400&csrfToken=ajax%3A4628867085291123303&goback=%2Enmp_*1_*1_*1_*1_*1_*1_*1_*1_*1_*1&trk=unlike' class='unlike' data-li-lite-url='1' data-li-unlike-url='/lite/nus-like-update?like=true&amp;scopeType=M&amp;scopeId=240938327&amp;topicType=U&amp;topicId=5808132853447270400&amp;csrfToken=ajax%3A4628867085291123303&amp;goback=%2Enmp_*1_*1_*1_*1_*1_*1_*1_*1_*1_*1&amp;trk=like-ajax' title='Click to unlike this update' rel='like-U-5808132853447270400-M-240938327' data-li-num-liked='12' data-li-track-url='http://www.linkedin.com/nhome/nus-redirect?trkToken=action%3Dlike%26pageKey%3Dmember-home%26contextId%3D9dda8d07-a869-470f-90fc-9b355db5ce35%26isSponsored%3Dfalse%26distanceFromViewer%3D1%26aggregationType%3Dnone%26isPublic%3Dtrue%26verbType%3Dlinkedin%3Apost%26activityId%3Dactivity%3A5808132853447270400%26isDigested%3Dfalse%26isFolloweeOfPoster%3Dfalse%26actorType%3Dlinkedin%3Amember%26feedPosition%3D7%26actorId%3Dmember%3A240938327%26objectId%3D%26rowPosition%3D1%26objectType%3D' data-li-pulse-like-url='/today/social/delete-like-submit' data-li-permlink='' data-li-article-id='' data-li-megaphoneflag='0' role='button' >";
                                  
                                  html+="Like </a>";
                                  html+="<a  data-li-permlink='' data-li-article-id='' data-li-megaphoneflag='0' role='button'>";
                                  html+="Like </a>";
                             	
                             	 html+="</span></li>";*/
                                //html+="yes yes";
                            html+="<li id='"+comment_id+"' class='feed-comment'>";
                              html+="<a  class='focus-comment-form'  onClick=\"callcheckker(\'"+bigli_id+"\')\" title='Click to comment on this update' rel='comment-U-5808132853447270400-M-240938327' data-li-num-commented='0' role='button'>Comment</a>";
                            										

                            html+="</li>";

                            // 








                            html+="<li class='feed-share'>";

                              html+="<a href='http://www.linkedin.com/nhome/?trk=#' title='Share' role='button'>Share</a>";

                            html+="</li>";

                          html+="</ul>";

                          html+="<span class='nus-timestamp'>"+datetime+"</span>";












                        html+="</div>";

                       html+="<div id='"+comment_div+"' class='comments' id='discussion-U-5808132853447270400-M-240938327-5808132853447270400-form' data-li-member-name='Abdul Wasae' data-li-config=''>";


                         html+=" <ul id='"+comment_ul+"'>";
                          html+="</ul>";
//start

							html+= "<input id='"+status_id2+"' value='"+status_id+"' type='hidden'>";
                            


//ends
                          html+="</div></div></li>";


//alert(html);
if(append_mode1==0){
 $("#my-feed-post").prepend(html);
}else{
	$("#my-feed-post").append(html);
}
			
return bigli_id;

 //$("ul").prepend("<li>ONE</li>");


 }



function is_valid_escaping(che)
{
    var ans="";
    for(var i=0;i<che.length;i++)
    {
        if(che[i]=='<')
        {
        var sb=che.split('<');
        var x="&lt";
        }

        else if(che[i]=='>')
        {
        var sb=che.split('>');
        var x="&gt";
        }
        else if(che[i]=='&')
        {
        var sb=che.split('&');
        var x="&amp";
        }
        else if(che[i]=='"')
        {
        var sb=che.split('"');
        var x="&quot";
        }
    else if(che[i]=="'")
        {
        var sb=che.split("'");
        var x="&#39";
        }
        if((che[i]=="'") || (che[i]=='"') || (che[i]=='&') || (che[i]=='>') || (che[i]=='<'))
        {
        var p1=sb[0];
        //var p2=sb[1];
        ans=ans+x;//+p2;
            //che=ans;
        }
        else
        {
            ans=ans+che[i];
        }    
    
    }
   
return ans;
}
$("#share-submit").click(function(){
// picking up status 


		var status=$("#postText-postModuleForm").val();
		status=is_valid_escaping(status);
			//alert(status);
			//alert(status.length);
			var fine=false;
			if(status.length>0){
			for(var i=0; i<status.length;i++){
				if(status[i]!=" "){
					fine=true;
					break;
				}
			}
			}
//generation current data and time 
		var currentdate = new Date(); 
    	var datetime = currentdate.getFullYear() + "-"
	                  + (currentdate.getMonth()+1)  + "-" 
	                  + currentdate.getDate()  + "  "  
	                  + currentdate.getHours() + ":"  
	                  + currentdate.getMinutes() + ":" 
	                  + currentdate.getSeconds();
	      //            alert(datetime);


// attachment

		var attachment=$("#slideshare-file-input").val();
		
	 var 	fnp=$("#slideshare-file-input").attr('name');
		
		
		
		//alert(attachment);
		var attachmentbit=0;
		if(attachment[0]!=null){
			attachmentbit=1;
		}		

		if(attachmentbit==1){
			fine=true;

		}
// privacy 

		var x = document.getElementById("doc-sharing-visibility");  
		var privacy = x.options[x.selectedIndex].innerHTML; 
		//var privacybit=0;

			/*
			1= connection
			2=public
			3=public+twitter*/

	if(privacy=="Connections"){
		privacybit=1
	}else if(privacy=="Public"){
		privacybit=2
	}else if(privacy=="Public + Twitter"){
		privacybit=3
	}else{
		privacybit=0;
	}

/*
		alert(privacy + privacybit);
alert(email+" "+firstname+" "+lastname+" "+pic_path);
alert(baseurl);
*/
/*var status_id="123";
show_status(status_id,email,firstname,lastname,pic_path,baseurl,status,datetime,privacybit,attachment,attachmentbit);
*/
//===WHEN POST A STATUS 
if( fine!=false && privacybit!=0)
{


	$.ajax({
	type: "POST",
	url:  baseurl +"index.php/newsfeed/newssfeed/posting_status",
	// acess in db :here value
		data: { status_:status,time:datetime,email:email_2,privacy:privacybit,attachment_path:attachment,atach_bit:attachmentbit,fnp:fnp },

     	dataType: "json",
		success: function(data){
				
				datetime="1 second ago";
				display_status(data,email,firstname_2,lastname_2,pic_path,baseurl,status,datetime,attachment,attachmentbit,0);



	
							},
	error:function(x,e)
	{

	if(x.status==0){
	alert('You are offline!!\n Please Check Your Network.');
	}else if(x.status==404){
	alert('Requested URL not found.');
	}else if(x.status==500){
	alert('Internel Server Error.');
	}else if(e=='parsererror'){
	alert('Error.\nParsing JSON Request failed.');
	}else if(e=='timeout'){
	alert('Request Time out.');
	}else {
	alert('Unknow Error.\n'+x.responseText);
	}
	},

	dataType: 'html'
	});
}


});



$("body").on('click','Button.like_button',function(){



	
	var agya_pasund=this.value;
	
	var curr_txt_=$(this).text();
	

	if(curr_txt_=='like')
	{

			$(this).text("unlike");

	}
	else
	{
		$(this).text("like");


	}

$.ajax({
type: "POST",
url:  baseurl +"index.php/newsfeed/newssfeed/like_it",

data: { like_status:agya_pasund ,curr_txt:curr_txt_},
success: function(data){
	
  // data printed on echoed on the server side.

},
error:function(x,e)
{

if(x.status==0){
alert('You are offline!!\n Please Check Your Network.');
}else if(x.status==404){
alert('Requested URL not found.');
}else if(x.status==500){
alert('Internel Server Error.');
}else if(e=='parsererror'){
alert('Error.\nParsing JSON Request failed.');
}else if(e=='timeout'){
alert('Request Time out.');
}else {
alert('Unknow Error.\n'+x.responseText);
}
},

dataType: 'html'
});


});



$("body").on('click','Button.show_like',function(){





$("#lk_by").fadeIn("medium",function(){});
$('#lk_by_can').fadeIn("medium",function(){});
var dikao=this.value;


	$.ajax({
type: "POST",
url:  baseurl +"index.php/newsfeed/newssfeed/show_liked",

data: { like_b:dikao },
success: function(data){
	
  // data printed on echoed on the server side.
document.getElementById('lk_by').innerHTML ="";
var spli = data.split("/");
var i=0;
var count=1;

html="";

var total_re=spli[spli.length-2];




for(var te=0;te<spli.length-1;te++)
{







var keyword="";
var fname_="";
var lna="";
var title_="";
var email=spli[te];
var inst_="";
var country_="";



$.ajax({
type: "POST",
url:  baseurl +"index.php/search/searchCont/searchingal",
// acess in db :here value
data: { fname:fname_, lname:lna, email:email, country:country_, title:title_, instit:inst_, key_word:keyword },
success: function(data){







var splitted = data.split("/");

var i=0;
var count=1;
var html="";



// total result from db
var total_result=splitted[splitted.length-2];	




for(i=0 ; i<splitted.length -2 ; i++){ 
  // -1 because last element is total records

var splitted2 = splitted[i].split("$");


html+="<li class='mod result idx9 people'  data-li-position='"+count+"'>";	
if(splitted2[5]==0)
{
html+="<div class='bd'>	<a ><img  alt='porfile pic' class='entity-img' width='60' height='60' src='"+baseurl+"assets/img/upload/default.jpg'></a>";	
}
else
{
	//html+="<div class='bd'>	<a ><img class='entity-img' width='60' height='60' src='"+baseurl+"assets/img/upload/a.jpg'></a>";	

html+="<div class='bd'>	<a ><img alt='porfile pic' class='entity-img' width='60' height='60' src='"+baseurl+"assets/img/upload/"+splitted2[6]+".jpg'></a>";	
}


html+="<h3><a class='title' >"+splitted2[0]+"</a><span class='badges'>";
html+="<span></span></span></h3><p class='description'>"+splitted2[1]+" at "+splitted2[2]+" </p>";
html+="<dl class='demographic'><dt>Location</dt><dd>"+splitted2[3]+"</dd><dt>Industry</dt><dd class='separator'>"+splitted2[4]+"</dd></dl>";


html+="</div></li>";	


}
$('#lk_by').append(html);

},
error:function(x,e)
{

if(x.status==0){
alert('You are offline!!\n Please Check Your Network.');
}else if(x.status==404){
alert('Requested URL not found.');
}else if(x.status==500){
alert('Internel Server Error.');
}else if(e=='parsererror'){
alert('Error.\nParsing JSON Request failed.');
}else if(e=='timeout'){
alert('Request Time out.');
}else {
alert('Unknow Error.\n'+x.responseText);
}
},

dataType: 'html'
});












































}




























},
error:function(x,e)
{

if(x.status==0){
alert('You are offline!!\n Please Check Your Network.');
}else if(x.status==404){
alert('Requested URL not found.');
}else if(x.status==500){
alert('Internel Server Error.');
}else if(e=='parsererror'){
alert('Error.\nParsing JSON Request failed.');
}else if(e=='timeout'){
alert('Request Time out.');
}else {
alert('Unknow Error.\n'+x.responseText);
}
},

dataType: 'html'
});




});
