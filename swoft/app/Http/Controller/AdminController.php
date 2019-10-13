<?php declare(strict_types=1);
/**
 * This file is part of Swoft.
 *
 * @link https://swoft.org
 * @document https://swoft.org/docs
 * @contact group@swoft.org
 * @license https://github.com/swoft-cloud/swoft/blob/master/LICENSE
 */

namespace App\Http\Controller;

use Swoft;
use Swoft\Http\Server\Annotation\Mapping\Controller;
use Swoft\Http\Server\Annotation\Mapping\RequestMapping;
use Swoft\Http\Server\Annotation\Mapping\RequestMethod;
use Swoft\Http\Message\ContentType;
use Swoft\Http\Message\Response;

/**
 * Class AdminController
 *
 * @Controller(prefix="/admin")
 * @package App\Http\Controller
 */
class AdminController{
    /**
     * 后台首页
     *
     * @RequestMapping(route="/admin", method=RequestMethod::GET)
     * @return Response
     */
    public function index(): Response
    {
        $layout = 'layouts/default.php';

        /*
        $renderer = Swoft::getBean('view');
        $content  = $renderer->render('admin/index');

        return context()->getResponse()->withContentType(ContentType::HTML)->withContent($content);*/
        $data = [
            'name' => 'Swoft',
            'repo' => 'https://github.com/swoft-cloud/swoft',
            'doc' => 'https://swoft.org/docs',
            'method' => __METHOD__,
            'layoutFile' => $layout
        ];

        return view('admin/index', $data, $layout);
    }

    /**
     * 后台登录页面
     *
     * @RequestMapping(route="login", method=RequestMethod::GET)
     * @return Response
     */
    public function login(): Response
    {
        $renderer = Swoft::getBean('view');
        $content  = $renderer->render('admin/login');

        return context()->getResponse()->withContentType(ContentType::HTML)->withContent($content);
    }
}
