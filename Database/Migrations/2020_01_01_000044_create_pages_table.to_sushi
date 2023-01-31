<?php

declare(strict_types=1);

use Illuminate\Database\Schema\Blueprint;
use Modules\Xot\Database\Migrations\XotBaseMigration;

/**
 * Class CreatePagesTable.
 */
class CreatePagesTable extends XotBaseMigration {
    /**
     * @return void
     */
    public function up() {
        // -- CREATE --
        $this->tableCreate(
            function (Blueprint $table) {
                $table->increments('id');
                $table->datetime('published_at')->nullable();
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
                if (! $this->hasColumn('layout_position')) {
                    $table->string('layout_position')->nullable();
                }
                if (! $this->hasColumn('blade')) {
                    $table->string('blade')->nullable();
                }
                if (! $this->hasColumn('parent_id')) {
                    $table->integer('parent_id')->nullable();
                }
                if (! $this->hasColumn('pos')) {
                    $table->integer('pos')->nullable();
                }
                if (! $this->hasColumn('icon')) {
                    $table->string('icon')->nullable();
                }
                if (! $this->hasColumn('is_modal')) {
                    $table->boolean('is_modal')->nullable();
                }
                if (! $this->hasColumn('status')) {
                    $table->integer('status')->nullable();
                }
                if ($this->hasColumn('post_id')) {
                    $table->renameColumn('post_id', 'id');
                }
            }
        );
    }
}
