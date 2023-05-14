<?php

declare(strict_types=1);

namespace App\Http\Controllers\Admin\Social;

use App\Http\Controllers\Controller;
use App\Models\Social;
use Illuminate\Http\Request;
use Inertia\Response;
use Inertia\ResponseFactory;

class IndexController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(Request $request): Response|ResponseFactory
    {
        $socials = Social::query()->get();

        return inertia('Admin/Social/Index', compact('socials'));

    }
}
