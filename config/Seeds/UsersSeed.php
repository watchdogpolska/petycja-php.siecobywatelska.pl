<?php
use Cake\Auth\DefaultPasswordHasher;
use Migrations\AbstractSeed;

/**
 * Users seed.
 */
class UsersSeed extends AbstractSeed
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
        $hasher = new DefaultPasswordHasher();
        $faker = $faker = Faker\Factory::create();
        ;
        $data = [
            [
                'login' => 'user1',
                'display_name' => $faker->name,
                'email' => 'user1@example.com',
                'password' => $hasher->hash('password')
            ],
            [
                'login' => 'user2',
                'display_name' => $faker->name,
                'email' => 'user2@example.com',
                'password' => $hasher->hash('password')
            ],
            [
                'login' => 'user3',
                'display_name' => $faker->name,
                'email' => 'user3@example.com',
                'password' => $hasher->hash('password')
            ]
        ];

        for ($i = 0; $i < 20; $i++) {
            $data[] = [
                'login' => $faker->lastName . $faker->numberBetween(1, 5555),
                'email' => $faker->safeEmail,
                'password' => $hasher->hash('password')
            ];
        }

        $table = $this->table('users');
        $table->insert($data)->save();
    }
}
