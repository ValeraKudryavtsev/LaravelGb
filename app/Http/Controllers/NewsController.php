<?php

declare(strict_types=1);

namespace App\Http\Controllers;

use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;

class NewsController extends Controller
{
    public function index(): View
    {
        return view('user.news.index', [
            'newsList' => $this->getNews(),
        ]);
    }

    public function show(int $id): View
    {
        return view('user.news.show', [
            'news' => $this->getNews($id),
        ]);
    }
}
