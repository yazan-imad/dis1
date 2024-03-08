<!DOCTYPE html>
<html lang="en" >
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>yazan imad</title>
</head>
<body dir="rtl">
    <form action="" method="post">
        <label>السعر</label>
        <input type="text" name="price" required>
        <label>نسبة تخفيض (%)</label>
        <input type="text" name="discount" required>
        <button type="submit" name="submit">عرض السعر بعد التخفيض</button>
    </form>


    <?php
    if(isset($_POST['submit'])){

        if(is_numeric($_POST['price'])==false){
            echo '<h3>بيانات السعر غير صحيحة يجب ان تكون بالأرقام</h3>';
        }

        if(is_numeric($_POST['discount'])==false){
            echo '<h3>بيانات السعر غير صحيحة يجب ان تكون بالأرقام</h3>';
        }

     if(is_numeric($_POST['price'])==true && is_numeric($_POST['discount'])==true){
            echo "<p> السعر قبل التخفيض" . $_POST['price']."</p>";
            $result = $_POST['price'] * (100-$_POST['discount'])/100;
            echo ' السعر بعد التخفيض ';
            echo 'بالنسبة' . $_POST['discount']."%";
            echo "يكون " .$result ."دينار ";
         
        }
        


        
    }
    ?>


</body>
</html>