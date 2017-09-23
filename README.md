# Effortless: a syntax theme for Atom

**Effortless** is a clean and clear syntax theme for Atom, with bright Monokai-inspired colours and a background of _cool gray_ 😎. It has internally consistent style and colour, and is optimised for high read performance and **maximum eye-scannability™**. 👀

<img src="https://github.com/dhoulb/png/screenshot-js.png" width="435" alt="A screenshot of the effortless-syntax theme for Atom showing JavaScript code"><img src="https://github.com/dhoulb/png/screenshot-php.png" width="480" alt="A screenshot of the effortless-syntax theme for Atom showing PHP code">

<img src="https://github.com/dhoulb/png/screenshot-html.png" width="865" alt="A screenshot of the effortless-syntax theme for Atom showing CSS code">

<img src="https://github.com/dhoulb/png/screenshot-css.png" width="1047" alt="A screenshot of the effortless-syntax theme for Atom showing CSS code">

## Markup languages

Enjoy documentation! Markup languages (like **Markdown**) have been given special attention in Effortless. The low-contrast colour scheme is optimised for calm longform reading and writing, and key tags pop _just enough_ to be dangerous. 🏝

![A screenshot of the effortless-syntax theme for Atom](png/screenshot-markup.png)

## Recommended settings

To maximise readability of text and markup documents in Atom we also recommended adjusting the line-length settings in the **language-gfm** and **language-text** packages in Atom's settings:

- Preferred Line Length: **100**
- Show Invisibles: **No**
- Show Indent Guide: **No**
- Soft Wrap: **Yes**
- Soft Wrap At Preferred Line Length: **Yes**
- Scroll Past End: **Yes**

## Fonts

In case you're looking for an outstanding fixed-width font recommendations: I highly recommend **[Nitti](https://www.boldmonday.com/typeface/nitti/)** by Pieter van Rosmalen from Bold Monday. This is what the **[iA Writer](https://ia.net/writer/)** folks use for their great distraction-free writing app. It's a premium font, so unfortunately it can't be distributed with the theme, but it does make for an exceptional coding experience. 

If you've purchased it, just add `Nitti` to the start of your font stack in Atom's settings to start using it with all themes.

I recommend **Light (300)** weight for most text. Effortless is set in `font-weight: 300` by default. Although bold _is_ used occasionally in Effortless, Atom/Blink's faux-bold does a good enough job that you probably don't need to buy both weights.

If you like a more relaxed coding experience, bumping your Font Size in Atom's settings to 16 is a cool and refreshing experience.

Some people will _definitely_ think it's odd to buy a premium font, but if you're coding professionally you're probably going to be looking at this screen for more of your life than you spend in bed, so it's a purchase that'll be suitably amortised over a number of years. Plus you can probably expense it!

## Theme development

Effortless is a strong base for forking. All code is well commented to provide examples examples of the types of components they correspond to, and uses LESS's `:extend()` to minimise repetition.

- [syntax-source.less](styles/syntax-variables.less) - Variables and colours.
- [syntax-source.less](styles/syntax-source.less) - Source code syntax (e.g. PHP, Javascript, HTML)
- [syntax-markup.less](styles/syntax-markup.less) - Markup language syntax (e.g. Markdown)

### Syntax theme classname guide

As I was themeing, I accidentally wrote a **reference guide to syntax theme classnames in Atom!** See [SYNTAX.md — a guide to Atom syntax theme classnames](SYNTAX.md). If you're making a theme (and you like lists!), it'll probably help you too.

## Matching UI theme

I'll definitely be making a matching UI theme, I just haven't gotten to it yet. Watch this space. 👀

_— Dave_