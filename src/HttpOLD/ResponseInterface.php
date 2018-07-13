<?php

/*
 * This file is part of the php-phantomjs.
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace JonnyW\PhantomJs\HttpOLD;

/**
 * PHP PhantomJs.
 *
 * @author Jon Wenmoth <contact@jonnyw.me>
 */
interface ResponseInterface
{
    /**
     * Import response data.
     */
    public function import(array $data);

    /**
     * Get HTTP headers array.
     *
     * @return array
     */
    public function getHeaders();

    /**
     * Get HTTP header value for code.
     *
     * @param string $code
     *
     * @return mixed
     */
    public function getHeader($code);

    /**
     * Get response status code.
     *
     * @return int
     */
    public function getStatus();

    /**
     * Get page content from respone.
     *
     * @return string
     */
    public function getContent();

    /**
     * Get content type header.
     *
     * @return string
     */
    public function getContentType();

    /**
     * Get request URL.
     *
     * @return string
     */
    public function getUrl();

    /**
     * Get redirect URL (if redirected).
     *
     * @return string
     */
    public function getRedirectUrl();

    /**
     * Is response a redirect
     *  - Checks status codes.
     *
     * @return bool
     */
    public function isRedirect();

    /**
     * Get time string.
     *
     * @return string
     */
    public function getTime();
}
