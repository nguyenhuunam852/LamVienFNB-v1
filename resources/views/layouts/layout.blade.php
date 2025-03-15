<!DOCTYPE html>
<html lang="en">

<head>
    <!-- basic -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Lam Vien FNB</title>
    <meta name="keywords" content="">
    <meta name="description" content="">
    <meta name="author" content="">

    <style>
        /*--------------------------------------------------------------------- animate section ---------------------------------------------------------------------*/
        :root {
            --animate-duration: 1s;
            --animate-delay: 1s;
            --animate-repeat: 1
        }

        .banner {
            margin-bottom: 30px;
        }

        .animated {
            -webkit-animation-duration: 1s;
            animation-duration: 1s;
            -webkit-animation-fill-mode: both;
            animation-fill-mode: both
        }

        .fadeInLeft {
            -webkit-animation-name: fadeInLeft;
            animation-name: fadeInLeft
        }

        .fadeInRight {
            -webkit-animation-name: fadeInRight;
            animation-name: fadeInRight
        }

        .fadeInDown {
            -webkit-animation-name: fadeInDown;
            animation-name: fadeInDown
        }


        /*--------------------------------------------------------------------- animation section ---------------------------------------------------------------------*/

        .fadeInUp {
            opacity: 0;
            animation-name: fadeInUp;
            -webkit-animation-name: fadeInUp;
        }

        .animated {
            animation-duration: 1s;
            animation-fill-mode: both;
            -webkit-animation-duration: 1s;
            -webkit-animation-fill-mode: both
        }

        @keyframes fadeInUp {
            from {
                opacity: 0;
                -webkit-transform: translate3d(0, 100%, 0);
                transform: translate3d(0, 100%, 0);
            }

            to {
                opacity: 1;
                transform: translateZ(0);
                -webkit-transform: translateZ(0);
            }
        }

        @keyframes fadeInRight {
            from {
                opacity: 0;
                transform: translateX(300px);
            }

            to {
                opacity: 1;
            }
        }

        @keyframes fadeInLeft {
            from {
                opacity: 0;
                transform: translateX(-300px);
            }

            to {
                opacity: 1;
                transform: translateX(0);
            }
        }

        @keyframes fadeInDown {
            from {
                opacity: 0;
                transform: translateY(-300px);
            }

            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        /*--------------------------------------------------------------------- bootstrap section ---------------------------------------------------------------------*/

        :root {
            --blue: #007bff;
            --indigo: #6610f2;
            --purple: #6f42c1;
            --pink: #e83e8c;
            --red: #dc3545;
            --orange: #fd7e14;
            --yellow: #ffc107;
            --green: #28a745;
            --teal: #20c997;
            --cyan: #17a2b8;
            --white: #fff;
            --gray: #6c757d;
            --gray-dark: #343a40;
            --primary: #007bff;
            --secondary: #6c757d;
            --success: #28a745;
            --info: #17a2b8;
            --warning: #ffc107;
            --danger: #dc3545;
            --light: #f8f9fa;
            --dark: #343a40;
            --breakpoint-xs: 0;
            --breakpoint-sm: 576px;
            --breakpoint-md: 768px;
            --breakpoint-lg: 992px;
            --breakpoint-xl: 1200px;
            --font-family-sans-serif: -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, "Helvetica Neue", Arial, sans-serif, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol";
            --font-family-monospace: SFMono-Regular, Menlo, Monaco, Consolas, "Liberation Mono", "Courier New", monospace
        }

        .h1,
        h1 {
            font-size: 2.5rem
        }

        .h1,
        .h2,
        .h3,
        .h4,
        .h5,
        .h6,
        h1,
        h2,
        h3,
        h4,
        h5,
        h6 {
            margin-bottom: .5rem;
            font-family: inherit;
            font-weight: 500;
            line-height: 1.2;
            color: inherit
        }

        h1,
        h2,
        h3,
        h4,
        h5,
        h6 {
            margin-top: 0;
            margin-bottom: .5rem
        }

        p {
            margin-top: 0;
            margin-bottom: 1rem
        }

        body {
            margin: 0;
            font-family: -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, "Helvetica Neue", Arial, sans-serif, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol";
            font-size: 1rem;
            font-weight: 400;
            line-height: 1.5;
            color: #212529;
            text-align: left;
            background-color: #fff
        }

        *,
        ::after,
        ::before {
            box-sizing: border-box
        }

        article,
        aside,
        dialog,
        figcaption,
        figure,
        footer,
        header,
        hgroup,
        main,
        nav,
        section {
            display: block
        }

        dl,
        ol,
        ul {
            margin-top: 0;
            margin-bottom: 1rem
        }

        .visible {
            visibility: visible !important
        }

        *,
        *::after,
        *::before {
            -webkit-box-sizing: border-box;
            -moz-box-sizing: border-box;
            box-sizing: border-box;
        }

        * {
            box-sizing: border-box !important;
        }

        ::-webkit-scrollbar {
            width: 4px;
            height: 4px;
            background-color: var(--white-600);
        }

        ::-webkit-scrollbar-thumb {
            -webkit-box-shadow: inset 0 0 6px rgba(0, 0, 0, .3);
            background-color: var(--primary-600);
        }

        ::-webkit-scrollbar-track {
            -webkit-box-shadow: inset 0 0 6px rgba(0, 0, 0, 0.3);
            background-color: var(--white-600);
        }

        h1,
        h2,
        h3,
        h4,
        h5,
        h6 {
            letter-spacing: 0;
            font-weight: normal;
            position: relative;
            padding: 0 0 10px 0;
            font-weight: normal;
            line-height: normal;
            color: #111111;
            margin: 0
        }

        h1 {
            font-size: 24px
        }

        h2 {
            font-size: 22px
        }

        h3 {
            font-size: 18px
        }

        h4 {
            font-size: 16px
        }

        h5 {
            font-size: 14px
        }

        h6 {
            font-size: 13px
        }

        h1 a,
        h2 a,
        h3 a,
        h4 a,
        h5 a,
        h6 a {
            color: #212121;
            text-decoration: none !important;
            opacity: 1
        }

        button:focus {
            outline: none;
        }

        p {
            margin: 0px;
            font-weight: 300;
            font-size: 15px;
            line-height: 24px;
        }

        img {
            vertical-align: middle;
            border-style: none;
            max-width: 100%;
            height: auto;
        }

        html {
            line-height: 1.15;
            -ms-text-size-adjust: 100%;
            -webkit-text-size-adjust: 100%;
            scroll-behavior: smooth;
            font-family: sans-serif;
            line-height: 1.15;
            -webkit-text-size-adjust: 100%;
            -ms-text-size-adjust: 100%;
            -ms-overflow-style: scrollbar;
            -webkit-tap-highlight-color: transparent
        }

        body {
            color: #666666;
            font-size: 14px;
            font-family: poppins;
            line-height: 1.80857;
            font-weight: normal;
            overflow-x: hidden;
        }

        ul,
        li,
        ol {
            margin: 0px;
            padding: 0px;
            list-style: none;
        }

        article,
        aside,
        footer,
        header,
        nav,
        section {
            display: block;
        }

        a {
            color: #1f1f1f;
            text-decoration: none !important;
            outline: none !important;
            -webkit-transition: all .3s ease-in-out;
            -moz-transition: all .3s ease-in-out;
            -ms-transition: all .3s ease-in-out;
            -o-transition: all .3s ease-in-out;
            transition: all .3s ease-in-out;
            text-decoration: none;
            background-color: transparent;
            -webkit-text-decoration-skip: objects;
        }

        a,
        .btn {
            text-decoration: none !important;
            outline: none !important;
            -webkit-transition: all .3s ease-in-out;
            -moz-transition: all .3s ease-in-out;
            -ms-transition: all .3s ease-in-out;
            -o-transition: all .3s ease-in-out;
            transition: all .3s ease-in-out;
        }

        .header {
            background: linear-gradient(to right, #215e1c, #4c9a2a, #a5d652);
            background-color: rgba(0, 0, 0, 0);
            background-repeat: repeat;
            background-size: auto;
            background-color: #00000052;
            box-shadow: #060606 0px 0px 3px 0px;
            z-index: 999;
            width: 100%;
            left: 0;
            top: 0;
            background-color: #00000052;
            padding: 0;
            padding-top: 0px;
            background-size: 100% 100%;
            background-repeat: no-repeat;
            min-height: 110px;
            padding-top: 50px;
        }

        .container-fluid {
            width: 100%;
            padding-right: 15px;
            padding-left: 15px;
            margin-right: auto;
            margin-left: auto
        }

        .row {
            display: -ms-flexbox;
            display: flex;
            -ms-flex-wrap: wrap;
            flex-wrap: wrap;
            margin-right: -15px;
            margin-left: -15px
        }

        .col-md-12 {
            -ms-flex: 0 0 100%;
            flex: 0 0 100%;
            max-width: 100%
        }

        .col {
            -ms-flex-preferred-size: 0;
            flex-basis: 0;
            -ms-flex-positive: 1;
            flex-grow: 1;
            max-width: 100%
        }

        .col,
        .col-1,
        .col-10,
        .col-11,
        .col-12,
        .col-2,
        .col-3,
        .col-4,
        .col-5,
        .col-6,
        .col-7,
        .col-8,
        .col-9,
        .col-auto,
        .col-lg,
        .col-lg-1,
        .col-lg-10,
        .col-lg-11,
        .col-lg-12,
        .col-lg-2,
        .col-lg-3,
        .col-lg-4,
        .col-lg-5,
        .col-lg-6,
        .col-lg-7,
        .col-lg-8,
        .col-lg-9,
        .col-lg-auto,
        .col-md,
        .col-md-1,
        .col-md-10,
        .col-md-11,
        .col-md-12,
        .col-md-2,
        .col-md-3,
        .col-md-4,
        .col-md-5,
        .col-md-6,
        .col-md-7,
        .col-md-8,
        .col-md-9,
        .col-md-auto,
        .col-sm,
        .col-sm-1,
        .col-sm-10,
        .col-sm-11,
        .col-sm-12,
        .col-sm-2,
        .col-sm-3,
        .col-sm-4,
        .col-sm-5,
        .col-sm-6,
        .col-sm-7,
        .col-sm-8,
        .col-sm-9,
        .col-sm-auto,
        .col-xl,
        .col-xl-1,
        .col-xl-10,
        .col-xl-11,
        .col-xl-12,
        .col-xl-2,
        .col-xl-3,
        .col-xl-4,
        .col-xl-5,
        .col-xl-6,
        .col-xl-7,
        .col-xl-8,
        .col-xl-9,
        .col-xl-auto {
            position: relative;
            width: 100%;
            min-height: 1px;
            padding-right: 15px;
            padding-left: 15px
        }

        @media (min-width: 576px) {
            .container {
                max-width: 540px
            }

            .col-sm-3 {
                -ms-flex: 0 0 25%;
                flex: 0 0 25%;
                max-width: 25%
            }

            .col-sm-9 {
                -ms-flex: 0 0 75%;
                flex: 0 0 75%;
                max-width: 75%
            }

            .col-sm-12 {
                -ms-flex: 0 0 100%;
                flex: 0 0 100%;
                max-width: 100%
            }

            .col-sm {
                -ms-flex-preferred-size: 0;
                flex-basis: 0;
                -ms-flex-positive: 1;
                flex-grow: 1;
                max-width: 100%
            }

            .col-sm-12 {
                -ms-flex: 0 0 100%;
                flex: 0 0 100%;
                max-width: 100%
            }
        }

        @media (min-width: 768px) {
            .container {
                max-width: 720px
            }

            .col-md-3 {
                -ms-flex: 0 0 25%;
                flex: 0 0 25%;
                max-width: 25%
            }

            .col-md-9 {
                -ms-flex: 0 0 75%;
                flex: 0 0 75%;
                max-width: 75%
            }

            .col-md-12 {
                -ms-flex: 0 0 100%;
                flex: 0 0 100%;
                max-width: 100%
            }

            .col-md-12 {
                -ms-flex: 0 0 100%;
                flex: 0 0 100%;
                max-width: 100%
            }

            .col-md-6 {
                -ms-flex: 0 0 50%;
                flex: 0 0 50%;
                max-width: 50%
            }
        }

        @media (min-width: 992px) {
            .container {
                max-width: 960px
            }

            .col-lg-3 {
                -ms-flex: 0 0 25%;
                flex: 0 0 25%;
                max-width: 25%
            }

            .col-lg-9 {
                -ms-flex: 0 0 75%;
                flex: 0 0 75%;
                max-width: 75%
            }

            .col-lg-12 {
                -ms-flex: 0 0 100%;
                flex: 0 0 100%;
                max-width: 100%
            }

            .col-lg-6 {
                -ms-flex: 0 0 50%;
                flex: 0 0 50%;
                max-width: 50%
            }
        }

        @media (min-width: 1200px) {
            .container {
                max-width: 1140px
            }

            .col-xl-3 {
                -ms-flex: 0 0 25%;
                flex: 0 0 25%;
                max-width: 25%
            }

            .col-xl-9 {
                -ms-flex: 0 0 75%;
                flex: 0 0 75%;
                max-width: 75%
            }

            .col-xl-12 {
                -ms-flex: 0 0 100%;
                flex: 0 0 100%;
                max-width: 100%
            }

            .col-xl-6 {
                -ms-flex: 0 0 50%;
                flex: 0 0 50%;
                max-width: 50%
            }
        }

        .header_information ul {
            display: inline-block;
        }

        .header_information ul li {
            align-items: center;
            display: inline-block;
            padding: 0px 10px;
            padding-right: 60px;
        }

        .header_information ul li img {
            padding-right: 10px;
        }

        .container {
            width: 100%;
            padding-right: 15px;
            padding-left: 15px;
            margin-right: auto;
            margin-left: auto
        }

        .full {
            width: 100%;
            float: left;
            margin: 0;
            padding: 0;
        }

        .logo {
            float: left;
            position: relative;
            top: -22px;
        }

        .mean-nav ul li.mean-last a {
            border-bottom: 1px solid #cccccc;
            margin-bottom: 0;
        }

        .menu-area-main li.active a {
            color: #000;
        }

        .mean-nav ul li a {
            border-bottom: 1px solid #ccc;
            color: #383838;
            display: block;
            float: left;
            font-size: 12px;
            font-weight: 500;
            margin: 0;
            padding: 1em 5%;
            text-align: left;
            text-decoration: none;
            text-transform: uppercase;
            width: 90%;
        }

        a.meanmenu-reveal {
            display: none;
        }

        .mean-nav ul li {
            position: relative;
            float: left;
            width: 100%;
        }

        .mean-bar {
            background: #000;
            float: left;
            min-height: 40px;
            padding: 5px 0;
            position: relative;
            width: 100%;
            z-index: 999;
        }

        .mean-nav ul {
            padding: 0;
            margin: 0;
            width: 100%;
            list-style-type: none;
        }

        .mean-nav ul li.mean-last a {
            border-bottom: 1px solid #cccccc;
            margin-bottom: 0;
        }

        .mean-nav {
            background: #ffffff none repeat scroll 0 0;
            float: left;
            margin-top: 44px;
            width: 100%;
        }

        .mean-nav {
            margin-top: 0px;
            position: absolute;
            top: 100%;
        }

        .mean-bar,
        .mean-bar * {
            -webkit-box-sizing: content-box;
            -moz-box-sizing: content-box;
            box-sizing: content-box;
        }

        a.meanmenu-reveal {
            color: #fff;
            cursor: pointer;
            display: block;
            font-family: 'Roboto', sans-serif;
            font-weight: 400;
            height: 22px;
            line-height: 22px;
            position: absolute;
            right: 12px;
            text-decoration: none;
            top: 12px;
            width: 26px;
        }

        a.meanmenu-reveal span {
            background: #ffffff none repeat scroll 0 0;
            border-radius: 0;
            display: block;
            height: 4px;
            margin-top: 3px;
            width: auto;
        }

        a.meanmenu-reveal span:first-child {
            margin: 0
        }

        .main-menu {
            text-align: center;
        }

        nav.main-menu {
            float: right;
            margin-left: 0;
        }

        .mean-bar {
            display: none;
        }

        .main-menu ul {
            margin: 0;
            list-style-type: none;
            margin-bottom: 10px;
        }

        .header_information {
            background-color: #fff;
            padding: 0 0;
            padding-top: 0px;
            margin-top: 0;
            margin-right: 0;
            margin-bottom: 0;
            position: absolute;
            width: 100%;
            max-width: 900px;
            height: 50px;
            top: -50px;
            padding-top: 10px;
            right: 0;
        }

        .header_information::after {
            width: 41px;
            height: 50px;
            display: block;
            content: "";
            position: absolute;
            top: 0;
            left: -41px;
        }

        .main-menu ul>li {
            position: inherit;
            display: inline-block;
            vertical-align: middle;
        }

        .main-menu ul li:first-child {
            margin-left: 0;
        }

        .main-menu ul>li a {
            line-height: 20px;
            font-size: 20px;
            display: block;
            font-weight: 500;
            color: #fff;
            padding: 15px 26px;
            padding-top: 24px;
        }

        .menu-area-main li:hover a,
        .menu-area-main li:focus a {
            color: #000;
        }

        .section-2 .item {
            min-width: calc((100% / 3) - 20px);
        }

        .section-2 .item {
            height: 450px;
            padding: 20px;
            border: 2px solid black;
            margin-bottom: 20px;
            border-radius: 10px;
            margin-inline: 10px;
            transition: box-shadow 0.3s ease;
            overflow: hidden;
        }

        /*--------------------------------------------------------------------- banner area ---------------------------------------------------------------------*/

        .banner-main {
            position: relative;
            width: 100%;
            height: 600px;
            overflow: hidden;
            padding-bottom: 10px;
            border-bottom-left-radius: 50% 50px;
            border-bottom-right-radius: 50% 50px;
        }

        .banner {
            width: 100%;
            height: 100%;
            object-fit: cover;
            display: block;
        }

        .cloud {
            position: absolute;
            bottom: 0;
            left: 50%;
            height: 30%;
            transform: translateX(-50%);
            width: 100%;
            filter: blur(10px);
            opacity: 0.8;
        }

        .banner-content {
            z-index: 4;
            text-align: center;
            width: 70%;
            left: 50%;
            top: 50%;
            color: #fff;
            position: absolute;
            bottom: auto;
            transform: translate(-50%, -50%);
        }

        .banner-item {
            font-size: 6rem;
            font-family: Satisfy, cursive;
            text-shadow: -1px -1px 0 transparent, 1px -1px 0 transparent, -1px 1px 0 transparent, 1px 1px 0 rgba(0, 0, 0, .5);
            color: inherit !important;
        }

        /*--------------------------------------------------------------------- section-1 section ---------------------------------------------------------------------*/

        .section-1 {
            padding-top: 0px !important;
        }

        .titlepage {
            text-align: center;
            padding-bottom: 54px;
        }

        .titlepage h2 {
            padding: 0px 0px 20px 0px;
            font-size: 45px;
            font-weight: bold;
            color: #0e0f10;
            line-height: 50px;
            text-transform: uppercase;
            display: inline-block;
            position: relative;
        }

        .titlepage h2::before {
            right: 100%;
            margin-right: 15px;
        }

        .titlepage h2::after {
            left: 100%;
            margin-left: 15px;
        }

        .titlepage h2::before,
        .titlepage h2::after {
            content: "";
            position: absolute;
            height: 5px;
            border-top: 1px solid #13aba6;
            top: 27px;
            width: 149px;
        }

        .titlepage span {
            color: #0e0f10;
            font-size: 17px;
            line-height: 32px;
            display: inline-block;
            margin-bottom: 0px;
            display: block;
        }

        .section-1 .section-1-box p {
            font-size: 17px;
            line-height: 32px;
            color: #141012;
            position: relative;
            margin: 50px auto;
            width: 100%;
            display: inline-block;
            padding: 60px 25px;
            border-left: 15px solid #0a8f44;
            border-right: 15px solid #063d1e;
            border-radius: 5px;
            -webkit-box-sizing: border-box;
            -moz-box-sizing: border-box;
            box-sizing: border-box;
            background-position: 0 0, 0 100%;
            background-repeat: no-repeat;
            -webkit-background-size: 100% 20px;
            -moz-background-size: 100% 20px;
            background-size: 100% 20px;
            background-image: -webkit-linear-gradient(left, #0a8f44 0%, #063d1e 100%), -webkit-linear-gradient(left, #0a8f44 0%, #063d1e 100%);
            background-image: -moz-linear-gradient(left, #0a8f44 0%, #063d1e 100%), -moz-linear-gradient(left, #0a8f44 0%, #063d1e 100%);
            background-image: -o-linear-gradient(left, #0a8f44 0%, #063d1e 100%), -o-linear-gradient(left, #0a8f44 0%, #063d1e 100%);
            background-image: linear-gradient(to right, #0a8f44 0%, #063d1e 100%), linear-gradient(to right, #0a8f44 0%, #063d1e 100%);
        }

        .section-1 .section-1-box p span {
            display: inline-block;
            padding-right: 360px;
        }

        .palne-img-area {
            position: absolute;
            top: -20px;
            left: 65%;
            width: 35%;
            height: 120%;
        }

        .palne-img-area img {
            width: 100%;
            height: 100% !important;
        }

        .hidden {
            opacity: 0;
            transition: opacity 0.5s ease-out;
            pointer-events: none;
            /* Optional: prevents interaction when hidden */
        }

        .visible {
            transition: opacity 0.5s ease-in;
        }

        .section-1 a {
            width: 200px;
            font-size: 17px;
            padding: 20px 0px;
            background-color: #ee580f;
            color: #fff;
            display: inline-block;
            line-height: 20px;
            border-radius: 30px;
            text-align: center;
            margin: 70px auto 0px auto;
            display: flex;
            justify-content: center;
        }

        .section-1 a:hover {
            background: #15cfe5;
            ;
        }

        /*--------------------------------------------------------------------- section-2 section ---------------------------------------------------------------------*/

        .section-2 {
            background-color: #8EBC38;
            margin-top: 90px;
            padding-top: 54px;
            padding-bottom: 54px;
            border-bottom-right-radius: 160px;
            border-top-left-radius: 160px;
        }


        .item h3 {
            font-size: 20px;
            line-height: 29px;
            padding: 10px 10px 10px 10px;
            color: #282727;
        }

        .carousel-container {
            overflow: hidden;
            position: relative;
            margin: auto;
        }

        .carousel-wrapper {
            display: flex;
            transition: transform 0.5s ease-in-out;
            margin: auto;
        }

        .dots-container {
            text-align: center;
            margin-top: 10px;
        }

        .dot {
            width: 12px;
            height: 12px;
            margin: 5px;
            display: inline-block;
            background-color: #bbb;
            border-radius: 50%;
            cursor: pointer;
        }

        .dot.active {
            background-color: #333;
        }

        /*--------------------------------------------------------------------- section-3 section ---------------------------------------------------------------------*/

        .section-3 {
            background-color: #fff;
            padding-top: 90px;
        }

        .section-3 .section-3-box figure {
            margin: 0px;
        }

        .section-3 .section-3-box figure span {
            top: 0;
            left: 0px;
            position: absolute;
            margin-left: 15px;
            background: #022739;
            padding: 10px 30px;
            color: #fff;
        }

        .section-3 .section-3-box .travel {
            padding: 15px 0px;
        }

        .section-3 .section-3-box .travel span {
            color: #13aba6;
            display: inline-block;
        }

        .section-3 .section-3-box .travel p {
            float: right;
            padding-left: 15px;
        }

        .section-3 .section-3-box p {
            font-size: 16px;
            line-height: 30px;
        }

        .img-responsive {
            max-width: 100%;
            height: 50%;
            border-radius: 10px;
            width: 100%;
        }

        .section-2 .item:hover {
            box-shadow: 5px 5px 10px rgba(0, 0, 0, 0.9);
        }

        .hightlight-section-3 {
            color: #13b0be;
        }

        /*--------------------------------------------------------------------- footer section ---------------------------------------------------------------------*/

        .footer {
            background-color: #022739;
            margin-top: 90px;
        }

        .pdn-top-30 {
            padding-top: 35px;
        }

        ul.location_icon {
            list-style: none;
            margin: 0;
            padding: 0;
            width: 100%;
            float: left;
        }

        ul.location_icon li {
            float: left;
            height: 70px;
            color: #fff;
            display: flex;
            flex-wrap: wrap;
            align-items: center;
            padding-right: 20px;
        }

        ul.location_icon li a {
            margin-bottom: 23px;
        }

        .footer .Follow {
            margin-bottom: 27px;
        }

        .footer .Follow h3 {
            color: #fff;
            font-size: 25px;
            line-height: 30px;
            font-weight: 600;
            text-transform: uppercase;
            border-width: 1px;
            display: inline-block;
            padding-bottom: 2px;
            padding-bottom: 27px;
        }

        .footer span {
            font-size: 17px;
            display: block;
            color: #fff;
        }

        ul.link li a {
            color: #fff;
            font-size: 17px;
        }

        .footer .Newsletter {
            padding: 13px 26px;
            padding-top: 10px;
            padding-right: 26px;
            padding-bottom: 10px;
            padding-left: 15px;
            border: #fff solid 1px;
            width: 100%;
            margin-bottom: 15px;
        }

        .textarea {
            padding: 6px 0px 0px 19px;
            color: #655f5f !important;
            width: 100%;
            border: #b1b0b0 solid 1px;
            height: 65px;
            margin-bottom: 20px;
        }

        .footer .Subscribe {
            padding: 10px 30px;
            border: #0e0c0c solid 1px;
            background: #0e0c0c;
            color: #fff;
            float: right;
        }

        .copyright {
            padding: 10px 0px 30px 0;
        }

        .copyright p {
            color: #fff;
            font-size: 16px;
            text-align: center;
            max-width: 594px;
            text-align: center;
            margin: 0 auto;
            width: 100%;
            padding-top: 10px;
            border-top: #807d7d solid 1px;
        }

        .copyright a {
            color: #fff;
        }

        @media only screen and (min-width: 768px) and (max-width: 991px) {
            .section-2 .item {
                min-width: calc((100% / 3) - 20px);
            }

            .main-menu ul>li a {
                padding: 20px 20px 20px;
            }
        }

        @media only screen and (min-width: 599px) and (max-width: 767px) {
            .logo {
                text-align: center;
            }

            .menu-area-main {
                height: 256px;
                overflow-y: auto;
            }

            .carousel-item {
                min-width: calc(100% - 20px);
            }
        }

        @media only screen and (min-width: 280px) and (max-width: 599px) {
            .menu-area-main {
                height: 290px;
                overflow-y: auto;
            }

            .section-2 .item {
                margin-inline: 0px;
            }

            .carousel-item {
                min-width: calc(100%/3);
            }

            .mean-nav ul li li a {
                width: 90%;
                padding: 1em 5%;
            }
        }

        @media (min-width: 992px) and (max-width: 1199px) {
            .header_information {
                display: none;
            }

            .logo {
                top: -28px;
            }

            .main-menu ul>li a {
                padding: 23px 25px 0 25px;
            }

            .main-menu ul {
                margin-top: -23px;
            }

            .section-2 .item {
                min-width: calc((100% / 3) - 20px);
            }

            .titlepage h2 {
                font-size: 39px;
                line-height: 40px;
            }

            .titlepage h2::before,
            .titlepage h2::after {
                top: 20px;
                width: 129px;
            }

            .section-1 {
                padding-top: 90px !important;
            }

            .section-1 .section-1-box p {
                margin: 0;
            }

            .palne-img-area {
                display: none;
            }

            .section-1 .section-1-box p span {
                padding-right: 0px;
            }

            .section-1 a {
                margin-top: 50px;
            }

            ul.location_icon li {
                padding-right: 20px;
            }
        }

        @media (min-width: 768px) and (max-width: 991px) {
            .header_information {
                display: none;
            }

            .main-menu ul>li a {
                padding: 11px 15px 0 15px;
            }

            .main-menu ul {
                margin-top: -13px;
            }

            .section-2 .item {
                min-width: calc((100% / 3) - 20px);
            }

            .titlepage h2 {
                font-size: 32px;
                line-height: 40px;
            }

            .titlepage h2::before,
            .titlepage h2::after {
                top: 20px;
                width: 84px;
            }

            .section-1 {
                padding: 90px 0px !important;
                margin-top: 33px;
            }

            .section-1 .section-1-box p {
                margin: 0;
            }

            .palne-img-area {
                display: none;
            }

            .section-1 .section-1-box p span {
                padding-right: 0px;
            }

            .section-1 a {
                margin-top: 50px;
            }

            .section-2 .section-2-box p {
                font-size: 14px;
            }

            .traveling-box {
                margin-bottom: 20px;
            }

            ul.location_icon li {
                padding-right: 12px;
            }
        }

        @media (min-width: 576px) and (max-width: 767px) {
            .carousel-container {
                display: block;
                margin-right: 0px;
                margin-left: 0px;
                padding: 0px;
            }

            .mean-bar {
                display: unset;
            }

            .section-2 .item {
                margin-inline: 0px;
                min-width: 100%;
            }

            .header_information {
                display: none;
            }

            .header {
                padding-bottom: 0px;
            }

            .mean-bar {
                margin-top: -15px;
            }

            .logo {
                float: inherit;
                text-align: center;
                padding-top: 7px;
            }

            .limit-box {
                display: none;
            }

            .banner-main img {
                height: 400px;
                width: 100%;
            }

            .titlepage h2 {
                font-size: 25px;
                line-height: 40px;
            }

            .titlepage h2::before,
            .titlepage h2::after {
                top: 20px;
                width: 57px;
            }

            .section-1 {
                margin-top: 33px;
            }

            .section-1 .section-1-box p {
                margin: 0;
            }

            .palne-img-area {
                display: none;
            }

            .section-1 .section-1-box p span {
                padding-right: 0px;
            }

            .section-1 a {
                margin-top: 50px;
            }

            .section-2 {
                border-bottom-right-radius: 0px;
                padding-bottom: 0px;
            }

            .section-2-box {
                margin-bottom: 20px;
            }

            .section-2 .section-2-box .travel p {
                padding-left: 8px;
            }

            .footer {
                margin-top: 70px;
            }

            ul.location_icon {
                margin-bottom: 25px;
            }
        }

        @media (max-width: 575px) {
            .carousel-container {
                display: block;
            }

            .limit-box {
                display: none;
            }

            .mean-bar {
                display: unset;
            }

            .section-2 .item {
                min-width: 100%;
                margin-inline: 0px;
            }

            .carousel-item {
                min-width: calc(100%/3);
            }

            .header {
                padding-bottom: 0px;
            }

            .header_information {
                display: none;
            }

            .logo {
                float: inherit;
                text-align: center;
            }

            .banner-main img {
                width: 100%;
            }

            .titlepage h2 {
                font-size: 27px;
                line-height: 34px;
            }

            .titlepage h2::before,
            .titlepage h2::after {
                top: 20px;
                width: 0px;
            }

            .section-1 .section-1-box p {
                margin: 0;
            }

            .palne-img-area {
                display: none;
            }

            .section-1 {
                min-height: 300px;
                /* Adjust as needed */
            }

            .section-1 .section-1-box p span {
                padding-right: 0px;
            }

            .section-1 a {
                margin-top: 50px;
            }

            .titlepage span {
                margin-bottom: 0px;
            }

            .section-2 {
                border-bottom-right-radius: 0px;
                padding-bottom: 0px;
            }

            .section-2-box {
                margin-bottom: 20px;
            }

            .section-2 .section-2-box .travel p {
                padding-left: 8px;
                font-size: 12px;
            }

            .section-2 .section-2-box .travel span {
                font-size: 13px;
            }

            .footer {
                margin-top: 70px;
            }

            .palne-img-area {
                display: none;
            }

            .banner-main {
                display: none;
            }
        }
    </style>

</head>
<!-- body -->

<body class="main-layout">

    <header>
        <!-- header inner -->
        <div class="header">
            <div class="header_white_section">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="header_information">
                                <ul>
                                    <li><img src="images/1.png" alt="#" /> 145.street road new York</li>
                                    <li><img src="images/2.png" alt="#" /> +71 5678954378</li>
                                    <li><img src="images/3.png" alt="#" /> Demo@hmail.com</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-xl-3 col-lg-3 col-md-3 col-sm-3 col logo_section">
                        <div class="full">
                            <div class="center-desk">
                                <div class="logo"> <a href="index.html"><img rel="preload"
                                            src="https://pub-4bc7788b719d46428d0bed912c1512f0.r2.dev/webps/logo.webp"
                                            alt="#" /></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-9 col-lg-9 col-md-9 col-sm-9 bar">
                        <div class="menu-area">
                            <div class="mean-bar">
                                <a href="#nav" class="meanmenu-reveal">
                                    <span></span>
                                    <span></span>
                                    <span></span>
                                </a>
                                <nav class="mean-nav">
                                    <ul class="menu-area-main" style="display: none;">
                                        <li class="active">
                                            <a href="#">Home</a>
                                        </li>
                                        <li>
                                            <a href="#about">About</a>
                                        </li>
                                        <li>
                                            <a href="#blog">Blog</a>
                                        </li>
                                        <li class="mean-last">
                                            <a href="#contact">Contact Us</a>
                                        </li>
                                    </ul>
                                </nav>
                            </div>

                            <div class="limit-box">
                                <nav class="main-menu">
                                    <ul class="menu-area-main">
                                        <li class="active"> <a href="#">Home</a> </li>
                                        <li> <a href="#about">About</a> </li>
                                        <li><a href="#blog">Blog</a></li>
                                        <li><a href="#contact">Contact Us</a></li>
                                    </ul>
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>

    <section class="banner">
        <div class="banner-main">
            <img loading="lazy" class="banner"
                src="https://pub-4bc7788b719d46428d0bed912c1512f0.r2.dev/webps/banner.webp" alt="#"
                fetchpriority="high" />
            <div class="banner-content">
                <h1 class="banner-item">Lam Vien Project</h1>
            </div>
        </div>
    </section>

    <div class="section-1">
        <div class="container">
            <div class="row">
                <div class="col-md-12 ">
                    <div class="titlepage">
                        <h2>About our travel agency</h2>
                        <span> fact that a reader will be distracted by the readable content of a page when looking at
                            its
                            layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of
                            letters,</span>
                    </div>
                </div>
            </div>
        </div>
        <div class="bg">
            <div class="container">
                <div class="row">
                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
                        <div class="section-1-box">
                            <p> <span>There are many variations of passages of Lorem Ipsum available, but the majority
                                    have
                                    suffered alteration in some form, by injected humour, or randomised words which
                                    don't look
                                    even slightly believable. If you are going to use a passage of Lorem Ipsum, you need
                                    to be
                                    sure thereThere are many variations of passages of Lorem Ipsum available, but the
                                    majority
                                    have suffered alteration in some form, by injected humour, or randomised words which
                                    don't
                                    look even slightly believable. If you are going to use a passage of Lorem Ipsum, you
                                    need to
                                    be sure there</span></p>
                            <div class="palne-img-area">
                                <img loading="lazy"
                                    src="https://pub-4bc7788b719d46428d0bed912c1512f0.r2.dev/webps/plane-img.webp"
                                    class="animated hidden" alt="images" />
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <a href="/san-pham">Find More Products</a>
        </div>
    </div>
    <div class="section-2">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="titlepage">
                        <h2>The Best Tours</h2>
                        <span>It is a long established fact that a reader will be distracted by the readable content of
                            a page
                            when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less
                            normal
                            distribution of letters,</span>
                    </div>
                </div>
            </div>
            <div class="row carousel-container">
                <div class="carousel-wrapper">
                    <a href="/" class="col-sm carousel-item item animate__animated hidden">
                        <img loading="lazy" class="img-responsive"
                            src="https://pub-4bc7788b719d46428d0bed912c1512f0.r2.dev/webps/1.webp" alt="#"
                            fetchpriority="high" />
                        <h3>Holiday Tour</h3>
                        <p>There are many variations of passages of Lorem Ipsum available, but the majority have
                            suffered alteration in soe suffk even slightly believable. If y be sure there</p>
                    </a>
                    <a href="/" class="col-sm carousel-item item animate__animated hidden">
                        <img loading="lazy" class="img-responsive"
                            src="https://pub-4bc7788b719d46428d0bed912c1512f0.r2.dev/webps/2.webp" alt="#"
                            fetchpriority="high" />
                        <h3>New York</h3>
                        <p>There are many variations of passages of Lorem Ipsum available, but the majority have
                            suffered alteration in soe suffk even slightly believable. If y be sure there</p>
                    </a>
                    <a href="/" class="col-sm carousel-item item animate__animated hidden">
                        <img loading="lazy" class="img-responsive"
                            src="https://pub-4bc7788b719d46428d0bed912c1512f0.r2.dev/webps/3.webp" alt="#"
                            fetchpriority="high" />
                        <h3>London</h3>
                        <p>There are many variations of passages of Lorem Ipsum available, but the majority have
                            suffered alteration in soe suffk even slightly believable. If y be sure there</p>
                    </a>
                    <a href="/" class="col-sm carousel-item item animate__animated hidden">
                        <img loading="lazy" class="img-responsive"
                            src="https://pub-4bc7788b719d46428d0bed912c1512f0.r2.dev/webps/2.webp" alt="#"
                            fetchpriority="high" />
                        <h3>New York</h3>
                        <p>There are many variations of passages of Lorem Ipsum available, but the majority have
                            suffered alteration in soe suffk even slightly believable. If y be sure there</p>
                    </a>
                </div>
            </div>
            <div class="dots-container"></div>
        </div>
    </div>
    <div class="section-3">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="titlepage">
                        <h2>Our Blog</h2>
                        <span>Lorem Ipsum is that it has a more-or-less normal distribution of letters,</span>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12">
                    <div class="section-3-box animate__animated hidden">
                        <figure><img loading="lazy"
                                src="https://pub-4bc7788b719d46428d0bed912c1512f0.r2.dev/webps/blog-image0.webp"
                                alt="#" />
                            <span>4 Feb 2019</span>
                        </figure>
                        <div class="travel">
                            <span>Post By : Travel Agency</span>
                            <p><strong class="hightlight-section-3"> 06 </strong> Comment</p>
                            <p><strong class="hightlight-section-3">05 </strong>Like</p>
                        </div>
                        <h3>London Amazing Tour</h3>
                        <p>It is a long established fact that a reader will be distracted by the readable content of a
                            page
                            when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less
                            normal
                            distribution of letters, as opposed to using 'Content here, content here', making it look
                            like
                            readable English. Many desktop publishing packages and web</p>
                    </div>
                </div>
                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12">
                    <div class="section-3-box animate__animated hidden">
                        <figure><img loading="lazy"
                                src="https://pub-4bc7788b719d46428d0bed912c1512f0.r2.dev/webps/blog-image.webp"
                                alt="#" />
                            <span>10 Feb 2019</span>
                        </figure>
                        <div class="travel">
                            <span>Post By : Travel Agency</span>
                            <p><strong class="hightlight-section-3"> 06 </strong> Comment</p>
                            <p><strong class="hightlight-section-3">05 </strong>Like</p>
                        </div>
                        <h3>London Amazing Tour</h3>
                        <p>It is a long established fact that a reader will be distracted by the readable content of a
                            page
                            when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less
                            normal
                            distribution of letters, as opposed to using 'Content here, content here', making it look
                            like
                            readable English. Many desktop publishing packages and web</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <footer>
        <div id="contact" class="footer">
            <div class="container">
                <div class="row pdn-top-30">
                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
                        <ul class="location_icon">
                            <li> <a href="#"><img loading="lazy"
                                        src="https://pub-4bc7788b719d46428d0bed912c1512f0.r2.dev/webps/facebook.webp" /></a>
                            </li>
                            <li> <a href="#"><img loading="lazy"
                                        src="https://pub-4bc7788b719d46428d0bed912c1512f0.r2.dev/webps/Twitter.webp" /></a>
                            </li>
                            <li> <a href="#"><img loading="lazy"
                                        src="https://pub-4bc7788b719d46428d0bed912c1512f0.r2.dev/webps/linkedin.webp" /></a>
                            </li>
                            <li> <a href="#"><img loading="lazy"
                                        src="https://pub-4bc7788b719d46428d0bed912c1512f0.r2.dev/webps/instagram.webp" /></a>
                            </li>
                        </ul>
                    </div>
                    <div class="col-xl-3 col-lg-3 col-md-6 col-sm-12">
                        <div class="Follow">
                            <h3>CONTACT US</h3>
                            <span>123 Second Street Fifth <br />Avenue,<br />
                                Manhattan, New York<br />
                                +987 654 3210</span>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-3 col-md-6 col-sm-12">
                        <div class="Follow">
                            <h3>ADDITIONAL LINKS</h3>
                            <ul class="link">
                                <li> <a href="#">About us</a></li>
                                <li> <a href="#">Terms and conditions</a></li>
                                <li> <a href="#"> Privacy policy</a></li>
                                <li> <a href="#">News</a></li>
                                <li> <a href="#"> Contact us</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12">
                        <div class="Follow">
                            <h3> Contact</h3>
                            <div class="row">
                                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6">
                                    <input class="Newsletter" placeholder="Name" type="text" />
                                </div>
                                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6">
                                    <input class="Newsletter" placeholder="Email" type="text" />
                                </div>
                                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
                                    <textarea class="textarea" placeholder="comment" type="text">Comment</textarea>
                                </div>
                            </div>
                            <button class="Subscribe">Submit</button>
                        </div>
                    </div>
                </div>
                <div class="copyright">
                    <div class="container">
                        <p>Copyright 2019 All Right Reserved By <a href="https://html.design/">Free html Templates</a>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </footer>

    <script>
        document.addEventListener("DOMContentLoaded", function() {

            function animateOnScroll() {

                // Get the current scroll position
                let windowTop = window.scrollY;
                let windowBottom = window.scrollY + window.innerHeight;

                // Handle .palne-img-area elements
                document.querySelectorAll('.palne-img-area .hidden, .palne-img-area .visible').forEach(function(
                    element) {
                    let elementTop = element.getBoundingClientRect().top + window.scrollY;
                    let elementBottom = elementTop + element.offsetHeight;

                    if (elementBottom - 50 < windowBottom) {
                        let delay = 0;
                        element.style.animationDelay = delay + 'ms';
                        element.classList.remove('hidden');
                        element.classList.add('visible', 'animated', 'fadeInUp');
                    }
                });

                // Handle #demos elements
                document.querySelectorAll('.section-2 .hidden, .section-2 .visible').forEach(function(element,
                    index) {
                    let elementTop = element.getBoundingClientRect().top + window.scrollY;
                    let elementBottom = elementTop + element.offsetHeight;
                    let middle = (elementBottom - elementTop) / 2;

                    if (elementBottom - middle < windowBottom) {
                        let delay = index * 50;
                        element.style.animationDelay = delay + 'ms';
                        element.classList.remove('hidden');
                        element.classList.add('visible', 'animated', 'fadeInRight');
                    }
                });

                // Handle .section-3 elements
                document.querySelectorAll('.section-3 .hidden, .section-3 .visible').forEach(function(element,
                    index) {
                    let elementTop = element.getBoundingClientRect().top + window.scrollY;
                    let elementBottom = elementTop + element.offsetHeight;

                    if (elementBottom < windowBottom + 10) {
                        let delay = index * 200;
                        element.style.animationDelay = delay + 'ms';
                        element.classList.remove('hidden');
                        element.classList.add('visible', 'animated', 'fadeInLeft');
                    }
                });

                // Reset elements to hidden when at the top of the page
                if (windowTop === 0) {
                    document.querySelectorAll('.palne-img-area .visible').forEach(function(element) {
                        element.classList.remove('visible', 'animated', 'fadeInUp');
                        element.classList.add('hidden');
                    });

                    document.querySelectorAll('.section-2 .hidden, .section-2 .visible').forEach(function(
                        element) {
                        element.classList.remove('visible', 'animated', 'fadeInRight');
                        element.classList.add('hidden');
                    });

                    document.querySelectorAll('.section-3 .hidden, .section-3 .visible').forEach(function(
                        element) {
                        element.classList.remove('visible', 'animated', 'fadeInLeft');
                        element.classList.add('hidden');
                    });
                }

            }

            const wrapper = document.querySelector(".carousel-wrapper");
            const items = document.querySelectorAll(".item");
            const dotsContainer = document.querySelector(".dots-container");
            const totalItems = items.length;

            let itemsPerPage = getItemsPerPage();
            let currentIndex = 0;
            let dots = [];

            // ✅ Determines the number of items per page based on screen width
            function getItemsPerPage() {
                return window.innerWidth <= 768 ? 1 : 3; // 1 item on mobile, 3 on desktop
            }

            // ✅ Initializes dots and updates event listeners
            function initCarousel() {
                dotsContainer.innerHTML = ""; // Clear previous dots
                let totalDots = Math.ceil(totalItems / itemsPerPage);

                dots = Array.from({
                    length: totalDots
                }, (_, i) => {
                    const dot = document.createElement("span");
                    dot.classList.add("dot");
                    if (i === 0) dot.classList.add("active");
                    dot.dataset.index = i;
                    dot.addEventListener("click", () => updateCarousel(i));
                    dotsContainer.appendChild(dot);
                    return dot;
                });

                updateCarousel(0); // Reset to first slide
            }

            // ✅ Moves carousel to the selected index
            function updateCarousel(index) {
                currentIndex = index;
                wrapper.style.transform = `translateX(${-currentIndex * (100 / itemsPerPage)}%)`;

                dots.forEach(dot => dot.classList.remove("active"));
                dots[currentIndex].classList.add("active");
            }

            // ✅ Initialize carousel on page load
            window.addEventListener("load", () => {

                itemsPerPage = getItemsPerPage();
                initCarousel();
            });

            window.addEventListener("resize", () => {

                loadBannerImages();

                let newItemsPerPage = getItemsPerPage();
                if (newItemsPerPage !== itemsPerPage) {
                    itemsPerPage = newItemsPerPage;
                    initCarousel();
                }
            });

            window.addEventListener('scroll', animateOnScroll);

            document.querySelector(".meanmenu-reveal").addEventListener("click", function() {

                let menuArea = document.querySelector(".menu-area-main");
                let isHidden = window.getComputedStyle(menuArea).display === "none";

                if (isHidden) {
                    this.querySelectorAll("*").forEach(child => {
                        child.style.display = "none";
                    });

                    this.innerHTML = "X";

                    this.style.textAlign = "center";
                    this.style.textIndent = "0px";
                    this.style.fontSize = "25px";

                    document.querySelector(".menu-area-main").style.display = "";
                }

                if (!isHidden) {
                    this.innerHTML = `
                        <span></span>
                        <span></span>
                        <span></span>
                    `;

                    this.style.removeProperty("text-align");
                    this.style.removeProperty("text-indent");
                    this.style.removeProperty("font-size");

                    menuArea.style.display = "none";
                }
            });
        });
    </script>

</body>

</html>
