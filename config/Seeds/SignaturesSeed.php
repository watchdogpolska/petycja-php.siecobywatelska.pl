<?php
use Migrations\AbstractSeed;

/**
 * Signatures seed.
 */
class SignaturesSeed extends AbstractSeed
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
        $faker = $faker = Faker\Factory::create();

        $data = [];

        for ($i = 0; $i < 100; $i++) {
            $data[] = [
                'first_name' => $faker->firstName,
                'last_name' => $faker->lastName,
                'email' => $faker->safeEmail,
                'comment' => implode('. ', $faker->sentences($faker->numberBetween(1, 4))),
                'newsletter' => $faker->randomElement([1, 0]),
                'created' => $faker->iso8601()
            ];
        };

        $table = $this->table('signatures');
        $table->insert($data)->save();
    }
}
