<?php

class NumberPrinter
{
    /**
     * @var Container
     */
    private $container;

    /**
     * @var array
     */
    private $numberNames = [];

    public function __construct(Container $container)
    {
        $this->container = $container;
    }

    private function getNumberNames($number): string
    {
        foreach ($this->container->getConditions() as $condition) {
            if ($condition->isContains($number)) {
                return $condition->getName();
            }
        }

        return (string) $number;
    }

    private function fillNumberNames()
    {
        for ($i = 1; $i <= $this->container->getCountNumbers(); $i++) {
            $this->numberNames[] = $this->getNumberNames($i);
        }
    }

    private function getStringNumberNames()
    {
        return implode($this->container->getSeparator(), $this->numberNames);
    }


    public function doPrint()
    {
        $this->fillNumberNames();
        echo $this->getStringNumberNames();
        echo "\n";
    }
}
