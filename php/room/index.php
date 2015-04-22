<?
    include("ui.php");
    $ui = new UI();
?>
<ul>
    <li data-row="1" data-col="1" data-sizex="1" data-sizey="4">
        <header>R&Auml;UME</header>
    	<? include("widget/widget.rooms.php") ?>
    </li>

    <li data-row="1" data-col="2" data-sizex="1" data-sizey="3">
    	<header>WOHNZIMMER</header>
        <? include("widget/widget.wohnzimmer-heizung.php") ?>
    </li>
    <li data-row="1" data-col="3" data-sizex="1" data-sizey="3">
    	<header>B&Uuml;RO</header>
    	<? include("widget/widget.buero-heizung.php") ?>
    </li>
    <li data-row="1" data-col="4" data-sizex="1" data-sizey="1">
    	<header>K&Uuml;CHE</header>
    	<? include("widget/widget.kueche-klima.php") ?>
    </li>
    <li data-row="2" data-col="4" data-sizex="1" data-sizey="1">
    	<header>K&Uuml;HLSCHRANK</header>
    	<? include("widget/widget.kuehlschrank-klima.php") ?>
    </li>
    <li data-row="1" data-col="5" data-sizex="1" data-sizey="2">
    	<header>SCHLAFZIMMER</header>
    	<? include("widget/widget.schlafzimmer-klima.php") ?>
    </li>
    <li data-row="1" data-col="6" data-sizex="1" data-sizey="1">
    	<header>BAD</header>
    	<? include("widget/widget.bad-klima.php") ?>
    </li>
    <li data-row="2" data-col="6" data-sizex="1" data-sizey="1">
    	<header>PIZZATIMER</header>
        <div data-type="circlemenu" class="cell circlemenu">
            <ul class="menu">
                <li><div data-type="symbol" data-icon="fa-clock-o" data-off-color="#aa6900" data-background-icon="fa-circle-thin"></div></li>
                <li><div data-type="push" data-cmd="{pizzatimer('TIMER1',600)}" data-icon="" data-off-background-color="#aa6900">10</div></li>
                <li><div data-type="push" data-cmd="{pizzatimer('TIMER1',900)}" data-icon="" data-off-background-color="#aa6900">15</div></li>
                <li><div data-type="push" data-cmd="{pizzatimer('TIMER1',1800)}" data-icon="" data-off-background-color="#aa6900">30</div></li>
                <li><div data-type="push" data-cmd="setreading TIMER1 signaldevice handy" data-icon="fa-mobile" data-off-background-color="#9933FF"></div></li>
                <li><div data-type="push" data-cmd="setreading TIMER1 signaldevice monitroid" data-icon="fa-tablet" data-off-background-color="#9933FF"></div></li>
                <li><div data-type="push" data-cmd="setreading TIMER1 signaldevice fritz" data-icon="fa-phone" data-off-background-color="#9933FF"></div></li>
                <li><div data-type="push" data-cmd="{pizzatimer('TIMER1',300)}" data-icon="" data-off-background-color="#aa6900">5</div></li>
            </ul>
        </div>
        <div data-type="label" class="cell" data-device="TIMER1" data-get="signaldevice"></div>
    </li>
    
    <li data-row="4" data-col="6" data-sizex="1" data-sizey="1">
    	<header>ANRUFE</header>
    	<div class="container">
    	    <a style='color:white;text-decoration:none' href="javascript:$.get('<?= $ui->fhemweb_url."?cmd=".urlencode('trigger MISSED_CALL clear') ?>&amp;XHR=1');false;">
    	        <div data-type="label" data-device="MISSED_CALL" data-get="name"></div>
    	        <div data-type="label" data-device="MISSED_CALL" data-get="number"></div>
            </a>
    	    <div data-type="button"
    	        data-device="MISSED_CALL"
    	        data-get-off="&amp;nbsp;"
    	        data-get-on="!off"
    	        data-off-background-color="#505050"
    	        data-on-background-color="#aa6900"
    	        data-icon="fa-phone"
    	        data-url="system-calls.php"
    	    ></div>
        </div>
    </li>    
    
    <li data-row="1" data-col="7" data-sizex="1" data-sizey="4">
    	<header>AUSSEN</header>
    	<div class="centered" style="margin-bottom:50px">
    	    <div class="left">
    	        <? include("widget/widget.aussen-klima.php") ?>
    	    </div>
        </div>
        <? include("widget/widget.weather-vertical.php") ?>
    </li>
    
    <li data-row="4" data-col="2" data-sizex="4" data-sizey="1">
        <header>ANWESENHEIT</header>
        <? include("widget/widget.anwesenheit.php") ?>
    </li>
    
    <li data-row="3" data-col="4" data-sizex="3" data-sizey="1">
    	<header>FAVORITEN</header>
    	<? include("widget/widget.favoriten.php") ?>
    </li>
</ul>