<?php
$id = '';
$className = 'hero_block';
if (isset($block)) {
    $id = $block['id'];
    if (!empty($block['anchor'])) {
        $id = $block['anchor'];
    }
    if (!empty($block['className'])) {
        $className .= ' ' . $block['className'];
    }
    if (!empty($block['align'])) {
        $className .= ' align' . $block['align'];
    }
    if (function_exists('is_admin') && is_admin()) {
        if (wp_is_json_request() || (defined('REST_REQUEST') && REST_REQUEST) || (function_exists('get_current_screen') && get_current_screen()->is_block_editor())) {
            echo '<img width="100%" height="100%" src="' . get_template_directory_uri() . '/blocks/hero_block/screenshot.png">';
            return;
        }
    }
}
?>
<?php
$image = get_field('image');
$right_image = get_field('right_image');
$trustpilot_rating = get_field('trustpilot_rating');
$title = get_field('title');
$description = get_field('description');
$first_cta_button = get_field('first_cta_button');
$second_cta_button = get_field('second_cta_button');

?>
<section id="<?= esc_attr($id) ?>" class="<?= esc_attr($className) ?>">
    <div class="images-animation-wrapper">
        <?php
        $picture_class = 'cover-image';
        echo bis_get_attachment_picture(
            $image,
            [
                375 => [375, 544, 1],
                1024 => [1280, 630, 1],
                1280 => [1280, 630, 1],
                1440 => [1440, 630, 1],
            ],
            [
                'retina' => true, 'picture_class' => $picture_class,
            ]
        );
        ?>
        <?php
        $picture_class = 'right-cover-image';
        echo bis_get_attachment_picture(
            $right_image,
            [
                375 => [375, 544, 1],
                1024 => [500, 630, 1],
                1280 => [500, 630, 1],
                1440 => [500, 630, 1],
            ],
            [
                'retina' => true, 'picture_class' => $picture_class,
            ]
        );
        ?>
    </div>
    <div class="rectangle rectangle-1"></div>
    <div class="rectangle rectangle-2"></div>
    <div class="container">
        <div class="content-wrapper">
            <?php if ($trustpilot_rating): ?>
                <div class="trustpilot-logo-and-text">
                    <div class="body-2 white-color">
                        <?= $trustpilot_rating ?>
                    </div>
                    <picture class="trustpilot-logo">
                        <img src=" <?= get_template_directory_uri() . '/images/trustpilot.png' ?>" alt="trustpilot">
                    </picture>
                </div>
            <?php endif; ?>
            <?php if ($title): ?>
                <h1 class="en-h1 title white-color"><?= $title ?></h1>
            <?php endif; ?>
            <?php if ($description): ?>
                <div class="body description white-color"><?= $description ?></div>
            <?php endif; ?>
            <div class="cta-buttons">
                <?php if (!empty($first_cta_button) && is_array($first_cta_button)) { ?>
                    <a class="cta-button" href="<?= $first_cta_button['url'] ?>" target="<?= $first_cta_button['target'] ?>"><?= $first_cta_button['title'] ?></a>
                <?php } ?>
                <?php if (!empty($second_cta_button) && is_array($second_cta_button)) { ?>
                    <a class="cta-button light-cta" href="<?= $second_cta_button['url'] ?>" target="<?= $second_cta_button['target'] ?>"><?= $second_cta_button['title'] ?></a>
                <?php } ?>

            </div>
        </div>
    </div>
</section>











