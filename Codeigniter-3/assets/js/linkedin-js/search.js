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

$("#send_invitation_popup").click(function(){


	var txt_m=document.getElementById('txt_msg').value;
	
	txt_m=is_valid_escaping(txt_m);

	var tum_6=this.value;
$.ajax({
type: "POST",
url:  baseurl +"index.php/invitations/invite/send_request",

data: { u_to_conn:tum_6, txt_msg_2: txt_m },
success: function(data){
	
  // data printed on echoed on the server side.
document.getElementById(tum_6).innerHTML="";

var new_html="<Button type='submit' class='button_cancel'  value=\'"+tum_6+"\' >Cancel Request</Button>";
document.getElementById(tum_6).innerHTML=new_html;
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
$('.popup_connect_div').hide();

});
$('#cancel_popup').click(function(){

$('.popup_connect_div').hide();
document.getElementById('txt_msg').value="";

});
$("body").on('click', 'Button.button_action_user', function() {
    var tum=this.value;

$('.popup_connect_div').show();
document.getElementById('send_invitation_popup').value=tum;




});



$("body").on('click', 'Button.button_cancel', function() {


    var tum_2=this.value;



$.ajax({
type: "POST",
url:  baseurl +"index.php/invitations/invite/cancel_request",

data: { cnc:tum_2  },
success: function(data){
  // data printed on echoed on the server side.
 
  document.getElementById(tum_2).innerHTML="";
  var new_html_2="<Button class='button_action_user' type='Button'   value=\'"+tum_2+"\'>Connect</Button>";
document.getElementById(tum_2).innerHTML=new_html_2;
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




$("body").on('click', 'Button.button_action_disconnect', function() {


    var tum_3=this.value;



$.ajax({
type: "POST",
url:  baseurl +"index.php/invitations/invite/disconnect_friend",

data: { d_f:tum_3  },
success: function(data){
  // data printed on echoed on the server side.
  
  document.getElementById(tum_3).innerHTML="";
  var new_html_3="<Button class='button_action_user' type='Button'   value=\'"+tum_3+"\'>Connect</Button>";
document.getElementById(tum_3).innerHTML=new_html_3;
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



$("body").on('click', 'Button.button_action_accept', function() {


 var tum_4=this.value;



$.ajax({
type: "POST",
url:  baseurl +"index.php/invitations/invite/accept_from_ajax",

data: { accp:tum_4  },
success: function(data){
  // data printed on echoed on the server side.

  document.getElementById(tum_4).innerHTML="";
  var new_html_4="<Button type='submit' >Message</Button><Button class='button_action_disconnect' type='Button'   value=\'"+tum_4+"\'>Disconnect</Button>";
document.getElementById(tum_4).innerHTML=new_html_4;
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

$("body").on('click', 'Button.button_action_ignore', function() {


 var tum_5=this.value;



$.ajax({
type: "POST",
url:  baseurl +"index.php/invitations/invite/ignore_from_ajax",

data: { ign:tum_5  },
success: function(data){
  // data printed on echoed on the server side.
  
  document.getElementById(tum_5).innerHTML="";
  var new_html_5="<Button class='button_action_user' type='Button'   value=\'"+tum_5+"\'>Connect</Button>";
document.getElementById(tum_5).innerHTML=new_html_5;
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


$(document).ready(function(){
		$('#advs').hide();
		$('.popup_connect_div').hide();
		
	
});


$( "#top-header" ).mouseover(function() {
		$( "#responsive-nav-scrollable" ).slideDown( "fast" );  
  var html="<div ></br></br></br></br></div>";
          
  			document.getElementById("some_back_spaces").innerHTML=html;
  });
  

  $( "#body" ).mouseover(function() {
				$('#responsive-nav-scrollable').hide();
				  var html=" ";
          
  			document.getElementById("some_back_spaces").innerHTML=html;
  

  });


function show_advance_search_div(){
		$('#advs').show();
}

function hide_advance_search_div(){
		$('#advs').hide();
}
function makeRequest(data)
{
alert(data);
alert("yes");
}
	
	

$("#advance_Search").click(function(){

var keyword=$("#advs-keywords").val();
var fname_=$("#advs-firstName").val();
var lna=$("#advs-lastName").val();
var title_=$("#advs-title").val();
var email=$("#advs-company").val();
var inst_=$("#advs-school").val();
var country_=$("#advs-countryCode").val();



$.ajax({
type: "POST",
url:  baseurl +"index.php/search/searchCont/searchingal",
// acess in db :here value
data: { fname:fname_, lname:lna,email:email,country:country_ ,title:title_,instit:inst_,key_word:keyword, },
success: function(data){


$('#advs').hide();


var html="<ol id='results' class='search-results'></ol>";
document.getElementById('results-container').innerHTML = html;

var splitted = data.split("/");
var i=0;
var count=1;
html="";


// total result from db
var total_result=splitted[splitted.length-2];	
var resultcount_html=total_result;
document.getElementById('records_count').innerHTML =resultcount_html ;


for(i=0 ; i<splitted.length -2 ; i++){   // -1 because last element is total records

var splitted2 = splitted[i].split("$");

html+="<li class='mod result idx9 people'  data-li-position='"+count+"'>";	
if(splitted2[5]==0)
{
html+="<div class='bd'>	<a ><img class='entity-img' width='60' height='60' src='"+baseurl+"assets/img/upload/default.jpg'></a>";	
}
else
{
	//html+="<div class='bd'>	<a ><img class='entity-img' width='60' height='60' src='"+baseurl+"assets/img/upload/a.jpg'></a>";	

html+="<div class='bd'>	<a ><img class='entity-img' width='60' height='60' src='"+baseurl+"assets/img/upload/"+splitted2[6]+".jpg'></a>";	
}

html+="<h3><a class='title' >"+splitted2[0]+"</a><span class='badges'>";
html+="<span></span></span></h3><p class='description'>"+splitted2[1]+" at "+splitted2[2]+" </p>";
html+="<dl class='demographic'><dt>Location</dt><dd>"+splitted2[3]+"</dd><dt>Industry</dt><dd class='separator'>"+splitted2[4]+"</dd></dl>";

if(splitted2[6]!=Email_this)
{
if(splitted2[7]==0)
{
html+="<div class='add_div_aj' id=\'"+splitted2[6]+"\'>";
html+="<Button class='button_action_user' type='Button'  value=\'"+splitted2[6]+"\'>Connect</Button>";
html+="</div>";
}
else
{
	if(splitted2[7]==1)
	{
	html+="<div class='add_div_aj' id=\'"+splitted2[6]+"\'><Button type='submit' >Message</Button>";

	html+="<Button type='Button' class='button_action_disconnect'  value=\'"+splitted2[6]+"\' >Disconnect</Button>";
	html+="</div>";
	}
	else
	{
		if(splitted2[7]==2)
		{

	html+="<div class='add_div_aj' id=\'"+splitted2[6]+"\'>";
	html+="<Button type='Button' class='button_cancel'  value=\'"+splitted2[6]+"\' >Cancel Request</Button>";
	html+="</div>";
		}
		else
		{
			if(splitted2[7]==3)
			{

	html+="<div class='add_div_aj' id=\'"+splitted2[6]+"\'>";
	html+="<Button type='Button' class='button_action_accept'  value=\'"+splitted2[6]+"\' >Accept</Button>";
	html+="<Button type='Button' class='button_action_ignore'  value=\'"+splitted2[6]+"\' >Ignore</Button>";
	html+="</div>";

			}

		}


	}

}
}

html+="</div></li>";	
count=count+1;

}
document.getElementById('results').innerHTML = html;

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





//======================================================QUICK SEARCH======================================







	function	quick_search(data,baseurl){
var is_display=false;
//alert(data);
if(data!=null){
//	alert('ahsa');
//	alert(is_display);
	var search_result="<div class='yui-ac-content' style=''>";
    search_result+="<div class='yui-ac-hd' style='display: none;'></div>";
    search_result+="<div class='yui-ac-bd'>";
    search_result+="<ul class='hasCategory hasImage'>";


	var splittedx = data.split("^");

		   var connections = splittedx[0].split("+");

		   		if(connections.length-1 >0){
is_display=true;
	search_result+="<li class='rank-0 category mynetwork' style=''>";
	search_result+="<h3><strong>Connections</strong></h3></li>";
	
				for(var j=0;j<connections.length-1 && j<5 ;j++){
						var friend = connections[j].split("%");
						 
						 search_result+="<li class='rank-0 item school first primary' style=''>";
if(friend[3]==1)
{
search_result+= "<img  class='entity-img' width='60' height='60' src='"+baseurl+"assets/img/upload/"+friend[4]+".jpg'>"
}
else
{
	search_result+= "<img class='entity-img' width='60' height='80' src='"+baseurl+"assets/img/upload/default.jpg'>";
}				        // search_result+= "<img src='http://m.c.lnkd.licdn.com/mpr/mpr/shrink_40_40/p/1/005/009/1ae/09cb26d.png'>"
        				 search_result+= "<h4 class='item-headline'>";
          				 search_result+=""+friend[0]+"</h4>";
          				 search_result+="<p class='item-subline'>"+friend[1]+" at "+friend[2]+"</p></li><br/><hr/>";
				}
}
				// companies 

				var companies = splittedx[1].split("+");
				

				if(companies.length-1>0){
				is_display=true;
				search_result+="<li class='rank-0 category company yui-ac-highlight' style=''>";
				search_result+="<h3><strong>Companies</strong></h3></li>";
				

				for(var j=0;j<companies.length-1  && j<3 ;j++){
						var company = companies[j].split("%");
							
						search_result+="<li class='rank-0 item company first secondary' style=''>";
						search_result+="<img src='http://m.c.lnkd.licdn.com/mpr/mpr/shrink_40_40/p/7/000/2ac/368/098996c.png'>";
						search_result+="<h4 class='item-headline'>"+company[0]+"</h4>";
						search_result+="<p class='item-subline'>"+company[0]+"; 10,001+ employees</p></li><br/><hr/>";
				}

}				
				var industries = splittedx[2].split("+");
				

				if(industries.length-1 >0){				
				is_display=true;
				search_result+="<li class='rank-0 category company yui-ac-highlight' style=''>";
				search_result+="<h3><strong>Industries</strong></h3></li>";


				for(var j=0;j<industries.length-1 && j<3 ;j++){
						var industry = industries[j].split("%");
							
						search_result+="<li class='rank-0 item company first secondary' style=''>";
						search_result+="<img src='http://m.c.lnkd.licdn.com/mpr/mpr/shrink_40_40/p/7/000/2ac/368/098996c.png'>";
						search_result+="<h4 class='item-headline'>"+industry[0]+"</h4>";
						search_result+="<p class='item-subline'>"+industry[0]+"; 200,001+ employees</p></li> <br/><hr/>";
				}

}
      				var universities = splittedx[3].split("+");
      			
      				if(universities.length-1>0){    				
					is_display=true;
					search_result+="<li class='rank-0 category school' style=''><h3><strong>Universities</strong></h3></li>";
 
				for(var j=0;j<universities.length-1 && j<4 ;j++){
						var university = universities[j].split("%");
							
						search_result+="<li class='rank-0 item company first secondary' style=''>";
						search_result+="<img src='http://m.c.lnkd.licdn.com/mpr/mpr/shrink_40_40/p/6/005/00c/195/19da119.png'>";
						search_result+="<h4 class='item-headline'>"+university[0]+"</h4>";
						search_result+="<p class='item-subline'>"+university[0]+" 20101 Students</p></li><br/><hr/>";
				}

				}


      
		search_result+="</ul></div>";
  
  search_result+="<div class='yui-ac-ft' style='display: none;'></div></div>";
  search_result+="<iframe src='javascript:false;' frameborder='0' scrolling='no' tabindex='-1' title='Presentational iframe shim' style='position: absolute; width: 480px; height: 569px;'></iframe>";
	//alert(is_display);
	if(is_display==false)
	{
		
		search_result=null;
	}
	document.getElementById('universal-typeahead-results').innerHTML = search_result;
}else{
document.getElementById('universal-typeahead-results').innerHTML = null;

}



}




$("#main-search-box").keyup(function(){

var search=$("#main-search-box").val();

	var sear_len=search.length;	
	if(sear_len==0){document.getElementById('universal-typeahead-results').innerHTML=null;}
 	if(sear_len!=0){
	$.ajax({
	type: "GET",
	url:  baseurl +"index.php/search/searchCont/quick_searching",
  	data: {    search:search},
	dataType: "json",
               
	success: function(data){

	quick_search(data,baseurl);



		
	},
	error:function(x,e)
	{

	if(x.status==0){
		//alert('You are offline!!\n Please Check Your Network.');
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
	

});}
	show_quick_result(null,baseurl);


});
