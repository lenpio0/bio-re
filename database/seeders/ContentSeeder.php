<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use DB;

class ContentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('contents')->insert([
            'mail' => 'email@example.test',
            'tel' => '06 42 06 96 66',
            'tiktok' => 'https://www.tiktok.com',
            'adress1' => '',
            'adress2' => '',
            'fb' => 'https://www.facebook.com',
            'insta' => 'https://www.instagram.com',
            'resonance' => 'Bilan complet 2h à 2h30 : 80 €

Séance spécifique 1h (arrêt tabac, suivi douleurs chroniques,..) : 45 €',
            'massage' => 'Massage énergétique 1h20 : 75€

Séance à distance de Lahochi 45min à 1h : 20 €',
            'pp' => '/storage/image/BX6VmTJEA5quASgEvAc7Pqj4jpYgq2lNmPwujPfG.jpg'
        ]);
    }
}
