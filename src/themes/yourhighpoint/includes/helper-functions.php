<?php
function strip_tel($number)
{
    return preg_replace('/[^0-9]/', '', $number);
}
function strip_link($link)
{
    return strtolower(preg_replace('/\s+/', '', $link));
}