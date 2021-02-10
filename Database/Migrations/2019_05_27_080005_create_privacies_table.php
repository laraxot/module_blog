<?php

declare(strict_types=1);

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
//----- models -----
use Modules\Xot\Database\Migrations\XotBaseMigration;

/**
 * Class CreatePrivaciesTable.
 */
class CreatePrivaciesTable extends XotBaseMigration {
    /**
     * db up.
     *
     * @return void
     */
    public function up() {
        //----- create -----
        if (! Schema::hasTable($this->getTable())) {
            Schema::create($this->getTable(), function (Blueprint $table) {
                $table->increments('id'); //->primary();
                $table->string('related_type', 50)->index()->nullable();
                $table->string('created_by')->nullable();
                $table->string('updated_by')->nullable();
                $table->string('deleted_by')->nullable();
                $table->timestamps();
            });
        }
        //----- update -----
        Schema::table($this->getTable(), function (Blueprint $table) {
            if (! Schema::hasColumn($this->getTable(), 'obligatory')) { //4 required rule, another name
                $table->boolean('obligatory')->nullable();
            }
            if (Schema::hasColumn($this->getTable(), 'post_id')) {
                $table->renameColumn('post_id', 'id');
            }
        });
    }

    public function down() {
        Schema::dropIfExists($this->getTable());
    }
}
