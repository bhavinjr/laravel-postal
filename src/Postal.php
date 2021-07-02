<?php

namespace Bhavinjr\Postal;

use Bhavinjr\Postal\Errors;

class Postal extends Entity
{
    public function findByCode($pincode)
    {
        try {
            return $this->byCode('GET', $pincode);
        } catch (Errors\BadRequestError $ex) {
            return response()->json(
                ['error' => $ex->getMessage()],
                $ex->getHttpStatusCode()
            );
        }
    }

    public function findByBranch($name)
    {
        try {
            return $this->byBranch('GET', $name);
        } catch (Errors\BadRequestError $ex) {
            return response()->json(
                ['error' => $ex->getMessage()],
                $ex->getHttpStatusCode()
            );
        }
    }
}
