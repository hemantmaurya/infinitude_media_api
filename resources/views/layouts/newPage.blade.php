@extends('layouts.supina')

@section('css')
 
 @endsection
@section('content')
  <div id="page-content">
                    <div class="row">
                        <div class="col-md-3">
                            <div class="tile-box tile-box-alt bg-blue">
                                <div class="tile-header">Sent emails</div>
                                <div class="tile-content-wrapper"><i class="glyph-icon icon-inbox"></i>
                                    <div class="tile-content"><i class="glyph-icon icon-caret-up font-red"></i> 185</div><small><i class="glyph-icon icon-caret-up"></i> +7,6% email list penetration</small></div><a href="#" title="" class="tile-footer">view details <i class="glyph-icon icon-arrow-right"></i></a></div>
                        </div>
                        <div class="col-md-3">
                            <div class="tile-box tile-box-alt bg-blue">
                                <div class="tile-header">Sent emails</div>
                                <div class="tile-content-wrapper"><i class="glyph-icon icon-inbox"></i>
                                    <div class="tile-content"><i class="glyph-icon icon-caret-up font-red"></i> 185</div><small><i class="glyph-icon icon-caret-up"></i> +7,6% email list penetration</small></div><a href="#" title="" class="tile-footer">view details <i class="glyph-icon icon-arrow-right"></i></a></div>
                        </div>
                        <div class="col-md-3">
                            <div class="tile-box tile-box-alt bg-green">
                                <div class="tile-header">Cloud downloads</div>
                                <div class="tile-content-wrapper"><i class="glyph-icon icon-cloud-download"></i>
                                    <div class="tile-content"><i class="glyph-icon icon-arrow-up font-green"></i> 6.52 <span>k</span></div><small>12% have started the download</small></div><a href="#" title="" class="tile-footer">view details <i class="glyph-icon icon-arrow-right"></i></a></div>
                        </div>
                        <div class="col-md-3">
                            <div class="tile-box tile-box-alt bg-red" title="">
                                <div class="tile-header">Sales from your last visit</div>
                                <div class="tile-content-wrapper"><i class="glyph-icon icon-credit-card"></i>
                                    <div class="tile-content">1.2<span>k</span></div><small><i class="glyph-icon icon-caret-up"></i> $272 daily revenue from all sales</small></div><a href="#" title="" class="tile-footer">view details <i class="glyph-icon icon-arrow-right"></i></a></div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-8">
                            <div class="content-box border-top border-blue-alt mrg25B">
                                <h3 class="content-box-header">Server statistics <small>(The Ultimate Admin Template)</small><div class="btn-group btn-group-sm float-right" data-toggle="buttons"><a href="#" class="btn btn-default"><input name="radio-toggle-1" type="radio"> Weekly</a> <a href="#" class="btn btn-default"><input name="radio-toggle-2" type="radio"> Monthly</a> <a href="#" class="btn btn-default"><input name="radio-toggle-3" type="radio"> Yearly</a></div></h3>
                                <div class="content-box-wrapper">
                                    <figure style="width: 95%; margin: 0 auto; display: block; height: 300px" id="chart-example"></figure>
                                </div>
                            </div>
                            <div class="panel-layout mrg25T">
                                <div class="panel-box col-xs-6">
                                    <div class="panel-content bg-white">
                                        <canvas id="icon-cloud" width="80" height="80"></canvas>
                                    </div>
                                    <div class="panel-content bg-black">
                                        <div class="center-vertical">
                                            <ul class="center-content nav nav-justified">
                                                <li>
                                                    <h4><i class="glyph-icon font-green opacity-80 icon-chevron-down"></i> 7 º</h4>
                                                    <p class="opacity-80 text-transform-upr font-size-11 mrg5T">Low</p>
                                                </li>
                                                <li>
                                                    <h4><i class="glyph-icon font-red opacity-80 icon-chevron-up"></i> 21 º</h4>
                                                    <p class="opacity-80 text-transform-upr font-size-11 mrg5T">High</p>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="panel-box col-xs-6 bg-blue-alt">
                                    <div class="panel-content">
                                        <h3>Bucharest</h3>
                                        <h4 class="opacity-60">Romania</h4></div>
                                </div>
                            </div>
                            <div class="content-box mrg25T mrg25B">
                                <h3 class="content-box-header content-box-header-alt bg-white"><span class="icon-separator"><i class="glyph-icon icon-cog"></i></span><div class="header-wrapper">Content title <small>Example header title description</small></div><div class="header-buttons"><a href="#" class="btn btn-sm btn-link font-white" title="">Link</a> <a href="#" class="btn btn-sm btn-default no-border" title="">Small</a></div></h3>
                                <div class="content-box-wrapper">
                                    <div class="timeline-box mrg25A">
                                        <div class="tl-row">
                                            <div class="tl-item">
                                                <div class="tl-icon bg-green"><i class="glyph-icon icon-cog"></i></div>
                                                <div class="tl-panel">3:21 PM</div>
                                                <div class="popover left">
                                                    <div class="arrow"></div>
                                                    <div class="popover-content">
                                                        <div class="tl-label bs-label label-success">Meeting</div>
                                                        <p class="tl-content">Quisque volutpat mattis eros. Nullam malesuada erat ut turpis.</p>
                                                        <div class="tl-time"><i class="glyph-icon icon-clock-o"></i> a few seconds ago</div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="tl-row">
                                            <div class="tl-item float-right">
                                                <div class="tl-icon bg-black"><i class="glyph-icon icon-cog"></i></div>
                                                <div class="tl-panel">3:21 PM</div>
                                                <div class="popover right">
                                                    <div class="arrow"></div>
                                                    <div class="popover-content">
                                                        <div class="tl-label bs-label label-info">Appointment</div>
                                                        <p class="tl-content">Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Donec odio.</p>
                                                        <div class="tl-time"><i class="glyph-icon icon-clock-o"></i> a few seconds ago</div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="tl-row">
                                            <div class="tl-item">
                                                <div class="tl-icon bg-green"><i class="glyph-icon icon-cog"></i></div>
                                                <div class="tl-panel">3:21 PM</div>
                                                <div class="popover left">
                                                    <div class="arrow"></div>
                                                    <div class="popover-content">
                                                        <div class="tl-label bs-label label-success">Meeting</div>
                                                        <p class="tl-content">Quisque volutpat mattis eros. Nullam malesuada erat ut turpis.</p>
                                                        <div class="tl-time"><i class="glyph-icon icon-clock-o"></i> a few seconds ago</div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="tl-row demo-margin">
                                            <div class="tl-item float-right">
                                                <div class="tl-icon bg-black"><i class="glyph-icon icon-cog"></i></div>
                                                <div class="tl-panel">3:21 PM</div>
                                                <div class="popover right">
                                                    <div class="arrow"></div>
                                                    <div class="popover-content">
                                                        <div class="tl-label bs-label label-info">Appointment</div>
                                                        <p class="tl-content">Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Donec odio.</p>
                                                        <div class="tl-time"><i class="glyph-icon icon-clock-o"></i> a few seconds ago</div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="panel-layout">
                                <div class="panel-box col-xs-4 bg-green">
                                    <div class="panel-content">
                                        <h4>Overview</h4>
                                        <p class="opacity-60">Example panel box</p>
                                    </div>
                                </div>
                                <div class="panel-box col-xs-8">
                                    <div class="panel-content bg-black">
                                        <div class="sparkline-big">183,579,180,311,240,180,311,450,302,370,210,610</div>
                                    </div>
                                    <div class="panel-content bg-white">
                                        <div class="center-vertical">
                                            <ul class="center-content nav nav-justified">
                                                <li>
                                                    <h4 class="font-green">+$39,45</h4>
                                                    <p class="font-gray">Overdue orders</p>
                                                </li>
                                                <li>
                                                    <h4><i class="glyph-icon opacity-60 icon-caret-up"></i> 217</h4>
                                                    <p class="font-gray">Pending orders</p>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="panel-layout">
                                        <div class="panel-box">
                                            <div class="panel-content bg-facebook"><i class="glyph-icon font-size-35 icon-facebook"></i></div>
                                            <div class="panel-content pad15A bg-white">
                                                <div class="center-vertical">
                                                    <ul class="center-content list-group list-group-separator row mrg0A">
                                                        <li class="col-md-6"><b>1,456</b>
                                                            <p class="font-gray">Friends</p>
                                                        </li>
                                                        <li class="col-md-6"><b>593</b>
                                                            <p class="font-gray">Likes</p>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="panel-layout">
                                        <div class="panel-box">
                                            <div class="panel-content bg-twitter"><i class="glyph-icon font-size-35 icon-twitter"></i></div>
                                            <div class="panel-content pad15A bg-white">
                                                <div class="center-vertical">
                                                    <ul class="center-content list-group list-group-separator row mrg0A">
                                                        <li class="col-md-6"><b>356</b>
                                                            <p class="font-gray">Followers</p>
                                                        </li>
                                                        <li class="col-md-6"><b>981</b>
                                                            <p class="font-gray">Tweets</p>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="panel-layout">
                                        <div class="panel-box">
                                            <div class="panel-content bg-white">
                                                <div class=""><img src="../assets-minified/dummy-images/people/testimonial3.jpg" alt="" style="width: 60px" class="img-bordered border-red img-circle mrg10B">
                                                    <h5 class="font-bold">Johnny Anderson</h5></div>
                                            </div>
                                            <div class="panel-content pad15A bg-white">
                                                <div class="center-vertical">
                                                    <ul class="center-content list-group list-group-separator row mrg0A">
                                                        <li class="col-md-6"><a href="#" title=""><i class="glyph-icon opacity-60 icon-inbox"></i><p class="mrg5T">Inbox</p></a></li>
                                                        <li class="col-md-6"><a href="#" title=""><i class="glyph-icon opacity-60 icon-group"></i><p class="mrg5T">Groups</p></a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="content-box bg-white post-box">
                                        <textarea name="" class="textarea-autosize" id="" placeholder="What are you doing right now?"></textarea>
                                        <div class="button-pane"><a href="#" class="btn btn-md btn-link hover-white" title=""><i class="glyph-icon icon-volume-down"></i></a> <a href="#" class="btn btn-md btn-link hover-white" title=""><i class="glyph-icon icon-video-camera"></i></a> <a href="#" class="btn btn-md btn-link hover-white" title=""><i class="glyph-icon icon-microphone"></i></a> <a href="#" class="btn btn-md btn-link hover-white" title=""><i class="glyph-icon icon-picture-o"></i></a> <a href="#" class="btn btn-md btn-post float-right btn-success" title="">Share it!</a></div>
                                    </div>
                                    <div class="panel-layout">
                                        <div class="panel-box">
                                            <div class="panel-content image-box">
                                                <div class="corner-ribbon"><a href="#" class="btn-success" title=""><i class="glyph-icon icon-comment-o"></i></a></div>
                                                <div class="image-content font-white">
                                                    <div class="center-vertical">
                                                        <div class="center-content">
                                                            <div class="sparkline-big">183,579,180,311,240,180,311,450,302,370,210,610</div>
                                                        </div>
                                                    </div>
                                                </div><img src="../assets-minified/dummy-images/455293175_1280.jpg" alt=""></div>
                                            <div class="panel-content pad0A bg-white">
                                                <div class="meta-box meta-box-offset"><img src="http://placehold.it/82x82" alt="" class="meta-image img-bordered img-circle">
                                                    <h3 class="meta-heading font-size-16">Alex Rosenberg</h3>
                                                    <h4 class="meta-subheading font-size-13 font-gray">Ultimate backend programmer</h4></div>
                                                <table class="table mrg0B mrg10T">
                                                    <tbody>
                                                        <tr>
                                                            <td class="text-left"><b>UI design</b></td>
                                                            <td style="width: 50%">
                                                                <div class="progressbar-small progressbar" data-value="95">
                                                                    <div class="progressbar-value bg-red tooltip-button" title="95%"></div>
                                                                </div>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td class="text-left"><b>Web development</b></td>
                                                            <td style="width: 50%">
                                                                <div class="progressbar-small progressbar" data-value="45">
                                                                    <div class="progressbar-value bg-azure tooltip-button" title="45%"></div>
                                                                </div>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td class="text-left"><b>CSS skills</b></td>
                                                            <td style="width: 50%">
                                                                <div class="progressbar-small progressbar" data-value="85">
                                                                    <div class="progressbar-value bg-green tooltip-button" title="85%"></div>
                                                                </div>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td class="text-left"><b>Photoshop</b></td>
                                                            <td style="width: 50%">
                                                                <div class="progressbar-small progressbar" data-value="75">
                                                                    <div class="progressbar-value bg-yellow tooltip-button" title="45%"></div>
                                                                </div>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td class="text-left"><b>Others</b></td>
                                                            <td style="width: 20%">
                                                                <div class="progressbar-small progressbar" data-value="20">
                                                                    <div class="progressbar-value bg-blue tooltip-button" title="20%"></div>
                                                                </div>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td class="text-left"><b>Skills</b></td>
                                                            <td style="width: 87%">
                                                                <div class="progressbar-small progressbar" data-value="87">
                                                                    <div class="progressbar-value bg-orange tooltip-button" title="87%"></div>
                                                                </div>
                                                            </td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="dashboard-box bg-white content-box mrg25T">
                                        <div class="content-wrapper">
                                            <div class="header">Monthly evolution <span>July - December 2013</span></div>
                                            <div class="center-div sparkline-bar-big-color">183,579,180,311,405,342,579,405,311,311,450,302,370,510,405,342,579,405,311,311,450,302,370,510</div>
                                        </div>
                                        <div class="button-pane">
                                            <div class="size-md float-left heading">Overdue orders</div><a href="#" class="btn btn-info float-right tooltip-button" data-placement="top" title="" data-original-title="Remove comment"><i class="glyph-icon icon-plus"></i></a></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
@endsection

@section('js')
  
@endsection