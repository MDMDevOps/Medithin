<div class="app-static-index">
	<div class="col-left">
		<h1 class="normal">Since early 2011, we’ve been helping people in Southern Wisconsin lose weight and learn how to keep it off. Medithin offers a physician-supervised weight loss program that is safe, proven effective, and affordable. Patients are assessed, and their progress is monitored, by a physician and medical staff to ensure optimum care and support in reaching their weight loss goals. Go to  <a href="<?php echo $this->createUrl('/static/general/index', array('view'=>'our_program')); ?>">Our Program</a> to learn more and make sure you take a look at our  <a href="<?php echo $this->createUrl('/static/general/index', array('view'=>'testimonials')); ?>">Testimonials</a>.
		</h1>

		<h2><strong>Now it's your turn to become a success story.</strong></h2>

		<?php
		$this->widget('w.wBannerPlace.wBannerPlace', array(
			'htmlOptions'=>array('class'=>'sepV10'),
			'id_place'=>CouponPlaces::PL_HOME_PAGE_CENTER,
			'image'=>$this->baseUrlImg."/banners/".$this->bannerFile,
			'link'=>$this->bannerLink,
			'linkOptions'=>$this->bannerLinkOptions,
		));
		 ?>

		<h2 class="sepV20">Call <strong>608-531-0400</strong> now for more<br />
			information or to book your initial visit.&nbsp;</h2>

		<?php include('_location_hours.php'); ?>

		<div class="sepV50">
			<img src="<?php echo $this->baseUrlImg; ?>/static/index/learn_more.png" class="img-learn-more" />
			<a href="<?php echo $this->createUrl('/static/general/index', array('view'=>'our_program')); ?>"><img src="<?php echo $this->baseUrlImg; ?>/static/index/btn_continue.png" class="img-btn-continue" /></a>
		</div>
	</div>
	<div class="col-right text-center">
		<?php $this->widget('application.components.widgets.wTestimonials.wTestimonials'); ?>

		<?php $this->widget('application.components.widgets.wBmi.wBmi', array('htmlOptions'=>array('class'=>'sepV20'))); ?>

		<a href="https://www.facebook.com/medithinweightlossclinics" target="_blank" title="Facebook page"><img src="<?php echo $this->baseUrlImg; ?>/static/index/website_facebook.gif" border="0" height="82" width="296" class="sepV20"></a>
	</div>
	<div class="clearfix"></div>
</div>

<?php $this->widget('w.wExitpopup.wExitpopup'); ?>
