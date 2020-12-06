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
		"skills"=>"Haciendo software libre para un mundo libre",
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
				)
			),
			"gralla"=>array(
				"image"=>"img/portfolio_gralla.png",
				"title"=>"Partituras para gralla",
				"description"=>"Este portal es un catálogo de partituras para gralla. Las consegui de la web gralla.skamot.com en formato encore y usando software libre, consegui convertirlas a lilypond, pdf, midi y mp3. Inicialmente lo tenia publicado en un hosting propio usando php, actualmente esta publicado en github usando javascript",
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
			"oadm"=>array(
				"image"=>"img/portfolio_oadm.png",
				"title"=>"Observatorio Astronómico del Montsec",
				"description"=>"El Telescopi Joan Oró (TJO) és un telescopio de la clase de un metro trabajando de forma completamente desatendida. La construcción de este telescopio robótico motivó el desarrollo del Observatori Astronòmic del Montsec (OAdM), un sitio dedicado a albergar instalaciones astronómicas de investigación. Este es el telescopio más grande de Cataluña (0.8 m) llamado Joan Oró en honor al famoso bioquímico catalán, pionero de la astrobiología.",
				"links"=>array(
					"www.oadm.cat"=>"http://www.oadm.cat",
				)
			),
			"ieec"=>array(
				"image"=>"img/portfolio_ieec.png",
				"title"=>"Instituto de Estudios Espaciales de Cataluña",
				"description"=>"El Institut d’Estudis Espacials de Catalunya (IEEC) fue fundado en febrero de 1996 como iniciativa de la Fundació Catalana per la Recerca (FCR) en colaboración con la Universitat de Barcelona (UB), la Universitat Autònoma de Barcelona (UAB), la Universitat Politècnica de Catalunya (UPC) y el Consejo Superior de Investigaciones Científicas (CSIC) con el objetivo de crear un instituto miltidisciplinar y multiinstitucional dedicado a la investigación espacial y sus aplicaciones. En 2006 la FCR fue reconstituida (su nombre actual es Fundació Catalana per a la Recerca i la Innovació FCRi) y su rol fue asumido por la Generalitat de Catalunya.",
				"links"=>array(
					"www.ieec.cat"=>"http://www.ieec.cat",
				)
			),
			"ice"=>array(
				"image"=>"img/portfolio_ice.png",
				"title"=>"Institute of Space Sciences",
				"description"=>"The mission of the Institute of Space Sciences (ICE) is to contribute to the general advance of the Cosmos studies, helping to improve CSIC's scientific and technological capacity, as well as to reinforce the presence of CSIC in the space initiatives, to promote excellence in all the activities related to scientific research and outreach and to articulate the contribution of the CSIC to the \"Institut d'Estudis Espacials de Catalunya (IEEC)\".",
				"links"=>array(
					"www.ice.csic.es"=>"http://www.ice.csic.es",
				)
			),
			"josepsanz"=>array(
				"image"=>"img/portfolio_josepsanz.png",
				"title"=>"Josep Sanz Campderrós",
				"description"=>"Mi página personal contiene la información de mis proyectos y mi currículum vitae, anteriormente lo tenia publicado en un hosting propio y requeria php para generar el contenido en tiempo real, actualmente el código php genera las 3 versiones estaticas que permite que se publique en un hosting estatico como el que ofrece github",
				"links"=>array(
					"www.josepsanz.net"=>"http://www.josepsanz.net",
					"github.com"=>"https://github.com/josepsanzcamp/josepsanz",
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
		"skills"=>"Doing free software for a free world",
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
				"description"=>"This site is a catalog of sheets music for gralla. I downloaded all sheets music from the site gralla.skamot.com in encore format and using free software, I convert them to lilypond, pdf, midi and mp3. Initially I had it published on my own hosting using php, currently it is published on github using javascript",
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
			"oadm"=>array(
				"image"=>"img/portfolio_oadm.png",
				"title"=>"Montsec Astronomical Observatory",
				"description"=>"The Telescopi Joan Oró (TJO) is a 1m-class telescope working in a completely unattended manner. The construction of this robotic telescope motivated the development of the Observatori Astronòmic del Montsec (OAdM), a site devoted to host astronomical research facilities. This is the largest telescope in Catalonia (0.8-m), named Joan Oró after the famous Catalan biochemist and pioneer of astrobiology.",
				"links"=>array(
					"www.oadm.cat"=>"http://www.oadm.cat",
				)
			),
			"ieec"=>array(
				"image"=>"img/portfolio_ieec.png",
				"title"=>"Institute of Space Studies of Catalonia",
				"description"=>"The Institute of Space Studies of Catalonia (IEEC) was founded in February of 1996 as an initiative of the Fundació Catalana per a la Recerca (FCR), in collaboration with the University of Barcelona (UB), the Autonomous University of Barcelona (UAB), the Polytechnic University of Catalonia (UPC) and the Spanish Research Council (CSIC) with the objective of creating a multi-disciplinary and multi-institutional institute devoted to space research and their applications. In 2006 the FCR was reformed (currently its name is Fundació Catalana per a la Recerca i la innovació -FCRi) and its role was assumed by the Department of the Catalan Government responsible of scientific affairs.",
				"links"=>array(
					"www.ieec.cat"=>"http://www.ieec.cat",
				)
			),
			"ice"=>array(
				"image"=>"img/portfolio_ice.png",
				"title"=>"Institute of Space Sciences",
				"description"=>"The mission of the Institute of Space Sciences (ICE) is to contribute to the general advance of the Cosmos studies, helping to improve CSIC's scientific and technological capacity, as well as to reinforce the presence of CSIC in the space initiatives, to promote excellence in all the activities related to scientific research and outreach and to articulate the contribution of the CSIC to the \"Institut d'Estudis Espacials de Catalunya (IEEC)\".",
				"links"=>array(
					"www.ice.csic.es"=>"http://www.ice.csic.es",
				)
			),
			"josepsanz"=>array(
				"image"=>"img/portfolio_josepsanz.png",
				"title"=>"Josep Sanz Campderrós",
				"description"=>"My personal page contains the information of my projects and my professional profile, previously a php server was required to create the contents, currently the php code generates the three static versions that allow me to publish it using a static hosting like the offered by github",
				"links"=>array(
					"www.josepsanz.net"=>"http://www.josepsanz.net",
					"github.com"=>"https://github.com/josepsanzcamp/josepsanz",
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
		"skills"=>"Fent programari lliure per a un món lliure",
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
				"description"=>"Aquest portal és un catàleg de partitures per a gralla. Les vaig aconseguir del web gralla.skamot.com en format encore i utilitzant programari lliure, vaig aconseguir convertir-les a lilypond, pdf, midi i mp3. Inicialment ho tenia publicat en un hosting propi amb php, actualment està publicat a github fent servir javascript",
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
			"oadm"=>array(
				"image"=>"img/portfolio_oadm.png",
				"title"=>"Observatori Astronòmic del Montsec",
				"description"=>"El Telescopi Joan Oró (TJO) és un telescopi de la classe d'un metre treballant de forma completament desatesa. La construcció d'aquest telescopi robòtic va motivar el desenvolupament de l'Observatori Astronòmic del Montsec (OAdM), un lloc dedicat a albergar instal · lacions astronòmiques de recerca. Aquest és el telescopi més gran de Catalunya (0.8 m) anomenat Joan Oró en honor al famós bioquímic català, pioner de l'astrobiologia.",
				"links"=>array(
					"www.oadm.cat"=>"http://www.oadm.cat",
				)
			),
			"ieec"=>array(
				"image"=>"img/portfolio_ieec.png",
				"title"=>"Institut d’Estudis Espacials de Catalunya",
				"description"=>"L’Institut d’Estudis Espacials de Catalunya (IEEC) va ser fundat el febrer de 1996 com a iniciativa de la Fundació Catalana per la Recerca (FCR) en col·laboració amb la Universitat de Barcelona (UB), la Universitat Autònoma de Barcelona (UAB), la Universitat Politècnica de Catalunya (UPC) i el Consell Superior d’Investigacions Científiques (CSIC) amb l’objectiu de crear un institut miltidisciplinar i multiinstitucional dedicat a la recerca espacial i les seves aplicacions. El 2006, la FCR va ser reconstituïda (el seu nom actual és Fundació Catalana per a la Recerca i la Innovació FCRi) i el seu rol va ser assumit per la Generalitat de Catalunya.",
				"links"=>array(
					"www.ieec.cat"=>"http://www.ieec.cat",
				)
			),
			"ice"=>array(
				"image"=>"img/portfolio_ice.png",
				"title"=>"Institute of Space Sciences",
				"description"=>"The mission of the Institute of Space Sciences (ICE) is to contribute to the general advance of the Cosmos studies, helping to improve CSIC's scientific and technological capacity, as well as to reinforce the presence of CSIC in the space initiatives, to promote excellence in all the activities related to scientific research and outreach and to articulate the contribution of the CSIC to the \"Institut d'Estudis Espacials de Catalunya (IEEC)\".",
				"links"=>array(
					"www.ice.csic.es"=>"http://www.ice.csic.es",
				)
			),
			"josepsanz"=>array(
				"image"=>"img/portfolio_josepsanz.png",
				"title"=>"Josep Sanz Campderrós",
				"description"=>"La meva plana personal conté la informació dels meus projectes i el meu currículum vitae, anteriorment ho tenia publicat en un hosting propi i requeria php per generar el contingut en temps real, actualment el codi php genera les 3 versions estàtiques que permet que es publiqui en un hosting estàtic com el que ofereix github",
				"links"=>array(
					"www.josepsanz.net"=>"http://www.josepsanz.net",
					"github.com"=>"https://github.com/josepsanzcamp/josepsanz",
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
?>