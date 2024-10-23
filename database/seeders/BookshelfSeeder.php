<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Models\Book;
class BookshelfSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        DB::table('bookshelf')->insert([
            'Code' => 'BYU755',
            'name'=> 'Anavel'
        ]);
        Book::create([
           
            'title'         => 'filosopi amargedom',
            'author'       => 'Gta',
            'year'          => '2023',
            'publisher'     => 'Gat',
            'city'          => 'cianjur',
            'cover'        => 'palaceholder.com/512.png',
            'bookshelf_id'  => '1',
          
        ]);
        
    }
}
