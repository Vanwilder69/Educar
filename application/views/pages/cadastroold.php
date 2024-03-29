
    <div class="row mgtop">
      <!-- <img src="./assets/images/logoEducar.png" style="width: 400px; margin-bottom: 20px;" class="center" alt=""/> -->
      <div class="col-md-4">
        <img
          src="./assets/images/edtudante.jpg"
          alt=""
          class="asideft"
          style="height: 100%;"
        />
      </div>
      <div class="col-md-8 col-sm-12">
        <form class="form-horizontal" method="post" action="<?= base_url() ?>vindicostumer">
          <fieldset>
            <div class="panel panel-primary">
              <div class="panel-body">
                <h3 class="cadastro">Cadastro</h3>
                <div class="form-group">
                  <div class="col-md-11 control-label">
                    <p class="help-block"><h11>*</h11> Campo Obrigatório</p>
                  </div>
                </div>

                <!-- Text input-->
                <div class="form-group">
                  <label class="col-md-2 control-label" for="Nome"
                    >Nome <h11>*</h11></label
                  >
                  <div class="col-md-8">
                    <input
                      id="name"
                      name="name"
                      placeholder="Nome Completo"
                      class="form-control input-md"
                      required=""
                      type="text"
                    />
                  </div>
                </div>

                <!-- Text input-->
                <div class="form-group">
                  <label class="col-md-2 control-label" for="Nome"
                    >CPF <h11>*</h11></label
                  >
                  <div class="col-md-3">
                    <input
                      id="cpf"
                      name="cpf"
                      placeholder="Apenas números"
                      class="form-control input-md"
                      required=""
                      type="text"
                      maxlength="11"
                      pattern="[0-9]+$"
                    />
                  </div>

                  <label class="col-md-2 control-label" for="Nome"
                    >Nascimento<h11>*</h11></label
                  >
                  <div class="col-md-3">
                    <input
                      id="dtnasc"
                      name="dtnasc"
                      placeholder="DD/MM/AAAA"
                      class="form-control input-md"
                      required=""
                      type="text"
                      maxlength="10"
                      OnKeyPress="formatar('##/##/####', this)"
                      onBlur="showhide()"
                    />
                  </div>

                  <!-- Multiple Radios (inline) -->
                </div>

                <!-- Prepended text-->
                <div class="form-group">
                  <label class="col-md-2 control-label" for="phone1"
                    >Telefone <h11>*</h11></label
                  >
                  <div class="col-md-3">
                    <div class="input-group">
                      <span class="input-group-addon"
                        ><i class="glyphicon glyphicon-earphone"></i
                      ></span>
                      <input
                        id="phone1"
                        name="phone1"
                        class="form-control"
                        placeholder="XX XXXXX-XXXX"
                        required=""
                        type="text"
                        maxlength="13"
                        pattern="\[0-9]{2}\ [0-9]{4,6}-[0-9]{3,4}$"
                        OnKeyPress="formatar('## #####-####', this)"
                      />
                    </div>
                  </div>

                  <label class="col-md-1 control-label" for="phone2"
                    >Celular</label
                  >
                  <div class="col-md-3">
                    <div class="input-group">
                      <span class="input-group-addon"
                        ><i class="glyphicon glyphicon-earphone"></i
                      ></span>
                      <input
                        id="phone2"
                        name="phone2"
                        class="form-control"
                        placeholder="XX XXXXX-XXXX"
                        type="text"
                        maxlength="13"
                        pattern="\[0-9]{2}\ [0-9]{4,6}-[0-9]{3,4}$"
                        OnKeyPress="formatar('## #####-####', this)"
                      />
                    </div>
                  </div>
                </div>

                <!-- Prepended text-->
                <div class="form-group">
                  <label class="col-md-2 control-label" for="email"
                    >Email <h11>*</h11></label
                  >
                  <div class="col-md-5">
                    <div class="input-group">
                      <span class="input-group-addon"
                        ><i class="glyphicon glyphicon-envelope"></i
                      ></span>
                      <input
                        id="email"
                        name="email"
                        class="form-control"
                        placeholder="email@email.com"
                        required=""
                        type="text"
                        pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,4}$"
                      />
                    </div>
                  </div>
                </div>

                <!-- Search input-->
                <div class="form-group">
                  <label class="col-md-2 control-label" for="CEP"
                    >CEP <h11>*</h11></label
                  >
                  <div class="col-md-2">
                    <input
                      id="cep"
                      name="cep"
                      placeholder="Apenas números"
                      class="form-control input-md"
                      required=""
                      value=""
                      type="search"
                      maxlength="8"
                      pattern="[0-9]+$"
                    />
                  </div>
                  <div class="col-md-2">
                    <button
                      type="button"
                      class="btn btn-primary buttoncep"
                      onclick="pesquisacep(cep.value)"
                    >
                      Pesquisar
                    </button>
                  </div>
                </div>

                <!-- Prepended text-->
                <div class="form-group">
                  <label class="col-md-2 control-label" for="prependedtext"
                    >Endereço</label
                  >
                  <div class="col-md-4">
                    <div class="input-group">
                      <span class="input-group-addon">Rua</span>
                      <input
                        id="rua"
                        name="rua"
                        class="form-control"
                        placeholder=""
                        required=""
                        type="text"
                      />
                    </div>
                  </div>
                  <div class="col-md-2">
                    <div class="input-group">
                      <span class="input-group-addon">Nº <h11>*</h11></span>
                      <input
                        id="numero"
                        name="numero"
                        class="form-control"
                        placeholder=""
                        required=""
                        type="text"
                      />
                    </div>
                  </div>

                  <div class="col-md-3">
                    <div class="input-group">
                      <span class="input-group-addon">Bairro</span>
                      <input
                        id="bairro"
                        name="bairro"
                        class="form-control"
                        placeholder=""
                        required=""
                        type="text"
                      />
                    </div>
                  </div>
                </div>

                <div class="form-group">
                  <label
                    class="col-md-2 control-label"
                    for="cidade"
                  ></label>
                  <div class="col-md-4">
                    <div class="input-group">
                      <span class="input-group-addon">Cidade</span>
                      <input
                        id="cidade"
                        name="cidade"
                        class="form-control"
                        placeholder=""
                        required=""
                        readonly="readonly"
                        type="text"
                      />
                    </div>
                  </div>

                  <div class="col-md-3">
                    <div class="input-group">
                      <span class="input-group-addon">Estado</span>
                      <input
                        id="estado"
                        name="estado"
                        class="form-control"
                        placeholder=""
                        required=""
                        readonly="readonly"
                        type="text"
                      />
                    </div>
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-md-2 control-label" for="prependedtext">Curso</label>
                    <div class="col-md-4">
                        <div class="input-group">
                        <span class="input-group-addon">Tipo</span>

                        <select id="tipo" class="form-control" required="">
                        <option value="graduacao" disabled>Graduacao - Em breve</option>
                                <option value="pos" selected >Pos-Graduacao</option>
                                <option value="capacitacao" disabled>Capacitacao - Em breve</option>
                                <option value="extensao" disabled>Extensao - Em breve</option>
                            </select>

                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="input-group">
                        <span class="input-group-addon">Curso</span>

                        <select id="tipo" class="form-control" required="">
                                <?php foreach ($cursos as $curso):
                                    if ($curso->modalidade === "3") : 
                                    ?>
                                <option value="<?= $curso->titulo ?>" required><?= $curso->titulo?></option>
                                <?php endif ?>      
                            <?php endforeach ?>
                            </select>


                        </div>
                    </div>
                </div>

                <!-- Button (Double) -->
                <div class="form-group">
                  <label class="col-md-2 control-label" for="Cadastrar"></label>
                  <div class="col-md-8">
                    <button
                      id="Cadastrar"
                      name="Cadastrar"
                      class="btn btn-success mgbt"
                      type="Submit"
                
                    >
                      Cadastrar
                    </button>
                    <button
                      id="Cancelar"
                      name="Cancelar"
                      class="btn btn-danger mgbt"
                      type="Reset"
                    >
                      Cancelar
                    </button>
                  </div>
                </div>
              </div>
            </div>
          </fieldset>
        </form>
      </div>
    </div>

    <script>

    
    function limpa_formulario_cep() {
            //Limpa valores do formulário de cep.
            document.getElementById('rua').value=("");
            document.getElementById('bairro').value=("");
            document.getElementById('cidade').value=("");
            document.getElementById('estado').value=("");
            
    }

    function meu_callback(conteudo) {
        if (!("erro" in conteudo)) {
            //Atualiza os campos com os valores.
            document.getElementById('rua').value=(conteudo.logradouro);
            document.getElementById('bairro').value=(conteudo.bairro);
            document.getElementById('cidade').value=(conteudo.localidade);
            document.getElementById('estado').value=(conteudo.uf);
        } //end if.
        else {
            //CEP não Encontrado.
            limpa_formulario_cep();
            alert("CEP não encontrado.");
            document.getElementById('cep').value=("");
        }
    }
        
    function pesquisacep(valor) {

        //Nova variável "cep" somente com dígitos.
        var cep = valor.replace(/\D/g, '');

        //Verifica se campo cep possui valor informado.
        if (cep !== "") {

            //Expressão regular para validar o CEP.
            var validacep = /^[0-9]{8}$/;

            //Valida o formato do CEP.
            if(validacep.test(cep)) {

                //Preenche os campos com "..." enquanto consulta webservice.
                document.getElementById('rua').value="...";
                document.getElementById('bairro').value="...";
                document.getElementById('cidade').value="...";
                document.getElementById('estado').value="...";

                //Cria um elemento javascript.
                var script = document.createElement('script');

                //Sincroniza com o callback.
                script.src = '//viacep.com.br/ws/'+ cep + '/json/?callback=meu_callback';

                //Insere script no documento e carrega o conteúdo.
                document.body.appendChild(script);

            } //end if.
            else {
                //cep é inválido.
                limpa_formulario_cep();
                alert("Formato de CEP inválido.");
            }
        } //end if.
        else {
            //cep sem valor, limpa formulário.
            limpa_formulario_cep();
        }
    }

function formatar(mascara, documento){
  var i = documento.value.length;
  var saida = mascara.substring(0,1);
  var texto = mascara.substring(i);
  
  if (texto.substring(0,1) != saida){
            documento.value += texto.substring(0,1);
  }
  
}
 
function idade (){
    var data=document.getElementById("dtnasc").value;
    var dia=data.substr(0, 2);
    var mes=data.substr(3, 2);
    var ano=data.substr(6, 4);
    var d = new Date();
    var ano_atual = d.getFullYear(),
        mes_atual = d.getMonth() + 1,
        dia_atual = d.getDate();
        
        ano=+ano,
        mes=+mes,
        dia=+dia;
        
    var idade=ano_atual-ano;
    
    if (mes_atual < mes || mes_atual == mes_aniversario && dia_atual < dia) {
        idade--;
    }
return idade;
} 
  
  
function exibe(i) {
    
   
        
	document.getElementById(i).readOnly= true;
	    
		
	
    
}

function desabilita(i){
    
     document.getElementById(i).disabled = true;    
    }
function habilita(i)
    {
        document.getElementById(i).disabled = false;
    }


function showhide()
 {
       var div = document.getElementById("newpost");
       
       if(idade()>=18){
 
    div.style.display = "none";
}
else if(idade()<18) {
    div.style.display = "inline";
}

 }
</script>
