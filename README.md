# yii2-multiselect

## Install

Via Composer

```bash
$ composer require "igor162/yii2-multiselect:dev-master"
```

or add

```
"igor162/yii2-multiselect": "dev-master"
```

to the require section of your `composer.json` file.


## Usage

On your view file.

```php

<?php
use igor162\MultiSelect\MultiSelect;
?>

<?= $form->field($model, 'children')->widget(MultiSelect::className(), [
    'items' => $items,
    'selectedItems' => $children,
    'ajax' => false,
    ]) ?>

```

For more options, visit: https://github.com/igor162/yii2-multiselect
