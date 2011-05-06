@menu_order=01@

LiveTest kann über drei verschiedene Wege installiert werden. Der erste Weg über den PhmLabs-Pear-Channel ist für die Nutzung von LiveTest gedacht. Der zweite Weg über git ermöglicht natürlich auch die Nutzung, zusätzlich aber auch die Weiterentwicklung von LiveTest. Der dritte Weg ist der direkte Download.

# Installation
LiveTest kann als Pear-Paket, Zip-File oder Tarball bezogen werden. Wer mit der Entwicklungsversion arbeiten möchte kann auch github verwenden

## Pear
Der PhmLabs-Pear-Channel ist über pear.phmlabs.com erreichbar. Bedingung für die Installation über den Pear-Channel ist die Verfügbarkeit des pear-executables. Dieses sollte genau wie PHP-CLI über die Kommandozeile verfügbar sein. Auch hier gilt: Ausprobieren oder Installieren, wenn LiveTest über PEAR installiert werden soll.

Die Installation von LiveTest erfolgt bei dem Weg über Pear in zwei Schritten:
<pre>
pear channel-discover pear.phmlabs.com
pear install -a pear.phmlabs.com/LiveTest
</pre>

Danach sollte der Befehl LiveTest auf der Kommandozeile zur Verfügung stehen.  Ist dies der Fall, ist LiveTest bereits erfolgreich installiert und kann genutzt werden.

<pre>LiveTest</pre>

## Download
LiveTest kann als komplette Applikation in einem File geladen werden. Dieses File steht als [Zip-File](https://github.com/phphatesme/LiveTest/zipball/master) oder [Tarball](https://github.com/phphatesme/LiveTest/tarball/master) zur Verfügung. Man kann das File dann einfach entpacken und LiveTest über die Kommandozeile starten.

## github
Für diejenigen, die sehr tief in die Materie eintauchen empfiehlt sich der Weg über das zur Verfügung gestellte Git-Repository.  Dies erfolgt über folgenden Befehl:
<pre>git clone http://www.github.com/phmLabs/LiveTest LiveTest</pre> 