<?php
include 'conexao.php';

class questao03 {

    public function getUserList() {

        $conectar = Conexao::conectar();
        $conectar->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $sql = "SELECT nome FROM user ";
        $q = $conectar->prepare($sql);
        $q->execute(array($sql));
        $campo = $q->fetchAll(PDO::FETCH_ASSOC);
        return $campo;
    }

}
?>

{
