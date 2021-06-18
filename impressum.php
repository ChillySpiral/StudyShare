<?php session_start();?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Studyshare</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <link rel="stylesheet" href="CSS/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="CSS/Footer-Basic.css">
    <link rel="stylesheet" href="CSS/Login-Form-Clean.css">
    <link rel="stylesheet" href="CSS/Registration-Form-with-Photo.css">
    <link rel="stylesheet" href="CSS/styles.css">
    <link rel="stylesheet" href="CSS/fonts/fontawesome-all.min.css">
    <link rel="stylesheet" href="CSS/fonts/font-awesome.min.css">
    <link rel="stylesheet" href="CSS/fonts/fontawesome5-overrides.min.css">
</head>

<body style="background: #f7f7ff;">
<div id="page-container">
    <nav class="navbar navbar-light navbar-expand-md sticky-top" id="my-navbar" style="background: #577399;border-radius: 0;border-bottom-right-radius: 7px;border-bottom-left-radius: 7px;">
        <div class="container-fluid"><a class="navbar-brand" id="header-links" href="index.php" style="font-size: 30px;">StudyShare</a><button data-toggle="collapse" class="navbar-toggler" data-target="#navcol-1"><span class="sr-only">Toggle navigation</span><span class="navbar-toggler-icon"></span></button>
            <div class="collapse navbar-collapse justify-content-end" id="navcol-1" style="color: rgb(255,255,255);">
            </form>
                <ul class="navbar-nav">
                <?php if(isset($_SESSION['user']))
                { echo '
                    <li class="nav-item" style="min-height: 40px;">
                    <form id="Search_Form" class="form-inline d-none d-sm-inline-block mr-auto ml-md-3 my-2 my-md-0 mw-100 navbar-search" style="display: inline-block !important;">
                        <div class="input-group">
                            <input name="Search_Text" type="text" class="bg-light form-control border-0 small" placeholder="Suche Notizen, Zusammenfassungen & Mitschriften" style="border-top-left-radius: 15px;border-bottom-left-radius: 15px;" />
                        <div class="input-group-append">
                            <button id="Search_Button" type="button" class="btn py-0" type="button" style="border-top-right-radius: 15px;border-bottom-right-radius: 15px;background: rgb(248,249,252);border-width: 1px;"><i class="fas fa-search" style="color: rgb(0,0,0);"></i></button></div>
                        </div>
                    </from>
                    </li>';}?>
                    <?php
                    if(isset($_SESSION['mod']))
                    {
                    echo '
                    <li class="nav-item">
                    <a class="nav-link active" id="header-links" href="./Components/mod.php">Review</a>
                    </li>';
                    }
                    ?>
                    <li class="nav-item">
                    <a class="nav-link active" id="header-links" href="<?php if(isset($_SESSION['user'])){echo "Components/logout.php";} else {echo "Components/login.php";}?>" style="padding: 8px;"><?php if(isset($_SESSION['user'])){echo "Logout";} else {echo "Anmelden";}?></a>
                    </li>
                    <li class="nav-item">
                    <a class="nav-link d-inline-flex" id="header-links" href="<?php if(isset($_SESSION['user'])){echo "Components/profilesettings.php";} else {echo "Components/signup.php";}?>" style="background: #fe5f55;border-radius: 16px;padding: 8px;"><?php if(isset($_SESSION['user'])){echo "Profil";} else {echo "Registrieren";}?></a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <div class="imprint">
<h1 class="adsimple-121765320">Impressum</h1>
<p class="adsimple-121765320">Informationspflicht laut §5 E-Commerce Gesetz, §14 Unternehmensgesetzbuch, §63 Gewerbeordnung und Offenlegungspflicht laut §25 Mediengesetz.</p>
<p class="adsimple-121765320">StudyShare GmbH<br />Bergheidengasse 16, <br />1130 Wien, <br />Österreich</p>
<p class="adsimple-121765320">
<strong>UID-Nummer:</strong> ATU12345678<br />
<strong>GLN:</strong> 1234567891234<br />
<strong>GISA:</strong> 12345678<br />
<strong>Firmenbuchnummer:</strong> ATU1234567<br />
<strong>Firmenbuchgericht:</strong> Wien<br />
<strong>Firmensitz:</strong> 1130 Wien</p>
<p class="adsimple-121765320">
<strong>Tel.:</strong> 01234/56789<br />
<strong>Fax:</strong> 01234/56789-0<br />
<strong>E-Mail:</strong> <a href="mailto:office@studyshare.com">office@studyshare.com</a>
</p>
<p class="adsimple-121765320">
<strong>Mitglied bei:</strong> WKO<br />
<strong>Berufsrecht:</strong> Gewerbeordnung: www.ris.bka.gv.at</p>
<p class="adsimple-121765320">
<strong>Aufsichtsbehörde/Gewerbebehörde:</strong> Bezirkshauptmannschaft Wien<br />
<strong>Verleihungsstaat:</strong> Österreich</p>
<p class="adsimple-121765320">
<strong>Geschäftsführer</strong>
<br />Laurell Denk, Ibrahim Adouni, Adrian Koch, Christian Gessner, Matilda Bilaver</p>
<p class="adsimple-121765320">
<strong>Beteiligungsverhältnisse</strong>
<br />Gesellschafter Laurell Denk, Ibrahim Adouni, Adrian Koch, Christian Gessner, Matilda Bilaver</p>
<h2 id="eu-streitschlichtung" class="adsimple-121765320">EU-Streitschlichtung</h2>
<p>Gemäß Verordnung über Online-Streitbeilegung in Verbraucherangelegenheiten (ODR-Verordnung) möchten wir Sie über die Online-Streitbeilegungsplattform (OS-Plattform) informieren.<br />
Verbraucher haben die Möglichkeit, Beschwerden an die Online Streitbeilegungsplattform der Europäischen Kommission unter <a class="adsimple-121765320" href="https://ec.europa.eu/consumers/odr/main/index.cfm?event=main.home2.show&lng=DE" target="_blank" rel="noopener">http://ec.europa.eu/odr?tid=121765320</a> zu richten. Die dafür notwendigen Kontaktdaten finden Sie oberhalb in unserem Impressum.</p>
<p>Wir möchten Sie jedoch darauf hinweisen, dass wir nicht bereit oder verpflichtet sind, an Streitbeilegungsverfahren vor einer Verbraucherschlichtungsstelle teilzunehmen.</p>
<h2 id="haftung-fuer-inhalte-dieser-webseite" class="adsimple-121765320">Haftung für Inhalte dieser Website</h2>
<p>Wir entwickeln die Inhalte dieser Webseite ständig weiter und bemühen uns korrekte und aktuelle Informationen bereitzustellen.  Leider können wir keine Haftung für die Korrektheit aller Inhalte auf dieser Website übernehmen, speziell für jene, die seitens Dritter bereitgestellt wurden. Als Diensteanbieter sind wir nicht verpflichtet, die von ihnen übermittelten oder gespeicherten Informationen zu überwachen oder nach Umständen zu forschen, die auf eine rechtswidrige Tätigkeit hinweisen.</p>
<p>Unsere Verpflichtungen zur Entfernung von Informationen oder zur Sperrung der Nutzung von Informationen nach den allgemeinen Gesetzen aufgrund von gerichtlichen oder behördlichen Anordnungen bleiben auch im Falle unserer Nichtverantwortlichkeit davon unberührt.</p>
<p>Sollten Ihnen problematische oder rechtswidrige Inhalte auffallen, bitte wir Sie uns umgehend zu kontaktieren, damit wir die rechtswidrigen Inhalte entfernen können. Sie finden die Kontaktdaten im Impressum.</p>
<h2 id="haftung-links-webseite" class="adsimple-121765320">Haftung für Links auf dieser Webseite</h2>
<p>Unsere Webseite enthält Links zu anderen Webseiten für deren Inhalt wir nicht verantwortlich sind. Haftung für verlinkte Websites besteht für uns nicht, da wir keine Kenntnis rechtswidriger Tätigkeiten hatten und haben, uns solche Rechtswidrigkeiten auch bisher nicht aufgefallen sind und wir Links sofort entfernen würden, wenn uns Rechtswidrigkeiten bekannt werden.</p>
<p>Wenn Ihnen rechtswidrige Links auf unserer Website auffallen, bitte wir Sie uns zu kontaktieren. Sie finden die Kontaktdaten im Impressum.</p>
<h2 id="urheberrechtshinweis" class="adsimple-121765320">Urheberrechtshinweis</h2>
<p>Alle Inhalte dieser Webseite (Bilder, Fotos, Texte, Videos) unterliegen dem Urheberrecht. Bitte fragen Sie uns bevor Sie die Inhalte dieser Website verbreiten, vervielfältigen oder verwerten wie zum Beispiel auf anderen Websites erneut veröffentlichen. Falls notwendig, werden wir die unerlaubte Nutzung von Teilen der Inhalte unserer Seite rechtlich verfolgen.</p>
<p>Sollten Sie auf dieser Webseite Inhalte finden, die das Urheberrecht verletzen, bitten wir Sie uns zu kontaktieren.</p>
<h2 id="bildernachweis" class="adsimple-121765320">Bildernachweis</h2>
<p>Die Bilder, Fotos und Grafiken auf dieser Webseite sind urheberrechtlich geschützt.</p>
<p>Die Bilderrechte liegen bei den folgenden Fotografen und Unternehmen:</p>
<ul class="adsimple-121765320">
<li class="adsimple-121765320">Fotograf Mustermann</li>
</ul>
<h1 class="adsimple-121765320">Datenschutzerklärung</h1>
<h2 id="einleitung-ueberblick" class="adsimple-121765320">Einleitung und Überblick</h2>
<p>Wir haben diese Datenschutzerklärung (Fassung 18.06.2021-121765320) verfasst, um Ihnen gemäß der Vorgaben der <a class="adsimple-121765320" href="https://eur-lex.europa.eu/legal-content/DE/ALL/?uri=celex%3A32016R0679&tid=121765320" target="_blank" rel="noopener">Datenschutz-Grundverordnung (EU) 2016/679</a> und anwendbaren nationalen Gesetzen zu erklären, welche personenbezogenen Daten (kurz Daten) wir als Verantwortliche – und die von uns beauftragten Auftragsverarbeiter (z. B. Provider) – verarbeiten, zukünftig verarbeiten werden und welche rechtmäßigen Möglichkeiten Sie haben. Die verwendeten Begriffe sind geschlechtsneutral zu verstehen.<br />
<strong class="adsimple-121765320">Kurz gesagt:</strong> Wir informieren Sie umfassend über Daten, die wir über Sie verarbeiten.</p>
<p>Datenschutzerklärungen klingen für gewöhnlich sehr technisch und verwenden juristische Fachbegriffe. Diese Datenschutzerklärung soll Ihnen hingegen die wichtigsten Dinge so einfach und transparent wie möglich beschreiben. Soweit es der Transparenz förderlich ist, werden technische <strong class="adsimple-121765320">Begriffe leserfreundlich erklärt</strong>, <strong class="adsimple-121765320">Links</strong> zu weiterführenden Informationen geboten und <strong class="adsimple-121765320">Grafiken</strong> zum Einsatz gebracht. Wir informieren damit in klarer und einfacher Sprache, dass wir im Rahmen unserer Geschäftstätigkeiten nur dann personenbezogene Daten verarbeiten, wenn eine entsprechende gesetzliche Grundlage gegeben ist. Das ist sicher nicht möglich, wenn man möglichst knappe, unklare und juristisch-technische Erklärungen abgibt, so wie sie im Internet oft Standard sind, wenn es um Datenschutz geht. Ich hoffe, Sie finden die folgenden Erläuterungen interessant und informativ und vielleicht ist die eine oder andere Information dabei, die Sie noch nicht kannten.<br />
Wenn trotzdem Fragen bleiben, möchten wir Sie bitten, sich an die unten bzw. im Impressum genannte verantwortliche Stelle zu wenden, den vorhandenen Links zu folgen und sich weitere Informationen auf Drittseiten anzusehen. Unsere Kontaktdaten finden Sie selbstverständlich auch im Impressum.</p>
<h2 id="anwendungsbereich" class="adsimple-121765320">Anwendungsbereich</h2>
<p>Diese Datenschutzerklärung gilt für alle von uns im Unternehmen verarbeiteten personenbezogenen Daten und für alle personenbezogenen Daten, die von uns beauftragte Firmen (Auftragsverarbeiter) verarbeiten. Mit personenbezogenen Daten meinen wir Informationen im Sinne des Art. 4 Nr. 1 DSGVO wie zum Beispiel Name, E-Mail-Adresse und postalische Anschrift einer Person. Die Verarbeitung personenbezogener Daten sorgt dafür, dass wir unsere Dienstleistungen und Produkte anbieten und abrechnen können, sei es online oder offline. Der Anwendungsbereich dieser Datenschutzerklärung umfasst:</p>
<ul class="adsimple-121765320">
<li class="adsimple-121765320">alle Onlineauftritte (Websites, Onlineshops), die wir betreiben</li>
<li class="adsimple-121765320">Social Media Auftritte und E-Mail-Kommunikation</li>
<li class="adsimple-121765320">mobile Apps für Smartphones und andere Geräte</li>
</ul>
<p>
<strong class="adsimple-121765320">Kurz gesagt:</strong> Die Datenschutzerklärung gilt für alle Bereiche, in denen personenbezogene Daten im Unternehmen über die genannten Kanäle strukturiert verarbeitet werden. Sollten wir außerhalb dieser Kanäle mit Ihnen in Rechtsbeziehungen eintreten, werden wir Sie gegebenenfalls gesondert informieren.</p>
<h2 id="rechtsgrundlagen" class="adsimple-121765320">Rechtsgrundlagen</h2>
<p>In der folgenden Datenschutzerklärung geben wir Ihnen transparente Informationen zu den rechtlichen Grundsätzen und Vorschriften, also den Rechtsgrundlagen der Datenschutz-Grundverordnung, die uns ermöglichen, personenbezogene Daten zu verarbeiten.<br />
Was das EU-Recht betrifft, beziehen wir uns auf die VERORDNUNG (EU) 2016/679 DES EUROPÄISCHEN PARLAMENTS UND DES RATES vom 27. April 2016. Diese Datenschutz-Grundverordnung der EU können Sie selbstverständlich online auf EUR-Lex, dem Zugang zum EU-Recht, unter <a class="adsimple-121765320" href="https://eur-lex.europa.eu/legal-content/DE/ALL/?uri=celex%3A32016R0679&tid=121765320" target="_blank" rel="noopener">https://eur-lex.europa.eu/legal-content/DE/TXT/?uri=celex%3A32016R0679</a> nachlesen.</p>
<p>Wir verarbeiten Ihre Daten nur, wenn mindestens eine der folgenden Bedingungen zutrifft:</p>
<ol>
<li class="adsimple-121765320">
<strong class="adsimple-121765320">Einwilligung</strong> (Artikel 6 Absatz 1 lit. a DSGVO): Sie haben uns Ihre Einwilligung gegeben, Daten zu einem bestimmten Zweck zu verarbeiten. Ein Beispiel wäre die Speicherung Ihrer eingegebenen Daten eines Kontaktformulars.</li>
<li class="adsimple-121765320">
<strong class="adsimple-121765320">Vertrag</strong> (Artikel 6 Absatz 1 lit. b DSGVO): Um einen Vertrag oder vorvertragliche Verpflichtungen mit Ihnen zu erfüllen, verarbeiten wir Ihre Daten. Wenn wir zum Beispiel einen Kaufvertrag mit Ihnen abschließen, benötigen wir vorab personenbezogene Informationen.</li>
<li class="adsimple-121765320">
<strong class="adsimple-121765320">Rechtliche Verpflichtung</strong> (Artikel 6 Absatz 1 lit. c DSGVO): Wenn wir einer rechtlichen Verpflichtung unterliegen, verarbeiten wir Ihre Daten. Zum Beispiel sind wir gesetzlich verpflichtet Rechnungen für die Buchhaltung aufzuheben. Diese enthalten in der Regel personenbezogene Daten.</li>
<li class="adsimple-121765320">
<strong class="adsimple-121765320">Berechtigte Interessen</strong> (Artikel 6 Absatz 1 lit. f DSGVO): Im Falle berechtigter Interessen, die Ihre Grundrechte nicht einschränken, behalten wir uns die Verarbeitung personenbezogener Daten vor. Wir müssen zum Beispiel gewisse Daten verarbeiten, um unsere Website sicher und wirtschaftlich effizient betreiben zu können. Diese Verarbeitung ist somit ein berechtigtes Interesse.</li>
</ol>
<p>Weitere Bedingungen wie die Wahrnehmung von Aufnahmen im öffentlichen Interesse und Ausübung öffentlicher Gewalt sowie dem Schutz lebenswichtiger Interessen treten bei uns in der Regel nicht auf. Soweit eine solche Rechtsgrundlage doch einschlägig sein sollte, wird diese an der entsprechenden Stelle ausgewiesen.</p>
<p>Zusätzlich zu der EU-Verordnung gelten auch noch nationale Gesetze:</p>
<ul class="adsimple-121765320">
<li class="adsimple-121765320">In <strong class="adsimple-121765320">Österreich</strong> ist dies das Bundesgesetz zum Schutz natürlicher Personen bei der Verarbeitung personenbezogener Daten (<strong class="adsimple-121765320">Datenschutzgesetz</strong>), kurz <strong class="adsimple-121765320">DSG</strong>.</li>
<li class="adsimple-121765320">In <strong class="adsimple-121765320">Deutschland</strong> gilt das <strong class="adsimple-121765320">Bundesdatenschutzgesetz</strong>, kurz<strong class="adsimple-121765320"> BDSG</strong>.</li>
</ul>
<p>Sofern weitere regionale oder nationale Gesetze zur Anwendung kommen, informieren wir Sie in den folgenden Abschnitten darüber.</p>
<h2 id="kontaktdaten-verantwortliche" class="adsimple-121765320">Kontaktdaten des Verantwortlichen</h2>
<p>Sollten Sie Fragen zum Datenschutz haben, finden Sie nachfolgend die Kontaktdaten der verantwortlichen Person bzw. Stelle:<br />
Musterfirma GmbH<br />
Musterstraße 1, 4711 Musterort<br />
<span class="adsimple-121765320" style="font-weight: 400">Vertretungsberechtigt: Markus Mustermann</span>
<br />
E-Mail: <a class="adsimple-121765320" href="mailto:office@musterfirma.com">office@musterfirma.com</a>
<br />
Telefon: <span class="adsimple-121765320" style="font-weight: 400">+49 47114 654165</span>
<br />
Impressum: <a class="adsimple-121765320" href="http://www.testfirma.de/impressum" target="_blank" rel="noopener">https://www.testfirma.de/impressum</a>
</p>
<h2 id="speicherdauer" class="adsimple-121765320">Speicherdauer</h2>
<p>Dass wir personenbezogene Daten nur so lange speichern, wie es für die Bereitstellung unserer Dienstleistungen und Produkte unbedingt notwendig ist, gilt als generelles Kriterium bei uns. Das bedeutet, dass wir personenbezogene Daten löschen, sobald der Grund für die Datenverarbeitung nicht mehr vorhanden ist. In einigen Fällen sind wir gesetzlich dazu verpflichtet, bestimmte Daten auch nach Wegfall des ursprüngliches Zwecks zu speichern, zum Beispiel zu Zwecken der Buchführung.</p>
<p>Sollten Sie die Löschung Ihrer Daten wünschen oder die Einwilligung zur Datenverarbeitung widerrufen, werden die Daten so rasch wie möglich und soweit keine Pflicht zur Speicherung besteht, gelöscht.</p>
<p>Über die konkrete Dauer der jeweiligen Datenverarbeitung informieren wir Sie weiter unten, sofern wir weitere Informationen dazu haben.</p>
<h2 id="rechte-dsgvo" class="adsimple-121765320">Rechte laut Datenschutzgrundverordnung</h2>
<p>Laut Artikel 13 DSGVO stehen Ihnen die folgenden Rechte zu, damit es zu einer fairen und transparenten Verarbeitung von Daten kommt:</p>
<ul class="adsimple-121765320">
<li class="adsimple-121765320">Sie haben laut Artikel 15 DSGVO ein Auskunftsrecht darüber, ob wir Daten von Ihnen verarbeiten. Sollte das zutreffen, haben Sie Recht darauf eine Kopie der Daten zu erhalten und die folgenden Informationen zu erfahren:
<ul class="adsimple-121765320">
<li class="adsimple-121765320">zu welchem Zweck wir die Verarbeitung durchführen;</li>
<li class="adsimple-121765320">die Kategorien, also die Arten von Daten, die verarbeitet werden;</li>
<li class="adsimple-121765320">wer diese Daten erhält und wenn die Daten an Drittländer übermittelt werden, wie die Sicherheit garantiert werden kann;</li>
<li class="adsimple-121765320">wie lange die Daten gespeichert werden;</li>
<li class="adsimple-121765320">das Bestehen des Rechts auf Berichtigung, Löschung oder Einschränkung der Verarbeitung und dem Widerspruchsrecht gegen die Verarbeitung;</li>
<li class="adsimple-121765320">dass Sie sich bei einer Aufsichtsbehörde beschweren können (Links zu diesen Behörden finden Sie weiter unten);</li>
<li class="adsimple-121765320">die Herkunft der Daten, wenn wir sie nicht bei Ihnen erhoben haben;</li>
<li class="adsimple-121765320">ob Profiling durchgeführt wird, ob also Daten automatisch ausgewertet werden, um zu einem persönlichen Profil von Ihnen zu gelangen.</li>
</ul>
</li>
<li class="adsimple-121765320">Sie haben laut Artikel 16 DSGVO ein Recht auf Berichtigung der Daten, was bedeutet, dass wir Daten richtig stellen müssen, falls Sie Fehler finden.</li>
<li class="adsimple-121765320">Sie haben laut Artikel 17 DSGVO das Recht auf Löschung („Recht auf Vergessenwerden“), was konkret bedeutet, dass Sie die Löschung Ihrer Daten verlangen dürfen.</li>
<li class="adsimple-121765320">Sie haben laut Artikel 18 DSGVO das Recht auf Einschränkung der Verarbeitung, was bedeutet, dass wir die Daten nur mehr speichern dürfen aber nicht weiter verwenden.</li>
<li class="adsimple-121765320">Sie haben laut Artikel 19 DSGVO das Recht auf Datenübertragbarkeit, was bedeutet, dass wir Ihnen auf Anfrage Ihre Daten in einem gängigen Format zur Verfügung stellen.</li>
<li class="adsimple-121765320">Sie haben laut Artikel 21 DSGVO ein Widerspruchsrecht, welches nach Durchsetzung eine Änderung der Verarbeitung mit sich bringt.
<ul class="adsimple-121765320">
<li class="adsimple-121765320">Wenn die Verarbeitung Ihrer Daten auf Artikel 6 Abs. 1 lit. e (öffentliches Interesse, Ausübung öffentlicher Gewalt) oder Artikel 6 Abs. 1 lit. f (berechtigtes Interesse) basiert, können Sie gegen die Verarbeitung Widerspruch einlegen. Wir prüfen danach so rasch wie möglich, ob wir diesem Widerspruch rechtlich nachkommen können.</li>
<li class="adsimple-121765320">Werden Daten verwendet, um Direktwerbung zu betreiben, können Sie jederzeit gegen diese Art der Datenverarbeitung widersprechen. Wir dürfen Ihre Daten danach nicht mehr für Direktmarketing verwenden.</li>
<li class="adsimple-121765320">Werden Daten verwendet, um Profiling zu betreiben, können Sie jederzeit gegen diese Art der Datenverarbeitung widersprechen. Wir dürfen Ihre Daten danach nicht mehr für Profiling verwenden.</li>
</ul>
</li>
<li class="adsimple-121765320">Sie haben laut Artikel 22 DSGVO unter Umständen das Recht, nicht einer ausschließlich auf einer automatisierten Verarbeitung (zum Beispiel Profiling) beruhenden Entscheidung unterworfen zu werden.</li>
</ul>
<p>Wenn Sie glauben, dass die Verarbeitung Ihrer Daten gegen das Datenschutzrecht verstößt oder Ihre datenschutzrechtlichen Ansprüche in sonst einer Weise verletzt worden sind, können Sie sich bei der Aufsichtsbehörde beschweren. Diese ist für Österreich die Datenschutzbehörde, deren Website Sie unter <a class="adsimple-121765320" href="https://www.dsb.gv.at/?tid=121765320" target="_blank" rel="noopener">https://www.dsb.gv.at/</a> finden und für Deutschland können Sie sich an die <a class="adsimple-121765320" href="https://www.bfdi.bund.de" target="_blank" rel="noopener">Bundesbeauftragte für den Datenschutz und die Informationsfreiheit (BfDI)</a> wenden.</p>
<p>
<strong class="adsimple-121765320">Kurz gesagt:</strong> Sie haben Rechte – zögern Sie nicht, die oben gelistete verantwortliche Stelle bei uns zu kontaktieren!</p>
<h2 id="zahlungsanbieter" class="adsimple-121765320">Zahlungsanbieter</h2>
<table border="1" cellpadding="15">
<tbody>
<tr>
<td>
<strong class="adsimple-121765320">Zahlungsanbieter Datenschutzerklärung Zusammenfassung</strong>
<br />
👥 Betroffene: Besucher der Website<br />
🤝 Zweck: Ermöglichung und Optimierung des Zahlungsvorgangs auf unserer Website<br />
📓 Verarbeitete Daten: Daten wie etwa Name, Adresse, Bankdaten (Kontonummer, Kreditkartennummer, Passwörter, TANs usw.), IP-Adresse und Vertragsdaten<br />
Mehr Details dazu finden Sie beim jeweils eingesetzten Zahlungsanbieter-Tool.<br />
📅 Speicherdauer: abhängig vom verwendeten Zahlungsanbieter<br />
⚖️ Rechtsgrundlagen: Art. 6 Abs. 1 lit. b DSGVO (Erfüllung eines Vertrags)</td>
</tr>
</tbody>
</table>
<h3 class="adsimple-121765320">Was ist ein Zahlungsanbieter?</h3>
<p>Wir verwenden auf unserer Website Online-Zahlungssysteme, die uns und Ihnen ein sicheres und reibungsloses Bezahlverfahren ermöglichen. Dabei können unter anderem auch personenbezogene Daten an den jeweiligen Zahlungsanbieter gesendet, gespeichert und dort verarbeitet werden. Bei Zahlungsanbietern handelt es sich um Online-Zahlungssysteme, die es Ihnen ermöglichen eine Bestellung über Online-Banking durchzuführen. Dabei wird die Zahlungsabwicklung durch den von Ihnen gewählten Zahlungsanbieter durchgeführt. Wir erhalten anschließend eine Information über die getätigte Zahlung. Diese Methode kann jeder User nutzen, der ein aktives Online-Banking-Konto mit PIN und TAN hat. Es gibt kaum noch Banken, die solche Zahlungsmethoden nicht anbieten bzw. akzeptieren.</p>
<h3 class="adsimple-121765320">Warum verwenden wir Zahlungsanbieter auf unserer Website?</h3>
<p>Wir wollen natürlich mit unserer Website und unserem eingebundenen Onlineshop das bestmögliche Service bietet, damit Sie sich auf unserer Seite wohl fühlen und unsere Angebote nutzen. Wir wissen, dass Ihre Zeit kostbar ist und speziell Zahlungsabwicklungen schnell und reibungslos funktionieren müssen. Aus diesen Gründen bieten wir Ihnen diverse Zahlungsanbieter an. Sie können Ihren bevorzugten Zahlungsanbieter wählen und so in gewohnter Manier bezahlen.</p>
<h3 class="adsimple-121765320">Welche Daten werden verarbeitet?</h3>
<p>Welche Daten genau verarbeitet werden, hängt natürlich von dem jeweiligen Zahlungsanbieter ab. Doch grundsätzlich werden Daten wie Name, Adresse, Bankdaten (Kontonummer, Kreditkartennummer, Passwörter, TANs usw.) gespeichert. Dabei handelt es sich um notwendige Daten, um überhaupt eine Transaktion durchführen zu können. Zudem können auch etwaige Vertragsdaten und Userdaten, wie zum Beispiel wann Sie unsere Website besuchen, für welche Inhalte Sie sich interessieren oder welche Unterseiten Sie anklicken, gespeichert werden. Auch Ihre IP-Adresse und Informationen zu Ihrem verwendeten Computer werden von den meisten Zahlungsanbietern gespeichert.</p>
<p>Die Daten werden in der Regel auf den Servern der Zahlungsanbietern gespeichert und verarbeitet. Wir als Websitebetreiber erhalten diese Daten nicht. Wir werden nur darüber informiert, ob die Zahlung funktioniert hat oder nicht. Für Identitäts- und Bonitätsprüfungen kann es vorkommen, dass Zahlungsanbieter Daten an die entsprechende Stelle weiterleiten. Für alle Zahlungsgeschäfte gelten immer die Geschäfts- und Datenschutzgrundlagen des jeweiligen Anbieters. Schauen Sie sich daher bitte immer auch die Allgemeinen Geschäftsbedingen und die Datenschutzerklärung des Zahlungsanbieters an. Sie haben auch jederzeit das Recht beispielsweise Daten löschen oder korrigieren zu lassen. Bitte setzen Sie sich bezüglich Ihrer Rechte (Widerrufsrecht, Auskunftsrecht und Betroffenheitsrecht) mit dem jeweiligen Dienstanbieter in Verbindung.</p>
<h3 class="adsimple-121765320">
<span class="adsimple-121765320" data-sheets-value="{"1":2,"2":"Wo und wie lange werden Daten gespeichert?"}" data-sheets-userformat="{"2":769,"3":{"1":0},"11":4,"12":0}">Dauer der Datenverarbeitung</span>
</h3>
<p>Über die Dauer der Datenverarbeitung informieren wir Sie weiter unten sofern wir weitere Informationen dazu haben. Generell verarbeiten wir personenbezogene Daten nur so lange wie es für die Bereitstellung unserer Dienstleistungen und Produkte unbedingt notwendig ist. Wenn es wie zum Beispiel im Fall von Buchhaltung gesetzlich vorgeschrieben ist, kann diese Speicherdauer auch überschritten werden. So bewahren wir zu einem Vertrag gehörige Buchungsbelege (Rechnungen, Vertragsurkunden, Kontoauszüge u.a.) 10 Jahre (§ 147 AO) sowie sonstige relevante Geschäftsunterlagen 6 Jahre (§ 247 HGB) nach Anfallen auf.</p>
<h3 class="adsimple-121765320">Widerspruchsrecht</h3>
<p>Sie haben immer das Recht auf Auskunft, Berichtigung und Löschung Ihrer personenbezogenen Daten. Bei Fragen können Sie auch jederzeit Verantwortliche des verwendeten Zahlungsanbieter kontaktieren. Kontaktdaten finden Sie entweder in unserer spezifischen Datenschutzerklärung oder auf der Website des entsprechenden Zahlungsanbieters.</p>
<p>Cookies, die Zahlungsanbieter für ihre Funktionen verwenden, können Sie in Ihrem Browser löschen, deaktivieren oder verwalten. Je nachdem welchen Browser Sie verwenden, funktioniert dies auf unterschiedliche Art und Weise. Bitte beachten Sie aber, dass dann eventuell der Zahlungsvorgang nicht mehr funktioniert.</p>
<h3 class="adsimple-121765320">Rechtsgrundlage</h3>
<p>Wir bieten also zur Abwicklung von vertraglichen bzw. rechtlichen Beziehungen <strong class="adsimple-121765320">(Art. 6 Abs. 1 lit. b DSGVO)</strong>
<strong class="adsimple-121765320"> </strong>neben den herkömmlichen Bank-/Kreditinstitutionen auch andere Zahlungsdienstleister an. In den Datenschutzerklärungen der einzelnen Zahlungsanbietern (wie zum Beispiel <span class="adsimple-121765320" data-sheets-value="{"1":2,"2":"Amazon Payments"}" data-sheets-userformat="{"2":513,"3":{"1":0},"12":0}">Amazon Payments</span>, <span class="adsimple-121765320" data-sheets-value="{"1":2,"2":"Apple Pay"}" data-sheets-userformat="{"2":513,"3":{"1":0},"12":0}">Apple Pay</span> oder <span class="adsimple-121765320" data-sheets-value="{"1":2,"2":"Discover"}" data-sheets-userformat="{"2":513,"3":{"1":0},"12":0}">Discover</span>) wird Ihnen ein genauer Überblick über die Datenverarbeitung und Datenspeicherung geboten. Zudem können Sie sich bei Fragen zu datenschutzrelevanten Themen stets an die Verantwortlichen richten.</p>
<p>Informationen zu den speziellen Zahlungsanbietern erfahren Sie – sofern vorhanden – in den folgenden Abschnitten.</p>
<h2 id="paypal-datenschutzerklaerung" class="adsimple-121765320">PayPal Datenschutzerklärung</h2>
<p>Wir nutzen auf unserer Website den Online-Bezahldienst PayPal. Dienstanbieter ist das amerikanische Unternehmen PayPal Inc. Für den europäischen Raum ist das Unternehmen PayPal Europe (S.à r.l. et Cie, S.C.A., 22-24 Boulevard Royal, L-2449 Luxembourg) verantwortlich. Mehr über die Daten, die durch die Verwendung von PayPal verarbeitet werden, erfahren Sie in der Privacy Policy auf <u>
<a class="adsimple-121765320" href="https://www.paypal.com/de/webapps/mpp/ua/privacy-full">https://www.paypal.com/de/webapps/mpp/ua/privacy-full</a>.</u>
</p>
</div>
    <footer class="d-flex justify-content-end footer-basic" id="my-footer">
        <ul class="list-inline" style="background: #fe5f55;margin-top: 22px;margin-right: 30px;padding-right: 10px;padding-left: 10px;border-top-left-radius: 35px;border-top-right-radius: 35px;font-size: 24px;color: rgb(255,255,255);">
            <li class="list-inline-item"><a href="impressum.php">Impressum</a></li>
            <li class="list-inline-item"><a href="faq.php">FAQ</a></li>
        </ul>
    </footer>

    <script src="Javascript/jquery.min.js"></script>
    <script src="CSS/bootstrap/js/bootstrap.min.js"></script>
    <script src="Javascript/search.js"></script>

</body>

</html>