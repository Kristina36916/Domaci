Apilkacija Kozmeticki salon napravljena je za primenu u istim, zasnovana na OOP.
Omogucava zakazivanje termina kao i uvid u zakazane termine. 
Sajt sadzri pocetnu(index.php)stranu, o nama, cenovnik, zakazivanje, zakazani termini i kontakt.
Aplikacija je logicki povezana, sve stranice ukazuju jedna na drugu klikom na odredjeno dugme.
Na pocetnoj strani primenjen je Ajax i JScript,u pogledu sakrivanja i "otvaranja" novog teksta(Ajax otvara istorija.txt). 
O nama sadrzi kratak rezime o salonu,kao i Ajax, koji ucitava fajl zaposleni.xml, i klikom na dugme prikazuje te podatke.
Cenovnik sadrzi tabelu sa uslugama, cenama i trajanjem. Primenjen je JScript, u pogledu pretvaranja tabele u niz i prikaz duzine niza.
Zakazivanje zadrzi formu za popunjavanje potrebnih podataka, kao i dva padajuca menija za izbor kozmeticara i usluge. Padajuci meniji 
formirani su na osnovu sazdrzaja baze. 
Zakazani termini sadrze tabelu zakazanih usluga sa svim neophodnim podacima, kao i php funkciju date.
Kontakt prikazuje kontakt podatke,i mapu sa lokacijom, na koju je primenjen Jquery hover evenet.
U konekcija.php usostavljena je konekcija sa bazom. 
Operacije select, insert, update, delete vrse se nad bazom podataka Kozmeticki salon.
Za ovu aplikaciju je koriscen, malo izmenjen, bootstrap template.