<?php the_content(); ?>
<p>
    <strong>Avis :</strong> 
    <?php echo get_post_meta( get_the_ID(), 'price', true ); ?>
</p>