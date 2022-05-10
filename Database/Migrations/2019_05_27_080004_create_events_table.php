<?php

declare(strict_types=1);

use Illuminate\Database\Schema\Blueprint;
// use Modules\Blog\Models\Event as MyModel;
// ----- models -----
use Modules\Xot\Database\Migrations\XotBaseMigration;

/**
 * Class CreateEventsTable.
 */
class CreateEventsTable extends XotBaseMigration {
    /*
    public function getTable() {
        return with(new MyModel())->getTable();
    }
    */

    /**
     * db up.
     *
     * @return void
     */
    public function up() {
        // ----- create -----
        $this->tableCreate(
            function (Blueprint $table) {
                $table->increments('id'); // ->primary();
                // $table->string('article_type',50)->nullable();
                // $table->datetime('published_at')->nullable();
                // $table->text('bio')->nullable();
                $table->timestamps();
            }
            );

        // -- UPDATE --
        $this->tableUpdate(
            function (Blueprint $table) {
                if (! $this->hasColumn('date_start')) {
                    $table->dateTime('date_start')->nullable();
                    $table->dateTime('date_end')->nullable();
                }

                if (! $this->hasColumn('created_by')) {
                    $table->string('created_by')->nullable();
                    $table->string('updated_by')->nullable();
                    $table->string('deleted_by')->nullable();
                }
                if ($this->hasColumn('post_id')) {
                    $table->renameColumn('post_id', 'id');
                }
            });
    }
}
