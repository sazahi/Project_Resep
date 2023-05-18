<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class AddPhotoColumnToProduct extends Migration
{
    public function up()
    {
        $fields = [
            "photo" => [
                "type"=> "TEXT",
            ],
        ];

        $this->forge->addColumn('dataresep', $fields);
    }

    public function down()
    {
        $this->forge->dropColumn('dataresep', 'photo');
    }
}