# Syntax guide

This document explains how syntax highlighting classes are applied in Atom. Atom uses a superset of the TextMate syntax highlighting system, which you can read more about here: https://manual.macromates.com/en/language_grammars

> All elements below are targeted in LESS/CSS in Atom themes using the `.syntax--` prefix, e.g. `.syntax--comment` for comments or `.syntax--entity.syntax--name.syntax--function` for function names.

## Wrappers

Every line in Atom is wrapped in one of the following wrapper classes that describes which grammar is being used. These wrappers might be nested if the grammar changes mid-line (e.g. `<h1><?php the_title(); ?></h1>`). 

- `text` — for plain text and HTML text
	- `text.html` — for HTML text
- `source` — for source code (e.g. PHP or JavaScript) or markup languages (e.g. Markdown)

> Note: Since all PHP code is inside `<?php` tags, all code is considered to exist in an HTML text wrapper, so all `.syntax--source` will have an outer `.syntax--text.syntax--html` wrapper, even if the entire line is PHP code.

## Source code

Individual elements of source code are broken down and wrapped in `<span>` elements, which are tagged with the following classnames:

- `comment` — e.g. `// A comment!`
- `meta` — meta-wrappers, e.g. entire definitions like `function () {  }`
	- `meta.delimiter` — a delimiter between two elements, e.g. the `.` dot in `obj.prop`
		- _Atom's JS grammar is wrong here — it should be a `punctuation.delimiter`_
	- `meta.brace` — an opening or closing brace for, e.g. `[`, `{` around arrays and objects
		- _Atom's JS grammar is wrong here — it should be a `punctuation.definition`_
- `invalid` — broken invalid code
	- `invalid.illegal` — illegal sytax, e.g. unclosed blocks or non-escaped ampersand in HTML
	- `invalid.depreciated` — keywords that have been depreciated by the language/framework
- `entity` — sections of code, e.g. classes, functions, tags
	- `entity.name` — the name of a section of code
		- `entity.name.function` — the name of a function, e.g. `myfunc`
		- `entity.name.type` — the name of a type declaration or class, e.g. `MyClass`
			- `entity.name.class` — the name of a type or class, e.g. `MyClass`
		- `entity.name.tag` — the name of an XML-style tag, e.g. `h1`
		- `entity.name.section` — the name of any other type of section/heading, e.g. `My section header`
	- `entity.other` — other types of entities
		- `entity.other.attribute-name` — Attribute names in tags e.g. `onclick`
		- `entity.other.inherited-name` — The name of an inherited class e.g. `MySuperClass`
- `keyword` — keywords that don't fall into the other following groups
	- `keyword.operator`
		- `keyword.operator.logical` — logical operators e.g. `||` or `OR` or `&&`
		- `keyword.operator.bitwise` — bitwise operators e.g. `|` or `&`
		- `keyword.operator.ternary` — ternary operators e.g. `?` or `:`
		- `keyword.operator.comparison` — comparison operators e.g. `===` or `>=`
		- `keyword.operator.assignment` — assignment operators e.g. `=` (or `:` in JS objects)
		- `keyword.operator.key` — key operators e.g. `=>` in PHP
		- `keyword.operator.string` — string operators e.g. `.` and `.=` in PHP
	- `keyword.separator`
		- `keyword.separator.key-value` — e.g. `:` after property names in CSS
- `storage` — keywords related to storing data
	- `storage.type` — type of storage e.g. `var`, `let`, `const`, `function`
	- `storage.modifier` — describe the storage e.g. `public`, `private`, `final`
- `constant` — language constants e.g. `MYCONST`
	- `constant.numeric` — numbers e.g. `12` or `88888`
	- `constant.character` — encoded characters e.g. `&amp;` or `\031`
	- `constant.language` — language constants e.g. `true`, `false`, `undefined`, `null`
- `variable` — e.g. `$my_var` or `myVar`
	- `variable.parameter` — variables in function calls, e.g. `myfunc($my_var)`
	- `variable.language` — variables built into the language, e.g. `$this`
- `support` — keywords for things provided by the language/framework itself (not user-defined)
	- `support.function` — functions provided by the language/framework, e.g. `strlen` or `parseInt`
	- `support.type` — types provided by the language/framework, e.g. `null`, `string` or `int`
	- `support.class` — classes provided by the language/framework, e.g. `Closure` or `HTMLElement`
	- `support.constant` — constants provided by the language/framework, e.g. `__DIR__`
	- `support.variable` — variables provided by the language/framework, e.g. `document` or `window`
- `punctuation` — special characters used in source code e.g. `<`
	- `punctuation.definition` — punctuation that defines something
		- `punctuation.definition.type` — e.g. `{` and `}` in type definitions
		- `punctuation.definition.class` — e.g. `{` and `}` in `class MyClass {  }`
		- `punctuation.definition.function` — e.g. `{` and `}` in `function myFunc() {  }`
		- `punctuation.definition.separator` — e.g. `:` colon in `{ color: red }`
		- `punctuation.definition.string` — e.g. `'` or `"`
		- `punctuation.definition.comment` — e.g. `\\` or `/*`
		- `punctuation.definition.entity` — e.g. `:` colon in `a:active`
		- `punctuation.definition.variable` — e.g. `$` colon in `$my_var`
		- `punctuation.definition.keyword` — e.g. `@` colon in `@media {  }`
	- `punctuation.terminator` — e.g. `;` at the end of lines
	- `punctuation.delimiter` — e.g. `,` between array elements
	- `punctuation.section` — e.g. `{`...`}` and `[`...`]`
- `string` — e.g. `"A string!"`
	- `string.regexp` — e.g. `/[a-z]+/ig`

## Markup languages

Markup languages (like Markdown) have a separate set of classnames. Ideally markup won't contain any classnames from source code syntax. _Unfortunately bugs exist in Atom's GitHub Markdown grammar which means Markdown markup does include some source code classnames. These are noted below._

- `markup` — Any markup elements.
	- `markup.underline` — e.g. `++text++`
		- `markup.underline.link` — e.g. `[GitHub!](https://github.com)`
	- `markup.bold` — e.g. `**italic**`
	- `markup.heading` — e.g. lines starting with `# `
		- `markup.heading.heading-1` — e.g. first level of heading e.g. `# Heading`
		- `markup.heading.heading-2` — e.g. second level of heading e.g. `## Subheading`
	- `markup.italic` — italic text, e.g. `_italic_`
	- `markup.strike` — strikethrough text, e.g. `~~strikethrough~~`
	- `markup.quote` — e.g. lines starting with `> `
	- `markup.raw` — preformatted text, e.g. "`<h1>`"
	- `markup.code` — fenced code blocks, e.g. ```js alert('Lol!') ```
	- `markup.table` — wraps a table, e.g. `|Table|`
	- `markup.border` — wraps table border characters, e.g. `|` and `-`
	- `markup.list` — a list row, e.g. lines starting with `-`, `*` or `1.`
	- `markup.hr` — a horizontal rule, e.g. `***` or `---`
	- `markup.marker` — all punctuation in markup, e.g. `*`, `-`, `>`, `###` etc...

### GitHub Markdown support

Unfortunately the default GitHub Markdown grammar includes several bugs. To ensure compatibility you need to make adjustments to your styling rules:

- Several elements are not in the markup group so don't include the `markup` class
- List markers are mis-tagged as `punctuation.list`
- Links include `span.punctuation` characters that must be overridden
- Links are tagged as `link` not `markup.link`
- Horizontal rules are mistagged as `comment.hr`
- Blockquotes are mistagged as `comment.quote`
- Most elements don't mark up the `markup.marker`

A set of LESS rules that translate the default GitHub Markdown syntax to the standard `markup` classnames is available in [syntax-markup.less](styles/syntax-markup.less), and can be reused in other themes.

## Grammar descriptors

Every tagged element in Atom is also tagged with a class specifying the current grammar. These can (but probably shouldn't) be used to target rules at specific languages.

- `php` — PHP source code
- `js` — JavaScript source code
	- `jsx` — React JSX source code
- `basic` — HTML text (not `html` or it would clash with the wrapper class)
- `plain` — plain text (not `text` or it would clash with the wrapper class)
- `gfm` — GitHub Markdown
- _etc..._