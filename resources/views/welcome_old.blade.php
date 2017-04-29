<!DOCTYPE html>
<html class=" js no-touch csstransitions" lang="pt-br">
<head>
    <meta http-equiv="content-type" content="text/html; charset=UTF-8">
    <title style="font-variant:small-caps">Odontovision</title>
    <meta charset="utf-8">
    <meta name="description" content="Odontovision">
    <meta name="author" content="Ruben Matos">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link href="{{ url('/plugins/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
    <link href="Odontovision_files/font-awesome.css" rel="stylesheet">

    <style>
        /* Author:WebThemez
     * Author URI:http://webthemez.com
     * License: Creative Commons Attribution 3.0 License (https://creativecommons.org/licenses/by/3.0/)
     */
        @import url(http://fonts.googleapis.com/css?family=Open+Sans:300italic,700italic,400,700);
        @import url(http://fonts.googleapis.com/css?family=Raleway:700,400,300);

        body {
            font-family: 'Open Sans', sans-serif;
        }

        .brand {
            font-family: 'Raleway', sans-serif;
        }

        html,
        body {
            height: 100%;
        }

        body {
            font-size: 15px;
            line-height: 1.50;
            color: #333333;
            background-color: #ffffff;
            position: relative;
        }

        h1,
        h2,
        h3,
        h4,
        h5,
        h6 {
            color: #333333;
        }

        h1 {
            font-size: 22px;
            font-weight: 500;
            margin-bottom: 20px;
        }

        h2 {
            font-size: 28px;
            margin-bottom: 15px;
        }

        h3 {
            font-size: 22px;
        }

        h4 {
            font-size: 18px;
            font-weight: 700;
        }

        h5 {
            font-size: 16px;
            text-transform: uppercase;
            font-weight: 700;
        }

        h6 {
            font-weight: 700;
        }

        h1 span,
        h2 span,
        h3 span,
        h4 span {
            color: #3399FF;
        }

        .colored {
            color: #3399FF;
        }

        a {
            color: #55acee;
        }

        a:hover {
            color: #7fb0d5;
        }

        a:focus,
        a:active {
            outline: none;
        }

        .large {
            font-size: 18px;
        }

        img {
            display: block;
            max-width: 100%;
            height: auto;
        }

        .list-unstyled li {
            padding: 5px 0;
        }

        .list-horizontal {
            padding: 15px 0;
        }

        .list-horizontal-item img {
            display: block;
            margin: 0 auto;
        }

        .list-icons {
            padding: 0;
            margin: 20px 0;
            list-style: none;
            font-size: 18px;
        }

        .list-icons li {
            padding: 0 0 15px 0;
        }

        blockquote {
            border-left: none;
            padding-left: 0;
            padding-right: 0;
        }

        .title {
            margin-top: 0;
        }

        /* Layout
        ----------------------------------------------------------------------------- */
        .header {
            color: #ffffff;
            background-color: rgba(0, 0, 0, 1);
            padding: 10px 0;
            -webkit-transition: all 0.2s ease-in-out;
            -moz-transition: all 0.2s ease-in-out;
            -o-transition: all 0.2s ease-in-out;
            -ms-transition: all 0.2s ease-in-out;
            transition: all 0.2s ease-in-out;
        }

        .banner {
            width: 100%;
            height: 100%;
            min-height: 100%;
            position: relative;
        }

        .banner:after {
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            content: "";
            /* Button Color */
            /*background: linear-gradient(#1FAECE , #35B6D2);*/
            /* Azure Color */
            /*background: linear-gradient(to bottom, #00d5e6 0px, #00bdcc 100%);*/
            /* Blue Color 8cd3ff */
            /*background: linear-gradient(to bottom, #0099cc 0px, #0099cc 100%)*/
            /* Blue Web Preset */
            background: linear-gradient(to bottom, #87e0fd 0%, #53cbf1 40%, #05abe0 100%);
            /* Blue Modern  , #97CDEF */
            /*background: linear-gradient(#5DC1FF , #53ADE5 , #5DC1FF);*/
        }

        .banner-caption {
            position: absolute;
            top: 50%;
            width: 100%;
            z-index: 2;
        }

        .subfooter {
            background-color: #3399FF;
            padding: 40px 0;
        }

        .subfooter a {
            color: #3399FF;
        }

        .section {
            background-color: #ffffff;
            padding: 80px 0;
        }

        /* Backgrounds
        ----------------------------------------------------------------------------- */
        .default-bg {
            background-color: #222222;
            color: #ffffff;
        }

        .default-bg.blue {
            background-color: #55acee;
        }

        .btn-primary {
            color: #fff;
            background-color: #3399FF;
            border: 0px;
        }

        .btn-primary:hover, .btn-primary:focus, .btn-primary.focus, .btn-primary:active, .btn-primary.active, .open > .dropdown-toggle.btn-primary {
            color: #fff;
            background-color: #3399FF;
            border: 0px;
        }

        .transprant-bg {
            color: #ffffff;
        }

        .default-bg h1,
        .default-bg h2,
        .default-bg h3,
        .default-bg h4,
        .default-bg h5,
        .default-bg h6,
        .transprant-bg h1,
        .transprant-bg h2,
        .transprant-bg h3,
        .transprant-bg h4,
        .transprant-bg h5,
        .transprant-bg h6 {
            color: #ffffff;
        }

        .default-bg blockquote footer,
        .transprant-bg blockquote footer {
            color: #cccccc;
        }

        .default-bg a,
        .transprant-bg a {
            color: #ffffff;
            text-decoration: underline;
        }

        .default-bg a:hover,
        .transprant-bg a:hover {
            text-decoration: none;
        }

        .transprant-bg {
            -webkit-background-size: cover !important;
            -moz-background-size: cover !important;
            -o-background-size: cover !important;
            background-size: cover !important;
            background-position: 50% 0;
            background-repeat: no-repeat;
            z-index: 1;
            position: relative;
            background: #fff;
        }

        .transprant-bg .transprant-bg {
            margin-top: 80px;
            z-index: 3;
        }

        .transprant-bg:after {
            content: "";
            position: absolute;
            top: 0;
            left: 0;
            z-index: 2;
            width: 100%;
            height: 100%;
            background-color: #3399FF;
        }

        .transprant-bg.blue:after {
            background-color: rgba(85, 172, 238, 0.7);
        }

        .transprant-bg .container {
            z-index: 3;
            position: relative;
        }

        .bg-image-1 {
            background: url("../images/bg-image-1.jpg") 50% 0px no-repeat;
        }

        .bg-image-2 {
        }

        .caption-data {
            position: absolute;
            top: 50%;
            left: 50%;
            z-index: 20;
            text-align: center;
            -webkit-transform: translate(-50%, -50%);
            -moz-transform: translate(-50%, -50%);
            transform: translate(-50%, -50%);
        }

        .caption-data h1 {
            text-transform: uppercase;
        }

        .caption-data h1 span {
            font-size: inherit;
            line-height: inherit;
            font-weight: inherit;
        }

        .caption-data h3 {
            line-height: 34px;
        }

        button.cta-button.btn-light, button.cta-button.btn-dark, .contact-form button.cta-button, button.cta-button.btn-default {
            background: transparent;
        }

        button.cta-button {
            font-size: 16px;
            line-height: 16px;
            border: 1px solid #fff;
            padding: 20px 42px;
            border-radius: 4px;
            font-family: 'Raleway';
            font-weight: 600;
            transition: background 0.3s, border-color 0.3s;
            margin-top: 20px;
        }

        button.cta-button:hover {
            background: #fff;
            color: #000;
        }

        /* Misc
        ----------------------------------------------------------------------------- */
        .no-view {
            opacity: 0;
            filter: alpha(opacity=0);
        }

        .object-visible,
        .touch .no-view {
            opacity: 1 !important;
            filter: alpha(opacity=100) !important;
        }

        /* Targeting only Firefox for smoothest animations */
        @-moz-document url-prefix() {
            .object-visible,
            .touch .no-view {
                -webkit-transition: opacity 0.6s ease-in-out;
                -moz-transition: opacity 0.6s ease-in-out;
                -o-transition: opacity 0.6s ease-in-out;
                -ms-transition: opacity 0.6s ease-in-out;
                transition: opacity 0.6s ease-in-out;
            }
        }

        .space {
            padding: 20px 0;
        }

        .pr-10 {
            padding-right: 10px;
        }

        .pl-10 {
            padding-left: 10px;
        }

        .pclear {
            padding-bottom: 0;
        }

        .secPadding {
            padding: 70px 0;
        }

        /* Sections
        ----------------------------------------------------------------------------- */
        .banner-caption h1,
        .banner-caption h2,
        .banner-caption h3,
        .banner-caption h4,
        .banner-caption h5,
        .banner-caption h6 {
            color: #ffffff;
        }

        .banner-caption h1 {
            font-size: 42px;
        }

        .footer h1 {
            color: #fff;
        }

        .footer.section {
            background: whitesmoke;
            color: #949494;
        }

        .subfooter p {
            margin-bottom: 0;
            color: #fff;
        }

        .hero-caption {
            text-align: center;
            padding: 40px 0;
        }

        .hero-caption h2 {
            text-align: center;
        }

        .hero-caption p {

        }

        /* Template Components
        ----------------------------------------------------------------------------- */
        /* Buttons
        ---------------------------------- */
        .btn {
            padding: 8px 15px;
            font-size: 22px;
            line-height: 1.42857143;
            min-width: 160px;
            text-align: center;
            border-radius: 0;
            text-transform: uppercase;
            -webkit-transition: all 0.2s ease-in-out;
            -moz-transition: all 0.2s ease-in-out;
            -ms-transition: all 0.2s ease-in-out;
            -o-transition: all 0.2s ease-in-out;
            transition: all 0.2s ease-in-out;
        }

        .btn-default {
            color: #FFFFFF;
            background: #3399FF;
            border: 0;
        }

        .btn-default:hover {
            color: #ffffff;
            background-color: #3399FF;
            border: 0;
        }

        .btn-xl {
            color: #FFFFFF;
            background: #3399FF;
            border: 0;
        }

        .btn-xl:hover {
            color: #ffffff;
            background-color: #3399FF;
            border: 0;
        }

        /* Collapse
        ---------------------------------- */
        .panel-group .panel {
            -webkit-border-radius: 0px;
            -moz-border-radius: 0px;
            border-radius: 0px;
            border: none;
        }

        .panel-default > .panel-heading {
            padding: 0;
            outline: none;
            border: none;
            -webkit-border-radius: 0;
            -moz-border-radius: 0;
            -o-border-radius: 0;
            border-radius: 0;
            width: 100%;
        }

        .panel-default > .panel-heading + .panel-collapse > .panel-body {
            border: 1px solid #f0f0f0;
            border-top: none;
            background-color: #fafafa
        }

        .panel-heading a {
            font-weight: 400;
            padding: 12px 35px 12px 15px;
            display: inline-block;
            width: 100%;
            background-color: #fff;
            color: #3399FF;
            position: relative;
            text-decoration: none;
            border: #ECECEC 1px solid;
        }

        .panel-heading a.collapsed {
            color: #333333;
            background-color: #FAFAFA;
        }

        .panel-heading a:after {
            font-family: "FontAwesome";
            content: "\f147";
            position: absolute;
            right: 15px;
            font-size: 14px;
            font-weight: 300;
            top: 50%;
            line-height: 1;
            margin-top: -7px;
        }

        .panel-heading a.collapsed:after {
            content: "\f196";
        }

        .panel-heading a:hover {
            text-decoration: none;
            background-color: #FFFFFF;
            color: #3399FF;
        }

        .panel-title a i {
            padding-right: 10px;
            font-size: 20px;
        }

        /* Pills
        ---------------------------------- */
        .nav-pills > li.active > a,
        .nav-pills > li.active > a:hover,
        .nav-pills > li.active > a:focus,
        .nav-pills > li > a:hover {
            background-color: #3399FF;
            border-color: #3399FF;
            color: #ffffff;
        }

        .nav-pills > li > a {
            border-radius: 0;
            padding: 8px 20px;
            border: 1px solid #cacaca;
            color: #666666;
            font-size: 12px;
            text-transform: uppercase;
            font-weight: 300;
        }

        /* Forms
        ---------------------------------- */
        .form-control {
            height: 45px;
            -webkit-border-radius: 0px;
            -moz-border-radius: 0px;
            border-radius: 0px;
        }

        .form-control-feedback {
            color: #cccccc;
        }

        .has-feedback label.sr-only ~ .form-control-feedback {
            top: 15px;
        }

        textarea {
            resize: vertical;
        }

        .price-table .panel-heading {
            padding: 10px 0;
        }

        /* Modals
        ---------------------------------- */
        .modal-content {
            -webkit-border-radius: 0px;
            -moz-border-radius: 0px;
            border-radius: 0px;
        }

        .modal-header {
            background-color: #626262;
            color: #ffffff;
        }

        .modal-header h4 {
            color: #ffffff;
        }

        .modal-header .close {
            font-weight: 300;
            color: #FFFFFF;
            text-shadow: none;
            filter: alpha(opacity=100);
            opacity: 1;
        }

        @media (min-width: 1200px) {
            .modal-lg {
                width: 1140px;
            }
        }

        /* Media
        ---------------------------------- */
        .media .fa {
            font-size: 24px;
            width: 40px;
            height: 25px;
            line-height: 25px;
            padding: 0 5px;
            text-align: center;
        }

        /* Navigations
        ----------------------------------------------------------------------------- */
        .header .navbar {
            margin-bottom: 0;
        }

        .main-navigation .navbar-default {
            background-color: transparent;
            border: none;
        }

        .main-navigation .navbar-default .navbar-nav > li > a {
            color: #fff;
            padding: 10px 20px;
            font-size: 18px;
            font-weight: 400;
        }

        .main-navigation .navbar-default .navbar-nav > li.active > a {
            background-color: transparent;
            color: #3399FF;
        }

        .main-navigation .navbar-default .navbar-nav > li > a:hover,
        .main-navigation .navbar-default .navbar-nav > li.active > a:hover {
            color: #3399FF;
        }

        /* carousel */
        #quote-carousel {
            padding: 0 10px 30px 10px;
            margin-top: 30px;
        }

        /* Control buttons  */
        #quote-carousel .carousel-control {
            background: none;
            color: #222;
            font-size: 2.3em;
            text-shadow: none;
            margin-top: 30px;
        }

        /* Previous button  */
        #quote-carousel .carousel-control.left {
            left: -12px;
        }

        /* Next button  */
        #quote-carousel .carousel-control.right {
            right: -12px !important;
        }

        /* Changes the position of the indicators */
        #quote-carousel .carousel-indicators {
            right: 50%;
            top: auto;
            bottom: 0px;
            margin-right: -19px;
        }

        /* Changes the color of the indicators */
        #quote-carousel .carousel-indicators li {
            background: #c0c0c0;
        }

        #quote-carousel .carousel-indicators .active {
            background: #333333;
        }

        #quote-carousel img {
            width: 250px;
            height: 100px
        }

        /* End carousel */

        .item blockquote {
            border-left: none;
            margin: 0;
        }

        .item blockquote img {
            margin-bottom: 10px;
        }

        .item blockquote p:before {
            content: "\f10d";
            font-family: 'Fontawesome';
            float: left;
            margin-right: 10px;
        }

        /**
          MEDIA QUERIES
        */

        /* Small devices (tablets, 768px and up) */
        @media (min-width: 768px) {
            #quote-carousel {
                margin-bottom: 0;
                padding: 0 40px 30px 40px;
            }

        }

        /* Small devices (tablets, up to 768px) */
        @media (max-width: 768px) {

            /* Make the indicators larger for easier clicking with fingers/thumb on mobile */
            #quote-carousel .carousel-indicators {
                bottom: -20px !important;
            }

            #quote-carousel .carousel-indicators li {
                display: inline-block;
                margin: 0px 5px;
                width: 15px;
                height: 15px;
            }

            #quote-carousel .carousel-indicators li.active {
                margin: 0px 5px;
                width: 20px;
                height: 20px;
            }
        }

        @media (min-width: 768px) {
            .main-navigation .navbar-default .navbar-nav > li > a {
                padding-top: 30px;
                padding-bottom: 30px;
                -webkit-transition: all 0.3s ease-in-out;
                -moz-transition: all 0.3s ease-in-out;
                -o-transition: all 0.3s ease-in-out;
                -ms-transition: all 0.3s ease-in-out;
                transition: all 0.3s ease-in-out;
            }
        }

        @media (min-width: 768px) and (max-width: 991px) {
            .main-navigation .container-fluid {
                padding-left: 0;
                padding-right: 0;
            }

            .navbar-nav {
                float: left !important;
            }
        }

        @media (max-width: 767px) {
            .header.navbar-fixed-top {
                position: absolute;
            }
        }

        /* Fixed Header
        ----------------------------------------------------------------------------- */
        .fixed-header-on .header {
            background-color: rgba(0, 0, 0, 0.95);
            padding: 5px 0;
        }

        .fixed-header-on .brand {
            font-size: 24px;
        }

        .fixed-header-on .logo {
            -webkit-transform: scale(0.8);
            transform: scale(0.8);
            margin-top: 0;
            margin-bottom: 0;
        }

        @media (min-width: 768px) {
            .fixed-header-on .navbar-default .navbar-nav > li > a {
                padding-top: 20px;
                padding-bottom: 20px;
            }
        }

        @media (max-width: 991px) {
            .fixed-header-on .logo,
            .fixed-header-on .brand,
            .fixed-header-on .site-slogan {
                display: none;
            }
        }

        /* Blocks/Widgets
        ----------------------------------------------------------------------------- */
        /* Logo, Site Name, Site Slogan
        ---------------------------------- */
        .logo {
            margin: 10px 0px 10px 0;
            -webkit-transition: all 0.3s ease-in-out;
            -moz-transition: all 0.3s ease-in-out;
            -o-transition: all 0.3s ease-in-out;
            -ms-transition: all 0.3s ease-in-out;
            transition: all 0.3s ease-in-out;
        }

        .logo,
        .logo-section {
            float: left;
        }

        .brand {
            font-size: 38px;
            -webkit-transition: all 0.3s ease-in-out;
            -moz-transition: all 0.3s ease-in-out;
            -o-transition: all 0.3s ease-in-out;
            -ms-transition: all 0.3s ease-in-out;
            transition: all 0.3s ease-in-out;
            padding: 10px 0;
        }

        .brand a {
            color: #ffffff;
        }

        .brand a:hover {
            text-decoration: none;
        }

        .site-slogan {
            font-size: 12px;
        }

        /* block-lists
        ---------------------------------- */
        .block-list .media-left {
            width: 60px;
        }

        .block-list p {
            font-size: 16px;
        }

        .block-list .fa {
            border: 1px solid #fff;
            padding: 20px;
            width: 65px;
            height: 65px;
            border-radius: 50%;
        }

        /* Social Links
        ---------------------------------- */
        .social-links {
            padding: 0;
            list-style: none;
            margin: 15px 0;
        }

        .social-links li {
            margin: 10px 10px 10px 0;
            display: inline-block;
            font-size: 36px;
        }

        .social-links li a {
            color: #BBBBBB;
            -webkit-transition: all 0.2s ease-in-out;
            -moz-transition: all 0.2s ease-in-out;
            -o-transition: all 0.2s ease-in-out;
            -ms-transition: all 0.2s ease-in-out;
            transition: all 0.2s ease-in-out;
            border: 1px solid #D0D0D0;
            width: 52px;
            height: 52px;
            display: inline-block;
            border-radius: 50%;
            font-size: 26px;
            text-align: center;
            padding: 4px;
        }

        .social-links li.twitter a:hover {
            color: #55acee;
        }

        .social-links li.skype a:hover {
            color: #00aff0;
        }

        .social-links li.linkedin a:hover {
            color: #0976b4;
        }

        .social-links li.googleplus a:hover {
            color: #dd4b39;
        }

        .social-links li.youtube a:hover {
            color: #b31217;
        }

        .social-links li.flickr a:hover {
            color: #ff0084;
        }

        .social-links li.facebook a:hover {
            color: #3b5998;
        }

        .social-links li.pinterest a:hover {
            color: #cb2027;
        }

        /* Isotope Items
        ---------------------------------- */
        .filters {
            margin: 0 0 30px 0;
        }

        .filters .nav-pills > li {
            margin-right: 2px;
            margin-bottom: 2px;
        }

        .filters .nav-pills > li + li {
            margin-left: 0px;
        }

        .text-center.filters .nav-pills > li {
            margin-right: 2px;
            margin-left: 2px;
            margin-bottom: 2px;
            display: inline-block;
            float: none;
        }

        .isotope-container {
            overflow: hidden;
        }

        .isotope-item {
            margin-bottom: 20px;
        }

        .isotope-item .btn-default .btn-xl {
            color: #FFFFFF;
            background: rgba(245, 255, 6, 0.69);
            margin-top: -36px;
            z-index: 2;
            position: relative;
            border: 0;
        }

        .isotope-item .btn-default:hover .btn-xl {
            color: #ffffff;
        }

        @media (max-width: 480px) {
            .filters .nav-pills > li {
                width: 100%;
                display: block;
            }
        }

        /* Images Overlay
        ----------------------------------------------------------------------------- */
        .overlay-container {
            position: relative;
            display: block;
            overflow: hidden;
        }

        .overlay {
            position: absolute;
            top: 0;
            bottom: -1px;
            left: 0;
            right: -1px;
            background-color: rgba(206, 219, 10, 0.78);
            cursor: pointer;
            overflow: hidden;
            opacity: 0;
            filter: alpha(opacity=0);
            -webkit-transform: scale(0.8);
            transform: scale(0.8);
            -webkit-transition: all linear 0.2s;
            -moz-transition: all linear 0.2s;
            -ms-transition: all linear 0.2s;
            -o-transition: all linear 0.2s;
            transition: all linear 0.2s;
        }

        .overlay:hover {
            text-decoration: none;
        }

        .overlay span {
            position: absolute;
            display: block;
            bottom: 10px;
            text-align: center;
            width: 100%;
            color: #ffffff;
            font-size: 13px;
            font-weight: 300;
        }

        .overlay i {
            position: absolute;
            left: 50%;
            top: 50%;
            font-size: 18px;
            line-height: 1px;
            color: #ffffff;
            margin-top: -8px;
            margin-left: -8px;
            text-align: center;
        }

        .overlay-container:hover .overlay {
            opacity: 1;
            filter: alpha(opacity=100);
            -webkit-transform: scale(1);
            transform: scale(1);
        }

        #contact {
            color: #3399FF;
            font-size: 40px
        }

        .myHoverDiv {
            position: absolute;
            z-index: 3001;
            opacity: 0.95;
            margin-top: 70px;
            left: 10%;
            right: 10%;
            visibility: hidden;
            background: #e7e7e7;
            width: 80%;
            height: 150px;
        }

        .myInnner {
            position: relative;
            opacity: 0.80;
            padding: 50px;
            margin-left: 10%;
            margin-right: 10%;
        }

        .myButtonSet {
            border-radius: 0px;
            font-size: 20px;
            margin: 15px;
        }

        .myHoverDiv:after {
            opacity: 0.5;
            content: '';
            font-size: 5px;
            position: absolute;
            top: -13px;
            left: 78%;
            right: 0;
            margin: 0 auto;
            width: 0;
            height: 0;
            border-bottom: solid 15px #e7e7e7;
            border-left: solid 15px transparent;
            border-right: solid 15px transparent;
        }

        @media screen and (max-width: 480px) {
            .myInnner {
                position: relative;
                opacity: 0.7;
                padding: 10px;
                font-size: 10px;
                margin-left: 5px;
                margin-right: 5px;
            }

            .myButtonSet {
                border-radius: 0px;
                font-size: 15px;
                opacity: 1;
            }

            .myHoverDiv:after {
                content: '';
                opacity: 0.5;
                font-size: 5px;
                position: absolute;
                top: -8px;
                left: 0;
                right: 0;
                margin: 0 auto;
                width: 0;
                height: 0;
                border-bottom: solid 15px #e7e7e7;
                border-left: solid 15px transparent;
                border-right: solid 15px transparent;
            }
        }

    </style>

    <!--<link href="css/custom.css" rel="stylesheet">-->

<body class="no-trans scroll-spy">
<!-- start : SCROLLTOTOP -->
<div class="scrollToTop"><i class="icon-up-open-big"></i>
</div>
<!-- end : SCROLLTOTOP -->

<!-- start : BANNER -->
<div id="banner" class="banner">
    <div class="myHoverDiv arrow_box">
        <div class="myInnner">
            <center>
                <a href="http://odontovision.com/clinic/clinic_register.php" class="btn btn-success myButtonSet">As an
                    Individual</a>
                <a href="http://odontovision.com/clinic/clinic_register.php" class="btn btn-success myButtonSet">As a
                    Clinic</a>
            </center>
        </div>
    </div>
    <!-- end : HOOVER OPTIONS -->

    <div class="banner-caption">
        <div class="container">
            <div class="row">
                <div class="caption-data col-sm-12 col-xs-12 col-md-12 col-lg-12 animated object-visible fadeIn"
                     style="margin-top: 0px; opacity: 1;" data-animation-effect="fadeIn">
                    <!--<h2>Em breve..</h2>
                    <h1 style="letter-spacing:2px;">Odontovision</h1>
                    <h3 class="padding-top30">Revolucionando a forma de gerenciar a sua clínica.</h3>-->
                    <a href="{{ url('/')}}"><img src="{{ url('/images/logox.png') }}" style="margin:auto" width="250px"
                                                 height="250px"></a>

                    <div class="col-sm-12 col-xs-12 col-md-12 col-lg-12">
                        <h3>Revolucionando a forma de gerenciar a sua clínica.</h3>
                    </div>
                    <div class="contact-form scrollspy smooth-scroll" style="margin-top:80px">
                        <a class="btn btn-squared btn-xl" href="#contact"
                           style="opacity:1;background-color:whitesmoke;color:#53ADE5">Saiba mais</a>
                        @if (Route::has('login'))
                            <a class="btn btn-default" href="{{ url('/login') }}"
                               style="opacity:1;background-color:whitesmoke;color:#53ADE5">Login</a>
                            <a class="btn btn-default" href="{{ url('/register') }}"
                               style="opacity:1;background-color:whitesmoke;color:#53ADE5">Register</a>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>
<!-- end : BANNER -->

<!-- start : FOOTER -->
<footer id="footer">
    <!-- .footer start -->
    <div class="footer section">
        <div class="container">
            <h2 class="title text-center" id="contact">Entre em Contato</h2>

            <div class="space"></div>
            <div class="row">

                <div class="col-sm-6">
                    <div class="footer-content">
                        <form role="form" id="contactForm" method="POST" name="sendMessage"
                              action="mail/contact_me.php">
                            <div class="form-group has-feedback">
                                <label class="sr-only">Nome</label>
                                <input class="form-control" id="name" placeholder="Nome" name="iname" required=""
                                       type="text">
                                <i class="fa fa-user  form-control-feedback"></i>
                            </div>
                            <div class="form-group has-feedback">
                                <label class="sr-only">Email</label>
                                <input class="form-control" id="email" placeholder="Email" name="iemail" required=""
                                       type="email">
                                <i class="fa fa-envelope form-control-feedback"></i>
                            </div>
                            <div class="form-group has-feedback">
                                <label class="sr-only">Telefone</label>
                                <input class="form-control" id="phone" placeholder="Telefone" name="iphone" required=""
                                       type="text">
                                <i class="fa fa-phone form-control-feedback"></i>
                            </div>
                            <div id="success"></div>
                            <input value="Enviar" class="btn btn-default" type="submit">
                        </form>
                    </div>
                </div>

                <div class="col-sm-6">
                    <div class="footer-content">
                        <aside>
                            <div class="widget-content">
                                <p style="font-size: 23px">Detalhes</p><br>

                                <p class="contacts"><i class="fa fa-fw fa-map-marker" style="margin: 5px"></i>
                                    Uberlândia
                                </p>

                                <p class="contacts"><i class="fa fa-fw fa-phone" style="margin: 5px"></i> (34) 99642
                                    -7629
                                </p>

                                <p class="contacts"><i class="fa fa-fw fa-envelope" style="margin: 5px"></i>
                                    contato@odontovision.com
                                </p>

                            </div>
                        </aside>
                        <ul class="social-links">
                            <li class="facebook"><a target="_blank" href="#"><i class="fa fa-facebook"></i></a></li>
                            <li class="twitter"><a target="_blank" href="#"><i class="fa fa-twitter"></i></a></li>
                            <li class="skype"><a target="_blank" href="#"><i class="fa fa-skype"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- .footer end -->
</footer>
<!-- end : FOOTER -->

<!-- start : JAVASCRIPT -->
<script type="text/javascript" src="Odontovision_files/jquery_002.js"></script>
<script type="text/javascript">
    $(function () {
        //alert("Hellow");
        $('#reg').on('click', function () {
            if ($('.myHoverDiv').css('visibility') == 'hidden') {
                $('.myHoverDiv').css('visibility', 'visible').fadeIn();
            }
            else {
                $('.myHoverDiv').css('visibility', 'hidden').fadeOut();
            }
        });
    });
</script>
<!-- end : JAVASCRIPT -->


</body>
</html>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

    <!-- Styles -->
    <style>
        html, body {
            background-color: #fff;
            color: #636b6f;
            font-family: 'Raleway', sans-serif;
            font-weight: 100;
            height: 100vh;
            margin: 0;
        }

        .full-height {
            height: 100vh;
        }

        .flex-center {
            align-items: center;
            display: flex;
            justify-content: center;
        }

        .position-ref {
            position: relative;
        }

        .top-right {
            position: absolute;
            right: 10px;
            top: 18px;
        }

        .content {
            text-align: center;
        }

        .title {
            font-size: 84px;
        }

        .links > a {
            color: #636b6f;
            padding: 0 25px;
            font-size: 12px;
            font-weight: 600;
            letter-spacing: .1rem;
            text-decoration: none;
            text-transform: uppercase;
        }

        .m-b-md {
            margin-bottom: 30px;
        }
    </style>
</head>
<body>
<div class="flex-center position-ref full-height">
    @if (Route::has('login'))
        <div class="top-right links">
            <a href="{{ url('/login') }}">Login</a>
            <a href="{{ url('/register') }}">Register</a>
        </div>
    @endif

    <div class="content">
        <div class="title m-b-md">
            Laravel
        </div>

        <div class="links">
            <a href="https://laravel.com/docs">Documentation</a>
            <a href="https://laracasts.com">Laracasts</a>
            <a href="https://laravel-news.com">News</a>
            <a href="https://forge.laravel.com">Forge</a>
            <a href="https://github.com/laravel/laravel">GitHub</a>
        </div>
    </div>
</div>
</body>
</html>
