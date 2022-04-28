<?php

namespace NumbersTask;

use NumbersTask\Conditions\HateeCondition;
use NumbersTask\Conditions\HateehoCondition;
use NumbersTask\Conditions\HoCondition;
use NumbersTask\Conditions\JoffCondition;
use NumbersTask\Conditions\JofftchoffCondition;
use NumbersTask\Conditions\PaCondition;
use NumbersTask\Conditions\PapowCondition;
use NumbersTask\Conditions\PowCondition;
use NumbersTask\Conditions\TchoffCondition;


class Application
{
    public static function main(){
        $container = (new Container())
            ->setCountNumbers(20)
            ->setSeparator(' ')
            ->addCondition(new PapowCondition())
            ->addCondition(new PowCondition())
            ->addCondition(new PaCondition());

        (new NumberPrinter($container))
            ->doPrint();

        $container = (new Container())
            ->setCountNumbers(15)
            ->setSeparator('-')
            ->addCondition(new HateehoCondition())
            ->addCondition(new HateeCondition())
            ->addCondition(new HoCondition());

        (new NumberPrinter($container))
            ->doPrint();

        $container = (new Container())
            ->setCountNumbers(10)
            ->setSeparator('-')
            ->addCondition(new JoffCondition())
            ->addCondition(new TchoffCondition())
            ->addCondition(new JofftchoffCondition());

        (new NumberPrinter($container))
            ->doPrint();
    }
}