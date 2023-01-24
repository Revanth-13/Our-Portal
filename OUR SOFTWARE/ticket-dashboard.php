<!doctype html>
<html lang="en">
<head>
   <!-- Required meta tags -->
   <meta charset="utf-8">
   <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
   <title>Our Portal</title>
   <!-- Favicon -->
   <link rel="shortcut icon" href="images/favicon.jpg" />
   <!-- Bootstrap CSS -->
   <link rel="stylesheet" href="css/bootstrap.min.css">
   <!-- Typography CSS -->
   <link rel="stylesheet" href="css/typography.css">
   <!-- Style CSS -->
   <link rel="stylesheet" href="css/style.css">
   <!-- Responsive CSS -->
   <link rel="stylesheet" href="css/responsive.css">
</head>
<body>
   <!-- loader Start -->
   <div id="loading">
      <div id="loading-center">
      </div>
   </div>
   <!-- loader END -->
   <!-- Wrapper Start -->
   <div class="wrapper">
      <!-- Sidebar  -->
      <div class="iq-sidebar">
         <div class="iq-sidebar-logo d-flex justify-content-between">
            <a href="main-dashboard.html" class="header-logo">
               <img src="images/GITAM-logo.png" class="img-fluid rounded-normal" alt="">
               <div class="logo-title">
                  <span class="text-primary text-uppercase"></span> 
               </div>
            </a>
            <div class="iq-menu-bt-sidebar">
               <div class="iq-menu-bt align-self-center">
                  <div class="wrapper-menu">
                     <div class="main-circle"><i class="las la-bars"></i></div>
                  </div>
               </div>
            </div>
         </div>
         <div id="sidebar-scrollbar">
            <nav class="iq-sidebar-menu">
               <ul id="iq-sidebar-toggle" class="iq-menu">
                  <li>
                     
                     <a href="main-dashboard.html" class="iq-waves-effect"><i class="las la-home iq-arrow-left"></i><span>Dashboard</span></a>
                  </li>
                  <li class="active">
                     <a href="#TICKET" class="iq-waves-effect" data-toggle="collapse" aria-expanded="true"><span class="ripple rippleEffect"></span><i class="ri-coupon-line"></i><span>Ticket</span><i class="ri-arrow-right-s-line iq-arrow-right"></i></a>
                     <ul id="TICKET" class="iq-submenu collapse show" data-parent="#iq-sidebar-toggle">
                        <li  class="active"><a href="ticket-dashboard.html"><i class="las la-house-damage"></i>Dashboard</a></li>
                        <li><a href="ticket-form.html"><i class="ri-function-line"></i>FORM</a></li>                
                     </ul>
                  </li>
                  <li>
                     <a href="#Warrenty" class="iq-waves-effect" data-toggle="collapse" aria-expanded="false"><span class="ripple rippleEffect"></span><i class="ri-file-shield-2-line"></i><span>Warrenty</span><i class="ri-arrow-right-s-line iq-arrow-right"></i></a>
                     <ul id="Warrenty" class="iq-submenu collapse" data-parent="#iq-sidebar-toggle">
                        <li><a href="warrenty-dashboard.html"><i class="las la-house-damage"></i>Dashboard</a></li>
                        <li><a href="warrenty-data.php"><i class="ri-function-line"></i>FORM</a></li>
                       
                  
                     </ul>
                  </li>
                  <li>
                     <a href="#Meating" class="iq-waves-effect" data-toggle="collapse" aria-expanded="false"><span class="ripple rippleEffect"></span><i class="ion ion-ios-people"></i><span>Meating</span><i class="ri-arrow-right-s-line iq-arrow-right"></i></a>
                     <ul id="Meating" class="iq-submenu collapse" data-parent="#iq-sidebar-toggle">
                        <li><a href="meating-dashboard.php"><i class="las la-house-damage"></i>Dashboard</a></li>
                        <li><a href="meating-form.php"><i class="ri-function-line"></i>FORM</a></li>
                       
                  
                     </ul>
                  </li>
                  <li>
                     <a href="#Log-Book" class="iq-waves-effect" data-toggle="collapse" aria-expanded="false"><span class="ripple rippleEffect"></span><i class="ri-coupon-line"></i><span>Log-Book</span><i class="ri-arrow-right-s-line iq-arrow-right"></i></a>
                     <ul id="Log-Book" class="iq-submenu collapse" data-parent="#iq-sidebar-toggle">
                        <li><a href=""><i class="las la-house-damage"></i>Dashboard</a></li>
                        <li><a href="new-form.php"><i class="ri-function-line"></i>New Asset FORM</a></li>
                        <li><a href="old-form.php"><i class="ri-function-line"></i>Old Asset FORM</a></li>
                        <li><a href="standby-form.php"><i class="ri-function-line"></i>Stand-By FORM</a></li>
                        <li><a href="new-form.php"><i class="ri-function-line"></i>Functions FORM</a></li>
                        <li><a href="new-form.php"><i class="ri-function-line"></i>Scrap FORM</a></li>
                       
                  
                     </ul>
                  </li>
                  <li>
                     <a href="Softwares.html" class="iq-waves-effect"><i class="las la-laptop iq-arrow-left"></i><span>Softwares</span></a>
                  </li>
                 <!-- <li>
                     <a href="calendar.html" class="iq-waves-effect"><i class="las la-calendar iq-arrow-left"></i><span>Calendar</span></a>
                  </li>
                  <li>
                     <a href="#userinfo" class="iq-waves-effect" data-toggle="collapse" aria-expanded="false"><span class="ripple rippleEffect"></span><i class="las la-user-tie iq-arrow-left"></i><span>User</span><i class="ri-arrow-right-s-line iq-arrow-right"></i></a>
                     <ul id="userinfo" class="iq-submenu collapse" data-parent="#iq-sidebar-toggle" style="">
                        <li><a href="profile.html"><i class="las la-id-card-alt"></i>User Profile</a></li>
                        <li><a href="profile-edit.html"><i class="las la-edit"></i>User Edit</a></li>
                        <li><a href="add-user.html"><i class="las la-plus-circle"></i>User Add</a></li>
                        <li><a href="user-list.html"><i class="las la-th-list"></i>User List</a></li>
                     </ul>
                  </li>
                  <li>
                     <a href="#ui-elements" class="iq-waves-effect collapsed" data-toggle="collapse" aria-expanded="false"><i class="lab la-elementor iq-arrow-left"></i><span>UI Elements</span><i class="ri-arrow-right-s-line iq-arrow-right"></i></a>
                     <ul id="ui-elements" class="iq-submenu collapse" data-parent="#iq-sidebar-toggle">
                        <li class="elements">
                           <a href="#sub-menu" class="iq-waves-effect collapsed" data-toggle="collapse" aria-expanded="false"><i class="ri-play-circle-line"></i><span>UI Kit</span><i class="ri-arrow-right-s-line iq-arrow-right"></i></a>
                           <ul id="sub-menu" class="iq-submenu collapse" data-parent="#ui-elements">
                              <li><a href="ui-colors.html"><i class="las la-palette"></i>colors</a></li>
                              <li><a href="ui-typography.html"><i class="las la-keyboard"></i>Typography</a></li>
                              <li><a href="ui-alerts.html"><i class="las la-tag"></i>Alerts</a></li>
                              <li><a href="ui-badges.html"><i class="lab la-atlassian"></i>Badges</a></li>
                              <li><a href="ui-breadcrumb.html"><i class="las la-bars"></i>Breadcrumb</a></li>
                              <li><a href="ui-buttons.html"><i class="las la-tablet"></i>Buttons</a></li>
                              <li><a href="ui-cards.html"><i class="las la-credit-card"></i>Cards</a></li>
                              <li><a href="ui-carousel.html"><i class="las la-film"></i>Carousel</a></li>
                              <li><a href="ui-embed-video.html"><i class="las la-video"></i>Video</a></li>
                              <li><a href="ui-grid.html"><i class="las la-border-all"></i>Grid</a></li>
                              <li><a href="ui-images.html"><i class="las la-images"></i>Images</a></li>
                              <li><a href="ui-list-group.html"><i class="las la-list"></i>list Group</a></li>
                              <li><a href="ui-media-object.html"><i class="las la-ad"></i>Media</a></li>
                              <li><a href="ui-modal.html"><i class="las la-columns"></i>Modal</a></li>
                              <li><a href="ui-pagination.html"><i class="las la-ellipsis-h"></i>Pagination</a></li>
                              <li><a href="ui-popovers.html"><i class="las la-eraser"></i>Popovers</a></li>
                              <li><a href="ui-progressbars.html"><i class="las la-hdd"></i>Progressbars</a></li>
                              <li><a href="ui-tabs.html"><i class="las la-database"></i>Tabs</a></li>
                              <li><a href="ui-tooltips.html"><i class="las la-magnet"></i>Tooltips</a></li>
                           </ul>
                        </li>
                        <li class="form">
                           <a href="#forms" class="iq-waves-effect collapsed" data-toggle="collapse" aria-expanded="false"><i class="lab la-wpforms"></i><span>Forms</span><i class="ri-arrow-right-s-line iq-arrow-right"></i></a>
                           <ul id="forms" class="iq-submenu collapse" data-parent="#ui-elements">
                              <li><a href="form-layout.html"><i class="las la-book"></i>Form Elements</a></li>
                              <li><a href="form-validation.html"><i class="las la-edit"></i>Form Validation</a></li>
                              <li><a href="form-switch.html"><i class="las la-toggle-off"></i>Form Switch</a></li>
                              <li><a href="form-chechbox.html"><i class="las la-check-square"></i>Form Checkbox</a></li>
                              <li><a href="form-radio.html"><i class="ri-radio-button-line"></i>Form Radio</a></li>
                           </ul>
                        </li>
                        <li>
                           <a href="#wizard-form" class="iq-waves-effect collapsed" data-toggle="collapse" aria-expanded="false"><i class="ri-archive-drawer-line"></i><span>Forms Wizard</span><i class="ri-arrow-right-s-line iq-arrow-right"></i></a>
                           <ul id="wizard-form" class="iq-submenu collapse" data-parent="#ui-elements">
                              <li><a href="form-wizard.html"><i class="ri-clockwise-line"></i>Simple Wizard</a></li>
                              <li><a href="form-wizard-validate.html"><i class="ri-clockwise-2-line"></i>Validate Wizard</a></li>
                              <li><a href="form-wizard-vertical.html"><i class="ri-anticlockwise-line"></i>Vertical Wizard</a></li>
                           </ul>
                        </li>
                        <li>
                           <a href="#tables" class="iq-waves-effect collapsed" data-toggle="collapse" aria-expanded="false"><i class="ri-table-line"></i><span>Table</span><i class="ri-arrow-right-s-line iq-arrow-right"></i></a>
                           <ul id="tables" class="iq-submenu collapse" data-parent="#ui-elements">
                              <li><a href="tables-basic.html"><i class="ri-table-line"></i>Basic Tables</a></li>
                              <li><a href="data-table.html"><i class="ri-database-line"></i>Data Table</a></li>
                              <li><a href="table-editable.html"><i class="ri-refund-line"></i>Editable Table</a></li>
                           </ul>
                        </li>
                        <li>
                           <a href="#charts" class="iq-waves-effect collapsed" data-toggle="collapse" aria-expanded="false"><i class="ri-pie-chart-box-line"></i><span>Charts</span><i class="ri-arrow-right-s-line iq-arrow-right"></i></a>
                           <ul id="charts" class="iq-submenu collapse" data-parent="#ui-elements">
                              <li><a href="chart-morris.html"><i class="ri-file-chart-line"></i>Morris Chart</a></li>
                              <li><a href="chart-high.html"><i class="ri-bar-chart-line"></i>High Charts</a></li>
                              <li><a href="chart-am.html"><i class="ri-folder-chart-line"></i>Am Charts</a></li>
                              <li><a href="chart-apex.html"><i class="ri-folder-chart-2-line"></i>Apex Chart</a></li>
                           </ul>
                        </li>
                        <li>
                           <a href="#icons" class="iq-waves-effect collapsed" data-toggle="collapse" aria-expanded="false"><i class="ri-list-check"></i><span>Icons</span><i class="ri-arrow-right-s-line iq-arrow-right"></i></a>
                           <ul id="icons" class="iq-submenu collapse" data-parent="#ui-elements">
                              <li><a href="icon-dripicons.html"><i class="ri-stack-line"></i>Dripicons</a></li>
                              <li><a href="icon-fontawesome-5.html"><i class="ri-facebook-fill"></i>Font Awesome 5</a></li>
                              <li><a href="icon-lineawesome.html"><i class="ri-keynote-line"></i>line Awesome</a></li>
                              <li><a href="icon-remixicon.html"><i class="ri-remixicon-line"></i>Remixicon</a></li>
                              <li><a href="icon-unicons.html"><i class="ri-underline"></i>unicons</a></li>
                           </ul>
                        </li>
                     </ul>
                  </li>
                  <li>
                     <a href="#pages" class="iq-waves-effect collapsed" data-toggle="collapse" aria-expanded="false"><i class="las la-file-alt iq-arrow-left"></i><span>Pages</span><i class="ri-arrow-right-s-line iq-arrow-right"></i></a>
                     <ul id="pages" class="iq-submenu collapse" data-parent="#iq-sidebar-toggle">
                        <li>
                           <a href="#authentication" class="iq-waves-effect collapsed" data-toggle="collapse" aria-expanded="false"><i class="ri-pages-line"></i><span>Authentication</span><i class="ri-arrow-right-s-line iq-arrow-right"></i></a>
                           <ul id="authentication" class="iq-submenu collapse" data-parent="#pages">
                              <li><a href="sign-in.html"><i class="las la-sign-in-alt"></i>Login</a></li>
                              <li><a href="sign-up.html"><i class="ri-login-circle-line"></i>Register</a></li>
                              <li><a href="pages-recoverpw.html"><i class="ri-record-mail-line"></i>Recover Password</a></li>
                              <li><a href="pages-confirm-mail.html"><i class="ri-file-code-line"></i>Confirm Mail</a></li>
                              <li><a href="pages-lock-screen.html"><i class="ri-lock-line"></i>Lock Screen</a></li>
                           </ul>
                        </li>
                        <li>
                           <a href="#extra-pages" class="iq-waves-effect collapsed" data-toggle="collapse" aria-expanded="false"><i class="ri-pantone-line"></i><span>Extra Pages</span><i class="ri-arrow-right-s-line iq-arrow-right"></i></a>
                           <ul id="extra-pages" class="iq-submenu collapse" data-parent="#pages">
                              <li><a href="pages-timeline.html"><i class="ri-map-pin-time-line"></i>Timeline</a></li>
                              <li><a href="pages-invoice.html"><i class="ri-question-answer-line"></i>Invoice</a></li>
                              <li><a href="blank-page.html"><i class="ri-invision-line"></i>Blank Page</a></li>
                              <li><a href="pages-error.html"><i class="ri-error-warning-line"></i>Error 404</a></li>
                              <li><a href="pages-error-500.html"><i class="ri-error-warning-line"></i>Error 500</a></li>
                              <li><a href="pages-pricing.html"><i class="ri-price-tag-line"></i>Pricing</a></li>
                              <li><a href="pages-maintenance.html"><i class="ri-archive-line"></i>Maintenance</a></li>
                              <li><a href="pages-comingsoon.html"><i class="ri-mastercard-line"></i>Coming Soon</a></li>
                              <li><a href="pages-faq.html"><i class="ri-compasses-line"></i>Faq</a></li>
                           </ul>
                        </li>
                     </ul>
                  </li>
                  <li>
                     <a href="#menu-level" class="iq-waves-effect collapsed" data-toggle="collapse" aria-expanded="false"><i class="ri-record-circle-line iq-arrow-left"></i><span>Menu Level</span><i class="ri-arrow-right-s-line iq-arrow-right"></i></a>
                     <ul id="menu-level" class="iq-submenu collapse" data-parent="#iq-sidebar-toggle">
                        <li><a href="#"><i class="ri-record-circle-line"></i>Menu 1</a></li>
                        <li>
                           <a href="#"><i class="ri-record-circle-line"></i>Menu 2</a>
                           <ul>
                              <li class="menu-level">
                                 <a href="#sub-menus" class="iq-waves-effect collapsed" data-toggle="collapse" aria-expanded="false"><i class="ri-play-circle-line"></i><span>Sub-menu</span><i class="ri-arrow-right-s-line iq-arrow-right"></i></a>
                                 <ul id="sub-menus" class="iq-submenu iq-submenu-data collapse">
                                    <li><a href="#"><i class="ri-record-circle-line"></i>Sub-menu 1</a></li>
                                    <li><a href="#"><i class="ri-record-circle-line"></i>Sub-menu 2</a></li>
                                    <li><a href="#"><i class="ri-record-circle-line"></i>Sub-menu 3</a></li>
                                 </ul>
                              </li>
                           </ul>
                        </li>
                        <li><a href="#"><i class="ri-record-circle-line"></i>Menu 3</a></li>
                        <li><a href="#"><i class="ri-record-circle-line"></i>Menu 4</a></li>
                     </ul>
                  </li>-->
               </ul>
            </nav>
         </div>
      </div>
      <!-- TOP Nav Bar -->
      <div class="iq-top-navbar">
         <div class="iq-navbar-custom">
            <nav class="navbar navbar-expand-lg navbar-light p-0">
               <div class="iq-menu-bt d-flex align-items-center">
                  <div class="wrapper-menu">
                     <div class="main-circle"><i class="las la-bars"></i></div>
                  </div>
                  <div class="iq-navbar-logo d-flex justify-content-between">
                     <a href="index.html" class="header-logo">
                        <img src="images/logo.png" class="img-fluid rounded-normal" alt="">
                        <div class="pt-2 pl-2 logo-title">
                           <span class="text-primary text-uppercase">Muzik</span>
                        </div>
                     </a>
                  </div>
               </div>
               <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"  aria-label="Toggle navigation">
                  <i class="ri-menu-3-line"></i>
               </button>
               <div class="collapse navbar-collapse" id="navbarSupportedContent">
                  <ul class="list-unstyled iq-menu-top d-flex justify-content-between mb-0 p-0">
                     <li class="active"><a href="main-dashboard.html">Home</a></li>
                     <li><a href="">Achivments</a></li>
                      <!--<li><a href="albums.html">Albums</a></li>-->
                  </ul>
                  <ul class="navbar-nav ml-auto navbar-list">
                     <li class="nav-item nav-icon">
                        <div class="iq-search-bar">
                           <form action="#" class="searchbox">
                              <input type="text" class="text search-input" placeholder="Search Here..">
                              <a class="search-link" href="#"><i class="ri-search-line text-black"></i></a>
                              <a class="search-audio" href="#"><i class="las la-microphone text-black"></i></a>
                           </form>
                        </div>
                     </li>
                     <li class="nav-item nav-icon search-content">
                        <a href="#" class="search-toggle iq-waves-effect text-gray rounded"><span class="ripple rippleEffect " ></span>
                           <i class="ri-search-line text-black"></i>
                        </a>
                        <form action="#" class="search-box p-0">
                           <input type="text" class="text search-input" placeholder="Type here to search...">
                           <a class="search-link" href="#"><i class="ri-search-line text-black"></i></a>
                           <a class="search-audio" href="#"><i class="las la-microphone text-black"></i></a>
                        </form>
                     </li>
                     <li class="nav-item nav-icon">
                        <a href="#" class="search-toggle iq-waves-effect text-black rounded">
                           <i class="las la-cog"></i>
                           <span class=" dots"></span>
                        </a>
                     </li>
                     <!-- <li class="nav-item nav-icon">
                        <a href="#" class="search-toggle iq-waves-effect text-black rounded">
                           <i class="lar la-envelope"></i>
                           <span class="massage-icon dots badge badge-primary">5</span>
                        </a>
                        <div class="iq-sub-dropdown">
                           <div class="iq-card shadow-none m-0">
                              <div class="iq-card-body p-0 ">
                                 <div class="bg-primary p-3">
                                    <h5 class="mb-0 text-white">All Messages<small class="badge  badge-light float-right pt-1">5</small></h5>
                                 </div>
                                 <a href="#" class="iq-sub-card">
                                    <div class="media align-items-center">
                                       <div class="">
                                          <img class="avatar-40 rounded" src="images/user/01.jpg" alt="">
                                       </div>
                                       <div class="media-body ml-3">
                                          <h6 class="mb-0 ">Bni Emma Watson</h6>
                                          <small class="float-left font-size-12">13 Jun</small>
                                       </div>
                                    </div>
                                 </a>
                                 <a href="#" class="iq-sub-card">
                                    <div class="media align-items-center">
                                       <div class="">
                                          <img class="avatar-40 rounded" src="images/user/02.jpg" alt="">
                                       </div>
                                       <div class="media-body ml-3">
                                          <h6 class="mb-0 ">Lorem Ipsum Watson</h6>
                                          <small class="float-left font-size-12">20 Apr</small>
                                       </div>
                                    </div>
                                 </a>
                                 <a href="#" class="iq-sub-card">
                                    <div class="media align-items-center">
                                       <div class="">
                                          <img class="avatar-40 rounded" src="images/user/03.jpg" alt="">
                                       </div>
                                       <div class="media-body ml-3">
                                          <h6 class="mb-0 ">Why do we use it?</h6>
                                          <small class="float-left font-size-12">30 Jun</small>
                                       </div>
                                    </div>
                                 </a>
                                 <a href="#" class="iq-sub-card">
                                    <div class="media align-items-center">
                                       <div class="">
                                          <img class="avatar-40 rounded" src="images/user/04.jpg" alt="">
                                       </div>
                                       <div class="media-body ml-3">
                                          <h6 class="mb-0 ">Variations Passages</h6>
                                          <small class="float-left font-size-12">12 Sep</small>
                                       </div>
                                    </div>
                                 </a>
                                 <a href="#" class="iq-sub-card">
                                    <div class="media align-items-center">
                                       <div class="">
                                          <img class="avatar-40 rounded" src="images/user/05.jpg" alt="">
                                       </div>
                                       <div class="media-body ml-3">
                                          <h6 class="mb-0 ">Lorem Ipsum generators</h6>
                                          <small class="float-left font-size-12">5 Dec</small>
                                       </div>
                                    </div>
                                 </a>
                              </div>
                           </div>
                        </div>
                     </li>
                     <li class="nav-item nav-icon">
                        <a href="#" class="search-toggle iq-waves-effect text-black rounded">
                           <i class="ri-notification-line block"></i>
                           <span class="notice-icon dots badge badge-primary">+</span>
                        </a>
                        <div class="iq-sub-dropdown">
                           <div class="iq-card shadow-none m-0">
                              <div class="iq-card-body p-0">
                                 <div class="bg-primary p-3">
                                    <h5 class="mb-0 text-white">All Notifications<small class="badge  badge-light float-right pt-1">4</small></h5>
                                 </div>
                                 <a href="#" class="iq-sub-card" >
                                    <div class="media align-items-center">
                                       <div class="">
                                          <img class="avatar-40 rounded img-fluid" src="images/user/01.jpg" alt="">
                                       </div>
                                       <div class="media-body ml-3">
                                          <h6 class="mb-0 ">Emma Watson Barry</h6>
                                          <small class="float-right">Just Now</small>
                                          <p class="mb-0">95 MB</p>
                                       </div>
                                    </div>
                                 </a>
                                 <a href="#" class="iq-sub-card" >
                                    <div class="media align-items-center">
                                       <div class="">
                                          <img class="avatar-40 rounded img-fluid" src="images/user/02.jpg" alt="">
                                       </div>
                                       <div class="media-body ml-3">
                                          <h6 class="mb-0 ">New customer is join</h6>
                                          <small class="float-right">5 days ago</small>
                                          <p class="mb-0">Cyst Barry</p>
                                       </div>
                                    </div>
                                 </a>
                                 <a href="#" class="iq-sub-card" >
                                    <div class="media align-items-center">
                                       <div class="">
                                          <img class="avatar-40 rounded img-fluid" src="images/user/03.jpg" alt="">
                                       </div>
                                       <div class="media-body ml-3">
                                          <h6 class="mb-0 ">Two customer is left</h6>
                                          <small class="float-right">2 days ago</small>
                                          <p class="mb-0">Cyst Barry</p>
                                       </div>
                                    </div>
                                 </a>
                                 <a href="#" class="iq-sub-card" >
                                    <div class="media align-items-center">
                                       <div class="">
                                          <img class="avatar-40 rounded img-fluid" src="images/user/04.jpg" alt="">
                                       </div>
                                       <div class="media-body ml-3">
                                          <h6 class="mb-0 ">New Mail from Fenny</h6>
                                          <small class="float-right">3 days ago</small>
                                          <p class="mb-0">Cyst Barry</p>
                                       </div>
                                    </div>
                                 </a>
                              </div>
                           </div>
                        </div>
                     </li>-->
                     <li class="line-height pt-3">
                        <a href="#" class="search-toggle iq-waves-effect d-flex align-items-center">
                           <img src="images/user/12.png" class="img-fluid rounded-circle" alt="user">
                        </a>
                        <div class="iq-sub-dropdown iq-user-dropdown">
                           <div class="iq-card shadow-none m-0">
                              <div class="iq-card-body p-0 ">
                                 <div class="bg-primary p-3">
                                    <h5 class="mb-0 text-white line-height">Hello Rama Naidu</h5>
                                    <span class="text-white font-size-12">Available</span>
                                 </div>
                                 <a href="profile.html" class="iq-sub-card iq-bg-primary-hover">
                                    <div class="media align-items-center">
                                       <div class="rounded iq-card-icon iq-bg-primary">
                                          <i class="ri-file-user-line"></i>
                                       </div>
                                       <div class="media-body ml-3">
                                          <h6 class="mb-0 ">My Profile</h6>
                                          <p class="mb-0 font-size-12">View personal profile details.</p>
                                       </div>
                                    </div>
                                 </a>
                                 <a href="" class="iq-sub-card iq-bg-primary-hover">
                                    <div class="media align-items-center">
                                       <div class="rounded iq-card-icon iq-bg-primary">
                                          <i class="ri-profile-line"></i>
                                       </div>
                                       <div class="media-body ml-3">
                                          <h6 class="mb-0 ">Edit Profile</h6>
                                          <p class="mb-0 font-size-12">Modify your personal details.</p>
                                       </div>
                                    </div>
                                 </a>
                                 <!--<a href="account-setting.html" class="iq-sub-card iq-bg-primary-hover">
                                    <div class="media align-items-center">
                                       <div class="rounded iq-card-icon iq-bg-primary">
                                          <i class="ri-account-box-line"></i>
                                       </div>
                                       <div class="media-body ml-3">
                                          <h6 class="mb-0 ">Account settings</h6>
                                          <p class="mb-0 font-size-12">Manage your account parameters.</p>
                                       </div>
                                    </div>
                                 </a>
                                 <a href="privacy-setting.html" class="iq-sub-card iq-bg-primary-hover">
                                    <div class="media align-items-center">
                                       <div class="rounded iq-card-icon iq-bg-primary">
                                          <i class="ri-lock-line"></i>
                                       </div>
                                       <div class="media-body ml-3">
                                          <h6 class="mb-0 ">Privacy Settings</h6>
                                          <p class="mb-0 font-size-12">Control your privacy parameters.</p>
                                       </div>
                                    </div>
                                 </a>-->
                                 <div class="d-inline-block w-100 text-center p-3">
                                    <a class="bg-primary iq-sign-btn" href=".\Sign in\index.html" role="button">Sign out<i class="ri-login-box-line ml-2"></i></a>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </li>
                  </ul>
               </div>
            </nav>
         </div>
      </div>
      <!-- TOP Nav Bar END -->
      <!-- Page Content  -->
      <div id="content-page" class="content-page">
         <div class="container-fluid">
            <div class="row">
               
         
            <div class="col-sm-6 col-md-6 col-lg-3">
                  <div class="iq-card iq-card-block iq-card-stretch iq-card-height">
                     <div class="iq-card-body">

                        <div class="d-flex align-items-center justify-content-between">
                           <h6>Music Artist</h6>
                           <span class="iq-icon"><i class="ri-information-fill"></i></span>
                           
                        </div>
                        <div class="iq-customer-box d-flex align-items-center justify-content-between mt-3">
                           <div class="iq-map text-primary font-size-32"><i class="ri-bar-chart-grouped-line"></i></div>
                           <div class="d-flex align-items-center">
                           <?php
                            
                           

                           $query = "SELECT id FROM ticket ORDER BY sno";
                           $query_run = mysqli_query($connection, $query);
                           
                           $row =  mysqli_num_rows($query_run);

                            echo '<h1> '.$row.' </h1>';
                          
                           ?>
                              <div class="rounded-circle iq-card-icon iq-bg-primary ml-3"> <i class="ri-inbox-fill"></i></div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="col-sm-6 col-md-6 col-lg-3">
                  <div class="iq-card iq-card-block iq-card-stretch iq-card-height">
                     <div class="iq-card-body">
                        <div class="d-flex align-items-center justify-content-between">
                           <h6>Music Album</h6>
                           <span class="iq-icon"><i class="ri-information-fill"></i></span>
                        </div>
                        <div class="iq-customer-box d-flex align-items-center justify-content-between mt-3">
                           <div class="iq-map text-success font-size-32"><i class="ri-bar-chart-grouped-line"></i></div>
                           <div class="d-flex align-items-center">
                             
                        
                              <div class="rounded-circle iq-card-icon iq-bg-success ml-3"><i class="ri-price-tag-3-line"></i></div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="col-sm-6 col-md-6 col-lg-3">
                  <div class="iq-card iq-card-block iq-card-stretch iq-card-height">
                     <div class="iq-card-body">
                        <div class="d-flex align-items-center justify-content-between">
                           <h6>Music Followers</h6>
                           <span class="iq-icon"><i class="ri-information-fill"></i></span>
                        </div>
                        <div class="iq-customer-box d-flex align-items-center justify-content-between mt-3">
                           <div class="iq-map text-danger font-size-32"><i class="ri-bar-chart-grouped-line"></i></div>
                           <div class="d-flex align-items-center">
                              <h2>2.5K</h2>
                              <div class="rounded-circle iq-card-icon iq-bg-danger ml-3"><i class="ri-radar-line"></i></div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="col-sm-6 col-md-6 col-lg-3">
                  <div class="iq-card iq-card-block iq-card-stretch iq-card-height">
                     <div class="iq-card-body">
                        <div class="d-flex align-items-center justify-content-between">
                           <h6>Music Comments</h6>
                           <span class="iq-icon"><i class="ri-information-fill"></i></span>
                        </div>
                        <div class="iq-customer-box d-flex align-items-center justify-content-between mt-3">
                           <div class="iq-map text-info font-size-32"><i class="ri-bar-chart-grouped-line"></i></div>
                           <div class="d-flex align-items-center">
                              <h2>5.2M</h2>
                              <div class="rounded-circle iq-card-icon iq-bg-info ml-3"><i class="ri-refund-line"></i></div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="col-lg-8">
                  <div class="iq-card iq-card-block iq-card-stretch iq-card-height">
                     <div class="iq-card-body">
                        <div id="progress-chart-2"></div>
                     </div>
                  </div>
               </div>
               <div class="col-lg-4">
                  <div class="iq-card iq-card-block iq-card-stretch iq-card-height">
                     <div class="iq-card-header d-flex justify-content-between">
                        <div class="iq-header-title">
                           <h4 class="card-title">Best artist</h4>
                        </div>
                        <div class="iq-card-header-toolbar d-flex align-items-center">
                           <div class="dropdown">
                              <span class="dropdown-toggle" id="dropdownMenuButton1" data-toggle="dropdown">
                              <i class="ri-more-fill"></i>
                              </span>
                              <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuButton1" style="">
                                 <a class="dropdown-item" href="#"><i class="ri-eye-fill mr-2"></i>View</a>
                                 <a class="dropdown-item" href="#"><i class="ri-delete-bin-6-fill mr-2"></i>Delete</a>
                                 <a class="dropdown-item" href="#"><i class="ri-pencil-fill mr-2"></i>Edit</a>
                                 <a class="dropdown-item" href="#"><i class="ri-printer-fill mr-2"></i>Print</a>
                                 <a class="dropdown-item" href="#"><i class="ri-file-download-fill mr-2"></i>Download</a>
                              </div>
                           </div>
                        </div>
                     </div>
                     <div class="iq-card-body">
                        <ul class="list-inline p-0 m-0">
                           <li class="d-flex mb-3 align-items-center p-3 sell-list border border-primary rounded">
                              <div class="user-img img-fluid">
                                 <img src="images/user/01.jpg" alt="story-img" class="img-fluid rounded-circle avatar-40">
                              </div>
                              <div class="media-support-info ml-3">
                                 <h6>Pete Sariya</h6>
                                 <p class="mb-0 font-size-12">24 jan, 2020</p>
                              </div>
                              <div class="iq-card-header-toolbar d-flex align-items-center">
                                 <div class="badge badge-pill badge-primary">157</div>
                              </div>
                           </li>
                           <li class="d-flex mb-3 align-items-center p-3 sell-list border border-success rounded">
                              <div class="user-img img-fluid">
                                 <img src="images/user/02.jpg" alt="story-img" class="img-fluid rounded-circle avatar-40">
                              </div>
                              <div class="media-support-info ml-3">
                                 <h6>Anna Mull</h6>
                                 <p class="mb-0 font-size-12">15 feb, 2020</p>
                              </div>
                              <div class="iq-card-header-toolbar d-flex align-items-center">
                                 <div class="badge badge-pill badge-success">280</div>
                              </div>
                           </li>
                           <li class="d-flex align-items-center p-3 sell-list border border-danger rounded">
                              <div class="user-img img-fluid">
                                 <img src="images/user/03.jpg" alt="story-img" class="img-fluid rounded-circle avatar-40">
                              </div>
                              <div class="media-support-info ml-3">
                                 <h6>Alex john</h6>
                                 <p class="mb-0 font-size-12">05 March, 2020</p>
                              </div>
                              <div class="iq-card-header-toolbar d-flex align-items-center">
                                 <div class="badge badge-pill badge-danger">200</div>
                              </div>
                           </li>
                        </ul>
                     </div>
                  </div>
               </div>
               <div class="col-lg-4">
                  <div class="iq-card iq-card-block iq-card-stretch iq-card-height">
                     <div class="iq-card-body">
                        <div id="progress-chart-1"></div>
                        <div class="table-responsive">
                              <table class="table mb-0 table-borderless">
                                 <thead>
                                    <tr>
                                       <th scope="col">Album</th>
                                       <th scope="col">Song No</th>
                                       <th scope="col">Review</th>
                                    </tr>
                                 </thead>
                                 <tbody>
                                    <tr>
                                       <td>Like That</td>
                                       <td>#1525</td>
                                       <td>3.5<i class="ri-star-fill text-warning pl-2"></i></td>
                                    </tr>
                                    <tr>
                                       <td>Said Sum</td>
                                       <td>#1200</td>
                                       <td>4.5<i class="ri-star-fill text-warning pl-2"></i></td>
                                    </tr>
                                 </tbody>
                              </table>
                           </div>
                     </div>
                  </div>
               </div>
               <div class="col-lg-4">
                  <div class="iq-card">
                    <div class="iq-card-body">
                        <div class="d-flex align-items-top justify-content-between">
                           <div class="media align-items-center">
                               <div class="music-icon-2 text-center text-danger">
                                   <i class="fa fa-smile-o"></i>
                               </div>
                               <div class="iq-card-text pl-3">
                                   <h5>Positive Comment</h5>
                                   <div class="d-block line-height">
                                       <span class="font-size-11 text-warning">
                                          <i class="fa fa-star"></i>
                                          <i class="fa fa-star"></i>
                                          <i class="fa fa-star"></i>
                                          <i class="fa fa-star"></i>
                                          <i class="fa fa-star"></i>
                                       </span>                                             
                                    </div>
                               </div>
                           </div>
                           <p class="mb-1">50/100</p>
                        </div>
                    </div>
                </div>
                <div class="iq-card">
                    <div class="iq-card-body">
                        <div class="d-flex align-items-top justify-content-between">
                           <div class="media align-items-center">
                               <div class="music-icon-2 text-center text-danger">
                                   <i class="fa fa-smile-o"></i>
                               </div>
                               <div class="iq-card-text pl-3">
                                   <h5>Average Comment</h5>
                                   <div class="d-block line-height">
                                       <span class="font-size-11 text-warning">
                                          <i class="fa fa-star"></i>
                                          <i class="fa fa-star"></i>
                                          <i class="fa fa-star"></i>
                                          <i class="fa fa-star"></i>
                                          <i class="fa fa-star"></i>
                                       </span>                                             
                                    </div>
                               </div>
                           </div>
                           <p class="mb-1">25/100</p>
                        </div>
                    </div>
                </div>
                <div class="iq-card">
                    <div class="iq-card-body">
                        <div class="d-flex align-items-top justify-content-between">
                           <div class="media align-items-center">
                               <div class="music-icon-2 text-center text-danger">
                                   <i class="fa fa-meh-o"></i>
                               </div>
                              <div class="iq-card-text pl-3">
                                <h5>Negative Comment</h5>
                                <div class="d-block line-height">
                                    <span class="font-size-11 text-warning">
                                       <i class="fa fa-star"></i>
                                       <i class="fa fa-star"></i>
                                       <i class="fa fa-star"></i>
                                       <i class="fa fa-star"></i>
                                       <i class="fa fa-star"></i>
                                    </span>                                             
                                 </div>
                              </div>
                           </div>
                           <p class="mb-1">05/100</p>
                        </div>
                    </div>
               </div>
               <div class="iq-card mb-0">
                  <div class="iq-card-body p-2">
                     <div id="menu-chart-demo3"></div>
                  </div>
               </div>
            </div>
               <div class="col-lg-4">
                  <div class="iq-card iq-card-block iq-card-stretch iq-card-height">
                     <div class="iq-card-body">
                        <h2 class="mb-0"><span class="counter" style="visibility: visible;">3450</span></h2>
                        <p class="mb-0">Music Followers</p>
                        <h6 class="mb-4"><span class="text-success mr-2">20%</span>Positive reviews</h6>
                        <a href="javascript:void();" class="btn btn-danger d-block mt-5 mb-4"> Add Song</a>
                        <div class="mt-2">
                           <div class="d-flex align-items-center justify-content-between">
                              <p class="mt-1 mb-2">Songs</p>
                              <h4 class="counter" style="visibility: visible;">81</h4> 
                           </div>
                           <div class="iq-progress-bar-linear d-inline-block w-100">
                              <div class="iq-progress-bar bg-primary-light iq-progress-bar-icon">
                                 <span class="bg-primary" data-percent="50"></span>
                              </div>
                           </div>
                        </div>
                        <div class="mt-2">
                           <div class="d-flex align-items-center justify-content-between">
                              <p class="mt-1 mb-2">Albems</p>
                              <h4 class="counter" style="visibility: visible;">124</h4> 
                           </div>
                           <div class="iq-progress-bar-linear d-inline-block w-100">
                              <div class="iq-progress-bar bg-success-light iq-progress-bar-icon">
                                 <span class="bg-success" data-percent="50"></span>
                              </div>
                           </div>
                        </div>
                        <div class="mt-2">
                           <div class="d-flex align-items-center justify-content-between">
                              <p class="mt-1 mb-2">Videos</p>
                              <h4 class="counter" style="visibility: visible;">74</h4> 
                           </div>
                           <div class="iq-progress-bar-linear d-inline-block w-100">
                              <div class="iq-progress-bar bg-danger-light iq-progress-bar-icon">
                                 <span class="bg-danger" data-percent="50"></span>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="col-lg-12">
                  <div class="iq-card iq-card-block iq-card-stretch iq-card-height">
                     <div class="iq-card-header d-flex justify-content-between">
                        <div class="iq-header-title">
                           <h4 class="card-title">Song Table</h4>
                        </div>
                        <div class="iq-card-header-toolbar d-flex align-items-center">
                           <button class="btn btn-outline-primary">View All</button>
                        </div>
                     </div>
                     <div class="iq-card-body rec-pat">
                        <div class="table-responsive">
                           <table class="table table-striped mb-0 table-borderless">
                              <thead>
                                 <tr>
                                    <th>No</th>
                                    <th>Song</th>
                                    <th>Name</th>
                                    <th>File Size</th>
                                    <th>Date</th>
                                    <th>Review</th>
                                    <th>Status</th>
                                 </tr>
                              </thead>
                              <tbody>
                                 <tr>
                                    <td>1</td>
                                    <td>Life Is Good</td>
                                    <td>
                                       <div class="media align-items-center">
                                          <img src="images/user/01.jpg" class="img-fluid avatar-35 rounded" alt="image">
                                          <div class="media-body ml-3">
                                             <p class="mb-0">Pete Sariya</p>
                                          </div>
                                       </div>
                                    </td>
                                    <td>20.04 Mb</td>
                                    <td>20/08/2020</td>
                                    <td>
                                       <div class="d-block line-height">
                                          <span class="font-size-11 text-warning">
                                             <i class="fa fa-star"></i>
                                             <i class="fa fa-star"></i>
                                             <i class="fa fa-star"></i>
                                             <i class="fa fa-star"></i>
                                             <i class="fa fa-star"></i>
                                          </span>                                             
                                       </div>
                                    </td>
                                    <td>
                                       <span class="badge badge-success">Success</span>
                                    </td>
                                 </tr>
                                 <tr>
                                    <td>2</td>
                                    <td>Harry Styles</td>
                                    <td>
                                       <div class="media align-items-center">
                                          <img src="images/user/02.jpg" class="img-fluid avatar-35 rounded" alt="image">
                                          <div class="media-body ml-3">
                                             <p class="mb-0">Cliff Hanger</p>
                                          </div>
                                       </div>
                                    </td>
                                    <td>45.00 Mb</td>
                                    <td>20/08/2020</td>
                                    <td>
                                       <div class="d-block line-height">
                                          <span class="font-size-11 text-warning">
                                             <i class="fa fa-star"></i>
                                             <i class="fa fa-star"></i>
                                             <i class="fa fa-star"></i>
                                             <i class="fa fa-star"></i>
                                             <i class="fa fa-star-half-o"></i>
                                          </span>                                             
                                       </div>
                                    </td>
                                    <td>
                                       <span class="badge badge-danger">Pending</span>
                                    </td>
                                 </tr>
                                 <tr>
                                    <td>3</td>
                                    <td>Die From A..</td>
                                    <td>
                                       <div class="media align-items-center">
                                          <img src="images/user/03.jpg" class="img-fluid avatar-35 rounded" alt="image">
                                          <div class="media-body ml-3">
                                             <p class="mb-0">Terry Aki</p>
                                          </div>
                                       </div>
                                    </td>
                                    <td>26.08 Mb</td>
                                    <td>20/08/2020</td>
                                    <td>
                                       <div class="d-block line-height">
                                          <span class="font-size-11 text-warning">
                                             <i class="fa fa-star"></i>
                                             <i class="fa fa-star"></i>
                                             <i class="fa fa-star"></i>
                                             <i class="fa fa-star-half-o"></i>                                             
                                             <i class="fa fa-star-half-o"></i>
                                          </span>                                             
                                       </div>
                                    </td>
                                    <td>
                                       <span class="badge badge-success">Success</span>
                                    </td>
                                 </tr>
                                 <tr>
                                    <td>4</td>
                                    <td>Life's A Mess</td>
                                    <td>
                                       <div class="media align-items-center">
                                          <img src="images/user/04.jpg" class="img-fluid avatar-35 rounded" alt="image">
                                          <div class="media-body ml-3">
                                             <p class="mb-0">Rock lai</p>
                                          </div>
                                       </div>
                                    </td>
                                    <td>15.04 Mb</td>
                                    <td>20/08/2020</td>
                                    <td>
                                       <div class="d-block line-height">
                                          <span class="font-size-11 text-warning">
                                             <i class="fa fa-star"></i>
                                             <i class="fa fa-star"></i>
                                             <i class="fa fa-star"></i>
                                             <i class="fa fa-star"></i>
                                             <i class="fa fa-star"></i>
                                          </span>                                             
                                       </div>
                                    </td>
                                    <td>
                                       <span class="badge badge-danger">Pending</span>
                                    </td>
                                 </tr>
                                 <tr>
                                    <td>5</td>
                                    <td>Rags2Riches</td>
                                    <td>
                                       <div class="media align-items-center">
                                          <img src="images/user/05.jpg" class="img-fluid avatar-35 rounded" alt="image">
                                          <div class="media-body ml-3">
                                             <p class="mb-0">Anna Mull</p>
                                          </div>
                                       </div>
                                    </td>
                                    <td>10.03 Mb</td>
                                    <td>20/08/2020</td>
                                    <td>
                                       <div class="d-block line-height">
                                          <span class="font-size-11 text-warning">
                                             <i class="fa fa-star"></i>
                                             <i class="fa fa-star"></i>
                                             <i class="fa fa-star"></i>
                                             <i class="fa fa-star"></i>
                                             <i class="fa fa-star"></i>
                                          </span>                                             
                                       </div>
                                    </td>
                                    <td>
                                       <span class="badge badge-success">Success</span>
                                    </td>
                                 </tr>
                              </tbody>
                           </table>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
   
   <div class="iq-colorbox color-fix">
      <div class="buy-button"> <a class="color-full" href="#"><i class="fa fa-spinner fa-spin"></i></a> </div>
      <div id="right-sidebar-scrollbar" class="iq-colorbox-inner">
         <div class="clearfix color-picker">
            <h3 class="iq-font-black">music Awesome Color</h3>
            <p>This color combo available inside whole template. You can change on your wish, Even you can create your own with limitless possibilities! </p>
            <ul class="iq-colorselect clearfix">
               <li class="color-1 iq-colormark" data-style="color-1"></li>
               <li class="color-2" data-style="iq-color-2"></li>
               <li class="color-3" data-style="iq-color-3"></li>
               <li class="color-4" data-style="iq-color-4"></li>
               <li class="color-5" data-style="iq-color-5"></li>
               <li class="color-6" data-style="iq-color-6"></li>
               <li class="color-7" data-style="iq-color-7"></li>
               <li class="color-8" data-style="iq-color-8"></li>
               <li class="color-9" data-style="iq-color-9"></li>
               <li class="color-10" data-style="iq-color-10"></li>
               <li class="color-11" data-style="iq-color-11"></li>
               <li class="color-12" data-style="iq-color-12"></li>
               <li class="color-13" data-style="iq-color-13"></li>
               <li class="color-14" data-style="iq-color-14"></li>
               <li class="color-15" data-style="iq-color-15"></li>
               <li class="color-16" data-style="iq-color-16"></li>
               <li class="color-17" data-style="iq-color-17"></li>
               <li class="color-18" data-style="iq-color-18"></li>
               <li class="color-19" data-style="iq-color-19"></li>
               <li class="color-20" data-style="iq-color-20"></li>
            </ul>
            <a target="_blank" class="btn btn-primary d-block mt-3" href="https://themeforest.net/item/muzik-music-streaming-admin-template/27967164">Purchase Now</a>
         </div>
      </div>
   </div>
   <!-- color-customizer END -->
   <!-- Optional JavaScript -->
   <!-- jQuery first, then Popper.js, then Bootstrap JS -->
   <script src="js/jquery.min.js"></script>
   <script src="js/popper.min.js"></script>
   <script src="js/bootstrap.min.js"></script>
   <!-- Appear JavaScript -->
   <script src="js/jquery.appear.js"></script>
   <!-- Countdown JavaScript -->
   <script src="js/countdown.min.js"></script>
   <!-- Counterup JavaScript -->
   <script src="js/waypoints.min.js"></script>
   <script src="js/jquery.counterup.min.js"></script>
   <!-- Wow JavaScript -->
   <script src="js/wow.min.js"></script>
   <!-- Apexcharts JavaScript -->
   <script src="js/apexcharts.js"></script>
   <!-- Slick JavaScript -->
   <script src="js/slick.min.js"></script>
   <!-- Select2 JavaScript -->
   <script src="js/select2.min.js"></script>
   <!-- Owl Carousel JavaScript -->
   <script src="js/owl.carousel.min.js"></script>
   <!-- Magnific Popup JavaScript -->
   <script src="js/jquery.magnific-popup.min.js"></script>
   <!-- Smooth Scrollbar JavaScript -->
   <script src="js/smooth-scrollbar.js"></script>
   <!-- lottie JavaScript -->
   <script src="js/lottie.js"></script>
   <!-- am core JavaScript -->
   <script src="js/core.js"></script>
   <!-- am charts JavaScript -->
   <script src="js/charts.js"></script>
   <!-- am animated JavaScript -->
   <script src="js/animated.js"></script>
   <!-- am kelly JavaScript -->
   <script src="js/kelly.js"></script>
   <!-- am maps JavaScript -->
   <script src="js/maps.js"></script>
   <!-- am worldLow JavaScript -->
   <script src="js/worldLow.js"></script>
   <!-- Raphael-min JavaScript -->
   <script src="js/raphael-min.js"></script>
   <!-- Morris JavaScript -->
   <script src="js/morris.js"></script>
   <!-- Morris min JavaScript -->
   <script src="js/morris.min.js"></script>
   <!-- Flatpicker Js -->
   <script src="js/flatpickr.js"></script>
   <!-- Style Customizer -->
   <script src="js/style-customizer.js"></script>
   <!-- Chart Custom JavaScript -->
   <script src="js/chart-custom.js"></script>
<!-- Music js -->
   <script src="js/music-player.js"></script>
   <!-- Music-player js -->
   <script src="js/music-player-dashboard.js"></script>
   <!-- Custom JavaScript -->
   <script src="js/custom.js"></script>
</body>
</html>