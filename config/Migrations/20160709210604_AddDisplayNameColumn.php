<?php
use Migrations\AbstractMigration;

class AddDisplayNameColumn extends AbstractMigration
{

    public function up()
    {
        $this->table('users')
            ->addColumn('display_name', 'string', [
                'default' => 'User',
                'length' => 45,
                'null' => false,
            ])
            ->update();
    }

    public function down()
    {
        $this->table('users')
            ->removeColumn('display_name')
            ->update();
    }
}
