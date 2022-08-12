<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Cuba admin is super flexible, powerful, clean &amp; modern responsive bootstrap 5 admin template with unlimited possibilities.">
    <meta name="keywords" content="admin template, Cuba admin template, dashboard template, flat admin template, responsive admin template, web app">
    <meta name="author" content="pixelstrap">
    <link rel="icon" href="{{asset('images/favicon.png" type="image/x-icon')}}">
    <link rel="shortcut icon" href="{{asset('images/favicon.png" type="image/x-ico')}}">
    <title>Cuba - Premium Admin Template</title>
    <!-- Google font-->
    <link href="https://fonts.googleapis.com/css?family=Rubik:400,400i,500,500i,700,700i&amp;display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,300i,400,400i,500,500i,700,700i,900&amp;display=swap" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="{{asset('css/font-awesome.css')}}">
    <!-- ico-font-->
    <link rel="stylesheet" type="text/css" href="{{asset('css/vendors/icofont.css')}}">
    <!-- Themify icon-->
    <link rel="stylesheet" type="text/css" href="{{asset('css/vendors/themify.css')}}">
    <!-- Flag icon-->
    <link rel="stylesheet" type="text/css" href="{{asset('css/vendors/flag-icon.css')}}">
    <!-- Feather icon-->
    <link rel="stylesheet" type="text/css" href="{{asset('css/vendors/feather-icon.css')}}">
    <!-- Plugins css start-->
    <link rel="stylesheet" type="text/css" href="{{asset('css/vendors/scrollbar.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('css/vendors/prism.css')}}">
    <!-- Plugins css Ends-->
    <!-- Bootstrap css-->
    <link rel="stylesheet" type="text/css" href="{{asset('css/vendors/bootstrap.css')}}">
    <!-- App css-->
    <link rel="stylesheet" type="text/css" href="{{asset('css/style.css')}}">
    <link id="color" rel="stylesheet" href="{{asset('css/color-1.css" media="screen')}}">
    <!-- Responsive css-->
    <link rel="stylesheet" type="text/css" href="{{asset('css/responsive.css')}}">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">

  </head>
  <body>
    <!-- loader starts-->
    <div class="loader-wrapper">
      <div class="loader-index"><span></span></div>
      <svg>
        <defs></defs>
        <filter id="goo">
          <fegaussianblur in="SourceGraphic" stddeviation="11" result="blur"></fegaussianblur>
          <fecolormatrix in="blur" values="1 0 0 0 0  0 1 0 0 0  0 0 1 0 0  0 0 0 19 -9" result="goo"> </fecolormatrix>
        </filter>
      </svg>
    </div>
    <!-- loader ends-->
    <!-- tap on top starts-->
    <div class="tap-top"><i data-feather="chevrons-up"></i></div>
    <!-- tap on tap ends-->
    <!-- page-wrapper Start-->
    <div class="page-wrapper compact-wrapper" id="pageWrapper">
      <!-- Page Header Start-->
      <div class="page-header">
        <div class="header-wrapper row m-0">
          <form class="form-inline search-full col" action="#" method="get">
            <div class="form-group w-100">
              <div class="Typeahead Typeahead--twitterUsers">
                <div class="u-posRelative">
                  <input class="demo-input Typeahead-input form-control-plaintext w-100" type="text" placeholder="Search Cuba .." name="q" title="" autofocus>
                  <div class="spinner-border Typeahead-spinner" role="status"><span class="sr-only">Loading...</span></div><i class="close-search" data-feather="x"></i>
                </div>
                <div class="Typeahead-menu"></div>
              </div>
            </div>
          </form>
          <div class="header-logo-wrapper col-auto p-0">
            <div class="logo-wrapper"><a href="index.html"><img class="img-fluid" src="{{asset('images/logo/logo.png')}}" alt=""></a></div>
            <div class="toggle-sidebar"><i class="status_toggle middle sidebar-toggle" data-feather="align-center"></i></div>
          </div>
          <div class="left-header col horizontal-wrapper ps-0">
            <ul class="horizontal-menu">
              <li class="mega-menu outside"><a class="nav-link" href="#!"><i data-feather="layers"></i><span>Bonus Ui</span></a>
                <div class="mega-menu-container nav-submenu menu-to-be-close header-mega">
                  <div class="container-fluid">
                    <div class="row">
                      <div class="col mega-box">
                        <div class="mobile-title d-none">
                          <h5>Mega menu</h5><i data-feather="x"></i>
                        </div>
                        <div class="link-section icon">
                          <div>
                            <h6>Error Page</h6>
                          </div>
                          <ul>
                            <li><a href="../theme/error-400.html">Error page 400</a></li>
                            <li><a href="../theme/error-401.html">Error page 401</a></li>
                            <li><a href="../theme/error-403.html">Error page 403</a></li>
                            <li><a href="../theme/error-404.html">Error page 404</a></li>
                            <li><a href="../theme/error-500.html">Error page 500</a></li>
                            <li><a href="../theme/error-503.html">Error page 503</a></li>
                          </ul>
                        </div>
                      </div>
                      <div class="col mega-box">
                        <div class="link-section doted">
                          <div>
                            <h6> Authentication</h6>
                          </div>
                          <ul>
                            <li><a href="../theme/login.html">Login</a></li>
                            <li><a href="../theme/login_one.html">Login with image</a></li>
                            <li><a href="../theme/login-bs-validation.html">Login with validation</a></li>
                            <li><a href="../theme/sign-up.html">Sign Up</a></li>
                            <li><a href="../theme/sign-up-one.html">SignUp with image</a></li>
                            <li><a href="../theme/sign-up-two.html">SignUp with image</a></li>
                          </ul>
                        </div>
                      </div>
                      <div class="col mega-box">
                        <div class="link-section dashed-links">
                          <div>
                            <h6>Usefull Pages</h6>
                          </div>
                          <ul>
                            <li><a href="../theme/search.html">Search Website</a></li>
                            <li><a href="../theme/unlock.html">Unlock User</a></li>
                            <li><a href="../theme/forget-password.html">Forget Password</a></li>
                            <li><a href="../theme/reset-password.html">Reset Password</a></li>
                            <li><a href="../theme/maintenance.html">Maintenance</a></li>
                            <li><a href="../theme/login-sa-validation.html">Login validation</a></li>
                          </ul>
                        </div>
                      </div>
                      <div class="col mega-box">
                        <div class="link-section">
                          <div>
                            <h6>Email templates</h6>
                          </div>
                          <ul>
                            <li class="ps-0"><a href="../theme/basic-template.html">Basic Email</a></li>
                            <li class="ps-0"><a href="../theme/email-header.html">Basic With Header</a></li>
                            <li class="ps-0"><a href="../theme/template-email.html">Ecomerce Template</a></li>
                            <li class="ps-0"><a href="../theme/template-email-2.html">Email Template 2</a></li>
                            <li class="ps-0"><a href="../theme/ecommerce-templates.html">Ecommerce Email</a></li>
                            <li class="ps-0"><a href="../theme/email-order-success.html">Order Success</a></li>
                          </ul>
                        </div>
                      </div>
                      <div class="col mega-box">
                        <div class="link-section">
                          <div>
                            <h6>Coming Soon</h6>
                          </div>
                          <ul class="svg-icon">
                            <li><a href="../theme/comingsoon.html"> <i data-feather="file"> </i>Coming-soon</a></li>
                            <li><a href="../theme/comingsoon-bg-video.html"> <i data-feather="film"> </i>Coming-video</a></li>
                            <li><a href="../theme/comingsoon-bg-img.html"><i data-feather="image"> </i>Coming-Image</a></li>
                          </ul>
                          <div>
                            <h6>Other Soon</h6>
                          </div>
                          <ul class="svg-icon">
                            <li><a class="txt-primary" href="../theme/landing-page.html"> <i data-feather="cast"></i>Landing Page</a></li>
                            <li><a class="txt-secondary" href="../theme/sample-page.html"> <i data-feather="airplay"></i>Sample Page</a></li>
                          </ul>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </li>
              <li class="level-menu outside"><a class="nav-link" href="#!"><i data-feather="inbox"></i><span>Level Menu</span></a>
                <ul class="header-level-menu menu-to-be-close">
                  <li><a href="../theme/file-manager.html" data-original-title="" title="">                               <i data-feather="git-pull-request"></i><span>File manager    </span></a></li>
                  <li><a href="#!" data-original-title="" title="">                               <i data-feather="users"></i><span>Users</span></a>
                    <ul class="header-level-sub-menu">
                      <li><a href="../theme/user-profile.html" data-original-title="" title="">                               <i data-feather="user"></i><span>User Profile</span></a></li>
                      <li><a href="../theme/edit-profile.html" data-original-title="" title="">                               <i data-feather="user-minus"></i><span>User Edit</span></a></li>
                      <li><a href="../theme/user-cards.html" data-original-title="" title="">                               <i data-feather="user-check"></i><span>Users Cards</span></a></li>
                    </ul>
                  </li>
                  <li><a href="../theme/kanban.html" data-original-title="" title="">                               <i data-feather="airplay"></i><span>Kanban Board</span></a></li>
                  <li><a href="../theme/bookmark.html" data-original-title="" title="">                               <i data-feather="heart"></i><span>Bookmark</span></a></li>
                  <li><a href="../theme/social-app.html" data-original-title="" title="">                               <i data-feather="zap"></i><span>Social App                     </span></a></li>
                </ul>
              </li>
            </ul>
          </div>
          <div class="nav-right col-8 pull-right right-header p-0">
            <ul class="nav-menus">
              <li class="language-nav">
                <div class="translate_wrapper">
                  <div class="current_lang">
                    <div class="lang"><i class="flag-icon flag-icon-us"></i><span class="lang-txt">EN                               </span></div>
                  </div>
                  <div class="more_lang">
                    <div class="lang selected" data-value="en"><i class="flag-icon flag-icon-us"></i><span class="lang-txt">English<span> (US)</span></span></div>
                    <div class="lang" data-value="de"><i class="flag-icon flag-icon-de"></i><span class="lang-txt">Deutsch</span></div>
                    <div class="lang" data-value="es"><i class="flag-icon flag-icon-es"></i><span class="lang-txt">Español</span></div>
                    <div class="lang" data-value="fr"><i class="flag-icon flag-icon-fr"></i><span class="lang-txt">Français</span></div>
                    <div class="lang" data-value="pt"><i class="flag-icon flag-icon-pt"></i><span class="lang-txt">Português<span> (BR)</span></span></div>
                    <div class="lang" data-value="cn"><i class="flag-icon flag-icon-cn"></i><span class="lang-txt">简体中文</span></div>
                    <div class="lang" data-value="ae"><i class="flag-icon flag-icon-ae"></i><span class="lang-txt">لعربية <span> (ae)</span></span></div>
                  </div>
                </div>
              </li>
              <li>                         <span class="header-search"><i data-feather="search"></i></span></li>
              <li class="onhover-dropdown">
                <div class="notification-box"><i data-feather="bell"> </i><span class="badge rounded-pill badge-secondary">4                                </span></div>
                <ul class="notification-dropdown onhover-show-div">
                  <li><i data-feather="bell"></i>
                    <h6 class="f-18 mb-0">Notitications</h6>
                  </li>
                  <li>
                    <p><i class="fa fa-circle-o me-3 font-primary"> </i>Delivery processing <span class="pull-right">10 min.</span></p>
                  </li>
                  <li>
                    <p><i class="fa fa-circle-o me-3 font-success"></i>Order Complete<span class="pull-right">1 hr</span></p>
                  </li>
                  <li>
                    <p><i class="fa fa-circle-o me-3 font-info"></i>Tickets Generated<span class="pull-right">3 hr</span></p>
                  </li>
                  <li>
                    <p><i class="fa fa-circle-o me-3 font-danger"></i>Delivery Complete<span class="pull-right">6 hr</span></p>
                  </li>
                  <li><a class="btn btn-primary" href="#">Check all notification</a></li>
                </ul>
              </li>
              <li class="onhover-dropdown">
                <div class="notification-box"><i data-feather="star"></i></div>
                <div class="onhover-show-div bookmark-flip">
                  <div class="flip-card">
                    <div class="flip-card-inner">
                      <div class="front">
                        <ul class="droplet-dropdown bookmark-dropdown">
                          <li class="gradient-primary"><i data-feather="star"></i>
                            <h6 class="f-18 mb-0">Bookmark</h6>
                          </li>
                          <li>
                            <div class="row">
                              <div class="col-4 text-center"><i data-feather="file-text"></i></div>
                              <div class="col-4 text-center"><i data-feather="activity"></i></div>
                              <div class="col-4 text-center"><i data-feather="users"></i></div>
                              <div class="col-4 text-center"><i data-feather="clipboard"></i></div>
                              <div class="col-4 text-center"><i data-feather="anchor"></i></div>
                              <div class="col-4 text-center"><i data-feather="settings"></i></div>
                            </div>
                          </li>
                          <li class="text-center">
                            <button class="flip-btn" id="flip-btn">Add New Bookmark</button>
                          </li>
                        </ul>
                      </div>
                      <div class="back">
                        <ul>
                          <li>
                            <div class="droplet-dropdown bookmark-dropdown flip-back-content">
                              <input type="text" placeholder="search...">
                            </div>
                          </li>
                          <li>
                            <button class="d-block flip-back" id="flip-back">Back</button>
                          </li>
                        </ul>
                      </div>
                    </div>
                  </div>
                </div>
              </li>
              <li>
                <div class="mode"><i class="fa fa-moon-o"></i></div>
              </li>
              <li class="cart-nav onhover-dropdown">
                <div class="cart-box"><i data-feather="shopping-cart"></i><span class="badge rounded-pill badge-primary">2</span></div>
                <ul class="cart-dropdown onhover-show-div">
                  <li>
                    <h6 class="mb-0 f-20">Shoping Bag</h6><i data-feather="shopping-cart"></i>
                  </li>
                  <li class="mt-0">
                    <div class="media"><img class="img-fluid rounded-circle me-3 img-60" src="../assets/images/ecommerce/01.jpg" alt="">
                      <div class="media-body"><span>V-Neck Shawl Collar Woman's Solid T-Shirt</span>
                        <p>Yellow(#fcb102)</p>
                        <div class="qty-box">
                          <div class="input-group"><span class="input-group-prepend">
                              <button class="btn quantity-left-minus" type="button" data-type="minus" data-field=""><i data-feather="minus"></i></button></span>
                            <input class="form-control input-number" type="text" name="quantity" value="1"><span class="input-group-prepend">
                              <button class="btn quantity-right-plus" type="button" data-type="plus" data-field=""><i data-feather="plus"></i></button></span>
                          </div>
                        </div>
                        <h6 class="text-end text-muted">$299.00</h6>
                      </div>
                      <div class="close-circle"><a href="#"><i data-feather="x"></i></a></div>
                    </div>
                  </li>
                  <li class="mt-0">
                    <div class="media"><img class="img-fluid rounded-circle me-3 img-60" src="../assets/images/ecommerce/03.jpg" alt="">
                      <div class="media-body"><span>V-Neck Shawl Collar Woman's Solid T-Shirt</span>
                        <p>Yellow(#fcb102)</p>
                        <div class="qty-box">
                          <div class="input-group"><span class="input-group-prepend">
                              <button class="btn quantity-left-minus" type="button" data-type="minus" data-field=""><i data-feather="minus"></i></button></span>
                            <input class="form-control input-number" type="text" name="quantity" value="1"><span class="input-group-prepend">
                              <button class="btn quantity-right-plus" type="button" data-type="plus" data-field=""><i data-feather="plus"></i></button></span>
                          </div>
                        </div>
                        <h6 class="text-end text-muted">$299.00</h6>
                      </div>
                      <div class="close-circle"><a href="#"><i data-feather="x"></i></a></div>
                    </div>
                  </li>
                  <li>
                    <div class="total">
                      <h6 class="mb-2 mt-0 text-muted">Order Total : <span class="f-right f-20">$598.00</span></h6>
                    </div>
                  </li>
                  <li><a class="btn btn-block w-100 mb-2 btn-primary view-cart" href="cart.html">Go to shoping bag</a><a class="btn btn-block w-100 btn-secondary view-cart" href="checkout.html">Checkout</a></li>
                </ul>
              </li>
              <li class="onhover-dropdown"><i data-feather="message-square"></i>
                <ul class="chat-dropdown onhover-show-div">
                  <li><i data-feather="message-square"></i>
                    <h6 class="f-18 mb-0">Message Box                                    </h6>
                  </li>
                  <li>
                    <div class="media"><img class="img-fluid rounded-circle me-3" src="../assets/images/user/1.jpg" alt="">
                      <div class="status-circle online"></div>
                      <div class="media-body"><span>Erica Hughes</span>
                        <p>Lorem Ipsum is simply dummy...</p>
                      </div>
                      <p class="f-12 font-success">58 mins ago</p>
                    </div>
                  </li>
                  <li>
                    <div class="media"><img class="img-fluid rounded-circle me-3" src="../assets/images/user/2.jpg" alt="">
                      <div class="status-circle online"></div>
                      <div class="media-body"><span>Kori Thomas</span>
                        <p>Lorem Ipsum is simply dummy...</p>
                      </div>
                      <p class="f-12 font-success">1 hr ago</p>
                    </div>
                  </li>
                  <li>
                    <div class="media"><img class="img-fluid rounded-circle me-3" src="../assets/images/user/14.png" alt="">
                      <div class="status-circle offline"></div>
                      <div class="media-body"><span>Ain Chavez</span>
                        <p>Lorem Ipsum is simply dummy...</p>
                      </div>
                      <p class="f-12 font-danger">32 mins ago</p>
                    </div>
                  </li>
                  <li class="text-center"> <a class="btn btn-primary" href="#">View All     </a></li>
                </ul>
              </li>
              <li class="maximize"><a class="text-dark" href="#!" onclick="javascript:toggleFullScreen()"><i data-feather="maximize"></i></a></li>
              <li class="profile-nav onhover-dropdown p-0 me-0">
                <div class="media profile-media"><img class="b-r-10" src="{{asset('images/dashboard/profile.jpg')}}" alt="">
                  <div class="media-body"><span>Emay Walter</span>
                    <p class="mb-0 font-roboto">Admin <i class="middle fa fa-angle-down"></i></p>
                  </div>
                </div>
                <ul class="profile-dropdown onhover-show-div">
                  <li><a href="#"><i data-feather="user"></i><span>Account </span></a></li>
                  <li><a href="#"><i data-feather="mail"></i><span>Inbox</span></a></li>
                  <li><a href="#"><i data-feather="file-text"></i><span>Taskboard</span></a></li>
                  <li><a href="#"><i data-feather="settings"></i><span>Settings</span></a></li>
                  <li><a href="#"><i data-feather="log-in"> </i><span>Log in</span></a></li>
                </ul>
              </li>
            </ul>
          </div>
          <script class="result-template" type="text/x-handlebars-template">
            <div class="ProfileCard u-cf">                        
            <div class="ProfileCard-avatar"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-airplay m-0"><path d="M5 17H4a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h16a2 2 0 0 1 2 2v10a2 2 0 0 1-2 2h-1"></path><polygon points="12 15 17 21 7 21 12 15"></polygon></svg></div>
            <div class="ProfileCard-details">
            



            </div>
            </div>
          </script>
          <script class="empty-template" type="text/x-handlebars-template"><div class="EmptyMessage">Your search turned up 0 results. This most likely means the backend is down, yikes!</div></script>
        </div>
      </div>
      <!-- Page Header Ends                              -->
      <!-- Page Body Start-->
      <div class="page-body-wrapper horizontal-menu">
        <!-- Page Sidebar Start-->
       

     

<div class="sidebar-wrapper">
  <div>
    <div class="logo-wrapper"><a href="index.html"><img class="img-fluid for-light" src="{{asset('images/logo/logo.png')}}" alt=""><img class="img-fluid for-dark" src="../assets/images/logo/logo_dark.png" alt=""></a>
      <div class="back-btn"><i class="fa fa-angle-left"></i></div>
      <div class="toggle-sidebar"><i class="status_toggle middle sidebar-toggle" data-feather="grid"> </i></div>
    </div>
    <div class="logo-icon-wrapper"><a href="index.html"><img class="img-fluid" src="{{asset('images/logo/logo-icon.png')}}" alt=""></a></div>
    <nav class="sidebar-main">
      <div class="left-arrow" id="left-arrow"><i data-feather="arrow-left"></i></div>
      <div id="sidebar-menu">
        <ul class="sidebar-links" id="simple-bar">
          <li class="back-btn">
            <div class="mobile-back text-end"><span>Back</span><i class="fa fa-angle-right ps-2" aria-hidden="true"></i></div>
          </li>
          <li class="sidebar-list"><a class="sidebar-link sidebar-title" href="{{url('admin/dashboard')}}"><i data-feather="home"></i><span>Dashboard</span></a></li>
          <li class="sidebar-list"><a class="sidebar-link sidebar-title" href="#"><i data-feather="anchor"></i><span>Category</span></a>
            <ul class="sidebar-submenu">
              <li><a class="submenu-title" href="{{url('admin/category')}}">View Category<span class="sub-arrow"><i class="fa fa-chevron-right"></i></span></a>
              </li>
              <li>     <a class="submenu-title" href="{{url('admin/add-category')}}">Add Category<span class="sub-arrow"><i class="fa fa-chevron-right"></i></span></a>
                <ul class="nav-sub-childmenu submenu-content">
                </ul>
              </li>
            </ul>
          </li>
          <li class="sidebar-list"><a class="sidebar-link sidebar-title" href="#"><i data-feather="anchor"></i><span>Image</span></a>
            <ul class="sidebar-submenu">
              <li><a class="submenu-title" href="{{url('admin/image')}}">View Image<span class="sub-arrow"><i class="fa fa-chevron-right"></i></span></a>
              </li>
              <li>     <a class="submenu-title" href="{{url('admin/add-image')}}">Add Image<span class="sub-arrow"><i class="fa fa-chevron-right"></i></span></a>
                <ul class="nav-sub-childmenu submenu-content">
                </ul>
              </li>
            </ul>
          </li>
          <li class="sidebar-list"><a class="sidebar-link sidebar-title" href="#"><i data-feather="anchor"></i><span>Page</span></a>
            <ul class="sidebar-submenu">
              <li><a class="submenu-title" href="{{url('admin/page')}}">View Page<span class="sub-arrow"><i class="fa fa-chevron-right"></i></span></a>
              </li>
              <li>     <a class="submenu-title" href="{{url('admin/add-page')}}">Add Page<span class="sub-arrow"><i class="fa fa-chevron-right"></i></span></a>
                <ul class="nav-sub-childmenu submenu-content">
                </ul>
              </li>
            </ul>
          </li>
          <li class="sidebar-list"><a class="sidebar-link sidebar-title" href="#"><i data-feather="anchor"></i><span>Widget</span></a>
            <ul class="sidebar-submenu">
              <li><a class="submenu-title" href="{{url('admin/widget')}}">View Widget<span class="sub-arrow"><i class="fa fa-chevron-right"></i></span></a>
              </li>
              <li>     <a class="submenu-title" href="{{url('admin/add-widget')}}">Add Widget<span class="sub-arrow"><i class="fa fa-chevron-right"></i></span></a>
                <ul class="nav-sub-childmenu submenu-content">
                </ul>
              </li>
            </ul>
          </li>
          <li class="sidebar-list"><a class="sidebar-link sidebar-title" href="http://support.pixelstrap.com/help-center" target="_blank"><i data-feather="headphones"></i><span>Raise Support</span></a></li>
          
          <li class="sidebar-list"><a class="sidebar-link sidebar-title" href="https://docs.pixelstrap.com/cuba/all_in_one/document/index.html" target="_blank"><i data-feather="file-text"></i><span>Documentation                                    </span></a></li>
        </ul>
      </div>
      <div class="right-arrow" id="right-arrow"><i data-feather="arrow-right"></i></div>
    </nav>
  </div>
</div>
  <!-- Page Sidebar Ends-->
  <div class="page-body">
    <div class="container-fluid">
      <div class="page-title">
        <div class="row">
          <div class="col-6">
            <h3>View</h3>
          </div>
          <div class="col-6">
            <ol class="breadcrumb">
              <li class="breadcrumb-item"><a href="index.html">                                       <i data-feather="home"></i></a></li>
              <li class="breadcrumb-item">Footers</li>
              <li class="breadcrumb-item active">Footer dark</li>
            </ol>
          </div>
        </div>
      </div>
    </div>
    <!-- Container-fluid starts-->
    <div class="container-fluid">
      <div class="row starter-main">
        <div class="col-sm-12">
          <div class="card">
            <div class="card-header">
              <h5>@yield('title')</h5>
              <div class="card-header-right">
                <ul class="list-unstyled card-option">
                  <li><i class="fa fa-spin fa-cog"></i></li>
                  <li><i class="view-html fa fa-code"></i></li>
                  <li><i class="icofont icofont-maximize full-card"></i></li>
                  <li><i class="icofont icofont-minus minimize-card"></i></li>
                  <li><i class="icofont icofont-refresh reload-card"></i></li>
                  <li><i class="icofont icofont-error close-card"></i></li>
                </ul>
              </div>
            </div>
            <div class="card-body">
             
            @yield('main')
             
            </div>
          </div>
        </div>
      
       
      
       
       
      </div>
    </div>
    <!-- Container-fluid Ends-->
  </div>
        <!-- footer start-->
       
        @extends('layouts.footer')
          <!-- footer end-->
       

        </div>
      </div>
      <!-- latest jquery-->
      <script src="{{asset('js/jquery-3.5.1.min.js')}}"></script>
      <!-- Bootstrap js-->
      <script src="{{asset('js/bootstrap/bootstrap.bundle.min.js')}}"></script>
      <!-- feather icon js-->
      <script src="{{asset('js/icons/feather-icon/feather.min.js')}}"></script>
      <script src="{{asset('js/icons/feather-icon/feather-icon.js')}}"></script>
      <!-- scrollbar js-->
      <script src="{{asset('js/scrollbar/simplebar.js')}}"></script>
      <script src="{{asset('js/scrollbar/custom.js')}}"></script>
      <!-- Sidebar jquery-->
      <script src="{{asset('js/config.js')}}"></script>
      <!-- Plugins JS start-->
      <script src="{{asset('js/sidebar-menu.js')}}"></script>
      <script src="{{asset('js/prism/prism.min.js')}}"></script>
      <script src="{{asset('js/clipboard/clipboard.min.js')}}"></script>
      <script src="{{asset('js/custom-card/custom-card.js')}}"></script>
      <script src="{{asset('js/typeahead/handlebars.js')}}"></script>
      <script src="{{asset('js/typeahead/typeahead.bundle.js')}}"></script>
      <script src="{{asset('js/typeahead/typeahead.custom.js')}}"></script>
      <script src="{{asset('js/typeahead-search/handlebars.js')}}"></script>
      <script src="{{asset('js/typeahead-search/typeahead-custom.js')}}"></script>
      <script src="{{asset('js/tooltip-init.js')}}"></script>
      <!-- Plugins JS Ends-->
      <!-- Theme js-->
      <script src="{{asset('js/script.js')}}"></script>
      <script src="{{asset('js/theme-customizer/customizer.js')}}"></script>
      <!-- login js-->
      <!-- Plugin used-->
      <script src="//cdn.ckeditor.com/4.14.0/standard/ckeditor.js"></script>
       <script type="text/javascript">
       $(document).ready(function() {
       $('.ckeditor').ckeditor();
        });
</script>
    </body>
  </html>