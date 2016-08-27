$(function () {
$('.fancybox').fancybox();
    var marginTopScrtoll = 100;
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

    //SVG Fallback
    if (!Modernizr.svg) {
        $("img[src*='svg']").attr("src", function () {
            return $(this).attr("src").replace(".svg", ".png");
        });
    }
    ;

    //E-mail Ajax Send
    //Documentation & Example: https://github.com/agragregra/uniMail
    $("#navForm").submit(function () { //Change
        var th = $(this);
        $.ajax({
            type: "POST",
            url: "mail.php", //Change
            data: th.serialize()
        }).done(function () {
            $("#navForm").fadeOut("fast", function(){
                $(this).before("<p style='text-align: center'><strong>Ваше сообщение отправлено!</strong></p>");
                setTimeout("$.fancybox.close()", 5000);
            });
        });
        return false;
    });
    $("#navForm2").submit(function () { //Change
        var th = $(this);
        $.ajax({
            type: "POST",
            url: "mail.php", //Change
            data: th.serialize()
        }).done(function () {
                $("#navForm2").fadeOut("fast", function(){
                    $(this).before("<p style='text-align: center'><strong>Ваше сообщение отправлено!</strong></p>");
                    setTimeout("$.fancybox.close()", 5000);
                });
        });
        return false;
    });

    $("#navForm3").submit(function () { //Change
        var th = $(this);
        $.ajax({
            type: "POST",
            url: "mail.php", //Change
            data: th.serialize()
        }).done(function () {
            $("#navForm3").fadeOut("fast", function(){
                $(this).before("<p style='text-align: center;font-family: \"Lora\", serif;'><strong>Ваше сообщение отправлено!</strong></p>");
                setTimeout("$.fancybox.close()", 5000);
            });
        });
        return false;
    });

    //Chrome плавная прокрутка
    try {
        $.browserSelector();
        if ($("html").hasClass("chrome")) {
            $.smoothScroll();
        }
    } catch (err) {

    }
    ;

    // запрет перетаскивания картинки
    $("img, a").on("dragstart", function (event) {
        event.preventDefault();
    });

    // активный пункт меню
    $('#activeNav > ul > li').each(function () {
        if (this.getElementsByTagName("a")[0].href == location.href) this.className = "menuActive";
    });
    // активный пункт мини меню
    $('#miniMnu > ul > li').each(function () {
        if (this.getElementsByTagName("a")[0].href == location.href) this.className = "miniActive";
    });

});
























