<?php

declare(strict_types=1);

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
//----- models -----

use Modules\Xot\Database\Migrations\XotBaseMigration;

/**
 * Class CreateRatingMorphTable.
 */
class CreateRatingMorphTable extends XotBaseMigration {
    /**
     * db up.
     *
     * @return void
     */
    public function up() {
        //----- create -----
        //-- CREATE --
        if (! $this->tableExists()) {
            $this->getConn()->create(
                $this->getTable(),
                function (Blueprint $table) {
                    $table->increments('id');
                    $table->nullableMorphs('post');
                    //$table->nullableMorphs('related');
                    //$table->integer('rating')->nullable();
                    $table->integer('value')->nullable();
                    $table->string('created_by')->nullable();
                    $table->string('updated_by')->nullable();
                    $table->string('deleted_by')->nullable();
                    $table->timestamps();
                }
            );
        }
        //----- update -----
        $this->getConn()->table($this->getTable(),
            function (Blueprint $table) {
                if (! $this->hasColumn('auth_user_id')) {
                    $table->integer('auth_user_id')->nullable()->index();
                }
                if ($this->hasColumn('related_id')) {
                    $table->renameColumn('related_id', 'rating_id');
                }
                if ($this->hasColumn('related_type')) {
                    $table->dropColumn('related_type');
                }
                if ($this->hasColumn('rating')) { //meglio tenere per relazione a ratings che sarebbero gli obiettivi
                    $table->renameColumn('rating', 'value');
                }
            }
        );
    }

    public function down() {
        Schema::dropIfExists($this->getTable());
    }
}
