<?
class filters_ValidateForgotPasswordFieldsFilter extends MachII_framework_EventFilter
{
	function configure() {}
	
    function filterEvent(&$event)
    {
    	$newEventArgs = &$event->getArgs();;
    	if ($event->isArgDefined('email') && ($event->getArg('email') == '')) {
    		$arrResult = array(validationResult => false,  
						  errorMessage => "Epost er et obligatorisk felt.",
						  fieldName => "formForgotPasswordEmail");
			echo json_encode($arrResult);
			return false;    		
        }
        return true;
    }
}
?>
