<?
class filters_ValidateRegistrationFieldsFilter extends MachII_framework_EventFilter
{
	function configure() {}
	
    function filterEvent(&$event)
    {
    	$newEventArgs = &$event->getArgs();;
    	if ($event->isArgDefined('email') && ($event->getArg('email') == '')) {
    		$arrResult = array(validationResult => false,  
						  errorMessage => "Epost er et obligatorisk felt.",
						  fieldName => "formRegistrationEmail");
			echo json_encode($arrResult);
			return false;    		
        }
        
        // check if such email is in database
        if ($event->isArgDefined('email') && ($event->getArg('email') != '')) {
        	$objUserDao = new UserDao();
        	$email = $event->getArg('email');
        	$objUserBean = $objUserDao->getByEmail($email);
        	if($objUserBean->getUserId() != "") {
        		$arrResult = array(validationResult => false,  
						  errorMessage => "Email already exists in database.",
						  fieldName => "formRegistrationEmail");
				echo json_encode($arrResult);
				return false;
        	}
        }
        
        if ($event->isArgDefined('password') && ($event->getArg('password') == '')) {
        	$arrResult = array(validationResult => false,  
						  errorMessage => "Passord er et obligatorisk felt.",
						  fieldName => "formRegistrationPassword");
			echo json_encode($arrResult);
			return false;
        }
        return true;        
    }
}
?>
