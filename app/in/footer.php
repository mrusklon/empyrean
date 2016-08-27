<footer>
    <div class="footer-top"></div>
    <div class="container footer-middle">
        <div class="row">
            <nav class="footer-menu">
                <div class="col-md-3">
                    <ul class="footerNav">
                        <li>
                            <h4><a class="fototerH4" href="../faq.php">ПОМОЩЬ</a></h4>
                            <ul>
                                <li><a class="fancybox" href="#callbackHead">НАПИСАТЬ НАМ</a></li>
                                <li><a href="../faq.php#howtopay">КАК ОПЛАТИТЬ</a></li>
                                <li><a href="../faq.php">ВОПРОСЫ И ОТВЕТЫ</a></li>
                                <li><a href="../about.php#service">СЕРВИСНОЕ ОБСЛУЖИВАНИЕ</a></li>
                            </ul>
                        </li>
                    </ul>
                </div>
                <div class="col-md-3">
                    <ul class="footerNav">
                        <li>
                            <h4><a class="fototerH4" href="../about.php">О НАС</a></h4>
                            <ul>
                                <li><a href="../about.php">НАШЕ МИРОВОЗРЕНИЕ</a></li>
                                <li><a href="../about.php#job">РАБОТА НА ВЫЕЗДЕ</a></li>
                                <li><a href="../about.php#top">ПРОИЗВОДСТВО</a></li>
<!--                                <li><a href="../about.php">СЕРВИС</a></li>-->
                            </ul>
                        </li>
                    </ul>
                </div>
                <div class="col-md-3">
                    <ul class="footerNav">
                        <li>
                            <h4><a class="fototerH4" href="../contacts.php">НАША МАСТЕРСКАЯ</a></h4>
                            <ul>
                                <li><a href="../contacts.php#map">НА КАРТЕ</a></li>
                                <li><a href="../contacts.php">КАК НАЙТИ</a></li>
                            </ul>
                        </li>
                    </ul>
                </div>
                <div class="col-md-3">
                    <ul>
                        <li>
                            <h4>СЛЕДИТЕ ЗА ОБНОВЛЕНИЯМИ</h4>
                            <div class="socialWrap">
                                <div class="socialbtns">
                                    <ul class="social">
                                        <li><a target="_blank" href="https://www.instagram.com/empyrean.moscow/" class="fa fa-lg fa-instagram"></a></li>
                                        <li><a target="_blank" href="https://www.facebook.com/empyrean.moscow" class="fa fa-lg fa-facebook"></a></li>
<!--                                        <li><a target="_blank" href="http://go-great-guns.tumblr.com/" class="fa fa-lg fa-tumblr"></a></li>-->
                                    </ul>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
            </nav>
        </div>
        <div class="copiright"><?php echo date("Y"); ?> © EMPYREAN.</div>
    </div>
</footer>

<!--[if lt IE 9]>
<script src="libs/html5shiv/es5-shim.min.js"></script>
<script src="libs/html5shiv/html5shiv.min.js"></script>
<script src="libs/html5shiv/html5shiv-printshiv.min.js"></script>
<script src="libs/respond/respond.min.js"></script>
<![endif]-->

<!-- Load CSS -->
<script>
    function loadCSS(hf) {
        var ms = document.createElement("link");
        ms.rel = "stylesheet";
        ms.href = hf;
        document.getElementsByTagName("head")[0].appendChild(ms);
    }
    loadCSS("_header.min.css"); //Header Styles (compress & paste to header after release)
    loadCSS("_main.min.css");   //User Styles + Media Queries
</script>

<!-- Load Scripts -->
<script>var scr = {
        "scripts": [
            {"src": "js/libs.js", "async": false},
            {"src": "libs/bootstrap/js/bootstrap.min.js", "async": false},
            {"src": "libs/fancybox/jquery.fancybox.pack.js", "async": false},
            {"src": "js/common.js", "async": false}
        ]
    };
    !function (t, n, r) {
        "use strict";
        var c = function (t) {
            if ("[object Array]" !== Object.prototype.toString.call(t))return !1;
            for (var r = 0; r < t.length; r++) {
                var c = n.createElement("script"), e = t[r];
                c.src = e.src, c.async = e.async, n.body.appendChild(c)
            }
            return !0
        };
        t.addEventListener ? t.addEventListener("load", function () {
            c(r.scripts);
        }, !1) : t.attachEvent ? t.attachEvent("onload", function () {
            c(r.scripts)
        }) : t.onload = function () {
            c(r.scripts)
        }
    }(window, document, scr);
</script>

<script type="text/javascript" src="../js/jquery-1.8.3.min.js"></script>
<!--<script type="text/javascript" src="http://code.jquery.com/ui/1.8.18/jquery-ui.min.js"></script>-->
<script type="text/javascript" src="https://code.jquery.com/ui/1.12.0-rc.1/jquery-ui.min.js"></script>
<script type="text/javascript" src="../libs/fancybox/jquery.fancybox.pack.js"></script>

<script type="text/javascript" src="../js/jquery.maskedinput.min.js"></script>
<script>$(function () {
        $('#datepicker').datepicker({
            inline: true,
            firstDay: 1,
            showOtherMonths: true,
            dateFormat: "dd.mm.yy",
            dayNamesMin: ['ВС', 'ПН', 'ВТ', 'СР', 'ЧТ', 'ПТ', 'СБ'],
            monthNames: ['Январь', 'Февраль', 'Март', 'Апрель', 'Май', 'Июнь', 'Июль', 'Август', 'Сентябрь', 'Октябрь', 'Ноябрь', 'Декабрь'],
            maxDate: new Date(2016, 7, 31), // дата в виде числа
            minDate: "0", // дата в виде количества дней , можно указывать -100 например.
            hideIfNoPrevNext: true,
            onSelect: function (dateText, inst) {
                $("#actualDate").html(dateText);
            }
        });
    });</script>
<script type="text/javascript">jQuery(function ($) {
        $.mask.definitions['~'] = '[+-]';
        $('#date').mask('99/99/9999');
        $('#phone').mask('(999) 999-9999');
        $('#phoneMask').mask('+7(999) 999-9999');
        $('#phoneMask2').mask('+7(999) 999-9999');
    });</script>


<!-- Yandex.Metrika counter -->
<script type="text/javascript">
    (function (d, w, c) {
        (w[c] = w[c] || []).push(function() {
            try {
                w.yaCounter33867494 = new Ya.Metrika({
                    id:33867494,
                    clickmap:true,
                    trackLinks:true,
                    accurateTrackBounce:true,
                    webvisor:true
                });
            } catch(e) { }
        });

        var n = d.getElementsByTagName("script")[0],
            s = d.createElement("script"),
            f = function () { n.parentNode.insertBefore(s, n); };
        s.type = "text/javascript";
        s.async = true;
        s.src = "https://mc.yandex.ru/metrika/watch.js";

        if (w.opera == "[object Opera]") {
            d.addEventListener("DOMContentLoaded", f, false);
        } else { f(); }
    })(document, window, "yandex_metrika_callbacks");
</script>
<noscript><div><img src="https://mc.yandex.ru/watch/33867494" style="position:absolute; left:-9999px;" alt="" /></div></noscript>
<!-- /Yandex.Metrika counter -->
<!-- Facebook Pixel Code -->
<script>
    !function(f,b,e,v,n,t,s){if(f.fbq)return;n=f.fbq=function(){n.callMethod?
        n.callMethod.apply(n,arguments):n.queue.push(arguments)};if(!f._fbq)f._fbq=n;
        n.push=n;n.loaded=!0;n.version='2.0';n.queue=[];t=b.createElement(e);t.async=!0;
        t.src=v;s=b.getElementsByTagName(e)[0];s.parentNode.insertBefore(t,s)}(window,
        document,'script','//connect.facebook.net/en_US/fbevents.js');

    fbq('init', '923186511106644');
    fbq('track', "PageView");</script>
<noscript><img height="1" width="1" style="display:none"
               src="https://www.facebook.com/tr?id=923186511106644&ev=PageView&noscript=1"
    /></noscript>
<!-- End Facebook Pixel Code -->
</body>
</html>