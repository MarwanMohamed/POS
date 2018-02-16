<!DOCTYPE html>
<html lang="en">
<head>

   {{--  <style>
        /* Loading Spinner */
        .spinner{margin:0;width:70px;height:18px;margin:-35px 0 0 -9px;position:absolute;top:50%;left:50%;text-align:center}.spinner > div{width:18px;height:18px;background-color:#333;border-radius:100%;display:inline-block;-webkit-animation:bouncedelay 1.4s infinite ease-in-out;animation:bouncedelay 1.4s infinite ease-in-out;-webkit-animation-fill-mode:both;animation-fill-mode:both}.spinner .bounce1{-webkit-animation-delay:-.32s;animation-delay:-.32s}.spinner .bounce2{-webkit-animation-delay:-.16s;animation-delay:-.16s}@-webkit-keyframes bouncedelay{0%,80%,100%{-webkit-transform:scale(0.0)}40%{-webkit-transform:scale(1.0)}}@keyframes bouncedelay{0%,80%,100%{transform:scale(0.0);-webkit-transform:scale(0.0)}40%{transform:scale(1.0);-webkit-transform:scale(1.0)}}
    </style> --}}


<meta charset="UTF-8">
<!--[if IE]><meta http-equiv='X-UA-Compatible' content='IE=edge,chrome=1'><![endif]-->
<title> @if(isset($title)) {{$title}} @else Dashboard @endif </title>
<meta name="description" content="">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">

<!-- Favicons -->

<link rel="apple-touch-icon-precomposed" sizes="144x144" href="{{asset('assets/images/icons/apple-touch-icon-144-precomposed.png')}}">
<link rel="apple-touch-icon-precomposed" sizes="114x114" href="{{asset('assets/images/icons/apple-touch-icon-114-precomposed.png')}}">
<link rel="apple-touch-icon-precomposed" sizes="72x72" href="{{asset('assets/images/icons/apple-touch-icon-72-precomposed.png')}}">
<link rel="apple-touch-icon-precomposed" href="{{asset('assets/images/icons/apple-touch-icon-57-precomposed.png')}}">
<link rel="shortcut icon" href="{{asset('assets/images/icons/fa')}}vicon.png">



<link rel="stylesheet" type="text/css" href="{{asset('assets/bootstrap/css/bootstrap.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('css/css_ar.css')}}">
{{-- <link rel="stylesheet" type="text/css" href="{{asset('assets/icons/fontawesome/fontawesome.css')}}"> --}}
{{-- <link rel="stylesheet" type="text/css" href="{{asset('assets/icons/linecons/linecons.css')}}"> --}}
{{-- <link rel="stylesheet" type="text/css" href="{{asset('assets/icons/spinnericon/spinnericon.css')}}"> --}}

<!-- HELPERS -->

{{-- <link rel="stylesheet" type="text/css" href="{{asset('assets/helpers/animate.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('assets/helpers/backgrounds.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('assets/helpers/boilerplate.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('assets/helpers/border-radius.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('assets/helpers/grid.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('assets/helpers/page-transitions.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('assets/helpers/spacing.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('assets/helpers/typography.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('assets/helpers/utils.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('assets/helpers/colors.css')}}">

<!-- ELEMENTS -->

<link rel="stylesheet" type="text/css" href="{{asset('assets/elements/badges.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('assets/elements/buttons.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('assets/elements/content-box.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('assets/elements/dashboard-box.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('assets/elements/forms.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('assets/elements/images.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('assets/elements/info-box.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('assets/elements/invoice.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('assets/elements/loading-indicators.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('assets/elements/menus.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('assets/elements/panel-box.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('assets/elements/response-messages.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('assets/elements/responsive-tables.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('assets/elements/ribbon.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('assets/elements/social-box.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('assets/elements/tables.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('assets/elements/tile-box.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('assets/elements/timeline.css')}}">



<!-- ICONS -->

<link rel="stylesheet" type="text/css" href="{{asset('assets/icons/fontawesome/fontawesome.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('assets/icons/linecons/linecons.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('assets/icons/spinnericon/spinnericon.css')}}">


<!-- WIDGETS -->

<link rel="stylesheet" type="text/css" href="{{asset('assets/widgets/accordion-ui/accordion.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('assets/widgets/calendar/calendar.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('assets/widgets/carousel/carousel.css')}}">

<link rel="stylesheet" type="text/css" href="{{asset('assets/widgets/charts/justgage/justgage.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('assets/widgets/charts/morris/morris.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('assets/widgets/charts/piegage/piegage.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('assets/widgets/charts/xcharts/xcharts.css')}}">

<link rel="stylesheet" type="text/css" href="{{asset('assets/widgets/chosen/chosen.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('assets/widgets/colorpicker/colorpicker.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('assets/widgets/datatable/datatable.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('assets/widgets/datepicker/datepicker.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('assets/widgets/datepicker-ui/datepicker.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('assets/widgets/daterangepicker/daterangepicker.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('assets/widgets/dialog/dialog.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('assets/widgets/dropdown/dropdown.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('assets/widgets/dropzone/dropzone.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('assets/widgets/file-input/fileinput.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('assets/widgets/input-switch/inputswitch.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('assets/widgets/input-switch/inputswitch-alt.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('assets/widgets/ionrangeslider/ionrangeslider.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('assets/widgets/jcrop/jcrop.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('assets/widgets/jgrowl-notifications/jgrowl.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('assets/widgets/loading-bar/loadingbar.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('assets/widgets/maps/vector-maps/vectormaps.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('assets/widgets/markdown/markdown.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('assets/widgets/modal/modal.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('assets/widgets/multi-select/multiselect.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('assets/widgets/multi-upload/fileupload.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('assets/widgets/nestable/nestable.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('assets/widgets/noty-notifications/noty.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('assets/widgets/popover/popover.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('assets/widgets/pretty-photo/prettyphoto.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('assets/widgets/progressbar/progressbar.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('assets/widgets/range-slider/rangeslider.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('assets/widgets/slidebars/slidebars.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('assets/widgets/slider-ui/slider.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('assets/widgets/summernote-wysiwyg/summernote-wysiwyg.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('assets/widgets/tabs-ui/tabs.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('assets/widgets/theme-switcher/themeswitcher.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('assets/widgets/timepicker/timepicker.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('assets/widgets/tocify/tocify.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('assets/widgets/tooltip/tooltip.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('assets/widgets/touchspin/touchspin.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('assets/widgets/uniform/uniform.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('assets/widgets/wizard/wizard.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('assets/widgets/xeditable/xeditable.css')}}">

<!-- SNIPPETS -->

<link rel="stylesheet" type="text/css" href="{{asset('assets/snippets/chat.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('assets/snippets/files-box.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('assets/snippets/login-box.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('assets/snippets/notification-box.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('assets/snippets/progress-box.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('assets/snippets/todo.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('assets/snippets/user-profile.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('assets/snippets/mobile-navigation.css')}}">

<!-- APPLICATIONS -->

<link rel="stylesheet" type="text/css" href="{{asset('assets/applications/mailbox.css')}}">

<!-- Admin theme -->

<link rel="stylesheet" type="text/css" href="{{asset('assets/themes/admin/layout.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('assets/themes/admin/color-schemes/default.css')}}">

<!-- Components theme -->

<link rel="stylesheet" type="text/css" href="{{asset('assets/themes/components/default.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('assets/themes/components/border-radius.css')}}">

<!-- Admin responsive -->

<link rel="stylesheet" type="text/css" href="{{asset('assets/helpers/responsive-elements.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('assets/helpers/admin-responsive.css')}}"> --}}
<link rel="stylesheet" type="text/css" href="{{asset('css/custom.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('css/fonts/NeoSansArabic.woff')}}">

    <!-- JS Core -->

    <script type="text/javascript" src="{{asset('assets/js-core/jquery-core.js')}}"></script>
    <script type="text/javascript" src="{{asset('assets/js-core/jquery-ui-core.js')}}"></script>
    <script type="text/javascript" src="{{asset('assets/js-core/jquery-ui-widget.js')}}"></script>
    <script type="text/javascript" src="{{asset('assets/js-core/jquery-ui-mouse.js')}}"></script>
    <script type="text/javascript" src="{{asset('assets/js-core/jquery-ui-position.js')}}"></script>
    <!--<script type="text/javascript" src="{{asset('assets/js-core/transition.js"><')}}/script>-->
    <script type="text/javascript" src="{{asset('assets/js-core/modernizr.js')}}"></script>
    <script type="text/javascript" src="{{asset('assets/js-core/jquery-cookie.js')}}"></script>





    <script type="text/javascript">
        $(window).load(function(){
            setTimeout(function() {
                $('#loading').fadeOut( 400, "linear" );
            }, 300);
        });
    </script>



</head>


    <body>
    <div id="sb-site">
    <div class="sb-slidebar bg-black sb-left sb-style-overlay">
    <div class="scrollable-content scrollable-slim-sidebar">
        <div class="pad10A">
            <div class="divider-header">Online</div>
            <ul class="chat-box">
                <li>
                    <div class="status-badge">
                        <img class="img-circle" width="40" src="{{asset('assets/image-resources/people/testimonial1.jpg')}}" alt="">
                        <div class="small-badge bg-green"></div>
                    </div>
                    <b>
                        Grace Padilla
                    </b>
                    <p>On the other hand, we denounce...</p>
                    <a href="#" class="btn btn-md no-border radius-all-100 btn-black"><i class="glyph-icon icon-comments-o"></i></a>
                </li>
                <li>
                    <div class="status-badge">
                        <img class="img-circle" width="40" src="{{asset('assets/image-resources/people/testimonial2.jpg')}}" alt="">
                        <div class="small-badge bg-green"></div>
                    </div>
                    <b>
                        Carl Gamble
                    </b>
                    <p>Dislike men who are so beguiled...</p>
                    <a href="#" class="btn btn-md no-border radius-all-100 btn-black"><i class="glyph-icon icon-comments-o"></i></a>
                </li>
                <li>
                    <div class="status-badge">
                        <img class="img-circle" width="40" src="{{asset('assets/image-resources/people/testimonial3.jpg')}}" alt="">
                        <div class="small-badge bg-green"></div>
                    </div>
                    <b>
                        Michael Poole
                    </b>
                    <p>Of pleasure of the moment, so...</p>
                    <a href="#" class="btn btn-md no-border radius-all-100 btn-black"><i class="glyph-icon icon-comments-o"></i></a>
                </li>
                <li>
                    <div class="status-badge">
                        <img class="img-circle" width="40" src="{{asset('assets/image-resources/people/testimonial4.jpg')}}" alt="">
                        <div class="small-badge bg-green"></div>
                    </div>
                    <b>
                        Bill Green
                    </b>
                    <p>That they cannot foresee the...</p>
                    <a href="#" class="btn btn-md no-border radius-all-100 btn-black"><i class="glyph-icon icon-comments-o"></i></a>
                </li>
                <li>
                    <div class="status-badge">
                        <img class="img-circle" width="40" src="{{asset('assets/image-resources/people/testimonial5.jpg')}}" alt="">
                        <div class="small-badge bg-green"></div>
                    </div>
                    <b>
                        Cheryl Soucy
                    </b>
                    <p>Pain and trouble that are bound...</p>
                    <a href="#" class="btn btn-md no-border radius-all-100 btn-black"><i class="glyph-icon icon-comments-o"></i></a>
                </li>
            </ul>
            <div class="divider-header">Idle</div>
            <ul class="chat-box">
                <li>
                    <div class="status-badge">
                        <img class="img-circle" width="40" src="{{asset('assets/image-resources/people/testimonial6.jpg')}}" alt="">
                        <div class="small-badge bg-orange"></div>
                    </div>
                    <b>
                        Jose Kramer
                    </b>
                    <p>Equal blame belongs to those...</p>
                    <a href="#" class="btn btn-md no-border radius-all-100 btn-black"><i class="glyph-icon icon-comments-o"></i></a>
                </li>
                <li>
                    <div class="status-badge">
                        <img class="img-circle" width="40" src="{{asset('assets/image-resources/people/testimonial7.jpg')}}" alt="">
                        <div class="small-badge bg-orange"></div>
                    </div>
                    <b>
                        Dan Garcia
                    </b>
                    <p>Weakness of will, which is same...</p>
                    <a href="#" class="btn btn-md no-border radius-all-100 btn-black"><i class="glyph-icon icon-comments-o"></i></a>
                </li>
                <li>
                    <div class="status-badge">
                        <img class="img-circle" width="40" src="{{asset('assets/image-resources/people/testimonial8.jpg')}}" alt="">
                        <div class="small-badge bg-orange"></div>
                    </div>
                    <b>
                        Edward Bridges
                    </b>
                    <p>These cases are perfectly simple...</p>
                    <a href="#" class="btn btn-md no-border radius-all-100 btn-black"><i class="glyph-icon icon-comments-o"></i></a>
                </li>
            </ul>
            <div class="divider-header">Offline</div>
            <ul class="chat-box">
                <li>
                    <div class="status-badge">
                        <img class="img-circle" width="40" src="{{asset('assets/image-resources/people/testimonial1.jpg')}}" alt="">
                        <div class="small-badge bg-red"></div>
                    </div>
                    <b>
                        Randy Herod
                    </b>
                    <p>In a free hour, when our power...</p>
                    <a href="#" class="btn btn-md no-border radius-all-100 btn-black"><i class="glyph-icon icon-comments-o"></i></a>
                </li>
                <li>
                    <div class="status-badge">
                        <img class="img-circle" width="40" src="{{asset('assets/image-resources/people/testimonial2.jpg')}}" alt="">
                        <div class="small-badge bg-red"></div>
                    </div>
                    <b>
                        Patricia Bagley
                    </b>
                    <p>when nothing prevents our being...</p>
                    <a href="#" class="btn btn-md no-border radius-all-100 btn-black"><i class="glyph-icon icon-comments-o"></i></a>
                </li>
            </ul>
        </div>
    </div>
</div>

<div class="sb-slidebar bg-black sb-right sb-style-overlay">
<div class="scrollable-content scrollable-slim-sidebar">
<div class="pad15A">
<a href="#" title="" data-toggle="collapse" data-target="#sidebar-toggle-1" class="popover-title">
    Cloud status
</a>
<div id="sidebar-toggle-1" class="collapse in">
    <div class="pad15A container">
        <div class="row">
            <div class="col-md-4">
                <div class="text-center font-gray pad5B text-transform-upr font-size-12">New visits</div>
                <div class="chart-alt-3 font-gray-dark" data-percent="55"><span>55</span>%</div>
            </div>
            <div class="col-md-4">
                <div class="text-center font-gray pad5B text-transform-upr font-size-12">Bounce rate</div>
                <div class="chart-alt-3 font-gray-dark" data-percent="46"><span>46</span>%</div>
            </div>
            <div class="col-md-4">
                <div class="text-center font-gray pad5B text-transform-upr font-size-12">Server load</div>
                <div class="chart-alt-3 font-gray-dark" data-percent="92"><span>92</span>%</div>
            </div>
        </div>
        <div class="divider mrg15T mrg15B"></div>
        <div class="text-center">
            <a href="#" class="btn center-div btn-info mrg5T btn-sm text-transform-upr updateEasyPieChart">
                <i class="glyph-icon icon-refresh"></i>
                Update charts
            </a>
        </div>
    </div>
</div>

<div class="clear"></div>

<a href="#" title="" data-toggle="collapse" data-target="#sidebar-toggle-6" class="popover-title">
    Latest transfers
</a>
<div id="sidebar-toggle-6" class="collapse in">

    <ul class="files-box">
        <li>
            <i class="files-icon glyph-icon font-red icon-file-archive-o"></i>
            <div class="files-content">
                <b>blog_export.zip</b>
                <div class="files-date">
                    <i class="glyph-icon icon-clock-o"></i>
                    added on <b>22.10.2014</b>
                </div>
            </div>
            <div class="files-buttons">
                <a href="#" class="btn btn-xs hover-info tooltip-button" data-placement="left" title="Download">
                    <i class="glyph-icon icon-cloud-download"></i>
                </a>
                <a href="#" class="btn btn-xs hover-danger tooltip-button" data-placement="left" title="Delete">
                    <i class="glyph-icon icon-times"></i>
                </a>
            </div>
        </li>
        <li class="divider"></li>
        <li>
            <i class="files-icon glyph-icon icon-file-code-o"></i>
            <div class="files-content">
                <b>homepage-test.html</b>
                <div class="files-date">
                    <i class="glyph-icon icon-clock-o"></i>
                    added  <b>19.10.2014</b>
                </div>
            </div>
            <div class="files-buttons">
                <a href="#" class="btn btn-xs hover-info tooltip-button" data-placement="left" title="Download">
                    <i class="glyph-icon icon-cloud-download"></i>
                </a>
                <a href="#" class="btn btn-xs hover-danger tooltip-button" data-placement="left" title="Delete">
                    <i class="glyph-icon icon-times"></i>
                </a>
            </div>
        </li>
        <li class="divider"></li>
        <li>
            <i class="files-icon glyph-icon font-yellow icon-file-image-o"></i>
            <div class="files-content">
                <b>monthlyReport.jpg</b>
                <div class="files-date">
                    <i class="glyph-icon icon-clock-o"></i>
                    added on <b>10.9.2014</b>
                </div>
            </div>
            <div class="files-buttons">
                <a href="#" class="btn btn-xs hover-info tooltip-button" data-placement="left" title="Download">
                    <i class="glyph-icon icon-cloud-download"></i>
                </a>
                <a href="#" class="btn btn-xs hover-danger tooltip-button" data-placement="left" title="Delete">
                    <i class="glyph-icon icon-times"></i>
                </a>
            </div>
        </li>
        <li class="divider"></li>
        <li>
            <i class="files-icon glyph-icon font-green icon-file-word-o"></i>
            <div class="files-content">
                <b>new_presentation.doc</b>
                <div class="files-date">
                    <i class="glyph-icon icon-clock-o"></i>
                    added on <b>5.9.2014</b>
                </div>
            </div>
            <div class="files-buttons">
                <a href="#" class="btn btn-xs hover-info tooltip-button" data-placement="left" title="Download">
                    <i class="glyph-icon icon-cloud-download"></i>
                </a>
                <a href="#" class="btn btn-xs hover-danger tooltip-button" data-placement="left" title="Delete">
                    <i class="glyph-icon icon-times"></i>
                </a>
            </div>
        </li>
    </ul>

</div>

<div class="clear"></div>

<a href="#" title="" data-toggle="collapse" data-target="#sidebar-toggle-3" class="popover-title">
    Tasks for today
</a>
<div id="sidebar-toggle-3" class="collapse in">

    <ul class="progress-box">
        <li>
            <div class="progress-title">
                New features development
                <b>87%</b>
            </div>
            <div class="progressbar-smaller progressbar" data-value="87">
                <div class="progressbar-value bg-azure">
                    <div class="progressbar-overlay"></div>
                </div>
            </div>
        </li>
        <li>
            <b class="pull-right">66%</b>
            <div class="progress-title">
                Finishing uploading files

            </div>
            <div class="progressbar-smaller progressbar" data-value="66">
                <div class="progressbar-value bg-red">
                    <div class="progressbar-overlay"></div>
                </div>
            </div>
        </li>
        <li>
            <div class="progress-title">
                Creating tutorials
                <b>58%</b>
            </div>
            <div class="progressbar-smaller progressbar" data-value="58">
                <div class="progressbar-value bg-blue-alt"></div>
            </div>
        </li>
        <li>
            <div class="progress-title">
                Frontend bonus theme
                <b>74%</b>
            </div>
            <div class="progressbar-smaller progressbar" data-value="74">
                <div class="progressbar-value bg-purple"></div>
            </div>
        </li>
    </ul>

</div>

<div class="clear"></div>

<a href="#" title="" data-toggle="collapse" data-target="#sidebar-toggle-4" class="popover-title">
    Pending notifications
    <span class="bs-label bg-orange tooltip-button" title="Label example">New</span>
</a>
<div id="sidebar-toggle-4" class="collapse in">
    <ul class="notifications-box notifications-box-alt">
        <li>
            <span class="bg-purple icon-notification glyph-icon icon-users"></span>
            <span class="notification-text">This is an error notification</span>
            <div class="notification-time">
                a few seconds ago
                <span class="glyph-icon icon-clock-o"></span>
            </div>
            <a href="#" class="notification-btn btn btn-xs btn-black tooltip-button" data-placement="left" title="View details">
                <i class="glyph-icon icon-arrow-right"></i>
            </a>
        </li>
        <li>
            <span class="bg-warning icon-notification glyph-icon icon-ticket"></span>
            <span class="notification-text">This is a warning notification</span>
            <div class="notification-time">
                <b>15</b> minutes ago
                <span class="glyph-icon icon-clock-o"></span>
            </div>
            <a href="#" class="notification-btn btn btn-xs btn-black tooltip-button" data-placement="left" title="View details">
                <i class="glyph-icon icon-arrow-right"></i>
            </a>
        </li>
        <li>
            <span class="bg-green icon-notification glyph-icon icon-random"></span>
            <span class="notification-text font-green">A success message example.</span>
            <div class="notification-time">
                <b>2 hours</b> ago
                <span class="glyph-icon icon-clock-o"></span>
            </div>
            <a href="#" class="notification-btn btn btn-xs btn-black tooltip-button" data-placement="left" title="View details">
                <i class="glyph-icon icon-arrow-right"></i>
            </a>
        </li>
    </ul>
</div>
</div>
</div>
</div>
  {{--   <div id="loading">
        <div class="spinner">
            <div class="bounce1"></div>
            <div class="bounce2"></div>
            <div class="bounce3"></div>
        </div>
    </div> --}}

    <div id="page-wrapper">
        <div id="page-header" class="bg-gradient-9">
    <div id="mobile-navigation">
        <button id="nav-toggle" class="collapsed" data-toggle="collapse" data-target="#page-sidebar"><span></span></button>
        <a href="{{url('/')}}" class="logo-content-small" title="California"></a>
    </div>
    <div id="header-logo" class="logo-bg">
        <a href="{{url('/')}}" class="logo-content-big" title="California">
            California <i>UI</i>
            <span>Test</span>
        </a>
  
        <a id="close-sidebar" href="#" title="Close sidebar">
            <i class="glyph-icon icon-angle-left"></i>
        </a>
    </div>
    <div id="header-nav-left">
        <div class="user-account-btn dropdown">
            <a href="#" title="My Account" class="user-profile clearfix" data-toggle="dropdown">
                <img width="28" src="{{asset('assets/image-resources/gravatar.jpg')}}" alt="Profile image">
                <span>{{isset(auth()->user()->name) ? auth()->user()->name : ''}}</span>
                <i class="glyph-icon icon-angle-down"></i>
            </a>
            <div class="dropdown-menu float-left">
                <div class="box-sm">
                    <div class="login-box clearfix">
                        <div class="user-img">
                            <a href="#" title="" class="change-img">Change photo</a>
                            <img src="{{asset('assets/image-resources/gravatar.jpg')}}" alt="">
                        </div>
                        <div class="user-info">
                            <span>
                                {{isset(auth()->user()->name) ? auth()->user()->name : ''}}
                                <i>

                                </i>
                            </span>
                        </div>
                    </div>
                    <div class="divider"></div>
                    <ul class="reset-ul mrg5B">
                       
                        {{-- <li><a href="{{route('user.profile', auth()->user()->id)}}" class="hdr-btn" >{{trans('sidebar.profile')}}</a></li> --}}
                    </ul>
                    <div class="pad5A button-pane button-pane-alt text-center">
                        <a href="{{route('logout')}}" onclick="event.preventDefault();
                                document.getElementById('logout-form').submit();" class="btn display-block font-normal btn-danger">
                            <i class="glyph-icon icon-power-off"></i>
                            Logout
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div><!-- #header-nav-left -->

      
    <div id="header-nav-right">
       {{--  @if(app()->getLocale() == 'ar')
            <a rel="alternate" class="hdr-btn" hreflang="en" href="{{LaravelLocalization::getLocalizedURL('en') }}">
                {{{ LaravelLocalization::getSupportedLocales()['en']['native'] }}}
            </a>
        @else
            <a rel="alternate"  class="hdr-btn"  hreflang="ar" href="{{LaravelLocalization::getLocalizedURL('ar') }}">
                {{{ LaravelLocalization::getSupportedLocales()['ar']['native'] }}}
            </a>
        @endif --}}
     {{--    <a href="{{route('user.profile', auth()->user()->id)}}" class="hdr-btn" >
        {{trans('sidebar.profile')}}
        </a> --}}

        <!--<a href="#" class="hdr-btn popover-button" title="Search" data-placement="bottom" data-id="#popover-search">-->
        <!--    <i class="glyph-icon icon-search"></i>-->

        <!--</a>-->

        <div class="hide" id="popover-search">
            <div class="pad5A box-md">
                <div class="input-group">
                    <input type="text" class="form-control" placeholder="Search terms here ...">
                    <span class="input-group-btn">
                        <a class="btn btn-primary" href="#">Search</a>
                    </span>
                </div>
            </div>
        </div>
        <a href="#" class="hdr-btn" id="fullscreen-btn" title="Fullscreen">
            <i class="glyph-icon icon-arrows-alt"></i>
        </a>
        
       
        {{-- <div class="dropdown" id="progress-btn">
            <a data-toggle="dropdown" href="#" title="">
                <span class="small-badge bg-azure"></span>
                <i class="glyph-icon icon-linecons-params"></i>
            </a>
            <div class="dropdown-menu pad0A box-sm float-right" id="progress-dropdown">
                <div class="scrollable-content scrollable-slim-box">
                    <ul class="no-border progress-box progress-box-links">
                        <li>
                            <a href="#" title="">
                                <b class="pull-right">23%</b>
                                <div class="progress-title">
                                    Finishing uploading files

                                </div>
                                <div class="progressbar-smaller progressbar" data-value="23">
                                    <div class="progressbar-value bg-blue-alt">
                                        <div class="progressbar-overlay"></div>
                                    </div>
                                </div>
                            </a>
                        </li>
                        <li>
                            <a href="#" title="">
                                <b class="pull-right">91%</b>
                                <div class="progress-title">
                                    Roadmap progress
                                </div>
                                <div class="progressbar-smaller progressbar" data-value="91">
                                    <div class="progressbar-value bg-red">
                                        <div class="progressbar-overlay"></div>
                                    </div>
                                </div>
                            </a>
                        </li>
                        <li>
                            <a href="#" title="">
                                <b class="pull-right">58%</b>
                                <div class="progress-title">
                                    Images upload
                                </div>
                                <div class="progressbar-smaller progressbar" data-value="58">
                                    <div class="progressbar-value bg-green"></div>
                                </div>
                            </a>
                        </li>
                        <li>
                            <a href="#" title="">
                                <b class="pull-right">74%</b>
                                <div class="progress-title">
                                    WordPress migration
                                </div>
                                <div class="progressbar-smaller progressbar" data-value="74">
                                    <div class="progressbar-value bg-purple"></div>
                                </div>
                            </a>
                        </li>
                        <li>
                            <a href="#" title="">
                                 <b class="pull-right">91%</b>
                                <div class="progress-title">
                                    Agile development procedures
                                </div>
                                <div class="progressbar-smaller progressbar" data-value="91">
                                    <div class="progressbar-value bg-black">
                                        <div class="progressbar-overlay"></div>
                                    </div>
                                </div>
                            </a>
                        </li>
                        <li>
                            <a href="#" title="">
                                <b class="pull-right">58%</b>
                                <div class="progress-title">
                                    Systems integration
                                </div>
                                <div class="progressbar-smaller progressbar" data-value="58">
                                    <div class="progressbar-value bg-azure"></div>
                                </div>
                            </a>
                        </li>
                        <li>
                            <a href="#" title="">
                                 <b class="pull-right">97%</b>
                                <div class="progress-title">
                                    Code optimizations
                                </div>
                                <div class="progressbar-smaller progressbar" data-value="97">
                                    <div class="progressbar-value bg-yellow"></div>
                                </div>
                            </a>
                        </li>
                    </ul>
                </div>
                <div class="pad5A button-pane button-pane-alt text-center">
                    <a href="#" class="btn display-block font-normal hover-green" title="View all notifications">
                        View all notifications
                    </a>
                </div>
            </div>
        </div> --}}
      
        <a class="header-btn" id="logout-btn" href="{{route('logout')}}" title="logout" onclick="event.preventDefault();
        document.getElementById('logout-form').submit();">
            <i class="glyph-icon icon-linecons-lock"></i>
        </a>

        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
            {{ csrf_field() }}
        </form>

    </div><!-- #header-nav-right -->

</div>
        @include('admin.sidebar')

        <div id="page-content-wrapper">
        <div id="page-content">

            <div class="container">


                <!-- jQueryUI Spinner -->

                <script type="text/javascript" src="{{asset('assets/widgets/spinner/spinner.js')}}"></script>
                <script type="text/javascript">
                    /* jQuery UI Spinner */

                    $(function() { "use strict";
                        $(".spinner-input").spinner();
                    });
                </script>

                <!-- jQueryUI Autocomplete -->

                <script type="text/javascript" src="{{asset('assets/widgets/autocomplete/autocomplete.js')}}"></script>
                <script type="text/javascript" src="{{asset('assets/widgets/autocomplete/menu.js')}}"></script>
                <script type="text/javascript" src="{{asset('assets/widgets/autocomplete/autocomplete-demo.js')}}"></script>

                <!-- Touchspin -->

                <script type="text/javascript" src="{{asset('assets/widgets/touchspin/touchspin.js')}}"></script>
                <script type="text/javascript" src="{{asset('assets/widgets/touchspin/touchspin-demo.js')}}"></script>

                <!-- Input switch -->

                <script type="text/javascript" src="{{asset('assets/widgets/input-switch/inputswitch.js')}}"></script>
                <script type="text/javascript">
                    /* Input switch */

                    $(function() { "use strict";
                        $('.input-switch').bootstrapSwitch();
                    });
                </script>

                <!-- Textarea -->

                <script type="text/javascript" src="{{asset('assets/widgets/textarea/textarea.js')}}"></script>
                <script type="text/javascript">
                    /* Textarea autoresize */

                    $(function() { "use strict";
                        $('.textarea-autosize').autosize();
                    });
                </script>

                <!-- Multi select -->

                <script type="text/javascript" src="{{asset('assets/widgets/multi-select/multiselect.js')}}"></script>
                <script type="text/javascript">
                    /* Multiselect inputs */

                    $(function() { "use strict";
                        $(".multi-select").multiSelect();
                        $(".ms-container").append('<i class="glyph-icon icon-exchange"></i>');
                    });
                </script>

                <!-- Uniform -->

                <script type="text/javascript" src="{{asset('assets/widgets/uniform/uniform.js')}}"></script>
                <script type="text/javascript" src="{{asset('assets/widgets/uniform/uniform-demo.js')}}"></script>

                <!-- Chosen -->

                <script type="text/javascript" src="{{asset('assets/widgets/chosen/chosen.js')}}"></script>
                <script type="text/javascript" src="{{asset('assets/widgets/chosen/chosen-demo.js')}}"></script>

                <div id="page-title">
                    
                    {{-- @if($errors->any())
                        <div class="alert alert-danger">
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif --}}

                    @if(session()->has('message'))
                        <div class="alert alert-success">
                            {{ session()->get('message') }}
                        </div>
                    @endif

                    @yield('content')

                    {{-- <div id="theme-options" class="admin-options">
                        <a href="javascript:void(0);" class="btn btn-primary theme-switcher tooltip-button" data-placement="left" title="Color schemes and layout options">
                            <i class="glyph-icon icon-linecons-cog icon-spin"></i>
                        </a>
                        <div id="theme-switcher-wrapper">
                            <div class="scroll-switcher">
                                <h5 class="header">Layout options</h5>
                                <ul class="reset-ul">
                                    <li>
                                        <label for="boxed-layout">Boxed layout</label>
                                        <input type="checkbox" data-toggletarget="boxed-layout" id="boxed-layout" class="input-switch-alt">
                                    </li>
                                    <li>
                                        <label for="fixed-header">Fixed header</label>
                                        <input type="checkbox" data-toggletarget="fixed-header" id="fixed-header" class="input-switch-alt">
                                    </li>
                                    <li>
                                        <label for="fixed-sidebar">Fixed sidebar</label>
                                        <input type="checkbox" data-toggletarget="fixed-sidebar" id="fixed-sidebar" class="input-switch-alt">
                                    </li>
                                    <li>
                                        <label for="closed-sidebar">Closed sidebar</label>
                                        <input type="checkbox" data-toggletarget="closed-sidebar" id="closed-sidebar" class="input-switch-alt">
                                    </li>
                                </ul>
                                <div class="boxed-bg-wrapper hide">
                                    <h5 class="header">
                                        Boxed Page Background
                                        <a class="set-background-style" data-header-bg="" title="Remove all styles" href="javascript:void(0);">Clear</a>
                                    </h5>
                                    <div class="theme-color-wrapper clearfix">
                                        <h5>Patterns</h5>
                                        <a class="tooltip-button set-background-style pattern-bg-3" data-header-bg="pattern-bg-3" title="Pattern 3" href="javascript:void(0);">Pattern 3</a>
                                        <a class="tooltip-button set-background-style pattern-bg-4" data-header-bg="pattern-bg-4" title="Pattern 4" href="javascript:void(0);">Pattern 4</a>
                                        <a class="tooltip-button set-background-style pattern-bg-5" data-header-bg="pattern-bg-5" title="Pattern 5" href="javascript:void(0);">Pattern 5</a>
                                        <a class="tooltip-button set-background-style pattern-bg-6" data-header-bg="pattern-bg-6" title="Pattern 6" href="javascript:void(0);">Pattern 6</a>
                                        <a class="tooltip-button set-background-style pattern-bg-7" data-header-bg="pattern-bg-7" title="Pattern 7" href="javascript:void(0);">Pattern 7</a>
                                        <a class="tooltip-button set-background-style pattern-bg-8" data-header-bg="pattern-bg-8" title="Pattern 8" href="javascript:void(0);">Pattern 8</a>
                                        <a class="tooltip-button set-background-style pattern-bg-9" data-header-bg="pattern-bg-9" title="Pattern 9" href="javascript:void(0);">Pattern 9</a>
                                        <a class="tooltip-button set-background-style pattern-bg-10" data-header-bg="pattern-bg-10" title="Pattern 10" href="javascript:void(0);">Pattern 10</a>

                                        <div class="clear"></div>

                                        <h5 class="mrg15T">Solids &amp;Images</h5>
                                        <a class="tooltip-button set-background-style bg-black" data-header-bg="bg-black" title="Black" href="javascript:void(0);">Black</a>
                                        <a class="tooltip-button set-background-style bg-gray mrg10R" data-header-bg="bg-gray" title="Gray" href="javascript:void(0);">Gray</a>

                                        <a class="tooltip-button set-background-style full-bg-1" data-header-bg="full-bg-1 fixed-bg" title="Image 1" href="javascript:void(0);">Image 1</a>
                                        <a class="tooltip-button set-background-style full-bg-2" data-header-bg="full-bg-2 fixed-bg" title="Image 2" href="javascript:void(0);">Image 2</a>
                                        <a class="tooltip-button set-background-style full-bg-3" data-header-bg="full-bg-3 fixed-bg" title="Image 3" href="javascript:void(0);">Image 3</a>
                                        <a class="tooltip-button set-background-style full-bg-4" data-header-bg="full-bg-4 fixed-bg" title="Image 4" href="javascript:void(0);">Image 4</a>
                                        <a class="tooltip-button set-background-style full-bg-5" data-header-bg="full-bg-5 fixed-bg" title="Image 5" href="javascript:void(0);">Image 5</a>
                                        <a class="tooltip-button set-background-style full-bg-6" data-header-bg="full-bg-6 fixed-bg" title="Image 6" href="javascript:void(0);">Image 6</a>

                                    </div>
                                </div>
                                <h5 class="header">
                                    Header Style
                                    <a class="set-adminheader-style" data-header-bg="bg-gradient-9" title="Remove all styles" href="javascript:void(0);">Clear</a>
                                </h5>
                                <div class="theme-color-wrapper clearfix">
                                    <h5>Solids</h5>
                                    <a class="tooltip-button set-adminheader-style bg-primary" data-header-bg="bg-primary font-inverse" title="Primary" href="javascript:void(0);">Primary</a>
                                    <a class="tooltip-button set-adminheader-style bg-green" data-header-bg="bg-green font-inverse" title="Green" href="javascript:void(0);">Green</a>
                                    <a class="tooltip-button set-adminheader-style bg-red" data-header-bg="bg-red font-inverse" title="Red" href="javascript:void(0);">Red</a>
                                    <a class="tooltip-button set-adminheader-style bg-blue" data-header-bg="bg-blue font-inverse" title="Blue" href="javascript:void(0);">Blue</a>
                                    <a class="tooltip-button set-adminheader-style bg-warning" data-header-bg="bg-warning font-inverse" title="Warning" href="javascript:void(0);">Warning</a>
                                    <a class="tooltip-button set-adminheader-style bg-purple" data-header-bg="bg-purple font-inverse" title="Purple" href="javascript:void(0);">Purple</a>
                                    <a class="tooltip-button set-adminheader-style bg-black" data-header-bg="bg-black font-inverse" title="Black" href="javascript:void(0);">Black</a>

                                    <div class="clear"></div>

                                    <h5 class="mrg15T">Gradients</h5>
                                    <a class="tooltip-button set-adminheader-style bg-gradient-1" data-header-bg="bg-gradient-1 font-inverse" title="Gradient 1" href="javascript:void(0);">Gradient 1</a>
                                    <a class="tooltip-button set-adminheader-style bg-gradient-2" data-header-bg="bg-gradient-2 font-inverse" title="Gradient 2" href="javascript:void(0);">Gradient 2</a>
                                    <a class="tooltip-button set-adminheader-style bg-gradient-3" data-header-bg="bg-gradient-3 font-inverse" title="Gradient 3" href="javascript:void(0);">Gradient 3</a>
                                    <a class="tooltip-button set-adminheader-style bg-gradient-4" data-header-bg="bg-gradient-4 font-inverse" title="Gradient 4" href="javascript:void(0);">Gradient 4</a>
                                    <a class="tooltip-button set-adminheader-style bg-gradient-5" data-header-bg="bg-gradient-5 font-inverse" title="Gradient 5" href="javascript:void(0);">Gradient 5</a>
                                    <a class="tooltip-button set-adminheader-style bg-gradient-6" data-header-bg="bg-gradient-6 font-inverse" title="Gradient 6" href="javascript:void(0);">Gradient 6</a>
                                    <a class="tooltip-button set-adminheader-style bg-gradient-7" data-header-bg="bg-gradient-7 font-inverse" title="Gradient 7" href="javascript:void(0);">Gradient 7</a>
                                    <a class="tooltip-button set-adminheader-style bg-gradient-8" data-header-bg="bg-gradient-8 font-inverse" title="Gradient 8" href="javascript:void(0);">Gradient 8</a>
                                </div>
                                <h5 class="header">
                                    Sidebar Style
                                    <a class="set-sidebar-style" data-header-bg="" title="Remove all styles" href="javascript:void(0);">Clear</a>
                                </h5>
                                <div class="theme-color-wrapper clearfix">
                                    <h5>Solids</h5>
                                    <a class="tooltip-button set-sidebar-style bg-primary" data-header-bg="bg-primary font-inverse" title="Primary" href="javascript:void(0);">Primary</a>
                                    <a class="tooltip-button set-sidebar-style bg-green" data-header-bg="bg-green font-inverse" title="Green" href="javascript:void(0);">Green</a>
                                    <a class="tooltip-button set-sidebar-style bg-red" data-header-bg="bg-red font-inverse" title="Red" href="javascript:void(0);">Red</a>
                                    <a class="tooltip-button set-sidebar-style bg-blue" data-header-bg="bg-blue font-inverse" title="Blue" href="javascript:void(0);">Blue</a>
                                    <a class="tooltip-button set-sidebar-style bg-warning" data-header-bg="bg-warning font-inverse" title="Warning" href="javascript:void(0);">Warning</a>
                                    <a class="tooltip-button set-sidebar-style bg-purple" data-header-bg="bg-purple font-inverse" title="Purple" href="javascript:void(0);">Purple</a>
                                    <a class="tooltip-button set-sidebar-style bg-black" data-header-bg="bg-black font-inverse" title="Black" href="javascript:void(0);">Black</a>

                                    <div class="clear"></div>

                                    <h5 class="mrg15T">Gradients</h5>
                                    <a class="tooltip-button set-sidebar-style bg-gradient-1" data-header-bg="bg-gradient-1 font-inverse" title="Gradient 1" href="javascript:void(0);">Gradient 1</a>
                                    <a class="tooltip-button set-sidebar-style bg-gradient-2" data-header-bg="bg-gradient-2 font-inverse" title="Gradient 2" href="javascript:void(0);">Gradient 2</a>
                                    <a class="tooltip-button set-sidebar-style bg-gradient-3" data-header-bg="bg-gradient-3 font-inverse" title="Gradient 3" href="javascript:void(0);">Gradient 3</a>
                                    <a class="tooltip-button set-sidebar-style bg-gradient-4" data-header-bg="bg-gradient-4 font-inverse" title="Gradient 4" href="javascript:void(0);">Gradient 4</a>
                                    <a class="tooltip-button set-sidebar-style bg-gradient-5" data-header-bg="bg-gradient-5 font-inverse" title="Gradient 5" href="javascript:void(0);">Gradient 5</a>
                                    <a class="tooltip-button set-sidebar-style bg-gradient-6" data-header-bg="bg-gradient-6 font-inverse" title="Gradient 6" href="javascript:void(0);">Gradient 6</a>
                                    <a class="tooltip-button set-sidebar-style bg-gradient-7" data-header-bg="bg-gradient-7 font-inverse" title="Gradient 7" href="javascript:void(0);">Gradient 7</a>
                                    <a class="tooltip-button set-sidebar-style bg-gradient-8" data-header-bg="bg-gradient-8 font-inverse" title="Gradient 8" href="javascript:void(0);">Gradient 8</a>
                                </div>
                            </div>
                        </div>
                    </div> --}}
                </div>
    </div>


    <!-- WIDGETS -->
<script type="text/javascript" src="{{asset('assets/tether/js/tether.js')}}"></script>
<script type="text/javascript" src="{{asset('assets/bootstrap/js/bootstrap.js')}}"></script>

<!-- Bootstrap Dropdown -->

<!-- <script type="text/javascript" src="{{asset('assets/widgets/dropdown/dropdown.js"></')}}script> -->

<!-- Bootstrap Tooltip -->

<!-- <script type="text/javascript" src="{{asset('assets/widgets/tooltip/tooltip.js"></')}}script> -->

<!-- Bootstrap Popover -->

<!-- <script type="text/javascript" src="{{asset('assets/widgets/popover/popover.js"></')}}script> -->

<!-- Bootstrap Progress Bar -->

<script type="text/javascript" src="{{asset('assets/widgets/progressbar/progressbar.js')}}"></script>

<!-- Bootstrap Buttons -->

<!-- <script type="text/javascript" src="{{asset('assets/widgets/button/button.js"></')}}script> -->

<!-- Bootstrap Collapse -->

<!-- <script type="text/javascript" src="{{asset('assets/widgets/collapse/collapse.js"></')}}script> -->

<!-- Superclick -->

<script type="text/javascript" src="{{asset('assets/widgets/superclick/superclick.js')}}"></script>

<!-- Input switch alternate -->

<script type="text/javascript" src="{{asset('assets/widgets/input-switch/inputswitch-alt.js')}}"></script>

<!-- Slim scroll -->

<script type="text/javascript" src="{{asset('assets/widgets/slimscroll/slimscroll.js')}}"></script>

<!-- Slidebars -->

<script type="text/javascript" src="{{asset('assets/widgets/slidebars/slidebars.js')}}"></script>
<script type="text/javascript" src="{{asset('assets/widgets/slidebars/slidebars-demo.js')}}"></script>

<!-- PieGage -->

<script type="text/javascript" src="{{asset('assets/widgets/charts/piegage/piegage.js')}}"></script>
<script type="text/javascript" src="{{asset('assets/widgets/charts/piegage/piegage-demo.js')}}"></script>

<!-- Screenfull -->

<script type="text/javascript" src="{{asset('assets/widgets/screenfull/screenfull.js')}}"></script>

<!-- Content box -->

<script type="text/javascript" src="{{asset('assets/widgets/content-box/contentbox.js')}}"></script>

<!-- Overlay -->

<script type="text/javascript" src="{{asset('assets/widgets/overlay/overlay.js')}}"></script>

<!-- Widgets init for demo -->

<script type="text/javascript" src="{{asset('assets/js-init/widgets-init.js')}}"></script>

<!-- Theme layout -->

<script type="text/javascript" src="{{asset('assets/themes/admin/layout.js')}}"></script>

<!-- Theme switcher -->

<script type="text/javascript" src="{{asset('assets/widgets/theme-switcher/themeswitcher.js')}}"></script>


@yield('script')
<script>

    $(document).ready(function(){

        $('.day').on('click', function(){
            $('.bsdatepicker').hide();
        })
    });
</script>
</div>
</body>
</html>
