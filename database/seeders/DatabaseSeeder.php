<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();

        \App\Models\User::factory()->create([
            'name' => 'admin',
            'role' => 'admin',
            'email' => 'admin@gmail.com',
            'password' => Hash::make('admin@gmail.com')
        ]);
        \App\Models\User::factory()->create([
            'name' => 'user',
            'role' => 'user',
            'email' => 'user@gmail.com',
            'password' => Hash::make('user@gmail.com')
        ]);

        $kategoris  =    [
            'Bagasi', 'Elektronik dan gadget', 'Pakaian', 'Aksesoris', 'Dokumen', 'Kantor dan Industri'
        ];
        foreach ($kategoris as $value) {
            DB::table('kategoris')->insert([
                'nama' => $value,
            ]);
        }


        $stasiun = [
            'Tugu Yogyakarta', 'Lempuyangan', 'Maguwo', 'Brambanan', 'Srowot', 'Klaten', 'Ceper', 'Delanggu', 'Gawok', 'Purwosari', 'Solo Balapan', 'Solo Jebres',  'Palur'
        ];

        foreach ($stasiun as $value) {
            DB::table('statiuns')->insert([
                'nama' => $value,
            ]);
        }

        $area = ['Musholla', 'kamar Mandi', 'Kantin', 'Ruang Tunggu', 'Gerbong'];

        foreach ($area as $value) {
            DB::table('areas')->insert([
                'nama' => $value,
            ]);
        }
    }
}
