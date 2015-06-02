<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
*/

Route::get('/success', function() {
    return Response::json(array(
        'data' => array(
            'objects' => array()
        )
    ), 200);
});

Route::get('/error', function() {

    return Response::json(array(
        'error' => array(
            'code'    => 500,
            'message' => 'Internal Server Error'
        )
    ), 500);
});


/* grant_type = client_credentials client_id = your_client_id client_secret = your_client_secret */
Route::get('/oauth/token', function() {
    return Response::json(Authorizer::issueAccessToken());
});