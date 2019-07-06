<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function getIndex(){
        return view('page.index');
    }

    public function getNewStory(){
        return view('page.category');
    }

    public function getVietnameseFairyTales (){
        return view('page.category');
    }

    public function getJapanFairyTales(){
        return view('page.category');
    }

    public function getGrimmsFairyTales(){
        return view('page.category');
    }

    public function getGreekMythology(){
        return view('page.category');
    }

    public function getVietnameseProverbs(){
        return view('page.category');
    }

    public function getGoodWord(){
        return view('page.category');
    }

    public function getFunnyStory(){
        return view('page.category');
    }

    public function getFeedback(){
        return view('page.feedback');
    }

    // user
    public function getInfo(){
        return view('user.info');
    }

    public function getMessages(){
        return view('user.messages');
    }

    public function getMyPosts(){
        return view('user.my_posts');
    }

    public function getNotifice(){
        return view('user.notifice');
    }

    public function getPosts(){
        return view('user.posts');
    }
    // end user


    // admin
    public function getAdminAccount(){
        return view('admin.account');
    }

    public function getAdminPosts(){
        return view('admin.posts');
    }

    public function getAdminFeeback(){
        return view('admin.feedback');
    }
    // end admin
}