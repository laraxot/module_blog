<?php

declare(strict_types=1);

use Illuminate\Database\Schema\Blueprint;
// ----- bases ----
use Modules\Xot\Database\Migrations\XotBaseMigration;

/**
 * Class CreateCommentsTable.
 */
class CreateCommentsTable extends XotBaseMigration {
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up() {
        // -- CREATE --
        $this->tableCreate(
            function (Blueprint $table) {
                $table->increments('id');
                $table->nullableMorphs('post');
                $table->string('lang');
                $table->integer('user_id')->nullable();
                $table->text('txt');
                // $table->string('related_type', 50)->index()->nullable();//non serve in teoria
                $table->string('created_by')->nullable();
                $table->string('updated_by')->nullable();
                $table->string('deleted_by')->nullable();
                $table->timestamps();
            }
            );

        // -- UPDATE --
        $this->tableUpdate(
            function (Blueprint $table) {
                if (! $this->hasColumn('status')) {
                    $table->integer('status')->nullable();
                }
                if ($this->hasColumn('auth_user_id')) {
                    $table->renameColumn('auth_user_id', 'user_id');
                }
            });
    }

    // end up
}// end class
