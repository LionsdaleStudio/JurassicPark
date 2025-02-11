1 - laravel new ProjektNeve 
1.1 - composer create-project laravel/laravel ProjektNeve
2 - .ENV fájl ellenőrzése
    - databasa beállítások -> név és társai
    - app key létezik-e - php artisan key:generate
3 - Projekt kitisztítása
    - database/migration (jobs migration törlése, illetve bármi más ami nem kell (pl user))
4 - Modell létrehozása minden egyes tartozékával
    - Php artisan make:model ModellNeve --all
5 - Modell fájl kitöltése
    - use SoftDeletes; ->ha kell
    - protected $fillable = ['amilyen oszlopokat a user kitölthet'];
6 - Database/Migration fájl kitöltése az oszlopokkal
7 - Ha kell akkor Factory kitöltése
8 - Seeder kitöltése ha kell
    (ezen a ponton csinálok egy UserSeedert is általában - php artisan make:seeder UserSeeder)
    (És a databaseseeder fájlból átrakom ide a userseederes kódokat)
9 - DatabaseSeederben a $this->call([ 'seederek::class' ]); paranncsal meghívom sorban a seedereket
10 - PHP ARTISAN MIGRATE:FRESH --seed paranccsal ellenőrzöm, hogy működnek-e dolgok.
    HIBÁK:
        - Nincs adatbázis: php artisan migrate (ő ha nincs adatbázis megcsinálja)
        - Ellenőrizd hogy fut-e a xampp
        - Ha nem tölt fel adatot, de táblát igen, akkor nézd meg, hogy meg lett-e hívva a seeder a DatabaseSeeder fájlban.
        - Ha a seederre ír hibát:
            - Elírtad az oszlop nevét, a factoryban valami nem jó értéket ad vissza (pl.: tömböt kapsz string helyére (fake()->sentences()))
            - Nem linkelted a modellt (use App\Models\modellneve)
            - Idegen kulcs rosszul valósul meg (rossz sorrendben töltesz fel adatokat, nem jó a kapcsolat)
11 - routes/web.php (vagy ha API-t csinálsz akkor php artisan install:api majd api.php) útvonalak megcsinálása
        Ha az összes resource (CRUD) funkció kell 
            - Route::resource('/uriNeveÁltalábanModellneveTöbbesszám', ControllerNeve::class);
            - Ne felejtsd el use App\Http\Controllers\Controllerneve; paranccsal belinkelni.
12 - Controller és Frontend párhuzamos fejlesztése
    - Javaslatok:
        - Legyen egy layouts mappa, ami tartalmazza a basic layoutot (navbar, @yield('sectionNeve'), stb.)
        - Az egy controllerhez tartozó frontend dolgai kerüljenek külön mappába (modellneve többesszám)
        - A frontend nevei egyezzenek meg a controller funkció nevekkel (pl.: index.blade.php vagy restoreThis.blade.php, stb.)
12 + 1 
        Ha vannak kapcsolatok (hasOne, hasMany, belongsTo) akkor a modellben definiálom őket.
        Pl.: public function userComments(): hasMany {
            return $this->hasMany("UserComment::class");
        }

        utána a használat pl.: user->userComments ->és ez esetben ez egy tömb (NINCS ZÁRÓJEL). 