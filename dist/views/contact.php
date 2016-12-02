<?php
	// выебоны для защиты от спама
	// сабмит разрешаем только аяксом только на другую страницу
	$model = new Contact('contact-page');
	// update stats for clicks
	CouponVisits::saveVisit(CouponPlaces::PL_CONTACT_FORM, CouponVisits::CPN_FIELD_VISIT);
?>
<div class="app-static-contact">
	<div class="col-left">
        <p><img src="<?php echo $this->baseUrlImg; ?>/static/contact/learn_more.png" width="509" height="92" alt="Whould you like to learn more?" class="title"/></p>

        <p class="sepV30 font12">Please email us using the form below, or call 608-531-0400.</p>

        <div id="contact_form_div" class="sepV20">
            <div><span class="black10">(Please complete all fields marked <span class="text-red">*</span>)</span></div>

			<?php $form = $this->beginWidget('CActiveForm', array(
				'id' => 'contact-form',
				'htmlOptions' => array(	'class' => 'form-horizontal'),
			));	?>

			<p class="black10"><br /><?php echo $form->labelEx($model, 'firstname', array('label'=>'First Name')); ?></p>
			<p class="black10"><?php echo $form->textField($model, 'firstname', array()); ?></p>

			<p class="black10"><br /><?php echo $form->labelEx($model, 'lastname', array('label'=>'Last Name')); ?></p>
			<p class="black10"><?php echo $form->textField($model, 'lastname', array()); ?></p>

			<p class="black10"><br /><?php echo $form->labelEx($model, 'email', array('label'=>'Email Address')); ?></p>
			<p class="black10"><?php echo $form->textField($model, 'email', array()); ?></p>

			<p class="black10"><br /><?php echo $form->labelEx($model, 'phone', array('label'=>'Phone Number (optional)')); ?></p>
			<p class="black10"><?php echo $form->textField($model, 'phone', array()); ?></p>

			<p class="black10"><br /><?php echo $form->labelEx($model, 'questions', array('label'=>'Questions / Comments')); ?></p>
			<p class="black10"><?php echo $form->textArea($model, 'questions', array()); ?></p>

			<button type="submit" class="ajax-post sepV10" data-href="<?php echo $this->createUrl('/static/general/contactSubmit'); ?>"><img src="<?php echo $this->baseUrlImg; ?>/static/contact/send_message.jpg" width="143" height="53" /></button>

			<?php $this->endWidget(); ?>


        </div>
	</div>

	<div class="col-right">
        <div itemscope itemtype="http://schema.org/LocalBusiness">
            <div itemprop="name" class="black14">Medithin Weight Loss Clinics</div>
            <div  itemprop="telephone" class="blue14b">608-531-0400</div>

			<?php $this->widget('application.components.widgets.wAddresses.wAddresses', array(
				'htmlOptions' => array('class' => 'sepV10')
			)); ?>
        </div>

		<?php /*
        <div class="gmodule sepV20">
            <script language="javascript" type="text/javascript">var tamings___ = new Array();</script>
            <script src="http://www.gmodules.com/ig/ifr?url=http://hosting.gmodules.com/ig/gadgets/file/114281111391296844949/driving-directions.xml&amp;up_fromLocation=&amp;up_myLocations=2605%20Kennedy%20Road%2C%20Suite%20100%20Janesville%2C%20WI%2053545|4030%20East%20Towne%20Blvd%20Madison%2C%20WI%2053704&amp;up_defaultDirectionsType=&amp;up_autoExpand=&amp;synd=open&amp;w=258&amp;h=130&amp;title=Directions+by+Google+Maps&amp;brand=light&amp;lang=en&amp;country=US&amp;border=%23ffffff%7C3px%2C1px+solid+%23999999&amp;output=js"></script>

        </div>
 		*/?>

        <p><a href="https://maps.google.com/maps?q=2605+Kennedy+Rd++Janesville,+WI+53545&hl=en&ll=42.71392,-89.005877&spn=0.004091,0.007757&sll=42.714017,-89.005893&hnear=2605+Kennedy+Rd,+Janesville,+Wisconsin+53545&t=m&z=17" target="_blank"><img src="<?php echo $this->baseUrlImg; ?>/static/contact/janeswille_map.jpg" width="278" height="226"/></a></p>

        <p><a href="https://maps.google.com/maps?q=4030+East+Towne+Blvd++Madison,+WI+53704&hl=en&ll=43.124777,-89.312518&spn=0.008066,0.015514&sll=42.71392,-89.005877&sspn=0.004091,0.007757&hnear=4030+E+Towne+Blvd,+Madison,+Wisconsin+53704&t=m&z=16" target="_blank"><img src="<?php echo $this->baseUrlImg; ?>/static/contact/madison_map.jpg" width="278" height="226"/></a></p>

        <p>
            <span class="blue14b">
                Clinic hours are the<br />
                same at both locations:
            </span><br />

            <span class="black10">
                Monday: 3:00 to 7:00<br />
                Tuesday: 12:00 to 6:00<br />
                Wednesday: 8:00 to 4:00<br />
                Thursday: 12:00 to 7:00<br />
                Friday: 10:00 to 5:00<br />
                Saturday: 8:00 to 12:00<br />
                Sunday: closed
            </span>
        </p>
	</div>

	<div class="clearfix"></div>
</div>

<?php
// register Facebook tracking pixel
Yii::app()->clientScript->registerScript('FacebookTrackingCode6007853603257', "
	// facebook special tracking code 6007853603257
	var fb_param = {};
	fb_param.pixel_id = '6007853603257';
	fb_param.value = '0.00';
	fb_param.currency = 'USD';
	(function(){
		 var fpw = document.createElement('script');
		 fpw.async = true;
		 fpw.src = '//connect.facebook.net/en_US/fp.js';
		 var ref = document.getElementsByTagName('script')[0];
		 ref.parentNode.insertBefore(fpw, ref);
	})();
", CClientScript::POS_HEAD);
?>

<?php $this->widget('w.wExitpopup.wExitpopup'); ?>