<?php

declare(strict_types=1);

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class Controller extends BaseController
{
    use AuthorizesRequests, ValidatesRequests;

    public function getCategories(int $cid = null): array
    {
        if ($cid !== null) {
            return [
                'cid' => $cid,
                'title' => fake()->jobTitle()
            ];
        }

        $categories = [];
        for ($i=0; $i < 6; $i++) {
            $categories[] = [
                'cid' => ($i === 0) ? ++$i : $i,
                'title' => fake()->jobTitle()
            ];
        }

        return $categories;
    }
    public function getNews(int $id = null): array
    {
        if ($id !== null) {
            return [
                'id' => $id,
                'title' => fake()->jobTitle(),
                'author' => fake()->userName(),
                'image'  => fake()->imageUrl(200, 150),
                'status' => 'ACTIVE',
                'description' => fake()->text(100),
                'created_at' => now()->format('d-m-Y H:i'),
            ];
        }

        $quantityNews = 7;
        $news = [];
        for ($i=0; $i < $quantityNews; $i++) {
            $news[] = [
                'id' => ($i === 0) ? ++$i : $i,
                'title' => fake()->jobTitle(),
                'author' => fake()->userName(),
                'image'  => fake()->imageUrl(200, 150),
                'status' => 'ACTIVE',
                'description' => fake()->text(100),
                'created_at' => now()->format('d-m-Y H:i'),
            ];
        }

        return $news;
    }
}
