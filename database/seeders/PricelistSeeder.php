<?php

namespace Database\Seeders;

use App\Models\Pricelist;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Log;

use function Laravel\Prompts\table;

class PricelistSeeder extends Seeder
{
  /**
   * Run the database seeds.
   */
  public function run(): void
  {

    $csvFile = fopen(base_path("database/data/pricelist.csv"), "r");

    while (($data = fgetcsv($csvFile, 2000, ";")) !== FALSE) {
      Pricelist::create([
        "name" => $data['1'],
        "picture" => $data['2'],
        "price" => $data['3'],
        "advantages" => $data['4']
      ]);
    }

    fclose($csvFile);
  }
}
