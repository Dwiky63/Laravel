<?php
namespace Database\Seeders;

use App\Models\News;
use Illuminate\Database\Seeder;
class NewsSeeder extends Seeder
{
   public function run(): void
   {
       News::create([
           'title' => 'Pelatihan Laravel di iDev Semarang',
           'content' => 'iDev menyelenggarakan pelatihan intensif Laravel untuk mahasiswa dan profesional di Semarang.',
           'image' => 'news1.jpg',
           'created_by' => 1, // Diisi oleh user ID 1 (Admin)
       ]);

       News::create([
           'title' => 'Update Fitur Rawuh Event',
           'content' => 'Fitur scan QR Code kini sudah tersedia di platform Rawuh untuk mempermudah check-in tamu.',
           'image' => 'news2.jpg',
           'created_by' => 1,
       ]);
   }
}
