<?php
/*
Template Name: Case Studies
*/
?>
<!DOCTYPE html>
<!--[if IE 6]>
<html id="ie6" <?php language_attributes(); ?>>
<![endif]-->
<!--[if IE 7]>
<html id="ie7" <?php language_attributes(); ?>>
<![endif]-->
<!--[if IE 8]>
<html id="ie8" <?php language_attributes(); ?>>
<![endif]-->
<!--[if !(IE 6) | !(IE 7) | !(IE 8)  ]><!-->
<html <?php language_attributes(); ?>>
<!--<![endif]-->
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>" />
	<?php elegant_description(); ?>
	<?php elegant_keywords(); ?>
	<?php elegant_canonical(); ?>

	<?php do_action( 'et_head_meta' ); ?>

	<style>
@font-face {
    font-family: 'Van Condensed Pro';
    src: url(" http://localhost/ronin/wp-content/themes/Extra/fonts/33E789_0_0.eot");
    src: url(" http://localhost/ronin/wp-content/themes/Extra/fonts/33E789_0_0.eot?#iefix") format("embedded-opentype"), url(" http://localhost/ronin/wp-content/themes/Extra/fonts/33E789_0_0.woff2") format("woff2"), url(" http://localhost/ronin/wp-content/themes/Extra/fonts/33E789_0_0.woff") format("woff"), url(" http://localhost/ronin/ronin/wp-content/themes/Extra/fonts/33E789_0_0.ttf") format("truetype");
    font-style: normal;
    font-weight: 700;
}
@font-face {
    font-family: 'WebFontAwesome';
    src: url(" http://localhost/ronin/wp-content/themes/Extra/fonts/fa-regular-400.eot");
    src: url(" http://localhost/ronin/wp-content/themes/Extra/fonts/fa-regular-400.eot?#iefix") format("embedded-opentype"), url(" http://localhost/ronin/wp-content/themes/Extra/fonts/fa-regular-400.woff2") format("woff2"), url(" http://localhost/ronin/wp-content/themes/Extra/fonts/fa-regular-400.woff") format("woff"), url(" http://localhost/ronin/wp-content/themes/Extra/fonts/fa-regular-400.ttf") format("truetype");
    font-style: normal;
    font-weight: 700;
}
@font-face {
    font-family: 'Flama';
    src: url(" http://localhost/ronin/wp-content/themes/Extra/fonts/Flama-Book.eot");
    src: url(" http://localhost/ronin/wp-content/themes/Extra/fonts/Flama-Book.eot?#iefix") format("embedded-opentype"), url(" http://localhost/ronin/wp-content/themes/Extra/fonts/Flama-Book.woff") format("woff");
    font-style: normal;
    font-weight: 300;
}
@font-face {
    font-family: 'Flama';
    src: url(" http://localhost/ronin/wp-content/themes/Extra/fonts/Flama-BookItalic.eot");
    src: url(" http://localhost/ronin/wp-content/themes/Extra/fonts/Flama-BookItalic.eot?#iefix") format("embedded-opentype"), url(" http://localhost/ronin/wp-content/themes/Extra/fonts/Flama-BookItalic.woff") format("woff");
    font-style: italic;
    font-weight: 300;
}
@font-face {
    font-family: 'Flama';
    src: url(" http://localhost/ronin/wp-content/themes/Extra/fonts/Flama-Medium.eot");
    src: url(" http://localhost/ronin/wp-content/themes/Extra/fonts/Flama-Medium.eot?#iefix") format("embedded-opentype"), url(" http://localhost/ronin/wp-content/themes/Extra/fonts/Flama-Medium.woff") format("woff");
    font-style: normal;font-weight: 500;
}
@font-face {
    font-family: 'Flama';
    src: url(" http://localhost/ronin/wp-content/themes/Extra/fonts/Flama-MediumItalic.eot");
    src: url(" http://localhost/ronin/wp-content/themes/Extra/fonts/Flama-MediumItalic.eot?#iefix") format("embedded-opentype"), url(" http://localhost/ronin/wp-content/themes/Extra/fonts/Flama-MediumItalic.woff") format("woff");
    font-style: italic;
    font-weight: 500;
}
@font-face {
    font-family: 'Flama Condensed';
    src: url(" http://localhost/ronin/wp-content/themes/Extra/fonts/FlamaCondensed-Bold.eot");
    src: url(" http://localhost/ronin/wp-content/themes/Extra/fonts/FlamaCondensed-Bold.eot?#iefix") format("embedded-opentype"), url(" http://localhost/ronin/wp-content/themes/Extra/fonts/FlamaCondensed-Bold.woff") format("woff");
    font-style: normal;
    font-weight: 700;
}
	</style>

	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css" integrity="sha384-rwoIResjU2yc3z8GV/NPeZWAv56rSmLldC3R/AZzGRnGxQQKnKkoFVhFQhNUwEyJ" crossorigin="anonymous">
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />

	<?php $template_directory_uri = get_template_directory_uri(); ?>
	<!--[if lt IE 9]>
	<script src="<?php echo esc_url( $template_directory_uri . '/scripts/ext/html5.js"' ); ?>" type="text/javascript"></script>
	<![endif]-->

	<script type="text/javascript">
		document.documentElement.className = 'js';
	</script>

	<?php wp_head(); ?>
	<script type='text/javascript' src=' http://localhost/ronin/wp-content/themes/Extra/scripts/jquery.mousewheel.min.js'></script>
	<script>
	var keys = {37: 1, 38: 1, 39: 1, 40: 1};

	function preventDefault(e) {
	e = e || window.event;
	if (e.preventDefault)
		e.preventDefault();
	e.returnValue = false;  
	}

	function preventDefaultForScrollKeys(e) {
		if (keys[e.keyCode]) {
			preventDefault(e);
			return false;
		}
	}

	function disableScroll() {
	if (window.addEventListener) // older FF
		window.addEventListener('DOMMouseScroll', preventDefault, false);
	window.onwheel = preventDefault; // modern standard
	window.onmousewheel = document.onmousewheel = preventDefault; // older browsers, IE
	window.ontouchmove  = preventDefault; // mobile
	document.onkeydown  = preventDefaultForScrollKeys;
	}

	function enableScroll() {
		if (window.removeEventListener)
			window.removeEventListener('DOMMouseScroll', preventDefault, false);
		window.onmousewheel = document.onmousewheel = null; 
		window.onwheel = null; 
		window.ontouchmove = null;  
		document.onkeydown = null;  
	}
	var $ = jQuery;
	var slideno = 1;
	var nsn = 0;
	var slide_lock = false;
	$(document).ready(function(){
		function resize_slide(){
			var h = $(window).height() - 126;
			$(".case-studies-slider, .case-study-slide").css({height: h + "px"});
			$(".case-study-slide").each(function(){
				if ($(this).attr("id") == "case-study-slide1") {
					$(this).addClass("active-slide");
					$("#slick-slide1").addClass("slick-active");
				} else {
					$(this).css("top", h + "px");
				}
			});
		}
		function resize_video() {
			var w = $(window).width();
			var h = $(window).height() - 126;
			var h1 = $("#case-study-slide2").height() + 75;
			if (h1 > h) h = h1;
			if (w / 1920 > h / 1080)
				$(".case-study-slide video").css({width: w + "px", height: (w * 1080 / 1920 ) + "px"});
			else
				$(".case-study-slide video").css({width: (h * 1920 / 1080 ) + "px", height: h + "px"});
		}
		resize_video();
		resize_slide();
		$(window).resize(resize_video);
		$(window).resize(resize_slide);

		$('.site-content').mousewheel(function(event) {
			var w = $(window).width();
			if (w <= 1170) {
				enableScroll();
				return;
			}
			var scroll = $(window).scrollTop();
			if (scroll > 0) {
				enableScroll();
				return;
			}
			if (slide_lock) return;
			slide_lock = true;
			// console.log(event.deltaX, event.deltaY, event.deltaFactor);
			if (event.deltaY < 0 && slideno < 5) {
				nsn = slideno + 1;
				if (nsn == 6) nsn = 5;
			} else if (event.deltaY > 0 && slideno > 1) {
				nsn = slideno - 1;
			}
			if (slideno == nsn || nsn == 0) { slide_lock = false; return; }
			chg_slide();
		});
		function chg_slide() {
			var h = $(window).height() - 126;
			$("#case-study-slide" + slideno).removeClass("cur-slide");
			$(".slick-active").removeClass("slick-active");
			setTimeout(function(){
				$("#case-study-slide" + slideno).css({top: h * (slideno - nsn) + "px"});
				$("#case-study-slide" + nsn).css({top: "0px"});
				setTimeout(function(){
					$("#case-study-slide" + slideno).removeClass("active-slide");
					slideno = nsn;
					$("#case-study-slide" + slideno).addClass("cur-slide");
					slide_lock = false;
					if (slideno == 5) {
						enableScroll();
					} else {
						disableScroll();
					}
					setTimeout(function(){
						$("#case-study-slide" + slideno).addClass("active-slide");
						$(".slick-active").removeClass("slick-active");
						$("#slick-slide" + slideno).addClass("slick-active");
					}, 300);
				}, 300);
			}, 300);
		}
		$(".slick-dots li button").click(function(){
			if (slide_lock) return;
			slide_lock = true;
			nsn = $(this).attr("data-id");
			if (slideno == nsn) { slide_lock = false; return; }
			chg_slide();
		});
		
		function view_slide(sn) {
			$("#case-study-slide" + sn).addClass("cur-slide");
		}
		view_slide(slideno);
		$(window).scroll(function (event) {
			if ($(window).scrollTop() == 0 && slideno != 5) disableScroll();
		});
		if ($(window).scrollTop() == 0) disableScroll();
	});
	</script>
</head>
<body <?php body_class(); ?>>
<?php
	if ( et_builder_is_product_tour_enabled() ) {
		return;
	}
?>
	<div id="page-container" class="page-container casestudies-page">
		<?php $header_vars = extra_get_header_vars(); ?>
		<!-- Header -->
		<header class="header <?php echo $header_vars['header_classes']; ?>">
			<?php if ( $header_vars['top_info_defined'] || is_customize_preview() ) { ?>
			<!-- #top-header -->
			<div id="top-header" style="<?php extra_visible_display_css( $header_vars['top_info_defined'] ); ?>">
				<div class="container">

					<!-- Secondary Nav -->
					<?php if ( '' !== $header_vars['secondary_nav'] ) { ?>
						<div id="et-secondary-nav" class="<?php echo extra_customizer_selector_classes( extra_get_dynamic_selector( 'top_navigation' ), false ); ?>">
						<?php if ( $header_vars['output_header_trending_bar'] ) { ?>

							<!-- ET Trending -->
							<div id="et-trending">

								<!-- ET Trending Button -->
								<a id="et-trending-button" href="#" title="">
									<span></span>
									<span></span>
									<span></span>
								</a>

								<!-- ET Trending Label -->
								<h4 id="et-trending-label">
									<?php esc_html_e( 'TRENDING:', 'extra' ); ?>
								</h4>

								<!-- ET Trending Post Loop -->
								<div id='et-trending-container'>
								<?php if ( $header_vars['trending_posts']->have_posts() ) : ?>
									<?php
									$trending_post_count = 0;
									while ( $header_vars['trending_posts']->have_posts() ) : $header_vars['trending_posts']->the_post();

										$trending_post_latest_class = $trending_post_count == 0 ? 'et-trending-latest' : '';

										$trending_post_classes = extra_classes( array( 'et-trending-post', $trending_post_latest_class ), 'et-trending-post', false );
									?>
										<div id="et-trending-post-<?php the_ID(); ?>" class="<?php echo esc_attr( $trending_post_classes ); ?>">
											<a href="<?php the_permalink(); ?>"><?php echo esc_html( truncate_title( 55 ) ); ?></a>
										</div>
									<?php
										$trending_post_count++;
									endwhile;

									wp_reset_postdata();
									?>
								<?php else : ?>
									<div id="et-trending-post-sample" class="et-trending-post et-trending-latest">
										<a href="<?php echo esc_url( home_url( '/' ) ); ?>"><?php esc_html_e( 'Sample Post Title', 'extra' ); ?></a>
									</div>
								<?php endif; ?>
								</div>
							</div>
							<?php echo $header_vars['secondary_nav']; ?>

						<?php } else {
							echo $header_vars['secondary_nav'];
} ?>
						</div>
					<?php } ?>

					<!-- #et-info -->
					<div id="et-info">

						<?php if ( $header_vars['output_header_social_icons'] ) { ?>

						<!-- .et-extra-social-icons -->
						<ul class="et-extra-social-icons" style="<?php extra_visible_display_css( $header_vars['show_header_social_icons'] ); ?>">
							<?php $social_icons = extra_get_social_networks(); ?>
							<?php foreach ( $social_icons as $social_icon => $social_icon_title ) { ?>
								<?php $social_icon = esc_attr( $social_icon ); ?>
								<?php $social_icon_url = et_get_option( sprintf( '%s_url', $social_icon ), '' ); ?>
								<?php if ( '' != $social_icon_url && 'on' === et_get_option( "show_{$social_icon}_icon", 'on' ) ) { ?>
								<li class="et-extra-social-icon <?php echo $social_icon; ?>">
									<a href="<?php echo esc_url( $social_icon_url ); ?>" class="et-extra-icon et-extra-icon-background-hover et-extra-icon-<?php echo $social_icon; ?>"></a>
								</li>
								<?php } ?>
							<?php } ?>
						</ul>
						<?php } ?>

						<!-- .et-top-search -->
						<?php if ( $header_vars['output_header_search_field'] ) { ?>
						<div class="et-top-search" style="<?php extra_visible_display_css( $header_vars['show_header_search_field'] ); ?>">
							<?php extra_header_search_field(); ?>
						</div>
						<?php } ?>

						<!-- cart -->
						<?php if ( $header_vars['output_header_cart_total'] ) { ?>
						<span class="et-top-cart-total" style="<?php extra_visible_display_css( $header_vars['show_header_cart_total'] ); ?>">
							<?php extra_header_cart_total(); ?>
						</span>
						<?php } ?>
					</div>
				</div><!-- /.container -->
			</div><!-- /#top-header -->

			<?php } // end if( $et_top_info_defined ) ?>

			<!-- Main Header -->
			<div id="main-header-wrapper">
				<div id="main-header" data-fixed-height="<?php echo esc_attr( et_get_option( 'fixed_nav_height', '80' ) ); ?>">
					<div class="container">
					<!-- ET Ad -->
						<?php if ( !empty( $header_vars['header_ad'] ) ) { ?>
						<div class="etad">
							<?php echo $header_vars['header_ad']; ?>
						</div>
						<?php } ?>

						<?php
						$logo = ( $user_logo = et_get_option( 'extra_logo' ) ) && '' != $user_logo ? $user_logo : $template_directory_uri . '/images/logo.svg';
						$show_logo = extra_customizer_el_visible( extra_get_dynamic_selector( 'logo' ) ) || is_customize_preview();
						if ( $show_logo ) {
						?>

						<!-- Logo -->
						<a class="logo" href="<?php echo esc_url( home_url( '/' ) ); ?>" data-fixed-height="<?php echo esc_attr( et_get_option( 'fixed_nav_logo_height', '51' ) ); ?>">
							<svg id="logo" class="casestudies-page" viewBox="0 0 354 70" width="100%" height="100%">
								<title>Coolfire Solutions | Ronin Platform</title>
								<path d="M161.42 30.962h.764v2.374h.664v-2.374h.762v-.671h-2.19zm4.896-.671l-.713 2.19-.756-2.19h-.855v3.045h.664v-1.858l.566 1.858h.713l.622-1.858v1.858h.664v-3.045zm-44.935 6.033c-4.274 0-7.743 3.519-7.743 8.125 0 4.607 3.469 8.026 7.743 8.026s7.786-3.476 7.786-8.026c0-4.606-3.462-8.125-7.786-8.125zm0 12.534c-2.091 0-3.801-1.795-3.801-4.409 0-2.656 1.71-4.515 3.801-4.515 2.092 0 3.802 1.858 3.802 4.515 0 2.614-1.668 4.409-3.802 4.409zm-65.742-9.347c-3.187-.664-4.564-1.187-4.564-2.614 0-1.568 1.95-2.374 4.041-2.374 2.516 0 3.992 1.329 3.992 3.13h3.942c0-3.271-2.473-6.839-7.935-6.839-4.847 0-7.983 2.473-7.983 6.034 0 4.465 3.899 5.609 7.701 6.358 3.844.763 4.889 1.583 4.889 2.854 0 2.007-2.374 2.798-4.655 2.798-2.092 0-4.558-1.187-4.558-3.604h-3.942c0 4.988 4.416 7.221 8.5 7.221 5.228 0 8.598-2.515 8.598-6.5.049-4.239-3.088-5.468-8.026-6.464zm16.101-3.187c-4.274 0-7.744 3.519-7.744 8.125 0 4.607 3.47 8.026 7.744 8.026s7.793-3.476 7.793-8.026c-.05-4.606-3.518-8.125-7.793-8.125zm0 12.534c-2.092 0-3.801-1.795-3.801-4.409 0-2.656 1.709-4.515 3.801-4.515 2.091 0 3.801 1.858 3.801 4.515 0 2.657-1.71 4.409-3.801 4.409zm8.739-18.991h3.943v22.27h-3.943zm28.262.424h3.942v3.659h-3.942zm0 6.415h-3.844v-3.893h-3.942v12.823c0 4.225 2.424 6.938 6.932 6.458V48.49c-1.993.085-2.939-.707-2.939-2.854v-5.462h3.844v11.92h3.942V36.706h-3.993zm43.184 5.794c-1.901-.283-3.038-.565-3.038-1.385 0-.565.756-1.229 2.564-1.229 1.47 0 2.324.572 2.564 1.285h4.084c-.522-2.896-3.137-4.847-6.648-4.847-4.466 0-6.606 2.522-6.606 4.946 0 3.419 3.66 4.168 6.416 4.606 2.706.424 3.229.749 3.229 1.653s-1.188 1.385-2.805 1.385c-1.188 0-2.756-.48-3.278-1.809h-3.985c.474 3.335 3.37 5.369 7.312 5.369s6.748-2.134 6.748-5.229c-.001-3.318-2.714-4.124-6.557-4.745zm7.361 5.426h4.226v4.211h-4.226zm-63.368-2.049c0 .862-.283 2.981-2.848 2.981h-.142c-2.522 0-2.854-2.119-2.854-2.981v-9.121h-3.893v9.121c0 3.984 2.374 6.698 5.984 6.698h1.66c3.61 0 5.984-2.714 5.984-6.698v-9.121h-3.893v9.121zm41.897-9.595h-1.661c-3.61 0-5.984 2.706-5.984 6.698v9.114h3.894V42.98c0-.862.282-2.996 2.847-2.996h.191c2.564 0 2.854 2.134 2.854 2.996v9.114h3.893V42.98c-.05-3.992-2.423-6.698-6.034-6.698zM55.921 24.737c-3.42 0-6.126-3.278-6.126-7.221s2.706-7.221 6.126-7.221c2.374 0 4.232 1.427 5.179 3.278h4.274c-1.278-4.274-4.748-6.938-9.453-6.938-5.652 0-10.068 4.755-10.068 10.831 0 6.084 4.416 10.831 10.068 10.831 4.606 0 8.125-2.705 9.404-6.938H61.1c-.905 1.902-2.805 3.378-5.179 3.378zm17.197-12.59c-4.274 0-7.744 3.518-7.744 8.125 0 4.606 3.47 8.075 7.744 8.075s7.793-3.469 7.793-8.075c0-4.607-3.518-8.125-7.793-8.125zm0 12.541c-2.092 0-3.802-1.801-3.802-4.415 0-2.664 1.71-4.515 3.802-4.515 2.091 0 3.801 1.851 3.801 4.515 0 2.614-1.71 4.415-3.801 4.415zm15.579-12.541c-4.274 0-7.744 3.518-7.744 8.125 0 4.606 3.47 8.075 7.744 8.075s7.793-3.469 7.793-8.075c0-4.607-3.518-8.125-7.793-8.125zm0 12.541c-2.092 0-3.802-1.801-3.802-4.415 0-2.664 1.71-4.515 3.802-4.515 2.091 0 3.801 1.851 3.801 4.515 0 2.614-1.71 4.415-3.801 4.415zm8.648-18.999h3.942v22.276h-3.942zm33.722 6.458c-4.324 0-7.885 3.659-7.885 8.125 0 4.465 3.561 8.075 7.885 8.075 3.851 0 6.557-2.141 7.461-5.277h-4.225c-.672 1.236-1.95 1.809-3.278 1.809-1.858 0-3.328-1.188-3.851-3.038h11.637c.622-6.133-3.179-9.694-7.744-9.694zm-3.8 6.415c.572-1.809 1.999-2.946 3.801-2.946 1.9 0 3.378 1.138 3.851 2.946h-7.652zm-3.42-6.415h-2.656c-3.61 0-5.984 2.705-5.984 6.697v9.121h3.893v-9.121c0-.854.283-2.988 2.854-2.988h1.894v-3.709zm-13.919-6.034h3.943v3.66h-3.943z"></path>
								<path d="M106.558 11.907c.191-.897.806-1.993 2.474-2.085V6.113h-.432c-3.561 0-5.935 2.663-5.984 6.606v15.296h3.942V16.372h3.47v11.594h3.942V12.578h-7.412c-.049-.24 0-.48 0-.671zm-79.612 2.995c4.225-4.225 1.95-8.499-2.042-12.441-.855 2.896-2.854 4.747-6.508 8.407-3.038 3.038-1.759 4.465 3.18 9.404l5.37-5.37z"></path>
								<path d="M40.724 24.78l-3.42-3.42-1.046-1.046-.289-.282c-.996-.947-1.943-1.428-2.897-1.52h-.092c-1.045 0-2.141.523-3.229 1.568l-.29.283-3.462 3.469c-.049 0-.049.05-.099.099L14.978 34.854c-.665.565-1.237.905-1.81.947h-.042c-.572 0-1.194-.282-1.858-.897l-.806-.812-.332-.332c-.664-.714-.996-1.328-1.045-1.9 0-.615.332-1.328 1.095-2.092l.282-.282 6.938-6.938.565-.565-.565-.574c-1.709-1.709-2.805-2.805-3.42-3.991l-.522-.947-.812.764-7.362 7.404c-1.138 1.187-1.992 2.473-2.564 3.801a8.013 8.013 0 0 0-.714 3.61c0 .996.24 2 .622 2.946.565 1.428 1.42 2.756 2.656 3.992l3.42 3.427 6.034 6.02 1.095 1.103a12.541 12.541 0 0 0 3.278 2.317c1.188.621 2.466.961 3.802.961h.184c1.335 0 2.571-.34 3.759-.961a12.59 12.59 0 0 0 3.32-2.374l1.328-1.272 5.801-5.793 3.462-3.477c.764-.806 1.428-1.66 1.95-2.564.904-1.427 1.378-2.946 1.328-4.515.05-1.611-.424-3.13-1.328-4.558-.573-.855-1.188-1.709-1.993-2.522zM35.686 34l-7.122 7.087-3.419 3.419c-.764.749-1.477 1.188-2.092 1.188-.664-.057-1.378-.438-2.141-1.188l-2.755-2.77 12.682-12.675.05-.05c.664-.664 1.328-.996 1.9-1.046h.05c.614 0 1.328.382 2.084 1.096l.29.282.854.855c.522.614.806 1.187.854 1.71-.048.615-.472 1.329-1.235 2.092zm191.102-21.521H183.52a4.31 4.31 0 0 0-4.331 4.323v6.98h43.219c2.431 0 4.423-1.992 4.423-4.415v-6.889h-.043zm-1.568 55.06h11.022c.806-.142 1.046-1.003.706-1.611L216.19 28.157c-.184-.382-.565-.572-.989-.572h-36.012v23.322c0 .622.522 1.145 1.138 1.145h9.029c.607 0 1.145-.522 1.145-1.145V39.652c0-.382.282-.664.65-.664h16.632c.438 0 .805.233 1.003.565l14.583 26.742c.523.862.848 1.244 1.851 1.244zm23.188-37.623V12.91c0-.19.085-.332.325-.332h5.03c3.138 0 5.37 1.942 5.37 4.606v1.759c0 1.279-.565 2.607-1.852 3.562-.141.092-.282.233-.24.474l1.809 6.839c.1.382-.099.474-.381.474h-2.134c-.34 0-.523 0-.622-.332l-1.568-6.027c-.042-.19-.198-.339-.48-.339h-1.695a.33.33 0 0 0-.34.339v6.027c0 .19-.099.332-.339.332h-2.558c-.183-.044-.325-.185-.325-.376zm5.356-9.361c1.286 0 2.134-.996 2.134-2.134v-.714c0-1.145-.791-2.183-2.134-2.183h-1.794a.325.325 0 0 0-.34.332v4.366c0 .19.142.332.34.332h1.794zm7.56-3.229c0-3.138 2.232-4.938 5.369-4.938s5.412 1.801 5.412 4.938v8.167c0 3.138-2.275 4.946-5.412 4.946s-5.369-1.809-5.369-4.946v-8.167zm5.369 10.117c1.328 0 2.134-.854 2.134-2.473v-7.122c0-1.618-.806-2.473-2.134-2.473-1.286 0-2.147.854-2.147 2.473v7.122c0 1.619.861 2.473 2.147 2.473zm8.069 2.473V12.91c0-.19.142-.332.325-.332h2.092c.339 0 .537.042.621.282l4.988 9.786c.043.141.24.092.24-.05V12.91c0-.19.142-.332.339-.332h2.417c.184 0 .325.142.325.332v17.006a.322.322 0 0 1-.325.332h-2.092c-.282 0-.466-.049-.607-.289l-5.002-9.828c-.043-.148-.227-.099-.227.042v9.694c0 .19-.141.332-.339.332h-2.431c-.183.049-.324-.092-.324-.283zm14.441 0V12.91c0-.19.1-.332.325-.332h2.516c.197 0 .339.142.339.332v17.006c0 .191-.085.332-.339.332h-2.516a.322.322 0 0 1-.325-.332zm6.233 0V12.91c0-.19.141-.332.324-.332h2.092c.325 0 .522.042.607.282l5.002 9.786c.043.141.227.092.227-.05V12.91c0-.19.142-.332.339-.332h2.417c.184 0 .339.142.339.332v17.006a.333.333 0 0 1-.339.332h-2.077c-.297 0-.48-.049-.622-.289l-5.002-9.828c-.028-.148-.227-.099-.227.042v9.694c0 .19-.142.332-.339.332h-2.417c-.184.049-.324-.092-.324-.283zm-47.028 21.797V34.714c0-.191.085-.332.325-.332h5.03c3.138 0 5.37 1.992 5.37 4.889v2.141c0 2.897-2.232 4.89-5.37 4.89h-1.794c-.198 0-.34.142-.34.325v5.087c0 .197-.099.339-.339.339h-2.558c-.182.042-.324-.1-.324-.34zm5.356-8.394c1.343 0 2.134-1.046 2.134-2.431v-1.095c0-1.378-.791-2.474-2.134-2.474h-1.794a.33.33 0 0 0-.34.332v5.271c0 .197.142.339.34.339h1.794v.058zm7.504-8.605c0-.191.099-.332.339-.332h2.516c.197 0 .339.141.339.332v14.103c0 .184.142.339.325.339h4.083c.198 0 .34.142.34.325v2.189c0 .185-.142.325-.34.325h-7.319a.32.32 0 0 1-.325-.325V34.714h.042zm10.117 16.956l4.041-16.914c.057-.332.142-.424.425-.424h2.289c.282 0 .367.05.424.424l4.041 16.914c.042.283-.099.382-.382.382h-2.189c-.283 0-.368-.057-.48-.339l-.325-1.526c-.043-.142-.099-.325-.424-.325h-3.462c-.34 0-.438.184-.438.325l-.382 1.526c-.042.282-.184.339-.48.339h-2.176c-.341.043-.524-.099-.482-.382zm6.98-4.607c.198 0 .255-.099.198-.24l-1.47-6.217c0-.148-.198-.148-.24 0l-1.47 6.217c0 .142 0 .24.184.24h2.798zm4.281-12.349c0-.191.142-.332.325-.332h8.281c.184 0 .324.092.324.332v2.232c0 .19-.141.332-.324.332h-2.148a.333.333 0 0 0-.339.332v14.06c0 .185-.085.325-.325.325h-2.515a.319.319 0 0 1-.325-.325V37.61a.326.326 0 0 0-.34-.332h-2.176c-.198 0-.339-.099-.339-.332v-2.232h-.099zm11.305 0c0-.191.1-.332.325-.332h7.319c.198 0 .34.141.34.332v2.183a.325.325 0 0 1-.34.332h-4.069a.326.326 0 0 0-.339.332v4.232c0 .184.142.325.339.325h4.069c.198 0 .34.155.34.339v2.19c0 .184-.142.325-.34.325h-4.069c-.197 0-.339.142-.339.325v6.33c0 .184-.099.325-.339.325h-2.516c-.198 0-.339-.142-.339-.325V34.714h-.042zm9.793 4.416c0-3.138 2.232-4.939 5.369-4.939 3.138 0 5.398 1.802 5.398 4.939v8.174c0 3.138-2.261 4.946-5.398 4.946-3.137 0-5.369-1.809-5.369-4.946V39.13zm5.369 10.124c1.329 0 2.134-.862 2.134-2.487v-7.114c0-1.618-.805-2.473-2.134-2.473-1.285 0-2.147.854-2.147 2.473v7.114c0 1.625.862 2.487 2.147 2.487zm8.112 2.459V34.714c0-.191.099-.332.339-.332h5.031c3.137 0 5.369 1.942 5.369 4.606v1.759c0 1.272-.565 2.601-1.851 3.562-.142.085-.283.226-.24.48l1.809 6.839c.084.367-.1.467-.382.467h-2.134c-.339 0-.522 0-.622-.325l-1.568-6.048c-.042-.17-.184-.325-.466-.325h-1.725a.327.327 0 0 0-.324.325v6.048c0 .184-.1.325-.325.325h-2.529c-.241 0-.382-.142-.382-.382zm5.37-9.355c1.285 0 2.147-.989 2.147-2.134v-.763c0-1.138-.819-2.184-2.147-2.184h-1.81a.32.32 0 0 0-.324.332v4.366a.32.32 0 0 0 .324.325h1.81v.058zm7.842 9.355V34.714c0-.191.142-.332.325-.332h2.473c.297 0 .438.141.523.332l3.984 8.831c.057.142.255.142.283 0l3.998-8.831a.626.626 0 0 1 .58-.332h2.416c.184 0 .325.141.325.332v16.999c0 .197-.142.339-.325.339h-2.529a.332.332 0 0 1-.325-.339v-9.016c0-.142-.184-.142-.24-.057l-2.317 5.087c-.099.198-.24.34-.537.34h-2.261c-.297 0-.438-.142-.537-.34l-2.317-5.087c-.057-.141-.24-.085-.24.057v9.016c0 .197-.141.339-.325.339h-2.571c-.242.043-.383-.099-.383-.339zM238.94 12.479h.396v39.572h-.396zm108.412 21.945c0-.042.042-.042.042-.042h1.568c.043 0 .043 0 .043.042v.382c0 .049-.043.049-.043.049h-.424c-.057 0-.057.05-.057.05v2.416c0 .05 0 .05-.042.05h-.438c-.028 0-.028-.05-.028-.05v-2.416c0-.05-.057-.05-.057-.05h-.48c-.042 0-.042 0-.042-.049v-.382h-.042zm2.133 2.896v-2.896c0-.042.042-.042.042-.042h.424c.057 0 .099.042.099.042l.664 1.52c0 .049.057.049.057 0l.65-1.52c0-.042.057-.042.113-.042h.424c.042 0 .042.042.042.042v2.896c0 .05-.042.05-.042.05h-.424c-.057 0-.057-.05-.057-.05v-1.56c0-.05-.057-.05-.057 0l-.367.854c0 .042-.057.042-.1.042h-.381c-.043 0-.085-.042-.085-.042l-.396-.854c0-.05-.043 0-.043 0v1.561c0 .05-.042.05-.042.05h-.424c-.097-.001-.097-.001-.097-.051z"></path>
							</svg>
							<!-- <img src="<?php echo esc_attr( $logo ); ?>" alt="<?php echo esc_attr( get_bloginfo( 'name' ) ); ?>" id="logo" /> -->
						</a>

						<?php
						}
						$et_navigation_classes = extra_classes( array(
							extra_customizer_selector_classes( extra_get_dynamic_selector( 'main-navigation' ) ),
						), 'main-navigation', false );
						?>

						<!-- ET Navigation -->
						<div id="et-navigation" class="<?php echo $et_navigation_classes; ?>">
							<?php
							$menu_class = 'nav';
							if ( 'on' == et_get_option( 'extra_disable_toptier' ) ) {
								$menu_class .= ' et_disable_top_tier';
							}

							$primary_nav = wp_nav_menu( array(
								'theme_location'            => 'primary-menu',
								'container'                 => '',
								'fallback_cb'               => '',
								'menu_class'                => $menu_class,
								'menu_id'                   => 'et-menu',
								'echo'                      => false,
								'walker'                    => new Extra_Walker_Nav_Menu,
								'header_search_field_alone' => $header_vars['header_search_field_alone'],
								'header_cart_total_alone'   => $header_vars['header_cart_total_alone'],
							) );

							if ( !$primary_nav ) {
							?>
								<ul id="et-menu" class="<?php echo esc_attr( $menu_class ); ?>">
									<?php if ( 'on' == et_get_option( 'extra_home_link' ) ) { ?>
										<li <?php if ( is_home() ) echo 'class="current_page_item"'; ?>><a href="<?php echo esc_url( home_url( '/' ) ); ?>"><?php esc_html_e( 'Home', 'extra' ); ?></a></li>
									<?php }; ?>

									<?php show_page_menu( $menu_class, false, false ); ?>
									<?php show_categories_menu( $menu_class, false ); ?>
								</ul>
								<button type="button" class="request-demo">REQUEST A <span>DEMO</span></button>
							<?php
							} else {
								echo $primary_nav;
							}
							?>
							<?php do_action( 'et_header_top' ); ?>
						</div><!-- /#et-navigation -->
					</div><!-- /.container -->
				</div><!-- /#main-header -->
			</div><!-- /#main-header-wrapper -->

		</header>

		<?php $header_below_ad = extra_display_ad( 'header_below', false ); ?>
		<?php if ( !empty( $header_below_ad ) ) { ?>
		<div class="container">
			<div class="et_pb_extra_row etad header_below">
				<?php echo $header_below_ad; ?>
			</div>
		</div>
		<?php } ?>

<main class="site-content">
	<div class="case-studies-slider">
		<div id="case-study-slide1" class="case-study-slide cur-slide" style="background-image:url(' http://localhost/ronin/wp-content/uploads/2018/05/case-study-hero-public-saftey-large-venue_0.jpg'); top: 0;">
			<div class="container">
				<div class="case-study-slide__type">Use Case</div>
				<hr class="case-study-slide__bar">
				<a href=" http://localhost/ronin/case1/" class="case-study-slide__headline typewriter">
					Situational Awareness To Transform Public Safety
				</a>
				<hr class="case-study-slide__headline-bar">
				<a href=" http://localhost/ronin/case1/" class="case-study-slide__button">View Use Case</a>
			</div>
		</div>
		<div id="case-study-slide2" class="case-study-slide" style="top: calc(100vh - 126px);">
			<div class="container">
				<div class="case-study-slide__type">Case Study</div>
				<hr class="case-study-slide__bar">
				<img class="case-study-slide__logo" src=" http://localhost/ronin/wp-content/uploads/2018/04/icon5.png">
				<a href=" http://localhost/ronin/case2/" class="case-study-slide__headline typewriter">
					How Ronin is Shaping the Future of the Rental Car Business
				</a>
				<hr class="case-study-slide__headline-bar">
				<a href=" http://localhost/ronin/case2/" class="case-study-slide__button">View the <strong>Enterprise</strong> Case Study</a>
			</div>
			<video autoplay="" muted="" loop="" playsinline="" class="case-study-slide__video">
				<source src=" http://localhost/ronin/wp-content/uploads/2018/04/Ronin-Enterprise.mp4" type="video/mp4">
			</video>
		</div>
		<div id="case-study-slide3" class="case-study-slide" style="background-image:url(' http://localhost/ronin/wp-content/uploads/2018/05/case-study-hero-transport-logistics.jpg');top: calc(100vh - 126px);">
			<div class="container">
				<div class="case-study-slide__type">Use Case</div>
				<hr class="case-study-slide__bar">
				<a href=" http://localhost/ronin/case3" class="case-study-slide__headline typewriter">
					Simple Solution to Transportation &amp; Supply Chain Complexity
				</a>
				<hr class="case-study-slide__headline-bar">
				<a href=" http://localhost/ronin/case3" class="case-study-slide__button">View Use Case</a>
			</div>
		</div>
		<div id="case-study-slide4" class="case-study-slide" style="background-image:url(' http://localhost/ronin/wp-content/uploads/2018/05/CampusSecurity_2.jpg');top: calc(100vh - 126px);">
			<div class="container">
				<div class="case-study-slide__type">Use Case</div>
				<hr class="case-study-slide__bar">
				<a href=" http://localhost/ronin/case4" class="case-study-slide__headline typewriter">
					Transform Campus Security with Situational Awareness
				</a>
				<hr class="case-study-slide__headline-bar">
				<a href=" http://localhost/ronin/case4" class="case-study-slide__button">View Use Case</a>
			</div>
		</div>
		<div id="case-study-slide5" class="case-study-slide" style="background-image:url(' http://localhost/ronin/wp-content/uploads/2018/05/CaseStudy_Hero_UTILITY.jpg');top: calc(100vh - 126px);">
			<div class="container">
				<div class="case-study-slide__type">Use Case</div>
				<hr class="case-study-slide__bar">
				<a href=" http://localhost/ronin/case5" class="case-study-slide__headline typewriter">
					Expediting Utility Service Restoration
				</a>
				<hr class="case-study-slide__headline-bar">
				<a href=" http://localhost/ronin/case5" class="case-study-slide__button">View Use Case</a>
			</div>
		</div>
		<ul class="selector slick-dots">
			<li id="slick-slide1"><button type="button" data-id="1" data-role="none" role="button" tabindex="0">1</button></li>
			<li id="slick-slide2"><button type="button" data-id="2" data-role="none" role="button" tabindex="0">2</button></li>
			<li id="slick-slide3"><button type="button" data-id="3" data-role="none" role="button" tabindex="0">3</button></li>
			<li id="slick-slide4"><button type="button" data-id="4" data-role="none" role="button" tabindex="0">4</button></li>
			<li id="slick-slide5"><button type="button" data-id="5" data-role="none" role="button" tabindex="0">5</button></li>
			<svg viewbox="0 0 100 16"><path class="line" d="M -10, 14C-7, 14 -4, 11 -4,  8 C-4,  5 -7,  2 -10,  2 C-13,  2 -16,  5 -16,  8 C-16, 11 -13, 14 -10, 14 L10, 14 C13, 14 16, 11 16,  8 C16,  5 13,  2 10,  2 C7,  2 4,  5 4,  8 C4, 11 7, 14 10, 14 C13, 14 16, 11 16,  8 C16,  5 13,  2 10,  2 C7,  2 4,  5 4,  8 C4, 11 7, 14 10, 14 L30, 14 C33, 14 36, 11 36,  8 C36,  5 33,  2 30,  2 C27,  2 24,  5 24,  8 C24, 11 27, 14 30, 14 C33, 14 36, 11 36,  8 C36,  5 33,  2 30,  2 C27,  2 24,  5 24,  8 C24, 11 27, 14 30, 14 L50, 14 C53, 14 56, 11 56,  8 C56,  5 53,  2 50,  2 C47,  2 44,  5 44,  8 C44, 11 47, 14 50, 14 C47, 14 44, 11 44,  8 C44,  5 47,  2 50,  2 C53,  2 56,  5 56,  8 C56, 11 53, 14 50, 14 L30, 14 C27, 14 24, 11 24,  8 C24,  5 27,  2 30,  2 C33,  2 36,  5 36,  8 C36, 11 33, 14 30, 14 C27, 14 24, 11 24,  8 C24,  5 27,  2 30,  2 C33,  2 36,  5 36,  8 C36, 11 33, 14 30, 14 L10, 14 C7, 14 4, 11 4,  8 C4,  5 7,  2 10,  2 C13,  2 16,  5 16,  8 C16, 11 13, 14 10, 14 C13, 14 16, 11 16,  8 C16,  5 13,  2 10,  2 C7,  2 4,  5 4,  8 C4, 11 7, 14 10, 14 L30, 14 C33, 14 36, 11 36,  8 C36,  5 33,  2 30,  2 C27,  2 24,  5 24,  8 C24, 11 27, 14 30, 14 C27, 14 24, 11 24,  8 C24,  5 27,  2 30,  2 C33,  2 36,  5 36,  8 C36, 11 33, 14 30, 14 L10, 14 C7, 14 4, 11 4,  8 C4,  5 7,  2 10,  2 C13,  2 16,  5 16,  8 C16, 11 13, 14 10, 14 C13, 14 16, 11 16,  8 C16,  5 13,  2 10,  2 C7,  2 4,  5 4,  8 C4, 11 7, 14 10, 14 L30, 14 C33, 14 36, 11 36,  8 C36,  5 33,  2 30,  2 C27,  2 24,  5 24,  8 C24, 11 27, 14 30, 14 C33, 14 36, 11 36,  8 C36,  5 33,  2 30,  2 C27,  2 24,  5 24,  8 C24, 11 27, 14 30, 14 L50, 14 C53, 14 56, 11 56,  8 C56,  5 53,  2 50,  2 C47,  2 44,  5 44,  8 C44, 11 47, 14 50, 14 C53, 14 56, 11 56,  8 C56,  5 53,  2 50,  2 C47,  2 44,  5 44,  8 C44, 11 47, 14 50, 14 L70, 14 C73, 14 76, 11 76,  8 C76,  5 73,  2 70,  2 C67,  2 64,  5 64,  8 C64, 11 67, 14 70, 14 C73, 14 76, 11 76,  8 C76,  5 73,  2 70,  2 C67,  2 64,  5 64,  8 C64, 11 67, 14 70, 14 L90, 14 C93, 14 96, 11 96,  8 C96,  5 93,  2 90,  2 C87,  2 84,  5 84,  8 C84, 11 87, 14 90, 14 C87, 14 84, 11 84,  8 C84,  5 87,  2 90,  2 C93,  2 96,  5 96,  8 C96, 11 93, 14 90, 14 L70, 14 C67, 14 64, 11 64,  8 C64,  5 67,  2 70,  2 C73,  2 76,  5 76,  8 C76, 11 73, 14 70, 14 C67, 14 64, 11 64,  8 C64,  5 67,  2 70,  2 C73,  2 76,  5 76,  8 C76, 11 73, 14 70, 14 L50, 14 C47, 14 44, 11 44,  8 C44,  5 47,  2 50,  2 C53,  2 56,  5 56,  8 C56, 11 53, 14 50, 14 C53, 14 56, 11 56,  8 C56,  5 53,  2 50,  2 C47,  2 44,  5 44,  8 C44, 11 47, 14 50, 14 L70, 14 C73, 14 76, 11 76,  8 C76,  5 73,  2 70,  2 C67,  2 64,  5 64,  8 C64, 11 67, 14 70, 14 " style="stroke-dashoffset: -1277.35;"></path></svg>
		</ul>
	</div>
</main>

<?php get_footer();
