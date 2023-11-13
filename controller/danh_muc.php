<?php
function insertdm($name)
{
    $sql = "INSERT INTO danh_muc(name) VALUES ('$name')";
    pdo_execute($sql);
}

function Onedm_name($name)
{
    $sql = "SELECT * FROM danh_muc WHERE name='$name'";
    return pdo_query_one($sql);

}
