<div>
    <div wire:ignore>
        <label for="optionSelect" class="form-label">{{ $name }}</label>
        <select class="form-select" id="optionSelect"  multiple="multiple" name="{{ $name }}[]" >
            @foreach($options as $k=>$v)
                <option value="{{$k}}" {{ in_array($k,$values)?'selected':'' }} >{{ $k }} -{{ $v}}</option>
            @endforeach
        </select>
    </div>
    {{--  
    <div class="my-3">
        Selected Tasks :
        @forelse($selectedTasks as $task)
            {{$task}},
        @empty
            None
        @endforelse
    </div>
    <pre>{{ print_r($selectedOptions,true) }}</pre>
    --}}
</div>
@push('styles')
<link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
@endpush
@push('scripts')
<script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
<script>
    $(document).ready(function() {
        
        $('#optionSelect').select2({
            /*
            tags: true,
            createTag: function (params) {
                console.log('---- params -----');
                console.log(params);
                var term = $.trim(params.term);

                if (term === '') {
                    return null;
                }

                return {
                    id: term,
                    text: term,
                    newTag: true // add additional parameters
                }
            },
            insertTag: function (data, tag) {
                console.log('-------- insertTag ------');
                console.log(data);
                console.log(tag);
                data.push(tag);
            }
            */
        });

        $('#optionSelect').on('change', function (e) {
            //alert($(this).val());
            //@this.set('selectedTasks', $(this).val());
            @this.setValues($(this).val());
        });
    });
</script>
@endpush