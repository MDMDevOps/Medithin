<div class="app-static-our_program clearfix">
    <div class="col-md-8">
        <h1 class="headline">Frequently Asked Questions</h1>
        <p>&nbsp;</p>
        <p><span class="blue14">What is unique about this weight loss program compared to all of the others out there?</span><br />
            We focus on the patient as an individual and our treatment for every patient is personalized. Our program combines medical therapy with a low calorie, high protein, low carb diet, and a strong psychological support system. Most of our staff members have been on the diet at some point, which makes it easier for them to relate to our patient and be able to guide them in the best manner.
        <p>Our goal is to inspire, teach and empower our patients to not only reach their goal weight, but to also have the knowledge on how to maintain a healthy weight and lifestyle. We want this to be the last weight loss program they ever do. </p>
        <p>Along with an FDA-approved appetite suppressant, we also offer an all-natural program for those who prefer to use an all-natural product and for those who have a medical condition that would be contraindicated for the drug. Both programs have had equal success. </p>
        <p><br />
            <span class="blue14">What makes your program successful?</span><br />
            Our commitment to giving each individual the support they need to stick to the food program along with the appetite suppressant, which enables the patient to follow the program without feeling hungry.</p>
        <p><br />
            <span class="blue14">	  Is your program medically monitored?</span><br />
            We have a physician and nursing team on staff to monitor and review each patient’s overall health and weight loss status on a weekly basis, and to address any health concerns the patient may have as well as make sure the patient’s health is not put at risk as a result of being on our program. </p>
        <p><br />
            <span class="blue14">	  Does this program involve any health risks?</span><br />
            Our patients are very carefully screened during their initial visit where we do a complete medical intake and review medical history and current vitals. An EKG and a comprehensive metabolic lab panel are also done to determine the appropriate appetite suppressant program for them. Because of this, there are virtually no risks involved. For many medical conditions, such as hypertension and Type 2 Diabetes, the health benefits achieved by weight loss far exceed any potential risk. Several of our patients have been able to stop their medications for diabetes and hypertension after losing weight on the program.</p>
        <p><br />
            <span class="blue14">	  Is this program affordable?</span><br />
            Following the recommended food program allows our patients to save anywhere from one-half to two-thirds on their weekly food budgets. Additional savings can come from eliminating those &quot;quick fix&quot; foods and beverages from vending machines, convenience stores, fast food drive-throughs, and coffee shops.  These food cost savings make this program very affordable.</p>
        <p><br />
            <span class="blue14">	  Do I have to purchase pre-packaged food while on this program?</span><br />
            No.Your food program will be based on regular food from the grocery store. </p>
        <p><br />
            <span class="blue14">	  Must patients meet criteria to qualify for this program?</span><br />
            To ensure safety, our patients must be medically cleared as healthy enough to tolerate the FDA-approved drug. This will be based on the results of an EKG, complete health history, and current vitals taken on the patient’s first visit.</p>
        <p>For those patients who do not meet the criteria for the FDA-approved drug, our all-natural amino acid appetite suppressant program will allow them to reach their weight loss goal with the same rate of success.</p>
        <p><br />
            <span class="blue14">	  How does someone deal with cravings or withdrawals?</span><br />
            Weekly visits with our patients allow us to address potential cravings with recommendations on food choices and recipes that work within our Food Program.</p>
        <p><br />
            <span class="blue14">	  Why is the maintenance portion of your program so important?</span><br />
            Our goal is for this program to be the last weight loss program our patient ever has to do. For this to happen, our patients need to know where their calories need to be so they are neither gaining nor losing weight.</p>
        <p>The maintenance phase will begin when our patients have reached their goal weight. As we gradually wean them off their appetite suppressant, we will gradually increase calories, closely monitoring their progress to find their maintenance calorie amount that supports a healthy weight. Without this knowledge, our patients risk regaining the weight, and the battle begins again. </p>
        <p><br />
            <span class="blue14">	  Are people generally happy with the results of this program?</span><br />
            The vast majority of our patients maintain their new weight as long as they follow the maintenance program. Our patients consistently refer their friends, family and co-workers, which just goes to show how pleased they are with our proprietary program!</p>
        <p><br />
            <span class="blue14">	  Do I have to exercise while on the program?</span><br />
            Exercise is strongly encouraged not only while you are on this program, but as part of a long-term healthy lifestyle. In addition to the overall health benefits, it will also go a long way in keeping your metabolism high which will allow you to burn more calories and help your body resist regaining weight. <br />
        </p>
        <p><em><br />
                Please take a look at our list of helpful <span class="blue10"><a href="<?php echo $this->createUrl('/static/general/index', array('view' => 'resources')); ?>">resources</a></span> if you would like <a href="<?php echo $this->createUrl('/static/general/index', array('view' => 'resources')); ?>">additional information</a> on weight loss, health, and wellness.</em></p>
    </div>

    <div class="col-md-4 text-center">
        <?php $this->widget('w.wBannerPlace.wBannerPlace', array(
            'htmlOptions' => array('class' => 'sepV10'),
            'id_place' => CouponPlaces::PL_FAQ_SIDE,
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