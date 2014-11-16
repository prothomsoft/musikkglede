<?
class filters_ValidateContactFormFieldsFilter extends MachII_framework_EventFilter
{
	function configure() {}
	
    function filterEvent(&$event)
    {
    	if ($event->isArgDefined('Email') && ($event->getArg('Email') == '')) {
        	$newEventArgs['message'] = 'txtEmail';
        	$newEventArgs['missingField'] = 'Email';
        	$this->announceEvent($event->getArg('failEvent'), $newEventArgs);
        	return false;
        }
        if(!preg_match('|^[_a-z0-9.-]*[a-z0-9]@[_a-z0-9.-]*[a-z0-9].[a-z]{2,3}$|e', $event->getArg('Email'))) {
        	$newEventArgs['message'] = 'txtEmailIncorrect';
        	$newEventArgs['missingField'] = 'Email';
        	$this->announceEvent($event->getArg('failEvent'), $newEventArgs);
        	return false;
    	}
    	return true;     
    }
}
?>
