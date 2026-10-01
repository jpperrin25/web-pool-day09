<?php

function dynamic_body()
{
    if (isset($_GET["page"]))
    {
        if ($_GET["page"] == "home")
        {
            return file_get_contents("home.html");
        }
        elseif ($_GET["page"] == "php")
        {
            return file_get_contents("php.html");
        }
        elseif ($_GET["page"] == "sql")
        {
            return file_get_contents("sql.html");
        }
        else 
        {
            return "<p>Unknow page</p>";
        }
    }
    else
    {
        return "<p>Unknown page</p>";
    }
}