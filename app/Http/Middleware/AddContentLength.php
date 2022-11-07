<?php

namespace App\Http\Middleware;

use Closure;

// https://laracasts.com/discuss/channels/general-discussion/add-content-length-header-on-views
class AddContentLength
{

    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        $response = $next($request);

        // to be sure nothing was already output (by an echo statement or something)
        if (headers_sent() || ob_get_contents() != '') return $response;

        try {
            $content = $response->content();
            $contentLength = strlen($content);
            $response->header('Content-Length', $contentLength);
        } catch (\Throwable $th) {
        }

        return $response;
    }
}
