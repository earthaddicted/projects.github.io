<!DOCTYPE html>
<!--[if lt IE 7 ]><html class="ie ie6" lang="en"> <![endif]-->
<!--[if IE 7 ]><html class="ie ie7" lang="en"> <![endif]-->
<!--[if IE 8 ]><html class="ie ie8" lang="en"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!-->
<html lang="ru">
<!--<![endif]-->

<head>

    <meta charset="utf-8">

    <title><?php echo get_bloginfo('name'); echo ' '. get_bloginfo('description'); ?></title>
    <meta name="echo get_bloginfo('description');" content="">

    <link rel="shortcut icon" href="<?php echo get_template_directory_uri();?>/favicon.ico" type="image/x-icon">

    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

    <link rel="stylesheet" href="<?php echo get_template_directory_uri();?>/libs/bootstrap/css/bootstrap-grid.min.css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri();?>/libs/slick/slick/slick.css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri();?>/libs/slick/slick/slick-theme.css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri();?>/libs/animate/animate.css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri();?>/libs/OwlCarousel/owl.carousel.min.css">

    <link rel="stylesheet" href="<?php echo get_template_directory_uri();?>/css/fonts.css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri();?>/css/main.css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri();?>/css/media.css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri();?>/libs/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri();?>/libs/magnific-popup/magnific-popup.css">
    <link rel="icon" href="http://chicaga.ru//favicon.ico" type="image/x-icon" />
	<link rel="shortcut icon" href="http://chicaga.ru//favicon.ico" type="image/x-icon"/>
    

    <script src="<?php echo get_template_directory_uri();?>/libs/modernizr/modernizr.js"></script>
    
    <?php wp_head(); ?>

<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-89111776-1', 'auto');
  ga('send', 'pageview');

</script>


</head>

<body>

<!-- Yandex.Metrika counter --> <script type="text/javascript"> (function (d, w, c) { (w[c] = w[c] || []).push(function() { try { w.yaCounter41687069 = new Ya.Metrika({ id:41687069, clickmap:true, trackLinks:true, accurateTrackBounce:true, webvisor:true }); } catch(e) { } }); var n = d.getElementsByTagName("script")[0], s = d.createElement("script"), f = function () { n.parentNode.insertBefore(s, n); }; s.type = "text/javascript"; s.async = true; s.src = "https://mc.yandex.ru/metrika/watch.js"; if (w.opera == "[object Opera]") { d.addEventListener("DOMContentLoaded", f, false); } else { f(); } })(document, window, "yandex_metrika_callbacks"); </script> <noscript><div><img src="https://mc.yandex.ru/watch/41687069" style="position:absolute; left:-9999px;" alt="" /></div></noscript> <!-- /Yandex.Metrika counter -->

<form id="free_lesson" class="mfp-hide white-popup-block" method="post" action="mail.php" onsubmit="yaCounter43862954.reachGoal('send'); return true;" id="send">
        <h5>Записаться на бесплатный урок</h5>
        <input type="text" name="Имя" placeholder="Ваше имя" required id="first_input">
        <input type="tel" name="Телефон" placeholder="Номер телефона*" required id="phone_mask">

        <div id="school_select">
            <div class="selected_school">Выбери школу</div>
            <ul>
              <li>Школа на Комендантском</li>
              <li>Школа на Звездной</li>
              <li>Школа на Озерках</li>
              <li>Школа на Академической</li>
            </ul>
        </div>
        
        <input type="submit" value="Отправить">

        <input type="hidden" name="project_name" value="Skillset school">
        
<?php if( have_posts() ) : query_posts('p=123'); 
while (have_posts()) : the_post();?>        
        <input type="hidden" name="admin_email" value="">
<?php endwhile;endif; wp_reset_query(); ?>        

        <input type="hidden" name="form_subject" value="Заявка на бесплатный урок">
        <input type="hidden" name="Адрес школы" value="" class="my_school_value">

    </form>

    