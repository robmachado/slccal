<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Validation Language Lines
    |--------------------------------------------------------------------------
    |
    | The following language lines contain the default error messages used by
    | the validator class. Some of these rules have multiple versions such
    | as the size rules. Feel free to tweak each of these messages here.
    |
    */

    "accepted"             => " :attribute deve ser aceito.",
    "active_url"           => " :attribute não é um URL valido.",
    "after"                => " :attribute deve ser posterior a :date.",
    "alpha"                => " :attribute deve conter apenas letras.",
    "alpha_dash"           => " :attribute deve conter apenas letras, numeros, e traços.",
    "alpha_num"            => " :attribute deve conter apenas letras e numeros.",
    "array"                => " :attribute deve ser uma matriz.",
    "before"               => " :attribute deve ser anterior a :date.",
    "between"              => [
        "numeric" => "O :attribute deve estar entre :min e :max.",
        "file"    => "O :attribute deve estar entre :min e :max kilobytes.",
        "string"  => "O :attribute deve estar entre :min e :max caracteres.",
        "array"   => "O :attribute deve estar entre :min e :max items.",
    ],
    "boolean"              => " :attribute deve ser verdadeiro ou falso.",
    "confirmed"            => " :attribute a confirmação não combina.",
    "date"                 => " :attribute não é uma data valida.",
    "date_format"          => " :attribute não bate com o formato :format.",
    "different"            => " :attribute e :other devem ser diferentes.",
    "digits"               => " :attribute deve ter be :digits digitos.",
    "digits_between"       => " :attribute deve estar entre :min e :max digitos.",
    "email"                => " :attribute deve ser um endereço de email válido.",
    "filled"               => " :attribute é requerido.",
    "exists"               => " selected :attribute é inválido.",
    "image"                => " :attribute deve ser uma imagem.",
    "in"                   => " selected :attribute é inválido.",
    "integer"              => " :attribute deve ser um inteiro.",
    "ip"                   => " :attribute deve ser um endereço IP.",
    "max"                  => [
        "numeric" => " :attribute não deve ser maior que :max.",
        "file"    => " :attribute não deve ser maior que :max kilobytes.",
        "string"  => " :attribute não deve ser maior que :max caracteres.",
        "array"   => " :attribute não deve ter mais que :max itens.",
    ],
    "mimes"                => " :attribute deve serr um arquivo do tipo: :values.",
    "min"                  => [
        "numeric" => " :attribute deve ser pelo menos :min.",
        "file"    => " :attribute deve ter pelo menos :min kilobytes.",
        "string"  => " :attribute deve ter pelo menos :min caracteres.",
        "array"   => " :attribute deve ter pelo menos :min itens.",
    ],
    "not_in"               => "O campo selecionado :attribute é inválido.",
    "numeric"              => " :attribute deve ser um numero.",
    "regex"                => " :attribute com formato inválido.",
    "required"             => " :attribute é requerido.",
    "required_if"          => " :attribute é requerido quando :other é :value.",
    "required_with"        => " :attribute é requerido quando :values é presente.",
    "required_with_all"    => " :attribute é requerido quando :values é presente.",
    "required_without"     => " :attribute é requerido quando :values não está presente.",
    "required_without_all" => " :attribute é requerido quando nenhums dos :values está presente.",
    "same"                 => " :attribute e :other devem combinar.",
    "size"                 => [
        "numeric" => " :attribute deve ter :size.",
        "file"    => " :attribute deve ter :size kilobytes.",
        "string"  => " :attribute deve ter :size caracteres.",
        "array"   => " :attribute deve conter :size items.",
    ],
    "unique"               => " :attribute já foi usado.",
    "url"                  => " :attribute com formato inválido.",
    "timezone"             => " :attribute deve ser uma zona de tempo válida.",

    /*
    |--------------------------------------------------------------------------
    | Custom Validation Language Lines
    |--------------------------------------------------------------------------
    |
    | Here you may specify custom validation messages for attributes using the
    | convention "attribute.rule" to name the lines. This makes it quick to
    | specify a specific custom language line for a given attribute rule.
    |
    */

    'custom' => [
        'attribute-name' => [
            'rule-name' => 'custom-message',
        ],
    ],

    /*
    |--------------------------------------------------------------------------
    | Custom Validation Attributes
    |--------------------------------------------------------------------------
    |
    | The following language lines are used to swap attribute place-holders
    | with something more reader friendly such as E-Mail Address instead
    | of "email". This simply helps us make messages a little cleaner.
    |
    */

    'attributes' => [],

];
