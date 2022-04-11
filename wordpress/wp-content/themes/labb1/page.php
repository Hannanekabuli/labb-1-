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
                                /* visar innehållet */
                                the_content();
                            }
                            ?>			
				</div>
			</section>			
<?php
/* hämtar footer.php */
 get_footer();
?>
