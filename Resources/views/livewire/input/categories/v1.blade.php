<div>
    <h4>categories</h4>
    <div class="row">
        <div class="col-md-5">

            <label for="cars">Categorie Disponibili</label>

            <select class="form-control" name="available_cats" id="available_cats"
                wire:model.lazy="form_data.available_cats" multiple>
                @foreach ($availableCategories as $category)
                    <option value="{{ $category->id }}">{{ $category->name }}</option>
                @endforeach
            </select>
        </div>
        <div class="col-md-2 text-center"><br><br>
            <button type="button" wire:click="assign()"
                class="btn btn-sm bg-primary bg-opacity-20 bg-opacity-100-hover text-primary text-white-hover">Assign</button>
            <button type="button" wire:click="remove()"
                class="btn btn-sm bg-primary bg-opacity-20 bg-opacity-100-hover text-primary text-white-hover">Remove</button>
        </div>
        <div class="col-md-5">

            <label for="cars">Categorie Assegnate</label>

            <select class="form-control" name="assigned_cats" id="assigned_cats"
                wire:model.lazy="form_data.assigned_cats" multiple>

                @foreach ($assignedCategories as $category => $category_id)
                    <option value="{{ $category_id }}">{{ $category }}</option>
                @endforeach
            </select>

        </div>
    </div>
</div>
