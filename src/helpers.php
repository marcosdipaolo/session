<?php
if (!function_exists('session')) {
    function session(): \MDP\Session
    {
        return new \MDP\Session;
    }
}