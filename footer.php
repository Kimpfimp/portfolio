<footer id="footer">
    <?php if(!is_front_page() && in_category('posts') == 1): ?>
    <div class="post-nav">

    <?php $post_id = get_queried_object_id();?>
        <?php if($post_id == 105): ?>
            <a href="/contact-me" class="button">Home</a>    
        <?php endif; ?>

        
        

        <?php if(get_next_post_link() == true && !is_front_page() && get_previous_post_link() == true && $post_id != 105): 
            next_post_link('%link');
         endif; ?>

        <?php if(get_previous_post_link() == true):
            previous_post_link('%link');
        endif; ?>

        <?php if(get_previous_post_link() == false && !is_front_page()): ?>
            <a href="/contact-me" class="button last">Contact Me</a>    
        <?php endif; ?>
    <?php endif; ?>

    </div>
        <a id="to-top">
        <svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="chevron-up" class="svg-inline--fa fa-chevron-up fa-w-14" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"><path fill="currentColor" d="M240.971 130.524l194.343 194.343c9.373 9.373 9.373 24.569 0 33.941l-22.667 22.667c-9.357 9.357-24.522 9.375-33.901.04L224 227.495 69.255 381.516c-9.379 9.335-24.544 9.317-33.901-.04l-22.667-22.667c-9.373-9.373-9.373-24.569 0-33.941L207.03 130.525c9.372-9.373 24.568-9.373 33.941-.001z"></path></svg>
        </a>
    </div>
</footer>

<?php
    wp_footer();
?>
    </div>
</div>
</body>
</html>