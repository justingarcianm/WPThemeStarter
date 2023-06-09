<?php

// Create id attribute allowing for custom "anchor" value.
$id = 'block-type-' . $block['id'];
if (!empty($block['anchor'])) {
    $id = $block['anchor'];
}

// Create class attribute allowing for custom "className" and "align" values.
$className = 'block-type';
if (!empty($block['className'])) {
    $className .= ' ' . $block['className'];
}
if (!empty($block['align'])) {
    $className .= ' align' . $block['align'];
}

// Load values and assign defaults.

?>

<section id="<?= esc_attr($id); ?>" class="<?= esc_attr($className); ?>">
    <!--    BLOCK LAYOUT -->
</section>