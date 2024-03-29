<?php

/**
 *  Syntax error or access violation: 1118 Row size too large. The maximum row size for the used table type, not counting BLOBs, is 8126. This includes storage overhead, check the manual. You have to change some columns to TEXT or BLOBs (SQL: alter table `profiles` add `user_id` int null).
 */
declare(strict_types=1);

use Illuminate\Database\Schema\Blueprint;
use Modules\Blog\Models\Location;
// ----- models-------
use Modules\Xot\Database\Migrations\XotBaseMigration;

/**
 * Class CreateProfilesTable.
 */
class CreateProfilesTable extends XotBaseMigration
{
    /**
     * db up.
     *
     * @return void
     */
    public function up()
    {
        // -- CREATE --
        $this->tableCreate(
            function (Blueprint $table) {
                $table->increments('id'); // ->primary();//->primary();
                $table->string('post_type', 191)->nullable()->index();
                // $table->string('article_type',50)->nullable();
                // $table->datetime('published_at')->nullable();
                $table->text('bio')->nullable();
                $table->timestamps();
            }
        );
        // -- UPDATE --
        $this->tableUpdate(
            function (Blueprint $table) {
                // ------- add
                if (! $this->hasColumn('created_by')) {
                    $table->string('created_by')->nullable();
                }
                if (! $this->hasColumn('updated_by')) {
                    $table->string('updated_by')->nullable();
                }
                if (! $this->hasColumn('deleted_by')) {
                    $table->string('deleted_by')->nullable();
                }
                if (! $this->hasColumn('first_name')) {
                    $table->string('first_name')->nullable();
                }
                if (! $this->hasColumn('last_name')) {
                    $table->string('last_name')->nullable();
                }
                if (! $this->hasColumn('email')) {
                    $table->string('email')->nullable();
                }
                if (! $this->hasColumn('phone')) {
                    $table->string('phone')->nullable();
                }
                if (! $this->hasColumn('address')) {
                    $table->text('address')->nullable();
                } else {
                    $table->text('address')->change()->nullable();
                }

                if ($this->hasColumn('auth_user_id') && ! $this->hasColumn('user_id')) {
                    $table->renameColumn('auth_user_id', 'user_id');
                }
                if (! $this->hasColumn('auth_user_id') && ! $this->hasColumn('user_id')) {
                    $table->integer('user_id')->nullable()->index();
                }
                /*
                if ($this->hasColumn('auth_user_id')) {
                    $table->dropColumn('user_id');
                    $table->renameColumn('auth_user_id', 'user_id');
                }
                */
                /*
                $address_components = Location::$address_components;
                foreach ($address_components as $el) {
                    if (! $this->hasColumn($el)) {
                        $table->string($el)->nullable();
                    }
                    if (! $this->hasColumn($el.'_short')) {
                        $table->string($el.'_short')->nullable();
                    }
                }
                */
                if ($this->hasColumn('post_id')) {
                    // $table->dropPrimary('post_id');
                    $table->renameColumn('post_id', 'id');
                    // $table->primary('id');
                }

                // if ($this->hasColumn('firstname')) {
                //     $table->renameColumn('firstname', 'first_name');
                // }
                // if ($this->hasColumn('lastname')) {
                //     $table->renameColumn('lastname', 'last_name');
                // }
            }
        );
    }
}
