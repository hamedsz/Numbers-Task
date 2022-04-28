<?php

class PaCondition implements Condition {

    public function isContains(int $number): bool
    {
        return $number % 3 == 0;
    }

    public function getName(): string
    {
        return 'pa';
    }
}