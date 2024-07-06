<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="bootstrap.css">
    <link rel="shortcut icon" href="https://redepiaui.com/media/image_bank/2017/9/receita-federal.jpg">
    <title>Gerador de CPF</title>
</head>
<body>
<div class="row m-0">
    <div class="col bg-primary text-white">
        <img src="https://redepiaui.com/media/image_bank/2017/9/receita-federal.jpg" width="64" height="64"/>
        <span class="lead">Cadastro de Pessoa Física > Novo Cadastro</span>
    </div>
</div>
    <form name="criacpf" method="post" action="calculacpf.php" class="m-auto p-2 w-75">
    <fieldset class="border p-2 bg-light"><legend class="lead" style="width: 65px">Usuário</legend>    
    <div class="form-row">
            <div class="col">
                Nome<input type="text" name="first_name" class="form-control form-control-sm mb-1" placeholder="Nome">
            </div>
            <div class="col">
                Sobrenome<input type="text" name="last_name" class="form-control form-control-sm mb-1" placeholder="Sobrenome">
            </div>
        </div>
        <div class="form-row">
            <div class="col">
                Endereço<input type="text" name="address" class="form-control form-control-sm mb-1" placeholder="Endereço">
            </div>
            <div class="col-2">
                Complemento<input type="text" name="complement" class="form-control form-control-sm" placeholder="Complemento">
            </div>
        </div>

        <div class="form-row">
            <div class="col">
                Data de Nascimento<input type="text" name="born" class="form-control form-control-sm" placeholder="Data de Nascimento">
            </div>
            <div class="col">
                Identidade<input type="text" name="identify" class="form-control form-control-sm" placeholder="Rg">
            </div>
            <div class="col">
                Data de expedição<input type="text" name="id_dt_exped" class="form-control form-control-sm" placeholder="Data de Expedição">
            </div>
            <div class="col">
                Orgão Expedidor<input type="text" name="org_exped" class="form-control form-control-sm" placeholder="Orgão Expedidor">
            </div>
            <div class="col">
                Estado<select name="region" size="1" class="form-control form-control-sm">
                    <option value="">Selecione uma Região</option>
                    <option value="2">Acre</option>
                    <option value="4">Alagoas</option>
                    <option value="2">Amapá</option>
                    <option value="2">Amazonas</option>
                    <option value="5">Bahia</option>
                    <option value="3">Ceará</option>
                    <option value="1">Distrito Federal</option>
                    <option value="7">Espírito Santo</option>
                    <option value="1">Goiás</option>
                    <option value="3">Maranhão</option>
                    <option value="1">Mato Grosso</option>
                    <option value="1">Mato Grosso do Sul</option>
                    <option value="6">Minas Gerais</option>
                    <option value="1">Pará</option>
                    <option value="2">Paraíba</option>
                    <option value="9">Paraná</option>
                    <option value="4">Pernambuco</option>
                    <option value="3">Piauí</option>
                    <option value="7">Rio de Jeneiro</option>
                    <option value="4">Rio Grande do Norte</option>
                    <option value="0">Rio Grande do Sul</option>
                    <option value="2">Rondônia</option>
                    <option value="2">Roraima</option>
                    <option value="9">Santa Catarina</option>
                    <option value="8">São Paulo</option>
                    <option value="5">Sergipe</option>
                    <option value="1">Tocantins</option>
                </select>
            </div>
        </div>
    </fieldset>
<!--
    <fieldset class="border p-2 bg-light mb-2">
        <legend class="lead" style="width: 65px;">Filiação</legend>
        <fieldset class="border p-2">
            <legend class="ml-3 lead" style="width:25px">Pai</legend>
            <div class="form-row mb-3">     
                <div class="col">
                    Nome<input class="form-control form-control-sm"type="text" name="nome_pai"placeholder="Nome do Pai">
                </div>
            </div>

            <div class="form-row">
                <div class="col">
                 CPF <input type="text" class="form-control form-control-sm" name="cpf_pai" placeholder="CPF">
                </div>
                <div class="col">
                 RG <input type="text" class="form-control form-control-sm" name="rg_pai" placeholder="RG">
                </div>
                <div class="col">
                 Data de nascimento <input type="text" class="form-control form-control-sm" name="dn_pai" placeholder="Data de nascimento">
                </div>
                <div class="col">
                 Profissão <input type="text" class="form-control form-control-sm" name="prof_pai"  placeholder="Profissão">
                </div>
            </div>
        </fieldset>
        <fieldset class="border p-2">
            <legend class="ml-3 lead" style="width:25px">Mãe</legend>
            <div class="form-row mb-3">
                <div class="col">
                    Nome <input type="text" name="nome_mae" class="form-control form-control-sm" placehoçder="Nome da mãe">
                </div>
            </div>
            
            <div class="form-row">
            <div class="col">
                 CPF <input type="text" class="form-control form-control-sm" name="cpf_mae" placeholder="CPF">
                </div>
                <div class="col">
                 RG <input type="text" class="form-control form-control-sm" name="rg_mae" placeholder="RG">
                </div>
                <div class="col">
                 Data de nascimento <input type="text" class="form-control form-control-sm" name="dn_mae" placeholder="Data de nascimento">
                </div>
                <div class="col">
                 Profissão <input type="text" class="form-control form-control-sm" name="prof_mae"  placeholder="Profissão">
                </div>     
            </div>
        </fieldset>
    </fieldset>-->
    <div class="form-row">
        <div class="col text-right">
            <input type="submit" class="btn btn-primary float-end" value="Cadastrar">
        </div>
    </div>
    </form>    
<script src="bootstrap.bundle.js"></script>
</body>
</html>