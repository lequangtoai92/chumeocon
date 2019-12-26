<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    protected $view_component;
    protected $view_meta;
    
    public function __construct() {
        $this->view_component = (object)array();
        $this->view_meta = (object)array();
        $this->view_meta->seo_title = 'Truyện chú mèo con - truyện cổ tích';
        $this->view_meta->seo_og_title = 'Truyện chú mèo con - truyện cổ tích';
        $this->view_meta->seo_og_site_name = 'Truyện chú mèo con - truyện cổ tích';
        $this->view_meta->seo_author = 'Truyện chú mèo con - truyện cổ tích'; 
        $this->view_meta->seo_description = 'Nơi lưu trữ những mẫu truyện hay, mang tính giáo dục để bố mẹ kể cho bé nghe nhằm giúp cho bé phát triển tư duy tốt hơn và gắn kết tình cảm giữa bố mẹ và con cái';
        $this->view_meta->seo_og_description = 'Nơi lưu trữ những mẫu truyện hay, mang tính giáo dục để bố mẹ kể cho bé nghe nhằm giúp cho bé phát triển tư duy tốt hơn và gắn kết tình cảm giữa bố mẹ và con cái';
        $this->view_meta->seo_og_url = 'http://truyenchumeocon.com';
        $this->view_meta->seo_og_image = 'http://truyenchumeocon.com/img/img-logo.png';
        $this->view_meta->seo_og_type = 'website';
    }
}
