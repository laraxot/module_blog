<?php

namespace Modules\Blog\Models;

/**
 * Modules\Blog\Models\Privacy
 *
 * @property int $id
 * @property string|null $related_type
 * @property string|null $created_by
 * @property string|null $updated_by
 * @property string|null $deleted_by
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property int|null $obligatory
 * @property-read \Illuminate\Database\Eloquent\Collection|\Modules\Blog\Models\Favorite[] $favorites
 * @property-read int|null $favorites_count
 * @property-read mixed $create_url
 * @property-read mixed $destroy_url
 * @property-read mixed $detach_url
 * @property-read mixed $edit_url
 * @property mixed $guid
 * @property mixed $image_src
 * @property-read mixed $index_edit_url
 * @property-read mixed $index_url
 * @property-read mixed $lang
 * @property-read mixed $movedown_url
 * @property-read mixed $moveup_url
 * @property-read mixed $post_type
 * @property mixed $routename
 * @property-read mixed $show_url
 * @property-read mixed $subtitle
 * @property-read mixed $title
 * @property mixed $txt
 * @property-read mixed $update_url
 * @property mixed $url
 * @property-read mixed $user_handle
 * @property-read \Illuminate\Database\Eloquent\Collection|\Modules\Blog\Models\Image[] $images
 * @property-read int|null $images_count
 * @property-read \Illuminate\Database\Eloquent\Collection|\Modules\Blog\Models\Favorite[] $myFavorites
 * @property-read int|null $my_favorites_count
 * @property-read \Modules\Blog\Models\Post|null $post
 * @method static \Illuminate\Database\Eloquent\Builder|Privacy newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Privacy newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|BaseModelLang ofItem($guid)
 * @method static \Illuminate\Database\Eloquent\Builder|Privacy query()
 * @method static \Illuminate\Database\Eloquent\Builder|Privacy whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Privacy whereCreatedBy($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Privacy whereDeletedBy($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Privacy whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Privacy whereObligatory($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Privacy whereRelatedType($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Privacy whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Privacy whereUpdatedBy($value)
 * @method static \Illuminate\Database\Eloquent\Builder|BaseModelLang withPost($guid)
 * @mixin \Eloquent
 * @property int $post_id
 * @method static \Illuminate\Database\Eloquent\Builder|Privacy wherePostId($value)
 */
class Privacy extends BaseModelLang
{
    /**
     * @var string[]
     */
    protected $fillable = ['id', 'related_type', 'obligatory'];
}
