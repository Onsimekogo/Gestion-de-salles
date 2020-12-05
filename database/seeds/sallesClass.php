<?php
use Illuminate\Database\Seeder;
class groupeClass extends Seeder {
    public function run(){
        DB::table('groupe')->delete();

        DB::table('groupe')->insert([
            
        ]);

    }
}        


?>            