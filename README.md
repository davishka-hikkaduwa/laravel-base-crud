--- GIORNO 1 ---

Create un nuovo progetto Laravel 7 e tramite gli appositi comandi artisan create un model con relativa migration e un  resource controller.
Iniziate a definire le operazioni CRUD per gestire un archivio di fumetti.
Bonus: creare il seeder per la tabella comics utilizzando il file in allegato.

--- GIORNO 2 ---

Lavorate sulla stessa repo di ieri e completate le operazioni CRUD.
Bonus: tramite javascript o php, quando l'utente clicca sul pulsante "delete", chiedere conferma della cancellazione, prima di eliminare l'elemento.




--- COMMANDI ---

php artisan make:model Comic

php artisan make:migration create_comics_table

php artisan make:controller ComicController -r

php artisan make:seeder ComicSeeder


php artisan make:model Comic -m -r -s
