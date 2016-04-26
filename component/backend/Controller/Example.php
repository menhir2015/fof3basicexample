<?php

namespace AcmeCorp\FOF3Basic\Admin\Controller;

defined('_JEXEC') or die;

use AcmeCorp\FOF3Basic\Admin\Model\Examples;
use FOF30\Controller\DataController;

class Example extends DataController
{
 
        
    protected function onAfterSave()
    {
        //echo ' menhircontroller';
        //exit;
        //$this->setRedirect(\JRoute::_('index.php'));

    }
    
}
