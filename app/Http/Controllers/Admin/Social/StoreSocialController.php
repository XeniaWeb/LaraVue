<?php

declare(strict_types=1);

namespace App\Http\Controllers\Admin\Social;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreSocialRequest;
use App\Models\Social;
use Illuminate\Http\RedirectResponse;

class StoreSocialController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(StoreSocialRequest $request): RedirectResponse
    {
        $social = new Social();
        $social->title = $request->get('title');
        $social->lang_key = $request->get('lang_key');
        $social->comment = $request->get('comment');
        $social->save();

        $socials = Social::query()->get();
        return redirect()->route('admin.social.index', compact('socials'));
    }
}
