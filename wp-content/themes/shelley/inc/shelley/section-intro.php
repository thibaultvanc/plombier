
<?php function shelley_load_intro() { 

	global $shelley_intro_image;
	global $shelley_intro_image_2; //
	global $shelley_intro_teaser; //
	global $shelley_intro_arg_1; //
	global $shelley_intro_arg_2; //
	global $shelley_intro_arg_3; //
	global $shelley_intro_arg_4; //


	global $shelley_intro_title;
	global $shelley_intro_paragraph_1;
	global $shelley_intro_paragraph_2;
?>
<div class="intro">
		<div class="row">
			<section class="col-md-6 wow fadeInUp" class="teaser_area">
				<img src="<?php echo $shelley_intro_image; ?>">
				<br>
				<br>
				<br>
				<br>
				<h3 class="text-primary"><?= $shelley_intro_teaser ?></h3>
				<br>
				<ul>
					<li class="arg" style="font-size: 21px; margin-bottom:15px; list-style: none" ><img style="height: 35px" src="https://cdn3.iconfinder.com/data/icons/musthave/48/Check.png"> <?= $shelley_intro_arg_1 ?></li>
					<li class="arg" style="font-size: 21px; margin-bottom:15px; list-style: none" ><img style="height: 35px" src="https://cdn3.iconfinder.com/data/icons/musthave/48/Check.png"> <?= $shelley_intro_arg_2 ?></li>
					<li class="arg" style="font-size: 21px; margin-bottom:15px; list-style: none" ><img style="height: 35px" src="https://cdn3.iconfinder.com/data/icons/musthave/48/Check.png"> <?= $shelley_intro_arg_3 ?></li>
					<li class="arg" style="font-size: 21px; margin-bottom:15px; list-style: none" ><img style="height: 35px" src="https://cdn3.iconfinder.com/data/icons/musthave/48/Check.png"> <?= $shelley_intro_arg_4 ?></li>
				</ul>
				<br>
				<br>
				<br>
				<br>
				<img src="<?php echo $shelley_intro_image_2; ?>">
			</section>
			<div class="col-md-6 intro-text">
				<h3><?php echo $shelley_intro_title; ?></h3>
				<p  style="text-align:justify">	<?php echo $shelley_intro_paragraph_1; ?></p>

				<p>	<?php echo $shelley_intro_paragraph_2; ?></p>


			</div>
		</div>
</div>
<?php } ?>