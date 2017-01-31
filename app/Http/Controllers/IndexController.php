<?php

namespace App\Http\Controllers;

use Illuminate\Routing\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Page;

class IndexController extends Controller {

    private function getIndexPage() {
        $page = Page::where('name', 'Главная')->first();
        $index_page = [
            'page' => $page,
            'templates'  => $page->templates,
            'metas' => []
        ];
        foreach($index_page['templates'] as $key => $val) {
            foreach($val->metas as $meta_key => $meta_val) {
                $index_page['metas'][$val->id][$meta_val->key] = $meta_val->value;
            }
        }
        return $index_page;
    }

    public function getView () {
        $index_page = $this->getIndexPage();
        $data = [
            'index_page' => $index_page['page'],
            'templates'  => $index_page['templates'],
            'metas'      => $index_page['metas'],
        ];

        return view('index', $data);
    }
}