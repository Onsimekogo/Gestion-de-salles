<?php
use Illuminate\Database\Seeder;
class groupeClass extends Seeder {
    public function run(){
        DB::table('groupe')->delete();

        DB::table('groupe')->insert([
            'nomGroupe' => 'GEI1A',
            'nomGroupe' => 'GEI1B',

            'nomGroupe' => 'GEI2/EE',
            'nomGroupe' => 'GEI2/IT',
            'nomGroupe' => 'GEI3/EE',
            'nomGroupe' => 'GEI3/IT',

            'nomGroupe' => 'GC1A',
            'nomGroupe' => 'GC1B',
            'nomGroupe' => 'GC1C',
            'nomGroupe' => 'GC1D',

            'nomGroupe' => 'GC2A',
            'nomGroupe' => 'GC2B',
            'nomGroupe' => 'GC2C',
            'nomGroupe' => 'GC2D',

            'nomGroupe' => 'GC3A',
            'nomGroupe' => 'GC3B',
            'nomGroupe' => 'GC3C',
            'nomGroupe' => 'GC3D',

            'nomGroupe' => 'GME1',
            'nomGroupe' => 'GME2',
            'nomGroupe' => 'GME3',

            'nomGroupe' => 'ER1',
            'nomGroupe' => 'ER2',
            'nomGroupe' => 'ER3',
            
            'nomGroupe' => 'GIM1',
            'nomGroupe' => 'GIM2',
            'nomGroupe' => 'GIM3',
        ]);
    }
}