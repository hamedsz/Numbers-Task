<?php




$firstTaskContainer = (new Container())
    ->setCountNumbers(20)
    ->setSeparator(' ')
    ->addCondition(new PapowCondition())
    ->addCondition(new PowCondition())
    ->addCondition(new PaCondition());

$secondTaskContainer = (new Container())
    ->setCountNumbers(15)
    ->setSeparator('-')
    ->addCondition(new HateehoCondition())
    ->addCondition(new HateeCondition())
    ->addCondition(new HoCondition());

$thirdTaskContainer = (new Container())
    ->setCountNumbers(10)
    ->setSeparator('-')
    ->addCondition(new JoffCondition())
    ->addCondition(new TchoffCondition())
    ->addCondition(new JofftchoffCondition());

(new NumberPrinter($firstTaskContainer))
    ->doPrint();
(new NumberPrinter($secondTaskContainer))
    ->doPrint();
(new NumberPrinter($thirdTaskContainer))
    ->doPrint();