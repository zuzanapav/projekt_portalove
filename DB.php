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
            $typeMealsItems = [
                'id'=>$row ['id'],
                'title'=>$row ['title'],
                'image' => $row['image'],
                'alt'=> $row['alt']



            ];

        }
        return $typeMealsItems;
    }





}
