<?php
    error_reporting(0);
    require_once "./mysql.php";
    require_once "../Classes/PHPExcel.php";

    //  Realiza a busca na base de dados
    $con = new Conexao();
    $link = $con->conexao();
    
    $query = file_get_contents('SQL/creator.sql');
    $sql = $link->prepare($query);
    $sql->execute();


    $tmpfname = "Tabela.xls";
    $excelReader = PHPExcel_IOFactory::createReaderForFile($tmpfname);
    $excelObj = $excelReader->load($tmpfname);
    
    $worksheet = $excelObj->getSheet(0);
    $lastRow = $worksheet->getHighestRow();
    
    for ($row = 1; $row <= $lastRow; $row++) {
        if ($row > 1) {
            $query = "INSERT INTO reativacao(codigo, nome) 
            VALUES ('" . $worksheet->getCell('A'.$row)->getValue() . "',
                    '" . $worksheet->getCell('B'.$row)->getValue() . "'
                    );";

            $sql = $link->prepare($query);
            $sql->execute();
        }
        //  echo "Sucesso!<br>"; 
    }

    $worksheet = $excelObj->getSheet(1);
    $lastRow = $worksheet->getHighestRow();
    
    for ($row = 1; $row <= $lastRow; $row++) {
        if ($row > 6) {
            $quebra = explode(" - ", $worksheet->getCell('A'.$row)->getValue(), 2);
            $query = "INSERT INTO suspensao(codigo, nome, conc_final, prisma_sabi, reatnb_plenus, situacao) 
            VALUES ('" . $quebra[0] . "',
                    '" . $quebra[1] . "',
                    '" . $worksheet->getCell('B'.$row)->getValue() . "',
                    '" . $worksheet->getCell('C'.$row)->getValue() . "',
                    '" . $worksheet->getCell('D'.$row)->getValue() . "',
                    '" . $worksheet->getCell('E'.$row)->getValue() . "'
                    );";

            $sql = $link->prepare($query);
            $sql->execute();
        }
        //  echo "Sucesso!<br>"; 
    }

    $worksheet = $excelObj->getSheet(2);
    $lastRow = $worksheet->getHighestRow();
    
    for ($row = 1; $row <= $lastRow; $row++) {
        if ($row > 5) {
            $quebra = explode(" - ", $worksheet->getCell('A'.$row)->getValue(), 2);
            $query = "INSERT INTO cessacao(codigo, nome, conc_final, prisma_sabi, reatnb_plenus, situacao) 
            VALUES ('" . $quebra[0] . "',
                    '" . $quebra[1] . "',
                    '" . $worksheet->getCell('B'.$row)->getValue() . "',
                    '" . $worksheet->getCell('C'.$row)->getValue() . "',
                    '" . $worksheet->getCell('D'.$row)->getValue() . "',
                    '" . $worksheet->getCell('E'.$row)->getValue() . "'
                    );";

            $sql = $link->prepare($query);
            $sql->execute();
        }
        //  echo "Sucesso!<br>"; 
    }

    echo '
        <script language= "JavaScript">
            location.href="index.php";
        </script>
    ';
?>
