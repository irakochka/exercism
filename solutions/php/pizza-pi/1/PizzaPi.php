<?php

class PizzaPi
{
public function calculateDoughRequirement(int $pizzas, int $persons): int
    {
        return $pizzas * (($persons * 20) + 200);
    }

public function calculateSauceRequirement(int $pizzas, int $sauceCanVolume): int
{
    return (int) ceil(($pizzas * 125) / $sauceCanVolume);
}

public function calculateCheeseCubeCoverage(
    int $cheeseDimension,
    float $thickness,
    int $diameter
): int {
    return (int) floor(
        ($cheeseDimension ** 3) / ($thickness * pi() * $diameter)
    );
}

public function calculateLeftOverSlices(int $pizzas, int $friends): int
{
    return ($pizzas * 8) % $friends;
}
}
