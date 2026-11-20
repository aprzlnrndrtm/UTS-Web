<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Category;
use App\Models\Product;
use Illuminate\Support\Str;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $lauk = Category::where('slug', 'lauk-siap-saji')->firstOrFail()->id;
        $frozen = Category::where('slug', 'frozen-food')->firstOrFail()->id;
        $sambal = Category::where('slug', 'sambal-bumbu')->firstOrFail()->id;

        $items = [
            [$lauk, 'Rendang Daging Sapi', 85000, 'Rendang daging sapi pilihan dimasak perlahan dengan rempah autentik. Higienis, praktis, dan tahan lama dalam kemasan vakum.'],
            [$lauk, 'Abon Sapi Original', 45000, 'Abon sapi gurih dengan tekstur lembut, cocok untuk lauk sehari-hari maupun isian roti.'],
            [$frozen, 'Nugget Ayam Rumahan', 42000, 'Nugget ayam dari daging ayam segar tanpa pengawet berbahaya. Siap digoreng dalam hitungan menit.'],
            [$frozen, 'Ayam Goreng Bumbu Kuning', 55000, 'Ayam berbumbu kuning yang sudah dibumbui matang, tinggal digoreng. Praktis untuk keluarga.'],
            [$sambal, 'Sambal Terasi Original', 25000, 'Sambal terasi pedas gurih dibuat dari cabai segar pilihan dan terasi berkualitas.'],
            [$sambal, 'Sambal Matah', 28000, 'Sambal matah segar khas Bali dengan irisan bawang merah, serai, dan jeruk limau.'],
            [$sambal, 'Bumbu Dasar Kuning', 20000, 'Bumbu dasar kuning siap pakai untuk berbagai masakan: opor, soto, hingga ayam goreng.'],
        ];

        foreach ($items as [$categoryId, $name, $price, $description]) {
            Product::create([
                'category_id' => $categoryId,
                'name' => $name,
                'slug' => Str::slug($name),
                'description' => $description,
                'price' => $price,
                'image' => null,
            ]);
        }
    }
}
