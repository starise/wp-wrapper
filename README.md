# WordPress Wrapper Class

WordPress class for easily manage templates following the DRY principle.

## Requirements

* PHP >= 5.4
* WordPress >= 3.5

## Installation

You can install this plugin via command-line or using the WordPress admin panel.

### via Command-line

Using [Composer](https://getcomposer.org/), add Post Type Class to your project's dependencies.

```sh
composer require starise/wp-wrapper-class
```

Then activate the plugin via [wp-cli](http://wp-cli.org/commands/plugin/activate/).

```sh
wp plugin activate wp-wrapper-class
```

### via WordPress Admin Panel

1. Download the [latest zip](https://github.com/starise/wp-wrapper-class/archive/master.zip) of this repo.
2. In your WordPress admin panel, navigate to Plugins->Add New
3. Click Upload Plugin
4. Upload the zip file that you downloaded.

## Quick Start

Declare the use of the class in `functions.php`, then start using the class:

```php
use Starise\WordPress\Wrapper as Wrapper;

function template_path() {
  return Wrapper::$main_template;
}
```

For more details please [check out this page](https://roots.io/sage/docs/theme-wrapper/)
