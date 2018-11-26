<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
    "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>

    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no">
    <meta name="theme-color" content="#212121">
    <meta name="apple-mobile-web-app-status-bar-style" content="#212121">

    <link href="{{ url('css/main_08162018.css') }}" type="text/css" rel="stylesheet"/>

    <link href="{{ url('css/main_1024px.css') }}" type="text/css" rel="stylesheet"/>
    <link href="{{ url('css/main_720px.css') }}" type="text/css" rel="stylesheet"/>
    <link href="{{ url('css/main_480px.css') }}" type="text/css" rel="stylesheet"/>
    <link href="{{ url('css/main_320px.css') }}" type="text/css" rel="stylesheet"/>
    <link href="{{ url('css/jquery-ui.css') }}" rel="stylesheet">
    <link rel="icon" href="{{ url('images/favicon.ico') }}" type="image/x-icon">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.2.0/css/all.css"
          integrity="sha384-hWVjflwFxL6sNzntih27bfxkr27PmbbK/iSvJ+a4+0owXq79v+lsFkW54bOGbiDQ" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i"
          rel="stylesheet">
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="{{ url('images/apple-icon.jpg') }}">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="{{ url('images/apple-icon.jpg') }}">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="{{ url('images/apple-icon.jpg') }}">
    <link rel="apple-touch-icon-precomposed" href="{{ url('images/apple-icon.jpg') }}">


    <script src="{{ url('js/jquery.js') }}"></script>
    <script src="{{ url('js/jquery-ui.js') }}"></script>
    <script src="{{ url('js/jquery.min.js') }}"></script>
    <script src="{{ url('js/jquery.mtRangeSlider.js') }}"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css"
          integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js"
            integrity="sha384-uefMccjFJAIv6A+rW+L4AHf99KvxDjWSu1z9VI8SKNVmz4sk7buKt/6v9KI65qnm"
            crossorigin="anonymous"></script>

    <script type="text/javascript" src="{{ url('js/parallax.js') }}" crossorigin="anonymous"></script>
    {{--<script type="text/javascript" src="https://isurucash.com/javascript/header_java_08222018.js"--}}
            {{--crossorigin="anonymous"></script>--}}


    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-126465894-1"></script>
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }

        gtag('js', new Date());

        gtag('config', 'UA-126465894-1');
    </script>

    <meta property="og:url" content="http://loan.dimuthuwebs.com">
    <meta property="og:image" content="{{ url('images/1.jpg') }}">
    <meta property="og:description" content="Apply for an instant Loan and pay back within 30 days !">
    <meta property="og:title" content="Fast 30 days instant loan in Sri Lanka">
    <meta property="og:site_name" content="Home - loan.dimuthuwebs.com">
    <style>

        .da-da.ApplicationSecondTimeSuccessIcon {
            font-size: 88px;
            text-align: center;
            color: #1fc716;
        }

        p#ApplicationSecondTimeSuccessTitleP {
            padding: 0;
            margin: 0;
            font-size: 15px;
            text-align: center;
        }

        .da-da.ApplicationSecondTimeSuccessTitle {
            margin-top: 30px;
            margin-bottom: 40px;
        }

        .da-da.ApplicationSecondTimeSuccessTitle, p#ApplicationSecondTimeSuccessTitleP {
            color: #666e7b;
        }

        .da-da.ApplicationSecondTimeSuccess {
            display: none;
        }

        .da-da.MainPopUpBlockDiv {
            margin-bottom: 50px;
        }

    </style>

    <script>

        //mobile toggle button
        $(document).ready(function () {
            $(".DisplayMobileMenu").click(function () {
                $(".mobileMenuBar").toggleClass("mobileMenuBarShow");
            });


        });
        //mobile toggle button
    </script>


    <script>

        $(document).on("click", ".OpenrepayModal", function (event) {
            event.preventDefault();
            if ($("#DefaultCashPopUp_repaymentID").is(".OpenModalNow")) {

                $("#DefaultCashPopUp_repaymentID").removeClass("OpenModalNow");

            } else {

                $("#DefaultCashPopUp_repaymentID").addClass("OpenModalNow");
                $(".mobileMenuBar ").removeClass("mobileMenuBarShow");
            }


        });

        //close the modal
        $(document).on("click", ".DefaultCashPopUp_repaymentIDClose", function (event) {

            $("#DefaultCashPopUp_repaymentID").removeClass("OpenModalNow");
            $("#accordion").accordion();

        });
        //close the modal


    </script>


    <!--Home form submit starts-->
    <script>
        jQuery(document).ready(function ($) {
            var $form = $('#indexMainForm_one');

            $form.submit(function () {
                $.ajax({
                    type: 'POST',
                    url: $form.attr('action'),
                    data: $form.serialize(),
                    success: function (response) {
                        $(".indexResponseHAndling").html(response);
                    }
                });

                return false;
            });
        });
    </script>
    <!--Home form submit ends-->


    <script>

        //application right sidebar small desscription changing
        $(document).ready(function () {
            $(".AppMainApplicationForm_rightPositiontopUl_lia_span").click(function () {
                event.preventDefault();
                var currentpositionofprocess = $(this).attr("data-applicationstep-describer-position");


                if (currentpositionofprocess == 1) {

                    $(".header-onappinstructs").html("<h3>Personal Information</h3>");

                    $('.AppMainApplicationForm_rightPositiontop_toldescripMnhlPara').text('Fill your personal information. Please do not enter fake details. That may be subjected to application refusal.');

                    $(".AppMainApplicationForm_rightPositiontop_toldescripmn").removeClass("assigningThePositionOfapplcnArrow_3");
                    $(".AppMainApplicationForm_rightPositiontop_toldescripmn").removeClass("assigningThePositionOfapplcnArrow_4");
                    $(".AppMainApplicationForm_rightPositiontop_toldescripmn").removeClass("assigningThePositionOfapplcnArrow_2");


                } else if (currentpositionofprocess == 2) {
                    $(".header-onappinstructs").html("<h3>Employment information</h3>");
                    $('.AppMainApplicationForm_rightPositiontop_toldescripMnhlPara').text('Write where you work. detail more about your employment background.');

                    $(".AppMainApplicationForm_rightPositiontop_toldescripmn").removeClass("assigningThePositionOfapplcnArrow_3");
                    $(".AppMainApplicationForm_rightPositiontop_toldescripmn").removeClass("assigningThePositionOfapplcnArrow_4");
                    $(".AppMainApplicationForm_rightPositiontop_toldescripmn").removeClass("assigningThePositionOfapplcnArrow_1");

                    $(".AppMainApplicationForm_rightPositiontop_toldescripmn").addClass("assigningThePositionOfapplcnArrow_2");


                } else if (currentpositionofprocess == 3) {
                    $(".header-onappinstructs").html("<h3>Urgent contacts</h3>");
                    $('.AppMainApplicationForm_rightPositiontop_toldescripMnhlPara').text('Let us know who we can contact in an emergency situation.');
                    $(".AppMainApplicationForm_rightPositiontop_toldescripmn").removeClass("assigningThePositionOfapplcnArrow_2");
                    $(".AppMainApplicationForm_rightPositiontop_toldescripmn").removeClass("assigningThePositionOfapplcnArrow_4");
                    $(".AppMainApplicationForm_rightPositiontop_toldescripmn").addClass("assigningThePositionOfapplcnArrow_3");


                } else if (currentpositionofprocess == 4) {
                    $(".header-onappinstructs").html("<h3>Bank Info</h3>");
                    $('.AppMainApplicationForm_rightPositiontop_toldescripMnhlPara').text('Enter your bank details. We directly credit the requested amount upon successful selection.');
                    $(".AppMainApplicationForm_rightPositiontop_toldescripmn").removeClass("assigningThePositionOfapplcnArrow_3");
                    $(".AppMainApplicationForm_rightPositiontop_toldescripmn").addClass("assigningThePositionOfapplcnArrow_4");
                } else {
                    location.reload();
                }


            });
        });
        //application right sidebar small desscription changing

    </script>

    <script>
        //close the modal
        $(document).on("click", ".errorModal_MainErrormodal_1Close", function (event) {

            $("#errorModal_MainErrormodal_1").removeClass("OpenModalNow");


        });
        //close the modal
    </script>


    <!--appplication forms 1-->
    <script>
        jQuery(document).ready(function ($) {
            var $form = $('#loanapplicaionsteps');


            $form.submit(function () {


                $.ajax({
                    type: 'POST',
                    url: $form.attr('action'),
                    data: $form.serialize(),
                    success: function (response) {
                        $(".loanapplicaionsteps_error_response").html(response);
                    }
                });

                return false;
            });
        });
    </script>
    <!--appplication forms 1-->

    <!--second time application-->
    <script>
        jQuery(document).ready(function ($) {
            var $form = $('#SecondtimeLoanapplicationprocessid');


            $form.submit(function () {


                $.ajax({
                    type: 'POST',
                    url: $form.attr('action'),
                    data: $form.serialize(),
                    beforeSend: function () {
                        $("#Errordisplay_SecondtimeLoanapplicationprocesserrorBtn").attr("disabled", true);
                    },
                    success: function (response) {
                        $(".Errordisplay_SecondtimeLoanapplicationprocess").html(response);
                        $("#Errordisplay_SecondtimeLoanapplicationprocesserrorBtn").attr("disabled", false);
                    }
                });

                return false;
            });
        });
    </script>
    <!--second time application-->


    <!--if the edit form variable exists then assign values-->
    <script>
        $(document).ready(function () {
            $('#IndexLoanamountonselectDisplay_onlyediting').html('9,000');
            $('#IndexLoanamountonselectDisplay_onlyediting').css('display', 'inline-block');
            $('#IndexLoanamountonselectDisplay').css('display', 'none');

        });

    </script>
    <script>
        $(document).ready(function () {
            $('#repayment_duedateonIndexForum_onlyediting').html('2018-12-06');
            $('#repayment_duedateonIndexForum_onlyediting').css('display', 'inline-block');
            $('#repayment_duedateonIndexForum').css('display', 'none');

        });

    </script><!--if the edit form variable exists then assign values-->

    <style>
        li.da-da.DesktopMenuUlLi.DesktopMenuUlLi_home a {
            color: #ffffff;
            background: #05bcf5;
        }

        li.da-da.DesktopMenuUlLi.MobileMenuUlLi_home a {
            color: #05bcf5;
        }
    </style>
    <title>Home - Isuru cash</title>
</head>

<body>

<!--default body-->
<div class="da-da defaultMainBody">
    <div class="da-da wh100">
        <div class="da-da wh100">

            <!--main body-->
            <div class="da-da MainBody">
                <div class="da-da wh100">
                    <div class="da-da wh100">

                        <!--header-->
                        <!--header main both inside-->

                        <!--top black header-->
                        <div class="da-da TopBlackHeader">
                            <div class="da-da wh100">
                                <div class="da-da wh100">
                                    <!--container-->
                                    <div class="da-da container">
                                        <div class="da-da wh100">
                                            <div class="da-da wh100 displayFlex">
                                                <!--left-->
                                                <div class="da-da TopBlackHeaderLeft">
                                                    <div class="da-da wh100">
                                                        <div class="da-da wh100">
                                                            <!--left icon menu-->
                                                            <ul class="da-da wh100 TopBlackHeaderULList displayFlex">

                                                                <li>
                                                                    <a href="#">
														<span class="da-da TopBlackHeaderULList-icon">
														<i class="fab fa-telegram-plane"></i>
														</span>
                                                                        <span class="da-da TopBlackHeaderULList-text">
														info@dimuthucash.com
														</span>
                                                                    </a>
                                                                </li>
                                                                <li>
                                                                    <a href="#">
														<span class="da-da TopBlackHeaderULList-icon">
														<i class="fas fa-phone"></i>
														</span>
                                                                        <span class="da-da TopBlackHeaderULList-text">
														+94 777187147
														</span>
                                                                    </a>
                                                                </li>
                                                            </ul>
                                                            <!--left icon menu-->
                                                        </div>
                                                    </div>
                                                </div>
                                                <!--left-->

                                                <!--right-->
                                                <div class="da-da TopBlackHeaderRight">
                                                    <div class="da-da wh100">
                                                        <div class="da-da wh100">
                                                            <a href="#"
                                                               class="da-da wh100 TopBlackHeaderRightApplyAgain-btn transition OpenrepayModal">
												<span class="TopBlackHeaderRightApplyAgain-btnText">
													
                                                    Repeat Loan												</span>
                                                                <span class="TopBlackHeaderRightApplyAgain-btnIcon">
												<i class="fas fa-caret-right"></i>
												</span>
                                                            </a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!--right-->
                                            </div>
                                        </div>
                                    </div>
                                    <!--container-->
                                </div>
                            </div>
                        </div>
                        <!--top black header-->

                        <!--top main-->
                        <div class="da-da TopMainHeader">
                            <div class="da-da wh100">
                                <div class="da-da wh100">
                                    <!--container-->
                                    <div class="da-da container">
                                        <div class="da-da wh100">
                                            <div class="da-da wh100 displayFlex">
                                                <!--left-->
                                                <div class="da-da TopMainHeaderLeft">
                                                    <div class="da-da wh100">
                                                        <div class="da-da wh100">
                                                            <!--logo-->
                                                            <div class="da-da wh100 LogoMainImg">
                                                                <div class="da-da wh100">
                                                                    <div class="da-da wh100">
                                                                        <a href="https://isurucash.com/">
                                                                            <img
                                                                                src="{{ url('images/logo-sidex300.png') }}">
                                                                        </a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <!--logo-->
                                                        </div>
                                                    </div>
                                                </div>
                                                <!--left-->

                                                <!--right-->
                                                <div class="da-da TopMainHeaderRight">
                                                    <div class="da-da wh100">
                                                        <div class="da-da wh100">
                                                            <!--mobile button-->
                                                            <div class="da-da wh100 DisplayMobileMenudont">
                                                                <div class="da-da wh100">
                                                                    <div class="da-da wh100">
                                                                        <button class="da-da DisplayMobileMenu">
                                                                            <i class="fas fa-list"></i>
                                                                        </button>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <!--mobile button-->
                                                            <!--desktop menu-->
                                                            <div class="da-da wh100 DesktopMenu DesktopMenuDont">
                                                                <div class="da-da wh100">
                                                                    <div class="da-da displayFlex DesktopMenuMn">
                                                                        <!--menu ul-->

                                                                        <div class="da-da DesktopMenuDiv_recent">
                                                                            <div class="da-da wh100">
                                                                                <div class="da-da wh100">
                                                                                    <!--menu ul actual-->
                                                                                    <ul class="da-da DesktopMenuUl">

                                                                                        <li class="da-da DesktopMenuUlLi DesktopMenuUlLi_how">
                                                                                            <a href="https://isurucash.com/how"
                                                                                               class="transition">
                                                                        <span>
                                                                        How it works                                                                        </span>
                                                                                            </a>
                                                                                        </li>
                                                                                        <li class="da-da DesktopMenuUlLi DesktopMenuUlLi_faq">
                                                                                            <a href="https://isurucash.com/faq"
                                                                                               class="transition">
                                                                        <span>
                                                                        FAQ                                                                        </span>
                                                                                            </a>
                                                                                        </li>
                                                                                        <li class="da-da DesktopMenuUlLi DesktopMenuUlLi_aboutu">
                                                                                            <a href="https://isurucash.com/aboutus"
                                                                                               class="transition">
                                                                        <span>
                                                                        About us                                                                        </span>
                                                                                            </a>
                                                                                        </li>
                                                                                        <li class="da-da DesktopMenuUlLi DesktopMenuUlLi_contactus">
                                                                                            <a href="https://isurucash.com/contactus"
                                                                                               class="transition">
                                                                        <span>
                                                                        Contact us                                                                        </span>
                                                                                            </a>
                                                                                        </li>
                                                                                        <li class="da-da DesktopMenuUlLi DesktopMenuUlLi_payback">
                                                                                            <a href="https://isurucash.com/payback"
                                                                                               class="transition">
                                                                        <span>
                                                                        Pay back                                                                        </span>
                                                                                            </a>
                                                                                        </li>
                                                                                    </ul>
                                                                                    <!--menu ul actual-->
                                                                                </div>
                                                                            </div>
                                                                        </div>


                                                                        <!--menu ul-->

                                                                        <!--language changer-->
                                                                        <div class="da-da LanguageChanger">
                                                                            <div class="da-da wh100">
                                                                                <div class="da-da wh100 displayFlex">
                                                                                    <!--english-->
                                                                                    <div class="da-da width50">
                                                                                        <div class="da-da wh100">
                                                                                            <div class="da-da wh100">
                                                                                                <a href="?lan=eng"
                                                                                                   class="da-da LanguageChangerBtnEnglishAny LanguageChangerBtnEnglish">ENG</a>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                    <!--english-->

                                                                                    <!--Sinhala-->
                                                                                    <div class="da-da width50">
                                                                                        <div class="da-da wh100">
                                                                                            <div class="da-da wh100">
                                                                                                <a href="?lan=si"
                                                                                                   class="da-da LanguageChangerBtnEnglishAny LanguageChangerBtnSinhala">සිං</a>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                    <!--Sinhala-->
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <!--language changer-->

                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <!--desktop menu-->

                                                        </div>
                                                    </div>
                                                </div>
                                                <!--right-->
                                            </div>
                                        </div>
                                    </div>
                                    <!--container-->
                                </div>
                            </div>
                        </div>
                        <!--top main-->

                        <!--mobile menu-->
                        <div class="da-da mobileMenuBar">
                            <div class="da-da wh100">
                                <div class="da-da wh100 mobileMenuBarmn">
                                    <div class="container">
                                        <div class="da-da wh100 DesktopMenu mobileMenuBarMenu">
                                            <div class="da-da wh100">
                                                <div class="da-da wh100">
                                                    <!--menu ul-->
                                                    <ul class="da-da DesktopMenuUl mobileMenuBarMenuUl">
                                                        <li class="da-da DesktopMenuUlLi MobileMenuUlLi_home">
                                                            <a href="https://isurucash.com/" class="transition">
											<span>
											Home
											</span>
                                                            </a>
                                                        </li>
                                                        <li class="da-da DesktopMenuUlLi MobileMenuUlLi_how">
                                                            <a href="https://isurucash.com/how" class="transition">
											<span>
											How it works											</span>
                                                            </a>
                                                        </li>
                                                        <li class="da-da DesktopMenuUlLi MobileMenuUlLi_faq">
                                                            <a href="https://isurucash.com/faq" class="transition">
											<span>
											FAQ											</span>
                                                            </a>
                                                        </li>
                                                        <li class="da-da DesktopMenuUlLi MobileMenuUlLi_aboutus">
                                                            <a href="https://isurucash.com/aboutus" class="transition">
											<span>
											About us											</span>
                                                            </a>
                                                        </li>
                                                        <li class="da-da DesktopMenuUlLi MobileMenuUlLi_contactus">
                                                            <a href="https://isurucash.com/contactus"
                                                               class="transition">
											<span>
											Contact us											</span>
                                                            </a>
                                                        </li>
                                                        <li class="da-da DesktopMenuUlLi MobileMenuUlLi_payback">
                                                            <a href="https://isurucash.com/payback" class="transition">
											<span>
											Pay back											</span>
                                                            </a>
                                                        </li>
                                                        <li class="da-da DesktopMenuUlLi mobileRepeatcustomers">
                                                            <a href="#" class="transition OpenrepayModal">
											<span>
											Repeat Loan 
											</span>
                                                            </a>
                                                        </li>
                                                    </ul>
                                                    <!--menu ul-->

                                                    <!--language changer-->
                                                    <div class="da-da">
                                                        <div class="da-da wh100">
                                                            <div class="da-da wh100 displayFlex">
                                                                <!--english-->
                                                                <div class="da-da width50">
                                                                    <div class="da-da wh100">
                                                                        <div class="da-da wh100">
                                                                            <a href="https://isurucash.com/?lan=eng"
                                                                               class="da-da LanguageChangerBtnEnglishAny LanguageChangerBtnEnglish">ENG</a>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <!--english-->

                                                                <!--Sinhala-->
                                                                <div class="da-da width50">
                                                                    <div class="da-da wh100">
                                                                        <div class="da-da wh100">
                                                                            <a href="https://isurucash.com/?lan=si"
                                                                               class="da-da LanguageChangerBtnEnglishAny LanguageChangerBtnSinhala">සිං</a>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <!--Sinhala-->
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!--language changer-->

                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--mobile menu-->

                        <!--header main both inside-->

                        <!--pop  up for repayment-->
                        <div class="da-da DefaultCashPopUp_repayment" id="DefaultCashPopUp_repaymentID">
                            <div class="da-da wh100" style="
    margin-bottom: 69px;
    position: relative;
">
                                <div class="da-da wh100" style="
    overflow: auto;
    position: absolute;
    margin-bottom: 90px;
">
                                    <!--container-->
                                    <div class="da-da container">
                                        <div class="da-da wh100">
                                            <div class="da-da wh100">
                                                <!--main pop up-->
                                                <div class="da-da MainPopUpBlockDiv">
                                                    <div class="da-da wh100">
                                                        <div class="da-da wh100">
                                                            <!--title and closors-->
                                                            <div class="da-da MainPopUpBlockDivHeaderAndClosor">
                                                                <div class="da-da wh100">
                                                                    <div class="da-da wh100 displayFlex">
                                                                        <!--left-->
                                                                        <div
                                                                            class="da-da MainPopUpBlockDivHeaderAndClosorLeft">
                                                                            <div class="da-da wh100">
                                                                                <div class="da-da wh100">
                                                                                    <h3>

                                                                                        Apply For Second Loan </h3>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <!--left-->

                                                                        <!--right-->
                                                                        <div
                                                                            class="da-da MainPopUpBlockDivHeaderAndClosorRight">
                                                                            <div class="da-da wh100">
                                                                                <div class="da-da wh100">
                                            <span
                                                class="MainPopUpBlockDivHeaderAndClosorRightICon DefaultCashPopUp_repaymentIDClose">
                                                <i class="fas fa-times"></i>
                                                </span>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <!--right-->
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <!--title and closors-->


                                                            <!--main form body-->
                                                            <div class="da-da MainPopUpBlockDivMainBodyData">
                                                                <div class="da-da wh100">
                                                                    <div class="da-da wh100" style="
    position: relative;
">

                                                                        <!--description-->
                                                                        <div
                                                                            class="da-da MainPopUpBlockDivMainBodyData_description">
                                                                            <div class="da-da wh100">
                                                                                <div class="da-da wh100">
                                                                                    <p class="MainPopUpBlockDivMainBodyData_description_p">


                                                                                        <strong>HAVE YOU COMPLED YOUR
                                                                                            PREVIOUS LOAN?</strong><br>
                                                                                        Then this offer is for you! Just
                                                                                        enter your NIC & phone number
                                                                                        into the fields below and get
                                                                                        money instantly into your bank
                                                                                        account!
                                                                                    </p>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <!--description-->

                                                                        <!--response display-->
                                                                        <div
                                                                            class="Errordisplay_SecondtimeLoanapplicationprocess">

                                                                        </div>
                                                                        <!--response display-->


                                                                        <!--error display-->
                                                                        <style>
                                                                            div#Errordisplay_SecondtimeLoanapplicationprocesserror {
                                                                                top: 27px;
                                                                            }
                                                                        </style>
                                                                        <div class="da-da LoanAmountExceededWarning"
                                                                             id="Errordisplay_SecondtimeLoanapplicationprocesserror"
                                                                             style="display: none;">
                                                                            <div class="da-da wh100">
                                                                                <div class="da-da wh100">
                                            <span id="Errordisplay_SecondtimeLoanapplicationprocesserrorTxt">
                                                 
                                                </span>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <!--error display-->


                                                                        <!--application fields starting-->
                                                                        <div
                                                                            class="da-da SecondtimeLoanapplicationprocessApplcFildBdy"
                                                                            id="SecondtimeLoanapplicationprocessApplcFildBdyId">
                                                                            <div class="da-da wh100">
                                                                                <div class="da-da wh100">


                                                                                    <form
                                                                                        action="https://isurucash.com/php-scripts/secondtimeLoanapplyIndex.php"
                                                                                        method="post"
                                                                                        name="SecondtimeLoanapplicationprocess"
                                                                                        id="SecondtimeLoanapplicationprocessid">
                                                                                        <!--one field-->
                                                                                        <div
                                                                                            class="da-da MainPopUpBlockDivMainBodyData_oneField">
                                                                                            <div class="da-da wh100">
                                                                                                <div
                                                                                                    class="da-da wh100">
                                                                                                    <input type="text"
                                                                                                           placeholder="National ID Number"
                                                                                                           class="da-da wh100 InputDefaultApprientation transition SecondtimeLoanapplicationprocess_nic"
                                                                                                           name="SecondtimeLoanapplicationprocess_nic">
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                                                                        <!--one field-->


                                                                                        <!--field-->
                                                                                        <div
                                                                                            class="da-da MainPopUpBlockDivMainBodyData_oneField">
                                                                                            <div class="da-da wh100">
                                                                                                <div
                                                                                                    class="da-da wh100 displayFlex">
                                                                                                    <!--filed-->
                                                                                                    <div
                                                                                                        class="da-da wh100">
                                                                                                        <div
                                                                                                            class="da-da wh100">
                                                                                                            <div
                                                                                                                class="da-da wh100 displayFlex">
                                                                                                                <!--icon-->
                                                                                                                <div
                                                                                                                    class="da-da OneFiledInMainFormApplicationHmeFieldIcon">
                                                                                                                    +94
                                                                                                                </div>
                                                                                                                <!--icon-->
                                                                                                                <!--field-->
                                                                                                                <div
                                                                                                                    class="da-da OneFiledInMainFormApplicationHmeFieldReal">
                                                                                                                    <input
                                                                                                                        type="text"
                                                                                                                        placeholder="Mobile Number (ie: 7XXXXXXXXX)
                                             "
                                                                                                                        class="da-da wh100 InputDefaultApprientation transition SecondtimeLoanapplicationprocess_mobile"
                                                                                                                        name="SecondtimeLoanapplicationprocess_mobile">
                                                                                                                </div>
                                                                                                                <!--field-->

                                                                                                            </div>
                                                                                                        </div>
                                                                                                    </div>
                                                                                                    <!--filed-->

                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                                                                        <!--field-->


                                                                                        <!--one field-->
                                                                                        <div
                                                                                            class="da-da OneFiledInMainFormApplicationHmeField">
                                                                                            <div class="da-da wh100">
                                                                                                <div
                                                                                                    class="da-da wh100 displayFlex">
                                                                                                    <!--left-->
                                                                                                    <div
                                                                                                        class="da-da widthMaxis50percent oneApplcnLeft">
                                                                                                        <div
                                                                                                            class="da-da wh100">
                                                                                                            <div
                                                                                                                class="da-da wh100">
                                                                                                                <select
                                                                                                                    name="SecondtimeLoanapplicationprocess_amount"
                                                                                                                    class="da-da wh100 InputDefaultApprientation transition SecondtimeLoanapplicationprocess_amount">
                                                                                                                    <option
                                                                                                                        style="display: none;"
                                                                                                                        value="">
                                                                                                                        Amount
                                                                                                                        (Rs.)
                                                                                                                    </option>
                                                                                                                    <option
                                                                                                                        value="1">
                                                                                                                        Rs.5,000
                                                                                                                    </option>
                                                                                                                    <option
                                                                                                                        value="2">
                                                                                                                        Rs.6,000
                                                                                                                    </option>
                                                                                                                    <option
                                                                                                                        value="3">
                                                                                                                        Rs.7,000
                                                                                                                    </option>
                                                                                                                    <option
                                                                                                                        value="4">
                                                                                                                        Rs.8,000
                                                                                                                    </option>
                                                                                                                    <option
                                                                                                                        value="5">
                                                                                                                        Rs.9,000
                                                                                                                    </option>
                                                                                                                    <option
                                                                                                                        value="6">
                                                                                                                        Rs.10,000
                                                                                                                    </option>
                                                                                                                    <option
                                                                                                                        value="7">
                                                                                                                        Rs.11,000
                                                                                                                    </option>
                                                                                                                    <option
                                                                                                                        value="8">
                                                                                                                        Rs.12,000
                                                                                                                    </option>
                                                                                                                    <option
                                                                                                                        value="9">
                                                                                                                        Rs.13,000
                                                                                                                    </option>
                                                                                                                    <option
                                                                                                                        value="10">
                                                                                                                        Rs.14,000
                                                                                                                    </option>
                                                                                                                    <option
                                                                                                                        value="11">
                                                                                                                        Rs.15,000
                                                                                                                    </option>
                                                                                                                    <option
                                                                                                                        value="12">
                                                                                                                        Rs.20,000
                                                                                                                    </option>
                                                                                                                    <option
                                                                                                                        value="13">
                                                                                                                        Rs.25,000
                                                                                                                    </option>
                                                                                                                    <option
                                                                                                                        value="14">
                                                                                                                        Rs.30,000
                                                                                                                    </option>
                                                                                                                    <option
                                                                                                                        value="15">
                                                                                                                        Rs.35,000
                                                                                                                    </option>
                                                                                                                    <option
                                                                                                                        value="16">
                                                                                                                        Rs.40,000
                                                                                                                    </option>
                                                                                                                    <option
                                                                                                                        value="17">
                                                                                                                        Rs.45,000
                                                                                                                    </option>
                                                                                                                    <option
                                                                                                                        value="18">
                                                                                                                        Rs.50,000
                                                                                                                    </option>
                                                                                                                </select>
                                                                                                            </div>
                                                                                                        </div>
                                                                                                    </div>
                                                                                                    <!--left-->
                                                                                                    <!--right-->
                                                                                                    <div
                                                                                                        class="da-da widthMaxis50percent SecondtimeLoanapplicationprocess_days_error">
                                                                                                        <div
                                                                                                            class="da-da wh100">
                                                                                                            <div
                                                                                                                class="da-da wh100 displayFlex twoRadioButtonsAssigned">
                                                                                                                <!--left-->
                                                                                                                <div
                                                                                                                    class="da-da widthMaxis50percent oneApplcnLeft">
                                                                                                                    <div
                                                                                                                        class="da-da wh100 oneRadioButtonOnHomePage">

                                                                                                                        <input
                                                                                                                            value="0"
                                                                                                                            type="radio"
                                                                                                                            id="15dayssecondtime"
                                                                                                                            name="SecondtimeLoanapplicationprocess_days"
                                                                                                                            class="oneRadioButtonOnHomePageRadiobtn"
                                                                                                                            checked="chekced">
                                                                                                                        <label
                                                                                                                            class="wh100 oneRadioButtonOnHomePageLabel transition"
                                                                                                                            for="15dayssecondtime">
                                                                                                                            10
                                                                                                                            Days </label>

                                                                                                                    </div>
                                                                                                                </div>
                                                                                                                <!--left-->
                                                                                                                <!--right-->
                                                                                                                <div
                                                                                                                    class="da-da widthMaxis50percent oneApplcnLeft">
                                                                                                                    <div
                                                                                                                        class="da-da wh100 oneRadioButtonOnHomePage">
                                                                                                                        <input
                                                                                                                            value="1"
                                                                                                                            type="radio"
                                                                                                                            id="30dayssecondtime"
                                                                                                                            name="SecondtimeLoanapplicationprocess_days"
                                                                                                                            class="oneRadioButtonOnHomePageRadiobtn">

                                                                                                                        <label
                                                                                                                            class="wh100 oneRadioButtonOnHomePageLabel transition"
                                                                                                                            for="30dayssecondtime">
                                                                                                                            30
                                                                                                                            Days </label>
                                                                                                                    </div>
                                                                                                                </div>
                                                                                                                <!--right-->
                                                                                                            </div>
                                                                                                        </div>
                                                                                                    </div>
                                                                                                    <!--right-->
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                                                                        <!--one field-->


                                                                                        <!--one field-->
                                                                                        <div
                                                                                            class="da-da MainPopUpBlockDivMainBodyData_oneField">
                                                                                            <div class="da-da wh100">
                                                                                                <div
                                                                                                    class="da-da wh100">
                                                                                                    <input type="submit"
                                                                                                           id="Errordisplay_SecondtimeLoanapplicationprocesserrorBtn"
                                                                                                           value="Send Now"
                                                                                                           class="da-da default-btn-isurucash transition btn-advance-effect">
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                                                                        <!--one field-->
                                                                                    </form>

                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <!--application fields starting-->

                                                                        <!--application has been sent-->
                                                                        <div class="da-da ApplicationSecondTimeSuccess">
                                                                            <div class="da-da wh100">
                                                                                <div class="da-da wh100">
                                                                                    <!--icon-->
                                                                                    <div
                                                                                        class="da-da ApplicationSecondTimeSuccessIcon">
                                                                                        <div class="da-da wh100">
                                                                                            <i class="far fa-check-circle"></i>
                                                                                        </div>
                                                                                    </div>
                                                                                    <!--icon-->

                                                                                    <!--title-->
                                                                                    <div
                                                                                        class="da-da ApplicationSecondTimeSuccessTitle">
                                                                                        <div class="da-da wh100">
                                                                                            <p id="ApplicationSecondTimeSuccessTitleP">
                                                                                                Thank you for applying
                                                                                                for your second loan, We
                                                                                                have recieved your
                                                                                                application. We will
                                                                                                inform the approval
                                                                                                process shortly via SMS
                                                                                                or a Call.
                                                                                            </p>
                                                                                        </div>
                                                                                    </div>
                                                                                    <!--title-->
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <!--application has been sent-->


                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <!--main form body-->
                                                        </div>
                                                    </div>
                                                </div>
                                                <!--main pop up-->
                                            </div>
                                        </div>
                                    </div>
                                    <!--container-->
                                </div>
                            </div>
                        </div>
                        <!--pop  up for repayment-->


                        <!--error modal-->
                        <div class="da-da DefaultCashPopUp_repayment" id="errorModal_MainErrormodal_1">
                            <div class="da-da wh100">
                                <div class="da-da wh100">
                                    <!--container-->
                                    <div class="da-da container">
                                        <div class="da-da wh100">
                                            <div class="da-da wh100">
                                                <!--main pop up-->
                                                <div class="da-da MainErrorModal_pop">
                                                    <div class="da-da wh100">
                                                        <div class="da-da wh100">
                                                            <!--title-->
                                                            <div class="da-da MainPopUpBlockDivHeaderAndClosor">
                                                                <div class="da-da wh100">
                                                                    <div class="da-da wh100 displayFlex">
                                                                        <!--left-->
                                                                        <div
                                                                            class="da-da MainPopUpBlockDivHeaderAndClosorLeft">
                                                                            <div class="da-da wh100">
                                                                                <div class="da-da wh100">
                                                                                    <h3>

                                                                                        There was an error </h3>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <!--left-->

                                                                        <!--right-->
                                                                        <div
                                                                            class="da-da MainPopUpBlockDivHeaderAndClosorRight">
                                                                            <div class="da-da wh100">
                                                                                <div class="da-da wh100">
                                            <span
                                                class="MainPopUpBlockDivHeaderAndClosorRightICon errorModal_MainErrormodal_1Close">
                                                <i class="fas fa-times"></i>
                                                </span>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <!--right-->
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <!--title-->

                                                            <!--description-->
                                                            <div class="da-da MainPopUpBlockDivMainBodyData">
                                                                <div class="da-da wh100">
                                                                    <div class="da-da wh100">

                                                                        <!--description-->
                                                                        <div
                                                                            class="da-da MainPopUpBlockDivMainBodyData_description MainPopUpBlockDivMainBodyData_descriptionOnerro">
                                                                            <div class="da-da wh100">
                                                                                <div class="da-da wh100">
                                                                                    <p class="MainPopUpBlockDivMainBodyData_description_p"
                                                                                       id="OnErrorModal_text_appeared_erorcode">
                                                                                        There was an error while
                                                                                        processing your request.
                                                                                    </p>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <!--description-->


                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <!--description-->
                                                        </div>
                                                    </div>
                                                </div>
                                                <!--main pop up-->
                                            </div>
                                        </div>
                                    </div>
                                    <!--container-->
                                </div>
                            </div>
                        </div>
                        <!--error modal-->                <!--header-->


                        <!--body main-->
                        <div class="da-da bodyAppMain">
                            <div class="da-da wh100">
                                <div class="da-da wh100">

                                    <!--top banner and forum-->
                                    <div class="da-da HomePageBAnnerAndForumMain parallax-window" data-parallax="scroll"
                                         data-image-src="{{ url('images/1.jpg') }}">
                                        <div class="da-da wh100 HomePageBAnnerAndForumMainHl">
                                            <div class="da-da wh100">
                                                <!--container-->
                                                <div class="da-da container">
                                                    <div class="da-da wh100">
                                                        <div class="da-da wh100 displayFlex">

                                                            <div class="container">
                                                                <div class="row">
                                                                    <!--left-->
                                                                    <div class="col-md-6 padding0Mobile fullwidthonTab">
                                                                        <div class="da-da wh100">
                                                                            <Div class="da-da wh100">
                                                                                <!--left-->
                                                                                <div class="da-da">
                                                                                    <div class="da-da wh100">
                                                                                        <div class="da-da wh100">
                                                                                            <!--text inside-->
                                                                                            <div
                                                                                                class="da-daBannerTphomepageTextLeftMain">
                                                                                                <div
                                                                                                    class="da-da wh100">
                                                                                                    <div
                                                                                                        class="da-da wh100">

                                                                                                        <!--sub heading-->
                                                                                                        <div
                                                                                                            class="da-da daBannerTphomepageTextLeftMainSubHeading">
                                                                                                            <div
                                                                                                                class="da-da wh100">
                                                                                                                <div
                                                                                                                    class="da-da wh100">
                                                                                                                    <h3 class="da-da daBannerTphomepageTextLeftMainSubHeadingH3">

                                                                                                                        In
                                                                                                                        4
                                                                                                                        Steps </h3>
                                                                                                                </div>
                                                                                                            </div>
                                                                                                        </div>
                                                                                                        <!--sub heading-->

                                                                                                        <!--main heading-->
                                                                                                        <div
                                                                                                            class="da-da daBannerTphomepageTextLeftMainMainHeading">
                                                                                                            <div
                                                                                                                class="da-da wh100">
                                                                                                                <div
                                                                                                                    class="da-da wh100">
                                                                                                                    <h3 class="da-da daBannerTphomepageTextLeftMainMainHeadingH3">

                                                                                                                        Apply
                                                                                                                        for
                                                                                                                        an
                                                                                                                        instant
                                                                                                                        Loan
                                                                                                                        and
                                                                                                                        pay
                                                                                                                        back
                                                                                                                        within
                                                                                                                        30
                                                                                                                        days
                                                                                                                        ! </h3>
                                                                                                                </div>
                                                                                                            </div>
                                                                                                        </div>
                                                                                                        <!--main heading-->

                                                                                                        <!--yellow heading-->
                                                                                                        <div
                                                                                                            class="da-da daBannerTphomepageTextLeftMainYellowHeading">
                                                                                                            <div
                                                                                                                class="da-da wh100">
                                                                                                                <div
                                                                                                                    class="da-da wh100">
                                                                                                                    <h3 class="da-da daBannerTphomepageTextLeftMainYellowHeadingH3">

                                                                                                                        For
                                                                                                                        your
                                                                                                                        personal
                                                                                                                        needs </h3>
                                                                                                                </div>
                                                                                                            </div>
                                                                                                        </div>
                                                                                                        <!--yellow heading-->


                                                                                                    </div>
                                                                                                </div>
                                                                                            </div>
                                                                                            <!--text inside-->
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                                <!--left-->
                                                                            </Div>
                                                                        </div>
                                                                    </div>
                                                                    <!--left-->

                                                                    <!--right-->
                                                                    <div class="col-md-6 padding0Mobile fullwidthonTab">
                                                                        <div class="da-da wh100">
                                                                            <div class="da-da wh100">
                                                                                <Div class="da-da wh100">
                                                                                    <!--right-->
                                                                                    <div class="da-da">
                                                                                        <div class="da-da wh100">
                                                                                            <div class="da-da wh100">

                                                                                                <!--loadn application-->
                                                                                                <div
                                                                                                    class="da-da AppHomeLoanMainApplication">
                                                                                                    <div
                                                                                                        class="da-da wh100">
                                                                                                        <div
                                                                                                            class="da-da wh100">


                                                                                                            <!--hidden field set-->

                                                                                                            <input
                                                                                                                type="hidden"
                                                                                                                value="9000"
                                                                                                                id="formIndexHome_fields_requestedamount">
                                                                                                            <!--requested amount-->
                                                                                                            <input
                                                                                                                type="hidden"
                                                                                                                value="10"
                                                                                                                id="formIndexHome_fields_repaymentdays">
                                                                                                            <!--repayment days-->
                                                                                                            <input
                                                                                                                type="hidden"
                                                                                                                value=""
                                                                                                                id="formIndexHome_fields_repaymentdate">
                                                                                                            <!--repayment date-->
                                                                                                            <input
                                                                                                                type="hidden"
                                                                                                                value=""
                                                                                                                id="formIndexHome_fields_repaymentamount">
                                                                                                            <!--repayment amount-->

                                                                                                            <!--hidden field set-->

                                                                                                            <!--index response display-->
                                                                                                            <div
                                                                                                                class="indexResponseHAndling"></div>
                                                                                                            <!--index response display-->


                                                                                                            <!--header-->
                                                                                                            <h3 class="da-da mainHeaderOfApplication">

                                                                                                                Loan
                                                                                                                Application </h3>
                                                                                                            <!--header-->

                                                                                                            <!--ongoing application-->
                                                                                                            <!--ongoing application-->

                                                                                                            <!-- one field-->
                                                                                                            <div
                                                                                                                class="da-da OneFiledInMainFormApplicationHme">
                                                                                                                <div
                                                                                                                    class="da-da wh100">
                                                                                                                    <div
                                                                                                                        class="da-da wh100">

                                                                                                                        <!--field-->
                                                                                                                        <div
                                                                                                                            class="da-da OneFiledInMainFormApplicationHmeField">
                                                                                                                            <div
                                                                                                                                class="da-da wh100">
                                                                                                                                <div
                                                                                                                                    class="da-da wh100">
                                                                                                                                    <!--title-->
                                                                                                                                    <div
                                                                                                                                        class="da-da OneFiledInMainFormApplicationHmeLable">
                                                                                                                                        <div
                                                                                                                                            class="da-da wh100">
                                                                                                                                            <div
                                                                                                                                                class="da-da wh100">
																					<span
                                                                                        class="da-da OneFiledInMainFormApplicationHmeLABLE">
																						
                                                                                        Loan amount      
																						
																						<span
                                                                                            class="da-da OneFiledInMainFormApplicationHmeLABLEChooosen">
																							Rs.<span
                                                                                                id="IndexLoanamountonselectDisplayTopBig">9,000</span>/=
																						</span>
																						</span>
                                                                                                                                            </div>
                                                                                                                                        </div>
                                                                                                                                    </div>
                                                                                                                                    <!--title-->
                                                                                                                                    <!--filed-->
                                                                                                                                    <div
                                                                                                                                        class="da-da wh100">
                                                                                                                                        <div
                                                                                                                                            class="da-da wh100">
                                                                                                                                            <div
                                                                                                                                                class="da-da wh100">

                                                                                                                                                <!--range-->
                                                                                                                                                <div
                                                                                                                                                    class="da-da RangeMainArea">
                                                                                                                                                    <div
                                                                                                                                                        class="da-da wh100 displayFlex">
                                                                                                                                                        <!--range ajustable-->
                                                                                                                                                        <div
                                                                                                                                                            class="da-da RangeMainAreaMovable">
                                                                                                                                                            <div
                                                                                                                                                                class="da-da wh100">
                                                                                                                                                                <div
                                                                                                                                                                    class="da-da wh100">
                                                                                                                                                                    <!--slider bar-->

                                                                                                                                                                    <label
                                                                                                                                                                        for="slider-curr-value"
                                                                                                                                                                        style="display: none">Current
                                                                                                                                                                        value:</label>

                                                                                                                                                                    <input
                                                                                                                                                                        id="slider-curr-value"
                                                                                                                                                                        maxlength="3"
                                                                                                                                                                        size="3"
                                                                                                                                                                        type="hidden"
                                                                                                                                                                        tabindex="1"/>
                                                                                                                                                                    <div
                                                                                                                                                                        class="ctrl red">

                                                                                                                                                                        <input
                                                                                                                                                                            type="text"
                                                                                                                                                                            id="slider"
                                                                                                                                                                            class="slider"
                                                                                                                                                                            value=""
                                                                                                                                                                            name="slider"
                                                                                                                                                                            tabindex="2"/>

                                                                                                                                                                    </div>
                                                                                                                                                                    <!--slider bar-->
                                                                                                                                                                </div>
                                                                                                                                                            </div>
                                                                                                                                                        </div>
                                                                                                                                                        <!--range ajustable-->


                                                                                                                                                    </div>
                                                                                                                                                </div>
                                                                                                                                                <!--range-->

                                                                                                                                                <!--error-->
                                                                                                                                                <div
                                                                                                                                                    class="da-da LoanAmountExceededWarning"
                                                                                                                                                    id="LoanAmountExceededWarningId">
                                                                                                                                                    <div
                                                                                                                                                        class="da-da wh100">
                                                                                                                                                        <div
                                                                                                                                                            class="da-da wh100">
                                                                            <span>
                                                                                 The amount of more than Rs 15,000 is available only to repeat borrowers 
                                                                                </span>
                                                                                                                                                        </div>
                                                                                                                                                    </div>
                                                                                                                                                </div>
                                                                                                                                                <!--error-->


                                                                                                                                                <!--amount detector-->
                                                                                                                                                <div
                                                                                                                                                    class="da-da RangeAmountDetector RangeAmountDetectorMinmax">
                                                                                                                                                    <div
                                                                                                                                                        class="da-da wh100 displayFlex">
                                                                                                                                                        <!--range ajustable-->
                                                                                                                                                        <div
                                                                                                                                                            class="da-da RangeMainAreanonMovable2">
                                                                                                                                                            <div
                                                                                                                                                                class="da-da wh100">
                                                                                                                                                                <div
                                                                                                                                                                    class="da-da wh100 displayFlex">

                                                                                                                                                                    <!--one set of data-->
                                                                                                                                                                    <div
                                                                                                                                                                        class="da-da LoanCalculator_titleplusData">
                                                                                                                                                                        <!--title-->
                                                                                                                                                                        <div
                                                                                                                                                                            class="da-da da-da LoanCalculator_titleplusData_Title">

                                                                                                                                                                            Min
                                                                                                                                                                            Amount
                                                                                                                                                                        </div>
                                                                                                                                                                        <!--title-->
                                                                                                                                                                        <!--specified data-->
                                                                                                                                                                        <div
                                                                                                                                                                            class="da-da da-da LoanCalculator_titleplusData_data fontsize12">
                                                                                    <span
                                                                                        class="da-da LoanCalculator_titleplusData_dataRs">
                                                                                    Rs.                                                                                    </span>
                                                                                                                                                                            <span>5000</span>
                                                                                                                                                                        </div>
                                                                                                                                                                        <!--specified data-->
                                                                                                                                                                    </div>
                                                                                                                                                                    <!--one set of data-->


                                                                                                                                                                </div>
                                                                                                                                                            </div>
                                                                                                                                                        </div>
                                                                                                                                                        <!--range ajustable-->

                                                                                                                                                        <!--range non moveble-->
                                                                                                                                                        <div
                                                                                                                                                            class="da-da RangeMainAreanonMovable">
                                                                                                                                                            <div
                                                                                                                                                                class="da-da wh100">
                                                                                                                                                                <div
                                                                                                                                                                    class="da-da wh100">
                                                                                                                                                                    <!--fixed layer-->
                                                                                                                                                                    <!--one set of data-->
                                                                                                                                                                    <div
                                                                                                                                                                        class="da-da wh100">
                                                                                                                                                                        <!--title-->
                                                                                                                                                                        <div
                                                                                                                                                                            class="da-da da-da LoanCalculator_titleplusData_Title TextAlignRight">

                                                                                                                                                                            Max
                                                                                                                                                                            Amount
                                                                                                                                                                        </div>
                                                                                                                                                                        <!--title-->
                                                                                                                                                                        <!--specified data-->
                                                                                                                                                                        <div
                                                                                                                                                                            class="da-da da-da LoanCalculator_titleplusData_data TextAlignRight fontsize12">
                                                                                    <span
                                                                                        class="da-da LoanCalculator_titleplusData_dataRs">
                                                                                    Rs.                                                                                    </span>
                                                                                                                                                                            <span>50,000</span>
                                                                                                                                                                        </div>
                                                                                                                                                                        <!--specified data-->
                                                                                                                                                                    </div>
                                                                                                                                                                    <!--one set of data-->
                                                                                                                                                                    <!--fixed layer-->
                                                                                                                                                                </div>
                                                                                                                                                            </div>
                                                                                                                                                        </div>
                                                                                                                                                        <!--range non moveble-->
                                                                                                                                                    </div>
                                                                                                                                                </div>
                                                                                                                                                <!--amount detector-->


                                                                                                                                                <!--amount detector-->
                                                                                                                                                <div
                                                                                                                                                    class="da-da RangeAmountDetector">
                                                                                                                                                    <div
                                                                                                                                                        class="da-da wh100 displayFlex">
                                                                                                                                                        <!--range ajustable-->
                                                                                                                                                        <div
                                                                                                                                                            class="da-da RangeMainAreanonMovable2">
                                                                                                                                                            <div
                                                                                                                                                                class="da-da wh100">
                                                                                                                                                                <div
                                                                                                                                                                    class="da-da wh100 displayFlex">

                                                                                                                                                                    <!--one set of data-->
                                                                                                                                                                    <div
                                                                                                                                                                        class="da-da LoanCalculator_titleplusData">
                                                                                                                                                                        <!--title-->
                                                                                                                                                                        <div
                                                                                                                                                                            class="da-da da-da LoanCalculator_titleplusData_Title">

                                                                                                                                                                            Loan
                                                                                                                                                                            Amount
                                                                                                                                                                        </div>
                                                                                                                                                                        <!--title-->
                                                                                                                                                                        <!--specified data-->
                                                                                                                                                                        <div
                                                                                                                                                                            class="da-da da-da LoanCalculator_titleplusData_data">
                                                                                    <span
                                                                                        class="da-da LoanCalculator_titleplusData_dataRs">
                                                                                    Rs.                                                                                    </span>
                                                                                                                                                                            <span
                                                                                                                                                                                id="IndexLoanamountonselectDisplay">14,000</span>
                                                                                                                                                                            <span
                                                                                                                                                                                id="IndexLoanamountonselectDisplay_onlyediting">14,000</span>
                                                                                                                                                                        </div>
                                                                                                                                                                        <!--specified data-->
                                                                                                                                                                    </div>
                                                                                                                                                                    <!--one set of data-->

                                                                                                                                                                    <!--one set of data-->
                                                                                                                                                                    <div
                                                                                                                                                                        class="da-da LoanCalculator_titleplusData">
                                                                                                                                                                        <!--title-->
                                                                                                                                                                        <div
                                                                                                                                                                            class="da-da da-da LoanCalculator_titleplusData_Title">

                                                                                                                                                                            Due
                                                                                                                                                                            Date
                                                                                                                                                                        </div>
                                                                                                                                                                        <!--title-->
                                                                                                                                                                        <!--specified data-->
                                                                                                                                                                        <div
                                                                                                                                                                            class="da-da da-da LoanCalculator_titleplusData_data">

                                                                                                                                                                            <span
                                                                                                                                                                                id="repayment_duedateonIndexForum"></span>
                                                                                                                                                                            <span
                                                                                                                                                                                id="repayment_duedateonIndexForum_onlyediting"></span>
                                                                                                                                                                        </div>
                                                                                                                                                                        <!--specified data-->
                                                                                                                                                                    </div>
                                                                                                                                                                    <!--one set of data-->

                                                                                                                                                                </div>
                                                                                                                                                            </div>
                                                                                                                                                        </div>
                                                                                                                                                        <!--range ajustable-->

                                                                                                                                                        <!--range non moveble-->
                                                                                                                                                        <div
                                                                                                                                                            class="da-da RangeMainAreanonMovable">
                                                                                                                                                            <div
                                                                                                                                                                class="da-da wh100">
                                                                                                                                                                <div
                                                                                                                                                                    class="da-da wh100">
                                                                                                                                                                    <!--fixed layer-->
                                                                                                                                                                    <!--one set of data-->
                                                                                                                                                                    <div
                                                                                                                                                                        class="da-da wh100">
                                                                                                                                                                        <!--title-->
                                                                                                                                                                        <div
                                                                                                                                                                            class="da-da da-da LoanCalculator_titleplusData_Title TextAlignRight">

                                                                                                                                                                            Total
                                                                                                                                                                            Repayment
                                                                                                                                                                        </div>
                                                                                                                                                                        <!--title-->
                                                                                                                                                                        <!--specified data-->
                                                                                                                                                                        <div
                                                                                                                                                                            class="da-da da-da LoanCalculator_titleplusData_data TextAlignRight TotalRepaymentAmount_indexhomeFormAllmainBase">
                                                                                    <span
                                                                                        class="da-da LoanCalculator_titleplusData_dataRs ColorDarkYello233 TotalRepaymentAmount_indexhomeFormAllmainBase">
                                                                                    Rs.                                                                                    </span>

                                                                                                                                                                            <span
                                                                                                                                                                                class="ColorDarkYello233 TotalRepaymentAmount_indexhomeFormAllmainBase"
                                                                                                                                                                                id="TotalRepaymentAmount_indexhomeForm"></span>
                                                                                                                                                                        </div>
                                                                                                                                                                        <!--specified data-->
                                                                                                                                                                    </div>
                                                                                                                                                                    <!--one set of data-->
                                                                                                                                                                    <!--fixed layer-->
                                                                                                                                                                </div>
                                                                                                                                                            </div>
                                                                                                                                                        </div>
                                                                                                                                                        <!--range non moveble-->
                                                                                                                                                    </div>
                                                                                                                                                </div>
                                                                                                                                                <!--amount detector-->

                                                                                                                                            </div>
                                                                                                                                        </div>
                                                                                                                                    </div>
                                                                                                                                    <!--filed-->

                                                                                                                                </div>
                                                                                                                            </div>
                                                                                                                        </div>
                                                                                                                        <!--field-->

                                                                                                                        <!--form begin-->
                                                                                                                        <form
                                                                                                                            action="https://isurucash.com/php-scripts/indexMainForm_one_script.php"
                                                                                                                            id="indexMainForm_one"
                                                                                                                            method="post">
                                                                                                                            <input
                                                                                                                                type="hidden"
                                                                                                                                name="indexformVariables_getone_requestedAmount"
                                                                                                                                value="5"
                                                                                                                                id="indexformVariables_getone_requestedAmount">

                                                                                                                            <input
                                                                                                                                type="hidden"
                                                                                                                                name="indexformVariables_getone_repayingdays"
                                                                                                                                value="10"
                                                                                                                                id="indexformVariables_getone_repayingdays">

                                                                                                                            <!--field-->
                                                                                                                            <div
                                                                                                                                class="da-da OneFiledInMainFormApplicationHmeField">
                                                                                                                                <div
                                                                                                                                    class="da-da wh100">
                                                                                                                                    <div
                                                                                                                                        class="da-da wh100 displayFlex">
                                                                                                                                        <!--left-->
                                                                                                                                        <div
                                                                                                                                            class="da-da widthMaxis50percent oneApplcnLeft">
                                                                                                                                            <div
                                                                                                                                                class="da-da wh100">
                                                                                                                                                <div
                                                                                                                                                    class="da-da wh100">
                                                                                                                                                    <input
                                                                                                                                                        name="indexformVariables_getone_firstname"
                                                                                                                                                        type="text"
                                                                                                                                                        placeholder="First Name"
                                                                                                                                                        class="da-da wh100 InputDefaultApprientation transition indexformVariables_getone_firstname"
                                                                                                                                                        value="">
                                                                                                                                                </div>
                                                                                                                                            </div>
                                                                                                                                        </div>
                                                                                                                                        <!--left-->
                                                                                                                                        <!--right-->
                                                                                                                                        <div
                                                                                                                                            class="da-da widthMaxis50percent">
                                                                                                                                            <div
                                                                                                                                                class="da-da wh100">
                                                                                                                                                <div
                                                                                                                                                    class="da-da wh100">
                                                                                                                                                    <input
                                                                                                                                                        name="indexformVariables_getone_middlename"
                                                                                                                                                        type="text"
                                                                                                                                                        placeholder="Middle Name"
                                                                                                                                                        class="da-da wh100 InputDefaultApprientation transition indexformVariables_getone_middlename"
                                                                                                                                                        value="">
                                                                                                                                                </div>
                                                                                                                                            </div>
                                                                                                                                        </div>
                                                                                                                                        <!--right-->
                                                                                                                                    </div>
                                                                                                                                </div>
                                                                                                                            </div>
                                                                                                                            <!--field-->
                                                                                                                            <!--field-->
                                                                                                                            <div
                                                                                                                                class="da-da OneFiledInMainFormApplicationHmeField">
                                                                                                                                <div
                                                                                                                                    class="da-da wh100">
                                                                                                                                    <div
                                                                                                                                        class="da-da wh100 displayFlex">
                                                                                                                                        <!--left-->
                                                                                                                                        <div
                                                                                                                                            class="da-da widthMaxis50percent oneApplcnLeft">
                                                                                                                                            <div
                                                                                                                                                class="da-da wh100">
                                                                                                                                                <div
                                                                                                                                                    class="da-da wh100">
                                                                                                                                                    <input
                                                                                                                                                        name="indexformVariables_getone_lastname"
                                                                                                                                                        type="text"
                                                                                                                                                        placeholder="Last Name"
                                                                                                                                                        class="da-da wh100 InputDefaultApprientation transition indexformVariables_getone_lastname"
                                                                                                                                                        value="">
                                                                                                                                                </div>
                                                                                                                                            </div>
                                                                                                                                        </div>
                                                                                                                                        <!--left-->
                                                                                                                                        <!--right-->
                                                                                                                                        <div
                                                                                                                                            class="da-da widthMaxis50percent MaindaysHolderInIndexDiv">
                                                                                                                                            <div
                                                                                                                                                class="da-da wh100">
                                                                                                                                                <div
                                                                                                                                                    class="da-da wh100 displayFlex twoRadioButtonsAssigned">
                                                                                                                                                    <!--left-->
                                                                                                                                                    <div
                                                                                                                                                        class="da-da widthMaxis50percent oneApplcnLeft">
                                                                                                                                                        <div
                                                                                                                                                            class="da-da wh100 oneRadioButtonOnHomePage">

                                                                                                                                                            <input
                                                                                                                                                                value="0"
                                                                                                                                                                type="radio"
                                                                                                                                                                id="15days"
                                                                                                                                                                name="indexformVariables_getone_days"
                                                                                                                                                                class="oneRadioButtonOnHomePageRadiobtn"
                                                                                                                                                                checked='chekced'/>
                                                                                                                                                            <label
                                                                                                                                                                data-repaying-date="10"
                                                                                                                                                                class="wh100 oneRadioButtonOnHomePageLabel transition"
                                                                                                                                                                for="15days">
                                                                                                                                                                10
                                                                                                                                                                Days </label>

                                                                                                                                                        </div>
                                                                                                                                                    </div>
                                                                                                                                                    <!--left-->
                                                                                                                                                    <!--right-->
                                                                                                                                                    <div
                                                                                                                                                        class="da-da widthMaxis50percent oneApplcnLeft">
                                                                                                                                                        <div
                                                                                                                                                            class="da-da wh100 oneRadioButtonOnHomePage">
                                                                                                                                                            <input
                                                                                                                                                                value="1"
                                                                                                                                                                type="radio"
                                                                                                                                                                id="30days"
                                                                                                                                                                name="indexformVariables_getone_days"
                                                                                                                                                                class="oneRadioButtonOnHomePageRadiobtn"/>
                                                                                                                                                            <label
                                                                                                                                                                data-repaying-date="30"
                                                                                                                                                                class="wh100 oneRadioButtonOnHomePageLabel transition"
                                                                                                                                                                for="30days">
                                                                                                                                                                30
                                                                                                                                                                Days </label>
                                                                                                                                                        </div>
                                                                                                                                                    </div>
                                                                                                                                                    <!--right-->
                                                                                                                                                </div>
                                                                                                                                            </div>
                                                                                                                                        </div>
                                                                                                                                        <!--right-->
                                                                                                                                    </div>
                                                                                                                                </div>
                                                                                                                            </div>
                                                                                                                            <!--field-->

                                                                                                                            <!--field-->
                                                                                                                            <div
                                                                                                                                class="da-da OneFiledInMainFormApplicationHmeField">
                                                                                                                                <div
                                                                                                                                    class="da-da wh100">
                                                                                                                                    <div
                                                                                                                                        class="da-da wh100 displayFlex">
                                                                                                                                        <!--filed-->
                                                                                                                                        <div
                                                                                                                                            class="da-da wh100">
                                                                                                                                            <div
                                                                                                                                                class="da-da wh100">
                                                                                                                                                <div
                                                                                                                                                    class="da-da wh100 displayFlex">
                                                                                                                                                    <!--icon-->
                                                                                                                                                    <div
                                                                                                                                                        class="da-da OneFiledInMainFormApplicationHmeFieldIcon">
                                                                                                                                                        +94
                                                                                                                                                    </div>
                                                                                                                                                    <!--icon-->
                                                                                                                                                    <!--field-->
                                                                                                                                                    <div
                                                                                                                                                        class="da-da OneFiledInMainFormApplicationHmeFieldReal">
                                                                                                                                                        <input
                                                                                                                                                            name="indexformVariables_getone_mobilenumber"
                                                                                                                                                            type="text"
                                                                                                                                                            placeholder="Mobile Number (ie: 7XXXXXXXXX)
                                                                                               "
                                                                                                                                                            class="da-da wh100 InputDefaultApprientation transition indexformVariables_getone_mobilenumber"
                                                                                                                                                            value="">
                                                                                                                                                    </div>
                                                                                                                                                    <!--field-->

                                                                                                                                                </div>
                                                                                                                                            </div>
                                                                                                                                        </div>
                                                                                                                                        <!--filed-->

                                                                                                                                    </div>
                                                                                                                                </div>
                                                                                                                            </div>
                                                                                                                            <!--field-->

                                                                                                                            <!--field-->
                                                                                                                            <div
                                                                                                                                class="da-da OneFiledInMainFormApplicationHmeField">
                                                                                                                                <div
                                                                                                                                    class="da-da wh100">
                                                                                                                                    <div
                                                                                                                                        class="da-da wh100 displayFlex">
                                                                                                                                        <!--filed-->
                                                                                                                                        <div
                                                                                                                                            class="da-da wh100">
                                                                                                                                            <div
                                                                                                                                                class="da-da wh100">
                                                                                                                                                <div
                                                                                                                                                    class="da-da wh100">

                                                                                                                                                    <input
                                                                                                                                                        type="submit"
                                                                                                                                                        value="Start your application      "
                                                                                                                                                        class="da-da default-btn-isurucash transition">

                                                                                                                                                </div>
                                                                                                                                            </div>
                                                                                                                                        </div>
                                                                                                                                        <!--filed-->

                                                                                                                                    </div>
                                                                                                                                </div>
                                                                                                                            </div>
                                                                                                                            <!--field-->
                                                                                                                        </form>
                                                                                                                        <!--field-->
                                                                                                                        <div
                                                                                                                            class="da-da OneFiledInMainFormApplicationHmeField">
                                                                                                                            <div
                                                                                                                                class="da-da wh100">
                                                                                                                                <div
                                                                                                                                    class="da-da wh100 displayFlex">
                                                                                                                                    <!--filed-->
                                                                                                                                    <div
                                                                                                                                        class="da-da wh100">
                                                                                                                                        <div
                                                                                                                                            class="da-da wh100">
                                                                                                                                            <div
                                                                                                                                                class="da-da wh100">

                                                                                                                                                <p class="DefaultForumApplience">


                                                                                                                                                    By
                                                                                                                                                    Starting
                                                                                                                                                    the
                                                                                                                                                    application
                                                                                                                                                    above
                                                                                                                                                    you
                                                                                                                                                    acknowledge
                                                                                                                                                    that
                                                                                                                                                    you
                                                                                                                                                    have
                                                                                                                                                    read
                                                                                                                                                    and
                                                                                                                                                    agreed
                                                                                                                                                    on
                                                                                                                                                    the
                                                                                                                                                    following
                                                                                                                                                    <a href="https://isurucash.com/terms">Terms
                                                                                                                                                        of
                                                                                                                                                        use</a>
                                                                                                                                                    and
                                                                                                                                                    <a href="https://isurucash.com/privacy">Privacy
                                                                                                                                                        policy</a>
                                                                                                                                                </p>


                                                                                                                                            </div>
                                                                                                                                        </div>
                                                                                                                                    </div>
                                                                                                                                    <!--filed-->

                                                                                                                                </div>
                                                                                                                            </div>
                                                                                                                        </div>
                                                                                                                        <!--field-->

                                                                                                                    </div>
                                                                                                                </div>
                                                                                                            </div>
                                                                                                            <!-- one field-->

                                                                                                        </div>
                                                                                                    </div>
                                                                                                </div>
                                                                                                <!--loadn application-->

                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                    <!--right-->
                                                                                </Div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <!--right-->
                                                                </div>
                                                            </div>


                                                            <!--right-->

                                                            <!--right-->

                                                        </div>
                                                    </div>
                                                </div>
                                                <!--container-->
                                            </div>
                                        </div>
                                    </div>
                                    <!--top banner and forum-->


                                    <!--one section-->
                                    <section class="da-da HomepaheSetUp_1stsec DefaultArrowDownBotttom_any">
                                        <div class="da-da container">
                                            <div class="row">
                                                <!--one solution tag-->
                                                <div class="col-12 col-sm-12 col-md-12 col-lg-4">
                                                    <div class="da-da wh100">
                                                        <div class="da-da wh100">
                                                            <!--icon-->
                                                            <div class="da-da oneSolutionTag">
                                                                <div class="da-da wh100">
                                                                    <div class="da-da wh100">
                                                                        <img src="{{ url('images/business-plan.png') }}"
                                                                             width="150px" class="oneSolutionTagIMG">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <!--icon-->

                                                            <!--title-->
                                                            <div class="da-da oneSolutionTag">
                                                                <div class="da-da wh100">
                                                                    <div class="da-da wh100">
                                                                        <h3 class="da-da oneSolutH3ionTag">
                                                                            Simply apply online </h3>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <!--title-->

                                                            <!--description-->
                                                            <div class="da-da oneSolutionTag">
                                                                <div class="da-da wh100">
                                                                    <div class="da-da wh100">
                                                                        <p class="da-da oneSolutH3ionTag">
                                                                            No more paperwork required. It is easy as
                                                                            filling the form online and submitting. </p>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <!--description-->

                                                            <!--link-->
                                                            <!--link-->
                                                        </div>
                                                    </div>
                                                </div>
                                                <!--one solution tag-->
                                                <!--one solution tag-->
                                                <div class="col-12 col-sm-12 col-md-12 col-lg-4">
                                                    <div class="da-da wh100">
                                                        <div class="da-da wh100">
                                                            <!--icon-->
                                                            <div class="da-da oneSolutionTag">
                                                                <div class="da-da wh100">
                                                                    <div class="da-da wh100">
                                                                        <img src="{{ url('images/production.png') }}"
                                                                             width="150px" class="oneSolutionTagIMG">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <!--icon-->

                                                            <!--title-->
                                                            <div class="da-da oneSolutionTag">
                                                                <div class="da-da wh100">
                                                                    <div class="da-da wh100">
                                                                        <h3 class="da-da oneSolutH3ionTag">
                                                                            Total transparency in advance </h3>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <!--title-->

                                                            <!--description-->
                                                            <div class="da-da oneSolutionTag">
                                                                <div class="da-da wh100">
                                                                    <div class="da-da wh100">
                                                                        <p class="da-da oneSolutH3ionTag">
                                                                            You can see all the costs upfront before
                                                                            applying, including total repayment and due
                                                                            date. </p>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <!--description-->

                                                            <!--link-->
                                                            <!--link-->
                                                        </div>
                                                    </div>
                                                </div>
                                                <!--one solution tag-->
                                                <!--one solution tag-->
                                                <div class="col-12 col-sm-12 col-md-12 col-lg-4">
                                                    <div class="da-da wh100">
                                                        <div class="da-da wh100">
                                                            <!--icon-->
                                                            <div class="da-da oneSolutionTag">
                                                                <div class="da-da wh100">
                                                                    <div class="da-da wh100">
                                                                        <img src="{{ url('images/debt.png') }}"
                                                                             width="150px" class="oneSolutionTagIMG">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <!--icon-->

                                                            <!--title-->
                                                            <div class="da-da oneSolutionTag">
                                                                <div class="da-da wh100">
                                                                    <div class="da-da wh100">
                                                                        <h3 class="da-da oneSolutH3ionTag">
                                                                            Flexible repayment period </h3>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <!--title-->

                                                            <!--description-->
                                                            <div class="da-da oneSolutionTag">
                                                                <div class="da-da wh100">
                                                                    <div class="da-da wh100">
                                                                        <p class="da-da oneSolutH3ionTag">
                                                                            A customer has the option to repay the loan
                                                                            amount either within 10 or 30 days. </p>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <!--description-->

                                                            <!--link-->
                                                            <!--link-->
                                                        </div>
                                                    </div>
                                                </div>
                                                <!--one solution tag-->
                                            </div>


                                        </div>
                                    </section>
                                    <!--one section-->

                                    <!--one section-->
                                    <section class="da-da HomepaheSetUp_2ndsec parallax-window" data-parallax="scroll"
                                             data-image-src="{{ url('images/poly-bg.jpg') }}" data-androidFix="false">
                                        <div class="da-da container">

                                            <!--one row-->
                                            <div class="da-da row">
                                                <div class="da-da col-md-12">
                                                    <div class="da-da">
                                                        <div class="da-da">
                                                            <!--main heading-->
                                                            <div class="da-da MainHEadingOn">
                                                                <div class="da-da">
                                                                    <h3 class="da-da MainHEadingOnH3">

                                                                        Get money right now! </h3>
                                                                </div>
                                                            </div>
                                                            <!--main heading-->
                                                            <!--sub heading-->
                                                            <div class="da-da SubHEadingOn">
                                                                <div class="da-da">
                                                                    <h3 class="da-da SubHEadingOnH3">

                                                                        FOLLOW THESE EASY STEPS TO GET MONEY WITHIN 15
                                                                        MINUTES </h3>
                                                                </div>
                                                            </div>
                                                            <!--sub heading-->
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!--one row-->

                                            <!--one row-->
                                            <div class="row">
                                                <!--left-->
                                                <div class="da-da col-12 col-sm-12 col-md-12 col-lg-6">
                                                    <div class="da-da wh100">
                                                        <div class="da-da wh100">
											
											<span class="VerticalAlignMidle">
												<img src="{{ url('images/branding.png') }}"
                                                     class="da-da sectionImage_any">
											</span>

                                                        </div>
                                                    </div>
                                                </div>
                                                <!--left-->
                                                <!--right-->
                                                <div class="da-da col-12 col-sm-12 col-md-12 col-lg-6">
                                                    <div class="da-da wh100">
                                                        <div class="da-da wh100">

                                                            <!--contents headers area-->
                                                            <div class="da-da SectionVerticalContentsArea">
                                                                <div class="da-da wh100">
                                                                    <div class="da-da wh100">
                                                                        <!--hedaer one-->
                                                                        <div
                                                                            class="da-da SectionVerticalContentsAreahd">
                                                                            <div class="da-da">
                                                                                <h3 class="da-da SectionVerticalContentsAreahd_one">
                                                                                    Just fill in our online application
                                                                                    form </h3>
                                                                            </div>
                                                                        </div>
                                                                        <!--hedaer one-->

                                                                        <!--sub text one-->
                                                                        <div
                                                                            class="da-da SectionVerticalContentsAreahd">
                                                                            <div class="da-da">
                                                                                <p class="da-da SectionVerticalContentsAreahd_two">
                                                                                    Now you can fill our online loan
                                                                                    request form and submit for review.
                                                                                    Save your time and no more waiting
                                                                                    in queues with our hassle-free
                                                                                    online microloan service. </p>
                                                                            </div>
                                                                        </div>
                                                                        <!--sub text one-->

                                                                        <!--button-->
                                                                        <div
                                                                            class="da-da SectionVerticalContentsAreahd">
                                                                            <div class="da-da">
                                                                                <a href="#"
                                                                                   class="da-da btnIsDefault_btn">

                                                                                    Go to the form <span
                                                                                        class="da-da IconisUptoForm"><i
                                                                                            class="fas fa-long-arrow-alt-right"></i></span>
                                                                                </a>
                                                                            </div>
                                                                        </div>
                                                                        <!--button-->
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <!--contents headers area-->

                                                        </div>
                                                    </div>
                                                </div>
                                                <!--right-->

                                            </div>
                                            <!--one row-->

                                        </div>
                                    </section>
                                    <!--one section-->

                                    <!--one section-->
                                    <section class="da-da HomepaheSetUp_3rd parallax-window DefaultArrowDownBotttom_any"
                                             data-parallax="scroll" data-image-src="">
                                        <div class="da-da container">


                                            <!--one row-->
                                            <div class="row">

                                                <!--right-->
                                                <div class="da-da col-12 col-sm-12 col-md-12 col-lg-6">
                                                    <div class="da-da wh100">
                                                        <div class="da-da wh100">

                                                            <!--contents headers area-->
                                                            <div class="da-da SectionVerticalContentsArea">
                                                                <div class="da-da wh100">
                                                                    <div class="da-da wh100">
                                                                        <!--hedaer one-->
                                                                        <div
                                                                            class="da-da SectionVerticalContentsAreahd">
                                                                            <div class="da-da">
                                                                                <h3 class="da-da SectionVerticalContentsAreahd_one colorBlack">
                                                                                    Enter accurate details in the
                                                                                    application form </h3>
                                                                            </div>
                                                                        </div>
                                                                        <!--hedaer one-->

                                                                        <!--sub text one-->
                                                                        <div
                                                                            class="da-da SectionVerticalContentsAreahd">
                                                                            <div class="da-da">
                                                                                <p class="da-da SectionVerticalContentsAreahd_two colorBlack">
                                                                                    Fill in the necessary information to
                                                                                    avoid any delays in loan processing.
                                                                                    The loan application will be
                                                                                    rejected if you fail to provide
                                                                                    accurate information. </p>
                                                                            </div>
                                                                        </div>
                                                                        <!--sub text one-->

                                                                        <!--button-->
                                                                        <div
                                                                            class="da-da SectionVerticalContentsAreahd">
                                                                            <div class="da-da">
                                                                                <a href="#"
                                                                                   class="da-da btnIsDefault_btn">

                                                                                    Go to the form <span
                                                                                        class="da-da IconisUptoForm"><i
                                                                                            class="fas fa-long-arrow-alt-right"></i></span>
                                                                                </a>
                                                                            </div>
                                                                        </div>
                                                                        <!--button-->
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <!--contents headers area-->

                                                        </div>
                                                    </div>
                                                </div>
                                                <!--right-->

                                                <!--left-->
                                                <div class="da-da col-12 col-sm-12 col-md-12 col-lg-6">
                                                    <div class="da-da wh100">
                                                        <div class="da-da wh100">
											
											<span class="VerticalAlignMidle">
												<img src="{{ url('images/customer.png') }}"
                                                     class="da-da sectionImage_any">
											</span>

                                                        </div>
                                                    </div>
                                                </div>
                                                <!--left-->

                                            </div>
                                            <!--one row-->

                                        </div>
                                    </section>
                                    <!--one section-->


                                    <!--one section-->
                                    <section class="da-da HomepaheSetUp_2ndsec parallax-window eeend" data-parallax="scroll"
                                             data-image-src="{{ url('images/yellow-bg.jpg') }}">
                                        <div class="da-da container">


                                            <!--one row-->
                                            <div class="row">
                                                <!--left-->
                                                <div class="da-da col-12 col-sm-12 col-md-12 col-lg-6">
                                                    <div class="da-da wh100">
                                                        <div class="da-da wh100">

											<span class="VerticalAlignMidle">
												<img src="{{ url('images/risk.png') }}" class="da-da sectionImage_any">
											</span>

                                                        </div>
                                                    </div>
                                                </div>
                                                <!--left-->
                                                <!--right-->
                                                <div class="da-da col-12 col-sm-12 col-md-12 col-lg-6">
                                                    <div class="da-da wh100">
                                                        <div class="da-da wh100">

                                                            <!--contents headers area-->
                                                            <div class="da-da SectionVerticalContentsArea">
                                                                <div class="da-da wh100">
                                                                    <div class="da-da wh100">
                                                                        <!--hedaer one-->
                                                                        <div
                                                                            class="da-da SectionVerticalContentsAreahd">
                                                                            <div class="da-da">
                                                                                <h3 class="da-da SectionVerticalContentsAreahd_one">
                                                                                    Obtain money to your account within
                                                                                    next few hours </h3>
                                                                            </div>
                                                                        </div>
                                                                        <!--hedaer one-->

                                                                        <!--sub text one-->
                                                                        <div
                                                                            class="da-da SectionVerticalContentsAreahd">
                                                                            <div class="da-da">
                                                                                <p class="da-da SectionVerticalContentsAreahd_two">
                                                                                    The loan will be deposited to the
                                                                                    given bank account if the conditions
                                                                                    are met. </p>
                                                                            </div>
                                                                        </div>
                                                                        <!--sub text one-->

                                                                        <!--button-->
                                                                        <div
                                                                            class="da-da SectionVerticalContentsAreahd">
                                                                            <div class="da-da">
                                                                                <a href="#"
                                                                                   class="da-da btnIsDefault_btn">

                                                                                    Go to the form <span
                                                                                        class="da-da IconisUptoForm"><i
                                                                                            class="fas fa-long-arrow-alt-right"></i></span>
                                                                                </a>
                                                                            </div>
                                                                        </div>
                                                                        <!--button-->
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <!--contents headers area-->

                                                        </div>
                                                    </div>
                                                </div>
                                                <!--right-->

                                            </div>
                                            <!--one row-->

                                        </div>
                                    </section>
                                    <!--one section-->

                                    <!--one section-->
                                    <section class="da-da HomepaheSetUp_4rtho  parallax-window" data-parallax="scroll"
                                             data-image-src="{{ url('images/right-choice.jpg') }}" data-speed="0.3">
                                        <div class="container">
                                            <!--header-->
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <div class="da-d">
                                                        <div class="da-da">
                                                            <h3 class="PurpleHeadingColor">

                                                                Isurucash <span
                                                                    class='color_yellow'>is the right choice</span> for
                                                                you if: </h3>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!--header-->

                                            <!--points area starts-->
                                            <div class="row">
                                                <!--left-->
                                                <div class="col-12 col-sm-12 col-md-12 col-lg-6">
                                                    <div class="da-da wh100">
                                                        <div class="da-da wh100">

                                                            <!--one row-->
                                                            <div class="da-da oneRowOifPonint">
                                                                <div class="da-da wh100">
                                                                    <div class="da-da wh100">

                                                                        <!--icon-->
                                                                        <span class="da-da oneRowOifPonintHeadIcon">
                                                        <i class="far fa-check-circle"></i>
                                                        </span>
                                                                        <!--icon-->

                                                                        <!--title-->
                                                                        <div class="da-da oneRowOifPonintHead">
                                                                            <div class="da-da wh100">
                                                                                <h3>
                                                                                    You are a Sri Lankan resident
                                                                                    without any </h3>
                                                                            </div>
                                                                        </div>
                                                                        <!--title-->

                                                                        <!--Sub title-->
                                                                        <div class="da-da oneRowOifPonintHeadSub">
                                                                            <div class="da-da wh100">
                                                                                <h3>
                                                                                    bankrupt or blacklisted
                                                                                    history. </h3>
                                                                            </div>
                                                                        </div>
                                                                        <!--Sub title-->

                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <!--one row-->

                                                            <!--one row-->
                                                            <div class="da-da oneRowOifPonint">
                                                                <div class="da-da wh100">
                                                                    <div class="da-da wh100">

                                                                        <!--icon-->
                                                                        <span class="da-da oneRowOifPonintHeadIcon">
                                                        <i class="far fa-check-circle"></i>
                                                        </span>
                                                                        <!--icon-->

                                                                        <!--title-->
                                                                        <div class="da-da oneRowOifPonintHead">
                                                                            <div class="da-da wh100">
                                                                                <h3>
                                                                                    Your age is between 20 to 55 years
                                                                                    with an
                                                                                </h3>
                                                                            </div>
                                                                        </div>
                                                                        <!--title-->

                                                                        <!--Sub title-->
                                                                        <div class="da-da oneRowOifPonintHeadSub">
                                                                            <div class="da-da wh100">
                                                                                <h3>
                                                                                    uninterrupted fixed regular income.
                                                                                </h3>
                                                                            </div>
                                                                        </div>
                                                                        <!--Sub title-->

                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <!--one row-->

                                                            <!--one row-->
                                                            <div class="da-da oneRowOifPonint">
                                                                <div class="da-da wh100">
                                                                    <div class="da-da wh100">

                                                                        <!--icon-->
                                                                        <span class="da-da oneRowOifPonintHeadIcon">
                                                        <i class="far fa-check-circle"></i>
                                                        </span>
                                                                        <!--icon-->

                                                                        <!--title-->
                                                                        <div class="da-da oneRowOifPonintHead">
                                                                            <div class="da-da wh100">
                                                                                <h3>
                                                                                    Looking for a fast and easy online
                                                                                </h3>
                                                                            </div>
                                                                        </div>
                                                                        <!--title-->

                                                                        <!--Sub title-->
                                                                        <div class="da-da oneRowOifPonintHeadSub">
                                                                            <div class="da-da wh100">
                                                                                <h3>
                                                                                    money lending service in Sri Lanka.
                                                                                </h3>
                                                                            </div>
                                                                        </div>
                                                                        <!--Sub title-->

                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <!--one row-->

                                                        </div>
                                                    </div>
                                                </div>
                                                <!--left-->

                                                <!--right-->
                                                <div class="col-12 col-sm-12 col-md-12 col-lg-6">
                                                    <div class="da-da wh100">
                                                        <div class="da-da wh100">

                                                            <!--one row-->
                                                            <div class="da-da oneRowOifPonint">
                                                                <div class="da-da wh100">
                                                                    <div class="da-da wh100">

                                                                        <!--icon-->
                                                                        <span class="da-da oneRowOifPonintHeadIcon">
                                                        <i class="far fa-check-circle"></i>
                                                        </span>
                                                                        <!--icon-->

                                                                        <!--title-->
                                                                        <div class="da-da oneRowOifPonintHead">
                                                                            <div class="da-da wh100">
                                                                                <h3>
                                                                                    Individuals in search of loans to
                                                                                    resolve
                                                                                </h3>
                                                                            </div>
                                                                        </div>
                                                                        <!--title-->

                                                                        <!--Sub title-->
                                                                        <div class="da-da oneRowOifPonintHeadSub">
                                                                            <div class="da-da wh100">
                                                                                <h3>
                                                                                    unexpected money emergencies.
                                                                                </h3>
                                                                            </div>
                                                                        </div>
                                                                        <!--Sub title-->

                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <!--one row-->

                                                            <!--one row-->
                                                            <div class="da-da oneRowOifPonint">
                                                                <div class="da-da wh100">
                                                                    <div class="da-da wh100">

                                                                        <!--icon-->
                                                                        <span class="da-da oneRowOifPonintHeadIcon">
                                                        <i class="far fa-check-circle"></i>
                                                        </span>
                                                                        <!--icon-->

                                                                        <!--title-->
                                                                        <div class="da-da oneRowOifPonintHead">
                                                                            <div class="da-da wh100">
                                                                                <h3>
                                                                                    You need a microloan provider with
                                                                                    full
                                                                                </h3>
                                                                            </div>
                                                                        </div>
                                                                        <!--title-->

                                                                        <!--Sub title-->
                                                                        <div class="da-da oneRowOifPonintHeadSub">
                                                                            <div class="da-da wh100">
                                                                                <h3>
                                                                                    transparency and no hidden charges.
                                                                                </h3>
                                                                            </div>
                                                                        </div>
                                                                        <!--Sub title-->

                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <!--one row-->

                                                            <!--one row-->
                                                            <div class="da-da oneRowOifPonint">
                                                                <div class="da-da wh100">
                                                                    <div class="da-da wh100">

                                                                        <!--icon-->
                                                                        <span class="da-da oneRowOifPonintHeadIcon">
                                                        <i class="far fa-check-circle"></i>
                                                        </span>
                                                                        <!--icon-->

                                                                        <!--title-->
                                                                        <div class="da-da oneRowOifPonintHead">
                                                                            <div class="da-da wh100">
                                                                                <h3>
                                                                                    Seeking a loan service with no
                                                                                    guarantors,
                                                                                </h3>
                                                                            </div>
                                                                        </div>
                                                                        <!--title-->

                                                                        <!--Sub title-->
                                                                        <div class="da-da oneRowOifPonintHeadSub">
                                                                            <div class="da-da wh100">
                                                                                <h3>
                                                                                    paperwork and minimum processing
                                                                                    time.
                                                                                </h3>
                                                                            </div>
                                                                        </div>
                                                                        <!--Sub title-->

                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <!--one row-->

                                                        </div>
                                                    </div>
                                                </div>
                                                <!--right-->
                                            </div>
                                            <!--points area starts-->

                                        </div>
                                    </section>
                                    <!--one section-->


                                    <!--one section-->
                                    <section class="da-da HomepaheSetUp_supportiveicons DefaultArrowDownBotttom_any">
                                        <div class="container">
                                            <div class="row">
                                                <!--one column-->
                                                <div class="col-12 col-sm-12 col-md-12 col-lg-3">
                                                    <div class="da-da wh100">
                                                        <div class="da-da wh100">
                                            <span class="SupportiveAligned_icons">
                                                <i class="fas fa-certificate"></i>
                                                </span>
                                                            <span class="SupportiveAligned_text">

                                                     Official                                                    <span
                                                                    class="SupportiveAligned_textSub">
                                                    works                                                    </span>
                                                </span>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!--one column-->
                                                <!--one column-->
                                                <div class="col-12 col-sm-12 col-md-12 col-lg-3">
                                                    <div class="da-da wh100">
                                                        <div class="da-da wh100">
                                            <span class="SupportiveAligned_icons">
                                                <i class="fas fa-ambulance"></i>
                                                </span>
                                                            <span class="SupportiveAligned_text">

                                                     Medical                                                    <span
                                                                    class="SupportiveAligned_textSub">
                                                    needs                                                    </span>
                                                </span>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!--one column-->
                                                <!--one column-->
                                                <div class="col-12 col-sm-12 col-md-12 col-lg-3">
                                                    <div class="da-da wh100">
                                                        <div class="da-da wh100">
                                            <span class="SupportiveAligned_icons">
                                                <i class="fas fa-archway"></i>
                                                </span>
                                                            <span class="SupportiveAligned_text">

                                                    Educational                                                    <span
                                                                    class="SupportiveAligned_textSub">
                                                    things                                                    </span>
                                                </span>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!--one column-->
                                                <!--one column-->
                                                <div class="col-12 col-sm-12 col-md-12 col-lg-3">
                                                    <div class="da-da wh100">
                                                        <div class="da-da wh100">
                                            <span class="SupportiveAligned_icons">
                                                <i class="fas fa-umbrella-beach"></i>
                                                </span>
                                                            <span class="SupportiveAligned_text">

                                                Traveling                                                    <span
                                                                    class="SupportiveAligned_textSub">
                                                    work                                                    </span>
                                                </span>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!--one column-->
                                            </div>
                                        </div>
                                    </section>
                                    <!--one section-->

                                    <!--footer-->
                                    <!--one section-->
                                    <section class="da-da HomepaheSetUp_contactInfo">
                                        <div class="da-da container">
                                            <div class="da-da wh100">
                                                <div class="da-da wh100">
                                                    <div class="row">

                                                        <!--address-->
                                                        <div class="col-12 col-sm-12 col-md-12 col-lg-3">
                                                            <div class="da-da wh100">
                                                                <div class="da-da wh100">
                                                                    <!--header-->
                                                                    <div class="da-da HomepaheSetUp_contactInfoHeader">
                                                                        <h3 class="da-da HomepaheSetUp_contactInfoHeaderH3">

                                                                            Contact us </h3>
                                                                    </div>
                                                                    <!--header-->

                                                                    <!--address p-->
                                                                    <div class="da-da HomepaheSetUp_contactInfoAddress">
                                                                        <p class="da-da HomepaheSetUp_contactInfoAddressP">
                                                                            In an any situation </p>
                                                                    </div>
                                                                    <!--address p-->

                                                                </div>
                                                            </div>
                                                        </div>
                                                        <!--address-->

                                                        <!--Postal-->
                                                        <div class="col-12 col-sm-12 col-md-12 col-lg-3">
                                                            <div class="da-da wh100">
                                                                <div class="da-da wh100">
                                                                    <!--header-->
                                                                    <div class="da-da HomepaheSetUp_contactInfoHeader">
                                                                        <h3 class="da-da HomepaheSetUp_contactInfoHeaderH3">

                                                                            Hotline
                                                                        </h3>
                                                                    </div>
                                                                    <!--header-->

                                                                    <!--address p-->
                                                                    <div class="da-da HomepaheSetUp_contactInfoAddress">
                                                                        <p class="da-da HomepaheSetUp_contactInfoAddressP">
                                                                            <a href="#">+94 777187147</a>
                                                                        </p>
                                                                    </div>
                                                                    <!--address p-->
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <!--Postal-->

                                                        <!--mobile number-->
                                                        <div class="col-12 col-sm-12 col-md-12 col-lg-6">
                                                            <div class="da-da wh100">
                                                                <div class="da-da wh100">
                                                                    <!--header-->
                                                                    <div class="da-da HomepaheSetUp_contactInfoHeader">
                                                                        <h3 class="da-da HomepaheSetUp_contactInfoHeaderH3 HomepaheSetUp_contactInfoHeaderH32">

                                                                            Write us
                                                                        </h3>
                                                                    </div>
                                                                    <!--header-->

                                                                    <!--address p-->
                                                                    <div class="da-da HomepaheSetUp_contactInfoAddress">
                                                                        <p class="da-da HomepaheSetUp_contactInfoAddressP HomepaheSetUp_contactInfoAddressP2">
                                                                            <a href="mailto:info@isurucash.com">info@dimuthucash.com</a>
                                                                        </p>
                                                                    </div>
                                                                    <!--address p-->
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <!--mobile number-->

                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </section>
                                    <!--one section-->

                                    <!--one section-->
                                    <footer class="da-da HomepaheSetUp_footerInfo">
                                        <div class="da-da container">
                                            <div class="da-da wh100">
                                                <div class="da-da wh100">
                                                    <div class="row">

                                                        <!--left-->
                                                        <div class="col-12 col-sm-12 col-md-12 col-lg-6">
                                                            <div class="da-da wh100">
                                                                <div class="da-da wh100">
                                                                    <p class="footerLeftLinkTag">
                                                                        Dimuthucash pvt Ltd - PV00203344 | All rights
                                                                        reserved - Website by <a
                                                                            href="http://www.dimuthuwebs.com/"
                                                                            rel="nofollow" target="_blank">Dimuthu Web Solutions</a>
                                                                    </p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <!--left-->

                                                        <!--Right-->
                                                        <div class="col-12 col-sm-12 col-md-12 col-lg-6">
                                                            <div class="da-da wh100">
                                                                <div class="da-da wh100">
                                                                    <ul class="HomepaheSetUp_footerInfoSocialIcons">
                                                                        <li>
                                                                            <a target="_blank"
                                                                               href="https://www.facebook.com/Isurucash">
                                                    <span>
                                                        <i class="fab fa-facebook-f"></i>
                                                        </span>
                                                                            </a>
                                                                        </li>
                                                                        <li>
                                                                            <a href="#">
                                                    <span>
                                                        <i class="fab fa-instagram"></i>
                                                        </span>
                                                                            </a>
                                                                        </li>
                                                                        <li>
                                                                            <a href="#">
                                                    <span>
                                                        <i class="fab fa-twitter"></i>
                                                        </span>
                                                                            </a>
                                                                        </li>
                                                                        <li>
                                                                            <a href="#">
                                                    <span>
                                                        <i class="fab fa-google-plus-g"></i>
                                                        </span>
                                                                            </a>
                                                                        </li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <!--Right-->


                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </footer>
                                    <!--one section-->


                                    <!--back to top-->
                                    <div class="da-da BackToTopOnApp">
                                        <div class="da-da BackToTopOnAppres">
                                            <div class="da-da wh100">
        <span id="toTop">
        <i class="far fa-arrow-alt-circle-up"></i>
        </span>
                                            </div>
                                        </div>
                                    </div>

                                    <script>
                                        //back to top
                                        $(window).scroll(function () {
                                            if ($(this).scrollTop()) {
                                                $('#toTop').fadeIn();
                                            } else {
                                                $('#toTop').fadeOut();
                                            }
                                        });

                                        $("#toTop").click(function () {
                                            $("html, body").animate({scrollTop: 0}, 1000);
                                        });
                                        //back to top
                                    </script>
                                    <!--back to top-->                        <!--footer-->

                                </div>
                            </div>
                        </div>
                        <!--body main-->

                    </div>
                </div>
            </div>
            <!--main body-->

        </div>
    </div>
</div>
<!--default body-->


<script type="text/javascript" src="{{ url('js/bottom_java_08222018.js') }}"></script>
</body>
</html>
