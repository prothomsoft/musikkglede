<?php
/** 
 * Keeps list of events allowed for user level
 * events names must be lower case
 */
class EventsAllowedForLevel {

	// LEVEL 0 - ADMINISTRATOR
	public $eventsAllowedForLevel_0 = array(
      // PRIVILAGES
      isadministrator,
      
	  // ADMIN HOME
	  startadmin,
      
       // CMS CATEGORIES
	  showcmscategorieslist,
	  
	  // CMS CONTENT
	  showcmscontentlist,
	  getcmscontenttabledata,
	  showcreatecmscontentform, 
      executecreatecmscontentaction, 
      showeditcmscontentform, 
      executeeditcmscontentaction, 
      showfinalcmscontentview, 
      executeremovecmscontentaction,
            	  	  	  	  	  
	  // UPDATE CATEGORIES
	  showupdatecategorylist,
	  
	  blank,
	  
	  // APPROVED USERS MANAGEMENT
      showusersapprovedlist,
      getusersapprovedtabledata,
      showcreateuserapprovedform,
      executecreateuserapprovedaction,
	  showedituserapprovedform,
	  executeedituserapprovedaction,
	  showuserapprovedview,
	  executeremoveusersapprovedaction,
	  
	  // PRODUCERS MANAGEMENT
      showproducerslist,
      getproducerstabledata,
      showcreateproducerform,
      executecreateproduceraction,
	  showeditproducerform,
	  executeeditproduceraction,
	  showproducerview,
	  executeremoveproducersaction,
	  
	  // ORDERS MANAGEMENT
      showorderslist,
      getorderstabledata,
      showcreateorderform,
      executecreateorderaction,
	  showeditorderform,
	  executeeditorderaction,
	  showorderview,
	  executeremoveordersaction,
	  
	  // POINTS MANAGEMENT
      showpointslist,
      getpointstabledata,
      showcreatepointform,
      executecreatepointaction,
	  showeditpointform,
	  executeeditpointaction,
	  showpointview,
	  executeremovepointsaction,
	  
	  // productcategory
	  showproductcategorieslist,
	  	  
	  // product management
	  getproducttabledata,
	  showproductslist,
	  showproductstep1,
	  showproductstep2,
	  showproductstep3,
	  showproductstep4,
	  executewizardclose,
	  executeremoveproductaction,
	  findproductpicturebyproductid,
	  executeproductpictureremove,
	  executeproductpicturesetmain
    );
    
    // LEVEL 1 - ZONE 1 - $4.99
    public $eventsAllowedForLevel_1 = array(
      // PRIVILAGES
      isuser,
      
      // ADMIN HOME
      startadmin,
      
       // USERACCOUNT
      moje_konto_start,
      moje_konto,
      zmiana_hasla,
      zmiana_hasla_zapisz,
      zmiana_hasla_potwierdzenie,
      moje_konto_zapisz,
      moje_konto_potwierdzenie,
      punkty,
      getpointstabledata,
      historia_zamowien,
      getorderstabledata,
      getpointstabledata,
      executecreateorder,
      executecreateorderandpayment,
      zamowienie,
      zamowienie_adres,
      zamowienie_platnosc,
      zamowienie_potwierdzenie
    );
    
    // LEVEL 2 - ZONE 2 - $4.99
    public $eventsAllowedForLevel_2 = array(
      // PRIVILAGES
      ismanager,
    
      // ADMIN HOME
      startadmin    
    );
}
?>
