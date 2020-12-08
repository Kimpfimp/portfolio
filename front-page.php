<?php
get_header();
?>

    <main>
        <?php
            if( have_posts() ){
                while( have_posts() ){
                    the_post();
                    echo '<a class="arrow"><svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="angle-double-down" class="svg-inline--fa fa-angle-double-down fa-w-10" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 512"><path fill="currentColor" d="M143 256.3L7 120.3c-9.4-9.4-9.4-24.6 0-33.9l22.6-22.6c9.4-9.4 24.6-9.4 33.9 0l96.4 96.4 96.4-96.4c9.4-9.4 24.6-9.4 33.9 0L313 86.3c9.4 9.4 9.4 24.6 0 33.9l-136 136c-9.4 9.5-24.6 9.5-34 .1zm34 192l136-136c9.4-9.4 9.4-24.6 0-33.9l-22.6-22.6c-9.4-9.4-24.6-9.4-33.9 0L160 352.1l-96.4-96.4c-9.4-9.4-24.6-9.4-33.9 0L7 278.3c-9.4 9.4-9.4 24.6 0 33.9l136 136c9.4 9.5 24.6 9.5 34 .1z"></path></svg></a>';
                    the_content();
                }
            }
        ?>

    <?php 

    $wpb_all_query = new WP_Query(array('post_type'=>'post', 'post_status'=>'publish', 'posts_per_page'=>-1, 'category_name'=>'posts')); ?>

    <?php if ( $wpb_all_query->have_posts() ) : ?>
        
    <div class="section-background">
        <div id="start"></div>
            <h1>What do you want to know?</h1>
        <ul>
            <!-- the loop -->
            <?php while ( $wpb_all_query->have_posts() ) : $wpb_all_query->the_post(); ?>
                <li class="section"><a class="card" href="<?php the_permalink(); ?>"><h3><span class="readabout">Read more <span class="about">about</span></span><span class="category"><?php the_title(); ?></span></h3><span><?php the_excerpt(); ?></span></a><?php the_post_thumbnail(); ?></li>
            <?php endwhile; ?>
            <!-- end of the loop -->
        </ul>
    </div>
    <?php wp_reset_postdata(); ?>
    <?php else : ?>
        <p><?php _e( "There's nothing here yet. Maybe come back in a while?" ); ?></p>
    <?php endif; ?>
    
</main>

<?php
get_footer();
?>