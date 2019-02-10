<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\ReleaseNews;
use Log;

class ReleaseNewsController extends Controller
{
    public function __construct(ReleaseNews $releaseNews) {
        $this->releaseNews = $releaseNews;
    }
    
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(array $result = []) {
        $result['types'] = $this->releaseNews::getAllCrawlTypes();
        $result['releases'] = $this->releaseNews::getReleaseNews();
        return view('pages.news.index', ['datas' => $result]);
    }
}