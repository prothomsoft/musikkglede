<?
require_once("model/components/session.inc.php");
$objAppSession=new AppSession();
$SN = $objAppSession->getSession('SN');
?>

<?$objCmsContent = $event->getArg('objCmsContent'); ?>

<div>
	<div class="left-cms-content" style="padding-left:10px; float: left; width:250px; ">
		<p><img src="<?=$SN?>images/headers/welcome.png" /></p>
		<p style="text-transform: uppercase;">After more than 30 years <br/>of exploring artistic expression working as architect/designer <br/>i discovered pure joy in jewelry design.</p>
 <p style="text-transform: uppercase;">My inspiration to create <br/>jewelry developed as form of self-expression and desire to encourage woman to dress and show off her beauty.</p>
<p style="text-transform: uppercase;">Each necklace have independent personality so when wearing <br/>one of my original pieces with jeans,a coctail dress or business attire, know that like yourself it comes from a beautifull and empowering place.</p>				
	</div>
	<div style="float: right;">

            <script type="text/javascript" language="javascript">
	            var fadeimages=new Array();
	            fadeimages[0]=["<?=$SN?>images/slide/slide4.jpg", "<?=$SN?>collections.html", ""];
				fadeimages[1]=["<?=$SN?>images/slide/slide4_1.jpg", "<?=$SN?>collections.html", ""];	            
	            new fadeshow(fadeimages, 720, 480, 0, 5200, 0);
            </script>
	</div>
	<div class="ui-helper-clearfix spacer">
	</div> <!-- end .ui-helper-clearfix spacer -->
</div>