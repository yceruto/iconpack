# Svg-Twig Icons Collection

A simple way to include and customize icons in your [Twig](https://twig.symfony.com) projects.

Collection available:
 * https://heroicons.com

## Installation

```console
$ composer require yceruto/iconpack
```

## Usage

Some Twig template:

```twig
{{ include('@Heroicons/solid/archive-box.svg.twig') }}
```

Some SVG attributes can be modified using Twig parameters: 

```twig
{{ include('@Heroicons/solid/archive-box.svg.twig', {'class': 'size-7'}) }}
```

Available parameters are:

 * `fill` Sets the color to fill the inner areas of the SVG shape. Accepts any CSS color value.
 * `class` Adds custom CSS classes to the SVG, allowing for additional styling, such as size or visibility adjustments.
 * `stroke` Specifies the color of the SVG outline or border, which can enhance or change the SVG’s edge visibility.
 * `stroke_width` Defines the width of the SVG outline, making the border thicker or thinner depending on the value.

> Note that some icon templates don't include the `stroke` and `stroke_width` variables 
> as there are useless for some icons.

## Contribution

Update templates files definition:

```shell
$ ./bin/update.sh
```

## License

This software is published under the [MIT License](LICENSE)
