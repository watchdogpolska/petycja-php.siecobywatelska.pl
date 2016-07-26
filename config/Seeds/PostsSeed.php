<?php
use Migrations\AbstractSeed;

/**
 * Posts seed.
 */
class PostsSeed extends AbstractSeed
{
    /**
     * Run Method.
     *
     * Write your database seeder using this method.
     *
     * More information on writing seeders is available here:
     * http://docs.phinx.org/en/latest/seeding.html
     *
     * @return void
     */
    public function run()
    {
        $this->call('UsersSeed');

        $faker = Faker\Factory::create();
        $data = [];

        for ($i = 0; $i < 100; $i++) {
            $data[] = [
                'title' => $faker->sentence(5, true),
                'content' => '<p>' . implode('</p><p>', $faker->paragraphs(rand(3, 20), false)) . '</p>',
                'created' => date('Y-m-d H:i:s'),
                'user_id' => $faker->numberBetween(1, 20),
                'state' => $faker->randomElement(['published', 'pinned', 'draft'])
            ];
        }

        $table = $this->table('posts');
        $table->insert($data)->save();
    }
}
