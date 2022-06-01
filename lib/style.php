<style>
    html {
        scroll-behavior: smooth
    }

    body {
        -webkit-font-smoothing: antialiased;
        -moz-osx-font-smoothing: grayscale;
        background-color: #fff;
        font-family: Roboto, sans-serif;
        font-size: 14px;
        color: #848e9f;
        overflow-x: hidden
    }

    ::-moz-selection {
        background-color: #21cdc0;
        color: #fff
    }

    ::selection {
        background-color: #21cdc0;
        color: #fff
    }

    a {
        color: #21cdc0;
        -webkit-transition: color .3s ease;
        transition: color .3s ease
    }

    a:hover {
        color: #213360;
        text-decoration: none
    }

    section {
        position: relative;
        padding-top: 110px;
        padding-bottom: 110px
    }

    img {
        max-width: 100%
    }

    * {
        outline: 0
    }

    button {
        padding: 0;
        border: none;
        background-color: transparent
    }

    select {
        background-color: transparent
    }

    .form-control,
    .form-control:focus,
    button,
    button:focus {
        outline: 0;
        -webkit-box-shadow: none;
        -ms-box-shadow: none;
        -o-box-shadow: none;
        box-shadow: none
    }

    textarea {
        resize: none
    }

    @media (min-width:1200px) {
        .container {
            max-width: 1200px
        }
    }

    @media (min-width:768px) and (max-width:1200px) {
        .container {
            max-width: 100%
        }
    }

    @media (max-width:991px) {

        body,
        html {
            overflow-x: hidden
        }
    }

    .sticky-top {
        z-index: 500
    }

    .row-no-gutter {
        margin-left: 0;
        margin-right: 0
    }

    .row-no-gutter>[class*=col] {
        padding-right: 0;
        padding-left: 0
    }

    .inner-padding {
        padding: 65px
    }

    .box-shadow-none {
        -webkit-box-shadow: none !important;
        box-shadow: none !important
    }

    .background-banner {
        min-height: 500px
    }

    .bg-size-auto {
        background-size: auto !important
    }

    .bg-top-right {
        background-position: top right !important
    }

    .bg-no-repeat {
        background-repeat: no-repeat !important
    }

    .bg-bottom-center {
        background-position: bottom center !important
    }

    .width-auto {
        width: auto !important
    }

    .fz-13 {
        font-size: 13px !important
    }

    .fz-14 {
        opacity: 0.8;
        font-size: 14px !important
    }

    .fz-16 {
        font-size: 16px !important
    }

    .fz-25 {
        font-size: 25px !important
    }

    .font-secondary {
        font-family: Roboto, sans-serif
    }
    .dropdown .dropdown-toggle a:hover{
         color:#21cdc0 !important;
    }

    .lh-1 {
        line-height: 1 !important
    }

    .list-inline>li {
        display: inline-block
    }

    .align-v {
        display: -webkit-box !important;
        display: -ms-flexbox !important;
        display: flex !important;
        -webkit-box-align: center !important;
        -ms-flex-align: center !important;
        align-items: center !important
    }

    .align-v-h {
        display: -webkit-box !important;
        display: -ms-flexbox !important;
        display: flex !important;
        -webkit-box-pack: center !important;
        -ms-flex-pack: center !important;
        justify-content: center !important;
        -webkit-box-align: center !important;
        -ms-flex-align: center !important;
        align-items: center !important
    }

    .border-top {
        border-top: 1px solid #e7ebef !important
    }

    .border-bottom {
        border-bottom: 1px solid #e7ebef !important
    }

    .divider {
        display: inline-block;
        position: relative;
        width: 50px;
        height: 2px;
        background-color: #e7ebef
    }

    .divider-sm {
        width: 20px;
        height: 2px
    }

    .divider-xl {
        width: 130px
    }

    .divider-primary {
        background-color: #21cdc0
    }

    .divider-secondary {
        background-color: #213360
    }

    .divider-white {
        background-color: #fff
    }

    .minwidth-120 {
        min-width: 120px !important
    }

    .minwidth-170 {
        min-width: 170px !important
    }

    .z-index-2 {
        z-index: 2 !important
    }

    .mt--20 {
        margin-top: -20px
    }

    .mt--50 {
        margin-top: -50px
    }

    .mt--80 {
        margin-top: -80px
    }

    .mt--90 {
        margin-top: -90px
    }

    .mt--100 {
        margin-top: -80px
    }

    .mt--120 {
        margin-top: -120px
    }

    .mt--130 {
        margin-top: -130px
    }

    .mt--140 {
        margin-top: -140px
    }

    .mt--170 {
        margin-top: -170px
    }

    .mt--200 {
        margin-top: -200px
    }

    .mt--210 {
        margin-top: -210px
    }

    .mt-0 {
        margin-top: 0 !important
    }

    .mt-5 {
        margin-top: 5px !important
    }

    .mt-10 {
        margin-top: 10px !important
    }

    .mt-20 {
        margin-top: 20px !important
    }

    .mt-30 {
        margin-top: 30px !important
    }

    .mt-40 {
        margin-top: 40px !important
    }

    .mt-50 {
        margin-top: 50px !important
    }

    .mt-60 {
        margin-top: 60px !important
    }

    .mt-70 {
        margin-top: 70px !important
    }

    .mt-80 {
        margin-top: 80px !important
    }

    .mt-90 {
        margin-top: 90px !important
    }

    .mt-100 {
        margin-top: 100px !important
    }

    .mt-120 {
        margin-top: 120px !important
    }

    .mt-150 {
        margin-top: 150px !important
    }

    .mb-0 {
        margin-bottom: 0 !important
    }

    .mb-5 {
        margin-bottom: 5px !important
    }

    .mb-10 {
        margin-bottom: 10px !important
    }

    .mb-20 {
        margin-bottom: 20px !important
    }

    .mb-25 {
        margin-bottom: 25px !important
    }

    .mb-30 {
        margin-bottom: 30px !important
    }

    .mb-40 {
        margin-bottom: 40px !important
    }

    .mb-45 {
        margin-bottom: 45px !important
    }

    .mb-50 {
        margin-bottom: 50px !important
    }

    .mb-60 {
        margin-bottom: 60px !important
    }

    .mb-70 {
        margin-bottom: 70px !important
    }

    .mb-80 {
        margin-bottom: 80px !important
    }

    .mb-90 {
        margin-bottom: 90px !important
    }

    .mb-100 {
        margin-bottom: 100px !important
    }

    .mb-120 {
        margin-bottom: 120px !important
    }

    .mb-130 {
        margin-bottom: 130px !important
    }

    .mt--100 {
        margin-top: -100px
    }

    .mr-0 {
        margin-right: 0 !important
    }

    .mr-20 {
        margin-right: 20px !important
    }

    .mr-30 {
        margin-right: 30px !important
    }

    .mr-40 {
        margin-right: 40px !important
    }

    .mr-50 {
        margin-right: 50px !important
    }

    .ml-0 {
        margin-left: 0 !important
    }

    .ml-20 {
        margin-left: 20px !important
    }

    .ml-30 {
        margin-left: 30px !important
    }

    .ml-40 {
        margin-left: 40px !important
    }

    .ml-50 {
        margin-left: 50px !important
    }

    .pb-10 {
        padding-top: 10px !important
    }

    .pt-20 {
        padding-top: 20px !important
    }

    .pt-30 {
        padding-top: 30px !important
    }

    .pt-40 {
        padding-top: 40px !important
    }

    .pt-50 {
        padding-top: 50px !important
    }

    .pt-60 {
        padding-top: 60px !important
    }

    .pt-70 {
        padding-top: 70px !important
    }

    .pt-80 {
        padding-top: 80px !important
    }

    .pt-90 {
        padding-top: 90px !important
    }

    .pt-100 {
        padding-top: 100px !important
    }

    .pt-110 {
        padding-top: 110px !important
    }

    .pt-120 {
        padding-top: 120px !important
    }

    .pt-130 {
        padding-top: 130px !important
    }

    .pt-140 {
        padding-top: 140px !important
    }

    .pt-150 {
        padding-top: 150px !important
    }

    .pt-170 {
        padding-top: 170px !important
    }

    .pb-10 {
        padding-bottom: 10px !important
    }

    .pb-20 {
        padding-bottom: 20px !important
    }

    .pb-30 {
        padding-bottom: 30px !important
    }

    .pb-40 {
        padding-bottom: 40px !important
    }

    .pb-50 {
        padding-bottom: 50px !important
    }

    .pb-60 {
        padding-bottom: 60px !important
    }

    .pb-70 {
        padding-bottom: 70px !important
    }

    .pb-80 {
        padding-bottom: 80px !important
    }

    .pb-90 {
        padding-bottom: 90px !important
    }

    .pb-100 {
        padding-bottom: 100px !important
    }

    .pb-110 {
        padding-bottom: 110px !important
    }

    .pb-120 {
        padding-bottom: 120px !important
    }

    .pb-130 {
        padding-bottom: 130px !important
    }

    .pb-140 {
        padding-bottom: 140px !important
    }

    .pb-150 {
        padding-bottom: 150px !important
    }

    .pb-170 {
        padding-bottom: 170px !important
    }

    .pb-120 {
        padding-bottom: 120px !important
    }

    .pb-220 {
        padding-bottom: 220px !important
    }

    .pr-0 {
        padding-right: 0 !important
    }

    .pr-15 {
        padding-right: 15px !important
    }

    .pr-20 {
        padding-right: 20px !important
    }

    .pr-30 {
        padding-right: 30px !important
    }

    .pr-50 {
        padding-right: 50px !important
    }

    .pr-60 {
        padding-right: 60px !important
    }

    .pr-70 {
        padding-right: 70px !important
    }

    .pr-100 {
        padding-right: 100px !important
    }

    .pl-0 {
        padding-left: 0 !important
    }

    .pl-15 {
        padding-left: 15px !important
    }

    .pl-20 {
        padding-left: 20px !important
    }

    .pl-30 {
        padding-left: 30px !important
    }

    .pl-40 {
        padding-left: 40px !important
    }

    .pl-50 {
        padding-left: 50px !important
    }

    .pl-60 {
        padding-left: 60px !important
    }

    .pl-70 {
        padding-left: 70px !important
    }

    .pl-100 {
        padding-left: 100px !important
    }

    .max-width-1300 {
        max-width: 1300px !important
    }

    @media (min-width:1500px) {
        .inner-padding {
            padding: 110px
        }
    }

    @media (max-width:1200px) {
        .inner-padding {
            padding: 30px !important
        }
    }

    @media (max-width:992px) {
        .mt-30 {
            margin-top: 20px !important
        }

        .mt-40 {
            margin-top: 20px !important
        }

        .mt-50 {
            margin-top: 25px !important
        }

        .mt-60 {
            margin-top: 30px !important
        }

        .mt-70 {
            margin-top: 35px !important
        }

        .mt-80 {
            margin-top: 40px !important
        }

        .mt-90 {
            margin-top: 45px !important
        }

        .mt-100 {
            margin-top: 50px !important
        }

        .mt-120 {
            margin-top: 60px !important
        }

        .mt-150 {
            margin-top: 75px !important
        }

        .mb-30 {
            margin-bottom: 15px !important
        }

        .mb-40 {
            margin-bottom: 20px !important
        }

        .mb-50 {
            margin-bottom: 25px !important
        }

        .mb-60 {
            margin-bottom: 30px !important
        }

        .mb-70 {
            margin-bottom: 35px !important
        }

        .mb-80 {
            margin-bottom: 40px !important
        }

        .mb-90 {
            margin-bottom: 45px !important
        }

        .mb-100 {
            margin-bottom: 50px !important
        }

        .mb-120 {
            margin-bottom: 60px !important
        }

        .mb-130 {
            margin-bottom: 65px !important
        }

        .mr-30 {
            margin-right: 15px !important
        }

        .mr-40 {
            margin-right: 20px !important
        }

        .mr-50 {
            margin-right: 25px !important
        }

        .ml-30 {
            margin-left: 15px !important
        }

        .ml-40 {
            margin-left: 20px !important
        }

        .ml-50 {
            margin-left: 25px !important
        }

        .pt-30 {
            padding-top: 15px !important
        }

        .pt-40 {
            padding-top: 20px !important
        }

        .pt-50 {
            padding-top: 25px !important
        }

        .pt-60 {
            padding-top: 30px !important
        }

        .pt-70 {
            padding-top: 35px !important
        }

        .pt-80 {
            padding-top: 40px !important
        }

        .pt-90 {
            padding-top: 45px !important
        }

        .pt-100 {
            padding-top: 50px !important
        }

        .pt-110 {
            padding-top: 55px !important
        }

        .pt-120 {
            padding-top: 60px !important
        }

        .pt-130 {
            padding-top: 70px !important
        }

        .pt-140 {
            padding-top: 70px !important
        }

        .pt-150 {
            padding-top: 75px !important
        }

        .pt-160 {
            padding-top: 80px !important
        }

        .pt-170 {
            padding-top: 85px !important
        }

        .pb-30 {
            padding-bottom: 15px !important
        }

        .pb-40 {
            padding-bottom: 20px !important
        }

        .pb-50 {
            padding-bottom: 25px !important
        }

        .pb-60 {
            padding-bottom: 30px !important
        }

        .pb-70 {
            padding-bottom: 35px !important
        }

        .pb-80 {
            padding-bottom: 40px !important
        }

        .pb-90 {
            padding-bottom: 45px !important
        }

        .pb-100 {
            padding-bottom: 50px !important
        }

        .pb-110 {
            padding-bottom: 55px !important
        }

        .pb-120 {
            padding-bottom: 60px !important
        }

        .pb-130 {
            padding-bottom: 65px !important
        }

        .pb-140 {
            padding-bottom: 70px !important
        }

        .pb-150 {
            padding-bottom: 75px !important
        }

        .pb-160 {
            padding-bottom: 80px !important
        }

        .pb-170 {
            padding-bottom: 85px !important
        }
    }

    @media (min-width:768px) and (max-width:991px) {
        section {
            padding-top: 60px;
            padding-bottom: 60px
        }
    }

    @media (min-width:320px) and (max-width:767px) {
        section {
            padding-top: 50px;
            padding-bottom: 50px
        }

        .inner-padding {
            padding: 20px !important
        }

        .text-center-xs-sm {
            text-align: center !important
        }

        .mt-0-xs-sm {
            margin-top: 0 !important
        }
    }

    .color-white {
        color: #fff !important
    }

    .color-white-hover:hover {
        color: #fff !important
    }

    .color-gray {
        color: #f9f9f9 !important
    }

    .color-dark {
        color: #222 !important
    }

    .color-primary {
        color: #21cdc0 !important
    }

    .color-secondary {
        color: #213360 !important
    }

    .color-heading {
        color: #0e204d !important
    }

    .color-body {
        color: #848e9f !important
    }

    .bg-white {
        background-color: #fff !important
    }

    .bg-gray {
        background-color: #f9f9f9 !important
    }

    .bg-dark {
        background-color: #222 !important
    }

    .bg-heading {
        background-color: #0e204d !important
    }

    .bg-primary {
        background-color: #21cdc0 !important
    }

    .bg-secondary {
        background-color: #213360 !important
    }

    .bg-light-blue {
        background-color: #3851a2 !important
    }

    .bg-img {
        position: relative;
        z-index: 1
    }

    .background-size-auto {
        background-size: auto !important
    }

    .bg-parallax {
        background-attachment: fixed
    }

    .bg-overlay:before {
        content: '';
        position: absolute;
        top: 0;
        right: 0;
        bottom: 0;
        left: 0;
        width: 100%;
        height: 100%;
        z-index: -1;
        background-color: rgba(27, 26, 26, .25)
    }

    .bg-overlay-2:before {
        background-color: rgba(27, 26, 26, .15)
    }

    .bg-overlay-3:before {
        background-color: rgba(27, 26, 26, .05)
    }

    .bg-overlay-gradient:before {
        background-color: transparent;
        opacity: .65;
        background-image: -webkit-gradient(linear, left top, left bottom, from(#010711), color-stop(34%, rgba(27, 26, 26, .65)));
        background-image: linear-gradient(180deg, #010711 0, rgba(27, 26, 26, .65) 34%)
    }

    .bg-overlay-secondary:before {
        background-color: rgba(33, 51, 96, .93)
    }

    .bg-overlay-primary:before {
        background-color: rgba(33, 205, 192, .85)
    }

    .bg-overlay-primary-gradient:before {
        opacity: .95;
        background-color: transparent;
        background-image: -webkit-gradient(linear, left top, left bottom, color-stop(19%, #21cDC0F2), color-stop(71%, #21cdc0));
        background-image: linear-gradient(180deg, #21cDC0F2 19%, #21cdc0 71%)
    }

    .bg-overlay-secondary-gradient:before {
        opacity: .95;
        background-color: transparent;
        background-image: -webkit-gradient(linear, left top, left bottom, color-stop(19%, #061733), color-stop(71%, #061733));
        background-image: linear-gradient(180deg, #061733 19%, #061733 71%)
    }

    .bg-overlay-blue-gradient:before {
        background-color: transparent;
        background-image: -webkit-gradient(linear, left top, left bottom, color-stop(21%, #3851A2E6), color-stop(86%, #263b72));
        background-image: linear-gradient(180deg, #3851A2E6 21%, #263b72 86%)
    }

    h1,
    h2,
    h3,
    h4,
    h5,
    h6 {
        color: #0e204d;
        font-family: Quicksand, sans-serif;
        text-transform: capitalize;
        font-weight: 700;
        line-height: 1.3;
        margin-bottom: 20px
    }

    p {
        line-height: 1.75;
        margin-bottom: 15px
    }

    h1 {
        font-size: 52px
    }

    h2 {
        font-size: 42px
    }

    h3 {
        font-size: 38px
    }

    h4 {
        font-size: 32px
    }

    h5 {
        font-size: 24px
    }

    h6 {
        font-size: 18px
    }

    .heading__subtitle {
        font-family: Roboto, sans-serif;
        font-size: 15px;
        color: #435ba1;
        margin-bottom: 12px
    }

    .heading__title {
        font-size: 37px;
        margin-bottom: 20px
    }

    .heading__title .underlined-text {
        border-bottom: 4px solid #21cdc0
    }

    .heading__desc {
        font-size: 16px;
        margin-bottom: 0
    }

    .heading-layout2 .heading__title {
        font-size: 40px
    }

    .heading-layout3 .heading__title {
        font-size: 50px
    }

    .heading-light .heading__subtitle {
        color: #f9f9f9
    }

    .heading-light .heading__subtitle:after {
        background-color: #fff
    }

    .heading-light .heading__desc,
    .heading-light .heading__title {
        color: #fff
    }

    .text-block__title {
        font-size: 25px;
        margin-bottom: 17px
    }

    .text-block__desc {
        font-size: 16px;
        line-height: 26px
    }

    .text__link {
        font-size: 14px;
        font-weight: 700
    }

    .text__link a:not(.btn) {
        padding-bottom: 2px;
        border-bottom: 2px solid #21cdc0
    }

    .text__link a:not(.btn).color-secondary {
        border-bottom-color: #213360
    }

    .text__link:hover a:not(.btn) {
        color: #213360;
        border-bottom-color: #213360
    }

    .text__link:hover a:not(.btn).color-secondary {
        color: #21cdc0;
        border-bottom-color: #21cdc0
    }

    @media (max-width:992px) {
        .heading__title {
            font-size: 30px
        }
    }

    @media (min-width:320px) and (max-width:767px) {
        .heading__title {
            font-size: 21px;
            margin-bottom: 10px
        }

        .heading__subtitle,
        .text__link {
            font-size: 13px
        }

        .heading__desc {
            font-size: 13px
        }

        .heading-layout2 .heading__title {
            font-size: 24px
        }

        .heading-layout3 .heading__title {
            font-size: 26px
        }

        .text-block__desc {
            font-size: 14px;
            line-height: 24px;
            margin-bottom: 10px
        }
    }

    .header-transparent+.page-title {
        margin-top: -135px
    }

    .pagetitle__subheading {
        color: #21cdc0;
        font-size: 16px;
        font-weight: 700;
        display: inline-block;
        margin-bottom: 15px
    }

    .pagetitle__heading {
        font-size: 40px;
        margin-bottom: 20px
    }

    .pagetitle__desc {
        color: #283b6a;
        font-size: 17px;
        font-weight: 700;
        margin-bottom: 32px
    }

    .page-title {
        padding-top: 110px;
        padding-bottom: 120px
    }

    .page-title .breadcrumb-item a,
    .page-title .breadcrumb-item+.breadcrumb-item::before,
    .page-title .breadcrumb-item.active {
        color: #435ba1
    }

    .page-title .btn {
        min-width: 190px
    }

    .page-title .btn.btn__outlined {
        line-height: 58px;
        color: #fff;
    background-color: #213360;
    }

    .page-title.bg-overlay:before {
        opacity: .55;
        background-color: transparent;
        background-image: -webkit-gradient(linear, left top, right top, from(#fff), color-stop(35%, rgba(0, 0, 0, 0)));
        background-image: linear-gradient(90deg, #fff 0, rgba(0, 0, 0, 0) 35%)
    }

    .page-title-layout2 .pagetitle__desc {
        font-size: 20px
    }

    .page-title-layout2 .pagetitle__icon {
        position: relative;
        width: 120px;
        height: 120px;
        font-size: 80px;
        border-radius: 50%;
        display: inline-block;
        color: #213360;
        opacity: 0.1;
        margin-bottom: 70px
    }

    .page-title-layout2 .pagetitle__icon:after {
        content: '';
        position: absolute;
        top: -20px;
        left: -20px;
        width: 160px;
        height: 160px;
    }

    .page-title-layout2 .scroll-down {
        display: -webkit-inline-box;
        display: -ms-inline-flexbox;
        display: inline-flex;
        -webkit-box-align: center;
        -ms-flex-align: center;
        align-items: center;
        -webkit-box-pack: center;
        -ms-flex-pack: center;
        justify-content: center;
        width: 60px;
        height: 80px;
        font-size: 25px;
        border-radius: 30px;
        color: #21cdc0;
        background-color: #fff;
        -webkit-box-shadow: 0 5px 83px 0 rgba(9, 29, 62, .15);
        box-shadow: 0 5px 83px 0 rgba(9, 29, 62, .15)
    }
    .imp-price{
        margin-top:12px;
        font-weight: bold;
    }
    .imp-price a:hover{
       color:white;
    }

    .page-title-layout2.bg-overlay:before {
        opacity: 1;
        background-color: transparent;
        background-image: -webkit-gradient(linear, left top, left bottom, color-stop(47%, #fffFFF26), color-stop(76%, #fff));
        background-image: linear-gradient(180deg, #fffFFF26 47%, #fff 76%)
    }

    .page-title-layout3 {
        padding-bottom: 250px
    }

    .page-title-layout5 {
        padding-top: 80px;
        padding-bottom: 80px
    }

    .page-title-layout6 .testimonials__rating .overall__rate {
        border-color: #fff
    }

    .page-title-layout6 .testimonials__rating .overall__rate,
    .page-title-layout6 .testimonials__rating .total__rate,
    .page-title-layout6 .testimonials__rating span {
        color: #fff
    }

    @media (min-width:1200px) {
        .page-title-layout4 {
            padding-top: 140px;
            padding-bottom: 140px
        }

        .page-title-layout4 .pagetitle__desc {
            padding: 0 40px
        }

        .page-title-layout6 {
            padding-top: 320px;
            padding-bottom: 40px
        }
    }

    @media (min-width:768px) and (max-width:991px) {
        .page-title {
            padding-top: 70px;
            padding-bottom: 70px
        }
    }

    @media (min-width:320px) and (max-width:767px) {
        .page-title {
            padding-top: 50px;
            padding-bottom: 50px
        }

        .page-title .pagetitle__subheading {
            font-size: 14px;
            margin-bottom: 10px
        }

        .page-title .pagetitle__desc {
            font-size: 14px;
            margin-bottom: 10px
        }

        .page-title .pagetitle__heading {
            font-size: 28px !important;
            line-height: 1.2;
            margin-bottom: 20px
        }

        .page-title .btn {
            height: 40px;
            min-width: 140px
        }

        .page-title-layout3 {
            padding-bottom: 170px
        }
    }

    .btn {
        text-transform: capitalize;
        position: relative;
        z-index: 1;
        font-size: 15px;
        font-weight: 700;
        min-width: 170px;
        height: 60px;
        display: -webkit-inline-box;
        display: -ms-inline-flexbox;
        display: inline-flex;
        -webkit-box-align: center;
        -ms-flex-align: center;
        align-items: center;
        -webkit-box-pack: center;
        -ms-flex-pack: center;
        justify-content: center;
        text-align: center;
        padding: 0 15px;
        border: 0;
        border-radius: 3px;
        overflow: hidden;
        -webkit-transition: all .3s linear;
        transition: all .3s linear
    }

    .btn.active,
    .btn:active,
    .btn:focus {
        -webkit-box-shadow: none;
        box-shadow: none;
        outline: 0
    }

    .btn i,
    .btn span {
        margin: 0 3px
    }

    .btn .icon-filled {
        width: 24px;
        height: 24px;
        line-height: 24px;
        border-radius: 50%;
        text-align: center;
        display: inline-block;
        -webkit-transition: all .3s linear;
        transition: all .3s linear
    }

    .btn:not(.btn__link):not(.btn__outlined):before {
        content: '';
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        z-index: -1;
        background-color: #213360;
        -webkit-transform: scaleX(0);
        transform: scaleX(0);
        -webkit-transform-origin: right center;
        transform-origin: right center;
        -webkit-transition: transform .24s cubic-bezier(.37, .31, .31, .9);
        -webkit-transition: -webkit-transform .24s cubic-bezier(.37, .31, .31, .9);
        transition: -webkit-transform .24s cubic-bezier(.37, .31, .31, .9);
        transition: transform .24s cubic-bezier(.37, .31, .31, .9);
        transition: transform .24s cubic-bezier(.37, .31, .31, .9), -webkit-transform .24s cubic-bezier(.37, .31, .31, .9)
    }

    .btn:not(.btn__link):not(.btn__outlined):hover:before {
        -webkit-transform: scaleX(1);
        transform: scaleX(1);
        -webkit-transform-origin: left center;
        transform-origin: left center
    }

    .btn__primary {
        color: #fff;
        background-color: #21cdc0
    }

    .btn__primary .icon-outlined {
        color: #213360;
        border: 1px solid #21cdc0;
        color: #21cdc0;
        background-color: #fff
    }

    .btn__primary .icon-filled {
        color: #fff;
        background-color: #21cdc0
    }

    .btn__primary:active,
    .btn__primary:focus {
        color: #fff;
        border-color: #21cdc0;
        background-color: #21cdc0
    }

    .btn__primary:hover {
        color: #fff
    }

    .btn__primary:hover .icon-outlined {
        color: #213360;
        background-color: #fff
    }

    .btn__primary:hover .icon-filled {
        color: #fff;
        background-color: #213360
    }

    .btn__primary.btn__outlined {
        background-color: transparent;
        border: 2px solid #21cdc0;
        color: #21cdc0
    }

    .btn__primary.btn__outlined .icon-arrow-left,
    .btn__primary.btn__outlined .icon-arrow-right {
        color: #fff;
        background-color: #21cdc0
    }

    .btn__primary.btn__outlined:hover {
        color: #fff;
        background-color: #21cdc0
    }

    .btn__primary.btn__outlined:hover .icon-arrow-left,
    .btn__primary.btn__outlined:hover .icon-arrow-right {
        color: #21cdc0;
        background-color: #fff
    }

    .btn__primary-style2:before {
        background-color: #fff !important
    }

    .btn__primary-style2:hover {
        color: #213360
    }

    .btn__primary-style2:hover .icon-arrow-left,
    .btn__primary-style2:hover .icon-arrow-right {
        color: #fff;
        background-color: #213360
    }

    .btn__secondary {
        color: #fff;
        background-color: #213360
    }
    .btn__secondary2 {
        color: #fff;
        background-color: #21cdc0
    }

    .btn__secondary:before {
        background-color: #21cdc0 !important
    }

    .btn__secondary .icon-filled {
        color: #fff;
        background-color: #213360
    }

    .btn__secondary:hover {
        color: #fff
    }
    .btn__secondary2:hover {
        color: #fff
    }

    .btn__secondary:hover .icon-filled {
        background-color: #21cdc0
    }

    .btn__secondary:active,
    .btn__secondary:focus {
        color: #fff;
        border-color: #222;
        background-color: #222
    }

    .btn__secondary.btn__outlined {
        color: #213360;
        background-color: transparent;
        border: 2px solid #213360
    }

    .btn__secondary.btn__outlined:hover {
        color: #fff;
        background-color: #213360
    }
    .btn__secondary2.btn__outlined:hover {
        color: #fff;
        background-color: #213360;
    }
    .btn__secondary-style2:before {
        background-color: #fff !important
    }

    .btn__secondary-style2:hover {
        color: #213360
    }

    .btn__white {
        background-color: #fff;
        color: #213360
    }

    .btn__white:active,
    .btn__white:focus {
        color: #213360;
        border-color: #fff;
        background-color: #fff
    }

    .btn__white:hover {
        color: #fff
    }

    .btn__white.btn__outlined {
        color: #fff;
        background-color: transparent;
        border: 2px solid #fff
    }

    .btn__white.btn__outlined:hover {
        color: #21cdc0;
        background-color: #fff
    }

    .btn__white-style2 {
        color: #21cdc0
    }

    .btn__white-style2:before {
        background-color: #21cdc0 !important
    }

    .btn__outlined {
        background-color: transparent
    }

    .btn__link {
        background-color: transparent;
        border-color: transparent;
        min-width: 0;
        line-height: 1;
        height: auto;
        padding: 0;
        border: 0 !important;
        border-radius: 0
    }

    .btn__link:active,
    .btn__link:focus {
        background-color: transparent
    }

    .btn__link.btn__icon {
        height: auto;
        line-height: 1;
        padding: 0
    }

    .btn__link.btn__primary {
        color: #21cdc0
    }

    .btn__link.btn__primary-style2:hover {
        color: #fff !important
    }

    .btn__link.btn__primary.btn__underlined {
        padding-bottom: 3px;
        border-bottom: 2px solid #21cdc0
    }

    .btn__link.btn__primary:hover {
        color: #222
    }

    .btn__link.btn__primary:hover.btn__underlined {
        border-color: #213360
    }

    .btn__link.btn__secondary {
        color: #213360
    }

    .btn__link.btn__secondary:hover {
        color: #21cdc0
    }

    .btn__link.btn__white {
        color: #fff
    }

    .btn__link.btn__white.btn__underlined {
        padding-bottom: 3px;
        border-bottom: 2px solid #fff
    }

    .btn__link.btn__white:hover {
        color: #213360
    }

    .btn__link.btn__white:hover.btn__underlined {
        border-color: #213360
    }

    .btn__block {
        width: 100%
    }

    .btn__icon {
        display: -ms-inline-flexbox;
        display: -webkit-inline-box;
        display: inline-flex;
        -webkit-box-pack: justify;
        -ms-flex-pack: justify;
        justify-content: space-between;
        -ms-flex-align: center;
        -webkit-box-align: center;
        align-items: center;
        padding: 0 20px
    }

    .btn__icon i,
    .btn__icon span {
        margin: 0 5px
    }

    .btn__social {
        height: 54px;
        line-height: 54px;
        width: 54px;
        min-width: 0 !important;
        font-weight: 400;
        color: #fff;
        border-radius: 3px
    }

    .btn__facebook {
        background-color: #4267b2
    }

    .btn__twitter {
        background-color: #1da0f0
    }

    .btn__google-plus {
        background-color: #ea4335
    }

    .btn__lg {
        min-width: 200px
    }

    .btn__xl {
        height: 70px;
        line-height: 70px;
        min-width: 220px
    }

    .btn__xhight {
        height: 70px;
        line-height: 68px
    }

    .btn__rounded {
        border-radius: 50px
    }

    @media (min-width:320px) and (max-width:767px) {
        .btn:not(.btn__link) {
            font-size: 13px;
            min-width: 120px;
            height: 40px
        }

        .btn__icon {
            padding: 0 10px
        }

        .btn__xl {
            height: 50px;
            min-width: 150px
        }
    }

    label {
        font-weight: 700;
        line-height: 1;
        margin-bottom: 10px
    }

    label.error {
        color: red;
        font-size: 14px;
        font-weight: 400;
        margin: 7px 0 0 0
    }

    .form-group {
        position: relative;
        margin-bottom: 30px
    }

    .form-control {
        font-size: 14px;
        height: 60px;
        padding: 0 20px;
        border-radius: 55px;
        background-color: #fff;
        border: 2px solid #e6e8eb
    }

    .form-control:focus {
        border-color: #21cdc0;
        background-color: #fff
    }

    .form-control::-webkit-input-placeholder {
        color: #26365e
    }

    .form-control:-moz-placeholder {
        color: #26365e
    }

    .form-control::-moz-placeholder {
        color: #26365e
    }

    .form-control:-ms-input-placeholder {
        color: #26365e
    }

    textarea.form-control {
        border-radius: 20px;
        min-height: 105px;
        padding-top: 10px
    }

    .form__title {
        font-size: 18px;
        line-height: 1;
        margin-bottom: 20px
    }

    .label-radio {
        display: block;
        position: relative;
        padding-left: 26px;
        margin-bottom: 0;
        cursor: pointer;
        font-size: 13px;
        font-weight: 400;
        color: #848e9f
    }

    .label-radio input {
        position: absolute;
        z-index: -1;
        opacity: 0
    }

    .radio-indicator {
        position: absolute;
        top: -1px;
        left: 0;
        height: 17px;
        width: 17px;
        background: 0 0;
        border: 2px solid #eaeaea;
        border-radius: 50%
    }

    .label-radio input:checked~.radio-indicator {
        background: 0 0
    }

    .label-radio input:checked:focus~.radio-indicator,
    .label-radio:hover input:not([disabled]):checked~.radio-indicator {
        background: 0 0
    }

    .radio-indicator:after {
        content: '';
        position: absolute;
        display: none;
        left: 3px;
        top: 3px;
        height: 7px;
        width: 7px;
        border-radius: 50%;
        background: #21cdc0
    }

    .label-radio input:checked~.radio-indicator:after {
        display: block
    }

    .custom-control-label {
        font-weight: 400
    }

    .custom-control-label:before {
        position: absolute;
        top: -2px;
        left: -1.5rem;
        width: 1rem;
        height: 1rem;
        pointer-events: none;
        content: "";
        background-color: #fff;
        border: 1px solid #e7ebef;
        border-radius: 0
    }

    .custom-control-label:after {
        position: absolute;
        top: 2px;
        left: -20px;
        width: 1rem;
        height: 1rem;
        content: "";
        background: no-repeat 50%/50% 50%;
        border-radius: 1px
    }

    .custom-checkbox .custom-control-input:checked~.custom-control-label::after {
        background-image: none;
        background-color: #21cdc0;
        width: 8px;
        height: 8px
    }

    .custom-checkbox .custom-control-label::before {
        border-radius: 0
    }

    .custom-control-input:not(:disabled):active~.custom-control-label::before {
        background-color: transparent;
        border-color: transparent
    }

    .custom-control-input:checked~.custom-control-label::before {
        border: 1px solid #e7ebef !important;
        background-color: transparent
    }

    .custom-control-input:focus~.custom-control-label::before {
        -webkit-box-shadow: none;
        box-shadow: none
    }

    input[type=checkbox],
    input[type=radio] {
        -webkit-box-shadow: none !important;
        box-shadow: none !important
    }

    .nice-select {
        width: 100%;
        height: 60px;
        line-height: 60px;
        border-radius: 60px;
        margin-bottom: 30px
    }

    .nice-select .list {
        width: 100%
    }

    .nice-select .current,
    .nice-select .option {
        color: #848e9f
    }

    .nice-select:before {
        content: '';
        position: absolute;
        -webkit-transform: translateY(-50%);
        transform: translateY(-50%);
        right: 12px;
        top: 50%;
        width: 20px;
        height: 20px;
        z-index: 1;
        border-radius: 50%;
        background-color: #213360
    }

    .nice-select:after {
        right: 20px;
        z-index: 2;
        border-color: #fff
    }

    .form-group-icon {
        position: absolute;
        top: 23px;
        left: 23px;
        z-index: 2;
        color: #d7d8da;
        pointer-events: none
    }

    .form-group-icon+.form-control,
    .form-group-icon+select+.form-control {
        padding-left: 45px
    }

    .form-group-icon+.form-control[type=date],
    .form-group-icon+.form-control[type=time] {
        padding: 0 15px
    }

    .form-group-date .form-group-icon {
        top: 22px;
        left: auto;
        right: 14px;
        width: 30px;
        height: 30px;
        text-align: center;
        border-radius: 50%;
        background-color: #fff
    }

    ::-webkit-calendar-picker-indicator,
    ::-webkit-inner-spin-button {
        opacity: 0
    }

    @media (min-width:320px) and (max-width:767px) {

        .form-group,
        .nice-select {
            margin-bottom: 20px
        }
    }

    .nav-tabs {
        border-bottom: none
    }

    .nav-tabs .nav__link {
        display: block;
        position: relative;
        padding-bottom: 10px;
        margin: 0 30px 0 0;
        text-transform: capitalize;
        font-weight: 700;
        line-height: 1;
        font-size: 16px;
        color: #213360
    }

    .nav-tabs .nav__link:last-of-type {
        margin-right: 0
    }

    .nav-tabs .nav__link:after {
        content: "";
        position: absolute;
        left: 0;
        bottom: 0;
        width: 100%;
        height: 2px;
        background-color: #21cdc0;
        -webkit-transform: scale3d(0, 1, 1);
        transform: scale3d(0, 1, 1);
        -webkit-transform-origin: 100% 50%;
        transform-origin: 100% 50%;
        -webkit-transition: transform 2s cubic-bezier(.2, 1, .3, 1);
        -webkit-transition: -webkit-transform 2s cubic-bezier(.2, 1, .3, 1);
        transition: -webkit-transform 2s cubic-bezier(.2, 1, .3, 1);
        transition: transform 2s cubic-bezier(.2, 1, .3, 1);
        transition: transform 2s cubic-bezier(.2, 1, .3, 1), -webkit-transform 2s cubic-bezier(.2, 1, .3, 1)
    }

    .nav-tabs .nav__link.active,
    .nav-tabs .nav__link:hover {
        color: #21cdc0
    }

    .nav-tabs .nav__link.active:after,
    .nav-tabs .nav__link:hover:after {
        -webkit-transform: scale3d(1, 1, 1);
        transform: scale3d(1, 1, 1);
        -webkit-transform-origin: 0 50%;
        transform-origin: 0 50%
    }

    .nav-tabs-white .nav__link {
        color: #fff
    }

    .nav-tabs-white .nav__link.active,
    .nav-tabs-white .nav__link:hover {
        color: #fff
    }

    .nav-tabs-white .nav__link:after {
        background-color: #fff
    }

    @media (min-width:320px) and (max-width:767px) {
        .nav-tabs .nav__link {
            font-size: 13px;
            margin: 0 15px 0 0
        }

        .nav-tabs .nav__link:after {
            bottom: 4px
        }
    }

    .social-icons {
        display: -ms-flexbox;
        display: -webkit-box;
        display: flex;
        -ms-flex-wrap: wrap;
        /* flex-wrap: wrap; */
        -ms-flex-align: center;
        -webkit-box-align: center;
        align-items: center
    }

    .social-icons li {
        margin-right: 10px
    }

    .social-icons li a {
        position: relative;
        z-index: 2;
        display: block;
        width: 23px;
        height: 23px;
        line-height: 23px;
        border-radius: 50%;
        font-size: 12px;
        text-align: center;
        color: #fff;
        background-color: #213360;
        -webkit-transition: all .4s linear;
        transition: all .4s linear
    }

    .social-icons li a:hover {
        background-color: #21cdc0
    }

    .social-icons li:last-of-type {
        margin-right: 0
    }

    .social-icons-light li a {
        color: #fff
    }

    .social-icons-light li a:hover {
        color: #21cdc0
    }

    .social-icons-primary li a {
        color: #21cdc0
    }

    .social-icons-primary li a:hover {
        color: #213360
    }

    .icon-arrow-right {
        font-size: 65%
    }

    .breadcrumb {
        padding: 0;
        background-color: transparent
    }

    .breadcrumb-item {
        position: relative;
        font-size: 14px
    }

    .breadcrumb-item+.breadcrumb-item::before {
        font-family: "Font Awesome 5 Free";
        font-weight: 900;
        content: "\f105"
    }

    @media (min-width:320px) and (max-width:767px) {

        .breadcrumb-item a,
        .breadcrumb-item+.breadcrumb-item {
            font-size: 12px
        }
    }

    .pagination li {
        margin-right: 10px
    }

    .pagination li:last-child {
        margin-right: 0
    }

    .pagination li a {
        font-size: 20px;
        font-weight: 700;
        display: block;
        width: 50px;
        height: 50px;
        line-height: 46px;
        text-align: center;
        border-radius: 50%;
        color: #213360;
        border: 2px solid #e6e8eb;
        background-color: #fff;
        -webkit-transition: all .3s linear;
        transition: all .3s linear
    }

    .pagination li a.current,
    .pagination li a:hover {
        color: #fff;
        border-color: #21cdc0;
        background-color: #21cdc0
    }

    @media (min-width:320px) and (max-width:767px) {
        .pagination li a {
            font-size: 16px;
            width: 35px;
            height: 35px;
            line-height: 31px
        }
    }

    .contact-list li {
        font-size: 14px;
        margin-bottom: 5px
    }

    .contact-list li:last-child {
        margin-bottom: 0
    }

    .contact-list li a {
        color: #848e9f
    }

    .list-items li {
        position: relative;
        padding-left: 27px;
        font-size: 15px;
        font-weight: 700;
        margin-bottom: 9px
    }

    .list-items li:before {
        content: "\f00c";
        font-family: "Font Awesome 5 Free";
        font-weight: 900;
        position: absolute;
        top: 0;
        left: 0;
        font-size: 9px;
        width: 22px;
        height: 22px;
        line-height: 22px;
        text-align: center;
        border-radius: 50%;
        color: #21cdc0
    }

    .list-items li:last-of-type {
        margin-bottom: 0
    }

    .list-items-layout2 li {
        margin-bottom: 14px;
        padding-left: 33px;
        color: #848e9f
    }

    .list-items-layout2 li:before {
        color: #fff;
        border-color: #21cdc0;
        background-color: #21cdc0
    }

    .list-items-layout4 li {
        margin-bottom: 14px;
        padding-left: 33px;
        color: #848e9f
    }

    .list-items-layout4 li:before {
        color: #fff;
        border-color: #435ba1;
        background-color: #435ba1
    }

    .list-items-layout3 li:before {
        color: #213360
    }

    .list-items-light li {
        color: #fff
    }

    .list-items-light li:before {
        color: #fff
    }

    .list-items-light.list-items-layout2 li:before {
        color: #fff;
        border-color: #21cdc0;
        background-color: #21cdc0
    }

    /* .list-horizontal {
        display: -webkit-box;
        display: -ms-flexbox;
        display: flex;
        -ms-flex-wrap: wrap;
        flex-wrap: wrap
    }

    .list-horizontal li {
        -webkit-box-flex: 0;
        -ms-flex: 0 0 50%;
        flex: 0 0 50%;
        max-width: 50%
    } */

    .details-list>li {
        display: -webkit-box;
        display: -ms-flexbox;
        display: flex;
        -ms-flex-wrap: wrap;
        flex-wrap: wrap;
        padding: 20px;
        border-radius: 13px
    }

    .details-list>li:nth-of-type(odd) {
        background-color: #def8f6
    }

    .details-list>li .details__title {
        font-size: 14px;
        -webkit-box-flex: 0;
        -ms-flex: 0 0 40%;
        flex: 0 0 40%;
        max-width: 40%;
        margin-bottom: 0
    }

    .details-list>li .details__content {
        -webkit-box-flex: 0;
        -ms-flex: 0 0 60%;
        flex: 0 0 60%;
        max-width: 60%
    }

    .details-list .list-items-layout2 li {
        font-weight: 400
    }

    .borderd-box {
        padding: 27px;
        border-radius: 4px;
        border: 1px solid #e7ebef
    }

    @media (max-width:992px) {
        .list-horizontal {
            -ms-flex-direction: column;
            -webkit-box-orient: vertical;
            -webkit-box-direction: normal;
            flex-direction: column
        }

        .list-horizontal li {
            -webkit-box-flex: 0 !important;
            -ms-flex: 0 0 100% !important;
            flex: 0 0 100% !important;
            max-width: 100% !important
        }

        .details-list>li {
            padding: 10px;
            -webkit-box-orient: vertical;
            -webkit-box-direction: normal;
            -ms-flex-direction: column;
            flex-direction: column
        }

        .details-list>li .details__content,
        .details-list>li .details__title {
            -webkit-box-flex: 0;
            -ms-flex: 0 0 100%;
            flex: 0 0 100%;
            max-width: 100%
        }
    }

    @media (min-width:320px) and (max-width:767px) {
        .list-items li {
            font-size: 14px
        }

        .list-horizontal li {
            -webkit-box-flex: 0;
            -ms-flex: 0 0 100%;
            flex: 0 0 100%;
            max-width: 100%
        }
    }

    @-webkit-keyframes pulsing {
        0% {
            opacity: 0;
            -webkit-transform: scale(1);
            transform: scale(1)
        }

        40% {
            opacity: .3;
            -webkit-transform: scale(1.2);
            transform: scale(1.2)
        }

        100% {
            opacity: 0;
            -webkit-transform: scale(1.5);
            transform: scale(1.5)
        }
    }

    @keyframes pulsing {
        0% {
            opacity: 0;
            -webkit-transform: scale(1);
            transform: scale(1)
        }

        40% {
            opacity: .3;
            -webkit-transform: scale(1.2);
            transform: scale(1.2)
        }

        100% {
            opacity: 0;
            -webkit-transform: scale(1.5);
            transform: scale(1.5)
        }
    }

    @-webkit-keyframes slideTopDown {
        0% {
            -webkit-transform: translateY(0);
            transform: translateY(0)
        }

        100% {
            -webkit-transform: translateY(-6px);
            transform: translateY(-6px)
        }
    }

    @keyframes slideTopDown {
        0% {
            -webkit-transform: translateY(0);
            transform: translateY(0)
        }

        100% {
            -webkit-transform: translateY(-6px);
            transform: translateY(-6px)
        }
    }

    @-webkit-keyframes headerAnimation {
        0% {
            opacity: 0;
            -webkit-transform: translateY(-100%);
            transform: translateY(-100%)
        }

        100% {
            opacity: 1;
            -webkit-transform: translateY(0);
            transform: translateY(0)
        }
    }

    @keyframes headerAnimation {
        0% {
            opacity: 0;
            -webkit-transform: translateY(-100%);
            transform: translateY(-100%)
        }

        100% {
            opacity: 1;
            -webkit-transform: translateY(0);
            transform: translateY(0)
        }
    }

    @-webkit-keyframes zoomOut {
        50% {
            -webkit-transform: scale(1.1);
            transform: scale(1.1)
        }
    }

    @keyframes zoomOut {
        50% {
            -webkit-transform: scale(1.1);
            transform: scale(1.1)
        }
    }

    .alert-primary {
        padding: 30px;
        color: #21cdc0;
        background-color: #def8f6;
        border-color: transparent;
        border-radius: 15px
    }

    .alert-primary .alert__title {
        font-size: 19px
    }

    .slick-list {
        margin: 0 -10px
    }

    .slick-slide {
        margin: 0 10px
    }

    .m-slides-0 .slick-list {
        margin: 0
    }

    .m-slides-0 .slick-slide {
        margin: 0
    }

    .slick-arrow {
        position: absolute;
        top: 50%;
        color: #213360;
        width: 40px;
        height: 40px;
        line-height: 40px;
        border-radius: 50%;
        font-size: 0;
        z-index: 3;
        -webkit-transition: all .3s linear;
        transition: all .3s linear;
        -webkit-transform: translateY(-50%);
        transform: translateY(-50%)
    }

    .slick-arrow:hover {
        color: #21cdc0
    }

    .slick-arrow.slick-next:before,
    .slick-arrow.slick-prev:before {
        font-family: icomoon;
        font-size: 40px
    }

    .slick-arrow.slick-next {
        right: 0
    }

    .slick-arrow.slick-next:before {
        content: "\e906"
    }

    .slick-arrow.slick-prev {
        left: 0
    }

    .slick-arrow.slick-prev:before {
        content: "\e904"
    }

    .carousel-arrows-light .slick-arrow {
        color: rgba(255, 255, 255, .8);
        border-color: rgba(255, 255, 255, .2)
    }

    .carousel-arrows-light .slick-arrow:hover {
        color: #fff
    }

    .slick-dots {
        list-style: none;
        position: relative;
        z-index: 2;
        padding: 0;
        text-align: center;
        margin-bottom: 0
    }

    .slick-dots li {
        display: -webkit-inline-box;
        display: -ms-inline-flexbox;
        display: inline-flex;
        position: relative;
        width: 10px;
        height: 10px;
        margin: 0 7px;
        -webkit-transition: all .3s linear;
        transition: all .3s linear
    }

    .slick-dots li button {
        display: block;
        font-size: 0;
        width: 10px;
        height: 10px;
        padding: 0;
        border-radius: 50%;
        background-color: #213360;
        -webkit-transition: all .2s linear;
        transition: all .2s linear
    }

    .slick-dots li.slick-active button {
        background-color: #21cdc0;
        -webkit-box-shadow: 0 0 0 5px rgba(33, 205, 192, .15);
        box-shadow: 0 0 0 5px rgba(33, 205, 192, .15)
    }

    .carousel-dots-light .slick-dots li button {
        background-color: #fff
    }

    .carousel-dots-light .slick-dots li.slick-active button {
        -webkit-box-shadow: 0 0 0 5px rgba(255, 255, 255, .2);
        box-shadow: 0 0 0 5px rgba(255, 255, 255, .2)
    }

    .preloader {
        position: fixed;
        top: 0;
        left: 0;
        right: 0;
        bottom: 0;
        width: 100%;
        height: 100%;
        z-index: 5000;
        background-color: #fff;
        display: -ms-flexbox;
        display: -webkit-box;
        display: flex;
        -ms-flex-pack: center;
        -webkit-box-pack: center;
        justify-content: center;
        -ms-flex-align: center;
        -webkit-box-align: center;
        align-items: center
    }

    .preloader .loading {
        position: relative;
        width: 80px;
        height: 80px
    }

    .preloader .loading span {
        position: absolute;
        width: 64px;
        height: 64px;
        border: 5px solid #21cdc0;
        border-radius: 50%;
        -webkit-animation: rotating 1.2s cubic-bezier(.5, 0, .5, 1) infinite;
        animation: rotating 1.2s cubic-bezier(.5, 0, .5, 1) infinite;
        border-color: #21cdc0 transparent transparent transparent
    }

    .preloader .loading span:nth-child(1) {
        -webkit-animation-delay: -.45s;
        animation-delay: -.45s
    }

    .preloader .loading span:nth-child(2) {
        -webkit-animation-delay: -.3s;
        animation-delay: -.3s
    }

    .preloader .loading span:nth-child(3) {
        -webkit-animation-delay: -.15s;
        animation-delay: -.15s
    }

    @-webkit-keyframes rotating {
        0% {
            -webkit-transform: rotate(0);
            transform: rotate(0)
        }

        100% {
            -webkit-transform: rotate(360deg);
            transform: rotate(360deg)
        }
    }

    @keyframes rotating {
        0% {
            -webkit-transform: rotate(0);
            transform: rotate(0)
        }

        100% {
            -webkit-transform: rotate(360deg);
            transform: rotate(360deg)
        }
    }

    .header {
        position: relative;
        z-index: 1000
    }

    .navbar {
        /* padding: 0; */
        height: 100px;
        max-height: 100px;
        background-color: #fff
    }

    .navbar>.container,
    .navbar>.container-fluid {
        position: relative;
        height: 100px
    }

    .navbar .navbar-brand {
        padding: 0;
        margin: 0;
        line-height: 100px
    }

    .navbar .logo-light {
        display: none
    }

    .navbar .navbar-toggler {
        padding: 0;
        border: none;
        border-radius: 0;
        width: 23px;
        position: relative
    }

    .navbar .navbar-toggler .menu-lines {
        display: inline-block
    }

    .navbar .navbar-toggler .menu-lines:after,
    .navbar .navbar-toggler .menu-lines:before {
        content: '';
        position: absolute;
        left: 0;
        width: 23px;
        height: 1px;
        display: inline-block;
        background-color: #213360;
        -webkit-transition: .3s ease;
        transition: .3s ease
    }

    .navbar .navbar-toggler .menu-lines:before {
        top: 0
    }

    .navbar .navbar-toggler .menu-lines:after {
        top: 12px
    }

    .navbar .navbar-toggler .menu-lines span {
        position: absolute;
        top: 6px;
        left: 0;
        width: 18px;
        height: 1px;
        background-color: #213360
    }

    .navbar .navbar-toggler.actived .menu-lines>span {
        opacity: 0
    }

    .navbar .navbar-toggler.actived .menu-lines:before {
        top: 0;
        -webkit-transform: rotate(-45deg);
        transform: rotate(-45deg)
    }

    .navbar .navbar-toggler.actived .menu-lines:after {
        top: 0;
        -webkit-transform: rotate(45deg);
        transform: rotate(45deg)
    }

    .navbar .nav__item {
        position: relative;
        margin-right: 15px
    }

    .navbar .nav__item:last-child {
        margin-right: 0
    }

    .navbar .nav__item .nav__item-link {
        font-size: 15px;
        font-weight: 700;
        text-transform: capitalize;
        display: block;
        position: relative;
        color: #213360;
        line-height: 100px;
        letter-spacing: .4px;
        padding-right: 15px
    }

    .navbar .nav__item .nav__item-link:before {
        content: '';
        position: absolute;
        top: 0;
        left: 0;
        width: 0;
        height: 2px;
        background-color: #21cdc0;
        -webkit-transition: .5s ease;
        transition: .5s ease
    }

    .navbar .nav__item .nav__item-link.active,
    .navbar .nav__item .nav__item-link:hover {
        color: #21cdc0
    }

    .navbar .nav__item .nav__item-link.active:before,
    .navbar .nav__item .nav__item-link:hover:before {
        width: 100%
    }

    .navbar .dropdown-toggle:after {
        content: "\f107";
        font-family: "Font Awesome 5 Free";
        font-weight: 900;
        border: none;
        vertical-align: middle;
        margin-left: 0;
        position: absolute;
        top: 50%;
        right: 0;
        -webkit-transform: translateY(-50%);
        transform: translateY(-50%)
    }

    .navbar .dropdown-menu {
        border-radius: 0;
        border: none;
        margin: 0;
        background-color: #fff
    }

    .navbar .dropdown-menu .nav__item {
        padding: 0 40px;
        margin-right: 0
    }

    .navbar .dropdown-menu .nav__item .nav__item-link {
        font-size: 14px;
        color: #0e204d;
        text-transform: capitalize;
        font-weight: 400;
        line-height: 36px !important;
        white-space: nowrap;
        position: relative
    }

    .navbar .dropdown-menu .nav__item .nav__item-link:after {
        content: '';
        position: absolute;
        top: 50%;
        left: -20px;
        width: 10px;
        height: 2px;
        opacity: 0;
        background-color: #21cdc0;
        -webkit-transform: translateY(-50%);
        transform: translateY(-50%);
        -webkit-transition: all .3s linear;
        transition: all .3s linear
    }

    .navbar .dropdown-menu .nav__item .nav__item-link:hover {
        color: #21cdc0
    }

    .navbar .dropdown-menu .nav__item .nav__item-link:hover:after {
        opacity: 1;
        left: -15px
    }

    .navbar .dropdown-menu .dropdown-toggle:after {
        right: 0
    }

    .navbar-actions>li {
        margin-left: 20px
    }

    .navbar-actions>li:last-child {
        margin-right: 0
    }

    .action__btn {
        color: #213360
    }

    .lang-dropdown .dropdown-item {
        font-size: 14px;
        padding: .25rem 1rem
    }

    .lang-dropdown .lang-dropdown-toggle {
        font-size: 14px;
        height: 40px;
        font-weight: 700;
        display: -webkit-box;
        display: -ms-flexbox;
        display: flex;
        -webkit-box-align: center;
        -ms-flex-align: center;
        align-items: center;
        padding-right: 15px;
        color: #fff
    }

    .lang-dropdown .lang-dropdown-toggle:after {
        font-family: "Font Awesome 5 Free";
        font-weight: 900;
        content: "\f107";
        border: 0;
        display: block !important
    }

    .lang-dropdown .lang-dropdown-toggle i {
        font-size: 30px;
        margin-right: 7px
    }

    .lang-dropdown .dropdown-menu {
        min-width: 100px !important;
        padding: .6rem 0 !important
    }

    .lang-dropdown .dropdown-menu .dropdown-item {
        color: #848e9f
    }

    .lang-dropdown .dropdown-menu .dropdown-item:focus,
    .lang-dropdown .dropdown-menu .dropdown-item:hover {
        background-color: transparent;
        color: #21cdc0
    }

    .lang-dropdown .dropdown-menu .dropdown-item.active,
    .lang-dropdown .dropdown-menu .dropdown-item:active {
        background-color: transparent
    }

    .header-topbar {
        height: 60px;
        display: -webkit-box;
        display: -ms-flexbox;
        display: flex;
        -webkit-box-align: center;
        -ms-flex-align: center;
        align-items: center;
        background-color: #283b6a;
    }

    .header-topbar .contact__list li {
        position: relative;
        display: -webkit-box;
        display: -ms-flexbox;
        display: flex;
        -webkit-box-align: center;
        -ms-flex-align: center;
        align-items: center;
        font-size: 13px;
        margin-right: 20px
    }

    .header-topbar .contact__list li a:not(.btn) {
        color: #f4f4f4
    }

    .header-topbar .contact__list li a:not(.btn):hover {
        color: #fff
    }

    .header-topbar .contact__list li>i {
        font-size: 16px;
        color: #788fc8;
        margin-right: 8px
    }

    .header-topbar .contact__list li:last-child {
        margin-right: 0
    }

    .header-topbar .social-icons li a {
        color: #213360;
        background-color: #21cdc0
    }

    .header-topbar .social-icons li a:hover {
        background-color: #fff
    }

    .header-topbar .header-topbar__search {
        position: relative
    }

    .header-topbar .header-topbar__search .form-control {
        height: 30px;
        border: 0;
        border-radius: 0;
        color: #fff;
        background-color: transparent;
        border: 2px solid;
        border-color: transparent transparent transparent rgba(255, 255, 255, .15)
    }

    .header-topbar .header-topbar__search .form-control:focus {
        border-color: rgba(255, 255, 255, .15) !important
    }

    .header-topbar .header-topbar__search .form-control::-webkit-input-placeholder {
        color: #788fc8;
        font-style: italic;
        font-size: 13px
    }

    .header-topbar .header-topbar__search .form-control:-moz-placeholder {
        color: #788fc8;
        font-style: italic;
        font-size: 13px
    }

    .header-topbar .header-topbar__search .form-control::-moz-placeholder {
        color: #788fc8;
        font-style: italic;
        font-size: 13px
    }

    .header-topbar .header-topbar__search .form-control:-ms-input-placeholder {
        color: #788fc8;
        font-style: italic;
        font-size: 13px
    }

    .header-topbar .header-topbar__search .header-topbar__search-btn {
        position: absolute;
        right: 10px;
        top: 50%;
        -webkit-transform: translateY(-50%);
        transform: translateY(-50%);
        color: #fff
    }

    .header-topbar .lang-dropdown .lang-dropdown-toggle {
        padding: 0 10px
    }

    .header-topbar .lang-dropdown .lang-dropdown-toggle img {
        margin-right: 7px
    }

    .header-topbar .action__btn {
        color: #fff !important
    }

    .header-layout1,
    .header-layout2 {
        -webkit-box-shadow: 0 5px 83px 0 rgba(9, 29, 62, .1);
        box-shadow: 0 5px 83px 0 rgba(9, 29, 62, .1)
    }

    .header-layout2 .header-topbar>.container-fluid>.row,
    .header-layout3 .header-topbar>.container-fluid>.row {
        height: 60px
    }

    .is-sticky {
        position: fixed;
        top: 0;
        right: 0;
        left: 0;
        width: 100%;
        z-index: 1040;
        border-bottom: 0 !important;
        height: 90px !important;
        max-height: 90px !important;
        background-color: #fff !important;
        -webkit-box-shadow: 0 3px 4px rgba(0, 0, 0, .07);
        box-shadow: 0 3px 4px rgba(0, 0, 0, .07);
        -webkit-animation: translateHeader .8s;
        animation: translateHeader .8s
    }

    .is-sticky>.container,
    .is-sticky>.container-fluid {
        position: relative;
        height: 80px
    }

    .is-sticky .miniPopup-departments-trigger {
        height: 80px
    }

    .is-sticky .navbar-brand {
        line-height: 80px
    }

    .is-sticky .header__top-right {
        display: none !important
    }

    .is-sticky .nav__item .nav__item-link {
        color: #213360;
        line-height: 80px !important
    }

    .is-sticky .nav__item .nav__item-link:before {
        background-color: #21cdc0 !important
    }

    .is-sticky .logo-light {
        display: none
    }

    .is-sticky .logo-dark {
        display: inline-block
    }

    .is-sticky .navbar-nav {
        margin-top: 0 !important
    }

    .miniPopup-emergency-trigger {
        position: relative;
        z-index: 151;
        height: 50px;
        margin-top: 10px;
        padding: 10px 20px;
        border-radius: 10px 10px 0 0;
        color: #213360;
        background-color: #fff
    }

    .miniPopup-emergency-trigger:after {
        content: "\f078";
        font-family: "Font Awesome 5 Free";
        font-weight: 900;
        font-size: 11px;
        position: absolute;
        bottom: 0;
        left: 50%;
        -webkit-transform: translateX(-50%);
        transform: translateX(-50%)
    }

    .miniPopup-emergency-trigger.active:after {
        content: "\f077"
    }

    .miniPopup-departments-trigger {
        position: relative;
        display: -webkit-box;
        display: -ms-flexbox;
        display: flex;
        -webkit-box-align: center;
        -ms-flex-align: center;
        align-items: center;
        font-size: 15px;
        font-weight: 700;
        height: 100px;
        color: #213360;
        -webkit-transition: .3s ease;
        transition: .3s ease
    }

    .miniPopup-departments-trigger .menu-lines {
        position: relative;
        width: 25px;
        height: 14px;
        margin-right: 15px
    }

    .miniPopup-departments-trigger .menu-lines span {
        position: absolute;
        top: 50%;
        right: 0;
        width: 20px;
        height: 2px;
        -webkit-transform: translateY(-50%);
        transform: translateY(-50%);
        background-color: #213360;
        -webkit-transition: .3s ease;
        transition: .3s ease
    }

    .miniPopup-departments-trigger .menu-lines:after,
    .miniPopup-departments-trigger .menu-lines:before {
        content: '';
        position: absolute;
        right: 0;
        width: 14px;
        height: 2px;
        display: inline-block;
        background-color: #213360;
        -webkit-transition: .3s ease;
        transition: .3s ease
    }

    .miniPopup-departments-trigger .menu-lines:before {
        top: 0
    }

    .miniPopup-departments-trigger .menu-lines:after {
        bottom: 0
    }

    .miniPopup-departments-trigger .menu-lines.active {
        color: #21cdc0
    }

    .miniPopup-departments-trigger .menu-lines.active span {
        opacity: 0
    }

    .miniPopup-departments-trigger .menu-lines.active:after,
    .miniPopup-departments-trigger .menu-lines.active:before {
        top: 7px;
        background-color: #21cdc0
    }

    .miniPopup-departments-trigger .menu-lines.active:before {
        -webkit-transform: rotate(-45deg);
        transform: rotate(-45deg)
    }

    .miniPopup-departments-trigger .menu-lines.active:after {
        -webkit-transform: rotate(45deg);
        transform: rotate(45deg)
    }

    .miniPopup-departments-trigger a {
        color: #213360
    }

    .miniPopup-departments-trigger a:hover {
        color: #21cdc0
    }

    .miniPopup {
        position: absolute;
        top: 100%;
        left: 0;
        z-index: 150;
        opacity: 0;
        visibility: hidden;
        width: 310px;
        padding: 40px;
        border-radius: 0 0 6px 6px;
        background-color: #fff;
        -webkit-box-shadow: 0 5px 83px 0 rgba(9, 29, 62, .15);
        box-shadow: 0 5px 83px 0 rgba(9, 29, 62, .15);
        -webkit-transition: .3s ease;
        transition: .3s ease;
        -webkit-transform: translateY(20px);
        transform: translateY(20px)
    }

    .miniPopup.active {
        opacity: 1;
        visibility: visible;
        -webkit-transform: translateY(0);
        transform: translateY(0)
    }

    .miniPopup-departments.dropdown-menu {
        top: 100%;
        display: block;
        min-width: 220px;
        width: 220px;
        -webkit-box-shadow: 0 5px 83px 0 rgba(9, 29, 62, .15) !important;
        box-shadow: 0 5px 83px 0 rgba(9, 29, 62, .15) !important
    }

    .miniPopup-emergency .emergency__icon {
        font-size: 60px;
        line-height: 1;
        color: #21cdc0;
        margin-bottom: 20px
    }

    .miniPopup-emergency .phone__number {
        font-size: 24px;
        font-weight: 600;
        margin-bottom: 20px
    }

    .miniPopup-emergency .btn {
        padding-top: 24px;
        border-top: 2px solid #e6e8eb
    }

    .search-popup {
        position: fixed;
        z-index: 2300;
        top: 0;
        right: 0;
        bottom: 0;
        width: 100%;
        height: 100%;
        opacity: 0;
        visibility: hidden;
        background-color: #fff;
        -webkit-transform: scale(.7);
        transform: scale(.7);
        -webkit-transition: all .5s ease-in-out;
        transition: all .5s ease-in-out
    }

    .search-popup.active {
        opacity: 1;
        visibility: visible;
        -webkit-transform: scale(1);
        transform: scale(1)
    }

    .search-popup.active .search-popup__form {
        -webkit-transform: translateY(-50%) scaleX(1);
        transform: translateY(-50%) scaleX(1)
    }

    .search-popup.inActive {
        opacity: 0;
        -webkit-transition-delay: .5s;
        transition-delay: .5s;
        -webkit-transform: scale(1);
        transform: scale(1)
    }

    .search-popup.inActive .search-popup__form {
        -webkit-transition-delay: 0s;
        transition-delay: 0s;
        -webkit-transform: translateY(-50%) scaleX(0);
        transform: translateY(-50%) scaleX(0)
    }

    .search-popup .search-popup__close {
        position: absolute;
        top: 50px;
        right: 50px;
        cursor: pointer;
        font-style: normal;
        width: 50px;
        height: 50px;
        line-height: 50px;
        text-align: center;
        border-radius: 3px;
        color: #fff;
        background-color: #21cdc0;
        -webkit-transition: all .2s linear;
        transition: all .2s linear
    }

    .search-popup .search-popup__close:hover {
        background-color: #0e204d
    }

    .search-popup .search-popup__form {
        position: absolute;
        top: 50%;
        left: 0;
        right: 0;
        width: 100%;
        max-width: 550px;
        margin: -40px auto 0;
        -webkit-transform: translateY(-50%) scaleX(0);
        transform: translateY(-50%) scaleX(0);
        -webkit-transition: all .5s ease-in-out;
        transition: all .5s ease-in-out;
        -webkit-transition-delay: .5s;
        transition-delay: .5s
    }

    .search-popup .search-popup__btn {
        position: absolute;
        top: 0;
        left: 0;
        line-height: 80px;
        text-align: center;
        font-size: 28px;
        cursor: pointer;
        color: #213360;
        -webkit-transition: .3s ease;
        transition: .3s ease
    }

    .search-popup .search-popup__btn:hover {
        color: #21cdc0
    }

    .search-popup .search-popup__form__input {
        font-family: Quicksand, sans-serif;
        font-weight: 300;
        font-size: 35px;
        z-index: 1;
        width: 100%;
        height: 80px;
        border: none;
        padding: 0 0 0 40px;
        color: #848e9f;
        background: 0 0;
        border-bottom: 2px solid #e7ebef;
        -webkit-transition: all .3s ease;
        transition: all .3s ease
    }

    .search-popup .search-popup__form__input::-webkit-input-placeholder {
        color: #848e9f
    }

    .search-popup .search-popup__form__input:-moz-placeholder {
        color: #848e9f
    }

    .search-popup .search-popup__form__input::-moz-placeholder {
        color: #848e9f
    }

    .search-popup .search-popup__form__input:-ms-input-placeholder {
        color: #848e9f
    }

    .login-popup {
        position: fixed;
        z-index: 2300;
        top: 0;
        right: 0;
        bottom: 0;
        width: 100%;
        height: 100%;
        opacity: 0;
        visibility: hidden;
        display: -webkit-box;
        display: -ms-flexbox;
        display: flex;
        -webkit-box-pack: center;
        -ms-flex-pack: center;
        justify-content: center;
        -webkit-box-align: center;
        -ms-flex-align: center;
        align-items: center;
        background-color: rgba(1, 7, 17, .9);
        -webkit-transition: all .5s ease-in-out;
        transition: all .5s ease-in-out
    }

    .login-popup .login-popup-wrapper {
        opacity: 0;
        width: 90%;
        max-width: 370px;
        -webkit-transform: scale(.9);
        transform: scale(.9);
        -webkit-transition: all .5s ease;
        transition: all .5s ease;
        -webkit-transition-delay: .7s;
        transition-delay: .7s
    }

    .login-popup .login-popup__form {
        position: relative;
        padding: 50px;
        border-radius: 5px;
        background-color: #fff
    }

    .login-popup .login-popup__form .input-icon {
        position: absolute;
        top: 50%;
        -webkit-transform: translateY(-50%);
        transform: translateY(-50%);
        left: 15px
    }

    .login-popup .login-popup__form .input-icon.icon-lock {
        font-size: 20px
    }

    .login-popup .login-popup__form .form-control {
        height: 60px;
        padding-left: 40px;
        background-color: #f1f5fe
    }

    .login-popup .custom-control-label a {
        color: #213360;
        border-bottom: 1px solid #213360
    }

    .login-popup .login-popup__title {
        font-size: 24px;
        margin-bottom: 15px
    }

    .login-popup .go-login,
    .login-popup .go-register {
        color: #21cdc0;
        margin-left: 10px
    }

    .login-popup .go-login i,
    .login-popup .go-register i {
        display: inline-block;
        width: 25px;
        height: 25px;
        line-height: 25px;
        text-align: center;
        border-radius: 50%;
        font-size: 10px;
        margin-left: 6px;
        color: #21cdc0;
        -webkit-transition: .3s linear;
        transition: .3s linear
    }

    .login-popup .go-login:hover i,
    .login-popup .go-register:hover i {
        color: #fff;
        background-color: #21cdc0
    }

    .login-popup.active {
        opacity: 1;
        visibility: visible
    }

    .login-popup.active .login-popup-wrapper {
        opacity: 1;
        -webkit-transform: scale(1);
        transform: scale(1)
    }

    .login-popup.inActive {
        opacity: 0;
        -webkit-transition-delay: .5s;
        transition-delay: .5s
    }

    .login-popup.inActive .login-popup-wrapper {
        -webkit-transform: scale(.9);
        transform: scale(.9);
        -webkit-transition-delay: 0s;
        transition-delay: 0s
    }

    .action__btn-search {
        color: #213360
    }
    @media (min-width:1366px){
        .header-topbar {
            display: block
        }
    }
    @media (min-width:1200px) {

        .header-topbar>.container-fluid,
        .navbar>.container-fluid {
            padding-left: 50px;
            padding-right: 50px
        }

        .header-layout3 .topbar__text {
            color: #788fc8
        }

        .header-layout3 .navbar .navbar-brand {
            padding-right: 50px;
            border-right: 1px solid #e6e8eb
        }

        .header-layout3 .action__btn-search {
            padding-right: 50px;
            height: 100%;
            border-right: 1px solid #e6e8eb
        }

        .header-layout3 .close__topbar {
            position: absolute;
            top: 50%;
            right: 15px;
            -webkit-transform: translateY(-50%);
            transform: translateY(-50%);
            color: #fff
        }
    }

    @media (max-width:1365px) {
        .header-topbar {
            display: none
        }
    }

    @media (min-width:992px) and (max-width:1200px) {
        .navbar .nav__item {
            margin-right: 20px
        }
    }

    @media (max-width:991px) {
        .navbar .navbar-toggler {
            position: absolute;
            right: 15px;
            height: 13px
        }

        .navbar .collapse:not(.show) {
            display: block
        }

        .navbar .navbar-nav {
            margin: 0 !important
        }

        .navbar .nav__item {
            margin-right: 0
        }

        .navbar .nav__item .nav__item-link {
            color: #222;
            line-height: 35px !important;
            padding-left: 15px
        }

        .navbar .nav__item .nav__item-link:hover {
            color: #21cdc0
        }

        .navbar .nav__item .nav__item-link:before {
            display: none
        }

        .navbar .navbar-collapse {
            position: fixed;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            width: 100%;
            height: 100%;
            visibility: hidden;
            opacity: 0;
            background-color: rgba(0, 0, 0, .6);
            z-index: 1000;
            padding: 0;
            -webkit-transition: .4s ease;
            transition: .4s ease
        }

        .navbar .navbar-collapse .navbar-nav {
            opacity: 0;
            width: 240px;
            height: 100%;
            overflow-y: auto;
            padding: 50px 0 20px;
            background-color: #fff;
            -webkit-transform: translateX(-100%);
            transform: translateX(-100%);
            -webkit-transition: .3s ease;
            transition: .3s ease;
            -webkit-transition-delay: .4s;
            transition-delay: .4s
        }

        .navbar .navbar-collapse.menu-opened {
            opacity: 1;
            visibility: visible
        }

        .navbar .navbar-collapse.menu-opened .navbar-nav {
            opacity: 1;
            -webkit-transform: translateX(0);
            transform: translateX(0)
        }

        .navbar .navbar-collapse.menu-opened .close-mobile-menu {
            opacity: 1;
            -webkit-transform: scale(1);
            transform: scale(1)
        }

        .navbar .close-mobile-menu {
            position: absolute;
            top: 30px;
            right: 30px;
            z-index: 1100;
            width: 35px;
            height: 35px;
            line-height: 33px;
            text-align: center;
            border-radius: 50%;
            border: 1px solid #fff;
            color: #fff;
            cursor: pointer;
            opacity: 0;
            -webkit-transform: scale(.8);
            transform: scale(.8);
            -webkit-transition: all .4s ease;
            transition: all .4s ease;
            -webkit-transition-delay: .5s;
            transition-delay: .5s
        }

        .navbar .nav__item [data-toggle=dropdown]:after {
            font-family: "Font Awesome 5 Free";
            font-weight: 900;
            position: absolute;
            right: 0;
            width: 50%;
            text-align: right;
            z-index: 2;
            padding-right: 15px;
            line-height: 35px;
            display: block !important
        }

        .navbar .dropdown-toggle:after {
            display: none
        }

        .navbar .nav__item.opened>[data-toggle=dropdown]:after,
        .navbar .nav__item.show>[data-toggle=dropdown]:after {
            content: "\f107"
        }

        .navbar .dropdown-menu {
            background-color: #fff
        }

        .navbar .dropdown-menu .nav__item {
            padding: 0 15px 0 30px
        }

        .navbar .dropdown-menu .nav__item .nav__item-link {
            padding-left: 0;
            border-bottom: none
        }

        .navbar .dropdown-menu .dropdown-menu-col .nav__item {
            padding: 0
        }

        .navbar .nav__item.dropdown-submenu>.dropdown-menu.show {
            padding-left: 10px
        }

        .navbar .dropdown-submenu .dropdown-menu .nav__item {
            padding: 0 0 0 15px
        }

        .navbar .navbar-nav .dropdown-menu.show {
            padding: 0
        }

        .navbar .mega-dropdown-menu .container {
            max-width: none
        }

        .navbar .mega-dropdown-menu>.nav__item {
            padding: 0 10px
        }

        .navbar .mega-dropdown-menu .nav__item {
            padding: 0
        }

        .header .navbar,
        .header-transparent .navbar {
            background-color: #fff
        }

        .header .logo-dark,
        .header-transparent .logo-dark {
            display: inline-block
        }

        .header .logo-light,
        .header-transparent .logo-light {
            display: none
        }

        .header .module__btn,
        .header-transparent .module__btn {
            color: #213360;
            margin: 0 60px 0 0
        }

        .header .navbar .navbar-toggler .menu-lines span,
        .header .navbar .navbar-toggler .menu-lines:after,
        .header .navbar .navbar-toggler .menu-lines:before,
        .header-transparent .navbar .navbar-toggler .menu-lines span,
        .header-transparent .navbar .navbar-toggler .menu-lines:after,
        .header-transparent .navbar .navbar-toggler .menu-lines:before {
            background-color: #213360
        }

        .header .navbar-expand-lg>.container,
        .header .navbar-expand-lg>.container-fluid,
        .header-transparent .navbar-expand-lg>.container,
        .header-transparent .navbar-expand-lg>.container-fluid {
            width: 100%;
            max-width: none
        }

        .header .navbar,
        .header .navbar>.container,
        .header .navbar>.container-fluid,
        .header-transparent .navbar,
        .header-transparent .navbar>.container,
        .header-transparent .navbar>.container-fluid {
            height: 80px
        }

        .header .header-full .navbar,
        .header .header-full .navbar .navbar-brand,
        .header .navbar-brand,
        .header-transparent .header-full .navbar,
        .header-transparent .header-full .navbar .navbar-brand,
        .header-transparent .navbar-brand {
            margin-left: 15px;
            line-height: 80px !important
        }

        .header .header-full .navbar,
        .header .header-full .navbar .navbar-brand,
        .header-transparent .header-full .navbar,
        .header-transparent .header-full .navbar .navbar-brand {
            line-height: 80px
        }

        .header-topbar>.container {
            max-width: none
        }

        .header-transparent .action__btn,
        .lang-dropdown .lang-dropdown-toggle {
            color: #213360
        }

        .action__btn-search {
            position: absolute;
            top: 50%;
            right: 80px;
            -webkit-transform: translateY(-50%);
            transform: translateY(-50%)
        }
    }

    @media (min-width:992px) {
        .navbar .dropdown-menu {
            width: auto;
            min-width: 235px;
            -webkit-box-shadow: 0 2px 6px 0 rgba(40, 40, 40, .1);
            box-shadow: 0 2px 6px 0 rgba(40, 40, 40, .1);
            padding: 25px 0 23px;
            border-radius: 0 0 6px 6px
        }

        .navbar .dropdown-menu .nav__item .nav__item-link:before {
            display: none
        }

        .navbar .dropdown-menu.wide-dropdown-menu {
            padding: 0;
            min-width: 500px;
            overflow: hidden
        }

        .navbar .dropdown-menu.wide-dropdown-menu>.nav__item {
            padding: 0
        }

        .navbar .dropdown-menu.wide-dropdown-menu .dropdown-menu-title {
            color: #0e204d;
            font-family: Quicksand, sans-serif;
            font-weight: 700;
            font-size: 17px;
            line-height: 1;
            margin: 0 0 13px 40px
        }

        .navbar .dropdown-menu.wide-dropdown-menu .dropdown-menu-col {
            padding: 40px 0 27px
        }

        .navbar .dropdown-menu.wide-dropdown-menu .dropdown-menu-col:first-child {
            position: relative
        }

        .navbar .dropdown-menu.wide-dropdown-menu .dropdown-menu-col:first-child:after {
            content: '';
            position: absolute;
            right: 0;
            top: 0;
            width: 1px;
            height: 100%;
            background-color: #e9e9e9
        }

        .navbar .nav__item.dropdown-submenu>.mega-menu,
        .navbar .nav__item.has-dropdown>.dropdown-menu,
        .navbar .nav__item.has-dropdown>.dropdown-menu>.nav__item.dropdown-submenu>.dropdown-menu,
        .navbar .nav__item.has-dropdown>.mega-menu {
            display: block;
            position: absolute;
            left: 0;
            right: auto;
            z-index: 1050;
            opacity: 0;
            visibility: hidden;
            -webkit-transition: all .5s ease;
            transition: all .5s ease;
            -webkit-transform: translateY(10px);
            transform: translateY(10px)
        }

        .navbar .nav__item.dropdown-submenu>.dropdown-menu>.nav__item.has-dropdown>.dropdown-menu,
        .navbar .nav__item.has-dropdown>.dropdown-menu>.nav__item.dropdown-submenu>.dropdown-menu {
            top: 0;
            left: 100%
        }

        .navbar .nav__item.dropdown-submenu:hover>.mega-menu,
        .navbar .nav__item.has-dropdown:hover>.dropdown-menu,
        .navbar .nav__item.has-dropdown:hover>.mega-menu,
        .navbar .nav__item.has-dropdown>.dropdown-menu>.nav__item.dropdown-submenu:hover>.dropdown-menu {
            opacity: 1;
            visibility: visible;
            -webkit-transform: translateY(0);
            transform: translateY(0)
        }

        .navbar .nav__item.has-dropdown.mega-dropdown {
            position: static
        }

        .navbar .nav__item.has-dropdown .mega-dropdown-menu {
            width: 100%
        }

        .navbar .dropdown-menu.mega-dropdown-menu .nav__item {
            padding: 0
        }

        .navbar .dropdown-menu.mega-dropdown-menu .nav__item .nav__item-link {
            overflow: hidden;
            -webkit-transition: all .4s ease;
            transition: all .4s ease
        }

        .navbar .dropdown-menu.mega-dropdown-menu .nav__item .nav__item-link:after {
            font-family: "Font Awesome 5 Free";
            font-weight: 900;
            content: "\f111";
            position: absolute;
            top: auto;
            left: -7px;
            font-size: 7px;
            opacity: 0;
            color: #21cdc0;
            -webkit-transition: all .4s ease;
            transition: all .4s ease
        }

        .navbar .dropdown-menu.mega-dropdown-menu .nav__item .nav__item-link:hover {
            padding-left: 15px
        }

        .navbar .dropdown-menu.mega-dropdown-menu .nav__item .nav__item-link:hover:after {
            opacity: 1;
            left: 4px
        }

        .nav__item i[data-toggle=dropdown] {
            display: none
        }

        .header-layout3 .navbar .navbar-brand {
            margin-right: 50px
        }
    }

    @media (min-width:320px) and (max-width:767px) {
        .dropdown-menu.mega-dropdown-menu>.nav__item {
            padding: 0 15px
        }

        .dropdown-menu.mega-dropdown-menu .nav__item:last-child>.nav__item-link {
            border-bottom: 1px solid #f2f2f2
        }

        .dropdown-menu.mega-dropdown-menu [class^=col-]:last-child .nav__item:last-child>.nav__item-link {
            border-bottom: none
        }
    }

    @media (min-width:320px) and (max-width:575px) {
        .search-popup .search-popup__form {
            width: 90%
        }

        .search-popup .search-popup__form__input {
            font-size: 20px;
            font-weight: 400;
            height: 40px;
            padding: 0 0 0 30px
        }

        .search-popup .search-popup__btn {
            font-size: 20px;
            line-height: 40px
        }

        .search-popup .search-popup__close {
            font-size: 14px;
            top: 30px;
            right: 30px;
            width: 30px;
            height: 30px;
            line-height: 30px
        }
    }

    @media (max-width:420px) {
        .header .navbar-brand img {
            max-width: 200px
        }

        .header .action__btn-login span {
            display: none
        }
    }

    @-webkit-keyframes translateHeader {
        0% {
            opacity: 0;
            -webkit-transform: translateY(-100%);
            transform: translateY(-100%)
        }

        100% {
            opacity: 1;
            -webkit-transform: translateY(0);
            transform: translateY(0)
        }
    }

    @keyframes translateHeader {
        0% {
            opacity: 0;
            -webkit-transform: translateY(-100%);
            transform: translateY(-100%)
        }

        100% {
            opacity: 1;
            -webkit-transform: translateY(0);
            transform: translateY(0)
        }
    }

    .accordion-item {
        padding: 22px 0;
        margin-top: -1px;
        border-top: 2px solid #e7ebef;
        border-bottom: 2px solid #e7ebef;
        background-color: #fff
    }

    .accordion-item .accordion__title {
        /*text-transform:capitalize;*/
        font-family: Quicksand, sans-serif;
        font-weight: 700;
        font-size: 18px;
        cursor: pointer;
        display: block;
        position: relative;
        padding-left: 40px;
        color: #213360
    }

    .accordion-item .accordion__title:hover {
        color: #21cdc0
    }

    .accordion-item .accordion__title:after {
        position: absolute;
        left: 0;
        top: 4px;
        content: "\f105";
        font-family: "Font Awesome 5 Free";
        font-weight: 900;
        font-size: 13px;
        text-align: center;
        width: 22px;
        height: 22px;
        line-height: 22px;
        border-radius: 50%;
        color: #fff;
        background-color: #213360
    }

    .accordion-item.opened {
        border-color: #21cdc0
    }

    .accordion-item.opened .accordion__header:not(.collapsed) .accordion__title {
        color: #21cdc0
    }

    .accordion-item.opened .accordion__header:not(.collapsed) .accordion__title:after {
        content: "\f107";
        background-color: #21cdc0
    }

    .accordion-item .accordion__body {
        padding-top: 20px
    }

    .accordion-item .accordion__body p {
        margin-bottom: 0
    }

    @media (min-width:320px) and (max-width:767px) {
        .accordion-item {
            padding: 10px 15px
        }

        .accordion-item .accordion__title {
            font-size: 14px
        }

        .accordion-item .accordion__body p {
            font-size: 13px
        }
    }

    .banner-layout1 .top-banner,
    .banner-layout2 .top-banner {
        padding-bottom: 35px
    }

    .banner-layout1 .banner-text,
    .banner-layout2 .banner-text {
        padding: 110px 40px 110px 0
    }

    .banner-layout1 .list-items-light.list-items-layout2 li:before,
    .banner-layout2 .list-items-light.list-items-layout2 li:before {
        color: #213360;
        border-color: #fff;
        background-color: #fff
    }

    @media (min-width:1200px) {

        .banner-layout1 .banner-img,
        .banner-layout2 .banner-img {
            position: absolute;
            top: 0;
            right: -15px;
            height: 100%
        }

        .banner-layout1 .fancybox-layout3,
        .banner-layout2 .fancybox-layout3 {
            position: absolute;
            top: 20%;
            right: -250px;
            z-index: 3
        }

        .banner-layout1 .banner-img {
            border-top-left-radius: 15px
        }

        .banner-layout2 .banner-img {
            height: calc(100% + 100px);
            border-bottom-left-radius: 15px
        }
    }

    @media (max-width:1199px) {

        .banner-layout1 .banner-text,
        .banner-layout2 .banner-text {
            padding: 50px 0
        }

        .banner-layout1 .banner-img,
        .banner-layout2 .banner-img {
            min-height: 300px
        }
    }

    .footer .footer-primary {
        padding-top: 85px;
        padding-bottom: 60px;
        background-color: #1d2a4d
    }

    .footer .footer-secondary {
        position: relative;
        padding: 46px 0;
        background-color: #fff
    }

    .footer .footer-secondary:after {
        content: '';
        position: absolute;
        bottom: 0;
        left: 50px;
        right: 50px;
        height: 5px;
        background-color: #21cdc0
    }

    .footer [class*=footer-widget] {
        margin-bottom: 30px
    }

    .footer .footer-widget__title {
        color: #fff;
        font-size: 16px;
        text-transform: capitalize;
        margin-bottom: 30px
    }

    .footer .contact-list li {
        line-height: 26px;
        margin-bottom: 0
    }

    .footer .footer-widget-contact {
        position: relative;
        overflow: hidden;
        padding: 40px;
        border-radius: 15px;
        background-color: #fff
    }

    .footer .footer-widget-contact:before {
        content: "\e916";
        font-family: icomoon;
        position: absolute;
        right: -30px;
        bottom: -15px;
        font-size: 170px;
        line-height: 1;
        color: rgba(40, 59, 106, .05);
        -webkit-transform: rotate(-20deg);
        transform: rotate(-20deg);
        z-index: 0
    }

    .footer .footer-widget-contact:after {
        content: '';
        position: absolute;
        top: 40px;
        bottom: 40px;
        left: 0;
        width: 3px;
        background-color: #21cdc0
    }

    .footer .footer-widget-nav li a {
        display: block;
        position: relative;
        color: #848e9f;
        font-size: 14px;
        margin-bottom: 11px
    }

    .footer .footer-widget-nav li a:hover {
        color: #21cdc0
    }

    .footer .footer__copyright-links li a {
        color: #848e9f;
        display: block;
        margin-right: 25px;
        padding: 3px 0
    }

    .footer .footer__copyright-links li a:hover {
        color: #21cdc0
    }

    .footer .footer__copyright-links li:last-child a {
        margin-right: 0
    }

    .footer .phone__number {
        margin: 20px 0
    }

    .phone__number {
        display: -webkit-inline-box;
        display: -ms-inline-flexbox;
        display: inline-flex;
        -webkit-box-align: center;
        -ms-flex-align: center;
        align-items: center;
        font-family: Quicksand, sans-serif;
        font-weight: 700;
        font-size: 22px;
        line-height: 1;
        color: #3851a2 !important
    }

    .phone__number:hover {
        color: #21cdc0 !important
    }

    .phone__number i {
        margin-right: 7px
    }

    #scrollTopBtn {
        position: fixed;
        right: 10px;
        bottom: 30px;
        width: 45px;
        height: 45px;
        opacity: 0;
        z-index: 1000;
        font-size: 18px;
        border-radius: 50%;
        color: #fff;
        background-color: #21cdc0;
        overflow: hidden;
        -webkit-transition: all .3s ease-in-out;
        transition: all .3s ease-in-out
    }

    #scrollTopBtn:hover {
        background-color: #222
    }

    #scrollTopBtn.actived {
        right: 30px;
        opacity: 1
    }

    @media (min-width:1200px) {

        .footer .footer-widget-about,
        .footer .footer-widget-nav {
            margin-top: 40px
        }
    }

    @media (min-width:320px) and (max-width:1200px) {
        .footer .footer-primary {
            padding-top: 35px;
            padding-bottom: 30px
        }

        .footer .footer-secondary {
            padding: 20px 0
        }

        .footer .footer-secondary:after {
            left: 20px;
            right: 20px;
            height: 3px
        }

        .footer .footer-widget-contact {
            padding: 20px
        }

        .footer .footer-widget-contact:after {
            top: 20px;
            bottom: 20px
        }

        .footer .footer-widget {
            margin-bottom: 20px
        }

        .footer .footer-widget__title {
            margin-bottom: 15px
        }

        .footer .footer-widget-nav li a {
            font-size: 13px
        }

        .footer .phone__number {
            margin: 10px 0
        }
    }

    @media (min-width:280px) and (max-width:767px) {
        .footer .footer__copyright-links {
            -ms-flex-pack: start !important;
            -webkit-box-pack: start !important;
            justify-content: flex-start !important
        }

        #scrollTopBtn {
            bottom: 20px;
            width: 30px;
            height: 30px;
            font-size: 14px
        }

      
    }

    .cta-banner {
        position: relative;
        z-index: 3;
        padding: 40px;
        max-width: 300px;
        border-radius: 4px;
        background-color: #fff;
        -webkit-box-shadow: 0 5px 83px 0 rgba(40, 40, 40, .12);
        box-shadow: 0 5px 83px 0 rgba(40, 40, 40, .12)
    }

    .cta-banner .cta__title {
        font-family: Roboto, sans-serif;
        font-size: 17px;
        line-height: 1.6
    }

    .cta-banner .cta__icon {
        color: #21cdc0;
        font-size: 70px;
        line-height: 1;
        margin-bottom: 25px
    }

    .cta-banner .cta__icon i {
        line-height: 1
    }

    @media (min-width:320px) and (max-width:767px) {
        .cta-banner .cta__title {
            font-size: 16px
        }
    }

    .header-transparent+.slider {
        margin-top: -100px
    }

    .header-transparent.header-full+.slider {
        margin-top: -135px
    }

    .header-transparent+.slider .slide-item {
        padding-top: 100px;
        height: 100vh
    }

    .header-transparent.header-full+.slider .slide-item {
        padding-top: 165px;
        height: 100vh
    }

    .slider {
        padding: 0
    }

    .slider .slide-item {
        height: calc(100vh - 165px);
        min-height: 550px
    }

    .slider .slide__subtitle {
        color: #213360;
        display: block;
        font-size: 25px;
        font-weight: 700;
        margin-bottom: 8px
    }


    .slider .slide__title {
        font-size: 70px;
        line-height: 1.1;
        margin-bottom: 25px
    }

    .slider .slide__desc {
        color: #283b6a;
        font-size: 17px;
        line-height: 1.5;
        font-weight: 700;
        max-width: 550px;
        margin-bottom: 30px
    }

    .slider .slick-dots {
        position: absolute;
        bottom: 30px;
        text-align: center;
        width: 100%
    }

    .slider .cta-banner {
        max-width: 270px;
        padding: 50px 40px
    }

    .slider .cta-banner:before {
        content: '';
        position: absolute;
        top: 50px;
        bottom: 50px;
        left: 0;
        width: 2px;
        background-color: #21cdc0
    }

    .slider .cta-banner .cta__title {
        font-family: Quicksand, sans-serif
    }

    .slider .cta-banner .slick-dots {
        position: static;
        text-align: left;
        margin-left: -17px
    }

    .slider .cta-banner .slick-dots li button {
        border-color: #213360
    }

    .slider .cta-banner .slick-dots li.slick-active button {
        border-color: #21cdc0
    }

    .slider .cta-banner .slick-dots li:not(:first-child):before,
    .slider .cta-banner .slick-dots li:not(:last-child):after {
        background-color: #213360
    }

    .slider .cta-banner .slick-dots li.slick-active:after,
    .slider .cta-banner .slick-dots li.slick-active:before {
        background-color: #21cdc0
    }

    .slider .slick-arrow {
        -webkit-transform: translateY(30px);
        transform: translateY(30px)
    }

    .slider .contact-panel-wrapper {
        position: relative
    }

    .slider .contact-panel {
        position: absolute;
        right: 15px;
        bottom: -100px;
        z-index: 5;
        padding: 50px;
        max-width: 370px
    }

    .slider .contact-panel .contact-panel__title {
        margin-bottom: 15px
    }

    .slider .contact-panel .form-group {
        margin-bottom: 20px
    }

    .slider-centerd {
        text-align: center
    }

    .slider-centerd .slide__desc {
        margin-right: auto;
        margin-left: auto
    }

    @media (min-width:1200px) {
        .slider .slick-arrow {
            width: 50px;
            height: 50px;
            line-height: 50px
        }

        .slider .slick-arrow:before {
            font-size: 50px
        }

        .slider .slick-arrow.slick-next {
            right: 20px
        }

        .slider .slick-arrow.slick-prev {
            left: 20px
        }

        .slider .btn {
            min-width: 190px
        }

        .slider .btn.btn__outlined {
            line-height: 58px
        }
    }

    @media (min-width:768px) and (max-width:1200px) {
        .slider .slide-item {
            padding-right: 50px;
            padding-left: 50px
        }

        .slider .slick-arrow.slick-prev {
            left: 10px
        }

        .slider .slick-arrow.slick-next {
            right: 10px
        }
    }

    @media (min-width:992px) and (max-width:1200px) {
        .slider .slide__title {
            font-size: 50px
        }
        .slider .slide__subtitle {
        font-size: 20px;
    }
    }

    @media (min-width:768px) and (max-width:991px) {
        .slider .slide__title {
            font-size: 30px;
            margin-bottom: 10px
        }
        .slider .slide__subtitle {
        font-size: 18px;
    }
    .slider .slide__desc {
            font-size: 15px;
      
        }
    }

    @media (min-width:320px) and (max-width:767px) {
        .header-transparent+.slider {
            margin-top: 0 !important
        }

        .slider .slide-item {
            height: calc(100vh - 300px);
            min-height: 300px;
           
        }

        .slider .slide__desc {
            font-size: 13px;
            font-weight: 400;
            margin-bottom: 20px
        }
        .slider .slide__subtitle {
        font-size: 14px;
    }
    }

    @media (min-width:576px) and (max-width:767px) {
        .slider .slide__title {
            font-size: 23px;
            line-height: 45px;
            margin-bottom: 10px
        }

        .slider .slick-arrow.slick-prev {
            left: 0
        }

        .slider .slick-arrow.slick-next {
            right: 0
        }
    }

    @media  (max-width:575px) {
        .slider .slide__title {
            font-size: 20px;
            margin-bottom: 10px
        }

        .slider .btn {
            margin-bottom: 10px
        }

        .slider .slick-arrow {
            display: none
        }

        .slider .slide-item {
            padding: 30px 10px
        }
    }

    .video__btn {
        text-align: center;
        display: -webkit-inline-box;
        display: -ms-inline-flexbox;
        display: inline-flex;
        position: relative;
        padding-left: 70px;
        height: 60px;
        -webkit-box-align: center;
        -ms-flex-align: center;
        align-items: center
    }

    .video__btn .video__player {
        position: absolute;
        top: 0;
        left: 0;
        width: 60px;
        height: 60px;
        line-height: 60px;
        border-radius: 50%;
        color: #fff;
        background-color: #21cdc0;
        -webkit-box-shadow: 0 0 0 7px rgba(0, 0, 0, .15);
        box-shadow: 0 0 0 7px rgba(0, 0, 0, .15);
        -webkit-transition: all .3s linear;
        transition: all .3s linear
    }

    .video__btn:hover .video__player {
        -webkit-box-shadow: 0 0 0 10px rgba(0, 0, 0, .15);
        box-shadow: 0 0 0 10px rgba(0, 0, 0, .15)
    }

    .video__btn .video__btn-title {
        font-size: 15px;
        font-weight: 700;
        line-height: 1;
        display: inline-block;
        white-space: nowrap;
        margin-left: 12px
    }

    .video__btn-lg {
        padding-left: 80px;
        height: 80px
    }

    .video__btn-lg .video__player {
        width: 80px;
        height: 80px;
        line-height: 80px
    }

    .video__btn-white .video__player {
        background-color: #fff !important;
        color: #0e204d
    }

    .video__btn-white .video__player-animation {
        border-color: #fff !important
    }

    .video-banner {
        position: relative;
        z-index: 2
    }

    .video-banner img {
        border-radius: 15px
    }

    .video-banner .video__btn {
        position: absolute;
        top: 50%;
        left: 50%;
        -webkit-transform: translate(-50%, -50%);
        transform: translate(-50%, -50%)
    }

    .video-banner .video__btn-title {
        position: absolute;
        bottom: -30px;
        left: -7px;
        line-height: 1.5
    }

    .video-banner-layout2 {
        position: relative;
        border-radius: 10px;
        overflow: hidden
    }

    .video-banner-layout2.bg-overlay:before {
        z-index: 0;
        background-color: transparent;
        background-image: -webkit-gradient(linear, left top, left bottom, color-stop(66%, #00000000), color-stop(97%, #061733));
        background-image: linear-gradient(180deg, #00000000 66%, #061733 97%)
    }

    .video-banner-layout2 .video__btn {
        position: absolute;
        left: 40px;
        bottom: 40px;
        padding-left: 60px;
        height: 36px
    }

    .video-banner-layout2 .video__player {
        width: 54px;
        height: 36px;
        line-height: 36px;
        border-radius: 10px;
        -webkit-box-shadow: 0 0 0 5px rgba(0, 0, 0, .1);
        box-shadow: 0 0 0 5px rgba(0, 0, 0, .1)
    }

    .video-banner-layout2:hover .video__player {
        -webkit-box-shadow: 0 0 0 6px rgba(0, 0, 0, .1);
        box-shadow: 0 0 0 6px rgba(0, 0, 0, .1)
    }

    .video-banner-layout3 {
        position: relative;
        border-radius: 10px;
        overflow: hidden
    }

    .video-banner-layout3.bg-overlay:before {
        z-index: 0;
        background-color: transparent;
        background-image: -webkit-gradient(linear, left top, left bottom, color-stop(66%, #00000000), color-stop(97%, #061733));
        background-image: linear-gradient(180deg, #00000000 66%, #061733 97%)
    }

    .video-banner-layout3 .video__btn {
        position: absolute;
        top: 50%;
        left: 50%;
        -webkit-transform: translate(-50%, -50%);
        transform: translate(-50%, -50%)
    }

    .feature-item {
        position: relative;
        border-radius: 13px;
        margin-bottom: 30px;
        background-color: #fff;
        -webkit-box-shadow: 0 5px 83px 0 rgba(9, 29, 62, .08);
        box-shadow: 0 5px 83px 0 rgba(9, 29, 62, .08);
        -webkit-transition: all .3s linear;
        transition: all .3s linear
    }

    .feature-item .feature__img {
        position: absolute;
        bottom: 40%;
        z-index: 3;
        opacity: 0;
        -webkit-transition: all .5s ease;
        transition: all .5s ease
    }

    .feature-item .feature__img img {
        border-radius: 13px
    }

    .feature-item .feature__content {
        overflow: hidden;
        position: relative;
        padding: 37px 40px 35px
    }

    .feature-item .feature__icon {
        font-size: 50px;
       
        line-height: 1;
        color: #21cdc0;
        margin-bottom: 20px;
        overflow: hidden
    }
    .feature-item .feature__icon img{
        width: 50px;
        height: 50px;
    }
    .btn-whatsapp-pulse {
	background: #25d366;
    z-index: 100;
	color: white;
	position: fixed;
	bottom:10%;
	right: 20px;
	font-size: 40px;
	display: flex;
	justify-content: center;
	align-items: center;
	width: 0;
	height: 0;
	padding: 35px;
	text-decoration: none;
	border-radius: 50%;
	animation-name: pulse;
	animation-duration: 1.5s;
	animation-timing-function: ease-out;
	animation-iteration-count: infinite;
}
.btn-whatsapp-pulse:hover {
	background: #25d366;
	color: white;
}
@media (min-width: 280px) and (max-width: 767px){
    .btn-whatsapp-pulse {
	    padding: 30px;
	    font-size:30px;
	    bottom:12%;

    }

}

@keyframes pulse {
	0% {
		box-shadow: 0 0 0 0 rgba(37, 211, 102, 0.5);
	}
	80% {
		box-shadow: 0 0 0 14px rgba(37, 211, 102, 0);
	}
}

    .feature-item .feature__icon i:nth-of-type(2) {
        position: absolute;
        right: -30px;
        font-size: 80px;
        opacity: 0;
        -webkit-transition: all .5s linear;
        transition: all .5s linear
    }

    .feature-item .feature__title {
        font-size: 18px;
        margin-bottom: 0
    }

    .feature-item .feature__desc {
        font-size: 14px;
        line-height: 1.7;display: -webkit-box;
    -webkit-line-clamp: 4;
    -webkit-box-orient: vertical;
    overflow: hidden;
    }

    .feature-item .btn__link {
        position: absolute;
        bottom: -15px;
        left: 40px;
        display: -webkit-box;
        display: -ms-flexbox;
        display: flex;
        -webkit-box-align: center;
        -ms-flex-align: center;
        align-items: center;
        height: 30px;
        line-height: 30px;
        opacity: 0;
        -webkit-transform: scale(.85);
        transform: scale(.85);
        -webkit-transition: all .5s linear;
        transition: all .5s linear
    }

    .feature-item .btn__link .icon-outlined {
        width: 30px;
        height: 30px;
        display: -webkit-box;
        display: -ms-flexbox;
        display: flex;
        -webkit-box-align: center;
        -ms-flex-align: center;
        align-items: center;
        -webkit-box-pack: center;
        -ms-flex-pack: center;
        justify-content: center;
        border-radius: 50%;
        color: #fff;
        background-color: #213360;
        margin-right: 5px;
        -webkit-transition: all .3s linear;
        transition: all .3s linear
    }

    .feature-item .btn__link .icon-outlined:hover {
        background-color: #21cdc0
    }

    .feature-item .btn__link .icon-outlined.icon-arrow-right {
        font-size: 75%
    }

    .feature-item:hover {
        -webkit-box-shadow: 0 5px 83px 0 rgba(9, 29, 62, .15);
        box-shadow: 0 5px 83px 0 rgba(9, 29, 62, .15)
    }

    .feature-item:hover .feature__icon {
        color: #21cdc0
    }

    .feature-item:hover .feature__icon i:nth-of-type(2) {
        opacity: .2
    }

    .feature-item:hover .feature__img {
        bottom: 50%;
        opacity: 1
    }

    /* .feature-item:hover .btn__link {
        opacity: 1;
        -webkit-transform: scale(1);
        transform: scale(1)
    } */

    .features-layout1 {
        padding-top: 180px
    }

    .features-layout1:after {
        content: '';
        position: absolute;
        bottom: 0;
        left: 0;
        width: 100%;
        height: 270px;
        z-index: -1;
        background-color: #fff
    }

    .features-layout2 .heading__icon {
        font-size: 60px;
        line-height: 1;
        color: #35fff0
    }

    .features-layout2 .feature-item .icon-outlined:hover {
        background-color: #222
    }

    .features-layout3 .feature-item-custom {
        overflow: hidden;
        background-color: #21cdc0
    }

    .features-layout3 .feature-item-custom:before {
        font-family: icomoon;
        content: "\e93f";
        position: absolute;
        right: -50px;
        bottom: -50px;
        font-size: 140px;
        color: rgba(255, 255, 255, .1)
    }

    .features-layout3 .feature-item-custom .feature__desc,
    .features-layout3 .feature-item-custom .feature__title {
        color: #fff
    }

    .features-layout3 .feature-item-custom .feature__title {
        margin-bottom: 20px
    }

    .features-layout3 .feature-item-custom .btn__link {
        position: static;
        opacity: 1;
        line-height: 1.5;
        height: auto;
        -webkit-transform: scale(1);
        transform: scale(1)
    }

    .features-layout4 .feature-item {
        padding: 30px;
        border-radius: 0;
        margin-bottom: 30px
    }

    .features-layout4 .feature-item .feature__icon {
        -webkit-box-flex: 0;
        -ms-flex: 0 0 70px;
        flex: 0 0 70px;
        max-width: 70px
    }

    .features-layout4 .feature-item .feature__title {
        font-size: 23px;
        margin-bottom: 15px;
        display: -webkit-box;
  -webkit-line-clamp: 1;
  -webkit-box-orient: vertical;  
  overflow: hidden;
    }

    .features-layout4 .feature-item .feature__content {
        padding: 0 !important
    }

    .features-layout4 .feature-item .btn__link {
        position: static;
        opacity: 1;
        line-height: 1.5;
        height: auto;
        -webkit-transform: scale(1);
        transform: scale(1)
    }

    .features-list .feature-item {
        -webkit-box-shadow: none;
        box-shadow: none;
        margin-bottom: 0;
        margin-right: 30px;
        text-align: center;
        background-color: transparent
    }

    .features-list .feature-item:last-of-type {
        margin-right: 0
    }

    .features-list .feature-item .feature__icon {
        display: -webkit-box;
        display: -ms-flexbox;
        display: flex;
        -webkit-box-align: center;
        -ms-flex-align: center;
        align-items: center;
        -webkit-box-pack: center;
        -ms-flex-pack: center;
        justify-content: center;
        width: 90px;
        height: 90px;
        font-size: 40px;
        border-radius: 50%;
        margin-bottom: 10px;
        color: #213360;
        background-color: #fff;
        -webkit-transition: all .3s linear;
        transition: all .3s linear
    }

    .features-list .feature-item .feature__title {
        font-size: 15px
    }

    .features-list .feature-item:hover .feature__icon {
        -webkit-box-shadow: 0 0 0 9px rgba(0, 0, 0, .1);
        box-shadow: 0 0 0 9px rgba(0, 0, 0, .1);
        -webkit-transform: translateY(-7px);
        transform: translateY(-7px)
    }

    @media (min-width:1200px) {
        .features-layout3 .feature-wrapper {
            overflow: hidden;
            margin-top: -50px;
            border-radius: 15px;
            -webkit-box-shadow: 0 5px 83px 0 rgba(9, 29, 62, .08);
            box-shadow: 0 5px 83px 0 rgba(9, 29, 62, .08)
        }

        .features-layout3 .feature-wrapper>[class*=col-]:not(:last-of-type) {
            border-right: 2px solid #e6e8eb
        }

        .features-layout3 .feature-item {
            margin-bottom: 0
        }

        .features-layout3 .feature-item:not(.feature-item-custom) {
            border-radius: 0;
            -webkit-box-shadow: none;
            box-shadow: none
        }

        .features-layout3 .feature-item:not(.feature-item-custom) .feature__title {
            line-height: 1.5
        }

        .features-layout3 .feature-item.feature-item-custom {
            margin-top: -50px;
            border-radius: 15px
        }

        /* .features-layout4 .carousel-container {
            margin-right: -160px
        } */
    }

    @media (max-width:1199px) {
        .feature-item {
            margin: 10px 0
        }

        .features-layout1[class*=mt--] {
            margin-top: -30px !important
        }
    }

    @media (min-width:320px) and (max-width:767px) {
        .feature-item .feature__content {
            padding: 20px
        }

        .feature-item .feature__title {
            font-size: 16px !important;
            margin-bottom: 5px
        }

        .feature-item .feature__desc {
            font-size: 13px;
            margin-bottom: 10px
        }

        .feature-item .feature__icon {
            font-size: 40px;
            margin-bottom: 10px
        }
        .feature-item .feature__icon img{
            width: 30px;
            height: 30px;
        }

        .features-list .feature-item {
            margin-right: 10px
        }

        .features-list .feature-item .feature__icon {
            width: 50px;
            height: 50px;
            font-size: 20px
        }

        .features-list .feature-item .feature__title {
            font-size: 11px !important
        }
    }

    .fancybox-item {
        position: relative;
        border-radius: 10px;
        margin-bottom: 30px;
        -webkit-transition: all .3s linear;
        transition: all .3s linear
    }

    .fancybox-item .fancybox__icon {
        font-size: 50px;
        line-height: 1;
        color: #21cdc0
    }

    .fancybox-item .fancybox__title {
        font-size: 19px;
        margin-bottom: 16px
    }

    .fancybox-item .fancybox__desc {
        margin-bottom: 0
    }

    .fancybox-item .fancybox__desc,
    .fancybox-item .fancybox__icon,
    .fancybox-item .fancybox__title {
        -webkit-transition: all .3s linear;
        transition: all .3s linear
    }

    .fancybox-item:hover .fancybox__icon {
        -webkit-animation: zoomOut 1s infinite alternate;
        animation: zoomOut 1s infinite alternate
    }

    .fancybox-item:hover .fancybox__title {
        color: #21cdc0
    }

    .fancybox-layout1 .fancybox-item,
    .fancybox-layout2 .fancybox-item {
        padding: 40px;
        border: 2px solid #e6e8eb
    }

    .fancybox-layout1 .fancybox-item .fancybox__icon,
    .fancybox-layout2 .fancybox-item .fancybox__icon {
        -webkit-box-flex: 0;
        -ms-flex: 0 0 70px;
        flex: 0 0 70px
    }

    .fancybox-layout1 .fancybox-item:hover {
        border-color: #fff;
        -webkit-box-shadow: 0 5px 83px 0 rgba(9, 29, 62, .15);
        box-shadow: 0 5px 83px 0 rgba(9, 29, 62, .15)
    }

    .fancybox-layout2 .fancybox-item {
        padding: 30px
    }

    .fancybox-layout2 .fancybox-item .fancybox__title {
        font-size: 18px;
        margin-bottom: 6px
    }

    .fancybox-layout2 .fancybox-item:hover {
        border-color: #21cdc0;
        background-color: #21cdc0
    }

    .fancybox-layout2 .fancybox-item:hover .fancybox__desc,
    .fancybox-layout2 .fancybox-item:hover .fancybox__icon,
    .fancybox-layout2 .fancybox-item:hover .fancybox__title {
        color: #fff
    }

    .fancybox-layout3 .fancybox-item {
        width: 270px;
        padding: 37px 35px 30px;
        background-color: #fff
    }

    .fancybox-layout3 .fancybox-item .fancybox__icon {
        -webkit-box-flex: 0;
        -ms-flex: 0 0 70px;
        flex: 0 0 70px
    }

    .fancybox-layout3 .fancybox-item .fancybox__title {
        font-size: 18px
    }

    .fancybox-light .fancybox-item .fancybox__icon,
    .fancybox-light .fancybox-item .fancybox__title,
    .fancybox-light .fancybox-item:hover .fancybox__title {
        color: #fff
    }

    @media (min-width:320px) and (max-width:767px) {
        .fancybox-item .fancybox__icon {
            font-size: 40px;
            margin-bottom: 5px
        }

        .fancybox-item .fancybox__title {
            font-size: 15px !important;
            margin-bottom: 5px
        }

        .fancybox-layout1 .fancybox-item,
        .fancybox-layout2 .fancybox-item,
        .fancybox-layout3 .fancybox-item {
            padding: 20px
        }
    }

    .member {
        position: relative;
        border-radius: 8px;
        background-color: #fff;
        -webkit-transition: all .4s ease-in-out;
        transition: all .4s ease-in-out;
        margin-bottom: 30px
    }

    .member:before {
        content: '';
        position: absolute;
        bottom: 0;
        left: 40px;
        right: 40px;
        height: 3px;
        background-color: #21cdc0;
        -webkit-transition: transform .4s linear;
        -webkit-transition: -webkit-transform .4s linear;
        transition: -webkit-transform .4s linear;
        transition: transform .4s linear;
        transition: transform .4s linear, -webkit-transform .4s linear;
        -webkit-transition-delay: .3s;
        transition-delay: .3s;
        -webkit-transform: scaleX(0);
        transform: scaleX(0)
    }

    .member .member__img {
        position: relative;
        overflow: hidden;
        border-radius: 6px
    }

    .member .member__img img {
        -webkit-transition: all .9s ease;
        transition: all .9s ease
    }

    .member .member__info {
        padding: 35px 40px
    }

    .member .member__info .member__name {
        font-size: 21px;
        margin-bottom: 11px
    }

    .member .member__info .member__name a {
        color: #0e204d
    }

    .member .member__info .member__name a:hover {
        color: #21cdc0
    }

    .member .member__info .member__job {
        color: #21cdc0;
        margin-bottom: 10px
    }

    .member .member__info .member__desc {
        font-size: 15px;
        margin-bottom: 0
    }

    .member .member__hover {
        position: absolute;
        top: 0;
        right: 0;
        left: 0;
        bottom: 0;
        opacity: 0;
        width: 100%;
        height: 100%;
        overflow: hidden;
        border-radius: 4px;
        -webkit-transition: all .5s linear;
        transition: all .5s linear
    }

    .member .social-icons li {
        opacity: 0;
        -webkit-transition: all .4s ease-in-out;
        transition: all .4s ease-in-out
    }

    .member .social-icons li a {
        width: 40px;
        height: 40px;
        line-height: 40px;
        font-size: 16px;
        color: #fff
    }

    .member .social-icons li a.facebook {
        background-color: #3b5999
    }

    .member .social-icons li a.twitter {
        background-color: #55acee
    }

    .member .social-icons li a.phone {
        background-color: #283b6a
    }

    .member .social-icons li a:hover {
        background-color: #222
    }

    .member .social-icons li:nth-of-type(1) {
        -webkit-transition-delay: .1s;
        transition-delay: .1s
    }

    .member .social-icons li:nth-of-type(2) {
        -webkit-transition-delay: .2s;
        transition-delay: .2s
    }

    .member .social-icons li:nth-of-type(3) {
        -webkit-transition-delay: .3s;
        transition-delay: .3s
    }

    .member .btn__link.btn__secondary {
        padding: 12px 0;
        margin-top: 5px
    }

    .member .btn__link.btn__secondary i {
        width: auto;
        height: auto;
        margin-left: 3px;
        color: #213360;
        background-color: transparent !important;
        -webkit-transition: all .3s linear;
        transition: all .3s linear
    }

    .member .btn__link.btn__secondary:hover {
        color: #fff !important;
        background-color: #21cdc0 !important
    }

    .member:hover {
        -webkit-box-shadow: 0 5px 83px 0 rgba(9, 29, 62, .15);
        box-shadow: 0 5px 83px 0 rgba(9, 29, 62, .15)
    }

    .member:hover .member__hover,
    .member:hover .social-icons li {
        opacity: 1
    }

    .member:hover .btn__link.btn__secondary {
        padding: 12px 15px;
        color: #fff;
        background-color: #213360
    }

    .member:hover .btn__link.btn__secondary i {
        color: #fff
    }

    .team-layout1 .member .social-icons {
        position: absolute;
        top: 40px;
        left: 40px
    }

    .team-layout1 .slick-list,
    .team-layout2 .slick-list {
        margin: -15px;
        overflow: visible
    }

    .team-layout1 .slick-slide,
    .team-layout2 .slick-slide {
        margin: 15px;
        -webkit-transition: all .3s ease;
        transition: all .3s ease
    }

    .team-layout1 .slick-slide.slick-active,
    .team-layout2 .slick-slide.slick-active {
        opacity: 1;
        visibility: visible
    }

    .team-layout1 .slick-slide:not(.slick-active),
    .team-layout2 .slick-slide:not(.slick-active) {
        opacity: 0;
        visibility: hidden
    }

    .team-layout1 .member:hover:before,
    .team-layout2 .member:hover:before {
        -webkit-transform: scaleX(1);
        transform: scaleX(1)
    }

    @media (min-width:320px) and (max-width:767px) {
        .member:before {
            left: 20px;
            right: 20px
        }

        .member .member__info {
            padding: 15px 20px
        }
    }

    .testimonial__title {
        font-size: 23px;
        line-height: 1.8;
        margin-bottom: 30px
    }

    .testimonial__meta {
        opacity: .5;
        -webkit-transition: opacity .3s ease;
        transition: opacity .3s ease
    }

    .testimonial__meta .testimonial__thmb {
        margin-bottom: 16px
    }

    .testimonial__meta.slick-current {
        opacity: 1
    }

    .testimonial__meta.slick-current .testimonial__thmb {
        border: 2px solid #21cdc0;
        background-color: #fff
    }

    .testimonial__meta-title {
        font-size: 16px;
        margin-bottom: 4px;
        white-space: nowrap
    }

    .testimonial__meta-desc {
        position: relative;
        z-index: 2;
        font-size: 13px;
        line-height: 1;
        margin-bottom: 0
    }

    .testimonial__thmb {
        cursor: pointer;
        width: 52px !important;
        height: 52px;
        padding: 4px;
        border-radius: 50%;
        border: 2px solid transparent;
        background-color: transparent;
        -webkit-transition: all .4s ease;
        transition: all .4s ease
    }

    .testimonial__thmb img {
        display: block;
        border-radius: 50%;
        margin: auto
    }

    .testimonials-layout1 {
        border-radius: 15px;
        background-color: #edfbfa
    }

    .testimonials-layout1 .slick-dots {
        position: absolute;
        bottom: -40px;
        right: 0;
        z-index: 3
    }

    .testimonials-layout1 .testimonials-wrapper {
        position: relative
    }

    .testimonials-layout1 .testimonials-wrapper:before {
        font-family: icomoon;
        content: "\e95c";
        position: absolute;
        top: -160px;
        left: 0;
        font-size: 50px;
        color: #21cdc0
    }

    .testimonials-layout2 .slick-dots,
    .testimonials-layout3 .slick-dots {
        display: none !important
    }

    .testimonials-layout2 .slider-nav,
    .testimonials-layout3 .slider-nav {
        max-width: 550px
    }

    .testimonials-layout2 .testimonial__meta,
    .testimonials-layout3 .testimonial__meta {
        padding-top: 10px;
        display: -webkit-box;
        display: -ms-flexbox;
        display: flex;
        -webkit-box-align: center;
        -ms-flex-align: center;
        align-items: center
    }

    .testimonials-layout2 .testimonial__meta .testimonial__thmb,
    .testimonials-layout3 .testimonial__meta .testimonial__thmb {
        position: relative;
        width: 65px !important;
        height: 65px;
        padding: 6px;
        margin-bottom: 0;
        margin-right: 15px
    }

    .testimonials-layout2 .testimonial__meta .testimonial__thmb:before,
    .testimonials-layout3 .testimonial__meta .testimonial__thmb:before {
        font-family: icomoon;
        content: "\e95c";
        position: absolute;
        top: -5px;
        left: -5px;
        font-size: 12px;
        opacity: 0;
        width: 30px;
        height: 30px;
        line-height: 30px;
        border-radius: 50%;
        text-align: center;
        color: #21cdc0;
        background-color: #fff;
        -webkit-transition: all .4s ease;
        transition: all .4s ease
    }

    .testimonials-layout2 .testimonial__meta.slick-current .testimonial__thmb:before,
    .testimonials-layout3 .testimonial__meta.slick-current .testimonial__thmb:before {
        opacity: 1
    }

    .testimonials-layout3 {
        padding-bottom: 290px
    }

    .testimonials-layout3+.contact-layout2 {
        margin-top: -240px
    }

    .testimonials-layout3 .testimonial__meta-title,
    .testimonials-layout3 .testimonial__title {
        color: #fff
    }

    .testimonials-layout3 .testimonial__meta-desc {
        color: #848e9f
    }

    .testimonials-layout3 .testimonial__meta.slick-current .testimonial__thmb {
        background-color: #213360
    }

    .testimonials__rating {
        position: relative;
        max-width: 300px;
        padding: 20px 0 20px 30px
    }

    .testimonials__rating:before {
        content: '';
        position: absolute;
        top: 0;
        left: -10px;
        width: 143px;
        height: 95px;
        background-image: url(./images/icons/text-shape.png)
    }

    .testimonials__rating .total__rate {
        font-family: Quicksand, sans-serif;
        font-size: 38px;
        font-weight: 700;
        color: #21cdc0;
        margin-right: 10px
    }

    .testimonials__rating .overall__rate {
        font-weight: 700;
        color: #213360;
        border-bottom: 2px solid #213360
    }

    @media (min-width:1300px) {
        .testimonials-layout1 {
            margin: 0 50px
        }
    }

    @media (max-width:992px) {
        .testimonials-layout1 .testimonials-wrapper:before {
            top: -90px;
            font-size: 40px
        }
    }

    @media (max-width:992px) {
        .testimonial__title {
            font-size: 15px
        }

        .testimonial__meta-title {
            font-size: 13px
        }

        .testimonials-layout2 .testimonial__meta .testimonial__thmb {
            position: relative;
            width: 40px !important;
            height: 40px;
            padding: 3px;
            margin-right: 8px
        }

        .testimonials-layout2 .testimonial__meta .testimonial__thmb:before {
            font-size: 9px;
            width: 20px;
            height: 20px;
            line-height: 20px
        }
    }

    .client {
        position: relative;
        overflow: hidden
    }

    .client img {
        padding: 15px;
        -webkit-transition: transform .5s ease;
        -webkit-transition: -webkit-transform .5s ease;
        transition: -webkit-transform .5s ease;
        transition: transform .5s ease;
        transition: transform .5s ease, -webkit-transform .5s ease
    }

    .client img:first-of-type {
        opacity: .7
    }

    .client img:last-of-type {
        position: absolute;
        top: 50%;
        left: 50%;
        -webkit-transform: translate(-50%, -150%);
        transform: translate(-50%, -150%)
    }

    .client:hover img:first-of-type {
        -webkit-transform: translateY(150%);
        transform: translateY(150%)
    }

    .client:hover img:last-of-type {
        -webkit-transform: translate(-50%, -50%);
        transform: translate(-50%, -50%)
    }

    .clients-light .client img {
        -webkit-filter: brightness(100);
        filter: brightness(100)
    }

    .clients-light .client img:first-of-type {
        opacity: .98
    }

    .post-item {
        position: relative;
        border-radius: 6px;
        margin-bottom: 30px;
        -webkit-transition: all .3s linear;
        transition: all .3s linear
    }

    .post-item .post__img {
        position: relative;
        overflow: hidden;
        border-radius: 6px
    }

    .post-item .post__img img {
        -webkit-transition: all .9s ease;
        transition: all .9s ease
    }

    .post-item .post__title {
        text-transform: uppercase;
        font-size: 20px;
        margin-bottom: 28px
    }

    .post-item .post__title a {
        color: #0e204d
    }

    .post-item .post__title a:hover {
        color: #21cdc0
    }

    .post-item .post__meta {
        margin-bottom: 14px
    }

    .post-item .post__meta>* {
        position: relative;
        font-size: 13px;
        color: #435ba1;
        line-height: 1;
        margin-right: 15px;
        padding-right: 15px
    }

    .post-item .post__meta>:after {
        content: "";
        position: absolute;
        top: 0;
        right: 0;
        width: 2px;
        height: 100%;
        background-color: #dedfe3
    }

    .post-item .post__meta>:last-child {
        padding-right: 0;
        margin-right: 0
    }

    .post-item .post__meta>:last-child:after {
        display: none
    }

    .post-item .post__body {
        position: relative;
        z-index: 3;
        padding: 0 30px 40px 37px;
        margin-top: -15px
    }

    .post-item .post__meta-cat {
        padding: 4px 13px;
        display: inline-block;
        border-radius: 0 8px 8px 8px;
        background-color: #21cdc0;
        margin-bottom: 15px
    }

    .post-item .post__meta-cat a {
        position: relative;
        color: #fff;
        padding-right: 7px;
        font-size: 13px
    }

    .post-item .post__meta-cat a:hover {
        color: #000
    }

    .post-item .post__meta-cat a:after {
        content: ",";
        position: absolute;
        top: -1px;
        right: 1px;
        color: #fff
    }

    .post-item .post__meta-cat a:last-child {
        padding-right: 0
    }

    .post-item .post__meta-cat a:last-child:after {
        display: none
    }

    .post-item .btn__link.btn__secondary {
        padding: 12px 0;
        margin-top: 5px
    }

    .post-item .btn__link.btn__secondary i {
        width: auto;
        height: auto;
        margin-left: 3px;
        color: #213360;
        background-color: transparent !important;
        -webkit-transition: all .3s linear;
        transition: all .3s linear
    }

    .post-item .btn__link.btn__secondary:hover {
        color: #fff !important;
        background-color: #21cdc0 !important
    }

    .post-item:hover {
        -webkit-box-shadow: 0 5px 83px 0 rgba(9, 29, 62, .15);
        box-shadow: 0 5px 83px 0 rgba(9, 29, 62, .15)
    }

    .post-item:hover .post__img img {
        -webkit-transform: scale(1.1) rotate(1deg);
        transform: scale(1.1) rotate(1deg)
    }

    .post-item:hover .btn__link.btn__secondary {
        padding: 12px 20px;
        color: #fff;
        background-color: #213360
    }

    .post-item:hover .btn__link.btn__secondary i {
        color: #fff
    }

    .blog-single .post-item .post__img {
        border-radius: 16px
    }

    .blog-single .post-item:hover {
        -webkit-box-shadow: none;
        box-shadow: none
    }

    .blog-widget__title {
        font-size: 21px;
        margin-bottom: 24px
    }

    .blog-share .social-icons a {
        width: 40px;
        height: 40px;
        line-height: 40px;
        color: #fff
    }

    .blog-share .social-icons a:hover {
        background-color: #21cdc0
    }

    .widget-nav .widget-nav__img {
        position: relative;
        max-width: 90px;
        -webkit-box-flex: 0;
        -ms-flex: 0 0 90px;
        flex: 0 0 90px;
        -ms-flex-item-align: baseline;
        align-self: baseline
    }

    .widget-nav .widget-nav__img img {
        border-radius: 5px
    }

    .widget-nav .widget-nav__img:before {
        font-family: icomoon;
        font-size: 10px;
        position: absolute;
        top: 50%;
        -webkit-transform: translateY(-50%);
        transform: translateY(-50%);
        color: #213360;
        -webkit-transition: all .3s linear;
        transition: all .3s linear
    }

    .widget-nav .widget-nav__next,
    .widget-nav .widget-nav__prev {
        position: relative;
        padding: 20px 40px;
        border-radius: 12px;
        border: 2px solid #e6e8eb;
        max-width: 48%;
        -webkit-transition: all .3s linear;
        transition: all .3s linear
    }

    .widget-nav .widget-nav__next:hover,
    .widget-nav .widget-nav__prev:hover {
        border-color: #21cdc0
    }

    .widget-nav .widget-nav__next:hover .widget-nav__img:before,
    .widget-nav .widget-nav__next:hover .widget-nav__ttile,
    .widget-nav .widget-nav__prev:hover .widget-nav__img:before,
    .widget-nav .widget-nav__prev:hover .widget-nav__ttile {
        color: #21cdc0
    }

    .widget-nav .widget-nav__next .widget-nav__img:before {
        content: "\e905";
        right: -20px
    }

    .widget-nav .widget-nav__prev .widget-nav__img:before {
        content: "\e903";
        left: -20px
    }

    .widget-nav .widget-nav__content {
        max-width: calc(100% - 90px);
        -webkit-box-flex: 0;
        -ms-flex: 0 0 calc(100% - 90px);
        flex: 0 0 calc(100% - 90px);
        padding: 0 10px
    }

    .widget-nav .widget-nav__content span {
        font-family: Roboto, sans-serif;
        font-size: 13px;
        color: #616161;
        display: block;
        margin-bottom: 1px
    }

    .widget-nav .widget-nav__content .widget-nav__ttile {
        font-size: 15px;
        -webkit-transition: all .3s linear;
        transition: all .3s linear
    }

    .widget-nav .widget-nav__all {
        font-size: 22px;
        line-height: 50px;
        display: block;
        text-align: center
    }

    .blog-author {
        position: relative;
        padding: 35px;
        border-radius: 6px;
        background-color: #def8f6
    }

    .blog-author:after {
        content: '';
        position: absolute;
        top: 35px;
        bottom: 35px;
        left: 0;
        width: 3px;
        background-color: #21cdc0
    }

    .blog-author .blog-author__avatar {
        -webkit-box-flex: 0;
        -ms-flex: 0 0 100px;
        flex: 0 0 100px;
        max-width: 100px;
        overflow: hidden;
        margin-bottom: 20px;
        padding-right: 30px
    }

    .blog-author .blog-author__avatar img {
        border-radius: 50%
    }

    .blog-author .blog-author__content {
        -webkit-box-flex: calc(100% - 100px);
        -ms-flex: calc(100% - 100px);
        flex: calc(100% - 100px);
        max-width: calc(100% - 100px)
    }

    .blog-author .blog-author__name {
        font-size: 18px;
        margin-bottom: 12px
    }

    .blog-author .blog-author__bio {
        font-size: 15px;
        margin-bottom: 13px
    }

    .blog-author .social-icons li a {
        font-size: 15px;
        color: #0e204d;
        background-color: transparent !important
    }

    .blog-author .social-icons li a:hover {
        color: #21cdc0
    }

    .bordered-box {
        border-radius: 4px;
        border: 1px solid #e5e8ea
    }

    .bordered-box .blog-share,
    .bordered-box .blog-tags {
        padding: 25px
    }

    .comments-list .comment__item {
        position: relative;
        padding-bottom: 20px;
        border-bottom: 2px solid #eaeaea;
        margin-bottom: 30px
    }

    .comments-list .comment__item:last-child {
        border-bottom: none;
        padding-bottom: 0;
        margin-bottom: 0
    }

    .comments-list .comment__item .comment__avatar {
        position: absolute;
        top: 0;
        left: 0;
        width: 60px;
        height: 60px;
        overflow: hidden;
        border-radius: 4px
    }

    .comments-list .comment__item .comment__avatar img {
        border-radius: 50%
    }

    .comments-list .comment__item .comment__content {
        padding-left: 90px
    }

    .comments-list .comment__item .comment__content .comment__author {
        font-size: 15px;
        margin-bottom: 11px
    }

    .comments-list .comment__item .comment__content .comment__date {
        font-size: 12px;
        line-height: 1;
        display: block;
        margin-bottom: 10px
    }

    .comments-list .comment__item .comment__content .comment__desc {
        font-size: 15px;
        margin-bottom: 6px
    }

    .comments-list .comment__item .comment__content .comment__reply {
        text-transform: capitalize;
        font-size: 14px;
        font-weight: 700;
        line-height: 1;
        color: #21cdc0
    }

    .comments-list .comment__item .comment__content .comment__reply:hover {
        color: #213360
    }

    .comments-list .comment__item .nested__comment {
        border-top: 1px solid #eaeaea;
        padding: 30px 0 0 0;
        margin: 30px 0 0 90px
    }

    .blog-comments-form .form-control {
        height: 60px
    }

    .blog-comments-form .btn {
        height: 70px;
        line-height: 70px
    }

    .blog-tags ul li a {
        position: relative;
        font-size: 14px;
        padding-right: 5px;
        color: #21cdc0
    }

    .blog-tags ul li a:hover {
        color: #213360
    }

    .blog-tags ul li a:before {
        content: ',';
        position: absolute;
        top: -2px;
        right: 1px;
        color: #21cdc0
    }

    .blog-tags ul li:last-child a:before {
        display: none
    }

    @media (min-width:1200px) {
        .blog-single .post-item .post__title {
            font-size: 40px
        }

        .blog-single .post-item .post__desc p {
            font-size: 16px;
            line-height: 1.7;
            margin-bottom: 25px
        }

        .blog-single .post-item .post__body {
            margin-top: -35px;
            background-color: #fff;
            border-top-right-radius: 30px;
            margin-right: 40px
        }

        .blog-single .post-item .post__meta-cat {
            position: relative;
            z-index: 6;
            top: -15px
        }
    }

    @media (min-width:768px) {

        .widget-nav__next {
            text-align: right;
            -webkit-box-orient: horizontal;
            -webkit-box-direction: reverse;
            -ms-flex-direction: row-reverse;
            flex-direction: row-reverse
        }
    }

    @media (min-width:320px) and (max-width:767px) {
        .post-item {
            margin-bottom: 15px
        }

        .post-item .post__title {
            font-size: 17px;
            margin-bottom: 10px
        }

        .comments-list .comment__item .comment__avatar {
            width: 40px;
            height: 40px
        }

        .comments-list .comment__item .comment__content {
            padding-left: 50px
        }

        .comments-list .comment__item .comment__content .comment__desc {
            font-size: 13px
        }

        .widget-nav {
            -webkit-box-orient: vertical;
            -webkit-box-direction: normal;
            -ms-flex-direction: column;
            flex-direction: column
        }

        .widget-nav .widget-nav__img {
            max-width: 70px;
            -webkit-box-flex: 0;
            -ms-flex: 0 0 70px;
            flex: 0 0 70px
        }

        .widget-nav .widget-nav__img:before {
            display: none
        }

        .widget-nav .widget-nav__next,
        .widget-nav .widget-nav__prev {
            max-width: 100%;
            padding: 15px
        }

        .widget-nav .widget-nav__prev {
            margin-bottom: 10px
        }

        .comments-list .comment__item .nested__comment {
            padding: 20px 0 0 0;
            margin: 20px 0 0 40px
        }

        .bordered-box .blog-share,
        .bordered-box .blog-tags {
            padding: 10px
        }

        .blog-carousel .heading-wrapper {
            margin-bottom: 60px !important
        }

        .blog-carousel .btn__explore {
            position: relative;
            right: 0
        }

        .blog-carousel .heading__title {
            font-size: 18px
        }

        .blog-carousel .slick-arrow {
            top: -30px
        }
    }

    @media (min-width:320px) and (max-width:575px) {
        .blog-author {
            -webkit-box-orient: vertical;
            -webkit-box-direction: normal;
            -ms-flex-direction: column;
            flex-direction: column;
            padding: 20px
        }

        .blog-author:after {
            top: 20px;
            bottom: 20px
        }

        .blog-author .blog-author__avatar,
        .blog-author .blog-author__content {
            -webkit-box-flex: 100%;
            -ms-flex: 100%;
            flex: 100%;
            max-width: 100%
        }
    }

    .contact-info .boxes-wrapper {
        position: relative;
        z-index: 3;
        margin-top: -40px;
        overflow: hidden;
        border-radius: 10px
    }

    .contact-info .boxes-wrapper>[class*=col-]:nth-of-type(1) .contact-box {
        background-color: #21cdc0
    }

    .contact-info .boxes-wrapper>[class*=col-]:nth-of-type(2) .contact-box {
        background-color: #3851a2
    }

    .contact-info .boxes-wrapper>[class*=col-]:nth-of-type(3) .contact-box {
        background-color: #2d4990
    }

    .contact-info .contact-box {
        position: relative;
        padding: 45px;
        height: 100%
    }

    .contact-info .contact-box .contact__title {
        font-size: 19px
    }

    .contact-info .contact-box .contact__icon {
        font-size: 50px;
        -webkit-box-flex: 0;
        -ms-flex: 0 0 80px;
        flex: 0 0 80px;
        max-width: 80px
    }

    .contact-info .contact-box .contact__desc,
    .contact-info .contact-box .contact__icon,
    .contact-info .contact-box .contact__title,
    .contact-info .contact-box .time__list li {
        color: #fff
    }

    .contact-info .contact-box .phone__number {
        font-size: 23px;
        margin-top: 5px;
        font-weight: 600;
        color: #fff !important
    }

    .contact-info .contact-box .phone__number .icon-phone {
        font-size: 17px;
        width: 40px;
        height: 40px;
        line-height: 40px;
        border-radius: 50%;
        text-align: center;
        margin-right: 10px;
        background-color: #1ebaae
    }

    .contact-info .contact-box .btn__white.btn__outlined {
        height: 42px;
        border: 1px solid rgba(255, 255, 255, .25)
    }

    .contact-panel {
        position: relative;
        z-index: 2;
        padding: 60px;
        border-radius: 20px;
        background-color: #fff;
        -webkit-box-shadow: 0 5px 83px 0 rgba(9, 29, 62, .1);
        box-shadow: 0 5px 83px 0 rgba(9, 29, 62, .1)
    }

    .contact-panel__title {
        font-size: 24px
    }

    .contact-panel__desc {
        font-size: 15px;
        line-height: 25px
    }

    textarea.form-control {
        min-height: 120px;
        padding-top: 16px
    }

    .contact-layout1 .contact-panel__info,
    .contact-layout2 .contact-panel__info {
        position: relative;
        padding: 55px 60px;
        border-radius: 20px;
        overflow: hidden;
        -webkit-box-flex: 0;
        -ms-flex: 0 0 38%;
        flex: 0 0 38%;
        max-width: 38%
    }

    .contact-layout1 .contact-panel__info:after,
    .contact-layout2 .contact-panel__info:after {
        content: '';
        position: absolute;
        top: 55px;
        bottom: 55px;
        left: 0;
        width: 3px;
        background-color: #213360
    }

    .contact-layout1 .contact-panel__info .contact__list li,
    .contact-layout2 .contact-panel__info .contact__list li {
        color: #fff;
        font-weight: 700;
        font-size: 14px;
        margin-bottom: 10px
    }

    .contact-layout1 .contact-panel__info .contact__list li a,
    .contact-layout2 .contact-panel__info .contact__list li a {
        color: #fff
    }

    .contact-layout1 .contact-panel__info .contact__list li i,
    .contact-layout2 .contact-panel__info .contact__list li i {
        margin-right: 8px
    }

    .contact-layout1 .contact-panel__info .contact-panel__title,
    .contact-layout2 .contact-panel__info .contact-panel__title {
        font-size: 30px
    }
    .contact-panel__form input[type="file"] {
        cursor: pointer !Important;
        color:#9e9e9e;
    }
    .contact-panel__form input[type="file"]::-webkit-file-upload-button{
        font: 300 12-3px  sans-serif;
        background: #21cdc0;
        border: 0;
        padding: 12px 25px;
        cursor: pointer;
        color: #fff;
        border-radius:10px;

    }
    .contact-panel__form  input[type="file"]::-ms-browse {
        font: 300 13px 'Roboto', sans-serif;
        background: #21cdc0;
        border: 0;
        padding: 12px 25px;
        cursor: pointer;
        border-radius:10px;
        color: #fff;
    }
    .contact-layout1 .contact-panel__form,
    .contact-layout2 .contact-panel__form {
        -webkit-box-flex: 0;
        -ms-flex: 0 0 62%;
        flex: 0 0 62%;
        max-width: 62%
    }

    .contact-layout3 .text__block {
        margin-top: 50px;
        padding-top: 45px;
        border-top: 2px solid rgba(231, 235, 239, .3)
    }

    .contact-layout3 .text__block .text__block-desc {
        font-size: 17px
    }

    .contact-layout4 {
        padding: 50px;
        overflow: hidden;
        border-radius: 20px
    }

    .contact-layout5 .list-items-light.list-items-layout2 li:before {
        color: #213360;
        border-color: #fff;
        background-color: #fff
    }

    @media (min-width:1300px) {
        .contact-layout5 {
            margin-right: 50px;
            margin-left: 50px;
            overflow: hidden;
            border-radius: 20px
        }
    }

    @media (min-width:1200px) {

        .contact-layout1 .contact-panel__form,
        .contact-layout2 .contact-panel__form {
            padding-right: 70px
        }

        .contact-layout3 .contact-panel {
            margin-right: 30px
        }

        .contact-layout5 .contact-panel {
            margin-left: 30px
        }
    }

    @media (max-width:992px) {
        .contact-info .contact-box {
            padding: 25px
        }

        .contact-panel {
            padding: 20px
        }

        .contact-panel .contact-panel__desc {
            font-size: 13px;
            line-height: 23px
        }

        .contact-layout1 .contact-panel__info,
        .contact-layout2 .contact-panel__info {
            padding: 20px;
            margin-top: 30px
        }

        .contact-layout1 .contact-panel__info:after,
        .contact-layout2 .contact-panel__info:after {
            top: 20px;
            bottom: 20px
        }

        .contact-layout1 .contact-panel__form,
        .contact-layout1 .contact-panel__info,
        .contact-layout2 .contact-panel__form,
        .contact-layout2 .contact-panel__info {
            -webkit-box-flex: 0;
            -ms-flex: 0 0 100%;
            flex: 0 0 100%;
            max-width: 100%
        }
    }

    @media (min-width:320px) and (max-width:767px) {
        .contact-info .boxes-wrapper {
            margin-top: -20px
        }

        .contact-info .boxes-wrapper .contact-box {
            padding: 15px
        }

        .contact-info .boxes-wrapper .contact-box .contact__icon {
            font-size: 40px;
            -webkit-box-flex: 0;
            -ms-flex: 0 0 50px;
            flex: 0 0 50px;
            max-width: 50px
        }

        .contact-info .boxes-wrapper .contact-box .contact__title {
            font-size: 16px;
            margin-bottom: 10px
        }
    }

    .pricing-package {
        position: relative;
        display: -webkit-box;
        display: -ms-flexbox;
        display: flex;
        -webkit-box-orient: vertical;
        -webkit-box-direction: normal;
        -ms-flex-direction: column;
        flex-direction: column;
        -webkit-box-pack: justify;
        -ms-flex-pack: justify;
        justify-content: space-between;
        height: calc(100% - 30px);
        padding: 45px 50px 50px;
        background-color: #fff;
        -webkit-box-shadow: 0 5px 83px rgba(14, 32, 77, .15);
        box-shadow: 0 5px 83px rgba(14, 32, 77, .15);
        -webkit-transition: all .3s ease;
        transition: all .3s ease;
        margin-bottom: 30px
    }

    .pricing-package .package__title {
        color: #21cdc0;
        font-size: 16px;
        margin-bottom: 15px
    }

    .pricing-package .package__price {
        font-family: Quicksand, sans-serif;
        font-size: 50px;
        font-weight: 600;
        color: #435ba1;
        line-height: 1;
        margin-bottom: 20px
    }

    .pricing-package .package__period {
        font-size: 14px;
        font-weight: 600
    }

    .pricing-package .package__desc {
        font-size: 14px;
        margin-bottom: 44px
    }

    .pricing-package .package__list {
        margin-bottom: 50px
    }

    .pricing-package .package__list li {
        margin-bottom: 13px
    }

    .pricing-package .package__list li:before {
        width: 22px;
        height: 22px;
        line-height: 22px
    }

    .pricing-package .package__footer {
        text-align: center;
        border-radius: 10px;
        padding: 32px 20px 40px;
        background-color: #def8f6
    }

    .packages-wrapper {
        position: relative;
        z-index: 2;
        margin-top: -130px;
        border-radius: 15px
    }

    [class*=pricing-widget-layout] {
        padding: 40px;
        border-radius: 12px
    }

    [class*=pricing-widget-layout] .pricing__title {
        font-size: 19px
    }

    [class*=pricing-widget-layout] .pricing__list li {
        display: -webkit-box;
        display: -ms-flexbox;
        display: flex;
        -webkit-box-pack: justify;
        -ms-flex-pack: justify;
        justify-content: space-between;
        -webkit-box-align: center;
        -ms-flex-align: center;
        align-items: center;
        font-weight: 700;
        font-size: 15px;
        padding-bottom: 10px;
        margin-bottom: 10px;
        border-bottom: 1px solid #dcdee2
    }

    [class*=pricing-widget-layout] .pricing__list li:last-child {
        padding-bottom: 0;
        margin-bottom: 0;
        border-bottom: 0
    }

    [class*=pricing-widget-layout] .pricing__list li .price {
        line-height: 1;
        padding: 6px 10px;
        border-radius: 5px
    }

    .pricing-widget-layout1 {
        background-color: #def8f6
    }

    .pricing-widget-layout1 .pricing__list li .price {
        color: #fff;
        background-color: #21cdc0
    }

    .pricing-widget-layout2 {
        border: 2px solid #e6e8eb
    }

    .pricing-widget-layout2 .pricing__list li .price {
        color: #fff;
        background-color: #213360
    }

    .pricing-widget-layout3 {
        background-color: #f6f6f6
    }

    .pricing-widget-layout3 .pricing__list li .price {
        color: #fff;
        background-color: #213360
    }

    .widget-plan {
        border-radius: 13px;
        border: 2px solid #e6e8eb
    }

    .widget-plan .widget__body {
        padding: 50px
    }

    .widget-plan .widget__footer {
        padding: 50px;
        border-top: 2px solid #e6e8eb
    }

    .widget-plan .plan__items {
        padding: 30px;
        border-radius: 10px;
        background-color: #def8f6
    }

    .widget-plan .plan__items li {
        color: #213360
    }

    .widget-plan .plan__price {
        line-height: 1;
        font-size: 50px;
        color: #435ba1
    }

    .widget-plan .plan__price .period {
        font-size: 14px
    }

    @media (min-width:992px) {
        .packages-wrapper>[class*=col-]:first-of-type .pricing-package {
            border-radius: 15px 0 0 15px
        }

        .packages-wrapper>[class*=col-]:last-of-type .pricing-package {
            border-radius: 0 15px 15px 0
        }
    }

    @media (max-width:992px) {
        .pricing-package {
            height: auto;
            padding: 20px;
            border-radius: 10px
        }

        .pricing-package .package__title {
            margin-bottom: 10px
        }

        .pricing-package .package__price {
            font-size: 40px;
            margin-bottom: 10px
        }

        .pricing-package .package__desc {
            margin-bottom: 20px
        }

        .pricing-package .package__list {
            margin-bottom: 30px
        }

        .pricing-package .package__footer {
            border-radius: 10px;
            padding: 17px 10px 20px
        }

        [class*=pricing-widget-layout] {
            padding: 20px;
            border-radius: 8px
        }

        [class*=pricing-widget-layout] .pricing__title {
            font-size: 16px
        }

        [class*=pricing-widget-layout] .pricing__list li {
            font-size: 14px
        }

        [class*=pricing-widget-layout] .pricing__list li .price {
            padding: 3px 6px
        }
    }

    .sidebar.sticky-top {
        top: 100px
    }

    .widget {
        position: relative;
        padding: 40px;
        overflow: hidden;
        border-radius: 10px;
        margin-bottom: 40px;
        background-color: #def8f6
    }

    .widget:after {
        content: '';
        position: absolute;
        top: 40px;
        bottom: 40px;
        left: 0;
        width: 3px;
        background-color: #21cdc0
    }

    .widget:last-child {
        margin-bottom: 0
    }

    .widget .widget__title {
        font-size: 19px;
        margin-bottom: 23px
    }

    .widget-search .widget__form-search {
        position: relative
    }

    .widget-search .widget__form-search .form-control {
        height: 55px
    }

    .widget-search .widget__form-search .form-control:focus {
        border-color: #21cdc0
    }

    .widget-search .widget__form-search .btn {
        position: absolute;
        top: 0;
        right: 20px;
        width: auto;
        color: #21cdc0;
        padding: 0;
        min-width: 0;
        height: 55px;
        line-height: 55px
    }

    .widget-search .widget__form-search .btn:before {
        display: none
    }

    .widget-search .widget__form-search .btn:hover {
        color: #213360
    }

    .widget-categories ul li {
        margin-bottom: 11px
    }

    .widget-categories ul li:last-child {
        margin-bottom: 0
    }

    .widget-categories ul li a {
        position: relative;
        display: -webkit-box;
        display: -ms-flexbox;
        display: flex;
        -webkit-box-align: center;
        -ms-flex-align: center;
        align-items: center;
        color: #213360;
        font-family: Quicksand, sans-serif;
        font-size: 15px;
        font-weight: 700;
        text-transform: capitalize;
        -webkit-transition: all .3s linear;
        transition: all .3s linear
    }

    .widget-categories ul li a:hover {
        color: #21cdc0
    }

    .widget-categories ul li a .cat-count {
        font-size: 13px;
        font-weight: 400;
        width: 24px;
        height: 24px;
        line-height: 24px;
        border-radius: 50%;
        text-align: center;
        margin-right: 15px;
        border: 1px solid #e6e8eb;
        color: #21cdc0;
        background-color: #fff
    }

    .widget-services ul li {
        margin-bottom: 4px
    }

    .widget-services ul li:last-child {
        margin-bottom: 0
    }

    .widget-services ul li a {
        position: relative;
        display: -webkit-box;
        display: -ms-flexbox;
        display: flex;
        -webkit-box-align: center;
        -ms-flex-align: center;
        align-items: center;
        -webkit-box-pack: justify;
        -ms-flex-pack: justify;
        justify-content: space-between;
        font-size: 15px;
        font-weight: 700;
        padding: 22px 30px;
        text-transform: capitalize;
        border-radius: 50px;
        font-family: Quicksand, sans-serif;
        color: #213360;
        background-color: #fff;
        -webkit-transition: all .4s ease;
        transition: all .4s ease
    }

    .widget-services ul li a:hover {
        color: #fff;
        background-color: #21cdc0
    }

    .widget-tags ul {
        display: -ms-flexbox;
        display: -webkit-box;
        display: flex;
        -ms-flex-wrap: wrap;
        flex-wrap: wrap
    }

    .widget-tags ul li a {
        display: block;
        font-size: 14px;
        line-height: 1;
        text-transform: capitalize;
        padding: 6px 10px;
        margin: 0 10px 10px 0;
        border-radius: 6px;
        border: 1px solid #e6e8eb;
        color: #21cdc0;
        background-color: #fff;
        -webkit-transition: all .4s ease;
        transition: all .4s ease
    }

    .widget-tags ul li a:hover {
        color: #fff;
        border-color: #21cdc0;
        background-color: #21cdc0
    }

    .widget-post-item {
        margin-bottom: 25px
    }

    .widget-post-item:last-of-type {
        margin-bottom: 0
    }

    .widget-post-item .widget-post__title {
        font-size: 16px;
        margin-bottom: 0
    }

    .widget-post-item .widget-post__title a {
        color: #0e204d
    }

    .widget-post-item:hover .widget-post__title a {
        color: #21cdc0
    }

    .widget-post-item .widget-post__img {
        -webkit-box-flex: 0;
        -ms-flex: 0 0 80px;
        flex: 0 0 80px;
        max-width: 80px;
        margin-right: 15px
    }

    .widget-post-item .widget-post__img img {
        border-radius: 5px
    }

    .widget-post-item .widget-post__date {
        line-height: 1;
        font-size: 13px;
        margin-bottom: 4px
    }

    .widget-poducts .widget-product-item {
        margin-bottom: 20px
    }

    .widget-poducts .widget-product-item:last-of-type {
        margin-bottom: 0
    }

    .widget-poducts .widget-product-item .widget-product__title {
        font-size: 15px;
        margin-bottom: 0
    }

    .widget-poducts .widget-product-item .widget-product__title a {
        color: #0e204d
    }

    .widget-poducts .widget-product-item:hover .widget-product__title a {
        color: #21cdc0
    }

    .widget-poducts .widget-product-item .widget-product__img {
        margin-right: 20px;
        -webkit-box-flex: 0;
        -ms-flex: 0 0 50px;
        flex: 0 0 50px;
        max-width: 50px;
        height: 50px;
        overflow: hidden;
        border-radius: 2px
    }

    .widget-poducts .widget-product-item .widget-product__img img {
        border-radius: 5px
    }

    .widget-poducts .widget-product-item .widget-product__price {
        color: #21cdc0;
        font-size: 15px;
        font-weight: 700
    }

    .widget-help .widget__icon {
        font-size: 55px;
        margin-bottom: 4px
    }

    .widget-help .widget__desc,
    .widget-help .widget__icon,
    .widget-help .widget__title {
        color: #fff
    }

    .widget-help .phone__number {
        font-size: 24px;
        margin-top: 5px;
        color: #fff !important
    }

    .widget-help .phone__number .icon-phone {
        font-size: 17px;
        width: 40px;
        height: 40px;
        line-height: 40px;
        border-radius: 50%;
        text-align: center;
        margin-right: 10px;
        background-color: #3851a2
    }

    .widget-schedule {
        background-color: #f6f6f6
    }

    .widget-schedule .widget__icon {
        color: #213360;
        font-size: 50px;
        margin-bottom: 6px
    }

    .time__list li {
        display: -webkit-box;
        display: -ms-flexbox;
        display: flex;
        -webkit-box-pack: justify;
        -ms-flex-pack: justify;
        justify-content: space-between;
        padding-bottom: 10px;
        margin-bottom: 10px;
        border-bottom: 1px solid #dcdee2
    }

    .time__list li:last-child {
        margin-bottom: 0;
        border-bottom: 0
    }

    .widget-member {
        padding: 0;
        overflow: visible
    }

    .widget-member:after {
        display: none
    }

    .widget-member .member {
        z-index: 3;
        -webkit-box-shadow: 0 5px 83px 0 rgba(9, 29, 62, .15);
        box-shadow: 0 5px 83px 0 rgba(9, 29, 62, .15)
    }

    .widget-member .member:before {
        -webkit-transform: scaleX(1);
        transform: scaleX(1)
    }

    .widget-member .member .social-icons li {
        opacity: 1
    }

    .widget-reports {
        padding: 0;
        background-color: transparent
    }

    .widget-reports:after {
        display: none
    }

    .widget-reports .btn {
        display: -webkit-box;
        display: -ms-flexbox;
        display: flex;
        -webkit-box-align: center;
        -ms-flex-align: center;
        align-items: center;
        height: 90px;
        line-height: 88px;
        border-radius: 10px;
        font-size: 17px;
        font-family: Quicksand, sans-serif
    }

    .widget-reports .btn:before {
        display: none
    }

    .widget-reports .btn i {
        width: 50px;
        height: 50px;
        line-height: 50px;
        color: #fff;
        font-size: 24px;
        border-radius: 8px;
        margin-right: 10px;
        -webkit-transition: all .3s ease;
        transition: all .3s ease
    }

    .widget-reports .btn__primary i {
        background-color: #213360
    }

    .widget-reports .btn__primary:hover {
        background-color: #213360
    }

    .widget-reports .btn__primary:hover i {
        background-color: #21cdc0
    }

    .widget-filter .ui-slider {
        background-color: rgba(34, 34, 34, .06);
        border-radius: 0;
        height: 4px;
        margin-bottom: 18px
    }

    .widget-filter .ui-slider-range {
        height: 4px;
        background-color: #21cdc0
    }

    .widget-filter .price-output {
        -webkit-box-flex: 0;
        -ms-flex: 0 0 50%;
        flex: 0 0 50%;
        max-width: 50%
    }

    .widget-filter label {
        color: #848e9f;
        font-size: 14px;
        margin-bottom: 0
    }

    .widget-filter input {
        background-color: transparent;
        color: #21cdc0;
        font-size: 14px;
        border: none
    }

    .widget-filter .btn__filter {
        font-size: 14px;
        font-weight: 700;
        color: #0e204d
    }

    .ui-slider {
        position: relative
    }

    .ui-state-default,
    .ui-widget-content .ui-state-default,
    .ui-widget-header .ui-state-default,
    .ui-widget.ui-widget-content {
        border: none
    }

    .ui-slider.ui-state-disabled .ui-slider-handle,
    .ui-slider.ui-state-disabled .ui-slider-range {
        -webkit-filter: inherit;
        filter: inherit
    }

    .ui-slider-horizontal .ui-slider-handle {
        top: 50%;
        -webkit-transform: translateY(-50%);
        transform: translateY(-50%);
        margin: 0;
        width: 10px;
        height: 10px;
        border-radius: 4px;
        background-color: #21cdc0
    }

    .ui-slider-horizontal .ui-slider-range-min {
        left: 0
    }

    .ui-slider-horizontal .ui-slider-range-max {
        right: 0
    }

    .sidebar-layout2 .widget {
        padding: 0;
        background-color: transparent
    }

    .sidebar-layout2 .widget:after {
        display: none
    }

    @media (min-width:1200px) {
        .sidebar.has-marign-right {
            margin-right: 40px
        }

        .sidebar.has-marign-left {
            margin-left: 40px
        }

        .widget-member.shifted-top {
            margin-top: -450px
        }
    }

    @media (min-width:320px) and (max-width:992px) {
        .widget {
            padding: 20px;
            margin-bottom: 30px
        }

        .widget:after {
            top: 20px;
            bottom: 20px
        }
    }

    @media (min-width:320px) and (max-width:767px) {
        .widget {
            padding: 15px
        }

        .widget:after {
            top: 15px;
            bottom: 15px
        }

        .widget .widget__title {
            margin-bottom: 20px
        }

        .widget-categories ul {
            padding: 0
        }

        .widget-categories ul li a {
            font-size: 13px
        }
    }

    .about__img {
        position: relative
    }

    .about__img img {
        border-radius: 5px
    }

    .about-layout1 .about__Text,
    .about-layout4 .about__Text {
        padding: 0 40px
    }
    .about-layout1 .about__Text i,  .trans-name, .trans-num{
        color:#21cdc0;
    }
    .about-layout1 .transport{
        text-align: center;
    }
    .about-layout1 .about__Text p,h5{
        font-size: 20px;
        text-align: left !important;
    }



    .about-layout1 .about__Text p,
    .about-layout4 .about__Text p {
        font-size: 16px;
        display: -webkit-box;
    -webkit-line-clamp: 5;
    -webkit-box-orient: vertical;
    overflow: hidden;
        color: #213360
    }

    .about-layout1 .about__Text p:first-of-type,
    .about-layout4 .about__Text p:first-of-type {
        position: relative;
        font-weight: 600
    }

    .about-layout1 .about__Text p:first-of-type:before,
    .about-layout4 .about__Text p:first-of-type:before {
        content: '';
        position: absolute;
        top: 5px;
        bottom: 5px;
        left: -40px;
        width: 2px;
        background-color: #213360
    }

    .about-layout4 .video-banner .video__btn {
        top: auto;
        left: 50px;
        bottom: 50px;
        -webkit-transform: translate(0);
        transform: translate(0)
    }

    .about-layout2 .text-with-icon .text__icon {
        color: #21cdc0;
        font-size: 50px
    }

    .about-layout2 .video-banner-layout2 {
        margin-bottom: 20px
    }

    .about-layout3 .experience__years {
        font-size: 160px;
        font-weight: 400;
        line-height: 1;
        margin-bottom: 10px
    }

    .about-layout3 .experience__text {
        font-size: 16px
    }

    .about-layout3 .text__icon {
        font-size: 65px;
        color: #21cdc0
    }

    .about-layout5 .list-items li {
        padding-left: 30px;
        line-height: 1.7;
        margin-bottom: 14px
    }

    .about-layout5 .list-items li:before {
        top: 3px;
        font-size: 14px
    }

    .about-layout5 .map-wrapper {
        position: relative
    }

    .about-layout5 .tooltip-box {
        position: absolute
    }

    .about-layout5 .tooltip-box:nth-of-type(1) {
        top: 28%;
        left: 15%
    }

    .about-layout5 .tooltip-box:nth-of-type(2) {
        top: 15%;
        right: 18%
    }

    .about-layout5 .tooltip-box:nth-of-type(3) {
        top: 50%;
        left: 46%
    }

    .about-layout5 .tooltip-box .tooltip__icon {
        position: relative;
        bottom: 0;
        left: 0;
        -webkit-transition: all .3s linear 0s;
        transition: all .3s linear 0s;
        width: 28px;
        height: 28px;
        line-height: 28px;
        text-align: center;
        border-radius: 50%;
        font-size: 11px;
        color: #fff;
        background-color: #21cdc0
    }

    .about-layout5 .tooltip-box .tooltip__panel {
        position: absolute;
        opacity: 0;
        bottom: 45px;
        left: -15px;
        z-index: 3;
        width: 180px;
        border-radius: 10px;
        visibility: hidden;
        margin-bottom: -20px;
        padding: 15px 20px;
        background-color: #fff;
        -webkit-transition: all .3s linear 0s;
        transition: all .3s linear 0s;
        -webkit-box-shadow: 0 5px 83px 0 rgba(9, 29, 62, .15);
        box-shadow: 0 5px 83px 0 rgba(9, 29, 62, .15)
    }

    .about-layout5 .tooltip-box .tooltip__panel:after {
        content: '';
        position: absolute;
        bottom: -10px;
        left: 30px;
        border-bottom: 10px solid transparent;
        border-left: 12px solid #fff
    }

    .about-layout5 .tooltip-box.tooltip-hover-left .tooltip__panel {
        right: -15px;
        left: auto
    }

    .about-layout5 .tooltip-box.tooltip-hover-left .tooltip__panel:after {
        left: auto;
        right: 30px;
        border-left: 0;
        border-right: 12px solid #fff
    }

    .about-layout5 .tooltip-box:hover .tooltip__panel {
        opacity: 1;
        visibility: visible;
        margin-bottom: 0
    }

    .info-card {
        position: relative;
        z-index: 2;
        padding: 50px;
        border-radius: 15px;
        margin-bottom: -50px;
        background-color: #fff;
        -webkit-box-shadow: 0 5px 83px 0 rgba(9, 29, 62, .15);
        box-shadow: 0 5px 83px 0 rgba(9, 29, 62, .15)
    }

    .info-card:after {
        content: '';
        position: absolute;
        top: 50px;
        bottom: 50px;
        left: 0;
        width: 3px;
        background-color: #213360
    }

    .info-card .info__ttile {
        font-size: 25px
    }

    .info-card .testimonials__rating {
        max-width: 250px;
        padding: 0
    }

    .info-card .testimonials__rating:before {
        display: none
    }

    .info-card .testimonials__rating .overall__rate,
    .info-card .testimonials__rating .total__rate {
        color: #213360
    }

    .info-card .info__meta {
        padding-top: 45px;
        border-top: 2px solid #e6e8eb
    }

    .notes .note {
        display: -webkit-box;
        display: -ms-flexbox;
        display: flex;
        padding: 15px;
        border-radius: 30px;
        -webkit-box-shadow: 0 5px 83px 0 rgba(9, 29, 62, .15);
        box-shadow: 0 5px 83px 0 rgba(9, 29, 62, .15)
    }

    .notes .note>i {
        font-size: 20px;
        margin-right: 8px
    }

    .notes .note .btn {
        font-size: 14px
    }

    .notes .testimonials__rating {
        max-width: 250px;
        padding: 0
    }

    .notes .testimonials__rating:before {
        display: none
    }

    .notes .testimonials__rating .overall__rate,
    .notes .testimonials__rating .total__rate {
        color: #213360
    }

    .notes .btn:not(.btn__link) {
        height: 50px
    }

    @media (min-width:1200px) {
        .about-layout2+.services-layout1 {
            padding-top: 200px
        }

        .about-layout2 .text-with-icon {
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
            -ms-flex-wrap: wrap;
            flex-wrap: wrap
        }

        .about-layout2 .text-with-icon .text__icon {
            -webkit-box-flex: 0;
            -ms-flex: 0 0 100px;
            flex: 0 0 100px;
            max-width: 100px
        }

        .about-layout2 .text-with-icon .text__content {
            -webkit-box-flex: 0;
            -ms-flex: 0 0 calc(100% - 100px);
            flex: 0 0 calc(100% - 100px);
            max-width: calc(100% - 100px)
        }

        .about-layout2 .about__text {
            position: relative;
            z-index: 4;
            border-radius: 20px;
            padding: 0 0 90px 90px
        }

        .about-layout2 .video-banner-layout2 {
            position: absolute;
            z-index: 3;
            width: 135%;
            border-radius: 20px
        }

        .about-layout2 .video-banner-layout2 .video__player {
            -webkit-box-shadow: none;
            box-shadow: none
        }

        .about-layout2 .video-banner-layout2 .video__btn {
            position: absolute;
            left: auto;
            right: 10px
        }

        .about-layout2 .video-banner-layout2 .video__btn-title {
            line-height: 1.3;
            max-width: 80px;
            text-align: left;
            white-space: normal
        }

        .about-layout3 .experience {
            margin-top: 80px
        }

        .about-layout3 .about__text,
        .about-layout3 .video-banner-layout2 {
            margin-left: 40px
        }

        .about-layout3 .video-banner-layout2 {
            z-index: 3;
            margin-bottom: -60px
        }

        .about-layout5 .about-text-wrapper {
            margin-left: 50px
        }

        .notes .testimonials__rating {
            margin-left: 90px
        }

        .notes .btn:not(.btn__link) {
            min-width: 210px
        }
    }

    @media (max-width:992px) {
        .about-layout5 .about__Text {
            padding-left: 20px
        }

        .about-layout5 .blockquote {
            padding: 20px;
            max-width: 300px
        }

        .about-layout5 .blockquote:before {
            right: 20px
        }

        .about-layout5 .blockquote:after {
            left: 20px;
            font-size: 40px
        }

        .about-layout5 .blockquote .blockquote__title {
            font-size: 14px;
            margin-bottom: 10px
        }

        .about-layout5 .blockquote .blockquote__author {
            font-size: 12px
        }

        .info-card {
            padding: 20px;
            margin-bottom: -20px
        }

        .info-card:after {
            top: 20px;
            bottom: 20px
        }

        .info-card .info__ttile {
            font-size: 20px
        }

        .info-card .info__meta {
            padding-top: 25px
        }
    }

    .service-item {
        position: relative;
        overflow: hidden;
        border-radius: 10px;
        margin-bottom: 30px;
        background-color: #fff;
        -webkit-box-shadow: 0 5px 83px 0 rgba(9, 29, 62, .05);
        box-shadow: 0 5px 83px 0 rgba(9, 29, 62, .05);
        -webkit-transition: all .4s ease;
        transition: all .4s ease
    }

    .service-item:before {
        content: '';
        position: absolute;
        bottom: 0;
        left: 40px;
        right: 40px;
        height: 3px;
        background-color: #435ba1;
        -webkit-transition: all .4s linear;
        transition: all .4s linear
    }

    .service-item .service__content {
        padding: 40px
    }

    .service-item .service__icon {
        color: #213360;
        font-size: 80px;
        line-height: 1;
        margin-bottom: 25px;
        -webkit-transition: all .3s linear;
        transition: all .3s linear
    }

    .service-item .service__icon i:nth-of-type(2) {
        position: absolute;
        right: -60px;
        font-size: 140px;
        opacity: .1;
        top: 100px
    }

    .service-item .service__title {
        font-size: 24px;
        margin-bottom: 31px;
        -webkit-transition: all .3s linear;
        transition: all .3s linear
    }

    .service-item .service__desc {
        font-size: 15px;
        margin-bottom: 32px;
        -webkit-transition: all .3s linear;
        transition: all .3s linear;
        display: -webkit-box;
    -webkit-line-clamp: 4;
    -webkit-box-orient: vertical;
    overflow: hidden;
    }

    .service-item .list-items {
        margin-bottom: 30px
    }

    .service-item .list-items li {
        margin-bottom: 15px
    }

    .service-item .btn:not(.btn__link) {
        height: 50px
    }

    .service-item .btn:hover {
        border-color: #21cdc0;
        background-color: #21cdc0
    }

    .service-item:hover {
        z-index: 5;
        -webkit-box-shadow: 0 5px 83px 0 rgba(40, 40, 40, .12);
        box-shadow: 0 5px 83px 0 rgba(40, 40, 40, .12)
    }

    .service-item:hover:before {
        background-color: #21cdc0
    }

    .services-layout1 .service-item {
        padding: 40px
    }

    .services-layout1 .service-item .service__content {
        padding: 0
    }

    .services-layout2 .service-item:before {
        background-color: #213360 !important;
        -webkit-transform: scaleX(0);
        transform: scaleX(0)
    }

    .services-layout2 .service-item .service__title {
        font-size: 23px;
        margin-bottom: 16px;
        display: -webkit-box;
    -webkit-line-clamp: 1;
    -webkit-box-orient: vertical;
    overflow: hidden;
    }

    .services-layout2 .service-item .service__img {
        overflow: hidden;
        border-radius: 8px
    }

    .services-layout2 .service-item .service__img img {
        -webkit-transition: all .9s ease;
        transition: all .9s ease
    }

    .services-layout2 .service-item .btn:hover {
        border-color: #213360;
        background-color: #213360
    }

    .services-layout2 .service-item:hover:before {
        -webkit-transform: scaleX(1);
        transform: scaleX(1)
    }

    .services-layout2 .service-item:hover .service__img img {
        -webkit-transform: scale(1.1) rotate(1deg);
        transform: scale(1.1) rotate(1deg)
    }

    .services-carousel.services-layout1 .service-item {
        -webkit-box-shadow: 0 5px 83px 0 rgba(9, 29, 62, .05);
        box-shadow: 0 5px 83px 0 rgba(9, 29, 62, .05)
    }

    .services-carousel.services-layout1 .service-item:hover {
        -webkit-box-shadow: 0 5px 83px 0 rgba(9, 29, 62, .15);
        box-shadow: 0 5px 83px 0 rgba(9, 29, 62, .15)
    }

    .services-carousel.services-layout1 .slick-dots {
        text-align: center
    }

    .services-carousel .slick-dots {
        margin-top: 40px;
        text-align: left
    }

    .services-carousel .slick-list {
        margin: -15px;
        overflow: visible
    }

    .services-carousel .slick-slide {
        margin: 15px;
        -webkit-transition: all .3s ease;
        transition: all .3s ease
    }

    .services-carousel .slick-slide.slick-active {
        opacity: 1;
        visibility: visible
    }

    .services-carousel .slick-slide:not(.slick-active) {
        opacity: 0;
        visibility: hidden
    }

    @media (min-width:1500px) {
        /* .services-carousel .carousel-container {
            margin-right: -250px
        } */
    }

    @media (min-width:1200px) {
        /* .services-carousel .carousel-container {
            margin-right: -170px
        } */

        .services-carousel .slick-arrow {
            top: -90px
        }

        .services-carousel .slick-arrow.slick-prev {
            left: 80%
        }

        .services-carousel .slick-arrow.slick-next {
            left: 85%
        }

        .services-carousel .service-item .service__desc {
            display: -webkit-box;
            -webkit-line-clamp: 4;
            -webkit-box-orient: vertical;
            overflow: hidden;
            text-overflow: ellipsis;
            white-space: normal
        }
    }

    @media (max-width:992px) {
        .service-item {
            padding: 20px
        }

        .service-item:before {
            left: 20px;
            right: 20px
        }

        .service-item .service__icon {
            font-size: 50px;
            margin-bottom: 10px
        }

        .service-item .service__title {
            font-size: 16px;
            margin-bottom: 10px
        }

        .service-item .service__desc {
            font-size: 13px;
            margin-bottom: 10px;

        }

        .services-layout2 .service-item {
            margin-bottom: 30px
        }

        .services-layout2 .service-item .service__content {
            padding: 15px 0 0 0
        }

        .services-layout3 .service-item {
            padding: 20px
        }
    }

  
    
    .gallery .slick-list {
        margin: 0;
        overflow: hidden;
        border-radius: 12px
    }

    .gallery .slick-slide {
        margin: 0
    }

    /* .gallery .slick-arrow.slick-next {
        right: -50px
    } */

    .gallery .slick-arrow.slick-prev {
        left: -50px
    }

    .gallery-layout2 .gallery-img {
        position: relative;
        margin-bottom: 30px
    }

    .gallery-layout2 .gallery-img img {
        border-radius: 10px
    }

    .gallery-layout2 .gallery-img .popup-gallery-item {
        position: absolute;
        top: 50%;
        left: 50%;
        z-index: 2;
        width: 60px;
        height: 60px;
        font-size: 18px;
        line-height: 60px;
        border-radius: 50%;
        text-align: center;
        color: #213360;
        background-color: #fff;
        -webkit-box-shadow: 0 0 0 9px rgba(0, 0, 0, .15);
        box-shadow: 0 0 0 9px rgba(0, 0, 0, .15);
        -webkit-transition: all .4s ease;
        transition: all .4s ease;
        -webkit-transform: translate(-50%, -50%);
        transform: translate(-50%, -50%)
    }

    .gallery-layout2 .gallery-img .popup-gallery-item:hover {
        -webkit-box-shadow: 0 0 0 11px rgba(0, 0, 0, .15);
        box-shadow: 0 0 0 11px rgba(0, 0, 0, .15)
    }

    @media (min-width:320px) and (max-width:575px) {
        .gallery .slick-arrow.slick-next {
            right: 0
        }

        .gallery .slick-arrow.slick-prev {
            left: 0
        }
    }

   
    .cart-table .table {
        border-radius: 4px;
        margin-bottom: 0
    }

    .cart-table thead {
        background-color: transparent
    }

    .cart-table thead tr th {
        font-size: 15px;
        font-weight: 700;
        text-align: center;
        color: #0e204d;
        border-bottom-width: 0 !important;
        border-color: #e9e9e9;
        padding: 15px 0
    }

    .cart-table tbody tr td {
        padding: 15px;
        border-color: #e9e9e9;
        vertical-align: middle
    }

    .cart-table .cart-product {
        position: relative
    }

    .cart-table .cart-product__price,
    .cart-table .cart-product__total {
        font-size: 16px;
        font-weight: 700;
        color: #848e9f;
        text-align: center
    }

    .cart-table .cart-product__quantity {
        text-align: center
    }

    .cart-table .cart-product__img {
        width: 50px;
        margin-right: 20px
    }

    .cart-table .cart-product__title {
        font-size: 16px;
        margin-bottom: 0
    }

    .cart-table .cart-product__remove {
        width: 19px;
        height: 19px;
        line-height: 19px;
        font-size: 9px;
        background-color: #222;
        color: #fff;
        border-radius: 1px;
        text-align: center;
        cursor: pointer;
        margin-right: 20px
    }

    .cart-table .cart-product__remove:hover {
        background-color: #21cdc0
    }

    .cart-table .cart-product__action td {
        padding: 30px 20px 20px
    }

    .cart-table .cart-product__action td .form-control {
        font-size: 12px;
        font-weight: 400;
        width: 250px;
        height: 42px;
        border-radius: 4px;
        border: 1px solid #dbdbdb
    }

    .cart-table .cart-product__action td .btn {
        line-height: 42px;
        height: 42px;
        min-width: 134px
    }

    .cart__total-amount ul li {
        font-size: 13px;
        line-height: 36px;
        display: -webkit-box;
        display: -ms-flexbox;
        display: flex;
        -webkit-box-pack: justify;
        -ms-flex-pack: justify;
        justify-content: space-between;
        border-bottom: 1px solid #e9e9e9
    }

    .cart__total-amount ul li span:first-of-type {
        font-weight: 600;
        color: #0e204d
    }

    @media (min-width:320px) and (max-width:575px) {
        .cart-table tbody tr td {
            padding: 5px
        }

        .cart-table .cart-product__img {
            width: 40px;
            margin-right: 5px
        }

        .cart-table .cart-product__title {
            font-size: 12px;
            font-weight: 400
        }

        .cart-table .cart-product__price,
        .cart-table .cart-product__total {
            font-size: 10px
        }

        .cart-table .cart-product__action-content {
            display: block !important
        }

        .cart-table .cart-product__price,
        .cart-table .cart-product__total {
            font-size: 10px;
            font-weight: 400;
            padding: 0
        }

        .cart-table thead tr th {
            font-size: 10px
        }
    }

    .process-item {
        position: relative;
        z-index: 2;
        padding: 40px;
        border-radius: 10px;
        background-color: #fff;
        -webkit-transition: all .3s ease;
        transition: all .3s ease
    }

    .process-item:before {
        content: '';
        position: absolute;
        top: 40px;
        bottom: 40px;
        left: 0;
        width: 3px;
        background-color: #21cdc0;
        -webkit-transform: scale(0);
        transform: scale(0);
        -webkit-transition: transform .4s linear;
        -webkit-transition: -webkit-transform .4s linear;
        transition: -webkit-transform .4s linear;
        transition: transform .4s linear;
        transition: transform .4s linear, -webkit-transform .4s linear
    }

    .process-item .process__number {
        position: absolute;
        top: 20px;
        right: 30px;
        font-family: Quicksand, sans-serif;
        font-size: 104px;
        font-weight: 700;
        line-height: 1;
        color: #eaedf5
    }

    .process-item .process__icon {
        position: relative;
        color: #354f8e;
        font-size: 55px;
        margin-bottom: 10px;
        -webkit-transition: color .4s linear;
        transition: color .4s linear
    }

    .process-item .process__title {
        font-size: 19px;
        margin-bottom: 30px
    }

    .process-item .process__desc {
        margin-bottom: 20px
    }

    .process-item:hover {
        -webkit-box-shadow: 0 5px 83px 0 rgba(9, 29, 62, .15);
        box-shadow: 0 5px 83px 0 rgba(9, 29, 62, .15);
        -webkit-transform: translateY(-20px);
        transform: translateY(-20px)
    }

    .process-item:hover:before {
        -webkit-transform: scale(1);
        transform: scale(1)
    }

    .process-item:hover .process__icon {
        color: #21cdc0
    }

    .work-process .slick-list {
        margin: -15px;
        overflow: visible
    }

    .work-process .slick-slide {
        margin: 15px;
        -webkit-transition: all .3s ease;
        transition: all .3s ease
    }

    .work-process .slick-slide.slick-active {
        opacity: 1;
        visibility: visible
    }

    .work-process .slick-slide:not(.slick-active) {
        opacity: 0;
        visibility: hidden
    }

    .work-process .cta {
        padding-top: 140px;
        padding-bottom: 70px;
        margin-top: -70px
    }

    .work-process .cta .cta__title {
        color: #fff;
        font-size: 27px
    }

    .work-process .cta .cta__desc {
        font-size: 16px;
        color: #fff
    }

    .work-process .cta .btn:not(.btn__link) {
        height: 50px
    }

    @media (min-width:1500px) {
        /* .work-process .carousel-container {
            margin-right: -200px
        } */

        .work-process .process-item .process__title {
            padding-right: 40px
        }
    }

    @media (min-width:1200px) {
        /* .work-process .carousel-container {
            margin-right: -140px
        } */

        .work-process .cta .cta__title {
            padding: 0 30px
        }

        .work-process .cta .cta__desc {
            padding: 0 30px;
            margin-bottom: 0
        }
    }

    @media (min-width:320px) and (max-width:767px) {
        .process-item {
            padding: 20px
        }

        .process-item:before {
            top: 20px;
            bottom: 20px
        }

        .process-item .process__number {
            top: 20px;
            right: 20px;
            font-size: 50px
        }
    }

    .progress-item {
        margin-bottom: 27px;
        overflow: hidden
    }

    .progress {
        background-color: #e9e9e9;
        border-radius: 6px;
        width: 100%;
        height: 6px;
        overflow: visible;
        position: relative
    }

    .progress-bar {
        overflow: visible;
        position: relative;
        border-radius: 6px;
        height: 6px;
        width: 0;
        background-color: #21cdc0;
        -webkit-transition: width 2s ease;
        transition: width 2s ease
    }

    .progress__title {
        position: relative;
        z-index: 2;
        font-size: 15px;
        font-weight: 700;
        line-height: 1;
        margin-bottom: 6px
    }

    .progress__percentage {
        font-size: 14px;
        font-weight: 700;
        line-height: 1;
        position: absolute;
        top: -18px;
        right: 0;
        color: #848e9f
    }
</style>