# YammerMessage

You can post message for Yammer.

# Quick start

## Installation
```
composer require ssmr9dt/YammerMessage
```

Reference test/start.php

## How to Use
```php
require __DIR__ . "/../vendor/autoload.php";

$YammerMessage = new ssmr9dt\YammerMessage();
$YammerMessage->sendMessage("Hello, World.", 11111, ["cc" => ["ssmr9dt@gmail.com"]]);
```

# License
This software is released under the MIT License, see LICENSE.
