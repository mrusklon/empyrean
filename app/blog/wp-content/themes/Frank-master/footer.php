<?php
/**
 * @package Frank
 */
?>
</div>
<?php if ( is_active_sidebar( 'widget-footer' ) ) : ?>
<div id="page-bottom">
	<footer id="page-footer" class="container" role="contentinfo">
		<div class="row">
		<?php if ( ! dynamic_sidebar( 'Footer' ) ) : ?>

		<?php endif; ?>
		</div>
	</footer>
</div>
<?php endif; ?>
<?php wp_footer(); ?>

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
                        <li style="width: 227px;">
                            <h4>СЛЕДИТЕ ЗА ОБНОВЛЕНИЯМИ</h4>
                            <div class="socialWrap">
                                <div class="socialbtns">
                                    <ul class="social">
                                        <li><a target="_blank" href="https://www.instagram.com/empyrean.moscow/" class="fa fa-lg fa-instagram"></a></li>
                                        <li><a target="_blank" href="https://www.facebook.com/empyrean.moscow" class="fa fa-lg fa-facebook"></a></li>
                                        <li><a target="_blank" href="http://go-great-guns.tumblr.com/" class="fa fa-lg fa-tumblr"></a></li>
                                    </ul>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
            </nav>
        </div>
        <div class="copiright">2016 © EMPYREAN.</div>
    </div>
</footer>

<script>
$(function () {
	var marginTopScrtoll = 90;
    jQuery(function (f) {
        var element = f('#logo');
        f(window).scroll(function () {
            element['fade' + (f(this).scrollTop() < marginTopScrtoll ? 'In' : 'Out')](1);
        });
    });
    jQuery(function (r) {
        var element = r('#logo2');
        r(window).scroll(function () {
            element['fade' + (r(this).scrollTop() > marginTopScrtoll ? 'In' : 'Out')](1000);
        });
    });

    var targetOffset = marginTopScrtoll;
    var $w = $(window).scroll(function () {
        if ($w.scrollTop() > targetOffset) {
            $('#w').css({"top": "-10px"});
            $('#w2').css({"top": "-10px"});
            $('#addres').css({"top": "-100px"}); // после прокрутки изменить на
        } else {
            $('#w').css({"top": "72px"});
            $('#w2').css({"top": "72px"});
            $('#addres').css({"top": "35px"}); // стандартный оступ
        }
    });
});

    
</script>
</body>
</html>