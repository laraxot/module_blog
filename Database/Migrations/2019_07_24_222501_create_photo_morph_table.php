<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
//----- models -----
use Modules\Blog\Models\PhotoMorph as MyModel;
use Modules\Xot\Database\Migrations\XotBaseMigration;

/**
 * Class CreatePhotoMorphTable
 */
class CreatePhotoMorphTable extends XotBaseMigration {
    /**
     * @return string
     */
    public function getTable():string {
        return with(new MyModel())->getTable();
    }
/**
* db up
*
* @return void
*/
    public function up() {
        //----- create -----
        if (! Schema::hasTable($this->getTable())) {
            Schema::create($this->getTable(), function (Blueprint $table) {
                $table->increments('id');
                $table->nullableMorphs('post');
                $table->nullableMorphs('related');
                $table->integer('auth_user_id')->nullable()->index();

                $table->string('note')->nullable();

                $table->string('created_by')->nullable();
                $table->string('updated_by')->nullable();
                $table->string('deleted_by')->nullable();
                $table->timestamps();
            });
        }
        //----- update -----
        Schema::table($this->getTable(), function (Blueprint $table) {
            if (Schema::hasColumn($this->getTable(), 'related_id')) {
                $table->renameColumn('related_id', 'photo_id');
            }
        });
    }

    public function down() {
        Schema::dropIfExists($this->getTable());
    }
}
