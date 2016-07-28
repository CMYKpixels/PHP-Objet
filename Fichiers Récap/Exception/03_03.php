<?php
function sum($a, $b)
{
    if (!is_numeric($a) || !is_numeric($b))
    {
        throw new Exception('Les deux paramètres doivent être des nombres');
    }

    return $a + $b;
}

try
{
    echo sum(7, 7);
    echo '<br />';
    echo sum('I am a string', 123);
    echo '<br />';
}
catch (Exception $e)
{
    echo 'Message erreur : ', $e->getMessage();
}

try
{
    echo sum(4, 8);
}
catch (Exception $e)
{
    echo 'Message erreur : ', $e->getMessage();
}

echo '<br />';
print("end");