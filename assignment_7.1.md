sharievans/thermx/thermx-class.php/100


```php

function my_money_format($format, $num) { // the funtion is my_money_format with 2 parameters: $format, $num
        if (function_exists('money_format')) {  
            setlocale(LC_MONETARY, $this->thermxLocale);  
            return (money_format($format,$num)); // if true: the return value is money_format($format, $num)
        } else {
            return "$" . number_format($num, 2);  // if false: the return value is a concatination of the number and the $
        }
    }

```

