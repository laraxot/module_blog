<?php

declare(strict_types=1);

use Illuminate\Database\Schema\Blueprint;
// ----- models -----
// ----- bases ----
use Modules\Xot\Database\Migrations\XotBaseMigration;

/**
 * Class CreateHomesTable.
 */
class CreateHomesTable extends XotBaseMigration
{
    /**
     * db up.
     *
     * @return void
     */
    public function up()
    {
        // -- CREATE --
        $this->tableCreate(
            function (Blueprint $table) {
                $table->increments('id'); // ->primary();
                $table->string('created_by')->nullable();
                $table->string('updated_by')->nullable();
                $table->timestamps();
            }
        );

        // -- UPDATE --
        $this->tableUpdate(
            function (Blueprint $table) {
                if (! $this->hasColumn('icon_src')) {
                    $table->string('icon_src')->nullable();
                }
                if ($this->hasColumn('post_id')) {
                    $table->renameColumn('post_id', 'id');
                }
            }
        );
    }
}
