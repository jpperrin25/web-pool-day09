<?php

function whoami()
{
    $name_exists = isset($_POST["name"]) && $_POST["name"] !== "";

    $age_valid = isset($_POST["age"])
        && is_string($_POST["age"])
        && ctype_digit($_POST["age"])
        && (int)$_POST["age"] > 0;

    if ($name_exists)
    {
        if ($age_valid)
        {
            echo "Hi, my name is " . $_POST["name"] . " and I'm " . $_POST["age"] . " years old.";
        }
        else
        {
            echo "Hi, my name is " . $_POST["name"] . ".";
        }
    }
    else
    {
        if ($age_valid)
        {
            echo "Hi, I have no name and I'm " . $_POST["age"] . " years old.";
        }
        else
        {
            echo "Hi, I have no name and no age.";
        }
    }
}

