<?php
session_start();
if (isset($_GET['lang']) && in_array($_GET['lang'], ['en', 'af'], true)) { $_SESSION['lang'] = $_GET['lang']; }
$lang = $_SESSION['lang'] ?? 'en';
$T = [
 'en' => [
  'home'=>'Home','about'=>'About','contact'=>'Contact','menu'=>'Our Menu','coffees'=>'Coffees','pastries'=>'Pastries','hours'=>'Opening Hours',
  'h1'=>'Small-batch coffee, roasted in the Vaal','tag'=>'Fresh beans, fair prices and a quiet corner to study in Vanderbijlpark.',
  'cta1'=>'See the menu','cta2'=>'Visit us','why'=>'Why students pick Vaal Roast','w1'=>'Free Wi-Fi','w1d'=>'Fast internet at every table.','w2'=>'Student pricing','w2d'=>'10% off with a valid student card.','w3'=>'Roasted weekly','w3d'=>'Beans roasted in-house every Monday.',
  'menu_t'=>'Our menu','search'=>'Search the menu','all'=>'All','hot'=>'Hot','cold'=>'Cold','item'=>'Item','type'=>'Type','price'=>'Price',
  'quote'=>'The only place near campus where I can finish an assignment and enjoy the coffee.','quote_by'=>'Thando, IT student',
  'vid'=>'See how we roast','links'=>'Learn more about coffee','dark'=>'Dark mode','top'=>'Back to top',
  'about_h1'=>'About Vaal Roast Coffee Co.','about_p'=>'We opened in 2024 with one grinder and a simple idea: good coffee should not cost a day’s allowance. Today we roast every week and serve students, lecturers and neighbours.',
  'mission'=>'Our mission','m1'=>'Buy beans directly from ethical farms.','m2'=>'Keep prices fair for students.','m3'=>'Provide a safe, quiet space to work.',
  'team'=>'Meet the team','role'=>'Role','name'=>'Name','faq'=>'Frequently asked questions','faq1'=>'Do you accept card payments?','faq1a'=>'Yes, we accept card, SnapScan and cash.','faq2'=>'Can I book a table for a study group?','faq2a'=>'Yes. Use the contact form and tell us the group size.',
  'contact_h1'=>'Contact us','fname'=>'Full name','email'=>'Email address','msg'=>'Message','send'=>'Send message','ok'=>'Thank you! We will reply within one working day.','err'=>'Please correct the highlighted fields.',
  'find'=>'Find us','rights'=>'All rights reserved.','follow'=>'Follow us','quick'=>'Quick links','skip'=>'Skip to content'
 ],
 'af' => [
  'home'=>'Tuis','about'=>'Oor Ons','contact'=>'Kontak','menu'=>'Ons Spyskaart','coffees'=>'Koffie','pastries'=>'Gebak','hours'=>'Openingstye',
  'h1'=>'Kleinlading-koffie, in die Vaal gebrand','tag'=>'Vars boontjies, billike pryse en ’n rustige hoekie om te studeer in Vanderbijlpark.',
  'cta1'=>'Sien die spyskaart','cta2'=>'Besoek ons','why'=>'Hoekom studente Vaal Roast kies','w1'=>'Gratis Wi-Fi','w1d'=>'Vinnige internet by elke tafel.','w2'=>'Studentepryse','w2d'=>'10% afslag met ’n geldige studentekaart.','w3'=>'Weekliks gebrand','w3d'=>'Boontjies word elke Maandag self gebrand.',
  'menu_t'=>'Ons spyskaart','search'=>'Soek in die spyskaart','all'=>'Almal','hot'=>'Warm','cold'=>'Koud','item'=>'Item','type'=>'Tipe','price'=>'Prys',
  'quote'=>'Die enigste plek naby die kampus waar ek my opdrag kan klaarmaak en die koffie geniet.','quote_by'=>'Thando, IT-student',
  'vid'=>'Sien hoe ons brand','links'=>'Leer meer oor koffie','dark'=>'Donker modus','top'=>'Terug bo',
  'about_h1'=>'Oor Vaal Roast Coffee Co.','about_p'=>'Ons het in 2024 met een meul en ’n eenvoudige idee oopgemaak: goeie koffie moet nie ’n dag se toelae kos nie. Vandag brand ons weekliks en bedien ons studente, dosente en bure.',
  'mission'=>'Ons missie','m1'=>'Koop boontjies direk van etiese plase.','m2'=>'Hou pryse billik vir studente.','m3'=>'Bied ’n veilige, rustige werkruimte.',
  'team'=>'Ontmoet die span','role'=>'Rol','name'=>'Naam','faq'=>'Gereelde vrae','faq1'=>'Aanvaar julle kaartbetalings?','faq1a'=>'Ja, ons aanvaar kaart, SnapScan en kontant.','faq2'=>'Kan ek ’n tafel vir ’n studiegroep bespreek?','faq2a'=>'Ja. Gebruik die kontakvorm en sê vir ons hoeveel mense.',
  'contact_h1'=>'Kontak ons','fname'=>'Volle naam','email'=>'E-posadres','msg'=>'Boodskap','send'=>'Stuur boodskap','ok'=>'Dankie! Ons antwoord binne een werksdag.','err'=>'Korrigeer asseblief die gemerkte velde.',
  'find'=>'Vind ons','rights'=>'Alle regte voorbehou.','follow'=>'Volg ons','quick'=>'Vinnige skakels','skip'=>'Slaan oor na inhoud'
 ]
];
function t($k) { global $T, $lang; return htmlspecialchars($T[$lang][$k] ?? $k, ENT_QUOTES, 'UTF-8'); }
