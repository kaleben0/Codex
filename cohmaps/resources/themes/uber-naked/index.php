<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
    <title>City of Heroes Maps</title>
    <link rel="shortcut icon" href="<?php echo THEMEPATH; ?>/images/favicon.ico" />
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="theme-color" content="#37474f" />
<meta name="mobile-web-app-capable" content="yes">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
<link rel="stylesheet" type="text/css" href="<?php echo THEMEPATH; ?>/style.css" />
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.1/css/all.css" integrity="sha384-gfdkjb5BdAXd+lj+gudLWI+BXq4IuLW5IT+brZEZsLFm++aCMlF1V92rMkPaX4PP" crossorigin="anonymous">
<link rel="stylesheet" type="text/css" href="../codex.css" />

    <?php echo $gallery->getColorboxStyles(1); ?>

    <script type="text/javascript" src="//code.jquery.com/jquery-2.1.4.min.js"></script>
    <?php echo $gallery->getColorboxScripts(); ?>

    <?php file_exists('googleAnalytics.inc') ? include('googleAnalytics.inc') : false; ?>
<script language="javascript" type="text/javascript">
     var images = new Array()
     var images2 = new Array()
     var images3 = new Array()

     images[0] = "../images/cov_large.png";
     images[1] = "../images/coh_gr_large.png";
     images[2] = "../images/coh_large.png";
     images2[0] = "../images/city_back_blue.png";
     images2[1] = "../images/city_back_red.png";
     images2[2] = "../images/city_back_gr.png";
     images3[0] = "linear-gradient(#000428, #004e92)";
     images3[1] = "linear-gradient(#1f1c18, #8e0e00)";
     images3[2] = "linear-gradient(#333333, #c9ad1c)";

//     setInterval("changeImage()", 8000);
//     setInterval("changeImage2()", 8000);
//     setInterval("changeImage3()", 8000);

     var x=0;

     	function changeImage()
     {
                document.getElementById("switch").src=images[x]
                x++;
		if (images.length == x) 
                {
                    x = 0;
                }
     }
	function changeImage2()
     {   
		document.getElementById("switch2").style.backgroundImage = "url("+images2[x]+")";
		$("#switch2").fadeIn(1600);
              
              }
	function changeImage3()
     {  
		$('#galleryList li').css("background", images3[x]);
	     }
</script>
<script>
function force_change() {
	changeImage();
	changeImage2();
	changeImage3();
}
</script>

</head>

<body id="switch2" style="max-width:unset;">
<div >
<div class="main_title"  onclick="force_change();" ><img src="../images/coh_large.png" width="256" height="256". id="switch"></div>
<div class="sub_title"><img src="../images/codex.png" width="200" height="45"></div>
<br/>
<br/>
<hr/>
<div class="page_header" onclick="location.reload();">Paragon City Maps</div>
<hr/>
<br/>
</div>
<br/>
<div class="sub_header">World Map</div>
<br/>
	<?php $gallery = UberGallery::init()->createGallery('gallery-images/', 'world_map'); ?>
<br/>
<div class="sub_header">Hero Zones</div>
<br/>
        <?php $gallery = UberGallery::init()->createGallery('gallery-images/heroes', 'heroes'); ?>
<br/>
<div class="sub_header">Villain Zones</div>
<br/>
        <?php $gallery = UberGallery::init()->createGallery('gallery-images/villains', 'villains'); ?>
<br/>
<div class="sub_header">Praetorian Zones</div>
<br/>
        <?php $gallery = UberGallery::init()->createGallery('gallery-images/praetorian', 'praetorian'); ?>
<br/>
<div class="sub_header">PVP Zones</div>
<br/>
        <?php $gallery = UberGallery::init()->createGallery('gallery-images/pvp', 'pvp'); ?>
<br/>
<div class="sub_header">Co-op Zones</div>
<br/>
        <?php $gallery = UberGallery::init()->createGallery('gallery-images/coop', 'coop'); ?>
<div class="home_button2" onclick="window.open('https://rednet.pw:48512/coh-codex/','_self')"><i class="fas fa-home"></i></div>

</body>

</html>
