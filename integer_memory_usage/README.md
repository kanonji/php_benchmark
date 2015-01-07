# Integerだけが入った配列は1要素につき150bytesくらいメモリを消費する


```
$ php case_100000.php
Tme: 43ms
Memory Peak: 14.75Mb
Memory Usage: 14.75Mb
1 element: 154.66496 bytes
```

```
$ php case_700000.php
Tme: 389ms
Memory Peak: 99.50Mb
Memory Usage: 99.50Mb
1 element: 149.04758857143 bytes
```
