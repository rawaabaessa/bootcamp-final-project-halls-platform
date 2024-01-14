<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\File\FileType;

class FileTypesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $fileTypes = [
            ['name' => 'image'],
            ['name' => 'video'],
            // يمكنك إضافة مزيد من أنواع الملفات هنا
        ];

        FileType::insert($fileTypes);
    }
}
