<?php

function display_page($file)
{
    if (file_exists($file))
    {
       return file_get_contents($file);
    }
    else
    {
        throw new Exception("Unknown page");
    }
}