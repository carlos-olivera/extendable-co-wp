# Extendable Theme Style Variations Guide

This document provides a comprehensive overview of all 19 style variations available in the Extendable WordPress theme, including their characteristics, use cases, and customization options.

## Overview

Each style variation in Extendable represents a complete design system with its own:
- Color palette (5 semantic colors)
- Typography pairing (heading + body fonts)
- Button styling and interactions
- Duotone filter combinations
- Visual personality and aesthetic

## Style Variation Categories

### Elegant & Sophisticated
**Bloom** - Serif elegance with nature-inspired green tones  
**Graphite** - Modern minimalism with sophisticated grays  
**Onyx** - High-contrast dark theme with premium feel  

### Bold & Dynamic  
**Tokyo** - Urban energy with bold red accents  
**Orange** - Vibrant citrus-inspired design  
**Rio** - Carnival colors with Brazilian flair  

### Calm & Professional
**Lagoon** - Serene blue tones for professional sites  
**Fusion Sky** - Contemporary sky-blue aesthetic  
**Glasgow** - Clean Scottish minimalist approach  

### Cultural & Regional
**Cairo** - Middle Eastern influenced typography  
**Hong Kong** - Asian-inspired modern design  
**Kampala** - African-inspired warm earth tones  
**Piraeus** - Greek coastal aesthetic  
**Porto** - Portuguese maritime design  
**Santa Fe** - Southwestern American style  
**Thimphu** - Himalayan-inspired tranquil design  

### European Sophistication
**Brisbane** - Australian modern design  
**Gdansk** - Polish clean geometric style  
**Odesa** - Eastern European elegance  

## Detailed Style Breakdown

### Bloom
**Personality:** Elegant, natural, sophisticated  
**Best For:** Lifestyle blogs, wellness sites, boutique businesses  
**Colors:**
- Primary: #014932 (Deep forest green)
- Secondary: #395144 (Sage green)  
- Tertiary: #FFEFEA (Warm cream)
- Background: #ffffff (Pure white)
- Foreground: #000000 (Black text)

**Typography:**
- Headings: Marcellus (serif)
- Body: IBM Plex Sans
- Weight: Light (400) for elegant feel

**Button Style:** Rounded corners (0.4rem), medium padding

### Graphite  
**Personality:** Modern, clean, professional  
**Best For:** Corporate sites, portfolios, tech companies  
**Colors:**
- Primary: #292929 (Charcoal)
- Secondary: #303030 (Dark gray)
- Tertiary: #E9E8E6 (Light gray)
- Background: #ffffff (White)
- Foreground: #000000 (Black)

**Typography:**
- Headings: Gotu (sans-serif)
- Body: Manrope
- Weight: Regular (400) for clean readability

**Button Style:** Fully rounded (2rem), hover transitions

### Tokyo
**Personality:** Bold, energetic, urban  
**Best For:** Creative agencies, startups, modern businesses  
**Colors:**
- Primary: #d61935 (Vibrant red)
- Secondary: #e3f2f2 (Light teal)
- Tertiary: #ffeae6 (Soft pink)
- Background: #ffffff (White)
- Foreground: #010101 (Near black)

**Typography:**
- Headings: Oswald (uppercase, bold)
- Body: Inter
- Style: Uppercase headings for impact

**Button Style:** Standard radius, bold presence

### Onyx
**Personality:** Sophisticated, high-contrast, premium  
**Best For:** Luxury brands, photography, high-end services  
**Colors:**
- Primary: #FFFFFF (Pure white)
- Secondary: #C4C4C4 (Light gray)
- Tertiary: #000000 (Pure black)
- Background: #17181A (Dark charcoal)
- Foreground: #FFFCFC (Off-white)

**Typography:**
- Headings: Archivo (medium weight)
- Body: Archivo
- Weight: 500 for enhanced readability on dark

**Button Style:** Minimal radius (0.2rem), subtle hover

### Lagoon
**Personality:** Calm, trustworthy, professional  
**Best For:** Healthcare, finance, consulting, education  
**Colors:** Blue-based palette with calming tones  
**Typography:** Clean, readable font pairing  
**Use Case:** Professional services requiring trust

## Typography Combinations by Style

### Serif Heading Styles
- **Bloom:** Marcellus + IBM Plex Sans
- **Arsenal Styles:** Arsenal + Radio Canada
- **Source Serif:** Source Serif Pro + Inter/Roboto Flex
- **Noto Serif:** Noto Serif Display + Radio Canada

### Sans-Serif Modern Styles  
- **Graphite:** Gotu + Manrope
- **Tokyo:** Oswald + Inter
- **Onyx:** Archivo + Archivo
- **Montserrat Styles:** Montserrat + Heebo/Inter

### Display & Unique Styles
- **Baloo Tamma:** Baloo Tamma 2 + Mulish
- **Geom:** Geom + Roboto Flex
- **Jost:** Jost + Mulish
- **Space Mono:** Space Mono (monospace)

## Color Psychology & Use Cases

### Green Tones (Bloom, Nature-inspired)
- **Psychology:** Growth, harmony, freshness
- **Best For:** Wellness, organic products, environmental
- **Industries:** Health, sustainability, lifestyle

### Gray Tones (Graphite, Professional)
- **Psychology:** Stability, sophistication, neutrality
- **Best For:** Corporate, technology, consulting
- **Industries:** Finance, law, architecture

### Red Tones (Tokyo, Energy)
- **Psychology:** Energy, passion, urgency
- **Best For:** Creative agencies, entertainment, food
- **Industries:** Marketing, restaurants, events

### Blue Tones (Lagoon, Trust)
- **Psychology:** Trust, reliability, calm
- **Best For:** Healthcare, finance, education
- **Industries:** Medical, banking, technology

### Dark Themes (Onyx, Premium)
- **Psychology:** Luxury, sophistication, mystery
- **Best For:** Photography, luxury brands, creative
- **Industries:** Fashion, art, premium services

## Customization Guidelines

### Modifying Existing Styles
1. **Color Adjustments:** Modify the 5 semantic color tokens
2. **Typography Changes:** Update font families in theme.json
3. **Spacing Tweaks:** Adjust the 7-point spacing scale
4. **Button Styling:** Customize radius, padding, hover states

### Creating Custom Variations
1. **Duplicate** an existing style JSON file
2. **Rename** with your custom title
3. **Modify** color palette and typography
4. **Test** across all templates and patterns
5. **Validate** accessibility and contrast ratios

### Best Practices
- Maintain semantic color relationships
- Ensure sufficient color contrast (WCAG AA)
- Test typography readability at all sizes
- Verify button accessibility and hover states
- Check duotone filter compatibility

## Technical Implementation

### Style Variation Structure
```json
{
  "title": "Style Name",
  "version": 3,
  "settings": {
    "color": {
      "palette": [...],
      "duotone": [...]
    },
    "custom": {
      "elements": {
        "button": {...}
      }
    }
  },
  "styles": {
    "elements": {
      "heading": {...}
    },
    "typography": {...}
  }
}
```

### Color Token System
Each style must define these semantic tokens:
- `background` - Main background color
- `foreground` - Primary text color  
- `primary` - Brand/accent color
- `secondary` - Secondary accent
- `tertiary` - Background alternative

### Duotone Filters
Each style includes coordinated duotone filters:
- Primary + Secondary combinations
- Background + Tertiary pairs
- Foreground + Background contrasts

## Performance Considerations

### Font Loading
- All fonts use `font-display: block` for optimal loading
- WOFF2 format provides best compression
- Variable fonts reduce file size when available

### CSS Optimization
- Style variations only override necessary properties
- Base theme provides consistent foundation
- Custom properties enable efficient updates

### Browser Support
- CSS custom properties required (IE11+)
- Fallback fonts specified for all custom fonts
- Progressive enhancement for advanced features

## Accessibility Features

### Color Contrast
- All style variations meet WCAG AA standards
- High contrast options available (Onyx)
- Color is never the only indicator

### Typography Accessibility
- Minimum 16px base font size
- Adequate line height for readability
- Sufficient font weight for clarity

### Interactive Elements
- Focus indicators on all interactive elements
- Hover states provide clear feedback
- Button styling maintains accessibility

## Migration & Updates

### Switching Between Styles
1. Navigate to **Appearance > Editor > Styles**
2. **Browse styles** to preview options
3. **Activate** desired style variation
4. **Customize** further if needed

### Preserving Customizations
- Custom colors may need adjustment
- Typography settings transfer automatically  
- Template modifications remain intact
- Pattern customizations persist

### Update Considerations
- New style variations added in updates
- Existing styles may receive refinements
- Custom modifications should be documented

---

**Choose the style that matches your vision** and customize it to create a unique brand experience with Extendable's flexible design system.