<?php
// archive.php — Blog / Archive template
// Interpreter Theme for Bludit CMS
?>

<!-- Archive Header -->
<section class="archive-header" aria-labelledby="archive-heading">
    <div class="container">
        <h1 id="archive-heading">Blog</h1>
        <p>News, tips and useful information from the world of translation services.</p>
    </div>
</section>

<!-- Posts Grid -->
<div class="container">
    <?php if (isset($pages) && count($pages) > 0): ?>
        <div class="posts-grid">
            <?php foreach ($pages as $pageItem): ?>
                <article class="post-card">
                    <div class="post-card-body">
                        <p class="post-meta">
                            <time datetime="<?php echo htmlspecialchars($pageItem->dateRaw(), ENT_QUOTES, 'UTF-8'); ?>">
                                <?php echo htmlspecialchars($pageItem->date(), ENT_QUOTES, 'UTF-8'); ?>
                            </time>
                        </p>
                        <h2><a href="<?php echo htmlspecialchars($pageItem->permalink(), ENT_QUOTES, 'UTF-8'); ?>"><?php echo htmlspecialchars($pageItem->title(), ENT_QUOTES, 'UTF-8'); ?></a></h2>
                        <?php if ($pageItem->description()): ?>
                            <p><?php echo htmlspecialchars($pageItem->description(), ENT_QUOTES, 'UTF-8'); ?></p>
                        <?php endif; ?>
                        <a href="<?php echo htmlspecialchars($pageItem->permalink(), ENT_QUOTES, 'UTF-8'); ?>" class="btn btn-outline btn-sm" aria-label="Read more about <?php echo htmlspecialchars($pageItem->title(), ENT_QUOTES, 'UTF-8'); ?>">Read →</a>
                    </div>
                </article>
            <?php endforeach; ?>
        </div>

        <!-- Pagination -->
        <?php if (function_exists('buildPaginationHTML')): ?>
            <nav class="pagination" aria-label="Page navigation">
                <?php echo buildPaginationHTML(); ?>
            </nav>
        <?php endif; ?>

    <?php else: ?>
        <div class="text-center" style="padding:5rem 0;">
            <p>There are no published articles yet.</p>
            <a href="<?php echo DOMAIN_BASE; ?>" class="btn" style="margin-top:1.5rem;">Home</a>
        </div>
    <?php endif; ?>
</div>
