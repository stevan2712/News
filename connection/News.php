<?php

require_once 'Database.php';

class News extends Database {

    public $res;
    public $numRows;

public function getAllNews(){

    $sql = "SELECT * FROM news";
    $this->res = $this->connectToDatabase()->query($sql);
    $this->numRows = $this->res->num_rows;
    /*if($numRows > 0){
        while ($row = $res->fetch_assoc()){
            echo $row['TITLE'];
        }
    }*/

}

    public function getLastUpdatedNews(){

        $sql = "SELECT * FROM news 
                ORDER BY DATE DESC LIMIT 3";
        $this->res = $this->connectToDatabase()->query($sql);
        $this->numRows = $this->res->num_rows;
        /*if($numRows > 0){
            while ($row = $res->fetch_assoc()){
                echo $row['TITLE'];
            }
        }*/

    }
    public function getLastUpdatedNewsIndexPage(){

        $sql = "SELECT * FROM news 
                ORDER BY DATE DESC LIMIT 7";
        $this->res = $this->connectToDatabase()->query($sql);
        $this->numRows = $this->res->num_rows;
        /*if($numRows > 0){
            while ($row = $res->fetch_assoc()){
                echo $row['TITLE'];
            }
        }*/

    }

    public function getFootballNews(){

        $sql = "SELECT * FROM news 
                INNER JOIN newstag
                ON news.NEWS_ID=newstag.NEWS_ID
                WHERE newstag.TAG_ID=2 LIMIT 3";
        $this->res = $this->connectToDatabase()->query($sql);
        $this->numRows = $this->res->num_rows;
        /*if($numRows > 0){
            while ($row = $res->fetch_assoc()){
                echo $row['TITLE'];
            }
        }*/

    }
    public function getBasketballNews(){

        $sql = "SELECT * FROM news 
                INNER JOIN newstag
                ON news.NEWS_ID=newstag.NEWS_ID
                WHERE newstag.TAG_ID=5 LIMIT 3";
        $this->res = $this->connectToDatabase()->query($sql);
        $this->numRows = $this->res->num_rows;
        /*if($numRows > 0){
            while ($row = $res->fetch_assoc()){
                echo $row['TITLE'];
            }
        }*/

    }

public function newsWithoutTags(){

    $sql = "SELECT n.TITLE,n.CONTENT,n.DATE,n.NEWS_ID,n.IMAGE 
            FROM news n 
            LEFT JOIN newstag nt 
            ON n.NEWS_ID=nt.NEWS_ID 
            WHERE nt.TAG_ID IS NULL LIMIT 3";
    $this->res = $this->connectToDatabase()->query($sql);
    $this->numRows = $this->res->num_rows;
    /*if($this->numRows > 0 ){
        while ($row = $this->res->fetch_assoc()){
            echo $row['TITLE']."<br>";
        }
    }*/


}
    public function getOtherNews($page,$result){

        $sql = "
                SELECT * 
                FROM news 
                WHERE NEWS_ID 
                NOT IN (
                    SELECT n.NEWS_ID 
                    FROM news n 
                    INNER JOIN newstag nt 
                    ON n.NEWS_ID=nt.NEWS_ID 
                    WHERE nt.TAG_ID = 4 
                    OR nt.TAG_ID=5 
                    OR nt.TAG_ID=2) LIMIT $page, $result;
";
        $this->res = $this->connectToDatabase()->query($sql);
        $this->numRows = $this->res->num_rows;
        /*if($this->numRows > 0 ){
            while ($row = $this->res->fetch_assoc()){
                echo $row['TITLE']."<br>";
            }
        }*/


    }


    public function newsWithoutTags2($page,$result){

        $sql = "SELECT n.TITLE,n.CONTENT,n.DATE,n.NEWS_ID,n.IMAGE 
            FROM news n 
            LEFT JOIN newstag nt 
            ON n.NEWS_ID=nt.NEWS_ID 
            WHERE nt.TAG_ID IS NULL LIMIT $page, $result";
        $this->res = $this->connectToDatabase()->query($sql);
        $this->numRows = $this->res->num_rows;
        /*if($this->numRows > 0 ){
            while ($row = $this->res->fetch_assoc()){
                echo $row['TITLE']."<br>";
            }
        }*/


    }

public function mostPopularNewsByTag(){
    $sql = "SELECT n.TITLE, n.CONTENT, n.DATE, n.NEWS_ID, n.IMAGE 
            FROM news n 
            INNER JOIN newstag nt ON n.NEWS_ID= nt.NEWS_ID 
            WHERE nt.TAG_ID = (
	        SELECT tag_id FROM newstag GROUP BY TAG_ID ORDER by COUNT(tag_id) DESC limit 1) LIMIT 3;";
    $this->res=$this->connectToDatabase()->query($sql);
    $this->numRows=$this->res->num_rows;
    /*if($this->numRows > 0 ){
        while ($row = $this->res->fetch_assoc()){
            echo $row['TITLE']."<br>";
        }
    }*/


}

public function mostPopularTag(){
    $sql="SELECT tag_id AS tag FROM newstag GROUP BY TAG_ID ORDER by COUNT(tag_id) DESC limit 1";
    $this->res = $this->connectToDatabase()->query($sql);
    $row = $this->res->fetch_assoc();
    return $row['tag'];
}

    public function mostPopularNewsByTag2(){
        $sql = "SELECT n.TITLE, n.CONTENT, n.DATE, n.NEWS_ID, n.IMAGE 
            FROM news n 
            INNER JOIN newstag nt ON n.NEWS_ID= nt.NEWS_ID 
            WHERE nt.TAG_ID = (
	        SELECT tag_id FROM newstag GROUP BY TAG_ID ORDER by COUNT(tag_id) DESC limit 1);";
        $this->res=$this->connectToDatabase()->query($sql);
        $this->numRows=$this->res->num_rows;
        /*if($this->numRows > 0 ){
            while ($row = $this->res->fetch_assoc()){
                echo $row['TITLE']."<br>";
            }
        }*/


    }


public function mostSimiliarNews($id_vijesti){


    $sql = "SELECT news.*
            FROM news 
            INNER JOIN (
	            SELECT *, COUNT(tag_id) as broj_tagova
	            FROM newstag
	            WHERE tag_id IN (
		            SELECT tag_id
		            FROM newstag
		            WHERE newstag.NEWS_ID = $id_vijesti)
	            GROUP BY news_id) newstag
	        ON newstag.news_id = news.NEWS_ID
            WHERE news.NEWS_ID <> $id_vijesti
            ORDER BY newstag.broj_tagova DESC LIMIT 3";
    $this->res=$this->connectToDatabase()->query($sql);
    $this->numRows=$this->res->num_rows;
    /*if($this->numRows > 0 ){
        while ($row = $this->res->fetch_assoc()){
            echo $row['TITLE']."<br>";
        }
    }*/

}

public function openNews($id){

    $sql = "SELECT * 
            FROM news 
            WHERE NEWS_ID = $id";
    $this->res=$this->connectToDatabase()->query($sql);
    $this->numRows=$this->res->num_rows;


}

public function getTagsForNews($news_id){

    $sql = "SELECT * 
            FROM tag 
            INNER JOIN newstag 
            ON tag.TAG_ID= newstag.TAG_ID 
            WHERE newstag.NEWS_ID=$news_id";
    $this->res=$this->connectToDatabase()->query($sql);
    $this->numRows=$this->res->num_rows;

}

    public function getNewsforTag($tag_id){

        $sql = "SELECT * FROM news 
                INNER JOIN newstag
                ON news.NEWS_ID=newstag.NEWS_ID
                WHERE newstag.TAG_ID = $tag_id";
        $this->res = $this->connectToDatabase()->query($sql);
        $this->numRows = $this->res->num_rows;
        /*if($numRows > 0){
            while ($row = $res->fetch_assoc()){
                echo $row['TITLE'];
            }
        }*/

    }

    public function numNewsForTag($tag_id){

        $sql = "SELECT COUNT(NEWS_ID) AS num_of_news 
                FROM newstag 
                WHERE TAG_ID = $tag_id";
        $this->res = $this->connectToDatabase()->query($sql);
        $row = $this->res->fetch_assoc();
        return $row['num_of_news'];
        /*if($numRows > 0){
            while ($row = $res->fetch_assoc()){
                echo $row['TITLE'];
            }
        }*/

    }

    public function numNewsWithoutTag(){

        $sql = "SELECT COUNT(n.NEWS_ID) 
                AS num_of_news FROM news n 
                LEFT JOIN newstag nt 
                ON n.NEWS_ID=nt.NEWS_ID 
                WHERE nt.TAG_ID IS NULL";
        $this->res = $this->connectToDatabase()->query($sql);
        $row = $this->res->fetch_assoc();
        return $row['num_of_news'];
        /*if($numRows > 0){
            while ($row = $res->fetch_assoc()){
                echo $row['TITLE'];
            }
        }*/

    }

    public function numOfOtherNews(){

        $sql = "SELECT COUNT(NEWS_ID) 
                AS num_of_news
                FROM news 
                WHERE NEWS_ID 
                NOT IN (
                    SELECT n.NEWS_ID 
                    FROM news n 
                    INNER JOIN newstag nt 
                    ON n.NEWS_ID=nt.NEWS_ID 
                    WHERE nt.TAG_ID = 4 
                    OR nt.TAG_ID=5 
                    OR nt.TAG_ID=2)";
        $this->res = $this->connectToDatabase()->query($sql);
        $row = $this->res->fetch_assoc();
        return $row['num_of_news'];
        /*if($numRows > 0){
            while ($row = $res->fetch_assoc()){
                echo $row['TITLE'];
            }
        }*/

    }



    public function getNewsforTag2($tag_id,$start_res,$num_res){

        $sql = "SELECT * FROM news 
                INNER JOIN newstag
                ON news.NEWS_ID=newstag.NEWS_ID
                WHERE newstag.TAG_ID = $tag_id  LIMIT $start_res, $num_res ";
        $this->res = $this->connectToDatabase()->query($sql);
        $this->numRows = $this->res->num_rows;
        /*if($numRows > 0){
            while ($row = $res->fetch_assoc()){
                echo $row['TITLE'];
            }
        }*/

    }

    public function getLastNewsforTag($tag_id){

        $sql = "SELECT * FROM news 
                INNER JOIN newstag
                ON news.NEWS_ID=newstag.NEWS_ID
                WHERE newstag.TAG_ID = $tag_id 
                ORDER BY news.DATE 
                DESC LIMIT 3";
        $this->res = $this->connectToDatabase()->query($sql);
        $this->numRows = $this->res->num_rows;
        /*if($numRows > 0){
            while ($row = $res->fetch_assoc()){
                echo $row['TITLE'];
            }
        }*/

    }

    public function tagName($tag_id){
    $sql = "SELECT tag.NAME 
            FROM tag 
            WHERE TAG_ID=$tag_id";
            $this->res = $this->connectToDatabase()->query($sql);
            $row = $this->res->fetch_assoc();
            return $row['NAME'];


    }

    public function getAllTags(){

        $sql = "SELECT *
                    FROM tag";
        $this->res = $this->connectToDatabase()->query($sql);
        $this->numRows = $this->res->num_rows;

    }

    public function insertNews($title,$content,$image,$date){
    $sql="INSERT INTO `news`(`TITLE`, `CONTENT`, `DATE`, `IMAGE`) VALUES ('{$title}','{$content}','{$date}','{$image}')";
    $con = $this->connectToDatabase();
    $con->query($sql);
    return $con->insert_id;

    }

    public function addTagForNews($news_id,$tag_id){
        $sql = "INSERT INTO newstag(`TAG_ID`, `NEWS_ID`) VALUES ({$tag_id},{$news_id})";
        $this->connectToDatabase()->query($sql);

    }

    public function isTagExist($tag_name){

    $sql = "SELECT tag.TAG_ID
            FROM tag WHERE tag.NAME = '{$tag_name}'";
    $sql2 = "INSERT INTO tag (`NAME`) VALUES ('{$tag_name}')";
        $this->res = $this->connectToDatabase()->query($sql);
        $row = $this->res->fetch_assoc();
       if(is_null($row))
       {
           //echo $sql2;
           $con2 = $this->connectToDatabase();
           $con2->query($sql2);
           return $con2->insert_id;
       }else{
           return $row['TAG_ID'];
       }


        /*if(){
                $row = $this->res->fetch_assoc();
                return $row['TAG_ID'];
            }
            else{
                //$con = $this->connectToDatabase();
                //$con->query($sql2);
                //return $con->insert_id;
            }*/

    }



}