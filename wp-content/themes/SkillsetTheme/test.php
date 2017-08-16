<?php /* Template Name: Test */ ?>
<? get_header();?>

<!-- checks test -->
<?php
if($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['submit_test'])){
//	FALSE 	  TRUE
	$missed = $result = '';

	$quest1 = $_POST['quest1'];
	$quest2 = $_POST['quest2'];
	$quest3 = $_POST['quest3'];
	$quest4 = $_POST['quest4'];
	$quest5 = $_POST['quest5'];
	$quest6 = $_POST['quest6'];
	$quest7 = $_POST['quest7'];
	$quest8 = $_POST['quest8'];
	$quest9 = $_POST['quest9'];
	$quest10 = $_POST['quest10'];
	$quest11 = $_POST['quest11'];
	$quest12 = $_POST['quest12'];
	$quest13 = $_POST['quest13'];

//Collect QUESTIONS ARRAY
 $questions = array($quest1,$quest2,$quest3,$quest4,$quest5,$quest6,$quest7,$quest8,$quest9,$quest10,$quest11,$quest12,$quest13);

 $t = 1;
 $f = 1;
 foreach ($questions as $value) {
 	
 	 if($value == 'true'){
	 	$result = $t++;
  }

  else{
  	$missed = $f++;
  }
	 }
}
?>
<!-- checks test end-->
<div class='test'>
<div class="container">
	<div class="row">
		<div class="header_wrap_test_menu">
	<ul class="list-unstyled">
		<li>game over</li>

		<?php if(is_null($result) && is_null($missed)):?>
		<li>0</li>
		<li class='white_line'></li>
		<li style='margin-top: 0'>0</li>
		<li>You must pass the test for extra-discount</li>

		<?php else:?>
		<li><?=$result?></li>
		<li class='white_line'></li>
		<li style='margin-top: 0'><?=$missed?></li>
		<li>you have got <?=$missed?>% extra-discount</li>
		<? endif;?>

		<li>for you first month studying!</li>
		
		<?if($missed == 0):?>
		<li class='gold'>
		пройди тест чтобы получить экстра-скидку
		</li>
		<?else:?>
		<li class='gold'>
		ты получил <?=$missed?>% экстра-скидку
		</li>
		<?endif;?>
		<li class='gold'>на первый месяц обучения!</li>
	</ul>
	<div class="container">
	<div class="row">
	<div class="col-xs-12">
	<div class="wrap_option">
	<div class="re_new col-md-4 col-xs-12"><a href='/?re_test=test'>Пройдите тест<br>
	заново</a></div>


	<div class="want_discount col-sm-4 col-xs-12 ">
	<a href='#free_lesson' class='popup_form'>
	Хочу получить<br>
	курс с экстра-скидкой
	</a></div>
 	</div> 
	</div>
	</div>
	</div>
	</div>
	</div>


	</div>
</div>

</div>

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

</html>