<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <title>Infinitude Media</title>
    <meta oame="description" content="">
    <meta name="viewport" content="width=device-width,initial-scale=1,maximum-scale=1,user-scalable=no">
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="../assets-minified/images/icons/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="../assets-minified/images/icons/apple-touch-icon-114-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="../assets-minified/images/icons/apple-touch-icon-72-precomposed.png">
    <link rel="apple-touch-icon-precomposed" href="../assets-minified/images/icons/apple-touch-icon-57-precomposed.png">
    <link rel="shortcut icon" href="../assets-minified/images/icons/favicon.png">
    <script type="text/javascript" src="../assets-minified/js-core.js"></script>
    <script type="text/javascript">
        $(window).load(function() {
            setTimeout(function() {
                $('#loading').fadeOut(400, "linear");
            }, 300);
        });
    </script>
    <style>
        #loading {
            position: fixed;
            width: 100%;
            height: 100%;
            left: 0;
            top: 0;
            right: 0;
            bottom: 0;
            display: block;
            background: #fff;
            z-index: 10000;
        }

        #loading img {
            position: absolute;
            top: 50%;
            left: 50%;
            margin: -23px 0 0 -23px;
        }
    </style>
    <link rel="stylesheet" type="text/css" href="../assets-minified/helpers/helpers-all.css">
    <link rel="stylesheet" type="text/css" href="../assets-minified/elements/elements-all.css">
    <link rel="stylesheet" type="text/css" href="../assets-minified/icons/fontawesome/fontawesome.css">
    <link rel="stylesheet" type="text/css" href="../assets-minified/icons/linecons/linecons.css">
    <link rel="stylesheet" type="text/css" href="../assets-minified/snippets/snippets-all.css">
    <link rel="stylesheet" type="text/css" href="../assets-minified/applications/mailbox.css">
    <link rel="stylesheet" type="text/css" href="../assets-minified/themes/supina/layout.css">
    <link id="layout-color" rel="stylesheet" type="text/css" href="../assets-minified/themes/supina/default/layout-color.css">
    <link id="framework-color" rel="stylesheet" type="text/css" href="../assets-minified/themes/supina/default/framework-color.css">
    <link rel="stylesheet" type="text/css" href="../assets-minified/themes/supina/border-radius.css">
    <link rel="stylesheet" type="text/css" href="../assets-minified/helpers/colors.css">
</head>

<body>
    <div id="loading"><img src="../assets-minified/images/spinner/loader-dark.gif" alt="Loading..."></div>
    <div id="sb-site">
        <div id="page-wrapper">
            <div id="page-header" class="clearfix">
                <div id="header-logo" class="rm-transition"><a href="#" class="tooltip-button hidden-desktop" title="Navigation Menu" id="responsive-open-menu"><i class="glyph-icon icon-align-justify"></i></a> <span>Infinitude Media  <i class="opacity-80">API</i></span> <a id="collapse-sidebar" href="#" title=""><i class="glyph-icon icon-chevron-left"></i></a></div>
                <div id="sidebar-search">
                    <input type="text" placeholder="Search..." class="autocomplete-input input tooltip-button" data-placement="bottom" title="Type &apos;jav&apos; to see the available tags..." id="" name=""> <i class="glyph-icon icon-search"></i></div>
                <div id="header-right">
                    <div class="user-profile dropdown">
                        <a href="#" title="" class="user-ico clearfix" data-toggle="dropdown"><img width="36" src="{{ asset('user/images/'.Auth::user()->username.'.png') }}" alt=""> <i class="glyph-icon icon-chevron-down"></i></a>
                        <div class="dropdown-menu pad0B float-right">
                            <div class="box-sm">
                                <div class="login-box clearfix">
                                    <div class="user-img"><a href="#" title="" class="change-img">Change photo</a> <img src="{{ asset('user/images/'.Auth::user()->username.'.png') }}" alt=""></div>
                                    <div class="user-info"><span>{{Auth::user()->name}} <i>Front-end web developer</i></span> <a href="{{ url('user/edit') }}" title="">Edit profile</a> <a href="#" title="">View tfications</a></div>
                                </div>
                                <div class="divider"></div>
                                <ul class="reset-ul mrg5B">
                                    <li><a href="#">View login page example <i class="glyph-icon float-right icon-caret-right"></i></a></li>
                                    <li><a href="#">View lockscreen example <i class="glyph-icon float-right icon-caret-right"></i></a></li>
                                    <li><a href="#">View account details <i class="glyph-icon float-right icon-caret-right"></i></a></li>
                                </ul>
                                <div class="pad5A button-pane button-pane-alt text-center">
                                  <a  class="btn display-block font-normal btn-danger" href="{{ route('logout') }}" >
                                                                          {{ __('Logout') }}
                                                                      </a>

                                  {{-- <a class="btn display-block font-normal btn-danger" href="{{ route('logout') }}"
                                     onclick="event.preventDefault();
                                                   document.getElementById('logout-form').submit();">
                                      <i class="glyph-icon icon-power-off"></i>{{ __('Logout') }}
                                  </a> --}}

                                </div>

                            </div>
                        </div>
                    </div>

                    <div class="top-icon-bar float-right">

                        <div class="dropdown"><a data-toggle="dropdown" href="#" title="">


<i class="glyph-icon icon-linecons-megaphone"></i></a>
                            <div class="dropdown-menu float-right">
                                <div class="popover-title display-block clearfix pad10A">Notifications</div>
                                <div class="scrollable-content scrollable-nice box-md scrollable-small">
                                    <ul class="no-border notifications-box">
                                        <li><span class="bg-danger icon-notification glyph-icon icon-bullhorn"></span> <span class="notification-text">This is an error notification</span>
                                            <div class="notification-time">a few seconds ago <span class="glyph-icon icon-clock-o"></span></div>
                                        </li>
                                        <li><span class="bg-warning icon-notification glyph-icon icon-users"></span> <span class="notification-text font-blue">This is a warning notification</span>
                                            <div class="notification-time"><b>15</b> minutes ago <span class="glyph-icon icon-clock-o"></span></div>
                                        </li>
                                        <li><span class="bg-green icon-notification glyph-icon icon-sitemap"></span> <span class="notification-text font-green">A success message example.</span>
                                            <div class="notification-time"><b>2 hours</b> ago <span class="glyph-icon icon-clock-o"></span></div>
                                        </li>
                                        <li><span class="bg-azure icon-notification glyph-icon icon-random"></span> <span class="notification-text">This is an error notification</span>
                                            <div class="notification-time">a few seconds ago <span class="glyph-icon icon-clock-o"></span></div>
                                        </li>
                                        <li><span class="bg-warning icon-notification glyph-icon icon-ticket"></span> <span class="notification-text">This is a warning notification</span>
                                            <div class="notification-time"><b>15</b> minutes ago <span class="glyph-icon icon-clock-o"></span></div>
                                        </li>
                                        <li><span class="bg-blue icon-notification glyph-icon icon-user"></span> <span class="notification-text font-blue">Alternate notification styling.</span>
                                            <div class="notification-time"><b>2 hours</b> ago <span class="glyph-icon icon-clock-o"></span></div>
                                        </li>
                                        <li><span class="bg-purple icon-notification glyph-icon icon-user"></span> <span class="notification-text">This is an error notification</span>
                                            <div class="notification-time">a few seconds ago <span class="glyph-icon icon-clock-o"></span></div>
                                        </li>
                                        <li><span class="bg-warning icon-notification glyph-icon icon-user"></span> <span class="notification-text">This is a warning notification</span>
                                            <div class="notification-time"><b>15</b> minutes ago <span class="glyph-icon icon-clock-o"></span></div>
                                        </li>
                                        <li><span class="bg-green icon-notification glyph-icon icon-user"></span> <span class="notification-text font-green">A success message example.</span>
                                            <div class="notification-time"><b>2 hours</b> ago <span class="glyph-icon icon-clock-o"></span></div>
                                        </li>
                                        <li><span class="bg-purple icon-notification glyph-icon icon-user"></span> <span class="notification-text">This is an error notification</span>
                                            <div class="notification-time">a few seconds ago <span class="glyph-icon icon-clock-o"></span></div>
                                        </li>
                                        <li><span class="bg-warning icon-notification glyph-icon icon-user"></span> <span class="notification-text">This is a warning notification</span>
                                            <div class="notification-time"><b>15</b> minutes ago <span class="glyph-icon icon-clock-o"></span></div>
                                        </li>
                                    </ul>
                                </div>
                                <div class="pad10A button-pane button-pane-alt text-center"><a href="#" class="btn btn-primary" title="View all notifications">View all notifications</a></div>
                            </div>
                        </div>
                        <div class="dropdown"><a data-toggle="dropdown" href="#" title=""><span class="bs-badge badge-absolute bg-red">2</span> <i class="glyph-icon icon-linecons-params"></i></a>
                            <div class="dropdown-menu float-right" id="progress-dropdown">
                                <div class="scrollable-content scrollable-nice box-sm scrollable-small">
                                    <ul class="no-border progress-box progress-box-links">
                                        <li>
                                            <a href="#" title="">
                                                <div class="progress-title">Finishing uploading files <b>23%</b></div>
                                                <div class="progressbar-smaller progressbar" data-value="23">
                                                    <div class="progressbar-value bg-blue-alt">
                                                        <div class="progressbar-overlay"></div>
                                                    </div>
                                                </div>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#" title="">
                                                <div class="progress-title">Roadmap progress <b>91%</b></div>
                                                <div class="progressbar-smaller progressbar" data-value="91">
                                                    <div class="progressbar-value bg-red">
                                                        <div class="progressbar-overlay"></div>
                                                    </div>
                                                </div>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#" title="">
                                                <div class="progress-title">Images upload <b>58%</b></div>
                                                <div class="progressbar-smaller progressbar" data-value="58">
                                                    <div class="progressbar-value bg-green"></div>
                                                </div>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#" title="">
                                                <div class="progress-title">WordPress migration <b>74%</b></div>
                                                <div class="progressbar-smaller progressbar" data-value="74">
                                                    <div class="progressbar-value bg-purple"></div>
                                                </div>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#" title="">
                                                <div class="progress-title">Agile development procedures <b>91%</b></div>
                                                <div class="progressbar-smaller progressbar" data-value="91">
                                                    <div class="progressbar-value bg-black">
                                                        <div class="progressbar-overlay"></div>
                                                    </div>
                                                </div>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#" title="">
                                                <div class="progress-title">Systems integration <b>58%</b></div>
                                                <div class="progressbar-smaller progressbar" data-value="58">
                                                    <div class="progressbar-value bg-azure"></div>
                                                </div>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#" title="">
                                                <div class="progress-title">Code optimizations <b>97%</b></div>
                                                <div class="progressbar-smaller progressbar" data-value="97">
                                                    <div class="progressbar-value bg-yellow"></div>
                                                </div>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                                <div class="pad5A button-pane button-pane-alt text-center"><a href="#" class="btn display-block font-normal hover-green" title="View all notifications">View all notifications</a></div>
                            </div>
                        </div>
                        <div class="dropdown"><a href="#" data-toggle="dropdown" data-placement="left" class="popover-button-header tooltip-button" title="Example menu"><span class="bs-badge badge-absolute bg-green">9</span> <i class="glyph-icon icon-linecons-cog"></i></a>
                            <div class="dropdown-menu float-right">
                                <div class="box-sm">
                                    <div class="pad5T pad10B pad10L pad10R dashboard-buttons clearfix"><a href="#" class="btn vertical-button hover-blue-alt" title=""><span class="glyph-icon icon-separator-vertical pad0A medium"><i class="glyph-icon icon-dashboard opacity-80 font-size-20"></i></span> Dashboard</a> <a href="#" class="btn vertical-button hover-green" title=""><span class="glyph-icon icon-separator-vertical pad0A medium"><i class="glyph-icon icon-tags opacity-80 font-size-20"></i></span> Widgets</a> <a href="#" class="btn vertical-button hover-orange" title=""><span class="glyph-icon icon-separator-vertical pad0A medium"><i class="glyph-icon icon-fire opacity-80 font-size-20"></i></span> Tables</a> <a href="#" class="btn vertical-button hover-orange" title=""><span class="glyph-icon icon-separator-vertical pad0A medium"><i class="glyph-icon icon-bar-chart-o opacity-80 font-size-20"></i></span> Charts</a> <a href="#" class="btn vertical-button hover-purple" title=""><span class="glyph-icon icon-separator-vertical pad0A medium"><i class="glyph-icon icon-laptop opacity-80 font-size-20"></i></span> Buttons</a> <a href="#" class="btn vertical-button hover-azure" title=""><span class="glyph-icon icon-separator-vertical pad0A medium"><i class="glyph-icon icon-code opacity-80 font-size-20"></i></span> Panels</a></div>
                                    <div class="bg-gray text-transform-upr font-size-12 font-gray-dark pad10A">Dashboard menu</div>
                                    <div class="pad5T pad10B pad10L pad10R dashboard-buttons clearfix"><a href="#" class="btn vertical-button remove-border btn-info" title=""><span class="glyph-icon icon-separator-vertical pad0A medium"><i class="glyph-icon icon-dashboard opacity-80 font-size-20"></i></span> Dashboard</a> <a href="#" class="btn vertical-button remove-border btn-danger" title=""><span class="glyph-icon icon-separator-vertical pad0A medium"><i class="glyph-icon icon-tags opacity-80 font-size-20"></i></span> Widgets</a> <a href="#" class="btn vertical-button remove-border btn-purple" title=""><span class="glyph-icon icon-separator-vertical pad0A medium"><i class="glyph-icon icon-fire opacity-80 font-size-20"></i></span> Tables</a> <a href="#" class="btn vertical-button remove-border btn-azure" title=""><span class="glyph-icon icon-separator-vertical pad0A medium"><i class="glyph-icon icon-bar-chart-o opacity-80 font-size-20"></i></span> Charts</a> <a href="#" class="btn vertical-button remove-border btn-yellow" title=""><span class="glyph-icon icon-separator-vertical pad0A medium"><i class="glyph-icon icon-laptop opacity-80 font-size-20"></i></span> Buttons</a> <a href="#" class="btn vertical-button remove-border btn-warning" title=""><span class="glyph-icon icon-separator-vertical pad0A medium"><i class="glyph-icon icon-code opacity-80 font-size-20"></i></span> Panels</a></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div id="page-sidebar" class="rm-transition">
                <div id="page-sidebar-wrapper">
                    <div id="sidebar-top">
                        <ul class="nav nav-pills nav-justified">
                            <li class="active"><a href="#tab-example-1" data-toggle="tab"><i class="glyph-icon icon-users"></i></a></li>
                            <li><a href="#tab-example-2" data-toggle="tab"><i class="glyph-icon icon-bell"></i></a></li>
                            <li><a href="#tab-example-3" data-toggle="tab"><span class="small-badge bg-red"></span><i class="glyph-icon icon-bar-chart-o"></i></a></li>
                            <li><a href="#tab-example-4" data-toggle="tab"><i class="glyph-icon icon-cogs"></i></a></li>
                        </ul>
                        <div class="tab-content">
                            <div class="tab-pane clearfix fade active in" id="tab-example-1">
                                <div class="user-profile-sm clearfix"><img width="45" class="img-rounded" src="{{ asset('user/images/'.Auth::user()->username.'.png') }}" alt="">
                                    <div class="user-welcome">Welcome back, <b>{{Auth::user()->name}}</b></div><a href="#" title="" class="btn btn-sm btn-black-opacity-alt"><i class="glyph-icon icon-cog"></i></a></div>
                            </div>
                            <div class="tab-pane clearfix fade" id="tab-example-2">
                                <ul class="notifications-box notifications-box-alt">
                                    <li><span class="bg-purple icon-notification glyph-icon icon-users"></span> <span class="notification-text">This is an error notification</span>
                                        <div class="notification-time">a few seconds ago <span class="glyph-icon icon-clock-o"></span></div><a href="#" class="notification-btn btn btn-xs btn-black tooltip-button" data-placement="right" title="View details"><i class="glyph-icon icon-arrow-right"></i></a></li>
                                    <li><span class="bg-warning icon-notification glyph-icon icon-ticket"></span> <span class="notification-text">This is a warning notification</span>
                                        <div class="notification-time"><b>15</b> minutes ago <span class="glyph-icon icon-clock-o"></span></div><a href="#" class="notification-btn btn btn-xs btn-black tooltip-button" data-placement="right" title="View details"><i class="glyph-icon icon-arrow-right"></i></a></li>
                                    <li><span class="bg-green icon-notification glyph-icon icon-random"></span> <span class="notification-text font-green">A success message example.</span>
                                        <div class="notification-time"><b>2 hours</b> ago <span class="glyph-icon icon-clock-o"></span></div><a href="#" class="notification-btn btn btn-xs btn-black tooltip-button" data-placement="right" title="View details"><i class="glyph-icon icon-arrow-right"></i></a></li>
                                </ul>
                            </div>
                            <div class="tab-pane clearfix fade" id="tab-example-3">
                                <div class="info-box remove-border">
                                    <div class="chart-icon">
                                        <div class="infobox-sparkline"></div>
                                    </div><b>Exchange rate</b> <span class="stats"><i class="glyph-icon icon-chevron-down font-red"></i> 43.79 <span class="font-green">+0.9</span></span>
                                </div>
                            </div>
                            <div class="tab-pane clearfix fade" id="tab-example-4">
                                <div class="complete-user-profile">
                                    <h4>Complete your profile</h4>
                                    <div class="progressbar-small progressbar" data-value="75">
                                        <div class="progressbar-value bg-azure tooltip-button" title="" data-original-title="45%"></div>
                                    </div><b>Next step:</b> <a href="#" title="Verify identity">Verify identity</a></div>
                            </div>
                        </div>
                    </div>
                    <div id="sidebar-menu">
                        <ul>
                            <li><a href="{{ url('dashboard1') }}" title="Dashboard"><i class="glyph-icon icon-linecons-tv"></i> <span>Dashboard</span></a></li>
                          <!--  <li><a href="#" title="Presentation websites"><i class="glyph-icon icon-linecons-cloud"></i> <span>Frontend presentation</span> <span class="bs-label label-success">32</span></a>
                                <ul>
                                    <li class="header"><span>Homepage</span></li>
                                    <li><a href="featured-area-1.html" title="Hero area 1"><span>Hero area 1</span></a></li>
                                    <li><a href="featured-area-2.html" title="Hero area 2"><span>Hero area 2</span></a></li>
                                    <li><a href="featured-area-3.html" title="Hero area 3"><span>Hero area 3</span></a></li>
                                    <li><a href="featured-area-4.html" title="Hero area 4"><span>Hero area 4</span></a></li>
                                    <li><a href="featured-area-5.html" title="Hero area 5"><span>Hero area 5</span></a></li>
                                    <li><a href="featured-area-6.html" title="Hero area 6"><span>Hero area 6</span></a></li>
                                    <li><a href="featured-area-7.html" title="Hero area 7"><span>Hero area 7</span></a></li>
                                    <li><a href="featured-area-8.html" title="Hero area 8"><span>Hero area 8</span></a></li>
                                    <li><a href="featured-area-9.html" title="Hero area 9"><span>Hero area 9</span></a></li>
                                    <li><a href="featured-area-10.html" title="Hero area 10"><span>Hero area 10</span></a></li>
                                    <li><a href="featured-area-11.html" title="Hero area 11"><span>Hero area 11</span></a></li>
                                    <li><a href="featured-area-12.html" title="Hero area 12"><span>Hero area 12</span></a></li>
                                    <li><a href="featured-area-13.html" title="Hero area 13"><span>Hero area 13</span></a></li>
                                    <li><a href="featured-area-14.html" title="Hero area 14"><span>Hero area 14</span></a></li>
                                    <li><a href="featured-area-15.html" title="Hero area 15"><span>Hero area 15</span></a></li>
                                    <li><a href="featured-area-16.html" title="Hero area 16"><span>Hero area 16</span></a></li>
                                    <li class="header"><span>Widgets</span></li>
                                    <li><a href="carousels.html" title="Carousels"><span>Carousels</span></a></li>
                                    <li><a href="slideshows.html" title="Slideshows"><span>Slideshows</span></a></li>
                                    <li class="header"><span>Portfolios</span></li>
                                    <li><a href="portfolio-2col.html" title="Portfolio 2 columns"><span>2 columns</span></a></li>
                                    <li><a href="portfolio-3col.html" title="Portfolio 2 columns"><span>3 columns</span></a></li>
                                    <li><a href="portfolio-4col.html" title="Portfolio 4 columns"><span>4 columns</span></a></li>
                                    <li><a href="portfolio-6col.html" title="Portfolio 6 columns"><span>6 columns</span></a></li>
                                    <li><a href="portfolio-fw1.html" title="Portfolio full width"><span>Full width</span></a></li>
                                    <li><a href="portfolio-fw2.html" title="Portfolio full width alternate"><span>Full width alternate</span></a></li>
                                    <li><a href="portfolio-masonry.html" title="Portfolio masonry"><span>Full masonry</span></a></li>
                                    <li class="header"><span>Elements</span></li>
                                    <li><a href="icon-boxes.html" title="Icon boxes"><span>Icon boxes</span></a></li>
                                    <li><a href="page-titles.html" title="Page titles"><span>Page titles</span></a></li>
                                    <li><a href="pricing-table.html" title="Pricing tables"><span>Pricing tables</span></a></li>
                                    <li><a href="testimonials.html" title="Testimonials"><span>Testimonials</span></a></li>
                                    <li class="header"><span>Footers</span></li>
                                    <li><a href="footer-1.html" title="Simple black footer"><span>Simple black footer</span></a></li>
                                    <li><a href="footer-2.html" title="Simple blue footer"><span>Simple blue footer</span></a></li>
                                    <li><a href="footer-3.html" title="Grid footer 1"><span>Grid footer 1</span></a></li>
                                    <li><a href="footer-4.html" title="Grid footer 2"><span>Grid footer 2</span></a></li>
                                    <li class="header"><span>Headers</span></li>
                                    <li><a href="header-1.html" title=""><span>White transparent header</span></a></li>
                                    <li><a href="header-2.html" title=""><span>Alternate dropdown menu</span></a></li>
                                    <li><a href="header-3.html" title=""><span>White header</span></a></li>
                                    <li><a href="header-4.html" title=""><span>Mega dropdown menu</span></a></li>
                                    <li><a href="header-5.html" title=""><span>Blue header</span></a></li>
                                    <li><a href="header-6.html" title=""><span>Transparent header</span></a></li>
                                </ul>
                            </li>
                            <li class="divider"></li>
                            <li><a href="#" title="Applications"><i class="glyph-icon icon-linecons-shop"></i> <span>Applications</span></a>
                                <ul>
                                    <li class="header"><span>Mailbox</span></li>
                                    <li><a href="mailbox-inbox.html" title="Inbox"><span>Inbox</span></a></li>
                                    <li><a href="mailbox-inbox-alt.html" title="Inbox alternate"><span>Inbox alternate</span></a></li>
                                    <li><a href="mailbox-compose.html" title="Compose message"><span>Compose message</span></a></li>
                                    <li><a href="mailbox-message.html" title="View message"><span>View message</span></a></li>
                                </ul>
                                <ul>
                                    <li class="header"><span>Others</span></li>
                                    <li><a href="chat.html" title="Chat"><span>Chat</span></a></li>
                                    <li><a href="todo.html" title="Chat"><span>Checklist</span></a></li>
                                </ul>
                            </li>
                            <li><a href="#" title="Layouts"><i class="glyph-icon icon-linecons-desktop"></i> <span>Layouts</span></a>
                                <ul>
                                    <li class="header"><span>Pages</span></li>
                                    <li><a href="page-blank.html" title="Page blank"><span>Page blank</span></a></li>
                                    <li><a href="page-container.html" title="Page with container"><span>Page with container</span></a></li>
                                    <li><a href="page-single-wrapper.html" title="Page with single wrapper"><span>Page with single wrapper</span></a></li>
                                    <li><a href="page-multiple-wrappers.html" title="Page with multiple wrappers"><span>Page with multiple wrappers</span></a></li>
                                    <li><a href="page-scrollbar.html" title="Page with custom scrollbar"><span>Page with custom scrollbar</span></a></li>
                                    <li><a href="page-tabs.html" title="Page with tabs navigation"><span>Page with tabs navigation</span></a></li>
                                    <li class="header"><span>Navigation</span></li>
                                    <li><a href="navigation-menu-horizontal.html" title="Horizontal menu"><span>Horizontal menu</span></a></li>
                                    <li><a href="navigation-menu-horizontal-centered.html" title="Centered horizontal menu"><span>Centered horizontal menu</span></a></li>
                                    <li><a href="navigation-menu-collapsed.html" title="Collapsed horizontal menu"><span>Collapsed horizontal menu</span></a></li>
                                    <li class="header"><span>Breadcrumbs</span></li>
                                    <li><a href="breadcrumb-simple.html" title="Breadcrumb menu"><span>Breadcrumb menu</span></a></li>
                                    <li><a href="breadcrumb-sidebar-collapsed.html" title="Breadcrumb with collapsed menu"><span>Breadcrumb with collapsed menu</span></a></li>
                                </ul>
                            </li>
                            <li class="divider"></li>
                            <li><a href="#" title="Extra pages"><i class="glyph-icon icon-linecons-params"></i> <span>Extra pages</span></a>
                                <ul>
                                    <li class="header"><span>Dashboards</span></li>
                                    <li><a href="index.html" title="Dashboard example 1"><span>Dashboard example 1</span></a></li>
                                    <li><a href="dashboard-2.html" title="Dashboard example 2"><span>Dashboard example 2</span></a></li>
                                    <li><a href="dashboard-3.html" title="Dashboard example 3"><span>Dashboard example 3</span></a></li>
                                    <li><a href="#" title="Dashboard example 4"><span>Dashboard example 4</span><span class="bs-label label-warning">SOON</span></a></li>
                                    <li class="header"><span>Others</span></li>
                                    <li><a href="helper-classes.html" title="Helper classes"><span>Helper classes</span></a></li>
                                    <li><a href="slidebars.html" title="Slidebars panels"><span>Slidebars panels</span></a></li>
                                    <li><a href="animations.html" title="Animations"><span>Animations</span></a></li>
                                    <li><a href="page-transitions.html" title="Page transitions"><span>Page transitions</span></a></li>
                                    <li class="header"><span>Lockscreens</span></li>
                                    <li><a href="lockscreen-page-1.html" target="_blank" title="Lockscreen example 1"><span>Lockscreen example 1</span></a></li>
                                    <li><a href="lockscreen-page-2.html" target="_blank" title="Lockscreen example 2"><span>Lockscreen example 2</span></a></li>
                                    <li><a href="lockscreen-page-3.html" target="_blank" title="Lockscreen example 3"><span>Lockscreen example 3</span></a></li>
                                    <li class="header"><span>Login pages</span></li>
                                    <li><a href="login-page-1.html" target="_blank" title="Login example 1"><span>Login example 1</span></a></li>
                                    <li><a href="login-page-2.html" target="_blank" title="Login example 2"><span>Login example 2</span></a></li>
                                    <li><a href="login-page-3.html" target="_blank" title="Login example 3"><span>Login example 3</span></a></li>
                                    <li><a href="login-page-4.html" target="_blank" title="Login example 4"><span>Login example 4</span></a></li>
                                    <li><a href="login-page-5.html" target="_blank" title="Login example 5"><span>Login example 5</span></a></li>
                                    <li class="header"><span>Server response</span></li>
                                    <li><a href="server-page-1.html" target="_blank" title="Server error example 1"><span>Server error example 1</span></a></li>
                                    <li><a href="server-page-2.html" target="_blank" title="Server error example 2"><span>Server error example 2</span></a></li>
                                    <li><a href="server-page-3.html" target="_blank" title="Server error example 3"><span>Server error example 3</span></a></li>
                                    <li><a href="server-page-4.html" target="_blank" title="Server error example 4"><span>Server error example 4</span></a></li>
                                </ul>
                            </li>
                            <li class="divider"></li>
                            <li><a href="#" title="Widgets"><i class="glyph-icon icon-linecons-cog"></i> <span>Widgets</span></a>
                                <ul>
                                    <li><a href="accordions.html" title="Accordions"><span>Accordions</span></a></li>
                                    <li><a href="bs-carousel.html" title="Bootstrap carousel"><span>Bootstrap carousel</span></a></li>
                                    <li><a href="bs-datepicker.html" title="Bootstrap datepicker"><span>Bootstrap datepicker</span></a></li>
                                    <li><a href="calendar.html" title="Calendar"><span>Calendar</span></a></li>
                                    <li><a href="collapsable.html" title="Collapsable"><span>Collapsable</span></a></li>
                                    <li><a href="colorpicker.html" title="Colorpicker"><span>Colorpicker</span></a></li>
                                    <li><a href="custom-scrollbars.html" title="Custom scrollbars"><span>Custom scrollbars</span></a></li>
                                    <li><a href="dialogs.html" title="Dialogs"><span>Dialogs</span></a></li>
                                    <li><a href="dynamic-tables.html" title="Dynamic tables"><span>Dynamic tables</span></a></li>
                                    <li><a href="jgrowl-notifications.html" title="JGrowl notifications"><span>JGrowl notifications</span></a></li>
                                    <li><a href="jqueryui-datepicker.html" title="jQueryUI datepicker"><span>jQueryUI datepicker</span></a></li>
                                    <li><a href="lazyload.html" title="Images preloader"><span>Images preloader</span></a></li>
                                    <li><a href="loading-bar.html" title="Loading bar"><span>Loading bar</span></a></li>
                                    <li><a href="modals.html" title="Modals"><span>Modals</span></a></li>
                                    <li><a href="noty-notifications.html" title="Noty notifications"><span>Noty notifications</span></a></li>
                                    <li><a href="overlays.html" title="Overlays"><span>Overlays</span></a></li>
                                    <li><a href="popovers.html" title="Popovers"><span>Popovers</span></a></li>
                                    <li><a href="progress-bars.html" title="Progress bars"><span>Progress bars</span></a></li>
                                    <li><a href="sliders.html" title="Sliders"><span>Sliders</span></a></li>
                                    <li><a href="sortable.html" title="Sortable elements"><span>Sortable elements</span></a></li>
                                    <li><a href="tabs.html" title="Tabs"><span>Tabs</span></a></li>
                                    <li><a href="timepicker.html" title="Timepicker"><span>Timepicker</span></a></li>
                                    <li><a href="tooltips.html" title="Tooltips"><span>Tooltips</span></a></li>
                                </ul>
                            </li>
                            <li><a href="#" title="Elements"><i class="glyph-icon icon-linecons-beaker"></i> <span>Elements</span></a>
                                <ul>
                                    <li><a href="badges.html" title="Badges"><span>Badges</span></a></li>
                                    <li><a href="buttons.html" title="Buttons"><span>Buttons</span></a></li>
                                    <li><a href="content-boxes.html" title="Content boxes"><span>Content boxes</span></a></li>
                                    <li><a href="dashboard-boxes.html" title="Dashboard boxes"><span>Dashboard boxes</span></a></li>
                                    <li><a href="icons.html" title="Icons"><span>Icons</span></a></li>
                                    <li><a href="images.html" title="Images"><span>Images</span></a></li>
                                    <li><a href="labels.html" title="Labels"><span>Labels</span></a></li>
                                    <li><a href="navigation-menus.html" title="Menus"><span>Menus</span></a></li>
                                    <li><a href="panel-boxes.html" title="Panel boxes"><span>Panel boxes</span></a></li>
                                    <li><a href="plain-tables.html" title="Tables"><span>Tables</span></a></li>
                                    <li><a href="response-messages.html" title="Response messages"><span>Response messages</span></a></li>
                                    <li><a href="ribbons.html" title="Ribbons"><span>Ribbons</span></a></li>
                                    <li><a href="scrollable-boxes.html" title="Scrollable boxes"><span>Scrollable boxes</span></a></li>
                                    <li><a href="social-boxes.html" title="Social boxes"><span>Social boxes</span></a></li>
                                    <li><a href="spinners.html" title="Loading spinners"><span>Loading spinners</span></a></li>
                                    <li><a href="tile-boxes.html" title="Tile boxes"><span>Tile boxes</span></a></li>
                                    <li><a href="timeline.html" title="Timeline"><span>Timeline</span></a></li>
                                </ul>
                            </li>-->
                            <li><a href="#" title="Forms"><i class="glyph-icon icon-linecons-doc"></i> <span>Report</span> <span class="small-badge bg-primary"></span></a>
                                <ul>
                                    <li><a href="{{ url('posts') }}" title="Forms validation"><span>All Data</span></a></li>
                                    <li><a href="{{ url('conversions') }}" title="Forms validation"><span>Conversions</span></a></li>
                                    {{-- <li><a href="dropzone-uploader.html" title="Dropzone uploader"><span>Dropzone uploader</span></a></li>
                                    <li><a href="forms-elements.html" title="Forms elements"><span>Forms elements</span></a></li>
                                    <li><a href="image-crop.html" title="Image crop"><span>Image crop</span></a></li>
                                    <li><a href="input-masks.html" title="Input masks"><span>Input masks</span></a></li>
                                    <li><a href="knobs.html" title="Input knobs"><span>Input knobs</span></a></li>
                                    <li><a href="multi-upload.html" title="Multi uploader"><span>Multi uploader</span></a></li>
                                    <li><a href="wizard.html" title="Wizard"><span>Wizard</span></a></li>
                                    <li><a href="wysiwyg-editor.html" title="WYSIWYG Editors"><span>WYSIWYG Editors</span></a></li> --}}
                                </ul>
                            </li>
                        <!--    <li><a href="#" title="Maps"><i class="glyph-icon icon-linecons-location"></i> <span>Maps</span> <span class="bs-label label-info">3</span></a>
                                <ul>
                                    <li><a href="google-maps.html" title="Google maps"><span>Google maps</span></a></li>
                                    <li><a href="vector-maps.html" title="Vector maps"><span>Vector maps</span></a></li>
                                </ul>
                            </li>
                            <li><a href="#" title="Charts"><i class="glyph-icon icon-linecons-calendar"></i> <span>Charts</span></a>
                                <ul>
                                    <li><a href="justgage.html" title="JustGage"><span>JustGage</span></a></li>
                                    <li><a href="morris-charts.html" title="Morris charts"><span>Morris charts</span></a></li>
                                    <li><a href="pie-gages.html" title="PieGages charts"><span>PieGages charts</span></a></li>
                                    <li><a href="sparklines.html" title="Sparklines charts"><span>Sparklines charts</span></a></li>
                                    <li><a href="xcharts.html" title="xCharts"><span>xCharts</span></a></li>
                                </ul>
                            </li>-->
                        </ul>
</div>
                    <div class="divider"></div>
                    <!--<div id="sidebar-files" class="mobile-hidden">
                        <div class="divider-header">Cloud downloads</div>
                        <ul class="files-box">
                            <li><i class="files-icon glyph-icon font-red icon-file-archive-o"></i>
                                <div class="files-content"><b>blog_export.zip</b>
                                    <div class="files-date"><i class="glyph-icon icon-clock-o"></i> added on <b>22.10.2014</b></div>
                                </div>
                                <div class="files-buttons"><a href="#" class="btn btn-xs hover-info tooltip-button" data-placement="right" title="Download"><i class="glyph-icon icon-cloud-download"></i></a> <a href="#" class="btn btn-xs hover-danger tooltip-button" data-placement="right" title="Delete"><i class="glyph-icon icon-times"></i></a></div>
                            </li>
                            <li class="divider"></li>
                            <li><i class="files-icon glyph-icon icon-file-code-o"></i>
                                <div class="files-content"><b>homepage-test.html</b>
                                    <div class="files-date"><i class="glyph-icon icon-clock-o"></i> added <b>19.10.2014</b></div>
                                </div>
                                <div class="files-buttons"><a href="#" class="btn btn-xs hover-info tooltip-button" data-placement="right" title="Download"><i class="glyph-icon icon-cloud-download"></i></a> <a href="#" class="btn btn-xs hover-danger tooltip-button" data-placement="right" title="Delete"><i class="glyph-icon icon-times"></i></a></div>
                            </li>
                            <li class="divider"></li>
                            <li><i class="files-icon glyph-icon font-yellow icon-file-image-o"></i>
                                <div class="files-content"><b>monthlyReport.jpg</b>
                                    <div class="files-date"><i class="glyph-icon icon-clock-o"></i> added on <b>10.9.2014</b></div>
                                </div>
                                <div class="files-buttons"><a href="#" class="btn btn-xs hover-info tooltip-button" data-placement="right" title="Download"><i class="glyph-icon icon-cloud-download"></i></a> <a href="#" class="btn btn-xs hover-danger tooltip-button" data-placement="right" title="Delete"><i class="glyph-icon icon-times"></i></a></div>
                            </li>
                            <li class="divider"></li>
                            <li><i class="files-icon glyph-icon font-green icon-file-word-o"></i>
                                <div class="files-content"><b>new_presentation.doc</b>
                                    <div class="files-date"><i class="glyph-icon icon-clock-o"></i> added on <b>5.9.2014</b></div>
                                </div>
                                <div class="files-buttons"><a href="#" class="btn btn-xs hover-info tooltip-button" data-placement="right" title="Download"><i class="glyph-icon icon-cloud-download"></i></a> <a href="#" class="btn btn-xs hover-danger tooltip-button" data-placement="right" title="Delete"><i class="glyph-icon icon-times"></i></a></div>
                            </li>
                        </ul>
                    </div>-->

                </div>
            </div>
            <div id="page-content-wrapper" class="rm-transition">
                <div id="page-nav">
                    <div class="dropdown sp-btn"><a href="#" class="btn btn-primary popover-button" data-toggle="dropdown"><i class="glyph-icon icon-picture-o opacity-80"></i> <i class="glyph-icon icon-caret-down"></i></a>
                        <div class="dropdown-menu">
                            <div class="box-sm text-center">
                                <div class="popover-title display-block clearfix pad10A">Layout color</div>
                                <div class="pad10A clearfix change-layout-theme"><a href="javascript:;" class="choose-theme" framework-color="default" layout-color="light" title="Light"><span style="background: #fafafa"></span></a> <a href="javascript:;" class="choose-theme" framework-color="default" layout-color="default" title="Default"><span style="background: #232323"></span></a></div>
                                <div class="popover-title display-block clearfix pad10A">Framework color</div>
                                <div class="pad10A clearfix change-layout-theme"><a href="javascript:;" class="choose-theme" framework-color="default" layout-color="light" title="Default"><span style="background: #f87500"></span></a> <a href="javascript:;" class="choose-theme" framework-color="blue" layout-color="default" title="Blue"><span style="background: #0084ff"></span></a> <a href="javascript:;" class="choose-theme" framework-color="green" layout-color="light" title="Green"><span style="background: #36be00"></span></a></div>
                            </div>
                        </div>-



                    </div>

                </div>


                
                <script type="text/javascript" src="../assets-minified/js-core/d3.js"></script>

                @yield('content')

            </div>
        </div>
    </div>
    <link rel="stylesheet" type="text/css" href="../assets-minified/demo-widgets.css">
    <script type="text/javascript" src="../assets-minified/demo-widgets.js"></script>
</body>

</html>