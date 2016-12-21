<div class="app-static-our_program clearfix">
    <div class="col-md-8">
        <h1 class="headline">Are You Ready To Lose Weight For Good?</h1>

        <p class="sepV20">
            <img class="image-right" src="<?php echo $this->baseUrlImg; ?>/static/our_program/our_program1.jpg" width="181" height="296"/>
            The Medithin Weight Loss Clinics program is designed by experts in medicine, nutrition, fitness, motivation, and
            <br>education. Medical professionals prescribe a weight loss plan
            <br>based on the patient’s individual goals, current physical
            <br>condition, and medical history.
        </p>

        <ul class="sepV20">
            <li>Shed unwanted pounds</li>
            <li>Eliminate carb and sugar cravings</li>
            <li>Burn fat</li>
            <li>Increase your energy levels</li>
            <li>Boost your metabolism</li>
            <li>Learn to maintain a healthy body weight</li>
        </ul>


        <p class="sepV20"><span class="blue16">Your Personalized Weight Loss Plan</span>
            <br>At your initial visit you will meet with a nurse who will do a
            <br>complete medical intake, a complete lab panel, an EKG, and a
            <br>mini physical. Based on the results and your goals, an
            <br>individualized program will be set up for you.
        </p>

        <p class="sepV20 clearfix">
            <img class="image-left" src="<?php echo $this->baseUrlImg; ?>/static/our_program/our_program2.jpg" width="220" height="136" />

			Your program will include an FDA-approved prescription<br>
			appetite suppressant or an all-natural amino acid<br>
			appetite suppressant specifically formulated for weight<br>
			loss, along with vitamin B12, which work together to<br>
			help accelerate weight loss and suppress hunger.<br>
			Additional nutritional supplements are available to<br>
			enhance and accelerate your program.
        </p>

        <p class="sepV20">
            You will follow an eating plan specifically designed to burn fat. This will kickstart your
            <br>metabolism, lower blood insulin levels, and create the foundation for maintaining weight loss.
        </p>

        <p class="sepV20">
            <img class="image-right" src="<?php echo $this->baseUrlImg; ?>/static/our_program/our_program3.jpg" width="254" height="172" />
			At your weekly followup visits you will meet with a<br>
			member of our medical staff who will take your<br>
			blood pressure, check your weight and BMI,<br>
			analyze your weight loss results, and adjust<br>
			your program if needed. You will also receive your <br>
			B12 and your prescribed appetite suppressant.
        </p>

        <p class="sepV20"><span class="blue16">A Solution For Life</span><br/>
            What makes us unique is our two-phase
            <br>approach – first is the acute weight loss phase, where the patient reaches their goal weight
            <br>and a healthy BMI range, and the second is the maintenance phase, where we help
            <br>patients keep off the weight they’ve lost.
        </p>

        <p class="sepV20">
            Research has indicated that 9 out of 10 people who have lost weight through any weight
            <br>loss program will regain the weight if they fail to participate in a maintenance program. We
            <br><img class="image-right" src="<?php echo $this->baseUrlImg; ?>/static/our_program/our_program4.jpg" width="212" height="186"/>
            are continually enhancing our maintenance program and
            <br>are dedicated to providing the patient with ongoing
            <br>support and resources to not only maintain their weight
            <br>loss, but to live a life of optimal wellness.
        </p>

        <p class="sepV20"><span class="blue16">Choose Lifetime Success</span>
            <br>If you have tried other diet programs without success,
            <br>the Medithin Weight Loss Clinics program could finally
            <br>be your solution. Our patients are amazed at the results
            <br>they experience – they lose weight and have more
            <br>energy – and they’re empowered with the knowledge
            <br>and tools to keep the weight off and to live a healthy lifestyle.
        </p>

        <p class="sepV20"><span class="blue16">Call <strong>608-531-0400</strong> Now To Book Your Initial Visit</span>
			<?php if ($this->discountAmount):?>
			<br><strong>And be sure to click on the coupon below to get $<?php echo $this->discountAmount; ?> off your initial new patient <br>
			visit.</strong>
			<?php endif;?>
        </p>

        <?php $this->widget('w.wBannerPlace.wBannerPlace', array(
            'htmlOptions' => array('class' => 'sepV30'),
            'id_place' => CouponPlaces::PL_OUR_PROGRAM_CENTER,
			'image'=>$this->baseUrlImg."/banners/".$this->bannerFile,
			'link'=>$this->bannerLink,
			'linkOptions'=>$this->bannerLinkOptions,
        )); ?>

        <div class="sepV20">
            <img src="<?php echo $this->baseUrlImg; ?>/static/our_program/just_fiew.png"/>
        </div>

        <div class="sepV10">
            <a href="<?php echo $this->createUrl('/static/general/index', array('view' => 'testimonials')); ?>"><img src="<?php echo $this->baseUrlImg; ?>/static/our_program/here_are_just_a_few2.png"/></a>
        </div>
    </div>

    <div class="col-md-4 text-center">
        <?php $this->widget('w.wBannerPlace.wBannerPlace', array(
            'htmlOptions' => array('class' => 'sepV10'),
            'id_place' => CouponPlaces::PL_OUR_PROGRAM_SIDE,
			'image'=>$this->baseUrlImg."/banners/".$this->sidebarFile,
			'link'=>$this->bannerLink,
			'linkOptions'=>$this->bannerLinkOptions,
        )); ?>

        <?php $this->widget('application.components.widgets.wTestimonials.wTestimonials', array(
            'htmlOptions' => array('class' => 'sepV20'),
        )); ?>

		<?php $this->widget('w.wCallToday.wCallToday', array('htmlOptions'=>array('class'=>'sepV20'))); ?>

        <a href="https://www.facebook.com/medithinweightlossclinics" target="_blank" title="Facebook page"><img
                src="<?php echo $this->baseUrlImg; ?>/static/index/website_facebook.gif" border="0" height="82"
                width="296" class="sepV20"></a>
    </div>
</div>

<?php $this->widget('w.wExitpopup.wExitpopup'); ?>
