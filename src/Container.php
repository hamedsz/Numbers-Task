<?php

class Container{

    /**
     * @var Condition[]
     */
    private $conditions = [];

    /**
     * @var string
     */
    private $separator;

    /**
     * @var int
     */
    private $countNumbers;


    /**
     * @return Condition[]
     */
    public function getConditions(): array
    {
        return $this->conditions;
    }

    /**
     * @param Condition[] $conditions
     */
    public function addCondition(Condition $conditions)
    {
        $this->conditions[] = $conditions;
        return $this;
    }

    /**
     * @return string
     */
    public function getSeparator(): string
    {
        return $this->separator;
    }

    /**
     * @param string $separator
     */
    public function setSeparator(string $separator)
    {
        $this->separator = $separator;
        return $this;
    }

    /**
     * @return int
     */
    public function getCountNumbers(): int
    {
        return $this->countNumbers;
    }

    /**
     * @param int $countNumbers
     */
    public function setCountNumbers(int $countNumbers)
    {
        $this->countNumbers = $countNumbers;
        return $this;
    }
}