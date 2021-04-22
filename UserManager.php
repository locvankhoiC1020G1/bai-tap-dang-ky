<?php
include_once "User.php";

class UserManager
{
    private $account;

    public function __construct($account)
    {
        $this->account = $account;
    }

    public function addUser($user)
    {
        $dataFile = $this->loadData();
        $lastAccount = $dataFile[count($dataFile)-1];
        $user["id"] = $lastAccount->id+1;
        array_push($dataFile,$user);
        $this->saveData($dataFile);
    }

    public function saveData($data)
    {
        $dataJson = json_encode($data);
        file_put_contents($this->account, $dataJson);
    }

    public function loadData()
    {
        $dataFile = file_get_contents($this->account);
        return json_decode($dataFile);
    }
  public function checkLogin($name,$password)
    {
        $dataUser = $this->loadData();
        foreach ($dataUser as $item) {
            if ($name == $item->$name){
                if($item == $password){
                    echo "Đăng ký thành công";
                }
            }else{
                echo "Đăng nhập thất bại";
            }
        }

    }

    /**
     * @return mixed
     */
    public function getAccount()
    {
        return $this->account;
    }

    /**
     * @param mixed $account
     */
    public function setAccount($account): void
    {
        $this->account = $account;
    }

}