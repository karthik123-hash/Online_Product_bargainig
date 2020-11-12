<?php
 error_reporting(E_ALL ^ E_NOTICE);     //      To erase the Notice because the variables below first used in this scope
session_start();
$pname=$_POST['mob'];
$_SESSION['lag']="0";
$con=mysql_connect("localhost","root","");
if(!$con)
{
die('Could not connect:' .mysql_error());
}
mysql_select_db("pcstore",$con);
$result = mysql_query("SELECT * FROM products where PName='$pname'");
if(mysql_num_rows($result)==0) 
{
      echo "Product Not Found";// row not found, do stuff...
	  die();
} 
else 
{
$cdate=date("Y-m-d");
$mdate=date("2016-01-05");  //site open
$diff = (strtotime($cdate)- strtotime($mdate))/24/3600; 
if($diff<=15)// Begining of the Site 
{
	$X=0.15;
	while($row = mysql_fetch_array($result))
	{
	$Price=$row['Price'];   //actual price from table   4200
	$Y=$Price*$X;           // additional ammount   300
	$ZPrice=ceil($Price+$Y);         // 4300
	$SPrice=ceil($ZPrice+($ZPrice*0.10));  // 200   4500
	$_SESSION['cprice'] = $SPrice;
	$_SESSION['sprice'] = $SPrice;
	$_SESSION['oprice'] = $ZPrice;
	$_SESSION['Price']=$Price;
	$_SESSION['pn'] = $pname;
	}
}
else// Based on the sales of previous 1 week
{
	$ldate=date('Y-m-d', strtotime("-1 week"));   //mining the data from table  based on previous 7 day sale
	$result1= mysql_query("SELECT SUM(Qty) from orders where PName='$pname' and Date>='$ldate'");
	while($sale = mysql_fetch_array($result1))
    $totalsale=$sale[0];
	if($totalsale < 20)
	$totalsale=21;
	$total=$totalsale/7;
    $X=$total*0.05;

	while($row = mysql_fetch_array($result))
	{
	$Price=$row['Price'];
	$Y=$Price*$X;
	$ZPrice=ceil($Price+$Y);
	$SPrice=ceil($ZPrice+($ZPrice*0.10));
	$_SESSION['cprice'] = $SPrice;
	$_SESSION['sprice'] = $SPrice;
	$_SESSION['oprice'] = $ZPrice;
	$_SESSION['Price']=$Price;
	$_SESSION['pn'] = $pname;
	}
}

/* redirecting to the pages based on the product name */

if(strcmp($pname,'Nokia 500')==0)
{
header("Location: http://localhost/OBDM/MobilesPage/Nokia500.php");
}
else if(strcmp($pname,'Nokia Asha 210')==0)
{
header("Location: http://localhost/OBDM/MobilesPage/NokiaAsha210.php");
}
else if(strcmp($pname,'Nokia Asha 303')==0)
{
header("Location: http://localhost/OBDM/MobilesPage/NokiaAsha303.php");
}
else if(strcmp($pname,'Nokia Asha 311(grey)')==0)
{
header("Location: http://localhost/OBDM/MobilesPage/NokiaAsha311g.php");
}
else if(strcmp($pname,'Nokia Asha 311(red)')==0)
{
header("Location: http://localhost/OBDM/MobilesPage/NokiaAsha311r.php");
}
else if(strcmp($pname,'Nokia Asha 501')==0)
{
header("Location: http://localhost/OBDM/MobilesPage/NokiaAsha501.php");
}
else if(strcmp($pname,'Nokia Lumia 520')==0)
{
header("Location: http://localhost/OBDM/MobilesPage/NokiaLumia520.php");
}
else if(strcmp($pname,'Nokia Lumia 820')==0)
{
header("Location: http://localhost/OBDM/MobilesPage/NokiaLumia820.php");
}
else if(strcmp($pname,'Nokia Lumia 925(black)')==0)
{
header("Location: http://localhost/OBDM/MobilesPage/NokiaLumia925w.php");
}
else if(strcmp($pname,'Nokia Lumia 925(white)')==0)
{
header("Location: http://localhost/OBDM/MobilesPage/NokiaLumia925b.php");
}





else if(strcmp($pname,'Micromax Aisha A52')==0)
{
header("Location: http://localhost/OBDM/MobilesPage/MicromaxAishaA52.php");
}
else if(strcmp($pname,'Micromax Bolt A27')==0)
{
header("Location: http://localhost/OBDM/MobilesPage/MicromaxBoltA27.php");
}
else if(strcmp($pname,'Micromax Canvas2 A110')==0)
{
header("Location: http://localhost/OBDM/MobilesPage/MicromaxCanvas2A110.php");
}
else if(strcmp($pname,'Micromax Canvas2 Plus A110Q')==0)
{
header("Location: http://localhost/OBDM/MobilesPage/MicromaxCanvas2PlusA110Q.php");
}
else if(strcmp($pname,'Micromax Canvas Doodle A111')==0)
{
header("Location: http://localhost/OBDM/MobilesPage/MicromaxCanvasDoodleA111.php");
}
else if(strcmp($pname,'Micromax Canvas Fun A74')==0)
{
header("Location: http://localhost/OBDM/MobilesPage/MicromaxCanvasFunA74.php");
}
else if(strcmp($pname,'Micromax Canvas HD A116')==0)
{
header("Location: http://localhost/OBDM/MobilesPage/MicromaxCanvasHDA116.php");
}
else if(strcmp($pname,'Micromax Canvas Music A88')==0)
{
header("Location: http://localhost/OBDM/MobilesPage/MicromaxCanvasMusicA88.php");
}
else if(strcmp($pname,'Micromax Canvas Viva A72')==0)
{
header("Location: http://localhost/OBDM/MobilesPage/MicromaxCanvasVivaA72.php");
}
else if(strcmp($pname,'Micromax Smarty 4.3 A65')==0)
{
header("Location: http://localhost/OBDM/MobilesPage/MicromaxSmarty4.3A65.php");
}







else if(strcmp($pname,'Samsung Galaxy Ace S5830i')==0)
{
header("Location: http://localhost/OBDM/MobilesPage/SamsungGalaxyAceS5830i.php");
}
else if(strcmp($pname,'Samsung Galaxy Chat B5330')==0)
{
header("Location: http://localhost/OBDM/MobilesPage/SamsungGalaxyChatB5330.php");
}
else if(strcmp($pname,'Samsung Galaxy Grand Duos I9082')==0)
{
header("Location: http://localhost/OBDM/MobilesPage/SamsungGalaxyGrandDuosI9082.php");
}
else if(strcmp($pname,'Samsung Galaxy Music Duos S6012')==0)
{
header("Location: http://localhost/OBDM/MobilesPage/SamsungGalaxyMusicDuosS6012.php");
}
else if(strcmp($pname,'Samsung Galaxy Note 2 N7100')==0)
{
header("Location: http://localhost/OBDM/MobilesPage/SamsungGalaxyNote2N7100.php");
}else if(strcmp($pname,'Samsung Galaxy S3')==0)
{
header("Location: http://localhost/OBDM/MobilesPage/SamsungGalaxyS3.php");
}
else if(strcmp($pname,'Samsung Galaxy S4 I950')==0)
{
header("Location: http://localhost/OBDM/MobilesPage/SamsungGalaxyS4I950.php");
}
else if(strcmp($pname,'Samsung Galaxy S Duos S7562')==0)
{
header("Location: http://localhost/OBDM/MobilesPage/SamsungGalaxySDuosS7562.php");
}
else if(strcmp($pname,'Samsung Galaxy S Duos S7562(BLACK)')==0)
{
header("Location: http://localhost/OBDM/MobilesPage/SamsungGalaxySDuosS7562B.php");
}
else if(strcmp($pname,'Samsung Omnia M S7530')==0)
{
header("Location: http://localhost/OBDM/MobilesPage/SamsungOmniaMS7530.php");
}




else if(strcmp($pname,'Sony Experia E')==0)
{
header("Location: http://localhost/OBDM/MobilesPage/SonyXperiaE.php");
}
else if(strcmp($pname,'Sony Experia E Dual')==0)
{
header("Location: http://localhost/OBDM/MobilesPage/SonyXperiaEDual.php");
}
else if(strcmp($pname,'Sony Experia GO')==0)
{
header("Location: http://localhost/OBDM/MobilesPage/SonyXperiaGo.php");
}
else if(strcmp($pname,'Sony Experia ION')==0)
{
header("Location: http://localhost/OBDM/MobilesPage/SonyXperiaIon.php");
}else if(strcmp($pname,'Sony Experia J')==0)
{
header("Location: http://localhost/OBDM/MobilesPage/SonyXperiaJ.php");
}else if(strcmp($pname,'Sony Experia L')==0)
{
header("Location: http://localhost/OBDM/MobilesPage/SonyXperiaL.php");
}
else if(strcmp($pname,'Sony Experia M')==0)
{
header("Location: http://localhost/OBDM/MobilesPage/SonyXperiaM.php");
}
else if(strcmp($pname,'Sony Experia Miro')==0)
{
header("Location: http://localhost/OBDM/MobilesPage/SonyXperiaMiro.php");
}
else if(strcmp($pname,'Sony Experia Neo L')==0)
{
header("Location: http://localhost/OBDM/MobilesPage/SonyXperiaNeoL.php");
}
else if(strcmp($pname,'Sony Experia P')==0)
{
header("Location: http://localhost/OBDM/MobilesPage/SonyXperiaP.php");
}





else if(strcmp($pname,'Dell Inspiron 518')==0)
{
header("Location: http://localhost/OBDM/Desktop/Dell_Inspiron-518.php");
}
else if(strcmp($pname,'Dell Inspiron 560')==0)
{
header("Location: http://localhost/OBDM/Desktop/Dell_Inspiron-560.php");
}
else if(strcmp($pname,'Dell Inspiron 620')==0)
{
header("Location: http://localhost/OBDM/Desktop/Dell_Inspiron-620.php");
}
else if(strcmp($pname,'Dell Inspiron 660')==0)
{
header("Location: http://localhost/OBDM/Desktop/Dell_Inspiron-660.php");
}
else if(strcmp($pname,'Dell Inspiron 2320')==0)
{
header("Location: http://localhost/OBDM/Desktop/Dell_Inspiron-2320.php");
}
else if(strcmp($pname,'Dell OptiPlex 390')==0)
{
header("Location: http://localhost/OBDM/Desktop/Dell_OptiPlex390.php");
}
else if(strcmp($pname,'Dell OptiPlex 990')==0)
{
header("Location: http://localhost/OBDM/Desktop/Dell_OptiPlex990.php");
}
else if(strcmp($pname,'Dell Vastro 260')==0)
{
header("Location: http://localhost/OBDM/Desktop/Dell_Vastro260.php");
}
else if(strcmp($pname,'Dell Vastro 270')==0)
{
header("Location: http://localhost/OBDM/Desktop/Dell_Vastro270.php");
}
else if(strcmp($pname,'Dell Vastro 360')==0)
{
header("Location: http://localhost/OBDM/Desktop/Dell_Vastro360.php");
}
else if(strcmp($pname,'Dell XPs 8500')==0)
{
header("Location: http://localhost/OBDM/Desktop/Dell_XPs8500.php");
}




else if(strcmp($pname,'HCL ACF0012')==0)
{
header("Location: http://localhost/OBDM/Desktop/HCL- AC2F0012.php");
}
else if(strcmp($pname,'HCL AC2V0140')==0)
{
header("Location: http://localhost/OBDM/Desktop/HCL- AC2V0140.php");
}
else if(strcmp($pname,'HCL AC2V0157')==0)
{
header("Location: http://localhost/OBDM/Desktop/HCL- AC2V0157.php");
}
else if(strcmp($pname,'HCL AC2V0177')==0)
{
header("Location: http://localhost/OBDM/Desktop/HCL- AC2V0177.php");
}
else if(strcmp($pname,'HCL AC2V0181')==0)
{
header("Location: http://localhost/OBDM/Desktop/HCL- AC2V0181.php");
}
else if(strcmp($pname,'HCL AD1V0027')==0)
{
header("Location: http://localhost/OBDM/Desktop/HCL-AD1V0027.php");
}
else if(strcmp($pname,'HCL AD1V0028')==0)
{
header("Location: http://localhost/OBDM/Desktop/HCL-AD1V0028.php");
}
else if(strcmp($pname,'HCL AD1V0030')==0)
{
header("Location: http://localhost/OBDM/Desktop/HCL-AD1V0030.php");
}
else if(strcmp($pname,'HCL Lyfe')==0)
{
header("Location: http://localhost/OBDM/Desktop/HCL-Lyfe.php");
}




else if(strcmp($pname,'HP Brazo 18')==0)
{
header("Location: http://localhost/OBDM/Desktop/HP_BRAZO-18.php");
}
else if(strcmp($pname,'HP CQ20001L')==0)
{
header("Location: http://localhost/OBDM/Desktop/HP_CQ20001L.php");
}
else if(strcmp($pname,'HP DreamScreen')==0)
{
header("Location: http://localhost/OBDM/Desktop/HP_DreamScreen.php");
}
else if(strcmp($pname,'HP Envy')==0)
{
header("Location: http://localhost/OBDM/Desktop/HP_Envy.php");
}
else if(strcmp($pname,'HP Omni 105')==0)
{
header("Location: http://localhost/OBDM/Desktop/HP_Omni-105.php");
}
else if(strcmp($pname,'HP SG33401L')==0)
{
header("Location: http://localhost/OBDM/Desktop/HP_SG33401L.php");
}




else if(strcmp($pname,'Lenovo C320')==0)
{
header("Location: http://localhost/OBDM/Desktop/lenovo C320_a.php");
}
else if(strcmp($pname,'Lenovo A720')==0)
{
header("Location: http://localhost/OBDM/Desktop/lenovoA720.php");
}
else if(strcmp($pname,'Lenovo B320')==0)
{
header("Location: http://localhost/OBDM/Desktop/lenovoB320.php");
}
else if(strcmp($pname,'Lenovo B320_a')==0)
{
header("Location: http://localhost/OBDM/Desktop/lenovoB320_a.php");
}
else if(strcmp($pname,'Lenovo B320_b')==0)
{
header("Location: http://localhost/OBDM/Desktop/lenovoB320_b.php");
}
else if(strcmp($pname,'Lenovo C200')==0)
{
header("Location: http://localhost/OBDM/Desktop/lenovoC200.php");
}
else if(strcmp($pname,'Lenovo C240')==0)
{
header("Location: http://localhost/OBDM/Desktop/lenovoC240.php");
}
else if(strcmp($pname,'Lenovo C320')==0)
{
header("Location: http://localhost/OBDM/Desktop/lenovoC320.php");
}
else if(strcmp($pname,'Lenovo C340')==0)
{
header("Location: http://localhost/OBDM/Desktop/lenovoC340.php");
}
else if(strcmp($pname,'Lenovo C440')==0)
{
header("Location: http://localhost/OBDM/Desktop/lenovoC440.php");
}
else if(strcmp($pname,'Lenovo Essential C200')==0)
{
header("Location: http://localhost/OBDM/Desktop/lenovoEssentialC200.php");
}
else if(strcmp($pname,'Lenovo H410')==0)
{
header("Location: http://localhost/OBDM/Desktop/lenovoH410.php");
}
else if(strcmp($pname,'Lenovo H420')==0)
{
header("Location: http://localhost/OBDM/Desktop/lenovoH420.php");
}


else if(strcmp($pname,'Cannon IXUS 125')==0)
{
header("Location: http://localhost/OBDM/Cpage/cannon ixus-125.php");
}
else if(strcmp($pname,'Cannon IXUS 255')==0)
{
header("Location: http://localhost/OBDM/Cpage/cannon ixus-225.php");
}
else if(strcmp($pname,'Cannon IXUS 500')==0)
{
header("Location: http://localhost/OBDM/Cpage/cannon ixus-500.php");
}
else if(strcmp($pname,'Cannon IXUS 510')==0)
{
header("Location: http://localhost/OBDM/Cpage/cannon ixus-510.php");
}
else if(strcmp($pname,'Canon PowerShot A 2200')==0)
{
header("Location: http://localhost/OBDM/Cpage/cannon ixus-A 2200.php");
}
else if(strcmp($pname,'Canon PowerShot A 2300')==0)
{
header("Location: http://localhost/OBDM/Cpage/cannon ixus-A 2300.php");
}
else if(strcmp($pname,'Canon PowerShot G1x')==0)
{
header("Location: http://localhost/OBDM/Cpage/cannon ixus-G1x.php");
}



else if(strcmp($pname,'Fujifilm F660EXR')==0)
{
header("Location: http://localhost/OBDM/Cpage/Fujifilm F660EXR.php");
}
else if(strcmp($pname,'Fujifilm Finepix JX 420')==0)
{
header("Location: http://localhost/OBDM/Cpage/Fujifilm Finepix JX 420.php");
}
else if(strcmp($pname,'Fujifilm FinePix X20')==0)
{
header("Location: http://localhost/OBDM/Cpage/Fujifilm FinePix X20 Mirrorless.php");
}
else if(strcmp($pname,'Fujifilm X100S')==0)
{
header("Location: http://localhost/OBDM/Cpage/Fujifilm X100S Mirrorless.php");
}
else if(strcmp($pname,'Fujifilm AX550')==0)
{
header("Location: http://localhost/OBDM/Cpage/fujifilmax500.php");
}






else if(strcmp($pname,'Nikon Coolpix L27')==0)
{
header("Location: http://localhost/OBDM/Cpage/nikonl27.php");
}
else if(strcmp($pname,'Nikon Coolpix L610')==0)
{
header("Location: http://localhost/OBDM/Cpage/nikonL610.php");
}
else if(strcmp($pname,'Nikon Coolpix L820')==0)
{
header("Location: http://localhost/OBDM/Cpage/nikonL820.php");
}
else if(strcmp($pname,'Nikon Coolpix P520')==0)
{
header("Location: http://localhost/OBDM/Cpage/nikonp520.php");
}
else if(strcmp($pname,'Nikon Coolpix S5200')==0)
{
header("Location: http://localhost/OBDM/Cpage/nikonps5200.php");
}




else if(strcmp($pname,'Panasonic DMC-GF2')==0)
{
header("Location: http://localhost/OBDM/Cpage/Panasonic DMC-GF2.php");
}
else if(strcmp($pname,'Panasonic Lumix DMC-FH2')==0)
{
header("Location: http://localhost/OBDM/Cpage/Panasonic Lumix DMC-FH2.php");
}
else if(strcmp($pname,'Panasonic Lumix DMC-FP1')==0)
{
header("Location: http://localhost/OBDM/Cpage/Panasonic Lumix DMC-FP1.php");
}
else if(strcmp($pname,'Panasonic Lumix DMC-FP7')==0)
{
header("Location: http://localhost/OBDM/Cpage/Panasonic Lumix DMC-FP7.php");
}
else if(strcmp($pname,'Panasonic Lumix DMC-LS6')==0)
{
header("Location: http://localhost/OBDM/Cpage/Panasonic Lumix DMC-LS6.php");
}



else if(strcmp($pname,'Sony Cyber-shot DSC-H90')==0)
{
header("Location: http://localhost/OBDM/Cpage/Sony Cyber-shot DSC-H90.php");
}
else if(strcmp($pname,'Sony Cyber-shot DSC-RX1')==0)
{
header("Location: http://localhost/OBDM/Cpage/Sony Cyber-shot DSC-RX1.php");
}
else if(strcmp($pname,'Sony Cyber-shot DSC-S5000')==0)
{
header("Location: http://localhost/OBDM/Cpage/Sony Cyber-shot DSC-S5000.php");
}
else if(strcmp($pname,'Sony Cyber-shot DSC-W730')==0)
{
header("Location: http://localhost/OBDM/Cpage/Sony Cyber-shot DSC-W730.php");
}
else if(strcmp($pname,'Sony Cyber-shot DSC-WX7')==0)
{
header("Location: http://localhost/OBDM/Cpage/Sony Cyber-shot DSC-WX7.php");
}




else if(strcmp($pname,'Acer Aspire E1-571G-BT')==0)
{
header("Location: http://localhost/OBDM/LaptopsPage/Acer Aspire E1-571G-BT Laptop.php");
}
else if(strcmp($pname,'Acer Aspire E1-571G')==0)
{
header("Location: http://localhost/OBDM/LaptopsPage/Acer Aspire E1 571G Laptop.php");
}
else if(strcmp($pname,'Acer Aspire S7-391C Ultrabook')==0)
{
header("Location: http://localhost/OBDM/LaptopsPage/Acer Aspire S7-391C Ultrabook.php");
}
else if(strcmp($pname,'Acer Aspire V3-571G')==0)
{
header("Location: http://localhost/OBDM/LaptopsPage/Acer Aspire V3-571G Laptop.php");
}
else if(strcmp($pname,'Acer Aspire V5 571P')==0)
{
header("Location: http://localhost/OBDM/LaptopsPage/Acer Aspire V5 571P Laptop.php");
}
else if(strcmp($pname,'Acer Aspire V5-471')==0)
{
header("Location: http://localhost/OBDM/LaptopsPage/Acer Aspire V5-471 Laptop.php");
}
else if(strcmp($pname,'Acer Aspire V5-471P')==0)
{
header("Location: http://localhost/OBDM/LaptopsPage/Acer Aspire V5-471P Laptop.php");
}
else if(strcmp($pname,'Acer Aspire V5-571')==0)
{
header("Location: http://localhost/OBDM/LaptopsPage/Acer Aspire V5-571 Laptop.php");
}
else if(strcmp($pname,'Acer Gateway NE56R')==0)
{
header("Location: http://localhost/OBDM/LaptopsPage/Acer Gateway-NE56R Laptop.php");
}



else if(strcmp($pname,'Apple MacBook Pro Mac')==0)
{
header("Location: http://localhost/OBDM/LaptopsPage/Apple MacBook Pro Mac Laptop.php");
}
else if(strcmp($pname,'Apple MacBook Pro Mac MD103HN/A')==0)
{
header("Location: http://localhost/OBDM/LaptopsPage/Apple MacBook Pro Mac MD103HNA Laptop.php");
}
else if(strcmp($pname,'Apple MD102HN/A MacBook Pro')==0)
{
header("Location: http://localhost/OBDM/LaptopsPage/Apple MD102HNA MacBook Pro.php");
}
else if(strcmp($pname,'Apple MD212HN/A MacBook Pro')==0)
{
header("Location: http://localhost/OBDM/LaptopsPage/Apple MD212HNA MacBook Pro.php");
}
else if(strcmp($pname,'Apple MD711HN/A MacBook Air')==0)
{
header("Location: http://localhost/OBDM/LaptopsPage/Apple MD711HNA MacBook Air.php");
}
else if(strcmp($pname,'Apple MD761HN/A MacBook Air')==0)
{
header("Location: http://localhost/OBDM/LaptopsPage/Apple MD761HN.php");
}
else if(strcmp($pname,'Apple ME664HNA MacBook Pro')==0)
{
header("Location: http://localhost/OBDM/LaptopsPage/Apple ME664HN.php");
}




else if(strcmp($pname,'Dell Inspiron 14R 5421')==0)
{
header("Location: http://localhost/OBDM/LaptopsPage/Dell Inspiron 14R 5421.php");
}
else if(strcmp($pname,'Dell Alienware M14X R2')==0)
{
header("Location: http://localhost/OBDM/LaptopsPage/Dell Alienware M14X R2.php");
}
else if(strcmp($pname,'Dell Inspirion 14 3421')==0)
{
header("Location: http://localhost/OBDM/LaptopsPage/Dell Inspiron 14 3421.php");
}
else if(strcmp($pname,'Dell Inspiron 15 3521')==0)
{
header("Location: http://localhost/OBDM/LaptopsPage/Dell Inspiron 15-3521.php");
}
else if(strcmp($pname,'Dell Inspiron 15R 5521')==0)
{
header("Location: http://localhost/OBDM/LaptopsPage/Dell Inspiron 15R 5521.php");
}
else if(strcmp($pname,'Dell Vostro 2420')==0)
{
header("Location: http://localhost/OBDM/LaptopsPage/Dell Vostro 2420.php");
}
else if(strcmp($pname,'Dell Vostro 2520')==0)
{
header("Location: http://localhost/OBDM/LaptopsPage/Dell Vostro 2520.php");
}
else if(strcmp($pname,'Dell Vostro 3560')==0)
{
header("Location: http://localhost/OBDM/LaptopsPage/Dell Vostro 3560.php");
}
else if(strcmp($pname,'Dell XPS 13')==0)
{
header("Location: http://localhost/OBDM/LaptopsPage/Dell XPS 13.php");
}



else if(strcmp($pname,'HP 450')==0)
{
header("Location: http://localhost/OBDM/LaptopsPage/HP 450.php");
}
else if(strcmp($pname,'HP 2000-2201TU')==0)
{
header("Location: http://localhost/OBDM/LaptopsPage/HP 2000-2201TU.php");
}
else if(strcmp($pname,'HP 2000-2313TU')==0)
{
header("Location: http://localhost/OBDM/LaptopsPage/HP 2000-2313TU.php");
}
else if(strcmp($pname,'HP 4540s ProBook')==0)
{
header("Location: http://localhost/OBDM/LaptopsPage/HP 4540s ProBook.php");
}
else if(strcmp($pname,'HP Envy 4-1201TX')==0)
{
header("Location: http://localhost/OBDM/LaptopsPage/HP Envy 4-1201TX.php");
}
else if(strcmp($pname,'HP Envy M6-1214TX')==0)
{
header("Location: http://localhost/OBDM/LaptopsPage/HP Envy M6-1214TX.php");
}
else if(strcmp($pname,'HP Envy M6-1216TX')==0)
{
header("Location: http://localhost/OBDM/LaptopsPage/HP Envy M6-1216TX.php");
}
else if(strcmp($pname,'HP Envy Spectre XT 13-2001TU Ultrabook')==0)
{
header("Location: http://localhost/OBDM/LaptopsPage/HP Envy Spectre XT 13-2001TU Ultrabook.php");
}
else if(strcmp($pname,'HP Envy TouchSmart 15-J001TX')==0)
{
header("Location: http://localhost/OBDM/LaptopsPage/HP Envy TouchSmart 15-J001TX.php");
}
else if(strcmp($pname,'HP Pavilion 14-B157TU Sleekbook')==0)
{
header("Location: http://localhost/OBDM/LaptopsPage/HP Pavilion 14-B157TU Sleekbook.php");
}
else if(strcmp($pname,'HP Pavilion 15-B003TU Sleekbook')==0)
{
header("Location: http://localhost/OBDM/LaptopsPage/HP Pavilion 15-B003TU Sleekbook.php");
}

else if(strcmp($pname,'HP Pavilion 15-e001AX Notebook')==0)
{
header("Location: http://localhost/OBDM/LaptopsPage/HP Pavilion 15-e001AX Notebook.php");
}
else if(strcmp($pname,'HP Pavilion G6-2222TU')==0)
{
header("Location: http://localhost/OBDM/LaptopsPage/HP Pavilion G6-2222TU.php");
}
else if(strcmp($pname,'HP Pavilion G6-2236TX')==0)
{
header("Location: http://localhost/OBDM/LaptopsPage/HP Pavilion G6-2236TX.php");
}
else if(strcmp($pname,'HP Pavilion G6-2302AX')==0)
{
header("Location: http://localhost/OBDM/LaptopsPage/HP Pavilion G6-2302AX.php");
}
else if(strcmp($pname,'HP Pavilion G6-2309TU')==0)
{
header("Location: http://localhost/OBDM/LaptopsPage/HP Pavilion G6-2309TU.php");
}
else if(strcmp($pname,'HP Pavilion Touchsmart 14-B172TX Sleekbook')==0)
{
header("Location: http://localhost/OBDM/LaptopsPage/HP Pavilion Touchsmart 14-B172TX Sleekbook.php");
}




else if(strcmp($pname,'Lenovo Essential B490 (59-349110)')==0)
{
header("Location: http://localhost/OBDM/LaptopsPage/Lenovo Essential B490 (59-349110).php");
}
else if(strcmp($pname,'Lenovo Essential G500s (59-388254)')==0)
{
header("Location: http://localhost/OBDM/LaptopsPage/Lenovo Essential G500s (59-388254).php");
}
else if(strcmp($pname,'Lenovo Essential G505s (59-379862)')==0)
{
header("Location: http://localhost/OBDM/LaptopsPage/Lenovo Essential G505s (59-379862).php");
}
else if(strcmp($pname,'Lenovo Essential G580 (59-358263)')==0)
{
header("Location: http://localhost/OBDM/LaptopsPage/Lenovo Essential G580 (59-358263).php");
}
else if(strcmp($pname,'Lenovo Ideapad S400 (59-340453))')==0)
{
header("Location: http://localhost/OBDM/LaptopsPage/Lenovo Ideapad S400 (59-340453).php");
}
else if(strcmp($pname,'Lenovo Ideapad Yoga 11S (59-369150) Netbook')==0)
{
header("Location: http://localhost/OBDM/LaptopsPage/Lenovo Ideapad Yoga 11S (59-369150) Netbook.php");
}
else if(strcmp($pname,'Lenovo Ideapad Yoga 13 (59-369597) Ultrabook')==0)
{
header("Location: http://localhost/OBDM/LaptopsPage/Lenovo Ideapad Yoga 13 (59-369597) Ultrabook.php");
}
else if(strcmp($pname,'Lenovo Ideapad Yoga 13 (59-369606) Ultrabook')==0)
{
header("Location: http://localhost/OBDM/LaptopsPage/Lenovo Ideapad Yoga 13 (59-369606) Ultrabook.php");
}
else if(strcmp($pname,'Lenovo Ideapad Z500 (59-380480)')==0)
{
header("Location: http://localhost/OBDM/LaptopsPage/Lenovo Ideapad Z500 (59-380480).php");
}
else if(strcmp($pname,'Lenovo Ideapad Z580 (59-347567))')==0)
{
header("Location: http://localhost/OBDM/LaptopsPage/Lenovo Ideapad Z580 (59-347567).php");
}
else if(strcmp($pname,'Lenovo ThinkPad T430 (2349O92)')==0)
{
header("Location: http://localhost/OBDM/LaptopsPage/Lenovo ThinkPad T430 (2349O92).php");
}



else if(strcmp($pname,'Sony VAIO E14133')==0)
{
header("Location: http://localhost/OBDM/LaptopsPage/Sony VAIO E14133.php");
}
else if(strcmp($pname,'Sony VAIO E15137')==0)
{
header("Location: http://localhost/OBDM/LaptopsPage/Sony VAIO E15137.php");
}
else if(strcmp($pname,'Sony VAIO Fit 14E F14212SN/W')==0)
{
header("Location: http://localhost/OBDM/LaptopsPage/Sony VAIO Fit 14E F14212SNW.php");
}
else if(strcmp($pname,'Sony VAIO Fit 15 F15A15SN/B')==0)
{
header("Location: http://localhost/OBDM/LaptopsPage/Sony VAIO Fit 15 F15A15SNB.php");
}
else if(strcmp($pname,'Sony VAIO Fit 15E F15213SN/W')==0)
{
header("Location: http://localhost/OBDM/LaptopsPage/Sony VAIO Fit 15E F15213SNW.php");
}
else if(strcmp($pname,'Sony VAIO Fit 15E F15218SN/B')==0)
{
header("Location: http://localhost/OBDM/LaptopsPage/Sony VAIO Fit 15E F15218SNB.php");
}
else if(strcmp($pname,'Sony VAIO Fit 15E F15218SN/W')==0)
{
header("Location: http://localhost/OBDM/LaptopsPage/Sony VAIO Fit 15E F15218SNW.php");
}
else if(strcmp($pname,'Sony VAIO E15137')==0)
{
header("Location: http://localhost/OBDM/LaptopsPage/Sony VAIO-E15137.php");
}

}
mysql_close($con);
?>