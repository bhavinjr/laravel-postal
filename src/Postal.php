<?php

namespace Bhavinjr\Postal;

use Bhavinjr\Postal\Errors;

class Postal extends Entity
{
    public function findByCode($pincode)
    {
        try {
            return $this->findByCode('GET', $pincode);
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
            return $this->findByBranch('GET', $name);
        } catch (Errors\BadRequestError $ex) {
            return response()->json(
                ['error' => $ex->getMessage()],
                $ex->getHttpStatusCode()
            );
        }
    }
}
