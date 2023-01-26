<?php

declare(strict_types = 1);

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class VulnController extends Controller
{
    public function sqlInjection(Request $request)
    {
        // SQL Injection
        $id = $request->id;

        return \DB::table('posts')
            ->select('postTitle', 'postBody')
            ->whereRaw('id =' . $id)->first();
    }

    public function traversal(Request $request)
    {
        // Path traversal attack
        return response()->download(storage_path('content/') . $request->input('filename'));
    }

    public function openRedirection(Request $request)
    {
        return redirect($request->input('url'));
    }

    public function commandInjection(Request $request)
    {
        exec('whois ' . $request->input('domain'));
    }
}
