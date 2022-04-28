<?php

class PowCondition implements Condition {

    public function isContains(int $number): bool
    {
        return $number % 5 == 0;
    }

    public function getName(): string
    {
        return 'pow';
    }
}