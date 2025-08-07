# Extendable Theme Design System Documentation

## Overview

The Extendable theme implements a comprehensive design system built on WordPress's Full Site Editing (FSE) capabilities. The system uses semantic design tokens, fluid typography, and a flexible color system to create consistent, accessible, and customizable designs across all style variations.

## Color System

### Semantic Color Palette

The theme uses a 5-color semantic palette that provides consistent meaning across all style variations:

| Token | CSS Variable | Purpose | Default Value |
|-------|-------------|---------|---------------|
| **Background** | `--wp--preset--color--background` | Primary background color | `#ffffff` |
| **Foreground** | `--wp--preset--color--foreground` | Primary text color | `#0B0620` |
| **Primary** | `--wp--preset--color--primary` | Brand/accent color | `#381d92` |
| **Secondary** | `--wp--preset--color--secondary` | Secondary accent | `#1C0A63` |
| **Tertiary** | `--wp--preset--color--tertiary` | Background alternative | `#F2F2FA` |

### Extended Color Tokens

Some style variations include additional semantic colors:

- **Foreground Alt** (`--wp--preset--color--foreground-alt`): Lighter text for secondary content

### Duotone System

The theme includes 8 predefined duotone filters for image styling:

- **Grayscale**: Black to white
- **Primary**: White to primary color
- **Secondary**: White to secondary color
- **Primary-Secondary**: Primary to secondary gradient
- **Foreground-Primary**: Foreground to primary
- **Foreground-Secondary**: Foreground to secondary
- **Primary-Foreground**: Primary to foreground
- **Background-Tertiary**: Background to tertiary

### Gradient System

8 predefined gradients using semantic color tokens:

- **Vertical gradients**: Secondary to tertiary, secondary to background, tertiary to background
- **Diagonal gradients**: Primary to foreground, secondary to background, background to secondary, tertiary to background, background to tertiary

## Typography System

### Font Families

The theme includes 25 carefully selected web fonts organized by category:

#### Sans-Serif Fonts
- **Inter** (default body font): Modern, highly legible
- **Hind**: Clean, versatile
- **Montserrat**: Geometric, friendly
- **Roboto Flex**: Variable font, technical
- **Heebo**: Rounded, approachable
- **Jost**: Geometric, minimal
- **Manrope**: Modern, readable
- **Mulish**: Minimalist, clean
- **Radio Canada**: Canadian government font
- **Rubik**: Rounded corners
- **Karla**: Grotesque style
- **IBM Plex Sans**: Corporate, technical
- **Archivo**: Narrow, condensed
- **Geom**: Geometric variable font
- **Gotu**: Rounded, friendly
- **Baloo Tamma 2**: Playful, rounded

#### Serif Fonts
- **Arsenal**: Elegant, readable
- **Marcellus**: Classical, refined
- **Source Serif Pro**: Adobe's serif
- **Noto Serif Display**: Google's display serif

#### Display Fonts
- **Oswald**: Condensed, bold
- **Koulen**: Khmer-inspired, bold

#### Monospace Fonts
- **Space Mono**: Retro, technical
- **Inconsolata**: Programmer-friendly

### Font Size Scale

The theme uses a fluid typography system with 5 predefined sizes:

| Size | Slug | Value | Fluid Range |
|------|------|-------|-------------|
| **Small** | `small` | `1rem` | Fixed |
| **Medium** | `medium` | `1.25rem` | Fixed |
| **Large** | `large` | `2.25rem` | `1.39rem` - `2.25rem` |
| **X-Large** | `x-large` | `3rem` | `1.85rem` - `3rem` |
| **XX-Large** | `xx-large` | `3.75rem` | `2.25rem` - `3.75rem` |

### Typography Hierarchy

#### Headings
- **H1**: XX-Large size, semi-bold weight, tight line height (1.15)
- **H2**: X-Large size, semi-bold weight, tight line height (1.15)
- **H3**: Large size, semi-bold weight, tight line height (1.15)
- **H4**: Fluid size (1.5rem - 1.875rem), semi-bold weight
- **H5**: Fluid size (1.25rem - 1.5rem), medium weight, uppercase
- **H6**: 1.125rem, regular weight, uppercase, letter-spacing

#### Body Text
- **Default**: 1.125rem, regular weight, normal line height (1.6)
- **Font Family**: Inter (default), customizable per style variation

### Custom Typography Properties

The theme defines custom CSS properties for consistent typography:

```css
--wp--custom--typography--font-weight--thin: 100
--wp--custom--typography--font-weight--extra-light: 200
--wp--custom--typography--font-weight--light: 300
--wp--custom--typography--font-weight--regular: 400
--wp--custom--typography--font-weight--medium: 500
--wp--custom--typography--font-weight--semi-bold: 600
--wp--custom--typography--font-weight--bold: 700
--wp--custom--typography--font-weight--extra-bold: 800
--wp--custom--typography--font-weight--black: 900

--wp--custom--typography--line-height--tiny: 1.15
--wp--custom--typography--line-height--small: 1.2
--wp--custom--typography--line-height--medium: 1.4
--wp--custom--typography--line-height--normal: 1.6
--wp--custom--typography--line-height--large: 1.8
```

## Spacing System

### Responsive Spacing Scale

The theme uses a 7-step spacing scale with responsive values:

| Name | Slug | Size | Responsive Value |
|------|------|------|------------------|
| **0.9** | `20` | `1rem` | Fixed |
| **1** | `30` | `min(2rem, 5vw)` | Responsive |
| **2** | `40` | `min(3rem, 6vw)` | Responsive |
| **3** | `50` | `min(4rem, 7vw)` | Responsive |
| **4** | `60` | `min(6rem, 8vw)` | Responsive |
| **5** | `70` | `min(7rem, 10vw)` | Responsive |
| **6** | `80` | `min(8rem, 12vw)` | Responsive |

### Layout Constraints

- **Content Width**: `42rem` (672px)
- **Wide Width**: `80rem` (1280px)
- **Default Block Gap**: `var(--wp--preset--spacing--30)` (min(2rem, 5vw))
- **Default Padding**: `var(--wp--preset--spacing--30)` on left and right

### Supported Units

The theme supports these CSS units: `%`, `px`, `em`, `rem`, `vh`, `vw`

## Interactive Elements

### Button System

#### Default Button Styles
- **Border Radius**: `2rem` (pill-shaped)
- **Background**: Primary color
- **Text Color**: Background color
- **Font Weight**: Medium (500)
- **Font Size**: Inherits from parent

#### Button States
- **Hover**: Background changes to foreground color
- **Focus**: Maintains primary background, adds outline
- **Active**: Same as hover state

#### Button Customization
Style variations can override:
- Border radius (e.g., Bloom uses `0.4rem`)
- Padding values
- Font size
- Color scheme

### Input Fields

#### Default Input Styles
- **Border**: 1px solid foreground color
- **Border Radius**: `4px`
- **Background**: Background color
- **Text Color**: Foreground color
- **Font Size**: `1.15rem`
- **Font Weight**: Regular (400)
- **Line Height**: `1.384`
- **Padding**: Calculated with border compensation

## Responsive Behavior

### Fluid Typography

The theme implements fluid typography using CSS `clamp()` functions:
- Large sizes scale between minimum and maximum values
- Scaling is viewport-width based
- Maintains readability across all screen sizes

### Responsive Spacing

Spacing values use `min()` functions to:
- Provide fixed minimum sizes
- Scale with viewport width
- Prevent excessive spacing on large screens

### Breakpoint Strategy

While no explicit breakpoints are defined, the fluid system naturally adapts:
- **Small screens**: Uses minimum values
- **Large screens**: Uses maximum values or viewport-based scaling
- **Mid-range**: Smoothly interpolates between min/max

## Accessibility Features

### Color Contrast

- High contrast between foreground and background colors
- Semantic color system ensures consistent contrast ratios
- Duotone filters maintain accessibility standards

### Typography Accessibility

- Minimum font sizes ensure readability
- Line height values optimize reading comfort
- Font smoothing properties for better rendering

### Interactive Element Accessibility

- Focus states with visible outlines
- Sufficient padding for touch targets
- Color-independent interaction states

### Reduced Motion Support

The theme includes CSS for users who prefer reduced motion:
```css
@media (prefers-reduced-motion: reduce) {
  /* Animation reductions applied */
}
```

## Design Token Architecture

### CSS Custom Properties Structure

The theme uses a hierarchical custom property system:

```css
/* Preset tokens (WordPress core) */
--wp--preset--color--{slug}
--wp--preset--font-size--{slug}
--wp--preset--spacing--{slug}
--wp--preset--font-family--{slug}

/* Custom tokens (theme-specific) */
--wp--custom--typography--font-weight--{weight}
--wp--custom--typography--line-height--{size}
--wp--custom--elements--button--{property}
```

### Token Inheritance

Style variations inherit base tokens and can override:
- Color palette values
- Typography settings
- Element-specific styles
- Custom property values

## Performance Considerations

### Font Loading Strategy

- **Font Display**: `block` for consistent rendering
- **Variable Fonts**: Used where available for smaller file sizes
- **Font Subsetting**: Optimized character sets for web delivery

### CSS Architecture

- Semantic tokens reduce CSS redundancy
- Custom properties enable efficient style variations
- Minimal CSS overrides in style variations

## Browser Support

### Modern CSS Features

The design system requires browsers supporting:
- CSS Custom Properties (CSS Variables)
- CSS `clamp()` and `min()` functions
- CSS Grid and Flexbox
- Variable fonts (with fallbacks)

### Fallback Strategy

- System font stacks for all custom fonts
- Fixed sizes where fluid typography isn't supported
- Graceful degradation for older browsers

## Font Pairing Guide

The theme's style variations demonstrate effective font pairing strategies. Here are the key patterns and recommendations:

### Serif + Sans-Serif Pairings

#### Elegant & Professional
- **Marcellus + IBM Plex Sans** (Bloom style)
  - Use case: Luxury brands, professional services
  - Marcellus for headings (elegant serif)
  - IBM Plex Sans for body text (technical, readable)

- **Arsenal + Radio Canada** (Arsenal-Radio Canada style)
  - Use case: Editorial, publishing
  - Arsenal for headings (readable serif)
  - Radio Canada for body text (government-grade clarity)

- **Source Serif Pro + Inter** (Source Serif Pro-Inter style)
  - Use case: Corporate, technical documentation
  - Source Serif Pro for headings (Adobe's professional serif)
  - Inter for body text (highly legible sans-serif)

- **Source Serif Pro + Roboto Flex** (Source Serif Pro-Roboto Flex style)
  - Use case: Tech companies, modern corporate
  - Source Serif Pro for headings
  - Roboto Flex for body text (variable font flexibility)

- **Noto Serif Display + Radio Canada** (Noto Serif Display-Radio Canada style)
  - Use case: International, multilingual sites
  - Noto Serif Display for headings (Google's display serif)
  - Radio Canada for body text

### Sans-Serif + Sans-Serif Pairings

#### Modern & Clean
- **Montserrat + Inter** (Montserrat-Inter style)
  - Use case: Modern businesses, startups
  - Montserrat for headings (geometric, friendly)
  - Inter for body text (optimized for screens)

- **Montserrat + Heebo** (Montserrat-Heebo style)
  - Use case: Creative agencies, design studios
  - Montserrat for headings
  - Heebo for body text (rounded, approachable)

- **Oswald + Inter** (Oswald-Inter style)
  - Use case: Bold brands, sports, automotive
  - Oswald for headings (condensed, impactful)
  - Inter for body text

- **Jost + Mulish** (Jost-Mulish style)
  - Use case: Minimalist brands, SaaS products
  - Jost for headings (geometric, minimal)
  - Mulish for body text (clean, readable)

#### Unique Character Combinations
- **Gotu + Manrope** (Gotu-Manrope style)
  - Use case: Friendly brands, community sites
  - Gotu for headings (rounded, distinctive)
  - Manrope for body text (modern, readable)

- **Geom + Roboto Flex** (Geom-Roboto Flex style)
  - Use case: Tech startups, modern apps
  - Geom for headings (geometric variable font)
  - Roboto Flex for body text (flexible, technical)

- **Baloo Tamma 2 + Mulish** (Baloo Tamma 2-Mulish style)
  - Use case: Playful brands, children's content
  - Baloo Tamma 2 for headings (playful, rounded)
  - Mulish for body text (clean contrast)

### Single Font Family Approaches

#### Versatile Variable Fonts
- **Archivo** (Archivo style)
  - Use case: News sites, editorial content
  - Single font family with multiple weights
  - Condensed style saves space

- **Heebo** (Heebo style)
  - Use case: Personal blogs, small businesses
  - Variable font with wide weight range
  - Consistent character across all text

- **Hind** (Hind style)
  - Use case: International content, multilingual sites
  - Supports multiple scripts
  - Clean, neutral appearance

- **Rubik** (Rubik style)
  - Use case: Friendly brands, community sites
  - Rounded corners add warmth
  - Good weight range for hierarchy

#### Monospace for Technical Content
- **Space Mono** (Space Mono style)
  - Use case: Developer blogs, technical documentation
  - Retro-futuristic character
  - Fixed-width for code display

### Font Pairing Principles

#### Contrast and Harmony
1. **Weight Contrast**: Pair light headings with medium body text, or bold headings with regular body text
2. **Style Contrast**: Combine serif headings with sans-serif body text for classic appeal
3. **Character Contrast**: Mix geometric fonts with humanist fonts for visual interest

#### Consistency Guidelines
1. **Limit Font Families**: Use maximum 2 font families per design
2. **Maintain Hierarchy**: Ensure clear distinction between heading and body text
3. **Consider Context**: Match font personality to brand and content type

#### Technical Considerations
1. **Loading Performance**: Prefer variable fonts when using single families
2. **Fallback Stacks**: Always include system font fallbacks
3. **Character Support**: Ensure fonts support required languages and characters

### Customization Recommendations

#### For Different Industries
- **Corporate/Professional**: Source Serif Pro + Inter, Montserrat + Inter
- **Creative/Design**: Marcellus + IBM Plex Sans, Gotu + Manrope
- **Tech/Startup**: Oswald + Inter, Geom + Roboto Flex
- **Editorial/Publishing**: Arsenal + Radio Canada, Noto Serif Display + Radio Canada
- **Friendly/Community**: Baloo Tamma 2 + Mulish, Heebo (single family)

#### For Different Content Types
- **Long-form Reading**: Source Serif Pro + Inter, Arsenal + Radio Canada
- **Marketing/Landing Pages**: Montserrat + Inter, Oswald + Inter
- **Technical Documentation**: IBM Plex Sans (single family), Space Mono
- **Creative Portfolios**: Marcellus + IBM Plex Sans, Gotu + Manrope