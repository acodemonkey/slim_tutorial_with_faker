<?php

use Phinx\Seed\AbstractSeed;

class ComponentSeeder extends AbstractSeed{

	public function run(){

		$faker = Faker\Factory::create();
		$faker->addProvider(new Faker\Provider\Lorem($faker));

		$data = [];
		for($i = 0; $i < 10; ++$i){
			$data[] = [
				'component' => $faker->text
			];
		}
		$this->insert('components', $data);

	}

}