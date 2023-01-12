<?php

class Language {
    const ptBR = "pt_BR";
    const enUS = "en_US";
    const esES = "es_ES";
    
    /*

	Este método recebe um vetor com textos em vários idiomas e retorna o texto no idioma da página
    
    */
    public static function getLanguage($linguasArray) {
        $selectedLanguage = $_GET['selectedLanguage'];
        $defaultLanguage = self::ptBR;
        
        if (isset($linguasArray[$selectedLanguage])) {
            return $linguasArray[$selectedLanguage];
        }
        
        if (isset($linguasArray[$defaultLanguage])) {
            return $linguasArray[$defaultLanguage];
        }
        
        return array_values($linguasArray)[0];
    }
    
    
}
