<?php

namespace Database\Seeders;

use App\Models\BarangCategory;
use App\Models\ControlPanel;
use App\Models\KelasRawat;
use App\Models\Room;
use App\Models\User;
use Illuminate\Database\Seeder;

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

        User::create([
            'name' => 'Dimas Candra',
            'username' => 'd.candra',
            'is_admin' => 1,
            'email' => 'dimascndraa18@gmail.com',
            'password' => bcrypt('password'),
        ]);

        KelasRawat::create([
            'name' => "SUPERIOR",
        ]);
        KelasRawat::create([
            'name' => "DELUXE 1",
        ]);
        KelasRawat::create([
            'name' => "DELUXE 2",
        ]);
        KelasRawat::create([
            'name' => "VIP",
        ]);
        KelasRawat::create([
            'name' => "ISOLASI ANAK",
        ]);
        KelasRawat::create([
            'name' => "ISOLASI DEWASA",
        ]);
        KelasRawat::create([
            'name' => "NICU",
        ]);
        KelasRawat::create([
            'name' => "ICU/HCU/PICU",
        ]);
        KelasRawat::create([
            'name' => "PERINATOLOGI",
        ]);

        Room::create([
            'kelas_rawat_id' => 1,
            'name' => "SUPERIOR ANAK",
            'room_number' => "216"
        ]);
        Room::create([
            'kelas_rawat_id' => 1,
            'name' => "SUPERIOR ANAK",
            'room_number' => "217"
        ]);
        Room::create([
            'kelas_rawat_id' => 1,
            'name' => "SUPERIOR ANAK",
            'room_number' => "218"
        ]);
        Room::create([
            'kelas_rawat_id' => 1,
            'name' => "SUPERIOR ANAK",
            'room_number' => "219"
        ]);
        Room::create([
            'kelas_rawat_id' => 1,
            'name' => "SUPERIOR ANAK",
            'room_number' => "220"
        ]);

        ControlPanel::create([
            'instance_name' => "RSIA LIVASYA",
            'instance_code' => "RSLV",
            'application_name' => "Inventaris Barang"
        ]);
    }
}
