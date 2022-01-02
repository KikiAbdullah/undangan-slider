<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, minimal-ui">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-status-bar-style" content="black">
    <link rel="apple-touch-icon" href="images/apple-touch-icon.png" />
    <link rel="apple-touch-startup-image" href="images/apple-touch-startup-image-640x920.png">
    <title>niobe - mobile template</title>
    <link rel="stylesheet" href="css/swiper.css">
    <link rel="stylesheet" href="css/style.min.css">
    <link href="https://fonts.googleapis.com/css?family=Assistant:200,400,700&display=swap" rel="stylesheet">
</head>

<body id="mobile_wrap">

    <div class="panel-overlay"></div>

    <!-- Left panel -->
    <div id="panel-left"></div>
    <!-- Right panel -->
    <div id="panel-right"></div>
    <!-- Bottom panel -->
    <div id="panel-bottom"></div>

    <div class="views">

        <div class="view view-main">

            <div class="pages">
                <div data-page="conversation" class="page page--conversation">
                    <div class="page-content">

                        <div class="navbar navbar--fixed navbar--fixed-top navbar--page">

                            <div class="navbar__col navbar__col--icon navbar__col--icon-left">
                                <a href="chat.html"><img src="images/icons/orange/back.png" alt="" title="" /></a>
                            </div>
                            <div class="navbar__col navbar__col--title navbar__col--title-sm navbar__col--title-centered">
                                <a href="chat.html">Alexandra Doe</a>
                                <span class="navbar__col-subtitle">Last online: 10 min ago</span>
                            </div>
                            <div class="navbar__col navbar__col--icon navbar__col--icon-right">
                                <a href="tel:12345678"><img src="images/icons/orange/phone.png" alt="" title="" /></a>
                            </div>
                        </div>

                        <div id="pages_maincontent" class="pages_maincontent--conversation">


                            <div class="page_single layout_fullwidth_padding">


                                <ul class="conversation">

                                    <li class="conversation__row conversation__row--received conversation__row--undread">
                                        <div class="conversation__avatar"><span class="conversation__active-user"></span><img src="images/avatar.jpg" alt="" title="" /></div>

                                        <div class="conversation__content">
                                            <p>Hi there, just wanted to let you know about our vacation</p>
                                            <span class="conversation__time">10:21 am</span>
                                        </div>

                                    </li>
                                    <li class="conversation__row conversation__row--sent">
                                        <div class="conversation__content">
                                            <p>Hi Alexandra!</p>
                                            <span class="conversation__time">8:32 am</span>
                                        </div>
                                        <div class="conversation__avatar"><span class="conversation__active-user"></span><img src="images/avatar.jpg" alt="" title="" /></div>
                                    </li>
                                    <li class="conversation__row conversation__row--sent">
                                        <div class="conversation__content">
                                            <p>Let's travel to Paris this summer</p>
                                            <span class="conversation__time">8:20 am</span>
                                        </div>
                                        <div class="conversation__avatar"><span class="conversation__active-user"></span><img src="images/avatar.jpg" alt="" title="" /></div>
                                    </li>
                                    <li class="conversation__row conversation__row--received">
                                        <div class="conversation__avatar"><span class="conversation__active-user"></span><img src="images/avatar.jpg" alt="" title="" /></div>

                                        <div class="conversation__content">
                                            <p>Sure let's make a plan</p>
                                            <span class="conversation__time">7:21 am</span>
                                        </div>

                                    </li>
                                    <li class="conversation__row conversation__row--received">
                                        <div class="conversation__avatar"><span class="conversation__active-user"></span><img src="images/avatar.jpg" alt="" title="" /></div>

                                        <div class="conversation__content">
                                            <p>I was offline for a period</p>
                                            <span class="conversation__time">7:20 am</span>
                                        </div>

                                    </li>
                                    <li class="conversation__row conversation__row--sent">
                                        <div class="conversation__content">
                                            <p>Duis aute irure dolor in reprehenderit in voluptate velit esse</p>
                                            <span class="conversation__time">7:00 am</span>
                                        </div>
                                        <div class="conversation__avatar"><span class="conversation__active-user"></span><img src="images/avatar.jpg" alt="" title="" /></div>
                                    </li>
                                    <li class="conversation__row conversation__row--received">
                                        <div class="conversation__avatar"><span class="conversation__active-user"></span><img src="images/avatar.jpg" alt="" title="" /></div>

                                        <div class="conversation__content">
                                            <p>Checkout this ofer <a href="chat.html">Best travel guide to Paris</a></p>
                                            <span class="conversation__time">7:21 am</span>
                                        </div>

                                    </li>
                                </ul>
                                <div class="conversation-submit">
                                    <form class="conversation-submit__form" action="">
                                        <textarea type="textarea" class="conversation-submit__textarea" id="" name="" placeholder="Type your message..."></textarea>
                                        <a href="#" class="conversation-submit__send"><img src="images/icons/orange/send.png" alt="" title="" /></a>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Login Popup -->
    <div id="popup-login"></div>

    <!-- Register Popup -->
    <div id="popup-signup"></div>

    <!-- Forgot Password Popup -->
    <div id="popup-forgot"></div>

    <!-- Social Icons Popup -->
    <div id="popup-social"></div>

    <script src="js/jquery-3.3.1.min.js"></script>
    <script src="js/jquery.validate.min.js"></script>
    <script src="js/swiper.min.js"></script>
    <script src="js/jquery.custom.js"></script>
</body>

</html>