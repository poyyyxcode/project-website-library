<?php

namespace Database\Seeders;

use App\Models\Buku;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BukuSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $bukus = [
            [
                'slug' => 'how-to-read-a-book',
                'title' => 'How to Read a Book',
                'deskripsi_singkat' => 'Originally published in 1940, this book is a rare phenomenon, a living classic that introduces and elucidates the various levels of reading and how to achieve them—from elementary reading, through systematic skimming and inspectional reading, to speed reading. Readers will learn when and how to “judge a book by its cover,” and also how to X-ray it, read critically, and extract the author\'s message from the text.',
                'category' => 'Non Fiksi',
                'is_tersedia' => true,
                'image' => 'how-to-read-a-book.jpg',
                'isbn' => '0671212095',
            ],
            [
                'slug' => 'introduction-to-linear-algebra',
                'title' => 'Introduction to Linear Algebra',
                'deskripsi_singkat' => 'Linear algebra now rivals or surpasses calculus in importance for people working in quantitative fields of all kinds: engineers, scientists, economists and business people. Gilbert Strang has taught linear algebra at MIT for more than 50 years and the course he developed has become a model for teaching around the world.',
                'category' => 'Non Fiksi',
                'is_tersedia' => true,
                'image' => 'how-to-read-a-book.jpg',
                'isbn' => '1733146679',
            ],
            [
                'slug' => 'introduction-to-quantum-mechanics',
                'title' => 'Introduction to Quantum Mechanics',
                'deskripsi_singkat' => 'Changes and additions to the new edition of this classic textbook include a new chapter on symmetries, new problems and examples, improved explanations, more numerical problems to be worked on a computer, new applications to solid state physics, and consolidated treatment of time-dependent potentials.',
                'category' => 'Non Fiksi',
                'is_tersedia' => true,
                'image' => 'how-to-read-a-book.jpg',
                'isbn' => '1107189632',
            ],
            [
                'slug' => 'the-little-prince',
                'title' => 'The Little Prince',
                'deskripsi_singkat' => 'Few stories are as widely read and as universally cherished by children and adults alike as The Little Prince. When a pilot crashes in the Sahara Desert, he meets a little boy who asks him to draw a sheep. Gradually the Little Prince reveals more about himself: He comes from a small asteroid, where he lived alone until a rose grew there.',
                'category' => 'Fiksi',
                'is_tersedia' => true,
                'image' => 'the-little-prince.jpg',
                'isbn' => '0152023984',
            ],
            [
                'slug' => 'around-the-world-in-80-days',
                'title' => 'Around the World in 80 Days',
                'deskripsi_singkat' => 'Around the World in Eighty Days is a classic adventure novel by the French writer Jules Verne, published in 1873. In the story, Phileas Fogg of London and his newly employed French valet Passepartout attempt to circumnavigate the world in 80 days on a £20,000 wager (roughly £1.6 million today) set by his friends at the Reform Club. It is one of Verne\'s most acclaimed works.The story starts in London on Tuesday, October 1, 1872.',
                'category' => 'Fiksi',
                'is_tersedia' => true,
                'image' => 'the-little-prince.jpg',
                'isbn' => '1503215156',
            ],
        ];
        foreach($bukus as $buku){
            DB::table('bukus')->insert($buku);
        }
    }
}
