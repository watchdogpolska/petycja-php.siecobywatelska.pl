<?php
use Migrations\AbstractMigration;

class AddSlugColumn extends AbstractMigration
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
        $this->table('posts')
        ->addColumn('slug', 'string', [
            'limit' => '255',
            'null' => 'false'
        ])->update();
    }
}
