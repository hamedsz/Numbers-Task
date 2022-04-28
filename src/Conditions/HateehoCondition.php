<?php

class HateehoCondition implements Condition {

    public function isContains(int $number): bool
    {
        return $number % 2 === 0 && $number % 7 === 0;
    }

    public function getName(): string
    {
        return 'hateeho';
    }
}