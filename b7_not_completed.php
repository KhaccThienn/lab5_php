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

<body>
  <?php function _select($table)
  { ?>
    <table class="table table-bordered">
      <tr>
        <?php foreach ($table[0] as $key => $value) { ?>
          <th>
            <?php echo ucwords(str_replace('_', ' ', $key)) ?>
          </th>
        <?php } ?>
      </tr>
      <?php foreach ($table as $key => $value) { ?>
        <tr>
          <td><?php echo $value['name'] ?></td>
          <td><?php echo $value['price'] ?></td>
          <td><?php echo $value['sale_price'] ?></td>
          <td class="w-25">
            <img src="<?php echo $value['image'] ?>" class="card-img" alt="">
          </td>
        </tr>
      <?php } ?>
    </table>
  <?php } ?>

  <!-- <?php echo _select($product) ?> -->
  <!-- Optional JavaScript -->
  <!-- jQuery first, then Popper.js, then Bootstrap JS -->
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>

</html>