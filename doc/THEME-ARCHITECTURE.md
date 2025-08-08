# Extendable Theme Architecture Documentation

## Overview

The Extendable WordPress theme is a modern Full Site Editing (FSE) block theme built by Extendify. It follows WordPress 6.6+ standards and provides extensive customization through multiple style variations, block patterns, and template options.

## File Structure Analysis

### Root Level Files

#### Core Theme Files
- **`style.css`** - Theme metadata, version info, and core CSS styles
  - Contains theme header with name, version (2.0.22), author, and compatibility info
  - Includes fallback CSS variables for older WordPress versions
  - Defines global styles for smooth scrolling, font smoothing, and accessibility
  - Contains custom block styles and WooCommerce customizations

- **`functions.php`** - Theme functionality and WordPress hooks
  - Registers theme support for block styles and editor styles
  - Handles conditional CSS loading for older WordPress versions
  - Implements block-specific style loading (Contact Form 7, WPForms)
  - Registers pattern categories and excludes WooCommerce templates when plugin inactive

- **`theme.json`** - FSE configuration and design system
  - Defines color palette (5 semantic colors: background, foreground, primary, secondary, tertiary)
  - Configures typography system with 25+ font families and fluid font sizes
  - Sets up spacing system with 7 responsive spacing units
  - Defines custom templates and template parts
  - Contains comprehensive style definitions for blocks and elements

#### Documentation Files
- **`README.md`** - Theme overview and basic information
- **`DEVELOPER-GUIDE.md`** - Developer documentation and customization guide
- **`STYLE-VARIATIONS.md`** - Documentation of available style variations
- **`readme.txt`** - WordPress.org theme directory information

#### Media Files
- **`screenshot.png`** - Theme screenshot for WordPress admin
- **`index.php`** - Fallback file for non-FSE compatibility

### Directory Structure

#### `/templates/` - Page Templates
Contains HTML template files that define the structure of different page types:

**Core Templates:**
- `index.html` - Main blog/archive template (uses posts-1-col pattern)
- `single.html` - Individual post template with comments system
- `page.html` - Static page template (minimal structure)
- `home.html` - Homepage template
- `archive.html` - Archive pages template
- `search.html` - Search results template
- `404.html` - Error page template

**Specialized Templates:**
- `blank.html` - Minimal template without header/footer
- `no-title.html` - Template without page title display
- `no-title-sticky-header.html` - Sticky header variant without title

**WooCommerce Templates:**
- `single-product.html` - Individual product page
- `archive-product.html` - Product catalog/shop page
- `checkout.html` - Checkout process page

#### `/parts/` - Template Parts
Reusable template components that can be included in templates:

**Header Variations:**
- `header.html` - Default header (logo, title, navigation)
- `header-title-nav-button.html` - Header with call-to-action button
- `header-title-social-nav.html` - Header with social media links
- `header-with-center-logo-and-social.html` - Centered logo with social icons
- `header-with-search-bar.html` - Header with integrated search
- `header-with-center-logo-and-search-bar.html` - Centered logo with search
- `header-with-center-nav-and-social.html` - Centered navigation with social

**Footer Variations:**
- `footer.html` - Default footer (logo, title, social icons)
- `footer-logo-nav.html` - Footer with logo and navigation menu
- `footer-social-icons.html` - Footer with social media icons only
- `footer-with-address-four-columns.html` - Four-column footer with contact info
- `footer-with-address-dark-three-columns.html` - Dark three-column footer
- `footer-mega.html` - Large footer with multiple menu columns
- `footer-with-three-center-columns-of-menus.html` - Centered three-column menus
- `footer-with-six-columns-of-menus.html` - Six-column menu layout
- `footer-with-center-logo-and-menu.html` - Centered logo with menu
- `footer-with-site-description-and-menu.html` - Footer with site description

#### `/patterns/` - Block Patterns
Pre-designed block combinations for quick content creation:

**Header Patterns:**
- `header-default.php` - Standard header pattern
- `header-title-nav-button.php` - Header with button pattern
- `header-title-social-nav.php` - Header with social links pattern

**Footer Patterns:**
- `footer-default.php` - Standard footer pattern
- `footer-logo-desc-two-nav.php` - Footer with description and navigation
- `footer-logo-nav.php` - Simple footer with logo and nav
- `footer-call-to-action.php` - Footer with CTA section
- `footer-call-to-action-dark.php` - Dark variant of CTA footer
- `footer-offset-heading-buttons.php` - Footer with offset design elements
- `footer-offset-heading-buttons-dark.php` - Dark variant
- `footer-offset-heading-buttons-primary.php` - Primary color variant

**Content Patterns:**
- `general-cta.php` - Call-to-action section
- `general-three-boxes.php` - Three-column content boxes
- `posts-1-col.php` - Single-column post layout

**Hidden/Utility Patterns:**
- `hidden-404.php` - 404 error page content
- `hidden-no-products.php` - Empty WooCommerce catalog message
- `hidden-no-results.php` - No search results message
- `hidden-search.php` - Search form pattern
- `hidden-woo-related-products.php` - WooCommerce related products

#### `/styles/` - Style Variations
Contains JSON files defining different visual themes:

**Main Style Variations (21 total):**
- `bloom.json` - Elegant serif with green accents
- `brisbane.json` - Modern Australian-inspired design
- `cairo.json` - Middle Eastern influenced typography
- `fusion-sky.json` - Sky blue color scheme
- `gdansk.json` - European minimalist design
- `glasgow.json` - Scottish-inspired bold design
- `graphite.json` - Dark gray modern aesthetic
- `hong-kong.json` - Asian-influenced design
- `kampala.json` - African-inspired warm colors
- `lagoon.json` - Calming blue-green tones
- `odesa.json` - Eastern European design elements
- `onyx.json` - High contrast dark theme
- `orange.json` - Vibrant orange color scheme
- `piraeus.json` - Mediterranean coastal design
- `porto.json` - Portuguese-inspired design
- `rio.json` - Brazilian carnival colors
- `santa-fe.json` - Southwestern US desert tones
- `thimphu.json` - Himalayan-inspired design
- `tokyo.json` - Japanese minimalist with red accents

**Sub-directories:**
- `/colors/` - Color-only variations of main styles
- `/typography/` - Typography-focused variations with font pairings

#### `/assets/` - Static Assets
Contains fonts, CSS, and other static resources:

**`/assets/fonts/`** - Web Font Files (25+ font families)
Each font family has its own subdirectory containing:
- WOFF2 font files (optimized for web)
- OFL.txt license files
- README.txt files with font information

**Font Categories:**
- **Sans-serif:** Inter, Hind, Montserrat, Roboto Flex, Heebo, etc.
- **Serif:** Arsenal, Marcellus, Source Serif Pro, Noto Serif Display
- **Display:** Oswald, Koulen, Baloo Tamma 2, Gotu
- **Monospace:** Space Mono, Inconsolata

**`/assets/css/`** - Additional CSS Files
- `admin-custom.css` - WordPress admin customizations
- `contact-form-7.css` - Contact Form 7 plugin styling
- `deprecate-style.css` - Styles for older WordPress versions
- `wpforms.css` - WPForms plugin styling

#### `/tribe-events/` - Events Calendar Integration
- `tribe-events.css` - Custom styling for The Events Calendar plugin

## Template Hierarchy and Inheritance

### WordPress Template Hierarchy
The theme follows WordPress's standard template hierarchy:

1. **Home/Blog Page:** `home.html` → `index.html`
2. **Single Posts:** `single.html` → `index.html`
3. **Pages:** `page.html` → `index.html`
4. **Archives:** `archive.html` → `index.html`
5. **Search:** `search.html` → `index.html`
6. **404 Errors:** `404.html` → `index.html`

### Template Part Inheritance
Template parts are included using the `<!-- wp:template-part -->` block:
- Headers and footers are referenced by slug
- Multiple variations available for different layouts
- Fallback to default parts if specific variation not found

### Pattern Integration
- Patterns are included using `<!-- wp:pattern -->` blocks
- Can be inserted directly into templates or used in the block editor
- Organized by categories (header, footer, general, hidden)

## Architecture Diagram

```
Extendable Theme
├── Core Configuration
│   ├── style.css (metadata + base styles)
│   ├── functions.php (WordPress hooks + functionality)
│   └── theme.json (FSE configuration + design system)
│
├── Template System
│   ├── /templates/ (page layouts)
│   │   ├── Core Templates (index, single, page, etc.)
│   │   ├── Specialized Templates (blank, no-title variants)
│   │   └── WooCommerce Templates (product, shop, checkout)
│   │
│   └── /parts/ (reusable components)
│       ├── Header Variations (7 different layouts)
│       └── Footer Variations (10 different layouts)
│
├── Content Patterns
│   └── /patterns/ (pre-built block combinations)
│       ├── Header Patterns
│       ├── Footer Patterns
│       ├── Content Patterns
│       └── Utility Patterns
│
├── Design System
│   ├── /styles/ (21 style variations)
│   │   ├── Main Variations (complete themes)
│   │   ├── /colors/ (color-only variants)
│   │   └── /typography/ (font-focused variants)
│   │
│   └── /assets/
│       ├── /fonts/ (25+ web font families)
│       └── /css/ (plugin integrations + utilities)
│
└── Plugin Integrations
    ├── WooCommerce (templates + styling)
    ├── Contact Form 7 (conditional CSS)
    ├── WPForms (conditional CSS)
    └── The Events Calendar (custom styling)
```

## Key Architectural Features

### 1. Full Site Editing (FSE) Support
- Complete theme.json configuration
- Block-based templates and template parts
- Custom color palettes and typography scales
- Responsive spacing system

### 2. Modular Design System
- Semantic color tokens (background, foreground, primary, secondary, tertiary)
- Fluid typography with responsive scaling
- Consistent spacing system across all components
- Reusable template parts for headers and footers

### 3. Extensive Customization Options
- 21 complete style variations
- Multiple header and footer layouts
- Comprehensive block pattern library
- Plugin-specific styling integration

### 4. Performance Optimizations
- Conditional CSS loading for plugins
- WOFF2 font format for optimal loading
- Minimal base CSS with style variation overrides
- Responsive images and modern CSS features

### 5. Accessibility Features
- Reduced motion support for users with vestibular disorders
- Proper focus management and outline styles
- Semantic HTML structure in all templates
- High contrast options in style variations

This architecture provides a solid foundation for a flexible, performant, and accessible WordPress theme that can adapt to various use cases through its extensive customization options.