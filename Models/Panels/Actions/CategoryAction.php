<?php

declare(strict_types=1);

namespace Modules\Blog\Models\Panels\Actions;

// -------- services --------
use Illuminate\Support\Str;
use Modules\Cms\Models\Panels\Actions\XotBasePanelAction;

// -------- bases -----------

/**
 * Class CategoryAction.
 */
class CategoryAction extends XotBasePanelAction
{
    public bool $onContainer = true;

    // public string $icon = '<i class="fa fa-arrow-up"></i><i class="fa fa-arrow-down"></i>';
    public string $icon = '<i class="bi bi-bookmark">Category</i>';

    public string $model_class;
    public string $model_type;

    // public function __construct() {
    //     parent::__construct();
    //     $this->model_class = get_class($this->row);
    //     $this->model_type = Str::snake(class_basename($this->model_class));
    // }

    /**
     * Perform the action.
     *
     * @return mixed
     */
    public function handle()
    {
        // return '';
        dddx([
            $this->row,
        ]);
    }

    public function getOnClick(): ?string
    {
        $this->model_class = get_class($this->panel->row);
        $this->model_type = Str::snake(class_basename($this->model_class));
        $onclick = "Livewire.emit('modal.open', 'modal.category.crud', {'model_type':'".$this->model_type."'})";

        return $onclick;
    }
}
