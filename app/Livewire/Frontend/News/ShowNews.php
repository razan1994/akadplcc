<?php

namespace App\Livewire\Frontend\News;

use App\Models\Blog;
use App\Models\Category;
use Livewire\Component;
use Livewire\WithPagination;

class ShowNews extends Component
{
    use WithPagination;
    public $categorySlug;


    public function render()
    {
        $category = Category::where('slug', $this->categorySlug)->first();
        if ($category) {
            $news = Blog::with('category')->where('category_id', $category->id)->where('status', 1)->orderBy('created_at', 'desc')->paginate(12);
        } else {
            $news = Blog::with('category')->where('status', 1)->orderBy('created_at', 'desc')->paginate(12);
        }
        return view('livewire.frontend.news.show-news', compact('news', 'category'));
    }
}
