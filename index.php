<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Document</title>
    <link href="http://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src= "https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.bundle.min.js"></script>
</head>


<body>
    <style>
        a {
            float: right;

        }

        .card {
            float: left;
            margin: 10px;
            width: 300px;

        }

        h2 {
            text-align: center;

        }

        #carrinho-principal {
            position: fixed;
            right: 10px;
            bottom: 10px;

        }

        .up, 
        .down {
            cursor: pointer;

        }
        </style>
        <div class= "container mt-3">
           
         <h2 class="text-center">Hellena Nolletto </h2>



        <?php
        include("conectar.php");
        $sql = "select * from produto";
        $resultado = conectar($sql);
        $i = 0;
        while ($linha =$resultado->fetch_assoc()){
            $nome = $linha["nome"];
            $valor = $linha["valor"];
            $imagem = $linha["imagem"];
            $id = $linha["id"];
            ?>
            <div class="card">
                <img class="card-img-top" src="<?php echo $imagem; ?>" alt="Card image" style="width:100%">
                <div class= "card-body">
                    <h4 class="card-title"><?php echo $nome; ?><h4>
                        <p class="card-text">R$: <?php echo $valor; ?>
                        <a href="#" class="btn btn-outline-info" onclink="addItem(<?php echo $i ?>)">/*</a>
        </p>
        </div>
        <?php $i++;
        }
?>
</div>

<a href="#" id="carrinho-principal" class="btn btn-primary btn-lg" onclink="carrinho()"

data-bs-toggle="modal" data-bs-target="#myModal">/*</a>

<div class="modal" id="myModal">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">

        <div class="modal-header">
            <h4 class="modal-title">Produtos para encomenda</h4>
            <button type="button" class="btn-close" data-bs-dismiss="modal"><button>
    </div>

    <div class="modal-body" id="modal-body">
        <table class="table">
            <thead>
                <tr>
                    <th>Produto</th>
                    <th class="col-1">Valor</th>
                    <th class="col-1">Quantidade</th>
    </tr>
    </thead>
    <tbody id= "tb-corpo">
    </tbody>
    </table>
    </div>


    <div class="modal-footer">
        <button type="button" class="btn btn-sucess" onclink="enviarEncomenda()">Enviar Encomenda</button>
        <button type="button" class="btn btn danger" data-bs-dismiss="modal">Cancelar</button>
    </div>
    </div>
    </div>

    <script>
        lsCarrinho = [];
        valorEncomenda = 0;

        function addItem(i) {
            if (lscarrinho[i] != true) {
                lscarrinho[i] = true;
                document.getElementsByClassName("btn")[i].classlist.remove("btn-outline-info");
                document.getElementsByClassName("btn")[i].classlist.add("btn-info");
            } else {
                lscarrinho[i] = false;
                document.getElementsByClassName("btn")[i].classlist.remove("btn-info");
            }
        }
        lsProduto = [];

        function carrinho() {
            valorEncomenda = 0;
            lsProduto = [];
            for (const i in lscarrinho){
                if (lscarrinho[i]){
                    p = {};
                    console.log(i);
                    p.id = i;
                    p.nome - document.getByClassName("card-title")[i].innerHTML;
                    p.valor = document.getByClassName("card-text")[i].innerHTML;
                    n = p.valor.index0f("<");
                    p.valor = p.valor.substring(3, n);
                    p.valor = p.valor.replace(",",".")
                    p.quantidade = 1; 
            console.log(p);
            lsProduto.push(p);
                }
            }




            tbCorpo = "";
            for (const i in lsproduto){
                p = lsproduto[i];
                p.valorUnitario = p.valor;
                tbCorpo += '
                <tr>'
                <td>${p.nome}</td>
                <td class="valor">$`{p.valor}</td>
                <td>
                <span class="up" onclick="mudarQt(${i},1)">£</span>
                <span class="qt">${p.quantidade}</span>
                <span class="down" onclick="mudarQt(${i},-1)">¬</span>
                </td>
                </tr>
                ''>
                valorencomenda += Number(p.valor);

        
            }

            tbCorpo += '<tr>
            <td>valor da Encomenda</td>
            <td colspan="2" id= "vlEncomenda">${valorEncomenda}</td>
            </tr>'':
            document.getById("tb-corpo")[i].innerHTML = tbcorpo;

        }

        function mudarQt(i,qt){
            console.log(i);
            console.log(qt);
            p = lsproduto[i];
            p.quantidade += qt;
            if (p.quantidade <= 0 ) {
                addItem(p.id);
                document.getByElementsByTagName("tr")[i + 1 ].style.display = "none";
                p.valor = 0;
                atualizaValorEncomenda();
                return;

            }
            p.valor = p.quantidade * p.valorUnitario;
            document.getElementsByClassName("qt")[i].innerHTML = p.quantidade;
            document.getElementsByClassName("valor")[i].innerHTML = p.valor;
            atualizaValorencomenda()

        }

function atualizaValorEncomenda() {
    valorEncomenda = 0;
    for (p of lsProduto) {
        valorEncomenda += Number(p.valor);

    }
    document.getElementsByClassName("vlEncomenda")[i].innerHTML = valorEncomenda;

}

function enviarEncomenda () {
    fone = "5561985458065";
    if (valorEncomenda <= 0) {
        alert("A encomenda deve ter so menos 1 produto.");
        return;

    }

    msg = "Gostaria de fazer a seguinte encomenda: \n";
    for (p of lsProduto) {
        if (p.quantidade > 0) {
            msg += ${p.nome} 'Qt.' ${p.quantidade} = ${p.valor} \n;

        }
    }
    msg += 'Valor da encomenda = ${valorEncomenda}';
    msg = encodeURI(msg;)

    window.open(url, '_blank');

}

</script>
</body>
</html>

