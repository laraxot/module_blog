<x-wire-elements-pro::bootstrap.modal on-submit="delete" :content-padding="false">
    <x-slot name="title">Category Crud</x-slot>


    <div class="row">
        <div class="col-10">
            <x-input.group type="text" name="name" />
        </div>
        <div class="col-2">
            <x-button wire:click="add()">+</x-button>
        </div>
    </div>
    <x-flash-message />
    <table>
        @foreach ($categories as $category)
            <tr>
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

    <x-slot name="buttons">
        <button type="button" class="btn btn-danger" wire:click="$emit('modal.close')">
            Cancel
        </button>
    </x-slot>
</x-wire-elements-pro::bootstrap.modal>
