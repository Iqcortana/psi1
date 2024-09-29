<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();
        // factory user super admin
        \App\Models\User::create([
            'name' => 'Super Admin',
            'email' => 'su-admin@gmail.com',
            'email_verified_at' => now(),
            'role' => 'super-admin',
            'password' => bcrypt('12345678'),
        ]);

        // factory category (*jika ditambah, maka tambah juga opsi badge di table filament)
        \App\Models\Category::create([
            'category' => 'informasi',
        ]);
        \App\Models\Category::create([
            'category' => 'promosi',
        ]);
        \App\Models\Category::create([
            'category' => 'blog',
        ]);

        // factory post
        \App\Models\Post::create([
            'title' => 'Cara Memesan Pengantaran Barang Anda',
            'slug' => 'cara-memesan-pengantaran-barang-anda',
            'category_id' => mt_rand(1,3),
            'blog' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Illum fugit quidem autem deleniti aliquam blanditiis voluptatem tempore dolorem doloribus praesentium! Ad dolor iste repellat veniam, repudiandae recusandae numquam magni sequi quasi voluptatem nobis corporis facere! Earum omnis autem cupiditate commodi, accusamus magnam itaque ratione molestias vel consequatur quidem, est aliquid sapiente eum saepe animi nostrum quae alias minus ipsa. Dolor, et quasi veritatis ipsa, minima tempora quod rem veniam officia facere iure possimus. Dolore suscipit fuga quaerat voluptate facere aspernatur dolorem quos nulla dignissimos vero nam corporis libero atque illum quibusdam omnis, eaque officia, rem provident explicabo magni molestiae? Cum!',
        ]);
    }
}
