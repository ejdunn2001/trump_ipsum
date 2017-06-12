<?php

//DECLARE FUNCTIONS

function validationLength($var, $length) {
    if(strlen($var) >= $length) {
        return TRUE;
    }
}

function formTextField($id, $label, $type, $value =' ') {
    echo '<label for="'.$id.'">'.$label.'</label>' ."\n";
    echo '<input class="form-control" type="'.$type.'" name="'.$id.'" id = "'.$id.'"' ."\n";
    if(isset($value)) {echo ' value="'.$value.'"';}
    echo '/>' ."\n";    
    echo '<br>' ."\n";
    return TRUE;
}

function formTextArea($id, $label, $rows, $cols, $submitted) {
     echo '<label for="'.$id.'">'.$label.'</label>' ."\n";
    echo '<textarea class="form-control" name="'.$id.'" id="'.$id.'" rows="'.$rows.'" cols="'.$cols.'">';
    if(isset($submitted)) {echo $submitted;}
    echo '</textarea><br>';
    return TRUE;
}


//FUNCTION FOR NUMBER OF WORDS
function words($words){
    if($dbc = mysqli_connect('localhost', 'root', 'root', 'trump_ipsum')){
        $query = "SELECT list_text FROM tweets ORDER BY RAND() LIMIT $words";//build query
        for ($i = 1; $i <= $words; $i++) {
            if($r = mysqli_query($dbc, $query)){//run query
                $row = mysqli_fetch_row($r);
                $combined = implode($row);
                $wordcount = str_word_count($combined, 1);
                for ($i = 1; $i <= $words; $i++){
                    shuffle($wordcount);
                    $randomWords = $wordcount[0];
                    echo $randomWords." ";
                }
            }       
        }
    }else{
        echo "bad connection";
    }    
    mysqli_close($dbc); //close the connection

    return TRUE;
}

//FUNCTION FOR NUMBER OF TWEETS
function tweets($tweets){
    if($dbc = mysqli_connect('localhost', 'root', 'root', 'trump_ipsum')){
        $query = "SELECT list_text FROM tweets ORDER BY RAND() LIMIT $tweets";//build query
        if($r = mysqli_query($dbc, $query)){//run query
            while($row = mysqli_fetch_array($r)){
                echo $row['list_text']. '. ';
            }
        }
    }else{
        echo "bad connection";
    }
    mysqli_close($dbc); //close the connection
    return TRUE;
}

//FUNCTION FOR NUMBER OF PARAGRAPHS
function paragraphs($paragraphs){
    if($dbc = mysqli_connect('localhost', 'root', 'root', 'trump_ipsum')){
        $sentences = mt_rand(3,8);
        $query = "SELECT list_text FROM tweets ORDER BY RAND() LIMIT $sentences";//build query 
        for ($i = 1; $i <= $paragraphs; $i++) {
            echo "<p>";
            if($r = mysqli_query($dbc, $query)){//run query
                    while($row = mysqli_fetch_array($r)){
                        echo $row['list_text']. '. ';
                    }
                }
            echo "</p><br>";  
        }
    }else{
        echo "bad connection";
    }
    mysqli_close($dbc); //close the connection
    return TRUE;
}
?>

