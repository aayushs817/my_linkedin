



function check_new_request(){



$.ajax({
type: "POST",
url:  baseurl +"index.php/invitations/invite/check_req",

data_8: {},
success: function(data_8){
	
  // data printed on echoed on the server side.

var splited = data_8.split("/");

var pre_count=$("#noti_inbo_id").text();

if(splited[0]>pre_count)
{

$("#noti_inbo_id").show();
document.getElementById('noti_inbo_id').innerHTML=splited[0];
}
else
{
	if(splited[0]<pre_count)
	{

		document.getElementById('noti_inbo_id').innerHTML=splited[0];
		$("#noti_inbo_id").hide();


	}

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
function doPoll(){
    $.post('#', function() {
        check_new_request();
        setTimeout(doPoll,5000);
    });
}

 

 

$(document).ready(function(){
	$('#in_drop').hide();
	$("#noti_inbo_id").hide();
 $("#lk_by").hide();
$("#lk_by_can").hide();
$('#Change_cancel_b_2').hide();
$('#mfile').hide();
$('#mfile_2').hide();
$("#Change_pic_b_1").hide();

	doPoll();






});