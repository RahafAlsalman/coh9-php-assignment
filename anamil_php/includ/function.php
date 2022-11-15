<?php

/**
 * HTU Redirect - it redirect the script to a required path.
 *
 * @param String $path
 * @return void
 */
function animl_redirect($path)
{
    header("Location: $path");
    exit();
}