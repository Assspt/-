
$search_exploded = explode ( " ", $search );
$x = 0; 
foreach( $search_exploded as $search_each ) {
 $x++;
 $construct = " ";
 if( $x == 1 )
   $construct .= "keywords LIKE '%$search_each%' ";
 else
   $construct .= "AND keywords LIKE '%$search_each%' ";
  }
$construct = " SELECT * FROM SEARCH_ENGINE WHERE $construct ";
$run = mysql_query( $construct ); 
