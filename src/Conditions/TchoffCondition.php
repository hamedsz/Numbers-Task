<?php
namespace NumbersTask\Conditions;

use NumbersTask\Condition;

class TchoffCondition implements Condition {

    public function isContains(int $number): bool
    {
        return $number > 5;
    }

    public function getName(): string
    {
        return 'tchoff';
    }
}