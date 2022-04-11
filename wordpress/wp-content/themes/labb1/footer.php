</main>
<footer id="footer">
    <div class="container">
        <div class="row top">
            <div class="col-xs-12 col-sm-6 col-md-4">
                <?php
                dynamic_sidebar('footerleft');
                ?>
            </div>
            <div class="col-xs-12 col-sm-3 col-md-3 col-md-offset-1">
                <?php
                 dynamic_sidebar('footermiddle');   
                ?>
            </div>
            <div class="col-xs-12 col-sm-3 col-md-3 col-md-offset-1">
            <?php 
            /* hämtar menyns metadata*/
            $menuData = wp_get_nav_menu_object("Sociala medier" );
            
            ?>
                <h2>
                <?php
                /* ovan retunerar ett objekt, här hämtar vi ut namnet på menyn */
                echo $menuData->name;
                ?>
                </h2>
                <ul class="social">
                <?php
                /* wp_nav_menu tar in en array */
                $footerArray = [
                    'theme_location' => 'footermenu'
                ];
                /* visar sociala medier-menyn */
                wp_nav_menu($footerArray);
                ?>
                </ul>
            </div>
        </div>
        <div class="row bottom">
            <div class="col-xs-12">
                <p>Copyright &copy; Grupp X, 2016</p>
            </div>
        </div>
    </div>
</footer>
</div>
<?php
/* används av wordpress för att köra många olika funktioner.. */
wp_footer();
?>
</body>
</html>