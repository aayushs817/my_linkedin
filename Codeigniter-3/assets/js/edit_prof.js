

$("#Change_pic_b_1").click(function(){


	$("#mfile").fadeIn("medium",function(){});
	$('#mfile_2').fadeIn("medium",function(){});
	$('#Change_cancel_b_2').fadeIn("medium",function(){});
$("#Change_pic_b_1").hide();
});

$("#Change_pic_b_1").hover(function(){

	$('#Change_pic_b_1').show();

});


$("#Change_cancel_b_2").click(function(){

	$('#Change_cancel_b_2').hide();
$('#mfile').hide();
$('#mfile_2').hide();
$("#Change_pic_b_1").hide();
});

$("#my_pic_curr").hover(function(){

	$("#Change_pic_b_1").fadeIn("medium",function(){});


},function(){


$("#Change_pic_b_1").hide();

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

$("#lk_by_can").click(function(){
	$("#lk_by").hide();
$("#lk_by_can").hide();
});




//-------------------------
 $('.textarea').liveUrl({
                      loadStart : function(){
                         $('.liveurl-loader').show();

                        alert("sdfsf");
                     },
                     loadEnd : function(){
                         $('.liveurl-loader').hide();
                     },
                     success : function(data) 
                     {                        
                         var output = $('.liveurl');
                         output.find('.title').text(data.title);
                         output.find('.description').text(data.description);
                         output.find('.url').text(data.url);
                         output.find('.image').empty();



                         
                         output.find('.close').one('click', function() {
                             $(this).parent().hide('fast');
                             $(this).parent().find('.video').html('');
                             $('textarea').trigger('clear'); 
                         });
                         
                         output.show('fast');
 
                         if (data.video != null) {
 
                             var ratioW        = data.video.width  /200;
                             data.video.width  = 200;
                             data.video.height = data.video.height / ratioW;
         
                             var video = 
                             '<object width="' + data.video.width  + '" height="' + data.video.height  + '">' +
                                 '<param name="movie"' +
                                       'value="' + data.video.file  + '"></param>' +
                                 '<param name="allowScriptAccess" value="always"></param>' +
                                 '<embed src="' + data.video.file  + '"' +
                                       'type="application/x-shockwave-flash"' +
                                       'allowscriptaccess="always"' +
                                       'width="' + data.video.width  + '" height="' + data.video.height  + '"></embed>' +
                             '</object>';
                             output.find('.video').html(video);
                             
                          
                         }
                     },
                     addImage : function(image)
                     {

                         var output = $('.liveurl');
                         output.find('.image').prepend($(image));
                        

                        
                          //alert($(".image").text());
                     }              });

