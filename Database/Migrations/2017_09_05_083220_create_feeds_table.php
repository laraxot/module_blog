<?php

declare(strict_types=1);

use Illuminate\Database\Schema\Blueprint;
// ----- models -----
use Modules\Xot\Database\Migrations\XotBaseMigration;

/*
questa tabella non dovrebbe esistere, creata per risolvere:
[2021-08-20 16:35:11] locale.ERROR: SQLSTATE[42S02]: Base table or view not found: 1146 Table 'cvfcmxwn_test sitename.feeds'
doesn't exist (SQL: select count(*) as aggregate from `feeds` where (`feeds`.`id` = restaurant)) {"
url":"https://www.test sitename.com/it/feed/restaurant"
*/

class CreateFeedsTable extends XotBaseMigration {
    /**
     * db up.
     *
     * @return void
     */
    public function up() {
        // -- CREATE --
        $this->tableCreate(
            function (Blueprint $table) {
                $table->increments('id');
                $table->string('created_by')->nullable();
                $table->string('updated_by')->nullable();
                $table->timestamps();
            }
        );

        // -- UPDATE --
        $this->tableUpdate(
            function (Blueprint $table) {
            }
        );
    }
}