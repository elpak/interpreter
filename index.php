<!DOCTYPE html>
<html lang="<?php echo $site->locale() ?: 'en'; ?>">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="robots" content="index, follow">

    <?php
        $isPage = ($WHERE_AM_I == 'page');
        $isHome = ($WHERE_AM_I == 'home' || $WHERE_AM_I == 'frontpage');

        // SEO titles
        $pageTitle = $isPage
            ? $page->title() . ' – ' . $site->title()
            : $site->title();

        $pageDesc = ($isPage && $page->description())
            ? $page->description()
            : $site->description();

        $canonicalUrl = $isPage ? $page->permalink() : DOMAIN_BASE;

        $socialTitle = $isPage ? $page->title() : $site->title();

        // Locale for Open Graph (e.g. "en_US", "bg_BG")
        $ogLocale = str_replace('-', '_', $site->locale() ?: 'en_US');
    ?>

    <title><?php echo htmlspecialchars($pageTitle, ENT_QUOTES, 'UTF-8'); ?></title>
    <meta name="description" content="<?php echo htmlspecialchars($pageDesc, ENT_QUOTES, 'UTF-8'); ?>">
    <link rel="canonical" href="<?php echo htmlspecialchars($canonicalUrl, ENT_QUOTES, 'UTF-8'); ?>">

    <link rel="icon" type="image/svg+xml" href="<?php echo Theme::src('img/favicon.svg'); ?>">

    <meta property="og:site_name" content="<?php echo htmlspecialchars($site->title(), ENT_QUOTES, 'UTF-8'); ?>">
    <meta property="og:type" content="<?php echo $isPage ? 'article' : 'website'; ?>">
    <meta property="og:title" content="<?php echo htmlspecialchars($socialTitle, ENT_QUOTES, 'UTF-8'); ?>">
    <meta property="og:description" content="<?php echo htmlspecialchars($pageDesc, ENT_QUOTES, 'UTF-8'); ?>">
    <meta property="og:url" content="<?php echo htmlspecialchars($canonicalUrl, ENT_QUOTES, 'UTF-8'); ?>">
    <meta property="og:locale" content="<?php echo htmlspecialchars($ogLocale, ENT_QUOTES, 'UTF-8'); ?>">
    <?php if ($isPage && $page->coverImage()): ?>
    <meta property="og:image" content="<?php echo htmlspecialchars($page->coverImage(), ENT_QUOTES, 'UTF-8'); ?>">
    <?php endif; ?>

    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="<?php echo htmlspecialchars($socialTitle, ENT_QUOTES, 'UTF-8'); ?>">
    <meta name="twitter:description" content="<?php echo htmlspecialchars($pageDesc, ENT_QUOTES, 'UTF-8'); ?>">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600;700;800&display=swap" rel="stylesheet">

    <?php echo Theme::css('css/style.css'); ?>

    <?php Theme::plugins('siteHead'); ?>
</head>
<body>
    <?php Theme::plugins('siteBodyBegin'); ?>

    <a href="#main-content" class="skip-link">Skip to main content</a>

    <header class="header" role="banner">
        <nav class="container nav-wrapper" role="navigation" aria-label="Main navigation">
            <a href="<?php echo DOMAIN_BASE; ?>" class="logo" aria-label="<?php echo htmlspecialchars($site->title(), ENT_QUOTES, 'UTF-8'); ?> — Home">
                <?php echo htmlspecialchars($site->title(), ENT_QUOTES, 'UTF-8'); ?><span aria-hidden="true">.</span>
            </a>

            <ul class="nav-links" id="nav-menu" role="list">
                <li><a href="<?php echo DOMAIN_BASE; ?>" <?php echo ($isHome ? 'class="active" aria-current="page"' : ''); ?>>Home</a></li>
                <li><a href="#documents">Services</a></li>
                <li><a href="#about">About</a></li>
                <li><a href="#faq">FAQ</a></li>
                <li><a href="#location">Contact</a></li>
            </ul>

            <div class="header-cta">
                <?php
                    // TODO: Replace the phone number below with your own.
                    $phone       = '+359888123456';
                    $phoneDisplay = '0888 123 456';
                ?>
                <a href="tel:<?php echo htmlspecialchars($phone, ENT_QUOTES, 'UTF-8'); ?>" class="phone-link">
                    <span aria-hidden="true">📞</span>
                    <span><?php echo htmlspecialchars($phoneDisplay, ENT_QUOTES, 'UTF-8'); ?></span>
                </a>
                <a href="#location" class="btn">Quote</a>

                <button class="nav-toggle" id="js-nav-toggle" aria-label="Open menu" aria-expanded="false" aria-controls="nav-menu">
                    <span></span>
                    <span></span>
                    <span></span>
                </button>
            </div>
        </nav>
    </header>

    <main id="main-content">
        <?php
            if ($isHome || ($isPage && $page->uuid() == $site->homepage())) {
                $homeFile = THEME_DIR . 'home.php';
                if (file_exists($homeFile)) {
                    include($homeFile);
                } else {
                    include(THEME_DIR . 'page.php');
                }
            } elseif ($WHERE_AM_I == 'page') {
                include(THEME_DIR . 'page.php');
            } else {
                include(THEME_DIR . 'archive.php');
            }
        ?>
    </main>

    <footer class="footer" role="contentinfo">
        <div class="container footer-grid">
            <div class="footer-brand">
                <div class="logo" style="margin-bottom:1.5rem" aria-hidden="true"><?php echo htmlspecialchars($site->title(), ENT_QUOTES, 'UTF-8'); ?></div>
                <p><?php echo htmlspecialchars($site->description(), ENT_QUOTES, 'UTF-8'); ?></p>
            </div>

            <nav class="footer-links" aria-label="Footer navigation">
                <h4>Company</h4>
                <ul>
                    <li><a href="#documents">Services</a></li>
                    <li><a href="#about">About</a></li>
                    <li><a href="#faq">FAQ</a></li>
                    <li><a href="#location">Contact</a></li>
                </ul>
            </nav>

            <div class="footer-contact">
                <h4>Contact</h4>
                <?php
                    // TODO: Replace address, email and phone with your own.
                    $address      = '1594 Sofia, 1 Dondukov Blvd';
                    $email        = 'example@gmail.com';
                    $phone        = '+359888123456';
                    $phoneDisplay = '0888 123 456';
                ?>
                <p><span aria-hidden="true">📍</span> <?php echo htmlspecialchars($address, ENT_QUOTES, 'UTF-8'); ?></p>
                <p><span aria-hidden="true">✉️</span> <a href="mailto:<?php echo htmlspecialchars($email, ENT_QUOTES, 'UTF-8'); ?>"><?php echo htmlspecialchars($email, ENT_QUOTES, 'UTF-8'); ?></a></p>
                <p><span aria-hidden="true">📞</span> <a href="tel:<?php echo htmlspecialchars($phone, ENT_QUOTES, 'UTF-8'); ?>"><?php echo htmlspecialchars($phoneDisplay, ENT_QUOTES, 'UTF-8'); ?></a></p>
            </div>
        </div>

        <div class="footer-bottom container">
            <p>&copy; <?php echo date('Y'); ?> <?php echo htmlspecialchars($site->title(), ENT_QUOTES, 'UTF-8'); ?>. All Rights Reserved. | Theme by <a href="https://blog7.org" target="_blank" rel="noopener noreferrer">blog7.org</a></p>
            <p>
                <a href="<?php echo DOMAIN_BASE; ?>privacy">Privacy</a> |
                <a href="<?php echo DOMAIN_BASE; ?>terms">Terms</a>

            </p>
        </div>
    </footer>

    <?php echo Theme::js('js/main.js'); ?>

    <?php Theme::plugins('siteBodyEnd'); ?>
</body>
</html>
