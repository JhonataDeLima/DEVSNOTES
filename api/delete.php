<?php
require('../config.php');

$method = strtolower($_SERVER['REQUEST_METHOD']);

if($method === 'delete'){
    
    parse_str(file_get_contents('php://input'), $input);

    $id = $input['id'] ?? null;

    if($id){

        $sql = $pdo->prepare("SELECT * FROM notes WHERE id = :id");
        $sql->bindValue(':id', $id);
        $sql->execute();

        

        if($sql->rowCount() > 0){

            $dados = $sql->fetch(PDO::FETCH_ASSOC);

            $sql = $pdo->prepare("DELETE FROM notes WHERE id = :id");
            $sql->bindValue(':id', $id);
            $sql->execute();

            $array ['result'] = [
              'id' => $id,
               'title' => $dados['title'],
               'body' => $dados['body']
                ];

        }else{
            $array ['error'] = 'ID inexistente';
        }

    }else{
        $array['error'] = 'ID nao enviado';
    }

}else{
    $array['error'] = 'Method invalido (apenas DELETE)';
}

require('../return.php');






