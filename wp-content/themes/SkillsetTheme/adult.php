<?php
/*
Template Name: adult
*/
?>
<?php get_header(); ?>
<head>
	<link rel="stylesheet" href="<?php echo get_template_directory_uri();?>/css/main1.css">
</head>
<body class="adult">
<!-- Yandex.Metrika counter --> <script type="text/javascript"> (function (d, w, c) { (w[c] = w[c] || []).push(function() { try { w.yaCounter41687069 = new Ya.Metrika({ id:41687069, clickmap:true, trackLinks:true, accurateTrackBounce:true, webvisor:true }); } catch(e) { } }); var n = d.getElementsByTagName("script")[0], s = d.createElement("script"), f = function () { n.parentNode.insertBefore(s, n); }; s.type = "text/javascript"; s.async = true; s.src = "https://mc.yandex.ru/metrika/watch.js"; if (w.opera == "[object Opera]") { d.addEventListener("DOMContentLoaded", f, false); } else { f(); } })(document, window, "yandex_metrika_callbacks"); </script> <noscript>&lt;div&gt;&lt;img src="https://mc.yandex.ru/watch/41687069" style="position:absolute; left:-9999px;" alt="" /&gt;&lt;/div&gt;</noscript> <!-- /Yandex.Metrika counter -->
<form id="free_lesson" class="mfp-hide white-popup-block" method="post" action="http://chicaga.ru/mail.php" onsubmit="yaCounter43862954.reachGoal(&#39;send&#39;); return true;">
		<h5>Записаться на бесплатный урок</h5>
		<input type="text" name="Имя" placeholder="Ваше имя" required="" id="first_input">
		<input type="tel" name="Телефон" placeholder="Номер телефона*" required="" id="phone_mask" maxlength="18">
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
		<input type="hidden" name="admin_email" value="">
		<input type="hidden" name="form_subject" value="Заявка на бесплатный урок">
		<input type="hidden" name="Адрес школы" value="" class="my_school_value">
	</form>	
	<!-- POWER INTENSEVE -->
	  <div id="power_intensive" class="mfp-hide white-popup-block">
		<h1>POWER-INTENSIVE</h1>
		<p>
		  Основной курс (96 акад.часов по программе OXFORD English File) дает студенту<br>
		  неоходимые теоретический основы с набором необходимых примеров применения.<br>
		  Однако, только в многочисленных развлекательных практических тренингах (+64 <br>
		  акад.часа по программе emotioNess) ты добьешься уверенности и автоматизма<br> применения полученных фундаментальных знаний. 
		  Уверенность и автоматизм приходят<br>
		  к тебе по мере избавления от мысленного перевода речи на сознательном уровне. То<br>
		  есть ключевая цель - перевод речи в область эмоционально-подсознательного.
		</p>
	  </div>
	<!-- POWER INTENSIVE END -->
<!-- test -->
	<form id='test_yourself' class="col-xs-12 mfp-hide test_popup" action="/test/" method='post'>
		<div class="container">
			<div class="row">
			<!-- Menu -->
			<div class="menu_row_test">
		<div class="container">
			<div class="menu_block_test">
				<div id="nav-icon3-test">
					<span></span>
					<span></span>
					<span></span>
					<span></span>
				</div>
			</div>
			</div>
			</div>
	<!-- Menu end -->
				<!-- Question 0 -->
				<div class="question_wrap">
				  <div class="col-md-12 question_main_heading">
					<h1>Let's get start it</h1>
				  </div>
				<div class="col-md-7 col-sm-12 question_choice null PN">
				<ul class="list-ustyled">
					   <li class="heading">Do you like me?</li>
					  <li><input type="radio" name="quest1">
						a) Yes, I want.
					  </li>
					  <li><input type="radio" name="quest1" value="true">
						b) No, I don't.
					  </li>
					  <li><input type="radio" name="quest1">
						c)  Pleace, no need.   
					  </li>
				  </ul>
				</div>
				<div class="col-md-5 col-sm-12 question_img null PN">				
				</div>				
				</div>
				<div class="clearfix"></div>
				<!-- Question 1 -->
				<div class="question_wrap">
				<div class="col-md-7 col-sm-12 question_choice one PN">
				<ul class="list-ustyled">
					   <li class="heading">Can I help you?</li>
					  <li><input type="radio" name="quest2" value="true">
						a) Give me both chains,
						please!
					  </li>
					  <li><input type="radio" name="quest2">
						b) Where must I carry to?
					  </li>
					  <li><input type="radio" name="quest2">
						c) Erm, what?   
					  </li>
				  </ul>
				</div>
				<div class="col-md-5 col-sm-12 question_img one PN">				
				</div>
				</div>
				<!-- Question 1 end-->
				<div class="clearfix"></div>
				<!-- Question 2 -->
			<div class="question_wrap">				
				<div class="col-md-7 col-sm-12 question_choice two PN">
				<ul class="list-ustyled">
					   <li class="heading">Is there a language school near here?</li>
					  <li><input type="radio" name="quest3">
						a) Near here not.
					  </li>
					  <li><input type="radio" name="quest3" value="true">
						b) Here’s one over there.
					  </li>
					  <li><input type="radio" name="quest3">
						c) Erm, what?   
					  </li>
				  </ul>
				</div>
				<div class="col-md-5 col-sm-12 question_img two PN">
				</div>
				</div>
				<!-- Question 2 end-->
				<div class="clearfix"></div>
				<!-- Question 3 -->
				<div class="question_wrap">
				<div class="col-md-7 col-sm-12 question_choice tree">
				<ul class="list-ustyled">
					   <li class="heading">My boyfriend Robert…<br>
					   in common with his friend Jude Law.</li>
					  <li><input type="radio" name="quest4">
						a) Doesn’t have nothing
					  </li>
					  <li><input type="radio" name="quest4">
						b) Doesn’t have something
					  </li>
					  <li><input type="radio" name="quest4" value="true">
						c) Has nothing   
					  </li>
				  </ul>
				</div>
				<div class="col-md-5 col-sm-12 question_img tree">
				</div>
				</div>
				<!-- Question 3 end-->
				<div class="clearfix"></div>
				<!-- Question 4 -->
			<div class="question_wrap">				
				<div class="col-md-7 col-sm-12 question_choice four PN">
				<ul class="list-ustyled">
					   <li class="heading">What… when you saw a cockroach<br>
					   in your pasta?<br>
					   I said I asked for a vegetarian one.</li>
					  <li><input type="radio" name="quest5" value="true">
						a) Did you do
					  </li>
					  <li><input type="radio" name="quest5">
						b) Have you done
					  </li>
					  <li><input type="radio" name="quest5">
						c) Will you do   
					  </li>
				  </ul>
				</div>
				<div class="col-md-5 col-sm-12 question_img four PN">
				</div>
				</div>
				<!-- Question 4 end-->
				<div class="clearfix"></div>
				<!-- Question 5 -->
				<div class="question_wrap">
				<div class="col-md-7 col-sm-12 question_choice five PN">
				<ul class="list-ustyled">
					   <li class="heading">These Louboutin shoes…<br>
					   me two months’ salary.</li>
					  <li><input type="radio" name="quest6" value="true">
						a) Cost 
					  </li>
					  <li><input type="radio" name="quest6">
						b) Charged
					  </li>
					  <li><input type="radio" name="quest6">
						c) Worth   
					  </li>
				  </ul>
				</div>
				<div class="col-md-5 col-sm-12 question_img five PN">
				</div>
				</div>
				<!-- Question 5 end-->
				<div class="clearfix"></div>
				<!-- Question 6 -->
			<div class="question_wrap">			   
				<div class="col-md-7 col-sm-12 question_choice six PN">
				<ul class="list-ustyled">
					   <li class="heading">She knew she would regret that,<br>
						she ate the cake after 6 pm.</li>
					  <li><input type="radio" name="quest7" value="true">
						a) Although
					  </li>
					  <li><input type="radio" name="quest7">
						b) Because
					  </li>
					  <li><input type="radio" name="quest7">
						c) However   
					  </li>
				  </ul>
				</div>				
				 <div class="col-md-5 col-sm-12 question_img six PN">
				</div>
				</div>
				<!-- Question 6 end-->
				<div class="clearfix"></div>
				<!-- Question 7 -->
				<div class="question_wrap">
				<div class="col-md-7 col-sm-12 question_choice seven PN">
				<ul class="list-ustyled">
					   <li class="heading">You… told him about the sale.<br>
					   Colin  will be furious.</li>
					  <li><input type="radio" name="quest8" value="true">
						a) Shouldn’t have
					  </li>
					  <li><input type="radio" name="quest8">
						b) Wouldn’t have
					  </li>
					  <li><input type="radio" name="quest8">
						c) Couldn’t have   
					  </li>
				  </ul>
				</div>
				<div class="col-md-5 col-sm-12 question_img seven PN">
				</div>
				</div>
				<!-- Question 7 end-->
				<div class="clearfix"></div>
				<!-- Question 8 -->
			<div class="question_wrap">				
				<div class="col-md-7 col-sm-12 question_choice eight PN">
				<ul class="list-ustyled">
					   <li class="heading">What do you get if you put a radio<br>
					   in the fridge?</li>
					  <li><input type="radio" name="quest9" value="true">
						a) Cool music.
					  </li>
					  <li><input type="radio" name="quest9">
						b) Frozen.
					  </li>
					  <li><input type="radio" name="quest9">
						c) Vanilla Ice.   
					  </li>
				  </ul>
				</div>
				<div class="col-md-5 col-sm-12 question_img eight PN">
				</div>
				</div>
				<!-- Question 8 end-->
				<div class="clearfix"></div>
				<!-- Question 9 -->
				<div class="question_wrap">
				<div class="col-md-7 col-sm-12 question_choice nine PN">
				<ul class="list-ustyled">
					   <li class="heading">You shouldn’t subscribe to<br> her channel unless you are…
					   <br>to see tons of her pictures.</li>
					  <li><input type="radio" name="quest10">
						a) Solved
					  </li>
					  <li><input type="radio" name="quest10" value="true">
						b) Prepared
					  </li>
					  <li><input type="radio" name="quest10">
						c) Arranged   
					  </li>
				  </ul>
				</div>
				<div class="col-md-5 col-sm-12 question_img nine PN">
				</div>
				</div>
				<!-- Question 9 end-->
				<div class="clearfix"></div>
				<!-- Question 10 -->
			<div class="question_wrap">
				<div class="col-md-7 col-sm-12 question_choice ten PN">
				<ul class="list-ustyled">
					   <li class="heading">Choose the correct answer:</li>
					  <li><input type="radio" name="quest11">
						a) All of them speaks English.
					  </li>
					  <li><input type="radio" name="quest11" value="true">
						b) All of them speak English with confidence.
					  </li>
					  <li><input type="radio" name="quest11">
						c) All of them speak English fluent.   
					  </li>
					   <li><input type="radio" name="quest11">
						 d) All of them speak English with pleasant.   
					  </li>
					  <li><input type="radio" name="quest11">
						e) All of them are very successful person.   
					  </li>
				  </ul>
				</div>
				<div class="col-md-5 col-sm-12 question_img ten PN">
				</div>
				</div>
				<!-- Question 10 end-->
				<div class="clearfix"></div>
				<!-- Question 11 -->
				<div class="question_wrap">
				<div class="col-md-7 col-sm-12 question_choice eleven PN">
				<ul class="list-ustyled">
					   <li class="heading">Before Donald became The Number One<br>
					   in the US, he _____?</li>
					  <li><input type="radio" name="quest12" value="true">
						a) Had been amusing people in America.
					  </li>
					  <li><input type="radio" name="quest12">
					   b) Was a golf coach.
					  </li>
					  <li><input type="radio" name="quest12">
						c) Sold one million houses to the poor beautiful girls from Texas.   
					  </li>
				  </ul>
				</div>
				<div class="col-md-5 col-sm-12 question_img eleven PN">
				</div>
				</div>
				<!-- Question 11 end-->
				<div class="clearfix"></div>
				<!-- Question 12 -->
			<div class="question_wrap">
				<div class="col-md-7 col-sm-12 question_choice twelve PN">
				<ul class="list-ustyled">
					   <li class="heading">'Ma’am, when I meet the man<br> who has never been a golf coach before,<br>
						do you think _____?'</li>
					  <li><input type="radio" name="quest13" value="true">
						a) I will ask him if he really likes those beautiful girls
					  </li>
					  <li><input type="radio" name="quest13">
						b) I will say him not to make a blunder
					  </li>
					  <li><input type="radio" name="quest13">
						c) Will I ask him who is The Number One in the world   
					  </li>
				  </ul>
				</div>
				<div class="col-md-5 col-sm-12 question_img twelve PN">
				</div>
				</div>
				<!-- Question 12 end-->				
				<!-- Submit -->
				<div class="col-xs-12 btn_test_submit">
					<input type="submit" name="submit_test" value="Подвести итоги" id="submit_test">
				</div>
				<!-- SUbmit end -->
			</div>
		</div>
	</form>
<!-- test end -->
	<div class="hidden"></div>
	<div class="loader" style="display: none;">
		<div class="loader_inner"></div>
	</div>	
	<div class="menu_row">
		<div class="container">
			<div class="menu_block" style="border-color: rgb(221, 174, 121); background-color: rgb(255, 255, 255);">
				<div id="nav-icon3" class="">
					<span></span>
					<span></span>
					<span></span>
					<span></span>
				</div>
			</div>
		</div>
	</div>	

	<header id="top">
	
		<div class="header_wrap_nav">
			<ul>
				<li><a class="scroll_btn _mPS2id-h" href="#oxford">Английский для взрослых</a></li>
				<li><a class="scroll_btn _mPS2id-h" href="#adult_zero">Английский с нуля</a></li>
				<li><a class="scroll_btn _mPS2id-h" href="#adult_method">Методика</a></li>
				<li><a class="scroll_btn _mPS2id-h" href="#reviews_sec">Отзывы</a></li>
				<li><a class="scroll_btn _mPS2id-h" href="#schools">Наши школы</a></li>
			</ul>
		</div>	

		<!-- TEST -->
		<div class="header_wrap_nav_test">
		<i class="fa fa-times" aria-hidden="true" id="close"></i>
			<ul>
				<li><a href="/test/">подвести итоги</a></li>
				<li><a href="/?re_test=test">начать сначала</a></li>
				<li><a href="/">выйти из теста</a></li>
			</ul>
		</div>
		<!-- TEST END -->
		<div class="top_line">
			<div class="container">
				<div class="logo_block">
					<a href="http://chicaga.ru/#"><img src="/wp-content/uploads/2017/03/logo2.png"></a>
				</div>
				
				<div class="phone_menu_block clearfix">
					<div class="phone_block phone_ico">
						<p><span class="ya-phone">+7 812 242 50 03</span><br>
						<span class="snt_ptrbg">Санкт-Петербург</span></p>
					</div>
				</div>
			</div>
		</div>
		<div class="top_menu">
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<div class="menu">
							<ul>
								<li><a class="scroll_btn _mPS2id-h" href="#oxford">Английский для взрослых</a></li>
								<li><a class="scroll_btn _mPS2id-h" href="#adult_zero">Английский с нуля</a></li>
								<li><a class="scroll_btn _mPS2id-h" href="#adult_method">Методика</a></li>
								<li><a class="scroll_btn _mPS2id-h" href="#reviews_sec">Отзывы</a></li>
								<li><a class="scroll_btn _mPS2id-h" href="#schools">Наши школы</a></li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="middle_line">
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<div class="adult_bg">
							<h1 class="title">Бесплатные открытые уроки</h1>
							<form id="free_lesson_2" class="white-popup-block" method="post" action="http://chicaga.ru/mail.php" onsubmit="yaCounter43862954.reachGoal(&#39;send&#39;); return true;">
								<h5>Записаться на бесплатный урок</h5>
								<input type="text" name="Имя" placeholder="Ваше имя" required="" id="first_input">
								<input type="tel" name="Телефон" placeholder="Номер телефона*" required="" id="phone_mask" maxlength="18">

                        <div class="select-outer">
                            <select id="select" name="select" size="1">
                                <option>
                                    Выберите школу
                                </option>
                                <option>
                                    Школа на Академической
                                </option>
                                <option>
                                    Школа на Звездной
                                </option>
                                <option>
                                    Школа на Осипенко
                                </option>
                            </select>
                            <a class="select-button"></a>
                        </div>
								<input type="submit" value="Отправить">
								<input type="hidden" name="project_name" value="Skillset school">
								<input type="hidden" name="admin_email" value="">
								<input type="hidden" name="form_subject" value="Заявка на бесплатный урок">
								<input type="hidden" name="Адрес школы" value="" class="my_school_value">
							</form>
						</div>
						<h2 class="title"><? echo get_field('title_text_1')?></h2>
					</div>
				</div>
			</div>
		</div>
		<div class="adult_oxford" id="oxford">
			<div class="container">
				<div class="row">
					<div class="col-md-6">
						<div class="oxford-img">
							<img src="<? echo get_field('image_oxford_1')?>">
						</div>
					</div>
					<div class="col-md-6">
						<div class="oxford-text">
							<p><? echo get_field('text_oxford_1')?></p>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-md-6 col-md-push-6">
						<div class="oxford-img">
							<img src="<? echo get_field('image_oxford_2')?>">
						</div>
					</div>
					<div class="col-md-6 col-md-pull-6">
						<div class="oxford-text">
							<p><? echo get_field('text_oxford_2')?></p>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-md-6">
						<div class="oxford-img">
							<img src="<? echo get_field('image_oxford_3')?>">
						</div>
					</div>
					<div class="col-md-6">
						<div class="oxford-text">
							<p><? echo get_field('text_oxford_3')?></p>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-md-6 col-md-push-6">
						<div class="oxford-img">
							<img src="<? echo get_field('image_oxford_4')?>">
						</div>
					</div>
					<div class="col-md-6 col-md-pull-6">
						<div class="oxford-text">
							<p><? echo get_field('text_oxford_4')?></p>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="adult_zero" id="adult_zero">
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<h2 class="title"><? echo get_field('title_text_2')?></h2>
					</div>
					<div class="col-md-12">
						<div class="zero-item">
							<div class="zero-item-img">
								<img src="<? echo get_field('image_english_1')?>/wp-content/uploads/2017/03/adult_icon1.png" alt="">
							</div>
							<div class="zero-item-text">
								<p><? echo get_field('text_english_1')?></p>
							</div>
						</div>
					</div>
					<div class="col-md-12">
						<div class="zero-item">
							<div class="zero-item-img">
								<img src="<? echo get_field('image_english_2')?>/wp-content/uploads/2017/03/adult_icon2.png" alt="">
							</div>
							<div class="zero-item-text">
								<p><? echo get_field('text_english_2')?></p>
							</div>
						</div>
					</div>
					<div class="col-md-12">
						<div class="zero-item">
							<div class="zero-item-img">
								<img src="<? echo get_field('image_english_3')?>/wp-content/uploads/2017/03/adult_icon3.png" alt="">
							</div>
							<div class="zero-item-text">
								<p><? echo get_field('text_english_3')?></p>
							</div>
						</div>
					</div>
					<div class="col-md-12">
						<div class="zero-item">
							<div class="zero-item-img">
								<img src="<? echo get_field('image_english_4')?>/wp-content/uploads/2017/03/adult_icon4.png" alt="">
							</div>
							<div class="zero-item-text">
								<p><? echo get_field('text_english_4')?></p>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
				<section class="students_target">

        <h3><?php echo category_description(6) ?></h3>

        <div class="container">
            <div class="row">
            	
				<?php if( have_posts() ) : query_posts('p=34'); 
				while (have_posts()) : the_post();?>
                <div class="students_target_row clearfix">
                    <div class="col-md-8">
                        <div class="students_target_block_left">
                            <?php the_content(); ?>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="htl_block_right">
                            <div class="side_line_box"></div>
                            <h5><?php echo get_post_meta($post->ID, 'quote', true); ?></h5>
                            <p><?php echo get_post_meta($post->ID, 'sign', true); ?></p>
                        </div>
                    </div>
                </div>
				<?php endwhile;endif; wp_reset_query(); ?>                 

                <div class="students_target_blocks clearfix">
				
				<?php if( have_posts() ) : query_posts('cat=7'); 
				while (have_posts()) : the_post();?>
                    <div class="col-md-2 col-sm-4 col-xs-6">
                        <div class="target_block">
                            <div class="target_box">
                                <?php if ( has_post_thumbnail() ) : ?>
								<?php the_post_thumbnail(array()); ?>
								<?php endif; ?>
                            </div>
                            <p><?php the_title(); ?></p>
                        </div>
                    </div>
				<?php endwhile;endif; wp_reset_query(); ?>
                   
                </div>

                <button data-hover="wow" class="animated_btn free_lesson_btn popup_form" href="#free_lesson">
                    <span>Записаться на бесплатный урок</span>
                </button>

            </div>
        </div>
    </section>
		<div class="adult_forms">
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<h2 class="title"><? echo get_field('fortr_title')?>ФОРМЫ ОБУЧЕНИЯ</h2>
					</div>
					<div class="col-md-12">
						<div class="adult_forms_item">
							<div class="afi_img">
								<img src="<? echo get_field('fortr_img_1')?>" alt="">
							</div>
							<div class="afi_text">
								<h3 class="title"><? echo get_field('fortr_title_1')?></h3>
								<div class="afi_text_i">
									<span><? echo get_field('fortr_text_1')?></span>
									<div class="afi_text_img">
										<img src="<? echo get_field('fortr_img_2')?>" alt="">
									</div>
									<p><? echo get_field('fortr_text_2')?></p>
								</div>
								<div class="afi_text_i">
									<span><? echo get_field('fortr_text_3')?></span>
									<div class="afi_text_img">
										<img src="<? echo get_field('fortr_img_3')?>" alt="">
									</div>
									<p class="afi_border"><? echo get_field('fortr_text_4')?></p>
									<p><? echo get_field('fortr_text_5')?></p>
								</div>
								<div class="afi_text_i">
									<span><? echo get_field('fortr_text_6')?></span>
									<div class="afi_text_img">
										<img src="<? echo get_field('fortr_img_4')?>" alt="">
									</div>
									<p class="afi_border"><? echo get_field('fortr_text_7')?></p>
									<p><? echo get_field('fortr_text_8')?></p>
								</div>
							</div>
							<div class="afi_right">
								<p><? echo get_field('fortr_text_9')?></p>
							</div>
						</div>
					</div>
					<div class="col-md-12">
						<div class="adult_forms_item">
							<div class="afi_img">
								<img src="<? echo get_field('fortr_img_5')?>" alt="">
							</div>
							<div class="afi_text">
								<h3 class="title"><? echo get_field('fortr_title_2')?></h3>
								<div class="afi_text_i">
									<span><? echo get_field('fortr_text_10')?></span>
									<div class="afi_text_img">
										<img src="<? echo get_field('fortr_img_6')?>" alt="">
									</div>
									<p><? echo get_field('fortr_text_11')?></p>
								</div>
								<div class="afi_text_i">
									<span><? echo get_field('fortr_text_12')?></span>
									<div class="afi_text_img">
										<img src="<? echo get_field('fortr_img_7')?>" alt="">
									</div>
									<p class="afi_border"><? echo get_field('fortr_text_13')?></p>
									<p><? echo get_field('fortr_text_14')?></p>
								</div>
								<div class="afi_text_i">
									<span><? echo get_field('fortr_text_15')?></span>
									<div class="afi_text_img">
										<img src="<? echo get_field('fortr_img_8')?>" alt="">
									</div>
									<p class="afi_border"><? echo get_field('fortr_text_16')?></p>
									<p><? echo get_field('fortr_text_17')?></p>
								</div>
							</div>
							<div class="afi_right">
								<p><? echo get_field('fortr_text_18')?></p>
							</div>
						</div>
					</div>
					<div class="col-md-12">
						<div class="adult_forms_item">
							<div class="afi_img">
								<img src="<? echo get_field('fortr_img_9')?>" alt="">
							</div>
							<div class="afi_text">
								<h3 class="title"><? echo get_field('fortr_title_3')?></h3>
								<div class="afi_text_i">
									<span><? echo get_field('fortr_text_19')?></span>
									<div class="afi_text_img">
										<img src="<? echo get_field('fortr_img_10')?>" alt="">
									</div>
									<p class="afi_border"><? echo get_field('fortr_text_20')?></p>
									<p><? echo get_field('fortr_text_21')?></p>
								</div>
								<div class="afi_text_i">
									<span><? echo get_field('fortr_text_22')?></span>
									<div class="afi_text_img">
										<img src="<? echo get_field('fortr_img_11')?>" alt="">
									</div>
									<p class="afi_border"><? echo get_field('fortr_text_23')?></p>
									<p><? echo get_field('fortr_text_24')?></p>
								</div>
							</div>
							<div class="afi_right afi_l">
								<p><? echo get_field('fortr_text_25')?></p>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
				<div class="adult_method">
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<h2 class="title"><? echo get_field('meth_title')?></h2>
					</div>
					<div class="col-md-4">
						<div class="adult_method_img">
							<img src="<? echo get_field('meth_img_1')?>" alt="">
						</div>
					</div>
					<div class="col-md-8">
						<p><? echo get_field('meth_text_1')?></p>
					</div>
					<div class="col-md-12">
						<div class="graph-img">
							<img src="<? echo get_field('meth_img_2')?>" alt="">
						</div>
					</div>
					<div class="col-md-12">
						<div class="graph-img">
							<img src="<? echo get_field('meth_img_3')?>" alt="">
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="adult_rules">
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<h2 class="title"><? echo get_field('chi_rules_title')?></h2>
					</div>
					<div class="col-md-6">
						<div class="adult_rules_item">
							<div class="ari_figure">01</div>
							<div class="ari_text">
								<span><? echo get_field('chi_rules_text1')?></span>
								<h4 class="title"><? echo get_field('chi_rules_text3')?></h4>
								<p><? echo get_field('chi_rules_text4')?></p>
								<!--<a href="#"><? //echo get_field('chi_rules_text2')?></a>-->
							</div>
						</div>
					</div>
					<div class="col-md-6">
						<div class="adult_rules_item">
							<div class="ari_figure">02</div>
							<div class="ari_text">
								<span><? echo get_field('chi_rules_text1')?></span>
								<h4 class="title"><? echo get_field('chi_rules_text5')?></h4>
								<p><? echo get_field('chi_rules_text6')?></p>
								<!--<a href="#"><? //echo get_field('chi_rules_text2')?></a>-->
							</div>
						</div>
					</div>
					<div class="col-md-6">
						<div class="adult_rules_item">
							<div class="ari_figure">03</div>
							<div class="ari_text">
								<span><? echo get_field('chi_rules_text1')?></span>
								<h4 class="title"><? echo get_field('chi_rules_text7')?></h4>
								<p><? echo get_field('chi_rules_text8')?></p>
								<!--<a href="#"><? //echo get_field('chi_rules_text2')?></a>-->
							</div>
						</div>
					</div>
					<div class="col-md-6">
						<div class="adult_rules_item">
							<div class="ari_figure">04</div>
							<div class="ari_text">
								<span><? echo get_field('chi_rules_text1')?></span>
								<h4 class="title"><? echo get_field('chi_rules_text9')?></h4>
								<p><? echo get_field('chi_rules_text10')?></p>
								<!--<a href="#"><? //echo get_field('chi_rules_text2')?></a>-->
							</div>
						</div>
					</div>
					<div class="col-md-6">
						<div class="adult_rules_item">
							<div class="ari_figure">05</div>
							<div class="ari_text">
								<span><? echo get_field('chi_rules_text1')?></span>
								<h4 class="title"><? echo get_field('chi_rules_text11')?></h4>
								<p><? echo get_field('chi_rules_text12')?></p>
								<!--<a href="#"><? //echo get_field('chi_rules_text2')?></a>-->
							</div>
						</div>
					</div>
					<div class="col-md-6">
						<div class="adult_rules_item">
							<div class="ari_figure">06</div>
							<div class="ari_text">
								<span><? echo get_field('chi_rules_text1')?></span>
								<h4 class="title"><? echo get_field('chi_rules_text13')?></h4>
								<p><? echo get_field('chi_rules_text14')?></p>
								<!--<a href="#"><? //echo get_field('chi_rules_text2')?></a>-->
							</div>
						</div>
					</div>
					<div class="col-md-6">
						<div class="adult_rules_item">
							<div class="ari_figure">07</div>
							<div class="ari_text">
								<span><? echo get_field('chi_rules_text1')?></span>
								<h4 class="title"><? echo get_field('chi_rules_text15')?></h4>
								<p><? echo get_field('chi_rules_text16')?></p>
								<!--<a href="#"><? //echo get_field('chi_rules_text2')?></a>-->
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</header>
	<section class="htl_section">
		<div class="container">
			<div class="row">				
				<div class="htl_row clearfix">						
					<div class="col-md-8">
						<div class="htl_block_left">
							<h5><? echo get_field('textcom_title_1')?></h5>
							<div class="line_block">
								<span></span>
								<span></span>
								<span></span>
							</div>
								<p><? echo get_field('textcom_text_1')?><br></p>
							</div>
						</div>
					<div class="col-md-4">
						<div class="htl_block_right">
						<img src="<? echo get_field('textcom_avatar_1')?>" alt="Picture" width="90" height="90">
							<h5><? echo get_field('textcom_coment_1')?></h5> 
							<p><? echo get_field('textcom_comentator_1')?></p>
						</div>
					</div>				  
				</div>
				<div class="htl_row clearfix">					
					<div class="col-md-8">
						<div class="htl_block_left">
							<h5><? echo get_field('textcom_title_2')?></h5>
							<div class="line_block">
								<span></span>
								<span></span>
								<span></span>
							</div>
							<p><? echo get_field('textcom_text_2')?></p>
							</div>
					</div>
					<div class="col-md-4">
						<div class="htl_block_right">
					   <img src="<? echo get_field('textcom_avatar_2')?>" alt="Picture" width="90" height="90">
							<h5><? echo get_field('textcom_coment_2')?></h5> 
							<p><? echo get_field('textcom_comentator_2')?></p>
						</div>
					</div>
				</div>
				<div class="htl_row clearfix">
					<div class="col-md-8">
						<div class="htl_block_left">
							<h5><? echo get_field('textcom_title_3')?></h5>
							<div class="line_block">
								<span></span>
								<span></span>
								<span></span>
							</div>
							<p><? echo get_field('textcom_text_3')?></p>
						</div>
					</div>
					<div class="col-md-4">
						<div class="htl_block_right">
							<img src="<? echo get_field('textcom_avatar_3')?>" alt="Picture" width="90" height="90">
							<h5><? echo get_field('textcom_coment_3')?></h5> 
							<p><? echo get_field('textcom_comentator_3')?></p>
						</div>
					</div>
				</div>
				<button type="button" data-hover="wow" class="animated_btn free_lesson_btn popup_form" href="#free_lesson" onclick="yaCounter43862954.reachGoal(&#39;buttonBesplaturok&#39;); return true;">
					<span><? echo get_field('button_sub')?></span>
				</button>
			</div>
		</div>
	</section>
	<div class="adult_garanthy">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<h2 class="title"><? echo get_field('gar_title')?></h2>
					<p><? echo get_field('gar_text')?></p>
				</div>
			</div>
		</div>
	</div>
<!-- SECTION REVIEWS -->
<section class="reviews_sec" id="reviews_sec">
	<div class="container">
		<div class="row">
			<div class="col-xs-12">		
			<div class="col-xs-12 reviews_heading">
			   <h1>отзывы</h1>  
			</div>	

			<div class="reviews_wrap">
			<!-- REVIEW 1 -->
				<div class="col-sm-6 col-xs-12">
				<div class="reviews_item">
					<img src="<?echo get_field('bru_avtar_1')?>" alt="Reviews">
					<ul class="list-unstyled">
						<li class='review_name'><?echo get_field('bru_brushes_1')?></li>
						<li class='review_desc'><?echo get_field('bru_text_1')?></li>
						<li class='review_date'><?echo get_field('bru_date_1')?></li>
					</ul>
					</div>
				</div>
				<div class="col-sm-6 col-xs-12">
				<div class="reviews_item">
					<img src="<? echo get_field('bru_avtar_2')?>" alt="Reviews">
					<ul class="list-unstyled">
						<li class='review_name'><? echo get_field('bru_brushes_2')?></li>
						<li class='review_desc'><? echo get_field('bru_text_2')?></li>
						<li class='review_date'><? echo get_field('bru_date_2')?></li>
					</ul>
					</div>
				</div>
				<div class="col-sm-6 col-xs-12">
				<div class="reviews_item">
					<img src="<? echo get_field('bru_avtar_3')?>" alt="Reviews">
					<ul class="list-unstyled">
						<li class='review_name'><? echo get_field('bru_brushes_3')?></li>
						<li class='review_desc'><? echo get_field('bru_text_3')?></li>
						<li class='review_date'><? echo get_field('bru_date_3')?></li>
					</ul>
					</div>
				</div>
				<div class="col-sm-6 col-xs-12">
				<div class="reviews_item">
					<img src="<? echo get_field('bru_avtar_4')?>" alt="Reviews">
					<ul class="list-unstyled">
						<li class='review_name'><? echo get_field('bru_brushes_4')?></li>
						<li class='review_desc'><? echo get_field('bru_text_4')?></li>
						<li class='review_date'><? echo get_field('bru_date_4')?></li>
					</ul>
					</div>
				</div>
				<div class="col-sm-6 col-xs-12">
				<div class="reviews_item">
					<img src="<? echo get_field('bru_avtar_5')?>" alt="Reviews">
					<ul class="list-unstyled">
						<li class='review_name'><? echo get_field('bru_brushes_5')?></li>
						<li class='review_desc'><? echo get_field('bru_text_5')?></li>
						<li class='review_date'><? echo get_field('bru_date_5')?></li>
					</ul>
					</div>
				</div>
				<div class="col-sm-6 col-xs-12">
				<div class="reviews_item">
					<img src="<? echo get_field('bru_avtar_6')?>" alt="Reviews">
					<ul class="list-unstyled">
						<li class='review_name'><? echo get_field('bru_brushes_6')?></li>
						<li class='review_desc'><? echo get_field('bru_text_6')?></li>
						<li class='review_date'><? echo get_field('bru_date_6')?></li>
					</ul>
					</div>
				</div>
			</div>	
		</div>
		</div>  
	</div>
</section>
	<section class="action" id="schools">
		<div class="container">
			<div class="row">
				<div class="col-md-12"><h2 class="title"><? echo get_field('sculist_title')?></h2></div>
				<div class="action_block">
					<div class="action_block_txt">						
						<h2>до 30 СЕНТЯБРЯ твой курс</h2>
						<div class="action_box">
							<p>POWER-INTENSIVE</p>
							<p><strong>160</strong> АК.ЧАСОВ</p>
						</div>
						<h2 class="h2_price">по цене</h2>						
						<h2>курса</h2>
						<div class="action_box">
							<p>Обычный</p>
							<p>96 АК.ЧАСОВ</p>
						</div>
						<div class="small_line"></div>
					</div>
					<div class="action_schools">
						<h6><p>Акция действует только в 4-х этих школах из 8-ми:</p></h6>
					</div>
				</div>
					<div class="action_schools_blocks col-md-6
						col-xs-12 PN">
								<div class="school_box">
									<h6><? echo get_field('sculist_name_1')?></h6>
									<p><? echo get_field('sculist_shotad_1')?></p>
									<p><? echo get_field('sculist_adres_1')?></p>
									<p><a href="tel:<? echo get_field('sculist_phone_1')?>">тел.<? echo get_field('sculist_phone_1')?></a></p>
								</div>
								<div class="school_box">
									<h6><? echo get_field('sculist_name_2')?></h6>
									<p><? echo get_field('sculist_shotad_2')?></p>
									<p><? echo get_field('sculist_adres_2')?></p>
									<p><a href="tel:<? echo get_field('sculist_phone_2')?>">тел.<? echo get_field('sculist_phone_2')?></a></p>
								</div>
								<div class="school_box">
									<h6><? echo get_field('sculist_name_4')?></h6>
									<p><? echo get_field('sculist_shotad_4')?></p>
									<p><? echo get_field('sculist_adres_4')?></p>
									<p><a href="tel:<? echo get_field('sculist_phone_4')?>">тел.<? echo get_field('sculist_phone_4')?></a></p>
									<p>&nbsp;</p>
									<p><strong><? echo get_field('sculist_onphone')?></strong></p>
								</div>
							
	

						</div>

						<div class="col-md-6 col-xs-12 PN school_map">
                            <div>
                            	<script type="text/javascript" charset="utf-8" async src="https://api-maps.yandex.ru/services/constructor/1.0/js/?um=constructor%3A534204b17902a19483eb3aeb9a6962949c0e0c03f716198b1444db80b6d5f839&amp;width=539&amp;height=327&amp;lang=ru_RU&amp;scroll=true"></script>
                            	</div>
                        </div>
					
			</div>
		</div>
	</section>



<?php get_footer();?>
