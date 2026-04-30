<?php
// home.php — Homepage template v1.0
// Interpreter Theme for Bludit CMS
?>

<section class="hero" aria-labelledby="hero-heading">
    <div class="container hero-layout">
        <div class="hero-content">
            <span class="badge">✦ Certified Translation Agency</span>
            <h1 id="hero-heading">
                Professional<br>
                <span class="text-yellow">language translations</span>
            </h1>
            <p class="hero-desc">
                Agency <strong>Interpreter</strong> offers licensed translations of official documents, business contracts and technical literature. We have been working quickly, accurately and confidentially since 2009.
            </p>

            <div class="hero-contacts">
                <?php
                    // TODO: Replace phone number and email below with your own.
                    $heroPhone       = '+359888123456';
                    $heroPhoneDisplay = '0888 123 456';
                    $heroEmail       = 'example@gmail.com';
                ?>
                <a href="tel:<?php echo htmlspecialchars($heroPhone, ENT_QUOTES, 'UTF-8'); ?>" class="hero-phone">
                    <span class="phone-icon" aria-hidden="true">📞</span>
                    <span><span class="contact-label">Office</span><?php echo htmlspecialchars($heroPhoneDisplay, ENT_QUOTES, 'UTF-8'); ?></span>
                </a>
                <a href="mailto:<?php echo htmlspecialchars($heroEmail, ENT_QUOTES, 'UTF-8'); ?>" class="hero-phone">
                    <span class="phone-icon" aria-hidden="true">✉️</span>
                    <span><span class="contact-label">Email:</span><?php echo htmlspecialchars($heroEmail, ENT_QUOTES, 'UTF-8'); ?></span>
                </a>
            </div>

            <div class="cta-group">
                <a href="mailto:<?php echo htmlspecialchars($heroEmail, ENT_QUOTES, 'UTF-8'); ?>" class="btn btn-outline">Get a quote</a>
                <a href="#how-we-work" class="btn btn-outline">How we work ↓</a>
            </div>
        </div>

        <div class="hero-badge-stack" aria-hidden="true">
            <div class="hero-pill">⚡ Response within 10 minutes</div>
            <div class="hero-pill">🔒 100% confidentiality</div>
            <div class="hero-pill">📜 Notarization</div>
            <div class="hero-pill">🌍 3 languages (Greek, English, Bulgarian)</div>
            <div class="hero-pill hero-pill--alt">✔ Accredited Translation Agency</div>
            <div class="hero-pill hero-pill--alt">✔ 20+ years of experience</div>
        </div>
    </div>
</section>

<div class="trust" aria-label="Key benefits">
    <div class="container trust-grid">
        <div class="trust-item"><span>✔</span> 20+ years of experience</div>
        <div class="trust-item"><span>✔</span> Notary Certification</div>
        <div class="trust-item"><span>✔</span> 100% confidentiality</div>
        <div class="trust-item"><span>✔</span> Urgent orders 24/7</div>
        <div class="trust-item"><span>✔</span> Interpreting Services</div>
    </div>
</div>

<section id="how-we-work" class="section" aria-labelledby="process-heading">
    <div class="container">
        <div class="section-header">
            <h2 id="process-heading">How we work</h2>
            <p>Transparent 4-step process — no surprises, no delays.</p>
        </div>
        <div class="process-grid">
            <div class="process-step">
                <span class="step-icon" aria-hidden="true">📨</span>
                <h3>Submit Your Document</h3>
                <p>Send us your file via email. We accept PDF, Word, photos, and hard-copy originals.</p>
            </div>
            <div class="process-step">
                <span class="step-icon" aria-hidden="true">💬</span>
                <h3>Get a Quote</h3>
                <p>Receive a specific quote with pricing and turnaround time within 10 minutes. No hidden fees.</p>
            </div>
            <div class="process-step">
                <span class="step-icon" aria-hidden="true">✍️</span>
                <h3>Translation &amp; Review</h3>
                <p>A subject-matter specialist translates your document. A second linguist reviews it for accuracy.</p>
            </div>
            <div class="process-step">
                <span class="step-icon" aria-hidden="true">📦</span>
                <h3>Receive Your Translation</h3>
                <p>We deliver the completed translation via email or by courier within the agreed timeframe.</p>
            </div>
        </div>
    </div>
</section>

<section id="about" class="about section" aria-labelledby="about-heading">
    <div class="container">
        <div class="about-grid">
            <div class="about-visual" aria-hidden="true">
                <div class="about-card-stack">
                    <div class="about-stat-card">
                        <strong data-count="5000">5 000+</strong>
                        <span>translated documents</span>
                    </div>
                    <div class="about-stat-card about-stat-card--accent">
                        <strong data-count="300">300+</strong>
                        <span>Corporate clients</span>
                    </div>
                    <div class="about-stat-card">
                        <strong>3+</strong>
                        <span>Language pairs</span>
                    </div>
                    <div class="about-stat-card about-stat-card--accent">
                        <strong>20 years</strong>
                        <span>in market</span>
                    </div>
                </div>
            </div>
            <div class="about-text">
                <span class="badge">About</span>
                <h2 id="about-heading">Lorem Ipsum</h2>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla facilisis ultrices tempus. Donec fringilla lacinia sagittis. Praesent mauris est, ornare ac aliquet id, porta eget diam. Donec venenatis finibus mattis. Maecenas pulvinar lectus eget metus suscipit euismod. Curabitur sed venenatis lectus. Maecenas ipsum est, molestie et convallis nec, feugiat eu dui.</p>
                <ul class="about-checks">
                    <li>✔ Sed ipsum lectus, pulvinar ac blandit eu</li>
                    <li>✔ Sed ipsum lectus, pulvinar ac blandit eu</li>
                    <li>✔ Sed ipsum lectus, pulvinar ac blandit eu</li>
                    <li>✔ Sed ipsum lectus, pulvinar ac blandit eu</li>
                </ul>

            </div>
        </div>
    </div>
</section>

<section id="documents" class="section" aria-labelledby="docs-heading">
    <div class="container">
        <div class="section-header">
            <h2 id="docs-heading">Most frequently translated documents</h2>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. </p>
        </div>
        <div class="docs-grid">

            <article class="doc-card">
                <div class="doc-card-icon" aria-hidden="true">📋</div>
                <div class="doc-card-body">
                    <h3>Lorem Ipsum</h3>
                    <ul>
                        <li>Sed ipsum lectus, pulvinar ac blandit eu</li>
                        <li>Sed ipsum lectus, pulvinar ac blandit eu</li>
                        <li>Sed ipsum lectus, pulvinar ac blandit eu</li>
                        <li>Sed ipsum lectus, pulvinar ac blandit eu</li>
                    </ul>
                </div>
            </article>

            <article class="doc-card">
                <div class="doc-card-icon" aria-hidden="true">⚖️</div>
                <div class="doc-card-body">
                    <h3>Lorem Ipsum</h3>
                    <ul>
                        <li>Sed ipsum lectus, pulvinar ac blandit eu</li>
                        <li>Sed ipsum lectus, pulvinar ac blandit eu</li>
                        <li>Sed ipsum lectus, pulvinar ac blandit eu</li>
                        <li>Sed ipsum lectus, pulvinar ac blandit eu</li>
                    </ul>
                </div>
            </article>

            <article class="doc-card">
                <div class="doc-card-icon" aria-hidden="true">🎓</div>
                <div class="doc-card-body">
                    <h3>Lorem Ipsum</h3>
                    <ul>
                        <li>Sed ipsum lectus, pulvinar ac blandit eu</li>
                        <li>Sed ipsum lectus, pulvinar ac blandit eu</li>
                        <li>Sed ipsum lectus, pulvinar ac blandit eu</li>
                        <li>Sed ipsum lectus, pulvinar ac blandit eu</li>
                    </ul>
                </div>
            </article>

            <article class="doc-card">
                <div class="doc-card-icon" aria-hidden="true">💼</div>
                <div class="doc-card-body">
                    <h3>Lorem Ipsum</h3>
                    <ul>
                        <li>Sed ipsum lectus, pulvinar ac blandit eu</li>
                        <li>Sed ipsum lectus, pulvinar ac blandit eu</li>
                        <li>Sed ipsum lectus, pulvinar ac blandit eu</li>
                        <li>Sed ipsum lectus, pulvinar ac blandit eu</li>
                    </ul>
                </div>
            </article>

            <article class="doc-card">
                <div class="doc-card-icon" aria-hidden="true">🏥</div>
                <div class="doc-card-body">
                    <h3>Lorem Ipsum</h3>
                    <ul>
                        <li>Sed ipsum lectus, pulvinar ac blandit eu</li>
                        <li>Sed ipsum lectus, pulvinar ac blandit eu</li>
                        <li>Sed ipsum lectus, pulvinar ac blandit eu</li>
                        <li>Sed ipsum lectus, pulvinar ac blandit eu</li>
                    </ul>
                </div>
            </article>

            <article class="doc-card">
                <div class="doc-card-icon" aria-hidden="true">⚙️</div>
                <div class="doc-card-body">
                    <h3>Lorem Ipsum</h3>
                    <ul>
                        <li>Sed ipsum lectus, pulvinar ac blandit eu</li>
                        <li>Sed ipsum lectus, pulvinar ac blandit eu</li>
                        <li>Sed ipsum lectus, pulvinar ac blandit eu</li>
                        <li>Sed ipsum lectus, pulvinar ac blandit eu</li>
                    </ul>
                </div>
            </article>

        </div>
        <p class="docs-note">Don't see the document you need? <a href="#location">Contact us</a> — we translate all types of documentation.</p>
    </div>
</section>

<section id="faq" class="faq section" aria-labelledby="faq-heading">
    <div class="container">
        <div class="section-header">
            <h2 id="faq-heading">FAQ</h2>
            <p>Donec fringilla lacinia sagittis.</p>
        </div>

        <div class="faq-list">
            <div class="faq-item">
                <button class="faq-q" aria-expanded="false" aria-controls="faq-a-1">
                    <span>How much does a translation cost?</span>
                    <span class="faq-icon" aria-hidden="true">+</span>
                </button>
                <div id="faq-a-1" class="faq-a" role="region">
                    <p>Praesent mauris est, ornare ac aliquet id, porta eget diam. Donec venenatis finibus mattis. Maecenas pulvinar lectus eget metus suscipit euismod. </p>
                </div>
            </div>

            <div class="faq-item">
                <button class="faq-q" aria-expanded="false" aria-controls="faq-a-2">
                    <span>How long does the translation take?</span>
                    <span class="faq-icon" aria-hidden="true">+</span>
                </button>
                <div id="faq-a-2" class="faq-a" role="region">
                    <p>Praesent mauris est, ornare ac aliquet id, porta eget diam. Donec venenatis finibus mattis. Maecenas pulvinar lectus eget metus suscipit euismod. </p>
                </div>
            </div>

            <div class="faq-item">
                <button class="faq-q" aria-expanded="false" aria-controls="faq-a-3">
                    <span>Is your translation recognized by official institutions?</span>
                    <span class="faq-icon" aria-hidden="true">+</span>
                </button>
                <div id="faq-a-3" class="faq-a" role="region">
                    <p>Praesent mauris est, ornare ac aliquet id, porta eget diam. Donec venenatis finibus mattis. Maecenas pulvinar lectus eget metus suscipit euismod.</p>
                </div>
            </div>

            <div class="faq-item">
                <button class="faq-q" aria-expanded="false" aria-controls="faq-a-4">
                    <span>How do I order and how do I pay?</span>
                    <span class="faq-icon" aria-hidden="true">+</span>
                </button>
                <div id="faq-a-4" class="faq-a" role="region">
                    <p>Praesent mauris est, ornare ac aliquet id, porta eget diam. Donec venenatis finibus mattis. Maecenas pulvinar lectus eget metus suscipit euismod.</p>
                </div>
            </div>

            <div class="faq-item">
                <button class="faq-q" aria-expanded="false" aria-controls="faq-a-5">
                    <span>Do you offer interpretation services?</span>
                    <span class="faq-icon" aria-hidden="true">+</span>
                </button>
                <div id="faq-a-5" class="faq-a" role="region">
                    <p>Praesent mauris est, ornare ac aliquet id, porta eget diam. Donec venenatis finibus mattis. Maecenas pulvinar lectus eget metus suscipit euismod. </p>
                </div>
            </div>
        </div>
    </div>
</section>

<section id="location" class="section" aria-labelledby="location-heading">
    <div class="container">
        <div class="section-header">
            <h2 id="location-heading">Find us & Reviews</h2>
            <p>Curabitur sed venenatis lectus Google.</p>
        </div>

        <div class="local-grid">
            <div class="map-wrapper">
                <h3 class="local-label">📍 Our location</h3>
                <div class="map-container">
                    <iframe
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2938.5!2d27.8281!3d43.5728!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x40acd9e6a1a6a6a7%3A0x0!2z0YPQuy4g0J8uINCU0LguINCf0LXRgtC60L7QsiAyQiwg0LPRgC4g0JTQvtCx0YDQuNGHIDkzMDA!5e0!3m2!1sbg!2sbg!4v1700000000000"
                        width="100%" height="100%"
                        style="border:0;" allowfullscreen="" loading="lazy"
                        referrerpolicy="no-referrer-when-downgrade"
                        title="Location in Sofia "></iframe>
                </div>
                <div class="map-address">
                    <?php
                        // TODO: Replace address, hours, phone and email below with your own.
                        $mapAddress      = '1594 Sofia, 1 Dondukov Blvd';
                        $mapHours        = 'Mon-Fri: 09:00–17:00 | Sat: 10:00–14:00';
                        $mapPhone        = '+359888123456';
                        $mapPhoneDisplay = '0888 123 456';
                        $mapEmail        = 'example@gmail.com';
                    ?>
                    <p>📍 <?php echo htmlspecialchars($mapAddress, ENT_QUOTES, 'UTF-8'); ?></p>
                    <p>⌚ <?php echo htmlspecialchars($mapHours, ENT_QUOTES, 'UTF-8'); ?></p>
                    <p>📞 Tel: <a href="tel:<?php echo htmlspecialchars($mapPhone, ENT_QUOTES, 'UTF-8'); ?>"><?php echo htmlspecialchars($mapPhoneDisplay, ENT_QUOTES, 'UTF-8'); ?></a></p>
                    <p>✉️ Email: <a href="mailto:<?php echo htmlspecialchars($mapEmail, ENT_QUOTES, 'UTF-8'); ?>"><?php echo htmlspecialchars($mapEmail, ENT_QUOTES, 'UTF-8'); ?></a></p>
                </div>
            </div>

            <div class="reviews-wrapper">
                <h3 class="local-label">⭐ Google Reviews</h3>
                <div class="reviews-summary">
                    <div class="reviews-score">
                        <span class="reviews-number">5.0</span>
                        <div>
                            <div class="reviews-stars">★★★★★</div>
                            <p>127 reviews in Google</p>
                        </div>
                    </div>
                </div>

                <div class="reviews-list">
                    <article class="review-card">
                        <div class="review-header">
                            <div class="review-avatar">MS</div>
                            <div>
                                <strong>Maria Stoyanova</strong>
                                <div class="review-stars">★★★★★</div>
                            </div>
                        </div>
                        <p>Nunc vulputate mauris ac sapien aliquet accumsan</p>
                    </article>
                    <article class="review-card">
                        <div class="review-header">
                            <div class="review-avatar">GD</div>
                            <div>
                                <strong>George Dimitrov</strong>
                                <div class="review-stars">★★★★★</div>
                            </div>
                        </div>
                        <p>Nunc vulputate mauris ac sapien aliquet accumsan. Cras nec bibendum elit, sed finibus libero.</p>
                    </article>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="cta-section section" aria-labelledby="cta-heading">
    <div class="container">
        <h2 id="cta-heading">Are you ready to get started?</h2>
        <p>Morbi urna diam, sodales vitae imperdiet eu, pulvinar in nulla.</p>
        <div class="cta-group">
            <a href="mailto:<?php echo htmlspecialchars($heroEmail, ENT_QUOTES, 'UTF-8'); ?>" class="btn btn-outline">Get Quote</a>
            <a href="tel:<?php echo htmlspecialchars($heroPhone, ENT_QUOTES, 'UTF-8'); ?>" class="btn btn-outline">📞 <?php echo htmlspecialchars($heroPhoneDisplay, ENT_QUOTES, 'UTF-8'); ?></a>
        </div>
    </div>
</section>
