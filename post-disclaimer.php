<?php
/**
 * Adds User Optional Post Disclaimer Field To Post
 * Author: Alayna Wilson
 *
 */
?>
<?php
if (is_singular([ 'post' ])) : ?>
    <!--Add a post disclaimer to bottom of post editor-->
    <div class="post-disclaimer">




     $checkbox = get_field('disclaimer');

        if($checkbox && in_array('yes', $checkbox ) ): ?>
            <div class="disclaimer-field">
            <p class="disclaimer"><?php echo the_field('disclaimer_text'); ?></p>
            </div>
        <?php endif;?>
    </div>
        <style>

            .post-disclaimer {
                display:flex;
                flex-direction:row;
                align-content:center;
                margin:45px }

            .disclaimer{
                font-size: 1rem;
                font-style: italic;
              }
    </style>

    </div>
    <?php endif; ?>
