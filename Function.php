<?php
function getMots($text)
{
    $mots = preg_split('/[\s,!.?]+/', $text, -1, PREG_SPLIT_NO_EMPTY);

    return $mots;
}
function comparaison($file1, $file2)
{
    $mots1 =  getMots($file1);
    $mots2 =  getMots($file2);

    $count = 0;
    for ($i = 0; $i <  count($mots1); $i++) {
        # code...
        for ($j = 0; $j <  count($mots2); $j++) {
            if (strcasecmp($mots1[$i], $mots2[$j])  == 0) {
                // echo " " . $mots1[$i] . "-" . $mots2[$j];
                $count++;
                break;
                # code...
            }
            # code...
        }
    }

    $max = max(count($mots1), count($mots2));
    return (($count / $max) * 100) . " %" ;
}
function upload($name)
{
    $target_dir = "upload/";
    $target_file = $target_dir . basename($_FILES[$name]["name"]);
    $uploadOk = 1;
    
    $fileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));
    
    if($fileType != "txt") {
        $uploadOk = 0;
    }
    
 
    
    if ($_FILES[$name]["size"] > 2000000) {
        $uploadOk = 0;
    }
    
    if ($uploadOk == 0) {
    } else {
        if (move_uploaded_file($_FILES[$name]["tmp_name"], $target_file)) {
        } else {
        }
    }
}
function getContent($filetxt)
{
    $filename = 'upload/'.$filetxt;
    
    $contenu = file_get_contents($filename);
    
    if ($contenu !== false) {
        // echo $contenu;
    } else {
        echo "Impossible de lire le fichier ou contenu vide";
    }
    return $contenu;
}
