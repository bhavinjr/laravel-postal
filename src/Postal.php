<?php

namespace Bhavinjr\Postal;

use Bhavinjr\Postal\Errors;

class Postal extends Entity
{
    public function findPost($pincode)
    {
        try {
            return $this->find('GET', $pincode);
        } catch (Errors\BadRequestError $ex) {
            return response()->json(
                ['error' => $ex->getMessage()],
                $ex->getHttpStatusCode()
            );
        }
    }
}
