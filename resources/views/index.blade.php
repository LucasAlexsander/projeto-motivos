@extends('layout.default')
@section('title', 'Home')

@section('content')

<head>
  <title>INSS - Consultar Motivo</title>
</head>

<body>
  <div class="s006" id="topo">
    <form>
      <fieldset>
        <legend class="text-center"><div class="display-4 font-weight-bold">Consultar Motivos de Cessação e Reativação <i class="fa fa-comments"></i></div></legend>
        <div class="container">
          <div class="">
            <nav id="navegar">
              <!-- Altera para display None dependendo do user -->
              <div class="nav nav-tabs justify-content-end" id="nav-tab" role="tablist">
                <a class="nav-item nav-link" id="button-logout-page" href="{{route('login')}}" aria-controls="nav-Motsus">Admin</a>
                <a class="nav-item nav-link active" id="nav-Motces-tab" data-toggle="tab" href="#nav-Motces" role="tab" aria-controls="nav-Motces" aria-selected="true" onClick="set_item('')">Motivo de Cessação</a>
                <a class="nav-item nav-link" id="nav-Motsus-tab" data-toggle="tab" href="#nav-Motsus" role="tab" aria-controls="nav-Motsus" aria-selected="false" onClick="set_item('')">Motivo de Suspensão</a>
              </div>
            </nav>
            <br>
            <div class="tab-content" id="nav-tabContent">
                <div class="inner-form">
                  <div class="input-group add-on">
                    <input class="form-control" autocomplete="off" placeholder="Digite aqui..." name="search" id="search" type="text" onFocus="set_item('')">
                    <div class="input-group-btn">
                      <button class="btn-radius btn btn-primary button2  " type="button" name="pesquisar" onClick="enviar()"><i class="fa fa-search col-md-12 js-scroll-trigger"><a href="#resultado" class="js-scroll-trigger"></a></i></button>
                    </div>
                    <div class="tab-pane fade show active" id="nav-Motces" role="tabpanel" aria-labelledby="nav-Motces-tab">
                    </div>
                    <div class="tab-pane fade" id="nav-Motsus" role="tabpanel" aria-labelledby="nav-Motsus-tab">
                    </div>
                  </div>
                </div>
                <div class="list-group">
                  <ul class="list-unstyled list-group" id="sugestao" style="margin-bottom:10px;"></ul>
                </div>
                <div class="suggestion-wrap">
                  <span>Código</span>
                  <span>Nome do Motivo</span>
                </div>
              </div>
            </div>
            <div class="text-white font-weight-bold float-right">
              Deseja fazer o download da planilha? <a class="text-warning" href="./Tabela.xls" download>Clique Aqui.</a>
            </div>
          </div>
        </div>
      </fieldset>
    </form>
      <p style="float: right;margin-top: -40px;margin-right: 20px;color: #747171;font-size: 15px;">
          Gerência Executiva de Diamantina/MG - Desenvolvido por Bruno Cesar Silva
      </p>
  </div>

  <div class="container">
    <div id="resultado">
    </div>
  </div>

  <!-- Bootstrap core JavaScript-->
  <script src="/vendor/jquery/jquery.min.js"></script>
  <script src="/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Scripts para funções -->
  <script type="text/javascript" src="/assets/js/script.js"></script>

  @endsection
