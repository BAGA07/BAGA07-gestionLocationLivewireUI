<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PermissionTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table("permissions")->insert([
            ["nom" => "Ajouter un client"],
            ["nom" => "Consulter un client"],
            ["nom" => "Editer un client"],

            ["nom" => "Ajouter une location"],
            ["nom" => "Consulter une location"],
            ["nom" => "Editer une location"],

            ["nom" => "Ajouter un article"],
            ["nom" => "Consulter un article"],
            ["nom" => "Editer un article"],
        ]);
    }
}
