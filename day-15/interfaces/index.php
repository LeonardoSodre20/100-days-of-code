<?php 

interface IServiceUser {
    public function create($data);

    public function findOne($id);

    public function findMany(array $ids);

    public function updateById($id, $data);

    public function deleteById($id);
}

class User implements IServiceUser {
    public function create($data) {
        echo "Dados do usuário " . $data;
    }

    public function findOne($id) {
        echo "ID : " . $id;
    }

    public function findMany(array $ids) {
        return $ids;
    }

    public function updateById($id, $data) {
        echo "ID : " . $id . " Dados : " . $data;
    }

    public function deleteById($id) {
        echo "Delete IDS : " . $id;
    }
}

$userController = new User();
$userController->create('Leonardo Vieira Sodré');
echo "<hr/>";
$userController->findOne(1);
echo "<hr/>";
$userController->findMany([1,2,3,4]);
echo "<hr/>";
$userController->updateById(1, 'Leonardo');
echo "<hr/>";
$userController->deleteById(1);