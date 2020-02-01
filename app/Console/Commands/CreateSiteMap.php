<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;

class CreateSiteMap extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'sitemap:create';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return mixed
     */
    public function handle()
    {
        $sitemap = \App::make('sitemap');
    // add home pages mặc định
    $sitemap->add(\URL::to('/'), \Carbon::now(), 1, 'daily');

    // add bài viết
    $posts = \DB::table('blog_posts')->orderBy('created_at', 'desc')->get();
    foreach ($posts as $post) {
        //$sitemap->add(url, thời gian, độ ưu tiên, thời gian quay lại)
        $sitemap->add(route('post.show', $post->slug), $post->updated_at, 1, 'daily');
    }

    // lưu file và phân quyền
    $sitemap->store('xml', 'sitemap');
    if (\File::exists(public_path('sitemap.xml'))) {
        chmod(public_path('sitemap.xml'), 0777);
    }
     
    }
}
