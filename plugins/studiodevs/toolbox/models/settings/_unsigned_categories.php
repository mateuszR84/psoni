<?php

use RainLab\Blog\Models\Category;
use Studiodevs\Toolbox\Models\Settings;

    $categoriesWithAssignPages = Settings::getPostCategoriesPages();
    $categories = Category::get()->pluck('slug');

    $unsignedCategories = [];
    foreach ($categories as $category) {
        if (!array_key_exists($category, $categoriesWithAssignPages)) {
            $unsignedCategories[] = $category;
        }
    }
?>
<div>
    <?php if (count($unsignedCategories) == 0): ?>
        <p style="color: green;">Brak nieprzypisanych kategorii</p>
    <?php else: ?>
        <ul>
            <p>Masz kilka nieprzypisanych kategorii:</p>
            <?php foreach ($unsignedCategories as $categorySlug): ?>
                <li style="color: red;"><?= $categorySlug ?></li>
            <?php endforeach; ?>
        </ul>
    <?php endif; ?>
</div>