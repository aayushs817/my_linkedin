<!--
<div class="liked_bys" id="lk_by"></div>
<Button id="lk_by_can">X</Button>-->
</div>


<input id="Rsk_random" value="1" type="hidden"/>

  <div id="body" class="" role="main">

    <div class="wrapper hp-nus-wrapper">

      <div id="global-error"></div>

      <div id="main" class="home-member-new grid-f">
       

        <div id="content">









          <div id="feed-nhome" class="section feed feed-nhome feed-redesign">



















            <div class="filter-cont rt-filter-cont">



<div id="slick-sharing-cont" class="post-home is-view share-box rt-filter-cont">
 

<img class="member-photo animated-member-photo" src="assets/img/upload/<?php echo $this->session->userdata('pic_path_2'); ?>" alt="<?php echo $this->session->userdata('f_name_'); echo " ";  echo $this->session->userdata('l_name_'); ?>" width="60" height="60" style="margin-top: 15px;">

  <div id="post-module" class="post-module">
    <div class="post-module-in">

      <form  id="slideshare-upload-form"   class="is-ready is-active is-interactive">
 
        <label  class="kkll"><div id="dadasd" style="z-index:12px;">@</div>
        <input name="mfile" type="file" id="slideshare-file-input" class="file-input">
      </label>
        <iframe name="slideShareIframeTransport" class="slideshare-upload-iframe" height="0" width="0" src="about:blank" ></iframe>


       </form>






<!-- 
inserted -->


      <script id="controlinit-http-12209-881141-9" type="text/javascript+initialized" class="li-control">
 
 /* extlib: _slideshareuploader */
 
      
    
LI.i18n.register( 'slideshare-uploader-presentation', 'Presentation' );
LI.i18n.register( 'slideshare-uploader-document', 'Document' );
LI.i18n.register( 'slideshare-uploader-image', 'Image' );
LI.i18n.register( 'slideshare-uploader-percentage', 'Uploading... {0}%' );
LI.i18n.register( 'slideshare-uploader-beforeunload', 'Your share is still in progress. Are you sure you want to leave without finishing?' );
LI.i18n.register( 'slideshare-uploader-promo-title', 'Add a little something to your update!' );
LI.i18n.register( 'slideshare-uploader-promo-cta', 'Add a file' );
 
 
 LI.Controls.addControl('control-http-12209-881141-9', 'SlideshareUploader', {
 progressPrefix: 'ss275362107',
 domain: 'linkedin.com',
 usePostMessage: true,
 paths: {
 convert: '\/nhome\/slideshare\/convert-upload?fileKey=*&shareOnSS=false',
 status: '\/nhome\/slideshare\/get-convert-status?slideshowId=*',
 slideshow: '\/nhome\/slideshare\/get-slideshow?slideshowId=*&truncationLength=250',
 monitor: '\/nhome\/slideshare\/set-stats?trk=ss-setstat'
 },
 transportName: 'slideShareIframeTransport',
 fileInputId: 'slideshare-file-input',
 enableUnload: true,
 enableImageUpload: true,
 enableTranscriptAsDescription: true,
 enableHealthCheck: false,
 convertTimeThresholds: {
 UploadConvertThresholdOne : 'Seconds_60',
 UploadConvertThresholdTwo : 'Seconds_120'
 },
 promoStatus : 0
 });
 </script>

      <script id="controlinit-http-12209-881141-10" type="text/javascript+initialized" class="li-control">
 
 /* extlib: _ballooncallout */
 
 
 
 LI.Controls.addControl('control-http-12209-881141-10', 'LI.BalloonCallout', {
 events: [ 'mouseover', 'mouseout' ],
 id: 'slideshare-upload-callout',
 orientation: 'bottom',
 type: 'tooltip-callout',
 width: 'auto'
 });
 </script>




<!-- 
inserted -->









      <div class="callout-container" id="slideshare-upload-callout">
        <div class="callout-content">
          <div class="callout-body">Attach a File</div>
        </div>
      </div>


      <dl id="file-supported-dialog">
        <dt>Presentations:</dt>
        <dd>
          pdf, ppt, pps, pptx, ppsx, pot, potx (Powerpoint), odp (OpenOffice)
        </dd>
        <dt>Documents:</dt>
        <dd>pdf, doc, docx, rtf (MSOffice), odt</dd>
        <dt>Images:</dt>
        <dd>png, gif, jpg, jpeg</dd>
        <dt>Maximum file size:</dt>
        <dd>100MB</dd>
      </dl>
      <a href="#" title="Close" id="file-supported-dialog-close">x</a>

      <form  class="doc-sharing-form post"  id="share-form">

        <input type="hidden" value="true" name="ajax" id="share-ajax">

        <input type="hidden" value="0" name="contentImageCount" id="share-img-total">
        <input type="hidden" value="-1" name="contentImageIndex" id="share-img-selected-idx">
        <input type="hidden" name="contentImage" id="share-img-selected-url">
        <input type="hidden" name="contentEntityID" id="share-entity-id">
        <input type="hidden" name="contentUrl" id="share-entity-url">

        <input type="hidden" name="mentions" id="share-entity-mentions">


        <div id="post-module-neu" class="enable-slideshare mentions-enabled transition active active_message">

          <label  class="ghost post-message-label" id="control_gen_8" style="display: none;">Share an update...</label>






<!-- 
 <inseted -->

        <script id="controlinit-http-12209-881141-11" type="text/javascript+initialized" class="li-control">
 
 
 LI.Controls.addControl('control-http-12209-881141-11', 'GhostLabel', {});
 </script>
<!-- 
 <inseted -->








   
          <div id="share-entity-mentions-container" class="mentions-container">
          <!--  <pre class="mentions-highlighter" id="share-entity-highlighter"></pre>
 -->
            <textarea name="postText" id="postText-postModuleForm" rows="2" cols="40" class="post-message mentions-input" placeholder="Share an update..." ></textarea>
          
          </div>

      
<!-- 
          <input type="hidden" name="share-entity-typeahead" id="share-entity-typeahead" class="yui-ac-input" autocomplete="off" value="">
 -->
        

       <!--  <div id="share-typeahead-container" class="mentions-typeahead-container yui-ac">

            <div class="typeahead-results-container mentions-typeahead yui-ac-container">

              <div class="yui-ac-content" style="display: none;">

                <div class="yui-ac-hd" style="display: none;"></div>

                <div class="yui-ac-bd">
                  <ul>
                    <li style="display: none;"></li>
                    <li style="display: none;"></li>
                    <li style="display: none;"></li>
                    <li style="display: none;"></li>
                    <li style="display: none;"></li>
                    <li style="display: none;"></li>
                    <li style="display: none;"></li>
                    <li style="display: none;"></li>
                  </ul>
                </div>
                <div class="yui-ac-ft" style="display: none;"></div>
              </div>
            </div>
          </div>

        -->   

<!--           <input type="text" name="contentUrl" value="" id="contentUrl-postModuleForm" class="post-link" placeholder="http://">
 -->

          <a class="post-link-close" href="#"></a>

          <div class="share-mode" id="share-mode">
            <div class="share-loading"></div>
            <div class="share-preview"></div>
            <a class="cancel-file-upload" href="#" role="button"></a>

            <div class="share-edit">
              <ul id="share-edit-list" class="form">
                <li id="share-edit-title-wrapper">

                  <label  class="ghost" id="share-edit-title-label" style="display: none;">Add a title</label>


                  <input type="text" name="contentTitle" value="" id="share-edit-title" class="text" maxlength="70" placeholder="Add a title"></li>
                <li id="share-edit-meta"></li>
                <li id="share-edit-summary-wrapper">

                  <label  class="ghost" id="share-edit-summary-label" style="display: none;">Add a description</label>

               
                  <textarea name="contentSummary" id="share-edit-summary" class="text" maxlength="250" placeholder="Add a description"></textarea>
                </li>
                <li id="share-include-photo-wrapper"></li>
              </ul>
            </div>
          </div>


          
          <div class="post-actions">
           
            <div class="post-actions-row">
              <div class="settings " id="share-settings">
                <p>Share with:</p>
                <select  id="doc-sharing-visibility">
               <option value="EVERYONE_AND_TWITTER">Public + Twitter</option>
               <option value="EVERYONE" selected="">Public</option>
               <option value="CONNECTIONS">Connections</option>
               </select>


                <span class="arrows">Share with:</span>
              </div>
              <div class="submit">
                <input  name="" type="button" value="Share" class="btn-primary" id="share-submit"></div>
            </div>
          </div>
          <div class="twitter"></div>
        </div>

<!-- 
arrows images in css(4) -->
       
        <input type="hidden" name="submitPost" value="" id="submitPost-postModuleForm">
        <input type="hidden" name="tetherAccountID" value="" id="tetherAccountID-twitterAccounts-postModuleForm">
        <input type="hidden" name="tweetThisOn" value="false" id="tweetThisOn-postModuleForm">
        <input type="hidden" name="postToMFeedDefaultPublic" value="true" id="postToMFeedDefaultPublic-postModuleForm">
        <input type="hidden" name="csrfToken" value="ajax:4628867085291123303" id="csrfToken-postModuleForm">
        <input type="hidden" name="sourceAlias" value="0_0aUs533-gpztrJxp65YSDh" id="sourceAlias-postModuleForm"></form>

    </div>
  </div>
  
  <div class="clear"></div>


</div>









            </div>

<div class="liked_bys" id="lk_by"style="z-index:12;margin-left:-90px;margin-top:55px;display:none;"></div>
<Button id="lk_by_can" style="z-index:14;margin-left:-95px;margin-top:55px;display:none;">X</Button>
<!--.liked_bys{
clear:both;
height: 200px;
width:400px; 
padding:20px;
background-color:white;
position:relative;

-webkit-border-radius: 12px;
-moz-border-radius: 7px; 
border-radius: 7px;
overflow: auto;

z-index:14px;
}

#lk_by_can{
z-index:14px;
width:10px;
height:22px;
position:relative;
font-weight: bolder;

background-color:white;
border:none; 

}-->


