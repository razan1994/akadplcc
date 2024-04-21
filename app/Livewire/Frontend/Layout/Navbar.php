<?php

namespace App\Livewire\Frontend\Layout;

use App\Models\Category;
use App\Models\Course;
use Illuminate\Support\Facades\Log;
use Livewire\Component;

class Navbar extends Component
{

    public $searchText = '';
    public function render()
    {
        $search = $this->searchText;
        if ($this->searchText) {
            $searchResult = Course::where('status', 2)
                ->whereHas('sections') // Ensure courses have sections
                ->where(function ($query) use ($search) {
                    $query->where('title_ar', 'like', '%' . $search . '%')
                        ->orWhere('title_en', 'like', '%' . $search . '%');
                })
                ->orderBy('created_at', 'desc')
                ->get();
        } else {
            $searchResult = []; // Set searchResult to an empty array if no search text
        }

        $categories = Category::activeMainCategoriesWithChildrensHavingBlogs()->get() ?? [];

        return view('livewire.frontend.layout.navbar', compact('searchResult', 'categories'));
    }
}
