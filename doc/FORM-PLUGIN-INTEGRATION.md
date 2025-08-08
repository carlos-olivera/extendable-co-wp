# Form Plugin Integration Documentation

## Overview

The Extendable theme provides seamless integration with popular WordPress form plugins through conditional CSS loading and consistent design system integration. The theme supports Contact Form 7 and WPForms with custom styling that maintains design consistency across all 21 style variations.

## Supported Form Plugins

### 1. Contact Form 7 Integration

**Plugin Compatibility:**
- **Plugin:** Contact Form 7
- **Block Support:** `contact-form-7/contact-form-selector`
- **Loading Method:** Conditional CSS enqueuing
- **Style File:** `assets/css/contact-form-7.css`

**Integration Features:**
- Automatic detection of Contact Form 7 blocks on pages
- Conditional CSS loading only when blocks are present
- Full design system integration
- Responsive form styling
- Accessibility-compliant focus states

### 2. WPForms Integration

**Plugin Compatibility:**
- **Plugin:** WPForms
- **Block Support:** `wpforms/form-selector`
- **Loading Method:** Conditional CSS enqueuing
- **Style File:** `assets/css/wpforms.css`

**Integration Features:**
- Automatic detection of WPForms blocks on pages
- Conditional CSS loading only when blocks are present
- Enhanced label and sublabel styling
- Consistent button styling with theme
- Responsive design integration

## Technical Implementation

### Conditional Loading System

The theme implements intelligent CSS loading through the `extendable_enqueue_block_styles()` function in `functions.php`:

```php
function extendable_enqueue_block_styles() {
    // Contact Form 7 conditional loading
    if ( has_block( 'contact-form-7/contact-form-selector' ) ) {
        wp_enqueue_style(
            'extendable-contact-form-7-style',
            get_template_directory_uri() . '/assets/css/contact-form-7.css',
            array(),
            EXTENDABLE_THEME_VERSION
        );
    }

    // WPForms conditional loading
    if ( has_block( 'wpforms/form-selector' ) ) {
        wp_enqueue_style(
            'extendable-wpforms-style',
            get_template_directory_uri() . '/assets/css/wpforms.css',
            array(),
            EXTENDABLE_THEME_VERSION
        );
    }
}
add_action( 'enqueue_block_assets', 'extendable_enqueue_block_styles' );
```

**Benefits of Conditional Loading:**
- Improved performance (CSS only loads when needed)
- Reduced HTTP requests on pages without forms
- Automatic detection without manual configuration
- Version-controlled CSS updates

## Contact Form 7 Styling

### Form Input Styling

**Input Fields:**
```css
.wpcf7 input:where(:not([type="submit"]):not([type="checkbox"])) {
    border: 1px solid;
    line-height: inherit;
    font-size: inherit;
}

.wpcf7 input:where(:not([type="submit"]):not([type="checkbox"])),
.wpcf7 textarea {
    padding: calc(0.667em + 1px);
    width: 100%;
    background-color: var(--wp--preset--color--background);
    color: var(--wp--preset--color--foreground);
    border-color: inherit;
    box-sizing: border-box;
}
```

**Key Features:**
- Uses theme's color system (`--wp--preset--color--background/foreground`)
- Inherits font size and line height from theme
- Consistent padding calculation
- Full-width responsive design
- Border styling inherits from theme

### Form Control Wrapper

```css
.wpcf7-form-control-wrap {
    margin-top: 0.25em;
    display: block;
}
```

**Purpose:**
- Provides consistent spacing between form elements
- Ensures proper block-level display
- Maintains vertical rhythm

### Submit Button Styling

**Button Base Styles:**
```css
.wpcf7 input[type="submit"] {
    background-color: var(--wp--custom--elements--button--color--background);
    color: var(--wp--custom--elements--button--color--text);
    border-radius: var(--wp--custom--elements--button--border--radius);
    border-width: 0;
    font-family: inherit;
    font-size: inherit;
    font-weight: var(--wp--custom--typography--font-weight--medium);
    line-height: inherit;
    padding-top: calc(0.667em + 2px);
    padding-right: calc(1.333em + 2px);
    padding-bottom: calc(0.667em + 2px);
    padding-left: calc(1.333em + 2px);
    text-decoration: none;
    cursor: pointer;
}
```

**Interactive States:**
```css
/* Hover State */
.wpcf7 input[type="submit"]:hover {
    background-color: var(--wp--custom--elements--button--hover--color--background);
    color: var(--wp--custom--elements--button--hover--color--text);
}

/* Focus State */
.wpcf7 input[type="submit"]:focus {
    background-color: var(--wp--custom--elements--button--focus--color--background);
    color: var(--wp--custom--elements--button--focus--color--text);
    outline-color: var(--wp--custom--elements--button--focus--color--background);
    offset: 2px;
    outline-width: 1px;
    outline-offset: 2px;
    outline-style: solid;
}
```

**Button Features:**
- Complete integration with theme's button system
- Hover and focus states for accessibility
- Consistent padding and typography
- Border radius from theme settings
- Proper cursor and interaction feedback

## WPForms Styling

### Label and Field Styling

**Field Labels:**
```css
.wpforms-block.wpforms-container .wpforms-field-label {
    font-weight: inherit;
    margin-bottom: 0.25em;
}
```

**Input Fields:**
```css
.wpforms-block input:where(:not([type="submit"]):not([type="checkbox"])) {
    border: 1px solid;
    line-height: inherit;
    font-size: inherit;
}

.wpforms-block input:where(:not([type="submit"]):not([type="checkbox"])),
.wpforms-block textarea {
    padding: calc(0.667em + 1px);
    width: 100%;
    background-color: var(--wp--preset--color--background);
    color: var(--wp--preset--color--foreground);
    border-color: inherit;
}
```

**Sublabel Styling:**
```css
.wpforms-field-sublabel {
    opacity: 0.8;
}
```

**Features:**
- Consistent label spacing and typography
- Same input styling as Contact Form 7
- Subtle sublabel styling with reduced opacity
- Full theme color integration

### Submit Button Styling

**Button Base Styles:**
```css
.wpforms-block button.wpforms-submit {
    background-color: var(--wp--custom--elements--button--color--background);
    color: var(--wp--custom--elements--button--color--text);
    border-radius: var(--wp--custom--elements--button--border--radius);
    border-width: 0;
    font-family: inherit;
    font-size: inherit;
    font-weight: var(--wp--custom--typography--font-weight--medium);
    line-height: inherit;
    padding-top: calc(0.667em + 2px);
    padding-right: calc(1.333em + 2px);
    padding-bottom: calc(0.667em + 2px);
    padding-left: calc(1.333em + 2px);
    text-decoration: none;
    cursor: pointer;
    margin-top: 1rem;
}
```

**Interactive States:**
```css
/* Hover State */
.wpforms-block button.wpforms-submit:hover {
    background-color: var(--wp--custom--elements--button--hover--color--background);
    color: var(--wp--custom--elements--button--hover--color--text);
}

/* Focus State */
.wpforms-block button.wpforms-submit:focus {
    background-color: var(--wp--custom--elements--button--focus--color--background);
    color: var(--wp--custom--elements--button--focus--color--text);
    outline-color: var(--wp--custom--elements--button--focus--color--background);
    offset: 2px;
    outline-width: 2px;
    outline-offset: 2px;
    outline-style: solid;
}
```

**WPForms Button Features:**
- Identical styling to Contact Form 7 buttons
- Additional top margin for spacing
- Enhanced focus outline (2px vs 1px)
- Button element targeting (vs input)

## Design System Integration

### Color System Integration

**Theme Color Variables Used:**
- `--wp--preset--color--background` - Form field backgrounds
- `--wp--preset--color--foreground` - Text color
- `--wp--custom--elements--button--color--background` - Button background
- `--wp--custom--elements--button--color--text` - Button text
- `--wp--custom--elements--button--hover--color--background` - Button hover background
- `--wp--custom--elements--button--hover--color--text` - Button hover text
- `--wp--custom--elements--button--focus--color--background` - Button focus background
- `--wp--custom--elements--button--focus--color--text` - Button focus text

**Style Variation Compatibility:**
All 21 style variations automatically apply their color schemes to forms:

- **Bloom:** Green accent buttons with elegant serif context
- **Tokyo:** Red accent buttons with bold Oswald headings
- **Onyx:** High contrast dark theme with light form fields
- **Graphite:** Subtle gray tones with modern sans-serif
- **Lagoon:** Calming blue accents for buttons and focus states

### Typography Integration

**Font Properties:**
- `font-family: inherit` - Uses theme's body font
- `font-size: inherit` - Matches surrounding content
- `line-height: inherit` - Maintains theme's vertical rhythm
- `font-weight: var(--wp--custom--typography--font-weight--medium)` - Consistent button weight

**Typography Features:**
- Seamless integration with theme fonts
- Maintains readability across all style variations
- Consistent sizing and spacing
- Proper line height for form elements

### Spacing and Layout

**Spacing System:**
- Calculated padding: `calc(0.667em + 1px)` for inputs
- Button padding: `calc(0.667em + 2px)` vertical, `calc(1.333em + 2px)` horizontal
- Consistent margins: `0.25em` for labels and wrappers
- Top margin: `1rem` for WPForms submit buttons

**Layout Features:**
- Full-width form fields (`width: 100%`)
- Proper box-sizing for consistent dimensions
- Block-level display for form wrappers
- Responsive design principles

## Accessibility Features

### Focus Management

**Focus Indicators:**
- Visible outline on focus states
- Consistent outline color matching button background
- Proper outline offset (2px) for visibility
- Solid outline style for clarity

**Keyboard Navigation:**
- Proper cursor states for interactive elements
- Focus states for all form controls
- Logical tab order maintained

### Color Contrast

**Contrast Considerations:**
- Background/foreground color combinations tested
- Button states maintain sufficient contrast
- Focus indicators provide clear visual feedback
- Works across all style variations

### Screen Reader Support

**Semantic Structure:**
- Maintains plugin's native accessibility features
- Preserves label associations
- Doesn't interfere with ARIA attributes
- Supports assistive technology

## Customization Guide

### Basic Color Customization

**Via theme.json:**
```json
{
  "settings": {
    "color": {
      "palette": [
        {
          "slug": "primary",
          "color": "#your-primary-color",
          "name": "Primary"
        }
      ]
    }
  },
  "styles": {
    "elements": {
      "button": {
        "color": {
          "background": "var(--wp--preset--color--primary)",
          "text": "#ffffff"
        }
      }
    }
  }
}
```

### Advanced CSS Customization

**Custom Form Field Styling:**
```css
/* Custom input styling */
.wpcf7 input:not([type="submit"]),
.wpforms-block input:not([type="submit"]) {
    border-radius: 8px;
    border-width: 2px;
    border-style: solid;
    border-color: var(--wp--preset--color--tertiary);
}

/* Custom button styling */
.wpcf7 input[type="submit"],
.wpforms-block button.wpforms-submit {
    border-radius: 12px;
    text-transform: uppercase;
    letter-spacing: 0.05em;
}

/* Custom focus states */
.wpcf7 input:focus,
.wpforms-block input:focus {
    border-color: var(--wp--preset--color--primary);
    box-shadow: 0 0 0 2px rgba(var(--wp--preset--color--primary), 0.2);
}
```

### Form Layout Customization

**Multi-column Forms:**
```css
/* Two-column form layout */
.wpcf7-form .form-row {
    display: grid;
    grid-template-columns: 1fr 1fr;
    gap: 1rem;
}

/* Responsive single column on mobile */
@media (max-width: 768px) {
    .wpcf7-form .form-row {
        grid-template-columns: 1fr;
    }
}
```

## Performance Optimization

### CSS Loading Strategy

**Benefits:**
- CSS only loads when form blocks are present
- Reduces unused CSS on non-form pages
- Automatic detection without configuration
- Version control for updates

**Performance Metrics:**
- Reduced HTTP requests on pages without forms
- Smaller CSS payload for non-form pages
- Faster page load times
- Better Core Web Vitals scores

### Best Practices

**For Developers:**
1. Use theme's design tokens for consistency
2. Test across all style variations
3. Maintain accessibility standards
4. Follow responsive design principles

**For Site Owners:**
1. Choose appropriate style variation for brand
2. Test forms across devices
3. Verify accessibility compliance
4. Monitor form performance

## Troubleshooting

### Common Issues

**Forms Not Styled:**
- Verify plugin is active and updated
- Check if form blocks are properly inserted
- Clear any caching plugins
- Test with default theme to isolate issues

**Styling Conflicts:**
- Check for conflicting custom CSS
- Verify theme.json settings
- Test with minimal customizations
- Use browser developer tools to debug

**Button Styling Issues:**
- Verify button custom properties are loaded
- Check style variation compatibility
- Test hover and focus states
- Ensure proper CSS specificity

### Debug Steps

1. **CSS Loading Verification:**
   - Check if form CSS files are enqueued
   - Verify `has_block()` function detection
   - Test with different form plugins

2. **Style Application:**
   - Use browser developer tools
   - Check CSS custom property values
   - Verify CSS cascade and specificity
   - Test with different style variations

3. **Responsive Testing:**
   - Test across device sizes
   - Verify mobile form usability
   - Check touch target sizes
   - Test form submission flow

## Future Enhancements

### Potential Improvements

**Additional Plugin Support:**
- Gravity Forms integration
- Ninja Forms styling
- Formidable Forms support
- Caldera Forms compatibility

**Enhanced Styling Options:**
- More button style variations
- Advanced form layout options
- Custom field type styling
- Animation and transition effects

**Accessibility Enhancements:**
- Enhanced keyboard navigation
- Better screen reader support
- Improved color contrast options
- WCAG 2.1 AA compliance verification

**Performance Optimizations:**
- Critical CSS for above-the-fold forms
- Lazy loading for complex forms
- Reduced CSS specificity
- Better caching strategies

This documentation provides comprehensive coverage of the Extendable theme's form plugin integration, ensuring developers and site owners can effectively implement and customize forms while maintaining design consistency and accessibility standards.