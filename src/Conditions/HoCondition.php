<?php
namespace NumbersTask\Conditions;

use NumbersTask\Condition;

class HoCondition implements Condition {

    public function isContains(int $number): bool
    {
        return $number % 7 == 0;
    }

    public function getName(): string
    {
        return 'ho';
    }
}