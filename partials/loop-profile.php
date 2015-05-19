                    <div itemscope itemtype="http://schema.org/Person">
                        <div class="large-3 medium-3 small-12 columns" id="profilePicture">
                        <?php

                        $image = get_field('profile_picture');

                        if( !empty($image) ): ?>

                            <img src="<?php echo $image['url']; ?>" itemprop="image" alt="<?php echo $image['alt']; ?>" />

                        <?php endif; ?>
                        </div>
                        <div class="large-9 medium-9 small-12 columns" id="contactDetails">
                        <?php if( get_field('name') ): ?>
                        <h3 itemprop="name"><?php echo esc_html (get_field('name')); ?></h3>
                        <?php endif; ?>
                        <ul>
                         <li><?php if( get_field('email') ): ?>
                         Email: <a href="mailto:<?php echo sanitize_email (get_field('email')) ?>" itemprop="email" aria-label="Hit enter to open your email client to contact David" target="_blank"><i class="fi-mail"></i></a>
                        <?php endif; ?>
                        </li>
                         <li itemprop="telephone"><?php if( get_field('phone_number') ): ?>
                        Phone: <?php echo esc_html (get_field('phone_number')); ?>
                        <?php endif; ?>
                        </li>
                        </ul>
                        </div>
                         <p id="cv" class="large-12 medium-12 columns"><?php if( get_field('cv') ): ?>
                        <?php echo wp_kses (get_field('cv'), array('br' => array())); ?>
                        <?php endif; ?>
                        </p>
                    </div>
