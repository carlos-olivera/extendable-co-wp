# Extendable Theme Block Pattern System Documentation

## Overview

The Extendable theme includes a comprehensive block pattern system that provides pre-designed, reusable content layouts. These patterns are organized into categories and serve different purposes, from header and footer layouts to content sections and utility patterns.

## Pattern Categories and Organization

### 1. Header Patterns
**Category:** `header`  
**Block Types:** `core/template-part/header`

#### **`extendable/header-default`** - Standard Header
- **Purpose:** Basic header layout with logo, site title, and navigation
- **Structure:** Logo + Site Title | Navigation Menu
- **Use Cases:** Most websites, professional layouts
- **Features:**
  - Responsive flex layout
  - Site logo integration
  - Page list navigation
  - Space-between alignment

#### **`extendable/header-title-nav-button`** - Header with CTA Button
- **Purpose:** Header with call-to-action button for conversions
- **Structure:** Logo + Site Title | Navigation + Button
- **Use Cases:** Business sites, landing pages, conversion-focused designs
- **Features:**
  - "Get Started" CTA button
  - Flexible navigation wrapping
  - Responsive padding with clamp() values
  - Button styling integration

#### **`extendable/header-title-social-nav`** - Header with Social Links
- **Purpose:** Header incorporating social media presence
- **Structure:** Logo + Site Title | Navigation + Social Icons
- **Use Cases:** Personal brands, social-focused websites
- **Features:**
  - Social media icon integration
  - Brand visibility enhancement
  - Flexible layout adaptation

### 2. Footer Patterns
**Category:** `footer`  
**Block Types:** `core/template-part/footer`

#### **`extendable/footer-default`** - Standard Footer
- **Purpose:** Simple footer with branding and social links
- **Structure:** Logo + Site Title | Social Icons
- **Use Cases:** Minimal sites, personal blogs
- **Features:**
  - Clean, minimal design
  - Social media integration
  - Responsive layout

#### **`extendable/footer-logo-desc-two-nav`** - Comprehensive Footer
- **Purpose:** Full-featured footer with multiple sections
- **Structure:** CTA Section + Multi-column Navigation + Copyright
- **Use Cases:** Business sites, comprehensive websites
- **Features:**
  - "Let's Work Together" call-to-action
  - Four-column navigation layout
  - Site description and tagline
  - Social media links
  - Copyright information
  - Separator elements for visual hierarchy

#### **`extendable/footer-offset-heading-buttons`** - CTA Footer
- **Purpose:** Footer with prominent call-to-action
- **Structure:** Centered CTA + Logo/Social Layout
- **Use Cases:** Conversion-focused sites, service businesses
- **Features:**
  - Prominent "Let's Work Together" heading
  - Dual button layout (primary + outline)
  - Social media integration
  - WordPress attribution
  - Tertiary background color

#### **Footer Variations:**
- `footer-offset-heading-buttons-dark` - Dark theme variant
- `footer-offset-heading-buttons-primary` - Primary color variant
- `footer-call-to-action` - Alternative CTA layout
- `footer-call-to-action-dark` - Dark CTA variant

### 3. Content Patterns
**Category:** `text`, `columns`

#### **`extendable/general-cta`** - Call to Action Section
- **Purpose:** Prominent call-to-action section for conversions
- **Structure:** Heading + Description + Dual Buttons
- **Use Cases:** Landing pages, service pages, conversion points
- **Features:**
  - Tertiary background color
  - Centered text alignment
  - Dual button layout (primary + outline)
  - Responsive spacing with CSS custom properties
  - Hierarchical heading structure (H6 + H1)

#### **`extendable/general-three-boxes`** - Feature Showcase
- **Purpose:** Three-column feature or service showcase
- **Structure:** Main Heading + Three Feature Columns
- **Use Cases:** Service pages, feature highlights, product showcases
- **Features:**
  - Responsive three-column layout
  - Image + text combination per column
  - Tertiary background for each box
  - Consistent spacing and typography
  - Unsplash placeholder images
  - Landscape aspect ratio images

### 4. Query Patterns
**Category:** `query`  
**Block Types:** `core/query`

#### **`extendable/posts-1-col`** - Single Column Post Layout
- **Purpose:** Display blog posts in single-column format
- **Structure:** Post Template with Featured Image + Meta + Excerpt
- **Use Cases:** Blog pages, news sections, content listings
- **Features:**
  - 16:9 aspect ratio featured images
  - Post title with link functionality
  - Post date and category display
  - Post excerpt with custom spacing
  - Pagination controls (previous/next/numbers)
  - No results handling
  - Responsive wide alignment
  - 3rem spacer between posts

### 5. Hidden/Utility Patterns
**Category:** N/A (Inserter: false/no)

#### **`extendable/hidden-404`** - 404 Error Content
- **Purpose:** Content for 404 error pages
- **Structure:** Error Heading + Message + Search Form
- **Use Cases:** Page not found errors
- **Features:**
  - Internationalized text strings
  - Integrated search functionality
  - Helpful user guidance
  - Consistent spacing and typography

#### **`extendable/hidden-no-results`** - No Search Results
- **Purpose:** Message when no search results found
- **Structure:** Simple paragraph message
- **Use Cases:** Empty search results, query loops with no content
- **Features:**
  - Internationalized message
  - Minimal, clean presentation

#### **`extendable/hidden-search`** - Search Form
- **Purpose:** Reusable search form component
- **Structure:** WordPress search block with icon button
- **Use Cases:** 404 pages, search sections, navigation areas
- **Features:**
  - Icon-based search button
  - Hidden label for accessibility
  - Internationalized text

#### **`extendable/hidden-no-products`** - WooCommerce No Products
- **Purpose:** Message when no WooCommerce products found
- **Structure:** Query no results with product-specific message
- **Use Cases:** Empty product catalogs, filtered results
- **Features:**
  - WooCommerce-specific messaging
  - Internationalized text
  - Query loop integration

#### **`extendable/hidden-woo-related-products`** - Related Products
- **Purpose:** WooCommerce related products section
- **Structure:** Heading + 5-column Product Grid
- **Use Cases:** Single product pages, product recommendations
- **Features:**
  - 5-column responsive grid
  - Product images, titles, prices
  - Add to cart buttons
  - Related products query
  - Consistent spacing and typography

## Pattern Usage Examples and Best Practices

### 1. Header Pattern Selection

#### **For Business Websites:**
```php
<!-- Use header with CTA button -->
<!-- wp:pattern {"slug":"extendable/header-title-nav-button"} /-->
```
- Drives conversions with prominent CTA
- Professional appearance
- Clear navigation hierarchy

#### **For Personal/Creative Sites:**
```php
<!-- Use header with social links -->
<!-- wp:pattern {"slug":"extendable/header-title-social-nav"} /-->
```
- Emphasizes social media presence
- Personal branding focus
- Community engagement

### 2. Content Pattern Implementation

#### **Service Page Layout:**
```php
<!-- Hero section -->
<!-- wp:pattern {"slug":"extendable/general-cta"} /-->

<!-- Services showcase -->
<!-- wp:pattern {"slug":"extendable/general-three-boxes"} /-->

<!-- Final CTA -->
<!-- wp:pattern {"slug":"extendable/general-cta"} /-->
```

#### **Blog Homepage:**
```php
<!-- Featured content -->
<!-- wp:pattern {"slug":"extendable/general-cta"} /-->

<!-- Recent posts -->
<!-- wp:pattern {"slug":"extendable/posts-1-col"} /-->
```

### 3. Footer Pattern Strategy

#### **Comprehensive Business Footer:**
```php
<!-- wp:pattern {"slug":"extendable/footer-logo-desc-two-nav"} /-->
```
- Multiple navigation sections
- Contact information
- Social media presence
- Professional appearance

#### **Conversion-Focused Footer:**
```php
<!-- wp:pattern {"slug":"extendable/footer-offset-heading-buttons"} /-->
```
- Prominent call-to-action
- Minimal distractions
- Clear next steps

## Pattern Customization Guidelines

### 1. Content Modification
- Replace placeholder text with actual content
- Update image sources from Unsplash placeholders
- Customize button text and links
- Adjust headings for SEO and hierarchy

### 2. Styling Customization
- Modify colors using theme color palette
- Adjust spacing using CSS custom properties
- Change typography using theme font settings
- Customize button styles through theme.json

### 3. Layout Adjustments
- Modify column counts in multi-column patterns
- Adjust image aspect ratios as needed
- Change alignment and justification
- Customize responsive behavior

## Opportunities for Additional Patterns

### 1. Content Patterns
**Recommended Additions:**
- **Hero Section Pattern:** Large banner with background image/video
- **Testimonials Pattern:** Customer testimonials with photos
- **FAQ Pattern:** Accordion-style frequently asked questions
- **Team Members Pattern:** Staff/team showcase grid
- **Pricing Tables Pattern:** Service/product pricing comparison
- **Contact Form Pattern:** Contact form with map integration

### 2. Layout Patterns
**Recommended Additions:**
- **Two-Column Content:** Text + image side-by-side layouts
- **Gallery Pattern:** Image gallery with lightbox functionality
- **Timeline Pattern:** Chronological content display
- **Stats/Numbers Pattern:** Key metrics showcase
- **Before/After Pattern:** Comparison layouts

### 3. E-commerce Patterns
**Recommended Additions:**
- **Product Showcase:** Featured products with enhanced styling
- **Category Grid:** Product category navigation
- **Sale Banner:** Promotional content patterns
- **Product Comparison:** Side-by-side product features
- **Customer Reviews:** Review display patterns

### 4. Blog/Content Patterns
**Recommended Additions:**
- **Author Bio Pattern:** Author information with social links
- **Related Posts Pattern:** Content recommendations
- **Newsletter Signup:** Email subscription forms
- **Social Sharing:** Share buttons for content
- **Table of Contents:** Long-form content navigation

## Pattern Development Best Practices

### 1. Code Quality
- Use semantic HTML structure
- Implement proper accessibility features
- Follow WordPress coding standards
- Include internationalization support

### 2. Design Consistency
- Use theme color palette consistently
- Follow spacing system guidelines
- Maintain typography hierarchy
- Ensure responsive design

### 3. Performance Optimization
- Optimize image sizes and formats
- Minimize CSS complexity
- Use efficient block structures
- Consider loading performance

### 4. User Experience
- Provide clear visual hierarchy
- Ensure intuitive navigation
- Implement proper focus management
- Test across devices and browsers

## Pattern Registration and Management

### 1. Pattern Registration
Patterns are automatically registered through PHP files in the `/patterns/` directory. Each pattern includes:
- Title and slug for identification
- Category assignment for organization
- Block type specification for context
- Inserter visibility control

### 2. Pattern Categories
The theme registers custom pattern categories:
```php
$block_pattern_categories = array(
    'header' => array( 'label' => __( 'Headers', 'extendable' ) ),
    'footer' => array( 'label' => __( 'Footers', 'extendable' ) ),
);
```

### 3. Hidden Patterns
Utility patterns use `"Inserter": false` or `"Inserter": no` to hide them from the pattern inserter while keeping them available for programmatic use.

This comprehensive pattern system provides a solid foundation for rapid website development while maintaining design consistency and professional quality across all implementations.