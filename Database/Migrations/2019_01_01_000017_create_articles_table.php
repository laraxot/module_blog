<?php

declare(strict_types=1);

use Illuminate\Database\Schema\Blueprint;
use Modules\Xot\Database\Migrations\XotBaseMigration;

/**
 * Class CreateArticlesTable.
 */
class CreateArticlesTable extends XotBaseMigration {
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
                $table->nullableMorphs('parent');
                $table->integer('pos')->nullable();
                $table->string('article_type', 50)->nullable();
                $table->datetime('published_at')->nullable();
                $table->string('updated_by', 155)->nullable();
                $table->string('created_by', 155)->nullable();
                $table->timestamps();
            }
            );

        // -- UPDATE --
        $this->tableUpdate(
            function (Blueprint $table) {
                if (! $this->hasColumn('updated_by')) {
                    $table->string('updated_by', 155)
                        ->nullable()
                        ->after('updated_at');
                }
                if (! $this->hasColumn('created_by')) {
                    $table->string('created_by', 155)
                        ->nullable()
                        ->after('created_at');
                }
                if (! $this->hasColumn('parent_id')) {
                    $table->nullableMorphs('parent');
                }
                if (! $this->hasColumn('pos')) {
                    $table->integer('pos')->nullable();
                }
                if ($this->hasColumn('post_id')) {
                    $table->renameColumn('post_id', 'id');
                }

                if (! $this->hasColumn('user_id')) {
                    $table->integer('user_id')->nullable();
                }

                if ($this->hasColumn('auth_user_id')) {
                    $table->dropColumn('user_id');
                    $table->renameColumn('auth_user_id', 'user_id');
                }

                if (! $this->hasColumn('is_featured')) {
                    $table->boolean('is_featured')->nullable();
                }
                if (! $this->hasColumn('ratings_avg')) {
                    $table->decimal('ratings_avg', 10, 3)->nullable();
                }

                if (! $this->hasColumn('ratings_count')) {
                    $table->integer('ratings_count')->nullable();
                }

                if (! $this->hasColumn('status_id')) {
                    $table->integer('status_id')->nullable();
                }
                if (! $this->hasColumn('show_on_homepage')) {
                    $table->boolean('show_on_homepage')->default(0);
                }
                if (! $this->hasColumn('read_time')) {
                    $table->integer('read_time')->nullable();
                }
                if (! $this->hasColumn('author_id')) {
                    $table->integer('author_id')->nullable();
                }
                if (! $this->hasColumn('is_pinned')) {
                    $table->boolean('is_pinned')->default(false);
                }
                if (! $this->hasColumn('submitted_at')) {
                    $table->timestamp('submitted_at')->nullable();
                }
                if (! $this->hasColumn('approved_at')) {
                    $table->timestamp('approved_at')->nullable();
                }
                if (! $this->hasColumn('shared_at')) {
                    $table->dateTime('shared_at')->nullable(); // ->default(new DateTime());
                }
                if (! $this->hasColumn('declined_at')) {
                    $table->dateTime('declined_at')->nullable(); // ->default(new DateTime());
                }
                if (! $this->hasColumn('approved_at')) {
                    $table->timestamp('approved_at')->nullable();
                }
                if (! $this->hasColumn('original_url')) {
                    $table->string('original_url')->nullable();
                }

                if (! $this->hasColumn('series_id')) {
                    $table->unsignedInteger('series_id')->nullable();
                }
                /*
                $table->foreign('series_id')
                ->references('id')->on('series')
                ->onDelete('SET NULL');

                $table->foreign('author_id')
                ->references('id')->on('users')
                ->onDelete('CASCADE');
                */

                /*
                $table->foreign('category_id')->references('id')->on('categories');
                $table->foreign('author_id')->references('id')->on('users');
                */
            }
        );
    }
}
