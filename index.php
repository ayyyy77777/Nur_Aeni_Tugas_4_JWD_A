<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>
<body>
    <main>
        <h1>Form Input Bilangan Rata-Rata</h1>
        
        <form action="proses.php" method="post">
            <label for="input_bil_satu">Bilangan Pertama: </label>
            <input type="text" name="input_bil_satu" id="input_bil_satu" pattern="[0-9]+" title="Masukkan angka saja!" required>
            <?php
              if(isset($_GET['error_satu'])){
                echo "<p class='error_message'>" . $_GET['error_satu'] . "</p>";
              }
            ?>

            <label for="input_bil_dua">Bilangan Kedua: </label>
            <input type="text" name="input_bil_dua" id="input_bil_dua" pattern="[0-9]+" title="Masukkan angka saja!" required>
            <?php
              if(isset($_GET['error_dua'])){
                echo "<p class='error_message'>" . $_GET['error_dua'] . "</p>";
              }
            ?>

            <label for="input_bil_tiga">Bilangan Ketiga: </label>
            <input type="text" name="input_bil_tiga" id="input_bil_tiga" pattern="[0-9]+" title="Masukkan angka saja!" required>
            <?php
              if(isset($_GET['error_tiga'])){
                echo "<p class='error_message'>" . $_GET['error_tiga'] . "</p>";
              }
            ?>
            
            <input type="submit" value="Submit">
        </form>

        <?php
          if(isset($_GET['rata_rata'])){
            echo "<h2>Rata-Rata = " . $_GET['rata_rata'] . "</h2>";
          }
        ?>
    </main>
    
</body>
</html>
