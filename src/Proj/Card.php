<?php

namespace App\Proj;

class Card
{
    /**
     * @var array<int> $suits
     */
    private array $suits = array("spades" => 127137, "hearts" => 127153, "diamonds" => 127169, "clubs" => 127185);
    /**
     * @var array<string> $value
     */
    private array $value;
    private string $face;
    private string $match;

    public function __construct(int $number, string $suit)
    {
        $card = "&#" . strval(intval($this->suits[$suit]) + $number) . ";";
        $this->face = $card;
        $this->value = [strval($number + 1), $suit];
        $this->match = $suit . $this->value[0];
    }

    public function card(): string
    {
        return $this->face;
    }

    /** @return array<string> */
    public function value(): array
    {
        return $this->value;
    }

    /** @return string */
    public function match(): string
    {
        return $this->match;
    }
}
