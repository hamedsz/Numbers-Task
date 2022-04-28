<?php

interface Condition
{
    public function isContains(int $number) : bool;
    public function getName() : string;
}