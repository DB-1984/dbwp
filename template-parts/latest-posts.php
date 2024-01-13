<div class="container" id="latest-posts">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <h1 class="display-5" style="margin-bottom: 50px">Latest Posts from the <u><a href="<?php echo site_url('/blog'); ?>">
                        Blog</a></u>>>></h1>
            <div class="row">
                <?php
                $args = array(
                    'posts_per_page' => 3,
                    'orderby' => 'post_date',
                    'order' => 'DESC',
                    'post_type' => 'post',
                    'post_status' => 'publish'
                );
                $query = new WP_Query($args);
                if ($query->have_posts()) :
                    while ($query->have_posts()) :
                        $query->the_post();
                ?>
                        <div class="col-md-4">
                            <div class="card">
                                <?php if (has_post_thumbnail()) : ?>
                                    <img class="card-img-top" src="<?php the_post_thumbnail_url('thumbnail'); ?>" alt="<?php the_title(); ?>">
                                <?php endif; ?>
                                <div class="card-body">
                                    <h4 class="display-8"><a href=" <?php the_permalink(); ?>" id="latest-post-link">
                                            <?php the_title(); ?>
                                        </a></h5>
                                </div>
                            </div>
                        </div>
                <?php
                    endwhile;
                endif;
                wp_reset_postdata();
                ?>
            </div>
        </div>
    </div>
</div>