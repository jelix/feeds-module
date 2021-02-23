This module for Jelix provides tools to read and generate RSS & ATOM feeds.

This module is for Jelix 2.0.x and higher. See the jelix/jelix repository to see
history of classes before Jelix 2.0.


Installation
============

Install it by hands like any other Jelix modules, or use Composer if you installed
Jelix 2.0+ with Composer.

In your project:

```
composer require "jelix/feeds-module"
```

Launch the configurator for your application to enable the module

```bash
php dev.php module:configure jfeeds
```

And then launch the installer to activate the module

```bash
php install/installer.php
```

Usage
=====

See http://docs.jelix.org/en/manual-1.7/.

Unit tests are in Testapp, in the jelix/jelix repository.
