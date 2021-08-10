# Yii2 wave loader

Assalomu aleykum. These components will help you show awesome loader on yii2. It is very simple to use.

-----
## Installation

The preferred way to install this extension is through [composer](http://getcomposer.org/download/).

Either run

```
composer require zafarjonovich/yii2-wave-loader
```

or add

```
"zafarjonovich/yii2-wave-loader": "*"
```

to the require section of your `composer.json` file.

------
## Usage

Add this code to view file

```php

<?php

use zafarjonovich\yii2WaveLoader\WaveWidget;

$config = [];

echo WaveWidget::widget($config);
?>

```

# Config:
backgroundColor - Background color
waterColor - Water color