<?php

namespace App\Http\Controllers;

use App\Http\Requests\Links\StoreLinkRequest;
use App\Models\ULink;

class LinksController extends Controller {

    /**
     * @param StoreLinkRequest $request
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function store(StoreLinkRequest $request) {
        $data = [
            'original_link' => $request->original_link
        ];
        if ($request->short_link) {
            $data['short_link'] = $request->short_link;
        }

        ULink::create($data);

        return redirect('/')->with('status', 'Link was created');
    }

    /**
     * @param string $link
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function redirectExport(string $link) {
        try {
            $link = ULink::where('short_link', $link)->firstOrFail();
            $link->ucount = $link->ucount + 1;
            $link->save();

            return redirect($link->original_link);
        } catch (\Throwable $throwable) {

            return redirect('/')->with('error', 'Link was not found');
        }
    }
}
