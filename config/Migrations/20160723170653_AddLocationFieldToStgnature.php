<?php
use Migrations\AbstractMigration;

class AddLocationFieldToStgnature extends AbstractMigration
{

    public function up()
    {

        $this->table('signatures')
            ->addColumn('location', 'string', [
                'default' => null,
                'length' => 255,
                'null' => true,
            ])
            ->addColumn('geo_lat', 'decimal', [
                'default' => null,
                'length' => 10,
                'null' => true,
                'precision' => 10,
                'scale' => 8,
            ])
            ->addColumn('geo_lng', 'decimal', [
                'default' => null,
                'null' => true,
                'precision' => 11,
                'scale' => 8,
            ])
            ->update();
    }

    public function down()
    {

        $this->table('signatures')
            ->removeColumn('location')
            ->removeColumn('geo_lat')
            ->removeColumn('geo_lng')
            ->update();
    }
}
