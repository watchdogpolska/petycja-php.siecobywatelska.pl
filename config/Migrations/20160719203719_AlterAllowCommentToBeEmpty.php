<?php
use Migrations\AbstractMigration;

class AlterAllowCommentToBeEmpty extends AbstractMigration
{

    public function up()
    {
        $this->table('signatures')
            ->changeColumn('comment', 'string', [
                'null' => true,
            ])
            ->update();
    }

    public function down()
    {
        $this->table('signatures')
            ->changeColumn('comment', 'string', [
                'default' => null,
                'length' => 1000,
                'null' => false,
            ])
            ->update();
    }
}
