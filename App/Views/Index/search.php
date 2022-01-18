<?php if ($linha != null){ ?>

    <button type="button" style="cursor:pointer;" class="fechar_btn" id="fechar" onClick="toTopo()"><i class="fa fa-times"></i></button>
    <form class="result" id="result">
        <div class="form-row">
            <div class="form-group col-md-1">
                <label class="font-weight-bold" for="inputMotivo">Código</label>
                <input type="text" class="form-control" id="inputMotivo" value="<?=$linha['codigo']?>" name="codigo" disabled>
            </div>
            <div class="form-group col-md-11">
                <label class="font-weight-bold" for="inputNome">Nome</label>
                <input type="text" class="form-control" id="inputNome" placeholder="Nome" name="nome" value="<?=$linha['nome']?>" disabled>
            </div>
        </div>
        <div class="form-row">
            <div class="form-group col-md-12">
                <label class="font-weight-bold" for="inputFin">Conceito e Finalidade</label>
                <textarea class="form-control" id="inputFin" rows="3" name="conceito" disabled><?=$linha['conc_final']?></textarea>
            </div>
        </div>
        <div class="form-row">
            <div class="form-group col-md-12">
                <label class="font-weight-bold" for="inputSit">Situação</label>
                <textarea class="form-control" id="inputSit" rows="3" name="situacao" disabled><?=$linha['situacao']?></textarea>
            </div>
        </div>
        <div class="form-row">
            <div class="form-group col-md-12">
                <label class="font-weight-bold" for="inputReativ">Sistemas/Motivos de Reativação</label>
                <p style="color: #30638f;font-style: italic;margin-top: -10px;background: #e4f1ff;padding: 1px 10px 3px 10px;border-radius: 6px;">Indica em qual(is) sistema(s) e por qual(is) motivo(s) um benefício cessado/suspenso pode ser reativado.
                </p>
                <div class="row" id="inputReativ">
                    <div class="col-md-12">
                        <nav>
                            <div class="nav nav-tabs" id="nav-tab" role="tablist">
                                <a class="nav-item nav-link 
                                <?php if($linha['prisma_sabi'] != null){ echo "active"; } else { echo "disabled";} ?>
                                " id="nav-home-tab" data-toggle="tab" href="#nav-PRISMA" role="tab" aria-controls="nav-home" aria-selected="true">PRISMA/SABI/SIBE PU</a>
                                <a class="nav-item nav-link 
                                <?php if($linha['reatnb_plenus'] != null){ if($linha['prisma_sabi'] == null) { echo "active"; }} else { echo "disabled";} ?>
                                " id="nav-profile-tab" data-toggle="tab" href="#nav-REATNB" role="tab" aria-controls="nav-profile" aria-selected="false">REATNB/SIBE PU</a>
                            </div>
                        </nav>
                        <div class="tab-content" id="nav-tabContent">                            
                            <div class="tab-pane fade 
                                <?php if($linha['prisma_sabi'] != null){ echo "active show"; } ?>
                                " id="nav-PRISMA" role="tabpanel" aria-labelledby="nav-home-tab">
                                <br>
                                <textarea class="form-control reativa-text" id="inputPrisma" rows="5" name="prisma" disabled>

                                    <?php $string  = str_replace("e", ",", $linha['prisma_sabi']);
                                    $motivos = explode(",", $string);
                                    
                                    foreach ($motivos as $value) {
                                        $value = trim($value);
                                        
                                        $query1 = "SELECT * FROM reativacao WHERE codigo = (:codigo) LIMIT 1;";
                                    
                                        $sql1 = $link->prepare($query1);

                                        $sql1->bindParam(':codigo', $value, PDO::PARAM_STR);
                                        $sql1->execute();
                                        
                                        $linha1 = $sql1->fetch(PDO::FETCH_ASSOC);

                                        @$return = $linha1['codigo'] . ' - ' . $linha1['nome'] . "\n";
                                        
                                        echo $return;
                                    } ?>                                
                                </textarea>
                            </div>                            
                            <div class="tab-pane fade 
                                <?php if($linha['reatnb_plenus'] != null){if($linha['prisma_sabi'] == null) { echo "active "; }  echo "show";} else { echo "disabled";} ?>
                                " id="nav-REATNB" role="tabpanel" aria-labelledby="nav-profile-tab">
                                <br>
                                <textarea class="form-control reativa-text" id="inputReatnb" rows="5" name="reatnb" disabled>

                                    <?php $string  = str_replace("e", ",", $linha['reatnb_plenus']);
                                    $motivos = explode(",", $string);
                                    
                                    foreach ($motivos as $value) {
                                        $value = trim($value);
                                        $query1 = "SELECT * FROM reativacao WHERE codigo = (:codigo) LIMIT 1;";
                                    
                                        $sql1 = $link->prepare($query1);

                                        $sql1->bindValue(':codigo', $value, PDO::PARAM_STR);
                                        $sql1->execute();
                                        
                                        $linha1 = $sql1->fetch(PDO::FETCH_ASSOC);

                                        @$return = $linha1['codigo'] . ' - ' . $linha1['nome'] . "\n";
                                        
                                        echo $return;
                                    }?>                                
                                </textarea>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <button type="button" style="cursor:pointer;" class="scroll_btn " id="scroll_top" onClick="toTopo()"><i class="fa fa-arrow-up"></i></button>
        </div>
    </form>    
                
<?php } else {
echo "<script language='javascript' type='text/javascript'>alert('Resultado não encontrado!');</script>";
}
?>