<?php

// docker run --rm --interactive --tty --volume $PWD:/app composer dump-autoload  {for composer}

use App\{Currency, Money};

require_once 'vendor/autoload.php';

$currency1 = new Currency(Currency::CURRENCY_USD);
$currency2 = new Currency(Currency::CURRENCY_USD);

$result = $currency1->equals($currency2);

$money1 = new Money(100, new Currency(Currency::CURRENCY_USD));
$money2 = new Money(100, $currency2);

$result = $money1->equals($money2);

var_dump($result);

$money1->add($money2);

echo $money1->getAmount() . ' ' . $money1->getCurrency();
echo '<br>';
echo $money2->getAmount() . ' ' . $money1->getCurrency();


