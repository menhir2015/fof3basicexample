<?php


namespace AcmeCorp\FOF3Basic\Admin\Dispatcher;

defined('_JEXEC') or die;



class Dispatcher extends \FOF30\Dispatcher\Dispatcher
{
	/** @var   string  The name of the default view, in case none is specified */
	public $defaultView = 'Examples';


	public function onBeforeDispatch()
	{
        $view = $this->input->getCmd('view', null);
        $task = $this->input->getCmd('task', null);
		echo 'Task : ';
		var_dump($task);
        $layout = $this->input->getCmd('layout', null);
		\JFactory::getApplication()->enqueueMessage("Some debug string(s) <br>". $view ."<br>".$task."<br>".$layout);
	}
}