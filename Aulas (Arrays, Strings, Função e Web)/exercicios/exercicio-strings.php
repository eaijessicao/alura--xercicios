<?php
    $nome = 'jessica';
    $sobrenome = 'silva';

    $jso = str_contains($nome, 'jessica');
// str_contains = ele vai verificar aquela string existe dentro de outra
//exemplo: 

    if ($jso){
        echo "o nome dela é $nome " . PHP_EOL;
    } else {
        echo "$nome não encontrado" . PHP_EOL;
    }

// checar se aquela string começa com aquela palavra
//exemplo: 

    if (str_starts_with( $nome, 'jessica')) {
        echo "Está correto, a string começa com esse nome" . PHP_EOL;
    }
// checar se aquela string termina com aquela palavra 
//exemplo: 

    if (str_ends_with($nome, 'blablabla')) {
        echo "pois né que tem";
    } else {
        echo "tem n" . PHP_EOL;
    }


// SUBSTRING 

//Na substring você seleciona a quantidade de caracteres que você quer utilizar na string. Determinando pelo offset (posição) e Lenght (cumprimento)

// strpos serve para encontrar a posição da string selecionada. 
//exemplo: 
    $email = 'jessiquita@gmail.com';
    $posicaoArroba = strpos($email, '@'); 

    echo substr($email, 0, $posicaoArroba) . PHP_EOL;

    echo substr($email, $posicaoArroba + 1) . PHP_EOL;

// strlen mede o tamanho da string por bytes. Não se deve ser utilizado caso você queira contar os caracteres, pq os caracteres especiais serão computados duas vezes. Exemplo: 
    $senha = 'çícâ';
    echo strlen($senha) . PHP_EOL ;
// ele vai retornar 7 ao invés de 4. A forma certa de utilizar é usando o mb_strlen

//explode serve para separar a string e transformar em array. 
    $csv = 'jessica silva, 22, jessiquita@gmail.com';
    var_dump(explode(', ', $csv));

    $array='1 2 3 4';
    var_dump(explode(', ', $array, 2));
 // da para você limitar a quantidade de arrays criados, ao invés de gerar 3 desde a posição 0, neste caso você perceberá que o array será divido em 0= [1] enquanto 1 = [2,3,4]


// implode serve para você transformar o array em string. 

//exemplo: 

    $telefones = ['(24) 99999 - 9999', '(21) 99999 - 9999', '(24) 2222 - 2222'];
    echo implode(', ', $telefones) . PHP_EOL;

// trim serve para remover os espaços e caracteres especificos das strings. Você pode remover da esquerda (utilizando ltrim) para a direita (utilizando rtrim)

    $exemplo = 'v,onetwothree@gmail.com..';
    echo trim($exemplo, ',') . PHP_EOL; 
    echo rtrim($exemplo, '.') . PHP_EOL; 
    echo ltrim($exemplo, 'v') . PHP_EOL;

//


//heredoc e nowdoc. Heredoc permite interpolação de variáveis, enquanto nowdoc não permite. Heredoc usa aspas duplas e nowdoc usa aspas simples.

function geraEmail(string $name): void {
$conteudoEmail = <<<FIM
    'Hola, $name como estas?
    estamos entrando em contato para {motivo do contato}

    {assinatura}'
FIM;

}

geraEmail('jessiquita');

//replace. Serve para substituir o que estava escrito na string. Quando há mais de um item para ser substituido, utilizasse o array.

$texto = 'texto qualquer';
echo str_replace(['texto', 'qualquer'], ['Olá,', 'tudo bem?'], $texto) . PHP_EOL;

// strtr traduz caracteres para caracteres, de um caractere para outro. Ou seja, se você deseja substituir a palavra texto para '***' ele vai substituir todas as palavras da string que contenham as letras do alfabeto que componham a palavra 'texto'. 

// echo strtr($texto, 'texto', 'eo'); 
// echo strtr($texto, ['texto' => 'olá', 'qualquer' => 'tudo bem?] . PHP_EOL; 


//regex. preg_match é uma função em PHP que permite verificar se uma expressão regular corresponde a uma string. Ela retorna um valor booleano, true se a expressão regular corresponder à string e false caso contrário.

$numeroTelefone = "(11) 91234-5678";
$padrao = '/\([0-9]{2}\) 9?[0-9]{4} - [0-9]{4}/';

if (preg_match($padrao, $numeroTelefone)) {
  echo "O número de telefone é válido!";
} else {
  echo "O número de telefone é inválido!";
}


// preg_replace pode ser usada para substituir padrões ou caracteres específicos em uma string por novos valores.

$frase = "Olá, mundo!";
$novaFrase = preg_replace("/mundo/", "amigo", $texto);
echo $novoFrase;

