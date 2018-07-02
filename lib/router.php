<?php

/**
 * Executes an action mapped to a specific URI
 *
 * @param $uri string Requested URI
 */
function executeAction($uri) {
    $parsed_uri = parse_url($uri);
    if (array_key_exists($parsed_uri['path'], ROUTES)) {
        $action = ROUTES[$parsed_uri['path']];
        $method = $action[0];
        if (isset($action['auth']) and $action['auth']) {
            checkAuth();
        }
    } else {
        throwException(NOT_FOUND);
        exit;
    }
    try {
        $method();
    } catch (Exception $exception) {
        throwExceptionByCode($exception->getCode());
    }
}
