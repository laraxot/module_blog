<form method="GET" class="col-md-9">
    <div class="row">
        <div class="col">
            <x-input.group type="select" name="filter[of_type][]" :options="$categorizable_types" class="mb-5" />
        </div>
    </div>
    <div class="row">
        <div class="col">
            <x-button type="submit" class="btn btn-primary mb-5">
                {!! trans('blog::categories.index.nav.button.search') !!}
            </x-button>
        </div>
    </div>
</form>
