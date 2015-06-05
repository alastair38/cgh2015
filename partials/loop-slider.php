        <?php
        $firstImage = get_field('first_image');
        if( !empty($firstImage) ): ?>
        <div style="background: url('<?php echo $firstImage['url']; ?>'); background-size: cover;">

        </div>
        <?php endif; ?>

        <?php
        $secondImage = get_field('second_image');
        if( !empty($secondImage) ): ?>
        <div style="background: url('<?php echo $secondImage['url']; ?>'); background-size: cover;">

        </div>
        <?php endif; ?>

        <?php
        $thirdImage = get_field('third_image');
        if( !empty($thirdImage) ): ?>
        <div style="background: url('<?php echo $thirdImage['url']; ?>'); background-size: cover;">

        </div>
        <?php endif; ?>
