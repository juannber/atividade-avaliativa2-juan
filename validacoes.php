<?php
 
function form_nao_enviado($msg) {
    if ($_SERVER['REQUEST_METHOD'] != 'POST') {
        exit('<h3>'.$msg.'</h3>');
    }
}

function ha_campos_em_branco($dados, $msg) {
    if (empty($dados['nome']) || empty($dados['preco']) || empty($dados['quantidade'])) {
        exit('<h3 class="alert alert-warning">'.$msg.'</h3>');
    }
}

function stmt_erros($stmt) {
    if (!$stmt) {
        exit('<div class="alert alert-danger">Erro na preparação da consulta.</div>');
    }
}

function verificar_bind_stmt($bind) {
    if (!$bind) {
        exit ('<h3 class="alert alert-danger">Erro ao vincular parâmetros. Impossível salvar.</h3>');
    }
}

function verificar_erro_execucao($exe, $stmt) {
    if (!$exe) {
        exit('<h3 class="alert alert-danger">Erro ao salvar: ' . mysqli_stmt_error($stmt) . "</h3>");
    }
}
?>