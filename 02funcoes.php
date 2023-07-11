<?php 


function saudacao() : string

{

    date_default_timezone_set('America/Sao_Paulo');


     echo $hora = date('d/m/Y \à\s H:i:s');

     $saudacao = "";

     if($hora >= 0 && $hora <= 5 ){
        $saudacao = "Boa madrugada";

     } else if ($hora >=6 && $hora <= 12){
        $saudacao = "Bom dia";
     } 
      else if($hora <= 18 && $hora >=13) {
        $saudacao = "boa tarde";
     }

     return $saudacao;

};

/*  

@param string $texto texo para resumir
@param int $limite quantidade de caracteres
@param string $continue opcional - o que deve ser exibido ao final do resumo

@return string texto resumido

*/




function resumirTexto(string $texto, int $limite, string $continue = "..."): string
{

   $textoLimpo = trim(strip_tags($texto));

   if(mb_strlen($textoLimpo) <= $limite){
      return $textoLimpo;
   }

   $resumirTexto = mb_substr($textoLimpo, 0, mb_strrpos(mb_substr($textoLimpo, 0, $limite), ''));

   return $resumirTexto.$continue;

   

}

