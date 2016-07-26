<?php
use Cake\Auth\DefaultPasswordHasher;
use Migrations\AbstractMigration;

class InsertFirstAdmin extends AbstractMigration
{
   /**
    * Migrate Up.
    */
    public function up()
    {
        $hasher = new DefaultPasswordHasher();

        $user = [
            'login' => 'root',
            'display_name' => '',
            'email' => 'user1@example.com',
            'password' => $hasher->hash('root')
        ];

        $table = $this->table('users');
        $table->insert($user);
        $table->saveData();
    }

    /**
     * Migrate Down.
     */
    public function down()
    {
        $this->execute('DELETE FROM users WHERE login = \'root\'');
    }
}
