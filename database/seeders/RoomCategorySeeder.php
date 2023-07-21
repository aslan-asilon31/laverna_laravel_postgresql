<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Room\RoomCategory as rc;

class RoomCategorySeeder extends Seeder
{
    public function run()
    {

    //     Standard Room:
    // Pengalaman kamar yang nyaman dengan fasilitas dasar untuk mengakomodasi kebutuhan tamu. Ideal untuk pelancong budget yang mencari kenyamanan dan aksesibilitas tanpa harus mengorbankan kualitas.

    // Deluxe Room:
    // Eksplorasi keindahan hidup dengan kemewahan dan ruang yang lebih luas. Nikmati pemandangan yang menakjubkan, fasilitas lengkap, dan kenyamanan tanpa batas untuk memastikan menginap yang luar biasa.

    // Suite Room:
    // Penyempurnaan liburan dengan kemewahan dan privasi. Rasakan ruang tamu pribadi dan area tidur yang elegan, dilengkapi dengan fasilitas modern yang lengkap untuk menikmati tinggal dengan gaya dan kelas.

    // Family Room:
    // Ciptakan kenangan tak terlupakan dengan keluarga. Kamar ini cocok untuk keluarga besar atau rombongan yang ingin bersama-sama dalam kenyamanan dan keterikatan emosional, dilengkapi dengan fasilitas yang cocok untuk semua anggota keluarga.

    // Executive Room:
    // Pengalaman menginap yang ditingkatkan untuk para eksekutif dan pebisnis. Dilengkapi dengan fasilitas bisnis canggih, internet cepat, dan layanan personal untuk memastikan tinggal yang produktif dan efisien.

    // Private Pool Villa:
    // Pelarian pribadi yang istimewa. Ciptakan kenangan abadi dalam villa eksklusif dengan kolam renang pribadi, keindahan alam, dan layanan yang tak tertandingi untuk menghadirkan pengalaman mewah dan intim.

    // Connecting Room:
    // Koneksi emosional dalam privasi. Ideal untuk keluarga atau rombongan yang ingin tetap berdekatan, tetapi dengan ruang pribadi yang terpisah, memungkinkan untuk bersenang-senang bersama dengan kenyamanan yang dihargai.

    // Accessible Room:
    // Perhatian khusus untuk kenyamanan semua tamu. Kamar ini dirancang khusus untuk kebutuhan tamu dengan aksesibilitas yang ramah difabel, memastikan tinggal yang santai dan tidak terlupakan.

    // Presidential Suite:
    // Di atas segalanya, tinggallah seperti seorang presiden. Pengalaman tanpa kompromi dalam suite mewah terbesar, dilengkapi dengan fasilitas premium dan layanan kelas dunia, menjanjikan kenangan istimewa yang tak tertandingi.

        $roomCategories = [
            [
                'name' => 'Standard Room',
                'image' => 'room_category.png',
                'description' => 'Pengalaman kamar yang nyaman dengan fasilitas dasar untuk mengakomodasi kebutuhan tamu. Ideal untuk pelancong budget yang mencari kenyamanan dan aksesibilitas tanpa harus mengorbankan kualitas.',
            ],
            [
                'name' => 'Deluxe Room',
                'image' => 'room_category.png',
                'description' => 'Eksplorasi keindahan hidup dengan kemewahan dan ruang yang lebih luas. Nikmati pemandangan yang menakjubkan, fasilitas lengkap, dan kenyamanan tanpa batas untuk memastikan menginap yang luar biasa.',
            ],
            [
                'name' => 'Suite Room',
                'image' => 'room_category.png',
                'description' => 'Penyempurnaan liburan dengan kemewahan dan privasi. Rasakan ruang tamu pribadi dan area tidur yang elegan, dilengkapi dengan fasilitas modern yang lengkap untuk menikmati tinggal dengan gaya dan kelas.',
            ],
            [
                'name' => 'Family Room',
                'image' => 'room_category.png',
                'description' => 'Ciptakan kenangan tak terlupakan dengan keluarga. Kamar ini cocok untuk keluarga besar atau rombongan yang ingin bersama-sama dalam kenyamanan dan keterikatan emosional, dilengkapi dengan fasilitas yang cocok untuk semua anggota keluarga.',
            ],
            [
                'name' => 'Executive Room',
                'image' => 'room_category.png',
                'description' => 'Pengalaman menginap yang ditingkatkan untuk para eksekutif dan pebisnis. Dilengkapi dengan fasilitas bisnis canggih, internet cepat, dan layanan personal untuk memastikan tinggal yang produktif dan efisien.',
            ],
            [
                'name' => 'Private Pool Villa',
                'image' => 'room_category.png',
                'description' => 'Ciptakan kenangan abadi dalam villa eksklusif dengan kolam renang pribadi, keindahan alam, dan layanan yang tak tertandingi untuk menghadirkan pengalaman mewah dan intim.',
            ],
            [
                'name' => 'Connecting Room',
                'image' => 'room_category.png',
                'description' => 'Ideal untuk keluarga atau rombongan yang ingin tetap berdekatan, tetapi dengan ruang pribadi yang terpisah, memungkinkan untuk bersenang-senang bersama dengan kenyamanan yang dihargai.',
            ],
            [
                'name' => 'Presidential Suite',
                'image' => 'room_category.png',
                'description' => 'Di atas segalanya, tinggallah seperti seorang presiden. Pengalaman tanpa kompromi dalam suite mewah terbesar, dilengkapi dengan fasilitas premium dan layanan kelas dunia, menjanjikan kenangan istimewa yang tak tertandingi.',
            ],
        ];

        // Using Eloquent ORM to insert data
        rc::insert($roomCategories);

        // Alternatively, you can use the DB facade to insert data
        // DB::table('room_categories')->insert($roomCategories);
    }
}
