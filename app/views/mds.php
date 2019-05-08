<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Question DB</title>
    <link rel="stylesheet" href="{{asset('bootstrap-3.0.0.min.css')}}">
</head>
<body>
<div class="container">
    <div class="page-header">
        @yield('header')
    </div>
    @if(Session::has('message'))
    <div class="alert alert-success">
        {{Session::get('message')}}
    </div>
    @endif
    @yield('content')
</div>
</body>
</html><html>
  <head>
      <title>All-Gifted Math Diagnostic Test</title>

      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">



      <!-- Bootstrap 3 CSS -->
      <link href="css/bootstrap.min.css" rel="stylesheet" />
      <link rel="shortcut icon" href="img/favicon.png">
      <!-- stylesheet -->
        <link href="css/literallycanvas.css" rel="stylesheet">

        <!-- dependency: React.js -->
        <script src="http://cdnjs.cloudflare.com/ajax/libs/react/0.10.0/react-with-addons.js"></script>

        <!-- Literally Canvas -->
        <script src="js/literallycanvas.js"></script>
          <!-- Eternity Login , Registration & Forgot Password Forms CSS -->
      <link href="css/forms.css" rel="stylesheet" />

      <!-- Modenizer -->
      <script src="js/modernizr.js"></script>

      <!-- Animations CSS -->
      <link href="css/animate.min.css" rel="stylesheet" />
      <script src="http://cdnjs.cloudflare.com/ajax/libs/react/0.10.0/react-with-addons.js"></script>

      <!-- Font Icons -->
      <link href="css/font-awesome.min.css" rel="stylesheet" />
      <!-- Google Web Fonts -->
      <link href='http://fonts.googleapis.com/css?family=Roboto:400,300' rel='stylesheet' type='text/css'>
  </head>
  <body>
    @yield('header')
    @yield('content')
    <div class="container eternity-form">
        <div class="question-section">
            <form>
                <div class="section-title reg-header animated fadeInDown">
                    <h3>Question <?php echo $question_number; ?>:
                    </h3>

                </div>
                <div class="clearfix">
                    <div class="col-sm-8 registration-left-section  animated fadeInUp">
                        <div class="reg-content">
                            <div class="textbox-wrap">
                                <div class="input-group">
                                    <span class="input-group-addon "><i class="icon-user icon-color"></i></span>
                                    <input type="checkbox" class="form-control " value="Answer1" required="required">
                                    <?php echo $question_number; ?>
                                    </input>
                                </div>
                            </div>
                            <div class="textbox-wrap">
                                <div class="input-group">
                                    <span class="input-group-addon "><i class="icon-user icon-color"></i></span>
                                    <input type="text" class="form-control " placeholder="Answer2" required="required" />
                                </div>
                            </div>
                            <div class="textbox-wrap">
                                <div class="input-group">
                                    <span class="input-group-addon "><i class="icon-envelope icon-color"></i></span>
                                    <input type="email" class="form-control " placeholder="Answer3" required="required" />
                                </div>
                            </div>
                            <div class="textbox-wrap">
                                <div class="input-group">
                                    <span class="input-group-addon "><i class="icon-envelope icon-color"></i></span>
                                    <input type="email" class="form-control " placeholder="Answer4" required="required" />
                                </div>
                            </div>
                            <div class="textbox-wrap">
                                <div class="input-group">
                                    <span class="input-group-addon "><i class="icon-envelope icon-color"></i></span>
                                    <input type="email" class="form-control " placeholder="Answer5" required="required" />
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-4 registration-right-section animated fadeInUp">
                        <div class="reg-content">
                            <h4>Instructions.</h4>
                            <p>There can be more than one answer. Check only the right answers. Do not guess.</p>
                            <p>Use the canvas below as a rough working. The work on the canvas will not be marked.</p>
                            <div class="textbox-wrap">
                                <div class="input-group">
                                    <span class="input-group-addon "><i class="icon-user icon-color"></i></span>
                                    <textarea type="text" rows="10" class="form-control ">Feedback? Only if you have problems with this question.
                                    </textarea>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="registration-form-action clearfix animated fadeInUp">
                    <a href="#" class="btn btn-success pull-left blue-btn ">
                        <i class="icon-chevron-left"></i>&nbsp; I don't know.&nbsp;
                    </a>
                    <button type="submit" class="btn btn-success pull-right green-btn ">Submit Answers&nbsp; <i class="icon-chevron-right"></i></button>
                </div>
            </form>
        </div>

    </div>
    <!-- where the widget goes. you can do CSS to it. -->
    <div class="literally"></div>

    <!-- kick it off -->
    <script>
        // Look ma, no jQuery!
        LC.init(
            document.getElementsByClassName('literally')[0],
            {imageURLPrefix: 'img'}
        );

        /* or if you just love jQuery,
         $('.literally').literallycanvas({imageURLPrefix: '/static/img'})
         */
    </script>


    <!-- Jquery   -->
    <script src="_include_et_form/js/jquery-1.9.1.min.js"></script>

    <!-- PlaceHolder For Older Browsers -->
    <script src="_include_et_form/js/placeholders.min.js"></script>

    <!-- Custom Checkbox PLugin -->
    <script src="_include_et_form/js/jquery.icheck.js"></script>

    <!-- Media Query Support For Older Browsers [Ie 8 & lower] -->
    <script src="_include_et_form/js/respond.min.js"></script>



    <!-- For Initializing Checkbox And Focus Event For Textbox -->
    <script type="text/javascript">
        $(function () {

            //Custom Checkbox For Light Theme
            $("input").iCheck({
                checkboxClass: 'icheckbox_square-blue',
                increaseArea: '20%'
            });


            //Custom Checkbox For Dark Theme
            $(".dark input").iCheck({
                checkboxClass: 'icheckbox_polaris',
                increaseArea: '20%'
            });


            //TextBox Focus Event
            $(".form-control").focus(function () {
                $(this).closest(".textbox-wrap").addClass("focused");
            }).blur(function () {
                $(this).closest(".textbox-wrap").removeClass("focused");
            });

        });
    </script>

  </body>
</html>