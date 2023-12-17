
<?php

use Carbon\Carbon;


$e = 0;
function ed($var, $colorClass = '', $title = "")
{
    global $e;
    if ($e == 0) {
        $colorClass = 'background-color: #D8E9FF';
        $e++;
    } else {
        $e = 0;
        $colorClass = ' background-color: #d9f2d9';
    }
    if ($var == false) {
        echo "<span style='  width: 80%;
        display: block;
        margin: 5px auto;
        padding: 5px;
        border-radius: 5px;
        font-family: monospace;  {$colorClass}' >$title";
        var_dump($var);
        echo "</span>";
        return;
    }
    if (is_array($var)) {
        echo "<pre style='  width: 80%;
        display: block;
        margin: 5px auto;
        padding: 5px;
        border-radius: 5px;
        font-family: monospace;  {$colorClass}'>$title";
        print_r($var);
        echo "</pre>";
    } elseif (is_string($var)) {
        echo "<span style='  width: 80%;
        display: block;
        margin: 5px auto;
        padding: 5px;
        border-radius: 5px;
        font-family: monospace;  {$colorClass}'>$title" . $var . "</span>";
    } elseif (is_object($var)) {
        echo "<pre style='  width: 80%;
        display: block;
        margin: 5px auto;
        padding: 5px;
        border-radius: 5px;
        font-family: monospace;  {$colorClass}' >$title";
        var_dump($var);
        echo "</pre>";
    } else {
        echo "<pre style='  width: 80%;
        display: block;
        margin: 5px auto;
        padding: 5px;
        border-radius: 5px;
        font-family: monospace;  {$colorClass}' >$title";
        var_dump($var);
        echo "</pre>";
    }
}
function uniqeFileName($name)
{
    return Carbon::now()->format('Y_m_d-H_i_s-u'). $name;
}
function zaman($date){
    return verta($date)->format('Y/m/d H:i');
}

