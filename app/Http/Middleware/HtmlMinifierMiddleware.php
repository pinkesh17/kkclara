<?php
namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;


class HtmlMinifierMiddleware{

    public function handle(Request $request, Closure $next){
        /** @var Response $response */
        $response = $next($request);

        // Check if the response is HTML
        if (
            $response instanceof Response &&
            str_contains($response->headers->get('Content-Type'), 'text/html') &&
            !$request->is('no-minify*') // Optional: Skip minify on certain routes
        ) {
            $content = $response->getContent();

            // Basic minification logic
            $minified = preg_replace([
                '/<!--(?!\[if).*?-->/', // Remove HTML comments
                '/>\s+</',              // Remove whitespace between tags
                '/\s{2,}/'              // Collapse multiple spaces
            ], [
                '',
                '><',
                ' '
            ], $content);

            $response->setContent($minified);
        }

        return $response;
    }

   /* public function handle(Request $request, Closure $next)
    {

        $response = $next($request);

        $contentType = $response->headers->get('Content-Type');
        if (strpos($contentType, 'text/html') !== false) {
            $response = $next($request);
            $buffer = $response->getContent();
            if(strpos($buffer,'<pre>') !== false)
            {
                $replace = array(
                    '/<!--[^\[](.*?)[^\]]-->/s' => '',
                    "/<\?php/"                  => '<?php ',
                    "/\r/"                      => '',
                    "/>\n</"                    => '><',
                    "/>\s+\n</"                 => '><',
                    "/>\n\s+</"                 => '><',
                );
            }
            else
            {
                $replace = array(
                    '/<!--[^\[](.*?)[^\]]-->/s' => '',
                    "/<\?php/"                  => '<?php ',
                    "/\n([\S])/"                => '$1',
                    "/\r/"                      => '',
                    "/\n/"                      => '',
                    "/\t/"                      => '',
                    "/ +/"                      => ' ',
                );
            }
            $buffer = preg_replace(array_keys($replace), array_values($replace), $buffer);
            $response->setContent($buffer);
            ini_set('zlib.output_compression', 'On'); // If you like to enable GZip, too!
        }

        return $response;

    }*/



    public function minify2($input)
    {
        $search = [
            '/\>\s+/s',
            '/\s+</s',
        ];

        $replace = [
            '> ',
            ' <',
        ];

        return preg_replace($search, $replace, $input);
    }
}