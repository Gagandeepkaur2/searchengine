<?php
    include 'database.php';
    if(isset($_POST['submit']))
    {
    $title=$_POST['title'];
    $description=$_POST['description'];
    $url=$_POST['url'];
    $keywords=$_POST['keywords'];

    // Validation
    $errors=array();
    if(empty($title) ||empty($description) ||empty($url) ||empty($keywords))
    {
    	$errors[]="All fields must be filled";
    }
    else
    {
    	if(str_word_count($keywords)<4)
    	{
    		$errors[]="There must be at least 4 keywords";
    	}
    }
    // Print errors

    if(!empty($errors))
    {
    	foreach ($errors as $error) {
    		echo $error."</br>";
    	}
    }
    // echo $title." ".$description." ".$url." ".$keywords;

    // Execution of Query

    if(empty($errors))
    {
    $query="insert into homepage(title,description,url,keywords) values('$title','$description','$url','$keywords')";
    $result=mysqli_query($connect,$query);
    if($result)
    {
    	echo "Record Inserted";
    }
    else
    {
        die("Query Failed " . mysqli_error($connect));
    }
    }
    }
?>
<!DOCTYPE html>
<html>
<head>
	<title>Input Form</title>
</head>
<body>
	<form action="" method="post">
		Title : <input type="text" name="title"/><br/><br/>
		Description : <textarea name="description" cols="50" rows="5"></textarea><br/><br/>
		Url : <input type="url" name="url"/><br/><br/>
		Keywords : <input type="text" name="keywords"/><br/><br/>
		<input type="submit" name="submit" value="Save"/>
	</form>

</body>
</html>