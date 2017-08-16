<?php
/*
Template Name: page3
*/
?>
<?php get_header(); ?>
<html lang="ru">
<head>
    <link rel="stylesheet" href="<?php echo get_template_directory_uri();?>/css/screen.css">
   <!--  <link rel="stylesheet" href="<?php echo get_template_directory_uri();?>/css/media.css"> -->
    <link rel="stylesheet" href="<?php echo get_template_directory_uri();?>/css/font-awesome.min.css">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i&amp;subset=cyrillic,cyrillic-ext" rel="stylesheet">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri();?>/css/font-awesome.min.css">
    <!--[if lt IE 9]> <script src="http://css3-mediaqueries-js.googlecode.com/svn/trunk/css3-mediaqueries.js"></script> <![endif]-->
</head>
<body>
    <div id="container page-teenagers">
        <header>
            <div class="header_wrapper">
                <div class="header_top">
                    <div class="header_top_left">
                        <a href="http://chicaga.ru/">
                            <img src="<? echo get_field('logo')?>" alt="logo">
                        </a>
                        <p class="header_top_left_name">Курсы <br> английского языка</p>
                    </div>
                    <!-- <div class="header_top_right">
                        <img src="<? echo get_field('phone_ico')?>" alt="phone" class="header_top_right_cell">
                        <p><a href="tel:+78122425003" class="header_top_right_number">+7 812 242 50 03</a href="tel:"><br> Санкт-Петербург</p>
                        <img src="<? echo get_field('pause_img')?>" alt="pause" class="header_top_pause">
                    </div> -->
                    <div class="contact-info__contacts">
                        <a href="tel:+78122425003">+7 812 242 50 03</a>
                        <p>Санкт-Петербург</p>
                    </div>
                </div>
                
<!--                 <div class="header_bottom">
                    <div class="header_bottom_up">
                        <a href="#first-p" class="header_bottom_up_links button">Английский для подростков</a>
                        <a href="#engeg" class="header_bottom_up_links button">Английский ОГЭ и ЕГЭ</a>
                        <a href="#" class="header_bottom_up_links button">Форма обучения</a>
                        <a href="#methodi" class="header_bottom_up_links button">Методика</a>
                    </div>
                    <div class="header_bottom_down">
                        <a href="#prepods" class="header_bottom_up_links button">Преподаватели</a>
                        <a href="#comse" class="header_bottom_up_links button">Отзывы</a>
                        <a href="#garse" class="header_bottom_up_links button">Гарантии</a>
                        <a href="#sculi" class="header_bottom_up_links button">Наши школы</a>
                    </div>
                </div> -->
                <ul class="nav-menu">
                    <li><a href="#first-p">Английский для подростков</a></li>
                    <li><a href="#engeg">Английский ОГЭ и ЕГЭ</a></li>
                    <li><a href="#">Форма обучения</a></li>
                    <li><a href="#methodi">Методика</a></li>
                    <li><a href="#prepods">Преподаватели</a></li>
                    <li><a  href="#comse">Отзывы</a></li>
                    <li><a href="#garse">Гарантии</a></li>
                    <li><a href="#sculi">Наши школы</a></li>
                </ul>
            </div>
        </header>
        <main>
            <div class="main_top">
                <div class="main_top_content">
                    <p class="main_top_content_text"><? echo get_field('text_img')?></p>
                    <form class="main_top_content_form">
                        <p class="main_top_content_form_text">записаться <br>на пробный урок</p>
                        <!-- <img src="/wp-content/uploads/2017/03/line.png" alt="line" class="main_form_line"> -->
                        <span class="instructor-position__span"></span>
                        <input type="text" placeholder="Ваше имя" class="main_content_form form_one" required>
                        <input type="text" placeholder="Номер телефона" class="main_content_form form_two" required>
                        <div class="select-outer">
                            <select id="select" name="select" size="1">
                                <option>
                                    Выберите школу
                                </option>
                                <option>
                                    Red Hat
                                </option>
                                <option>
                                    Debian
                                </option>
                                <option>
                                    OpenSuse
                                </option>
                                <option>
                                    Fedora
                                </option>
                            </select>
                            <!-- <a class="select-button"></a> -->
                        </div>
                        <input type="submit" value="Отправить">
                       <!--  <div class="main_top_content_form_click">
                            <a href="#" class="main_top_content_form_button">Отправить</a>
                        </div> -->
                    </form>
                </div>
            </div>
            <div class="main_center" id="first-p">
                <p class="main_center_header"><? echo get_field('oxfbl_title')?></p>
                <div class="main_center_block">
                    <div class="main_center_block_img"><img src="<? echo get_field('img_of_text_1')?>" alt="teen"></div>
                    <div class="main_center_block_text text_one ">
                        <p><? echo get_field('oxfbl_text_1')?></p>
                    </div>
                </div>
                <div class="main_center_block">
                    <div class="main_center_block_text text_two">
                        <p><? echo get_field('oxfbl_text_2')?></p>
                    </div>
                    <div  class="main_center_block_img" ><img src="<? echo get_field('img_of_text_2')?>" alt="teen"></div>
                </div>
                <div class="main_center_block">
                    <div><img src="<? echo get_field('img_of_text_3')?>" alt="teen"  class="main_center_block_img"></div>
                    <div class="main_center_block_text text_three">
                        <p><? echo get_field('oxfbl_text_3')?></p>
                    </div>
                </div>
                <div class="main_center_block">
                    <div class="main_center_block_text text_fourth">
                        <p><? echo get_field('oxfbl_text_4')?></p>
                    </div>
                    <div><img src="<? echo get_field('img_of_text_4')?>" alt="teen"  class="main_center_block_img"></div>
                </div>
                <div class="main_center_block">
                    <div><img src="<? echo get_field('img_of_text_5')?>" alt="teen"  class="main_center_block_img"></div>
                    <div class="main_center_block_text text_fifth">
                        <p><? echo get_field('oxfbl_text_5')?></p>
                    </div>
                </div>
            </div>
            <div class="main_center_down" id="engeg">
                <p><span class="main_center_down_text"><? echo get_field('prog_name')?></span><? echo get_field('prog_text')?></p>
                <div class="main_center_down_section">
                    <div class="main_center_down_section_one">
                        <p><? echo get_field('prog_text_1')?></p>


                    </div>
                    <div class="main_center_down_section_two">
                        <p><? echo get_field('prog_text_2')?></p>
                    </div>

                </div>


            </div>
            <section class="section section-methodology" id="methodi">
                <div class="section-wrapper">
                    <h3 class="heading-l3 heading-l3__black">
                       <? echo get_field('met_title')?>
                    </h3>
                    <p class="commonparapgraph-center commonparapgraph-fonts"><? echo get_field('met_title2')?></p>
                    <div class="columnblock-wrapper">
                        <div class="columnblock-item">
                        <div class="method-item__number">
                            01
                        </div>
                        <p class="method-item__info"><? echo get_field('met_text_1')?></p >
                    </div>
                    <div class="columnblock-item">
                        <div class="method-item__number">
                            02
                        </div>
                        <p  class="method-item__info"><? echo get_field('met_text_2')?></p >
                    </div>
                    <div class="columnblock-item">
                        <div class="method-item__number">
                            02
                        </div>
                        <p  class="method-item__info"><? echo get_field('met_text_3')?></p>
                    </div>
                    </div>
                </div>
            </section>
            <section>
                <div class="section-wrapper section-instructors" id="prepods">
                      <h3 class="heading-l3 heading-l3__brown"><? echo get_field('prep_title')?></h3>
                    <p class="commonparapgraph-center commonparapgraph-fonts"><? echo get_field('prep_title2')?></p>
                    <div class="columnblock-wrapper">
                        <div class="columnblock-item">
                            <img src="<? echo get_field('prep_img_1')?>" alt="instructor's photo">
                            <h4 class="user-info"><? echo get_field('fio_prep_1')?></h4>
                            <p class="instructor-position "><? echo get_field('dol_prep_1')?></p>
                            <span class="instructor-position__span">&mdash;</span>
                            <p class="user-comment commonparapgraph-center commonparapgraph-fonts"><? echo get_field('prep_com_1')?></p>
                        </div>
                        <div class="columnblock-item">
                            <img src="<? echo get_field('prep_img_2')?>" alt="instructor's photo">
                            <h4 class="user-info"><? echo get_field('fio_prep_2')?></h4>
                            <p class="instructor-position"><? echo get_field('dol_prep_2')?></p>
                            <span class="instructor-position__span">&mdash;</span>
                            <p class="user-comment commonparapgraph-center commonparapgraph-fonts"><? echo get_field('prep_com_2')?></p>
                        </div>
                        <div class="columnblock-item">
                         <img src="<? echo get_field('prep_img_3')?>" alt="instructor's photo">
                            <h4 class="user-info"><? echo get_field('fio_prep_3')?></h4>
                             <p class="instructor-position"><? echo get_field('dol_prep_3')?></p>
                           <span class="instructor-position__span">&mdash;</span>
                            <p class="user-comment commonparapgraph-center commonparapgraph-fonts"><? echo get_field('prep_com_3')?></p>
                        </div>
                    </div>
                </div>
            </section>
            <section class="guarantee-section" id="garse">
                <div class="section-wrapper">
                    <h3 class="heading-l3"><? echo get_field('gar_title')?></h3>
                    <span class="instructor-position__span">&mdash;</span>
                    <p class="commonparapgraph-center commonparapgraph-fonts"><? echo get_field('gar_text')?></p>
                </div>
            </section> 
            <section>
                <div class="section-wrapper comments-section" id="comse">
                    <h3 class="heading-l3 heading-l3__brown"><? echo get_field('otz_title')?></h3>
                    <div class="columnblock-wrapper">
                        <div class="columnblock-item">
                            <img src="<? echo get_field('otz_img_1')?>" alt="student review">
                            <h4 class="user-info"><? echo get_field('if_1')?></h4>
                            <p class="commonparapgraph-fonts"><? echo get_field('otz_text_1')?></p>
                            <div>
                                <time datetime="2017-07-24"><? echo get_field('otz_date_1')?></time>
                            </div>
                        </div>
                        <div class="columnblock-item">
                            <img src="<? echo get_field('otz_img_2')?>" alt="student review">
                            <h4 class="user-info"><? echo get_field('if_2')?></h4>
                            <p class="commonparapgraph-fonts"><? echo get_field('otz_text_2')?></p>
                            <div>
                                <time datetime="2016-06-14"><? echo get_field('otz_date_2')?></time>
                            </div>
                        </div>
                        <div class="columnblock-item">
                            <img src="<? echo get_field('otz_img_3')?>" class="columnblock-item__img" alt="student review">
                            <h4 class="user-info"><? echo get_field('if_3')?></h4>
                            <p class="commonparapgraph-fonts"><? echo get_field('otz_text_3')?></p>
                            <div>
                                <time datetime="2016-02-02"><? echo get_field('otz_date_3')?></time>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <section>
                <div class="section-wrapper schools-section" id="sculi">
                    <h3 class="heading-l3 heading-l3__brown"><? echo get_field('skul_title')?></h3>
                    <div class="block-wrapper">
                        <div class="block-wrapper__item">
                            <div class="addressblock">
                                <h5><? echo get_field('skul_name_1')?></h5>
                                <p class="commonparapgraph-fonts"><? echo get_field('skul_adr_1')?></p>
                            </div>
                            <div class="addressblock">
                                <h5><? echo get_field('skul_name_2')?></h5>
                                <p class="commonparapgraph-fonts"><? echo get_field('skul_adr_2')?></p>
                            </div>
                            <div class="addressblock">
                                <h5><? echo get_field('skul_name_3')?></h5>
                                <p class="commonparapgraph-fonts"><? echo get_field('skul_adr_3')?></p>
                            </div>
                        </div>
                        <div class="block-wrapper__item">
                           <div class="yandex-maps">
                               <!-- <script type="text/javascript" charset="utf-8" async src="https://api-maps.yandex.ru/services/constructor/1.0/js/?um=constructor%3Ab0ed90e0f6f20b1fdfec2f236a9d832ed9e6416915411cd65b131d3f0781c2c9&amp;width=539&amp;height=327&amp;lang=ru_UA&amp;scroll=true"></script> -->
                               <script type="text/javascript" charset="utf-8" async src="https://api-maps.yandex.ru/services/constructor/1.0/js/?um=constructor%3A534204b17902a19483eb3aeb9a6962949c0e0c03f716198b1444db80b6d5f839&amp;width=539&amp;height=327&amp;lang=ru_RU&amp;scroll=true"></script>
                           </div>
                        </div>
                    </div>
                </div>
            </section>
        </main>
    </div>
    <footer>
            <div class="section-wrapper">
                <div class="contacts">
                    <div class="contact-info">
                        <div class="contact-info__soc">
                            <p class="commonparapgraph-fonts">Поделись ссылкой: </p>
                            <div class="social-items">
                                <li><a href="#">
                                <i class="fa fa-facebook" aria-hidden="true"></i>
                                </a></li>
                                <li><a href=""><i class="fa fa-vk"></i></a></li>
                                <li><a href=""<i class="fa fa-twitter"></i></a></li>
                                <li><a href=""<i class="fa fa-instagram"></i></a></li>   
                            </div>
                        </div>
                    </div>
                    <a href="http://chicaga.ru/" class="contact-info__logo">
                    </a>
                    <div class="contact-info__contacts">
                        <a href="tel:+78122425003">+7 812 242 50 03</a>
                        <p>Санкт-Петербург</p>
                    </div>
                </div>
                <div class="author-rights">
                    <p>
                        &copy; 2016 Санкт-Петербург. 
                    </p>
                </div>
            </div>
             <a href="#top" class="go-top">Наверх</a>
        </footer>
        <script src="https://code.jquery.com/jquery-3.1.1.js"></script>
        <script src="/wp-content/themes/SkillsetTheme/js/script.js"></script>
        <script src="/wp-content/themes/SkillsetTheme/js/scrol3.js"></script>
</body>
</html>