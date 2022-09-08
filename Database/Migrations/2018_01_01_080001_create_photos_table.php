<?php

declare(strict_types=1);

use Illuminate\Database\Schema\Blueprint;
use Modules\Xot\Database\Migrations\XotBaseMigration;

// ---models
// use Modules\Blog\Models\Photo as MyModel;

/**
 * Class CreatePhotosTable.
 */
class CreatePhotosTable extends XotBaseMigration {
    /**
     * db up.
     *
     * @return void
     */
    public function up() {
        // -- CREATE --
        $this->tableCreate(
            function (Blueprint $table) {
                $table->increments('id'); // ->primary();
                $table->string('updated_by')->nullable();
                $table->string('created_by')->nullable();
                $table->timestamps();
            }
        );

        // -- UPDATE --
        $this->tableUpdate(
            function (Blueprint $table) {
                if (! $this->hasColumn('updated_by')) {
                    $table->string('updated_by')->nullable()->after('updated_at');
                }
                if (! $this->hasColumn('created_by')) {
                    $table->string('created_by')->nullable()->after('created_at');
                }
                if ($this->hasColumn('post_id')) {
                    $table->renameColumn('post_id', 'id');
                }
                if (! $this->hasColumn('user_id')) {
                    $table->integer('user_id')->nullable();
                }
            }
        );
    }
}
