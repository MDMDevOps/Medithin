<div class="app-static-hannah_testimonial">
    <div class="clearfix">
        <div class="col-right text-center">
            <img src="<?php echo $this->baseUrlImg; ?>/static/hanna_testimonial/hanna.png" width="420" height="815" style="margin-right: -20px;">

            <img class="sepV30" src="<?php echo $this->baseUrlImg; ?>/static/hanna_testimonial/youve_been_thinking.png" width="322" height="294">

            <?php $this->widget('application.components.widgets.wBannerPlace.wBannerPlace', array(
                'htmlOptions' => array('class' => 'sepV20'),
                'image' => $this->baseUrlImg . '/static/hanna_testimonial/coupon.png',
                'id_place' => CouponPlaces::PL_HANNA_TESTIMONIAL,
            )); ?>

			<?php $this->widget('application.components.widgets.wAddresses.wAddresses', array(
				'htmlOptions' => array('class' => 'sepV30')
			)); ?>
        </div>

        <div class="col-left">
            <img src="<?php echo $this->baseUrlImg; ?>/static/hanna_testimonial/hanna_lost.png" width="464" height="113">

            <table class="sepV10" cellpadding="0" cellspacing="0" style="margin-left: -8px;">
                <tr>
                    <td class="valign-top" style="width: 295px">
                        <img src="<?php echo $this->baseUrlImg; ?>/static/hanna_testimonial/hanna_history.png" width="288" height="231">
                    </td>

                    <td class="valign-top" style="padding-top: 10px;">
                        Hannah is one of our Janesville<br>
                        patients and she’s a great<br>
                        success story. She had lost<br>
                        some weight on her own and<br>
                        then came to us for help in<br>
                        getting to her goal weight. She<br>
                        lost over 50 pounds with<br>
                        Medithin and is maintaining a<br>
                        healthy body weight now!
                    </td>
                </tr>
            </table>

            <img class="sepV30" src="<?php echo $this->baseUrlImg; ?>/static/hanna_testimonial/everyones_jorney.png" width="349" height="40">
            <script type="text/javascript" src="//jeffd.evsuite.com/player/bWVkaXRoaW4taGFubmFoLTJmb3IxLTEubXA0/?container=evp-EI4YPL7SK5"></script>
            <div class="sepV10" id="evp-EI4YPL7SK5" data-role="evp-video" data-evp-id="bWVkaXRoaW4taGFubmFoLTJmb3IxLTEubXA0"></div>

            <img class="sepV30" src="<?php echo $this->baseUrlImg; ?>/static/hanna_testimonial/wev_helped.png" width="456" height="41">

            <div class="sepV20">If you’ve tried other programs without success, Medithin could finally be<br>
                your solution. On our medically-supervised program you will burn fat and<br>
                lose weight, plus your cravings will subside and your energy levels will<br>
                improve. And when you get to your goal weight, we will teach you how to<br>
                maintain a healthy body weight for life.</div>

            <div class="sepV20">You can see many more success stories by clicking on the photos below,<br>
                and read what some of our patients are saying on our <a href="<?php echo Yii::app()->controller->createUrl('/static/general/index', array('view' => 'testimonials')); ?>">Testimonials</a> page.</div>

            <div class="sepV20">Visit <a href="<?php echo Yii::app()->controller->createUrl('/static/general/index', array('view' => 'our_program')); ?>">Our Program</a> to learn more and then give us a call to learn how we<br>
                can help you become a Medithin success story. <strong>608-531-0400.</strong></div>

            <?php $this->widget('application.components.widgets.wTestimonials.wTestimonials', array(
                'htmlOptions' => array('class' => 'sepV30'),
            )); ?>


        </div>
    </div>

	<div>
		<img src="<?php echo $this->baseUrlImg; ?>/static/hanna_testimonial/just_fiew.png"/>
	</div>

	<div class="sepV10">
		<a href="<?php echo Yii::app()->controller->createUrl('/static/general/index', array('view' => 'testimonials')); ?>"><img src="<?php echo $this->baseUrlImg; ?>/static/hanna_testimonial/here_are_just_a_few.png" /></a>
	</div>

    <script type="text/javascript">var ssaUrl = ('https:' == document.location.protocol ? 'https://' : 'http://') + 'pixel.sitescout.com/iap/7de45671438a6185';new Image().src = ssaUrl;</script>
</div>
