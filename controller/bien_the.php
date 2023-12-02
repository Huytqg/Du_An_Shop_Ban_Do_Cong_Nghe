<?php
function insertbienthe($name,$category_id)
{
    $sql = "INSERT INTO bien_the(name,category_id) VALUES ('$name','$category_id')";
    pdo_execute($sql);
}

function Onebienthe_name($name)
{
    $sql = "SELECT name FROM bien_the WHERE name like '% $name %'";
    return pdo_query_one($sql);
}
