<?php
/* läser in header.php */
get_header();
?>
		<section>
				<div class="container">
					<div class="row">
						<div id="primary" class="col-xs-12 col-md-9">
							<h1>Arkiv</h1>
                            <?php
							/* loopar igenom alla posts */
                            while( have_posts()){
								/* tar fram en post och tar bort den ur listan med posts */
                                the_post();
                            ?>
							<article>
								<img src="<?php  the_post_thumbnail_url(); ?>" alt="">
								<h2>
									<a id="titlePost" href="
									<?php
									/* länkar till postens url */  
									the_permalink_rss(); 
									?>">
									<?php 
									/* Hämtar titeln i inlägget */
									the_title(); 
									
									?> 
									</a>
									
								</h2>
								<ul class="meta">
									<li>
									<i class="fa fa-calendar"></i><?php  the_date();  ?>
									</li>
									<li>
									<i class="fa fa-user"></i><?php  the_author_posts_link();  ?>
									</li>
									<li>
									<i class="fa fa-tag"></i><?php  the_category('<a>, ');  ?>
									</li>
								</ul>
								<?php 
								/* tar fram en del av texten */
								the_excerpt();  
								?>
							</article>
                            <?php
							/* här avslutar jag loopen */
                            }
                            ?>
						</div>
						<aside id="secondary" class="col-xs-12 col-md-3">
							<div id="sidebar">
								<ul>
									<li>
										<form id="searchform" class="searchform">
											<div>
											<?php
											/* visar en sök ruta så du kan söka på sidan */
											get_search_form();
											?>
											</div>
										</form>
									</li>
								</ul>
								<ul role="navigation">
									<li class="pagenav">
										<h2>Sidor</h2>
										<?php
										$sidorArray = [
											'theme_location' => 'bloggsidesidor',
											'depth'=>'4',
										];
										/* visar sido-menyn */
										wp_nav_menu($sidorArray);
										?>
									</li>
									<li>
										<h2>Arkiv</h2>
										<?php
										$arkivArray = [
											'theme_location' => 'bloggsidearkiv'
										];
										/* visar arkiv-menyn */
										wp_nav_menu($arkivArray);
										?>
									</li>
									<li class="categories">
										<h2>Kategorier</h2>
										<?php
										$categoryArray = [
											'theme_location' => 'bloggsidekategorier'
										];
										/* visar kategori-menyn */
										wp_nav_menu($categoryArray);
										?>
									</li>
								</ul>
							</div>
						</aside>
					</div>
				</div>
			</section>
            <?php
			/* läser in footer.php */
            get_footer();
            ?>