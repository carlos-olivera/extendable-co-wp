# WooCommerce Integration Documentation

## Overview

The Extendable theme provides comprehensive WooCommerce integration through WordPress Full Site Editing (FSE) templates and blocks. The integration is designed to work seamlessly with WooCommerce's block-based checkout and product display system while maintaining the theme's design consistency across all style variations.

## Template Architecture

### Core WooCommerce Templates

The theme includes three dedicated WooCommerce templates that are automatically hidden when WooCommerce is not active:

#### 1. Single Product Template (`templates/single-product.html`)

**Purpose:** Individual product page layout
**Key Features:**
- Responsive two-column layout (product image gallery + product details)
- Breadcrumb navigation
- Store notices integration
- Product image gallery with 512px fixed width
- Complete product information display:
  - Product title (H1)
  - Star ratings with small font size
  - Product price with medium font size and bold styling
  - Product description/excerpt
  - Add to cart form
  - Product metadata (SKU, categories, tags)
- Product details section with minimal styling
- Related products integration via pattern
- Consistent header and footer integration

**Block Structure:**
```html
<!-- Header -->
<!-- Constrained group container -->
  <!-- Breadcrumbs -->
  <!-- Store notices -->
  <!-- Two-column layout -->
    <!-- Product image gallery (512px width) -->
    <!-- Product details column -->
      <!-- Title, rating, price, description -->
      <!-- Add to cart form -->
      <!-- Product metadata -->
  <!-- Product details section -->
  <!-- Related products pattern -->
<!-- Footer -->
```

#### 2. Product Archive Template (`templates/archive-product.html`)

**Purpose:** Shop page and product category/tag archives
**Key Features:**
- Breadcrumb navigation
- Archive title without prefix
- Store notices
- Product results count and catalog sorting
- 4-column responsive product grid (9 products per page)
- Product template with:
  - Thumbnail images with 1.5rem bottom margin
  - Product titles as H3 links (medium font size)
  - Product prices (small font size)
  - Add to cart buttons with fill style
  - 2rem spacer between products
- Pagination with centered layout
- No products found message integration

**Product Collection Configuration:**
- 9 products per page
- 4-column grid layout with shrinking columns
- Includes all stock statuses (in stock, out of stock, on backorder)
- Alphabetical ordering by title
- Responsive design with column shrinking

#### 3. Checkout Template (`templates/checkout.html`)

**Purpose:** WooCommerce checkout page
**Key Features:**
- Minimal, focused design
- Store notices integration
- Page content wrapper for checkout-specific functionality
- Constrained layout with wide alignment
- Post title and content integration
- Consistent header and footer

### Template Conditional Loading

The theme implements intelligent template management:

**PHP Function (`functions.php`):**
```php
function extendable_exclude_wc_block_templates( $templates, $query ) {
    if ( ! class_exists( 'WooCommerce' ) ) {
        $wc_template_slugs = array( 'checkout', 'single-product', 'archive-product' );
        foreach ( $templates as $key => $template ) {
            if ( isset( $template->slug ) && in_array( $template->slug, $wc_template_slugs, true ) ) {
                unset( $templates[ $key ] );
            }
        }
    }
    return $templates;
}
```

**Admin CSS Hiding (`assets/css/admin-custom.css`):**
- Hides WooCommerce template cards in Site Editor when plugin is inactive
- Targets both grid and table views
- Uses CSS `:has()` selector for modern browser support
- Handles URL encoding variations

## Block Patterns

### Related Products Pattern (`patterns/hidden-woo-related-products.php`)

**Purpose:** Display related products on single product pages
**Configuration:**
- 5-column grid layout
- Internationalized "Related products" heading
- Product template includes:
  - Thumbnail images
  - Product titles as H3 links
  - Product prices
  - Add to cart buttons
  - Consistent spacing with main product grid

**Features:**
- Locked pattern (cannot be moved or removed)
- Query configuration for 5 products
- Responsive grid layout
- Consistent styling with archive template

### No Products Pattern (`patterns/hidden-no-products.php`)

**Purpose:** Message display when no products are found
**Features:**
- Simple paragraph with internationalized message
- Integrated with query no-results block
- Consistent with theme typography

## WooCommerce Block Integration

### Supported WooCommerce Blocks

The theme provides styling and integration for all modern WooCommerce blocks:

**Product Display Blocks:**
- `woocommerce/product-image-gallery`
- `woocommerce/product-rating`
- `woocommerce/product-price`
- `woocommerce/product-meta`
- `woocommerce/product-details`
- `woocommerce/product-button`
- `woocommerce/add-to-cart-form`

**Shop/Archive Blocks:**
- `woocommerce/product-collection`
- `woocommerce/product-template`
- `woocommerce/product-results-count`
- `woocommerce/catalog-sorting`
- `woocommerce/breadcrumbs`

**Checkout Blocks:**
- `woocommerce/page-content-wrapper`
- `woocommerce/store-notices`

**Related Products:**
- `woocommerce/related-products`

### Block Styling Integration

The theme ensures WooCommerce blocks inherit the design system:

**Typography:**
- Product titles use theme's heading styles
- Prices use consistent font sizing (small/medium)
- Maintains font family consistency across style variations

**Spacing:**
- Uses theme's spacing scale (`var:preset|spacing|*`)
- Consistent margins and padding
- Responsive spacing behavior

**Colors:**
- Inherits theme color palette
- Maintains contrast ratios
- Works across all 21 style variations

**Layout:**
- Responsive grid systems
- Consistent alignment (wide, full, constrained)
- Mobile-first approach

## Style Variation Compatibility

### Universal Compatibility

All 21 style variations maintain WooCommerce compatibility:

**Color Integration:**
- Product prices inherit theme's primary/secondary colors
- Buttons use theme's button styling
- Links maintain theme's link colors
- Backgrounds adapt to theme's color scheme

**Typography Integration:**
- Product titles use theme's heading fonts
- Body text uses theme's body font
- Maintains font weight and size relationships
- Supports all included font families (25+ fonts)

**Examples Across Variations:**
- **Bloom:** Elegant serif headings with green accents for prices
- **Tokyo:** Bold Oswald headings with red accent buttons
- **Onyx:** High contrast dark theme with light text
- **Graphite:** Modern sans-serif with subtle gray tones

## Customization Guide

### Theme.json Customization

**Color Customization:**
```json
{
  "settings": {
    "color": {
      "palette": [
        {
          "slug": "primary",
          "color": "#your-color",
          "name": "Primary"
        }
      ]
    }
  },
  "styles": {
    "blocks": {
      "woocommerce/product-price": {
        "color": {
          "text": "var(--wp--preset--color--primary)"
        }
      }
    }
  }
}
```

**Typography Customization:**
```json
{
  "styles": {
    "blocks": {
      "core/post-title": {
        "typography": {
          "fontSize": "var(--wp--preset--font-size--large)",
          "fontWeight": "700"
        }
      }
    }
  }
}
```

### CSS Custom Properties

**Available WooCommerce-specific Properties:**
- Button styling inherits from theme buttons
- Form inputs use theme form styling
- Product grids use theme's grid system
- Spacing uses theme's spacing scale

**Custom CSS Examples:**
```css
/* Customize product price styling */
.wc-block-components-product-price {
    font-weight: 700;
    color: var(--wp--preset--color--primary);
}

/* Customize add to cart button */
.wc-block-cart .wc-block-components-button {
    background-color: var(--wp--preset--color--secondary);
    border-radius: 8px;
}

/* Customize product grid spacing */
.wc-block-product-template {
    gap: var(--wp--preset--spacing--40);
}
```

### Template Customization

**Creating Custom Product Templates:**
1. Copy existing template from theme
2. Modify block structure as needed
3. Maintain WooCommerce block requirements
4. Test across style variations

**Template Part Customization:**
- Header and footer parts work seamlessly with WooCommerce
- Navigation blocks support WooCommerce cart icons
- Search functionality integrates with product search

## Performance Considerations

### Optimizations Implemented

**Template Loading:**
- Conditional template registration
- Admin interface optimization
- Reduced DOM queries

**Asset Loading:**
- No additional CSS files for WooCommerce
- Leverages theme's existing design system
- Minimal JavaScript dependencies

**Image Handling:**
- Responsive image support
- Thumbnail optimization
- Gallery performance

### Best Practices

**For Developers:**
1. Use theme's design tokens for consistency
2. Test customizations across all style variations
3. Maintain responsive design principles
4. Follow WordPress coding standards

**For Site Owners:**
1. Choose style variation that matches brand
2. Customize colors through theme.json
3. Use block patterns for consistent layouts
4. Test checkout flow thoroughly

## Compatibility Matrix

### WordPress Versions
- **Required:** WordPress 6.6+
- **Tested:** Up to WordPress 6.8
- **FSE Features:** Full compatibility

### WooCommerce Versions
- **Block-based Checkout:** Full support
- **Classic Templates:** Not supported (by design)
- **WooCommerce Blocks:** Full integration
- **Version Compatibility:** Modern WooCommerce versions

### Browser Support
- **Modern Browsers:** Full support
- **CSS Custom Properties:** Required
- **CSS Grid:** Required for product layouts
- **Flexbox:** Required for responsive design

## Troubleshooting

### Common Issues

**Templates Not Showing:**
- Verify WooCommerce is active
- Check WordPress version compatibility
- Clear any caching

**Styling Issues:**
- Verify style variation is properly loaded
- Check for conflicting custom CSS
- Test with default style variation

**Layout Problems:**
- Check container width settings
- Verify block alignment settings
- Test responsive behavior

### Debug Steps

1. **Template Loading:**
   - Check `get_block_templates` filter
   - Verify template file existence
   - Test with default theme

2. **Block Rendering:**
   - Use browser developer tools
   - Check block markup structure
   - Verify CSS custom properties

3. **Style Inheritance:**
   - Check theme.json loading
   - Verify CSS cascade
   - Test with minimal custom CSS

## Future Enhancements

### Potential Improvements

**Template Enhancements:**
- Additional product page layouts
- Enhanced cart page template
- Account page templates

**Block Pattern Additions:**
- Product showcase patterns
- Category display patterns
- Promotional banners

**Performance Optimizations:**
- Critical CSS for WooCommerce pages
- Image optimization enhancements
- Lazy loading improvements

**Accessibility Improvements:**
- Enhanced keyboard navigation
- Better screen reader support
- Improved color contrast options

This documentation provides a comprehensive overview of the Extendable theme's WooCommerce integration, covering all aspects from basic setup to advanced customization options.