<?php

namespace App\Console\Commands;

use App\Models\Blog;
use App\Models\Course;
use Illuminate\Console\Command;
use Illuminate\Support\Str;

class UpdateSlugs extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'app:update-slugs';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        $courses = Course::all();
        foreach ($courses as $course) {
            if (empty($course->slug)) {
                $course->slug = Str::slug($course->title_en);
                $course->save();
            }
        }

        $blogs = Blog::all();
        foreach ($blogs as $blog) {
            if (empty($blog->slug)) {
                $blog->slug = Str::slug($blog->title_en);
                $blog->save();
            }
        }
    }
}