<?php


namespace AcmeCorp\FOF3Basic\Admin\Model;

use FOF30\Container\Container;
use FOF30\Model\DataModel;


class Examples extends DataModel
{

    /**
     * This method is only called after a record is saved. We will hook on it
     *
     * @return  bool
     */
    protected function onBeforeSave(&$data)
    {
        /*echo 'examples datamodel    ';
        var_dump($data);*/
    }

}