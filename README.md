# Extendable WordPress Theme

A modern, flexible Full Site Editing (FSE) block theme designed as a dynamic canvas for your next online venture. With 19 distinct style variations, extensive customization options, and comprehensive plugin integrations, Extendable is built to adapt to any vision.

## Overview

**Theme Name:** Extendable  
**Version:** 2.0.22  
**Author:** Extendify  
**License:** GPL v2+  
**Requires WordPress:** 6.6+  
**Requires PHP:** 7.4+  

Extendable is a derivative work of the Twenty Twenty-Two WordPress Theme and is distributed under the GNU GPL license.

## Key Features

### Full Site Editing (FSE) Support
- Complete block-based theme with visual editing capabilities
- Custom templates and template parts
- Global styles and theme customization
- Block patterns and style variations

### Design System
- **19 Style Variations** with distinct personalities and aesthetics
- **25+ Web Fonts** with proper licensing and optimization
- **Semantic Color System** with 5 core color tokens
- **Fluid Typography** with responsive scaling
- **Comprehensive Spacing System** with 7 responsive units

### Template System
- **11 Page Templates** including custom layouts
- **15 Template Parts** for headers and footers
- **Block Patterns** for quick content creation
- **Custom Post Type Support** (WooCommerce ready)

### Plugin Integrations
- **WooCommerce** - Complete e-commerce styling
- **Contact Form 7** - Form styling and integration
- **WPForms** - Advanced form styling
- **The Events Calendar** - Event styling and customization

### Performance & Accessibility
- Optimized font loading with display: block
- Reduced motion support for accessibility
- Semantic HTML structure
- WCAG compliance considerations
- Smooth scrolling with user preference respect

## Style Variations

Extendable includes 19 carefully crafted style variations, each with its own personality:

### Featured Styles

**Bloom** - Elegant serif headings with green accent colors and sophisticated typography  
**Graphite** - Modern sans-serif design with dark grays and clean aesthetics  
**Tokyo** - Bold Oswald headings with striking red accent and urban feel  
**Onyx** - High contrast dark theme with sophisticated color palette  
**Lagoon** - Calming blue tones with serene, professional appearance  

### Complete Style Collection

- **Bloom** - Elegant serif with green accents
- **Brisbane** - Modern Australian-inspired design
- **Cairo** - Middle Eastern influenced typography
- **Fusion Sky** - Contemporary sky-blue theme
- **Gdansk** - European-inspired clean design
- **Glasgow** - Scottish minimalist approach
- **Graphite** - Industrial modern aesthetic
- **Hong Kong** - Asian-influenced modern design
- **Kampala** - African-inspired warm tones
- **Lagoon** - Calming blue water theme
- **Odesa** - Eastern European elegance
- **Onyx** - High contrast dark theme
- **Orange** - Vibrant citrus-inspired design
- **Piraeus** - Greek port city aesthetic
- **Porto** - Portuguese coastal design
- **Rio** - Brazilian carnival colors
- **Santa Fe** - Southwestern American style
- **Thimphu** - Himalayan-inspired design
- **Tokyo** - Japanese urban aesthetic

## Templates & Template Parts

### Page Templates
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
- WooCommerce templates (when plugin active)

### Header Variations
- Default header (logo, title, navigation)
- Header with button
- Header with social icons
- Center logo variations
- Search bar integration
- Center navigation with social

### Footer Variations
- Default footer (logo, copyright, social)
- Logo and navigation
- Social icons only
- Multi-column layouts (3, 4, 6 columns)
- Address and contact information
- Dark theme variations

## Typography System

### Included Fonts (25 Font Families)

**Sans-serif Fonts:**
- Inter (default body font)
- Hind, Montserrat, Roboto Flex
- Archivo, Heebo, Jost, Karla
- Manrope, Mulish, Radio Canada, Rubik

**Serif Fonts:**
- Arsenal, Marcellus
- Source Serif Pro, Noto Serif Display

**Display Fonts:**
- Oswald, Koulen, Baloo Tamma 2, Gotu, Geom

**Monospace Fonts:**
- Space Mono, Inconsolata

### Font Sizes
- Small: 1rem
- Medium: 1.25rem  
- Large: 2.25rem (fluid)
- X-Large: 3rem (fluid)
- XX-Large: 3.75rem (fluid)

## Color System

### Semantic Color Tokens
- `--wp--preset--color--background` - Main background color
- `--wp--preset--color--foreground` - Main text color
- `--wp--preset--color--primary` - Primary brand color
- `--wp--preset--color--secondary` - Secondary brand color
- `--wp--preset--color--tertiary` - Tertiary/accent color

### Duotone Filters
- Grayscale, Primary, Secondary variations
- Background and tertiary combinations
- Custom duotone support for images

## Spacing System

Responsive spacing units using fluid design:
- **20** (0.9): 1rem
- **30** (1): min(2rem, 5vw)
- **40** (2): min(3rem, 6vw)
- **50** (3): min(4rem, 7vw)
- **60** (4): min(6rem, 8vw)
- **70** (5): min(7rem, 10vw)
- **80** (6): min(8rem, 12vw)

## Plugin Integration

### WooCommerce Support
- Complete product page styling
- Shopping cart and checkout integration
- Product grid and list layouts
- Custom WooCommerce block styling

### Form Plugin Support
- **Contact Form 7**: Conditional CSS loading and custom styling
- **WPForms**: Advanced form styling with theme integration

### Events Calendar
- The Events Calendar plugin integration
- Custom event styling and layout support

## Installation & Setup

1. **Download** the theme files
2. **Upload** to `/wp-content/themes/extendable/`
3. **Activate** the theme in WordPress admin
4. **Customize** using the Site Editor or Customizer
5. **Choose** a style variation from Appearance > Editor > Styles

## Customization Guide

### Using the Site Editor
1. Navigate to **Appearance > Editor**
2. Select **Styles** to choose a style variation
3. Use **Templates** to modify page layouts
4. Edit **Template Parts** for headers and footers
5. Add **Patterns** for quick content creation

### Custom CSS
Add custom styles through:
- **Appearance > Customize > Additional CSS**
- **Appearance > Editor > Styles > Browse styles > Edit**
- Child theme development

### Theme.json Customization
Modify `theme.json` to customize:
- Color palettes
- Typography settings
- Spacing scales
- Layout settings

## Development

### File Structure
```
extendable/
├── style.css              # Theme metadata & core styles
├── functions.php          # Theme functionality
├── theme.json            # FSE configuration
├── templates/            # Page templates
├── parts/               # Template parts
├── patterns/            # Block patterns
├── styles/              # Style variations
│   ├── colors/          # Color-only variations
│   └── typography/      # Typography-only variations
└── assets/              # Fonts, CSS, images
    ├── fonts/           # Web font files
    └── css/             # Additional stylesheets
```

### Custom Development
- Follow WordPress coding standards
- Use semantic HTML structure
- Implement accessibility best practices
- Test across multiple style variations
- Ensure responsive design compatibility

## Browser Support

- Modern browsers supporting CSS custom properties
- Responsive design across all device sizes
- Accessibility features for screen readers
- Reduced motion support for user preferences

## Performance Optimization

### Font Loading
- `font-display: block` for optimal loading
- WOFF2 format for better compression
- Subset fonts when possible

### CSS Optimization
- Conditional loading for plugin styles
- Critical CSS inlining opportunities
- Custom property system for consistency

### Image Optimization
- WebP format support
- Responsive image implementation
- Duotone filter system

## Accessibility Features

- Semantic HTML structure
- WCAG compliant color contrasts
- Keyboard navigation support
- Screen reader optimizations
- Reduced motion preferences
- Focus indicators and outlines

## Support & Documentation

### Getting Help
- WordPress.org theme support forums
- Extendify documentation
- Community resources and tutorials

### Contributing
- Follow WordPress coding standards
- Test across multiple style variations
- Ensure accessibility compliance
- Document any custom modifications

## License

This theme is licensed under the GNU General Public License v2 or later. You are free to modify and distribute this theme according to the license terms.

## Credits

- Based on Twenty Twenty-Two WordPress Theme
- Developed by Extendify
- Font licenses included in respective font directories
- Icons and graphics follow GPL licensing

---

**Ready to extend your vision?** Choose Extendable for your next WordPress project and discover the power of truly flexible design.
