<!doctype html>
<html lang="de">

<head>
	<?php include "../inc/meta.inc"; ?>

	<base href="<?php echo dirname($_SERVER['SCRIPT_NAME']); ?>">
	<title>OBM completeness - Ein OpenStreetMap Tool zur Bewertung der Vollständigkeit des OSM Gebäudebestandes – FOSSGIS 2020</title>

	<link rel="stylesheet" href="./css/normalize.css">
	<link rel="stylesheet" href="./css/base.css">
	<link rel="stylesheet" href="./css/print.css" media="print">
</head>

<body id="programm">
	<?php include "../inc/header.inc"; ?>

        <!-- This file was generated by a script. Do not edit this file in Git,
             edit contents in Pretalx, regenerate the PHP files and commit them
             in the Git repository of the website. -->
        <p><a href="programm/freitag.php#session_AP9CC8">&#9668;&#9668; zurück zum Programm</a> </p>
        <h2 class='abstract-title'>OBM completeness - Ein OpenStreetMap Tool zur Bewertung der Vollständigkeit des OSM Gebäudebestandes</h2>
        <section>
            <p>
                                <span class='abstract-speakers'>Karsten Prehn</span></p>
                            <p><span class='abstract-time-heading'>Zeit: </span>Freitag 13. März 09:00 Uhr<br><span class='abstract-room-heading'>Ort: </span>HS Weismannhaus</p>

            
            <p>Mit seiner stetig wachsenden Community, hat sich OpenStreetMap (OSM) zu einem nützlichen Werkzeug für eine große Bandbreite an Verwendungszwecken entwickelt; darunter humanitäre Einsätze oder wissenschaftliche Anwendungen. Die stetig wachsende von Menschen gebaute Außenwelt lässt es unmöglich erscheinen, jemals einen Zeitpunkt festzumachen, an dem man sagen könnte, daß OSM fertig gestellt sein wird. Aber wir können uns einen undefinierten Punkt in der Zukunft vorstellen, an dem alle von Menschen auf der Erde erbauten Strukturen (features) kartographisch erfasst sind (Mapping); selbst, wenn ein Update des Vorhandenen an einem Folgemoment benötigt wird. Das Verständnis, wie nah OSM dieser Zukunft momentan ist, d.h. wie nah wir einer möglichen Komplettierung (completeness) sind, sowie das Verständnis, inwieweit die reale Welt durch die Karte repräsentiert wird, sind für diejenigen, die mit den jeweiligen Daten arbeiten, entscheidend zur Einschätzung, wie verwertbar diese Daten in der Gegenwart  für ihre Arbeit sind.</p>
<p>Das completeness-Konzept lässt sich auf zwei verschiedenen Ebenen anwenden. Zum einen kann es helfen, die Frage zu beantworten, ob jedes physisch vorhandene feature gemappt ist, oder nicht. Sind, beipielsweise, alle Gebäude innerhalb eines bestimmten Blocks in OSM vorhanden? Zum anderen lässt sich die completeness auf das Vorhandensein bestimmter Merkmale (tags) bezüglich eines Objekts anwenden. Im vorherigen Beispiel wäre die Frage: haben alle Gebäude diejenigen tags, die die Anzahl der Stockwerke, die Gebäudenutzung oder die Dachform beschreiben? Es ist leicht ersichtlich, daß die zweite Ebene nicht ohne die erste existieren kann. Um von einer completeness of tags sprechen zu können, muss zuerst untersucht werden, inwieweit von einer completeness of features gesprochen werden kann. Es ist ebenfalls zu berücksichtigen, daß die erste Ebene all jene Anwendungen, die ein bestimmtes feature in den Mittelpunkt stellen (z.B. Gebäude) in jeweils gleicher Weise betrifft, während die zweite stark von der Art der Anwendung und damit auch der Art der Information, die sie von den features benötigt (z.B. Anzahl der Stockwerke), abhängt. Diese Anwendung konzentriert sich auf die Erfassung von Informationen zur Darstellung der completeness der Gebäudegrundflächen.</p>
<p>Angespornt vom Bedarf, die completeness eines bestimmten geographischen Gebietes bestimmen zu können, entwickeln wir derzeit eine Smartphone-Anwendung, die es ermöglicht,  den Grad der completeness durch die Nutzer einschätzen zu lassen. Unsere Anwendung stellt 10 mal 10 Bogensekunden große Kacheln mit OSM-Daten über Satellitendaten dar. Im folgenden muß der Nutzer entscheiden, ob alle features eines bestimmten Typs, die auf dem Satellitenbild vorhanden sind, ebenfalls in OSM gemappt worden sind. Nur eine feature-Art kann zur selben Zeit bearbeitet werden, so daß die completeness von Gebäuden, Straßen, etc. unabhängig voneinander bestimmt werden kann. Die Bestimmung erfolgt entsprechend verschiedener Abstufungen. Je nach Grad der completeness sind dies komplett, fast komplett, inkomplett und nicht zu bestimmen (complete, almost complete, incomplete, unable to determime), falls beispielsweise Wolken das Satellitenbild verdecken. Wir planen, unsere Anwendung in MapSwipe, einer Anwendung, die ebenfalls dem Gedanken folgt, wichtige Daten im humanitären Sektor durch croud-sourcing zu erfassen, zu integrieren. Während die fast-komplett-Kategorie eindeutig subjektiver Natur ist, glauben wir dennoch, daß ihr Nutzen in der Möglichkeit liegt, daß andere sich animiert fühlen, die Daten innerhalb der entsprechenden Kacheln vervollständigen zu wollen. Da die Nutzer den jeweiligen Stand der completeness auf einer öffentlich erreichbaren Webseite einsehen können, können sie sich auf die Art Kacheln konzentrieren, in denen nur eine geringe Anzahl an features fehlen.</p>
        <div class='abstract-bio'>
            <h3 class='abstract-bio-name'>Karsten Prehn</h3>
            <p>Doktorand beim GeoForschungsZentrum GFZ Potsdam</p>
        </div>
        </section>


	<?php include "../inc/footer.inc"; ?>

</body>

</html>