<?php

use Illuminate\Database\Schema\Blueprint;
//----- models -----

//----- bases ----
use Modules\Xot\Database\Migrations\XotBaseMigration;

/**
 * Class CreateContactsTable
 */
class CreateContactsTable extends XotBaseMigration {
    //use XotBaseMigrationTrait;

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up() {
        //-- CREATE --
        if (! $this->tableExists()) {
            $this->getConn()->create($this->getTable(), function (Blueprint $table) {
                $table->increments('id');
            });
        }//end create

        //-- UPDATE --
        $this->getConn()->table($this->getTable(), function (Blueprint $table) {
            if (! $this->hasColumn('updated_at')) {
                $table->timestamps();
            }
            if (! $this->hasColumn('updated_by')) {
                $table->string('updated_by')->nullable()->after('updated_at');
                $table->string('created_by')->nullable()->after('created_at');
            }
            if (! $this->hasColumn('post_id')) {
                $table->nullableMorphs('post');
            }
        }); //end update
    }

    //end function up
}
