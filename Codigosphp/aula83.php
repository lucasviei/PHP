<?php

#HEREDOC E NOWDOC

#HEREDOC == ""
$x = 50;

$heredoc =
    <<<TESTE

    <div>O valor da variável x é: $x</div>

TESTE;

echo $heredoc;

#NOWDOC == ''

$nowdoc = <<<'EOT'
    class NowDoc{
        function __construct(){}
    }
EOT;

echo $nowdoc;

?>