<?php

// LABELS DEFINITION
$labels=array(
	"es"=>array(
		"title"=>"Página personal de Josep Sanz Campderrós",
		"description"=>"Página personal de Josep Sanz Campderrós",
		"author"=>"Josep Sanz Campderrós",
		"toggle"=>"Menu de navegación",
		"navbar"=>"Josep Sanz Campderrós",
		"portfolio"=>"Proyectos",
		"about"=>"CV",
		"contact"=>"Contactar",
		"catala"=>"Català",
		"castellano"=>"Castellano",
		"english"=>"English",
		"name"=>"Josep Sanz Campderrós",
		"skills"=>"Soy desarrollador de software y un apasionado de la tecnología",
		"myportfolio"=>"Mis proyectos",
		"aboutme"=>"Mi currículum vitae",
		"downloadtext"=>"Descargar currículum vitae",
		"downloadlink"=>"pdf/cv_josep_sanz_spanish.pdf",
		"contactme"=>"Contactar conmigo",
		"fieldname"=>"Nombre",
		"fieldemail"=>"Dirección de correo",
		"fieldphone"=>"Número de teléfono",
		"fieldmessage"=>"Mensaje",
		"requiredname"=>"Debe entrar su nombre.",
		"requiredmessage"=>"Debe entrar un mensaje.",
		"sendok"=>"Tu mensaje ha sido enviado.",
		"sendko"=>"Lo siento, parece que mi servidor de correo no está respondiendo. Por favor, inténtelo de nuevo más tarde!",
		"buttonsend"=>"Enviar",
		"footer"=>"Redes sociales",
		"copyright"=>"Copyright &copy; 2016-2020 Josep Sanz Campderrós",
		"template"=>"Plantilla original de <a href='https://startbootstrap.com/themes/freelancer/' target='_blank'>Start Bootstrap</a>",
		"moreinfo"=>"Más información:",
		"close"=>"Cerrar",
		"portfolios"=>array(
			"saltos"=>array(
				"image"=>"img/portfolio_saltos.png",
				"title"=>"SaltOS",
				"description"=>"SaltOS es la solución 100% Cloud Computing de Gestión Empresarial. Integra las funcionalidades de CRM y ERP. Además está licenciado como software libre bajo la licencia GPL-3.0.",
				"links"=>array(
					"www.saltos.org"=>"http://www.saltos.org",
					"sourceforge.net"=>"https://sourceforge.net/projects/saltos/",
					"github.com"=>"https://github.com/josepsanzcamp/SaltOS",
				)
			),
			"rhinos"=>array(
				"image"=>"img/portfolio_rhinos.png",
				"title"=>"RhinOS",
				"description"=>"RhinOS es la herramienta perfecta para construir un portal web profesional, administrado de manera fácil y ágil sin necesidad de tener conocimientos técnicos. Además está licenciado como software libre bajo la licencia GPL-3.0.",
				"links"=>array(
					"sourceforge.net"=>"http://sourceforge.net/projects/rhinos",
					"github.com"=>"https://github.com/josepsanzcamp/RhinOS",
				)
			),
			"openrocs"=>array(
				"image"=>"img/portfolio_openrocs.png",
				"title"=>"OpenROCS v2.0",
				"description"=>"OpenROCS conforms an independent control layer for robotic observatories. It is a master scheduler of the processes that the system has to execute and a monitor of the overall state of the observatory. It controls the end-to-end data flow and the housekeeping processes by handling a set of predefined events. The former are responsible for ensuring that the system executes the routine operation by maximizing the scientific return of the facility. While the latter consider all those anomalous situations that could put the observatory at risk and activate corrective or mitigation actions. All the applications running at the observatory and the hardware components interact with it. It is released under GNU/GPL public license.",
				"links"=>array(
					"sourceforge.net"=>"http://sourceforge.net/projects/openrocs",
					"upcommons.upc.edu"=>"https://upcommons.upc.edu/handle/2099.1/26215",
					"github.com"=>"https://github.com/josepsanzcamp/OpenROCS",
				)
			),
			"gralla"=>array(
				"image"=>"img/portfolio_gralla.png",
				"title"=>"Partituras para gralla",
				"description"=>"Este portal es un catálogo de partituras para gralla. Las 250 partituras iniciales las consegui de la web gralla.skamot.com en formato encore y usando software libre, las converti a lilypond, pdf, midi y mp3. Actualmente esta todo publicado en github y la aplicación online es 100% javascript",
				"links"=>array(
					"gralla.josepsanz.net"=>"http://gralla.josepsanz.net",
					"github.com"=>"https://github.com/josepsanzcamp/gralla",
				)
			),
			"rpi"=>array(
				"image"=>"img/portfolio_rpi.png",
				"title"=>"Read-only Root-FS with overlayfs for Raspian",
				"description"=>"This repository contains some useful files that allow you to use a Raspberry PI using a readonly filesystem. This files contains some ideas and code of the following projects: https://gist.github.com/niun/34c945d70753fc9e2cc7 and https://github.com/chesty/overlayroot. Congratulate the original authors if these files works as expected. Too, you can congratulate to me to join all files in a one repository and do some changes allowing to use the root and boot filesytem in readonly mode.",
				"links"=>array(
					"github.com"=>"https://github.com/josepsanzcamp/root-ro",
				)
			),
			"piwik"=>array(
				"image"=>"img/portfolio_piwik.png",
				"title"=>"sqlite-for-piwik",
				"description"=>"This repository contains the files needed to use Piwik with SQLite instead of MySQL. How to use it: Put the following file into the correct location: libs/mysql2sqlite.php, core/Db/Adapter/Pdo/Sqlite.php, core/Tracker.php and core/Tracker/Db/Pdo/Sqlite.php. Edit the config/config.ini.php and add in the [database] section: adapter=Pdo_Sqlite and dbname=piwik.sqlite And then, execute piwik...",
				"links"=>array(
					"github.com"=>"https://github.com/josepsanzcamp/sqlite-for-piwik",
				)
			),
			"covid19"=>array(
				"image"=>"img/portfolio_covid19.png",
				"title"=>"Covid 19",
				"description"=>"Gráficos de defunciones por año, origen de los datos, acumulados diarios, semanales, mensuales, anuales, por edad, por comunidad autónoma, por provincia, por pais y más. Todos los datos se han obtenido de fuentes oficiales como MoMo, INE, CSIC, OECD, EuroMoMo, Eurostat, o los equivalentes al instituto nacional de estadística de Suecia, Noruega, Portugal, Francia y Alemania",
				"links"=>array(
					"josepsanzcamp.github.io"=>"https://josepsanzcamp.github.io/covid19",
					"github.com"=>"https://github.com/josepsanzcamp/covid19",
				)
			),
			"cdesktopenv"=>array(
				"image"=>"img/portfolio_cdesktopenv.png",
				"title"=>"Common Desktop Environment",
				"description"=>"This repository contains some useful scripts (developed by me, more or less) used by me to add features to my CDE that runs on my laptop with GNU/Linux!!!",
				"links"=>array(
					"github.com"=>"https://github.com/josepsanzcamp/cdesktopenv",
				)
			),
		)
	),
	"en"=>array(
		"title"=>"Personal site of Josep Sanz Campderrós",
		"description"=>"Personal site of Josep Sanz Campderrós",
		"author"=>"Josep Sanz Campderrós",
		"toggle"=>"Toggle navigation",
		"navbar"=>"Josep Sanz Campderrós",
		"portfolio"=>"Projects",
		"about"=>"Profile",
		"contact"=>"Contact",
		"catala"=>"Català",
		"castellano"=>"Castellano",
		"english"=>"English",
		"name"=>"Josep Sanz Campderrós",
		"skills"=>"I am a software developer and passionate about technology",
		"myportfolio"=>"My projects",
		"aboutme"=>"My professional profile",
		"downloadtext"=>"Download profile",
		"downloadlink"=>"pdf/cv_josep_sanz_english.pdf",
		"contactme"=>"Contact me",
		"fieldname"=>"Name",
		"fieldemail"=>"Email Address",
		"fieldphone"=>"Phone number",
		"fieldmessage"=>"Message",
		"requiredname"=>"Please enter your name.",
		"requiredmessage"=>"Please enter a message.",
		"sendok"=>"Your message has been sent.",
		"sendko"=>"Sorry, it seems that my mail server is not responding. Please try again later!",
		"buttonsend"=>"Send",
		"footer"=>"Around the web",
		"copyright"=>"Copyright &copy; 2016-2020 Josep Sanz Campderrós",
		"template"=>"Original template of <a href='https://startbootstrap.com/themes/freelancer/' target='_blank'>Start Bootstrap</a>",
		"moreinfo"=>"More information:",
		"close"=>"Close",
		"portfolios"=>array(
			"saltos"=>array(
				"image"=>"img/portfolio_saltos.png",
				"title"=>"SaltOS",
				"description"=>"SaltOS is the Business Management solution 100% Cloud Computing. It integrates features like CRM and ERP. Moreover is it licensed as 100% free software GPL-3.0.",
				"links"=>array(
					"www.saltos.org"=>"http://www.saltos.org",
					"sourceforge.net"=>"https://sourceforge.net/projects/saltos/",
					"github.com"=>"https://github.com/josepsanzcamp/SaltOS",
				)
			),
			"rhinos"=>array(
				"image"=>"img/portfolio_rhinos.png",
				"title"=>"RhinOS",
				"description"=>"RhinOS is a perfect tool for building a professional website, and manage it in a easy and dynamic way without needing technical knowledge. Its license is 100% free software based GPL-3.0.",
				"links"=>array(
					"sourceforge.net"=>"http://sourceforge.net/projects/rhinos",
					"github.com"=>"https://github.com/josepsanzcamp/RhinOS",
				)
			),
			"openrocs"=>array(
				"image"=>"img/portfolio_openrocs.png",
				"title"=>"OpenROCS v2.0",
				"description"=>"OpenROCS conforms an independent control layer for robotic observatories. It is a master scheduler of the processes that the system has to execute and a monitor of the overall state of the observatory. It controls the end-to-end data flow and the housekeeping processes by handling a set of predefined events. The former are responsible for ensuring that the system executes the routine operation by maximizing the scientific return of the facility. While the latter consider all those anomalous situations that could put the observatory at risk and activate corrective or mitigation actions. All the applications running at the observatory and the hardware components interact with it. It is released under GNU/GPL public license.",
				"links"=>array(
					"sourceforge.net"=>"http://sourceforge.net/projects/openrocs",
					"upcommons.upc.edu"=>"https://upcommons.upc.edu/handle/2099.1/26215",
				)
			),
			"gralla"=>array(
				"image"=>"img/portfolio_gralla.png",
				"title"=>"Sheet music for gralla",
				"description"=>"This site is a catalog of sheet music for gralla. I obtained the 250 initial scores from the web gralla.skamot.com in encore format and using free software, I converted them to lilypond, pdf, midi and mp3. Currently everything is published on github and the online application is 100% javascript",
				"links"=>array(
					"gralla.josepsanz.net"=>"http://gralla.josepsanz.net",
					"github.com"=>"https://github.com/josepsanzcamp/gralla",
				)
			),
			"rpi"=>array(
				"image"=>"img/portfolio_rpi.png",
				"title"=>"Read-only Root-FS with overlayfs for Raspian",
				"description"=>"This repository contains some useful files that allow you to use a Raspberry PI using a readonly filesystem. This files contains some ideas and code of the following projects: https://gist.github.com/niun/34c945d70753fc9e2cc7 and https://github.com/chesty/overlayroot. Congratulate the original authors if these files works as expected. Too, you can congratulate to me to join all files in a one repository and do some changes allowing to use the root and boot filesytem in readonly mode.",
				"links"=>array(
					"github.com"=>"https://github.com/josepsanzcamp/root-ro",
				)
			),
			"piwik"=>array(
				"image"=>"img/portfolio_piwik.png",
				"title"=>"sqlite-for-piwik",
				"description"=>"This repository contains the files needed to use Piwik with SQLite instead of MySQL. How to use it: Put the following file into the correct location: libs/mysql2sqlite.php, core/Db/Adapter/Pdo/Sqlite.php, core/Tracker.php and core/Tracker/Db/Pdo/Sqlite.php. Edit the config/config.ini.php and add in the [database] section: adapter=Pdo_Sqlite and dbname=piwik.sqlite And then, execute piwik...",
				"links"=>array(
					"github.com"=>"https://github.com/josepsanzcamp/sqlite-for-piwik",
				)
			),
			"covid19"=>array(
				"image"=>"img/portfolio_covid19.png",
				"title"=>"Covid 19",
				"description"=>"Graphs of deaths by year, origin of the data, daily accumulated, weekly, montly, yearly, by age, by autonomous community, by province, by country and more. All data have been obtained from official sources as MoMo, INE, CSIC, OECD, EuroMoMo, Eurostat, or the equivalents to the National Statistics Institute of Sweden, Norway, Portugal, France and Germany",
				"links"=>array(
					"josepsanzcamp.github.io"=>"https://josepsanzcamp.github.io/covid19",
					"github.com"=>"https://github.com/josepsanzcamp/covid19",
				)
			),
			"cdesktopenv"=>array(
				"image"=>"img/portfolio_cdesktopenv.png",
				"title"=>"Common Desktop Environment",
				"description"=>"This repository contains some useful scripts (developed by me, more or less) used by me to add features to my CDE that runs on my laptop with GNU/Linux!!!",
				"links"=>array(
					"github.com"=>"https://github.com/josepsanzcamp/cdesktopenv",
				)
			),
		)
	),
	"ca"=>array(
		"title"=>"Plana personal de Josep Sanz Campderrós",
		"description"=>"Plana personal de Josep Sanz Campderrós",
		"author"=>"Josep Sanz Campderrós",
		"toggle"=>"Menu de navegació",
		"navbar"=>"Josep Sanz Campderrós",
		"portfolio"=>"Projectes",
		"about"=>"CV",
		"contact"=>"Contactar",
		"catala"=>"Català",
		"castellano"=>"Castellano",
		"english"=>"English",
		"name"=>"Josep Sanz Campderrós",
		"skills"=>"Sóc desenvolupador de software i un apassionat de la tecnologia",
		"myportfolio"=>"Els meus projectes",
		"aboutme"=>"El meu currículum vitae",
		"downloadtext"=>"Descarregar currículum vitae",
		"downloadlink"=>"pdf/cv_josep_sanz_catalan.pdf",
		"contactme"=>"Contactar amb mi",
		"fieldname"=>"Nom",
		"fieldemail"=>"Adreça de correu",
		"fieldphone"=>"Número de telefon",
		"fieldmessage"=>"Missatge",
		"requiredname"=>"Ha d'entrar el seu nom.",
		"requiredmessage"=>"Ha d'entrar un missatge.",
		"sendok"=>"El teu missatge ha estat enviat.",
		"sendko"=>"Ho sento, sembla que el meu servidor de correu no està responent. Torneu-ho de nou més tard!",
		"buttonsend"=>"Enviar",
		"footer"=>"Xarxes socials",
		"copyright"=>"Copyright &copy; 2016-2020 Josep Sanz Campderrós",
		"template"=>"Plantilla original de <a href='https://startbootstrap.com/themes/freelancer/' target='_blank'>Start Bootstrap</a>",
		"moreinfo"=>"Més informació:",
		"close"=>"Tancar",
		"portfolios"=>array(
			"saltos"=>array(
				"image"=>"img/portfolio_saltos.png",
				"title"=>"SaltOS",
				"description"=>"SaltOS és la solució 100% Cloud Computing de Gestió Empresarial. Integra les funcionalitats de CRM i ERP. A més està llicenciat com a programari lliure sota la llicència GPL-3.0.",
				"links"=>array(
					"www.saltos.org"=>"http://www.saltos.org",
					"sourceforge.net"=>"https://sourceforge.net/projects/saltos/",
					"github.com"=>"https://github.com/josepsanzcamp/SaltOS",
				)
			),
			"rhinos"=>array(
				"image"=>"img/portfolio_rhinos.png",
				"title"=>"RhinOS",
				"description"=>"Rhinos és l'eina perfecta per construir un portal web professional, administrat de manera fàcil i àgil sense necessitat de tenir coneixements tècnics. A més està llicenciat com a programari lliure sota la llicència GPL-3.0.",
				"links"=>array(
					"sourceforge.net"=>"http://sourceforge.net/projects/rhinos",
					"github.com"=>"https://github.com/josepsanzcamp/RhinOS",
				)
			),
			"openrocs"=>array(
				"image"=>"img/portfolio_openrocs.png",
				"title"=>"OpenROCS v2.0",
				"description"=>"OpenROCS conforms an independent control layer for robotic observatories. It is a master scheduler of the processes that the system has to execute and a monitor of the overall state of the observatory. It controls the end-to-end data flow and the housekeeping processes by handling a set of predefined events. The former are responsible for ensuring that the system executes the routine operation by maximizing the scientific return of the facility. While the latter consider all those anomalous situations that could put the observatory at risk and activate corrective or mitigation actions. All the applications running at the observatory and the hardware components interact with it. It is released under GNU/GPL public license.",
				"links"=>array(
					"sourceforge.net"=>"http://sourceforge.net/projects/openrocs",
					"upcommons.upc.edu"=>"https://upcommons.upc.edu/handle/2099.1/26215",
				)
			),
			"gralla"=>array(
				"image"=>"img/portfolio_gralla.png",
				"title"=>"Partitures per a gralla",
				"description"=>"Aquest portal és un catàleg de partitures per a gralla. Les 250 partitures inicials les vaig aconseguir del web gralla.skamot.com en format encore i fent servir programari lliure, les vaig convertir a lilypond, pdf, midi i mp3. Actualment esta tot publicat a github i l'aplicació online és 100% javascript",
				"links"=>array(
					"gralla.josepsanz.net"=>"http://gralla.josepsanz.net",
					"github.com"=>"https://github.com/josepsanzcamp/gralla",
				)
			),
			"rpi"=>array(
				"image"=>"img/portfolio_rpi.png",
				"title"=>"Read-only Root-FS with overlayfs for Raspian",
				"description"=>"This repository contains some useful files that allow you to use a Raspberry PI using a readonly filesystem. This files contains some ideas and code of the following projects: https://gist.github.com/niun/34c945d70753fc9e2cc7 and https://github.com/chesty/overlayroot. Congratulate the original authors if these files works as expected. Too, you can congratulate to me to join all files in a one repository and do some changes allowing to use the root and boot filesytem in readonly mode.",
				"links"=>array(
					"github.com"=>"https://github.com/josepsanzcamp/root-ro",
				)
			),
			"piwik"=>array(
				"image"=>"img/portfolio_piwik.png",
				"title"=>"sqlite-for-piwik",
				"description"=>"This repository contains the files needed to use Piwik with SQLite instead of MySQL. How to use it: Put the following file into the correct location: libs/mysql2sqlite.php, core/Db/Adapter/Pdo/Sqlite.php, core/Tracker.php and core/Tracker/Db/Pdo/Sqlite.php. Edit the config/config.ini.php and add in the [database] section: adapter=Pdo_Sqlite and dbname=piwik.sqlite And then, execute piwik...",
				"links"=>array(
					"github.com"=>"https://github.com/josepsanzcamp/sqlite-for-piwik",
				)
			),
			"covid19"=>array(
				"image"=>"img/portfolio_covid19.png",
				"title"=>"Covid 19",
				"description"=>"Gràfics de defuncions per any, origen de les dades, acumulats diaris, setmanals, mensuals, anuals, per edat, per comunitat autònoma, per provincia, per pais i més. Totes les dades s'han obtingut de fonts oficials com MoMo, INE, CSIC, OECD, EuroMoMo, Eurostat, o els equivalents al institut nacional d'estadística de Suecia, Noruega, Portugal, França i Alemanya",
				"links"=>array(
					"josepsanzcamp.github.io"=>"https://josepsanzcamp.github.io/covid19",
					"github.com"=>"https://github.com/josepsanzcamp/covid19",
				)
			),
			"cdesktopenv"=>array(
				"image"=>"img/portfolio_cdesktopenv.png",
				"title"=>"Common Desktop Environment",
				"description"=>"This repository contains some useful scripts (developed by me, more or less) used by me to add features to my CDE that runs on my laptop with GNU/Linux!!!",
				"links"=>array(
					"github.com"=>"https://github.com/josepsanzcamp/cdesktopenv",
				)
			),
		)
	)
);

// DETECT LANGUAGE
if(!isset($argv[1])) die("ERROR 1");
if(!isset($labels[$argv[1]])) die("ERROR 2");
$lang=$argv[1];
