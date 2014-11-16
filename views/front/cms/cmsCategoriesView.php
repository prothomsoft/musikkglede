<?
require_once("model/components/session.inc.php");
require_once("model/components/MenuBuilderFR.inc.php");
require_once("model/CmsCategoryDao.inc.php");
$objAppSession=new AppSession();
$SN = $objAppSession->getSession('SN');
$objCmsContent = $event->getArg('objCmsContent');
?>
		
<?$objCmsCategoryDao = new CmsCategoryDao();
if($objCmsContent->getCmsCategoryId() != "") {
	$objCmsCategory = $objCmsCategoryDao->read($objCmsContent->getCmsCategoryId());
	$fatherCategoryId = $objCmsCategory->getFatherId();
	
	$objCmsCategory1 = $objCmsCategoryDao->read($fatherCategoryId);
	$menu = new MenuBuilderFR();?>
	<div class="menu_left"><?
	if($fatherCategoryId == 0) {					
		echo $menu->get_menu_html($objCmsContent->getCmsCategoryId());
	} else {
		echo $menu->get_menu_html($fatherCategoryId);
	}?>
	</div>
								
<?}?>
	
	
