<?php

if (str_contains($code, '400')) {
    $error = array(
        'name' => 'Bad Request',
        'description' => 'The request you sent to the website server was somehow incorrect or corrupted and the server couldn\'t understand it.',
        'tip' => 'You should not resubmit this request without modification.'
    );
} elseif (str_contains($code, '401')) {
    $error = array(
        'name' => 'Unauthorized',
        'description' => 'The request could not be completed because the server requires user authentication.',
        'tip' => '',
        'image' =>  ''
    );
} elseif (str_contains($code, '402')) {
    $error = array(
        'name' => 'Payment Required',
        'description' => 'Payment is required to access the requested page or resource.',
        'tip' => '',
        'image' => ''
    );
} elseif (str_contains($code,'403')) {
    $error = array(
        'name' => 'Forbidden',
        'description' => 'You don\'t have the required permissions to access the requested page or resource.',
        'tip' => '',
        'image' => ''
    );
} elseif (str_contains($code,'403')) {
    $error = array(
        'name' => 'Forbidden',
        'description' => 'You don\'t have the required permissions to access the requested page or resource.',
        'tip' => '',
        'image' => ''
    );
} elseif (str_contains($code,'404')) {
    $error = array(
        'name' => 'Not Found',
        'description' => 'The page, file or resource requested could not be found.',
        'tip' => 'If you clicked a link on our website please let us know and we\'ll get it fixed as soon as possible, if you entered the URL yourself please check it and try again.'
    );
} elseif (str_contains($code,'405')) {
    $error = array(
        'name' => 'Method Not Allowed',
        'description' => 'The server does not accept the method you are using to access this resource, it usually means you\'re using the wrong type of request.',
        'tip' => 'You should not resubmit this request without modification.'
    );
} elseif (str_contains($code,'406')) {
    $error = array(
        'name' => 'Not Acceptable',
        'description' => 'The server or application does not support your request due to the protocol being unsupported.',
        'tip' => 'You should not resubmit this request without modification.'
    );
} elseif (str_contains($code,'407')) {
    $error = array(
        'name' => 'Proxy Authentication Required',
        'description' => 'the server cannot complete the request because the client lacks appropriate authentication credentials for a proxy server that intercepts the request between the client and server.',
        'tip' => '',
        'image' => ''
    );
} elseif (str_contains($code,'408')) {
    $error = array(
        'name' => 'Request Timeout',
        'description' => 'The request to the server took too long.',
        'tip' => '',
        'image' => ''
    );
} elseif (str_contains($code,'409')) {
    $error = array(
        'name' => 'Conflict',
        'description' => 'The request could not be processed because of conflict in the request.',
        'tip' => '',
        'image' => ''
    );
} elseif (str_contains($code,'410')) {
    $error = array(
        'name' => 'Gone',
        'description' => 'The requested page or resource is not available and will not be available again.',
        'tip' => 'Please remove all references to this link.'
    );
} elseif (str_contains($code,'411')) {
    $error = array(
        'name' => 'Length Required',
        'description' => '',
        'tip' => '',
        'image' => ''
    );
} elseif (str_contains($code,'412')) {
    $error = array(
        'name' => 'Precondition Failed',
        'description' => 'Access to the target resource has been denied',
        'tip' => '',
        'image' => ''
    );
} elseif (str_contains($code,'413')) {
    $error = array(
        'name' => 'Request Entity Too Large',
        'description' => 'The size of your request exceeds the server\'s file size limit.',
        'tip' => '',
        'image' => ''
    );
} elseif (str_contains($code,'414')) {
    $error = array(
        'name' => 'URI Too Long',
        'description' => 'The URI requested is longer than the server is willing to interpret',
        'tip' => '',
        'image' => ''
    );
} elseif (str_contains($code,'415')) {
    $error = array(
        'name' => 'Unsupported Media Type',
        'description' => 'The server refuses to accept the request because the payload format is in an unsupported format.',
        'tip' => '',
        'image' => ''
    );
} elseif (str_contains($code,'416')) {
    $error = array(
        'name' => 'Range Not Satisfiable',
        'description' => 'The server cannot serve the requested ranges. The most likely reason is that the document doesn\'t contain such ranges, or that the Range header value, though syntactically correct, doesn\'t make sense.',
        'tip' => '',
        'image' => ''
    );
} elseif (str_contains($code,'417')) {
    $error = array(
        'name' => 'Expectation Failed',
        'description' => 'The expectation given in the request\'s Expect header could not be met.',
        'tip' => '',
        'image' => ''
    );
} elseif (str_contains($code,'418')) {
    $error = array(
        'name' => 'I\'m a teapot',
        'description' => 'The server refuses to brew coffee because it is, permanently, a teapot.',
        'tip' => '',
        'image' => 'https://upload.wikimedia.org/wikipedia/commons/thumb/9/9c/Tea_pot.svg/176px-Tea_pot.svg.png'
    );
} elseif (str_contains($code,'422')) {
    $error = array(
        'name' => 'Unprocessable Entity',
        'description' => 'The server understands the content type of the request entity, and the syntax of the request entity is correct, but it was unable to process the contained instructions.',
        'tip' => 'You should not resubmit this request without modification.',
        'image' => ''
    );
} elseif (str_contains($code,'425')) {
    $error = array(
        'name' => 'Too Early',
        'description' => 'The server is unwilling to risk processing a request that might be replayed.',
        'tip' => '',
        'image' => ''
    );
} elseif (str_contains($code,'426')) {
    $error = array(
        'name' => 'Upgrade Required',
        'description' => 'The server refuses to perform the request using the current protocol but might be willing to do so after the client upgrades to a different protocol.',
        'tip' => '',
        'image' => ''
    );
} elseif (str_contains($code,'428')) {
    $error = array(
        'name' => 'Precondition Required',
        'description' => 'The server requires the request to be conditional.',
        'tip' => '',
        'image' => ''
    );
} elseif (str_contains($code,'429')) {
    $error = array(
        'name' => 'Too Many Requests',
        'description' => 'You have sent too many requests in a given amount of time. You may be rate-limited.',
        'tip' => '',
        'image' => ''
    );
} elseif (str_contains($code,'431')) {
    $error = array(
        'name' => 'Request Header Fields Too Large',
        'description' => 'The server refuses to process the request because the request\'s HTTP headers are too long.',
        'tip' => 'The request may be resubmitted after reducing the size of the request headers.',
        'image' => ''
    );
} elseif (str_contains($code,'451')) {
    $error = array(
        'name' => 'Unavailable For Legal Reasons',
        'description' => 'You have requested a resource that is not available due to legal reasons, such as a web page for which a legal action has been issued.',
        'tip' => '',
        'image' => ''
    );
} else {
    $code = 'Unknown';
    $error = array(
        'name' => 'An error has occurred.',
        'description' => 'Something went wrong, that\'s all we know.',
        'tip' => '',
        'image' => ''
    );
}
