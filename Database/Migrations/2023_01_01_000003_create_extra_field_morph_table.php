<?php

declare(strict_types=1);

use Illuminate\Database\Schema\Blueprint;
use Modules\Xot\Database\Migrations\XotBaseMigration;

class CreateExtraFieldMorphTable extends XotBaseMigration {
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
                $table->nullableMorphs('model');
                $table->integer('user_id')->nullable()->index();

                $table->string('created_by')->nullable();
                $table->string('updated_by')->nullable();
                $table->timestamps();
            }
        );

        // -- UPDATE --
        $this->tableUpdate(
            function (Blueprint $table) {
                if (! $this->hasColumn('extra_field_id')) {
                    $table->integer('extra_field_id')->nullable()->index();
                }
                if (! $this->hasColumn('value')) {
                    $table->text('value')->nullable();
                }
                if (! $this->hasColumn('value_class')) {
                    $table->string('value_class')->nullable();
                }
            }
        );
    }
}
