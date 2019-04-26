<?php

$hierarquia = array(
    array(
        'nome_cargo'=>'CEO',
        'subordinados' => array(
            //Inicio: Diretor comercial
            array(
                'nome_cargo'=>'diretor comercial',
                'subordinados'=>array(
                    //Inicio: Gerente de vendas
                    array(
                        'nome_cargo'=>'gerente de vendas'
                    )
                    //termino: Gerente de vendas
                )
            ),
            //termino: Diretor comercial
            //inicio: diretor financeiro
            array(
                'nome_cargo'=>'diretor financeiro',
                'subordinados'=>array(
                    //Inicio: Gerente de contas a pagar
                    array(
                        'nome_cargo'=>'gerente de contas a pagar',
                        'subordinados'=>array(
                            //Inicio: supervisor
                            array(
                                'nome_cargo'=>'supervisor de pagamentos'
                            )
                            //termino: supervisor
                        )
                    ),
                    //termino: Gerente de contas a pagar
                    //Inicio: Gerente compras
                    array(
                        'nome_cargo'=>'gerente de compras',
                        'subordinados'=>array(
                            //Inicio: supervisor
                            array(
                                'nome_cargo'=>'supervisor de suprementos'
                            )
                            //termino: supervisor
                        )
                    )
                    //termino: Gerente de compras
                )

            )
            //termino: diretor financeiro
        )
    )
);

function exibe($cargos){

        $html = "<ul>";

        foreach ($cargos as $cargo) {
            $html .= "<li>";

            $html .= $cargo['nome_cargo'];

            if (isset($cargo['subordinados']) && count($cargo['subordinados']) > 0) {
                $html .= exibe($cargo['subordinados']);
            }

            $html .= "</li>";
        }

        $html .= "</ul>";

        return $html;
}

echo exibe($hierarquia);
?>