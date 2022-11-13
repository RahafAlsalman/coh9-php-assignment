<?php

/**
 * HTU Redirect - it redirect the script to a required path.
 *
 * @param String $path
 * @return void
 */
function animal_redirect($path)
{
    header("Location: $path");
    exit();
}
