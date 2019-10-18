<?php declare(strict_types=1);
/**
 * This file is part of Swoft.
 *
 * @link     https://swoft.org
 * @document https://swoft.org/docs
 * @contact  group@swoft.org
 * @license  https://github.com/swoft-cloud/swoft/blob/master/LICENSE
 */

namespace App\Http\Controller\Api\V1;

use Swoft\Http\Server\Annotation\Mapping\Controller;
use Swoft\Http\Server\Annotation\Mapping\RequestMapping;
use Swoft\Http\Server\Annotation\Mapping\RequestMethod;
use Throwable;

/**
 * Class UserController
 * @Controller(prefix="/api/v1/user")
 */
class UserController
{
    /**
     * 获取用户信息列表
     *
     * @RequestMapping(route="/api/v1/users", method=RequestMethod::GET)
     * @throws Throwable
     */
    public function index(): Array
    {
        return restSuccess(['ret_data' => [
            'total' => 100,
            'list' => [
                [
                    'uid' => 1
                ],
                [
                    'uid' => 2
                ]
            ]
        ]]);
    }

    /**
     * 用户登录
     *
     * @RequestMapping(route="login", method=RequestMethod::POST)
     * @param Request $request
     */
    public function login(Request $request): Array
    {
        $body = $request->getBodyParams();
        return $body;
    }

    /**
     * 获取用户信息
     *
     * @RequestMapping(route="{uid}", method=RequestMethod::GET)
     * @throws Throwable
     */
    public function get(int $uid)
    {
        return restSuccess(['uid' => $uid]);
    }

    /**
     * 新建用户
     *
     * @RequestMapping(route="/api/v1/user", method=RequestMethod::POST)
     * @param Request $request
     */
    public function post(Request $request)
    {
        $body = $request->getBodyParams();
        return restSuccess($body);
    }
}
