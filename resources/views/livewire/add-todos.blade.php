<div class="flex flex-col items-center mt-4" style="width: 800px">
    <input type="text" placeholder="Type & enter to add" wire:model="item" wire:keydown.enter="addTodo" style="border: 1px solid indianred; border-radius: 20px">

    @error('item')
        <span class="text-red-500 mt-2">{{ $message }}</span>
    @enderror
</div>
