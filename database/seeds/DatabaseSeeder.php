<?php

use Illuminate\Database\Seeder;
use App\User;
use App\Page;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $user = new User();
        $user->email = 'test@test.com';
        $user->password = bcrypt('test');
        $user->name = 'Test User';
        $user->save();

        $page = new Page();
        $page->title = 'Home Page';
        $page->content = '';
        $page->link = '/';
        $page->slug = strtolower(str_replace(' ', '-', $page->title));
        $page->created_by = $user->id;
        $page->published = true;
        $page->save();
    }
}
