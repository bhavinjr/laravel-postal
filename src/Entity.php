<?php

namespace Bhavinjr\Postal;

class Entity extends Api
{
    const RESPONSE_ERROR    = 'Error';

    const RESPONSE_SUCCESS  = 'Success';

    protected function find($method, $pincode)
    {
        $payloadUri = $this->getFullUrl().'/'.$pincode;

        return $this->request($method, $payloadUri);
    }

    /**
     * Makes a HTTP request using Request class and assuming the API returns
     * formatted entity or collection result, wraps the returned JSON as entity
     * and returns.
     *
     * @param string $method
     * @param string $relativeUrl
     * @param array  $data
     *
     * @return Entity
     */
    private function request($method, $relativeUrl, $data = [])
    {
        $response = $this->client->request($method, $relativeUrl, $data);

        $response = head(json_decode($response->getBody()->getContents(), true));

        if (isset($response['Status'])) {
            if ($response['Status'] == self::RESPONSE_ERROR) {
                throw new Errors\BadRequestError($response['Message'], 404);
            }
        }

        return $this->dataTransform($response);
    }

    private function dataTransform($response)
    {
        return [
            'status'    => $response['Status'],
            'message'   => $response['Message'],
            'data'      => $response['PostOffice'],
        ];
    }
}