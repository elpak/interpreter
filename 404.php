<?php
// 404.php — Not Found template
// Interpreter Theme for Bludit CMS
?>

<section class="container error-page" aria-labelledby="error-heading">
    <div class="error-code" aria-hidden="true">404</div>
    <h1 id="error-heading">Page Not Found</h1>
    <p>The page you are looking for might have been removed, had its name changed, or is temporarily unavailable.</p>
    <div class="cta-group" style="justify-content:center">
        <a href="<?php echo DOMAIN_BASE; ?>" class="btn">← Back to Home</a>
        <a href="<?php echo DOMAIN_BASE; ?>contact" class="btn btn-outline">Contact Us</a>
    </div>
</section>
