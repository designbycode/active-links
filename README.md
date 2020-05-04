# Active Links

[![Latest Stable Version](https://poser.pugx.org/designbycode/laravel-helpers/v/stable)](https://packagist.org/packages/designbycode/laravel-helpers)
[![Total Downloads](https://poser.pugx.org/designbycode/laravel-helpers/downloads)](https://packagist.org/packages/designbycode/laravel-helpers)
[![Latest Unstable Version](https://poser.pugx.org/designbycode/laravel-helpers/v/unstable)](https://packagist.org/packages/designbycode/laravel-helpers)
[![License](https://poser.pugx.org/designbycode/laravel-helpers/license)](https://packagist.org/packages/designbycode/laravel-helpers)
[![composer.lock](https://poser.pugx.org/designbycode/laravel-helpers/composerlock)](https://packagist.org/packages/designbycode/laravel-helpers)
[![GitHub stars](https://img.shields.io/github/stars/DesignByCode/laravel-helpers?style=social)](https://github.com/DesignByCode/Laravel-Helpers/stargazers)
[![Twitter](https://img.shields.io/twitter/url?style=social&url=https%3A%2F%2Ftwitter.com%2FDesign_By_Code)](https://twitter.com/intent/tweet?text=Wow:&url=https%3A%2F%2Fgithub.com%2FDesignByCode%2FLaravel-Helpers)

## Introduction to active links
__Active links__ is a easy way to set a __active__ class to any link on you page. 

### Install with composer
```
$ composer require designbycode/active-links
```


### Active an class of active for links
Active link for navigation to active on page.
```php
<a href="{{ url('/') }}" class='{{ Active::link('/') }}'>Home</a>
or
<a href="{{ url('/') }}" class='{{ active_link('/') }}'>Home</a>
```
Add custom active classes or change the helpers config file for global changes.

```php
<a href="{{ url('/') }}" class='{{ Active::link('/', 'active open' ) }}'>Home</a>
or
<a href="{{ url('/') }}" class='{{ active_link('/', 'active open') }}'>Home</a>
```
### Active html body class to route name and route name with body prefix

```html 
// Example
// <body class="body body-home home">
```

```php
<body class="{{ Active::bodyClass() }}">
    ...
<body class="{{ set_body() }}">
    ...
```

Classes can be added or remove passing 2 arrays. The first array will add classes and the second array will exclude classes. 
```php
<body class="{{ Active::bodyClass(['foo', 'bar'], ['body', 'foo-bar']) }}">
    ...
<body class="{{ set_body(['foo', 'bar'], ['body', 'foo-bar']) }}">
    ...
```

### Config Helpers
Run the following command to publish config helpers to set global class names.
```
php artisan vendor:publish --provider=DesignByCode\Helpers\Providers\HelpersServiceProvider
```

## License

Laravel UI is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).
