# Build-in `array_diff()`はPHPで自作した関数より遅い

## PHP 5.5.14

```
$ php --version
PHP 5.5.14 (cli) (built: Nov 12 2014 20:05:22)
```
```
$ php original.php
Tme: 45.568s
Memory Peak: 1.25Mb
Memory Usage: 1.25Mb
Tme: 45.831s
Memory Peak: 1.25Mb
Memory Usage: 1.25Mb
```

```
$ php user.php
Tme: 4.576s
Memory Peak: 1.25Mb
Memory Usage: 1.25Mb
Tme: 4.827s
Memory Peak: 1.25Mb
Memory Usage: 1.25Mb
```


## PHP 5.6.4

```
$ php --version
PHP 5.6.4 (cli) (built: Jan 12 2015 20:11:38)
```

```
$ php original.php
Tme: 44.490s
Memory Peak: 1.25Mb
Memory Usage: 1.25Mb
Tme: 46.550s
Memory Peak: 1.25Mb
Memory Usage: 1.25Mb
```

```
$ php user.php
Tme: 4.452s
Memory Peak: 1.25Mb
Memory Usage: 1.25Mb
Tme: 4.669s
Memory Peak: 1.25Mb
Memory Usage: 1.25Mb
```
