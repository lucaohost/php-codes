<?php
    require('../Model/Element.class.php');
    require('../Model/Stack.class.php');
    require('../Controler/ServicesStack.class.php');
    
    $stackService = new ServiceStack();
    $element1 = new Element(5);
    $element2 = new Element(7);
    $element3 = new Element(9);
    $stackService->addIntoStack($element1);
    $stackService->addIntoStack($element2);
    $stackService->addIntoStack($element3);
    echo '<br> valor do elemento <b>1</b>: ';
    echo $element1->getValue();
    echo '<br> valor do elemento <b>2</b>: ';
    echo $element2->getValue();
    echo '<br> valor do elemento <b>3</b>: ';
    echo $element3->getValue();
    echo '<br> valor do <b>Elemento Raiz (Primeiro)</b> da stack: ';
    echo Stack::$rootElement->getValue();
    echo '<br> valor do <b>Segundo</b> elemento da stack: ';
    echo Stack::$rootElement->getNextElement()->getValue();
    echo '<br> valor do <b>Terceiro</b> elemento da stack: ';
    echo Stack::$rootElement->getNextElement()->getNextElement()->getValue();

    echo '<BR><BR>Retirada do primeiro elemento<BR>';
    $stackService->removeFromStack();

    echo '<br> valor do elemento <b>1</b>: ';
    echo $element1->getValue();
    echo '<br> valor do elemento <b>2</b>: ';
    echo $element2->getValue();
    echo '<br> valor do elemento <b>3</b>: ';
    echo $element3->getValue();
    echo '<br> valor do <b>Elemento Raiz (Primeiro)</b> da stack: ';
    echo Stack::$rootElement->getValue();
    echo '<br> valor do <b>Segundo</b> elemento da stack: ';
    echo Stack::$rootElement->getNextElement()->getValue();
    echo '<br> valor do <b>Terceiro</b> elemento da stack: ';

    


?>