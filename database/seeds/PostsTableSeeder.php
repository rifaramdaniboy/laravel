<?php

use Illuminate\Database\Seeder;

class PostsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $posts = [
            ['title'=>'Tips mencari teman', 'content'=>'ulah itungan'],
            ['title'=>'Haruskah Menunda Nikah?', 'content'=>'lorem ipsum'],
            ['title'=>'Membangun Visi Misi Keluarga', 'content'=>'lorem ipsum'],
            ['title'=>'Teman Teman saya pada bucin','content'=>'garila'] 
        ];    
            // masukkan data ke database
            DB::table('posts')->insert($posts);  
    }
}
