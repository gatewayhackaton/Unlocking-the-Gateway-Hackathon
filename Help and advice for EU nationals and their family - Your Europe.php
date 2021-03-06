<?php
  function getar($el){

    $server = "mysql:dbname=suitcase;host=localhost";
    $user = "phpmyadmin";
    $pwd = "user";
    $db = "suitcase";

    $mi = new pdo($server, $user, $pwd);

    $req = $mi->prepare("
    SELECT *
    FROM saved_articles
    ");
    $req -> execute();

    $resp = $req -> fetchAll(PDO::FETCH_ASSOC);

    $ht = "<div class='cache'>";

    foreach ($resp as $item){
      if($item['ar_cat'] == $el){
        switch($item['ar_state']){
          case 'done':
            $st = 'done';
            break;
          case 'reported':
            $st = 'reported';
            break;
          case 'new':
            $st = 'new';
            break;
        }
        $na = $item['ar_name'];
        $ht .= ('
        <span><img src="assets/img/v.png"><span class='.$st.'>'.$na.'</span><img src="assets/img/mp.png"></span><br/>
        ');
      }
    }
    $ht .= '</div>';
    echo($ht);
  }
?>
<!DOCTYPE html>
<html lang="en">

<head>
	<meta http-equiv="content-type" content="text/html; charset=UTF-8">

	<meta content="IE=Edge" http-equiv="X-UA-Compatible">
	<meta charset="UTF-8">
	<meta name="Reference" content="COMM/YOUREUROPE/EUROPA.EU/YOUREUROPE/CITIZENS/EN">
	<meta name="Creator" content="EUROPA/GROW/single market service center">
	<meta name="Classification" content="08000,10000">
	<meta name="Keywords"
		content="europa,europa,car,vehicle,foreign,national,abroad,country,eu,commission,your europe,citizens,moving,working,living,studying,travelling">
	<meta name="Description"
	content="European Commission – Practical help and advice on EU citizen rights for your life, work and travel in another European Union country - Your Europe">
	<meta name="Date" content="10/09/2012">
	<meta name="last-modified" content="14/12/2017">
	<meta content="width=device-width, initial-scale=1.0" name="viewport">
	<meta content="telephone=no" name="format-detection">
	<meta property="og:title" content="Help and advice for EU nationals and their family">
	<meta content="https://europa.eu/youreurope/citizens/index_en.htm" property="og:url">
	<meta content="https://europa.eu/youreurope/citizens/images/touch-icons/apple-icon-144x144.png" property="og:image">
	<meta property="og:site_name" content="Your Europe - Citizens">
	<meta property="og:description"
	content="European Commission – Practical help and advice on EU citizen rights for your life, work and travel in another European Union country - Your Europe">
	<meta name="twitter:card" content="summary_large_image">
	<meta name="twitter:site" content="@YourEuropeEu">
	<meta name="twitter:creator" content="@YourEuropeEu">
	<meta name="twitter:title" content="Help and advice for EU nationals and their family">
	<meta name="twitter:description"
	content="European Commission – Practical help and advice on EU citizen rights for your life, work and travel in another European Union country - Your Europe">
	<meta name="twitter:image" content="https://europa.eu/youreurope/citizens/images/social-media-medium.png">
	<link href="https://europa.eu/youreurope/citizens/index_en.htm" rel="canonical">
	<link href="https://europa.eu/youreurope/citizens/indexamp_en.htm" rel="amphtml">
	<link type="image/vnd.microsoft.icon"
	href="https://europa.eu/european-union/sites/europaeu/themes/europaeu_theme/favicon.ico" rel="shortcut icon">
	<link href="https://europa.eu/youreurope/citizens/images/touch-icons/apple-icon-57x57.png" sizes="57x57"
	rel="apple-touch-icon">
	<link href="https://europa.eu/youreurope/citizens/images/touch-icons/apple-icon-72x72.png" sizes="72x72"
	rel="apple-touch-icon">
	<link href="https://europa.eu/youreurope/citizens/images/touch-icons/apple-icon-114x114.png" sizes="114x114"
	rel="apple-touch-icon">
	<link href="https://europa.eu/youreurope/citizens/images/touch-icons/apple-icon-144x144.png" sizes="144x144"
	rel="apple-touch-icon">
	<link href="https://europa.eu/youreurope/citizens/images/touch-icons/apple-icon-57x57-precomposed.png" sizes="57x57"
	rel="apple-touch-icon-precomposed">
	<link href="https://europa.eu/youreurope/citizens/images/touch-icons/apple-icon-72x72-precomposed.png" sizes="72x72"
	rel="apple-touch-icon-precomposed">
	<link href="https://europa.eu/youreurope/citizens/images/touch-icons/apple-icon-114x114-precomposed.png"
	sizes="114x114" rel="apple-touch-icon-precomposed">
	<link href="https://europa.eu/youreurope/citizens/images/touch-icons/apple-icon-144x144-precomposed.png"
	sizes="144x144" rel="apple-touch-icon-precomposed">
	<link
	href="Help%20and%20advice%20for%20EU%20nationals%20and%20their%20family%20-%20Your%20Europe_files/europa-ye.css"
	type="text/css" rel="stylesheet">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
	integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	<title>Help and advice for EU nationals and their family - Your Europe</title>
</head>

<body class="citizens">

	<a id="top-page"></a>
	<header id="header-content">
		<section>
			<div class="flexiflex">
				<div class="valiseIcon">
					<button onclick="showValise()">
					
							<img src="assets/img/minivalise.png" alt="icone valise" />
						</button>
					</div>
				</div>
		</section>
		<section>
			<div id="fonduTop">
				<button onclick="closeValise()" id="closeX">X</button>
				<div id="containerClosed">
					<img src="assets/img/valiseclosed.png" />
					<div id="drapeaux">
						<div class="row">
							<div class="offset-md-2"></div>
							<div class="col-md-4">
								<h2 class="text-center MERDE">FROM HERE</h2>
								<img src="assets/img/belgiumflag.png" alt="">
							</div>
							<div class="col-md-1">
								<h2 class="text-center toutou">TO</h2>
							</div>
							<div class="col-md-4">
								<h2 class="text-center MERDE">THERE</h2>
								<img src="assets/img/franceflag.png" alt="">
							</div>
						</div>
						<div class="row">
							<div class="offset-md-4"></div>
							<div class="col-md-4">
								<button onclick="transition()" id="gogo">
									<h2 id='go' class="text-center">GO</h2>
								</button>
							</div>
						</div>
					</div>
				</div>
				<div id="containerVal">
					<div class="ValImg">
					
						<div class="row mt-4">
							<div class="col-md-3 shaketat">
								<img src="assets/img/1.png" id="i1" width="130px">
							</div>

							<div class="col-md-3 shaketat">
								<img src="assets/img/2.png" id="i2" width="130px">
							</div>

							<div onmouseover="displaylist(this)" onmouseout="removelist(this)"
								class="col-md-3 shaketat">
								<img src="assets/img/3.png" id="i3" width="130px">

								<?php getar('health')  ?>

							</div>

							<div onmouseover="displaylist(this)" onmouseout="removelist(this)" class="col-md-3 shaketat">
								<img src="assets/img/4.png" id="i4" width="130px">

								<?php getar('voyage')  ?>

							</div>

						</div>
						<div class="row">

							<div class="col-md-3 shaketat">
								<img src="assets/img/fam.png" id="i5" width="110px">

							</div>

							<div onmouseover="displaylist(this)" onmouseout="removelist(this)" class="col-md-3 shaketat">
								<img src="assets/img/7.png" id="i6" width="100px">
							</div>

							<?php getar('education')  ?>

							<div
								class="col-md-3 shaketat">
								<img src="assets/img/6.png" id="i7" width="130px">

							</div>

							<div onmouseover="displaylist(this)" onmouseout="removelist(this)" class="col-md-3 shaketat">
								<img src="assets/img/5.png" id="8" class="trouduc" width="110px">
							</div>
							<?php getar('vehicles')  ?>
						</div>
					</div>
				</div>
		</section>
		<section class="centered" id="eu-ye-header">
			<a href="https://europa.eu/youreurope/index.htm#en" id="eu-ye-logo"><span>Your Europe</span>
				<br>European Union</a><button class="en" id="eu-languages-toggle"><span>English</span></button>
			<div id="eu-languages-menu" style="right: 354px; width: 444px;">
				<p>Available languages: <button title="Close this menu" id="eu-close-languages-menu">✖</button>
				</p>
				<ul>
					<li>
						<a title="български" hreflang="bg" class=""
							href="https://europa.eu/youreurope/citizens/index_bg.htm" lang="bg">български</a>
					</li>
					<li>
						<a title="čeština" hreflang="cs" class=""
							href="https://europa.eu/youreurope/citizens/index_cs.htm" lang="cs">čeština</a>
					</li>
					<li>
						<a title="Dansk" hreflang="da" class=""
							href="https://europa.eu/youreurope/citizens/index_da.htm" lang="da">Dansk</a>
					</li>
					<li>
						<a title="Deutsch" hreflang="de" class=""
							href="https://europa.eu/youreurope/citizens/index_de.htm" lang="de">Deutsch</a>
					</li>
					<li>
						<a title="Eesti" hreflang="et" class=""
							href="https://europa.eu/youreurope/citizens/index_et.htm" lang="et">Eesti</a>
					</li>
					<li>
						<a title="Ελληνικά" hreflang="el" class=""
							href="https://europa.eu/youreurope/citizens/index_el.htm" lang="el">Ελληνικά</a>
					</li>
					<li>
						<a title="English" hreflang="en" class="active"
							href="https://europa.eu/youreurope/citizens/index_en.htm" lang="en">English</a>
					</li>
					<li>
						<a title="español" hreflang="es" class=""
							href="https://europa.eu/youreurope/citizens/index_es.htm" lang="es">español</a>
					</li>
					<li>
						<a title="français" hreflang="fr" class=""
							href="https://europa.eu/youreurope/citizens/index_fr.htm" lang="fr">français</a>
					</li>
					<li>
						<a title="hrvatski" hreflang="hr" class=""
							href="https://europa.eu/youreurope/citizens/index_hr.htm" lang="hr">hrvatski</a>
					</li>
					<li>
						<a title="italiano" hreflang="it" class=""
							href="https://europa.eu/youreurope/citizens/index_it.htm" lang="it">italiano</a>
					</li>
					<li>
						<a title="Latviešu" hreflang="lv" class=""
							href="https://europa.eu/youreurope/citizens/index_lv.htm" lang="lv">Latviešu</a>
					</li>
				</ul>
				<ul>
					<li>
						<a title="Lietuvių" hreflang="lt" class=""
							href="https://europa.eu/youreurope/citizens/index_lt.htm" lang="lt">Lietuvių</a>
					</li>
					<li>
						<a title="magyar" hreflang="hu" class=""
							href="https://europa.eu/youreurope/citizens/index_hu.htm" lang="hu">magyar</a>
					</li>
					<li>
						<a title="Malti" hreflang="mt" class=""
							href="https://europa.eu/youreurope/citizens/index_mt.htm" lang="mt">Malti</a>
					</li>
					<li>
						<a title="Nederlands" hreflang="nl" class=""
							href="https://europa.eu/youreurope/citizens/index_nl.htm" lang="nl">Nederlands</a>
					</li>
					<li>
						<a title="polski" hreflang="pl" class=""
							href="https://europa.eu/youreurope/citizens/index_pl.htm" lang="pl">polski</a>
					</li>
					<li>
						<a title="português" hreflang="pt" class=""
							href="https://europa.eu/youreurope/citizens/index_pt.htm" lang="pt">português</a>
					</li>
					<li>
						<a title="română" hreflang="ro" class=""
							href="https://europa.eu/youreurope/citizens/index_ro.htm" lang="ro">română</a>
					</li>
					<li>
						<a title="Slovenčina" hreflang="sk" class=""
							href="https://europa.eu/youreurope/citizens/index_sk.htm" lang="sk">Slovenčina</a>
					</li>
					<li>
						<a title="Slovenščina" hreflang="sl" class=""
							href="https://europa.eu/youreurope/citizens/index_sl.htm" lang="sl">Slovenščina</a>
					</li>
					<li>
						<a title="suomi" hreflang="fi" class=""
							href="https://europa.eu/youreurope/citizens/index_fi.htm" lang="fi">suomi</a>
					</li>
					<li>
						<a title="svenska" hreflang="sv" class=""
							href="https://europa.eu/youreurope/citizens/index_sv.htm" lang="sv">svenska</a>
					</li>
				</ul>
				<div class="clear"></div>
			</div>
			<form method="get" action="https://europa.eu/search" id="eu-ye-search-tool">
				<div>
					<label for="eu-search-terms">Search terms</label><input name="QueryText" id="eu-search-terms"
						type="text" title="Search Text"><input value="en" name="swlang" type="hidden" id="swlang"><input
						value="YEC" name="query_source" type="hidden" id="query_source"><input type="submit"
						value="Search">
				</div>
			</form>
		</section>
		<section id="eu-ye-page-header" class="home citizens">
			<div class="centered">
				<button id="eu-ye-toggle-menu">Menu</button>
				<ul id="eu-breadcrumb">
					<li class="first">
						<a href="https://europa.eu/index_en.htm">EUROPA</a>
					</li>
					<li>
						<a href="https://europa.eu/youreurope/index.htm#en">Your Europe</a>
					</li>
					<li>Citizens</li>
				</ul>
				<div class="clear"></div>
				<h1>Help and advice for EU nationals and their family</h1>

				<a id="switch-site" href="https://europa.eu/youreurope/business/index_en.htm" style="display: block;">
					Doing business
				</a>
			</div>
		</section>
	</header>

	<nav id="eu-ye-homepage-navigation">
		<ul class="centered">
			<li class="home">
				<a class="menu" href="https://europa.eu/youreurope/citizens/index_en.htm" title="Home">Home</a>
			</li>
			<li class="section-menu">
				<a href="https://europa.eu/youreurope/citizens/travel/index_en.htm" title="Travel"
					class="menu group">Travel</a>
				<ul id="menu-group-1">
					<li class="extra ">
						<a title="Documents you need for travel in Europe"
							href="https://europa.eu/youreurope/citizens/travel/entry-exit/index_en.htm" class="submenu"
							id="extra-btn-1" onclick="displaySubGroup(1, event);">Documents you need for travel in
							Europe</a>
						<ul id="extra-menu-1">
							<li class="">
								<a title="Travel documents for EU nationals"
									href="https://europa.eu/youreurope/citizens/travel/entry-exit/eu-citizen/index_en.htm">Travel
									documents for EU nationals</a>
							</li>
							<li class="">
								<a title="Travel documents for non-EU family members"
									href="https://europa.eu/youreurope/citizens/travel/entry-exit/non-eu-family/index_en.htm">Travel
									documents for non-EU family members</a>
							</li>
							<li class="">
								<a title="Travel documents for non-EU nationals"
									href="https://europa.eu/youreurope/citizens/travel/entry-exit/non-eu-nationals/index_en.htm">Travel
									documents for non-EU nationals</a>
							</li>
							<li class="">
								<a title="Expired or lost passports"
									href="https://europa.eu/youreurope/citizens/travel/entry-exit/expired-lost-passports/index_en.htm">Expired
									or lost passports</a>
							</li>
							<li class="">
								<a title="Documents for minors travelling in the EU"
									href="https://europa.eu/youreurope/citizens/travel/entry-exit/travel-documents-minors/index_en.htm">Documents
									for minors travelling in the EU</a>
							</li>
						</ul>
					</li>
					<li class="extra ">
						<a title="Passenger rights"
							href="https://europa.eu/youreurope/citizens/travel/passenger-rights/index_en.htm"
							class="submenu" id="extra-btn-2" onclick="displaySubGroup(2, event);">Passenger rights</a>
						<ul id="extra-menu-2">
							<li class="">
								<a title="Air passenger rights"
									href="https://europa.eu/youreurope/citizens/travel/passenger-rights/air/index_en.htm">Air
									passenger
									rights</a>
							</li>
							<li class="">
								<a title="Rail passenger rights"
									href="https://europa.eu/youreurope/citizens/travel/passenger-rights/rail/index_en.htm">Rail
									passenger
									rights</a>
							</li>
							<li class="">
								<a title="Bus and coach passenger rights"
									href="https://europa.eu/youreurope/citizens/travel/passenger-rights/bus-and-coach/index_en.htm">Bus
									and coach passenger rights</a>
							</li>
							<li class="">
								<a title="Ship passenger rights"
									href="https://europa.eu/youreurope/citizens/travel/passenger-rights/ship/index_en.htm">Ship
									passenger
									rights</a>
							</li>
						</ul>
					</li>
					<li class="extra ">
						<a title="Transport and disability"
							href="https://europa.eu/youreurope/citizens/travel/transport-disability/index_en.htm"
							class="submenu" id="extra-btn-3" onclick="displaySubGroup(3, event);">Transport and
							disability</a>
						<ul id="extra-menu-3">
							<li class="">
								<a title="Rights for travellers with reduced mobility"
									href="https://europa.eu/youreurope/citizens/travel/transport-disability/reduced-mobility/index_en.htm">Rights
									for travellers with reduced mobility</a>
							</li>
							<li class="">
								<a title="EU parking card for people with disabilities"
									href="https://europa.eu/youreurope/citizens/travel/transport-disability/parking-card-disabilities-people/index_en.htm">EU
									parking card for people with disabilities</a>
							</li>
						</ul>
					</li>
					<li class="extra ">
						<a title="Driving abroad"
							href="https://europa.eu/youreurope/citizens/travel/driving-abroad/index_en.htm"
							class="submenu" id="extra-btn-4" onclick="displaySubGroup(4, event);">Driving abroad</a>
						<ul id="extra-menu-4">
							<li class="">
								<a title="Road rules and safety"
									href="https://europa.eu/youreurope/citizens/travel/driving-abroad/road-rules-and-safety/index_en.htm">Road
									rules and safety</a>
							</li>
							<li class="">
								<a title="Hiring a car"
									href="https://europa.eu/youreurope/citizens/travel/driving-abroad/car-rental-abroad/index_en.htm">Hiring
									a car</a>
							</li>
							<li class="">
								<a title="Driving licence and insurance"
									href="https://europa.eu/youreurope/citizens/travel/driving-abroad/driving-licence-and-insurance/index_en.htm">Driving
									licence and insurance</a>
							</li>
						</ul>
					</li>
					<li class="extra ">
						<a title="What can you take with you?"
							href="https://europa.eu/youreurope/citizens/travel/carry/index_en.htm" class="submenu"
							id="extra-btn-5" onclick="displaySubGroup(5, event);">What can you take with you?</a>
						<ul id="extra-menu-5">
							<li class="">
								<a title="Taking animals or plants with you"
									href="https://europa.eu/youreurope/citizens/travel/carry/animal-plant/index_en.htm">Taking
									animals or
									plants with you</a>
							</li>
							<li class="">
								<a title="Taking animal products with you"
									href="https://europa.eu/youreurope/citizens/travel/carry/meat-dairy-animal/index_en.htm">Taking
									animal
									products with you</a>
							</li>
							<li class="">
								<a title="Alcohol, tobacco, cash and excise duties"
									href="https://europa.eu/youreurope/citizens/travel/carry/alcohol-tobacco-cash/index_en.htm">Alcohol,
									tobacco, cash and excise duties</a>
							</li>
							<li class="">
								<a title="Luggage restrictions"
									href="https://europa.eu/youreurope/citizens/travel/carry/luggage-restrictions/index_en.htm">Luggage
									restrictions</a>
							</li>
							<li class="">
								<a title="Using the euro"
									href="https://europa.eu/youreurope/citizens/travel/carry/using-euro/index_en.htm">Using
									the euro</a>
							</li>
						</ul>
					</li>
					<li class="extra ">
						<a title="Security and emergencies"
							href="./Security and emergencies - Your Europe.php"
							class="submenu" id="extra-btn-6" onclick="displaySubGroup(6, event);">Security and
							emergencies</a>
						<ul id="extra-menu-6">
							<li class="">
								<a title="Airport and airline security"
									href="https://europa.eu/youreurope/citizens/travel/security-and-emergencies/airport-airline-security/index_en.htm">Airport
									and airline security</a>
							</li>
							<li class="">
								<a title="Emergencies"
									href="https://europa.eu/youreurope/citizens/travel/security-and-emergencies/emergency/index_en.htm">Emergencies</a>
							</li>
							<li class="">
								<a title="eCall 112-based emergency assistance from your vehicle"
									href="https://europa.eu/youreurope/citizens/travel/security-and-emergencies/emergency-assistance-vehicles-ecall/index_en.htm">eCall
									112-based emergency assistance from your vehicle</a>
							</li>
						</ul>
					</li>
					<li class="extra ">
						<a title="Package travel and timeshare"
							href="https://europa.eu/youreurope/citizens/travel/holidays/index_en.htm" class="submenu"
							id="extra-btn-7" onclick="displaySubGroup(7, event);">Package travel and timeshare</a>
						<ul id="extra-menu-7">
							<li class="">
								<a title="Package travel and linked travel arrangements"
									href="https://europa.eu/youreurope/citizens/travel/holidays/package-travel/index_en.htm">Package
									travel and linked travel arrangements</a>
							</li>
							<li class="">
								<a title="Timeshare and other long-term holiday contracts in the EU"
									href="https://europa.eu/youreurope/citizens/travel/holidays/timeshare/index_en.htm">Timeshare
									and
									other long-term holiday contracts in the EU</a>
							</li>
						</ul>
					</li>
				</ul>
			</li>
			<li class="section-menu">
				<a href="https://europa.eu/youreurope/citizens/work/index_en.htm" title="Work &amp; Retirement"
					class="menu group">Work &amp; Retirement</a>
				<ul id="menu-group-2">
					<li class="extra ">
						<a title="Working abroad"
							href="https://europa.eu/youreurope/citizens/work/work-abroad/index_en.htm" class="submenu"
							id="extra-btn-8" onclick="displaySubGroup(8, event);">Working abroad</a>
						<ul id="extra-menu-8">
							<li class="">
								<a title="Equal treatment"
									href="https://europa.eu/youreurope/citizens/work/work-abroad/equal-treatment-with-nationals/index_en.htm">Equal
									treatment</a>
							</li>
							<li class="">
								<a title="Posted workers"
									href="https://europa.eu/youreurope/citizens/work/work-abroad/posted-workers/index_en.htm">Posted
									workers</a>
							</li>
							<li class="">
								<a title="Cross-border commuters"
									href="https://europa.eu/youreurope/citizens/work/work-abroad/cross-border-commuters/index_en.htm">Cross-border
									commuters</a>
							</li>
							<li class="">
								<a title="Civil servants abroad"
									href="https://europa.eu/youreurope/citizens/work/work-abroad/civil-servants/index_en.htm">Civil
									servants abroad</a>
							</li>
							<li class="">
								<a title="Work permits"
									href="https://europa.eu/youreurope/citizens/work/work-abroad/work-permits/index_en.htm">Work
									permits</a>
							</li>
						</ul>
					</li>
					<li class="extra ">
						<a title="Finding a job abroad"
							href="https://europa.eu/youreurope/citizens/work/finding-job-abroad/index_en.htm"
							class="submenu" id="extra-btn-9" onclick="displaySubGroup(9, event);">Finding a job
							abroad</a>
						<ul id="extra-menu-9">
							<li class="">
								<a title="Transferring unemployment benefits"
									href="https://europa.eu/youreurope/citizens/work/finding-job-abroad/transferring-unemployment-benefits/index_en.htm">Transferring
									unemployment benefits</a>
							</li>
							<li class="">
								<a title="Access to jobs in the public sector"
									href="https://europa.eu/youreurope/citizens/work/finding-job-abroad/access-to-jobs-in-the-public-sector/index_en.htm">Access
									to jobs in the public sector</a>
							</li>
							<li class="">
								<a title="If you don't find work"
									href="https://europa.eu/youreurope/citizens/work/finding-job-abroad/cannot-find-work-abroad/index_en.htm">If
									you don't find work</a>
							</li>
						</ul>
					</li>
					<li class="extra ">
						<a title="Professional qualifications"
							href="https://europa.eu/youreurope/citizens/work/professional-qualifications/index_en.htm"
							class="submenu" id="extra-btn-10" onclick="displaySubGroup(10, event);">Professional
							qualifications</a>
						<ul id="extra-menu-10">
							<li class="">
								<a title="What is a regulated profession"
									href="https://europa.eu/youreurope/citizens/work/professional-qualifications/regulated-professions/index_en.htm">What
									is a regulated profession</a>
							</li>
							<li class="">
								<a title="Applying for permanent provision of services"
									href="https://europa.eu/youreurope/citizens/work/professional-qualifications/apply-permanent-provision-services/index_en.htm">Applying
									for permanent provision of services</a>
							</li>
							<li class="">
								<a title="Applying for temporary provision of services"
									href="https://europa.eu/youreurope/citizens/work/professional-qualifications/apply-temporary-provision-services/index_en.htm">Applying
									for temporary provision of services</a>
							</li>
							<li class="">
								<a title="Documents and formalities"
									href="https://europa.eu/youreurope/citizens/work/professional-qualifications/professional-bodies-language-requirements/index_en.htm">Documents
									and formalities</a>
							</li>
							<li class="">
								<a title="European Professional Card - EPC"
									href="https://europa.eu/youreurope/citizens/work/professional-qualifications/european-professional-card/index_en.htm">European
									Professional Card - EPC</a>
							</li>
						</ul>
					</li>
					<li class="extra ">
						<a title="Unemployment &amp; benefits"
							href="https://europa.eu/youreurope/citizens/work/unemployment-and-benefits/index_en.htm"
							class="submenu" id="extra-btn-11" onclick="displaySubGroup(11, event);">Unemployment &amp;
							benefits</a>
						<ul id="extra-menu-11">
							<li class="">
								<a title="Social security systems in the EU"
									href="https://europa.eu/youreurope/citizens/work/unemployment-and-benefits/social-security/index_en.htm">Social
									security systems in the EU</a>
							</li>
							<li class="">
								<a title="Social security cover abroad"
									href="https://europa.eu/youreurope/citizens/work/unemployment-and-benefits/country-coverage/index_en.htm">Social
									security cover abroad</a>
							</li>
							<li class="">
								<a title="Unemployment abroad"
									href="https://europa.eu/youreurope/citizens/work/unemployment-and-benefits/unemployment/index_en.htm">Unemployment
									abroad</a>
							</li>
							<li class="">
								<a title="Survivors’ pensions and death grants"
									href="https://europa.eu/youreurope/citizens/work/unemployment-and-benefits/death-grants/index_en.htm">Survivors’
									pensions and death grants</a>
							</li>
							<li class="">
								<a title="Useful forms for social security rights"
									href="https://europa.eu/youreurope/citizens/work/social-security-forms/index_en.htm">Useful
									forms for
									social security rights</a>
							</li>
						</ul>
					</li>
					<li class="extra ">
						<a title="Retiring abroad"
							href="https://europa.eu/youreurope/citizens/work/retire-abroad/index_en.htm" class="submenu"
							id="extra-btn-12" onclick="displaySubGroup(12, event);">Retiring abroad</a>
						<ul id="extra-menu-12">
							<li class="">
								<a title="State pensions abroad"
									href="https://europa.eu/youreurope/citizens/work/retire-abroad/state-pensions-abroad/index_en.htm">State
									pensions abroad</a>
							</li>
							<li class="">
								<a title="Supplementary pensions abroad"
									href="https://europa.eu/youreurope/citizens/work/retire-abroad/supplementary-pensions-abroad/index_en.htm">Supplementary
									pensions abroad</a>
							</li>
						</ul>
					</li>
					<li class="extra ">
						<a title="Taxes" href="https://europa.eu/youreurope/citizens/work/taxes/index_en.htm"
							class="submenu" id="extra-btn-13" onclick="displaySubGroup(13, event);">Taxes</a>
						<ul id="extra-menu-13">
							<li class="">
								<a title="Income taxes abroad"
									href="https://europa.eu/youreurope/citizens/work/taxes/income-taxes-abroad/index_en.htm">Income
									taxes
									abroad</a>
							</li>
							<li class="">
								<a title="Double taxation"
									href="https://europa.eu/youreurope/citizens/work/taxes/double-taxation/index_en.htm">Double
									taxation</a>
							</li>
						</ul>
					</li>
				</ul>
			</li>
			<li class="section-menu">
				<a href="https://europa.eu/youreurope/citizens/vehicles/index_en.htm" title="Vehicles"
					class="menu group">Vehicles</a>
				<ul id="menu-group-3">
					<li class="extra ">
						<a title="Cars" href="https://europa.eu/youreurope/citizens/vehicles/cars/index_en.htm"
							class="submenu" id="extra-btn-14" onclick="displaySubGroup(14, event);">Cars</a>
						<ul id="extra-menu-14">
							<li class="">
								<a title="Buying and leasing a car"
									href="https://europa.eu/youreurope/citizens/vehicles/cars/buying-a-car-abroad/index_en.htm">Buying
									and
									leasing a car</a>
							</li>
							<li class="">
								<a title="VAT when buying or selling a car"
									href="https://europa.eu/youreurope/citizens/vehicles/cars/vat-buying-selling-cars/index_en.htm">VAT
									when buying or selling a car</a>
							</li>
							<li class="">
								<a title="Company cars"
									href="https://europa.eu/youreurope/citizens/vehicles/cars/company-cars/index_en.htm">Company
									cars</a>
							</li>
						</ul>
					</li>
					<li class="extra ">
						<a title="Driving licence"
							href="https://europa.eu/youreurope/citizens/vehicles/driving-licence/index_en.htm"
							class="submenu" id="extra-btn-15" onclick="displaySubGroup(15, event);">Driving licence</a>
						<ul id="extra-menu-15">
							<li class="">
								<a title="Getting a driving licence in the EU"
									href="https://europa.eu/youreurope/citizens/vehicles/driving-licence/get-driving-licence/index_en.htm">Getting
									a driving licence in the EU</a>
							</li>
							<li class="">
								<a title="Driving licence recognition and validity"
									href="https://europa.eu/youreurope/citizens/vehicles/driving-licence/driving-licence-recognition-validity/index_en.htm">Driving
									licence recognition and validity</a>
							</li>
							<li class="">
								<a title="Driving licence renewal and exchange"
									href="https://europa.eu/youreurope/citizens/vehicles/driving-licence/driving-licence-renewal-exchange/index_en.htm">Driving
									licence renewal and exchange</a>
							</li>
						</ul>
					</li>
					<li class="extra ">
						<a title="Insurance"
							href="https://europa.eu/youreurope/citizens/vehicles/insurance/index_en.htm" class="submenu"
							id="extra-btn-16" onclick="displaySubGroup(16, event);">Insurance</a>
						<ul id="extra-menu-16">
							<li class="">
								<a title="Car insurance validity in the EU"
									href="https://europa.eu/youreurope/citizens/vehicles/insurance/validity/index_en.htm">Car
									insurance
									validity in the EU</a>
							</li>
							<li class="">
								<a title="Car insurance cover abroad"
									href="https://europa.eu/youreurope/citizens/vehicles/insurance/accident/index_en.htm">Car
									insurance
									cover abroad</a>
							</li>
						</ul>
					</li>
					<li class="extra ">
						<a title="Registration"
							href="https://europa.eu/youreurope/citizens/vehicles/registration/index_en.htm"
							class="submenu" id="extra-btn-17" onclick="displaySubGroup(17, event);">Registration</a>
						<ul id="extra-menu-17">
							<li class="">
								<a title="Car registration documents and formalities"
									href="https://europa.eu/youreurope/citizens/vehicles/registration/formalities/index_en.htm">Car
									registration documents and formalities</a>
							</li>
							<li class="">
								<a title="Car registration in another EU country"
									href="https://europa.eu/youreurope/citizens/vehicles/registration/registration-abroad/index_en.htm">Car
									registration in another EU country</a>
							</li>
							<li class="">
								<a title="Car taxes in another EU country"
									href="https://europa.eu/youreurope/citizens/vehicles/registration/taxes-abroad/index_en.htm">Car
									taxes
									in another EU country</a>
							</li>
						</ul>
					</li>
				</ul>
			</li>
			<li class="section-menu">
				<a href="https://europa.eu/youreurope/citizens/residence/index_en.htm" title="Residence formalities"
					class="menu group">Residence formalities</a>
				<ul id="menu-group-4">
					<li class="extra ">
						<a title="Residence rights"
							href="https://europa.eu/youreurope/citizens/residence/residence-rights/index_en.htm"
							class="submenu" id="extra-btn-18" onclick="displaySubGroup(18, event);">Residence rights</a>
						<ul id="extra-menu-18">
							<li class="">
								<a title="Workers - residence rights"
									href="https://europa.eu/youreurope/citizens/residence/residence-rights/workers/index_en.htm">Workers
									-
									residence rights</a>
							</li>
							<li class="">
								<a title="Students - residence rights"
									href="https://europa.eu/youreurope/citizens/residence/residence-rights/students/index_en.htm">Students
									- residence rights</a>
							</li>
							<li class="">
								<a title="Pensioners - residence rights"
									href="https://europa.eu/youreurope/citizens/residence/residence-rights/pensioners/index_en.htm">Pensioners
									- residence rights</a>
							</li>
							<li class="">
								<a title="Jobseekers - residence rights"
									href="https://europa.eu/youreurope/citizens/residence/residence-rights/jobseekers/index_en.htm">Jobseekers
									- residence rights</a>
							</li>
						</ul>
					</li>
					<li class="extra ">
						<a title="Family residence rights"
							href="https://europa.eu/youreurope/citizens/residence/family-residence-rights/index_en.htm"
							class="submenu" id="extra-btn-19" onclick="displaySubGroup(19, event);">Family residence
							rights</a>
						<ul id="extra-menu-19">
							<li class="">
								<a title="Your EU spouse and children"
									href="https://europa.eu/youreurope/citizens/residence/family-residence-rights/eu-wife-husband-children/index_en.htm">Your
									EU spouse and children</a>
							</li>
							<li class="">
								<a title="Your non-EU spouse and children"
									href="https://europa.eu/youreurope/citizens/residence/family-residence-rights/non-eu-wife-husband-children/index_en.htm">Your
									non-EU spouse and children</a>
							</li>
							<li class="">
								<a title="Civil and registered partners"
									href="https://europa.eu/youreurope/citizens/residence/family-residence-rights/partners/index_en.htm">Civil
									and registered partners</a>
							</li>
							<li class="">
								<a title="Your parents"
									href="https://europa.eu/youreurope/citizens/residence/family-residence-rights/parents/index_en.htm">Your
									parents</a>
							</li>
							<li class="">
								<a title="Other relatives"
									href="https://europa.eu/youreurope/citizens/residence/family-residence-rights/other-family/index_en.htm">Other
									relatives</a>
							</li>
							<li class="">
								<a title="Jobseeker's family"
									href="https://europa.eu/youreurope/citizens/residence/family-residence-rights/jobseekers-family/index_en.htm">Jobseeker's
									family</a>
							</li>
						</ul>
					</li>
					<li class="extra ">
						<a title="Documents and formalities"
							href="https://europa.eu/youreurope/citizens/residence/documents-formalities/index_en.htm"
							class="submenu" id="extra-btn-20" onclick="displaySubGroup(20, event);">Documents and
							formalities</a>
						<ul id="extra-menu-20">
							<li class="">
								<a title="Reporting presence for short stays (&lt;3 months)"
									href="https://europa.eu/youreurope/citizens/residence/documents-formalities/reporting-presence/index_en.htm">Reporting
									presence for short stays (&lt;3 months)</a>
							</li>
							<li class="">
								<a title="Registering your residence abroad"
									href="https://europa.eu/youreurope/citizens/residence/documents-formalities/registering-residence/index_en.htm">Registering
									your residence abroad</a>
							</li>
							<li class="">
								<a title="Registering EU family members in another EU country"
									href="https://europa.eu/youreurope/citizens/residence/documents-formalities/eu-family-members-registration/index_en.htm">Registering
									EU family members in another EU country</a>
							</li>
							<li class="">
								<a title="Registering your non-EU family members in another EU country"
									href="https://europa.eu/youreurope/citizens/residence/documents-formalities/non-eu-family-members-residence-card/index_en.htm">Registering
									your non-EU family members in another EU country</a>
							</li>
							<li class="">
								<a title="Permanent residence (&gt;5 years) for EU nationals"
									href="https://europa.eu/youreurope/citizens/residence/documents-formalities/eu-nationals-permanent-residence/index_en.htm">Permanent
									residence (&gt;5 years) for EU nationals</a>
							</li>
							<li class="">
								<a title="Permanent residence (&gt;5 years) for non-EU family members"
									href="https://europa.eu/youreurope/citizens/residence/documents-formalities/non-eu-family-members-permanent-residence/index_en.htm">Permanent
									residence (&gt;5 years) for non-EU family members</a>
							</li>
						</ul>
					</li>
					<li class="extra ">
						<a title="Elections abroad"
							href="https://europa.eu/youreurope/citizens/residence/elections-abroad/index_en.htm"
							class="submenu" id="extra-btn-21" onclick="displaySubGroup(21, event);">Elections abroad</a>
						<ul id="extra-menu-21">
							<li class="">
								<a title="Municipal elections"
									href="https://europa.eu/youreurope/citizens/residence/elections-abroad/municipal-elections/index_en.htm">Municipal
									elections</a>
							</li>
							<li class="">
								<a title="European elections"
									href="https://europa.eu/youreurope/citizens/residence/elections-abroad/european-elections/index_en.htm">European
									elections</a>
							</li>
							<li class="">
								<a title="Home country elections"
									href="https://europa.eu/youreurope/citizens/residence/elections-abroad/home-country-elections/index_en.htm">Home
									country elections</a>
							</li>
						</ul>
					</li>
				</ul>
			</li>
			<li class="section-menu">
				<a href="https://europa.eu/youreurope/citizens/education/index_en.htm" title="Education &amp; Youth"
					class="menu group">Education &amp; Youth</a>
				<ul id="menu-group-5">
					<li class="extra ">
						<a title="School" href="https://europa.eu/youreurope/citizens/education/school/index_en.htm"
							class="submenu" id="extra-btn-22" onclick="displaySubGroup(22, event);">School</a>
						<ul id="extra-menu-22">
							<li class="">
								<a title="Starting school in another EU country"
									href="https://europa.eu/youreurope/citizens/education/school/enrol/index_en.htm">Starting
									school in
									another EU country</a>
							</li>
							<li class="">
								<a title="Partnering with schools abroad"
									href="https://europa.eu/youreurope/citizens/education/school/partner/index_en.htm">Partnering
									with
									schools abroad</a>
							</li>
						</ul>
					</li>
					<li class="extra ">
						<a title="University"
							href="https://europa.eu/youreurope/citizens/education/university/index_en.htm"
							class="submenu" id="extra-btn-23" onclick="displaySubGroup(23, event);">University</a>
						<ul id="extra-menu-23">
							<li class="">
								<a title="Admission and entry to university"
									href="https://europa.eu/youreurope/citizens/education/university/admission-entry-conditions/index_en.htm">Admission
									and entry to university</a>
							</li>
							<li class="">
								<a title="University fees and financial help"
									href="https://europa.eu/youreurope/citizens/education/university/fees-and-financial-help/index_en.htm">University
									fees and financial help</a>
							</li>
							<li class="">
								<a title="Recognition of academic diplomas"
									href="https://europa.eu/youreurope/citizens/education/university/recognition/index_en.htm">Recognition
									of academic diplomas</a>
							</li>
							<li class="">
								<a title="Study abroad and scholarship opportunities"
									href="https://europa.eu/youreurope/citizens/education/university/study-abroad/index_en.htm">Study
									abroad and scholarship opportunities</a>
							</li>
							<li class="">
								<a title="Working while studying"
									href="https://europa.eu/youreurope/citizens/education/university/working-while-studying/index_en.htm">Working
									while studying</a>
							</li>
						</ul>
					</li>
					<li class="extra ">
						<a title="Traineeships"
							href="https://europa.eu/youreurope/citizens/education/traineeships/index_en.htm"
							class="submenu" id="extra-btn-24" onclick="displaySubGroup(24, event);">Traineeships</a>
						<ul id="extra-menu-24">
							<li class="">
								<a title="Financial support for traineeships"
									href="https://europa.eu/youreurope/citizens/education/traineeships/financial/index_en.htm">Financial
									support for traineeships</a>
							</li>
						</ul>
					</li>
					<li class="extra ">
						<a title="Researchers"
							href="https://europa.eu/youreurope/citizens/education/research/index_en.htm" class="submenu"
							id="extra-btn-25" onclick="displaySubGroup(25, event);">Researchers</a>
						<ul id="extra-menu-25">
							<li class="">
								<a title="Grants and jobs for researchers"
									href="https://europa.eu/youreurope/citizens/education/research/jobs/index_en.htm">Grants
									and jobs for
									researchers</a>
							</li>
							<li class="">
								<a title="Taxation of researchers"
									href="https://europa.eu/youreurope/citizens/education/research/tax/index_en.htm">Taxation
									of
									researchers</a>
							</li>
						</ul>
					</li>
					<li class="extra ">
						<a title="Volunteering"
							href="https://europa.eu/youreurope/citizens/education/volunteering/index_en.htm"
							class="submenu" id="extra-btn-26" onclick="displaySubGroup(26, event);">Volunteering</a>
						<ul id="extra-menu-26">
							<li class="">
								<a title="Finding a volunteering project"
									href="https://europa.eu/youreurope/citizens/education/volunteering/find/index_en.htm">Finding
									a
									volunteering project</a>
							</li>
							<li class="">
								<a title="Practical preparations for volunteers"
									href="https://europa.eu/youreurope/citizens/education/volunteering/prepare/index_en.htm">Practical
									preparations for volunteers</a>
							</li>
						</ul>
					</li>
				</ul>
			</li>
			<li class="section-menu">
				<a href="https://europa.eu/youreurope/citizens/health/index_en.htm" title="Health"
					class="menu group">Health</a>
				<ul id="menu-group-6">
					<li class="extra ">
						<a title="Unplanned healthcare"
							href="https://europa.eu/youreurope/citizens/health/unplanned-healthcare/index_en.htm"
							class="submenu" id="extra-btn-27" onclick="displaySubGroup(27, event);">Unplanned
							healthcare</a>
						<ul id="extra-menu-27">
							<li class="">
								<a title="Health cover for temporary stays"
									href="https://europa.eu/youreurope/citizens/health/unplanned-healthcare/temporary-stays/index_en.htm">Health
									cover for temporary stays</a>
							</li>
							<li class="">
								<a title="Going to a doctor/hospital abroad"
									href="https://europa.eu/youreurope/citizens/health/unplanned-healthcare/going-to-doctor-hospital-abroad/index_en.htm">Going
									to a doctor/hospital abroad</a>
							</li>
							<li class="">
								<a title="Unplanned healthcare: payments and reimbursements"
									href="https://europa.eu/youreurope/citizens/health/unplanned-healthcare/payments-reimbursements/index_en.htm">Unplanned
									healthcare: payments and reimbursements</a>
							</li>
						</ul>
					</li>
					<li class="extra ">
						<a title="Planned medical treatment abroad"
							href="https://europa.eu/youreurope/citizens/health/planned-healthcare/index_en.htm"
							class="submenu" id="extra-btn-28" onclick="displaySubGroup(28, event);">Planned medical
							treatment abroad</a>
						<ul id="extra-menu-28">
							<li class="">
								<a title="Organising planned medical treatment abroad"
									href="https://europa.eu/youreurope/citizens/health/planned-healthcare/right-to-treatment/index_en.htm">Organising
									planned medical treatment abroad</a>
							</li>
							<li class="">
								<a title="Expenses and reimbursements: planned medical treatment abroad"
									href="https://europa.eu/youreurope/citizens/health/planned-healthcare/expenses-reimbursements/index_en.htm">Expenses
									and reimbursements: planned medical treatment abroad</a>
							</li>
							<li class="">
								<a title="Information points: planned medical treatment abroad"
									href="https://europa.eu/youreurope/citizens/health/planned-healthcare/get-more-info/index_en.htm">Information
									points: planned medical treatment abroad</a>
							</li>
						</ul>
					</li>
					<li class="extra ">
						<a title="Getting prescription medicine abroad"
							href="https://europa.eu/youreurope/citizens/health/prescription-medicine-abroad/index_en.htm"
							class="submenu" id="extra-btn-29" onclick="displaySubGroup(29, event);">Getting prescription
							medicine
							abroad</a>
						<ul id="extra-menu-29">
							<li class="">
								<a title="Presenting a prescription abroad"
									href="https://europa.eu/youreurope/citizens/health/prescription-medicine-abroad/prescriptions/index_en.htm">Presenting
									a prescription abroad</a>
							</li>
							<li class="">
								<a title="Prescriptions abroad: expenses and reimbursements"
									href="https://europa.eu/youreurope/citizens/health/prescription-medicine-abroad/expenses-reimbursements/index_en.htm">Prescriptions
									abroad: expenses and reimbursements</a>
							</li>
						</ul>
					</li>
					<li class="extra ">
						<a title="When living abroad"
							href="https://europa.eu/youreurope/citizens/health/when-living-abroad/index_en.htm"
							class="submenu" id="extra-btn-30" onclick="displaySubGroup(30, event);">When living
							abroad</a>
						<ul id="extra-menu-30">
							<li class="">
								<a title="Your health insurance cover"
									href="https://europa.eu/youreurope/citizens/health/when-living-abroad/health-insurance-cover/index_en.htm">Your
									health insurance cover</a>
							</li>
						</ul>
					</li>
				</ul>
			</li>
			<li class="section-menu">
				<a href="https://europa.eu/youreurope/citizens/family/index_en.htm" title="Family"
					class="menu group">Family</a>
				<ul id="menu-group-7">
					<li class="extra ">
						<a title="Children" href="https://europa.eu/youreurope/citizens/family/children/index_en.htm"
							class="submenu" id="extra-btn-31" onclick="displaySubGroup(31, event);">Children</a>
						<ul id="extra-menu-31">
							<li class="">
								<a title="Parental responsibility"
									href="https://europa.eu/youreurope/citizens/family/children/parental-responsibility/index_en.htm">Parental
									responsibility</a>
							</li>
							<li class="">
								<a title="Adoption"
									href="https://europa.eu/youreurope/citizens/family/children/adoption/index_en.htm">Adoption</a>
							</li>
							<li class="">
								<a title="Child abduction"
									href="https://europa.eu/youreurope/citizens/family/children/abduction/index_en.htm">Child
									abduction</a>
							</li>
							<li class="">
								<a title="Family benefits"
									href="https://europa.eu/youreurope/citizens/family/children/benefits/index_en.htm">Family
									benefits</a>
							</li>
						</ul>
					</li>
					<li class="extra ">
						<a title="Couples" href="https://europa.eu/youreurope/citizens/family/couple/index_en.htm"
							class="submenu" id="extra-btn-32" onclick="displaySubGroup(32, event);">Couples</a>
						<ul id="extra-menu-32">
							<li class="">
								<a title="Marriage"
									href="https://europa.eu/youreurope/citizens/family/couple/marriage/index_en.htm">Marriage</a>
							</li>
							<li class="">
								<a title="Civil unions and registered partnerships"
									href="https://europa.eu/youreurope/citizens/family/couple/registered-partners/index_en.htm">Civil
									unions and registered partnerships</a>
							</li>
							<li class="">
								<a title="Unmarried couples"
									href="https://europa.eu/youreurope/citizens/family/couple/de-facto-unions/index_en.htm">Unmarried
									couples</a>
							</li>
							<li class="">
								<a title="Divorce and legal separation"
									href="https://europa.eu/youreurope/citizens/family/couple/divorce-separation/index_en.htm">Divorce
									and
									legal separation</a>
							</li>
							<li class="">
								<a title="Maintenance obligations - support for family members"
									href="https://europa.eu/youreurope/citizens/family/couple/maintenance/index_en.htm">Maintenance
									obligations - support for family members</a>
							</li>
							<li class="">
								<a title="Property regimes for international couples"
									href="https://europa.eu/youreurope/citizens/family/couple/property-regimes-international-couples/index_en.htm">Property
									regimes for international couples</a>
							</li>
							<li class="">
								<a title="Getting your public documents accepted in the EU"
									href="https://europa.eu/youreurope/citizens/family/couple/getting-public-documents-accepted/index_en.htm">Getting
									your public documents accepted in the EU</a>
							</li>
						</ul>
					</li>
					<li class="extra ">
						<a title="Cross-border inheritance"
							href="https://europa.eu/youreurope/citizens/family/inheritances/index_en.htm"
							class="submenu" id="extra-btn-33" onclick="displaySubGroup(33, event);">Cross-border
							inheritance</a>
						<ul id="extra-menu-33">
							<li class="">
								<a title="Planning your cross-border inheritance"
									href="https://europa.eu/youreurope/citizens/family/inheritances/planning-inheritance/index_en.htm">Planning
									your cross-border inheritance</a>
							</li>
							<li class="">
								<a title="Managing a cross-border inheritance"
									href="https://europa.eu/youreurope/citizens/family/inheritances/managing-inheritance/index_en.htm">Managing
									a cross-border inheritance</a>
							</li>
						</ul>
					</li>
				</ul>
			</li>
			<li class="section-menu">
				<a href="https://europa.eu/youreurope/citizens/consumers/index_en.htm" title="Consumers"
					class="menu group">Consumers</a>
				<ul id="menu-group-8">
					<li class="extra ">
						<a title="Shopping" href="https://europa.eu/youreurope/citizens/consumers/shopping/index_en.htm"
							class="submenu" id="extra-btn-34" onclick="displaySubGroup(34, event);">Shopping</a>
						<ul id="extra-menu-34">
							<li class="">
								<a title="Contract information"
									href="https://europa.eu/youreurope/citizens/consumers/shopping/contract-information/index_en.htm">Contract
									information</a>
							</li>
							<li class="">
								<a title="Pricing and payments"
									href="https://europa.eu/youreurope/citizens/consumers/shopping/pricing-payments/index_en.htm">Pricing
									and payments</a>
							</li>
							<li class="">
								<a title="VAT – Value Added Tax"
									href="https://europa.eu/youreurope/citizens/consumers/shopping/vat/index_en.htm">VAT
									– Value Added
									Tax</a>
							</li>
							<li class="">
								<a title="Shipping and delivery"
									href="https://europa.eu/youreurope/citizens/consumers/shopping/shipping-delivery/index_en.htm">Shipping
									and delivery</a>
							</li>
							<li class="">
								<a title="Guarantees and returns"
									href="https://europa.eu/youreurope/citizens/consumers/shopping/guarantees-returns/index_en.htm">Guarantees
									and returns</a>
							</li>
						</ul>
					</li>
					<li class="extra ">
						<a title="Internet and telecoms"
							href="https://europa.eu/youreurope/citizens/consumers/internet-telecoms/index_en.htm"
							class="submenu" id="extra-btn-35" onclick="displaySubGroup(35, event);">Internet and
							telecoms</a>
						<ul id="extra-menu-35">
							<li class="">
								<a title="Roaming in the EU"
									href="https://europa.eu/youreurope/citizens/consumers/internet-telecoms/mobile-roaming-costs/index_en.htm">Roaming
									in the EU</a>
							</li>
							<li class="">
								<a title="Accessing online content abroad"
									href="https://europa.eu/youreurope/citizens/consumers/internet-telecoms/access-online-content-abroad/index_en.htm">Accessing
									online content abroad</a>
							</li>
							<li class="">
								<a title="Telecommunication services"
									href="https://europa.eu/youreurope/citizens/consumers/internet-telecoms/telecommunication-services/index_en.htm">Telecommunication
									services</a>
							</li>
							<li class="">
								<a title="Internet access"
									href="https://europa.eu/youreurope/citizens/consumers/internet-telecoms/internet-access/index_en.htm">Internet
									access</a>
							</li>
							<li class="">
								<a title="Data protection and online privacy"
									href="https://europa.eu/youreurope/citizens/consumers/internet-telecoms/data-protection-online-privacy/index_en.htm">Data
									protection and online privacy</a>
							</li>
						</ul>
					</li>
					<li class="extra ">
						<a title="Financial products and services"
							href="https://europa.eu/youreurope/citizens/consumers/financial-products-and-services/index_en.htm"
							class="submenu" id="extra-btn-36" onclick="displaySubGroup(36, event);">Financial products
							and
							services</a>
						<ul id="extra-menu-36">
							<li class="">
								<a title="Bank accounts in the EU"
									href="https://europa.eu/youreurope/citizens/consumers/financial-products-and-services/bank-accounts-eu/index_en.htm">Bank
									accounts in the EU</a>
							</li>
							<li class="">
								<a title="Payments, transfers and cheques"
									href="https://europa.eu/youreurope/citizens/consumers/financial-products-and-services/payments-transfers-cheques/index_en.htm">Payments,
									transfers and cheques</a>
							</li>
							<li class="">
								<a title="Mortgage loans"
									href="https://europa.eu/youreurope/citizens/consumers/financial-products-and-services/mortgages/index_en.htm">Mortgage
									loans</a>
							</li>
							<li class="">
								<a title="Insurance products"
									href="https://europa.eu/youreurope/citizens/consumers/financial-products-and-services/insurance-products/index_en.htm">Insurance
									products</a>
							</li>
							<li class="">
								<a title="Consumer credits and loans"
									href="https://europa.eu/youreurope/citizens/consumers/financial-products-and-services/consumer-credits-and-loans/index_en.htm">Consumer
									credits and loans</a>
							</li>
							<li class="">
								<a title="Investment products"
									href="https://europa.eu/youreurope/citizens/consumers/financial-products-and-services/investment-products/index_en.htm">Investment
									products</a>
							</li>
						</ul>
					</li>
					<li class="extra ">
						<a title="Unfair treatment"
							href="https://europa.eu/youreurope/citizens/consumers/unfair-treatment/index_en.htm"
							class="submenu" id="extra-btn-37" onclick="displaySubGroup(37, event);">Unfair treatment</a>
						<ul id="extra-menu-37">
							<li class="">
								<a title="Unfair commercial practices"
									href="https://europa.eu/youreurope/citizens/consumers/unfair-treatment/unfair-commercial-practices/index_en.htm">Unfair
									commercial practices</a>
							</li>
							<li class="">
								<a title="Unfair pricing"
									href="https://europa.eu/youreurope/citizens/consumers/unfair-treatment/unfair-pricing/index_en.htm">Unfair
									pricing</a>
							</li>
							<li class="">
								<a title="Unfair contract terms"
									href="https://europa.eu/youreurope/citizens/consumers/unfair-treatment/unfair-contract-terms/index_en.htm">Unfair
									contract terms</a>
							</li>
						</ul>
					</li>
					<li class="extra ">
						<a title="Energy supply"
							href="https://europa.eu/youreurope/citizens/consumers/energy-supply/index_en.htm"
							class="submenu" id="extra-btn-38" onclick="displaySubGroup(38, event);">Energy supply</a>
						<ul id="extra-menu-38">
							<li class="">
								<a title="Access to and use of energy services"
									href="https://europa.eu/youreurope/citizens/consumers/energy-supply/access-use-energy-services/index_en.htm">Access
									to and use of energy services</a>
							</li>
							<li class="">
								<a title="Contracts and energy consumption"
									href="https://europa.eu/youreurope/citizens/consumers/energy-supply/contracts-energy-consumption/index_en.htm">Contracts
									and energy consumption</a>
							</li>
							<li class="">
								<a title="Complaints and dispute resolution"
									href="https://europa.eu/youreurope/citizens/consumers/energy-supply/complaints-dispute-resolution/index_en.htm">Complaints
									and dispute resolution</a>
							</li>
						</ul>
					</li>
					<li class="extra ">
						<a title="Consumer dispute resolution"
							href="https://europa.eu/youreurope/citizens/consumers/consumers-dispute-resolution/index_en.htm"
							class="submenu" id="extra-btn-39" onclick="displaySubGroup(39, event);">Consumer dispute
							resolution</a>
						<ul id="extra-menu-39">
							<li class="">
								<a title="Informal dispute resolution for consumers"
									href="https://europa.eu/youreurope/citizens/consumers/consumers-dispute-resolution/informal-dispute-resolution/index_en.htm">Informal
									dispute resolution for consumers</a>
							</li>
							<li class="">
								<a title="Out-of-court procedures for consumers"
									href="https://europa.eu/youreurope/citizens/consumers/consumers-dispute-resolution/out-of-court-procedures/index_en.htm">Out-of-court
									procedures for consumers</a>
							</li>
							<li class="">
								<a title="Formal legal action for consumers"
									href="https://europa.eu/youreurope/citizens/consumers/consumers-dispute-resolution/formal-legal-actions/index_en.htm">Formal
									legal action for consumers</a>
							</li>
						</ul>
					</li>
				</ul>
			</li>
			<li id="switch-recipient"></li>
			<div class="clear"></div>
		</ul>
	</nav>
	<footer id="footer-content">
		<section id="feedback-bar">
			<div class="centered">
				<button id="feedback">Help us improve</button>
				<form action="https://europa.eu/youreurope/citizens/index_en.htm" name="fm" method="post"
					class="standard-form" id="feedback-form">
					<input id="section" name="section" type="hidden" value=""><input value="" id="ip" name="ip"
						type="hidden">
					<p class="status">Thank you for taking part in our survey!</p>
					<label class="mandatory block">Find what you wanted?</label><label class="radio">Yes<input
							value="yes" id="found-yes" name="found-topic" type="radio"><span
							class="radio-mark"></span></label><label class="radio">No<input value="no" id="found-no"
							name="found-topic" type="radio"><span class="radio-mark"></span></label><label
						class="mandatory block" for="looking-topic">What were you looking
						for?</label><input name="looking-topic" id="looking-topic" type="text"><label class="block"
						for="suggestions">Any suggestions?</label><textarea rows="8" cols="60"
						id="suggestions"></textarea><input type="submit" value="Send">
					<p class="mandatory">mandatory field</p>
				</form>
			</div>
		</section>
		<section id="ye-footer">
			<div class="centered">
				<div id="ye-footer-title">
					<a href="#">Your Europe</a>
				</div>
				<div id="ye-follow-links">
					Follow us on
					:
					<a id="ye-follow-facebook" target="_blank"
						href="https://www.facebook.com/YourEuropePortal">Facebook</a><a id="ye-follow-twitter"
						target="_blank" href="https://twitter.com/YourEuropeEu">twitter</a><a id="ye-follow-linkedin"
						target="_blank"
						href="https://www.linkedin.com/showcase/your-europe-business-showcase/">LinkedIn</a>
				</div>
				<ul id="ye-general-pages">
					<li>
						<a accesskey="5" href="https://europa.eu/youreurope/promo/index.htm">Promotional material</a>
					</li>
					<li>
						<a accesskey="6" href="javascript:tools.printPage();">Print version</a>
					</li>
					<li>
						<a accesskey="7" href="https://europa.eu/youreurope/citizens/cookies/index_en.htm">Cookies</a>
					</li>
					<li>
						<a accesskey="1" href="https://europa.eu/youreurope/citizens/contact/index_en.htm">Contact</a>
					</li>
				</ul>
				<div class="clear"></div>
			</div>
		</section>
		<section id="eu-links-list">
			<div class="centered">
				<div id="eu-contacts">
					<div class="eu-links-list-title">Contact the EU</div>
					<a name="eu_institutions"></a>
					<ul>
						<li>
							<a target="_blank" href="https://europa.eu/european-union/contact/call-us_en">Call 00 800 6
								7 8 9 10 11.
								See details of service</a>
						</li>
						<li>
							<a target="_blank" href="https://europa.eu/european-union/contact/write-to-us_en">Email your
								questions
								about the EU</a>
						</li>
						<li>
							<a target="_blank" href="https://europa.eu/european-union/contact_en#row_4">EU in your
								country</a>
						</li>
						<li>
							<a target="_blank" href="https://europa.eu/european-union/contact/meet-us_en">Local
								information services
								in the EU</a>
						</li>
					</ul>
					<ul>
						<li>
							<a target="_blank"
								href="https://europa.eu/european-union/contact/institutions-bodies_en">Institutions,
								bodies and agencies</a>
						</li>
						<li>
							<a target="_blank" href="https://europa.eu/newsroom/press-contacts_en">Press contacts</a>
						</li>
						<li>
							<a target="_blank" href="https://europa.eu/european-union/contact/mailbox_en">Contact the
								webteam</a>
						</li>
					</ul>
					<div class="clear"></div>
				</div>
				<div id="eu-social">
					<div class="eu-links-list-title">Find EU social media accounts</div>
					<ul>
						<li>
							<a href="#social-media-tool">Use this tool to search for EU social media channels</a>
						</li>
					</ul>
				</div>
				<div class="clear"></div>
				<div id="eu-institutions">
					<div class="eu-links-list-title">Find a European institution</div>
					<ul>
						<li>
							<a target="_blank" href="http://www.europarl.europa.eu/portal/en">European Parliament</a>
						</li>
						<li>
							<a target="_blank" href="http://www.consilium.europa.eu/en/european-council/">European
								Council</a>
						</li>
						<li>
							<a target="_blank" href="https://www.consilium.europa.eu/en/">Council of the European
								Union</a>
						</li>
						<li>
							<a target="_blank" href="https://ec.europa.eu/commission/index_en">European Commission</a>
						</li>
						<li>
							<a target="_blank" href="https://curia.europa.eu/jcms/jcms/index.html">Court of Justice of
								the European
								Union</a>
						</li>
						<li>
							<a target="_blank" href="http://www.ecb.europa.eu/home/html/index.en.html">European Central
								Bank</a>
						</li>
					</ul>
					<ul>
						<li>
							<a target="_blank" href="https://www.eca.europa.eu/en/Pages/ecadefault.aspx">European Court
								of
								Auditors</a>
						</li>
						<li>
							<a target="_blank"
								href="https://eeas.europa.eu/headquarters/headquarters-homepage_en">European External
								Action Service</a>
						</li>
						<li>
							<a target="_blank" href="https://www.eesc.europa.eu/en">European Economic and Social
								Committee</a>
						</li>
						<li>
							<a target="_blank" href="https://cor.europa.eu/en">European Commitee of the Regions</a>
						</li>
						<li>
							<a target="_blank" href="http://www.eib.org/index.htm?lang=en">European Investment Bank</a>
						</li>
						<li>
							<a target="_blank" href="https://www.ombudsman.europa.eu/en/home.faces">European
								Ombudsman</a>
						</li>
					</ul>
					<ul>
						<li>
							<a target="_blank" href="https://edps.europa.eu/">European Data Protection Supervisor</a>
						</li>
						<li>
							<a target="_blank" href="https://epso.europa.eu/home_en">European Personnel Selection
								Office</a>
						</li>
						<li>
							<a target="_blank" href="https://publications.europa.eu/en/home">Publications Office of the
								European
								Union</a>
						</li>
						<li>
							<a target="_blank" href="https://europa.eu/european-union/about-eu/agencies_en">Agencies</a>
						</li>
					</ul>
					<div class="clear"></div>
				</div>
			</div>
		</section>
		<section id="eu-services-list">
			<ul class="centered">
				<li>
					<a href="https://europa.eu/european-union/about-eu/working_en">Work for the European Union</a>
				</li>
				<li>
					<a accesskey="3" href="https://europa.eu/european-union/abouteuropa/legal_notices_en">Legal
						notice</a>
				</li>
				<li>
					<a href="https://europa.eu/european-union/abouteuropa/language-policy_en">Language policy</a>
				</li>
				<li>
					<a href="https://europa.eu/european-union/abouteuropa/accessibility_en">Web accessibility</a>
				</li>
			</ul>
		</section>
	</footer>
	<script type="text/javascript"
		src="Help%20and%20advice%20for%20EU%20nationals%20and%20their%20family%20-%20Your%20Europe_files/load.js"
		defer="defer"></script>
	<div class="analytics wt wt-analytics "></div>
	<script type="application/json" data-process="true" data-run="true">
		{
			"utility": "piwik",
			"siteID": 47,
			"sitePath": ["europa.eu\/youreurope"],
			"instance": "europa.eu",
			"siteSection": "citizens",
			"is404": false
		}
	</script>
	<script
		src="Help%20and%20advice%20for%20EU%20nationals%20and%20their%20family%20-%20Your%20Europe_files/cookie_config.js">
	</script>
	<script
		src="Help%20and%20advice%20for%20EU%20nationals%20and%20their%20family%20-%20Your%20Europe_files/consent.js">
	</script>
	<script
		src="Help%20and%20advice%20for%20EU%20nationals%20and%20their%20family%20-%20Your%20Europe_files/jquery-3.js">
	</script>
	<script src="Help%20and%20advice%20for%20EU%20nationals%20and%20their%20family%20-%20Your%20Europe_files/jquery.js">
	</script>
	<script
		src="Help%20and%20advice%20for%20EU%20nationals%20and%20their%20family%20-%20Your%20Europe_files/europa-ye.js">
	</script>


	<script type="text/javascript"
		src="Help%20and%20advice%20for%20EU%20nationals%20and%20their%20family%20-%20Your%20Europe_files/webtools.js">
	</script>
	<script type="text/javascript"
		src="Help%20and%20advice%20for%20EU%20nationals%20and%20their%20family%20-%20Your%20Europe_files/piwik.js">
	</script>
	<script type="text/javascript"
		src="Help%20and%20advice%20for%20EU%20nationals%20and%20their%20family%20-%20Your%20Europe_files/script.js">
	</script>
</body>

</html>