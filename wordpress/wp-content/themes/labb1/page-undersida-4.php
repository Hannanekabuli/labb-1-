<?php
/* hämtar header.php */
 get_header();
?>
		<section>
				<div class="container">
					<div class="row">						
                            <?php
                            /* loopar igenom post */
                            while( have_posts()){
                                /* tar fram en post och drar bort den ur lisatan */
                                the_post();
                            ?>	
                        <div class="col-xs-12 col-sm-8 col-md-6">
							<h1>
                            <?php
                            the_title();
                            ?>
                            </h1>
                            <?php
                            the_excerpt();
                            ?>
						</div>
						<div class="col-xs-12 col-sm-4 col-md-6">
							<img src="
                            <?php
                            the_post_thumbnail_url();
                            ?>
                            " />
						</div>	
                        <?php
                        }
                        ?>
				</div>
			</section>			
<?php
/* hämtar footer.php */
 get_footer();
?>