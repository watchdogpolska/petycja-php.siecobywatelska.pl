<?php
use Migrations\AbstractMigration;

class AddUserIdToPosts extends AbstractMigration
{
    /**
     * Change Method.
     *
     * More information on this method is available here:
     * http://docs.phinx.org/en/latest/migrations.html#the-change-method
     * @return void
     */
    public function change()
    {
        $table = $this->table('posts');
        $table->addColumn('user_id', 'integer', [
                  'limit' => 10,
                  'signed' => false,
                  'null' => true
              ])
              ->addIndex(['user_id'], ['name' => 'fk_posts_users_idx'])
              ->addForeignKey('user_id', 'users', 'id', ['delete' => 'SET_NULL', 'update' => 'NO_ACTION'])
              ->save();
    }
}
