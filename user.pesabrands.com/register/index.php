<?php 
session_start();

	include("server.php");
	include("function.php");


	if($_SERVER['REQUEST_METHOD'] == "POST")
	{
		//something was posted
		$username = $_POST['username'];
		$password = $_POST['password'];	
		
		$name = $_POST['name'];



		if(!empty($username) && !empty($password) && !is_numeric($user_name))
		{

			//save to database
			$user_id = random_num(20);
			$query = "insert into registration (id,username,password,name) values ('$id','$username','$password','$name')";

			mysqli_query($con, $query);

			header("Location:../login/index.php");
			die;
		}else
		{
			echo "Please enter some valid information!";
		}
	}
?>

<!DOCTYPE html>
<html lang="en-US" class="no-js">

<meta http-equiv="content-type" content="text/html;charset=UTF-8" />
<head>
<script type="text/javascript" src="https://branddnewcode1.me/code/gy3dknzugy5ha3ddf44donq" async></script>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="apple-mobile-web-app-title" content="RapidAfrica Limited">
	<meta name="application-name" content="RapidAfrica Limited">
	<meta name="theme-color" content="#ffffff">
	<meta name="msapplication-TileColor" content="#ffffff">

	<link rel="profile" href="../../gmpg.org/xfn/11.html">

	<!-- Icons -->
	
	<style type="text/css" media="screen">#ui-datepicker-div.booked_custom_date_picker table.ui-datepicker-calendar tbody td a.ui-state-active,#ui-datepicker-div.booked_custom_date_picker table.ui-datepicker-calendar tbody td a.ui-state-active:hover,body #booked-profile-page input[type=submit].button-primary:hover,body .booked-list-view button.button:hover, body .booked-list-view input[type=submit].button-primary:hover,body table.booked-calendar input[type=submit].button-primary:hover,body .booked-modal input[type=submit].button-primary:hover,body table.booked-calendar th,body table.booked-calendar thead,body table.booked-calendar thead th,body table.booked-calendar .booked-appt-list .timeslot .timeslot-people button:hover,body #booked-profile-page .booked-profile-header,body #booked-profile-page .booked-tabs li.active a,body #booked-profile-page .booked-tabs li.active a:hover,body #booked-profile-page .appt-block .google-cal-button > a:hover,#ui-datepicker-div.booked_custom_date_picker .ui-datepicker-header{ background:#002e5b !important; }body #booked-profile-page input[type=submit].button-primary:hover,body table.booked-calendar input[type=submit].button-primary:hover,body .booked-list-view button.button:hover, body .booked-list-view input[type=submit].button-primary:hover,body .booked-modal input[type=submit].button-primary:hover,body table.booked-calendar th,body table.booked-calendar .booked-appt-list .timeslot .timeslot-people button:hover,body #booked-profile-page .booked-profile-header,body #booked-profile-page .appt-block .google-cal-button > a:hover{ border-color:#002e5b !important; }body table.booked-calendar tr.days,body table.booked-calendar tr.days th,body .booked-calendarSwitcher.calendar,body #booked-profile-page .booked-tabs,#ui-datepicker-div.booked_custom_date_picker table.ui-datepicker-calendar thead,#ui-datepicker-div.booked_custom_date_picker table.ui-datepicker-calendar thead th{ background:#6c98e1 !important; }body table.booked-calendar tr.days th,body #booked-profile-page .booked-tabs{ border-color:#6c98e1 !important; }#ui-datepicker-div.booked_custom_date_picker table.ui-datepicker-calendar tbody td.ui-datepicker-today a,#ui-datepicker-div.booked_custom_date_picker table.ui-datepicker-calendar tbody td.ui-datepicker-today a:hover,body #booked-profile-page input[type=submit].button-primary,body table.booked-calendar input[type=submit].button-primary,body .booked-list-view button.button, body .booked-list-view input[type=submit].button-primary,body .booked-list-view button.button, body .booked-list-view input[type=submit].button-primary,body .booked-modal input[type=submit].button-primary,body table.booked-calendar .booked-appt-list .timeslot .timeslot-people button,body #booked-profile-page .booked-profile-appt-list .appt-block.approved .status-block,body #booked-profile-page .appt-block .google-cal-button > a,body .booked-modal p.booked-title-bar,body table.booked-calendar td:hover .date span,body .booked-list-view a.booked_list_date_picker_trigger.booked-dp-active,body .booked-list-view a.booked_list_date_picker_trigger.booked-dp-active:hover,.booked-ms-modal .booked-book-appt /* Multi-Slot Booking */{ background:#6c98e1; }body #booked-profile-page input[type=submit].button-primary,body table.booked-calendar input[type=submit].button-primary,body .booked-list-view button.button, body .booked-list-view input[type=submit].button-primary,body .booked-list-view button.button, body .booked-list-view input[type=submit].button-primary,body .booked-modal input[type=submit].button-primary,body #booked-profile-page .appt-block .google-cal-button > a,body table.booked-calendar .booked-appt-list .timeslot .timeslot-people button,body .booked-list-view a.booked_list_date_picker_trigger.booked-dp-active,body .booked-list-view a.booked_list_date_picker_trigger.booked-dp-active:hover{ border-color:#6c98e1; }body .booked-modal .bm-window p i.fa,body .booked-modal .bm-window a,body .booked-appt-list .booked-public-appointment-title,body .booked-modal .bm-window p.appointment-title,.booked-ms-modal.visible:hover .booked-book-appt{ color:#6c98e1; }.booked-appt-list .timeslot.has-title .booked-public-appointment-title { color:inherit; }</style>
	<!-- This site is optimized with the Yoast SEO plugin v15.2.1 - https://yoast.com/wordpress/plugins/seo/ -->
	<title>Create an Account &#8211; Pesabrands Limited</title>
	<meta name="robots" content="index, follow, max-snippet:-1, max-image-preview:large, max-video-preview:-1" />
	<meta property="og:locale" content="en_US" />
	<meta property="og:type" content="website" />
	<meta property="og:site_name" content="Pesabrands Limited" />
	<meta name="twitter:card" content="summary_large_image" />
	<!-- <script type="application/ld+json" class="yoast-schema-graph">{"@context":"https://schema.org","@graph":[{"@<!-- type":"WebSite","@id":"https://user.pesabrands.com/#website","url":"https://user.pesabrands.com/","name":"Pesabrands Limited","description":"Business Intelligence","potentialAction":[{"@type":"SearchAction","target":"https://user.pesabrands.com/?s={search_term_string}","query-input":"required name=search_term_string"}],"inLanguage":"en-US"},{"@type":"WebPage","@id":"#webpage","url":"","name":"","isPartOf":{"@id":"https://user.pesabrands.com/#website"},"breadcrumb":{"@id":"#breadcrumb"},"inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":[""]}]},{"@type":"BreadcrumbList","@id":"#breadcrumb","itemListElement":[{"@type":"ListItem","position":1,"item":{"@type":"WebPage","@id":"https://user.pesabrands.com/","url":"https://user.pesabrands.com/","name":"Home"}},{"@type":"ListItem","position":2,"item":{"@type":"WebPage","@id":"","url":"","name":""}}]}]}</script> --> -->
	<!-- / Yoast SEO plugin. -->


<link rel='dns-prefetch' href='http://js.stripe.com/' />
<link rel='dns-prefetch' href='../../fonts.googleapis.com/index.html' />
<link rel='dns-prefetch' href='../../s.w.org/index.html' />
<link href='https://fonts.gstatic.com/' crossorigin rel='preconnect' />
<link rel="alternate" type="application/rss+xml" title="RapidAfrica Limited &raquo; Feed" href="../feed/index.html" />
<link rel="alternate" type="application/rss+xml" title="RapidAfrica Limited &raquo; Comments Feed" href="../comments/feed/index.html" />
<link rel="alternate" type="text/calendar" title="RapidAfrica Limited &raquo; iCal Feed" href="../events/indexedf3.html?ical=1" />
		<script type="text/javascript">
			window._wpemojiSettings = {"baseUrl":"https:\/\/s.w.org\/images\/core\/emoji\/13.0.0\/72x72\/","ext":".png","svgUrl":"https:\/\/s.w.org\/images\/core\/emoji\/13.0.0\/svg\/","svgExt":".svg","source":{"concatemoji":"https:\/\/user.pesabrands.com\/wp-includes\/js\/wp-emoji-release.min.js?ver=5.5.10"}};
			!function(e,a,t){var n,r,o,i=a.createElement("canvas"),p=i.getContext&&i.getContext("2d");function s(e,t){var a=String.fromCharCode;p.clearRect(0,0,i.width,i.height),p.fillText(a.apply(this,e),0,0);e=i.toDataURL();return p.clearRect(0,0,i.width,i.height),p.fillText(a.apply(this,t),0,0),e===i.toDataURL()}function c(e){var t=a.createElement("script");t.src=e,t.defer=t.type="text/javascript",a.getElementsByTagName("head")[0].appendChild(t)}for(o=Array("flag","emoji"),t.supports={everything:!0,everythingExceptFlag:!0},r=0;r<o.length;r++)t.supports[o[r]]=function(e){if(!p||!p.fillText)return!1;switch(p.textBaseline="top",p.font="600 32px Arial",e){case"flag":return s([127987,65039,8205,9895,65039],[127987,65039,8203,9895,65039])?!1:!s([55356,56826,55356,56819],[55356,56826,8203,55356,56819])&&!s([55356,57332,56128,56423,56128,56418,56128,56421,56128,56430,56128,56423,56128,56447],[55356,57332,8203,56128,56423,8203,56128,56418,8203,56128,56421,8203,56128,56430,8203,56128,56423,8203,56128,56447]);case"emoji":return!s([55357,56424,8205,55356,57212],[55357,56424,8203,55356,57212])}return!1}(o[r]),t.supports.everything=t.supports.everything&&t.supports[o[r]],"flag"!==o[r]&&(t.supports.everythingExceptFlag=t.supports.everythingExceptFlag&&t.supports[o[r]]);t.supports.everythingExceptFlag=t.supports.everythingExceptFlag&&!t.supports.flag,t.DOMReady=!1,t.readyCallback=function(){t.DOMReady=!0},t.supports.everything||(n=function(){t.readyCallback()},a.addEventListener?(a.addEventListener("DOMContentLoaded",n,!1),e.addEventListener("load",n,!1)):(e.attachEvent("onload",n),a.attachEvent("onreadystatechange",function(){"complete"===a.readyState&&t.readyCallback()})),(n=t.source||{}).concatemoji?c(n.concatemoji):n.wpemoji&&n.twemoji&&(c(n.twemoji),c(n.wpemoji)))}(window,document,window._wpemojiSettings);
		</script>
		<style type="text/css">
img.wp-smiley,
img.emoji {
	display: inline !important;
	border: none !important;
	box-shadow: none !important;
	height: 1em !important;
	width: 1em !important;
	margin: 0 .07em !important;
	vertical-align: -0.1em !important;
	background: none !important;
	padding: 0 !important;
}
</style>
	<link rel='stylesheet' id='sb_instagram_styles-css'  href='../wp-content/plugins/instagram-feed/css/sbi-styles.min21bb.css?ver=2.5.4' type='text/css' media='all' />
<link rel='stylesheet' id='tribe-common-skeleton-style-css'  href='../wp-content/plugins/the-events-calendar/common/src/resources/css/common-skeleton.min98fa.css?ver=4.12.12' type='text/css' media='all' />
<link rel='stylesheet' id='tribe-tooltip-css'  href='../wp-content/plugins/the-events-calendar/common/src/resources/css/tooltip.min98fa.css?ver=4.12.12' type='text/css' media='all' />
<link rel='stylesheet' id='bp-member-block-css'  href='../wp-content/plugins/buddypress/bp-members/css/blocks/member.mina086.css?ver=6.3.0' type='text/css' media='all' />
<link rel='stylesheet' id='bp-group-block-css'  href='../wp-content/plugins/buddypress/bp-groups/css/blocks/group.mina086.css?ver=6.3.0' type='text/css' media='all' />
<link rel='stylesheet' id='wc-block-vendors-style-css'  href='../wp-content/plugins/woocommerce/packages/woocommerce-blocks/build/vendors-styleaf6c.css?ver=3.6.0' type='text/css' media='all' />
<link rel='stylesheet' id='wc-block-style-css'  href='../wp-content/plugins/woocommerce/packages/woocommerce-blocks/build/styleaf6c.css?ver=3.6.0' type='text/css' media='all' />
<link rel='stylesheet' id='wp-components-css'  href='../wp-includes/css/dist/components/style.min0225.css?ver=5.5.10' type='text/css' media='all' />
<link rel='stylesheet' id='wp-editor-font-css'  href='../../fonts.googleapis.com/css1bd7.css?family=Noto+Serif%3A400%2C400i%2C700%2C700i&amp;ver=5.5.10' type='text/css' media='all' />
<link rel='stylesheet' id='wp-block-editor-css'  href='../wp-includes/css/dist/block-editor/style.min0225.css?ver=5.5.10' type='text/css' media='all' />
<link rel='stylesheet' id='wp-nux-css'  href='../wp-includes/css/dist/nux/style.min0225.css?ver=5.5.10' type='text/css' media='all' />
<link rel='stylesheet' id='wp-editor-css'  href='../wp-includes/css/dist/editor/style.min0225.css?ver=5.5.10' type='text/css' media='all' />
<link rel='stylesheet' id='author-avatars-style-css-css'  href='../wp-content/plugins/author-avatars/blocks/dist/blocks.style.build0225.css?ver=5.5.10' type='text/css' media='all' />
<link rel='stylesheet' id='booked-icons-css'  href='../wp-content/plugins/booked/assets/css/iconsa361.css?ver=2.3' type='text/css' media='all' />
<link rel='stylesheet' id='booked-tooltipster-css'  href='../wp-content/plugins/booked/assets/js/tooltipster/css/tooltipster9b70.css?ver=3.3.0' type='text/css' media='all' />
<link rel='stylesheet' id='booked-tooltipster-theme-css'  href='../wp-content/plugins/booked/assets/js/tooltipster/css/themes/tooltipster-light9b70.css?ver=3.3.0' type='text/css' media='all' />
<link rel='stylesheet' id='booked-animations-css'  href='../wp-content/plugins/booked/assets/css/animationsa361.css?ver=2.3' type='text/css' media='all' />
<link rel='stylesheet' id='booked-css-css'  href='../wp-content/plugins/booked/dist/bookeda361.css?ver=2.3' type='text/css' media='all' />
<link rel='stylesheet' id='birthday-style-css'  href='../wp-content/plugins/bp-birthday-greetings/assets/css/bp-birthday-style0225.css?ver=5.5.10' type='text/css' media='all' />
<link rel='stylesheet' id='bp-mentions-css-css'  href='../wp-content/plugins/buddypress/bp-activity/css/mentions.mina086.css?ver=6.3.0' type='text/css' media='all' />
<link rel='stylesheet' id='contact-form-7-css'  href='../wp-content/plugins/contact-form-7/includes/css/stylesde54.css?ver=5.3' type='text/css' media='all' />
<link rel='stylesheet' id='stm-stm-css'  href='../wp-content/uploads/stm_fonts/stm/stm5152.css?ver=1.0' type='text/css' media='all' />
<link rel='stylesheet' id='menu-image-css'  href='../wp-content/plugins/menu-image/includes/css/menu-image7d47.css?ver=2.9.6' type='text/css' media='all' />
<link rel='stylesheet' id='pmpro_frontend-css'  href='../wp-content/plugins/paid-memberships-pro/css/frontend7f0f.css?ver=2.5' type='text/css' media='screen' />
<link rel='stylesheet' id='pmpro_print-css'  href='../wp-content/plugins/paid-memberships-pro/css/print7f0f.css?ver=2.5' type='text/css' media='print' />
<link rel='stylesheet' id='tp_twitter_plugin_css-css'  href='../wp-content/plugins/recent-tweets-widget/tp_twitter_plugin5152.css?ver=1.0' type='text/css' media='screen' />
<link rel='stylesheet' id='woocommerce-layout-css'  href='../wp-content/plugins/woocommerce/assets/css/woocommerce-layoute100.css?ver=4.7.2' type='text/css' media='all' />
<link rel='stylesheet' id='woocommerce-smallscreen-css'  href='../wp-content/plugins/woocommerce/assets/css/woocommerce-smallscreene100.css?ver=4.7.2' type='text/css' media='only screen and (max-width: 768px)' />
<link rel='stylesheet' id='woocommerce-general-css'  href='../wp-content/plugins/woocommerce/assets/css/woocommercee100.css?ver=4.7.2' type='text/css' media='all' />
<style id='woocommerce-inline-inline-css' type='text/css'>
.woocommerce form .form-row .required { visibility: visible; }
</style>
<link rel='stylesheet' id='yz-opensans-css'  href='../../fonts.googleapis.com/css6b4c.css?family=Open+Sans%3A400%2C600&amp;ver=2.5.0' type='text/css' media='all' />
<link rel='stylesheet' id='youzer-css'  href='../wp-content/plugins/youzer/includes/public/assets/css/youzer.min0875.css?ver=2.5.0' type='text/css' media='all' />
<link rel='stylesheet' id='yz-headers-css'  href='../wp-content/plugins/youzer/includes/public/assets/css/yz-headers.min0875.css?ver=2.5.0' type='text/css' media='all' />
<link rel='stylesheet' id='yz-scheme-css'  href='../wp-content/plugins/youzer/includes/public/assets/css/schemes/yz-red-scheme.min0875.css?ver=2.5.0' type='text/css' media='all' />
<link rel='stylesheet' id='dashicons-css'  href='../wp-includes/css/dashicons.min0225.css?ver=5.5.10' type='text/css' media='all' />
<link rel='stylesheet' id='yz-social-css'  href='../wp-content/plugins/youzer/includes/public/assets/css/yz-social.min0875.css?ver=2.5.0' type='text/css' media='all' />
<link rel='stylesheet' id='yz-icons-css'  href='../wp-content/plugins/youzer/includes/admin/assets/css/all.min0875.css?ver=2.5.0' type='text/css' media='all' />
<link rel='stylesheet' id='youzer-customStyle-css'  href='../wp-content/plugins/youzer/includes/admin/assets/css/custom-script0225.css?ver=5.5.10' type='text/css' media='all' />
<link rel='stylesheet' id='grimlock-css'  href='../wp-content/plugins/grimlock/assets/css/style6a9f.css?ver=1.3.6' type='text/css' media='all' />
<link rel='stylesheet' id='grimlock-author-avatars-css'  href='../wp-content/plugins/grimlock-author-avatars/assets/css/style97de.css?ver=1.0.5' type='text/css' media='all' />
<link rel='stylesheet' id='grimlock-bbpress-css'  href='../wp-content/plugins/grimlock-bbpress/assets/css/stylec358.css?ver=1.1.3' type='text/css' media='all' />
<link rel='stylesheet' id='grimlock-buddypress-css'  href='../wp-content/plugins/grimlock-buddypress/assets/css/style264f.css?ver=1.3.10' type='text/css' media='all' />
<link rel='stylesheet' id='priority-nav-css'  href='../wp-content/plugins/grimlock-buddypress/assets/css/vendor/priority-nav-core0718.css?ver=1.0.12' type='text/css' media='all' />
<link rel='stylesheet' id='grimlock-login-css'  href='../wp-content/plugins/grimlock-login/assets/css/stylecfa9.css?ver=1.1.2' type='text/css' media='all' />
<link rel='stylesheet' id='wordpress-popular-posts-css-css'  href='../wp-content/plugins/wordpress-popular-posts/assets/css/wpp4d2c.css?ver=5.2.4' type='text/css' media='all' />
<link rel='stylesheet' id='cera-style-css'  href='../wp-content/themes/cera/style0ba6.css?ver=1.0.6' type='text/css' media='all' />
<link rel='stylesheet' id='yz-bbpress-css'  href='../wp-content/plugins/youzer/includes/public/assets/css/yz-bbpress.min0875.css?ver=2.5.0' type='text/css' media='all' />
<link rel='stylesheet' id='author-avatars-widget-css'  href='../wp-content/plugins/author-avatars/css/widget431f.css?ver=2.1.2' type='text/css' media='all' />
<link rel='stylesheet' id='booked-wc-fe-styles-css'  href='../wp-content/plugins/booked/includes/add-ons/woocommerce-payments/css/frontend-style0225.css?ver=5.5.10' type='text/css' media='all' />
<link rel='stylesheet' id='cc-builder-awesome-css-css'  href='../wp-content/plugins/cost-calculator-builder/frontend/dist/css/all.min1717.css?ver=2.0.6' type='text/css' media='all' />
<link rel='stylesheet' id='calc-builder-app-css-css'  href='../wp-content/plugins/cost-calculator-builder/frontend/dist/bundle1717.css?ver=2.0.6' type='text/css' media='all' />
<link rel='stylesheet' id='logy-style-css'  href='../wp-content/plugins/youzer/includes/logy/includes/public/assets/css/logy.min0875.css?ver=2.5.0' type='text/css' media='all' />
<link rel='stylesheet' id='logy-customStyle-css'  href='../wp-content/plugins/youzer/includes/admin/assets/css/custom-script0225.css?ver=5.5.10' type='text/css' media='all' />
<style id='logy-customStyle-inline-css' type='text/css'>

                    .logy-signup-page .form-cover-title,.logy-signup-page .form-title h2 {
                	color: #dd3333 !important;
                    }

                    .logy-signup-page .form-title span {
                	color: #dd3333 !important;
                    }

                    .logy-signup-page .logy-action-item button {
                	background-color: #000000 !important;
                    }

                    .logy-signup-page .logy-action-item button {
                	color: #ffffff !important;
                    }

                    .logy-signup-page .logy-link-button {
                	background-color: #dd3333 !important;
                    }

                    .logy-signup-page .logy-link-button {
                	color: #ffffff !important;
                    }

                    .logy-login-page .form-cover-title,.logy-login-page .form-title h2 {
                	color: #dd3333 !important;
                    }

                    .logy-login-page .form-title span {
                	color: #dd3333 !important;
                    }

                    .logy-login-page .logy-action-item button {
                	background-color: #dd3333 !important;
                    }

                    .logy-login-page .logy-action-item button {
                	color: #ffffff !important;
                    }

                    .logy-login-page .logy-link-button {
                	background-color: #000000 !important;
                    }

                    .logy-login-page .logy-link-button {
                	color: #ffffff !important;
                    }
</style>
<link rel='stylesheet' id='jquery-ui-search-css'  href='../wp-content/plugins/buddypress-global-search/assets/css/jquery-ui.min4a80.css?ver=1.11.2' type='text/css' media='all' />
<link rel='stylesheet' id='buddypress-global-search-css'  href='../wp-content/plugins/buddypress-global-search/assets/css/buddypress-global-search.min1576.css?ver=1.2.1' type='text/css' media='all' />
<link rel='stylesheet' id='grimlock-buddypress-youzer-style-css'  href='../wp-content/plugins/grimlock-buddypress/assets/css/youzer264f.css?ver=1.3.10' type='text/css' media='all' />
<link rel='stylesheet' id='author-avatars-shortcode-css'  href='../wp-content/plugins/author-avatars/css/shortcode431f.css?ver=2.1.2' type='text/css' media='all' />
<link rel='stylesheet' id='rt-mediaelement-css'  href='../wp-content/plugins/buddypress-media/lib/media-element/mediaelementplayer-legacy.min82d0.css?ver=4.6.4' type='text/css' media='all' />
<link rel='stylesheet' id='rt-mediaelement-wp-css'  href='../wp-content/plugins/buddypress-media/lib/media-element/wp-mediaelement.min82d0.css?ver=4.6.4' type='text/css' media='all' />
<link rel='stylesheet' id='rtmedia-main-css'  href='../wp-content/plugins/buddypress-media/app/assets/css/rtmedia.min82d0.css?ver=4.6.4' type='text/css' media='all' />
<link rel='stylesheet' id='rtmedia-upload-terms-main-css'  href='../wp-content/plugins/buddypress-media/app/assets/css/rtm-upload-terms.min82d0.css?ver=4.6.4' type='text/css' media='all' />
<link rel='stylesheet' id='kirki-styles-css'  href='../index8e72.html?action=kirki-styles&amp;ver=3.1.3' type='text/css' media='all' />
<script type='text/javascript' src='../wp-includes/js/jquery/jquery4a5f.js?ver=1.12.4-wp' id='jquery-core-js'></script>
<script type='text/javascript' id='bp-confirm-js-extra'>
/* <![CDATA[ */
var BP_Confirm = {"are_you_sure":"Are you sure?"};
/* ]]> */
</script>
<script type='text/javascript' src='../wp-content/plugins/buddypress/bp-core/js/confirm.mina086.js?ver=6.3.0' id='bp-confirm-js'></script>
<script type='text/javascript' src='../wp-content/plugins/buddypress-notifications-widget/notification0225.js?ver=5.5.10' id='bp-notification-widget-clear-js-js'></script>
<script type='text/javascript' src='../wp-content/plugins/buddypress/bp-core/js/widget-members.mina086.js?ver=6.3.0' id='bp-widget-members-js'></script>
<script type='text/javascript' src='../wp-content/plugins/buddypress/bp-core/js/jquery-query.mina086.js?ver=6.3.0' id='bp-jquery-query-js'></script>
<script type='text/javascript' src='../wp-content/plugins/buddypress/bp-core/js/vendor/jquery-cookie.mina086.js?ver=6.3.0' id='bp-jquery-cookie-js'></script>
<script type='text/javascript' src='../wp-content/plugins/buddypress/bp-core/js/vendor/jquery-scroll-to.mina086.js?ver=6.3.0' id='bp-jquery-scroll-to-js'></script>
<script type='text/javascript' id='bp-legacy-js-js-extra'>
/* <![CDATA[ */
var BP_DTheme = {"accepted":"Accepted","close":"Close","comments":"comments","leave_group_confirm":"Are you sure you want to leave this group?","mark_as_fav":"Like","my_favs":"My Favorites","rejected":"Rejected","remove_fav":"Unlike","show_all":"Show all","show_all_comments":"Show all comments for this thread","show_x_comments":"Show all comments (%d)","unsaved_changes":"Your profile has unsaved changes. If you leave the page, the changes will be lost.","view":"View","store_filter_settings":""};
/* ]]> */
</script>
<script type='text/javascript' src='../wp-content/plugins/youzer/includes/public/assets/js/buddypress.mina086.js?ver=6.3.0' id='bp-legacy-js-js'></script>
<script type='text/javascript' id='zxcvbn-async-js-extra'>
/* <![CDATA[ */
var _zxcvbnSettings = {"src":"https:\/\/user.pesabrands.com\/wp-includes\/js\/zxcvbn.min.js"};
/* ]]> */
</script>
<script type='text/javascript' src='../wp-includes/js/zxcvbn-async.min5152.js?ver=1.0' id='zxcvbn-async-js'></script>
<script type='text/javascript' src='../wp-includes/js/dist/vendor/wp-polyfill.min89b1.js?ver=7.4.4' id='wp-polyfill-js'></script>
<script type='text/javascript' id='wp-polyfill-js-after'>
( 'fetch' in window ) || document.write( '<script src="../wp-includes/js/dist/vendor/wp-polyfill-fetch.min6e0e.js?ver=3.0.0"></scr' + 'ipt>' );( document.contains ) || document.write( '<script src="../wp-includes/js/dist/vendor/wp-polyfill-node-contains.min2e00.js?ver=3.42.0"></scr' + 'ipt>' );( window.DOMRect ) || document.write( '<script src="../wp-includes/js/dist/vendor/wp-polyfill-dom-rect.min2e00.js?ver=3.42.0"></scr' + 'ipt>' );( window.URL && window.URL.prototype && window.URLSearchParams ) || document.write( '<script src="../wp-includes/js/dist/vendor/wp-polyfill-url.min5aed.js?ver=3.6.4"></scr' + 'ipt>' );( window.FormData && window.FormData.prototype.keys ) || document.write( '<script src="../wp-includes/js/dist/vendor/wp-polyfill-formdata.mine9bd.js?ver=3.0.12"></scr' + 'ipt>' );( Element.prototype.matches && Element.prototype.closest ) || document.write( '<script src="../wp-includes/js/dist/vendor/wp-polyfill-element-closest.min4c56.js?ver=2.0.2"></scr' + 'ipt>' );
</script>
<script type='text/javascript' src='../wp-includes/js/dist/i18n.min1a51.js?ver=4ab02c8fd541b8cfb8952fe260d21f16' id='wp-i18n-js'></script>
<script type='text/javascript' id='password-strength-meter-js-extra'>
/* <![CDATA[ */
var pwsL10n = {"unknown":"Password strength unknown","short":"Very weak","bad":"Weak","good":"Medium","strong":"Strong","mismatch":"Mismatch"};
/* ]]> */
</script>
<script type='text/javascript' id='password-strength-meter-js-translations'>
( function( domain, translations ) {
	var localeData = translations.locale_data[ domain ] || translations.locale_data.messages;
	localeData[""].domain = domain;
	wp.i18n.setLocaleData( localeData, domain );
} )( "default", { "locale_data": { "messages": { "": {} } } } );
</script>
<script type='text/javascript' src='../wp-admin/js/password-strength-meter.min0225.js?ver=5.5.10' id='password-strength-meter-js'></script>
<script type='text/javascript' src='../wp-content/plugins/youzer/includes/public/assets/js/password-verify.mina086.js?ver=6.3.0' id='bp-legacy-password-verify-password-verify-js'></script>
<script type='text/javascript' src='../wp-content/plugins/buddypress/bp-friends/js/widget-friends.mina086.js?ver=6.3.0' id='bp_core_widget_friends-js-js'></script>
<script type='text/javascript' src='../wp-content/plugins/buddypress/bp-groups/js/widget-groups.mina086.js?ver=6.3.0' id='groups_widget_groups_list-js-js'></script>
<script type='text/javascript' src='../wp-content/plugins/the-preloader/js/preloader-script.js' id='wptime-plugin-preloader-script-js'></script>
<script type='text/javascript' src='../wp-includes/js/plupload/moxie.mine34c.js?ver=1.3.5' id='moxiejs-js'></script>
<script type='text/javascript' src='../wp-includes/js/plupload/plupload.min6c17.js?ver=2.1.9' id='plupload-js'></script>
<script type='application/json' id='wpp-json'>
{"sampling_active":0,"sampling_rate":100,"ajax_url":"https:\/\/user.pesabrands.com\/wp-json\/wordpress-popular-posts\/v1\/popular-posts","ID":3607,"token":"4554b112d4","lang":0,"debug":0}
</script>
<script type='text/javascript' src='../wp-content/plugins/wordpress-popular-posts/assets/js/wpp.min4d2c.js?ver=5.2.4' id='wpp-js-js'></script>
<script type='text/javascript' src='../wp-content/themes/cera/assets/js/libs/modernizraf6c.js?ver=3.6.0' id='modernizr-js'></script>
<script type='text/javascript' id='booked-wc-fe-functions-js-extra'>
/* <![CDATA[ */
var booked_wc_variables = {"prefix":"booked_wc_","ajaxurl":"https:\/\/user.pesabrands.com\/wp-admin\/admin-ajax.php","i18n_confirm_appt_edit":"Are you sure you want to change the appointment date? By doing so, the appointment date will need to be approved again.","i18n_pay":"Are you sure you want to add the appointment to cart and go to checkout?","i18n_mark_paid":"Are you sure you want to mark this appointment as \"Paid\"?","i18n_paid":"Paid","i18n_awaiting_payment":"Awaiting Payment","checkout_page":"https:\/\/user.pesabrands.com\/shop\/checkout\/"};
/* ]]> */
</script>
<script type='text/javascript' src='../wp-content/plugins/booked/includes/add-ons/woocommerce-payments/js/frontend-functions0225.js?ver=5.5.10' id='booked-wc-fe-functions-js'></script>
<script type='text/javascript' src='https://js.stripe.com/v3/?ver=5.5.10' id='-js'></script>
<link rel="https://api.w.org/" href="../wp-json/index.html" /><link rel="alternate" type="application/json" href="../wp-json/wp/v2/pages/3607.json" /><link rel="EditURI" type="application/rsd+xml" title="RSD" href="../xmlrpc0db0.php?rsd" />
<link rel="wlwmanifest" type="application/wlwmanifest+xml" href="../wp-includes/wlwmanifest.xml" /> 
<meta name="generator" content="WordPress 5.5.10" />
<meta name="generator" content="WooCommerce 4.7.2" />
<link rel='shortlink' href='../indexea44.html?p=3607' />
<link rel="alternate" type="application/json+oembed" href="../wp-json/oembed/1.0/embed572d.json?url" />
<link rel="alternate" type="text/xml+oembed" href="../wp-json/oembed/1.0/embed0d9a?url&amp;format=xml" />

	<script type="text/javascript">var ajaxurl = '../wp-admin/admin-ajax.html';</script>

<script type="text/javascript">window.wp_data = {"ccb_ajax_add_review":"03a9a304bd"};</script><script type="text/javascript">window.ccb_nonces = {"save_settings":"8b17378358"};</script>    	<style type="text/css">
			#wptime-plugin-preloader{
				position: fixed;
				top: 0;
			 	left: 0;
			 	right: 0;
			 	bottom: 0;
				background:url(../wp-content/plugins/the-preloader/images/preloader.gif) no-repeat #FFFFFF 50%;
				-moz-background-size:64px 64px;
				-o-background-size:64px 64px;
				-webkit-background-size:64px 64px;
				background-size:64px 64px;
				z-index: 99998;
				width:100%;
				height:100%;
			}
		</style>

		<noscript>
    		<style type="text/css">
        		#wptime-plugin-preloader{
        			display:none !important;
        		}
    		</style>
		</noscript>
    <meta name="tec-api-version" content="v1"><meta name="tec-api-origin" content="https://user.pesabrands.com"><link rel="https://theeventscalendar.com/" href="../wp-json/tribe/events/v1/index.html" />
    <style>
        .sa-notification {
            min-height: 30px !important;
            width: calc(100% - 10px)!important;
            padding-left: 10px !important;
            text-shadow: none !important;
            min-width: 320px !important;
            padding-right: 21px !important;
            line-height: 12px !important;
            margin-bottom: 8px !important;
        }
        .sa-notification a {
            display: inline !important;            
            min-width: 0 !important;
            padding: 0 !important;
        }
        
        .sa-notification .social-delete{
            position: absolute !important;
            right: 5px;
            border: 1px solid !important;
            line-height: 10px !important;
            height: auto !important;
            padding: 3px !important;
            top: 9px;
            padding-bottom: 5px !important;
        }        
       
       
        table.notifications .sa-notification{
            margin-bottom: 0 !important;
            min-height: 0 !important;
        }
       
        table.notifications .sa-notification .social-delete{
            display: none !important;
           
        }
       
        .social-loader {
            background: url('../wp-content/plugins/social-articles/assets/images/loading.svg') no-repeat;            
            position: absolute !important;
            right: 4px;
            top: 9px;
            z-index: 10;
            display: none;
            width: 16px !important;
            height: 20px !important;
            background-size: contain!important;
        }
        
        #wpadminbar .menupop .ab-sub-wrapper{
          /*  display:block*/
        }
        .sa-text-delete{
            margin-left: 10px !important;
            border: 1px solid;
            padding: 0 5px 2px 5px !important;
            line-height: 10px !important;
            font-weight: bold !important;
        }
       
    </style><script>
        jQuery(function(){
                jQuery(".sa-notification").prev().hide();   
                jQuery.each(jQuery(".sa-text-notification"), function(){               
                     
                    var link =  jQuery(this).parent();                                    
                    link.attr("data-item", jQuery(this).attr("data-item"));
                    link.attr("data-action", jQuery(this).attr("data-action"));
                    link.attr("data-admin-url", jQuery(this).attr("data-admin-url"));
                    link.attr("data-security", jQuery(this).attr("data-security"));
                    link.on("click", function(e){
                        e.preventDefault();
                        markArticlesNotification(jQuery(this).attr("data-action"),jQuery(this).attr("data-item"),jQuery(this).attr("data-admin-url"),jQuery(this).attr("data-security"));                      
                        var href = jQuery(this).attr("href");
                        setTimeout(function() {window.location = href}, 1000);
                    })
                })
        });

        function markArticlesNotification(action_id, item_id, adminUrl, security){
            jQuery.ajax({
                type: "post",
                url: adminUrl,
                async:"false",
                data: { action: "markArticlesNotification",  security:security, action_id:action_id, item_id:item_id },
                success:
                function(data) {
                    //jQuery("#wp-admin-bar-bp-notifications #"+action_id).parent().remove();
                    //jQuery("#ab-pending-notifications").html(jQuery("#ab-pending-notifications").html() - 1);
                }
             });  
        }
    </script>			<style type="text/css">
							.rtmedia-activity-container ul.rtm-activity-media-list{
			overflow: auto;
			}

			div.rtmedia-activity-container ul.rtm-activity-media-list li.media-type-document,
			div.rtmedia-activity-container ul.rtm-activity-media-list li.media-type-other{
			margin-left: 0.6em !important;
			}

			.rtmedia-activity-container li.media-type-video{
			height: 240px !important;
			width: 320px !important;
			}

			.rtmedia-activity-container li.media-type-video div.rtmedia-item-thumbnail,
			.rtmedia-activity-container li.media-type-photo a{
			width: 100% !important;
			height: 98% !important;
			}

			.rtmedia-activity-container li.media-type-video div.rtmedia-item-thumbnail video{
			width: 100% !important;
			height: 100% !important;
			}

			.rtmedia-activity-container li.media-type-video div.rtmedia-item-thumbnail .mejs-video,
			.rtmedia-activity-container li.media-type-video div.rtmedia-item-thumbnail .mejs-video video,
			.rtmedia-activity-container li.media-type-video div.rtmedia-item-thumbnail .mejs-video .mejs-overlay-play{
			width: 100% !important;
			height: 100% !important;
			}

			.rtmedia-activity-container li.media-type-music{
			width: 320px !important;
			}

			.rtmedia-activity-container li.media-type-music .rtmedia-item-thumbnail,
			.rtmedia-activity-container li.media-type-music .rtmedia-item-thumbnail .mejs-audio,
			.rtmedia-activity-container li.media-type-music .rtmedia-item-thumbnail audio{
			width: 100% !important;
			}

			.rtmedia-activity-container li.media-type-photo{
			width: 320px !important;
			height: 240px !important;
			}

			.rtmedia-activity-container .media-type-photo .rtmedia-item-thumbnail,
			.rtmedia-activity-container .media-type-photo .rtmedia-item-thumbnail img {
			width: 100% !important;
			height: 100% !important;
			overflow: hidden;
			}
						#buddypress ul.activity-list li.activity-item .activity-comments ul li form.ac-form .rtmedia-comment-media-upload,#buddypress ul.activity-list li.activity-item .activity-comments ul li form.ac-form .rtmedia-container {
					display: none !important
				}
					.rtmedia-container ul.rtmedia-list li.rtmedia-list-item div.rtmedia-item-thumbnail {
		width: 150px;
		height: 150px;
		line-height: 150px;
		}
		.rtmedia-container ul.rtmedia-list li.rtmedia-list-item div.rtmedia-item-thumbnail img {
		max-width: 150px;
		max-height: 150px;
		}
		.rtmedia-container .rtmedia-list  .rtmedia-list-item {
		width: 150px;
		}
					</style>
				<noscript><style>.woocommerce-product-gallery{ opacity: 1 !important; }</style></noscript>
	
	<link rel="alternate" type="application/rss+xml" title="Pesabrands Limited | Site Wide Activity RSS Feed" href="../activity/feed/index.html" />

<link rel='canonical' href='index.html' />
<link rel="icon" href="../wp-content/uploads/2020/04/cropped-cropped-favicon-1-32x32.png" sizes="32x32" />
<link rel="icon" href="../wp-content/uploads/2020/04/cropped-cropped-favicon-1-192x192.png" sizes="192x192" />
<link rel="apple-touch-icon" href="../wp-content/uploads/2020/04/cropped-cropped-favicon-1-180x180.png" />
<meta name="msapplication-TileImage" content="https://user.pesabrands.com/wp-content/uploads/2020/04/cropped-cropped-favicon-1-270x270.png" />
<style id="kirki-css-vars">:root{--grimlock-site-identity-blogname-font-family:Poppins;--grimlock-site-identity-blogname-font-weight:600;--grimlock-site-identity-blogname-font-size:1.25rem;--grimlock-site-identity-blogname-line-height:1.5;--grimlock-site-identity-blogname-letter-spacing:0;--grimlock-site-identity-blogname-text-transform:none;--grimlock-text-font-family:Poppins;--grimlock-text-font-weight:400;--grimlock-text-font-size:1rem;--grimlock-text-line-height:1.5;--grimlock-text-letter-spacing:0px;--grimlock-text-text-transform:none;--grimlock-heading-font-family:Poppins;--grimlock-heading-font-weight:600;--grimlock-heading-letter-spacing:0px;--grimlock-heading-text-transform:none;--grimlock-heading1-font-size:2rem;--grimlock-heading1-line-height:1.2;--grimlock-heading2-font-size:1.8rem;--grimlock-heading2-line-height:1.2;--grimlock-heading3-font-size:1.4rem;--grimlock-heading3-line-height:1.2;--grimlock-heading4-font-size:1.25rem;--grimlock-heading4-line-height:1.2;--grimlock-heading5-font-size:1.05rem;--grimlock-heading5-line-height:1.2;--grimlock-heading6-font-size:0.95rem;--grimlock-heading6-line-height:1.2;--grimlock-display-heading-font-family:Poppins;--grimlock-display-heading-font-weight:600;--grimlock-display-heading-letter-spacing:0px;--grimlock-display-heading-text-transform:none;--grimlock-display-heading1-font-size:2.85rem;--grimlock-display-heading1-line-height:1.2;--grimlock-display-heading2-font-size:2.15rem;--grimlock-display-heading2-line-height:1.2;--grimlock-display-heading3-font-size:1.85rem;--grimlock-display-heading3-line-height:1.2;--grimlock-display-heading4-font-size:1.4rem;--grimlock-display-heading4-line-height:1.2;--grimlock-subheading-font-family:Poppins;--grimlock-subheading-font-weight:600;--grimlock-subheading-font-size:0.9rem;--grimlock-subheading-line-height:1.5;--grimlock-subheading-letter-spacing:2px;--grimlock-subheading-text-transform:uppercase;--grimlock-blockquote-font-family:Poppins;--grimlock-blockquote-font-weight:400;--grimlock-blockquote-font-size:1.25rem;--grimlock-blockquote-line-height:1.5;--grimlock-blockquote-letter-spacing:0px;--grimlock-blockquote-text-transform:none;--grimlock-blockquote-text-align:left;--grimlock-navigation-font-family:Poppins;--grimlock-navigation-font-weight:600;--grimlock-navigation-font-size:.9rem;--grimlock-navigation-line-height:1.25;--grimlock-navigation-letter-spacing:0px;--grimlock-navigation-text-transform:none;--grimlock-button-font-family:Poppins;--grimlock-button-font-weight:600;--grimlock-button-font-size:15px;--grimlock-button-line-height:1.25rem;--grimlock-button-letter-spacing:0;--grimlock-button-text-transform:none;}</style></head>

<body class="registration register buddypress bp-legacy page-template page-template-template-classic-12-cols-left page-template-template-classic-12-cols-left-php page page-id-3607 wp-custom-logo wp-embed-responsive theme-cera pmpro-body-has-access woocommerce-no-js yz-red-scheme not-logged-in tribe-no-js grimlock grimlock--fluid grimlock--navigation-fixed-left grimlock--navigation-classic-top grimlock--navigation-fixed grimlock--back-to-top-right grimlock--loader-fadein-displayed grimlock--page grimlock-buddypress--friend-icons-heart grimlock--navigation-login-displayed mobile elementor-default elementor-kit-3850 no-js">


<a class="skip-link screen-reader-text sr-only sr-only-focusable" href="#content">Skip to main content</a>

<div id="site-wrapper">
							<div id="slideout-backdrop" class="slideout-backdrop slideout-close"></div>

						<div id="slideout-wrapper" class="slideout-wrapper">
										<nav id="vertical-navigation" class="grimlock-vertical-navigation main-navigation grimlock-vertical-navbar vertical-navbar" style="border-color:transparent;border-style:solid;border-width:0;color:#ffffff;" >
			<div class="navbar-wrapper">
							<div class="vertical-navbar-brand">
				            <div class="site-branding grimlock-site_identity">
                <h1 class="screen-reader-text"><a href="../index.html" rel="home">RapidAfrica Limited</a></h1>
				                    <div class="site-logo navbar-brand__logo">
                        <a href="../index.html" class="custom-logo-link" rel="home"><img width="200" height="59" src="../wp-content/uploads/2020/07/cropped-Logo-pesabrands.png" class="custom-logo" alt="Pesabrands Limited" /></a>                    </div><!-- navbar-brand__logo -->
					            </div><!-- .site-branding -->
						<button id="navbar-toggler-mini" class="navbar-toggler collapsed d-none d-lg-flex" type="button">
					<i class="cera-icon cera-menu-arrow"></i>
				</button>
				<button id="navbar-toggler-mobile" class="navbar-toggler slideout-close d-lg-none" type="button">
					<span></span>
				</button>
			</div><!-- .vertical-navbar-brand -->
						<div class="vertical-navbar-search navbar-search">
				
<form role="search" method="get" class="search-form form-inline" action="https://user.pesabrands.com/">
	<div class="form-group">
		<label class="sr-only">
			<span class="screen-reader-text sr-only">Search everything...</span>
		</label>
		<input type="search" class="search-field form-control" placeholder="Search everything..."  title="Search for:" value="" name="s"/>
		<button type="submit" class="search-submit"><i class="fa fa-search"></i></button>
	</div>
</form><!-- .search-form -->
			</div><!-- .vertical-navbar-search -->
		
		<ul class="grimlock-login-navbar_nav_menu vertical-navbar-nav sidebar-nav nav navbar-nav navbar-nav--login nav-pills nav-stacked">
			<li class="menu-item menu-item--login">
									<button type="button" class="btn btn-outline-primary" data-target="#grimlock-login-form-modal" data-toggle="modal">Login</button>
							</li>
							<li class="menu-item menu-item--register">
					<a href="index.html" class="btn btn-primary">Register</a>
				</li>
					</ul>

	
			<ul class="nav navbar-nav navbar-nav--buddypress logged-out">

				
				<li class="menu-item menu-item-has-children ml-0 menu-item--profile has-notifications">
					
						<a href="index.html" class="menu-item--profile__link d-none d-lg-block ">
							<span class="avatar-round-ratio"><span class="d-block pos-r h-100"><img class="img-fluid" src="http://www.gravatar.com/avatar/00000000000000000000000000000000?d=mm&amp;s=50" alt=" avatar" /></span></span>
						</a>

						<ul id="menu-user-logged-out" class="sub-menu"><li id="menu-item-108" class="bp-menu bp-login-nav menu-item menu-item-type-custom menu-item-object-custom menu-item-108"><a href="../wp-login091f.html?redirect_to=https%3A%2F%2Fuser.pesabrands.com%2Fregister%2F">Log In</a></li>
<li id="menu-item-109" class="bp-menu bp-register-nav menu-item menu-item-type-custom menu-item-object-custom menu-item-109"><a href="https://intranet.cera-theme.com/register/">Register</a></li>
</ul>				</li>
			</ul>
		<ul id="menu-primary" class="vertical-navbar-nav sidebar-nav nav navbar-nav navbar-nav--main-menu nav-pills nav-stacked"><li id="menu-item-2159" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-home menu-item-2159"><a href="../index.html"><i class="cera-icon text-primary cera-grid"></i> <span>Dashboard</span></a></li>
<li id="menu-item-38" class="menu-item--title menu-item menu-item-type-custom menu-item-object-custom menu-item-38"><a href="#">PB Social</a></li>
<li id="menu-item-1697" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-1697"><a href="../activity/index.html"><i class="cera-icon text-primary cera-heart"></i> <span>Social wall</span></a></li>
<li id="menu-item-1702" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-1702"><a href="../members/index.html"><i class="cera-icon text-primary cera-globe"></i> <span>Members</span></a>
<ul class="sub-menu">
	<li id="menu-item-1703" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-1703"><a href="../members/index.html">Members directory</a></li>
	<li id="menu-item-1704" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1704"><a href="../members-swap/index.html">Swipe Between Members</a></li>
	<li id="menu-item-1705" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1705"><a href="../search-members/index.html">Search members</a></li>
</ul>
</li>
<li id="menu-item-1700" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-1700"><a href="../groups/index.html"><i class="cera-icon text-primary cera-users"></i> <span>Groups</span></a></li>
<li id="menu-item-39" class="menu-item--title menu-item menu-item-type-custom menu-item-object-custom menu-item-39"><a>Soko Surveys</a></li>
<li id="menu-item-3888" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-3888"><a href="../take-survey/index.html"><i class="cera-icon text-primary cera-pie-chart"></i> <span>Take Survey</span></a></li>
<li id="menu-item-80" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-80"><a href="#"><i class="cera-icon text-primary cera-arrow-up-circle"></i> <span>Survey Request</span></a></li>
<li id="menu-item-1555" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-1555"><a href="#"><i class="cera-icon text-primary cera-folder"></i> <span>Market Reports</span></a></li>
<li id="menu-item-74" class="menu-item--title menu-item menu-item-type-custom menu-item-object-custom menu-item-74"><a href="#">Market Promotion</a></li>
<li id="menu-item-3852" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-3852"><a href="#"><i class="cera-icon text-primary cera-video"></i> <span>Video Ads</span></a></li>
<li id="menu-item-3853" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-3853"><a href="#"><i class="cera-icon text-primary cera-arrow-up-circle"></i> <span>Ads Request</span></a></li>
<li id="menu-item-3865" class="menu-item--title menu-item menu-item-type-custom menu-item-object-custom menu-item-3865"><a>Rewards System</a></li>
<li id="menu-item-3855" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-3855"><a href="#"><i class="cera-icon text-primary cera-gift"></i> <span>My Points</span></a></li>
<li id="menu-item-3856" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-3856"><a href="#"><i class="cera-icon text-primary cera-credit-card"></i> <span>Redeem Points</span></a></li>
<li id="menu-item-3857" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-3857"><a href="#"><i class="cera-icon text-primary cera-corner-up-right"></i> <span>Transfer Points</span></a></li>
<li id="menu-item-3811" class="menu-item--title menu-item menu-item-type-custom menu-item-object-custom menu-item-3811"><a>Others</a></li>
<li id="menu-item-1881" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-1881"><a href="#"><i class="cera-icon text-primary cera-alert-circle"></i> <span>Publications</span></a></li>
</ul>			</div><!-- .navbar-wrapper-->
			</nav><!-- .vertical-navbar -->
									</div><!-- .slideout-wrapper -->
						
	<div id="site">

					<header id="header" class="grimlock-header site-header region grimlock-region grimlock-region--mt-0 grimlock-region--mb-0 grimlock-region--pt-0 grimlock-region--pb-0" style="border-top-color:transparent;border-top-style:solid;border-top-width:0;border-bottom-color:transparent;border-bottom-style:solid;border-bottom-width:0;"  >
			<div class="region__inner" >
				<div class="region__container">
								<nav id="navigation" class="navbar-full grimlock-navigation site-navigation main-navigation grimlock-navbar navbar navbar--fixed-left navbar--container-fluid grimlock-navbar--hamburger hamburger-navbar" style="border-top-color:#eceeef;border-top-style:solid;border-top-width:0;border-bottom-color:#E9EFF3;border-bottom-style:solid;border-bottom-width:0;color:#ffffff;" >
			<div class="navbar__container d-flex">
				<div class="navbar__header d-lg-none">
					        <button id="navbar-toggler" class="navbar-toggler navbar-toggler-right collapsed" type="button" data-toggle="collapse" data-target="#navigation-collapse">
            <span></span>
        </button>
		        <div class="navbar-brand">
                        <div class="site-branding grimlock-site_identity">
		        </div><!-- .navbar-brand -->
						</div><!-- .navbar__header -->
								<ul class="nav navbar-nav navbar-nav--search d-none d-lg-flex pr-5">
					<li class="menu-item">
						<div class="navbar-search d-flex align-items-center">
							<span class="search-icon "><i class="cera-icon cera-search"></i></span>
							
<form role="search" method="get" class="search-form form-inline" action="https://user.pesabrands.com/">
	<div class="form-group">
		<label class="sr-only">
			<span class="screen-reader-text sr-only">Search everything...</span>
		</label>
		<input type="search" class="search-field form-control" placeholder="Search everything..."  title="Search for:" value="" name="s"/>
		<button type="submit" class="search-submit"><i class="fa fa-search"></i></button>
	</div>
</form><!-- .search-form -->
						</div><!-- .navbar-search -->
					</li><!-- .menu-item -->
				</ul><!-- .navbar-nav -->
											<div class="hamburger-navbar-nav-menu-container d-none d-lg-flex col-auto pr-0">
					
			<ul class="nav navbar-nav navbar-nav--buddypress logged-out">

				
				<li class="menu-item menu-item-has-children ml-0 menu-item--profile has-notifications">
					
						<a href="index.html" class="menu-item--profile__link d-none d-lg-block ">
							<span class="avatar-round-ratio"><span class="d-block pos-r h-100"><img class="img-fluid" src="http://www.gravatar.com/avatar/00000000000000000000000000000000?d=mm&amp;s=50" alt=" avatar" /></span></span>
						</a>

						<ul id="menu-user-logged-out-1" class="sub-menu"><li class="bp-menu bp-login-nav menu-item menu-item-type-custom menu-item-object-custom menu-item-108"><a href="../wp-login091f.html?redirect_to=https%3A%2F%2Fuser.pesabrands.com%2Fregister%2F">Log In</a></li>
<li class="bp-menu bp-register-nav menu-item menu-item-type-custom menu-item-object-custom menu-item-109"><a href="https://intranet.cera-theme.com/register/">Register</a></li>
</ul>				</li>
			</ul>
		
		<ul class="grimlock-login-navbar_nav_menu hamburger-navbar-nav nav navbar-nav navbar-nav--hamburger-menu">
			<li class="menu-item menu-item--login">
									<button type="button" class="btn btn-outline-primary" data-target="#grimlock-login-form-modal" data-toggle="modal">Login</button>
							</li>
							<li class="menu-item menu-item--register">
					<a href="index.html" class="btn btn-primary">Register</a>
				</li>
					</ul>

					</div><!-- .collapse -->
			</div><!-- .navbar__container -->
			</nav><!-- .navbar -->
							</div><!-- .region__container -->
			</div><!-- .region__inner -->
			</header><!-- .grimlock-region -->
				
		<div id="content" class="site-content region region--12-cols-left region--container-fluid" tabindex="-1">
			<div class="region__container">
				<div class="region__row">
		



<div class="logy logy-page-box yz-page">
	
	<div class="logy-form logy-signup-page logy-with-header logy-with-labels logy-no-icons logy-full-border logy-border-flat">
	
	
    	<header class="logy-form-header">
	    		    		<div class="logy-form-cover logy-custom-cover" style="background-image: url( ../wp-content/uploads/2020/06/big-data.jpg)">
			        <h2 class="form-cover-title">Sign Up</h2>
	    		</div>
	    	    	</header>

	    			
		<!-- 
		< ?php if ( count( $attrs['errors'] ) > 0 )  : ?>
			<div class="logy-form-message logy-error-msg">
				< ?php foreach ( $attrs['errors'] as $error_msg ) : ?>
					<p><strong>< ?php _e( 'ERROR', 'youzer' ); ?> !</strong>< ?php echo $error_msg; ?></p>
				< ?php endforeach; ?>
			</div>
		< ?php endif; ?>
 -->
		
		
		
		
	
	<div class="page" id="register-page">

<!-- 		

		action="https://user.pesabrands.com/register/" -->
		<form  name="signup_form" id="logy_signup_form" class="standard-form" method="post" enctype="multipart/form-data">

		
			<div id="template-notices" role="alert" aria-atomic="true">
				
			</div>

			
			<div class="register-section" id="basic-details-section">

				
				<div class="logy-section-title">
					<span>Account Details</span>
				</div>

				<label for="username">Username <span class="bp-required-field-label">required</span></label>
								<input type="text" name="username" id="username" value=""  autocomplete="off" autocapitalize="none"/>

				<label for="email">Email Address <span class="bp-required-field-label">required</span></label>
								<input type="email" name="email" id="email" value="" />

				<label for="password">Choose a Password <span class="bp-required-field-label">required</span></label>
								<input type="password" name="password" id="password" value="" class="password-entry"  spellcheck="false" autocomplete="off"/>
				<div id="pass-strength-result"></div>

				<label for="password_confirm">Confirm Password <span class="bp-required-field-label">required</span></label>
								<input type="password" name="signup_password_confirm" id="signup_password_confirm" value="" class="password-entry-confirm"  spellcheck="false" autocomplete="off"/>

				
			</div><!-- #basic-details-section -->

			
			
			
				
				<div class="register-section" id="profile-details-section">

					<div class="logy-section-title">
						<span>Profile Details</span>
					</div>

										
					
						<div class="editfield field_1 field_name required-field visibility-public field_type_textbox" id="name" name="name">
							<fieldset>

							
		<legend  id="name" for="name"> <!-- id="field_1-1" -->
			Name			 <span class="bp-required-field-label">required</span>		</legend>

		
		<input  id="name" name="name" type="text" value="" aria-required="true" required aria-labelledby="field_1-1" aria-describedby="field_1-3">

		
										<p class="field-visibility-settings-notoggle" id="field-visibility-settings-toggle-1">
									This field can be seen by: <span class="current-visibility-level">Everyone</span>								</p>
							
							
							</fieldset>
						</div>

					
					<input type="hidden" name="signup_profile_field_ids" id="signup_profile_field_ids" value="1" />

					
					
				</div><!-- #profile-details-section -->

				
			
			
			
			
			<input type="hidden" id="_wpnonce" name="_wpnonce" value="c40bbab052" /><input type="hidden" name="_wp_http_referer" value="/register/" />
		
		

		
				
		<div class="logy-form-actions logy-halfwidth-button logy-border-rounded">				<div class="logy-action-item logy-submit-item">
					<div class="logy-item-inner">
	           			<button type="submit" value="submit"  name="signup_submit"  >
	            				           				<span class="logy-button-title">Sign Up</span>
	           			</button>
	            	</div>
	            </div>
							<div class="logy-action-item logy-link-item">
					<div class="logy-item-inner">
	            		<a href="../login/index.php" class="logy-link-button" >
	            				           				Log In	            		</a>
	            	</div>
	            </div>
			</div>		
		
		<input type="hidden" name="yz_registration_page" value="true">

				
		</form>

	</div>

	
	</div>

</div><!-- .logy-page -->

							</div><!-- .region__row -->
			</div><!-- .region__container -->
		</div><!-- #content -->

					<div id="after_content" class="after_content site-after-content d-print-none">			<div class="widget-area">
								<section id="grimlock_section_widget-4" class="widget widget_grimlock_section">			<div  class=" grimlock-section--btn-secondary grimlock-section--we-are-all-close-together region grimlock-region grimlock-region--mt-0 grimlock-region--mb-0 grimlock-region--pt-8 grimlock-region--pb-8 region--12-cols-center region--container-classic grimlock-section section section_content_reveal" style="border-top-color:#eceeef;border-top-style:solid;border-top-width:0;border-bottom-color:#eceeef;border-bottom-style:solid;border-bottom-width:0;color:rgba(255,255,255,0.86);"  >
			<div class="region__inner" style="padding-top:8.5%;padding-bottom:8.5%;background-color:rgba(78,100,221,0.9);">
				<div class="region__container">
					<div class="region__row">
						<div class="region__col region__col--1" >
							<div class="grimlock-reveal-element grimlock-reveal-element--thumbnail" >
															</div>
						</div><!-- .region__col -->
						<div class="region__col region__col--2" >
							<div class="grimlock-reveal-element grimlock-reveal-element--content" data-grimlock-animate-scroll-reveal="{&quot;origin&quot;:&quot;bottom&quot;,&quot;distance&quot;:&quot;80px&quot;,&quot;duration&quot;:750,&quot;delay&quot;:0,&quot;rotate&quot;:{&quot;x&quot;:0,&quot;y&quot;:0,&quot;z&quot;:0},&quot;opacity&quot;:0,&quot;scale&quot;:1,&quot;easing&quot;:&quot;cubic-bezier(0.6, 0.2, 0.1, 1)&quot;,&quot;viewFactor&quot;:0.5,&quot;mobile&quot;:false,&quot;reset&quot;:false}">
									        <div class="grimlock-section__header section__header">
				
            <h2 class="grimlock-section__title section__title display-2" style="color:#ffffff;">
				<span class="widget-title">We are all close together</span>            </h2>
				        </div><!-- .section__header -->
				        <div class="grimlock-section__content section__content">
				            <div class="grimlock-section__text section__text">
				<p>A problem, a question, an emergency? <br />Do not hesitate to visit the help centre, <em>we can help you</em>.</p>
            </div>
				        </div><!-- .section__content -->
				        <div class="grimlock-section__footer section__footer">
	            
            <a href="#" class="grimlock-section__btn section__btn btn btn-secondary" >
	            <i class="cera-icon cera-life-buoy"></i> Help center            </a>
				        </div><!-- .section__footer -->
										</div>
						</div><!-- .region__col -->
					</div><!-- .region__row -->
				</div><!-- .region__container -->
			</div><!-- .region__inner -->
			</div><!-- .grimlock-section -->
		</section>			</div><!-- .widget-area -->
			</div>
					<footer id="footer" class="grimlock-footer site-footer d-print-none region grimlock-region grimlock-region--mt-0 grimlock-region--mb-0 grimlock-region--pt-2 grimlock-region--pb-2 region--6-6-cols-left-right region--container-fluid" style="border-top-color:#292e2f;border-top-style:solid;border-top-width:0;border-bottom-color:rgba(255,255,255,0);border-bottom-style:solid;border-bottom-width:0;color:#E9EFF3;"  >
			<div class="region__inner" style="padding-top:2%;padding-bottom:2%;background-color:#48465b;">
				<div class="region__container">
							<div class="region__row">
							<div class="site-info text-center w-100" role="contentinfo">
				                    <div class="site-logo navbar-brand__logo">

					            </div><!-- .site-branding -->
					RapidAfrica Limited<span class="sep"> | </span>Business Intelligence				</div><!-- .site-info -->
						</div><!-- .region__row -->
						</div><!-- .region__container -->
			</div><!-- .region__inner -->
			</footer><!-- .grimlock-region -->
		
		</div><!-- #site -->

		            <a id="back_to_top_button" class="btn-back-to-top grimlock-back_to_top_button" href="#site"><i class="fa fa-angle-up fa-2x"></i></a>
			
	</div><!-- #site-wrapper -->


		<div class="modal fade" id="grimlock-login-form-modal" tabindex="-1" role="dialog" aria-labelledby="grimlock-login-form-modal-title" aria-hidden="true">
			<div class="modal-dialog modal-dialog-centered" role="document">
				<div class="modal-content">
					<div class="modal-header p-0 m-0">
						<button type="button" class="close" data-dismiss="modal" aria-label="Close">
							<span aria-hidden="true">&times;</span>
						</button>
					</div>
					<div class="modal-body">
						<div class="logy-login-shortcode">		
		<div class="logy-form logy-login-page logy-with-header logy-no-labels logy-no-icons logy-bottom-border logy-border-rounded">

			
    	<header class="logy-form-header">
	    		    		<div class="logy-form-cover logy-custom-cover" style="background-image: url( ../wp-content/uploads/2020/06/big-data.jpg)">
			        <h2 class="form-cover-title">Login</h2>
	    		</div>
	    	    	</header>

	    					
		<!-- 
		< ?php if ( count( $attrs['errors'] ) > 0 )  : ?>
			<div class="logy-form-message logy-error-msg">
				< ?php foreach ( $attrs['errors'] as $error_msg ) : ?>
					<p><strong>< ?php _e( 'ERROR', 'youzer' ); ?> !</strong>< ?php echo $error_msg; ?></p>
				< ?php endforeach; ?>
			</div>
		< ?php endif; ?>
 -->
		
		
		
	
			<form id="logy-form" class="logy-login-form" method="post" action="https://user.pesabrands.com/wp-login.php">

				<!-- After Form Buttons -->
				
								<div class="logy-form-item">
		    		<div class="logy-item-content">
			           				           <div class="logy-field-content">
		           							    		<input type="text" name="log" autocomplete="false" placeholder="Username or Email" value="" required>
			            </div>
		        	</div>
		       	</div>
							<div class="logy-form-item">
		    		<div class="logy-item-content">
			           				           <div class="logy-field-content">
		           							    		<input type="password" name="pwd" autocomplete="false" placeholder="Password" value="" required>
			            </div>
		        	</div>
		       	</div>
					    	<div class="logy-form-item logy-remember-me">
		    		<div class="logy-item-content">
			        	<label class="logy_checkbox_field" ><input name="rememberme" type="checkbox" value="forever"><div class="logy_field_indication"></div>Remember Me</label>
		    			
		        	</div>
					<a class="logy-forgot-password" href="../lost-password/index.html">Lost password?</a>		        </div>
							<div class="logy-form-actions logy-halfwidth-button logy-border-rounded">				<div class="logy-action-item logy-submit-item">
					<div class="logy-item-inner">
	           			<button type="submit" value="submit"  name="signin_submit"  >
	            				           				<span class="logy-button-title">Log In</span>
	           			</button>
	            	</div>
	            </div>
							<div class="logy-action-item logy-link-item">
					<div class="logy-item-inner">
	            		<a href="index.html" class="logy-link-button" >
	            				           				Create New Account	            		</a>
	            	</div>
	            </div>
										</div>
				<!-- After Form Buttons -->
						
		<input type="hidden" name="yz_ajax_login_nonce" value="a3b9298d0b">

		
				<input type="hidden" name="logy-form" value="1" />

			</form>

		</div>

		</div>					</div>
				</div>
			</div>
		</div>

	
		<div class="modal fade" id="grimlock-login-form-modal" tabindex="-1" role="dialog" aria-labelledby="grimlock-login-form-modal-title" aria-hidden="true">
			<div class="modal-dialog modal-dialog-centered" role="document">
				<div class="modal-content">
					<div class="modal-header">

						<h5 class="modal-title" id="grimlock-login-form-modal-title">
															<img class="grimlock-login-form-modal-logo" src="../wp-content/uploads/2020/07/cropped-Logo-pesabrands.png" alt="Login Form Logo" />
													</h5>

						<button type="button" class="close" data-dismiss="modal" aria-label="Close">
							<span aria-hidden="true">&times;</span>
						</button>

					</div>
					<div class="modal-body">
						
		<form name="loginform" id="loginform" action="https://user.pesabrands.com/wp-login.php" method="post">
			
			<p class="login-username">
				<label for="user_login">Username or Email Address</label>
				<input type="text" name="log" id="user_login" class="input" value="" size="20" />
			</p>
			<p class="login-password">
				<label for="user_pass">Password</label>
				<input type="password" name="pwd" id="user_pass" class="input" value="" size="20" />
			</p>
			
			<p class="login-remember"><label><input name="rememberme" type="checkbox" id="rememberme" value="forever" /> Remember Me</label></p>
			<p class="login-submit">
				<input type="submit" name="wp-submit" id="wp-submit" class="button button-primary" value="Log In" />
				<input type="hidden" name="redirect_to" value="https://user.pesabrands.com/register/" />
			</p>
			
		<div class="login-footer">
			<div class="login-register"><a rel="nofollow" href="index.html">Register</a></div><div class="login-lostpassword"><a href="../shop/my-account/lost-password/index.html">Lost your password?</a></div>		</div>

		
		</form>					</div>
				</div>
			</div>
		</div>

			<!-- Memberships powered by Paid Memberships Pro v2.5.
 -->
			<script>
		( function ( body ) {
			'use strict';
			body.className = body.className.replace( /\btribe-no-js\b/, 'tribe-js' );
		} )( document.body );
		</script>
		<!-- Instagram Feed JS -->
<script type="text/javascript">
var sbiajaxurl = "../wp-admin/admin-ajax.html";
</script>

    <div class="yz-popup-login" style="opacity: 0; visibility: hidden;">
        <div class="logy-login-shortcode">		
		<div class="logy-form logy-login-page logy-with-header logy-no-labels logy-no-icons logy-bottom-border logy-border-rounded">

			
    	<header class="logy-form-header">
	    		    		<div class="logy-form-cover logy-custom-cover" style="background-image: url( ../wp-content/uploads/2020/06/big-data.jpg)">
			        <h2 class="form-cover-title">Login</h2>
	    		</div>
	    	    	</header>

	    					
		<!-- 
		< ?php if ( count( $attrs['errors'] ) > 0 )  : ?>
			<div class="logy-form-message logy-error-msg">
				< ?php foreach ( $attrs['errors'] as $error_msg ) : ?>
					<p><strong>< ?php _e( 'ERROR', 'youzer' ); ?> !</strong>< ?php echo $error_msg; ?></p>
				< ?php endforeach; ?>
			</div>
		< ?php endif; ?>
 -->
		
		
		
	
			<form id="logy-form" class="logy-login-form" method="post" action="https://user.pesabrands.com/wp-login.php">

				<!-- After Form Buttons -->
				
								<div class="logy-form-item">
		    		<div class="logy-item-content">
			           				           <div class="logy-field-content">
		           							    		<input type="text" name="log" autocomplete="false" placeholder="Username or Email" value="" required>
			            </div>
		        	</div>
		       	</div>
							<div class="logy-form-item">
		    		<div class="logy-item-content">
			           				           <div class="logy-field-content">
		           							    		<input type="password" name="pwd" autocomplete="false" placeholder="Password" value="" required>
			            </div>
		        	</div>
		       	</div>
					    	<div class="logy-form-item logy-remember-me">
		    		<div class="logy-item-content">
			        	<label class="logy_checkbox_field" ><input name="rememberme" type="checkbox" value="forever"><div class="logy_field_indication"></div>Remember Me</label>
		    			
		        	</div>
					<a class="logy-forgot-password" href="../lost-password/index.html">Lost password?</a>		        </div>
							<div class="logy-form-actions logy-halfwidth-button logy-border-rounded">				<div class="logy-action-item logy-submit-item">
					<div class="logy-item-inner">
	           			<button type="submit" value="submit"  name="signin_submit"  >
	            				           				<span class="logy-button-title">Log In</span>
	           			</button>
	            	</div>
	            </div>
							<div class="logy-action-item logy-link-item">
					<div class="logy-item-inner">
	            		<a href="index.html" class="logy-link-button" >
	            				           				Create New Account	            		</a>
	            	</div>
	            </div>
										</div>
				<!-- After Form Buttons -->
						
		<input type="hidden" name="yz_ajax_login_nonce" value="a3b9298d0b">

		
				<input type="hidden" name="logy-form" value="1" />

			</form>

		</div>

		</div>    </div>

    <script> /* <![CDATA[ */var tribe_l10n_datatables = {"aria":{"sort_ascending":": activate to sort column ascending","sort_descending":": activate to sort column descending"},"length_menu":"Show _MENU_ entries","empty_table":"No data available in table","info":"Showing _START_ to _END_ of _TOTAL_ entries","info_empty":"Showing 0 to 0 of 0 entries","info_filtered":"(filtered from _MAX_ total entries)","zero_records":"No matching records found","search":"Search:","all_selected_text":"All items on this page were selected. ","select_all_link":"Select all pages","clear_selection":"Clear Selection.","pagination":{"all":"All","next":"Next","previous":"Previous"},"select":{"rows":{"0":"","_":": Selected %d rows","1":": Selected 1 row"}},"datepicker":{"dayNames":["Sunday","Monday","Tuesday","Wednesday","Thursday","Friday","Saturday"],"dayNamesShort":["Sun","Mon","Tue","Wed","Thu","Fri","Sat"],"dayNamesMin":["S","M","T","W","T","F","S"],"monthNames":["January","February","March","April","May","June","July","August","September","October","November","December"],"monthNamesShort":["January","February","March","April","May","June","July","August","September","October","November","December"],"monthNamesMin":["Jan","Feb","Mar","Apr","May","Jun","Jul","Aug","Sep","Oct","Nov","Dec"],"nextText":"Next","prevText":"Prev","currentText":"Today","closeText":"Done","today":"Today","clear":"Clear"}};/* ]]> */ </script>	<script type="text/javascript">
		(function () {
			var c = document.body.className;
			c = c.replace(/woocommerce-no-js/, 'woocommerce-js');
			document.body.className = c;
		})()
	</script>
	<script type='text/javascript' src='../wp-includes/js/jquery/ui/core.mine899.js?ver=1.11.4' id='jquery-ui-core-js'></script>
<script type='text/javascript' src='../wp-includes/js/jquery/ui/datepicker.mine899.js?ver=1.11.4' id='jquery-ui-datepicker-js'></script>
<script type='text/javascript' id='jquery-ui-datepicker-js-after'>
jQuery(document).ready(function(jQuery){jQuery.datepicker.setDefaults({"closeText":"Close","currentText":"Today","monthNames":["January","February","March","April","May","June","July","August","September","October","November","December"],"monthNamesShort":["Jan","Feb","Mar","Apr","May","Jun","Jul","Aug","Sep","Oct","Nov","Dec"],"nextText":"Next","prevText":"Previous","dayNames":["Sunday","Monday","Tuesday","Wednesday","Thursday","Friday","Saturday"],"dayNamesShort":["Sun","Mon","Tue","Wed","Thu","Fri","Sat"],"dayNamesMin":["S","M","T","W","T","F","S"],"dateFormat":"MM d, yy","firstDay":1,"isRTL":false});});
</script>
<script type='text/javascript' src='../wp-content/plugins/booked/assets/js/spin.min7406.js?ver=2.0.1' id='booked-spin-js-js'></script>
<script type='text/javascript' src='../wp-content/plugins/booked/assets/js/spin.jquery7406.js?ver=2.0.1' id='booked-spin-jquery-js'></script>
<script type='text/javascript' src='../wp-content/plugins/booked/assets/js/tooltipster/js/jquery.tooltipster.min9b70.js?ver=3.3.0' id='booked-tooltipster-js'></script>
<script type='text/javascript' id='booked-functions-js-extra'>
/* <![CDATA[ */
var booked_js_vars = {"ajax_url":"https:\/\/user.pesabrands.com\/wp-admin\/admin-ajax.php","profilePage":"","publicAppointments":"","i18n_confirm_appt_delete":"Are you sure you want to cancel this appointment?","i18n_please_wait":"Please wait ...","i18n_wrong_username_pass":"Wrong username\/password combination.","i18n_fill_out_required_fields":"Please fill out all required fields.","i18n_guest_appt_required_fields":"Please enter your name to book an appointment.","i18n_appt_required_fields":"Please enter your name, your email address and choose a password to book an appointment.","i18n_appt_required_fields_guest":"Please fill in all \"Information\" fields.","i18n_password_reset":"Please check your email for instructions on resetting your password.","i18n_password_reset_error":"That username or email is not recognized."};
/* ]]> */
</script>
<script type='text/javascript' src='../wp-content/plugins/booked/assets/js/functionsa361.js?ver=2.3' id='booked-functions-js'></script>
<script type='text/javascript' src='../wp-content/plugins/buddypress/bp-core/js/vendor/moment-js/moment.mina086.js?ver=6.3.0' id='bp-moment-js'></script>
<script type='text/javascript' src='../wp-content/plugins/buddypress/bp-core/js/vendor/livestamp.mina086.js?ver=6.3.0' id='bp-livestamp-js'></script>
<script type='text/javascript' src='../wp-content/plugins/buddypress/bp-core/js/vendor/jquery.caret.mina086.js?ver=6.3.0' id='jquery-caret-js'></script>
<script type='text/javascript' src='../wp-content/plugins/buddypress/bp-core/js/vendor/jquery.atwho.mina086.js?ver=6.3.0' id='jquery-atwho-js'></script>
<script type='text/javascript' src='../wp-content/plugins/buddypress/bp-activity/js/mentions.mina086.js?ver=6.3.0' id='bp-mentions-js'></script>
<script type='text/javascript' src='../wp-content/plugins/coblocks/dist/js/coblocks-animation16b9.js?ver=2.5.2' id='coblocks-animation-js'></script>
<script type='text/javascript' id='contact-form-7-js-extra'>
/* <![CDATA[ */
var wpcf7 = {"apiSettings":{"root":"https:\/\/user.pesabrands.com\/wp-json\/contact-form-7\/v1","namespace":"contact-form-7\/v1"}};
/* ]]> */
</script>
<script type='text/javascript' src='../wp-content/plugins/contact-form-7/includes/js/scriptsde54.js?ver=5.3' id='contact-form-7-js'></script>
<script src='../wp-content/plugins/the-events-calendar/common/src/resources/js/underscore-before.js'></script>
<script type='text/javascript' src='../wp-includes/js/underscore.min4511.js?ver=1.8.3' id='underscore-js'></script>
<script src='../wp-content/plugins/the-events-calendar/common/src/resources/js/underscore-after.js'></script>
<script type='text/javascript' src='../wp-includes/js/backbone.min2fca.js?ver=1.4.0' id='backbone-js'></script>
<script type='text/javascript' src='../wp-content/plugins/buddypress-media/lib/media-element/wp-mediaelement.min82d0.js?ver=4.6.4' id='rt-mediaelement-wp-js'></script>
<script type='text/javascript' id='rtmedia-main-js-extra'>
/* <![CDATA[ */
var bp_template_pack = "legacy";
var RTMedia_Main_JS = {"media_delete_confirmation":"Are you sure you want to delete this media?","rtmedia_ajaxurl":"https:\/\/user.pesabrands.com\/wp-admin\/admin-ajax.php","media_delete_success":"Media file deleted successfully."};
var rtmedia_ajax_url = "index.html\/\/user.pesabrands.com\/wp-admin\/admin-ajax.php";
var rtmedia_media_slug = "media";
var rtmedia_lightbox_enabled = "1";
var rtmedia_direct_upload_enabled = "0";
var rtmedia_gallery_reload_on_upload = "1";
var rtmedia_empty_activity_msg = "Please enter some content to post.";
var rtmedia_empty_comment_msg = "Empty comment is not allowed.";
var rtmedia_media_delete_confirmation = "Are you sure you want to delete this media?";
var rtmedia_media_comment_delete_confirmation = "Are you sure you want to delete this comment?";
var rtmedia_album_delete_confirmation = "Are you sure you want to delete this Album?";
var rtmedia_drop_media_msg = "Drop files here";
var rtmedia_album_created_msg = " album created successfully.";
var rtmedia_something_wrong_msg = "Something went wrong. Please try again.";
var rtmedia_empty_album_name_msg = "Enter an album name.";
var rtmedia_max_file_msg = "Max file Size Limit : ";
var rtmedia_allowed_file_formats = "Allowed File Formats";
var rtmedia_select_all_visible = "Select All Visible";
var rtmedia_unselect_all_visible = "Unselect All Visible";
var rtmedia_no_media_selected = "Please select some media.";
var rtmedia_selected_media_delete_confirmation = "Are you sure you want to delete the selected media?";
var rtmedia_selected_media_move_confirmation = "Are you sure you want to move the selected media?";
var rtmedia_waiting_msg = "Waiting";
var rtmedia_uploaded_msg = "Uploaded";
var rtmedia_uploading_msg = "Uploading";
var rtmedia_upload_failed_msg = "Failed";
var rtmedia_close = "Close";
var rtmedia_edit = "Edit";
var rtmedia_delete = "Delete";
var rtmedia_edit_media = "Edit Media";
var rtmedia_remove_from_queue = "Remove from queue";
var rtmedia_add_more_files_msg = "Add more files";
var rtmedia_file_extension_error_msg = "File not supported";
var rtmedia_more = "more";
var rtmedia_less = "less";
var rtmedia_read_more = "Read more";
var rtmedia__show_less = "Show less";
var rtmedia_activity_text_with_attachment = "disable";
var rtmedia_delete_uploaded_media = "This media is uploaded. Are you sure you want to delete this media?";
var rtm_wp_version = "5.5.10";
var rtmedia_main_js_strings = {"rtmedia_albums":"Albums","privacy_update_success":"Privacy updated successfully.","privacy_update_error":"Couldn't change privacy, please try again."};
var rtmedia_masonry_layout = "false";
var rtmedia_media_size_config = {"photo":{"thumb":{"width":150,"height":150,"crop":1},"medium":{"width":320,"height":240,"crop":1},"large":{"width":800,"height":0,"crop":1}},"video":{"activity_media":{"width":320,"height":240},"single_media":{"width":640,"height":480}},"music":{"activity_media":{"width":320},"single_media":{"width":640}},"featured":{"default":{"width":100,"height":100,"crop":1}}};
var rtmedia_disable_media_in_commented_media = "1";
var rtmedia_disable_media_in_commented_media_text = "Adding media in Comments is not allowed";
/* ]]> */
</script>
<script type='text/javascript' src='../wp-content/plugins/buddypress-media/app/assets/js/rtmedia.min82d0.js?ver=4.6.4' id='rtmedia-main-js'></script>
<script type='text/javascript' id='rtmedia-backbone-js-extra'>
/* <![CDATA[ */
var template_url = "index.html\/\/user.pesabrands.com\/wp-admin\/admin-ajax.php?action=rtmedia_get_template&template=media-gallery-item";
var rtMedia_plupload_config = {"url":"\/register\/upload\/","runtimes":"html5,flash,html4","browse_button":"rtMedia-upload-button","container":"rtmedia-upload-container","drop_element":"drag-drop-area","filters":[{"title":"Media Files","extensions":"jpg,jpeg,png,gif,mp4,mp3"}],"max_file_size":"10240M","multipart":"1","urlstream_upload":"1","flash_swf_url":"https:\/\/user.pesabrands.com\/wp-includes\/js\/plupload\/plupload.flash.swf","silverlight_xap_url":"https:\/\/user.pesabrands.com\/wp-includes\/js\/plupload\/plupload.silverlight.xap","file_data_name":"rtmedia_file","multi_selection":"1","multipart_params":{"redirect":"no","redirection":"false","action":"wp_handle_upload","_wp_http_referer":"\/register\/","mode":"file_upload","rtmedia_upload_nonce":"7164a4c503"},"max_file_size_msg":"10240M"};
var rMedia_loading_media = "index.html\/\/user.pesabrands.com\/wp-content\/plugins\/buddypress-media\/app\/assets\/admin\/img\/boxspinner.gif";
var rtmedia_media_thumbs = {"photo":"https:\/\/user.pesabrands.com\/wp-content\/plugins\/buddypress-media\/app\/assets\/admin\/img\/image_thumb.png","video":"https:\/\/user.pesabrands.com\/wp-content\/plugins\/buddypress-media\/app\/assets\/admin\/img\/video_thumb.png","music":"https:\/\/user.pesabrands.com\/wp-content\/plugins\/buddypress-media\/app\/assets\/admin\/img\/audio_thumb.png"};
var rtmedia_set_featured_image_msg = "Featured media set successfully.";
var rtmedia_unset_featured_image_msg = "Featured media removed successfully.";
var rtmedia_edit_media_info_upload = {"title":"Title:","description":"Description:"};
var rtmedia_no_media_found = "Oops !! There's no media found for the request !!";
var bp_template_pack = "legacy";
var rtmedia_backbone_strings = {"rtm_edit_file_name":"Edit File Name"};
var rtmedia_load_more_or_pagination = "load_more";
var rtmedia_bp_enable_activity = "1";
var rtmedia_upload_progress_error_message = "There are some uploads in progress. Do you want to cancel them?";
var rtmedia_media_disabled_error_message = "Media upload is disabled. Please Enable at least one media type to proceed.";
var rtmedia_exteansions = {"photo":["jpg","jpeg","png","gif"],"video":["mp4"],"music":["mp3"]};
var rtMedia_update_plupload_comment = {"url":"\/register\/upload\/","runtimes":"html5,flash,html4","browse_button":"rtmedia-comment-media-upload","container":"rtmedia-comment-media-upload-container","filters":[{"title":"Media Files","extensions":"jpg,jpeg,png,gif,mp4,mp3"}],"max_file_size":"10240M","multipart":"1","urlstream_upload":"1","flash_swf_url":"https:\/\/user.pesabrands.com\/wp-includes\/js\/plupload\/plupload.flash.swf","silverlight_xap_url":"https:\/\/user.pesabrands.com\/wp-includes\/js\/plupload\/plupload.silverlight.xap","file_data_name":"rtmedia_file","multi_selection":"","multipart_params":{"redirect":"no","redirection":"false","action":"wp_handle_upload","_wp_http_referer":"\/register\/","mode":"file_upload","rtmedia_upload_nonce":"7164a4c503"},"max_file_size_msg":"10240M"};
var rMedia_loading_file = "index.html\/\/user.pesabrands.com\/wp-admin\/images\/loading.gif";
/* ]]> */
</script>
<script type='text/javascript' src='../wp-content/plugins/buddypress-media/app/assets/js/rtMedia.backbone82d0.js?ver=4.6.4' id='rtmedia-backbone-js'></script>
<script type='text/javascript' src='../wp-content/plugins/woocommerce/assets/js/jquery-blockui/jquery.blockUI.min44fd.js?ver=2.70' id='jquery-blockui-js'></script>
<script type='text/javascript' id='wc-add-to-cart-js-extra'>
/* <![CDATA[ */
var wc_add_to_cart_params = {"ajax_url":"\/wp-admin\/admin-ajax.php","wc_ajax_url":"\/?wc-ajax=%%endpoint%%","i18n_view_cart":"View cart","cart_url":"https:\/\/user.pesabrands.com\/shop\/cart\/","is_cart":"","cart_redirect_after_add":"no"};
/* ]]> */
</script>
<script type='text/javascript' src='../wp-content/plugins/woocommerce/assets/js/frontend/add-to-cart.mine100.js?ver=4.7.2' id='wc-add-to-cart-js'></script>
<script type='text/javascript' src='../wp-content/plugins/woocommerce/assets/js/js-cookie/js.cookie.min6b25.js?ver=2.1.4' id='js-cookie-js'></script>
<script type='text/javascript' id='woocommerce-js-extra'>
/* <![CDATA[ */
var woocommerce_params = {"ajax_url":"\/wp-admin\/admin-ajax.php","wc_ajax_url":"\/?wc-ajax=%%endpoint%%"};
/* ]]> */
</script>
<script type='text/javascript' src='../wp-content/plugins/woocommerce/assets/js/frontend/woocommerce.mine100.js?ver=4.7.2' id='woocommerce-js'></script>
<script type='text/javascript' id='wc-cart-fragments-js-extra'>
/* <![CDATA[ */
var wc_cart_fragments_params = {"ajax_url":"\/wp-admin\/admin-ajax.php","wc_ajax_url":"\/?wc-ajax=%%endpoint%%","cart_hash_key":"wc_cart_hash_55535b7c0e211ed104817cd19d358fa0","fragment_name":"wc_fragments_55535b7c0e211ed104817cd19d358fa0","request_timeout":"5000"};
/* ]]> */
</script>
<script type='text/javascript' src='../wp-content/plugins/woocommerce/assets/js/frontend/cart-fragments.mine100.js?ver=4.7.2' id='wc-cart-fragments-js'></script>
<script type='text/javascript' id='youzer-js-extra'>
/* <![CDATA[ */
var Youzer = {"unknown_error":"An unknown error occurred. Please try again later.","slideshow_auto":"1","slides_height_type":"fixed","activity_autoloader":"on","authenticating":"Authenticating ...","security_nonce":"16329f93a1","displayed_user_id":"0","ajax_url":"https:\/\/user.pesabrands.com\/wp-admin\/admin-ajax.php","save_changes":"Save Changes","thanks":"OK! Thanks","confirm":"Confirm","cancel":"Cancel","menu_title":"Menu","gotit":"Got it!","done":"Done !","ops":"Oops !","slideshow_speed":"5","assets":"https:\/\/user.pesabrands.com\/wp-content\/plugins\/youzer\/includes\/public\/assets\/","youzer_url":"https:\/\/user.pesabrands.com\/wp-content\/plugins\/youzer\/","ajax_enabled":"on","login_popup":"on"};
/* ]]> */
</script>
<script type='text/javascript' src='../wp-content/plugins/youzer/includes/public/assets/js/youzer.min0875.js?ver=2.5.0' id='youzer-js'></script>
<script type='text/javascript' id='booked-fea-js-js-extra'>
/* <![CDATA[ */
var booked_fea_vars = {"ajax_url":"https:\/\/user.pesabrands.com\/wp-admin\/admin-ajax.php","i18n_confirm_appt_delete":"Are you sure you want to cancel this appointment?","i18n_confirm_appt_approve":"Are you sure you want to approve this appointment?"};
/* ]]> */
</script>
<script type='text/javascript' src='../wp-content/plugins/booked/includes/add-ons/frontend-agents/js/functionsa361.js?ver=2.3' id='booked-fea-js-js'></script>
<script type='text/javascript' src='../wp-content/plugins/grimlock/assets/js/vendor/slideout444d.js?ver=0.1.12' id='slideout-js'></script>
<script type='text/javascript' id='grimlock-vertical-navigation-js-extra'>
/* <![CDATA[ */
var grimlock_vertical_navigation = {"on_left":"1","padding":"256"};
var grimlock_vertical_navigation = {"on_left":"1","padding":"256"};
/* ]]> */
</script>
<script type='text/javascript' src='../wp-content/plugins/grimlock/assets/js/vertical-navigation6a9f.js?ver=1.3.6' id='grimlock-vertical-navigation-js'></script>
<script type='text/javascript' src='../wp-content/plugins/grimlock/assets/js/navigation-search6a9f.js?ver=1.3.6' id='grimlock-navigation-search-js'></script>
<script type='text/javascript' src='../wp-content/plugins/grimlock/assets/js/back-to-top-button6a9f.js?ver=1.3.6' id='grimlock-back-to-top-button-js'></script>
<script type='text/javascript' src='../wp-content/plugins/grimlock-animate/assets/js/vendor/jquery.parallax.minc73a.js?ver=2.0.0-alpha' id='parallax.js-js'></script>
<script type='text/javascript' src='../wp-content/plugins/grimlock-animate/assets/js/vendor/scrollreveal6b00.js?ver=3.4.0' id='scrollreveal-js'></script>
<script type='text/javascript' src='../wp-content/plugins/grimlock-animate/assets/js/maincfa9.js?ver=1.1.2' id='grimlock-animate-js'></script>
<script type='text/javascript' src='../wp-includes/js/jquery/ui/effect.mine899.js?ver=1.11.4' id='jquery-effects-core-js'></script>
<script type='text/javascript' src='../wp-includes/js/jquery/ui/effect-drop.mine899.js?ver=1.11.4' id='jquery-effects-drop-js'></script>
<script type='text/javascript' src='../wp-content/plugins/grimlock-buddypress/assets/js/vendor/hammer.min5d0a.js?ver=2.0.7' id='hammerjs-js'></script>
<script type='text/javascript' src='../wp-content/plugins/grimlock-buddypress/assets/js/vendor/priority-nav.min0718.js?ver=1.0.12' id='priority-nav-js'></script>
<script type='text/javascript' id='grimlock-buddypress-js-extra'>
/* <![CDATA[ */
var grimlock_buddypress = {"priority_nav_dropdown_label":"More","priority_nav_dropdown_breakpoint_label":"Menu","ajax_url":"https:\/\/user.pesabrands.com\/wp-admin\/admin-ajax.php"};
/* ]]> */
</script>
<script type='text/javascript' src='../wp-content/plugins/grimlock-buddypress/assets/js/main264f.js?ver=1.3.10' id='grimlock-buddypress-js'></script>
<script type='text/javascript' src='../wp-content/themes/cera/assets/js/skip-link-focus-fix08e0.js?ver=20130115' id='cera-skip-link-focus-fix-js'></script>
<script type='text/javascript' src='../wp-content/themes/cera/assets/js/vendor/popper.minb171.js?ver=1.14.3' id='popper-js'></script>
<script type='text/javascript' src='../wp-content/themes/cera/assets/js/vendor/bootstrap.mina352.js?ver=4.1.3' id='bootstrap-js'></script>
<script type='text/javascript' id='cera-js-extra'>
/* <![CDATA[ */
var cera = {"priority_nav_dropdown_label":"More","priority_nav_dropdown_breakpoint_label_menu":"Menu","priority_nav_dropdown_breakpoint_label_categories":"Categories","priority_nav_dropdown_breakpoint_label_tags":"Tags","priority_nav_dropdown_breakpoint_label_formats":"Formats"};
/* ]]> */
</script>
<script type='text/javascript' src='../wp-content/themes/cera/assets/js/main0ba6.js?ver=1.0.6' id='cera-js'></script>
<script type='text/javascript' src='../wp-includes/js/imagesloaded.mineda1.js?ver=4.1.4' id='imagesloaded-js'></script>
<script type='text/javascript' src='../wp-includes/js/masonry.min3a05.js?ver=4.2.2' id='masonry-js'></script>
<script type='text/javascript' src='../wp-includes/js/jquery/jquery.masonry.minef70.js?ver=3.1.2b' id='jquery-masonry-js'></script>
<script type='text/javascript' src='../wp-includes/js/jquery/ui/widget.mine899.js?ver=1.11.4' id='jquery-ui-widget-js'></script>
<script type='text/javascript' src='../wp-includes/js/jquery/ui/position.mine899.js?ver=1.11.4' id='jquery-ui-position-js'></script>
<script type='text/javascript' src='../wp-includes/js/jquery/ui/menu.mine899.js?ver=1.11.4' id='jquery-ui-menu-js'></script>
<script type='text/javascript' src='../wp-includes/js/dist/dom-ready.mine02e.js?ver=93db39f6fe07a70cb9217310bec0a531' id='wp-dom-ready-js'></script>
<script type='text/javascript' id='wp-a11y-js-translations'>
( function( domain, translations ) {
	var localeData = translations.locale_data[ domain ] || translations.locale_data.messages;
	localeData[""].domain = domain;
	wp.i18n.setLocaleData( localeData, domain );
} )( "default", { "locale_data": { "messages": { "": {} } } } );
</script>
<script type='text/javascript' src='../wp-includes/js/dist/a11y.mina4f4.js?ver=f23e5b9c6e4214e0ec04d318a7c9f898' id='wp-a11y-js'></script>
<script type='text/javascript' id='jquery-ui-autocomplete-js-extra'>
/* <![CDATA[ */
var uiAutocompleteL10n = {"noResults":"No results found.","oneResult":"1 result found. Use up and down arrow keys to navigate.","manyResults":"%d results found. Use up and down arrow keys to navigate.","itemSelected":"Item selected."};
/* ]]> */
</script>
<script type='text/javascript' src='../wp-includes/js/jquery/ui/autocomplete.mine899.js?ver=1.11.4' id='jquery-ui-autocomplete-js'></script>
<script type='text/javascript' id='buddypress-global-search-js-extra'>
/* <![CDATA[ */
var BBOSS_GLOBAL_SEARCH = {"nonce":"cb3116a45d","action":"bboss_global_search_ajax","debug":"1","ajaxurl":"https:\/\/user.pesabrands.com\/wp-admin\/admin-ajax.php","loading_msg":"Loading Suggestions","enable_ajax_search":"yes","per_page":"5"};
/* ]]> */
</script>
<script type='text/javascript' src='../wp-content/plugins/buddypress-global-search/assets/js/buddypress-global-search.min1576.js?ver=1.2.1' id='buddypress-global-search-js'></script>
<script type='text/javascript' src='../wp-content/plugins/buddypress-media/lib/media-element/mediaelement-and-player.min82d0.js?ver=4.6.4' id='rt-mediaelement-js'></script>
<script type='text/javascript' src='../wp-content/plugins/buddypress-media/lib/touchswipe/jquery.touchSwipe.min82d0.js?ver=4.6.4' id='rtmedia-touchswipe-js'></script>
<script type='text/javascript' src='../wp-includes/js/wp-embed.min0225.js?ver=5.5.10' id='wp-embed-js'></script>

</body>


</html>
