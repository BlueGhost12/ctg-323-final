<!DOCTYPE html>
<html>
<head>
    <title>
        Forms
    </title>
</head>
<body>
	<h3>Henlo</h3>
    <?php
    
        if(isset($_POST['upload']))
        {
            //var_dump($_FILES);
            if($_FILES['image']['type'] == 'image/jpeg' ) // to restrict type of files to be accepted
            {
                $tmp = $_FILES['image']['tmp_name']; //directory of the uploaded image
                //$img_name = $_FILES['image']['name']; //name of the uploaded image 
                $img_name = uniqid().".jpg"; //gives each uploaded file a unique name so that they may not collide
                move_uploaded_file($tmp, "photos/".$img_name); //upload(the temporary directory that was create when file uploaded, the destiantion)
            }
            else echo "Not supported";
        }
    ?>
    <form method="POST" action="" enctype="multipart/form-data"> 
        <input type="file" name="image" accept="image/*"><br>
        <!-- type can be the type of input such as button(type is submit), dropdown etc -->
        <!--name is the name of the attribute that will be used in php-->
        <!-- value is the name that will be displayed on the button or input -->
        <input type="submit" name="upload" value="upload">

    </form>


</body>
</html>