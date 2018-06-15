<?php

    function checkSelectEmptiness ($data, $info)
    {
        if($data)
        {
            return $data;
        }
        else
        {
            $not_found_error = [
                'code'      =>  404,
                'message'   =>  'The requested '.$info.' was not found'
            ];
            return $not_found_error;
        }
    }

    function urlDecoder ($parameter)
    {
        return base64_decode($parameter);
    }

    /** Asset Functionality */
    function assets($path, $secured = false) {
        return urlGenerator()->asset($path, $secured);
    }

    function urlGenerator() {
        return new \Laravel\Lumen\Routing\UrlGenerator(app());
    }