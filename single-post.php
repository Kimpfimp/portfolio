<?php
get_header();
?>

<main>
    <content>
        <?php
            if( have_posts() ){
                while( have_posts() ){

                    the_post();
                        if ( in_category('posts') == 1 ) {
                            echo '<div class="post-header-container"><h1 class="post-header">';
                            the_title();
                            echo '</h1></div>';
                            echo '<div class="header-space"></div>';
                            the_content();
                        }
                        else {
                            echo '<h1 class="header">';
                            the_title();
                            echo '</h1>';
                            the_content();
                        }
                    
                }
            }
        ?>
    <content>
</main>
<?php
get_footer();
?>