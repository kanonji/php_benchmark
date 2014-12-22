# `foreach`をネストするより、事前に回して配列を整形しておく方が早い

事前に整形するのに`foreach`でも`array_column()`でも、速度にあまり違いは無い。


```
$ php nested.php
Result: 1200000
Tme: 1.209s
Memory Peak: 14.75Mb
Memory Usage: 1024.00Kb
```

```
$ php preformed_column.php
Result: 1200000
Tme: 706ms
Memory Peak: 14.75Mb
Memory Usage: 1024.00Kb
```

```
$ php preformed_foreach.php
Result: 1200000
Tme: 728ms
Memory Peak: 14.75Mb
Memory Usage: 1024.00Kb
```
