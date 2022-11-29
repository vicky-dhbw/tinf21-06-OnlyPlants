<?php

    function myGlobalFunction($file_name)
    {
        $rootPath=$_SERVER['DOCUMENT_ROOT']."/include.php";
        echo $rootPath;
        echo "<br>";
        $server_root_path=substr($rootPath, 0, strpos($rootPath, "/include.php"));
        echo $server_root_path;
        echo "<br>";
       // findFile($server_root_path, $file_name, $server_root_path);
        //return $rootPath;
        $my_array=getDirContents($server_root_path);
        foreach ($my_array as $item){
            if(str_contains($item,$file_name)){
                return $item;
            }
            //echo $item."<br>";
        }
        print realpath($file_name);
    }

    /*function findFile($directory,$file_name,$str): void
    {
        //echo $directory;
        $path=scandir($directory);
        foreach ($path as $item){
            if(is_dir($item)){
                if(!str_starts_with($item, '.')) {
                    findFile($item,$file_name,$str. DIRECTORY_SEPARATOR.$item);
                }
            }
            else{
                echo $str. DIRECTORY_SEPARATOR.$item. "<br>";
            }

        }
        //return $directory;
    }*/
function findFile($directory,$file_name,$str): void
{
    //echo $directory;
    $path=scandir($directory);
    foreach ($path as $item){
        if(is_dir($item)){
            if(!str_starts_with($item, '.')) {
                findFile($item,$file_name,$str. DIRECTORY_SEPARATOR.$item);
            }
        }
        else{
            echo $str. DIRECTORY_SEPARATOR.$item. "<br>";
        }

    }
    //return $directory;
}

function getDirContents($dir, &$results = array())
{
    $files = scandir($dir);

    foreach ($files as $key => $value) {
        $path = realpath($dir . DIRECTORY_SEPARATOR . $value);
        if (!is_dir($path)) {
            $results[] = $path;
        } else if ($value != "." && $value != "..") {
            getDirContents($path, $results);
            $results[] = $path;
        }
    }

    return $results;
}




