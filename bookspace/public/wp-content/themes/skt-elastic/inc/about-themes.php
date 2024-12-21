<?php
//about theme info
add_action( 'admin_menu', 'skt_elastic_abouttheme' );
function skt_elastic_abouttheme() {    	
	add_theme_page( esc_html__('About Theme', 'skt-elastic'), esc_html__('About Theme', 'skt-elastic'), 'edit_theme_options', 'skt_elastic_guide', 'skt_elastic_mostrar_guide');   
} 
//guidline for about theme
function skt_elastic_mostrar_guide() { 
	//custom function about theme customizer
	$return = add_query_arg( array()) ;
?>
<div class="wrapper-info">
	<div class="col-left">
   		   <div class="col-left-area">
			  <?php esc_attr_e('Theme Information', 'skt-elastic'); ?>
		   </div>
          <p><?php esc_html_e('Elastic comes with in built page builder which has around 30 pre defined blocks and is multipurpose, lightweight, flexible, scalable, simple, customizable, modern, and can be used for cafe, restaurant, coaching, adventure, travels, resort, hotel, spa, fitness, gym, yoga, IT company, software, digitial, online business, enterprises and agency. It comes with a ready to import Elementor template plugin as add on which allows to import 63+ design templates for making use in home and other inner pages. Use it to create any type of business, personal, blog and eCommerce website. WooCommerce ready designs.','skt-elastic'); ?></p>
		  <a href="<?php echo esc_url(SKT_ELASTIC_SKTTHEMES_PRO_THEME_URL); ?>"><img src="<?php echo esc_url(get_template_directory_uri()); ?>/images/free-vs-pro.png" alt="" /></a>
	</div><!-- .col-left -->
	<div class="col-right">			
			<div class="centerbold">
				<hr />
				<a href="<?php echo esc_url(SKT_ELASTIC_SKTTHEMES_LIVE_DEMO); ?>" target="_blank"><?php esc_html_e('Live Demo', 'skt-elastic'); ?></a> | 
				<a href="<?php echo esc_url(SKT_ELASTIC_SKTTHEMES_PRO_THEME_URL); ?>"><?php esc_html_e('Buy Pro', 'skt-elastic'); ?></a> | 
				<a href="<?php echo esc_url(SKT_ELASTIC_SKTTHEMES_THEME_DOC); ?>" target="_blank"><?php esc_html_e('Documentation', 'skt-elastic'); ?></a>
                <div class="space5"></div>
				<hr />                
                <a href="<?php echo esc_url(SKT_ELASTIC_SKTTHEMES_THEMES); ?>" target="_blank"><img src="<?php echo esc_url(get_template_directory_uri()); ?>/images/sktskill.jpg" alt="" /></a>
			</div>		
	</div><!-- .col-right -->
</div><!-- .wrapper-info -->
<?php } ?>