<?php

namespace App\Http\Livewire;

use Livewire\Component;

class CreateCategory extends Component
{
    public $categories = [
        'Category 1',
        'Category 2',
        'Category 3',
        'Category 4'
    ];

    public $selectCategory = '--';
    public $newCategoryDiv;
    public $newCategoryDivClass = 'hidden';

    public function hideNewCategoryDiv()
    {
        $this->newCategoryDivClass = ($this->selectCategory == 'New Category') ? '' : 'hidden';
    }

    
    public function render()
    {
        return view('livewire.create-category');
    }
}
