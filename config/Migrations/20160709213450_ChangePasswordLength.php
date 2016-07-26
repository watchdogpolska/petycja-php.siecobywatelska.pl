<?php
use Migrations\AbstractMigration;

class ChangePasswordLength extends AbstractMigration
{

    public function up()
    {
        $this->table('users')
            ->changeColumn('password', 'string', [
                'length' => 255,
            ])
            ->update();
    }

    public function down()
    {
        $this->table('users')
            ->changeColumn('password', 'string', [
                'default' => null,
                'length' => 40,
                'null' => false,
            ])
            ->update();
    }
}
