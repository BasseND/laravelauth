<?php

namespace Database\Seeders;

use App\Models\Book;
use App\Models\User;
use App\Models\Author;
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
        // User::truncate();
        // Author::truncate();

        // $user = User::factory(10)->create();
        $book = Book::factory(10)->create();

        // Author::create([
        //    'name' => "Bamba",
        //    'slug' => "bamba",
        // ]);

        // Author::create([
        //     'name' => "Moustapha",
        //     'slug' => "moustapha",
        //  ]);

        //  Author::create([
        //     'name' => "Ahmadou",
        //     'slug' => "ahmadou",
        //  ]);

        // Book::create([
        //     'title' => 'Mouwahibou',
        //     'description' => 'Khassida 01',
        //     'date_publication' => '12/10/1918',
        //     'page_nbr' => '200',
        //     'slug' => 'mouwahibou',
        //     'user_id' => 1,
        //     'authors_id' => 1
        // ]);

        // Book::create([
        //     'title' => 'Assirou',
        //     'description' => 'Khassida 02',
        //     'date_publication' => '12/10/1918',
        //     'page_nbr' => '200',
        //     'slug' => 'assirou',
        //     'user_id' => 2,
        //     'authors_id' => 2
        // ]);

        // Book::create([
        //     'title' => 'Mounawirou Soudour',
        //     'description' => 'Khassida 03',
        //     'date_publication' => '12/10/1918',
        //     'page_nbr' => '200',
        //     'slug' => 'mounawirou-soudour',
        //     'user_id' => 3,
        //     'authors_id' => 3
        // ]);

        // Book::create([
        //     'title' => 'Nourou Daarayni',
        //     'description' => 'Khassida 03',
        //     'date_publication' => '12/10/1918',
        //     'page_nbr' => '200',
        //     'slug' => 'nourou-daarayni',
        //     'user_id' => 3,
        //     'authors_id' => 3
        // ]);


    }
}
