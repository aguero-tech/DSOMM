<?php
$monitoring = array(
    "Einfache Anwendungs- und System-Metriken" => array(
        "risk" => "Systemadministratoren und Entwickler müssen, um einen Überblick über verschiedene virtuelle Systeme zu erlangen, sich auf diesen einloggen. Insbesondere Entwicklern ohne Linux-Kentnisse fällt die Auswertung von Protokollen auf Grundlage der Linux-Befehle cat, grep und awk schwer.",
        "measure" => "Einfache Anwendungs- und System-Metriken sind erfasst.",
        "easeOfImplementation" => array(
            "knowledge" => 2,
            "time" => 2,
            "resources" => 2
        ),
        "usefulness" => 5,
        "level" => 1,
        "securityProperties" => array(
            "integrity" => "Durch Metriken während eines Angriffs können Informationen gewonnen werden, durch welche ein Angriff auf die Integrität von Daten abgewehrt werden kann.",
            "availability" => "Durch Trendanalysen können ungewollte Systemausfälle verhindert werden.",
            "confidentiality" => "Durch Metriken während eines Angriffs können Informationen gewonnen werden, durch welche ein Angriff abgewehrt werden kann.",
        ),
    ),
    "Visualisierte Metriken" => array(
        "risk" => "Metriken werden mangelhaft dargestellt und können deshalb nur begrenzt ausgewertet werden.",
        "measure" => "Metriken sind visuell in Echtzeit dargestellt. Dabei unterstützt eine benutzerfreundliche Bedienoberfläche.",
        "easeOfImplementation" => array(
            "knowledge" => 1,
            "time" => 2,
            "resources" => 2
        ),
        "usefulness" => 3,
        "level" => 2,
        "securityProperties" => array(
            "integrity" => "Durch visualisierte Metriken während eines Angriffs können erweiterte Informationen gewonnen werden, durch welche ein Angriff auf die Integrität von Daten abgewehrt werden kann.",
            "availability" => "Durch visualisierte Trendanalysen können ungewollte Systemausfälle verhindert werden.",
            "confidentiality" => "Durch visualisierte Metriken während eines Angriffs können erweiterte Informationen gewonnen werden, durch welche ein Angriff abgewehrt werden kann.",
        ),
        "dependsOn" => array(
            "Anwendungs- und System-Metriken"
        )
    ),
    "Erweiterte Webanwendungsmetriken" => array(
        "risk" => "Das Sicherheitsniveau der Webanwendung ist unbekant.",
        "measure" => "Alle Ergebnisse aus der Dimension Test- und Verifizierung werden instrumentiert.",
        "easeOfImplementation" => array(
            "knowledge" => 3,
            "time" => 3,
            "resources" => 2
        ),
        "usefulness" => 4,
        "level" => 3,
        "securityProperties" => array(
            "integrity" => "Durch Instrumentierung der durchgeführten Metriken wird das Sicherheitsniveau kommuniziert und die Sicherheit der Webanwendung langfristig erhöht.",
            "availability" => "Durch Instrumentierung der durchgeführten Metriken wird das Sicherheitsniveau kommuniziert und die Sicherheit der Webanwendung langfristig erhöht.",
            "confidentiality" => "Durch Instrumentierung der durchgeführten Metriken wird das Sicherheitsniveau kommuniziert und die Sicherheit der Webanwendung langfristig erhöht.",
        ),
        "dependsOn" => array(
            "Anwendungs- und System-Metriken",
            "Visualisierte Metriken"
        )
    ),
    "Verfügbarkeits- und Stabilitätsmetriken" => array(
        "risk" => "Es sind nicht ausreichend Metriken erfasst um alle Trends zu erfassen oder bei einem Angriff ausreichend Informationen zu erhalten.",
        "measure" => "Erweiterte Metriken um die Verfügbarkeit und Stabilität zu erfassen.",
        "easeOfImplementation" => array(
            "knowledge" => 3,
            "time" => 3,
            "resources" => 2
        ),
        "usefulness" => 4,
        "level" => 3,
        "securityProperties" => array(
            "availability" => "Durch Trendanalysen aufgrund erweiterter Metriken können ungewollte Systemausfälle verhindert werden.",
        ),
        "dependsOn" => array(
            "Anwendungs- und System-Metriken",
            "Visualisierte Metriken"
        )
    ),
    "Abdeckungs- und Kontrollemetriken" => array(
        "risk" => "Die Effektivität von Kontrollmanahmen wie Konfiguration, Patch und Schwachstellen Management ist unbekannt.",
        "measure" => "Erweiterte Metriken um Kontrollmaßnahmen zu erfassen.",
        "easeOfImplementation" => array(
            "knowledge" => 3,
            "time" => 3,
            "resources" => 2
        ),
        "usefulness" => 4,
        "level" => 3,
        "securityProperties" => array(
            "integrity" => "Durch Kenntnis der Effektivität von Kontrollmanahmen können Bedrohungen, welche die Integrität gefährden abgewehrt werden.",
            "availability" => "Durch Kenntnis der Effektivität von Kontrollmanahmen können Bedrohungen, welche die Verfügbarkeit gefährden abgewehrt werden.",
            "confidentiality" => "Durch Kenntnis der Effektivität von Kontrollmanahmen können Bedrohungen, welche die Vertraulichkeit gefährden abgewehrt werden.",
        ),
        "dependsOn" => array(
            "Anwendungs- und System-Metriken",
            "Visualisierte Metriken"
        )
    ),
    "Verteidungsmetriken" => array(
        "risk" => "Angriffserkennungssysteme wie eine Paketfilter-Firewalls oder Web-Application-Firewall erkennen und blockieren Angriffe, jedoch ist unbekannt wie viele Angriffe abgewehrt werden und es wird ggf. nicht erkannt, wenn ein Angriff stattfindet.",
        "measure" => "Erfassung und Visualisierung von Metriken aus Angriffserkennungssystemen.",
        "easeOfImplementation" => array(
            "knowledge" => 3,
            "time" => 3,
            "resources" => 2
        ),
        "usefulness" => 4,
        "level" => 2,
        "securityProperties" => array(
            "integrity" => "Während eines Angriffs können Informationen gewonnen werden, durch welche ein Angriff auf die Integrität von Daten abgewehrt werden kann.",
            "availability" => "Es können ungewollte Systemausfälle verhindert werden.",
            "confidentiality" => "Während eines Angriffs können Informationen gewonnen werden, durch welche ein Angriff abgewehrt werden kann.",
        ),
        "dependsOn" => array(
            "Anwendungs- und System-Metriken",
            "Visualisierte Metriken",
        )
    ),

    "Alarmierung" => array(
        "risk" => "Es wird zu spät gemerkt, wenn Systeme ungewöhnliches verhalten aufweisen.",
        "measure" => "Grenzen für Metriken sind definiert und das System alarmiert.",
        "easeOfImplementation" => array(
            "knowledge" => 2,
            "time" => 5,
            "resources" => 5
        ),
        "usefulness" => 5,
        "level" => 2,
        "securityProperties" => array(
            "availability" => "Durch frühzeitig Alarmierung können Systemausfälle verhindert werden.",
        ),
        "dependsOn" => array(
            "Visualisierte Metriken"
        )
    ),
    "Deaktivierung ungenutzter Metriken" => array(
        "risk" => "Durch sammeln ungenutzter Metriken werden Ressourcen verschwendet, welche für sicherheitsrelevante Dienste genutzt werden könnten.",
        "measure" => "Durch Deaktivierung ungenutzter Metriken stehen mehr Ressourcen zur Verfügung.",
        "easeOfImplementation" => array(
            "knowledge" => 2,
            "time" => 5,
            "resources" => 5
        ),
        "usefulness" => 5,
        "level" => 3,
        "dependsOn" => array(
            "Visualisierte Metriken"
        )
    ),
    "Sinnvolle Metriken-Gruppierung" => array(
        "risk" => "Da sicherheitsrelevante Metriken nicht gruppiert sind, kann es zu Verzögerungen bei der Analyse von Vorfällen kommen.",
        "measure" => "Metriken sind sinnvoll gruppiert.",
        "easeOfImplementation" => array(
            "knowledge" => 2,
            "time" => 4,
            "resources" => 2
        ),
        "usefulness" => 2,
        "level" => 3,
        "securityProperties" => array(
            "availability" => "Durch erhöhte Reaktionszeit können Systemausfälle verhindert werden.",
        ),
    ),
    "Zielgerichtete Alarmierung" => array(
        "risk" => "Es werden falsche Personen über einen Vorfall informiert.",
        "measure" => "Durch zielgerichtete Information über Vorfälle kann besser auf Vorfälle reagiert werden.",
        "easeOfImplementation" => array(
            "knowledge" => 2,
            "time" => 5,
            "resources" => 5
        ),
        "usefulness" => 5,
        "level" => 3,
        "securityProperties" => array(
            "availability" => "Durch erhöhte Reaktionszeit können Systemausfälle verhindert werden.",
        ),
        "dependsOn" => array("Alarmierung")
    ),
    "Bildschirme zeigen Metriken" => array(
        "risk" => "Sicherheitsrelevante Informationen, z.B. bei einem Angriff, werden verspätet erkannt.",
        "measure" => "Ein intern zugänglicher Bildschirm zeigt sicherheitsrelevante Metriken.",
        "easeOfImplementation" => array(
            "knowledge" => 2,
            "time" => 1,
            "resources" => 1
        ),
        "usefulness" => 5,
        "level" => 4,
        "dependsOn" => array("Sinnvolle Metriken-Gruppierung"),
        "securityProperties" => array(
            "availability" => "Durch erhöhte Reaktionszeit können Systemausfälle verhindert werden.",
        ),
    ),
    "Metriken sind kombiniert mit Tests" => array(
        "risk" => "Änderungen führen zu erhöhter Last aufgrund Programmierfehler.",
        "measure" => "Erweiterte Metriken werden bei Tests aufgezeichnet und ausgewertet.",
        "easeOfImplementation" => array(
            "knowledge" => 2,
            "time" => 3,
            "resources" => 2
        ),
        "usefulness" => 5,
        "level" => 4,
        "securityProperties" => array(
            "availability" => "Durch erhöhte Sichtbarkeit von Metriken bei Tests wird die Verfügbarkeit erhöht.",
        ),
        "dependsOn" => array("Sinnvolle Metriken-Gruppierung")
    ),
    "Rollen basierte Authentifizierung und Autorisierung" => array(
        "risk" => "Jeder kann für jedes System sicherheitsrelevante Informationen einsehen.",
        "measure" => "Nutzung von Rollen basierter Authentifizierung und Autorisierung, ggf. verbunden mit einem zentralem Authentifizierungs-Server.",
        "easeOfImplementation" => array(
            "knowledge" => 2,
            "time" => 1,
            "resources" => 1
        ),
        "usefulness" => 2,
        "level" => 4,
        "implementation" => "",
        "securityProperties" => array(
            "confidentiality" => "Vertrauliche Informationen über interne Systeme sind geschützt.",
        ),
        "dependsOn" => array("Visualisierte Metriken")
    ),
);
ksort($monitoring);
$logging = array(
    "Zentrale Protokollierung" => array(
        "risk" => "Protokolle sind nicht sichtbar und können bei Einbruch in ein System manipuliert werden.",
        "measure" => "Protokolle werden zentral erfasst.",
        "easeOfImplementation" => array(
            "knowledge" => 1,
            "time" => 1,
            "resources" => 1
        ),
        "usefulness" => 2,
        "level" => 1,
        "securityProperties" => array(
            "availability" => "Durch erhöhte Sichtbarkeit von Protokollen auf einem zentralen System wird die Verfügbarkeit erhöht.",
            "integrity" => "Durch sammeln von Protokollen auf einem zentralen Protokoll-System können Protokolle schwerer manipuliert werden. Durch erhöhte Sichtbarkeit können Angriffe erkannt und Maßnahmen ergriffen werden.",
        ),
        "implementation" => "rsyslog"
    ),
    "Grafische Auswertung" => array(
        "risk" => "",
        "measure" => "",
        "easeOfImplementation" => array(
            "knowledge" => 1,
            "time" => 3,
            "resources" => 3
        ),
        "usefulness" => 4,
        "level" => 2,
        "dependsOn" => array("Zentrale Protokollierung"),
        "implementation" => "logstash",
        "securityProperties" => array(
            "availability" => "Durch erhöhte Sichtbarkeit von Protokollen auf einem zentralen System wird die Verfügbarkeit erhöht.",
        ),
    ),
    "Ausnahmen von Anwendungen werden erfasst" => array(
        "risk" => "Treten Ausnahmen in Anwendungen auf, werden diese verzögert oder gar nicht manuell geprüft.",
        "measure" => "Ausnahmen werden Instrumentiert und zentral Protokolliert. Zusätzlich wird ein Alarm gemeldet.",
        "easeOfImplementation" => array(
            "knowledge" => 1,
            "time" => 1,
            "resources" => 1
        ),
        "usefulness" => 5,
        "level" => 3,
        "dependsOn" => array("Grafische Auswertung", "Alarmierung"),
        "securityProperties" => array(
            "availability" => "Durch erhöhte Sichtbarkeit von Ausnahmen wird die Verfügbarkeit erhöht.",
        ),
    ),
    "Korrelation von Sicherheits-Ereignissen" => array(
    "risk" => "Sicherheits-Ereignisse werden nicht korreliert, so dass Zusammennhänge zwischen Ereignissen nicht erkannt werden.",
    "measure" => "Sicherheits-Ereignisse werden korreliert. Beispielsweise erhöhte Anmeldeverusuche mit erfolgreichen Anmeldungen.",
    "easeOfImplementation" => array(
        "knowledge" => 4,
        "time" => 4,
        "resources" => 4
    ),
    "usefulness" => 3,
    "level" => 4,
    "dependsOn" => array("Grafische Auswertung", "Alarmierung"),
    "securityProperties" => array(
        "availability" => "Durch erhöhte Sichtbarkeit von Ausnahmen die Verfügbarkeit erhöht.",
        "integrity" => "Durch Korrelation von Ereignissen können Angriffe schneller erkannt und Maßnahmen ergriffen werden.",
    ),
)
);
ksort($logging);
$dimensions["Informationsgewinnung"] = array(
    "Überwachung und Metrik" =>$monitoring,
    "Protokollierung" =>$logging
);