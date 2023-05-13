<?php

declare(strict_types=1);

namespace App\Http\Controllers\Admin\Social;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Inertia\Response;

class CreateSocialController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(Request $request): Response|\Inertia\ResponseFactory
    {
        return inertia('Admin/Social/Create');
    }
}
