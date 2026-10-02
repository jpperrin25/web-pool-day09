<?php

function form_is_submitted()
{
    return isset($_POST["submit"]);
}

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
            echo "Hi, I have no name.";
        }
    }

    if (isset($_POST["curriculum"]) && $_POST["curriculum"] !== "")
    {
        switch ($_POST["curriculum"])
        {
            case "pge":
                echo " I'm a student of PGE (Programme Grande Ecole).";
                break;

            case "bachelor":
                echo " I'm a student of Bachelor.";
                break;

            case "msc":
                echo " I'm a student of MSc Pro.";
                break;

            case "coding":
                echo " I'm a student of Coding Academy.";
                break;

            case "wac":
                echo " I'm a student of Web@cademie.";
                break;
        }
    }
}