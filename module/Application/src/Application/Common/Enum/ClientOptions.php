<?php
/**
 * Created by PhpStorm.
 * User: adminuser
 * Date: 20.05.15
 * Time: 12:58
 */
namespace Application\Common\Enum;

class ClientOptions extends Common
{
    const PUBLIC_KEY = 'key';
    const PRIVATE_KEY = 'secret';

    /**
     * @var string API version used by the client
     */
    const VERSION = 'version';

    const SCHEME = 'scheme';
    const BASE_URL = 'base_url';
    const STORE_ID = 'store_id';
    const PROTOCOL = 'protocol';
}