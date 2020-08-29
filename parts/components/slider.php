          <div class="slider__item">
            <?php
            if (has_post_thumbnail()) {
              the_post_thumbnail('medium');
            } else {
              no_image();
            }
            ?>
            <div class="slider__caption--hidden">
              <div class="plan-caption">
                <span class="plan-caption__person"><?php if (get_the_author_meta('person')) echo get_the_author_meta('person'); ?> <?php if (get_the_author_meta('last_name')) echo get_the_author_meta('last_name'); ?> <?php if (get_the_author_meta('first_name')) echo get_the_author_meta('first_name'); ?> さんのおすすめ</span>
                <span class="plan-caption__title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></span>
              </div>
            </div>
          </div>