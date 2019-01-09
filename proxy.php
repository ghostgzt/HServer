<?php
$url=@$_SERVER["QUERY_STRING"];
$url=str_replace("https://","http://",$url);
if(!$url){die();}
@readfile($url);