<?php


namespace App;



class Currency
{
    /** @var string */
    private $isoCode;

    public const CURRENCY_USD = 'USD';
    public const CURRENCY_EUR = 'EUR';

    private $currencies = [
        self::CURRENCY_EUR,
        self::CURRENCY_USD,
    ];

    public function __construct(string $isoCode)
    {
        $this->setIsoCode($isoCode);

    }


    /**
     * @return string
     */
    public function getIsoCode(): string
    {
        return $this->isoCode;
    }

    /**
     * @param string $isoCode
     */
    public function setIsoCode(string $isoCode): void
    {
        if (!in_array($isoCode, $this->currencies)){
            throw new \InvalidArgumentException();
        }
        $this->isoCode = $isoCode;
    }


    public function equals(Currency $currency): bool
    {
        return $this->getIsoCode() === $currency->getIsoCode();
    }

    public function __toString(): string
    {
        return $this->getIsoCode();
    }

}

