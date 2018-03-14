<!DOCTYPE html>
<html lang="en">
<head>
    <style>
        /* Loading Spinner */
        .spinner{margin:0;width:70px;height:18px;margin:-35px 0 0 -9px;position:absolute;top:50%;left:50%;text-align:center}.spinner > div{width:18px;height:18px;background-color:#333;border-radius:100%;display:inline-block;-webkit-animation:bouncedelay 1.4s infinite ease-in-out;animation:bouncedelay 1.4s infinite ease-in-out;-webkit-animation-fill-mode:both;animation-fill-mode:both}.spinner .bounce1{-webkit-animation-delay:-.32s;animation-delay:-.32s}.spinner .bounce2{-webkit-animation-delay:-.16s;animation-delay:-.16s}@-webkit-keyframes bouncedelay{0%,80%,100%{-webkit-transform:scale(0.0)}40%{-webkit-transform:scale(1.0)}}@keyframes bouncedelay{0%,80%,100%{transform:scale(0.0);-webkit-transform:scale(0.0)}40%{transform:scale(1.0);-webkit-transform:scale(1.0)}}
    </style>
    <meta charset="UTF-8">
<!--[if IE]><meta http-equiv='X-UA-Compatible' content='IE=edge,chrome=1'><![endif]-->
<title> Login </title>
<meta name="description" content="">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">

<!-- Favicons -->

<link rel="apple-touch-icon-precomposed" sizes="144x144" href="{{asset('assets/images/icons/apple-touch-icon-144-precomposed.png')}}">
<link rel="apple-touch-icon-precomposed" sizes="114x114" href="{{asset('assets/images/icons/apple-touch-icon-114-precomposed.png')}}">
<link rel="apple-touch-icon-precomposed" sizes="72x72" href="{{asset('assets/images/icons/apple-touch-icon-72-precomposed.png')}}">
<link rel="apple-touch-icon-precomposed" href="{{asset('assets/images/icons/apple-touch-icon-57-precomposed.png')}}">
<link rel="shortcut icon" href="{{asset('assets/images/icons/favicon.png')}}">
<link rel="stylesheet" type="text/css" href="{{asset('assets/bootstrap/css/bootstrap.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('assets/helpers/animate.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('assets/helpers/backgrounds.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('assets/helpers/boilerplate.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('assets/helpers/border-radius.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('assets/helpers/grid.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('assets/helpers/page-transitions.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('assets/helpers/spacing.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('assets/helpers/typography.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('assets/helpers/utils.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('assets/helpers/colors.css')}}">
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
<link rel="stylesheet" type="text/css" href="{{asset('assets/icons/fontawesome/fontawesome.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('assets/icons/linecons/linecons.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('assets/icons/spinnericon/spinnericon.css')}}">
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
<link rel="stylesheet" type="text/css" href="{{asset('assets/widgets/daterangepicker/daterangepicke')}}r.css">
<link rel="stylesheet" type="text/css" href="{{asset('assets/widgets/dialog/dialog.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('assets/widgets/dropdown/dropdown.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('assets/widgets/dropzone/dropzone.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('assets/widgets/file-input/fileinput.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('assets/widgets/input-switch/inputswitch.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('assets/widgets/input-switch/inputswitch-alt.c')}}ss">
<link rel="stylesheet" type="text/css" href="{{asset('assets/widgets/ionrangeslide')}}r/ionrangeslider.css">
<link rel="stylesheet" type="text/css" href="{{asset('assets/widgets/jcrop/jcrop.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('assets/widgets/jgrowl-notification')}}s/jgrowl.css">
<link rel="stylesheet" type="text/css" href="{{asset('assets/widgets/loading-bar/loadingbar.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('assets/widgets/maps/vector-map')}}s/vectormaps.css">
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
<link rel="stylesheet" type="text/css" href="{{asset('assets/widgets/summernote-wysiwyg/summernot')}}e-wysiwyg.css">
<link rel="stylesheet" type="text/css" href="{{asset('assets/widgets/tabs-ui/tabs.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('assets/widgets/theme-switcher/themeswitcher.c')}}ss">
<link rel="stylesheet" type="text/css" href="{{asset('assets/widgets/timepicker/timepicker.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('assets/widgets/tocify/tocify.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('assets/widgets/tooltip/tooltip.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('assets/widgets/touchspin/touchspin.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('assets/widgets/uniform/uniform.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('assets/widgets/wizard/wizard.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('assets/widgets/xeditable/xeditable.css')}}">
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
<link rel="stylesheet" type="text/css" href="{{asset('assets/helpers/admin-responsive.css')}}">


    <script type="text/javascript" src="{{asset('assets/js-core/jquery-core.js')}}"></script>
    <script type="text/javascript" src="{{asset('assets/js-core/jquery-ui-core.js')}}"></script>
    <script type="text/javascript" src="{{asset('assets/js-core/jquery-ui-widget.js')}}"></script>
    <script type="text/javascript" src="{{asset('assets/js-core/jquery-ui-mouse.js')}}"></script>
    <script type="text/javascript" src="{{asset('assets/js-core/jquery-ui-position.js')}}"></script>
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
<div id="loading">
    <div class="spinner">
        <div class="bounce1"></div>
        <div class="bounce2"></div>
        <div class="bounce3"></div>
    </div>
</div>

<style type="text/css">

    html,body {
        height: 100%;
        background: #fff;
    }

</style>

<div class="center-vertical">
    <div class="center-content row">

        <form action="{{ route('login') }}" id="login-validation" class="col-md-4 col-sm-5 col-xs-11 col-lg-3 center-margin" method="POST">

            {{ csrf_field() }}
            <h3 class="text-center pad25B font-green-alt text-transform-upr font-size-23">Sight Speed <span class="opacity-80"></span></h3>
            <div id="login-form" class="content-box bg-default">
                <div class="content-box-wrapper pad20A">
                    <img class="mrg25B center-margin radius-all-100 display-block" src="{{asset('assets/image-resources/gravatar.jpg')}}" alt="">
                    <div class="form-group {{ $errors->has('email') ? ' has-error' : '' }}">
                        <div class="input-group">
                            <span class="input-group-addon addon-inside bg-gray">
                                <i class="glyph-icon icon-envelope-o"></i>
                            </span>
                            <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Enter email" name="email"  value="{{ old('email') }}" required autofocus>
                            @if ($errors->has('email'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('email') }}</strong>
                                </span>
                            @endif
                        </div>
                    </div>
                    <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                        <div class="input-group">
                            <span class="input-group-addon addon-inside bg-gray">
                                <i class="glyph-icon icon-unlock-alt"></i>
                            </span>
                            <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password" name="password">
                            @if ($errors->has('password'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('password') }}</strong>
                                </span>
                            @endif
                        </div>
                    </div>
                    <div class="form-group">
                        <button type="submit" class="btn btn-block btn-primary">Login</button>
                    </div>
                </div>
            </div>

        </form>

        <form action="{{ route('password.email') }}" id="login-validation" class="col-md-4 col-sm-5 col-xs-11 col-lg-3 center-margin" method="POST">

            {{ csrf_field() }}
            <div id="login-forgot" class="content-box bg-default hide">
                <div class="content-box-wrapper pad20A">

                    <div class="form-group">
                        <label for="exampleInputEmail2">Email address:</label>
                        <div class="input-group">
                            <span class="input-group-addon addon-inside bg-gray">
                                <i class="glyph-icon icon-envelope-o"></i>
                            </span>
                            <input type="email" class="form-control" id="exampleInputEmail2" placeholder="Enter email" name="email">
                        </div>
                    </div>
                </div>
                <div class="button-pane text-center">
                    <button type="submit" class="btn btn-md btn-primary">Recover Password</button>
                    <a href="#" class="btn btn-md btn-link switch-button" switch-target="#login-form" switch-parent="#login-forgot" title="Cancel">Cancel</a>
                </div>
            </div>
        </form>

    </div>
</div>


<script type="text/javascript" src="{{asset('assets/tether/js/tether.js')}}"></script>
<script type="text/javascript" src="{{asset('assets/bootstrap/js/bootstrap.js')}}"></script>
<script type="text/javascript" src="{{asset('assets/widgets/progressbar/progressbar.js')}}"></script>
<script type="text/javascript" src="{{asset('assets/widgets/superclick/superclick.js')}}"></script>
<script type="text/javascript" src="{{asset('assets/widgets/input-switch/inputswitch-alt.js')}}"></script>
<script type="text/javascript" src="{{asset('assets/widgets/slimscroll/slimscroll.js')}}"></script>
<script type="text/javascript" src="{{asset('assets/widgets/slidebars/slidebars.js')}}"></script>
<script type="text/javascript" src="{{asset('assets/widgets/slidebars/slidebars-demo.js')}}"></script>
<script type="text/javascript" src="{{asset('assets/widgets/charts/piegage/piegage.js')}}"></script>
<script type="text/javascript" src="{{asset('assets/widgets/charts/piegage/piegage-demo.js')}}"></script>
<script type="text/javascript" src="{{asset('assets/widgets/screenfull/screenfull.js')}}"></script>
<script type="text/javascript" src="{{asset('assets/widgets/content-box/contentbox.js')}}"></script>
<script type="text/javascript" src="{{asset('assets/widgets/overlay/overlay.js')}}"></script>
<script type="text/javascript" src="{{asset('assets/js-init/widgets-init.js')}}"></script>
<script type="text/javascript" src="{{asset('assets/themes/admin/layout.js')}}"></script>
<script type="text/javascript" src="{{asset('assets/widgets/theme-switcher/themeswitcher.js')}}"></script>

</body>
</html>
