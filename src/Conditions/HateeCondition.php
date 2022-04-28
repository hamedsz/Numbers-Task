<?php

class HateeCondition implements Condition {

    public function isContains(int $number): bool
    {
        return $number % 2 == 0;
    }

    public function getName(): string
    {
        return 'hatee';
    }
}