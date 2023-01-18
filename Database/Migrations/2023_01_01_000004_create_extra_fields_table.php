<?php

declare(strict_types=1);

use Illuminate\Database\Schema\Blueprint;
use Modules\Xot\Database\Migrations\XotBaseMigration;

/**
 * Undocumented class.
 */
class CreateExtraFieldsTable extends XotBaseMigration {
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
                $table->string('name');
                // $table->text('reason')->nullable();
                // $table->morphs('model');
                $table->timestamps();
            }
        );
        // -- UPDATE --
        $this->tableUpdate(
            function (Blueprint $table) {
                if (! $this->hasColumn('name')) {
                    $table->string('name');
                }
                if (! $this->hasColumn('type')) {
                    $table->string('type');
                }
                if (! $this->hasColumn('rules')) {
                    $table->json('rules')->nullable();
                }

                if (! $this->hasColumn('created_by')) {
                    $table->string('created_by')->nullable();
                }
                if (! $this->hasColumn('updated_by')) {
                    $table->string('updated_by')->nullable();
                }
                if (! $this->hasColumn('options')) {
                    $table->json('options')->nullable();
                    $table->json('attributes')->nullable();
                }
                if (! $this->hasColumn('group_id')) {
                    $table->integer('group_id')->nullable();
                }
            }
        );
    }
}
