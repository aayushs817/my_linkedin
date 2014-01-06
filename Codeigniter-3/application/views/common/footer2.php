</body>
<script >
			$(document).ready(

			function()
			{
				if ( !document.getElementById('clientSideIsPostBack') )
				{
				$(e1).hide();
				$(e2).hide();
				$(e3).hide();
				$(e4).hide();
				
			}
					
				$("#mbtn").click(function()
				{


					var lone= document.getElementById("box_one").value;
					var ltwo= document.getElementById("box_two").value;
					var lthree= document.getElementById("box_three").value;
					var lfour= document.getElementById("box_four").value;
					var x=false;
					
					if(lone.length==0)
					{

						$(e1).show();
						$(mainerror).show();
						x=true;
						

					}
					if(ltwo.length==0)
					{

						$(e2).show();
						$(mainerror).show();
						x=true;

					}
					if(lthree.length==0)
					{

						$(e3).show();
						$(mainerror).show();
						x=true;
						

					}
					if(lfour.length==0)
					{

						$(e4).show();
						$(mainerror).show();
						x=true;
						

					}
					if(lfour.length<6)
					{
						if(lfour.length!=0)
						$(e5).show();
						$(mainerror).show();
						x=true;
						

					}

					var emailvalidation=new RegExp(/^\b[A-Z0-9._%-]+@[A-Z0-9.-]+\.[A-Z]{2,4}\b$/i);

							if(!emailvalidation.test(lthree))
								{
										if(lthree.length!=0)
										{
											$(e6).show();
											$(mainerror).show()
											x=true;
											
											
										}
								}	
					
				
				if(x)
				{
					return false;
				}
				else
				{
					return true;
				}

				
				});

			});
		

</script>
</html>