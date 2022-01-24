<?php

class Auth
{
    public $username;
    public $password;

    /**
     * @param $username
     * @param $password
     */
    public function __construct()
    {
    }

    public function loadData()
    {
        $dataJson = file_get_contents('data.json');
        return json_decode($dataJson, true);
    }

    public function saveData($data)
    {
        if ($this->checkUsers($data['username'])){
            $datas = $this->loadData();
            $datas[] = $data;
            $dataJson = json_encode($datas);
            file_put_contents('data.json', $dataJson);
        }

//        header("location:display.php");
    }

    public function isLogin($username, $password)
    {
        $userLists = $this->loadData();
        foreach ($userLists as $value) {
            if ($value['username'] == $username) {
                if ($value['password'] == $password) {
                    header('location:display.php');
                }
            } else {
              echo "Fuck off";
            }
        }
    }

    public function checkUsers($username){
        $userLists = $this->loadData();
        $flag = true;
        foreach ($userLists as $value) {
            if ($value['username'] == $username) {
                $flag = false;
            }
        }
        return $flag;
    }

}