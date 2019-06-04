<?php

/**
 * @method DelUser Deletes the user.
 */

// Path to your autoload.php
require_once '/path/to/vendor/autoload.php';

use Voximplant\VoximplantApi;
use Voximplant\Resources\Params\DelUserParams;

/**
 * In order to use Voximplant PHP SDK, you need the following:
 * 1. A developer account. If you don't have one, sign up here https://voximplant.com/sign-up/.
 * 2. A private API key. To create it, call the [CreateKey] method. Save the result value in a file.
 */

// Create API Object
$voxApi = new VoximplantApi('path/to/private/api/key.json');

/**
 * @param array $params (See below)
 * user_id - The user ID list or the 'all' value.
 * application_name - Delete the specified users bound to the application name. Could be used instead of the application_id parameter.
 */
$params = new DelUserParams();

$params->user_id = 'all';
$params->application_name = 'myapp1';

// Delete the all users bound to the 'myapp1' application.
$result = $voxApi->Users->DelUser($params);

// Show result
var_dump($result);