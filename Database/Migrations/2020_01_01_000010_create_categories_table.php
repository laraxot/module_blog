<?php

declare(strict_types=1);

use Illuminate\Database\Schema\Blueprint;
use Kalnoy\Nestedset\NestedSet;
// ----- models -----
// ----- bases ----
use Modules\Xot\Database\Migrations\XotBaseMigration;

/**
 * Class CreateCategoriesTable.
 */
class CreateCategoriesTable extends XotBaseMigration {
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
                $table->string('slug')->index();
                // SQLSTATE[42000]: Syntax error or access violation: 3152 JSON column 'name' supports indexing only via generated columns on a specified JSON path. (SQL: alter table `categories` add index `categories_name_index`(`name`))
                // $table->json('name')->index();
                $table->json('name')->nullable();
                $table->json('description')->nullable();
                NestedSet::columns($table);

                // Indexes
                // $table->unique('slug');

                $table->string('created_by')->nullable();
                $table->string('updated_by')->nullable();
                $table->timestamps();
                // $table->softDeletes();
            }
        );

        // -- UPDATE --
        $this->tableUpdate(
            function (Blueprint $table) {
                if (! $this->hasColumn('icon_src')) {
                    $table->string('icon_src')->nullable();
                }
                if (! $this->hasColumn('_rgt')) {
                    $table->integer('_rgt')->default(0);
                }
                if (! $this->hasColumn('_lft')) {
                    $table->integer('_lft')->default(0);
                }
                if (! $this->hasColumn('slug')) {
                    $table->string('slug')->index();
                }
                if (! $this->hasColumn('parent_id')) {
                    $table->integer('parent_id')->default(0)->nullable()->index();
                }
                if (! $this->hasColumn('name')) {
                    $table->json('name');
                }
                if (! $this->hasColumn('description')) {
                    $table->json('description')->nullable();
                }
                if (! $this->hasColumn('deleted_at')) {
                    $table->softDeletes();
                }

                //--- Change ---
                if ($this->hasColumn('parent_id')) {
                    $table->integer('parent_id')->default(0)->nullable()->change();
                }

            }
        );
    }
}
