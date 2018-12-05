# yii2 yac cache driver

## how to

modify config in file `config/web.php` or `config/console.php`

```

    'components' => [
        'yac' => [
            'class' => 'Knowbox\Libs\YacCache',
        ],
    ...
```

then you may use `yac` cache on DB `schemaCache`

```
[
        'class' => 'yii\db\Connection',
        'charset' => 'utf8',
        'enableSchemaCache' => true,
        'schemaCacheDuration' => 3600,
        'schemaCache' => 'yac',
   ...
```

or other things in yii2 way, [follow the guide](https://www.yiiframework.com/doc/guide/2.0/en/caching-data)