<?php function shelley_load_services() {

	global $shelley_services_header; 
	global $shelley_services_tagline;
	global $shelley_services_image_1;
	global $shelley_services_title_1; 
	global $shelley_services_description_1;
	global $shelley_services_href_button_1;
	global $shelley_services_text_button_1;
	
	



	global $shelley_services_image_2;
	global $shelley_services_title_2; 
	global $shelley_services_description_2;
	global $shelley_services_text_button_2;
	global $shelley_services_href_button_2;
	
	global $shelley_services_image_3;
	global $shelley_services_title_3; 
	global $shelley_services_description_3;
	global $shelley_services_href_button_3;
	global $shelley_services_text_button_3;


	
?>
<div class="services">
		<div class="row service-items wow fadeInUp">
			<div class="col-md-4 text-center">
				<div>
					<a href="<?php echo $shelley_services_href_button_1; ?>"><img style="height: 95px" src="<?php echo $shelley_services_image_1; ?>" ></a>
				</div>
					<h3 class="text-info"><?php echo $shelley_services_title_1; ?></h3>
					<p style="min-height: 90px"><?php echo $shelley_services_description_1; ?></p>
					<a href="<?php echo $shelley_services_href_button_1; ?>" ><?php echo $shelley_services_text_button_1; ?></a>
			</div>
			<div class="col-md-4 text-center">
				<div>
					<a href="<?php echo $shelley_services_href_button_2; ?>"><img style="height: 95px" src="<?php echo $shelley_services_image_2; ?>" ></a>
				</div>
				<h3 class="text-info"><?php echo $shelley_services_title_2; ?></h3>
				<p style="min-height: 90px"><?php echo $shelley_services_description_2; ?></p>
				<a href="<?php echo $shelley_services_href_button_2; ?>" ><?php echo $shelley_services_text_button_2; ?></a>
				
			</div>
			<div class="col-md-4 text-center">
				<div>
					<a href="<?php echo $shelley_services_href_button_; ?>"><img style="height: 95px" src="<?php echo $shelley_services_image_3; ?>" ></a>
				</div>
				<h3 class="text-info"><?php echo $shelley_services_title_3; ?></h3>
				<p style="min-height: 90px"><?php echo $shelley_services_description_3; ?></p>
				<a href="<?php echo $shelley_services_href_button_3; ?>" ><?php echo $shelley_services_text_button_3; ?></a>
			</div>
			
		</div>
</div>
<?php } ?>