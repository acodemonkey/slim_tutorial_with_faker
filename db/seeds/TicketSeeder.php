<?php

use Phinx\Seed\AbstractSeed;

class TicketSeeder extends AbstractSeed{
	
	public function run(){

		$faker = Faker\Factory::create();
		$faker->addProvider(new Faker\Provider\Lorem($faker));
		$data = [];

		for($i = 0; $i < 100; ++$i){
			$data[] = [
				'title' => $faker->text,
				'description' => $faker->sentence(10),
				'component_id' => $faker->numberBetween(1,10)
			];

		}

		$this->insert('tickets', $data);

	}

}