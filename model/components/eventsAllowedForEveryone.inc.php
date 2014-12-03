<?php
/** 
 * Keeps list of events allowed when user is not logged to the system
 * events names must be lower case
 */
class EventsAllowedForEveryone {
	
	public $eventsAllowedForEveryone = array(

	// IDENTITY
	isAdministrator,
	
	sendemail,
	
	getproducttabledata,
	getproductsearchtabledata,
	
	 videoarticles,
	 articles,
	 article,
	 
	 contact_information,
	
	  // HOME
	  zamowienie,
      zamowienie_adres,
      zamowienie_platnosc,
      zamowienie_potwierdzenie,
      
      // USERACCOUNT
      moje_konto_start,
      moje_konto,
      bezplatny_pakiet_promocyjny,
      bezplatny_pakiet_promocyjny_zapisz,
      bezplatny_pakiet_promocyjny_potwierdzenie,
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
	  
	  musikkgaver_page,
	  musikkgaver,
	  collections,
	  pomoc,
	  wyniki_wyszukiwania,
	  products,
	  product,
	  shopping_cart,
	  produkty,
	  produkt,
	  activation,
/*	  fotografia_slubna_krakow,
	  fotografia_slubna_krakow_przygotowania,
	  fotografia_slubna_krakow_slub,
	  fotografia_slubna_krakow_wesele,
	  fotografia_slubna_krakow_plener,*/
	  facebook_close2you,
	  executenewsletteraction,
	  
	  // platnosci
	  payment_ok,
	  payment_error,
	  payment_online_member,
	  payment_online_store,
	  
	  // newsletter
	  contact_form,
	  executecontactaction,
	  contact_form_confirmation,
	  
	  // rezerwacja
	  membership,
	  membership_confirmation,
	  executemembershipaction,
	  
	  // wskazowki_dojazdu
	  
	  wskazowki_dojazdu,
	  
	  // shopping cart
	  koszyk,
	  executeaddshoppingcartaction,
	  executeclearshoppingcartaction,
	  executeupdateshoppingcartaction,
	  executeremoveshoppingcartaction,
	  saveshoppingcartstate,
	  savetester,
	  saveperfumetka1,
	  saveperfumetka2,
	  
/*	  blog,
	  wydarzenie,
	  zdjecia,
	  zdjecie,
	  blog_portfolio,
	  blog_o_mnie,
	  blog_polecam,
	  blog_kontakt,
	  blog_kontakt_action,*/
	  
	  findproductbyname,
	  findproducerbyname,
	  
/*	  blank,
	  offer,
	  student_offer,*/
	  
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
	  
	  news,
	  news_entry,
	  news_comment,
	  news_comment_save,
	  news_comment_confirm,
	  
	  //widoki
	  aktualnosci,
	        
      
    );
}
?>
