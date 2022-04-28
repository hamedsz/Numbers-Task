<?php
namespace NumbersTask\Conditions;

use NumbersTask\Condition;

class JoffCondition implements Condition {

    public function isContains(int $number): bool
    {
        return $number === 1 || $number === 4 || $number === 9;
    }

    public function getName(): string
    {
        return 'joff';
    }
}