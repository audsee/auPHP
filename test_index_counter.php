<?php
    function my_get_num() {
        $myFileName ='my_index_page.cnt';
        $myStrInFile;
        $myIndexCounter;

        $myStrInFile = file_get_contents($myFileName);
       // echo $myStrInFile .'<br/>'; //test
        $myIndexCounter = intval($myStrInFile);
        $myIndexCounter++;
       // printf("%09d\n", $myIndexCounter);
        file_put_contents($myFileName, $myIndexCounter);   
        return $myIndexCounter;
    }

    //test
    printf("SN%09d, Welcome.\n", my_get_num() );

?>
