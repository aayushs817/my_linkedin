$(document).ready(function(){

	load_cn();
});
function load_cn(){



	$.ajax({
type: "POST",
url:  baseurl +"index.php/newsfeed/newssfeed/show_connects",

data: { },
success: function(data){
	
  // data printed on echoed on the server side.
document.getElementById('lk_by_5').innerHTML ="<div class='head_con'> ............Connections............</div> ";
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
$('#lk_by_5').append(html);

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




}