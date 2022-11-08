<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Http\Requests\Links\StoreLinkRequest;
use App\Models\ULink;

class ApiLinksController extends Controller {

    /**
     * @param StoreLinkRequest $request
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function store( StoreLinkRequest $request ) {
        $data = [
            'original_link' => $request->original_link
        ];
        if ( $request->short_link ) {
            $data['short_link'] = $request->short_link;
        }

        ULink::create( $data );

        return response()->json( [
            'success' => true
        ] );
    }
}
