

<div class="sidebar_cover_invitations">
<div id="sidebar" class="sidebar_">
  

<div id="inbox-nav">
  <ul>
      <li class="nav-search ">
        
      
        <form action="/inbox/messages/search" method="POST" name="inboxSearchForm" novalidate="novalidate" >
       
       	<input type="text" id="Fname_txt" class="s_inbox_txt" name="search_inbox_txt" placeholder="Search Inbox" />
       	<img class="srch_ico" src="assets/img/srch_ico.png"/>
    
            </form>
            <br/>

      
    
      </li>
    <li class="nav-compose  notTop">
        <button  >Compose Message</button>
    </li>
    <li class="nav-inbox active"><a href="/inbox/messages/received">Inbox</a></li>
    <li class="nav-sent "><a href="/inbox/messages/sent">Sent</a></li>
    <li class="nav-archived "><a href="/inbox/messages/archive">Archived</a></li>
    <li class="nav-trash "><a href="/inbox/messages/trash">Trash</a></li>
  </ul>
</div>


  
  



    
  
</div>




<div class="cover-invitations">


 

<ol class="inbox-list ">

      
      
      <?php

 
                 if( $results != NULL )
              { 

                foreach ($results as $row)
                {
            ?>
      
              
      <!--list of users starts here -->

  

  <li data-giclass="inbox-item invitation-item">
  <span>  <!--<input class="chk" type="checkbox" name="mboxItemGIDs" value="">-->
    
        <?php if($row->is_upload==0)
                {

        ?>
            <img class="invite_img" src="assets/img/upload/default_2.jpg" class="photo" alt="" height="40" width="40">

            <?php }else{ ?>

            <img class="invite_img" src="assets/img/upload/<?php echo $row->From; ?>.jpg" class="photo" alt="" height="40" width="40">


            <?php } ?>
      </span>    
      

    <div class="item-content">
      <div class="date"><?php 

          $timestamp = strtotime($row->time);
          $date = date('d-m-Y', $timestamp);


      echo $date;?></div>
      <div class="invite_info">
          <span class="participants">
            
              
      
      
          <strong> 
                  
                      <a href="#">
                       <?php echo $row->FirstName;
                            echo " ";
                            echo $row->LastName;

                        ?>
                      </a>
                    
                
              </strong>
            
            
          </span>

          <span class="headline">
          <?php if($row->Job_title!="")
                 {

                    $occ=$row->Job_title;


                 }
                 else
                  if($row->recent_job_title!="")
                  {

                      $occ=$row->recent_job_title;

                  }
                  else
                    if($row->institution!="")
                    {

                        $occ=$row->institution;

                    }
                    echo $occ;
          ?>


            
          </span>


      
      
        
          
            <p class="meta">
              
                
                
                  
                  <span class="note">
                    

 <?php 

 echo $row->msg;
 
                        ?>

                  </span>
                  
                
              
            </p>
          
        
      

      <div class="inbox-actions">
        
          
            
              
                  
                  
                    <div class="primary-actions">
                     
                        
                          
      
      
      <form action="<?php echo base_url();?>index.php/invitations/invite/accept_" method="post" name="accep_t_">
                  
        
      
        
                 <button type="submit" value="<?php echo $row->From?>" name="accp" class="btn btn-success">Accept</button>
      
  
      </form>
            
      <form action="<?php echo base_url();?>index.php/invitations/invite/rep_" method="post" name="re_p_">              
                          <button  value="<?php echo $row->From?>" name="rep" class="btn btn-info"> Reply (don&rsquo;t accept yet)</button>
                          
      
      </form>
      
      
    
                    </div>
           
    
                
            
       
      
       <form action="<?php echo base_url();?>index.php/invitations/invite/ignore_" method="post" name="ig_n_">              
   
      
        
           <button type="submit" class="btn btn-default" name="ign" value="<?php echo $row->From?>"type="submit">Ignore</button>
         
     </form>
          
        
     <form action="<?php echo base_url();?>index.php/invitations/invite/rps_" method="post" name="rp_s_">              
   
            <button class="btn btn-default" value="<?php echo $row->From?>" name="rps" type="submit">Report Spam</button>
               
      </form>
          
     
          
        
      </div>
      	</div>
      
    </div>
  </li>

<!--list of users ends here -->
        <?php }} ?>              
      </ol>




      <div class="show-more-show-more-invitations">
                          <a href="#">
                      Show more invitations</a>
                    </div>
    


    </div><!-- cover_invitations ends-->


     </div>
     
</body>
</html>