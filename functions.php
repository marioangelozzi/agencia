<?php
    $servicos=[
        [
            "nome" => "Desenvolvimento web",
            "imagem" => "imagens/undraw_social_dashboard_k3pt.svg",
            "descricao" => "Sites dinâmicos, otimizados para motores de busca"
        ],
        [
            "nome" => "Marketing Digital",
            "imagem" => "imagens/undraw_software_engineer_lvl5.svg",
            "descricao" => "Alcance um publico maior, venda mais rápido!"
        ],
        [
            "nome" => "Consultoria UX",
            "imagem" => "imagens/undraw_report.svg",
            "descricao" => "Ofereça a melhor experiência para seus usuários!"
        ],
        [
            "nome" => "Consultoria Agil",
            "imagem" => "imagens/undraw_report.svg",
            "descricao" => "Equipe especializada em Squad"
        ],
        [
            "nome" => "Consultoria Scrum",
            "imagem" => "imagens/undraw_software_engineer_lvl5.svg",
            "descricao" => "Equipe especializada em ferramenta scrum"
        ],
        [
            "nome" => "Consultoria Lean",
            "imagem" => "imagens/undraw_social_dashboard_k3pt.svg",
            "descricao" => "Equipe especializada em Business Model Canvas"
        ]
    ];


    function listarservicos() {
        
        // echo "<pre>";
        // var_dump($servicos);
        global $servicos;

        foreach ($servicos as $index => $servico) {
            // echo "<h1>$servico[nome]</h1>";
            // echo "<img src='$servico[imagem]'>";
            // echo "<p>$servico[descricao]</p>";
            echo 
            "<div class='col-md-4 mt-4'>
                <div class='card'>
                    <img class='card-img-top p-4' src='$servico[imagem]' alt='Imagem de capa card'>
                    <div class='card-body'>
                        <p class='card-text text-center'><a href='servico.php?id=$index'>$servico[nome]</a></p>
                    </div>
                </div>
            </div>";
            }
        
    }

    function getNome($id)
    {
        global $servicos;
        return $servicos[$id]["nome"];
    }

    // listarservicos();
?>