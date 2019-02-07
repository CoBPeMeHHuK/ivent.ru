<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="shortcut icon" href="{{env('THEME')}}/test/img/favicon.png">
    <title>Федеральная онлайн платформа заказа праздника<</title>
    <link href="{{env('THEME')}}/test/css/bootstrap.css" rel="stylesheet">
    <link href="{{env('THEME')}}/test/css/font-awesome.css" rel="stylesheet">
    <link href="{{env('THEME')}}/test/css/bootstrap-theme.css" rel="stylesheet">
    <link rel="stylesheet" href="{{env('THEME')}}/test/css/animations.css">
    <link href="{{env('THEME')}}/test/css/style.css" rel="stylesheet">
</head>

<body>

<div class="cloud floating">
    <img src="{{env('THEME')}}/test/img/cloud.png" alt="Scoop Themes">
</div>

<div class="cloud pos1 fliped floating">
    <img src="{{env('THEME')}}/test/img/cloud.png" alt="Scoop Themes">
</div>

<div class="cloud pos2 floating">
    <img src="{{env('THEME')}}/test/img/cloud.png" alt="Scoop Themes">
</div>

<div class="cloud pos3 fliped floating">
    <img src="{{env('THEME')}}/test/img/cloud.png" alt="Scoop Themes">
</div>


<div id="wrapper">
    <div class="container">
        <div class="row">
            <div class="col-sm-12 col-md-12 col-lg-12">
                <img src="{{env('THEME')}}/test/img/logo.png" alt="Logo" style="
    background: #fff;
    padding: 5px 30px 10px;
    border-radius: 5px;
    width: 251px;
">
                <br/>
                <br/>
                <h2 class="subtitle">Федеральная онлайн платформа заказа праздника</h2>
                <br/>

                <script src="https://megatimer.ru/get/c090c2ac69fd1ae28ab880fd8a7ec042.js"></script>
                <div class="form-group">

                </div>


                <br/>
            </div>
            <div class="col-sm-12 align-center">

            </div>
        </div>
        <div class="row">
            <div class="col-lg-6 col-lg-offset-3">

            </div>
        </div>
    </div>
</div>


<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
<script src="http://downloads.mailchimp.com/js/jquery.form-n-validate.js"></script>
<script>

    $(document).ready( function () {
        $('#wrapper').height($(document).height());
        // I only have one form on the page but you can be more specific if need be.
        var $form = $('form');

        if ( $form.length > 0 ) {
            $('form input[type="submit"]').bind('click', function ( event ) {
                if ( event ) event.preventDefault();
                // validate_input() is a validation function I wrote, you'll have to substitute this with your own.
                if ( $form.validate() ) { register($form); }
            });
        }
    });

    function appendResult(userText , className, iconClass){
        var resultHTML = "<div class='stretchLeft result "+ className + "'>" + userText + " <span class='fa fa-" + iconClass + "'></span>" + "</div>";
        $('body').append(resultHTML);
        $('.result').delay(10000).fadeOut('1000');
    }


    function register($form) {
        $.ajax({
            type: $form.attr('method'),
            url: $form.attr('action'),
            data: $form.serialize(),
            cache       : false,
            dataType    : 'json',
            contentType: "application/json; charset=utf-8",
            error       : function(err) { alert("Could not connect to the registration server. Please try again later."); },
            success     : function(data) {
                if (data.result != "success") {
                    appendResult('Wrong Email Or You Are Already Registered, Try Again', 'error', 'exclamation');
                } else {
                    // It worked, carry on...
                    appendResult('Successful, Check Your Email For Confirmation ', 'success', 'check');
                }
            }
        });
    }
</script>

</body>

</html>
