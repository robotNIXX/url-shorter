<?php

namespace App\Http\Controllers;

use App\Http\Requests\Links\StoreLinkRequest;
use App\Models\ULink;

class LinksController extends Controller {
    public function store(StoreLinkRequest $request) {
        $data = [
            'original_link' => $request->original_link
        ];
        if ($request->short_link) {
            $data['short_link'] = $request->short_link;
        }

        ULink::create($data);
    }
}
