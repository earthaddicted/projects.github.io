    <footer id="main_footer">

        <div class="container">
            <div class="row">
            	
<?php if( have_posts() ) : query_posts('p=78'); 
while (have_posts()) : the_post();?>
                <div class="col-md-2 col-sm-12 col-md-push-5">
                    <div class="row">
                        <div class="logo_block">
                            <a href="#">
                               <img src="/wp-content/uploads/2017/03/chicaga_logo.png" alt="Footer Logo"
                               width="200" height="41">
                            </a>
                        </div>
                    </div>
                </div>

                <div class="col-md-5 col-sm-4 col-md-push-5 col-xs-12">

                    <div class="phone_block phone_ico">
                        <?php the_content(); ?>
                    </div>

                    <button class="up_btn" href="#top">
                        <span>наверх</span>
                    </button>

                </div>
<?php endwhile;endif; wp_reset_query(); ?>                 

                <div class="col-md-5 col-sm-8 col-md-pull-7 col-xs-12">

                    <div class="soc_links_block">
                        <?php echo category_description(12);?>

<ul>                            <li><a onclick="yaCounter43862954.reachGoal('buttonTwitter'); return true;" href="#" title="Twitter"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>                            <li><a onclick="yaCounter43862954.reachGoal('buttonVK'); return true;" href="#" title="Vkontakte"><i class="fa fa-vk" aria-hidden="true"></i></a></li>                            <li><a onclick="yaCounter43862954.reachGoal('buttonFacebook'); return true;" href="#" title="Facebook"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>                            <li><a onclick="yaCounter43862954.reachGoal('buttonInsta'); return true;" href="#" title="Instagram"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>                                                    </ul>
                        
<?php if( have_posts() ) : query_posts('p=82'); 
while (have_posts()) : the_post();?>
<?php the_content(); ?>
<?php endwhile;endif; wp_reset_query(); ?>
                        
                    </div>

                </div>

            </div>
        </div>

    </footer>

    <!--[if lt IE 9]>
	<script src="<?php echo get_template_directory_uri();?>/libs/html5shiv/es5-shim.min.js"></script>
	<script src="<?php echo get_template_directory_uri();?>/libs/html5shiv/html5shiv.min.js"></script>
	<script src="<?php echo get_template_directory_uri();?>/libs/html5shiv/html5shiv-printshiv.min.js"></script>
	<script src="<?php echo get_template_directory_uri();?>/libs/respond/respond.min.js"></script>
	<![endif]-->

    <script src="<?php echo get_template_directory_uri();?>/libs/jquery/jquery-1.11.2.min.js"></script>
     <script src="<?php echo get_template_directory_uri();?>/libs/slick/slick/slick.min.js"></script>
    <script src="<?php echo get_template_directory_uri();?>/libs/waypoints/waypoints.min.js"></script>
    <script src="<?php echo get_template_directory_uri();?>/libs/animate/animate-css.js"></script>
    <script src="<?php echo get_template_directory_uri();?>/libs/viewport-checker/jquery.viewportchecker.min.js"></script>

    <script src="<?php echo get_template_directory_uri();?>/libs/OwlCarousel/owl.carousel.min.js"></script>
    <script src="<?php echo get_template_directory_uri();?>/libs/magnific-popup/jquery.magnific-popup.min.js"></script>
    <script src="<?php echo get_template_directory_uri();?>/libs/scroll2id/PageScroll2id.min.js"></script>
    <script src="<?php echo get_template_directory_uri();?>/libs/mask-plugin/jquery.mask.min.js"></script>

    <script src="<?php echo get_template_directory_uri();?>/js/common.js"></script>
    
    <!-- FOR RETEST -->
    <script src='<?=$re_test?>;' type='text/javascript'></script>
    <!-- RETEST END -->

  <?php wp_footer(); ?>

    <script src="http://cdn.callibri.ru/callibri.js" type="text/javascript"></script>

    <? $re_test = '';
    if($_GET['re_test']):?>
    <!-- FOR RETEST -->
    <script src='/wp-content/themes/SkillsetTheme/js/re_test.js' type='text/javascript'></script>
    <!-- RETEST END -->
    <?else:?>

    <?endif;?>
</body>

</html>