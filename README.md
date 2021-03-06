# AdminLTE template for CakePHP v3

[![Software License](https://img.shields.io/badge/license-MIT-brightgreen.svg?style=flat-square)](LICENSE)

[CakePHP] (http://cakephp.org/) theme based on [AdminLTE] (https://almsaeedstudio.com/preview).
AdminTheme uses the following libraries and plugins:
* [Bootstrap 3] (http://getbootstrap.com/)
* [jQuery] (https://jquery.com/)
* [Bootstrap 3 Datepicker] (https://eonasdan.github.io/bootstrap-datetimepicker/)
* [iCheck] (http://icheck.fronteed.com/)
* [Moment.js] (http://momentjs.com/)
* [slimScroll] (http://rocha.la/jQuery-slimScroll)

AdminTheme provides templates for code generation. More details you can check in CakePHP official [documentation] (http://book.cakephp.org/3.0/en/bake/usage.html).

## How to start
* Download the plugin
* Put AdminTheme directory into your `plugins`
* Load theme in your `config/bootstrap.php` file:
```php
Plugin::load('AdminTheme');
```
or use CakePHP shell command to enable the plugin:
```
$ bin/cake plugin load AdminTheme
```

* To use AdminTheme set the theme name in your controller's `beforeRender()` (see details [here] (http://book.cakephp.org/3.0/en/views/themes.html)):
```php
$this->viewBuilder()->theme('AdminTheme');
```