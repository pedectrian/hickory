	<div id="header" class="layout3">
		<div class="container">

			<div id="logo">

				<?php if(hick_option('hick_logo')) : ?>
					<a href="<?php echo home_url(); ?>"><img src="<?php echo hick_option('hick_logo'); ?>" alt="<?php bloginfo( 'name' ); ?>" /></a>
				<?php else : ?>
					<a href="<?php echo home_url(); ?>"><img src="<?php echo get_template_directory_uri(); ?>/img/logo.png" alt="<?php bloginfo( 'name' ); ?>" /></a>
				<?php endif; ?>

			</div>

			<?php if(hick_option('hick_header_ad')) : ?>
				<div class="header-ad">
					<?php echo hick_option('hick_header_ad'); ?>
				</div>
			<?php endif; ?>

		</div>

	</div>

	<div id="navigation_bar" class="layout3">

		<div class="container top">

			<div id="navigation">
				<?php wp_nav_menu( array( 'container' => false, 'theme_location' => 'primary-menu' ) ); ?>
			</div>

			<?php if(hick_option('hick_search_nav')) : ?>

				<div id="top_search">
					<a href="#"><i class="icon-search"></i></a>
				</div>
				<div class="show-search">
					<?php get_search_form(); ?>
				</div>
			<?php endif; ?>

			<?php if(hick_option('hick_header_social')) : ?>

				<div id="top_social" <?php if(!hick_option('hick_search_nav')) : ?>class="search"<?php endif; ?>>
					<?php if(hick_option('hick_facebook')) : ?><a href="http://facebook.com/<?php echo hick_option('hick_facebook'); ?>"><i class="icon-facebook"></i></a><?php endif; ?>
					<?php if(hick_option('hick_twitter')) : ?><a href="http://twitter.com/<?php echo hick_option('hick_twitter'); ?>"><i class="icon-twitter"></i></a><?php endif; ?>
					<?php if(hick_option('hick_google')) : ?><a href="http://plus.google.com/<?php echo hick_option('hick_google'); ?>"><i class="icon-google-plus"></i></a><?php endif; ?>
					<?php if(hick_option('hick_instagram')) : ?><a href="http://instagram.com/<?php echo hick_option('hick_instagram'); ?>"><i class="icon-instagram"></i></a><?php endif; ?>
					<?php if(hick_option('hick_youtube')) : ?><a href="http://www.youtube.com/user/<?php echo hick_option('hick_youtube'); ?>"><i class="icon-youtube-play"></i></a><?php endif; ?>
					<?php if(hick_option('hick_tumblr')) : ?><a href="http://<?php echo hick_option('hick_tumblr'); ?>.tumblr.com"><i class="icon-tumblr"></i></a><?php endif; ?>
					<?php if(hick_option('hick_pinterest')) : ?><a href="http://pinterest.com/<?php echo hick_option('hick_pinterest'); ?>"><i class="icon-pinterest"></i></a><?php endif; ?>
					<?php if(hick_option('hick_linkedin')) : ?><a href="<?php echo hick_option('hick_linkedin'); ?>"><i class="icon-linkedin"></i></a><?php endif; ?>
					<?php if(hick_option('hick_soundcloud')) : ?><a href="http://soundcloud.com/<?php echo hick_option('hick_soundcloud'); ?>"><i class="icon-cloud"></i></a><?php endif; ?>
					<?php if(hick_option('hick_dribbble')) : ?><a href="http://dribbble.com/<?php echo hick_option('hick_dribbble'); ?>"><i class="icon-dribbble"></i></a><?php endif; ?>
				</div>

			<?php endif; ?>

		</div>

	</div>

	<div id="wrapper">

		<div class="container layout3">
				<div class="pre-content-line">
					<div class="pull-left"><?php get_search_form(); ?></div>
					<div class='pull-right'>
							<?php echo do_shortcode( '[vital_currency_rates]' ); ?>
					</div>
				</div>
		</div>

		<div class="topads">

		<!-- Pingmedia TopLine code START-->
<script language="javascript" type="text/javascript"><!--
(function(L){if(typeof(ar_cn)=="undefined")ar_cn=1;
var S='setTimeout(function(e){if(!self.CgiHref){document.close();e=parent.document.getElementById("ar_container_"+ar_bnum);e.parentNode.removeChild(e);}},3000);',
  j=' type="text/javascript"',t=0,D=document,n=ar_cn;L+=escape(D.referrer||'unknown')+'&rnd='+Math.round(Math.random()*999999999);
function _(){if(t++<100){var F=D.getElementById('ar_container_'+n);
  if(F){try{var d=F.contentDocument||(window.ActiveXObject&&window.frames['ar_container_'+n].document);
  if(d){d.write('<sc'+'ript'+j+'>var ar_bnum='+n+';'+S+'<\/sc'+'ript><sc'+'ript'+j+' src="'+L+'"><\/sc'+'ript>');t=0}
  else setTimeout(_,100);}catch(e){try{F.src="javascript:{document.write('<sc'+'ript"+j+">var ar_bnum="+n+"; document.domain=\""
  +D.domain+"\";"+S+"<\/sc'+'ript>');document.write('<sc'+'ript"+j+" src=\""+L+"\"><\/sc'+'ript>');}";return}catch(E){}}}else setTimeout(_,100);}}
D.write('<div style="visibility:hidden;height:0px;left:-1000px;position:absolute;"><iframe id="ar_container_'+ar_cn
  +'" width=1 height=1 marginwidth=0 marginheight=0 scrolling=no frameborder=0><\/iframe><\/div><div id="ad_ph_'+ar_cn
  +'" style="display:none;"><\/div>');_();ar_cn++;
})('http://ad.adriver.ru/cgi-bin/erle.cgi?sid=202919&target=blank&bt=43&tail256=');
//--></script>
<!-- Pingmedia TopLine code END -->
		</div>
