<?php
    include __DIR__ . "/includes/conexao.php";

    $dados = $_POST;

    $nome = $dados['nome'];

    if (empty($dados['nome'])){
        echo "Preencha seu nome";
        exit();
    }
    $email = $dados['email'];
    $cpf = $dados['cpf'];
    $rg = $dados['rg'];
    $cep = $dados['cep'];
    $logradouro = $dados['logradouro'];
    $numero = $dados['numero'];
    $complemento = $dados['complemento'];
    $bairro = $dados['bairro'];
    $cidade = $dados['cidade'];
    $uf = $dados['uf'];
    $pais = $dados['pais'];
    $telefone_ddd = $dados['telefone_ddd'];
    $telefone_numero = $dados['telefone_numero'];
    $celular_ddd = $dados['celular_ddd'];
    $celular_numero = $dados['celular_numero'];
    $mensagem = $dados['mensagem'];
    if (empty($dados['mensagem'])){
        echo "Preencha seu mensagem";
        exit();
    }



    //    var_dump($nome) . "<br/>";
    //    var_dump($email) . "<br/>";
    //    var_dump($cpf_cnpj) . "<br/>";
    //    var_dump($rg) . "<br/>";
    //    var_dump($cep) . "<br/>";
    //    var_dump($descricao) . "<br/>";


    $sql = "INSERT INTO ouvidoria (protocolo, nome, cpf, rg, email, cep, logradouro, numero, complemento, bairro, cidade, uf, pais, telefone_ddd, telefone_numero, celular_ddd, celular_numero, mensagem)
    VALUES ('Yanpapapa', '$nome', '$cpf', '$rg', '$email', '$cep', '$logradouro', '$numero', '$complemento', '$bairro', '$cidade', '$uf', '$pais', '$telefone_ddd', '$telefone_numero', '$celular_ddd', '$celular_numero', '$mensagem' )";

    if ($mysqli->query($sql) === TRUE) {
        echo "Dados inseridos com sucesso!";
    } else {
        echo "Erro: " . $sql . "<br>" . $mysqli->error;
    }
    $mysqli->query($sql);

    return $mysqli;

