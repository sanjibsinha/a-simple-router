<?php

include_once 'header.php';
include_once 'sidebar.php';

// we can start with heading
echo "<h1>Home Page</h1>";

//content part starts from here
?>

<form method="GET" action="/name">
    
    <input name="name">
     
    </input>
    
    <button type="submit">Submit</button>
    
</form>

<?php

include_once 'footer.php';