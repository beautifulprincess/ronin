<?php
/*
Template Name: Case2
*/

get_header(); ?>
<script>
	var $ = jQuery;
	var slideno = 1;
	var nsn = 0;
	var slide_lock = false;
	$(document).ready(function(){
		function resize_video() {
			var w = $(window).width();
			var h = w * 1080 / 1920;
			if (w / 1920 > h / 1080)
				$(".case-header video").css({width: w + "px", height: (w * 1080 / 1920 ) + "px"});
			else
				$(".case-header video").css({width: (h * 1920 / 1080 ) + "px", height: h + "px"});
		}
		resize_video();
		$(window).resize(resize_video);
	});
</script>
<div id="case1-header" class="case-header">
	<div class="container">
		<h3 class="hero__category">Case Study</h3>
		<hr class="hero__bar">
		<img class="hero__logo" src="http://localhost/ronin/wp-content/uploads/2018/04/icon5.png" alt="">
		<div class="hero__title-wrapper">
			<div>
				<h1 class="hero__title typewriter">
					HOW RONIN IS SHAPING THE FUTURE OF THE RENTAL CAR BUSINESS
				</h1>
				<h2 class="hero__subtitle">
					Streamline processes to elevate and enhance the customer experience.
				</h2>
			</div>
			<img class="hero__case-study-image" src="http://localhost/ronin/wp-content/uploads/2018/05/CaseStudy_Car_0.png" alt="">
		</div>
	</div>
	<video autoplay="" muted="" loop="" playsinline="" class="hero__video"><source src="http://localhost/ronin/wp-content/uploads/2018/04/Ronin-Enterprise.mp4" type="video/mp4"></video>
	<div class="hero__texture"></div>
</div>
<div id="case1-content" class="case-content">
	<div class="container">
		<div class="row">
			<div class="col col-sm-12 col-md-8">
				<div class="case-title1">Challenge:</div>
				<div class="case-title2">STREAMLINE PROCESSES TO ELEVATE AND ENHANCE CUSTOMER EXPERIENCE</div>
				<div class="case-text">
					<p>Enterprise Holdings Inc., the world’s largest car rental company, owns the Enterprise Rent-A-Car, National Car Rental and Alamo Rent A Car brands. As a global leader, the company is focused on providing a level of service that keeps customers coming back. To maintain that focus the company hires smart, motivated men and women into its Enterprise Rent-A-Car Management Training Program and trains them thoroughly from the day they become front-line employees. In fact, their career advancement is tied directly to their success in completely satisfying customers.</p>
					<p>However, as the business has grown, so too has the time it takes to manage the rental process. For example, if a location encountered an inventory issue, an employee might make numerous calls to other area Enterprise locations to secure the vehicles he or she needs, and make arrangements to have them moved. While this is certainly part of the convenience of having such a large network of locations, the actual process was not only taking employees’ time away from serving customers, it created an inconvenience for customers as well.</p>
				</div>
				<div class="case-title1">Solution:</div>
				<div class="case-title2">RIGHT DATA. RIGHT HANDS. RIGHT NOW.</div>
				<div class="case-text">
					<p>Enter the Ronin Platform. In 2016, Enterprise Rent-A-Car piloted the mobile software solution in select locations in the St. Louis market, the home of its worldwide headquarters. Ronin integrated and aggregated Enterprise’s existing operational investments, legacy systems, and processes into a central dashboard accessible on a tablet known as LaunchPad.</p>
					<p>The new real-time functionality provided Enterprise with better visibility into its business and operations through <strong>situational awareness:</strong></p>
				</div>
				<div class="case-function">
					<p class="case-function-number">01</p>
					<p class="case-function-name">INTEGRATION OF RESERVATION AND INVENTORY DATA</p>
				</div>
				<div class="case-function">
					<p class="case-function-number">02</p>
					<p class="case-function-name">VIEW OF EMPLOYEE LOCATIONS AND CUSTOMER RESERVATIONS</p>
				</div>
				<div class="case-function">
					<p class="case-function-number">03</p>
					<p class="case-function-name">INSTANT TRADING OF VEHICLES WITH OTHER BRANCHES TO ELIMINATE INVENTORY ISSUES</p>
				</div>
				<div class="case-function">
					<p class="case-function-number">04</p>
					<p class="case-function-name">ASSIGNMENT OF WORK TICKETS TO OPTIMIZE WORKFORCE EFFICIENCY</p>
				</div>
				<div class="case-text">
					<p>LaunchPad was rolled out to all neighborhood Enterprise Rent-A-Car locations throughout North America in spring 2017 and now has over 20,000 active users daily. Enterprise is now in the process of its European rollout.</p>
				</div>
			</div>
			<div class="col col-sm-12 col-md-4">
				<div class="case-testimonial-text">“THE OPPORTUNITY TO GET TO KNOW THE CONSUMER IN AN EVEN MORE INTIMATE WAY IS SOMETHING THAT IS AVAILABLE TO YOU, BUT THERE HAS TO BE AN ORGANIZATION... WE’RE REALLY TRYING TO TAKE A HOLISTIC LOOK. LAUNCHPAD REPRESENTS US ADDRESSING THE WHOLE FLOW OF HOW A CUSTOMER EXPERIENCES OUR PRODUCTS AND SERVICES.”</div>
				<div class="case-testimonial-name">Lee Broughton</div>
				<div class="case-testimonial-role">VICE PRESIDENT OF MARKETING - ENTERPRISE RENT-A-CAR</div>
			</div>
		</div>
		<div class="row" style="margin: 100px 0;">
			<div class="col col-sm-12 col-md-8">
				<div class="tablet__device-wrapper">
					<div class="device">
						<div class="screenshot" style="background:url('http://localhost/ronin/wp-content/uploads/2018/05/RKV-Dispatch-User-Schedule_3_2.png') 50% 0 / cover no-repeat;"></div>
					</div>
				</div>
				<div class="tablet__pull-quote">
					<div class="tablet__pull-quote-line"></div>
					<hr class="tablet__handle">
					<hr class="tablet__bar">
					<div class="tablet__feature">
						<p><strong>At Coolfire Solutions</strong></p>
						<p>We create, design and innovate at the edge because we thirst for progress—the kind of progress that transforms life and business in a meaningful way. We embrace ingenuity to get the job done. We sprint for milestones to quickly show returns. With the right information in the right hands right now, action can be taken and innovation occurs.</p>
					</div>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col col-sm-12 col-md-8">
				<div class="case-title1">SIGNIFICANT OUTCOMES:</div>
				<div class="case-function">
					<p class="case-function-number">01</p>
					<p class="case-function-name">FURTHER IMPROVED CUSTOMER EXPERIENCE</p>
				</div>
				<div class="case-function">
					<p class="case-function-number">02</p>
					<p class="case-function-name">MOVED FROM PURE TRANSACTION TO INTERACTION WITH CUSTOMERS</p>
				</div>
				<div class="case-function">
					<p class="case-function-number">03</p>
					<p class="case-function-name">DATA ENTRY IS MINIMIZED AND OFTEN ELIMINATED DURING THE RENTAL PROCESS BECAUSE CUSTOMER INFORMATION AND PREFERENCES ARE COLLECTED IN ADVANCE</p>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col col-sm-12 col-md-8">
				<div class="case-title1">RESULTS:</div>
				<div class="case-title2">CUSTOMER TRANSACTIONS ARE NOW INTERACTIONS</div>
				<div class="case-text">
					<p>The Ronin Platform creates a frictionless operating environment, seamlessly connecting and leveraging Enterprise’s systems, processes and data. Through LaunchPad, employees can move away from the counter, freeing them up to interact with customers anywhere, and conduct the process on customers’ terms.</p>
					<p>When customers enter Enterprise, they now find employees carrying the Ronin-powered LaunchPad with the central dashboard at their fingertips. Reservations are instantly retrieved and cars are waiting. LaunchPad gives Enterprise the tools to transcend the rental experience and operate with absolute precision. The market is changing and Enterprise is serving an increasingly broad customer base with expanding expectations on a global scale. LaunchPad is allowing Enterprise to be ready.</p>
					<p>As reported in a June 5, 2017, article in USA Today titled, “Car Rental Companies Get More Connected,” Enterprise Rent-A-Car’s Vice President of Marketing Lee Broughton said, “The opportunity to get to know the consumer in an even more intimate way is something that is available to you, but there has to be an organization... We’re really trying to take a holistic look. LaunchPad represents us addressing the whole flow of how a customer experiences our products and services.”</p>
					<hr>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col col-sm-12 col-md-8">
				<span class="case-download-label">Download Use Case Study</span>
				<a class="download-block__button" href="http://localhost/ronin/wp-content/uploads/2018/05/enterprise_case_study_8.29.pdf" target="_blank" data-ref="case-study-download-button">
					<div>
						<p class="download-block__headline">Enterprise</p>
						<p class="download-block__body">How Ronin is Shaping the Future of the Rental Car Business.</p>
					</div>
					<svg id="download" viewBox="0 0 37 39" width="100%" height="100%"><title>Download</title><path d="M35 24.46v10.591a1.93 1.93 0 0 1-1.92 1.939H3.92A1.93 1.93 0 0 1 2 35.051V24.46a1.92 1.92 0 0 1 3.84 0v8.64h25.32v-8.64a1.92 1.92 0 1 1 3.84-.055v.055zM17.13 26.9a1.909 1.909 0 0 0 2.698.042l.042-.042 7.659-7.92a1.971 1.971 0 0 0-.029-2.75 1.907 1.907 0 0 0-2.698-.002l-.022.021-4.359 4.521V3.93a1.92 1.92 0 1 0-3.84 0v16.841l-4.36-4.521a1.908 1.908 0 0 0-2.721-.02 1.972 1.972 0 0 0-.02 2.75l7.65 7.92z"></path></svg>
				</a>
			</div>
		</div>
	</div>
</div>

<div class="case-study-mission" style="background-image: url(http://localhost/ronin/wp-content/uploads/2018/05/desktop.png);">
	<div class="container">
		<div class="row">
			<div class="col col-xs-12 col-sm-6 col-md-4">
				<p class="case-study-mission__intro">Ronin was developed to maximize the value of existing technology by intelligently integrating data yielded from all sources to minimize the gaps in your operational picture.</p>
			</div>
			<div class="col col-xs-12 offset-xs-0 col-sm-6 offset-sm-0 col-md-4 offset-md-4">
				<div class="case-study-mission__more-information">
					<p style="margin-bottom:15px;" class="case-study-mission__more-information-headline"></p>
					<p>FOR MORE <strong>INFORMATION</strong></p>
					<p style="font-size:14px;margin-top:-10px;">For more information about the Ronin Platform reach out to our team at <a href="mailto:info@coolfiresolutions.com">info@coolfiresolutions.com.</a></p>
				</div>
			</div>
		</div>
	</div>
</div>

<?php get_footer();
