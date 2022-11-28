<?php

namespace portalove;

class DB
{
    private $host;
    private $dbname;
    private $username;
    private $password;

    private $connection;

    public function __construct($host, $dbname, $username, $password)
    {
        $this->host = $host;
        $this->dbname = $dbname;
        $this->username = $username;
        $this->password = $password;

        try {
            $this->connection = new \PDO('mysql:host=' . $this->host . ';dbname=' . $this->dbname, $this->username, $this->password);
        } catch (PDOException $e) {
            print "Error!: " . $e->getMessage() . "<br/>";
            die();
        }
    }

    public function getFoodMenu()
    {
        $food_menuItems = [];
        $sql = "SELECT * FROM food_menu ";
        $query = $this->connection->query($sql);

        while ($row = $query->fetch()) {
            $food_menuItems[] = [
                'id'=>$row ['id'],
                'sys_name'=>$row ['sys_name'],
                'display_name' => $row ['display_name'],
                'image' => $row['image']

            ];

        }
        return $food_menuItems;
    }

    public function getWeeklyFood()
    {
        $weekly_foodItems = [];
        $sql = "SELECT * FROM weekly_food ";
        $query = $this->connection->query($sql);

        while ($row = $query->fetch()) {
            $weekly_foodItems[] = [
                'id'=>$row ['id'],
                'sys_name'=>$row ['sys_name'],
                'display_name' => $row ['display_name'],
                'price' => $row ['price'],
                'food_name' => $row ['food_name'],
                'description' => $row ['description'],
                'image' => $row['image']

            ];

        }
        return $weekly_foodItems;
    }

    public function getBlogPosts()
    {
        $blogItems = [];
        $sql = "SELECT *, DATE(created_at)AS date FROM blog ";
        $query = $this->connection->query($sql);

        while ($row = $query->fetch()) {
            $blogItems[] = [
                'id'=>$row ['id'],
                'sys_name'=>$row ['sys_name'],
                'display_name' => $row ['display_name'],
                'author' => $row ['author'],
                'image' => $row['image'],
                'image_blog_entries' => $row['image_blog_entries'],
                'text' => $row ['text'],
                'date' => $row ['date']

            ];

        }
        return $blogItems;
    }

    public function getMenu()
    {
        $menuItems = [];
        $sql = "SELECT * FROM menu ";
        $query = $this->connection->query($sql);

        while ($row = $query->fetch()) {
            $menuItems[] = [
                'id'=>$row ['id'],
                'sys_name'=>$row ['sys_name'],
                'display_name' => $row ['display_name'],
                'link' => $row['link']

            ];

        }
        return $menuItems;
    }

    public function getMeals($title)
    {
        $mealsItems = [];
        $sql = "SELECT M.*, T.title  FROM restaurant.meals AS M INNER JOIN type_meals_menu AS T ON M.type_id=T.id WHERE T.title ='".$title."'";
        $query = $this->connection->query($sql);

        while ($row = $query->fetch()) {
            $mealsItems[] = [
                'id'=>$row ['id'],
                'name'=>$row ['name'],
                'description' => $row ['description'],
                'price' => $row['price'],
                'image' => $row['image'],
                'type_id'=> $row['type_id']



            ];

        }
        return $mealsItems;
    }

    public function getTypeMealsMenu()
    {
        $typeMealsItems = [];
        $sql = "SELECT * FROM type_meals_menu";
        $query = $this->connection->query($sql);

        while ($row = $query->fetch()) {
            $typeMealsItems []= [
                'id'=>$row ['id'],
                'title'=>$row ['title'],
                'image' => $row['image'],
                'alt'=> $row['alt'],
                'sys_name'=> $row['sys_name']



            ];

        }
        return $typeMealsItems;
    }


    public function insertContact($name,$email,$phone,$message){
        $dateTime = date('Y-m-d H:i:s', time());
        $sql="INSERT into contact ( name, email,phone, message,created_at,updated_at) VALUE('" . $name . "','" . $email . "','" .$phone."','" . $message . "','" . $dateTime . "','" . $dateTime . "')";
        try {
            $this->connection->exec($sql);
            return true;
        } catch (\PDOException $e) {
            return false;
        }

    }

    public function insertReservation($day,$time,$name,$phone,$number_of_people){
        $dateTime = date('Y-m-d H:i:s', time());
        $status ="new";
        $sql="INSERT into reservation ( day, time, name,phone,number_of_people,created_at,updated_at,status) VALUE('" . $day . "','" . $time . "','" .$name."','" . $phone . "','" .$number_of_people."','" . $dateTime . "','" . $dateTime . "','".$status."')";
        try {
            $this->connection->exec($sql);
            return true;
        } catch (\PDOException $e) {
            return false;
        }

    }


    public function getAllContacts(){
        $emails = [];
        $sql="SELECT * FROM contact";
        $query = $this->connection->query($sql);

        while ($row = $query->fetch()) {
            $emails[] = [
                'id' => $row ['id'],
                'name' => $row ['name'],
                'email' => $row['email'],
                'phone' => $row['phone'],
                'message' => $row['message'],
                'created_at' => $row['created_at']
            ];

        }
        return $emails;
    }

    public function getAllReservations(){
        $reservations= [];
        $sql="SELECT * FROM reservation";
        $query = $this->connection->query($sql);

        while ($row = $query->fetch()) {
            $reservations[] = [
                'id' => $row ['id'],
                'day' => $row ['day'],
                'time' => $row['time'],
                'name' => $row['name'],
                'phone' => $row['phone'],
                'number_of_people' => $row['number_of_people'],
                'created_at' => $row['created_at'],
                'status' => $row['status']
            ];

        }
        return $reservations;
    }

    public function deleteContact($id){
        $sql="DELETE FROM contact WHERE id=".$id;
        try {
            $this->connection->exec($sql);
            return true;
        } catch (\PDOException $e) {
            return false;
        }
    }

    public function deleteReservation($id){
        $sql="DELETE FROM reservation WHERE id=".$id;
        try {
            $this->connection->exec($sql);
            return true;
        } catch (\PDOException $e) {
            return false;
        }
    }


    public function getContactDetail($id){
        $sql="SELECT id, name, email,phone, message FROM contact WHERE id=".$id;
        $result=[];

        try {
            $query=$this->connection->query($sql);
            $result=$query->fetchAll(\PDO::FETCH_ASSOC);
            return $result;
        } catch (\PDOException $e) {
            return false;
        }
    }

    public function updateContact($id,$name,$email,$phone,$message){
        $dateTime = date('Y-m-d H:i:s', time());
        $sql="UPDATE contact SET name ='".$name."',email ='".$email."', phone='".$phone."', message ='".$message."',updated_at='".$dateTime."' WHERE id=".$id;
        try {
            $this->connection->exec($sql);
            return true;
        } catch (\PDOException $e) {
            return false;
        }
    }

    public function getReservationDetail($id){
        $sql="SELECT id,day, time,name, phone,number_of_people, status FROM reservation WHERE id=".$id;
        $result=[];

        try {
            $query=$this->connection->query($sql);
            $result=$query->fetchAll(\PDO::FETCH_ASSOC);
            return $result;
        } catch (\PDOException $e) {
            return false;
        }
    }

    public function updateReservation($id,$day,$time,$name,$phone,$number_of_people,$status){
        $dateTime = date('Y-m-d H:i:s', time());
        $sql="UPDATE reservation SET day ='".$day."',time ='".$time."', name='".$name."', phone ='".$phone."',number_of_people='".$number_of_people."' ,updated_at='".$dateTime."', status='".$status."' WHERE id=".$id;
        try {
            $this->connection->exec($sql);
            return true;
        } catch (\PDOException $e) {
            return false;
        }
    }

    public function insertBlogPost($sysName, $displayName, $author,$image,$image_blog_entries,$text )
    {
        $dateTime = date('Y-m-d H:i:s', time());
        $sql =" INSERT into blog (sys_name, display_name,author,image,image_blog_entries,text,created_at,updated_at)
                VALUE('" . $sysName . "','" . $displayName . "','" . $author . "','" . $image . "','" . $image_blog_entries . "', '".$text."','".$dateTime."','".$dateTime."')";

        try {
            $this->connection->exec($sql);
            return true;
        } catch (\PDOException $e) { echo $e;
            return false;
        }
    }





}
