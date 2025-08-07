# Design Document

## Overview

The Extendable WordPress theme is a modern, full-site editing (FSE) block theme designed as a flexible canvas for various website types. Built by Extendify, it leverages WordPress 6.6+ features and provides extensive customization through multiple style variations, block patterns, and template options.

## Architecture

### Core Theme Structure

The theme follows WordPress FSE standards with a clean, organized file structure:

```
extendable/
├── style.css (theme metadata & core styles)
├── functions.php (theme functionality)
├── theme.json (FSE configuration)
├── templates/ (page templates)
├── parts/ (template parts)
├── patterns/ (block patterns)
├── styles/ (style variations)
└── assets/ (fonts, CSS, images)
```

### Theme Foundation

- **Base Framework**: Custom FSE theme (not derived from starter themes like Underscores)
- **WordPress Version**: Requires 6.6+, tested up to 6.8
- **PHP Version**: Requires 7.4+
- **License**: GPL v2+
- **Text Domain**: extendable

## Components and Interfaces

### 1. Template System

**Core Templates:**
- `index.html` - Main blog/archive template
- `single.html` - Individual post template with comments
- `page.html` - Static page template
- `home.html` - Homepage template
- `archive.html` - Archive pages
- `search.html` - Search results
- `404.html` - Error page
- `blank.html` - Minimal template
- `no-title.html` - Template without page title
- `no-title-sticky-header.html` - Sticky header variant

**WooCommerce Templates:**
- `single-product.html`
- `archive-product.html`
- `checkout.html`

### 2. Template Parts

**Header Variations:**
- Default header (logo, title, navigation)
- Header with button
- Header with social icons
- Center logo variations
- Search bar integration
- Center navigation with social

**Footer Variations:**
- Default footer (logo, copyright, social)
- Logo and navigation
- Social icons only
- Multi-column layouts (3, 4, 6 columns)
- Address and contact information
- Dark theme variations

### 3. Block Patterns

**Categories:**
- Header patterns
- Footer patterns
- General content (CTA, three boxes)
- Post layouts (1-column)
- Hidden patterns (404, no results, search)

### 4. Style System

**Design Tokens:**
- Color palette (5 semantic colors: background, foreground, primary, secondary, tertiary)
- Typography scale (5 font sizes with fluid typography)
- Spacing scale (7 responsive spacing units)
- Custom properties for buttons, inputs, and interactive elements

**Style Variations (21 total):**
- **Bloom**: Elegant serif headings with green accent
- **Graphite**: Modern sans-serif with dark grays
- **Tokyo**: Bold Oswald headings with red accent
- **Lagoon**: Calming blue tones
- **Onyx**: High contrast dark theme
- Plus 16 additional variations covering various aesthetics

## Data Models

### Theme Configuration (theme.json)

```json
{
  "version": 3,
  "settings": {
    "color": {
      "palette": [...],
      "duotone": [...],
      "gradients": [...]
    },
    "typography": {
      "fontFamilies": [...],
      "fontSizes": [...]
    },
    "spacing": {
      "spacingSizes": [...]
    }
  },
  "styles": {...}
}
```

### Font System

**Included Fonts (25 font families):**
- Sans-serif: Inter, Hind, Montserrat, Roboto Flex, etc.
- Serif: Arsenal, Marcellus, Source Serif Pro, Noto Serif Display
- Display: Oswald, Koulen, Baloo Tamma 2
- Monospace: Space Mono, Inconsolata

### Color System

**Semantic Color Tokens:**
- `--wp--preset--color--background`
- `--wp--preset--color--foreground`
- `--wp--preset--color--primary`
- `--wp--preset--color--secondary`
- `--wp--preset--color--tertiary`

## Error Handling

### Graceful Degradation

1. **Older WordPress Versions**: Conditional CSS loading for versions ≤ 6.0.2
2. **Missing Plugins**: WooCommerce templates hidden when plugin inactive
3. **Font Loading**: Fallback font stacks for all custom fonts
4. **Reduced Motion**: Accessibility-compliant animation disabling

### Plugin Compatibility

**Conditional Asset Loading:**
- Contact Form 7 styles loaded only when blocks present
- WPForms styles loaded only when blocks present
- The Events Calendar integration with custom CSS variables

## Testing Strategy

### Browser Compatibility
- Modern browsers supporting CSS custom properties
- Responsive design testing across device sizes
- Accessibility testing for WCAG compliance

### WordPress Compatibility
- FSE feature testing across WordPress versions 6.6-6.8
- Block editor functionality validation
- Theme customizer integration testing

### Plugin Integration Testing
- WooCommerce block compatibility
- Form plugin styling consistency
- Events calendar theme integration

### Performance Testing
- Font loading optimization
- CSS delivery optimization
- Image optimization (WebP support)

## Key Features Identified

### Core WordPress Features
- Full Site Editing (FSE) support
- Block styles and editor styles
- Custom color palettes and typography
- Responsive design with fluid typography
- RTL language support
- Sticky post support
- Threaded comments
- Custom logo and menu support

### Advanced Features
- 21 style variations with distinct personalities
- 25+ web fonts with proper licensing
- Extensive block pattern library
- Multiple header and footer layouts
- WooCommerce integration
- Form plugin styling (CF7, WPForms)
- Events calendar integration
- Accessibility optimizations
- Performance optimizations

### Design System Strengths
- Consistent semantic color system
- Fluid typography with responsive scaling
- Comprehensive spacing system
- Accessible button and form styling
- Smooth scrolling and reduced motion support
- Duotone filter system for images

## Potential Areas for Improvement

### Code Quality
- Functions.php could be modularized for better organization
- Some CSS could be optimized for better performance
- Additional security hardening opportunities

### Feature Gaps
- Limited custom post type support beyond WooCommerce
- No built-in SEO optimizations
- Limited animation/interaction options
- No dark mode toggle functionality

### Performance Opportunities
- Font subsetting for better loading
- Critical CSS inlining
- Image lazy loading enhancements
- CSS purging for unused styles

### Accessibility Enhancements
- Enhanced keyboard navigation
- Better screen reader support for complex layouts
- Color contrast improvements in some style variations