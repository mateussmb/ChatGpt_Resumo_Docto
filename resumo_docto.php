<?php

require 'vendor/autoload.php';
use GuzzleHttp\Client;
use PhpOffice\PhpWord\IOFactory;


// Fun��o para determinar o tipo de documento e extrair texto
// Fun��o para determinar o tipo de documento e extrair texto
function extrairTextoDoDocumento($caminhoDoArquivo) {
    // Determina o tipo MIME do arquivo
    $tipoMIME = mime_content_type($caminhoDoArquivo);
    // Inicializa vari�vel para armazenar o texto extra�do
    $textoExtraido = '';
    
    if ($tipoMIME == 'application/pdf') {
        // Se for PDF, utiliza a fun��o para extrair texto do PDF
        $textoExtraido = extrairTextoDoPDF($caminhoDoArquivo);
    } elseif ($tipoMIME == 'application/vnd.openxmlformats-officedocument.wordprocessingml.document') {
        // Se for Word, utiliza a fun��o para extrair texto do Word
        $textoExtraido = extrairTextoDoWord($caminhoDoArquivo);
    } else {
        // Tipo de documento n�o suportado
        echo "Tipo de documento n�o suportado.";
    }
    // Converter o texto extra�do para UTF-8
    $textoExtraido = mb_convert_encoding($textoExtraido, 'UTF-8', mb_detect_encoding($textoExtraido));
    //var_dump($textoExtraido);
    return $textoExtraido;
}

// Fun��o para extrair texto de um documento PDF
function extrairTextoDoPDF($caminhoDoArquivo) {
    // Inicializa a vari�vel para armazenar o texto extra�do
    $text = '';
    
    // Carrega o arquivo PDF usando a biblioteca TCPDF
    $parser = new \Smalot\PdfParser\Parser();
    $document = $parser->parseFile($caminhoDoArquivo);
    
    // Itera sobre cada p�gina do PDF e extrai o texto
    foreach ($document->getPages() as $page) {
        $text .= $page->getText();
    }
    return $text;
}





// Fun��o para extrair texto de um documento Word
function extrairTextoDoWord($caminhoDoArquivo) {
    $phpWord = IOFactory::load($caminhoDoArquivo);
    
    // Inicializa vari�vel para armazenar o texto extra�do
    $textoExtraido = '';
    
    // Iterar sobre as se��es do documento
    foreach ($phpWord->getSections() as $section) {
        // Iterar sobre os elementos de cada se��o
        foreach ($section->getElements() as $element) {
            // Verifica se o elemento � uma inst�ncia de TextRun
            if ($element instanceof \PhpOffice\PhpWord\Element\TextRun) {
                // Itera sobre os elementos de TextRun
                foreach ($element->getElements() as $text) {
                    // Verifica se o elemento � uma inst�ncia de Text
                    if ($text instanceof \PhpOffice\PhpWord\Element\Text) {
                        // Adiciona o texto do elemento ao texto extra�do
                        $textoExtraido .= $text->getText();
                        
                        // Adiciona um espa�o depois de cada texto
                        $textoExtraido .= " ";
                    }
                }
            }
        }
    }
    
    return $textoExtraido;
}






function limparTexto($texto) {
    // Remover caracteres inv�lidos e converter para UTF-8
    $texto = mb_convert_encoding($texto, 'UTF-8', mb_detect_encoding($texto));
    $texto = preg_replace('/[^\PC\s]/u', '', $texto); // Remover caracteres inv�lidos
    $texto =  json_encode($texto);
    
    return $texto;
}

// Fun��o para enviar texto para o ChatGPT e obter resumo

    function obterResumoDoChatGPT($texto) {        
        $texto = utf8_encode($texto);
        $header = utf8_encode("Voc� � um sistema que gera resumos.");        
        $apiKey = "";
        $url = 'https://api.openai.com/v1/chat/completions';
        
        $headers = array(
            "Authorization: Bearer {$apiKey}",
            "Content-Type: application/json"
        );
        
        // Define messages
        $messages = array(
            array(
                "role" => "system",
                "content" => $header
            ),
            array(
                "role" => "user",
                "content" => $texto
            )
            );
        
        $data = array(
            "model" => "gpt-3.5-turbo",
            "messages" => $messages,
            "max_tokens" => 50
        );
        
        $curl = curl_init($url);
        curl_setopt_array($curl, array(
            CURLOPT_POST => 1,
            CURLOPT_POSTFIELDS => json_encode($data),
            CURLOPT_HTTPHEADER => $headers,
            CURLOPT_RETURNTRANSFER => 1,
            // Desativa a verifica��o do certificado SSL
            CURLOPT_SSL_VERIFYPEER => false
        ));
        
        // Executa a requisi��o cURL
        $result = curl_exec($curl);
        // Verifica por erros na requisi��o cURL
        if (curl_errno($curl)) {
            echo 'Error:' . curl_error($curl);
        } else {
            echo $result;
        }
        
        // Fecha a sess�o cURL
        curl_close($curl);
        
    }
    if(isset($_FILES['arquivo'])) {
        $caminhoDoArquivo = $_FILES['arquivo']['tmp_name'];
        
        // Extrai o texto do documento
        $textoDoDocumento = extrairTextoDoDocumento($caminhoDoArquivo);
        
        if ($textoDoDocumento)
            $resumoDoChatGPT = obterResumoDoChatGPT($textoDoDocumento);
            
            // Aqui voc� pode fazer algo com o resumo, como exibi-lo na p�gina
            echo $resumoDoChatGPT;
    } else {
        // Se o formul�rio n�o foi enviado, mostra uma mensagem de erro
        echo "Erro: Nenhum arquivo enviado.";
    }
    echo $resumoDoChatGPT;
    ?>

<form action="" method="post" enctype="multipart/form-data">
    Selecione o arquivo:
    <input type="file" name="arquivo" id="arquivo">
    <input type="submit" value="Enviar">
</form>