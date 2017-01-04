<?php


namespace pillr\library\http;


class Constants
{
    const HEADER_HOST = 'Host';
// host header
    const HEADER_CONTENT_TYPE = 'Content-Type';
    const HEADER_CONTENT_LENGTH = 'Content-Length';
    const METHOD_GET = 'get';
    const METHOD_POST = 'post';
    const METHOD_PUT = 'put';
    const METHOD_DELETE = 'delete';
    const HTTP_METHODS = ['get','put','post','delete'];


    const STANDARD_PORTS = [
        'ftp' => 21, 'ssh' => 22, 'http' => 80, 'https' => 443
    ];
    const CONTENT_TYPE_FORM_ENCODED = 'application/x-www-form-urlencoded';
    const CONTENT_TYPE_MULTI_FORM = 'multipart/form-data';
    const CONTENT_TYPE_JSON = 'application/json';
    const CONTENT_TYPE_HAL_JSON = 'application/hal+json';
    const DEFAULT_STATUS_CODE = 200;
    const DEFAULT_REASON = "OK";
    const DEFAULT_BODY_STREAM = 'php://input';
    const DEFAULT_REQUEST_TARGET = '/';
    const MODE_READ = 'r';
    const MODE_WRITE = 'w';
    // NOTE: not all error constants are shown to conserve space
    const ERROR_BAD = 'ERROR: ';
    const ERROR_UNKNOWN = 'ERROR: unknown';
    const ERROR_NO_UPLOADED_FILES = 'ERROR: No uploaded files';
    const ERROR_INVALID_URI = 'ERROR: Invalid URI';
    const ERROR_INVALID_UPLOADED = 'ERROR: Invalid uploaded file';
    const ERROR_MOVE_DONE = 'ERROR: File already moved';
    const ERROR_BAD_DIR = 'ERROR: Bad directory';
    const ERROR_BAD_FILE = 'ERROR: Bad File';
    const ERROR_FILE_NOT = 'ERROR: File not found';
    const ERROR_MOVE_UNABLE = 'ERROR: Enable to move file';
    const ERROR_INVALID_STATUS = 'ERROR: Invalid status code';
    // NOTE: not all status codes are shown here!
    const STATUS_CODES = [
        200 => 'OK',
        301 => 'Moved Permanently',
        302 => 'Found',
        401 => 'Unauthorized',
        404 => 'Not Found',
        405 => 'Method Not Allowed',
        418 => 'I_m A Teapot',
        500 => 'Internal Server Error',
    ];


}