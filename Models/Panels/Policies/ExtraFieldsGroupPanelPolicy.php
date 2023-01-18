<?php
namespace Modules\Blog\Models\Panels\Policies;

use Illuminate\Auth\Access\HandlesAuthorization;
use Modules\LU\Models\User as User;
use Modules\Blog\Models\Panels\Policies\ExtraFieldsGroupPanelPolicy as Post; 

use Modules\Cms\Models\Panels\Policies\XotBasePanelPolicy;

class ExtraFieldsGroupPanelPolicy extends XotBasePanelPolicy {
}
