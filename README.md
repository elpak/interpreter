# Interpreter — Bludit CMS Theme

**Interpreter** is a modern, dark-mode professional business theme for [Bludit CMS](https://www.bludit.com/). Originally built for a [translation agency Greek - Bulgarian](https://prevodi.elpak.net/), it is fully genericised and ready to use for any service business, agency, consultancy, or professional practice. Web developer [Panagiotis Kontogiannis](https://blog7.org/)

---

## ⚠️ Before You Use This Theme — Read First

This section covers everything you need to know before deciding to adopt Interpreter. Taking 5 minutes here will save hours of confusion later.

### What kind of website is this theme designed for?

Interpreter is purpose-built for **service businesses with a single physical location** that want a polished, professional one-page presence. It works well for:

- Translation and language agencies
- Legal, notarial, or accounting practices
- Consulting firms and professional offices
- Medical or wellness clinics
- Any business where a visitor should read, then call or email

It is **not** designed for e-commerce, portfolios with image galleries, news-heavy publications, or multi-location businesses. Forcing it into those use cases will require significant template rewriting.

---

### What this theme does and does not do out of the box

| Feature | Status |
|---|---|
| One-page homepage with anchor navigation | ✅ Included |
| Blog / article archive with pagination | ✅ Included |
| Generic inner pages (About, Privacy, Terms…) | ✅ Included |
| Custom 404 page | ✅ Included |
| Contact form | ❌ Not included — requires a Bludit plugin |
| Search functionality | ❌ Not included — requires a Bludit plugin |
| Multi-language front end | ❌ Language files are present but the homepage content is static HTML in `home.php`, not pulled from Bludit's i18n API |
| Dark / light mode toggle | ❌ Dark mode only |
| Image slideshow or gallery | ❌ Not included |
| Social media feed integration | ❌ Not included |

---

### Content you must replace before going live

The theme ships with realistic placeholder data so it renders correctly out of the box. **None of this is real — you must update every item listed below before publishing.**

**In `home.php`:**
- Phone number: `0888 123 456` — appears in the hero, the header CTA, and the bottom CTA section
- Email address: `example@gmail.com` — appears in hero, CTA buttons, footer, and contact section
- Physical address: `1594 Sofia, 1 Dondukov Blvd` — appears in the contact section
- Opening hours: `Mon-Fri: 09:00–17:00 | Sat: 10:00–14:00`
- Hero headline and description — currently written for a translation agency
- Stat card figures (`5 000+`, `300+`, `3+`, `20 years`) — update to reflect your actual business data
- All FAQ questions and answers
- Review names, initials, and review text (Maria Stoyanova, George Dimitrov) — replace or remove
- Review count (`5.0 · 127 reviews`) — update or remove
- The pill badges in the hero (`Certified Translation Agency`, `3 languages (Greek, English, Bulgarian)`, etc.)

**In `index.php`:**
- Phone number in the header CTA: `0888 123 456`
- The footer tagline: `"Professional translation services in Bulgaria"`
- Footer links to `/privacy` and `/terms` — these pages must be created in Bludit or the links removed

**In `home.php` — Google Maps embed:**
The map iframe `src` contains placeholder coordinates pointing to a location in Sofia. Replace the entire `src` URL with your own Google Maps embed URL. Get it from [Google Maps](https://maps.google.com) → share → embed a map → copy HTML → paste only the `src` value.

**In `archive.php`:**
- The blog description: `"News, tips and useful information from the world of translations services."` — update to suit your business

---

### Google Maps embed — privacy notice

This theme includes a Google Maps iframe in the contact section. When a visitor loads the page, **Google's servers receive the visitor's IP address and browser fingerprint**, even before the visitor interacts with the map. Depending on your jurisdiction (particularly within the EU under GDPR), embedding Google Maps without a consent mechanism may require a cookie notice or an alternative static map image until consent is given. You are responsible for your own compliance. Two common solutions:

- Replace the iframe with a static screenshot image that links to Google Maps (no data sent on page load)
- Use a Bludit cookie-consent plugin that loads the iframe only after consent is granted

---

### Google Fonts — privacy notice

The theme loads the Inter typeface from `fonts.googleapis.com` at page load. This also sends visitor IP addresses to Google. Under GDPR this is a known compliance issue. If this concerns you, download the Inter font files from [Google Fonts](https://fonts.google.com/specimen/Inter), host them yourself under `bl-themes/interpreter/fonts/`, and update the `@import` in `css/style.css` accordingly.

---

### Requirements

| Requirement | Minimum |
|---|---|
| Bludit CMS | v3.0 or later |
| PHP | 7.4 or later |
| Web server | Apache or Nginx (standard Bludit requirements) |
| JavaScript | ES6-capable browser (all modern browsers; IE11 not supported) |
| Internet connection for visitors | Required for Google Fonts and Google Maps to load correctly |

---

### Browser support

Tested and working in Chrome, Firefox, Safari, and Edge (current versions). Internet Explorer is not supported — the theme uses CSS Grid, CSS Custom Properties, `backdrop-filter`, and `IntersectionObserver`, none of which are available in IE11.

---

### Contact form — you need a plugin

The theme has no built-in contact form. The "Get a quote" and "Quote" buttons link directly to `mailto:` and `tel:` links. If you want a proper HTML form, install one of the following Bludit plugins:

- **Simple Form** (official Bludit plugin repository)
- **Contact Form** by Bludit community developers

After installing, embed the plugin shortcode inside any Bludit page and link to that page from the CTA buttons, or add the plugin's output directly to `home.php`.

---

### How the homepage works — important for content editing

The homepage (`home.php`) is a **static PHP template**, not a collection of Bludit pages. This means:

- You **cannot** edit the hero text, service cards, FAQ, or review section from the Bludit admin panel
- All edits to homepage content require direct access to the file `bl-themes/interpreter/home.php` via FTP, SFTP, or your hosting file manager
- Inner pages created in the Bludit admin (e.g. Privacy Policy, Terms) will use the `page.php` template and are fully editable from the admin panel
- Blog posts use the `archive.php` listing template and are fully editable from the admin panel

If you want the homepage sections to be editable from the admin panel without touching code, this theme is not the right fit without further development.

---

### Customising colours

All colours are controlled by CSS variables at the top of `css/style.css`:

```css
:root {
    --black:     #111113;   /* Page background */
    --yellow:    #FFDE42;   /* Primary accent */
    --white:     #ffffff;   /* Headings */
    --text:      #e4e4e7;   /* Body text */
    --border:    #27272a;   /* Borders & dividers */
    --footer-bg: #09090b;   /* Footer background */
}
```

Changing `--yellow` to your brand colour and `--black` to adjust the overall tone is all that is needed for a basic rebrand. No other files need to be touched.

---

## 🚀 Key Advantages

### Design & UX
- **Dark mode by default** — a sophisticated dark colour scheme (`#111113` background with `#FFDE42` yellow accent) that feels premium out of the box.
- **Single-page feel** — smooth-scroll anchor navigation keeps visitors on the homepage without page reloads, reducing bounce rate.
- **Sticky header with backdrop blur** — the navigation stays in view at all times, using a glassmorphism blur effect at 80% opacity.
- **Animated hero section** — pill badges stacked with a CSS grid layout create a modern, eye-catching hero block.
- **Animated statistics counters** — numbers count up on scroll into view using IntersectionObserver, reinforcing credibility.
- **Accessible FAQ accordion** — keyboard-navigable, ARIA-labelled, with smooth CSS max-height transitions. All items are closed by default; click a question to reveal its answer.
- **Google Maps embed** — contact section includes an embedded map with address and opening hours.
- **Social proof section** — testimonial/review cards styled as a mini Google Reviews widget.

### Technical
- **Zero JavaScript framework dependency** — pure vanilla JS (~4 KB minified), no jQuery, no React. Loads fast everywhere.
- **CSS Custom Properties (variables)** — the entire colour palette, spacing, and typography are controlled from `:root`, making re-theming a single-file edit.
- **Fluid typography with `clamp()`** — headings and spacing scale smoothly between mobile and desktop without breakpoint hacks.
- **`preconnect` font hints** — Google Fonts loads with zero layout shift thanks to `<link rel="preconnect">` hints.
- **Full Bludit plugin hook support** — `siteHead`, `siteBodyBegin`, `siteBodyEnd` hooks are wired in, so any Bludit plugin works out of the box.
- **Multi-template routing** — `index.php` conditionally includes `home.php`, `page.php`, or `archive.php`, keeping each template clean and focused.
- **Pagination ready** — `archive.php` calls `buildPaginationHTML()` when available, supporting large blogs.
- **Custom 404 page** — a branded, helpful not-found page with call-to-action buttons.

### SEO & Accessibility
- **Full Open Graph + Twitter Card meta tags** — every page generates correct `og:title`, `og:description`, `og:type`, and `og:image` (when a cover image exists).
- **Dynamic `<title>` generation** — page titles follow the pattern `Page Title – Site Name` for inner pages, and `Site Name | Tagline` for the homepage.
- **Canonical URL tag** — prevents duplicate-content penalties automatically.
- **Semantic HTML5** — `<header>`, `<main>`, `<footer>`, `<nav>`, `<article>`, `<section>`, `<time>` used correctly throughout.
- **ARIA labels** — navigation, footer nav, map iframe, FAQ buttons, and landmark roles are all labelled for screen readers.
- **`aria-expanded` on FAQ** — state is correctly toggled so assistive technologies announce open/closed status.
- **Smooth scroll** — native `scroll-behavior: smooth` enhanced with JS for full-page anchor navigation.
- **Lazy-loaded map iframe** — `loading="lazy"` on the Google Maps embed avoids blocking initial paint.
- **Output escaping** — all dynamic Bludit values are passed through `htmlspecialchars()` before output, protecting against XSS.

### Internationalisation
- **Language file support** — ships with `en.json` following the Bludit i18n standard. Add more by creating additional JSON files in `languages/`. Note that homepage section content lives in `home.php` and must be translated manually in that file.

---

## 🛠 Technologies Used

| Category | Technology |
|---|---|
| **CMS** | [Bludit CMS](https://www.bludit.com/) v3.0+ |
| **Templating** | PHP 7.4+ (native Bludit theme API) |
| **Markup** | HTML5 (semantic elements) |
| **Styling** | CSS3 — Custom Properties, Grid, Flexbox, `clamp()`, `backdrop-filter` |
| **Typography** | [Inter](https://fonts.google.com/specimen/Inter) via Google Fonts (400 / 600 / 700 / 800) |
| **Scripting** | Vanilla JavaScript (ES6+) — no frameworks or libraries |
| **Browser APIs** | `IntersectionObserver`, `classList`, `scrollIntoView`, `aria-*` |
| **SEO** | Open Graph, Twitter Card, canonical URLs, structured `<title>` |
| **Accessibility** | ARIA roles & labels, keyboard navigation, `:focus-visible`, semantic HTML |
| **Maps** | Google Maps Embed API |
| **Localisation** | Bludit JSON language files |
| **Icons / Imagery** | Unicode emoji (no icon library needed), inline SVG favicon |
| **License** | MIT |

---

## 📁 File Structure

```
interpreter/
├── index.php          # Main layout — header, footer, routing
├── home.php           # Homepage sections (hero, services, about, FAQ, contact)
├── page.php           # Generic single-page template
├── archive.php        # Blog / post-list template with pagination
├── 404.php            # Custom not-found page
├── metadata.json      # Theme metadata (author, version, Bludit compatibility)
├── css/
│   └── style.css      # All styles — fully commented
├── js/
│   └── main.js        # All scripts — mobile nav, counters, FAQ, smooth scroll
├── img/
│   └── favicon.svg    # Inline SVG favicon (no external dependency)
├── languages/
│   └── en.json        # English language strings
└── README.md          # This file
```

---

## ⚙️ Installation

1. Download and extract the `interpreter` folder.
2. Copy it to your Bludit installation: `bl-themes/interpreter/`
3. In the Bludit admin panel go to **Settings → General → Theme** and select **Interpreter**.
4. Open `home.php` and replace all placeholder contact details, copy, FAQ answers, and stat figures with your real content.
5. Open `index.php` and update the phone number in the header CTA and the footer tagline.
6. Replace the Google Maps `src` URL in `home.php` with your own embed URL.
7. Create a `privacy` page and a `terms` page in the Bludit admin, or remove those links from the footer in `index.php`.

---

## 🎨 Customisation

All colours are defined as CSS variables at the top of `css/style.css`:

```css
:root {
    --black:     #111113;   /* Page background */
    --yellow:    #FFDE42;   /* Primary accent */
    --white:     #ffffff;   /* Headings */
    --text:      #e4e4e7;   /* Body text */
    --border:    #27272a;   /* Borders & dividers */
    --footer-bg: #09090b;   /* Footer background */
}
```

Change `--yellow` to your brand colour and `--black` to adjust the overall tone. No other files need to be edited for a basic rebrand.

---

## 📄 License

MIT — free to use, modify, and redistribute for personal and commercial projects. Attribution is appreciated but not required.

30 April 2026
