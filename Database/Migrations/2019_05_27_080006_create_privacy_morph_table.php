<?php

declare(strict_types=1);

use Illuminate\Database\Schema\Blueprint;
// ----- models -----
use Modules\Blog\Models\PrivacyMorph as MyModel; // -- con MorphPivot non e' morphs ma morph
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
        // -- CREATE --
        $this->tableCreate(
            function (Blueprint $table) {
                $table->increments('id');
                $table->nullableMorphs('post');
                $table->nullableMorphs('related');
                $table->text('title')->nullable(); // ricopio il title
                $table->tinyInteger('value')->nullable(); // -- 0 o 1
                $table->integer('user_id')->nullable()->index();
                $table->string('created_by')->nullable();
                $table->string('updated_by')->nullable();
                $table->string('deleted_by')->nullable();
                $table->timestamps();
            }
            );

        // -- UPDATE --
        $this->tableUpdate(
            function (Blueprint $table) {
                if ($this->hasColumn('related_id')) {
                    $table->renameColumn('related_id', 'privacy_id');
                }
                if ($this->hasColumn('auth_user_id')) {
                    $table->renameColumn('auth_user_id', 'user_id');
                }
            });
    }
}
