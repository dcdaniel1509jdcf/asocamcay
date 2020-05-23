<?php

use Illuminate\Database\Seeder;
use App\Home;
class HomeTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = array(
			[
				'homecode' 			=> '21052020',
				'homedesc' 			=> 'Esta organización con el Apoyo de la Fundación Casa Campesina Cayambe, se dedica básicamente a la producción y comercialización de productos agropecuarios con enfoque agroecológico, luchando permanentemente por concretar un sistema con características de sostenibilidad en los ámbitos social, económico y ambiental',
				'homeimg1' 	=> null,
				'homeimg2' 	=> null,
				'homeimg3' 	=> null,
				'homeimg4' 	=> null,
                'homeimg5' 	=> null,
                'homedir' 	=> null,
                'hometelf' 	=> null,
                'homeemail' 	=> null,
				'created_at' 	=> new DateTime,
				'updated_at' 	=> new DateTime,
				
            ]
        );

		Home::insert($data);
    }
}
