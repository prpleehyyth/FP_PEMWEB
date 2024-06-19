<?php

session_start();

function auth()
{
    if (isset($_SESSION['username'])) return true;

    return false;
}
