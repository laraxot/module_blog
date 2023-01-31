<?php

declare(strict_types=1);

namespace Modules\Blog\Models;

<<<<<<< HEAD
use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Auth;
=======
// --------- models --------

// use Illuminate\Database\Eloquent\Factories\HasFactory;
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Relations\HasMany;
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> e585fd6 (rebase)
=======
<<<<<<< HEAD
=======
>>>>>>> 25f8a08 (Lint)
<<<<<<< HEAD
>>>>>>> 04bbd8b (rebase)
=======
=======
use Modules\LU\Models\User;
use Modules\LU\Casts\UserField;
use Spatie\ModelStatus\HasStatuses;
use Illuminate\Support\Facades\Auth;
use Modules\Geo\Models\Traits\GeoTrait;
use Modules\Xot\Models\Traits\WidgetTrait;
use Modules\Blog\Models\Traits\PrivacyTrait;
use Modules\LU\Models\Traits\HasProfileTrait;
use Modules\Ticket\Models\Traits\HasTicketTrait;
use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Relations\HasMany;
<<<<<<< HEAD
>>>>>>> baed241 (rebase)
>>>>>>> f0d2ac8 (rebase)
use Illuminate\Support\Facades\Auth;
use Modules\Blog\Models\Traits\PrivacyTrait;
use Modules\Blog\Models\Traits\PrivacyTrait;
use Modules\Blog\Models\Traits\PrivacyTrait;
use Modules\Blog\Models\Traits\PrivacyTrait;
use Modules\Blog\Models\Traits\PrivacyTrait;
use Modules\Blog\Models\Traits\PrivacyTrait;
use Modules\LU\Casts\UserField;
use Modules\LU\Casts\UserField;
use Modules\LU\Casts\UserField;
use Modules\LU\Casts\UserField;
use Modules\LU\Casts\UserField;
use Modules\LU\Casts\UserField;
use Modules\LU\Models\Traits\HasProfileTrait;
<<<<<<< HEAD
use Modules\LU\Models\Traits\HasProfileTrait;
use Modules\LU\Models\Traits\HasProfileTrait;
use Modules\LU\Models\Traits\HasProfileTrait;
use Modules\LU\Models\User;
use Modules\LU\Models\User;
use Modules\LU\Models\User;
=======
=======
>>>>>>> 6b1fa56 (.)
>>>>>>> 0250513 (rebase)
use Modules\LU\Models\User;
use Modules\LU\Casts\UserField;
use Spatie\ModelStatus\HasStatuses;
=======
use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Relations\HasMany;
>>>>>>> c5b6d43 (.)
use Illuminate\Support\Facades\Auth;
use Modules\Blog\Models\Traits\PrivacyTrait;
use Modules\Geo\Models\Traits\GeoTrait;
=======
use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Relations\HasMany;
<<<<<<< HEAD
<<<<<<< HEAD
use Illuminate\Support\Facades\Auth;
use Modules\Blog\Models\Traits\PrivacyTrait;
=======
use Illuminate\Support\Facades\Auth;
use Modules\Blog\Models\Traits\PrivacyTrait;
use Modules\Geo\Models\Traits\GeoTrait;
>>>>>>> 25f8a08 (Lint)
>>>>>>> a6cf74c (rebase)
use Modules\LU\Casts\UserField;
use Modules\LU\Models\Traits\HasProfileTrait;
use Modules\LU\Models\User;
use Modules\Ticket\Models\Traits\HasTicketTrait;
use Modules\Ticket\Models\Traits\HasTicketTrait;
use Modules\Xot\Models\Traits\WidgetTrait;
use Modules\Xot\Models\Traits\WidgetTrait;
use Spatie\ModelStatus\HasStatuses;
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
use Spatie\ModelStatus\HasStatuses;
use Spatie\ModelStatus\HasStatuses;
use Spatie\ModelStatus\HasStatuses;
=======
=======
>>>>>>> c744a19 (up)
>>>>>>> e585fd6 (rebase)
=======
=======
>>>>>>> f0d2ac8 (rebase)
=======
=======
>>>>>>> a6cf74c (rebase)
>>>>>>> 7f62475 (rebase)
=======
>>>>>>> c744a19 (up)
=======
>>>>>>> 25f8a08 (Lint)
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 04bbd8b (rebase)
=======
=======
>>>>>>> 7f62475 (rebase)
=======
=======
>>>>>>> c744a19 (up)
>>>>>>> baed241 (rebase)
<<<<<<< HEAD
>>>>>>> f0d2ac8 (rebase)
=======
=======
>>>>>>> a6cf74c (rebase)
>>>>>>> 7f62475 (rebase)

<<<<<<< HEAD
=======
/**
 * Modules\Blog\Models\Profile.
 *
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 8213e79 (Lint)
 * @property int                                                                     $id
 * @property string|null                                                             $post_type
 * @property string|null                                                             $bio
 * @property \Illuminate\Support\Carbon|null                                         $created_at
 * @property \Illuminate\Support\Carbon|null                                         $updated_at
 * @property string|null                                                             $created_by
 * @property string|null                                                             $updated_by
 * @property string|null                                                             $deleted_by
 * @property string|null                                                             $firstname
 * @property string|null                                                             $surname
 * @property string|null                                                             $email
 * @property string|null                                                             $phone
 * @property string|null                                                             $address
 * @property int|null                                                                $user_id
 * @property string|null                                                             $premise
 * @property string|null                                                             $premise_short
 * @property string|null                                                             $locality
 * @property string|null                                                             $locality_short
 * @property string|null                                                             $postal_town
 * @property string|null                                                             $postal_town_short
 * @property string|null                                                             $administrative_area_level_3
 * @property string|null                                                             $administrative_area_level_3_short
 * @property string|null                                                             $administrative_area_level_2
 * @property string|null                                                             $administrative_area_level_2_short
 * @property string|null                                                             $administrative_area_level_1
 * @property string|null                                                             $administrative_area_level_1_short
 * @property string|null                                                             $country
 * @property string|null                                                             $country_short
 * @property string|null                                                             $street_number
 * @property string|null                                                             $street_number_short
 * @property string|null                                                             $route
 * @property string|null                                                             $route_short
 * @property string|null                                                             $postal_code
 * @property string|null                                                             $postal_code_short
 * @property string|null                                                             $googleplace_url
 * @property string|null                                                             $googleplace_url_short
 * @property string|null                                                             $point_of_interest
 * @property string|null                                                             $point_of_interest_short
 * @property string|null                                                             $political
 * @property string|null                                                             $political_short
 * @property string|null                                                             $campground
 * @property string|null                                                             $campground_short
 * @property string|null                                                             $github_username
 * @property string|null                                                             $twitter
 * @property string|null                                                             $first_name
 * @property string|null                                                             $last_name
 * @property mixed                                                                   $handle
 * @property \Illuminate\Database\Eloquent\Collection|\Modules\Blog\Models\Article[] $articles
 * @property int|null                                                                $articles_count
 * @property \Illuminate\Database\Eloquent\Collection|\Modules\Xot\Models\Widget[]   $containerWidgets
 * @property int|null                                                                $container_widgets_count
 * @property string|null                                                             $full_name
 * @property string|null                                                             $guid
 * @property string|null                                                             $image_src
 * @property string|null                                                             $lang
 * @property string                                                                  $status
 * @property string|null                                                             $subtitle
 * @property string|null                                                             $title
 * @property string|null                                                             $txt
 * @property string|null                                                             $user_handle
 * @property \Modules\Lang\Models\Post|null                                          $post
 * @property \Illuminate\Database\Eloquent\Collection|\Modules\Lang\Models\Post[]    $posts
 * @property int|null                                                                $posts_count
 * @property \Modules\LU\Models\Profile|null                                         $profile
 * @property mixed                                                                   $url
 * @property \Illuminate\Database\Eloquent\Collection|\Spatie\ModelStatus\Status[]   $statuses
 * @property int|null                                                                $statuses_count
 * @property User|null                                                               $user
 * @property \Illuminate\Database\Eloquent\Collection|\Modules\Xot\Models\Widget[]   $widgets
 * @property int|null                                                                $widgets_count
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 8192562 (rebase)
=======
>>>>>>> 1a0a1c9 (rebase)
=======
>>>>>>> baed241 (rebase)
=======
>>>>>>> a6cf74c (rebase)
=======
>>>>>>> 48f4792 (rebase)
 *
 * @method static \Illuminate\Database\Eloquent\Builder|Profile       currentStatus(...$names)
=======
>>>>>>> 802efe7 (up)
<<<<<<< HEAD
<<<<<<< HEAD
=======
 *
>>>>>>> 6e3c302 (Lint)
=======
>>>>>>> c744a19 (up)
<<<<<<< HEAD
<<<<<<< HEAD
=======
 *
>>>>>>> 25f8a08 (Lint)
=======
>>>>>>> b02ae09 (.)
<<<<<<< HEAD
=======
 *
>>>>>>> ee04bc7 (.)
=======
>>>>>>> 6b1fa56 (.)
=======
 *
>>>>>>> c5b6d43 (.)
=======
>>>>>>> 8192562 (rebase)
=======
=======
 *
>>>>>>> 6e3c302 (Lint)
>>>>>>> 1a0a1c9 (rebase)
=======
>>>>>>> baed241 (rebase)
=======
=======
 *
>>>>>>> 25f8a08 (Lint)
>>>>>>> a6cf74c (rebase)
=======
>>>>>>> 48f4792 (rebase)
 * @method static \Modules\Blog\Database\Factories\ProfileFactory     factory(...$parameters)
 * @method static \Illuminate\Database\Eloquent\Builder|Profile       newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Profile       newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|BaseModelLang ofItem(string $guid)
 * @method static \Illuminate\Database\Eloquent\Builder|Profile       ofLayoutPosition($layout_position)
 * @method static \Illuminate\Database\Eloquent\Builder|Profile       otherCurrentStatus(...$names)
 * @method static \Illuminate\Database\Eloquent\Builder|Profile       query()
 * @method static \Illuminate\Database\Eloquent\Builder|Profile       whereAddress($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Profile       whereAdministrativeAreaLevel1($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Profile       whereAdministrativeAreaLevel1Short($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Profile       whereAdministrativeAreaLevel2($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Profile       whereAdministrativeAreaLevel2Short($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Profile       whereAdministrativeAreaLevel3($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Profile       whereAdministrativeAreaLevel3Short($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Profile       whereBio($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Profile       whereCampground($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Profile       whereCampgroundShort($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Profile       whereCountry($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Profile       whereCountryShort($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Profile       whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Profile       whereCreatedBy($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Profile       whereDeletedBy($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Profile       whereEmail($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Profile       whereFirstname($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Profile       whereGithubUsername($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Profile       whereGoogleplaceUrl($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Profile       whereGoogleplaceUrlShort($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Profile       whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Profile       whereLastName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Profile       whereLocality($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Profile       whereLocalityShort($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Profile       wherePhone($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Profile       wherePointOfInterest($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Profile       wherePointOfInterestShort($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Profile       wherePolitical($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Profile       wherePoliticalShort($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Profile       wherePostType($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Profile       wherePostalCode($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Profile       wherePostalCodeShort($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Profile       wherePostalTown($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Profile       wherePostalTownShort($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Profile       wherePremise($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Profile       wherePremiseShort($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Profile       whereRoute($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Profile       whereRouteShort($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Profile       whereStreetNumber($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Profile       whereStreetNumberShort($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Profile       whereSurname($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Profile       whereTwitter($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Profile       whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Profile       whereUpdatedBy($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Profile       whereUserId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|BaseModelLang withPost(string $guid)
 * @mixin \Eloquent
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 1a0a1c9 (rebase)
 *
 * @method static \Illuminate\Database\Eloquent\Builder|Profile whereFirstName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Profile whereLastName($value)
 *
 * @property string                                                                $status
 * @property \Illuminate\Database\Eloquent\Collection|\Spatie\ModelStatus\Status[] $statuses
 * @property int|null                                                              $statuses_count
 *
=======
 * @property int $id
 * @property string|null $post_type
 * @property string|null $bio
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property string|null $created_by
 * @property string|null $updated_by
 * @property string|null $deleted_by
 * @property string|null $firstname
 * @property string|null $surname
 * @property string|null $email
 * @property string|null $phone
 * @property string|null $address
 * @property int|null $user_id
 * @property string|null $premise
 * @property string|null $premise_short
 * @property string|null $locality
 * @property string|null $locality_short
 * @property string|null $postal_town
 * @property string|null $postal_town_short
 * @property string|null $administrative_area_level_3
 * @property string|null $administrative_area_level_3_short
 * @property string|null $administrative_area_level_2
 * @property string|null $administrative_area_level_2_short
 * @property string|null $administrative_area_level_1
 * @property string|null $administrative_area_level_1_short
 * @property string|null $country
 * @property string|null $country_short
 * @property string|null $street_number
 * @property string|null $street_number_short
 * @property string|null $route
 * @property string|null $route_short
 * @property string|null $postal_code
 * @property string|null $postal_code_short
 * @property string|null $googleplace_url
 * @property string|null $googleplace_url_short
 * @property string|null $point_of_interest
 * @property string|null $point_of_interest_short
 * @property string|null $political
 * @property string|null $political_short
 * @property string|null $campground
 * @property string|null $campground_short
 * @property string|null $github_username
 * @property string|null $twitter
 * @property string|null $first_name
 * @property string|null $last_name
 * @property mixed $handle
 * @property-read \Illuminate\Database\Eloquent\Collection|\Modules\Blog\Models\Article[] $articles
 * @property-read int|null $articles_count
 * @property-read \Illuminate\Database\Eloquent\Collection|\Modules\Xot\Models\Widget[] $containerWidgets
 * @property-read int|null $container_widgets_count
 * @property-read string|null $full_name
 * @property string|null $guid
 * @property string|null $image_src
 * @property-read string|null $lang
 * @property-read string $status
 * @property string|null $subtitle
 * @property string|null $title
 * @property string|null $txt
 * @property-read string|null $user_handle
 * @property-read \Modules\Lang\Models\Post|null $post
 * @property-read \Illuminate\Database\Eloquent\Collection|\Modules\Lang\Models\Post[] $posts
 * @property-read int|null $posts_count
 * @property-read \Modules\LU\Models\Profile|null $profile
 * @property-write mixed $url
 * @property-read \Illuminate\Database\Eloquent\Collection|\Spatie\ModelStatus\Status[] $statuses
 * @property-read int|null $statuses_count
 * @property-read User|null $user
 * @property-read \Illuminate\Database\Eloquent\Collection|\Modules\Xot\Models\Widget[] $widgets
 * @property-read int|null $widgets_count
>>>>>>> bc6d311 (up)
 * @method static \Illuminate\Database\Eloquent\Builder|Profile currentStatus(...$names)
 * @method static \Modules\Blog\Database\Factories\ProfileFactory factory(...$parameters)
 * @method static \Illuminate\Database\Eloquent\Builder|Profile newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Profile newQuery()
=======
 *
 * @method static \Illuminate\Database\Eloquent\Builder|Profile       currentStatus(...$names)
 * @method static \Modules\Blog\Database\Factories\ProfileFactory     factory(...$parameters)
 * @method static \Illuminate\Database\Eloquent\Builder|Profile       newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Profile       newQuery()
>>>>>>> 8213e79 (Lint)
 * @method static \Illuminate\Database\Eloquent\Builder|BaseModelLang ofItem(string $guid)
 * @method static \Illuminate\Database\Eloquent\Builder|Profile       ofLayoutPosition($layout_position)
 * @method static \Illuminate\Database\Eloquent\Builder|Profile       otherCurrentStatus(...$names)
 * @method static \Illuminate\Database\Eloquent\Builder|Profile       query()
 * @method static \Illuminate\Database\Eloquent\Builder|Profile       whereAddress($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Profile       whereAdministrativeAreaLevel1($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Profile       whereAdministrativeAreaLevel1Short($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Profile       whereAdministrativeAreaLevel2($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Profile       whereAdministrativeAreaLevel2Short($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Profile       whereAdministrativeAreaLevel3($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Profile       whereAdministrativeAreaLevel3Short($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Profile       whereBio($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Profile       whereCampground($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Profile       whereCampgroundShort($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Profile       whereCountry($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Profile       whereCountryShort($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Profile       whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Profile       whereCreatedBy($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Profile       whereDeletedBy($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Profile       whereEmail($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Profile       whereFirstname($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Profile       whereGithubUsername($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Profile       whereGoogleplaceUrl($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Profile       whereGoogleplaceUrlShort($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Profile       whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Profile       whereLastName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Profile       whereLocality($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Profile       whereLocalityShort($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Profile       wherePhone($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Profile       wherePointOfInterest($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Profile       wherePointOfInterestShort($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Profile       wherePolitical($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Profile       wherePoliticalShort($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Profile       wherePostType($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Profile       wherePostalCode($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Profile       wherePostalCodeShort($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Profile       wherePostalTown($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Profile       wherePostalTownShort($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Profile       wherePremise($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Profile       wherePremiseShort($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Profile       whereRoute($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Profile       whereRouteShort($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Profile       whereStreetNumber($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Profile       whereStreetNumberShort($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Profile       whereSurname($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Profile       whereTwitter($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Profile       whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Profile       whereUpdatedBy($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Profile       whereUserId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|BaseModelLang withPost(string $guid)
 *
 * @mixin \Eloquent
=======
 * @method static \Illuminate\Database\Eloquent\Builder|Profile whereFirstName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Profile whereLastName($value)
>>>>>>> 8192562 (rebase)
=======
=======
 *
>>>>>>> a6cf74c (rebase)
 * @method static \Illuminate\Database\Eloquent\Builder|Profile whereFirstName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Profile whereLastName($value)
 *
 * @property string                                                                $status
 * @property \Illuminate\Database\Eloquent\Collection|\Spatie\ModelStatus\Status[] $statuses
 * @property int|null                                                              $statuses_count
 *
 * @method static \Illuminate\Database\Eloquent\Builder|Profile currentStatus(...$names)
 * @method static \Illuminate\Database\Eloquent\Builder|Profile otherCurrentStatus(...$names)
>>>>>>> baed241 (rebase)
 */
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 378fec2 (up)
=======
>>>>>>> 5ab9321 (rebase)
=======
>>>>>>> 09d142f (rebase)
=======
>>>>>>> 6fec78e (rebase)
=======
>>>>>>> aef633b (rebase)
=======
>>>>>>> 1316785 (rebase)
=======
>>>>>>> 360b73d (rebase)
=======
>>>>>>> bc3e845 (rebase)
class Profile extends BaseModelLang {
=======
class Profile extends BaseModelLang
{
=======
class Profile extends BaseModelLang {
>>>>>>> e0d1f4b (Lint)
=======
class Profile extends BaseModelLang
{
>>>>>>> de5af69 (up)
=======
class Profile extends BaseModelLang {
>>>>>>> c24d571 (Lint)
    // use GeoTrait; -- to profile in geo
<<<<<<< HEAD
>>>>>>> 71f0636 (up)
=======
=======
class Profile extends BaseModelLang
{
=======
class Profile extends BaseModelLang {
>>>>>>> 0834824 (Lint)
=======
class Profile extends BaseModelLang
{
>>>>>>> 48f4792 (rebase)
    use GeoTrait;
>>>>>>> b02ae09 (.)
<<<<<<< HEAD
>>>>>>> 5ab9321 (rebase)
=======
=======
=======
>>>>>>> aff4d2d (rebase)
=======
>>>>>>> f0ffa9e (rebase)
class Profile extends BaseModelLang
{
    use GeoTrait;
=======
class Profile extends BaseModelLang {
=======
class Profile extends BaseModelLang
{
>>>>>>> 42ca46e (up)
=======
class Profile extends BaseModelLang {
>>>>>>> afa2edf (Lint)
    // use GeoTrait; -- to profile in geo
>>>>>>> 0cf44f8 (up)
>>>>>>> 6f3084b (rebase)
<<<<<<< HEAD
>>>>>>> 09d142f (rebase)
=======
=======
class Profile extends BaseModelLang
{
    use GeoTrait;
>>>>>>> 92d6d85 (.)
>>>>>>> 1316785 (rebase)
    use HasProfileTrait;
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
    use WidgetTrait;
    use HasStatuses;
    // use PrivacyTrait;
    use WidgetTrait;
    use HasStatuses;
=======
<<<<<<< HEAD
>>>>>>> e585fd6 (rebase)
=======
<<<<<<< HEAD
>>>>>>> 04bbd8b (rebase)
=======
<<<<<<< HEAD
=======
>>>>>>> baed241 (rebase)
>>>>>>> f0d2ac8 (rebase)
=======
<<<<<<< HEAD
=======
>>>>>>> baed241 (rebase)
=======
>>>>>>> a6cf74c (rebase)
>>>>>>> 7f62475 (rebase)
    // use PrivacyTrait;
    use WidgetTrait;
    use HasStatuses;
=======
    //use PrivacyTrait;
    use WidgetTrait;
     use HasStatuses;
>>>>>>> c744a19 (up)
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> a6cf74c (rebase)
=======
    // use PrivacyTrait;
    use WidgetTrait;
    use HasStatuses;
>>>>>>> 25f8a08 (Lint)
<<<<<<< HEAD
=======
>>>>>>> baed241 (rebase)
=======
>>>>>>> a6cf74c (rebase)
    // use HasTicketTrait;
    // use HasFactory;

    /**
     * se non metto $connection  quando faccio la relazione con lu, prende la connection di lu.
     *
     **/
    protected $connection = 'mysql'; // this will use the specified database conneciton

    /**
     * @var string[]
     */
    protected $fillable = [
        'id',
        'user_id',
        'phone',
        'email',
        'bio',
        'github_username',
        'has_twitter_account',
        'twitter',
        // ,'handle' solo in appends perche' non deve essere modificato
    ];
    /**
     * @var string[]
     */
    protected $appends = ['handle'];
    /**
     * @var array<string, string>
     */
    protected $casts = [
        // 'date_start' => 'datetime:Y-m-d\TH:i',
        // 'date_end' => 'datetime:Y-m-d\TH:i',
        'handle' => UserField::class,
    ];

<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 914e6a9 (rebase)
=======
>>>>>>> 4f828c4 (rebase)
=======
    

>>>>>>> b022d6c (up)
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 5376387 (Lint)
=======
=======
>>>>>>> 7424c65 (rebase)
=======
    

>>>>>>> a780d70 (up)
<<<<<<< HEAD
>>>>>>> a3494d5 (rebase)
=======
=======
>>>>>>> bc82fdc (Lint)
>>>>>>> 7424c65 (rebase)
=======
>>>>>>> 914e6a9 (rebase)
=======
=======
>>>>>>> 5376387 (Lint)
>>>>>>> 4f828c4 (rebase)
    // ------- RELATIONSHIP ----------

    public function articles(): HasMany
    {
        return $this->hasMany(Article::class, 'author_id', 'user_id');
    }

    // ---- mutators ---
    /*  ------------------ utilizza quello di HasProfileTrait
    public function getFullNameAttribute($value) {
        return $value;
        $user = User::firstOrCreate(['user_id' => $this->user_id]);
        $user->post()->firstOrCreate(['guid' => $user->handle, 'lang' => app()->getLocale()]);

        $value = $user->first_name.' '.$user->last_name;
        if (strlen($value) < 5) {
            $value .= ' '.$user->handle;
        }
        $value = trim($value);

        return $value;
    }
    */

    protected function username(): Attribute
    {
        $user = $this->user;
        if (null == $user) {
            // $user1 = User::firstOrCreate(['id' => $this->user_id]);
            // dddx($user1->username());
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> f930b9f (rebase)
=======
>>>>>>> af0dac7 (rebase)
=======
>>>>>>> b996731 (rebase)
=======
>>>>>>> a3bd33a (rebase)
            $user = (object) [
                'handle' => 'no-set',
=======
            $user=(object)[
                'handle'=>'no-set',
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> f4041d1 (up)
=======
            $user = (object) [
                'handle' => 'no-set',
>>>>>>> a822353 (.)
<<<<<<< HEAD
=======
>>>>>>> b96306f (up)
<<<<<<< HEAD
>>>>>>> f930b9f (rebase)
=======
=======
            $user = (object) [
                'handle' => 'no-set',
>>>>>>> 1daf8a3 (Lint)
>>>>>>> af0dac7 (rebase)
=======
>>>>>>> f4041d1 (up)
>>>>>>> b996731 (rebase)
=======
>>>>>>> a3bd33a (rebase)
            ];
        }

        return Attribute::make(
            get: fn ($value) => $user->handle,
        );
    }

    protected function name(): Attribute
    {
        $user = $this->user;
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> f930b9f (rebase)
=======
>>>>>>> af0dac7 (rebase)
=======
>>>>>>> b996731 (rebase)
=======
>>>>>>> a3bd33a (rebase)
        if (null == $user) {
            $user = (object) [
                'first_name' => 'no-set',
=======
        if($user==null){
            $user=(object)[
                'first_name'=>'no-set',
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> f4041d1 (up)
=======
        if (null == $user) {
            $user = (object) [
                'first_name' => 'no-set',
>>>>>>> a822353 (.)
<<<<<<< HEAD
=======
>>>>>>> b96306f (up)
<<<<<<< HEAD
>>>>>>> f930b9f (rebase)
=======
=======
        if (null == $user) {
            $user = (object) [
                'first_name' => 'no-set',
>>>>>>> 1daf8a3 (Lint)
>>>>>>> af0dac7 (rebase)
=======
>>>>>>> f4041d1 (up)
>>>>>>> b996731 (rebase)
=======
>>>>>>> a3bd33a (rebase)
            ];
        }

        return Attribute::make(
            get: fn ($value) => $user->first_name,
        );
    }

    /*
    Access to an undefined property Modules\LU\Models\User::$txt.
    protected function bio(): Attribute {
        $user = $this->user;

        return Attribute::make(
            get: fn ($value) => $user->txt,
        );
    }
    */

    protected function githubUsername(): Attribute
    {
        return Attribute::make(
            get: fn ($value) => $this->github_username ?? '',
        );
    }

    protected function hasTwitterAccount(): Attribute
    {
        return Attribute::make(
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 1fdd40b (rebase)
=======
>>>>>>> 2028365 (rebase)
            get: fn ($value) => false, // ! empty($this->twitter()),
=======
            get: fn ($value) => false, //! empty($this->twitter()),
>>>>>>> ea58237 (up)
<<<<<<< HEAD
<<<<<<< HEAD
=======
            get: fn ($value) => false, // ! empty($this->twitter()),
>>>>>>> 209739c (Lint)
=======
=======
>>>>>>> c5a3a82 (rebase)
            get: fn ($value) => false, // ! empty($this->twitter()),
=======
            get: fn ($value) => false, //! empty($this->twitter()),
>>>>>>> 1172c16 (up)
<<<<<<< HEAD
>>>>>>> 37f274f (rebase)
=======
=======
            get: fn ($value) => false, // ! empty($this->twitter()),
>>>>>>> 7333c06 (Lint)
>>>>>>> c5a3a82 (rebase)
=======
>>>>>>> 1fdd40b (rebase)
=======
=======
            get: fn ($value) => false, // ! empty($this->twitter()),
>>>>>>> 209739c (Lint)
>>>>>>> 2028365 (rebase)
        );
    }

    protected function twitter(): Attribute
    {
        return Attribute::make(
            get: fn ($value) => '',
        );
    }

    public function isLoggedInUser(): bool
    {
        return Auth::id() === $this->getKey();
    }

    public function isBanned(): bool
    {
        return 'ban' === $this->status;
    }
}// end model
