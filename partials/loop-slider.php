        <?php
        $firstImage = get_field('first_image');
        if( !empty($firstImage) ): ?>
        <div style="background: url('<?php echo $firstImage['url']; ?>'); background-size: cover; background-position: 100% 100%; ">
                <p><em><a href="<?php echo $firstImage['caption']; ?>" target="_blank"><?php echo $firstImage['alt']; ?></a></em></p>
        </div>
        <?php endif; ?>

        <?php
        $secondImage = get_field('second_image');
        if( !empty($secondImage) ): ?>
        <div style="background: url('<?php echo $secondImage['url']; ?>'); background-size: cover; background-position: 100% 100%;">
                 <p><em><a href="<?php echo $secondImage['caption']; ?>" target="_blank"><?php echo $secondImage['alt']; ?></a></em></p>
        </div>
        <?php endif; ?>

        <?php
        $thirdImage = get_field('third_image');
        if( !empty($thirdImage) ): ?>
        <div style="background: url('<?php echo $thirdImage['url']; ?>'); background-size: cover; background-position: 100% 100%;">
                 <p><em><a href="<?php echo $thirdImage['caption']; ?>" target="_blank"><?php echo $thirdImage['alt']; ?></a></em></p>
        </div>
        <?php endif; ?>
