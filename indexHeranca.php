<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body   >
    <pre>
    <?php
        require_once 'PessoaHeranca.php';
        require_once 'AlunoHeranca.php';
        require_once 'ProfessorHeranca.php';
        require_once 'FuncionarioHeranca.php';

        $p1 = new PessoaHeranca();
        $p2 = new AlunoHeranca();
        $p3 = new ProfessorHeranca();
        $p4 = new FuncionarioHeranca();

        $p1->setNome("Andre");
        $p2->setNome("Graciela");
        $p3->setNome("Lucas");
        $p4->setNome("Antonio");

        print_r($p1);
        print_r($p2);
        print_r($p3);
        print_r($p4);

    ?></pre>
    </body>
</html>
