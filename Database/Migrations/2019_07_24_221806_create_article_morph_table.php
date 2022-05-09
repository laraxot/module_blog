<?php

declare(strict_types=1);

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
//----- models -----
use Modules\Blog\Models\ArticleMorph as MyModel;
use Modules\Xot\Database\Migrations\XotBaseMigration;

/**
 * Class CreateArticleMorphTable.
 */
class CreateArticleMorphTable extends XotBaseMigration {
    public function getTable(): string {
        return with(new MyModel())->getTable();
    }

    /**
     * db up.
     *
     * @return void
     */
    public function up() {
        //----- create -----
        $this->tableCreate(
            function (Blueprint $table) {
                $table->increments('id');
                $table->nullableMorphs('post');
                $table->nullableMorphs('related');
                $table->integer('user_id')->nullable()->index();

                $table->string('note')->nullable();

                $table->string('created_by')->nullable();
                $table->string('updated_by')->nullable();
                $table->string('deleted_by')->nullable();
                $table->timestamps();
            }
            );


        //-- UPDATE --
        $this->tableUpdate(
            function (Blueprint $table) {
            if ($this->hasColumn( 'related_id')) {
                $table->dropColumn('related_id');
            }

            if (! $this->hasColumn( 'article_id')) {
                $table->integer('article_id');
            }

            if (! $this->hasColumn( 'title')) {
                $table->string('title');
            }

            if (! $this->hasColumn( 'value')) {
                $table->string('value');
            }

            if ($this->hasColumn( 'auth_user_id')) {
                $table->renameColumn('auth_user_id', 'user_id');
            }
        });
    }


}
