<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  </head>
  <body>
                <?php 
                    $student = array(
                        array(101,"suraj",80),
                        array(102,"Priya",90),
                        array(103,"jignesh",90),
                        array(104,"Rahul",90)
                    );
                    
                ?>
    <div class="container">
        <div class="row">
            <div class="col-md-6 p-5">
                <table class="table table-bordered">
                    <tr>
                        <th>Id</th>
                        <th>Name</th>
                        <th>Marks</th>
                    </tr>
                    <?php
                        for($row=0;$row<4;$row++)
                        {
                            echo "<tr>";
                            for($col=0;$col<3;$col++)
                            {
                               echo "<td>".$student[$row][$col]."</td>";
                                
                            }
                            echo "</tr>";
                        }
                    ?>
                </table>
            </div>
        </div>
    </div>
  </body>
</html>