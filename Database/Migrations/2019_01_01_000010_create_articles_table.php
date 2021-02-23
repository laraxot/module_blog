<<<<<<< HEAD
<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Modules\Xot\Database\Migrations\XotBaseMigration;

/**
 * Class CreateArticlesTable
 */
class CreateArticlesTable extends XotBaseMigration {
/**
* db up
*
* @return void
*/
    public function up() {
        //-- CREATE --
        if (! $this->tableExists()) {
            $this->getConn()->create($this->getTable(),
                function (Blueprint $table) {
                    $table->increments('id');
                    $table->nullableMorphs('parent');
                    $table->integer('pos')->nullable();
                    $table->string('article_type', 50)->nullable();
                    $table->datetime('published_at')->nullable();
                    $table->string('updated_by', 155)->nullable();
                    $table->string('created_by', 155)->nullable();
                    $table->timestamps();
                }
            );
        }
        //-- UPDATE --
        $this->getConn()->table($this->getTable(),
            function (Blueprint $table) {
                if (! $this->hasColumn( 'updated_by')) {
                    $table->string('updated_by', 155)
                        ->nullable()
                        ->after('updated_at');
                }
                if (! $this->hasColumn( 'created_by')) {
                    $table->string('created_by', 155)
                        ->nullable()
                        ->after('created_at');
                }
                if (! $this->hasColumn( 'parent_id')) {
                    $table->nullableMorphs('parent');
                }
                if (! $this->hasColumn( 'pos')) {
                    $table->integer('pos')->nullable();
                }
                if ($this->hasColumn( 'post_id')) {
                    $table->renameColumn('post_id', 'id');
                }

                if (! $this->hasColumn( 'auth_user_id')) {
                    $table->integer('auth_user_id')->nullable();
                }

                if (! $this->hasColumn( 'is_featured')) {
                    $table->boolean('is_featured')->nullable();
                }
                if (! $this->hasColumn( 'ratings_avg')) {
                    $table->decimal('ratings_avg',10,3)->nullable();
                }

                if (! $this->hasColumn( 'ratings_count')) {
                    $table->integer('ratings_count')->nullable();
                }
            }
        );
    }
}
=======
<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Modules\Xot\Database\Migrations\XotBaseMigration;

/**
 * Class CreateArticlesTable
 */
class CreateArticlesTable extends XotBaseMigration {
/**
* db up
*
* @return void
*/
    public function up() {
        //-- CREATE --
        if (! $this->tableExists()) {
            $this->getConn()->create($this->getTable(),
                function (Blueprint $table) {
                    $table->increments('id');
                    $table->nullableMorphs('parent');
                    $table->integer('pos')->nullable();
                    $table->string('article_type', 50)->nullable();
                    $table->datetime('published_at')->nullable();
                    $table->string('updated_by', 155)->nullable();
                    $table->string('created_by', 155)->nullable();
                    $table->timestamps();
                }
            );
        }
        //-- UPDATE --
        $this->getConn()->table($this->getTable(),
            function (Blueprint $table) {
                if (! $this->hasColumn( 'updated_by')) {
                    $table->string('updated_by', 155)
                        ->nullable()
                        ->after('updated_at');
                }
                if (! $this->hasColumn( 'created_by')) {
                    $table->string('created_by', 155)
                        ->nullable()
                        ->after('created_at');
                }
                if (! $this->hasColumn( 'parent_id')) {
                    $table->nullableMorphs('parent');
                }
                if (! $this->hasColumn( 'pos')) {
                    $table->integer('pos')->nullable();
                }
                if ($this->hasColumn( 'post_id')) {
                    $table->renameColumn('post_id', 'id');
                }

                if (! $this->hasColumn( 'auth_user_id')) {
                    $table->integer('auth_user_id')->nullable();
                }

                if (! $this->hasColumn( 'is_featured')) {
                    $table->boolean('is_featured')->nullable();
                }
                if (! $this->hasColumn( 'ratings_avg')) {
                    $table->decimal('ratings_avg',10,3)->nullable();
                }

                if (! $this->hasColumn( 'ratings_count')) {
                    $table->integer('ratings_count')->nullable();
                }
            }
        );
    }
}
>>>>>>> b665d0938279a050d707ca03721252dde228daf1
