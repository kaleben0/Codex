<?php echo UberGallery::VERSION; ?>
<div id="galleryWrapper">

    <?php if (!empty($images) && $stats['total_images'] > 0): ?>

        <ul id="galleryList" class="clearfix">

            <?php foreach ($images as $image): ?>
                <li>
                    <a href="<?php echo html_entity_decode($image['file_path']); ?>" rel="<?php echo $relText; ?>">
                        <img src="<?php echo $image['thumb_path']; ?>" alt="<?php echo $image['file_title']; ?>"/>
			<div class="pictitle"><?php echo $image['file_title']; ?><div>
			</a>
                </li>
            <?php endforeach; ?>

        </ul>

    <?php else: ?>

        <p>No images found.</p>

    <?php endif; ?>


    <div id="galleryFooter" class="clearfix">

        <?php if ($stats['total_pages'] > 1): ?>

            <ul id="galleryPagination">

                <?php foreach ($paginator as $item): ?>
                    <li class="<?php echo $item['class']; ?>">
                        <?php if (!empty($item['href'])): ?>
                            <a href="<?php echo $item['href']; ?>"><?php echo $item['text']; ?></a>
                        <?php else: ?>
                            <?php echo $item['text']; ?>
                        <?php endif; ?>
                    </li>
                <?php endforeach; ?>

            </ul>

        <?php endif; ?>


    </div>

</div>
