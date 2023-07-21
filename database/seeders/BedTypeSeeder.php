<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Room\BedType;

class BedTypeSeeder extends Seeder
{

// Single Bed (Twin Bed):
//     Tempat tidur tunggal untuk satu orang tamu.
//     Cocok untuk kamar-kamar tunggal atau kamar untuk tamu yang menginap sendiri.

// Double Bed (Full Bed):
//     Tempat tidur ukuran ganda untuk dua orang tamu.
//     Cocok untuk kamar-kamar double atau twin-sharing.

// Queen Bed:
//     Tempat tidur ukuran besar yang lebih lebar dari double bed.
//     Cocok untuk pasangan yang ingin ruang tidur yang lebih luas dan nyaman.

// King Bed:
//     Tempat tidur ukuran besar yang lebih lebar dari queen bed.
//     Cocok untuk pasangan yang ingin kamar tidur yang mewah dan luas.

// Super King Bed (California King Bed):
//     Tempat tidur ukuran raja yang lebih lebar dari king bed.
//     Cocok untuk pasangan yang menginginkan tempat tidur yang sangat luas dan mewah.

// Bunk Bed:
//     Tempat tidur bertingkat yang cocok untuk beberapa tamu dalam satu kamar.
//     Biasanya digunakan di kamar keluarga atau kamar berbagi untuk tamu dengan anggaran terbatas.

// Sofa Bed:
//     Tempat tidur yang tersembunyi di dalam sofa dan dapat dikeluarkan saat diperlukan.
//     Cocok untuk memberikan tambahan tempat tidur di kamar tamu atau suite.

// Rollaway Bed (Extra Bed):
//     Tempat tidur portabel yang dapat ditambahkan ke dalam kamar jika dibutuhkan.
//     Digunakan untuk memberikan tambahan tempat tidur pada kamar dengan kapasitas lebih besar.

// Cribs (Baby Cots):
//     Tempat tidur bayi yang aman dan nyaman untuk digunakan oleh tamu yang membawa bayi atau balita.

// Day Bed:
//     Tempat tidur yang didesain seperti sofa, digunakan untuk beristirahat dan bersantai selama siang hari.

// Trundle Bed:
//     Tempat tidur tambahan yang disimpan di bawah tempat tidur utama dan dapat ditarik keluar saat dibutuhkan.

    public function run(): void
    {
        $bedTypes = [
            [
                'name' => 'Single Bed',
                'description' => 'Tempat tidur tunggal untuk satu orang tamu. Cocok untuk kamar-kamar tunggal atau kamar untuk tamu yang menginap sendiri.',
            ],
            [
                'name' => 'Double Bed',
                'description' => 'Tempat tidur ukuran ganda untuk dua orang tamu. Cocok untuk kamar-kamar double atau twin-sharing.',
            ],
            [
                'name' => 'Queen Bed',
                'description' => ' Tempat tidur ukuran besar yang lebih lebar dari double bed. Cocok untuk pasangan yang ingin ruang tidur yang lebih luas dan nyaman.',
            ],
            [
                'name' => 'King Bed',
                'description' => 'Tempat tidur ukuran besar yang lebih lebar dari queen bed. Cocok untuk pasangan yang ingin kamar tidur yang mewah dan luas.',
            ],
            [
                'name' => 'King Bed',
                'description' => 'Tempat tidur ukuran besar yang lebih lebar dari queen bed. Cocok untuk pasangan yang ingin kamar tidur yang mewah dan luas.',
            ],
            [
                'name' => 'Super King Bed',
                'description' => ' Tempat tidur ukuran raja yang lebih lebar dari king bed. Cocok untuk pasangan yang menginginkan tempat tidur yang sangat luas dan mewah.',
            ],
            [
                'name' => 'Bunk Bed',
                'description' => 'Tempat tidur bertingkat yang cocok untuk beberapa tamu dalam satu kamar. Biasanya digunakan di kamar keluarga atau kamar berbagi untuk tamu dengan anggaran terbatas.',
            ],
            [
                'name' => 'Sofa Bed',
                'description' => 'Tempat tidur yang tersembunyi di dalam sofa dan dapat dikeluarkan saat diperlukan. Cocok untuk memberikan tambahan tempat tidur di kamar tamu atau suite.',
            ],
            [
                'name' => 'Rollaway Bed',
                'description' => 'Tempat tidur portabel yang dapat ditambahkan ke dalam kamar jika dibutuhkan. Digunakan untuk memberikan tambahan tempat tidur pada kamar dengan kapasitas lebih besar.',
            ],
            [
                'name' => 'Cribs',
                'description' => 'Tempat tidur bayi yang aman dan nyaman untuk digunakan oleh tamu yang membawa bayi atau balita.',
            ],
            [
                'name' => 'Day Bed',
                'description' => 'Tempat tidur yang didesain seperti sofa, digunakan untuk beristirahat dan bersantai selama siang hari.',
            ],
            [
                'name' => 'Trundle Bed',
                'description' => 'Tempat tidur tambahan yang disimpan di bawah tempat tidur utama dan dapat ditarik keluar saat dibutuhkan.',
            ],
        ];

        // Lakukan proses seeding menggunakan model BedType
        BedType::insert($bedTypes);
    }
}
