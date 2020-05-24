<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
    <pre>
        <?php
            require_once 'AlunoHeranca2.php';
            require_once 'BolsistaHeranca2.php';

            $a1 = new AlunoHeranca2();
            $a1->setNome("Andre");
            $a1->setIdade(33);
            $a1->setSexo("M");
            $a1->setCurso("FullStack PHP");
            $a1->setMatricula(35520);
            $a1->pagarMensal();
            print_r($a1);

            $a2 = new BolsistaHeranca2();
            $a2->setNome("Lucas");
            $a2->setIdade(15);
            $a2->setSexo("M");
            $a2->setBolsa("Aprovada");
            $a2->setCurso("FullStack PHP");
            $a2->setMatricula(35521);
            $a2->pagarMensal();

            print_r($a2);

        ?>
        </pre>
    </body>
</html>
