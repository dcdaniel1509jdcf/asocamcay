<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

use App\Product;

class ProductTableSeeder extends Seeder {

	/**
	 * Run the Products table seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		$data = array(
			[
				'name' 			=> 'uvas',
				'slug' 			=> 'uvas',
				'description' 	=> 'Las uvas vienen en racimos, son pequeñas y dulces.',
				'extract' 		=> 'Las uvas vienen en racimos, son pequeñas y dulces.',
				'price' 		=> 1.25,
				'image' 		=> 'https://mejorconsalud.com/wp-content/uploads/2014/02/uvas-ROJAS.jpg',
				'visible' 		=> 1,
				'created_at' 	=> new DateTime,
				'updated_at' 	=> new DateTime,
				'category_id' 	=> 2
			],
			[
				'name' 			=> 'manzana',
				'slug' 			=> 'manzana',
				'description' 	=> 'La manzana es el fruto comestible de la especie Malus domestica, llamada comúnmente manzano.',
				'extract' 		=> 'La manzana es el fruto comestible de la especie Malus domestica, llamada comúnmente manzano.',
				'price' 		=> 1.00,
				'image' 		=> 'https://www.comenaranjas.com/images/stories/virtuemart/product/manzana-royal.jpg',
				'visible' 		=> 1,
				'created_at' 	=> new DateTime,
				'updated_at' 	=> new DateTime,
				'category_id' 	=> 2
			],
			[
				'name' 			=> 'peras',
				'slug' 			=> 'peras',
				'description' 	=> 'Se denomina pera al fruto de distintas especies del género Pyrus, integrado por árboles caducifolios conocidos comúnmente como perales',
				'extract' 		=> 'Se denomina pera al fruto de distintas especies del género Pyrus, integrado por árboles caducifolios conocidos comúnmente como perales',
				'price' 		=>  1.00,
				'image' 		=> 'https://www.fruteriadevalencia.com/wp-content/uploads/2015/02/BLANQUILLA-buena.jpg',
				'visible' 		=> 1,
				'created_at' 	=> new DateTime,
				'updated_at' 	=> new DateTime,
				'category_id' 	=> 2
			],
			[
				'name' 			=> 'zanahoria',
				'slug' 			=> 'zanahoria',
				'description' 	=> 'Daucus carota subespecie sativus, llamada popularmente zanahoria es una fruta que pertenece a la familia de las umbelíferas, también denominadas apiáceas, y considerada la especie más importante y de mayor consumo dentro de esta familia',
				'extract' 		=> 'Daucus carota subespecie sativus, llamada popularmente zanahoria es una fruta que pertenece a la familia de las umbelíferas, también denominadas apiáceas, y considerada la especie más importante y de mayor consumo dentro de esta familia',
				'price' 		=> 1.00,
				'image' 		=> 'https://jumbocolombiafood.vteximg.com.br/arquivos/ids/3433039-750-750/20257262-1.jpg',
				'visible' 		=> 1,
				'created_at' 	=> new DateTime,
				'updated_at' 	=> new DateTime,
				'category_id' 	=> 1
			],
			[
				'name' 			=> 'coliflor',
				'slug' 			=> 'coliflor',
				'description' 	=> 'La coliflor es una variedad de la especie Brassica oleracea, en el grupo de cultivares Botrytis de la familia Brassicaceae.',
				'extract' 		=> 'La coliflor es una variedad de la especie Brassica oleracea, en el grupo de cultivares Botrytis de la familia Brassicaceae.',
				'price' 		=> 280.00,
				'image' 		=> 'https://www.rebanando.com/media/coliflor_crop.jpg/rh/coliflor-esparragada.jpg',
				'visible' 		=> 1,
				'created_at' 	=> new DateTime,
				'updated_at' 	=> new DateTime,
				'category_id' 	=> 2
			],
			
		);

		Product::insert($data);

	}

}