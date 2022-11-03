<?php
  include 'data.php';
?>


<!doctype html>
<html lang="en">
  <head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  </head>
  <body class="container p-5">
    <table class="table table-bordered">
      <tr>
        <th>ID</th>
        <th>Name</th>
        <th>Price</th>
        <th>Sale Price</th>
        <th>Image</th>
      </tr>
      
      <?php function _getSaleProduct($products){ ?>
        <?php foreach ($products as $key => $value) {?>
          <?php if ($value['sale_price'] > 0) {?>
            <tr>
              <td>
                <?php echo $key + 1?>
              </td>
              <td>
                <?php echo $value['name']?>
              </td>
              <td>
                <?php echo $value['price']?>
              </td>
              <td>
                <?php echo $value['sale_price']?>
              </td>
              <td style="width: 10%;">
                <img src="<?php echo $value['image']?>" alt="" class="card-img">
              </td>
            </tr>
          <?php }?>
        <?php }?>
      <?php }?>
      
      <?php echo _getSaleProduct($product)?>
    </table>  
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>