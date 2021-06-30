<?php
use App\comic;
use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $comicsList=config("comics");
        // con questo metodo ho la lista dei miei comics
        foreach ( $comicsList as $comics){
            $comicsEntry = new Comic();
            // $comicsEntry->title=$comics
            $comicsEntry->fill($comics);
            // dopo aver costruito la struttura fillable sul model che sta sul provider (comics.php)
            // vado a riempire i dati e a salvarli subito dentro al mio database

            $comicsEntry->save();
        }
    }
}
