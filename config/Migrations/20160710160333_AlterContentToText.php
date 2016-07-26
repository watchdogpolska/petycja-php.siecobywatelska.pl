<?php
use Migrations\AbstractMigration;

class AlterContentToText extends AbstractMigration
{

    public function change()
    {
        $this->table('posts')
        ->changeColumn('content', 'text', [
            'default' => null,
            'limit' => 4294967295,
            'null' => false
        ])
        ->update();
    }
}
