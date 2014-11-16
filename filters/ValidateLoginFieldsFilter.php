<?
class filters_ValidateLoginFieldsFilter extends MachII_framework_EventFilter
{
	function configure() {}
	
    function filterEvent(&$event)
    {
    	$newEventArgs = &$event->getArgs();;
    	if ($event->isArgDefined('login') && ($event->getArg('login') == '')) {
    		$newEventArgs['id1'] = 'formLoginEmail';
    		$this->announceEvent($event->getArg('failEvent'), $newEventArgs);
    		return false;
    	}
    	if ($event->isArgDefined('password') && ($event->getArg('password') == '')) {
    		$newEventArgs['id1'] = 'formLoginEmail';
    		$this->announceEvent($event->getArg('failEvent'), $newEventArgs);
    		return false;
    	}    	
        return true;        
    }
}
?>
