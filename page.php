<?php
// page.php — Generic page template
// Interpreter Theme for Bludit CMS
?>

<!-- Page Hero -->
<section class="page-hero" aria-labelledby="page-hero-heading">
    <div class="container">
        <h1 id="page-hero-heading"><?php echo htmlspecialchars($page->title(), ENT_QUOTES, 'UTF-8'); ?></h1>
        <?php if ($page->description()): ?>
            <p><?php echo htmlspecialchars($page->description(), ENT_QUOTES, 'UTF-8'); ?></p>
        <?php endif; ?>
    </div>
</section>

<!-- Page Content -->
<div class="page-content">
    <div class="container">
        <div class="prose">
            <?php echo $page->content(); ?>
        </div>
    </div>
</div>
