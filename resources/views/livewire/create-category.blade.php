<div>
    <label for="category"></label>
    <select name="selectCategory" id="selectCategory" wire:model="selectCategory" wire:click="hideNewCategoryDiv()" class="bg-slate-700 p-2">
        <option selected>--</option>
        
        @foreach ($categories as $category)
            <option>{{ $category }}</option>
        @endforeach
        
        <option>New Category</option>
    </select>

    <div wire:model="newCategoryDiv" class="{{ $newCategoryDivClass }}">
        <br><br>

        <label for="newCategory" name="newCategoryLabel" class="">New Category : &nbsp</label><br>
        <input type="text" name="newCategory" class="bg-slate-700 p-2" value="">  
    </div>
    
</div>
