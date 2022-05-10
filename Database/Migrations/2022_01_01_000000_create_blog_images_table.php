<?php

declare(strict_types=1);

use Illuminate\Database\Schema\Blueprint;
//----- models -----
use Modules\Blog\Models\Image;
use Modules\Xot\Database\Migrations\XotBaseMigration;

/**
 * Class CreateImagesTable.
 */
class CreateBlogImagesTable extends XotBaseMigration {
    protected ?string $model_class = Image::class;

    /**
     * db up.
     *
     * @return void
     */
    public function up() {
        //-- CREATE --
        $this->tableCreate(
            function (Blueprint $table) {
                $table->increments('id'); //->primary();
                $table->nullableMorphs('post');
                $table->text('src')->nullable();
                $table->integer('user_id')->nullable();
                $table->text('note')->nullable();
                $table->string('created_by')->nullable();
                $table->string('updated_by')->nullable();
                $table->timestamps();
            }
            );

        //-- UPDATE --
        $this->tableUpdate(
            function (Blueprint $table) {
                if (! $this->hasColumn('src_out')) {
                    $table->text('src_out')->nullable()->after('src');
                }
                if (! $this->hasColumn('width')) {
                    $table->integer('width')->nullable()->after('src');
                }
                if (! $this->hasColumn('height')) {
                    $table->integer('height')->nullable()->after('src');
                }
            }
        );
    }
}
