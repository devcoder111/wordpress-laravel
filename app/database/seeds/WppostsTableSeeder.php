<?php

// Composer: "fzaninotto/faker": "v1.3.0"
use Faker\Factory as Faker;

class WppostsTableSeeder extends Seeder {

	public function run()
	{
        DB::table('wpposts')->insert(array(
            array('id'=>4, 'post_type'=>"about", 'post_author'=>1,'post_content'=>"Hello from Pamela"),
            array('id'=>5, 'post_type'=>"about", 'post_author'=>1,'post_content'=>"Second Hello"),
            array('id'=>6, 'post_author'=>1,'post_type'=>"Siamese",'post_content'=>"borrowed Siamese idea"),
            array('id'=>7, 'post_author'=>1,'post_type'=>"Siamese", 'post_content'=>"Another borrowed Siamese idea"),
        ));
		}
}