<?php

use Illuminate\Database\Seeder;
use App\Category;

class CategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //creare l'istanza
        $categories = ['Html', 'Css', 'Js', 'Laravel']; 

        //generare i dati
        foreach($categories as $category){

            // creo istanza
            $newCategories = new Category();

            // assegno valore a name istanza
            $newCategories->name = $category;

            //salvare i dati nella tabella
            $newCategories->save();
        }
    }
}
