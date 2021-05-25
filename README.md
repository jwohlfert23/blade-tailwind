# Laravel TALL

A set of opinionated blade components to be used in the TALL stack (Tailwind, Alpine, Livewire, Laravel). Based on the examples provided via Tailwind UI.

## Installation

```bash
composer require jwohlfert23/laravel-tall
```

Be sure to install and compile tailwind following their instructions here: https://tailwindcss.com/docs/installation

Once installed, to make these components work, you will need to add an override breakpoint, so that you are able to override default
tailwind classes.

```js
const { screens } = require('tailwindcss/defaultTheme');
module.exports = {
    theme: {
        screens: {
            ...screens,
            override: '0px',
        }
    }
}
```

In practice, this will allow "bg-blue-500 override:bg-green-500" to always be a green button. Shout out to @ianjamieson for this
solution (https://github.com/tailwindlabs/tailwindcss/discussions/1446#discussioncomment-525828)

## Usage

Just use these components in your blade templates like so:

```html
<x-date :date="Carbon::now()" />
```

Documentation on each component coming soon. For now, it's best to look at the source code.

## Contributing

Please see [CONTRIBUTING](.github/CONTRIBUTING.md) for details.

## Security Vulnerabilities

Please review [our security policy](../../security/policy) on how to report security vulnerabilities.

## Credits

- [Jack Wohlfert](https://github.com/jwohlfert23)
- [All Contributors](../../contributors)

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.
