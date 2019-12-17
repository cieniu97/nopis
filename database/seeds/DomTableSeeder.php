<?php

use Illuminate\Database\Seeder;

class DomTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {


      $kierunki=[
        'ekonomiczno-prawny',
        'finanse i rachunkowość',
        'zarządzanie',
        'informatyka i ekonometria',
        'gospodarka nieruchomościami',
        'Informatyka w biznesie',
        'przedsiębiorczość i inwestycje'
        ];

      $jezyki=[
        'Język Angielski',
        'Język Niemiecki',
        'Język Rosyjski',
        'Język Hiszpański',
        'Język Francuski'
      ];

      $ekonomiczno_prawny=[
        'Język Angielski',
        'Język Niemiecki',
        'Język Rosyjski',
        'Język Hiszpański',
        'Język Francuski',
        'ochrona własności intelektualnej','poprawna polszczyzna w praktyce','technologie informacyjne','wychowanie fizyczne',
        'historia prawa','metody ilościowe w ekonomii','podstawy ekonomii','prawo cywilne cześć ogólna i rzeczowa','wstęp do prawoznawstwa',
        'analiza i interpretacja informacji gospodarczych','etyka w biznesie','finanse przedsiębiorstw','inwestycje i wycena przedsiębiorstw',
        'narzędzia informatyczne w ekonomii','nauka o przedsiębiorstwie',
        'postępowanie administracyjne','prawo administracyjne','prawo cywilne – zobowiązania','prawo finansowe prawo','gospodarcze publiczne',
        'prawo karne skarbowe','prawo podatkowe','prawo Unii Europejskiej','rynki finansowe','rynki towarowe','seminarium dyplomowe','szkolenie BHP',
        'szkolenie biblioteczne','bankowość','ekonomia menadżerska','planowanie finansowe w przedsiębiorstwie','podstawy sprawozdawczości finansowej w przedsiębiorstwie',
        'prawne aspekty gospodarki nieruchomościami',
        'prawo bankowe','prawo obrotu instrumentami finansowymi','prawo ubezpieczeń gospodarczych','prawo uczciwej konkurencji',
        'prawo upadłościowe i naprawcze','ubezpieczenia','finanse publiczne i samorządowe','makroekonomia','partnerstwo publiczno-prywatne','planowanie finansowe',
        'podstawy sprawozdawczości finansowej w jednostkach samorządu terytorialnego','prawo gospodarki komunalnej','prawo ochrony konkurencji','prawo ochrony środowiska',
        'prawo pomocy publicznej prawo samorządu terytorialnego prawo zamówień publicznych'
        ];
      $informatyka_w_biznesie=[
        'Język Angielski',
        'Język Niemiecki',
        'Język Rosyjski',
        'Język Hiszpański',
        'Język Francuski',
        'ochrona własności intelektualnej',
        'socjologia',
        'technologie informacyjne w biznesie',
        'wychowanie fizyczne',
        'logika',
        'matematyka ',
        'podstawy finansów ',
        'podstawy makroekonomii ',
        'podstawy marketingu ',
        'podstawy mikroekonomii ',
        'podstawy rachunkowości ',
        'podstawy zarządzania ',
        'prawo w działalności gospodarczej ',
        'przedsiębiorczość ',
        'statystyka ',
        'wstęp do informatyki w biznesie ',
        'algorytmy i struktury danych ',
        'analiza i projektowanie systemów informatycznych ',
        'bazy danych',
        'e-biznes ',
        'grafika komputerowa dla biznesu ',
        'komputerowe wspomaganie decyzji ',
        'modelowanie i symulacja procesów biznesowych ',
        'programowanie komputerów ',
        'systemy operacyjne i technologie sieciowe w biznesie',
        'technologie webowe w biznesie ',
        'zarządzanie bezpieczeństwem informacji',
        'zarządzanie projektami informatycznymi',
        'analityka internetowa ',
        'marketing w mediach społecznościowych ',
        'narzędzia content marketingu',
        'planowanie przedsięwzięć internetowych ',
        'platformy i narzędzia social media ',
        'pozycjonowanie i optymalizacja stron internetowych ',
        'systemy i platformy handlu elektronicznego ',
        'systemy zarządzania treścią ',
        'techniki neuronauki poznawczej w biznesie ',
        'zespołowy projekt informatyczny ',
        'programowanie aplikacji chmurowych dla biznesu ',
        'programowanie aplikacji mobilnych ',
        'programowanie obiektowe ',
        'programowanie serwisów internetowych ',
        'projektowanie interfejsów aplikacji biznesowych ',
        'techniki twórczego rozwiązywania problemów gospodarczych ',
        'testowanie oprogramowania ',
        'zespołowy projekt informatyczny'
        ];
      $finanse_i_rachunkowosc=[
        'Język Angielski',
        'Język Niemiecki',
        'Język Rosyjski',
        'Język Hiszpański',
        'Język Francuski',
        'ekonometria','makroekonomia','matematyka','mikroekonomia',
        'podstawy finansów','podstawy prawa','podstawy rachunkowości',
        'statystyka','analiza finansowa','arkusz kalkulacyjny w finansach i rachunkowości',
        'bankowość','etyka w biznesie','ewidencje podatkowe przedsiębiorstw','finanse osobiste',
        'finanse przedsiębiorstwa','finanse publiczne','finanse samorządowe','geografia ekonomiczna',
        'marketing usług finansowoksięgowych','matematyka w finansach i rachunkowości',
        'międzynarodowe stosunki gospodarcze','planowanie finansowe','podatki',
        'podstawy zarządzania','polityka społeczna','prawo gospodarcze','rachunek kosztów',
        'rachunkowość finansowa',
        'rynek finansowy','ryzyko w finansach i rachunkowości','seminarium dyplomowe',
        'sprawozdawczość finansowa','systemy finansowo-księgowe','ubezpieczenia',
        'International Accouting','kadry i płace','organizacja rachunkowości','podstawy auditingu',
        'rachunkowość budżetowa','rachunkowość instrumentów finansowych',
        'rachunkowość instytucji finansowych','rachunkowość NGOs',
        'rozliczenia publicznoprawne przedsiębiorstw','systemy finansowo-księgowe II',
        'bankowość zaawansowana','Basic Terms in Finance and Banking',
        'bezpieczeństwo finansów osobistych','doradztwo bankowoubezpieczeniowe',
        'doradztwo finansowe dla biznesu','doradztwo inwestycyjne i zarządzanie aktywami',
        'planowanie ubezpieczeniowe i emerytalne','Corporate Finance and Taxation',
        'decyzje i kalkulacje finansowe','finanse sektora MSP',
        'obciążenia podatkowe i pozapodatkowe przedsiębiorstwa',
        'ordynacja podatkowa i księgi podatkowe',
        'podatki a źródła i formy finansowania przedsiębiorstwa',
        'relacje przedsiębiorstwa z organami podatkowymi','systemy rozliczeń podatkowych'
        ];
      $zarzadzanie=[
        'Język Angielski',
        'Język Niemiecki',
        'Język Rosyjski',
        'Język Hiszpański',
        'Język Francuski',
        'psychologia zarządzania','socjologia','technologie informacyjne','wychowanie fizyczne','marketing','matematyka','nauka o przedsiębiorstwie','podstawy ekonomii','podstawy finansów','podstawy prawa',
        'podstawy rachunkowości','podstawy zarządzania','statystyka','analiza ekonomiczna','badania marketingowe','przywództwo - studia przypadków zarządzanie pracą zespołową','projektowanie organizacji','komunikacja w biznesie',
        'gry decyzyjne','analiza danych marketingowych komunikacja marketingowa','zarządzanie sprzedażą','obsługa klienta','social media','Blok: Tworzenie i rozwój kapitału ludzkiego w organizacji [moduł]','motywowanie pracowników',
        'rozwój pracowników','zarządzanie relacjami z pracownikami','planowanie i pozyskiwanie pracowników zarządzanie różnorodnością','ocenianie pracowników','zarządzanie zasobami niematerialnymi',
        'metody i techniki doskonalenia jakości','kreatywność i współczesne koncepcje tworzenia innowacji','nowoczesne formy przedsiębiorstw transfer technologii','kształtowanie konkurencyjności przedsiębiorstw e-marketing',
        'ergonomia i zarządzanie bezpieczeństwem pracy w organizacji','etyka biznesu','gospodarowanie kapitałem ludzkim','informatyka w zarządzaniu','innowacje w przedsiębiorstwie','logistyka','marketing międzynarodowy','media w zarządzaniu',
        'metody i techniki heurystyczne','negocjacje','przedsiębiorczość','rachunkowość zarządcza','seminarium dyplomowe','tworzenie i rozwój małej firmy','zachowania konsumentów','zachowania organizacyjne','zarządzanie jakością','zarządzanie kapitałem trwałym',
        'zarządzanie produkcją','zarządzanie projektami','zarządzanie relacjami z klientem','zarządzanie usługami','zarządzanie własnym rozwojem','zarządzanie zasobami ludzkimi','zarządzanie zmianą'
        ];
      $informatyka_i_ekonometria=[
        'Język Angielski',
        'Język Niemiecki',
        'Język Rosyjski',
        'Język Hiszpański',
        'Język Francuski',
        'historia filozofii','ochrona własności intelektualnej','analiza ekonomiczna','dylematy społeczeństwa informacyjnego','kompleksowe zarządzanie jakością','makroekonomia','mikroekonomia','podstawy finansów','podstawy prawa','podstawy rachunkowości',
        'podstawy zarządzania','technologie informacyjne','algebra liniowa','algorytmy i struktury danych','analiza i projektowanie systemów informatycznych','analiza matematyczna','badania operacyjne','bazy danych','ekonometria','ekonomika informacji','informatyka ekonomiczna',
        'IT tools in marketing (narzędzia IT w marketingu)','komunikacja biznesowa i organizacje wirtualne','matematyka finansowa','planowanie finansowe','podstawy demografii','podstawy e-biznesu','podstawy programowania','programowanie stron WWW','rachunek prawdopodobieństwa i statystyka matematyczna',
        'regionalna polityka gospodarcza','seminarium licencjackie','sieci komputerowe - podstawy','statystyka opisowa i ekonomiczna','symulacja komputerowa systemów','technologie multimedialne','zakładanie i prowadzenie działalności gospodarczej','zastosowanie pakietów statystycznych',
        'zintegrowane systemy zarządzania przedsiębiorstwem','informacja naukowa','szkolenie BHP','szkolenie biblioteczne','hurtownie danych','inżynieria wymagań użytkownika','metody analityki biznesowej','metody eksploracji danych','metody sztucznej inteligencji w analizie biznesowej',
        'metody uczenia maszynowego','modelowanie procesów w analizie biznesowej','systemy business intelligence','systemy IT w ewidencji gospodarczej','systemy wspomagania decyzji biznesowych','systemy zarządzania bazami danych','zaawansowane metody analizy danych','zarządzanie bezpieczeństwem IT',
        'zasoby wiedzy w systemach IT','analiza szeregów czasowych','ilościowa analiza skłonności','konstrukcja produktów ubezpieczeniowych','matematyka w biznesie','metody analizy trwania','metody ilościowe na rynku nieruchomości','metody inwestowania na giełdzie','metody klasyfikacji',
        'metody wyceny nieruchomości','modelowanie rynków finansowych','pomiar zasobów ludzkich','statystyczna kontrola jakości','statystyka publiczna','symulacje obliczeniowe w biznesie','systemy pozyskiwania danych','wnioskowanie statystyczne'
        ];
      $gospodarka_niercuhomosciami=[
        'Język Angielski',
        'Język Niemiecki',
        'Język Rosyjski',
        'Język Hiszpański',
        'Język Francuski',
        'ochrona własności intelektualnej','sztuka wystąpień publicznych','warsztaty budowania zespołów','wychowanie fizyczne','algebra liniowa','analiza matematyczna','analiza szeregów czasowych','bazy danych','demografia','ekonometria',
        'informatyka ekonomiczna','inwestycje na rynku finansowym','makroekonomia','matematyka finansowa','mikroekonomia','podstawy finansów publicznych','podstawy organizacji i zarządzania','podstawy rachunkowości','produkty ubezpieczeniowe w gospodarce nieruchomościami',
        'statystyka matematyczna','statystyka opisowa','technologie CRM','zastosowania pakietów obliczeniowych','ekonomika rynku nieruchomości','gospodarka mieszkaniowa','gospodarka nieruchomościami','Metody ilościowe w wycenie firm i farm [moduł]','metody ilościowe w wycenie przedsiębiorstw',
        'wycena farm i gospodarstw rolnych','podstawy ekonomiki przedsiębiorstw ochrona danych osobowych','podstawy prawa administracji i zobowiązań',
        'Pośrednictwo w obrocie nieruchomościami [moduł]','ekonomiczne zagadnienia pośrednictwa na rynku nieruchomości','marketing na rynku nieruchomości','wstęp do pośrednictwa w obrocie nieruchomościami projekt grupowy operat szacunkowy',
        'seminarium','technika nieruchomości','Teoria optymalizacji w gospodarowaniu nieruchomościami [moduł]','statystyczna kontrola jakości w gospodarce nieruchomościami','metody reprezentacyjne na rynku nieruchomości',
        'badania operacyjne w gospodarowaniu nieruchomościami wstęp do gospodarki nieruchomościami','wstęp do wyceny nieruchomości','Wycena nieruchomości','metodyka wyceny nieruchomości','wycena nieruchomości niezurbanizowanych',
        'wycena nieruchomości zurbanizowanych wycena podmiotów gospodarczych Zarządzanie nieruchomościami [moduł]','zarządzanie nieruchomościami inwestycyjnymi','zarządzanie nieruchomościami mieszkalnymi',
        'podstawy planowania i zarządzania nieruchomościami zastosowania informacji przestrzennej w gospodarce nieruchomościami'
        ];
      $przedsiebiorczosc_i_inwestycje=[
        'Język Angielski',
        'Język Niemiecki',
        'Język Rosyjski',
        'Język Hiszpański',
        'Język Francuski',
        'etyka w biznesie','innowacje w przedsiębiorstwie','ochrona własności intelektualnej','podstawy ekonomiki przedsiębiorstw','podstawy makroekonomii','podstawy prawa dla ekonomistów','przedsiębiorczość','sztuka wystąpień publicznych',
        'tworzenie i funkcjonowanie małej firmy','funkcjonowanie klastrów','gra decyzyjna','marketing w małej firmie','metody ilościowe w zarządzaniu przedsiębiorstwem','metody twórczego rozwiązywania problemów','narzędzia informatyczne w małej firmie',
        'negocjacje','ocena efektywności inwestycji','opodatkowanie małych firm','podstawy rachunkowości w małych firmach','problemy biznesu w praktyce','przywództwo i kierowanie zespołem','psychologia w zarządzaniu','seminarium dyplomowe',
        'społeczna odpowiedzialność biznesu','sprawozdawczość i analiza ekonomiczno-finansowa','wyszukiwanie, ocena wiarygodności informacji i bazy danych','zarządzanie jakością w małej firmie','zarządzanie kapitałem trwałym',
        'zarządzanie procesami w małym przedsiębiorstwie','zarządzanie strategiczne małą firmą','zarządzanie zasobami ludzkimi','informacja naukowa','finansowanie małych firm','MSP w Unii Europejskiej','risk management','strategie innowacyjne','technologie ICT w małej firmie',
        'transfer technologii','tworzenie biznesplanu przedsięwzięcia','wycena własności intelektualnej','zarządzanie projektami innowacyjnymi','e-biznes','internacjonalizacja małej firmy','planowanie w małym przedsiębiorstwie','social media in management and marketing of SMEs',
        'system wspierania małych firm','wycena przedsiębiorstw','zarządzanie kreatywnością','zarządzanie projektami w małym przedsiębiorstwie','zarządzanie technologią'
        ];



      sort($ekonomiczno_prawny);
      sort($informatyka_w_biznesie);
      sort($finanse_i_rachunkowosc);
      sort($zarzadzanie);
      sort($informatyka_i_ekonometria);
      sort($gospodarka_niercuhomosciami);
      sort($przedsiebiorczosc_i_inwestycje);


      $kierunki_przedmioty=[
        $ekonomiczno_prawny,
        $informatyka_w_biznesie,
        $finanse_i_rachunkowosc,
        $zarzadzanie,
        $informatyka_i_ekonometria,
        $gospodarka_niercuhomosciami,
        $przedsiebiorczosc_i_inwestycje
      ];


    for ($i=0; $i < count($kierunki) ; $i++) {
      App\Dom::create([
         'uczelnia' => "Wydział nauk ekonomicznych i zarządzania",
         'kierunek' => $kierunki[$i]
     ]);

     for($j=0;$j<count($kierunki_przedmioty[$i]);$j++){

         App\Subject::create([
            'dom_id' => $i+1,
            'name' => $kierunki_przedmioty[$i][$j]
        ]);

     }
    }

    }
}
