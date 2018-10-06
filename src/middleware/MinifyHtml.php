<?php
declare(strict_types=1);


namespace Gaia\Tekton\Middleware;

use Closure;
use Illuminate\Http\Response;

/**
 * Class MinifyHtml
 * @package Gaia\Tekton
 */
class MinifyHtml
{
    /**
     * @param $request
     * @param Closure $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        $response = $next($request);
        return $this->html($response);
    }

    /**
     * @param Response $response
     * @return Response
     */
    public function html(Response $response)
    {
        $buffer = $response->getContent();
        $replace = [
            '/<!--[^\[](.*?)[^\]]-->/s'     => '',
            "/<\?php/"                      => '<?php ',
            "/\n([\S])/"                    => '$1',
            "/\r/"                          => '',
            "/\n/"                          => '',
            "/\t/"                          => '',
            '/ +/'                          => ' ',
            '/> </'                         => '><',
            '/ > /'                         => '>',
            '/ <\//'                        => '>',
        ];
        if (false !== strpos($buffer, '<pre>')) {
            $replace = [
                '/<!--[^\[](.*?)[^\]]-->/s' => '',
                "/<\?php/"                  => '<?php ',
                "/\r/"                      => '',
                "/>\n</"                    => '><',
                "/>\s+\n</"                 => '><',
                "/>\n\s+</"                 => '><',
                "/\s+>\s+/"                 => '>',
                '/\s+<\//'                    => '>',
            ];
        }
        $buffer = preg_replace(array_keys($replace), array_values($replace), $buffer);
        $response->setContent($buffer);
        return $response;
    }
}