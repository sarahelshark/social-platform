### TRACCIA MILESTONE 4 - Social platform

Progettare il database per la piattaforma social, creando il diagramma ER e poi svolgendo le query fornite. Definiamo anche delle Classi secondo i principi di OOP.

Obiettivi:
- modellare un database partendo da entità reali
- saper definire le relazioni tra le entità
- importare un database ed eseguire query
- connettersi a un db con php
- stampare dati in pagina con php
- sfruttare i principi e vantaggi della programmazione ad oggetti (oop)

Argomenti:
- PHP fundamentals
- funzioni e include
- Principi di OOP (classi, istanze, variabili d'istanza, metodi d'istanza, costruttore)
- Database (Tabelle, Relazioni e Data Types)
- Diagramma E/R
- PhpMyAdmin
- Query SQL (SELECT, COUNT, AVG, SUM, AS, JOIN, WHERE, LIKE, ORDER BY, GROUP BY)

Consegna
Nome repo: social-platform

Vogliamo creare uno spazio virtuale in stile social network dove gli utenti possano condividere le proprie esperienze. Ogni utente può creare dei post, al quale può aggiungere uno o più media come foto e video. Ogni post può avere uno o più tags che servono per categorizzare i contenuti. Gli altri utenti possono interagire con il post esprimendo il loro gradimento attraverso un semplice like.

# Step 1 (Diagramma ER)
Individuate prima le entità su cui si basa la piattaforma e poi osservate come sono relazionate. Inoltre, specificate i campi e i diversi vincoli disponibili per ciascun campo, come ad esempio l'utilizzo di UNIQUE per garantire l'unicità dei valori e NOT NULL per indicare l’obbligo di fornire un valore per quel campo. Attenzione alle chiavi primarie. BONUS: espandete il diagramma per integrare anche l’entità Tags e Commenti.
Utilizzare https://www.diagrams.net/  per la creazione dello schema. Esportare quindi il diagramma in png e caricarlo nella repo

# Step 2 (MySQL Query)
Una volta che siete sicuri del vostro diagramma, potete passare alla seconda fase. Create un nuovo database nel vostro phpMyAdmin e importate il file db.sql fornito nella cartella. Aprite il file PDF e scrivete le query richieste. 
Seleziona gli utenti che hanno postato almeno un video
Seleziona tutti i post senza Like (13)
Conta il numero di like per ogni post (165)
Ordina gli utenti per il numero di media caricati (25) 
Ordina gli utenti per totale di likes ricevuti nei loro posts (25) 
Dopo aver testato le vostre query con phpMyAdmin, riportatele in un file txt e caricatelo nella vostra repo.
Alcune note: accanto ad alcune query abbiamo indicato il numero di risultati che dovrebbe restituire; sfruttateli per capire se la query funziona.

# Step 3 (php-mysqli)
Crea una pagina che in php si connetta al db con mysqli e stampi i dati in pagina di una query a scelta tra le precedenti. Gestisci in autonomia la parte di UI.

# Step 4 (OOP)
Mettiamo ora da parte il DB e occupiamoci dei modelli.
In una nuova cartella Models crea delle Classi per Post e Media.
Sfrutta i principi di ereditarietà e composizione.
Post.php
all'interno della classe sono dichiarate delle variabili d'istanza
all'interno della classe è definito un costruttore
all'interno della classe è definito almeno un metodo
tra i parametri del costruttore accetta un Media

# BONUS: il costruttore accetta più Media

Media.php
il sistema prevede immagini e video
all'interno della classe sono dichiarate delle variabili d'istanza
all'interno della classe è definito un costruttore
all'interno della classe è definito almeno un metodo
In un nuovo file, vengono istanziati almeno due oggetti Post e stampati a schermo i valori delle relative proprietà.

# BONUS: utilizza i dati estratti in precedenza dal DB per istanziare i nuovi oggetti.