<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Modules\Blog\Models\Sitemap as MyModel;
//----- models -----
use Modules\Xot\Database\Migrations\XotBaseMigration;

/**
 * Class CreateSitemapsTable
 */
class CreateSitemapsTable extends XotBaseMigration {
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
        if (! Schema::hasTable($this->getTable())) {
            Schema::create($this->getTable(), function (Blueprint $table) {
                $table->increments('id'); //->primary();
                $table->string('created_by')->nullable();
                $table->string('updated_by')->nullable();
                $table->timestamps();
            });
        }

        //-- UPDATE --
        $this->getConn()->table($this->getTable(), function (Blueprint $table) {
            if (Schema::hasColumn($this->getTable(), 'post_id')) {
                $table->renameColumn('post_id', 'id');
            }
        });
    }

    public function down() {
        Schema::dropIfExists($this->getTable());
    }
}
