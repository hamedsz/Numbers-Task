<?php

class PapowCondition implements Condition {

    public function isContains(int $number): bool
    {
        return $number % 3 == 0 && $number % 5 == 0;
    }

    public function getName(): string
    {
        return 'papow';
    }
}