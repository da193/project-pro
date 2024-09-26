<?php

namespace Database\Seeders;
use Illuminate\Database\Seeder;
use App\Models\Livre;

class LivreSeeder extends Seeder
{
    public function run()
    {
        $livres = [
            [
                'title' => 'Introduction to Psychology',
                'author_name' => 'James W. Kalat',
                'category_id' => 1,
                'description' => 'A comprehensive overview of the field of psychology.',
                'book_img' => 'https://example.com/images/introduction_to_psychology.jpg',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'Calculus: Early Transcendentals',
                'author_name' => 'James Stewart',
                'category_id' => 2,
                'description' => 'A detailed introduction to calculus concepts.',
                'book_img' => 'https://example.com/images/calculus_early_transcendentals.jpg',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'Fundamentals of Physics',
                'author_name' => 'David Halliday',
                'category_id' => 3,
                'description' => 'An essential textbook for understanding physics.',
                'book_img' => 'https://example.com/images/fundamentals_of_physics.jpg',
                'created_at' => now(),
                'updated_at' => now(),
            ],
          
   
        ];

        foreach ($livres as $livre) {
            Livre::create($livre);
        }
    }
}
