<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

class Controller extends BaseController
{

    /**
     * @SWG\Swagger(
     *     schemes={"http"},
     *     host="server.backenduser.com",
     *     basePath="/api",
     *     @SWG\Info(
     *         version="3.0",
     *         title="Laravel with user endApi's",
     *         description="Swagger creates human-readable documentation for your APIs.",
     *     )
     * )
     */
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;
}
