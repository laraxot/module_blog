<?php

declare(strict_types=1);

use Illuminate\Database\Schema\Blueprint;
<<<<<<< HEAD
// ----- bases ----
=======
//----- bases ----
>>>>>>> 968db6d (up)
use Modules\Xot\Database\Migrations\XotBaseMigration;

/**
 * Class CreateLabelsTable.
 */
class CreateLabelsTable extends XotBaseMigration {
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
                $table->nullableMorphs('label');
                $table->string('title')->nullable();
                $table->string('created_by')->nullable();
                $table->string('updated_by')->nullable();
                $table->timestamps();
<<<<<<< HEAD
            }
        );

        // -- UPDATE --
        $this->tableUpdate(
            function (Blueprint $table) {
                if (! $this->hasColumn('class')) {
                    $table->string('class')->nullable();
                }
            }
        );
    }

    // end up
}// end class
=======
           }
            );


        //-- UPDATE --
        $this->tableUpdate(
            function (Blueprint $table) {
            if (! $this->hasColumn('class')) {
                $table->string('class')->nullable();
            }
        });
    }

    //end up
}//end class
>>>>>>> 968db6d (up)
