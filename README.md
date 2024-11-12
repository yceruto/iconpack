# Svg-Twig Icons Collection

A simple way to include and customize icons in your [Twig](https://twig.symfony.com) projects.

## Installation

```console
$ composer require yceruto/iconpack
```

Collections available:
* https://heroicons.com

## Usage

Some Twig template:

```twig
{{ include('@Heroicons/solid/archive-box.svg.twig') }}
```
Output:

```html
<svg xmlns="http://www.w3.org/2000/svg" viewbox="0 0 24 24" fill="white" aria-hidden="true" data-slot="icon" class="size-6">
  <path d="M3.375 3C2.339 3 1.5 3.84 1.5 4.875v.75c0 1.036.84 1.875 1.875 1.875h17.25c1.035 0 1.875-.84 1.875-1.875v-.75C22.5 3.839 21.66 3 20.625 3H3.375Z"></path>
  <path fill-rule="evenodd" d="m3.087 9 .54 9.176A3 3 0 0 0 6.62 21h10.757a3 3 0 0 0 2.995-2.824L20.913 9H3.087Zm6.163 3.75A.75.75 0 0 1 10 12h4a.75.75 0 0 1 0 1.5h-4a.75.75 0 0 1-.75-.75Z" clip-rule="evenodd"></path>
</svg>
```

![archive-box](https://github.com/user-attachments/assets/eee7c644-57e0-4367-9461-4af7f8b853ff)

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
