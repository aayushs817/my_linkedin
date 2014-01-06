
<?php 

  
  
    if($this->session->userdata('email_')==true) 
        {
         

        }
        else
        { 
     
           redirect('http://localhost/Codeigniter-3/index.php/common/starter');
        }

     



?>
<!DOCTYPE html>
<html class="os-win" lang="en">
  <!--<![endif]-->
<head>
<base href="<?php echo base_url(); ?>"/>

<?php echo link_css('advance_search/advance_search'); ?>
<!--<?php echo link_css('news_feed/news_feedcss'); ?>-->




<!--<?php echo link_css('news_feed/css'); ?>-->




<?php echo link_css('news_feed/css(1)'); ?>


<?php echo link_css('news_feed/css(2)'); ?>

<?php echo link_css('news_feed/css(3)'); ?>

<?php echo link_css('news_feed/css(4)'); ?>

<?php echo link_css('news_feed/css(5)'); ?>

<?php echo link_css('news_feed/css(6)'); ?>

<?php echo link_css('news_feed/css(7)'); ?>

<?php echo link_css('news_feed/css(8)'); ?>
<style>

 .popup_connect_div{

      
      
      position:absolute;
       
      background-color:white;
      height:1200px;
      width:1350px;
      
z-index: 12px;
  }

.inner_popup_connect_div{
background-image:url("assets/css/how_u_know.png");

  position:relative;
  margin-left: auto;
  margin-right: auto;
  width:730px;
  height:600px;
  margin-top: 2%;
  border-width: 3px;
  
z-index: 12px;
  border-radius: 15px;
}

.sub_popup_connect{


  position:relative;
  left:10%;
  top:13%;
  background-color: white;
  width:400px;  
  height:200px;
  z-index: 12px;

}
.text_msg_{

position:relative;
top:45%;
width:600px;
height:145px;
z-index: 12px;
  background-color: white;

}
.c_or_c{

  position: relative;
  width:250px;
  font-size: 20px;  
  top:66%;
  left:45%;

}
#in_drop{

  position:absolute;
  width:100px;
  border:groove;
  border-color:black;

}
.noti_inbo{


  position: absolute;
  left:82%;
  border-color:#FF0000;
  border:ridge;
  border-radius:8px; 
  border-width:2px;
  font-weight:bolder;
  top:-1px;
  font-size:15px;
  font-family:cursive;
  color:#3399FF;

}
</style>

   


<script src="assets/js/jquery.liveurl.js"></script>

    <?php //echo link_css('bootstrap'); ?>
    <?php //echo link_css('style') ?>
     <?php //echo link_css('bootstrap-responsive') ?>
     
  <link href="favicon.ico" rel="icon"></link>
  <link rel="stylesheet" type="text/css" href="assets/css/invi.css">




<title>Search | LinkedIn</title>
<!--<link href="advance.css" type="text/css" rel="stylesheet"></link>-->

 <base href="<?php echo base_url(); ?>" />
<script src="assets/js/jquery.form.js"></script>
<script src="assets/js/jquery.js"></script>
<?php echo link_css('advance_search/advance_search'); ?>
<link rel="stylesheet" href="assets/css/liveurl.css" />
     <script src="assets/css/advance_search/jquery.js"></script>


</head>

<body id="pagekey-voltron_federated_search_internal_jsp" class="en member v2 voltron-page chrome-v5-retract-nav-enabled chrome-v5 chrome-v5-responsive background-v4 sticky-bg js ">



<div class="typeahead-results-container using-typeahead2 yui-ac-container" id="universal-typeahead-results" style="left: 391px; top: 36px;">
</div>




<iframe style="position: absolute; visibility: visible; background-color: transparent; border-width: 0px; width: 2em; height: 2em; left: 0px; top: -27px;" title="Text Resize Monitor" id="_yuiResizeMonitor"></iframe>
<div style="visibility: visible; z-index: 10;" class="yui-module yui-overlay" id="callout-overlay"></div>

<input id="inSlowConfig" value="false" type="hidden">


<div id="a11y-menu" class="a11y-skip-nav-container">
<div id="control_gen_1" class="a11y-skip-nav a11y-hidden">
  <a href="#a11y-content" id="a11y-skip-nav-link">Skip to main content</a>
</div>


</div>






<div id="header" class="global-header responsive-header nav-v5-2-header responsive-1" role="banner">





<div id="top-header" >
  <div class="wrapper">
    <div class="header-section first-child">
      <h2 class="logo-container" tabindex="0">
        <a href="<?php echo base_url();?>index.php/common/starter/load_home" class="logo" id="in-logo">LinkedIn</a>
      </h2>

      <div id="global-search" class="global-search voltron voltron-vertical-selector">

        <fieldset>
          <legend>Find People, Jobs, Companies, and More</legend>

          <div id="control_gen_2" class="search-scope global-nav-styled-dropdown">
            <label >Search for:</label>

            <span class="label">
              <span class="styled-dropdown-select-all">All</span>
            </span>
            <select name="type" id="main-search-category" class="search-category">

              <option class="all"  title="Search for people, jobs, companies, and more..." value="all">All</option>

              <option class="people" title="Keyword, name, company or title" value="people">People</option>

              <option class="jobs" title="Keyword, company or job title" value="jobs">Jobs</option>

              <option class="companies" value="companies">Companies</option>

              <option class="groups"title="Keyword" value="groups">Groups</option>

              <option class="edu"  title="Keyword" value="edu">Universities</option>

              <option class="inbox"  title="Keyword" value="inbox">Inbox</option>

            </select>
            <ul class="search-selector"></ul>
          </div>

        


          <div class="search-box-container" id="search-box-container">
            <span id="search-autocomplete-container" title="Tip: You can also search by keyword, company, school..." class="/typeahead">

              <label style="display: none;" id="control_gen_3"  class="ghost">Search for people, jobs, companies, and more...</label>

             

              <input placeholder="Search for people, jobs, companies, and more..." id="main-search-box" class="search-term" type="text">

              <span id="search-typeahead-container">




              </span>

            </span>

            <input  type="hidden">
            <input  type="hidden">

            <input  type="hidden"></div>

          <button  value="Search" class="search-button">
            <span>Search</span>
          </button>

   
        </fieldset>

        <div class="advanced-search-outer">
          <div class="advanced-search-inner">
            <a href="<?php echo base_url();?>index.php/common/starter/load_advance_search" class="advanced-search" id="advanced-search">Advanced</a>
          </div>
        </div>

      </div>




    </div>

    <div class="header-section last-child">

      <ul id="control_gen_5" class="nav utilities" role="navigation">

        <li  class="nav-item activity-tab" >
          <div class="hhh">
            <div class="noti_inbo" id="noti_inbo_id">0</div>
          <a    id="inboxx_b" href="<?php echo base_url();?>index.php/invitations/invite/get_requests" onclick=""class="activity-toggle inbox-alert">Inbox</a>
         </div>
          <div id="in_drop">

              <ul>
                <li>dsdas
                </li>
                <li>dsaahdjkasjk</li>
              </ul>
          </div>
          
        </li>

        <li class="nav-item activity-tab" >
          <a href="#" class="activity-toggle notifications-alert">Notification</a>

          <div class="activity-container" id="notifications">
            <div class="activity-drop activity-drop-loading">
              <div class="activity-drop-body"></div>
            </div>
          </div>

        </li>

        <li class="nav-item activity-tab" >

          <a href="#" class="activity-toggle add-connections-btn">Add Connections</a>
          <div class="add-connections simple-responsive" id="addconnections">
            <div class="add-connections-options">
              <div class="add-connections-options-body simple-responsive">
                <section class="invite-securely-via-email-lix">
                  <div class="invite-securely-via-email-lix-div-fallback ">
                    <div class="activity-drop-header">
                      <h3>
                        Add Connections
                        <span class="sub-nav-header-arrow" role="presentation"></span>
                      </h3>
                    </div>

                    <h4>Invite your contacts</h4>
                    <p>
                      Quickly find people you may know by searching your email contacts:
                    </p>
                    <a href="#" class="modal-overlay-link"></a>
                    <ul class="providers">
                      <li id="gmail-li" class="gmail">
                        <a href="#">Gmail</a>
                      </li>
                      <li class="yahoo">
                        <a href="#">AOL</a>
                      </li>
                      <li class="hotmail">
                        <a href="#">Hotmail</a>
                      </li>
                      <li class="other">
                        <a href="#">Other</a>
                      </li>
                    </ul>
                  </div>
                </section>
              </div>
            </div>
          </div>

        </li>

        <li class="nav-item account-settings-tab">
          <a href="#" class="account-toggle">
            <img src="assets/img/upload/<?php echo $this->session->userdata('email_'); ?>_2.jpg" alt="<?php echo $this->session->userdata('f_name_'); ?>" class="nav-profile-photo" height="20" width="20"></a>

          <div class="account-sub-nav" id="account-sub-nav">
            <div class="account-sub-nav-options">
              <div class="account-sub-nav-header">
                <h3>
                  Account &amp; Settings
                  <span class="sub-nav-header-arrow" role="presentation"></span>
                </h3>
              </div>
              <div class="account-sub-nav-body">
                <ul class="account-settings">

                  <li class="self">
                    <div class="account-settings-link">
                      <span class="act-set-row">
                        <span class="act-set-icon">
                          <a href="#">
                            <span class="act-set-icon-image" role="presentation">
                              <img src="assets/img/upload/<?php echo $this->session->userdata('email_'); ?>_3.jpg" alt="<?php echo $this->session->userdata('f_name_'); ?>" class="profile-photo" height="20" width="20"></span>
                          </a>
                        </span>
                        <span class="act-set-name">
                          <a href="#" class="act-set-name-split-link"><?php echo $this->session->userdata('f_name_'); echo " ";  echo $this->session->userdata('l_name_'); ?></a>
                        </span>

                        <span class="act-set-action">
                          <a href="<?php echo base_url();?>index.php/common/starter/logout_" class="account-submenu-split-link">Sign Out</a>
                        </span>
                      </span>
                    </div>
                  </li>

                  <li class="account-type">

                    <a href="#" class="account-settings-link" target="_self">
                      <span class="act-set-row">
                        <span class="act-set-icon">
                          <span class="act-set-icon-image" role="presentation"></span>
                        </span>
                        <span class="act-set-name">Account: Basic</span>
                        <span class="act-set-action">Upgrade</span>
                      </span>
                    </a>

                  </li>

                  <li class="job-posting">
                    <a href="#" class="account-settings-link">
                      <span class="act-set-row">
                        <span class="act-set-icon">
                          <span class="act-set-icon-image" role="presentation"></span>
                        </span>
                        <span class="act-set-name">Job Posting</span>
                        <span class="act-set-action">Manage</span>
                      </span>
                    </a>
                  </li>

                  <li class="language-settings">
                    <a href="#" class="account-settings-link">
                      <span class="act-set-row">
                        <span class="act-set-icon">
                          <span class="act-set-icon-image" role="presentation"></span>
                        </span>
                        <span class="act-set-name">Language</span>
                        <span class="act-set-action">Change</span>
                      </span>
                    </a>
                  </li>

                  <li class="privacy-settings">
                    <a href="#" class="account-settings-link">
                      <span class="act-set-row">
                        <span class="act-set-icon">
                          <span class="act-set-icon-image" role="presentation"></span>
                        </span>
                        <span class="act-set-name">Privacy &amp; Settings</span>
                        <span class="act-set-action">Review</span>
                      </span>
                    </a>
                  </li>

                  <li class="quick-help">

                    <span class="qh-icon"></span>
                    <span id="control_gen_4" class="account-settings-link">

                      <a href="#"  rel="nofollow" class="act-set-name">Help Center Tours</a>

                      <a href="#"  rel="nofollow" class="act-set-action">Get Help</a>

                      <div id="qh-tourlist-loader" class="loading hide"></div>
                      <ul class="qh-page-tours">
                        <li>
                          <a class="qh-tour-link" href="#"  >Search welcome tour</a>
                        </li>
                      </ul>
                    </span>


                  </li>

                </ul>
              </div>
            </div>
          </div>
        </li>

      </ul>

    </div>
  </div>
</div>

















<div style="position: fixed; width: 1349px; z-index: 1; top: -29px;" class="responsive-nav" id="responsive-nav-scrollable">
  <div class="wrapper">

    <ul id="control_gen_6" class="nav main-nav" role="navigation">

      <li class="nav-item">
        <a href="<?php echo base_url();?>index.php/common/starter/news_fed" class="nav-link" class="nav-link">Home</a>
      </li>

      <li class="nav-item">
        <a href="<?php echo base_url();?>index.php/common/starter/load_edit_profile" class="nav-link">Profile</a>
        <ul class="sub-nav" id="profile-sub-nav">

          <li>
            <a href="<?php echo base_url();?>index.php/common/starter/load_edit_profile">Edit Profile</a>
          </li>

          <li>
            <a href="/wvmx/profile?trk=nav_responsive_sub_nav_wvmp">Who's Viewed Your Profile</a>
          </li>

        </ul>
      </li>

      <li class="nav-item">
        <a href="/connections?trk=nav_responsive_tab_network" class="nav-link">Network</a>
        <ul class="sub-nav">
          <li>
            <a href="<?php echo base_url();?>index.php/common/starter/show_contacts">Contacts</a>
          </li>
          <li>
            <a href="https://www.linkedin.com/fetch/importAndInviteEntry?trk=nav_responsive_sub_nav_add_connections">Add Connections</a>
          </li>
          <li>
            <a href="/college/alumni?trk=nav_responsive_sub_nav_find_alumni">Find Alumni</a>
          </li>
        </ul>
      </li>

      <li class="nav-item">
        <a href="/jobs?displayHome=&amp;trk=nav_responsive_sub_nav_jobs" class="nav-link">Jobs</a>

      </li>

      <li class="nav-item">
        <button id="nav-link-interests" class="nav-link no-link">Interests</button>
        <ul class="sub-nav" id="interests-sub-nav">
          <li>

            <a href="/companies?dspFllwed=&amp;trk=nav_responsive_sub_nav_companies">Companies</a>

          </li>

          <li>
            <a href="/myGroups?trk=nav_responsive_sub_nav_groups">Groups</a>
          </li>

          <li>

            <a href="/today/post/whoToFollow?strategy=recentPosts&amp;trk=nav_responsive_sub_nav_influencers">Influencers</a>

          </li>

          <li>
            <a href="/edu/?trk=nav_responsive_sub_nav_edu">Education</a>
          </li>

        </ul>
      </li>
    </ul>

    <ul id="control_gen_7" class="nav premium-nav" role="navigation">
      <li class="nav-item">
        <button class="nav-link no-link">Business Services</button>
        <ul class="sub-nav" id="business-sub-nav">
          <li>
            <a href="/jobs/post?editAttributes=&amp;trk=nav_responsive_sub_nav_post_job">Post a Job</a>
          </li>

          <li>
            <a href="/redir/redirect?url=http%3A%2F%2Fbusiness%2Elinkedin%2Ecom%2Ftalent-solutions%2F%3Fsrc%3Dli-nav&amp;urlhash=33Gb" target="_blank">Talent Solutions</a>
          </li>

          <li>

            <a href="https://www.linkedin.com/ads/start?utm_source=li&amp;utm_medium=el&amp;utm_campaign=hb_tab_ads&amp;src=en-all-el-li-hb_tab_ads&amp;trk=nav_responsive_sub_nav_advertise" target="_blank">Advertise</a>
          </li>

        </ul>
      </li>

      <li class="nav-item">

        <a href="/mnyfe/subscriptionv2?displayProducts=&amp;trk=nav_responsive_sub_nav_upgrade" class="nav-link">Upgrade</a>

      </li>
    </ul>


  </div>
</div>












<script type="text/javascript">

(function () {
  // config
  // more steps == smoother animation, more processing
  // more time = slower animation, can be smoother
  // zindex for slide = less than nav it slides under
  var UP                = 'up',
      DOWN              = 'down',
      PX                = 'px',
      RETRACT_NAV       = 'chrome-v5-retract-nav-enabled',
      maxSteps          = 10,
      duration          = 200,
      slideZIndex       = 1,
      navbar            = document.getElementById('responsive-nav-scrollable'),
      header            = document.getElementById('header'),
      topHeader         = document.getElementById('top-header'),
      topHeaderHeight   = topHeader.offsetHeight,
      originalHeight    = navbar.offsetHeight,
      originalZ         = navbar.style.zIndex,
      direction         = null,
      doAnimate         = false,
      visibleNavOnTop   = true,
      lastY             = window.pageYOffset,
      interval          = Math.floor(duration / maxSteps),
      animating         = false,
      preventOpenTillUp = false,
      hasOwnProperty    = Object.prototype.hasOwnProperty,
      noResponsiveNav   = false,      // HUED-841
      distance          = 0,          // HUED-797
      threshold         = 60,         // HUED-797
      mouseMoveCount    = 0,
      makeLiHomepage    = document.getElementById('make-linkedin-homepage'),        // HUED-1368
      homepageURL       = "http:\/\/www.linkedin.com\/",  // HUED-1368
      defaults, getOffset, originalOffset, addEvent, removeEvent, hasClass, addClass, removeClass,
        fireEvent, contains, mouseEnterLeave, animate, mouseOpen, mouseClose, mouseOpenTimer,
        mouseCloseTimer, staticPositionNav, fixedPositionNav;

  // support IE7, 8
  lastY = lastY || document.body.scrollTop;
  lastY = lastY || Math.max(document.documentElement.scrollTop, lastY);

  // pretty much does the same thing that underscore's defaults method does: the
  // defaults object contains default values for properties. If the properties
  // aren't defined in the destination object, they are copied to it. If they are
  // defined, the value in the destination object is kept.
  defaults = function (dest, defs) {
    for (var prop in defs) {
      if (!hasOwnProperty.call(dest, prop)) {
        dest[prop] = defs[prop];
      }
    }
    return dest;
  };

  // measuring functions
  getOffset = function (el) {
    var _x = 0,
        _y = 0;
    while( el && !isNaN( el.offsetLeft ) && !isNaN( el.offsetTop ) ) {
      _x += el.offsetLeft - el.scrollLeft;
      _y += el.offsetTop - el.scrollTop;
      el = el.offsetParent;
    }
    return { top: _y, left: _x };
  };

  originalOffset = getOffset(navbar);

  // local addEvent listener;
  addEvent = (function () {
    if (window.addEventListener) {
      return function (el, ev, fn) {
        el.addEventListener(ev, fn, false);
      };
    }
    else if (window.attachEvent) {
      return function (el, ev, fn) {
        el.attachEvent('on' + ev, fn);
      };
    }
    else {
      return function (el, ev, fn) {
        var oldFn = el['on' + ev] || function () {};
        el['on' + ev] = function() {
          oldFn();
          fn();
        };
      };
    }
  })();

  // local removeEvent listener
  removeEvent = (function () {
    if (window.removeEventListener) {
      return function (el, ev, fn) {
        el.removeEventListener(ev, fn, false);
      }
    } else if (window.detachEvent) {
      return function (el, ev, fn) {
        el.detachEvent('on' + ev, fn);
      }
    } else {
      return function (el, ev, fn) {
        el['on' + ev] = null;
      }
    }
  })();

  // fires an namespaced event on the
  // document if LI.Events.fire is available
  fireEvent = function (type, opts) {
    var triggerFn,
      eventName = 'globalnav:' + type;

    opts = opts || {};

    if (LI.Events) {
      // For compatibility with the new event bus which lacks a fire method.
      triggerFn = LI.Events.trigger || LI.Events.fire;
      if (typeof triggerFn === 'function') {
        triggerFn.call(LI.Events, eventName, defaults(opts, {
          name: eventName
        }));
      }
    }
  };

  // Provides mouseenter and mouseleave functionality
  // through mouseover and mouseout. This is important
  // because we only want the callback to fire once so
  // we can properly relay the state of the nav.
  mouseEnterLeave = function (element, type, callback) {
    var preCallback,
        mouseEnter = type === 'mouseenter',
        type = mouseEnter ? 'mouseover' : 'mouseout',
        // property is different for ie
        ie = mouseEnter ? 'fromElement' : 'toElement';

    preCallback = function (event) {
      event = event || window.event;

      var target = event.target || event.srcElement,
        related = event.relatedTarget || event[ie];

      // only fire the callback if the target is not a child element
      if ((element === target || contains(element, target)) && !contains(element, related)) {
        callback();
      }
    };

    addEvent(element, type, preCallback);

    return preCallback;
  }

  // mozilla fix for contains functionality
  // http://www.quirksmode.org/blog/archives/2006/01/contains_for_mo.html
  contains = function (container, element) {
    return container.contains ? container.contains(element) : !!(container.compareDocumentPosition(element) & 16);
  }

  //local hasClass a la YUI3
  hasClass = function (el, test) {
    var rHasClass = new RegExp('(?:^|\\s+)'+test+'(?:\\s+|$)');
    if (el && el.nodeType === 1 && rHasClass.test(el.className)) {
      return true;
    }
    return false;
  };
  //local addClass a la YUI3
  addClass = function (el, newClass) {
    if (el && el.nodeType === 1 && typeof newClass === 'string' && !hasClass(el, newClass)) {
      el.className = el.className + ' ' + newClass;
    }
  };
  //local removeClass a la YUI3
  removeClass = function (el, killClass) {
    if (el && el.nodeType === 1 && typeof killClass === 'string' && hasClass(el, killClass)) {
      el.className = el.className.replace(new RegExp('(?:^|\\s+)' + killClass + '(?:\\s+|$)'), ' ');
    }
  };

  // simple animation call
  animate = function (opts) {
    var start = new Date(),
        id;

    if (opts.onStart) {
      opts.onStart();
    }

    id = setInterval(function () {
      var timePassed = new Date() - start,
          progress = timePassed / opts.duration,
          delta;

      if (progress > 1) {
        progress = 1;
      }

      delta = opts.delta(progress);
      opts.step(delta);

      if (progress === 1) {
        clearInterval(id);
        if (opts.onComplete) {
          opts.onComplete();
        }
      }
    }, opts.delay || 10);

    return id;
  };

  // position static nav
  staticPositionNav = function() {
    navbar.style.position = 'static';
    navbar.style.zIndex = originalZ;
    navbar.style.width = 'auto';
    navbar.style.top = null;
  };

  // position fixed nav
  fixedPositionNav = function() {
    navbar.style.position = 'fixed';
    navbar.style.zIndex = slideZIndex;
    navbar.style.width = navbar.parentNode.clientWidth + PX;
  };

  // JTRACY | HUED-1368
  //
  // Q: What is this doing in here? This ain't responsive nav related!
  //
  // A: Duly noted. This functionality is in here for one reason and
  //    one reason only - to not collide with the work being done for
  //    Remote Nav. Both will work just fine with this tucked away in
  //    here.
  if (makeLiHomepage) {
    addEvent(makeLiHomepage, "click", function (evt) {
      var e = evt || window.event;
      // IE only, for now
      if (window.ActiveXObject && homepageURL) {
        // Show prompt that allows user to decide whether or not to set
        // LinkedIn as their homepage.
        document.body.style.behavior = 'url(#default#homepage)';
        document.body.setHomePage(homepageURL);
      }

      if (e.preventDefault) {
        e.preventDefault();
      } else {
        e.returnValue = false;
      }
      return false;
    });
  }

  // JTRACY | HUED-841
  //
  // Q: Why are these android and ios checks in here?
  //
  // A: The chrome v5 nav currently does not play nicely on mobile and
  //    tablet devices, such as android and ipad, when the user pinches
  //    to zoom in.
  //
  //    In order to provide some immediate user experience relief we are
  //    disabling the responsive sub-nav and not fixing the global nav at
  //    the top of the screen.
  //
  //    Returning here skips all of the responsive nav initialization routines.
  noResponsiveNav = hasClass(document.documentElement, "os-android") || hasClass(document.documentElement, "os-ios");
  if (noResponsiveNav) {
    return;
  }

  // on window scroll, determine if we need to start an
  // animation
  addEvent(window, 'scroll', function () {
    var currentY = window.pageYOffset;
    // support IE7, 8
    currentY = currentY || document.body.scrollTop;
    currentY = currentY || Math.max(document.documentElement.scrollTop, currentY);

    if (0 > lastY) {
      lastY = 0;
    }

    if (currentY > lastY && direction !== DOWN) {
      doAnimate = true;
      direction = DOWN;
      // reset distance measurement for next upward scroll event
      distance = 0;
      if (preventOpenTillUp) {
        doAnimate = false;
      }
    }
    else if (lastY > currentY && direction !== UP) {
      /*
       * JTRACY | HUED-797 | Delay trigger of responsive nav on upward scroll
       * ----------------------------------------------------------------------
       * The Jira states that "We should ideally not trigger the expansion of the
       * secondary nav bar on upward scroll until the user has scrolled at least
       * the height of the secondary nav bar (29 px)."
       *
       * In order to do that, we need to delay the animation until the user has
       * scrolled upward a certain distance. The variable 'distance' holds the
       * number of pixels scrolled since the user initiated an upward scroll.
       * Once that distance exceeds the defined threshold (or we reach the top
       * of the screen), then the sub navigation is animated down. 'distance' is
       * reset when this occurs or when the user scrolls back down.
       *
       * The threshold is set to 60px, or about twice the height of the subnav.
       * Using a lower number makes it still feel like it triggers too soon.
       */
      distance += (lastY - currentY);
      if (distance > threshold || currentY == 0) {
        doAnimate = true;
        direction = UP;
        preventOpenTillUp = false;
        // reset distance measurement for next upward scroll event
        distance = 0;
      }
    }
    else {
      // reset distance measurement for next upward scroll event
      distance = 0;
    }

    lastY = currentY;

    if (!doAnimate) {
      return;
    }

    doAnimate = false;
    if (animating) {
      clearInterval(animating);
    }

    animating = animate({
      delay: interval,
      duration: duration,
      delta: function (progress) {
        return progress;
      },
      onStart: function() {
        fixedPositionNav();
        fireEvent(((direction === UP) ? 'show' : 'hide') + 'Start');
      },
      step: function (delta) {
        var heightDelta = (originalHeight * delta),
          newNavHeight,
          eventName;

        if (direction === DOWN) {
          newNavHeight = originalHeight - heightDelta;
          navbar.style.top = (originalOffset.top - heightDelta) + PX;
          visibleNavOnTop = false;
          eventName = 'hide:animation:step';
        } else {
          newNavHeight = heightDelta;
          navbar.style.top = ((originalOffset.top - originalHeight) + heightDelta) + PX;
          eventName ='show:animation:step';
        }

        fireEvent(eventName, {
          // Current progress in tweening. [0, 1].
          delta: delta,
          // Pass the current height of the entire header to the callback.
          headerHeight: newNavHeight + topHeaderHeight
        });
      },
      onComplete: function () {
        if (direction == UP) {
          staticPositionNav();
          fireEvent('showStop');
          visibleNavOnTop = true;
        } else {
          fireEvent('hideStop');
        }
      }
    });
  });

  mouseOpen = function () {
    if (!visibleNavOnTop) {
      staticPositionNav();
      fireEvent('show');
    }
  };
  mouseClose = function () {
    if (!visibleNavOnTop) {
      fixedPositionNav();
      fireEvent('hide');
      navbar.style.top = originalOffset.top - originalHeight + PX;
    }
  };
  // On mouse over, show navigation
  mouseEnterLeave(header, 'mouseenter', function() {
    // if the subnav is retracted on pageload(preventOpenTillUp), make sure the mouse was off the global nav when the mouse was moved before showing the subnav.
    if (!preventOpenTillUp || mouseMoveCount > 1) {
      if (mouseOpenTimer) {
        clearTimeout(mouseOpenTimer);
      }
      if (mouseCloseTimer) {
        clearTimeout(mouseCloseTimer);
      }
      mouseOpenTimer = setTimeout(mouseOpen, 100);
    }
  });

  // On mouse out, hide navigation
  mouseEnterLeave(header, 'mouseleave', function() {
    if (mouseOpenTimer) {
      clearTimeout(mouseOpenTimer);
    }
    if (mouseCloseTimer) {
      clearTimeout(mouseCloseTimer);
    }
    mouseCloseTimer = setTimeout(mouseClose, 300);
  });

  /*
   * Increment a count every time the mouse moves.  This is used so that the initial mouseenter event can be ignored,
   * which means that the subnav won't pop up on mousemove if the mouse is already on the global header(and preventOpenTillUp is true).
   * 1 is the limit to remove the listener instead of 0, because the order of the mouseenter and mousemove events are swapped in ie lte 8.
   * @method incrementMouseMove
   * @return {Void}
   * @private
   */
  incrementMouseMove = function() {
    mouseMoveCount++;
    if (mouseMoveCount > 1) {
      removeEvent(document, 'mousemove', incrementMouseMove);
    }
  };

  /*
   * Hide the navbar on load immediately if it is enabled on the page.
   * Scolling up still activates the nav bar
   */
  preventOpenTillUp = hasClass(document.body, RETRACT_NAV);
  if (preventOpenTillUp) {
    addEvent(document, 'mousemove', incrementMouseMove);
  }

  if (preventOpenTillUp) {
    fixedPositionNav();
    navbar.style.top = originalOffset.top - originalHeight + PX;
    visibleNavOnTop = false;
  }

})();
</script>





