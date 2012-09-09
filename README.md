Azot: CodeIgniter assets management made easy
=============================================

Azot is Codeigniter helper that makes assets management easy.

Installation
------------

### Via Sparks

    php tools/spark install azot

### Manually

Move the files in the correct place:
helpers in the helpers folder, config files in the config folder, etc.

Configuration
-------------

In the Azot spark folder, there is a config file called `azot.php`. Inside
of it there are some configuration variables. Once you set them, create the
appropriate folders in the root of your application (same level as
`index.php`).

Usage
-----

Azot provides you with a couple of helper functions to include css and
javascript files more easily.

### `css_link_tag()`

`css_link_tag()` takes one argument: the URI of the file **inside the assets
folder**.

    <?php echo css_link_tag('style.css'); ?>

If you kept the default configuration, the code above is equivalent to:

    <link rel="stylesheet" href="<?php echo base_url('assets/css/style.css'); ?>">

### `javascript_include_tag()`

`javascript_include_tag()` is the same as `css_link_tag()` but for javascript.
It takes one argument which is the URI of the file inside the assets folder.

    <?php echo javascript_include_tag('script.js'); ?>

Again, if you kept the default configuration, the code above is equvalent to:

    <script src="<?php echo base_url('assets/js/script.js'); ?>"></script>

### `jquery_include_tag()`

`jquery_include_tag()` generates a script tag with an src attribute pointing
to Google CDN's version of jQuery. It takes one argument: the version of
jQuery you want to include. The default version is `1.8.1`.

    <?php echo jquery_include_tag(); ?>

### `jqueryui_include_tag()`

`jqueryui_include_tag()` is the same function as `jquery_include_tag`, but for
jQuery UI. It takes one parameter which is the version of jQuery UI. The default
version is `1.8.23`.

        <?php echo jqueryui_include_tag(); ?>

License
-------

Copyright (c) 2012 Aziz Light

Permission is hereby granted, free of charge, to any person obtaining a copy of this software and associated documentation files (the "Software"), to deal in the Software without restriction, including without limitation the rights to use, copy, modify, merge, publish, distribute, sublicense, and/or sell copies of the Software, and to permit persons to whom the Software is furnished to do so, subject to the following conditions:

The above copyright notice and this permission notice shall be included in all copies or substantial portions of the Software.

THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY, FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM, OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN THE SOFTWARE.