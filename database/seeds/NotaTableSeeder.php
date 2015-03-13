<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use robmachado\slccal\Nota;

class NotaTableSeeder extends Seeder
{
    public function run()
    {
        // clear table
        Nota::truncate();
        //carrega dados
        $aRows = [
            ['anotacao' => 'A calibração do equipamento foi executada por comparação direta de'.
            'acordo com nossa instrução interna IQ 1.4 (vide Manual da Qualidade) '.
            'e o cálculo da incerteza observa as prescrições da EA-4/02 Expressão '.
            'da Incerteza de Medição na Calibração de janeiro de 1999 (INMETRO). '.
            'A incerteza expandida relatada, é baseada em uma incerteza padronizada '.
            'combinada com um fator de abrangência k, para um nivel de confiança de 95%.'],
            ['anotacao' => 'Os nossos padrões atendem aos requisitos construtivos das portarias do '.
            'INMETRO e portanto a influência da aceleração da gravidade no calculo da '.
            'incerteza é despresível, porém pode ser significativa caso o equipamento '.
            'seja classe I, utilize células de carga  e venha a ser deslocado para outra'.
            'localidade ou altitude, nestes casos recomenda-se que seja realizada nova '.
            'calibração no novo local de uso.'],
            ['anotacao' => 'O presente relatório de calibração atende aos requisitos da norma '.
            'NBR ISO/IEC 17025 e é válido apenas para o equipamento anteriormente '.
            'caracterizado, não sendo extensivo a quaisquer outros equipamentos, '.
            'ainda que similares.'],
            ['anotacao' => 'Este relatório de calibração somente pode ser reproduzido em sua forma integral.'],
            ['anotacao' => 'Uma cópia deste documento é mantida em nossos sistemas por um período máximo de 2 anos.'],
            ['anotacao' => 'Todos os padrões utilizados possuem rastreabilidade metrologica direta a Rede '.
            'Brasileira de Calibração (RBC).'],
            ['anotacao' => 'A escolha dos valores nominais, intervalos e critérios de ajuste baseam-se em nossa '.
            'instrução interna IQ 1.4 e na portaria INMETRO 236.'],
            ['anotacao' => 'Os valores indicados como leitura na calibração se referem a uma média aritimética de'.
            ' várias leituras consecutivas e por este motivo podem estar indicadas com um dígito a mais'.
            ' do que a resolução do próprio equipamento.'],
            ['anotacao' => 'Os serviços de ajuste e manutenção em balanças estão em conformidade com a portaria 88/87 '.
            'do INMETRO para balanças com carga máxima de 160.000 kg sob o lacre nº 1813.']
        ];
        foreach ($aRows as $row) {
            Nota::create($row);
        }
    }
}
