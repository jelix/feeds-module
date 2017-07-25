This module for Jelix provides tools to read and generate RSS & ATOM feeds.

This module is for Jelix 1.7.x. See the jelix/jelix repository to see
history of classes before Jelix 1.7.


Installation
============

Install it by hands like any other Jelix modules, or use Composer if you installed
Jelix 1.7+ with Composer.

In your project:

```
composer require "jelix/feeds-module"
```

Then declare the module into the configuration of your application

```ini
[modules]

jfeeds.access=2
```

And then:

```
php yourapp/cmd.php install
```

Usage
=====

See http://docs.jelix.org/en/manual-1.7/.

Unit tests are in Testapp, in the jelix/jelix repository.