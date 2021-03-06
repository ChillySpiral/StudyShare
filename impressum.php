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
<div class="container" style="padding-bottom: 50px;">
<div class="row">
<div class="col">
<h1 class="adsimple-121765320">Impressum</h1>
<p class="adsimple-121765320">Informationspflicht laut ??5 E-Commerce Gesetz, ??14 Unternehmensgesetzbuch, ??63 Gewerbeordnung und Offenlegungspflicht laut ??25 Mediengesetz.</p>
<p class="adsimple-121765320">StudyShare GmbH<br />Bergheidengasse 16, <br />1130 Wien, <br />??sterreich</p>
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
<strong>Aufsichtsbeh??rde/Gewerbebeh??rde:</strong> Bezirkshauptmannschaft Wien<br />
<strong>Verleihungsstaat:</strong> ??sterreich</p>
<p class="adsimple-121765320">
<strong>Gesch??ftsf??hrer</strong>
<br />Laurell Denk, Ibrahim Adouni, Adrian Koch, Christian Gessner, Matilda Bilaver</p>
<p class="adsimple-121765320">
<strong>Beteiligungsverh??ltnisse</strong>
<br />Gesellschafter Laurell Denk, Ibrahim Adouni, Adrian Koch, Christian Gessner, Matilda Bilaver</p>
<h2 id="eu-streitschlichtung" class="adsimple-121765320">EU-Streitschlichtung</h2>
<p>Gem???? Verordnung ??ber Online-Streitbeilegung in Verbraucherangelegenheiten (ODR-Verordnung) m??chten wir Sie ??ber die Online-Streitbeilegungsplattform (OS-Plattform) informieren.<br />
Verbraucher haben die M??glichkeit, Beschwerden an die Online Streitbeilegungsplattform der Europ??ischen Kommission unter <a class="adsimple-121765320" href="https://ec.europa.eu/consumers/odr/main/index.cfm?event=main.home2.show&lng=DE" target="_blank" rel="noopener">http://ec.europa.eu/odr?tid=121765320</a> zu richten. Die daf??r notwendigen Kontaktdaten finden Sie oberhalb in unserem Impressum.</p>
<p>Wir m??chten Sie jedoch darauf hinweisen, dass wir nicht bereit oder verpflichtet sind, an Streitbeilegungsverfahren vor einer Verbraucherschlichtungsstelle teilzunehmen.</p>
<h2 id="haftung-fuer-inhalte-dieser-webseite" class="adsimple-121765320">Haftung f??r Inhalte dieser Website</h2>
<p>Wir entwickeln die Inhalte dieser Webseite st??ndig weiter und bem??hen uns korrekte und aktuelle Informationen bereitzustellen. ??Leider k??nnen wir keine Haftung f??r die Korrektheit aller Inhalte auf dieser Website ??bernehmen, speziell f??r jene, die seitens Dritter bereitgestellt wurden. Als Diensteanbieter sind wir nicht verpflichtet, die von ihnen ??bermittelten oder gespeicherten Informationen zu ??berwachen oder nach Umst??nden zu forschen, die auf eine rechtswidrige T??tigkeit hinweisen.</p>
<p>Unsere Verpflichtungen zur Entfernung von Informationen oder zur Sperrung der Nutzung von Informationen nach den allgemeinen Gesetzen aufgrund von gerichtlichen oder beh??rdlichen Anordnungen bleiben auch im Falle unserer Nichtverantwortlichkeit davon unber??hrt.</p>
<p>Sollten Ihnen problematische oder rechtswidrige Inhalte auffallen, bitte wir Sie uns umgehend zu kontaktieren, damit wir die rechtswidrigen Inhalte entfernen k??nnen. Sie finden die Kontaktdaten im Impressum.</p>
<h2 id="haftung-links-webseite" class="adsimple-121765320">Haftung f??r Links auf dieser Webseite</h2>
<p>Unsere Webseite enth??lt Links zu anderen Webseiten f??r deren Inhalt wir nicht verantwortlich sind. Haftung f??r verlinkte Websites besteht f??r uns nicht, da wir keine Kenntnis rechtswidriger T??tigkeiten hatten und haben, uns solche Rechtswidrigkeiten auch bisher nicht aufgefallen sind und wir Links sofort entfernen w??rden, wenn uns Rechtswidrigkeiten bekannt werden.</p>
<p>Wenn Ihnen rechtswidrige Links auf unserer Website auffallen, bitte wir Sie uns zu kontaktieren. Sie finden die Kontaktdaten im Impressum.</p>
<h2 id="urheberrechtshinweis" class="adsimple-121765320">Urheberrechtshinweis</h2>
<p>Alle Inhalte dieser Webseite (Bilder, Fotos, Texte, Videos) unterliegen dem Urheberrecht. Bitte fragen Sie uns bevor Sie die Inhalte dieser Website verbreiten, vervielf??ltigen oder verwerten wie zum Beispiel auf anderen Websites erneut ver??ffentlichen. Falls notwendig, werden wir die unerlaubte Nutzung von Teilen der Inhalte unserer Seite rechtlich verfolgen.</p>
<p>Sollten Sie auf dieser Webseite Inhalte finden, die das Urheberrecht verletzen, bitten wir Sie uns zu kontaktieren.</p>
<h2 id="bildernachweis" class="adsimple-121765320">Bildernachweis</h2>
<p>Die Bilder, Fotos und Grafiken auf dieser Webseite sind urheberrechtlich gesch??tzt.</p>
<p>Die Bilderrechte liegen bei den folgenden Fotografen und Unternehmen:</p>
<ul class="adsimple-121765320">
<li class="adsimple-121765320">Fotograf Mustermann</li>
</ul>
<h1 class="adsimple-121765320">Datenschutzerkl??rung</h1>
<h2 id="einleitung-ueberblick" class="adsimple-121765320">Einleitung und ??berblick</h2>
<p>Wir haben diese Datenschutzerkl??rung (Fassung 18.06.2021-121765320) verfasst, um Ihnen gem???? der Vorgaben der <a class="adsimple-121765320" href="https://eur-lex.europa.eu/legal-content/DE/ALL/?uri=celex%3A32016R0679&tid=121765320" target="_blank" rel="noopener">Datenschutz-Grundverordnung (EU) 2016/679</a> und anwendbaren nationalen Gesetzen zu erkl??ren, welche personenbezogenen Daten (kurz Daten) wir als Verantwortliche ??? und die von uns beauftragten Auftragsverarbeiter (z. B. Provider) ??? verarbeiten, zuk??nftig verarbeiten werden und welche rechtm????igen M??glichkeiten Sie haben. Die verwendeten Begriffe sind geschlechtsneutral zu verstehen.<br />
<strong class="adsimple-121765320">Kurz gesagt:</strong> Wir informieren Sie umfassend ??ber Daten, die wir ??ber Sie verarbeiten.</p>
<p>Datenschutzerkl??rungen klingen f??r gew??hnlich sehr technisch und verwenden juristische Fachbegriffe. Diese Datenschutzerkl??rung soll Ihnen hingegen die wichtigsten Dinge so einfach und transparent wie m??glich beschreiben. Soweit es der Transparenz f??rderlich ist, werden technische <strong class="adsimple-121765320">Begriffe leserfreundlich erkl??rt</strong>, <strong class="adsimple-121765320">Links</strong> zu weiterf??hrenden Informationen geboten und <strong class="adsimple-121765320">Grafiken</strong> zum Einsatz gebracht. Wir informieren damit in klarer und einfacher Sprache, dass wir im Rahmen unserer Gesch??ftst??tigkeiten nur dann personenbezogene Daten verarbeiten, wenn eine entsprechende gesetzliche Grundlage gegeben ist. Das ist sicher nicht m??glich, wenn man m??glichst knappe, unklare und juristisch-technische Erkl??rungen abgibt, so wie sie im Internet oft Standard sind, wenn es um Datenschutz geht. Ich hoffe, Sie finden die folgenden Erl??uterungen interessant und informativ und vielleicht ist die eine oder andere Information dabei, die Sie noch nicht kannten.<br />
Wenn trotzdem Fragen bleiben, m??chten wir Sie bitten, sich an die unten bzw. im Impressum genannte verantwortliche Stelle zu wenden, den vorhandenen Links zu folgen und sich weitere Informationen auf Drittseiten anzusehen. Unsere Kontaktdaten finden Sie selbstverst??ndlich auch im Impressum.</p>
<h2 id="anwendungsbereich" class="adsimple-121765320">Anwendungsbereich</h2>
<p>Diese Datenschutzerkl??rung gilt f??r alle von uns im Unternehmen verarbeiteten personenbezogenen Daten und f??r alle personenbezogenen Daten, die von uns beauftragte Firmen (Auftragsverarbeiter) verarbeiten. Mit personenbezogenen Daten meinen wir Informationen im Sinne des Art. 4 Nr. 1 DSGVO wie zum Beispiel Name, E-Mail-Adresse und postalische Anschrift einer Person. Die Verarbeitung personenbezogener Daten sorgt daf??r, dass wir unsere Dienstleistungen und Produkte anbieten und abrechnen k??nnen, sei es online oder offline. Der Anwendungsbereich dieser Datenschutzerkl??rung umfasst:</p>
<ul class="adsimple-121765320">
<li class="adsimple-121765320">alle Onlineauftritte (Websites, Onlineshops), die wir betreiben</li>
<li class="adsimple-121765320">Social Media Auftritte und E-Mail-Kommunikation</li>
<li class="adsimple-121765320">mobile Apps f??r Smartphones und andere Ger??te</li>
</ul>
<p>
<strong class="adsimple-121765320">Kurz gesagt:</strong> Die Datenschutzerkl??rung gilt f??r alle Bereiche, in denen personenbezogene Daten im Unternehmen ??ber die genannten Kan??le strukturiert verarbeitet werden. Sollten wir au??erhalb dieser Kan??le mit Ihnen in Rechtsbeziehungen eintreten, werden wir Sie gegebenenfalls gesondert informieren.</p>
<h2 id="rechtsgrundlagen" class="adsimple-121765320">Rechtsgrundlagen</h2>
<p>In der folgenden Datenschutzerkl??rung geben wir Ihnen transparente Informationen zu den rechtlichen Grunds??tzen und Vorschriften, also den Rechtsgrundlagen der Datenschutz-Grundverordnung, die uns erm??glichen, personenbezogene Daten zu verarbeiten.<br />
Was das EU-Recht betrifft, beziehen wir uns auf die VERORDNUNG (EU) 2016/679 DES EUROP??ISCHEN PARLAMENTS UND DES RATES vom 27. April 2016. Diese Datenschutz-Grundverordnung der EU k??nnen Sie selbstverst??ndlich online auf EUR-Lex, dem Zugang zum EU-Recht, unter <a class="adsimple-121765320" href="https://eur-lex.europa.eu/legal-content/DE/ALL/?uri=celex%3A32016R0679&tid=121765320" target="_blank" rel="noopener">https://eur-lex.europa.eu/legal-content/DE/TXT/?uri=celex%3A32016R0679</a> nachlesen.</p>
<p>Wir verarbeiten Ihre Daten nur, wenn mindestens eine der folgenden Bedingungen zutrifft:</p>
<ol>
<li class="adsimple-121765320">
<strong class="adsimple-121765320">Einwilligung</strong> (Artikel 6 Absatz 1 lit. a DSGVO): Sie haben uns Ihre Einwilligung gegeben, Daten zu einem bestimmten Zweck zu verarbeiten. Ein Beispiel w??re die Speicherung Ihrer eingegebenen Daten eines Kontaktformulars.</li>
<li class="adsimple-121765320">
<strong class="adsimple-121765320">Vertrag</strong> (Artikel 6 Absatz 1 lit. b DSGVO): Um einen Vertrag oder vorvertragliche Verpflichtungen mit Ihnen zu erf??llen, verarbeiten wir Ihre Daten. Wenn wir zum Beispiel einen Kaufvertrag mit Ihnen abschlie??en, ben??tigen wir vorab personenbezogene Informationen.</li>
<li class="adsimple-121765320">
<strong class="adsimple-121765320">Rechtliche Verpflichtung</strong> (Artikel 6 Absatz 1 lit. c DSGVO): Wenn wir einer rechtlichen Verpflichtung unterliegen, verarbeiten wir Ihre Daten. Zum Beispiel sind wir gesetzlich verpflichtet Rechnungen f??r die Buchhaltung aufzuheben. Diese enthalten in der Regel personenbezogene Daten.</li>
<li class="adsimple-121765320">
<strong class="adsimple-121765320">Berechtigte Interessen</strong> (Artikel 6 Absatz 1 lit. f DSGVO): Im Falle berechtigter Interessen, die Ihre Grundrechte nicht einschr??nken, behalten wir uns die Verarbeitung personenbezogener Daten vor. Wir m??ssen zum Beispiel gewisse Daten verarbeiten, um unsere Website sicher und wirtschaftlich effizient betreiben zu k??nnen. Diese Verarbeitung ist somit ein berechtigtes Interesse.</li>
</ol>
<p>Weitere Bedingungen wie die Wahrnehmung von Aufnahmen im ??ffentlichen Interesse und Aus??bung ??ffentlicher Gewalt sowie dem Schutz lebenswichtiger Interessen treten bei uns in der Regel nicht auf. Soweit eine solche Rechtsgrundlage doch einschl??gig sein sollte, wird diese an der entsprechenden Stelle ausgewiesen.</p>
<p>Zus??tzlich zu der EU-Verordnung gelten auch noch nationale Gesetze:</p>
<ul class="adsimple-121765320">
<li class="adsimple-121765320">In <strong class="adsimple-121765320">??sterreich</strong> ist dies das Bundesgesetz zum Schutz nat??rlicher Personen bei der Verarbeitung personenbezogener Daten (<strong class="adsimple-121765320">Datenschutzgesetz</strong>), kurz <strong class="adsimple-121765320">DSG</strong>.</li>
<li class="adsimple-121765320">In <strong class="adsimple-121765320">Deutschland</strong> gilt das <strong class="adsimple-121765320">Bundesdatenschutzgesetz</strong>, kurz<strong class="adsimple-121765320"> BDSG</strong>.</li>
</ul>
<p>Sofern weitere regionale oder nationale Gesetze zur Anwendung kommen, informieren wir Sie in den folgenden Abschnitten dar??ber.</p>
<h2 id="kontaktdaten-verantwortliche" class="adsimple-121765320">Kontaktdaten des Verantwortlichen</h2>
<p>Sollten Sie Fragen zum Datenschutz haben, finden Sie nachfolgend die Kontaktdaten der verantwortlichen Person bzw. Stelle:<br />
Musterfirma GmbH<br />
Musterstra??e 1, 4711 Musterort<br />
<span class="adsimple-121765320" style="font-weight: 400">Vertretungsberechtigt: Markus Mustermann</span>
<br />
E-Mail: <a class="adsimple-121765320" href="mailto:office@musterfirma.com">office@musterfirma.com</a>
<br />
Telefon: <span class="adsimple-121765320" style="font-weight: 400">+49 47114 654165</span>
<br />
Impressum:??<a class="adsimple-121765320" href="http://www.testfirma.de/impressum" target="_blank" rel="noopener">https://www.testfirma.de/impressum</a>
</p>
<h2 id="speicherdauer" class="adsimple-121765320">Speicherdauer</h2>
<p>Dass wir personenbezogene Daten nur so lange speichern, wie es f??r die Bereitstellung unserer Dienstleistungen und Produkte unbedingt notwendig ist, gilt als generelles Kriterium bei uns. Das bedeutet, dass wir personenbezogene Daten l??schen, sobald der Grund f??r die Datenverarbeitung nicht mehr vorhanden ist. In einigen F??llen sind wir gesetzlich dazu verpflichtet, bestimmte Daten auch nach Wegfall des urspr??ngliches Zwecks zu speichern, zum Beispiel zu Zwecken der Buchf??hrung.</p>
<p>Sollten Sie die L??schung Ihrer Daten w??nschen oder die Einwilligung zur Datenverarbeitung widerrufen, werden die Daten so rasch wie m??glich und soweit keine Pflicht zur Speicherung besteht, gel??scht.</p>
<p>??ber die konkrete Dauer der jeweiligen Datenverarbeitung informieren wir Sie weiter unten, sofern wir weitere Informationen dazu haben.</p>
<h2 id="rechte-dsgvo" class="adsimple-121765320">Rechte laut Datenschutzgrundverordnung</h2>
<p>Laut Artikel 13 DSGVO stehen Ihnen die folgenden Rechte zu, damit es zu einer fairen und transparenten Verarbeitung von Daten kommt:</p>
<ul class="adsimple-121765320">
<li class="adsimple-121765320">Sie haben laut Artikel 15 DSGVO ein Auskunftsrecht dar??ber, ob wir Daten von Ihnen verarbeiten. Sollte das zutreffen, haben Sie Recht darauf eine Kopie der Daten zu erhalten und die folgenden Informationen zu erfahren:
<ul class="adsimple-121765320">
<li class="adsimple-121765320">zu welchem Zweck wir die Verarbeitung durchf??hren;</li>
<li class="adsimple-121765320">die Kategorien, also die Arten von Daten, die verarbeitet werden;</li>
<li class="adsimple-121765320">wer diese Daten erh??lt und wenn die Daten an Drittl??nder ??bermittelt werden, wie die Sicherheit garantiert werden kann;</li>
<li class="adsimple-121765320">wie lange die Daten gespeichert werden;</li>
<li class="adsimple-121765320">das Bestehen des Rechts auf Berichtigung, L??schung oder Einschr??nkung der Verarbeitung und dem Widerspruchsrecht gegen die Verarbeitung;</li>
<li class="adsimple-121765320">dass Sie sich bei einer Aufsichtsbeh??rde beschweren k??nnen (Links zu diesen Beh??rden finden Sie weiter unten);</li>
<li class="adsimple-121765320">die Herkunft der Daten, wenn wir sie nicht bei Ihnen erhoben haben;</li>
<li class="adsimple-121765320">ob Profiling durchgef??hrt wird, ob also Daten automatisch ausgewertet werden, um zu einem pers??nlichen Profil von Ihnen zu gelangen.</li>
</ul>
</li>
<li class="adsimple-121765320">Sie haben laut Artikel 16 DSGVO ein Recht auf Berichtigung der Daten, was bedeutet, dass wir Daten richtig stellen m??ssen, falls Sie Fehler finden.</li>
<li class="adsimple-121765320">Sie haben laut Artikel 17 DSGVO das Recht auf L??schung (???Recht auf Vergessenwerden???), was konkret bedeutet, dass Sie die L??schung Ihrer Daten verlangen d??rfen.</li>
<li class="adsimple-121765320">Sie haben laut Artikel 18 DSGVO das Recht auf Einschr??nkung der Verarbeitung, was bedeutet, dass wir die Daten nur mehr speichern d??rfen aber nicht weiter verwenden.</li>
<li class="adsimple-121765320">Sie haben laut Artikel 19 DSGVO das Recht auf Daten??bertragbarkeit, was bedeutet, dass wir Ihnen auf Anfrage Ihre Daten in einem g??ngigen Format zur Verf??gung stellen.</li>
<li class="adsimple-121765320">Sie haben laut Artikel 21 DSGVO ein Widerspruchsrecht, welches nach Durchsetzung eine ??nderung der Verarbeitung mit sich bringt.
<ul class="adsimple-121765320">
<li class="adsimple-121765320">Wenn die Verarbeitung Ihrer Daten auf Artikel 6 Abs. 1 lit. e (??ffentliches Interesse, Aus??bung ??ffentlicher Gewalt) oder Artikel 6 Abs. 1 lit. f (berechtigtes Interesse) basiert, k??nnen Sie gegen die Verarbeitung Widerspruch einlegen. Wir pr??fen danach so rasch wie m??glich, ob wir diesem Widerspruch rechtlich nachkommen k??nnen.</li>
<li class="adsimple-121765320">Werden Daten verwendet, um Direktwerbung zu betreiben, k??nnen Sie jederzeit gegen diese Art der Datenverarbeitung widersprechen. Wir d??rfen Ihre Daten danach nicht mehr f??r Direktmarketing verwenden.</li>
<li class="adsimple-121765320">Werden Daten verwendet, um Profiling zu betreiben, k??nnen Sie jederzeit gegen diese Art der Datenverarbeitung widersprechen. Wir d??rfen Ihre Daten danach nicht mehr f??r Profiling verwenden.</li>
</ul>
</li>
<li class="adsimple-121765320">Sie haben laut Artikel 22 DSGVO unter Umst??nden das Recht, nicht einer ausschlie??lich auf einer automatisierten Verarbeitung (zum Beispiel Profiling) beruhenden Entscheidung unterworfen zu werden.</li>
</ul>
<p>Wenn Sie glauben, dass die Verarbeitung Ihrer Daten gegen das Datenschutzrecht verst????t oder Ihre datenschutzrechtlichen Anspr??che in sonst einer Weise verletzt worden sind, k??nnen Sie sich bei der Aufsichtsbeh??rde beschweren. Diese ist f??r ??sterreich die Datenschutzbeh??rde, deren Website Sie unter <a class="adsimple-121765320" href="https://www.dsb.gv.at/?tid=121765320" target="_blank" rel="noopener">https://www.dsb.gv.at/</a> finden und f??r Deutschland k??nnen Sie sich an die <a class="adsimple-121765320" href="https://www.bfdi.bund.de" target="_blank" rel="noopener">Bundesbeauftragte f??r den Datenschutz und die Informationsfreiheit (BfDI)</a> wenden.</p>
<p>
<strong class="adsimple-121765320">Kurz gesagt:</strong> Sie haben Rechte ??? z??gern Sie nicht, die oben gelistete verantwortliche Stelle bei uns zu kontaktieren!</p>
<h2 id="zahlungsanbieter" class="adsimple-121765320">Zahlungsanbieter</h2>
<table border="1" cellpadding="15">
<tbody>
<tr>
<td>
<strong class="adsimple-121765320">Zahlungsanbieter Datenschutzerkl??rung Zusammenfassung</strong>
<br />
???? Betroffene: Besucher der Website<br />
???? Zweck: Erm??glichung und Optimierung des Zahlungsvorgangs auf unserer Website<br />
???? Verarbeitete Daten: Daten wie etwa Name, Adresse, Bankdaten (Kontonummer, Kreditkartennummer, Passw??rter, TANs usw.), IP-Adresse und Vertragsdaten<br />
Mehr Details dazu finden Sie beim jeweils eingesetzten Zahlungsanbieter-Tool.<br />
???? Speicherdauer: abh??ngig vom verwendeten Zahlungsanbieter<br />
?????? Rechtsgrundlagen: Art. 6 Abs. 1 lit. b DSGVO (Erf??llung eines Vertrags)</td>
</tr>
</tbody>
</table>
<h3 class="adsimple-121765320">Was ist ein Zahlungsanbieter?</h3>
<p>Wir verwenden auf unserer Website Online-Zahlungssysteme, die uns und Ihnen ein sicheres und reibungsloses Bezahlverfahren erm??glichen. Dabei k??nnen unter anderem auch personenbezogene Daten an den jeweiligen Zahlungsanbieter gesendet, gespeichert und dort verarbeitet werden. Bei Zahlungsanbietern handelt es sich um Online-Zahlungssysteme, die es Ihnen erm??glichen eine Bestellung ??ber Online-Banking durchzuf??hren. Dabei wird die Zahlungsabwicklung durch den von Ihnen gew??hlten Zahlungsanbieter durchgef??hrt. Wir erhalten anschlie??end eine Information ??ber die get??tigte Zahlung. Diese Methode kann jeder User nutzen, der ein aktives Online-Banking-Konto mit PIN und TAN hat. Es gibt kaum noch Banken, die solche Zahlungsmethoden nicht anbieten bzw. akzeptieren.</p>
<h3 class="adsimple-121765320">Warum verwenden wir Zahlungsanbieter auf unserer Website?</h3>
<p>Wir wollen nat??rlich mit unserer Website und unserem eingebundenen Onlineshop das bestm??gliche Service bietet, damit Sie sich auf unserer Seite wohl f??hlen und unsere Angebote nutzen. Wir wissen, dass Ihre Zeit kostbar ist und speziell Zahlungsabwicklungen schnell und reibungslos funktionieren m??ssen. Aus diesen Gr??nden bieten wir Ihnen diverse Zahlungsanbieter an. Sie k??nnen Ihren bevorzugten Zahlungsanbieter w??hlen und so in gewohnter Manier bezahlen.</p>
<h3 class="adsimple-121765320">Welche Daten werden verarbeitet?</h3>
<p>Welche Daten genau verarbeitet werden, h??ngt nat??rlich von dem jeweiligen Zahlungsanbieter ab. Doch grunds??tzlich werden Daten wie Name, Adresse, Bankdaten (Kontonummer, Kreditkartennummer, Passw??rter, TANs usw.) gespeichert. Dabei handelt es sich um notwendige Daten, um ??berhaupt eine Transaktion durchf??hren zu k??nnen. Zudem k??nnen auch etwaige Vertragsdaten und Userdaten, wie zum Beispiel wann Sie unsere Website besuchen, f??r welche Inhalte Sie sich interessieren oder welche Unterseiten Sie anklicken, gespeichert werden. Auch Ihre IP-Adresse und Informationen zu Ihrem verwendeten Computer werden von den meisten Zahlungsanbietern gespeichert.</p>
<p>Die Daten werden in der Regel auf den Servern der Zahlungsanbietern gespeichert und verarbeitet. Wir als Websitebetreiber erhalten diese Daten nicht. Wir werden nur dar??ber informiert, ob die Zahlung funktioniert hat oder nicht. F??r Identit??ts- und Bonit??tspr??fungen kann es vorkommen, dass Zahlungsanbieter Daten an die entsprechende Stelle weiterleiten. F??r alle Zahlungsgesch??fte gelten immer die Gesch??fts- und Datenschutzgrundlagen des jeweiligen Anbieters. Schauen Sie sich daher bitte immer auch die Allgemeinen Gesch??ftsbedingen und die Datenschutzerkl??rung des Zahlungsanbieters an. Sie haben auch jederzeit das Recht beispielsweise Daten l??schen oder korrigieren zu lassen. Bitte setzen Sie sich bez??glich Ihrer Rechte (Widerrufsrecht, Auskunftsrecht und Betroffenheitsrecht) mit dem jeweiligen Dienstanbieter in Verbindung.</p>
<h3 class="adsimple-121765320">
<span class="adsimple-121765320" data-sheets-value="{"1":2,"2":"Wo und wie lange werden Daten gespeichert?"}" data-sheets-userformat="{"2":769,"3":{"1":0},"11":4,"12":0}">Dauer der Datenverarbeitung</span>
</h3>
<p>??ber die Dauer der Datenverarbeitung informieren wir Sie weiter unten sofern wir weitere Informationen dazu haben. Generell verarbeiten wir personenbezogene Daten nur so lange wie es f??r die Bereitstellung unserer Dienstleistungen und Produkte unbedingt notwendig ist. Wenn es wie zum Beispiel im Fall von Buchhaltung gesetzlich vorgeschrieben ist, kann diese Speicherdauer auch ??berschritten werden. So bewahren wir zu einem Vertrag geh??rige Buchungsbelege (Rechnungen, Vertragsurkunden, Kontoausz??ge u.a.) 10 Jahre (?? 147 AO) sowie sonstige relevante Gesch??ftsunterlagen 6 Jahre (?? 247 HGB) nach Anfallen auf.</p>
<h3 class="adsimple-121765320">Widerspruchsrecht</h3>
<p>Sie haben immer das Recht auf Auskunft, Berichtigung und L??schung Ihrer personenbezogenen Daten. Bei Fragen k??nnen Sie auch jederzeit Verantwortliche des verwendeten Zahlungsanbieter kontaktieren. Kontaktdaten finden Sie entweder in unserer spezifischen Datenschutzerkl??rung oder auf der Website des entsprechenden Zahlungsanbieters.</p>
<p>Cookies, die Zahlungsanbieter f??r ihre Funktionen verwenden, k??nnen Sie in Ihrem Browser l??schen, deaktivieren oder verwalten. Je nachdem welchen Browser Sie verwenden, funktioniert dies auf unterschiedliche Art und Weise. Bitte beachten Sie aber, dass dann eventuell der Zahlungsvorgang nicht mehr funktioniert.</p>
<h3 class="adsimple-121765320">Rechtsgrundlage</h3>
<p>Wir bieten also zur Abwicklung von vertraglichen bzw. rechtlichen Beziehungen <strong class="adsimple-121765320">(Art. 6 Abs. 1 lit. b DSGVO)</strong>
<strong class="adsimple-121765320">??</strong>neben den herk??mmlichen Bank-/Kreditinstitutionen auch andere Zahlungsdienstleister an. In den Datenschutzerkl??rungen der einzelnen Zahlungsanbietern (wie zum Beispiel <span class="adsimple-121765320" data-sheets-value="{"1":2,"2":"Amazon Payments"}" data-sheets-userformat="{"2":513,"3":{"1":0},"12":0}">Amazon Payments</span>, <span class="adsimple-121765320" data-sheets-value="{"1":2,"2":"Apple Pay"}" data-sheets-userformat="{"2":513,"3":{"1":0},"12":0}">Apple Pay</span> oder <span class="adsimple-121765320" data-sheets-value="{"1":2,"2":"Discover"}" data-sheets-userformat="{"2":513,"3":{"1":0},"12":0}">Discover</span>) wird Ihnen ein genauer ??berblick ??ber die Datenverarbeitung und Datenspeicherung geboten. Zudem k??nnen Sie sich bei Fragen zu datenschutzrelevanten Themen stets an die Verantwortlichen richten.</p>
<p>Informationen zu den speziellen Zahlungsanbietern erfahren Sie ??? sofern vorhanden ??? in den folgenden Abschnitten.</p>
<h2 id="paypal-datenschutzerklaerung" class="adsimple-121765320">PayPal Datenschutzerkl??rung</h2>
<p>Wir nutzen auf unserer Website den Online-Bezahldienst PayPal. Dienstanbieter ist das amerikanische Unternehmen PayPal Inc. F??r den europ??ischen Raum ist das Unternehmen PayPal Europe (S.?? r.l. et Cie, S.C.A., 22-24 Boulevard Royal, L-2449 Luxembourg) verantwortlich. Mehr ??ber die Daten, die durch die Verwendung von PayPal verarbeitet werden, erfahren Sie in der Privacy Policy auf <u>
<a class="adsimple-121765320" href="https://www.paypal.com/de/webapps/mpp/ua/privacy-full">https://www.paypal.com/de/webapps/mpp/ua/privacy-full</a>.</u>
</p>
</div>
</div>
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