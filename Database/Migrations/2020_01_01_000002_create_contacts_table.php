<?php

declare(strict_types=1);

use Illuminate\Database\Schema\Blueprint;
<<<<<<< HEAD
// ----- models -----

// ----- bases ----
=======
//----- models -----

//----- bases ----
>>>>>>> 968db6d (up)
use Modules\Xot\Database\Migrations\XotBaseMigration;

/**
 * Class CreateContactsTable.
 */
class CreateContactsTable extends XotBaseMigration {
<<<<<<< HEAD
    // use XotBaseMigrationTrait;
=======
    //use XotBaseMigrationTrait;
>>>>>>> 968db6d (up)

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up() {
<<<<<<< HEAD
        // -- CREATE --
=======
        //-- CREATE --
>>>>>>> 968db6d (up)
        $this->tableCreate(
            function (Blueprint $table) {
                $table->increments('id');
            }
<<<<<<< HEAD
        );

        // -- UPDATE --
=======
            );

        //-- UPDATE --
>>>>>>> 968db6d (up)
        $this->tableUpdate(
            function (Blueprint $table) {
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
<<<<<<< HEAD
            }
        ); // end update
    }

    // end function up
=======
            }); //end update
    }

    //end function up
>>>>>>> 968db6d (up)
}
