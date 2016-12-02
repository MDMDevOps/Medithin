<?php
$this->social_box = false;

Yii::app()->clientScript->registerMetaTag('Medithin Success | Real People Real Results', 'og:title');
Yii::app()->clientScript->registerMetaTag('http://' . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'], 'og:url');
Yii::app()->clientScript->registerMetaTag($wallPicture['img'], 'og:image');
Yii::app()->clientScript->registerMetaTag('Medithin Weight Loss Clinics offer a physician-supervised weight loss program that is safe, proven effective, and affordable. Patients are assessed, and their progress is monitored, by a physician and medical staff to ensure optimum care and support in reaching their weight loss goals.', 'og:description');

$this->page_title = 'Medithin Success | Real People Real Results';
$this->page_description = 'Medithin Weight Loss Clinics offer a physician-supervised weight loss program that is safe, proven effective, and affordable. Patients are assessed, and their progress is monitored, by a physician and medical staff to ensure optimum care and support in reaching their weight loss goals.';
$this->page_keywords = $wallPicture['keywords'];

Yii::app()->clientScript->registerScript('appSuccessIndex_init', 'appSuccessIndex.init()');
?>

<div class="app-success-index">
	<img src="<?php echo $this->baseUrlImg; ?>/success/another_great_story.png">

	<div class="clearfix">
		<div class="col-left">
			<a class="big-image" href="<?php echo $wallPicture->imageUrl; ?>">
				<img src="<?php echo $wallPicture->imageUrl ?>" alt="">
			</a>

			<div class="facebook">
				<a href="#" title="Share on Facebook">
					<img src="<?php echo $this->baseUrlImg; ?>/success/facebook_share.jpg">
				</a>

				<iframe src="//www.facebook.com/plugins/like.php?href=http%3A%2F%2Fwww.medithinweightlossclinics.com&amp;width&amp;layout=standard&amp;action=like&amp;show_faces=false&amp;share=false&amp;height=80&amp;appId=134408416635627" scrolling="no" frameborder="0" allowtransparency="true"></iframe>
			</div>

			<div class="sepV70">
				<img src="<?php echo $this->baseUrlImg; ?>/success/wev_helped.png">

				<p class="sepV20">
					If you’ve tried other programs without success, Medithin could finally be<br>
					your solution. Go to <a href="<?php echo $this->createUrl('/static/general/index', array('view' => 'our_program')); ?>">Our Program</a> to learn more and be sure to look at the<br>
					<a href="<?php echo $this->createUrl('/static/general/index', array('view' => 'testimonials')); ?>">Testimonials</a> and photos. Then give us a call to learn how we can help<br>
					you become a Medithin success story.
				</p>

				<p class="sepV30 font18">
					Call <strong>608-531-0400</strong> today for more information or to book<br> your New Patient Visit.
				</p>
			</div>

			<div class="sepV10">
				<img src="<?php echo $this->baseUrlImg; ?>/success/just_fiew.png">
			</div>

			<div class="sepV10">
				<a href="<?php echo $this->createUrl('/static/general/index', array('view' => 'testimonials')); ?>">
					<img src="<?php echo $this->baseUrlImg; ?>/success/here_are_just_a_few.png">
				</a>
			</div>
		</div>

		<div class="col-right">
			<img src="<?php echo $this->baseUrlImg; ?>/success/how_much.png">

			<?php $this->widget('w.wBannerPlace.wBannerPlace', array(
				'htmlOptions' => array('class' => 'sepV20'),
				'id_place' => CouponPlaces::PL_INDIVIDUAL_PAGE,
				'image'=>$this->baseUrlImg."/banners/".$this->sidebarFile,
				'link'=>$this->bannerLink,
				'linkOptions'=>$this->bannerLinkOptions,
			)); ?>

			<?php $this->widget('application.components.widgets.wTestimonials.wTestimonials', array(
				'htmlOptions' => array('class' => 'sepV20'),
			)); ?>

			<?php $this->widget('application.components.widgets.wAddresses.wAddresses', array(
				'htmlOptions' => array('class' => 'sepV30')
			)); ?>
		</div>
	</div>
</div>