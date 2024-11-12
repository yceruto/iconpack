from pathlib import Path
from urllib.parse import urlparse

import scrapy


class Heroicons(scrapy.Spider):
    name = 'heroicons'
    start_urls = [
        'https://heroicons.com/outline',
        'https://heroicons.com/solid',
        'https://heroicons.com/mini',
        'https://heroicons.com/micro',
    ]
    attributes = ['fill', 'stroke', 'stroke-width', 'class']

    def parse(self, response, **kwargs):
        icon_type = Path(urlparse(response.url).path).name

        for grid in response.css('.grid'):
            for group in grid.css('.group'):
                icon_name = group.css('div:last-child::text').get()
                icon_svg = group.css('svg').get()
                icon_attrs = group.css('svg').attrib

                # Setting Twig variables and defaults
                for name in icon_attrs:
                    value = icon_attrs[name]
                    if name in self.attributes:
                        twig_var = name.replace('-', '_')
                        icon_svg = icon_svg.replace(f'{name}="{value}"', f'{name}="{{{{ {twig_var}|default(\'{value}\') }}}}"')

                file_name = f'{icon_type}/{icon_name}.svg.twig'
                with open(file_name, 'w', encoding='utf-8') as file:
                    file.write(icon_svg)
