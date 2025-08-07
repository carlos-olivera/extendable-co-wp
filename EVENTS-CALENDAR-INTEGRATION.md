# The Events Calendar Integration Documentation

## Overview

The Extendable theme provides comprehensive integration with The Events Calendar plugin through a dedicated CSS file that creates a cohesive design system integration. Added in version 2.0.14 (November 2024), this integration ensures that event displays maintain visual consistency with the theme's design across all 21 style variations.

## Integration Architecture

### File Structure

**Integration File:**
- **Location:** `tribe-events/tribe-events.css`
- **Purpose:** Custom styling for The Events Calendar plugin
- **Loading:** Automatic when plugin is active
- **Size:** Comprehensive CSS custom property system

**Integration Method:**
- Direct CSS file inclusion (not conditional like form plugins)
- CSS custom property mapping to theme design system
- Responsive design integration
- Style variation compatibility

## CSS Custom Property System

### Theme Integration Variables

The integration creates a comprehensive mapping between The Events Calendar's design system and the Extendable theme's design tokens:

#### Typography Integration
```css
:root {
    --tec-font-family-sans-serif: var(--wp--preset--font-family--ibm-plex-sans);
}
```

**Features:**
- Maps to theme's IBM Plex Sans font family
- Maintains typography consistency
- Supports all style variations

#### Text Color System
```css
/* Primary text colors */
--tec-color-text-primary: var(--wp--preset--color--foreground);
--tec-color-text-primary-light: color-mix(in srgb, var(--wp--preset--color--foreground), transparent 25%);
--tec-color-text-secondary: color-mix(in srgb, var(--wp--preset--color--foreground), transparent 20%);
--tec-color-text-disabled: color-mix(in srgb, var(--wp--preset--color--foreground), transparent 70%);
```

**Color Mixing Features:**
- Uses modern `color-mix()` function for transparency
- Creates semantic color variations
- Maintains accessibility contrast ratios
- Adapts to theme's foreground color

#### Icon Color System
```css
/* Icon colors with semantic variations */
--tec-color-icon-primary: color-mix(in srgb, var(--wp--preset--color--foreground), transparent 30%);
--tec-color-icon-primary-alt: color-mix(in srgb, var(--wp--preset--color--foreground), transparent 60%);
--tec-color-icon-secondary: color-mix(in srgb, var(--wp--preset--color--foreground), transparent 40%);
--tec-color-icon-active: var(--wp--preset--color--foreground);
--tec-color-icon-disabled: color-mix(in srgb, var(--wp--preset--color--foreground), transparent 50%);
--tec-color-icon-focus: color-mix(in srgb, var(--wp--preset--color--foreground), var(--wp--preset--color--primary) 20%);
--tec-color-icon-error: #da394d;
```

**Icon System Features:**
- Multiple icon states (active, disabled, focus, error)
- Semantic color variations using transparency
- Focus states incorporate theme primary color
- Error state uses consistent red color

#### Event-Specific Colors
```css
/* Event icon colors */
--tec-color-event-icon: var(--wp--preset--color--foreground);
--tec-color-event-icon-hover: var(--wp--preset--color--primary);
```

**Event Color Features:**
- Default icons use theme foreground
- Hover states use theme primary color
- Consistent with theme's interactive elements

#### Accent Color System
```css
/* Primary accent colors */
--tec-color-accent-primary: var(--wp--preset--color--primary);
--tec-color-accent-primary-hover: color-mix(in srgb, var(--wp--preset--color--primary), transparent 20%);
--tec-color-accent-primary-active: color-mix(in srgb, var(--wp--preset--color--primary), transparent 90%);
--tec-color-accent-primary-background: color-mix(in srgb, var(--wp--preset--color--primary), transparent 10%);

/* Secondary accent colors */
--tec-color-accent-secondary: var(--wp--preset--color--foreground);
--tec-color-accent-secondary-hover: color-mix(in srgb, var(--wp--preset--color--foreground), transparent 25%);
--tec-color-accent-secondary-active: color-mix(in srgb, var(--wp--preset--color--foreground), transparent 90%);
--tec-color-accent-secondary-background: color-mix(in srgb, var(--wp--preset--color--foreground), transparent 10%);
```

**Accent System Features:**
- Primary accents use theme's primary color
- Secondary accents use theme's foreground color
- Interactive states with hover and active variations
- Background variations for subtle highlighting

#### Button Integration
```css
/* Button color mapping */
--tec-color-button-primary: var(--wp--custom--elements--button--color--background);
--tec-color-button-primary-hover: var(--wp--custom--elements--button--hover--color--background);
--tec-color-button-primary-active: color-mix(in srgb, var(--wp--custom--elements--button--hover--color--background), transparent 5%);
--tec-color-button-primary-background: color-mix(in srgb, var(--wp--custom--elements--button--hover--color--background), transparent 10%);
--tec-color-button-secondary: var(--tec-color-accent-secondary);
--tec-color-button-secondary-hover: var(--tec-color-accent-secondary-hover);
--tec-color-button-secondary-active: var(--tec-color-accent-secondary-active);
--tec-color-button-secondary-background: var(--tec-color-accent-secondary-background);
```

**Button Integration Features:**
- Direct mapping to theme's button system
- Maintains button styling consistency
- Supports hover and active states
- Secondary buttons use accent system

#### Border Color System
```css
/* Border colors with opacity variations */
--tec-color-border-default: color-mix(in srgb, var(--wp--preset--color--foreground), transparent 85%);
--tec-color-border-secondary: color-mix(in srgb, var(--wp--preset--color--foreground), transparent 80%);
--tec-color-border-tertiary: color-mix(in srgb, var(--wp--preset--color--foreground), transparent 65%);
--tec-color-border-hover: color-mix(in srgb, var(--wp--preset--color--foreground), transparent 55%);
--tec-color-border-active: var(--wp--preset--color--foreground);
```

**Border System Features:**
- Semantic border variations
- Progressive opacity for visual hierarchy
- Interactive states for hover and active
- Consistent with theme's border styling

#### Background Color System
```css
/* Background colors */
--tec-color-background: var(--wp--preset--color--background);
--tec-color-background-secondary: var(--wp--preset--color--tertiary);
--tec-color-background-messages: color-mix(in srgb, var(--wp--preset--color--tertiary), transparent 7%);
--tec-color-background-secondary-hover: color-mix(in srgb, var(--wp--preset--color--tertiary), transparent 5%);
--tec-color-background-error: color-mix(in srgb, #da394d, transparent 8%);
```

**Background Features:**
- Primary background uses theme background
- Secondary background uses theme tertiary color
- Message backgrounds with subtle variations
- Error backgrounds with consistent red tinting

#### Specialized Event Backgrounds
```css
/* Multiday event backgrounds */
--tec-color-background-primary-multiday: color-mix(in srgb, var(--wp--preset--color--tertiary), transparent 24%);
--tec-color-background-primary-multiday-hover: color-mix(in srgb, var(--wp--preset--color--tertiary), transparent 34%);
--tec-color-background-secondary-multiday: color-mix(in srgb, var(--wp--preset--color--tertiary), transparent 24%);
--tec-color-background-secondary-multiday-hover: color-mix(in srgb, var(--wp--preset--color--tertiary), transparent 34%);

/* Week event accents */
--tec-color-accent-primary-week-event: color-mix(in srgb, var(--wp--preset--color--primary), transparent 10%);
--tec-color-accent-primary-week-event-hover: color-mix(in srgb, var(--wp--preset--color--primary), transparent 20%);
--tec-color-accent-primary-week-event-featured: color-mix(in srgb, var(--wp--preset--color--primary), transparent 4%);
--tec-color-accent-primary-week-event-featured-hover: color-mix(in srgb, var(--wp--preset--color--primary), transparent 14%);
```

**Specialized Features:**
- Multiday event styling with hover states
- Week view event accents
- Featured event highlighting
- Consistent color mixing approach

## Layout and Spacing Integration

### Container and Layout Styling

#### Block Integration
```css
.tribe-block.tec-block__archive-events,
.tribe-block.tec-block__single-event {
    margin-top: 0;
}
```

#### Container Width Integration
```css
.tribe-common .tribe-common-l-container {
    max-width: var(--wp--style--global--wide-size);
}
```

**Layout Features:**
- Uses theme's wide size setting
- Maintains consistent container widths
- Integrates with theme's layout system

#### Responsive Spacing
```css
.tribe-common--breakpoint-medium.tribe-events .tribe-events-l-container {
    padding-bottom: var(--wp--preset--spacing--50);
    padding-top: var(--wp--preset--spacing--40);
    padding-right: var(--wp--preset--spacing--30);
    padding-left: var(--wp--preset--spacing--30);
}
```

**Spacing Features:**
- Uses theme's spacing scale
- Responsive padding system
- Consistent with theme's spacing patterns

#### Template Container Styling
```css
#tribe-events-pg-template.tribe-events-pg-template {
    margin: 0 auto;
    max-width: var(--wp--style--global--wide-size);
    padding-top: 0;
    padding-right: var(--wp--preset--spacing--30);
    padding-left: var(--wp--preset--spacing--30);
}
```

## Event Page Styling

### Full-Width Background Sections

#### Background Extension Technique
```css
.tribe-events-back, 
.tribe-events-notices, 
.tribe-events-single-event-title, 
.tribe-events-schedule {
    background-color: var(--wp--preset--color--tertiary);
    position: relative;
}

.tribe-events-back::before, 
.tribe-events-notices::before, 
.tribe-events-single-event-title::before, 
.tribe-events-schedule::before {
    content: "";
    position: absolute;
    top: 0;
    left: 0;
    right: 0;
    height: 100%;
    background-color: var(--wp--preset--color--tertiary);
    margin-left: -100vw;
    margin-right: -100vw;
    z-index: -1;
}
```

**Background Extension Features:**
- Creates full-width background sections
- Uses theme's tertiary color
- Pseudo-element technique for viewport-wide backgrounds
- Maintains content container constraints

### Event Page Components

#### Event Notices Styling
```css
.tribe-events-single .tribe-events-notices {
    border: 0;
    padding-top: var(--tec-spacer-2);
}

.tribe-events-notices ul li {
    background-color: var(--wp--preset--color--foreground);
    color: var(--wp--preset--color--background);
    border-radius: 20rem;
    padding: 0.25rem 1rem;
    width: fit-content;
    font-size: var(--wp--preset--font-size--small);
}
```

**Notice Features:**
- Pill-shaped notice badges
- High contrast color scheme
- Small font size for subtle presentation
- Fit-content width for compact display

#### Navigation and Title Styling
```css
.tribe-events-back {
    padding-top: var(--wp--preset--spacing--40);
    padding-bottom: 8px;
}

.tribe-events-schedule {
    padding-bottom: var(--wp--preset--spacing--40);
    margin-bottom: var(--wp--preset--spacing--50) !important;
}

.tribe-events-single-event-title { 
    font-weight: 600;
    padding-bottom: 4px;
}
```

**Navigation Features:**
- Consistent spacing with theme system
- Proper visual hierarchy
- Semantic font weights

#### Back Link Styling
```css
.tribe-events-single .tribe-events-back a, 
.tribe-events-single .tribe-events-back a:visited {
    color: var(--tec-color-icon-secondary);
    font-weight: 400;
}
```

### Event Image Optimization
```css
.tribe-events-single .tribe-events-event-image img.wp-post-image {
    aspect-ratio: 16 / 9;
    object-fit: cover;
    height: auto;
    max-width: 100%;
    width: 100%;
}
```

**Image Features:**
- Consistent 16:9 aspect ratio
- Object-fit cover for proper cropping
- Responsive image behavior
- Full-width display

## Button Integration

### Theme Button Consistency
```css
.tribe-common .tribe-common-c-btn, 
.tribe-common a.tribe-common-c-btn, 
.tribe-common button.tribe-common-c-btn,
.tribe-common .tribe-common-c-btn:focus, 
.tribe-common .tribe-common-c-btn:hover, 
.tribe-common a.tribe-common-c-btn:focus, 
.tribe-common a.tribe-common-c-btn:hover, 
.tribe-common button.tribe-common-c-btn:focus, 
.tribe-common button.tribe-common-c-btn:hover {
    padding-top: calc(0.667em + 2px);
    padding-right: calc(1.333em + 2px);
    padding-bottom: calc(0.667em + 2px);
    padding-left: calc(1.333em + 2px);
    border-radius: var(--wp--custom--elements--button--border--radius);
    font-weight: var(--wp--custom--typography--font-weight--medium);
}
```

**Button Integration Features:**
- Identical padding to theme buttons
- Same border radius system
- Consistent font weight
- Covers all button states and element types

## Ticket Integration

### RSVP Styling
```css
.event-tickets .tribe-tickets__rsvp-wrapper {
    background-color: var(--wp--preset--color--tertiary);
}

.event-tickets .tribe-tickets__rsvp {
    padding-top: var(--wp--preset--spacing--30);
    padding-bottom: var(--wp--preset--spacing--30);
}

.event-tickets .tribe-tickets__rsvp-actions-wrapper {
    border: 0;
}

.tribe-tickets__rsvp-actions {
    display: flex;
    flex-direction: column;
    align-items: flex-start;
    padding-top: var(--wp--preset--spacing--30) !important;
}
```

**RSVP Features:**
- Background uses theme tertiary color
- Spacing uses theme spacing scale
- Flexbox layout for actions
- Clean border removal

## Responsive Design

### Mobile Optimization
```css
@media (min-width: 768px) {
    .tribe-events-meta-group {
        width: 332px !important;
    }
}
```

**Responsive Features:**
- Fixed width for event meta on desktop
- Mobile-first approach
- Maintains readability across devices

## Style Variation Compatibility

### Universal Color Integration

The integration works seamlessly across all 21 style variations:

**Examples Across Variations:**

#### Bloom Style
- **Primary Color:** Green accents for event highlights
- **Background:** Elegant tertiary color for event sections
- **Typography:** Serif headings with consistent event titles

#### Tokyo Style
- **Primary Color:** Red accents for event actions
- **Background:** Bold contrast with dark event sections
- **Typography:** Oswald headings for event titles

#### Onyx Style (Dark Theme)
- **Primary Color:** Light accents on dark backgrounds
- **Background:** Dark tertiary colors for event sections
- **Typography:** High contrast text for readability

#### Graphite Style
- **Primary Color:** Subtle gray accents
- **Background:** Modern gray tones for event sections
- **Typography:** Clean sans-serif for professional appearance

### Color Mixing Benefits

The `color-mix()` function provides:
- **Dynamic Color Adaptation:** Colors automatically adjust to theme changes
- **Accessibility Compliance:** Maintains contrast ratios across variations
- **Future-Proof Design:** Works with any theme color scheme
- **Consistent Visual Hierarchy:** Semantic color relationships preserved

## Customization Guide

### Basic Color Customization

#### Via theme.json
```json
{
  "settings": {
    "color": {
      "palette": [
        {
          "slug": "primary",
          "color": "#your-primary-color",
          "name": "Primary"
        },
        {
          "slug": "tertiary",
          "color": "#your-tertiary-color",
          "name": "Tertiary"
        }
      ]
    }
  }
}
```

#### Custom CSS Overrides
```css
/* Custom event accent colors */
:root {
    --tec-color-accent-primary: #your-custom-color;
    --tec-color-event-icon-hover: #your-hover-color;
}

/* Custom event backgrounds */
.tribe-events-back,
.tribe-events-schedule {
    background-color: var(--wp--preset--color--secondary);
}

/* Custom button styling */
.tribe-common .tribe-common-c-btn {
    background-color: var(--wp--preset--color--primary);
    color: var(--wp--preset--color--background);
}
```

### Advanced Layout Customization

#### Container Width Adjustments
```css
.tribe-common .tribe-common-l-container {
    max-width: 1200px; /* Custom max width */
}

#tribe-events-pg-template.tribe-events-pg-template {
    max-width: 1200px; /* Match container width */
}
```

#### Spacing Customization
```css
/* Custom event spacing */
.tribe-events-back {
    padding-top: var(--wp--preset--spacing--60);
    padding-bottom: var(--wp--preset--spacing--20);
}

.tribe-events-schedule {
    margin-bottom: var(--wp--preset--spacing--70) !important;
}
```

### Typography Customization

#### Font Family Override
```css
:root {
    --tec-font-family-sans-serif: var(--wp--preset--font-family--your-font);
}
```

#### Event Title Styling
```css
.tribe-events-single-event-title {
    font-size: var(--wp--preset--font-size--x-large);
    font-weight: 700;
    text-transform: uppercase;
    letter-spacing: 0.05em;
}
```

## Performance Considerations

### CSS Loading Strategy

**Integration Method:**
- Single CSS file for all Events Calendar styling
- No conditional loading (unlike form plugins)
- Comprehensive custom property system
- Minimal performance impact

**Optimization Features:**
- Uses CSS custom properties for dynamic theming
- Leverages browser's CSS cascade efficiently
- Minimal specificity conflicts
- Clean, maintainable code structure

### Browser Compatibility

**Modern CSS Features:**
- `color-mix()` function (requires modern browsers)
- CSS custom properties (widely supported)
- Flexbox layout (universal support)
- CSS Grid (where applicable)

**Fallback Considerations:**
- Graceful degradation for older browsers
- Core functionality maintained without modern features
- Progressive enhancement approach

## Troubleshooting

### Common Issues

#### Colors Not Applying
- **Check:** Theme color palette is properly defined
- **Verify:** Style variation is loading correctly
- **Test:** Browser supports `color-mix()` function
- **Debug:** Use developer tools to inspect custom properties

#### Layout Issues
- **Check:** Container width settings
- **Verify:** Spacing variables are defined
- **Test:** Responsive behavior across devices
- **Debug:** Check for CSS conflicts

#### Button Styling Problems
- **Check:** Theme button system is working
- **Verify:** Custom properties are loading
- **Test:** Hover and focus states
- **Debug:** CSS specificity issues

### Debug Steps

1. **Custom Property Verification:**
   ```css
   /* Test custom property loading */
   .debug-test {
       color: var(--tec-color-text-primary);
       background: var(--tec-color-background);
   }
   ```

2. **Theme Integration Check:**
   - Verify theme.json is loading
   - Check style variation selection
   - Test with default theme settings

3. **Plugin Compatibility:**
   - Ensure Events Calendar plugin is active
   - Check plugin version compatibility
   - Test with minimal plugin configuration

## Future Enhancements

### Potential Improvements

#### Enhanced Integration
- Block editor integration for event blocks
- Custom event templates
- Advanced calendar view styling
- Mobile app-like event interfaces

#### Performance Optimizations
- Critical CSS for above-the-fold events
- Lazy loading for event images
- Optimized CSS delivery
- Reduced specificity where possible

#### Accessibility Enhancements
- Enhanced keyboard navigation
- Better screen reader support
- Improved color contrast options
- WCAG 2.1 AA compliance verification

#### Design System Expansion
- More event layout variations
- Custom event category styling
- Enhanced recurring event display
- Advanced filtering interface styling

This comprehensive integration ensures that The Events Calendar plugin works seamlessly with the Extendable theme, maintaining design consistency while providing a rich, accessible event management experience across all style variations.