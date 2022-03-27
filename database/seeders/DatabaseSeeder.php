<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Category;
use App\Models\Notif;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {

        User::create([
            'name' => 'Along Hidayat',
            'username' => 'alonghidayat',
            'email' => 'alonghidayat@gmail.com',
            'password' => bcrypt('12345')
        ]); 

        // User::create([
        //     'name' => 'Muhamad Taufik',
        //     'email' => 'muhamadtaufik@gmail.com',
        //     'password' => bcrypt('54321')
        // ]); 

        User::factory(3)->create();

        Category::create([
            'name' => 'Web Programming',
            'slug' => 'web-programming'
        ]);

        Category::create([
            'name' => 'Web Design',
            'slug' => 'web-design'
        ]);

        Category::create([
            'name' => 'Personal',
            'slug' => 'personal'
        ]);

        Notif::factory(20)->create();

        // Notif::create([
        //     'title' => 'Judul Pertama',
        //     'slug' => 'judul-pertama',
        //     'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Illum exercitationem voluptas distinctio itaque eos amet iusto deleniti similique.',
        //     'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Illum exercitationem voluptas distinctio itaque eos amet iusto deleniti similique. Facilis architecto nobis recusandae, fugiat eaque harum velit totam a dolores fugit nulla tempora quas ab aspernatur unde quae? Voluptate nesciunt autem, magni placeat fugiat adipisci, doloremque veritatis nostrum numquam reprehenderit praesentium eos sit a eum ratione corporis, culpa ipsum id facere nulla totam exercitationem architecto dolor ducimus? Id tempore, odit, accusantium voluptatum fugiat provident nulla omnis sapiente labore debitis perspiciatis enim eligendi, incidunt pariatur ea voluptas sit eos a assumenda animi cupiditate quo laboriosam modi temporibus. Libero eligendi repellendus autem pariatur?',
        //     'category_id' => 1,
        //     'user_id' => 1
        // ]); 

        // Notif::create([
        //     'title' => 'Judul Ke Dua',
        //     'slug' => 'judul-kedua',
        //     'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Illum exercitationem voluptas distinctio itaque eos amet iusto deleniti similique.',
        //     'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Illum exercitationem voluptas distinctio itaque eos amet iusto deleniti similique. Facilis architecto nobis recusandae, fugiat eaque harum velit totam a dolores fugit nulla tempora quas ab aspernatur unde quae? Voluptate nesciunt autem, magni placeat fugiat adipisci, doloremque veritatis nostrum numquam reprehenderit praesentium eos sit a eum ratione corporis, culpa ipsum id facere nulla totam exercitationem architecto dolor ducimus? Id tempore, odit, accusantium voluptatum fugiat provident nulla omnis sapiente labore debitis perspiciatis enim eligendi, incidunt pariatur ea voluptas sit eos a assumenda animi cupiditate quo laboriosam modi temporibus. Libero eligendi repellendus autem pariatur?',
        //     'category_id' => 1,
        //     'user_id' => 1
        // ]); 

        // Notif::create([
        //     'title' => 'Judul Ke Tiga',
        //     'slug' => 'judul-ketiga',
        //     'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Illum exercitationem voluptas distinctio itaque eos amet iusto deleniti similique.',
        //     'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Illum exercitationem voluptas distinctio itaque eos amet iusto deleniti similique. Facilis architecto nobis recusandae, fugiat eaque harum velit totam a dolores fugit nulla tempora quas ab aspernatur unde quae? Voluptate nesciunt autem, magni placeat fugiat adipisci, doloremque veritatis nostrum numquam reprehenderit praesentium eos sit a eum ratione corporis, culpa ipsum id facere nulla totam exercitationem architecto dolor ducimus? Id tempore, odit, accusantium voluptatum fugiat provident nulla omnis sapiente labore debitis perspiciatis enim eligendi, incidunt pariatur ea voluptas sit eos a assumenda animi cupiditate quo laboriosam modi temporibus. Libero eligendi repellendus autem pariatur?',
        //     'category_id' => 2,
        //     'user_id' => 1
        // ]); 

        // Notif::create([
        //     'title' => 'Judul Ke Empat',
        //     'slug' => 'judul-keempat',
        //     'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Illum exercitationem voluptas distinctio itaque eos amet iusto deleniti similique.',
        //     'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Illum exercitationem voluptas distinctio itaque eos amet iusto deleniti similique. Facilis architecto nobis recusandae, fugiat eaque harum velit totam a dolores fugit nulla tempora quas ab aspernatur unde quae? Voluptate nesciunt autem, magni placeat fugiat adipisci, doloremque veritatis nostrum numquam reprehenderit praesentium eos sit a eum ratione corporis, culpa ipsum id facere nulla totam exercitationem architecto dolor ducimus? Id tempore, odit, accusantium voluptatum fugiat provident nulla omnis sapiente labore debitis perspiciatis enim eligendi, incidunt pariatur ea voluptas sit eos a assumenda animi cupiditate quo laboriosam modi temporibus. Libero eligendi repellendus autem pariatur?',
        //     'category_id' => 2,
        //     'user_id' => 2
        // ]); 

    }
}
