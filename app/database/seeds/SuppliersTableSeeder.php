<?php 

class SuppliersTableSeeder extends Seeder {

    public function run()
    {
        DB::table('suppliers')->delete();

        Supplier::create(array(
        	'title' => 'LEGO',
        	'description' => 'Constructor toys', 
        	'logo' => 'someimage.jpg'
        	));
    	

        Supplier::create(array(
        	'title' => 'Something',
        	'description' => 'Another toy manufacture supplier', 
        	'logo' => 'anotherCoolImage.jpg'
        	));


    }

}