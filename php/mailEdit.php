<?php
    $inputEmails = json_decode(stripslashes($_POST['input']));
    $file = fopen("mailinglist14.txt", "r");
    $currentEmails = fgetcsv($file);
    fclose($file);
    if ($_POST['func'] == "add"){
        $dups = 0;
        $added = 0;
        $inval = 0;
        foreach($inputEmails as $checked){
            if (preg_match("/^[a-zA-Z0-9_.+-]+@[a-zA-Z0-9-]+\.[a-zA-Z0-9-.]+$/", $checked)){
                if (!in_array($checked, $currentEmails)){
                    array_push($currentEmails, $checked);
                    $added++;
                } else {
                    $dups++;
                }
            } else{
                $inval++;
            }
        }
        $file = fopen("mailinglist14.txt", "w") or die("Hello");
        fputcsv($file, $currentEmails);
        fclose($file);
        echo $dups." duplicates, ".$added." added, ".$inval." invalid";
    } else{
        $notfound = 0;
        $removed = 0;
        foreach($inputEmails as $checked){
            $key = array_search($checked, $currentEmails);
            if ($key != FALSE){
                unset($currentEmails[$key]);
                $removed++;
            }
        }
        
        $file = fopen("mailinglist14.txt", "w") or die("Hello");
        fputcsv($file, $currentEmails);
        fclose($file);
        echo $removed." removed.";
    }
?>