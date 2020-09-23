<?php ?>

<div class="banner" data-parallax="scroll" data-image-src="<?php echo block_field( 'backgroung-image' ); ?>">
        <div class="banner-caption" data-aos="fade-up">
          <h2><?php block_field( 'main-heading' ); ?></h2>
          <p>
            <?php block_field( 'description' ); ?>
          </p>
          <a href="<?php block_field( 'button-link' ); ?>" class="btn btn-primary"> <?php block_field( 'button' ); ?></a>
        </div>
</div> 