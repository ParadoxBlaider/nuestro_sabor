<?php

use App\Restaurant;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */

    private $arrayRestaurantes = array(
		array(
			'name' => 'Burger Town',
			'description' => 'Desde 2012 Burger Town se ha esforzado por mostrar que la comida rápida también puede ser saludable y creativa!', 
			'address' => 'Calle 95 # 11A-67', 
			'city' => 'Bogotá', 
			'url_photo' => 'https://pbs.twimg.com/media/C4RfawRXUAEZJhZ.jpg', 
			'number_stockpiles' => 0
		),
		array(
			'name' => 'El Tambor',
			'description' => 'El tambor, rica comida Bogotana acompañada de buena atención', 
			'address' => 'Autopista Norte #224-60', 
			'city' => 'Bogotá', 
			'url_photo' => 'https://media-cdn.tripadvisor.com/media/photo-p/12/dc/54/6b/el-tambor-calle-80.jpg', 
			'number_stockpiles' => 0
		),
		array(
			'name' => 'Colosal',
			'description' => 'Colosal reúne todo un conjunto de experiencias por su impactante arquitectura, servicio, propuesta gastronómica de primer nivel.', 
			'address' => 'Calle 16a sur no 9f-13', 
			'city' => 'Medellín', 
			'url_photo' => 'https://media-cdn.tripadvisor.com/media/photo-s/14/71/33/f9/colosal.jpg', 
			'number_stockpiles' => 0
		),
		array(
			'name' => 'Gato Gris',
			'description' => 'El restaurante El Gato Gris está ubicado en el corazón de la capital de Colombia, y se caracteriza por presentar una gastronomía basada en recetas de la zona.', 
			'address' => 'Cl 12b Carrera 1A', 
			'city' => 'Bogotá', 
			'url_photo' => 'https://media-cdn.tripadvisor.com/media/photo-s/05/41/1f/04/restaurante-el-gato-gris.jpg', 
			'number_stockpiles' => 0
		),
    );

    private function seedRestaurant(){
        DB::table('restaurants')->delete();
        foreach ($this->arrayRestaurantes as $restaurante) {
            $restaurant = new Restaurant;
            $restaurant->name = $restaurante['name'];
            $restaurant->description = $restaurante['description'];
            $restaurant->address = $restaurante['address'];
            $restaurant->city = $restaurante['city'];
            $restaurant->url_photo = $restaurante['url_photo'];
            $restaurant->number_stockpiles = $restaurante['number_stockpiles'];
            $restaurant->save();
        }
    }
    
    public function run()
    {
        self::seedRestaurant();
        $this->command->info('Tabla restaurantes inicializada con datos');
    }
}
