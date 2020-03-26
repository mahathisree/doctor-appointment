<?php
include("configuration.php");
session_start();
    $query = $_GET['query'];
    // gets value sent over search form

    $min_length = 3;
    // you can set minimum length of the query if you want

    if(strlen($query) >= $min_length){ // if query length is more or equal minimum length then

        $query = htmlspecialchars($query);
        // changes characters used in html to their equivalents, for example: < to &gt;

        //$query = mysql_real_escape_string($query);
        // makes sure nobody uses SQL injection

        $sql="SELECT * FROM articles WHERE (`title` LIKE '%".$query."%') OR (`text` LIKE '%".$query."%')";
        $results = mysqli_query($db,$sql);

        // * means that it selects all fields, you can also write: `id`, `title`, `text`
        // articles is the name of our table

        // '%$query%' is what we're looking for, % means anything, for example if $query is Hello
        // it will match "hello", "Hello man", "gogohello", if you want exact match use `title`='$query'
        // or if you want to match just full word so "gogohello" is out use '% $query %' ...OR ... '$query %' ... OR ... '% $query'
$num=mysqli_num_rows($results);
echo $num;
        if($num>0){ // if one or more rows are returned do following

            while($results = mysqli_fetch_array($results)){
            // $results = mysql_fetch_array($raw_results) puts data from database into array, while it's valid it does the loop
                echo "<p><h3>".$results['title']."</h3>".$results['text']."</p>";
                // posts results gotten from database(title and text) you can also show id ($results['id'])
                echo "hai";
            }

        }
        else{ // if there is no matching rows do following
              echo "hai";
            echo "No results";

        }

    }
    else{ // if query length is less than minimum
      echo "Minimum length is ".$min_length;
    }
    ?>
