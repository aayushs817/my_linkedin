//----NOT USING THIS ONEEEEEEEEEEEEEE
$(document).ready(function(){
		$('#advs').hide();
	
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
	

$("#advance_Search").click(function(){
alert('ijajsjasjajsjasjjasjn;)');

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
html+="<div class='bd'>	<a ><img class='entity-img' width='60' height='60' src='"+baseurl+"assets/img/a.png'></a>";
html+="<h3><a class='title' >"+splitted2[0]+"</a><span class='badges'>";
html+="<span></span></span></h3><p class='description'>"+splitted2[1]+" at "+splitted2[2]+" </p>";
html+="<dl class='demographic'><dt>Location</dt><dd>"+splitted2[3]+"</dd><dt>Industry</dt><dd class='separator'>"+splitted2[4]+"</dd></dl>";
html+="<div class='srp-actions blue-button'><div class='primary-action-button'>";
html+="<a class='primary-action label'>Connect</a></div></div></div></li>";	
count=count+1;

}
document.getElementById('results').innerHTML = html;

//}
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
if(data!=null){
	var abc="<div class='yui-ac-content' style=''>";
    abc+="<div class='yui-ac-hd' style='display: none;'></div>";
    abc+="<div class='yui-ac-bd'>";
    abc+="<ul class='hasCategory hasImage'>";


	var splittedx = data.split("^");

		   var connections = splittedx[0].split("+");

		   		if(connections.length-1 >0){
is_display=true;
	abc+="<li class='rank-0 category mynetwork' style=''>";
	abc+="<h3><strong>Connections</strong></h3></li>";
	
				for(var j=0;j<connections.length-1 && j<5 ;j++){
						var friend = connections[j].split("%");
						 
						 abc+="<li class='rank-0 item school first primary' style=''>";
				         abc+= "<img src='http://m.c.lnkd.licdn.com/mpr/mpr/shrink_40_40/p/1/005/009/1ae/09cb26d.png'>"
        				 abc+= "<h4 class='item-headline'>";
          				 abc+=""+friend[0]+"</h4>";
          				 abc+="<p class='item-subline'>"+friend[1]+" at "+friend[2]+"</p></li><br/><hr/>";
				}
}
				// companies 

				var companies = splittedx[1].split("+");
				

				if(companies.length-1>0){
				is_display=true;
				abc+="<li class='rank-0 category company yui-ac-highlight' style=''>";
				abc+="<h3><strong>Companies</strong></h3></li>";
				

				for(var j=0;j<companies.length-1  && j<3 ;j++){
						var company = companies[j].split("%");
							
						abc+="<li class='rank-0 item company first secondary' style=''>";
						abc+="<img src='http://m.c.lnkd.licdn.com/mpr/mpr/shrink_40_40/p/7/000/2ac/368/098996c.png'>";
						abc+="<h4 class='item-headline'>"+company[0]+"</h4>";
						abc+="<p class='item-subline'>"+company[0]+"; 10,001+ employees</p></li><br/><hr/>";
				}

}				
				var industries = splittedx[2].split("+");
				

				if(industries.length-1 >0){				
				is_display=true;
				abc+="<li class='rank-0 category company yui-ac-highlight' style=''>";
				abc+="<h3><strong>Industries</strong></h3></li>";


				for(var j=0;j<industries.length-1 && j<3 ;j++){
						var industry = industries[j].split("%");
							
						abc+="<li class='rank-0 item company first secondary' style=''>";
						abc+="<img src='http://m.c.lnkd.licdn.com/mpr/mpr/shrink_40_40/p/7/000/2ac/368/098996c.png'>";
						abc+="<h4 class='item-headline'>"+industry[0]+"</h4>";
						abc+="<p class='item-subline'>"+industry[0]+"; 200,001+ employees</p></li> <br/><hr/>";
				}

}
      				var universities = splittedx[3].split("+");
      			
      				if(universities.length-1>0){    				
					is_display=true;
					abc+="<li class='rank-0 category school' style=''><h3><strong>Universities</strong></h3></li>";
 
				for(var j=0;j<universities.length-1 && j<4 ;j++){
						var university = universities[j].split("%");
							
						abc+="<li class='rank-0 item company first secondary' style=''>";
						abc+="<img src='http://m.c.lnkd.licdn.com/mpr/mpr/shrink_40_40/p/6/005/00c/195/19da119.png'>";
						abc+="<h4 class='item-headline'>"+university[0]+"</h4>";
						abc+="<p class='item-subline'>"+university[0]+" 20101 Students</p></li><br/><hr/>";
				}

				}


      
		abc+="</ul></div>";
  
  abc+="<div class='yui-ac-ft' style='display: none;'></div></div>";
  abc+="<iframe src='javascript:false;' frameborder='0' scrolling='no' tabindex='-1' title='Presentational iframe shim' style='position: absolute; width: 480px; height: 569px;'></iframe>";
	if(is_display==false)
	{
		abc=null;
	}
	document.getElementById('universal-typeahead-results').innerHTML = abc;

}else{
document.getElementById('universal-typeahead-results').innerHTML = null;

}



}




$("#main-search-box").keyup(function(){
	
var search=$("#main-search-box").val();

	var sear_len=search.length;	
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
