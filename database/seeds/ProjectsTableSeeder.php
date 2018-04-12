<?php

use Illuminate\Database\Seeder;

class ProjectsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // $users = App\User::all();
        // $users->each(function ($user) {
        // 	$user->projects()->save(
        // 		factory(App\Project::class)->make()
        // 	);
        // });

        // factory(App\Article::class, 5)->create();

        for($i = 0; $i < 5; $i++) {
        $users = App\User::all();
            $users->each(function ($user) {
                $user->projects()->save(
                    factory(App\Project::class)->make()
                );
            });
        }

    }
}
