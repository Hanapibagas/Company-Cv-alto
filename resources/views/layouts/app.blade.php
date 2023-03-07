<!DOCTYPE html>
<html lang="en" dir="">

<head>
    <meta charset="utf-8">
    @stack('link')
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <title>CV. Alto Perkasa | @yield('title')</title>
    <link rel="shortcut icon" href="favicon.ico">

    @include('includes.pages.style')

    @stack('add-style')

</head>

<body>

    @include('includes.pages.navbar')

    <main id="content" role="main">

        @yield('content')

    </main>

    {{-- @include('includes.pages.footer') --}}

    <section
        class="elementor-section elementor-top-section elementor-element elementor-element-0119e03 elementor-section-boxed elementor-section-height-default elementor-section-height-default"
        data-id="0119e03" data-element_type="section">
        <div class="elementor-container elementor-column-gap-default">
            <div class="elementor-row">
                <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-1d0e59b ot-flex-column-vertical"
                    data-id="1d0e59b" data-element_type="column">
                    <div class="elementor-column-wrap elementor-element-populated">
                        <div class="elementor-widget-wrap">
                            <div class="elementor-element elementor-element-a82a896 elementor-widget elementor-widget-shortcode"
                                data-id="a82a896" data-element_type="widget" data-widget_type="shortcode.default">
                                <div class="elementor-widget-container">
                                    <div class="elementor-shortcode">
                                        <style>
                                            a.blantershow-chat {
                                                background: linear-gradient(to right top, #6f96f3, #164ed2);
                                                color: #fff;
                                                position: fixed;
                                                z-index: 0;
                                                bottom: 25px;
                                                right: 30px;
                                                font-size: 15px;
                                                padding: 10px 20px;
                                                border-radius: 30px;
                                                box-shadow: 0 1px 15px rgba(32, 33, 36, .28)
                                            }

                                            a.blantershow-chat i {
                                                transform: scale(1.2);
                                                margin: 0 10px 0 0
                                            }

                                            .header-chat {
                                                background: linear-gradient(to right top, #6f96f3, #164ed2);
                                                color: #fff;
                                                padding: 20px
                                            }

                                            .header-chat h3 {
                                                margin: 0 0 10px
                                            }

                                            .header-chat p {
                                                font-size: 14px;
                                                line-height: 1.7;
                                                margin: 0
                                            }

                                            .info-avatar {
                                                position: relative
                                            }

                                            .info-avatar img {
                                                border-radius: 100%;
                                                width: 50px;
                                                float: left;
                                                margin: 0 10px 0 0
                                            }

                                            .info-avatar:before {
                                                z-index: 1;
                                                font-family: "Font Awesome 5 Brands";
                                                background: #23ab23;
                                                color: #fff;
                                                padding: 4px 5px;
                                                border-radius: 100%;
                                                position: absolute;
                                                top: 30px;
                                                left: 30px
                                            }

                                            a.informasi {
                                                padding: 20px;
                                                display: block;
                                                overflow: hidden;
                                                animation-name: showhide;
                                                animation-duration: 2.5s
                                            }

                                            .info-chat span {
                                                display: block
                                            }

                                            #get-label,
                                            span.chat-label {
                                                font-size: 12px;
                                                color: #888
                                            }

                                            #get-nama,
                                            span.chat-nama {
                                                margin: 5px 0 0;
                                                font-size: 15px;
                                                font-weight: 700;
                                                color: #222
                                            }

                                            #get-label,
                                            #get-nama {
                                                color: #fff
                                            }

                                            span.my-number {
                                                display: none
                                            }

                                            .blanter-msg {
                                                color: #444;
                                                padding: 10px;
                                                border-top: 1px solid #ddd;
                                            }

                                            textarea#chat-input {
                                                border: none;
                                                font-family: 'Arial', sans-serif;
                                                width: 100%;
                                                height: 100%;
                                                outline: none;
                                                resize: none;
                                                font-size: 12px
                                            }

                                            a#send-it {
                                                color: #555;
                                                width: 60px;
                                                margin-left: 28px;
                                                font-weight: 700;
                                                padding: 8px;
                                                background: #eee;
                                                border-radius: 10px;
                                                height: 45px
                                            }

                                            .first-msg {
                                                background: #f5f5f5;
                                                padding: 30px;
                                                text-align: center
                                            }

                                            .first-msg span {
                                                background: #e2e2e2;
                                                color: #333;
                                                font-size: 14.2px;
                                                line-height: 1.7;
                                                border-radius: 10px;
                                                padding: 15px 20px;
                                                display: inline-block
                                            }

                                            .start-chat .blanter-msg {
                                                display: flex
                                            }

                                            #get-number {
                                                display: none
                                            }

                                            a.close-chat {
                                                position: absolute;
                                                top: 5px;
                                                right: 15px;
                                                color: #fff;
                                                font-size: 30px
                                            }

                                            /* @keyframes showhide {
                                                from {
                                                    transform: scale(.5);
                                                    opacity: 0
                                                }
                                            } */

                                            @keyframes showchat {
                                                from {
                                                    transform: scale(0);
                                                    opacity: 0
                                                }
                                            }

                                            @media screen and (max-width:480px) {
                                                #whatsapp-chat {
                                                    width: auto;
                                                    left: 5%;
                                                    right: 5%;
                                                    font-size: 80%
                                                }
                                            }

                                            /* .hide {
                                                display: none;
                                                animation-name: showhide;
                                                animation-duration: 1.5s;
                                                transform: scale(1);
                                                opacity: 1
                                            } */

                                            .show {
                                                display: block;
                                                animation-name: showhide;
                                                animation-duration: 1.5s;
                                                transform: scale(1);
                                                opacity: 1
                                            }

                                            .head-home h3 {
                                                color: white !important
                                            }
                                        </style>

                                        <a class="blantershow-chat" target="_blank" href="https://wa.me/6282192272289"
                                            title="Show Chat" data-wpel-link="internal"><i
                                                class="fab fa-whatsapp"></i>Butuh bantuan?</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    @include('includes.pages.script')

    @stack('add-script')

</body>

</html>