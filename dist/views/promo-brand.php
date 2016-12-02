<div class="app-static-promo-brand">
	<div class="col-left">
		<div>
			<img src="<?php echo $this->baseUrlImg; ?>/static/promo_brand/are-you-ready2.png" width="444" height="25"/>
		</div>
		<div class="sepV50">
			<img src="<?php echo $this->baseUrlImg; ?>/static/promo_brand/title2.png" width="544" height="67"/>
		</div>
		<div class="sepV30">
			<img src="<?php echo $this->baseUrlImg; ?>/static/promo_brand/before-after.png" width="321" height="257"/>
		</div>
		<div class="text-box sepV40">
			"Medithin gives you fast results.<br>
			When you are overweight you<br>
			want the pounds gone now. Other<br>
			plans I tried worked but so slowly<br>
			that over time it was easy to give<br>
			up. On this plan there were<br>
			results every week.<br>
			<br>
			I feel good overall – I have more<br>
			energy and less aches and pains.<br>
			I love trying on and buying clothes<br>
			now. I feel more confident."<br>
			&nbsp;&nbsp;&nbsp;– Leann H. from Janesville*
		</div>
		<div class="leann">
			<img src="<?php echo $this->baseUrlImg; ?>/static/promo_brand/leann.png" width="520" height="795"/>
		</div>
	</div>
	<div class="col-right">
		<div>
			<?php $this->widget('w.wBannerPlace.wBannerPlace', array(
				'htmlOptions' => array('class' => 'sepV10'),
				'id_place' => CouponPlaces::PL_PROMO_BRAND,
				'image'=>$this->baseUrlImg."/banners/".$this->sidebarFile,
				'link'=>$this->bannerLink,
				'linkOptions'=>$this->bannerLinkOptions,
			)); ?>
		</div>
		<div class="sepV20 note">
			Fill out the form below to save money while losing weight.
		</div>
		<div class="sepV10 note">
			(Please complete all fields.)
		</div>


		<div id="optin-form-container" class="sepV10"></div>
		<?php Yii::app()->clientScript->registerScript('load-optin-form', 'appMain.ajaxLoadUrlModal("' . $this->createAbsoluteUrl('promobrandoptin', array('src' => CouponPlaces::PL_PROMO_BRAND)) . '");', CClientScript::POS_READY); ?>

	</div>
	<div class="clearfix"></div>
</div>

