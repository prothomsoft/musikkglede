<?php
/** 
 * Keeps list of events allowed when user is not logged to the system
 * events names must be lower case
 */
class EventsAllowedForEveryone {
	
	public $eventsAllowedForEveryone = array(

	// IDENTITY
	isAdministrator,
	
	getproducttabledata,
	getproductsearchtabledata,
	
	  // HOME
	  fotografia_slubna_krakow,
	  start,
	  pomoc,
	  wyniki_wyszukiwania,
	  produkty,
	  produkt,
	  activation,
	  fotografia_slubna_krakow_przygotowania,
	  fotografia_slubna_krakow_slub,
	  fotografia_slubna_krakow_wesele,
	  fotografia_slubna_krakow_plener,
	  	  
	  // platnosci
	  payment_ok,
	  payment_error,
	  payment_online,
	  
	  // newsletter
	  newsletter,
	  newsletter_potwierdzenie,
	  executenewsletteraction,
	  
	  // wskazowki_dojazdu
	  
	  wskazowki_dojazdu,
	  
	  // shopping cart
	  koszyk,
	  executeaddshoppingcartaction,
	  executeclearshoppingcartaction,
	  executeupdateshoppingcartaction,
	  executeremoveshoppingcartaction,
	  saveshoppingcartstate,
	  
	  blog,
	  wydarzenie,
	  zdjecia,
	  zdjecie,
	  blog_portfolio,
	  blog_o_mnie,
	  blog_polecam,
	  blog_kontakt,
	  blog_kontakt_action,
	  
	  findproductbyname,
	  findproducerbyname,
	  
	  blank,
	  offer,
	  student_offer,
	  
	  download,	  
	  
	  // LINKS
	  showlinksview,

	  // FAQS
	  showfaqsview,

	  // TESTIMONIALS
	  showtestimonialsview,
	  
	  // DISCLAIMER
	  showdisclaimerview,
	
	  // CMS CONTENT
      rsg,
      
      language,

      // USER REGISTER UCONTROL
	  createuserforcompany,
      createuserforcompanyaction,
      showuserforcompanyview,

      // CONTACT
      contact,

      // SITEMAP
      sitemap,
      
      // FINISHING
      finishing,
      
      // FURNISHING
      furnishing,
      
      // LOGIN/LOGOUT
      login,
      executelogin,
      executelogout,
      executeregistration,
      executecontact,
      executesamples,
      executeforgotpassword,
      
      // PROPERTIES COMPONENT
      properties,
      property,
      search_list,
      search_gallery,
      search_map,
      search_list_scroller,
      
      // FORGOT PASSWORD
      showforgotpasswordform,
      showforgotpasswordaction,
      showforgotpasswordview,
      
      // NEWS
      videos,
      video,
      shownewsslist,
      
      // NEWSARCHIVE
      shownewsarchiveslist,
      shownewsarchivedetails,
      
      // GALERIA
      showgaleriaslist,
      showgaleriaview,
      
      // GALERIAARCHIVE
      showgaleriaarchiveslist,
      showgaleriaarchivedetails,
      
      // STORE COMPONENT
      showproductslist,
      showproductdetails,
      showshoppingcart,
      executeaddshoppingcartaction,
      executeclearshoppingcartaction,
      executeupdateshoppingcartaction,
      executeremoveshoppingcartaction,
      
      // PAYFORACCESS USER REGISTER
      showpayforaccessform,
      executepayforaccessaction,
      showpayforaccessview,
      
      executeauthorizepayment,
      executeaccessprocessorder,
      showaccessordersuccessview,
      showaccessorderfailview,
      
      // SUBSCRIPTION
      showsubscriptionform,
      executesubscriptionaction,
      showsubscriptionview,
      
      showrecommendsitewindow,
      showdisclaimerwindow,
      
      // CUSTOMER QUESTION
      executecustomerquestion,
      
      profesjonalna_fotografia_slubna,
      profesjonalny_fotograf_slubny,
	  profesjonalne_zdjecia_slubne,
	  fotograf_godny_polecenia,
	  linki_do_fotografii_slubnej,
	  kontakt_z_profesjonalnym_fotografem_slubnym,
	  kontakt_action,
	  pass,
	  sitemap,
	        
      
    );
}
?>
