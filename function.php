<?php
// mysqli_report(0);
    include 'database.php';
    function search_res($keywords)
    {
    	global $connect;
        if(strpos($keywords, "-")!==false)
        {
    	$keywords=preg_split("/[-]+/",$keywords, 2);
        $ist_kw=$keywords[1];
        $query="select title,description,url from homepage where title not like '%$ist_kw%' and description not like '%$ist_kw%'";
        $result=mysqli_query($connect,$query);
        while($row=mysqli_fetch_assoc($result))
        {
            $returned_res[]=array(
                'title'=> $row['title'],
                'description'=> $row['description'],
                'url'=> $row['url'],
                );
        }

        return $returned_res;
        }     
  
    else
    {
        $where="";
        $keywords=preg_split("/[\s]+/",$keywords);
    	$total_kw= count($keywords);
    	foreach ($keywords as $key => $keyword) 
    	{
    		$where.="title like '%$keyword%' OR description like '%$keyword%'"; 
    		if($key != $total_kw-1)
    		{
    			$where.=" AND ";
    		}
    	}
        $query="select title,description,url from homepage where $where";
        $result=mysqli_query($connect,$query);
        while($row=mysqli_fetch_assoc($result))
            {
                $returned_res[]=array(
                 'title'=> $row['title'],
                 'description'=> $row['description'],
                 'url'=> $row['url'],
             );
            }
            return $returned_res;
        }
    }
?>