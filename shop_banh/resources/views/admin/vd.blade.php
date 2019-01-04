
<!DOCTYPE html>
<html>
    <head>
        <title></title>
       <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    </head>
    <body>
    	<?php
                if (isset($_POST['cat'])){
                    echo '<pre>';
                    	print_r($_POST['cat']);
                    echo '</pre>';
                }
           ?>
        <form method="POST">
            U<input type="checkbox" name="cat[]" value="1" id="cat_1">
    <label for="cat_1">Thể thao</label><br/><br/>
    <input type="checkbox" name="cat[]" value="2" id="cat_2">
    <label for="cat_2">Xã hội</label><br/><br/>
    <input type="checkbox" name="cat[]" value="3" id="cat_3">
    <label for="cat_3">Pháp luật</label><br/><br/>
            <input type="submit" name="form_click" value="Gửi Dữ Liệu"/><br/>
        </form>
    </body>
</html>