<<<<<<< HEAD
<?php

declare(strict_types=1);

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
//----- models -----
use Modules\Blog\Models\PrivacyMorph as MyModel; //-- con MorphPivot non e' morphs ma morph
use Modules\Xot\Database\Migrations\XotBaseMigration;

/**
 * Class CreatePrivacyMorphTable.
 */
class CreatePrivacyMorphTable extends XotBaseMigration {
    public function getTable(): string {
        return with(new MyModel())->getTable();
    }

    /**
     * db up.
     *
     * @return void
     */
    public function up() {
        if (! Schema::hasTable($this->getTable())) {
            Schema::create($this->getTable(), function (Blueprint $table) {
                $table->increments('id');
                $table->nullableMorphs('post');
                $table->nullableMorphs('related');
                $table->text('title')->nullable(); //ricopio il title
                $table->tinyInteger('value')->nullable(); //-- 0 o 1
                $table->integer('auth_user_id')->nullable()->index();
                $table->string('created_by')->nullable();
                $table->string('updated_by')->nullable();
                $table->string('deleted_by')->nullable();
                $table->timestamps();
            });
        }
        //----- update -----
        Schema::table($this->getTable(), function (Blueprint $table) {
            if (Schema::hasColumn($this->getTable(), 'related_id')) {
                $table->renameColumn('related_id', 'privacy_id');
            }
        });
    }

    public function down() {
        Schema::dropIfExists($this->getTable());
    }
}
=======
<?php

declare(strict_types=1);

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
//----- models -----
use Modules\Blog\Models\PrivacyMorph as MyModel; //-- con MorphPivot non e' morphs ma morph
use Modules\Xot\Database\Migrations\XotBaseMigration;

/**
 * Class CreatePrivacyMorphTable.
 */
class CreatePrivacyMorphTable extends XotBaseMigration {
    public function getTable(): string {
        return with(new MyModel())->getTable();
    }

    /**
     * db up.
     *
     * @return void
     */
    public function up() {
        if (! Schema::hasTable($this->getTable())) {
            Schema::create($this->getTable(), function (Blueprint $table) {
                $table->increments('id');
                $table->nullableMorphs('post');
                $table->nullableMorphs('related');
                $table->text('title')->nullable(); //ricopio il title
                $table->tinyInteger('value')->nullable(); //-- 0 o 1
                $table->integer('auth_user_id')->nullable()->index();
                $table->string('created_by')->nullable();
                $table->string('updated_by')->nullable();
                $table->string('deleted_by')->nullable();
                $table->timestamps();
            });
        }
        //----- update -----
        Schema::table($this->getTable(), function (Blueprint $table) {
            if (Schema::hasColumn($this->getTable(), 'related_id')) {
                $table->renameColumn('related_id', 'privacy_id');
            }
        });
    }

    public function down() {
        Schema::dropIfExists($this->getTable());
    }
}
>>>>>>> b665d0938279a050d707ca03721252dde228daf1
