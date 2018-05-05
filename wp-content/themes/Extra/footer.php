<?php $footer_above_ad = extra_display_ad( 'footer_above', false ); ?>
	<?php if ( !empty( $footer_above_ad ) ) { ?>
	<div class="container">
		<div class="et_pb_extra_row etad footer_above">
			<?php echo $footer_above_ad; ?>
		</div>
	</div>
	<?php } ?>

	<footer id="footer" class="<?php extra_footer_classes(); ?>">
		<?php //get_sidebar( 'footer' ); ?>
		<div id="footer-bottom">
			<div class="container">

				<!-- Footer Info -->
				<!-- Logo -->
				<a class="logo" href="<?php echo esc_url( home_url( '/' ) ); ?>" data-fixed-height="<?php echo esc_attr( et_get_option( 'fixed_nav_logo_height', '51' ) ); ?>">
					<svg id="logo" viewBox="0 0 354 70" width="100%" height="100%">
						<title>Coolfire Solutions | Ronin Platform</title>
						<path d="M161.42 30.962h.764v2.374h.664v-2.374h.762v-.671h-2.19zm4.896-.671l-.713 2.19-.756-2.19h-.855v3.045h.664v-1.858l.566 1.858h.713l.622-1.858v1.858h.664v-3.045zm-44.935 6.033c-4.274 0-7.743 3.519-7.743 8.125 0 4.607 3.469 8.026 7.743 8.026s7.786-3.476 7.786-8.026c0-4.606-3.462-8.125-7.786-8.125zm0 12.534c-2.091 0-3.801-1.795-3.801-4.409 0-2.656 1.71-4.515 3.801-4.515 2.092 0 3.802 1.858 3.802 4.515 0 2.614-1.668 4.409-3.802 4.409zm-65.742-9.347c-3.187-.664-4.564-1.187-4.564-2.614 0-1.568 1.95-2.374 4.041-2.374 2.516 0 3.992 1.329 3.992 3.13h3.942c0-3.271-2.473-6.839-7.935-6.839-4.847 0-7.983 2.473-7.983 6.034 0 4.465 3.899 5.609 7.701 6.358 3.844.763 4.889 1.583 4.889 2.854 0 2.007-2.374 2.798-4.655 2.798-2.092 0-4.558-1.187-4.558-3.604h-3.942c0 4.988 4.416 7.221 8.5 7.221 5.228 0 8.598-2.515 8.598-6.5.049-4.239-3.088-5.468-8.026-6.464zm16.101-3.187c-4.274 0-7.744 3.519-7.744 8.125 0 4.607 3.47 8.026 7.744 8.026s7.793-3.476 7.793-8.026c-.05-4.606-3.518-8.125-7.793-8.125zm0 12.534c-2.092 0-3.801-1.795-3.801-4.409 0-2.656 1.709-4.515 3.801-4.515 2.091 0 3.801 1.858 3.801 4.515 0 2.657-1.71 4.409-3.801 4.409zm8.739-18.991h3.943v22.27h-3.943zm28.262.424h3.942v3.659h-3.942zm0 6.415h-3.844v-3.893h-3.942v12.823c0 4.225 2.424 6.938 6.932 6.458V48.49c-1.993.085-2.939-.707-2.939-2.854v-5.462h3.844v11.92h3.942V36.706h-3.993zm43.184 5.794c-1.901-.283-3.038-.565-3.038-1.385 0-.565.756-1.229 2.564-1.229 1.47 0 2.324.572 2.564 1.285h4.084c-.522-2.896-3.137-4.847-6.648-4.847-4.466 0-6.606 2.522-6.606 4.946 0 3.419 3.66 4.168 6.416 4.606 2.706.424 3.229.749 3.229 1.653s-1.188 1.385-2.805 1.385c-1.188 0-2.756-.48-3.278-1.809h-3.985c.474 3.335 3.37 5.369 7.312 5.369s6.748-2.134 6.748-5.229c-.001-3.318-2.714-4.124-6.557-4.745zm7.361 5.426h4.226v4.211h-4.226zm-63.368-2.049c0 .862-.283 2.981-2.848 2.981h-.142c-2.522 0-2.854-2.119-2.854-2.981v-9.121h-3.893v9.121c0 3.984 2.374 6.698 5.984 6.698h1.66c3.61 0 5.984-2.714 5.984-6.698v-9.121h-3.893v9.121zm41.897-9.595h-1.661c-3.61 0-5.984 2.706-5.984 6.698v9.114h3.894V42.98c0-.862.282-2.996 2.847-2.996h.191c2.564 0 2.854 2.134 2.854 2.996v9.114h3.893V42.98c-.05-3.992-2.423-6.698-6.034-6.698zM55.921 24.737c-3.42 0-6.126-3.278-6.126-7.221s2.706-7.221 6.126-7.221c2.374 0 4.232 1.427 5.179 3.278h4.274c-1.278-4.274-4.748-6.938-9.453-6.938-5.652 0-10.068 4.755-10.068 10.831 0 6.084 4.416 10.831 10.068 10.831 4.606 0 8.125-2.705 9.404-6.938H61.1c-.905 1.902-2.805 3.378-5.179 3.378zm17.197-12.59c-4.274 0-7.744 3.518-7.744 8.125 0 4.606 3.47 8.075 7.744 8.075s7.793-3.469 7.793-8.075c0-4.607-3.518-8.125-7.793-8.125zm0 12.541c-2.092 0-3.802-1.801-3.802-4.415 0-2.664 1.71-4.515 3.802-4.515 2.091 0 3.801 1.851 3.801 4.515 0 2.614-1.71 4.415-3.801 4.415zm15.579-12.541c-4.274 0-7.744 3.518-7.744 8.125 0 4.606 3.47 8.075 7.744 8.075s7.793-3.469 7.793-8.075c0-4.607-3.518-8.125-7.793-8.125zm0 12.541c-2.092 0-3.802-1.801-3.802-4.415 0-2.664 1.71-4.515 3.802-4.515 2.091 0 3.801 1.851 3.801 4.515 0 2.614-1.71 4.415-3.801 4.415zm8.648-18.999h3.942v22.276h-3.942zm33.722 6.458c-4.324 0-7.885 3.659-7.885 8.125 0 4.465 3.561 8.075 7.885 8.075 3.851 0 6.557-2.141 7.461-5.277h-4.225c-.672 1.236-1.95 1.809-3.278 1.809-1.858 0-3.328-1.188-3.851-3.038h11.637c.622-6.133-3.179-9.694-7.744-9.694zm-3.8 6.415c.572-1.809 1.999-2.946 3.801-2.946 1.9 0 3.378 1.138 3.851 2.946h-7.652zm-3.42-6.415h-2.656c-3.61 0-5.984 2.705-5.984 6.697v9.121h3.893v-9.121c0-.854.283-2.988 2.854-2.988h1.894v-3.709zm-13.919-6.034h3.943v3.66h-3.943z"></path>
						<path d="M106.558 11.907c.191-.897.806-1.993 2.474-2.085V6.113h-.432c-3.561 0-5.935 2.663-5.984 6.606v15.296h3.942V16.372h3.47v11.594h3.942V12.578h-7.412c-.049-.24 0-.48 0-.671zm-79.612 2.995c4.225-4.225 1.95-8.499-2.042-12.441-.855 2.896-2.854 4.747-6.508 8.407-3.038 3.038-1.759 4.465 3.18 9.404l5.37-5.37z"></path>
						<path d="M40.724 24.78l-3.42-3.42-1.046-1.046-.289-.282c-.996-.947-1.943-1.428-2.897-1.52h-.092c-1.045 0-2.141.523-3.229 1.568l-.29.283-3.462 3.469c-.049 0-.049.05-.099.099L14.978 34.854c-.665.565-1.237.905-1.81.947h-.042c-.572 0-1.194-.282-1.858-.897l-.806-.812-.332-.332c-.664-.714-.996-1.328-1.045-1.9 0-.615.332-1.328 1.095-2.092l.282-.282 6.938-6.938.565-.565-.565-.574c-1.709-1.709-2.805-2.805-3.42-3.991l-.522-.947-.812.764-7.362 7.404c-1.138 1.187-1.992 2.473-2.564 3.801a8.013 8.013 0 0 0-.714 3.61c0 .996.24 2 .622 2.946.565 1.428 1.42 2.756 2.656 3.992l3.42 3.427 6.034 6.02 1.095 1.103a12.541 12.541 0 0 0 3.278 2.317c1.188.621 2.466.961 3.802.961h.184c1.335 0 2.571-.34 3.759-.961a12.59 12.59 0 0 0 3.32-2.374l1.328-1.272 5.801-5.793 3.462-3.477c.764-.806 1.428-1.66 1.95-2.564.904-1.427 1.378-2.946 1.328-4.515.05-1.611-.424-3.13-1.328-4.558-.573-.855-1.188-1.709-1.993-2.522zM35.686 34l-7.122 7.087-3.419 3.419c-.764.749-1.477 1.188-2.092 1.188-.664-.057-1.378-.438-2.141-1.188l-2.755-2.77 12.682-12.675.05-.05c.664-.664 1.328-.996 1.9-1.046h.05c.614 0 1.328.382 2.084 1.096l.29.282.854.855c.522.614.806 1.187.854 1.71-.048.615-.472 1.329-1.235 2.092zm191.102-21.521H183.52a4.31 4.31 0 0 0-4.331 4.323v6.98h43.219c2.431 0 4.423-1.992 4.423-4.415v-6.889h-.043zm-1.568 55.06h11.022c.806-.142 1.046-1.003.706-1.611L216.19 28.157c-.184-.382-.565-.572-.989-.572h-36.012v23.322c0 .622.522 1.145 1.138 1.145h9.029c.607 0 1.145-.522 1.145-1.145V39.652c0-.382.282-.664.65-.664h16.632c.438 0 .805.233 1.003.565l14.583 26.742c.523.862.848 1.244 1.851 1.244zm23.188-37.623V12.91c0-.19.085-.332.325-.332h5.03c3.138 0 5.37 1.942 5.37 4.606v1.759c0 1.279-.565 2.607-1.852 3.562-.141.092-.282.233-.24.474l1.809 6.839c.1.382-.099.474-.381.474h-2.134c-.34 0-.523 0-.622-.332l-1.568-6.027c-.042-.19-.198-.339-.48-.339h-1.695a.33.33 0 0 0-.34.339v6.027c0 .19-.099.332-.339.332h-2.558c-.183-.044-.325-.185-.325-.376zm5.356-9.361c1.286 0 2.134-.996 2.134-2.134v-.714c0-1.145-.791-2.183-2.134-2.183h-1.794a.325.325 0 0 0-.34.332v4.366c0 .19.142.332.34.332h1.794zm7.56-3.229c0-3.138 2.232-4.938 5.369-4.938s5.412 1.801 5.412 4.938v8.167c0 3.138-2.275 4.946-5.412 4.946s-5.369-1.809-5.369-4.946v-8.167zm5.369 10.117c1.328 0 2.134-.854 2.134-2.473v-7.122c0-1.618-.806-2.473-2.134-2.473-1.286 0-2.147.854-2.147 2.473v7.122c0 1.619.861 2.473 2.147 2.473zm8.069 2.473V12.91c0-.19.142-.332.325-.332h2.092c.339 0 .537.042.621.282l4.988 9.786c.043.141.24.092.24-.05V12.91c0-.19.142-.332.339-.332h2.417c.184 0 .325.142.325.332v17.006a.322.322 0 0 1-.325.332h-2.092c-.282 0-.466-.049-.607-.289l-5.002-9.828c-.043-.148-.227-.099-.227.042v9.694c0 .19-.141.332-.339.332h-2.431c-.183.049-.324-.092-.324-.283zm14.441 0V12.91c0-.19.1-.332.325-.332h2.516c.197 0 .339.142.339.332v17.006c0 .191-.085.332-.339.332h-2.516a.322.322 0 0 1-.325-.332zm6.233 0V12.91c0-.19.141-.332.324-.332h2.092c.325 0 .522.042.607.282l5.002 9.786c.043.141.227.092.227-.05V12.91c0-.19.142-.332.339-.332h2.417c.184 0 .339.142.339.332v17.006a.333.333 0 0 1-.339.332h-2.077c-.297 0-.48-.049-.622-.289l-5.002-9.828c-.028-.148-.227-.099-.227.042v9.694c0 .19-.142.332-.339.332h-2.417c-.184.049-.324-.092-.324-.283zm-47.028 21.797V34.714c0-.191.085-.332.325-.332h5.03c3.138 0 5.37 1.992 5.37 4.889v2.141c0 2.897-2.232 4.89-5.37 4.89h-1.794c-.198 0-.34.142-.34.325v5.087c0 .197-.099.339-.339.339h-2.558c-.182.042-.324-.1-.324-.34zm5.356-8.394c1.343 0 2.134-1.046 2.134-2.431v-1.095c0-1.378-.791-2.474-2.134-2.474h-1.794a.33.33 0 0 0-.34.332v5.271c0 .197.142.339.34.339h1.794v.058zm7.504-8.605c0-.191.099-.332.339-.332h2.516c.197 0 .339.141.339.332v14.103c0 .184.142.339.325.339h4.083c.198 0 .34.142.34.325v2.189c0 .185-.142.325-.34.325h-7.319a.32.32 0 0 1-.325-.325V34.714h.042zm10.117 16.956l4.041-16.914c.057-.332.142-.424.425-.424h2.289c.282 0 .367.05.424.424l4.041 16.914c.042.283-.099.382-.382.382h-2.189c-.283 0-.368-.057-.48-.339l-.325-1.526c-.043-.142-.099-.325-.424-.325h-3.462c-.34 0-.438.184-.438.325l-.382 1.526c-.042.282-.184.339-.48.339h-2.176c-.341.043-.524-.099-.482-.382zm6.98-4.607c.198 0 .255-.099.198-.24l-1.47-6.217c0-.148-.198-.148-.24 0l-1.47 6.217c0 .142 0 .24.184.24h2.798zm4.281-12.349c0-.191.142-.332.325-.332h8.281c.184 0 .324.092.324.332v2.232c0 .19-.141.332-.324.332h-2.148a.333.333 0 0 0-.339.332v14.06c0 .185-.085.325-.325.325h-2.515a.319.319 0 0 1-.325-.325V37.61a.326.326 0 0 0-.34-.332h-2.176c-.198 0-.339-.099-.339-.332v-2.232h-.099zm11.305 0c0-.191.1-.332.325-.332h7.319c.198 0 .34.141.34.332v2.183a.325.325 0 0 1-.34.332h-4.069a.326.326 0 0 0-.339.332v4.232c0 .184.142.325.339.325h4.069c.198 0 .34.155.34.339v2.19c0 .184-.142.325-.34.325h-4.069c-.197 0-.339.142-.339.325v6.33c0 .184-.099.325-.339.325h-2.516c-.198 0-.339-.142-.339-.325V34.714h-.042zm9.793 4.416c0-3.138 2.232-4.939 5.369-4.939 3.138 0 5.398 1.802 5.398 4.939v8.174c0 3.138-2.261 4.946-5.398 4.946-3.137 0-5.369-1.809-5.369-4.946V39.13zm5.369 10.124c1.329 0 2.134-.862 2.134-2.487v-7.114c0-1.618-.805-2.473-2.134-2.473-1.285 0-2.147.854-2.147 2.473v7.114c0 1.625.862 2.487 2.147 2.487zm8.112 2.459V34.714c0-.191.099-.332.339-.332h5.031c3.137 0 5.369 1.942 5.369 4.606v1.759c0 1.272-.565 2.601-1.851 3.562-.142.085-.283.226-.24.48l1.809 6.839c.084.367-.1.467-.382.467h-2.134c-.339 0-.522 0-.622-.325l-1.568-6.048c-.042-.17-.184-.325-.466-.325h-1.725a.327.327 0 0 0-.324.325v6.048c0 .184-.1.325-.325.325h-2.529c-.241 0-.382-.142-.382-.382zm5.37-9.355c1.285 0 2.147-.989 2.147-2.134v-.763c0-1.138-.819-2.184-2.147-2.184h-1.81a.32.32 0 0 0-.324.332v4.366a.32.32 0 0 0 .324.325h1.81v.058zm7.842 9.355V34.714c0-.191.142-.332.325-.332h2.473c.297 0 .438.141.523.332l3.984 8.831c.057.142.255.142.283 0l3.998-8.831a.626.626 0 0 1 .58-.332h2.416c.184 0 .325.141.325.332v16.999c0 .197-.142.339-.325.339h-2.529a.332.332 0 0 1-.325-.339v-9.016c0-.142-.184-.142-.24-.057l-2.317 5.087c-.099.198-.24.34-.537.34h-2.261c-.297 0-.438-.142-.537-.34l-2.317-5.087c-.057-.141-.24-.085-.24.057v9.016c0 .197-.141.339-.325.339h-2.571c-.242.043-.383-.099-.383-.339zM238.94 12.479h.396v39.572h-.396zm108.412 21.945c0-.042.042-.042.042-.042h1.568c.043 0 .043 0 .043.042v.382c0 .049-.043.049-.043.049h-.424c-.057 0-.057.05-.057.05v2.416c0 .05 0 .05-.042.05h-.438c-.028 0-.028-.05-.028-.05v-2.416c0-.05-.057-.05-.057-.05h-.48c-.042 0-.042 0-.042-.049v-.382h-.042zm2.133 2.896v-2.896c0-.042.042-.042.042-.042h.424c.057 0 .099.042.099.042l.664 1.52c0 .049.057.049.057 0l.65-1.52c0-.042.057-.042.113-.042h.424c.042 0 .042.042.042.042v2.896c0 .05-.042.05-.042.05h-.424c-.057 0-.057-.05-.057-.05v-1.56c0-.05-.057-.05-.057 0l-.367.854c0 .042-.057.042-.1.042h-.381c-.043 0-.085-.042-.085-.042l-.396-.854c0-.05-.043 0-.043 0v1.561c0 .05-.042.05-.042.05h-.424c-.097-.001-.097-.001-.097-.051z"></path>
					</svg>
					<!-- <img src="<?php echo esc_attr( $logo ); ?>" alt="<?php echo esc_attr( get_bloginfo( 'name' ) ); ?>" id="logo" /> -->
				</a>

				<div class="footer-infos">
					<span class="footer-span1">Right Data. Right Hands. Right Now.</span>
					<br>
					<span class="footer-span2">(314) 555.1234</span>
					<br>
					<span class="footer-span3"><a href="mailto:info@roninplatform.com">info@roninplatform.com</a></span>
					<br>
					<span class="footer-span4">Copyright 2016 Coolfire Solutions</span>
					<br>
					<span class="footer-span4">All Rights Reserved</span>
				</div>

				<!-- Footer Navigation -->
				<?php if ( has_nav_menu( 'footer-menu' ) || false !== et_get_option( 'show_footer_social_icons', true ) ) { ?>
				<div id="footer-nav">
					<?php
					if ( has_nav_menu( 'footer-menu' ) ) {
						wp_nav_menu( array(
							'theme_location' => 'footer-menu',
							'depth'          => '1',
							'menu_class'     => 'bottom-nav',
							'menu_id'        => 'footer-menu',
							'container'      => '',
							'fallback_cb'    => '',
						) );
					}

					$show_footer_social_icons = et_get_option( 'show_footer_social_icons', true );

					if ( false !== $show_footer_social_icons || is_customize_preview() ) {
					?>
						<ul class="et-extra-social-icons" style="<?php extra_visible_display_css( $show_footer_social_icons ); ?>">
						<?php $social_icons = extra_get_social_networks(); ?>
						<?php foreach ( $social_icons as $social_icon => $social_icon_title ) { ?>
							<?php $social_icon = esc_attr( $social_icon ); ?>
							<?php $social_icon_url = et_get_option( sprintf( '%s_url', $social_icon ), '' ); ?>
							<?php if ( '' != $social_icon_url ) { ?>
							<li class="et-extra-social-icon <?php echo $social_icon; ?>">
								<a href="<?php echo esc_url( $social_icon_url ); ?>" class="et-extra-icon et-extra-icon-background-none et-extra-icon-<?php echo $social_icon; ?>"></a>
							</li>
							<?php } ?>
						<?php } ?>
						</ul>
					<?php
					}
					?>
				</div> <!-- /#et-footer-nav -->
				<?php } ?>

			</div>
		</div>
	</footer>
	</div> <!-- #page-container -->

	<?php if ( 'on' == et_get_option( 'extra_back_to_top' ) ) { ?>
		<span title="<?php esc_attr_e( 'Back To Top', 'extra' ); ?>" id="back_to_top"></span>
	<?php } ?>

	<?php wp_footer(); ?>

	<div class="site-lightbox">
		<div class="site-lightbox__lightbox">
			<button class="site-lightbox__close btn btn--close" id="close-d63f8679-03fe-467a-91b0-019c07f834f7">
				<svg id="plus" viewBox="0 0 29 29" width="100%" height="100%">
					<title>Close</title>
					<path d="M27 14.734a2.124 2.124 0 0 1-2.12 2.125h-8.492v8.021a2.124 2.124 0 1 1-4.251 0v-8.021H4.116a2.122 2.122 0 0 1 0-4.246h8.021V4.12a2.125 2.125 0 0 1 4.251 0v8.493h8.492A2.122 2.122 0 0 1 27 14.734z"></path>
				</svg>
			</button>
			<div class="site-lightbox__content">
				<div class="hubspot-d63f8679-03fe-467a-91b0-019c07f834f7">
					<form novalidate="" accept-charset="UTF-8" action="https://forms.hsforms.com/submissions/v3/public/submit/formsnext/multipart/3330234/d63f8679-03fe-467a-91b0-019c07f834f7" enctype="multipart/form-data" id="hsForm_d63f8679-03fe-467a-91b0-019c07f834f7" method="POST" class="hs-form stacked hs-form-private hs-form-d63f8679-03fe-467a-91b0-019c07f834f7_e931f0b1-2843-4474-ab27-a22a890df785" target="target_iframe_d63f8679-03fe-467a-91b0-019c07f834f7">
						<fieldset class="form-columns-2">
							<div class="hs-richtext">
								Let’s get started! Contact us now to schedule a demo.
							</div>
							<div class="hs_firstname hs-firstname hs-fieldtype-text field hs-form-field">
								<label>
									<span>First Name</span>
									<span class="hs-form-required">*</span>
								</label>
								<div class="input">
									<input id="firstname-d63f8679-03fe-467a-91b0-019c07f834f7" class="hs-input jform-input" type="text" name="firstname" required="" value="" placeholder="Enter" autocomplete="given-name">
								</div>
								<ul class="hs-error-msgs inputs-list" role="alert" for="firstname-d63f8679-03fe-467a-91b0-019c07f834f7">
									<li>
										<label>
											Please complete this required field.
										</label>
									</li>
								</ul>
							</div>
							<div class="hs_lastname hs-lastname hs-fieldtype-text field hs-form-field">
								<label>
									<span>Last Name</span>
									<span class="hs-form-required">*</span>
								</label>
								<div class="input">
									<input id="lastname-d63f8679-03fe-467a-91b0-019c07f834f7" class="hs-input jform-input" type="text" name="lastname" required="" value="" placeholder="Enter" autocomplete="family-name">
								</div>
								<ul class="hs-error-msgs inputs-list" role="alert" for="lastname-d63f8679-03fe-467a-91b0-019c07f834f7">
									<li>
										<label>
											Please complete this required field.
										</label>
									</li>
								</ul>
							</div>
						</fieldset>
						<fieldset class="form-columns-2">
							<div class="hs_email hs-email hs-fieldtype-text field hs-form-field">
								<label>
									<span>Email</span>
									<span class="hs-form-required">*</span>
								</label>
								<div class="input">
									<input id="email-d63f8679-03fe-467a-91b0-019c07f834f7" class="hs-input jform-input" type="email" name="email" required="" placeholder="you@youraddress.com" value="" autocomplete="email">
								</div>
								<ul class="hs-error-msgs inputs-list" role="alert" for="email-d63f8679-03fe-467a-91b0-019c07f834f7">
									<li>
										<label>Please complete this required field.</label>
									</li>
								</ul>
							</div>
							<div class="hs_phone hs-phone hs-fieldtype-text field hs-form-field">
								<label>
									<span>Phone Number</span>
									<span class="hs-form-required">*</span>
								</label>
								<div class="input">
									<input id="phone-d63f8679-03fe-467a-91b0-019c07f834f7" class="hs-input jform-input" type="tel" name="phone" required="" value="" placeholder="(555) 555-1234" autocomplete="tel">
								</div>
								<ul class="hs-error-msgs inputs-list" role="alert" for="phone-d63f8679-03fe-467a-91b0-019c07f834f7">
									<li>
										<label>Please complete this required field.</label>
									</li>
								</ul>
							</div>
						</fieldset>
						<fieldset class="form-columns-2">
							<div class="hs_jobtitle hs-jobtitle hs-fieldtype-text field hs-form-field">
								<label>
									<span>Job Title</span>
									<span class="hs-form-required">*</span>
								</label>
								<div class="input">
									<input id="jobtitle-d63f8679-03fe-467a-91b0-019c07f834f7" class="hs-input jform-input" type="text" name="jobtitle" required="" value="" placeholder="Enter" autocomplete="organization-title">
								</div>
								<ul class="hs-error-msgs inputs-list" role="alert" for="jobtitle-d63f8679-03fe-467a-91b0-019c07f834f7">
									<li>
										<label>Please complete this required field.</label>
									</li>
								</ul>
							</div>
							<div class="hs_industry hs-industry hs-fieldtype-select field hs-form-field">
								<label>
									<span>Industry</span>
									<span class="hs-form-required">*</span>
								</label>
								<div class="input">
									<select id="industry-d63f8679-03fe-467a-91b0-019c07f834f7" required="" class="hs-input jform-input" name="industry">
										<option value="" disabled="" selected="">- Please Select -</option>
										<option value="Transportation">Transportation</option>
										<option value="Utilities">Utilities</option>
										<option value="Public Safety">Public Safety</option>
										<option value="Government">Government</option>
										<option value="Other">Other</option>
									</select>
								</div>
								<ul class="hs-error-msgs inputs-list" role="alert" for="industry-d63f8679-03fe-467a-91b0-019c07f834f7">
									<li>
										<label>Please select an option from the dropdown menu.</label>
									</li>
								</ul>
							</div>
						</fieldset>
						<div class="hs_submit hs-submit" data-reactid=".hbspt-forms-0.3">
							<div class="actions" data-reactid=".hbspt-forms-0.3.1">
								<input type="button" value="Request a Demo " class="hs-button primary large jform-submit" id="submit-d63f8679-03fe-467a-91b0-019c07f834f7">
							</div>
						</div>
						<input name="hs_context" type="hidden" value="{&quot;rumScriptExecuteTime&quot;:2417.699999990873,&quot;rumServiceResponseTime&quot;:21068074.4,&quot;rumFormRenderTime&quot;:726.8999999947846,&quot;rumTotalRenderTime&quot;:21068083.09999999,&quot;rumTotalRequestTime&quot;:717.1000000089407,&quot;pageUrl&quot;:&quot;http://www.coolfiresolutions.com/&quot;,&quot;pageTitle&quot;:&quot;Coolfire Solutions | The Ronin Platform&quot;,&quot;source&quot;:&quot;FormsNext-static-1.884&quot;,&quot;isHostedOnHubspot&quot;:false,&quot;timestamp&quot;:1525023103751,&quot;userAgent&quot;:&quot;Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/65.0.3325.181 Safari/537.36&quot;,&quot;referrer&quot;:&quot;http://www.coolfiresolutions.com/platform&quot;,&quot;hutk&quot;:&quot;f94510e1ae7db07bf898c2db921643a9&quot;,&quot;originalEmbedContext&quot;:{&quot;portalId&quot;:&quot;3330234&quot;,&quot;formId&quot;:&quot;d63f8679-03fe-467a-91b0-019c07f834f7&quot;,&quot;target&quot;:&quot;.hubspot-d63f8679-03fe-467a-91b0-019c07f834f7&quot;,&quot;css&quot;:&quot;&quot;,&quot;cssRequired&quot;:&quot;&quot;,&quot;inlineMessage&quot;:true},&quot;recentFieldsCookie&quot;:{},&quot;boolCheckBoxFields&quot;:&quot;&quot;,&quot;dateFields&quot;:&quot;&quot;,&quot;smartFields&quot;:{},&quot;urlParams&quot;:{},&quot;formValidity&quot;:{&quot;industry&quot;:{&quot;valid&quot;:true,&quot;errors&quot;:[],&quot;errorTypes&quot;:[]},&quot;jobtitle&quot;:{&quot;valid&quot;:false,&quot;errors&quot;:[&quot;Please complete this required field.&quot;],&quot;errorTypes&quot;:[&quot;REQUIRED_FIELD&quot;]},&quot;phone&quot;:{&quot;valid&quot;:false,&quot;errors&quot;:[&quot;Please complete this required field.&quot;],&quot;errorTypes&quot;:[&quot;REQUIRED_FIELD&quot;]},&quot;email&quot;:{&quot;valid&quot;:false,&quot;errors&quot;:[&quot;Please complete this required field.&quot;],&quot;errorTypes&quot;:[&quot;REQUIRED_FIELD&quot;]},&quot;firstname&quot;:{&quot;valid&quot;:false,&quot;errors&quot;:[&quot;Please complete this required field.&quot;],&quot;errorTypes&quot;:[&quot;REQUIRED_FIELD&quot;]},&quot;lastname&quot;:{&quot;valid&quot;:false,&quot;errors&quot;:[&quot;Please complete this required field.&quot;],&quot;errorTypes&quot;:[&quot;REQUIRED_FIELD&quot;]}},&quot;formTarget&quot;:&quot;.hubspot-d63f8679-03fe-467a-91b0-019c07f834f7&quot;,&quot;correlationId&quot;:&quot;0e82ef1d-0cde-4c91-8724-2b5131753186&quot;,&quot;disableCookieSubmission&quot;:false,&quot;usingInvisibleRecaptcha&quot;:false,&quot;isFallback&quot;:false}">
						<iframe name="target_iframe_d63f8679-03fe-467a-91b0-019c07f834f7" style="display:none;"></iframe>
					</form>
					<div class="submitted-message" id="msgForm_d63f8679-03fe-467a-91b0-019c07f834f7">
						<div class="wysiwyg wysiwyg--xsmall wysiwyg--metal">
							<h4>Thank you!</h4>
							<p>A representative will be in touch with you shortly. We look forward to showing you how Ronin can help your business.</p>
							<p>Click anywhere on this screen to close.</p>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
<style>
.jftag-download-whitepaper button{
    -webkit-transition: background-color 0.2s ease-in-out, color 0.2s ease-in-out, -webkit-box-shadow 0.2s ease-in-out;
    transition: background-color 0.2s ease-in-out, color 0.2s ease-in-out, -webkit-box-shadow 0.2s ease-in-out;
    transition: background-color 0.2s ease-in-out, box-shadow 0.2s ease-in-out, color 0.2s ease-in-out;
    transition: background-color 0.2s ease-in-out, box-shadow 0.2s ease-in-out, color 0.2s ease-in-out, -webkit-box-shadow 0.2s ease-in-out;
	cursor: pointer;
	padding: 23px 124px 23px 24px;
	font-size: 19px;
    position: relative;
    text-align: left;
    text-transform: uppercase;
	border: 0;
    border-radius: 5px;
    background-color: #b3d143;
    color: #000;
    -webkit-box-shadow: 0 -1px 0 0 #c9ff00, 0 5px 5px 0 rgba(0, 0, 0, 0.1);
    box-shadow: 0 -1px 0 0 #c9ff00, 0 5px 5px 0 rgba(0, 0, 0, 0.1);
}
.jftag-download-whitepaper button:hover{
	background-color: #000;
	color: #fff;
    -webkit-box-shadow: 0 -1px 0 0 #000, 0 5px 5px 0 rgba(0, 0, 0, 0.1);
    box-shadow: 0 -1px 0 0 #000, 0 5px 5px 0 rgba(0, 0, 0, 0.1);
}
.jftag-download-whitepaper button span {
    font-size: 16px;
    display: block;
    font-family: "Flama Condensed", Helvetica, Arial, sans-serif;
    font-weight: 300;
    text-transform: none;
}
.jftag-download-whitepaper button svg {
	position: absolute;
    top: 50%;
	right: 21px;
    width: 37px;
    height: 39px;
    margin-top: -19.5px;
	-webkit-transition: fill 0.2s ease-in-out;
    transition: fill 0.2s ease-in-out;
    fill: currentColor;
	transform-origin: 50% 50% 0px;
}
</style>
	<script>
	var $ = jQuery;
	$(document).ready(function(){
		function resize_video() {
			var w = $(window).width();
			var h1 = $("#home-section5").height() + 100;
			var h = $(window).height();
			if (h1 > h) h = h1;
			if (w / 1920 > h / 1080)
				$(".hero__video").css({width: w + "px", height: (w * 1080 / 1920 ) + "px"});
			else
				$(".hero__video").css({width: (h * 1920 / 1080 ) + "px", height: h + "px"});
		}
		resize_video();
		$(window).resize(resize_video);
		$(".request-demo").click(function(){
			$(".site-lightbox").show();
		});
		$(".site-lightbox__close").click(function(){
			$(".site-lightbox").hide();
			// var frmid = $(this).attr("id").substring($(this).attr("id").indexOf('-') + 1, $(this).attr("id").length);
			// $("#hsForm_" + frmid).show();
			// $("#msgForm_" + frmid).hide();
		});
		$(".jftag-download-whitepaper").each(function(){
			var pid = $(this).attr("pid");
			var title = $(this).attr("ptitle");
			var file = $(this).attr("pfile");
			var html = '<button><span>' + title + '</span><span>Download Resource</span><svg id="download" viewBox="0 0 37 39" width="100%" height="100%"><title>Download</title><path d="M35 24.46v10.591a1.93 1.93 0 0 1-1.92 1.939H3.92A1.93 1.93 0 0 1 2 35.051V24.46a1.92 1.92 0 0 1 3.84 0v8.64h25.32v-8.64a1.92 1.92 0 1 1 3.84-.055v.055zM17.13 26.9a1.909 1.909 0 0 0 2.698.042l.042-.042 7.659-7.92a1.971 1.971 0 0 0-.029-2.75 1.907 1.907 0 0 0-2.698-.002l-.022.021-4.359 4.521V3.93a1.92 1.92 0 1 0-3.84 0v16.841l-4.36-4.521a1.908 1.908 0 0 0-2.721-.02 1.972 1.972 0 0 0-.02 2.75l7.65 7.92z"></path></svg></button>';
			$(this).append(html);
		});

		$(".jform-input").blur(function(){
			if (!$(this).val())
			{
				$(".hs-error-msgs[for=" + $(this).attr("id") + "]").show();
			} else {
				$(".hs-error-msgs[for=" + $(this).attr("id") + "]").hide();
			}
		});
		$(".jform-submit").click(function(){
			var frmid = $(this).attr("id").substring($(this).attr("id").indexOf('-') + 1, $(this).attr("id").length);
			var ecnt = 0;
			$(".jform-input").each(function(){
				var frmidOfItem = $(this).attr("id").substring($(this).attr("id").indexOf('-') + 1, $(this).attr("id").length);
				if (frmidOfItem != frmid) return;
				if (!$(this).val())
				{
					ecnt++;
					$(".hs-error-msgs[for=" + $(this).attr("id") + "]").show();
				} else {
					$(".hs-error-msgs[for=" + $(this).attr("id") + "]").hide();
				}
			});
			if (ecnt == 0) {
				$("#hsForm_" + frmid).submit();
				$("#hsForm_" + frmid).hide();
				$("#msgForm_" + frmid).show();
			}
		});
	});
	</script>
</body>
</html>
