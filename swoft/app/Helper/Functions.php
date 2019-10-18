<?php
/**
 * This file is part of Swoft.
 *
 * @link     https://swoft.org
 * @document https://swoft.org/docs
 * @contact  group@swoft.org
 * @license  https://github.com/swoft-cloud/swoft/blob/master/LICENSE
 */

function restSuccess($res): Array
{
    $response = ['code' => 200];
    if( is_string($res) )
    {
        $response['message'] = $res;
    }
    else
    {
        $response += (array) $res;
    }

    return $response;
}

function restFail($res): Array
{
    $response = ['code' => 0];
    if( is_string($res) )
    {
        $response['error'] = $res;
    }
    else
    {
        $response = array_merge($response, (array) $res);
    }

    return $response;
}
