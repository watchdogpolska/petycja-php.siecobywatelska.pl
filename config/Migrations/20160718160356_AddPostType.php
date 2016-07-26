<?php
use Migrations\AbstractMigration;

class AddPostType extends AbstractMigration
{

    public function up()
    {

        $this->table('posts')
            ->addColumn('type', 'string', [
                'default' => 'text',
                'length' => 45,
                'null' => false,
            ])
            ->addColumn('link_target', 'string', [
                'default' => null,
                'length' => 255,
                'null' => true,
            ])
            ->update();
    }

    public function down()
    {

        $this->table('posts')
            ->removeColumn('type')
            ->removeColumn('link_target')
            ->update();
    }
}
