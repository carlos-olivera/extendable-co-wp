# Extendable Theme Developer Guide

This comprehensive guide covers theme customization, extension, and development best practices for the Extendable WordPress theme.

## Table of Contents

1. [Theme Architecture](#theme-architecture)
2. [Customization Methods](#customization-methods)
3. [Child Theme Development](#child-theme-development)
4. [Block Pattern Creation](#block-pattern-creation)
5. [Style Variation Development](#style-variation-development)
6. [Template Customization](#template-customization)
7. [Plugin Integration](#plugin-integration)
8. [Performance Optimization](#performance-optimization)
9. [Accessibility Guidelines](#accessibility-guidelines)
10. [Troubleshooting](#troubleshooting)

## Theme Architecture

### File Structure Overview
```
extendable/
├── style.css                    # Theme metadata & core styles
├── functions.php               # Theme functionality & hooks
├── theme.json                  # FSE configuration & design tokens
├── screenshot.png              # Theme preview image
├── readme.txt                  # WordPress.org theme info
│
├── templates/                  # Page templates
│   ├── index.html             # Main blog template
│   ├── single.html            # Post template
│   ├── page.html              # Page template
│   ├── home.html              # Homepage template
│   ├── archive.html           # Archive template
│   ├── search.html            # Search results
│   ├── 404.html               # Error page
│   ├── blank.html             # Minimal template
│   ├── no-title.html          # No title template
│   ├── no-title-sticky-header.html
│   ├── single-product.html    # WooCommerce product
│   ├── archive-product.html   # WooCommerce shop
│   └── checkout.html          # WooCommerce checkout
│
├── parts/                     # Template parts
│   ├── header.html            # Default header
│   ├── header-*.html          # Header variations
│   ├── footer.html            # Default footer
│   └── footer-*.html          # Footer variations
│
├── patterns/                  # Block patterns
│   ├── header-*.php           # Header patterns
│   ├── footer-*.php           # Footer patterns
│   ├── general-*.php          # Content patterns
│   └── hidden-*.php           # Utility patterns
│
├── styles/                    # Style variations
│   ├── *.json                 # Complete style variations
│   ├── colors/                # Color-only variations
│   └── typography/            # Typography-only variations
│
└── assets/                    # Static assets
    ├── fonts/                 # Web font files
    │   └── [font-family]/     # Individual font directories
    └── css/                   # Additional stylesheets
        ├── contact-form-7.css # CF7 styling
        ├── wpforms.css        # WPForms styling
        ├── deprecate-style.css # Legacy support
        └── admin-custom.css   # Admin styling
```

### Core Files Deep Dive

#### theme.json
The heart of the FSE theme configuration:

```json
{
  "version": 3,
  "settings": {
    "color": {
      "palette": [...],      // Semantic color tokens
      "duotone": [...],      // Image filters
      "gradients": [...]     // Gradient presets
    },
    "typography": {
      "fontFamilies": [...], // Available fonts
      "fontSizes": [...],    // Size scale
      "fluid": true          // Responsive typography
    },
    "spacing": {
      "spacingSizes": [...], // Spacing scale
      "units": [...]         // Allowed units
    },
    "layout": {
      "contentSize": "42rem", // Content width
      "wideSize": "80rem"     // Wide width
    }
  },
  "styles": {
    "color": {...},          // Global colors
    "typography": {...},     // Global typography
    "elements": {...},       // Element styling
    "blocks": {...}          // Block-specific styles
  }
}
```

#### functions.php
Key functions and their purposes:

```php
// Theme setup and support
function extendable_support() {
    add_theme_support('wp-block-styles');
    add_editor_style('style.css');
}

// Stylesheet enqueuing
function extendable_styles() {
    wp_enqueue_style('extendable-style', ...);
}

// Conditional block styles
function extendable_enqueue_block_styles() {
    if (has_block('contact-form-7/contact-form-selector')) {
        wp_enqueue_style('extendable-contact-form-7-style', ...);
    }
}

// Pattern categories
function extendable_register_pattern_categories() {
    register_block_pattern_category('header', [...]);
}

// WooCommerce template filtering
function extendable_exclude_wc_block_templates($templates, $query) {
    // Hide WooCommerce templates when plugin inactive
}
```

## Customization Methods

### 1. Site Editor (Recommended)
**Path:** Appearance > Editor

**Capabilities:**
- Visual template editing
- Style variation selection
- Global styles customization
- Pattern insertion and editing
- Template part modification

**Best For:** Non-developers, visual customization

### 2. Customizer (Legacy Support)
**Path:** Appearance > Customize

**Capabilities:**
- Additional CSS injection
- Site identity settings
- Menu configuration
- Widget areas (if supported)

**Best For:** Quick CSS additions, basic customization

### 3. theme.json Modification
**Direct file editing for advanced customization**

```json
{
  "styles": {
    "color": {
      "background": "#custom-color",
      "text": "#custom-text"
    },
    "typography": {
      "fontFamily": "var(--wp--preset--font-family--custom)"
    }
  }
}
```

### 4. Custom CSS
**Multiple injection points:**

```css
/* Via Customizer Additional CSS */
.custom-class {
    color: var(--wp--preset--color--primary);
}

/* Via theme.json styles.css property */
{
  "styles": {
    "css": ".custom-class { color: red; }"
  }
}

/* Via style.css (not recommended for customizations) */
```

## Child Theme Development

### Creating a Child Theme

1. **Create child theme directory:**
```
wp-content/themes/extendable-child/
```

2. **Create style.css:**
```css
/*
Theme Name: Extendable Child
Template: extendable
Version: 1.0.0
*/

/* Custom styles here */
```

3. **Create functions.php:**
```php
<?php
function extendable_child_enqueue_styles() {
    wp_enqueue_style('extendable-parent-style', 
        get_template_directory_uri() . '/style.css'
    );
    wp_enqueue_style('extendable-child-style',
        get_stylesheet_directory_uri() . '/style.css',
        array('extendable-parent-style')
    );
}
add_action('wp_enqueue_scripts', 'extendable_child_enqueue_styles');
```

4. **Override theme.json (optional):**
```json
{
  "version": 3,
  "styles": {
    "color": {
      "background": "#custom-background"
    }
  }
}
```

### Child Theme Best Practices

- **Never modify parent theme files directly**
- **Use hooks and filters for functionality changes**
- **Override templates by copying to child theme**
- **Maintain theme.json structure when overriding**
- **Document all customizations**

## Block Pattern Creation

### Pattern File Structure
```php
<?php
/**
 * Title:       Pattern Display Name
 * Slug:        extendable/pattern-slug
 * Categories:  category-name
 * Keywords:    keyword1, keyword2
 * Description: Pattern description
 * blockTypes:  core/template-part/header
 */
?>

<!-- wp:group {"layout":{"type":"constrained"}} -->
<div class="wp-block-group">
    <!-- Pattern content here -->
</div>
<!-- /wp:group -->
```

### Custom Pattern Categories
```php
function custom_register_pattern_categories() {
    register_block_pattern_category('custom-category', array(
        'label' => __('Custom Category', 'textdomain')
    ));
}
add_action('init', 'custom_register_pattern_categories', 9);
```

### Pattern Development Tips

1. **Use semantic HTML structure**
2. **Include responsive design considerations**
3. **Utilize theme design tokens**
4. **Test across multiple style variations**
5. **Provide meaningful descriptions and keywords**

## Style Variation Development

### Creating Custom Style Variations

1. **Create JSON file in styles/ directory:**
```json
{
  "$schema": "https://schemas.wp.org/trunk/theme.json",
  "title": "Custom Style Name",
  "version": 3,
  "settings": {
    "color": {
      "palette": [
        {
          "slug": "background",
          "color": "#ffffff",
          "name": "Background"
        },
        {
          "slug": "foreground", 
          "color": "#000000",
          "name": "Foreground"
        },
        {
          "slug": "primary",
          "color": "#your-brand-color",
          "name": "Primary"
        },
        {
          "slug": "secondary",
          "color": "#secondary-color", 
          "name": "Secondary"
        },
        {
          "slug": "tertiary",
          "color": "#accent-color",
          "name": "Tertiary"
        }
      ]
    }
  },
  "styles": {
    "elements": {
      "heading": {
        "typography": {
          "fontFamily": "var(--wp--preset--font-family--your-font)"
        }
      }
    },
    "typography": {
      "fontFamily": "var(--wp--preset--font-family--body-font)"
    }
  }
}
```

2. **Test accessibility:**
```bash
# Check color contrast ratios
# Ensure WCAG AA compliance (4.5:1 for normal text)
```

3. **Validate across templates:**
- Test all page templates
- Verify block pattern compatibility
- Check plugin integration styling

### Style Variation Best Practices

- **Maintain semantic color relationships**
- **Ensure sufficient contrast ratios**
- **Test typography readability**
- **Verify button and interactive element styling**
- **Include appropriate duotone filters**

## Template Customization

### Template Hierarchy
Extendable follows WordPress FSE template hierarchy:

1. **Specific templates** (single-post.html)
2. **General templates** (single.html)
3. **Fallback templates** (index.html)

### Custom Template Creation

1. **Create HTML file in templates/ directory**
2. **Use block markup syntax**
3. **Include template parts as needed**

```html
<!-- wp:template-part {"slug":"header","tagName":"header"} /-->

<!-- wp:group {"tagName":"main","layout":{"type":"constrained"}} -->
<main class="wp-block-group">
    <!-- wp:post-title {"level":1} /-->
    <!-- wp:post-content /-->
</main>
<!-- /wp:group -->

<!-- wp:template-part {"slug":"footer","tagName":"footer"} /-->
```

### Template Part Customization

**Override by copying to child theme:**
```
child-theme/parts/header-custom.html
```

**Register in theme.json:**
```json
{
  "templateParts": [
    {
      "name": "header-custom",
      "title": "Custom Header",
      "area": "header"
    }
  ]
}
```

## Plugin Integration

### WooCommerce Integration

**Template Support:**
- `single-product.html` - Product pages
- `archive-product.html` - Shop pages  
- `checkout.html` - Checkout process

**Custom Styling:**
```css
/* WooCommerce block styling */
.wc-block-components-product-button {
    flex-direction: row;
    gap: 1rem;
}

/* Product grid customization */
.wc-block-grid__products {
    gap: var(--wp--preset--spacing--40);
}
```

### Form Plugin Integration

**Contact Form 7:**
```php
// Conditional CSS loading
if (has_block('contact-form-7/contact-form-selector')) {
    wp_enqueue_style('extendable-contact-form-7-style', 
        get_template_directory_uri() . '/assets/css/contact-form-7.css'
    );
}
```

**WPForms:**
```css
/* Custom form styling */
.wpforms-container {
    --wpforms-field-border-radius: var(--wp--custom--elements--button--border--radius);
    --wpforms-button-background-color: var(--wp--preset--color--primary);
}
```

### Events Calendar Integration
```css
/* Events calendar styling */
.tribe-events-calendar {
    --tribe-events-color-primary: var(--wp--preset--color--primary);
}
```

## Performance Optimization

### Font Loading Optimization

1. **Use font-display: block**
```css
@font-face {
    font-family: 'Custom Font';
    src: url('font.woff2') format('woff2');
    font-display: block;
}
```

2. **Implement font subsetting**
```
# Use tools like glyphhanger or fonttools
pyftsubset font.ttf --unicodes=U+0020-007F --output-file=font-subset.woff2
```

3. **Preload critical fonts**
```php
function preload_critical_fonts() {
    echo '<link rel="preload" href="' . get_template_directory_uri() . '/assets/fonts/inter/inter-variable.woff2" as="font" type="font/woff2" crossorigin>';
}
add_action('wp_head', 'preload_critical_fonts');
```

### CSS Optimization

1. **Minimize custom CSS**
2. **Use CSS custom properties**
3. **Leverage theme design tokens**
4. **Avoid !important declarations**

### Image Optimization

1. **Use WebP format when possible**
2. **Implement responsive images**
3. **Optimize duotone filters**

## Accessibility Guidelines

### Color Contrast
- **WCAG AA:** Minimum 4.5:1 for normal text
- **WCAG AAA:** Minimum 7:1 for enhanced accessibility
- **Large text:** Minimum 3:1 ratio acceptable

### Typography Accessibility
- **Minimum font size:** 16px (1rem)
- **Line height:** 1.4-1.6 for body text
- **Font weight:** Minimum 400 for readability

### Interactive Elements
```css
/* Focus indicators */
:focus {
    outline: 2px solid var(--wp--preset--color--primary);
    outline-offset: 2px;
}

/* Hover states */
button:hover {
    background-color: var(--wp--preset--color--secondary);
}
```

### Screen Reader Support
```html
<!-- Use semantic HTML -->
<nav aria-label="Main navigation">
<main id="main-content">
<h1>Page Title</h1>

<!-- Provide alt text for images -->
<img src="image.jpg" alt="Descriptive alt text">

<!-- Use ARIA labels when needed -->
<button aria-label="Close dialog">×</button>
```

## Troubleshooting

### Common Issues

**Style variations not appearing:**
1. Check JSON syntax validity
2. Verify file permissions
3. Clear caching plugins
4. Check WordPress version compatibility

**Fonts not loading:**
1. Verify font file paths
2. Check MIME type support
3. Validate font-face declarations
4. Test cross-origin policies

**Template changes not visible:**
1. Clear full-site editing cache
2. Check template hierarchy
3. Verify file naming conventions
4. Test in different browsers

**Plugin styling conflicts:**
1. Check CSS specificity
2. Use browser developer tools
3. Implement conditional loading
4. Test plugin compatibility

### Debug Mode
```php
// Enable WordPress debug mode
define('WP_DEBUG', true);
define('WP_DEBUG_LOG', true);
define('WP_DEBUG_DISPLAY', false);

// Enable script debugging
define('SCRIPT_DEBUG', true);
```

### Performance Testing
```bash
# Test Core Web Vitals
# Use tools like:
# - Google PageSpeed Insights
# - GTmetrix
# - WebPageTest
# - Lighthouse
```

## Development Workflow

### Recommended Tools
- **Code Editor:** VS Code with WordPress extensions
- **Local Development:** Local by Flywheel, XAMPP, or Docker
- **Version Control:** Git with proper .gitignore
- **Testing:** Multiple browsers and devices
- **Performance:** Lighthouse, WebPageTest

### Testing Checklist
- [ ] All style variations tested
- [ ] Responsive design verified
- [ ] Accessibility compliance checked
- [ ] Plugin compatibility confirmed
- [ ] Performance metrics acceptable
- [ ] Cross-browser compatibility verified
- [ ] WordPress coding standards followed

---

**Ready to extend Extendable?** Use this guide as your roadmap to creating powerful, accessible, and performant WordPress sites with the Extendable theme.