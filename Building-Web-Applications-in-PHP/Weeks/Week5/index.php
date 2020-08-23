<!DOCTYPE html>
<html>
    <head>
        <title>Jose Aparicio</title>
        <link rel="stylesheet" href="styles.css">
    </head>
    <body>
        <h1>Jose Aparicio PHP</h1>
        <p>The SHA256 hash of "Jose Aparicio" is
        <?php 
        print hash('sha256', 'Jose Aparicio');
        ?></p>
        <pre>ASCII ART:

    ******************      
            **                  
            **                            
           **                         
          **                      
        **        
      ***</pre>
    <a href="check.php">Click here to check the error setting</a><br>
    <a href="fail.php">Click here to cause a traceback</a>             
    </body>
</html>