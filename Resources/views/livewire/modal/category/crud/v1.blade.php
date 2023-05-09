<x-modal.skin on-submit="delete" :content-padding="false">
    <x-slot name="title">Category Crud</x-slot>
    <div class="row mb-5">
        <div class="col-10">
            <x-input.group type="text" name="name" />
        </div>
        <div class="col-2 d-flex align-items-end">
            <x-button wire:click="add()">+</x-button>
        </div>
    </div>
    <x-flash-message />
    {{--  
    <table class="table table-striped table-hover" wire:sortable="updateOrder">
        @foreach ($categories as $category)
            <tr wire:sortable.item="{{ $category->id }}" wire:key="category-{{ $category->id }}">
                <td wire:sortable.handle>
                    {{ $category->order_column }}
                </td>
                <td>
                    {{ $category->name }}
                </td>
                <td>
                    @foreach ($category->types as $type)
                        <x-badge>{{ $type->categorizable_type }}</x-badge>
                    @endforeach
                </td>
                <td>
                    <x-button wire:click="sub('{{ $category->id }}')">-</x-button>
                </td>
            </tr>
        @endforeach
    </table>
    --}}
    <ul wire:sortable="updateOrder" class="nav flex-column">
        @foreach ($categories as $category)
            <li wire:sortable.item="{{ $category->id }}" wire:key="category-{{ $category->id }}" class="nav-item">
                <div class="row border-bottom">
                    <div class="col-1 ml-10" wire:sortable.handle>
                        <i class="fas fa-sort"></i>
                    </div>
                    <div class="col">
                        <h4>{{ $category->name }}</h4>
                    </div>
                    <div class="col">
                        @foreach ($category->types as $type)
                            <x-badge>{{ $type->categorizable_type }}</x-badge>
                        @endforeach
                    </div>
                    <div class="col">
                        <x-button wire:click="sub('{{ $category->id }}')">-</x-button>
                    </div>
                </div>
            </li>
        @endforeach
    </ul>

    <x-slot name="buttons">
        <button type="button" class="btn btn-danger" wire:click="$emit('modal.close')">
            Cancel !
        </button>
    </x-slot>
</x-modal.skin>
