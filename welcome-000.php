<?php $domain = isset($_SERVER['HTTP_HOST']) ? $_SERVER['HTTP_HOST'] : ''; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Welcome to <?php echo $domain; ?> Free Website</title>
    <meta name="description" content="<?php echo $domain; ?> is a free website. Simply build and host your own websites for free with the best web hosting provider 000webhost.com"/>
    <meta name="keywords" content="<?php echo $domain; ?>, 000webhostapp, web host app, free website, free web site, free hosting, free web host, free site, best web hosting, 000webhost"/>
    <meta itemprop="name" content="<?php echo $domain; ?>"/>
    <meta itemprop="description" content="<?php echo $domain; ?> is a free website. Simply build and host your own websites for free with the best web hosting provider 000webhost.com"/>
    <meta property="og:url" content="https://<?php echo $domain; ?>/"/>
    <meta property="og:site_name" content="<?php echo $domain; ?>"/>
    <meta property="og:title" content="Welcome to <?php echo $domain; ?> free website"/>
    <meta property="og:description" content="<?php echo $domain; ?> is a free website. Simply build and host your own websites for free with the best web hosting provider 000webhost.com"/>
    <meta property="og:type" content="website"/>
    <meta property="og:image" content="https://www.000webhost.com/static/default.000webhost.com/images/logo/400x400-red.png"/>
    <meta name="twitter:card" content="summary"/>
    <meta name="twitter:site" content="@000webhost_com"/>
    <meta name="twitter:title" content="Welcome to <?php echo $domain; ?> free website"/>
    <meta name="twitter:description" content="<?php echo $domain; ?> is a free website. Simply build and host your own websites for free with the best web hosting provider 000webhost.com"/>
    <meta name="twitter:image" content="https://www.000webhost.com/static/default.000webhost.com/images/logo/400x400-red.png"/>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <script src="https://use.fontawesome.com/ee069c3df0.js"></script>


    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

    <style type="text/css">
        html {
            position: relative;
            min-height: 100%;
        }

        body {
            margin-bottom: 60px;
        }

        .footer {
            position: absolute;
            bottom: 0;
            width: 100%;
            height: 60px;
        }

        .footer .container {
            padding: 0 15px;
            max-height: 60px;
            overflow: hidden;
        }

        .footer .container .text-muted {
            margin: 13px 0 5px;
        }

        .footer a {
            color: #777;
            text-decoration: underline;
        }

        td a {
            color: #666;
            text-decoration: none;
        }

        .footer a:hover {
            color: #333;
        }

        a {
            color: #B60203;
        }

        a:hover {
            color: #930203;
        }

        h2 {
            font-size: 1.5em;
        }

        .text-primary {
            color: #B60203;
        }

        .bg-primary {
            background-color: #B60203;
            color: #fff;
        }

        .navbar {
            min-height: auto;
        }

        .navbar-primary {
            background-color: #B60203;
            color: #fff;
        }

        .navbar-primary .nav.navbar-nav a {
            color: #fff;
            padding: 10px;
            height: auto;
        }

        .navbar-primary .navbar-header a {
            display: block;
            padding: 0 15px;
            margin-left: -15px;
        }

        .navbar-primary .navbar-header a:hover, .navbar-primary .nav.navbar-nav a:hover, .navbar-primary .navbar-header a:focus, .navbar-primary .nav.navbar-nav a:focus, .navbar-toggle:hover {
            background: #d70203;
            color: #fff;
        }

        .navbar-primary .nav.navbar-nav a i {
            margin-right: 10px;
        }

        .main-icon {
            width: 200px;
            height: 200px;
            margin: 2em auto 3em;
        }

        .main-icon i {
            margin: 25px 0;
            font-size: 150px;
        }

        hr {
            font-style: italic;
            margin: 6em auto 2.5em;
            max-width: 600px;
        }

        .hostname {
            font-style: italic;
        }

        .navbar-toggle {
            margin-top: 3px;
            margin-bottom: 0;
        }

        .navbar-toggle .icon-bar {
            background: #fff;
        }

        .panel-row {
            margin-top: 2em;
        }

        .panel-row .panel {
            background: #f4f4f4;
        }

        .panel-row .panel h3 {
            font-size: 1.5em;
            margin: 0.5em auto 1em;
        }

        .panel-row .panel h3 i {
            margin-right: 5px;
        }

        .panel-row .panel .description {
            margin: 2.5em 0;
        }

        .footer .social {
            margin-top: 18px;
            font-size: 1.5em;
        }

        .footer .social i {
            font-size: 1em;
            margin: 0 0.2em;
        }

        .footer img {
            margin-top: -4px;
        }

        .file_ico_php {
            background-image: url(data:image/gif;base64,R0lGODlhEAAQAPeMAMrKyufn59TU1Nra2tXV1c/Pz+Li4svLy9DQ0NLS0vj4+Obm5uPj493d3dfX197e3u7u7tjY2Lu7u83NzeTk5M7OztbW1sfHx+Xl5dvb28jIyNHR0dnZ2evr69zc3MTF1aSkpd/f34WMxTM0QlBQVurq6ltcYdna4pqex+jo583O18nJ1Hh8n2Rsvpmdx4KJxt/e3VBUctnZ1oWJt4qOv5abyIaLvvf3+I6U0ri4uWBmqJ+iwcbH0XB2p+jo6GZnc01OXr/B1ePj4Kar3U5SetTU0Wtxr/Ly8IKIxomOwoqPwri4uFJSWtnY1qmpqVJWe4mMpdLS06urq/f392x1xdLRz29ykG5xjr/B0a6urmpyvtjY21JUZ3F1l3F1odDQztPT0d3d5GlvrGdtpfv7+6Klvnd7nK+vr36CqNXV1mJmihkZHnl9nyIiIlVahtPT08zN3rS0tKGho32Cvby+1rq7wGJpuT5BW2xysy0vPMLDxmpunOHh4dLS0GJop/X19cXFxamsyb29vXJ4tkdHTOPj4pqdw+fn5h0dHWhww5SZyMzMzP///wAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAACH5BAEAAIwALAAAAAAQABAAAAj/ABkJHEiwoEAGByoUmLCoIQAJDQoKCGDAAAMKGAJ0sHDhAkECBhBoAADgwCI+BB4AKjBQAAMOBBxE4DAgAAIJS+KQESiAQoKRJisEgNABggMFAt9g8BBhQAYPDR48aFBiAFJGCRYIALBoAoI+YIpUOWRV4IYFIQbAELJFxQcsK8LIuCEQQYA0X/SUsfFiBg0kIgzBEVhgQSEeKJRYYQOEC5orLBTRYVQgRYIdQ8wwIYToRxsSJlwkYbTIh4FAOIjkuRNDzZoRT7TMYeTkz5ETNfaISdTCjhs8VAYFYXRGQJQmB6B4GeNHh5EeXeoInJKBgAUHGwRlASFHSo4EAgMCADs=);
        }

    </style>
</head>
<body>
<nav class="navbar navbar-primary">
    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a href="https://www.000webhost.com/" target="_blank"><img
                    src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAJYAAAAoCAYAAAAcwQPnAAAAGXRFWHRTb2Z0d2FyZQBBZG9iZSBJbWFnZVJlYWR5ccllPAAAAyhpVFh0WE1MOmNvbS5hZG9iZS54bXAAAAAAADw/eHBhY2tldCBiZWdpbj0i77u/IiBpZD0iVzVNME1wQ2VoaUh6cmVTek5UY3prYzlkIj8+IDx4OnhtcG1ldGEgeG1sbnM6eD0iYWRvYmU6bnM6bWV0YS8iIHg6eG1wdGs9IkFkb2JlIFhNUCBDb3JlIDUuNi1jMTExIDc5LjE1ODMyNSwgMjAxNS8wOS8xMC0wMToxMDoyMCAgICAgICAgIj4gPHJkZjpSREYgeG1sbnM6cmRmPSJodHRwOi8vd3d3LnczLm9yZy8xOTk5LzAyLzIyLXJkZi1zeW50YXgtbnMjIj4gPHJkZjpEZXNjcmlwdGlvbiByZGY6YWJvdXQ9IiIgeG1sbnM6eG1wPSJodHRwOi8vbnMuYWRvYmUuY29tL3hhcC8xLjAvIiB4bWxuczp4bXBNTT0iaHR0cDovL25zLmFkb2JlLmNvbS94YXAvMS4wL21tLyIgeG1sbnM6c3RSZWY9Imh0dHA6Ly9ucy5hZG9iZS5jb20veGFwLzEuMC9zVHlwZS9SZXNvdXJjZVJlZiMiIHhtcDpDcmVhdG9yVG9vbD0iQWRvYmUgUGhvdG9zaG9wIENDIDIwMTUgKE1hY2ludG9zaCkiIHhtcE1NOkluc3RhbmNlSUQ9InhtcC5paWQ6RTA4NjZDMDM1MTlEMTFFNkFFODA5RkI3MkQxRUVBN0YiIHhtcE1NOkRvY3VtZW50SUQ9InhtcC5kaWQ6RTA4NjZDMDQ1MTlEMTFFNkFFODA5RkI3MkQxRUVBN0YiPiA8eG1wTU06RGVyaXZlZEZyb20gc3RSZWY6aW5zdGFuY2VJRD0ieG1wLmlpZDpFMDg2NkMwMTUxOUQxMUU2QUU4MDlGQjcyRDFFRUE3RiIgc3RSZWY6ZG9jdW1lbnRJRD0ieG1wLmRpZDpFMDg2NkMwMjUxOUQxMUU2QUU4MDlGQjcyRDFFRUE3RiIvPiA8L3JkZjpEZXNjcmlwdGlvbj4gPC9yZGY6UkRGPiA8L3g6eG1wbWV0YT4gPD94cGFja2V0IGVuZD0iciI/Pm/oZiUAAAoTSURBVHja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"
                    alt="000webhost"></a>
        </div>

        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav navbar-right">
                <li><a href="https://www.000webhost.com/upgrade" target="_blank"><i class="fa fa-heart"></i> Upgrade</a></li>
                <li><a href="https://www.000webhost.com/forum/" target="_blank"><i class="fa fa-comment"></i> Forum</a></li>
                <li><a href="https://www.000webhost.com/cpanel-login" target="_blank"><i class="fa fa-lock"></i> Login</a></li>
            </ul>
        </div>
    </div>
</nav>

<div class="container">
    <div class="row">
        <div class="col-lg-12 text-center">
            <div class="main-icon img-circle bg-primary"><i class="fa fa-lightbulb-o"></i></div>
            <h1 class="text-primary">Hooray, your free website has been started!</h1>
            <h2 class="hostname"><?php echo $domain; ?></h2>
            <br><br>
            <div class="text-center row">
                <div class="col-md-8 col-md-offset-2">


                    <div class="well well-sm">
                        <p>You see this page because your website doesn't have &quot;<strong>index.php</strong>&quot; or &quot;<strong>index.html</strong>&quot; file in <strong>public_html</strong> folder.<br/>
                        Below you can see your current files in <strong>public_html</strong> folder.</p>
                    </div>


                    <div class="table-responsive">


                        <?php
                        $host = $_SERVER['HTTP_HOST'];
                        /*
                        Directory Listing Script - Version 2
                        ====================================
                        Script Author: Ash Young <ash@evoluted.net>. www.evoluted.net
                        Layout: Manny <manny@tenka.co.uk>. www.tenka.co.uk
                        */
                        $startdir = @$_SERVER['PHP_DOCUMENT_ROOT'];
                        $showthumbnails = false;
                        $showdirs = true;
                        $forcedownloads = false;
                        $hide = array(
                            'dlf',
                            'public_html',
                            'index.php',
                            'Thumbs',
                            '.htaccess',
                            '.htpasswd'
                        );

                        $displayindex = false;
                        $allowuploads = false;
                        $overwrite = false;
                        $indexfiles = array(
                            'index.html',
                            'index.htm',
                            'default.htm',
                            'default.html'
                        );

                        $filetypes = array(
                            'png'   => 'data:image/gif;base64,R0lGODlhEAAQAOYAAFNAQqWSl6aFlamUqJaCpod1pYqCs2pntpWXw6ux+GxzpYqStpil1XSEtrvK+nuNwnqTxoObycPW/JOny6O85Yao2LfX/ent8nKm4nim2qXL9JbG96jS/YeqzMbi/tXp/tPd593k6+Xm50CS4Haz6ujz/UOm9/r8/fnlhf/hevnUeenHe+bIgf/dmv3FYvXFdNi3g/S6ZP22WaloJ/2oUteldviVRbV3RdOdceuFOYpYMOKSU9uRWfyKQ2VDLfuDO8iTdP1zNrNZMf2VZvxtM/2GVLeDb+ZXJ7I0EtlJIbyJe9JBHWg0J8g1GMCblbeYk60yLWZmZv///wAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAACH5BAEAAFIALAAAAAAQABAAAAeygFIVg4SEUVKIiRUnjI0nFSSHiYKOjSYmI5KIi5UlEhIJDZqLQ0RBPTQuJR8fDqMnRUJBNjItLzQTroonUExITUtHR0kRupslOzozOT8xPzkdxoIXNTc+PDsqKjwV0hEiTkoARjgsK0AZ0hAhAwUHAiwoKU8ZGpoPIQgGBAQBMCsEMNhL1ADEBw4cNGjYwJADBU0FP3iYaKEiwoeJFDDYyGACgo8IFhjQJCWKyZMoTSIKBAA7',
                            'jpeg'  => 'data:image/gif;base64,R0lGODlhEAAQAOYAAFNAQqWSl6aFlamUqJaCpod1pYqCs2pntpWXw6ux+GxzpYqStpil1XSEtrvK+nuNwnqTxoObycPW/JOny6O85Yao2LfX/ent8nKm4nim2qXL9JbG96jS/YeqzMbi/tXp/tPd593k6+Xm50CS4Haz6ujz/UOm9/r8/fnlhf/hevnUeenHe+bIgf/dmv3FYvXFdNi3g/S6ZP22WaloJ/2oUteldviVRbV3RdOdceuFOYpYMOKSU9uRWfyKQ2VDLfuDO8iTdP1zNrNZMf2VZvxtM/2GVLeDb+ZXJ7I0EtlJIbyJe9JBHWg0J8g1GMCblbeYk60yLWZmZv///wAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAACH5BAEAAFIALAAAAAAQABAAAAeygFIVg4SEUVKIiRUnjI0nFSSHiYKOjSYmI5KIi5UlEhIJDZqLQ0RBPTQuJR8fDqMnRUJBNjItLzQTroonUExITUtHR0kRupslOzozOT8xPzkdxoIXNTc+PDsqKjwV0hEiTkoARjgsK0AZ0hAhAwUHAiwoKU8ZGpoPIQgGBAQBMCsEMNhL1ADEBw4cNGjYwJADBU0FP3iYaKEiwoeJFDDYyGACgo8IFhjQJCWKyZMoTSIKBAA7',
                            'bmp'   => 'data:image/gif;base64,R0lGODlhEAAQAOYAAFNAQqWSl6aFlamUqJaCpod1pYqCs2pntpWXw6ux+GxzpYqStpil1XSEtrvK+nuNwnqTxoObycPW/JOny6O85Yao2LfX/ent8nKm4nim2qXL9JbG96jS/YeqzMbi/tXp/tPd593k6+Xm50CS4Haz6ujz/UOm9/r8/fnlhf/hevnUeenHe+bIgf/dmv3FYvXFdNi3g/S6ZP22WaloJ/2oUteldviVRbV3RdOdceuFOYpYMOKSU9uRWfyKQ2VDLfuDO8iTdP1zNrNZMf2VZvxtM/2GVLeDb+ZXJ7I0EtlJIbyJe9JBHWg0J8g1GMCblbeYk60yLWZmZv///wAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAACH5BAEAAFIALAAAAAAQABAAAAeygFIVg4SEUVKIiRUnjI0nFSSHiYKOjSYmI5KIi5UlEhIJDZqLQ0RBPTQuJR8fDqMnRUJBNjItLzQTroonUExITUtHR0kRupslOzozOT8xPzkdxoIXNTc+PDsqKjwV0hEiTkoARjgsK0AZ0hAhAwUHAiwoKU8ZGpoPIQgGBAQBMCsEMNhL1ADEBw4cNGjYwJADBU0FP3iYaKEiwoeJFDDYyGACgo8IFhjQJCWKyZMoTSIKBAA7',
                            'jpg'   => 'data:image/gif;base64,R0lGODlhEAAQAOYAAFNAQqWSl6aFlamUqJaCpod1pYqCs2pntpWXw6ux+GxzpYqStpil1XSEtrvK+nuNwnqTxoObycPW/JOny6O85Yao2LfX/ent8nKm4nim2qXL9JbG96jS/YeqzMbi/tXp/tPd593k6+Xm50CS4Haz6ujz/UOm9/r8/fnlhf/hevnUeenHe+bIgf/dmv3FYvXFdNi3g/S6ZP22WaloJ/2oUteldviVRbV3RdOdceuFOYpYMOKSU9uRWfyKQ2VDLfuDO8iTdP1zNrNZMf2VZvxtM/2GVLeDb+ZXJ7I0EtlJIbyJe9JBHWg0J8g1GMCblbeYk60yLWZmZv///wAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAACH5BAEAAFIALAAAAAAQABAAAAeygFIVg4SEUVKIiRUnjI0nFSSHiYKOjSYmI5KIi5UlEhIJDZqLQ0RBPTQuJR8fDqMnRUJBNjItLzQTroonUExITUtHR0kRupslOzozOT8xPzkdxoIXNTc+PDsqKjwV0hEiTkoARjgsK0AZ0hAhAwUHAiwoKU8ZGpoPIQgGBAQBMCsEMNhL1ADEBw4cNGjYwJADBU0FP3iYaKEiwoeJFDDYyGACgo8IFhjQJCWKyZMoTSIKBAA7',
                            'gif'   => 'data:image/gif;base64,R0lGODlhEAAQAOYAANTJ1llDl0ZGrP39/q2w/JOWwYWKtJOazGx0pZOaxImRuczV/3WEt5im05ShynmNwLvL87HF8XuUx4KczDxsvYKg06O85rPK8Yep3Iiq3MLb/yNv1ajK9ZzG9cvj/uPs9pnL/KPR/qrU/rLY/bLV+rrb/tPd50KW5Xi38sLh/tPp/tvt/uPx/ur0/UOm91Kr9vP5/guL8YjI+wiU8gCZ/trk6e7w8Q6n4ubo6FfwT2r6Md3jxr/DgeXUCNzJI+fGJu7XY/3MAPDMKf4zAO80DsZ6evPz82ZmZv///wAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAACH5BAEAAEgALAAAAAAQABAAAAexgEgYg4QZFRgMSIqLGAOOjzAYKEeLio2PAzAwLi4nlIyYmi0LCwQMn4IDQ6tFKSssKyoQqBhGq0MUNDQyKh6zjLZDARu6NCW+tDZDRALEujIaF6gVHwAAMTM3uiDRqBM4sDI5OjQvIyURqBI1KytAQT0+HSUkHKgP7DtCP/w8IvWoGJjoVWIECREIRVgIaMKDhxQlCooIwWHhIgQNMjZwcCBBggIKDKBCcqSkyZMlFQUCADs=',
                            'zip'   => 'data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABAAAAAQCAMAAAAoLQ9TAAABPlBMVEX////etQFhqOuLyvnxGQHf9P/H7P2Ew/P667P73WQjX7Asarv81DH0///7887755e0z/bTqR7kzYP84n392UfatCrVpQurbQ1mrO3buTN1seR7vPFot//83m366KG95//b8P/j9f//+5ohW612t/DPoRD/+pDSoAfI2PbX8P/92lGYwvWyeyNEk+Tz5G3374LSphTUpxu4hCiqbQ3aujX2zSyBwPKCxP+JyffUqR7Uowj78L3//aTUqiHVphCt2/n+0zjevjubz/UnZrhuse4warH91TlTqvvUqSB4vv9yu/+sdB3Zvyr6449bmdfZtylhs/9ysebZvyz66a2Iw/PZvC/69ZD82Vj73nT/+IbVphbYrii85fsoZbZ1t/Bitf/59uXZtzG0fA/85IX47sqyfQ4naccIJ2P////PoQ7NL84fAAAAAXRSTlMAQObYZgAAAAFiS0dEaMts9CIAAAAWdEVYdFNvZnR3YXJlAGdpZjJwbmcgMi40LjakM4MXAAAAuUlEQVR42mNgAAN2M+k4FwluEFMoMzNTiImXLcbeKUQlHSiQycLCkpkGBrrxfkARVVF/n6DQREkTx6R0eSmggG0GENgoqUXqpaZrsgMFLDMSUoJ9I8IdGFPTWZmBAoIZfBz8wpwiPDgFPMKs5ZJltdxMgQKKFkABA/1owyg7MSt1oIBCIFDASEfc2BvijnRz13SIwxmYeGUCvDzdnWF8oAh3LBeXMoIPBukofCYGAW0BDTaEWBrUXAYAT+wtHYLRy84AAAAASUVORK5CYII=',
                            'rar'   => 'data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABAAAAAQCAMAAAAoLQ9TAAABPlBMVEX////etQFhqOuLyvnxGQHf9P/H7P2Ew/P667P73WQjX7Asarv81DH0///7887755e0z/bTqR7kzYP84n392UfatCrVpQurbQ1mrO3buTN1seR7vPFot//83m366KG95//b8P/j9f//+5ohW612t/DPoRD/+pDSoAfI2PbX8P/92lGYwvWyeyNEk+Tz5G3374LSphTUpxu4hCiqbQ3aujX2zSyBwPKCxP+JyffUqR7Uowj78L3//aTUqiHVphCt2/n+0zjevjubz/UnZrhuse4warH91TlTqvvUqSB4vv9yu/+sdB3Zvyr6449bmdfZtylhs/9ysebZvyz66a2Iw/PZvC/69ZD82Vj73nT/+IbVphbYrii85fsoZbZ1t/Bitf/59uXZtzG0fA/85IX47sqyfQ4naccIJ2P////PoQ7NL84fAAAAAXRSTlMAQObYZgAAAAFiS0dEaMts9CIAAAAWdEVYdFNvZnR3YXJlAGdpZjJwbmcgMi40LjakM4MXAAAAuUlEQVR42mNgAAN2M+k4FwluEFMoMzNTiImXLcbeKUQlHSiQycLCkpkGBrrxfkARVVF/n6DQREkTx6R0eSmggG0GENgoqUXqpaZrsgMFLDMSUoJ9I8IdGFPTWZmBAoIZfBz8wpwiPDgFPMKs5ZJltdxMgQKKFkABA/1owyg7MSt1oIBCIFDASEfc2BvijnRz13SIwxmYeGUCvDzdnWF8oAh3LBeXMoIPBukofCYGAW0BDTaEWBrUXAYAT+wtHYLRy84AAAAASUVORK5CYII=',
                            'exe'   => 'data:image/gif;base64,R0lGODlhEAAQAOYAAFYtQOLj/DxQ/y1B4pugyJKXutne+5GUp+vu/2JuqipIyiU/rFFy/0VarkZv/05z/0hann2Y/5mv/1+G/6W7/4Oi/z5NdYqZwpeiw5ulw9LY6lGB/zZIdj5PekVcj7vO+eTp9D1VhUFXhGB4qVdsl4ig0rHK/7vN89Hg//L2/uzt77zQ9cXZ/8nc/7TA1c/Z7OTt/e70/16Gw9/n8vP4/6CwwCxJY+bz/1xqdnuSmUhnWF1tYytrFI2qg0qAJ8Dcq3imRHGTSGedJXWeQ67ibKfSb5PmFmSFMJ//AJz0AIrdApzuE4fKC3+7D4rCIoqzPoa9F56xblxkLoSJVf/rAP/hApF5Af/UBN7AJ9W5K+zMML2kMffGBP/QEOjEIOy5ANSmANSvMd6kBI+Lf25TLP/Db/+UH8B+M/+uVf+YK/F6CPyRLt6aXP+KJ/+zcf+LNtdnGv9sEf5WAqw2Fno+LdOtpdgkAv///7Ozs////wAAAAAAAAAAAAAAAAAAAAAAACH5BAEAAHkALAAAAAAQABAAAAe9gHmCeSSFhoWDiYR3jIwpiIqLNCmUICQ3JJEkd5QxMTOHiW5sb3UwAQgGGi80JHiCa21ocXM9RT9ELih3roJmaWhydD5NS0YZLbyvZWpncHZkQkxJTgXJvTUJMhAAPFBKSEME168TGyYMCkdBQE9TGOR5DhUUAjZiXlpdByfxDxIRBkgBw6VKlgsrWCjLgWNHgwVWvlyhsqXEB4W9BumIEsYLljEq7tBQlmiEhw4WOIgQEcLQq0R4YsqciScQADs=',
                            'txt'   => 'data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABAAAAAQCAMAAAAoLQ9TAAAAsVBMVEX///+GaULUv0uQazF4eMGdgl2UlJSjo6NpaWnBz9br9fNycnLJyeN+goLh4eGcoqK/yti+0NGEbm29wMvBztm/ztW8qpG/zdW9m06khT2NjY2ipaTX19eQkZG+tLrCwsK8zNSAgICNeW+2ys68wMDDycjs9fS7zdC+zdSUfmO5ttOpkG9rbW3b29ufn5/ExuLx+Pf8/f3s9vT3+/pxcXHW1tZ4eMB+f3/p9PL///+7vb1gNwqKAAAAAXRSTlMAQObYZgAAAAFiS0dEOdcAlUAAAAAWdEVYdFNvZnR3YXJlAGdpZjJwbmcgMi40LjakM4MXAAAAf0lEQVR42mNgwAIkmJglmTSZhFhNIXweFhZmMSUtbTlWdj6wgJk+owWjEaMxo6WJDERA3cLCwsjA2NDSBKLHjBNdQNTC3NzcCklAHF2FIEiFuZUlXEADXYUAugoRdBUKFuZWKALKFhZcaqoq0rJsuhDPCPPz6nBwK0rpyWPzOgDQNxtNkr7BnAAAAABJRU5ErkJggg==',
                            'setup' => 'data:image/gif;base64,R0lGODlhEAAQALMAAGZmzDNm/zNmzDOZzGbM/wCZzAD//2b//wD/AP//AP///9fX18DAwIaGhgAAAP///yH5BAEAAA8ALAAAAAAQABAAAARr8MnZlr2ruUmB+J+icVIDEMdBDOJGNWa6Fi2liIA6FEENwwzTLCBoNW4NRlDJVI5gDudvytgco1WH1vGrPq5BgyFxw3qvDQNjrFBuS9XkWuvmJLlMB0LsguMZbQh1FFlHbQkIfRJvD1taJBEAOw==',
                            'htm'   => 'data:image/gif;base64,R0lGODlhEAAQAOYAAFBQg1RUh1ZWiczM//7+/1hZi2Bikmlrm3F2pXuAqnOAs7vJ/zNHarHM/5613KvN//b4+zFEXh08YKDA5b7W8Obt9fL4/zR1tj1qlpbG+W6NrKjJ677e/7vb+8Lg/8Xi/7/b98fj/8rk/52uwNLo/8TW6Nvt/+v1//3+/zWL2ypejVaJuUNlhYqv0oOmxbXS7rnO4tjp+eTy/y6U6CZ6vzKZ7TKX7Daa70h+qmObyHGq2SqHzECo+D6a4y5woT6OyyKIzymW5Tqp8zmW2WWVtiaa5DWc30ms62y56sLn/+ry9yqk6jCo6yqMxZC71C+28Ta680TJ+HPW/MPm83bQ64/p/nDz/P////T09Nzc3MTExJSUlHBwcP///wAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAACH5BAEAAF0ALAAAAAAQABAAAAfVgF2CLYSFhApZgopdLShXj5AKOVqLjI8VJYQvCgs9lIotOSuiK1dQB6gJW4IrK1VWUVA5V0gVFgsJXF1EOVNMTU1FSzhXJycLCLorXS4+E1c0PEMaMTILB1zLLk9AR0cpNTw4MCbXui5RRSrr7BgwJA0GXC5SPkEqGUn6ISIbIg0Fsg2xN+PChB0IWbz48CAAFyMjfvi4YUMIFSQRnHTg8AAAFx0uuvxQIYGBBBYOKAzw0FGXjpcDJjiAMQDEgBADGuoSVKCAgJ8+g/rcKYiL0aNIjQYCADs=',
                            'html'  => 'data:image/gif;base64,R0lGODlhEAAQAOYAAFBQg1RUh1ZWiczM//7+/1hZi2Bikmlrm3F2pXuAqnOAs7vJ/zNHarHM/5613KvN//b4+zFEXh08YKDA5b7W8Obt9fL4/zR1tj1qlpbG+W6NrKjJ677e/7vb+8Lg/8Xi/7/b98fj/8rk/52uwNLo/8TW6Nvt/+v1//3+/zWL2ypejVaJuUNlhYqv0oOmxbXS7rnO4tjp+eTy/y6U6CZ6vzKZ7TKX7Daa70h+qmObyHGq2SqHzECo+D6a4y5woT6OyyKIzymW5Tqp8zmW2WWVtiaa5DWc30ms62y56sLn/+ry9yqk6jCo6yqMxZC71C+28Ta680TJ+HPW/MPm83bQ64/p/nDz/P////T09Nzc3MTExJSUlHBwcP///wAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAACH5BAEAAF0ALAAAAAAQABAAAAfVgF2CLYSFhApZgopdLShXj5AKOVqLjI8VJYQvCgs9lIotOSuiK1dQB6gJW4IrK1VWUVA5V0gVFgsJXF1EOVNMTU1FSzhXJycLCLorXS4+E1c0PEMaMTILB1zLLk9AR0cpNTw4MCbXui5RRSrr7BgwJA0GXC5SPkEqGUn6ISIbIg0Fsg2xN+PChB0IWbz48CAAFyMjfvi4YUMIFSQRnHTg8AAAFx0uuvxQIYGBBBYOKAzw0FGXjpcDJjiAMQDEgBADGuoSVKCAgJ8+g/rcKYiL0aNIjQYCADs=',
                            'php'   => 'data:image/gif;base64,R0lGODlhEAAQAPeMAMrKyufn59TU1Nra2tXV1c/Pz+Li4svLy9DQ0NLS0vj4+Obm5uPj493d3dfX197e3u7u7tjY2Lu7u83NzeTk5M7OztbW1sfHx+Xl5dvb28jIyNHR0dnZ2evr69zc3MTF1aSkpd/f34WMxTM0QlBQVurq6ltcYdna4pqex+jo583O18nJ1Hh8n2Rsvpmdx4KJxt/e3VBUctnZ1oWJt4qOv5abyIaLvvf3+I6U0ri4uWBmqJ+iwcbH0XB2p+jo6GZnc01OXr/B1ePj4Kar3U5SetTU0Wtxr/Ly8IKIxomOwoqPwri4uFJSWtnY1qmpqVJWe4mMpdLS06urq/f392x1xdLRz29ykG5xjr/B0a6urmpyvtjY21JUZ3F1l3F1odDQztPT0d3d5GlvrGdtpfv7+6Klvnd7nK+vr36CqNXV1mJmihkZHnl9nyIiIlVahtPT08zN3rS0tKGho32Cvby+1rq7wGJpuT5BW2xysy0vPMLDxmpunOHh4dLS0GJop/X19cXFxamsyb29vXJ4tkdHTOPj4pqdw+fn5h0dHWhww5SZyMzMzP///wAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAACH5BAEAAIwALAAAAAAQABAAAAj/ABkJHEiwoEAGByoUmLCoIQAJDQoKCGDAAAMKGAJ0sHDhAkECBhBoAADgwCI+BB4AKjBQAAMOBBxE4DAgAAIJS+KQESiAQoKRJisEgNABggMFAt9g8BBhQAYPDR48aFBiAFJGCRYIALBoAoI+YIpUOWRV4IYFIQbAELJFxQcsK8LIuCEQQYA0X/SUsfFiBg0kIgzBEVhgQSEeKJRYYQOEC5orLBTRYVQgRYIdQ8wwIYToRxsSJlwkYbTIh4FAOIjkuRNDzZoRT7TMYeTkz5ETNfaISdTCjhs8VAYFYXRGQJQmB6B4GeNHh5EeXeoInJKBgAUHGwRlASFHSo4EAgMCADs=',
                            'fla'   => 'data:image/gif;base64,R0lGODlhEAAQANUAAG0eH28fIFwZG21ITUQmK1U3PQAmSQAyXgA3YAMvUQFBaRJGZxFbgv9HFf8yAP8rAOopA9gzD7wvF6czHuseAN8cAPUaAMoZBr4ZB6oeDdEPAMwPAKgbEp4aFoweGnAWFf///wAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAACH5BAEAACAALAAAAAAQABAAAAamQJBQ2AEIjJ2hElTkbJ4bjCCpFHg2lQrFYtFcPIBhx6OhUB4PiCGhqHiogDIE7TAoGIyKlJmhzB0OEwgMAw8aT0UbZw8ODwYMCw8VGpRGZYwPEXYIBg0UlEcbGox1CKYIDZQaRk8VFmoIBQ0WZodTT2UGBwcSnpOiSXECBggJBL6/YUweHwkIHV2/G29DAGSflFgaHgJLHQEWDw0NDxYAVEtMRkhLQQA7',
                            'swf'   => 'data:image/gif;base64,R0lGODlhEAAQANUAAOjn7N/e5e/w887S2+vt8crO1d/i57C8zLvF0oKSpZmnuai1xbXAzn+QowAiQ1Fme2Z5jW2Ak3OGmjhRaEphdl90iGp+kZCgrqSwugMyVRY5VZ2ywIOTngQwTQk/YQ1DZR9RcVd+lhJbgv///93d3f///wAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAACH5BAEAACUALAAAAAAQABAAAAaswJJQ+JgYJ4+hslSUJBaLhAS5nEAwhUDAMMAoIJPho1IwAASAgcMBOkCSpUkWMBoJNB+RyIAIPyBbdSMJHiINBiQBbw9lAoIOIiAbAwEkB0YDBoIMDh8eGQZaBZgGjiOdGakCiaMTA5QGBQ4ZIXWhAX2Mr7KpGABaiQtJchCzGRYjlKxhJRRfHQ4RaZUBABFwTBcDACS3BNbYQhwUAHQjAAYUDUtDEg/vDxJLQQA7',
                            'xls'   => 'data:image/gif;base64,R0lGODlhEAAQAOYAAPv9/Onx6tvq3ANoA9rp2tno2djn2N/s397r3uHt4eTv5Obw5uny6ejx6O317evz6+/27/H38fT59PP48/b69vX59fb59vj6+P7//v3+/fz9/B13HEyWSjSHMWOZYFmkVGisY1mCVt3q3EaTP0iHQW6wZ+Pu4i9RK2SqW12aVnS2bHu7coXBe5zHlLLWqqfQnXWyYoq1e5C8gZW3inagZXuma4CqcIWvdU6MNF6TSGqWV2aOVHGbXo2qgSlMGTdcJVaMPEtyOTBSHUZsMmGHTEFlK1Z6QFyARvr7+f////7+/gAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAACwAAAAAEAAQAAAH4YAyMTc2NTQ8OjtEREdGRkFBMS4uLy8tlzOChIWRLklJGBkASBcUEhEQDjRBNy5KGaKkFqepD6s2L0olICApFhMhwSEMPEM1LxocLisrOSElHx0DC8U0LaMjLyooJNHTCjpFPC1IFBUdLSgfQ9MmCeE6M+YT0TI5HD8eHgc5Pzsypz7A+LCBxb0fPUT0IxKD3omHJzaoOCig35EbtRg0UNAD4gkCQIQYseHgQYAFCkwcQCBAAAEDIY3UeNAApUoEIgQUMGAAh48ghg4h0pGjKBAgOHxCCjKkaZGnP6IKmeojEAA7',
                            'doc'   => 'data:image/gif;base64,R0lGODlhEAAQAPcAAPr6/vn5/fj4/Pv7/vr6/fz8/v7+//Hy+/Dx+ujq+Ofp9/T1/PP0++jq9+vt+ezu+fX2/PT1++Xo9+fq+Obp9+Xo9u3v+ff4/fb3/ODk9ert+ens+Ojr9+7w+ff4/OPn9vL0+/Hz+ubq9+zv+evu+ElrxlV0yFp5zlx6y2iBx3KM0nuW33SN0n6V2Jaq4Ky75sDP96673+3w+fT2/PP1+/r7/vn6/T5nzUltxVd821N0ymeK32qO5G2R526R6GyP5F16xHGT63GU63OW7WiG0WiDyXeV4nGO02R5rX2X2Iig3JGr6ZGo5Jqy7Z217qG475is4aW78Km+8K3B8rHE8rXH9LvM9bzM9b7O9qu53cLL4uru+PX3/DlhtjhWmUtxw0twwU91x090xVJ4ylR6zFd8z1uA1Fl+0V2C1mCE2GKG22SI3WeM4WR+t4ai3oCa1Iml4Yik4Iun5Iyn5JCr6Y6q5pKt64+p5oOb0ZSu65aw7Jqz7J217bjK9CVQqUN13i9PkUZ00UFouERru0RrukduvUhuvn+d136b1YGe2IOg2oWi3fv8/iNFhSZIiHKRyHaWznmY0XqZ0Xyb0xREkBhIkxxMmB9PnCBQnCRToCdXpCtaqCxapy5cqi9dqjFfrShOjTNhr3GRyHCQx3OTynSUy3aWzdnf6e3w9QAzfAI0fgI1fgU3gQg6hAs+iAs+hw9BixNEjxdIkxtMmCNUoM3W4+/y9ebp7P3+//z9/vv8/XuPoBM6V3aLmZyrtau4wP7///3+/v////7+/gAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAACwAAAAAEAAQAAAI/wCHDBHi4webNWnMlBkjBkwhQqGGwMBypU8VKlOkRHnCZ4+ePJ+CYBFGEhiuXLoA2BCAIcKSTj2skDQwLBejGgE8YFjAoA4nHn1aqGBhIkYNLx50oDhRYo6mHVVWMGGCRBgRQFqgpOjyBk4mNVSCKWmTQQkUR1qydOGFyg0mNFMKJGnzosifRi4Cgdo1QtGsM1IGHGmD5w8oHEXWniJxSBaZKASKGDFcK4fhXho2TIoV5okNIIZv2boBitepDRwiwfri5IIfUL9CIPDDy9eGBApMuTLUhMsMGgcQdLDgYEMDChJItRqkBwII2TIebNkwQUSFD6JYCcpjh84dOXEWJRxCJAlSqUejVoX65GmTJlqXLFWiBOtVK1aqUgUEADs=',
                            'sig'   => 'data:image/gif;base64,R0lGODlhEAAQAMQAAGYzZjMzZpmZ/2ZmmczM/zNmmZnM/2bM/8z//8zMAGZmAMzMZpmZZv/MAJlmAP/MZmYzAMyZZqoAAIgAAMxmZv///8zMzKqqqlVVVQAAAP///wAAAAAAAAAAAAAAAAAAACH5BAEAABoALAAAAAAQABAAAAVwoCaOZKkJaJoOplC9cDUYQOlWBI4PR1GPrpxQBiiSXIakMolgAXGEqBTR1Egmp8py2cRQJJmgdHpZLDCQ7DZZbijS2THBwHgk0E8Y9eKIQOAiLhcWVAgGDhAGAUcVF44XbEmLQASFa5OBAZqbnJgaIQA7',
                            'fh10'  => 'data:image/gif;base64,R0lGODlhEAAQANUAAAMvUAMzVQMoQSJDWgk/YBBEZiJVdCdkgCR2jARTYxNvhA+FjxSToBiJlEuutCehpVK9wgHLzhSnqBjFxhq4uhmusTjDxT/Z2lnQ0gDX1wC3twCsrACTkxPX1yPc3CrKyjrh4Ufl5Vbp6Wnu7n719Z/8/P///wAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAACH5BAEAACYALAAAAAAQABAAAAayQJNQyCkah0hTcRNpRjbFJIeZ6Xg8HYYEOpxmPCFR6BEYRDJcZcQjGpEgAYMBG+GYNppOiFQixQ8XIR4ZGhISa24lEAIGGmAhHRGGGSAjAXEGBw1xCoMSD1+WCAYFGgEFBZ0ZDxQRHSAgCpcjcAEMHhEUFBMdFAoCAQgOwAG8ExQmFBkJlwkXAgACFYPIJh8fzAtXAgQUHRnXQ9eBV1chF+FIFhYYIyUlIxjrSUPr9hZJQQA7',
                            'pdf'   => 'data:image/gif;base64,R0lGODlhEAAQAMQAANUEBvcFBokJCv4mKfo3OfVMTvhhYvtydOWJiuien+mxs9ays/+qruzb3O7o6b22u9jU2Hl3ehEREqGhp8XFy7+/xYqKju/v8e72+DY1NPkVFchaWv///15eXikpKf///yH5BAEAAB8ALAAAAAAQABAAAAWN4CdGZFmK6EhV7DNZUIYeRmET+ABYHCd/B8JAEygGAIJIz/cxDIlFANJSsmSQgqw266BQHhQJKgKhQCAbiONsFo/WEE7BQS873J/I2tEgJDh1d2N0HAcXCAyAanh6fAUMDDYbCByMPRsKDRgcFwsGgm+TgHRrbWMGB6NnbBCWo3WseB0ZtB4ZHh4SurohADs=',
                            'psd'   => 'data:image/gif;base64,R0lGODlhEAAQANUAAEZQYDE/UzdFWjI/TGpzeTuCp2yKlKK5v+/x8ezu7VFcVdTX1UBaRlRrVW2Jblt6V2KNTl+ATW2KXXqXYIONenOaR4KfXpuqhGNoWoGaQo+cbMvSuZKrRra+n5qyR6C3Rl9qL6q2at/jy5SdTW10PLK8RbfBR6avQs7Sl+7v3sDERru/XKGiVsC/diMjIff06Zt/OdGaMLiHNPKPR+6hbfe7kv3r4P///wAAAP///wAAAAAAAAAAAAAAAAAAAAAAACH5BAEAADkALAAAAAAQABAAAAafwJyQQCwWhcjhbXlLOAkD5AbVaVlboZAlQbhFcyjs58M6cUYk7jKKCo3JHE4GxMXYBxaQfr9/tSICBjhIXUxLFxAPAgSDSkwvKB8VAAGMhIYiKiYeEgILjTmFNykqJSsqHgwHoIUJGh8qmiYNCKxLNDIWsSYnXbY2MDAlFxdaCze2NTEULB8TDhtLrCkzywUTFRpMoAoD3i4DLi445ORBADs=',
                            'rm'    => 'data:image/gif;base64,R0lGODlhEAAQAMQAAKqfqiofVX9/qqCgpFVfqio/qqq//3+f/9Tf/ypfqlWf/yo/VX+//1V/qqbK8H+fqlWfqipfVcDcwKq/qlVfVf///4CAgP///wAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAACH5BAEAABcALAAAAAAQABAAAAWI4CWOZGkST6M+pvi8zxELllU6jsHID/MoEMKI4WA0JpVk0vGALC44BgVQIQgkhAaicmhQcI9FkrJoLChbiRl3WEgqiwKhsq04zA8mZYAIBB5KCA0JT0UPBAMSdRUTDQQRIhM9EF0WEgAqCZAjDwINPwCeZi0pKAoqTy0iDV2pqiIyrq8XFrIlIQA7',
                            'mpg'   => 'data:image/gif;base64,R0lGODlhEAAQAOYAAEdGR//+/4aGioODh/n5++np6+jo6hUdlhkkkRAvshkypCZCujVOuhE6tBxMwlB50TVpzvz9/xpayxVbzhxl0Mrd9h1z2lOc6YmKiyCN70ek6cHe9Orv8MTGxnC+AITVDKPOXunu4XK3AGypAGSgAHahK4ypWdPcw2ybE16BG0RmAE5yBGCNBU9gKajRL3GKJ4eHhYGBf+rq6N7AN+3VZ//++ei7AejAGufFNoRxIOTEOePDOu3MQuXIRurLSeXHR+XHSe7Yd/ry0vz345OOiPjx6f9yTPhHGvdNI/5YLf5ZMP9wS/98XPGxodvLx/////Hx8evr6+fn5+Xl5d7e3tfX19XV1c7Ozqenp3h4eGpqamNjY01NTSAgIBoaGhISEgcHBwAAAP///wAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAACH5BAEAAGIALAAAAAAQABAAAAfDgGKCgkdIJIeDiYSFSB4iJCwximJHSkZMTC4fjyuSg0dJRk1OVlUnICMsKp6UokUAHQYcUSAoKy2ESEtOr1pZHQEyJSktkkdHRlQhAFxdYFtSJi/FYhQWGlNDAF9hXVdTPjg5WWITFhkbUF1eWFcRRT47OZIT5hcFGB0ET09BQDfzBDGQIOFCBQI1hND4oSPHgEEwGjiQAOFBDx5AZtgIOEiAggQLGNwYmSMHjEkwDiA4UDIHEQyTBMGAIQCDzZg4YwYCADs=',
                            'mpeg'  => 'data:image/gif;base64,R0lGODlhEAAQAOYAAEdGR//+/4aGioODh/n5++np6+jo6hUdlhkkkRAvshkypCZCujVOuhE6tBxMwlB50TVpzvz9/xpayxVbzhxl0Mrd9h1z2lOc6YmKiyCN70ek6cHe9Orv8MTGxnC+AITVDKPOXunu4XK3AGypAGSgAHahK4ypWdPcw2ybE16BG0RmAE5yBGCNBU9gKajRL3GKJ4eHhYGBf+rq6N7AN+3VZ//++ei7AejAGufFNoRxIOTEOePDOu3MQuXIRurLSeXHR+XHSe7Yd/ry0vz345OOiPjx6f9yTPhHGvdNI/5YLf5ZMP9wS/98XPGxodvLx/////Hx8evr6+fn5+Xl5d7e3tfX19XV1c7Ozqenp3h4eGpqamNjY01NTSAgIBoaGhISEgcHBwAAAP///wAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAACH5BAEAAGIALAAAAAAQABAAAAfDgGKCgkdIJIeDiYSFSB4iJCwximJHSkZMTC4fjyuSg0dJRk1OVlUnICMsKp6UokUAHQYcUSAoKy2ESEtOr1pZHQEyJSktkkdHRlQhAFxdYFtSJi/FYhQWGlNDAF9hXVdTPjg5WWITFhkbUF1eWFcRRT47OZIT5hcFGB0ET09BQDfzBDGQIOFCBQI1hND4oSPHgEEwGjiQAOFBDx5AZtgIOEiAggQLGNwYmSMHjEkwDiA4UDIHEQyTBMGAIQCDzZg4YwYCADs=',
                            'mov'   => 'data:image/gif;base64,R0lGODlhEAAQAOYAAEdGR//+/4aGioODh/n5++np6+jo6hUdlhkkkRAvshkypCZCujVOuhE6tBxMwlB50TVpzvz9/xpayxVbzhxl0Mrd9h1z2lOc6YmKiyCN70ek6cHe9Orv8MTGxnC+AITVDKPOXunu4XK3AGypAGSgAHahK4ypWdPcw2ybE16BG0RmAE5yBGCNBU9gKajRL3GKJ4eHhYGBf+rq6N7AN+3VZ//++ei7AejAGufFNoRxIOTEOePDOu3MQuXIRurLSeXHR+XHSe7Yd/ry0vz345OOiPjx6f9yTPhHGvdNI/5YLf5ZMP9wS/98XPGxodvLx/////Hx8evr6+fn5+Xl5d7e3tfX19XV1c7Ozqenp3h4eGpqamNjY01NTSAgIBoaGhISEgcHBwAAAP///wAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAACH5BAEAAGIALAAAAAAQABAAAAfDgGKCgkdIJIeDiYSFSB4iJCwximJHSkZMTC4fjyuSg0dJRk1OVlUnICMsKp6UokUAHQYcUSAoKy2ESEtOr1pZHQEyJSktkkdHRlQhAFxdYFtSJi/FYhQWGlNDAF9hXVdTPjg5WWITFhkbUF1eWFcRRT47OZIT5hcFGB0ET09BQDfzBDGQIOFCBQI1hND4oSPHgEEwGjiQAOFBDx5AZtgIOEiAggQLGNwYmSMHjEkwDiA4UDIHEQyTBMGAIQCDzZg4YwYCADs=',
                            'avi'   => 'data:image/gif;base64,R0lGODlhEAAQAOYAAEdGR//+/4aGioODh/n5++np6+jo6hUdlhkkkRAvshkypCZCujVOuhE6tBxMwlB50TVpzvz9/xpayxVbzhxl0Mrd9h1z2lOc6YmKiyCN70ek6cHe9Orv8MTGxnC+AITVDKPOXunu4XK3AGypAGSgAHahK4ypWdPcw2ybE16BG0RmAE5yBGCNBU9gKajRL3GKJ4eHhYGBf+rq6N7AN+3VZ//++ei7AejAGufFNoRxIOTEOePDOu3MQuXIRurLSeXHR+XHSe7Yd/ry0vz345OOiPjx6f9yTPhHGvdNI/5YLf5ZMP9wS/98XPGxodvLx/////Hx8evr6+fn5+Xl5d7e3tfX19XV1c7Ozqenp3h4eGpqamNjY01NTSAgIBoaGhISEgcHBwAAAP///wAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAACH5BAEAAGIALAAAAAAQABAAAAfDgGKCgkdIJIeDiYSFSB4iJCwximJHSkZMTC4fjyuSg0dJRk1OVlUnICMsKp6UokUAHQYcUSAoKy2ESEtOr1pZHQEyJSktkkdHRlQhAFxdYFtSJi/FYhQWGlNDAF9hXVdTPjg5WWITFhkbUF1eWFcRRT47OZIT5hcFGB0ET09BQDfzBDGQIOFCBQI1hND4oSPHgEEwGjiQAOFBDx5AZtgIOEiAggQLGNwYmSMHjEkwDiA4UDIHEQyTBMGAIQCDzZg4YwYCADs=',
                            'eps'   => 'data:image/gif;base64,R0lGODlhEAAQANUAAOXk5eDf4JmYm9PT1LC2vbK5wN7h5K6ytdPc4aKmqLzGycjS1WxubuHl3bK0rtjczeDkz6CsTaKuU56pUrK7dLvEf8PLkcrRnYeQQXR8OJWfSZqlTaaxVq23ZLC6ab/Hh83To97gz7KvrKSblv///319fV1dXT09PQAAAP///wAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAACH5BAEAACkALAAAAAAQABAAAAaYwJSwRCwWhcghaUkCOEsnJMjyqVQoFE9nAiiRoqkLpcPhSCIbTaa7jH7IZclmgzF1GfjTxMTv95cABgMoSF5MAAQBAwsAJIRDAAKSkgQECwaOhQwJBQQiDiMnCgiZQwgDBA6qBAIEmI8pXgAPlZUHraWxDRANtLUCACewJQ3FvamsS8PGxajJucTGIU4MjbkmJ9na2SjdKEEAOw==',
                            'gz'    => 'data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABAAAAAQCAMAAAAoLQ9TAAABPlBMVEX////etQFhqOuLyvnxGQHf9P/H7P2Ew/P667P73WQjX7Asarv81DH0///7887755e0z/bTqR7kzYP84n392UfatCrVpQurbQ1mrO3buTN1seR7vPFot//83m366KG95//b8P/j9f//+5ohW612t/DPoRD/+pDSoAfI2PbX8P/92lGYwvWyeyNEk+Tz5G3374LSphTUpxu4hCiqbQ3aujX2zSyBwPKCxP+JyffUqR7Uowj78L3//aTUqiHVphCt2/n+0zjevjubz/UnZrhuse4warH91TlTqvvUqSB4vv9yu/+sdB3Zvyr6449bmdfZtylhs/9ysebZvyz66a2Iw/PZvC/69ZD82Vj73nT/+IbVphbYrii85fsoZbZ1t/Bitf/59uXZtzG0fA/85IX47sqyfQ4naccIJ2P////PoQ7NL84fAAAAAXRSTlMAQObYZgAAAAFiS0dEaMts9CIAAAAWdEVYdFNvZnR3YXJlAGdpZjJwbmcgMi40LjakM4MXAAAAuUlEQVR42mNgAAN2M+k4FwluEFMoMzNTiImXLcbeKUQlHSiQycLCkpkGBrrxfkARVVF/n6DQREkTx6R0eSmggG0GENgoqUXqpaZrsgMFLDMSUoJ9I8IdGFPTWZmBAoIZfBz8wpwiPDgFPMKs5ZJltdxMgQKKFkABA/1owyg7MSt1oIBCIFDASEfc2BvijnRz13SIwxmYeGUCvDzdnWF8oAh3LBeXMoIPBukofCYGAW0BDTaEWBrUXAYAT+wtHYLRy84AAAAASUVORK5CYII=',
                            'asc'   => 'data:image/gif;base64,R0lGODlhEAAQAMQAAGYzZjMzZpmZ/2ZmmczM/zNmmZnM/2bM/8z//8zMAGZmAMzMZpmZZv/MAJlmAP/MZmYzAMyZZqoAAIgAAMxmZv///8zMzKqqqlVVVQAAAP///wAAAAAAAAAAAAAAAAAAACH5BAEAABoALAAAAAAQABAAAAVwoCaOZKkJaJoOplC9cDUYQOlWBI4PR1GPrpxQBiiSXIakMolgAXGEqBTR1Egmp8py2cRQJJmgdHpZLDCQ7DZZbijS2THBwHgk0E8Y9eKIQOAiLhcWVAgGDhAGAUcVF44XbEmLQASFa5OBAZqbnJgaIQA7',
                        );

                        error_reporting(0);
                        if (!function_exists('imagecreatetruecolor')) {
                            $showthumbnails = false;
                        }
                        $leadon = $startdir;
                        if ($leadon == '.') {
                            $leadon = '';
                        }
                        if ((substr($leadon, -1, 1) != '/') && $leadon != '') {
                            $leadon = $leadon . '/';
                        }
                        $startdir = $leadon;
                        if ($_GET['dir']) {
                            //check this is okay.

                            if (substr($_GET['dir'], -1, 1) != '/') {
                                $_GET['dir'] = $_GET['dir'] . '/';
                            }

                            $dirok = true;
                            $dirnames = explode('/', $_GET['dir']);
                            for ($di = 0; $di < sizeof($dirnames); $di++) {

                                if ($di < (sizeof($dirnames) - 2)) {
                                    $dotdotdir = $dotdotdir . $dirnames[$di] . '/';
                                }

                                if ($dirnames[$di] == '..') {
                                    $dirok = false;
                                }
                            }

                            if (substr($_GET['dir'], 0, 1) == '/') {
                                $dirok = false;
                            }

                            if ($dirok) {
                                $leadon = $leadon . $_GET['dir'];
                            }
                        }
                        $opendir = $leadon;
                        if (!$leadon) {
                            $opendir = '.';
                        }
                        if (!file_exists($opendir)) {
                            $opendir = '.';
                            $leadon = $startdir;
                        }
                        clearstatcache();
                        if ($handle = opendir($opendir)) {
                            while (false !== ($file = readdir($handle))) {
                                //first see if this file is required in the listing
                                if ($file == "." || $file == "..") {
                                    continue;
                                }
                                $discard = false;
                                for ($hi = 0; $hi < sizeof($hide); $hi++) {
                                    if (strpos($file, $hide[$hi]) !== false) {
                                        $discard = true;
                                    }
                                }

                                if ($discard) {
                                    continue;
                                }
                                if (@filetype($leadon . $file) == "dir") {
                                    if (!$showdirs) {
                                        continue;
                                    }

                                    $n++;
                                    if ($_GET['sort'] == "date") {
                                        $key = @filemtime($leadon . $file) . ".$n";
                                    } else {
                                        $key = $n;
                                    }
                                    $dirs[$key] = $file . "/";
                                } else {
                                    $n++;
                                    if ($_GET['sort'] == "date") {
                                        $key = @filemtime($leadon . $file) . ".$n";
                                    } elseif ($_GET['sort'] == "size") {
                                        $key = @filesize($leadon . $file) . ".$n";
                                    } else {
                                        $key = $n;
                                    }
                                    $files[$key] = $file;

                                    if ($displayindex) {
                                        if (in_array(strtolower($file), $indexfiles)) {
                                            header("Location: $file");
                                            die();
                                        }
                                    }
                                }
                            }
                            closedir($handle);
                        }
                        //sort our files
                        if ($_GET['sort'] == "date") {
                            @ksort($dirs, SORT_NUMERIC);
                            @ksort($files, SORT_NUMERIC);
                        } elseif ($_GET['sort'] == "size") {
                            @natcasesort($dirs);
                            @ksort($files, SORT_NUMERIC);
                        } else {
                            @natcasesort($dirs);
                            @natcasesort($files);
                        }
                        //order correctly
                        if ($_GET['order'] == "desc" && $_GET['sort'] != "size") {
                            $dirs = @array_reverse($dirs);
                        }
                        if ($_GET['order'] == "desc") {
                            $files = @array_reverse($files);
                        }

                        $dirs = @array_values($dirs);
                        $files = @array_values($files);

                        $totalCount = count($files)+count($dirs);

                        ?>

                        <table style="<?php if($totalCount == 0): ?> display:none <?php endif;?>" class="text-left table table-striped">
                            <thead>
                            <tr id="listingheader">
                                <th id="headerfile">File</th>
                                <th id="headersize">Size</th>
                                <th id="headermodified">Last Modified</th>
                            </tr>
                            </thead>
                            <tr id="listing">
                                <?php

                                if ($dirok) {
                                    ?>
                                    <div>
                                        <td><a href="/?dir=<?php echo str_replace($startdir, '', $dotdotdir); ?>" class="<?php echo $class; ?>"><img alt="Folder"
                                                                                                                                                     src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABAAAAAQCAMAAAAoLQ9TAAABSlBMVEX/////8oz/6IPo2KQRfAk+ij112kLs2Z9nzDR/40xs0Tk0sxtspWr//8bMmQEMeQfs2Zn//9HbvFv81IP133nsxk43egv//9n8+c/y1WQigRffvlFRjikIdwTv4HvmvFH//sf/+KaO9Fy30rPv36snjBv/8qlOj0H16sHm0pWBrEeF6lPUqy7ixnEZmA2KtoYxgRs8oR/ewWrr3bPW49FgxUDm0WPRpR/H2cLyzFsnjBQBZwEnjxQWfAz//+f/6pXWpRf/24n///LmwkS5nBH//6ziuEN7rXg8hS7/5qDf5q8coA8vlB/myXnfujzv9bxXxCzgxGvetTbqwFd02EchfCBhky5BjD5EtyL85Hwmixry5qT//74XeRNZvjkUjAtDrSL/3HcRcAoIbgXf7IZJvSX/9MjmvD4vgS6PvIcgeB/drzX//5n/+ZM2id9QAAAAAXRSTlMAQObYZgAAAAFiS0dEbbsGAK0AAAAWdEVYdFNvZnR3YXJlAGdpZjJwbmcgMi40LjakM4MXAAAAuUlEQVR42mNggAAeVhMGZKAsqxerjywQ6s0dYZNhAefzxHOnBnAYJruDednZ2db8LAkcXFksLGC+gIQ/UMyKi40VojxbIScnRpDXlo3TAyqgmAsE2WKcIerZ2WAB+0hJZz/2cO24TKdAsICjm4qdOK+UUpRXNDNYQFjXNScnxcc0TE0aYkawBiMjo5aqgZyIJkRAPo2JiSlJxkw0CGqLr2eiZboLn7kQM1SA3YFPx4gZ4a/sbGNkbwIA830ixvT5AmIAAAAASUVORK5CYII="/>&nbsp;<strong>..</strong></a>
                                        </td>
                                        <td><em>-</em></td>
                                        <td><?php echo date("M d Y h:i:s A", filemtime($dotdotdir)); ?></td>
                                    </div>
                                    <?php
                                }
                                $arsize = sizeof($dirs);
                                for ($i = 0;
                                $i < $arsize;
                                $i++) {
                                ?>
                            <tr>
                                <td><a href="/?dir=<?php echo str_replace($startdir, '', $leadon . $dirs[$i]); ?>" class="<?php echo $class; ?>"> <img
                                            src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABAAAAAQCAMAAAAoLQ9TAAAAkFBMVEX////MmTT/zGezgRvLmDN/f3/AjSi6hyK9iiWgbghra2vCjyr/5oGufBbHlC+jcQuwfhiIiIjJljGcagS1gh24hSCebAaZZwGaaAK0gRzvvFfcqUT4xWC8iSRKSkqreRPCwsK/jCeodhDms06lcw23hB/ToDv/1G//4HvFki3/64X/95Fqamr//////5n/9I54UBIWAAAAAXRSTlMAQObYZgAAAAFiS0dELc3aQT0AAAAWdEVYdFNvZnR3YXJlAGdpZjJwbmcgMi40LjakM4MXAAAAiUlEQVR42oXOxxKCMBgE4CWhVwEp9i4Ekt/3fzuDE0YdD3633dnDAr8su0i/stKi40cmTfnebckXU2GPj8k0U0mui2KIxYu7q1acA2kv1CxWWQ7RWTTbUhAiYjaNxppqCZcJGowLlRI+O1FvbKiV8FhFnXGnJgT0n+RwvmZBXbbN3tFPHPnm4L8nl3EWVP90I8IAAAAASUVORK5CYII="
                                            alt="<?php echo $dirs[$i]; ?>"/>&nbsp;<strong><?php echo $dirs[$i]; ?></strong> </a></td>
                                <td><em>-</em></td>
                                <td><?php echo date("M d Y h:i:s A", filemtime($leadon . $dirs[$i])); ?></td>
                                </a>
                            </tr>
                            <?php

                            }

                            $arsize = sizeof($files);
                            for ($i = 0;
                                 $i < $arsize;
                                 $i++) {

                                $icon = 'data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABAAAAAQCAMAAAAoLQ9TAAAAM1BMVEX///8AgAD//wD/AAAA////zDPLy8sICAjn59ZVVVWGhoYAAP+ZmZnMzMwAAJn///+AAADJQpymAAAAAXRSTlMAQObYZgAAAAFiS0dEDxi6ANkAAAAWdEVYdFNvZnR3YXJlAGdpZjJwbmcgMi40LjakM4MXAAAAVklEQVR42l3OWw7AIAhEUexLUeu4/9XaUlHq/TwhE4jiKJMUg5b5A2gZvAAzC4wRf3UoZ5E8FMoCfSNM2CqQLNQd6UgG8Fw4N0FfVfCjDiaB2/QC/6IGC9YJmappnzcAAAAASUVORK5CYII=';
                                $ext = strtolower(substr($files[$i], strrpos($files[$i], '.') + 1));

                                if ($filetypes[$ext]) {
                                    $icon = $filetypes[$ext];
                                }

                                $filename = $files[$i];
                                if (strlen($filename) > 43) {
                                    $filename = substr($files[$i], 0, 40) . '...';
                                }

                                $fileurl = str_replace($startdir, '', $leadon.$files[$i]);
                                ?>
                                <tr>
                                    <td><a href="<?php echo $fileurl; ?>" target="_blank"> <img src="<?php echo $icon; ?>" alt="<?php echo $files[$i]; ?>"/><strong> <?php echo $filename; ?></strong> </a></td>
                                    <td><em><?php echo round(filesize($leadon . $files[$i]) / 1024); ?>KB</em>
                                    <td><?php echo date("M d Y h:i:s A", filemtime($leadon . $files[$i])); ?></td>
                                </tr>
                            <?php } ?>
                        </table>


                    </div>
                </div>
            </div>
            <hr style="margin-top: 2.5em;">
            <p>What's next? Simply upload your <?php echo $domain; ?> website to <strong>public_html</strong> folder. Looking for more ideas? Check this out:</p>
        </div>
    </div>

    <div class="row panel-row">
        <div class="col-md-4">
            <div class="panel panel-default">
                <div class="panel-body text-center">
                    <h3><i class="fa fa-picture-o"></i> Build an Easy Website?</h3>
                    <p class="description">Simply build beautiful websites with an Easy Website Builder in just a few clicks.</p>
                    <a href="https://www.000webhost.com/website-faq" target="_blank">Click &amp; learn more</a>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="panel panel-default">
                <div class="panel-body text-center">
                    <h3><i class="fa fa-cloud-upload"></i> Upload Your Own Website?</h3>
                    <p class="description">Upload all your website files using fast online file manager or do it via FTP.</p>
                    <a href="https://www.000webhost.com/website-faq" target="_blank">Click &amp; learn more</a>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="panel panel-default">
                <div class="panel-body text-center">
                    <h3><i class="fa fa-flask"></i> Learn, Build, Grow!</h3>
                    <p class="description">Here we will teach you how to run successful websites that really grow.</p>
                    <a href="https://www.000webhost.com/forum/" target="_blank">Click &amp; learn more</a>
                </div>
            </div>
        </div>
    </div>
</div>

<footer class="footer">
    <div class="container">
        <div class="pull-right social"><a href="https://www.facebook.com/000webhost.Global/" target="_blank"><i class="fa fa-facebook-f"></i></a> | <a href="https://twitter.com/000webhost_com" target="_blank"><i class="fa fa-twitter"></i></a></div>
        <p class="text-muted text-center">
            <img
                src="data:image/png;base64,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"
                alt="000webhost"> | Proudly hosted by <strong>000webhost.com</strong> <a href="https://www.000webhost.com/">free web hosting</a> provider.
        </p>
    </div>
</footer>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

</body>
</html>
