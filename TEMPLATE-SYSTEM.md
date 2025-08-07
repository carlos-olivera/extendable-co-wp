# Extendable Theme Template System Documentation

## Overview

The Extendable theme implements a comprehensive template system using WordPress Full Site Editing (FSE) capabilities. The system consists of page templates, reusable template parts, and block patterns that work together to create flexible, customizable layouts.

## Template Categories

### 1. Core Page Templates

#### **`index.html`** - Main Blog/Archive Template
- **Purpose:** Default template for blog posts and archives
- **Structure:** Header → Posts Pattern → Footer
- **Use Cases:** Blog homepage, category archives, tag archives
- **Key Features:**
  - Uses `extendable/posts-1-col` pattern for post display
  - Minimal structure for maximum flexibility
  - Fallback template for all post types

#### **`single.html`** - Individual Post Template
- **Purpose:** Display individual blog posts with full content
- **Structure:** Header → Post Content → Comments → Footer
- **Use Cases:** Blog post pages, custom post type singles
- **Key Features:**
  - Post title with link functionality
  - Featured image with 16:9 aspect ratio
  - Post metadata (date, author, tags)
  - Complete comments system with threaded replies
  - Post navigation and social sharing

#### **`page.html`** - Static Page Template
- **Purpose:** Display static pages with minimal structure
- **Structure:** Header → Page Content → Footer
- **Use Cases:** About pages, contact pages, landing pages
- **Key Features:**
  - Clean, minimal layout
  - Full-width content area
  - No post metadata or comments
  - Optimized for custom content blocks

#### **`home.html`** - Homepage Template
- **Purpose:** Dedicated homepage layout
- **Structure:** Custom homepage design
- **Use Cases:** Site front page, custom homepage layouts
- **Key Features:**
  - Customizable homepage structure
  - Can include hero sections, featured content
  - Separate from blog listing page

#### **`archive.html`** - Archive Pages Template
- **Purpose:** Display category, tag, and date archives
- **Structure:** Header → Archive Title → Posts Pattern → Footer
- **Use Cases:** Category pages, tag pages, date archives, author pages
- **Key Features:**
  - Dynamic archive title display
  - Separator line for visual hierarchy
  - Uses same post pattern as index template
  - Responsive layout for archive listings

#### **`search.html`** - Search Results Template
- **Purpose:** Display search results with search form
- **Structure:** Header → Search Form → Results → Footer
- **Use Cases:** Search results pages
- **Key Features:**
  - Prominent search form with resubmit capability
  - Search query display in title
  - Post excerpts for better scanning
  - Pagination for large result sets
  - No results pattern integration

#### **`404.html`** - Error Page Template
- **Purpose:** Display 404 error pages
- **Structure:** Header → Error Content → Footer
- **Use Cases:** Page not found errors
- **Key Features:**
  - Uses `extendable/hidden-404` pattern
  - Helpful navigation options
  - Search functionality
  - Minimal, focused design

### 2. Specialized Templates

#### **`blank.html`** - Minimal Template
- **Purpose:** Completely clean template without header/footer
- **Structure:** Post Content Only
- **Use Cases:** Landing pages, full-screen content, custom layouts
- **Key Features:**
  - No header or footer
  - Maximum content flexibility
  - Ideal for page builders or custom designs

#### **`no-title.html`** - Template Without Title
- **Purpose:** Page template that hides the page title
- **Structure:** Header → Content (no title) → Footer
- **Use Cases:** Custom landing pages, visual-heavy pages
- **Key Features:**
  - Standard header and footer
  - Page title hidden from display
  - Clean content presentation

#### **`no-title-sticky-header.html`** - Sticky Header Variant
- **Purpose:** No-title template with sticky header behavior
- **Structure:** Sticky Header → Content (no title) → Footer
- **Use Cases:** Long-form content, documentation pages
- **Key Features:**
  - Sticky header navigation
  - No page title display
  - Enhanced scrolling experience

### 3. WooCommerce Templates

#### **`single-product.html`** - Product Page Template
- **Purpose:** Display individual WooCommerce products
- **Structure:** Header → Breadcrumbs → Product Details → Footer
- **Use Cases:** Product pages in WooCommerce stores
- **Key Features:**
  - Product image gallery
  - Product title, rating, and price
  - Add to cart functionality
  - Product meta information (SKU, categories, tags)
  - Product details tabs
  - Related products section

#### **`archive-product.html`** - Shop Page Template
- **Purpose:** Display WooCommerce product catalog
- **Structure:** Header → Breadcrumbs → Product Grid → Footer
- **Use Cases:** Shop page, product category pages
- **Key Features:**
  - Product results count
  - Catalog sorting options
  - 4-column responsive product grid
  - Product images, titles, prices
  - Add to cart buttons
  - Pagination for large catalogs

#### **`checkout.html`** - Checkout Template
- **Purpose:** WooCommerce checkout process
- **Structure:** Header (simplified) → Checkout Form → Footer
- **Use Cases:** Checkout process pages
- **Key Features:**
  - Simplified navigation (hidden in CSS)
  - Streamlined checkout experience
  - Secure payment processing
  - Order summary display

## Template Parts System

### Header Variations

#### **`header.html`** - Default Header
- **Layout:** Logo + Site Title | Navigation
- **Features:** Standard horizontal layout, responsive navigation
- **Best For:** Most websites, professional layouts

#### **`header-title-nav-button.html`** - Header with Button
- **Layout:** Logo + Site Title | Navigation + CTA Button
- **Features:** Call-to-action button, flexible navigation
- **Best For:** Business sites, conversion-focused designs

#### **`header-title-social-nav.html`** - Header with Social
- **Layout:** Logo + Site Title | Navigation + Social Icons
- **Features:** Social media integration, brand visibility
- **Best For:** Personal brands, social-focused sites

#### **`header-with-center-logo-and-social.html`** - Centered Logo
- **Layout:** Centered Logo + Social Icons
- **Features:** Prominent branding, social integration
- **Best For:** Portfolio sites, creative agencies

#### **`header-with-search-bar.html`** - Header with Search
- **Layout:** Logo + Site Title | Navigation + Search
- **Features:** Integrated search functionality
- **Best For:** Content-heavy sites, blogs, documentation

#### **`header-with-center-logo-and-search-bar.html`** - Centered with Search
- **Layout:** Centered Logo | Search Bar
- **Features:** Prominent search, minimal navigation
- **Best For:** Search-focused sites, directories

#### **`header-with-center-nav-and-social.html`** - Centered Navigation
- **Layout:** Logo | Centered Navigation + Social
- **Features:** Balanced layout, social integration
- **Best For:** Magazine sites, community platforms

### Footer Variations

#### **`footer.html`** - Default Footer
- **Layout:** Logo + Site Title | Social Icons
- **Features:** Simple, clean footer with social links
- **Best For:** Minimal sites, personal blogs

#### **`footer-logo-nav.html`** - Footer with Navigation
- **Layout:** Site Title + Copyright | Navigation Menu
- **Features:** Additional navigation, legal links
- **Best For:** Business sites, multi-page websites

#### **`footer-social-icons.html`** - Social Only Footer
- **Layout:** Social Icons Only
- **Features:** Minimal footer, social focus
- **Best For:** Social-heavy sites, portfolios

#### **`footer-with-address-four-columns.html`** - Four Column Footer
- **Layout:** Four columns with contact information
- **Features:** Comprehensive contact details, multiple sections
- **Best For:** Business sites, service providers

#### **`footer-with-address-dark-three-columns.html`** - Dark Three Column
- **Layout:** Three columns with dark background
- **Features:** Dark theme, contact information, visual hierarchy
- **Best For:** Professional sites, corporate designs

#### **`footer-mega.html`** - Mega Footer
- **Layout:** Multiple columns with extensive menu options
- **Features:** Comprehensive site navigation, multiple sections
- **Best For:** Large sites, e-commerce, corporate

#### **`footer-with-three-center-columns-of-menus.html`** - Centered Three Column
- **Layout:** Three centered columns with menus
- **Features:** Balanced layout, organized navigation
- **Best For:** Medium-sized sites, organized content

#### **`footer-with-six-columns-of-menus.html`** - Six Column Footer
- **Layout:** Six columns with detailed navigation
- **Features:** Extensive navigation options, detailed organization
- **Best For:** Large sites, complex navigation needs

#### **`footer-with-center-logo-and-menu.html`** - Centered Logo Footer
- **Layout:** Centered logo with menu below
- **Features:** Brand-focused, clean design
- **Best For:** Brand-focused sites, portfolios

#### **`footer-with-site-description-and-menu.html`** - Description Footer
- **Layout:** Site description with navigation menu
- **Features:** Site description, contextual navigation
- **Best For:** Informational sites, blogs

## Template Usage Guide for Developers

### 1. Template Selection Guidelines

#### **For Blog-Focused Sites:**
- Use `index.html` for main blog listing
- Use `single.html` for individual posts
- Use `archive.html` for category/tag pages
- Consider `search.html` for content discovery

#### **For Business Sites:**
- Use `page.html` for most static content
- Use `home.html` for custom homepage
- Use `header-title-nav-button.html` for conversion focus
- Use `footer-with-address-four-columns.html` for contact info

#### **For E-commerce Sites:**
- Use WooCommerce templates for product pages
- Use `page.html` for informational pages
- Use `archive-product.html` for shop pages
- Use `checkout.html` for purchase process

#### **For Portfolio Sites:**
- Use `blank.html` for full-screen presentations
- Use `no-title.html` for visual-heavy pages
- Use `header-with-center-logo-and-social.html` for branding
- Use `footer-social-icons.html` for minimal footer

### 2. Template Customization Best Practices

#### **Template Hierarchy:**
1. Create child theme for customizations
2. Copy template files to child theme
3. Modify copied files, not originals
4. Test across different devices and browsers

#### **Block Pattern Integration:**
- Use existing patterns where possible
- Create custom patterns for repeated content
- Register patterns in functions.php
- Organize patterns by category

#### **Template Part Reuse:**
- Leverage existing template parts
- Create custom template parts for unique elements
- Maintain consistent naming conventions
- Document custom template parts

### 3. Performance Considerations

#### **Template Optimization:**
- Minimize block nesting depth
- Use appropriate image aspect ratios
- Implement lazy loading for images
- Optimize for Core Web Vitals

#### **Caching Compatibility:**
- Ensure templates work with caching plugins
- Avoid dynamic content in templates
- Use proper WordPress hooks
- Test with popular caching solutions

### 4. Accessibility Guidelines

#### **Template Accessibility:**
- Use semantic HTML structure
- Implement proper heading hierarchy
- Ensure keyboard navigation works
- Test with screen readers
- Maintain sufficient color contrast

#### **Navigation Accessibility:**
- Implement skip links where needed
- Use proper ARIA labels
- Ensure focus management
- Test with keyboard-only navigation

## Template Inheritance Patterns

### WordPress Template Hierarchy
```
1. Custom Template (if selected)
2. Specific Template (single-product.html)
3. General Template (single.html)
4. Index Template (index.html)
```

### Template Part Inheritance
```
1. Specific Template Part (header-title-nav-button.html)
2. Default Template Part (header.html)
3. Fallback to theme default
```

### Block Pattern Integration
```
1. Custom Pattern (if created)
2. Theme Pattern (extendable/posts-1-col)
3. Core Pattern (if available)
4. Manual block construction
```

## Advanced Template Features

### 1. Dynamic Content Integration
- Query loops for custom post types
- Dynamic block visibility
- Conditional content display
- User role-based content

### 2. Responsive Design Features
- Fluid typography scaling
- Responsive spacing system
- Mobile-first approach
- Touch-friendly interactions

### 3. SEO Optimization
- Proper heading structure
- Meta tag integration
- Schema markup support
- Social media optimization

### 4. Performance Features
- Lazy loading implementation
- Critical CSS inlining
- Font display optimization
- Image optimization

This template system provides a comprehensive foundation for building diverse WordPress sites while maintaining consistency, performance, and accessibility standards.