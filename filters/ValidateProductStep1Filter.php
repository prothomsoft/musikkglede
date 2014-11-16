<?
class filters_ValidateProductStep1Filter extends MachII_framework_EventFilter
{
	function configure() {}
	
    function filterEvent(&$event)
    {
		$newEventArgs = &$event->getArgs();
		if($event->isArgDefined('ProductCategoryId') && $event->getName()!=strtolower("showProductStep1") && $event->getArg('ProductCategoryId') == ""){
			$newEventArgs['message'] = 'Product Category is a required field';
        	$newEventArgs['missingField'] = 'ProductCategoryId';
        	$this->announceEvent('showProductStep1', $newEventArgs);
        	return false;
        }    	
    	return true;
    }
}
?>
