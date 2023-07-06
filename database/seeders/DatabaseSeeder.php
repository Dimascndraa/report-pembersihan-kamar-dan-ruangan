<?php

namespace Database\Seeders;

use App\Models\BarangCategory;
use App\Models\ControlPanel;
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

        Room::create([
            'name' => "IT",
            'room_code' => "IT",
            'floor' => '1'
        ]);

        Room::create([
            'name' => "MARKETING",
            'room_code' => "MKT",
            'floor' => '1'
        ]);

        Room::create([
            'name' => "ADMINISTRASI RADIOLOGI",
            'room_code' => "ADM RAD",
            'floor' => '1'
        ]);

        Room::create([
            'name' => "EX RUANG DIREKTUR",
            'room_code' => "EX. DIR",
            'floor' => '1'
        ]);

        Room::create([
            'name' => "EX KABAG",
            'room_code' => "EX. KBG",
            'floor' => '1'
        ]);

        Room::create([
            'name' => "EX MANAJEMEN",
            'room_code' => "EX. MNJMN",
            'floor' => '1'
        ]);

        Room::create([
            'name' => "EX OWNER",
            'room_code' => "EX. OWN",
            'floor' => '1'
        ]);

        Room::create([
            'name' => "EX PENDAFTARAN BPJS",
            'room_code' => "EX. PENDF. BPJS",
            'floor' => '1'
        ]);

        Room::create([
            'name' => "EX POLI BEDAH",
            'room_code' => "EX. BEDAH",
            'floor' => '1'
        ]);

        Room::create([
            'name' => "EX PT",
            'room_code' => "EX. PT",
            'floor' => '1'
        ]);

        Room::create([
            'name' => "FARMASI RAJAL & RANAP",
            'room_code' => "FARM. RJL & RNP",
            'floor' => '1'
        ]);

        Room::create([
            'name' => "GUDANG FARMASI",
            'room_code' => "GF",
            'floor' => '1'
        ]);

        Room::create([
            'name' => "KANTIN 1",
            'room_code' => "KNTN 01",
            'floor' => '1'
        ]);

        Room::create([
            'name' => "LABORATORIUM",
            'room_code' => "LAB",
            'floor' => '1'
        ]);

        Room::create([
            'name' => "LABORATORIUM MORULA",
            'room_code' => "LAB. MOR",
            'floor' => '1'
        ]);

        Room::create([
            'name' => "NURSE STATION POLI KANDUNGAN",
            'room_code' => "N.S OBGYN",
            'floor' => '1'
        ]);

        Room::create([
            'name' => "POLI BEDAH",
            'room_code' => "PO. BDH",
            'floor' => '1'
        ]);

        Room::create([
            'name' => "POLI KANDUNGAN",
            'room_code' => "PO. KANDUNGAN",
            'floor' => '1'
        ]);

        Room::create([
            'name' => "REKAM MEDIS BARU",
            'room_code' => "RM. BRU",
            'floor' => '1'
        ]);

        Room::create([
            'name' => "RUANG GANTI MORULA",
            'room_code' => "GNTI. MOR",
            'floor' => '1'
        ]);

        Room::create([
            'name' => "RUANG KONTROL RADIOLOGI",
            'room_code' => "KON. RAD",
            'floor' => '1'
        ]);

        Room::create([
            'name' => "RUANG LAKTASI",
            'room_code' => "LKTSI",
            'floor' => '1'
        ]);

        Room::create([
            'name' => "MENS ROOM MORULA",
            'room_code' => "MENS. RM. MOR",
            'floor' => '1'
        ]);

        Room::create([
            'name' => "RUANG PEMERIKSAAN RADIOLOGI",
            'room_code' => "PEM. RAD",
            'floor' => '1'
        ]);

        Room::create([
            'name' => "RUANG TINDAKAN MORULA",
            'room_code' => "RTN. MOR",
            'floor' => '1'
        ]);

        Room::create([
            'name' => "RUANG TUNGGU MORULA",
            'room_code' => "RT.MOR",
            'floor' => '1'
        ]);

        Room::create([
            'name' => "RUANG TUNGGU POLI",
            'room_code' => "RT. PO",
            'floor' => '1'
        ]);

        Room::create([
            'name' => "RUANG TUNGGU RADIOLOGI",
            'room_code' => "RT. RAD",
            'floor' => '1'
        ]);

        Room::create([
            'name' => "RUANGAN PT",
            'room_code' => "R. PT",
            'floor' => '1'
        ]);

        Room::create([
            'name' => "TINDAKAN KANDUNGAN",
            'room_code' => "TNDKN. KNDNGN",
            'floor' => '1'
        ]);

        ControlPanel::create([
            'instance_name' => "RSIA LIVASYA",
            'instance_code' => "RSLV",
            'application_name' => "Inventaris Barang"
        ]);
    }
}
