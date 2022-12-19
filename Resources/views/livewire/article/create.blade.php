<div>
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">

                        <div class="card ">
                            <div class="card-header card-header-rose card-header-icon">
                                <div class="card-icon">
                                    <i class="material-icons">filter_none</i>
                                </div>
                                <h4 class="card-title">{{ __('Add article') }}</h4>
                            </div>
                            <div class="card-body ">
                                <div class="row">
                                    <div class="col-md-12 text-right">
                                        <a href="{{-- route('article.index') --}}"
                                            class="btn btn-sm btn-rose">{{ __('Back to list') }}</a>
                                    </div>
                                </div>
                                <div class="row">
                                    <label class="col-sm-2 col-form-label">{{ __('Picture') }}</label>
                                    <div class="col-sm-7">
                                        <div class="fileinput fileinput-new text-center" data-provides="fileinput">
                                            <div class="fileinput-new thumbnail">
                                                <img src="{{ asset('material') }}/img/image_placeholder.jpg" alt="...">
                                            </div>
                                            <div class="fileinput-preview fileinput-exists thumbnail"></div>
                                            <div>
                                                <span class="btn btn-rose btn-file">
                                                    <span class="fileinput-new">{{ __('Select image') }}</span>
                                                    <span class="fileinput-exists">{{ __('Change') }}</span>
                                                    <input type="file" name="photo" id="input-picture" require />
                                                </span>
                                                <a href="#pablo" class="btn btn-danger fileinput-exists"
                                                    data-dismiss="fileinput"><i class="fa fa-times"></i>
                                                    {{ __('Remove') }}</a>
                                            </div>

                                            @include('theme::components.alert.feedback', ['field' => 'photo'])

                                        </div>
                                    </div>
                                </div>
                                <x-input.group type="text" name="title" tpl="v2" />
                                <x-input.group type="text" name="slug" tpl="v2" />
                                <x-input.group type="select" name="category_id" tpl="v2" :options="$_theme->getArticleCategoriesOptions()->all()" 
                                 
                                />
                                {{--
                                <div class="row">
                                    <label class="col-sm-2 col-form-label">{{ __('Category') }}</label>
                                    <div class="col-sm-7">
                                        <div class="form-group{{ $errors->has('category_id') ? ' has-danger' : '' }}">
                                            <select class="selectpicker col-sm-12 pl-0 pr-0" name="category_id"
                                                data-style="select-with-transition" title="" data-size="100">
                                                <option value="">-</option>
                                                @foreach ($_theme->getArticleCategories() as $category)
                                                <option value="{{ $category->id }}"
                                                    {{ $category->id == old('category_id') ? 'selected' : '' }}>
                                                    {{ $category->name }}</option>
                                                @endforeach

                                            </select>
                                            @include('theme::components.alert.feedback', ['field' => 'category_id'])
                                        </div>
                                    </div>
                                </div>
                                --}}
                                <x-input.group type="wysiwyg" name="txt" tpl="v2" />
                                {{--
                                <div class="row">
                                    <label class="col-sm-2 col-form-label">{{ __('Content') }}</label>
                                    <div class="col-sm-7">
                                        <div class="form-group{{ $errors->has('content') ? ' has-danger' : '' }}">
                                            <textarea  class="editor-content" id="editor" name="content">
                                                 {!! old('content') !!}
                                                </textarea>
                                            @include('theme::components.alert.feedback', ['field' => 'content'])
                                        </div>
                                    </div>
                                </div>
                                --}}
                                <x-input.group type="textarea" name="excerpt" tpl="v2" />
                                {{--
                                <div class="row">
                                    <label class="col-sm-2 col-form-label">{{ __('Excerpt') }}</label>
                                    <div class="col-sm-7">
                                        <div class="form-group{{ $errors->has('excerpt') ? ' has-danger' : '' }}">
                                            <input class="form-control{{ $errors->has('excerpt') ? ' is-invalid' : '' }}"
                                                name="excerpt" id="input-excerpt" type="text" placeholder="{{ __('Excerpt') }}"
                                                value="{{ old('excerpt') }}" required="true" aria-required="true" />
                                            @include('theme::components.alert.feedback', ['field' => 'excerpt'])
                                        </div>
                                    </div>
                                </div>
                                --}}

                                <div class="row">
                                    <label class="col-sm-2 col-form-label">{{ __('Tags') }}</label>
                                    <div class="col-sm-7">
                                        <div class="form-group{{ $errors->has('tags') ? ' has-danger' : '' }}">
                                            <select class="selectpicker col-sm-12 pl-0 pr-0" name="tags[]"
                                                data-style="select-with-transition" multiple title="-" data-size="7" wire:model="form_data.tags">

                                                @foreach ($_theme->getArticleTags() as $tag)
                                                <option value="{{ $tag->id }}"
                                                    {{ in_array($tag->id, old('tags') ?? []) ? 'selected' : '' }}>
                                                    {{ $tag->name }}</option>
                                                @endforeach

                                            </select>
                                            @include('theme::components.alert.feedback', ['field' => 'tags'])
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <label class="col-sm-2 col-form-label label-checkbox">{{ __('Status') }}</label>
                                    <div class="col-sm-10 checkbox-radios">
                                        <div class="togglebutton">
                                            <label>{{ __('Draft')}}
                                                <input type="checkbox" name="status" value="draft"
                                                    {{ old('status') == 'draft' ? ' checked' : 'published' }} wire:model="form_data.status">
                                                <span class="toggle"></span>
                                                {{ __('Published')}}
                                            </label>
                                        </div>
                                    </div>
                                </div>
                                {{--
                                <x-input.group type="checkbox" name="show_on_homepage" />
                                --}}
                                <div class="row">
                                    <label
                                        class="col-sm-2 col-form-label label-checkbox">{{ __('Show on homepage') }}</label>
                                    <div class="col-sm-4 checkbox-radios">
                                        <div class="form-check" style="margin-top:-6px;">
                                            <label class="form-check-label">
                                                <input class="form-check-input" type="checkbox" name="show_on_homepage" value="1"
                                                        {{ old('show_on_homepage') == 1 ? ' checked' : '' }} wire:model="form_data.show_on_homepage">
                                                <span class="form-check-sign">
                                                    <span class="check"></span>
                                                </span>
                                            </label>
                                        </div>
                                    </div>
                                </div>
                                <x-input.group type="number" name="read_time" tpl="v2" />
                                <x-input.group type="date" name="publish_date" tpl="v2" />
                                {{--
                                <div class="row">
                                    <label class="col-sm-2 col-form-label">{{ __('Publish date') }}</label>
                                    <div class="col-sm-7">
                                        <div class="form-group{{ $errors->has('pulish_date') ? ' has-danger' : '' }}">
                                            <input type="text" name="publish_date" id="publish_date"
                                                placeholder="{{ __('Select date') }}" class="form-control datetimepicker"
                                                value="{{ old('publish_date', now()->format('d-m-Y')) }}" />
                                            @include('theme::components.alert.feedback', ['field' => 'publish_date'])
                                        </div>
                                    </div>
                                </div>
                                --}}
                            </div>
                            <div class="card-footer ml-auto mr-auto">
                                <button type="submit" class="btn btn-rose" wire:click="store()">{{ __('Add article') }}</button>
                            </div>
                        </div>

                </div>
            </div>
        </div>
    </div>
</div>
@push('scripts')
{{--
<script src="{{ asset('material') }}/js/article.js"></script>

    <script>
        
        $(document).ready(function () {
            ClassicEditor
                .create( document.querySelector( '#editor' ) )
                .then( editor => {
                console.log( editor );
                } )
                .catch( error => {
                    console.error( error );
            } );
            $('.datetimepicker').datetimepicker({
                icons: {
                    time: "fa fa-clock-o",
                    date: "fa fa-calendar",
                    up: "fa fa-chevron-up",
                    down: "fa fa-chevron-down",
                    previous: 'fa fa-chevron-left',
                    next: 'fa fa-chevron-right',
                    today: 'fa fa-screenshot',
                    clear: 'fa fa-trash',
                    close: 'fa fa-remove'
                },
                format: 'DD-MM-YYYY'
            });
            $(document).on('blur', 'input#input-title', function () {
                if (!$('input#input-slug').val()) {
                    setSlug($('input#input-title'), $('input#input-slug'));
                }
            })

        });
        
    </script>
    --}}
@endpush