<?php
	error_reporting(0);
	include_once './mysql.php';
	require_once 'Classes/PHPExcel.php';
	
	//  Realiza a busca na base de dados
    $con = new Conexao();
    $link = $con->conexao();

    $query = "SELECT * FROM cessacao ORDER BY id_cessacao;";
	
	$sql = $link->prepare($query);
    
    $sql->execute();
    
    $list = $sql->fetchAll();
	
	$objPHPExcel = new PHPExcel();
	$sheet = 0;
		
	$objPHPExcel->createSheet();
	$objPHPExcel->setActiveSheetIndex($sheet);
	
	if ($list != null){
		
		$i = 1;
		
		$objPHPExcel->getActiveSheet()->setCellValue(('A'.$i), 'Código');
		$objPHPExcel->getActiveSheet()->setCellValue(('B'.$i), 'Nome');
		$objPHPExcel->getActiveSheet()->setCellValue(('C'.$i), 'Conceito / Finalidade');
		$objPHPExcel->getActiveSheet()->setCellValue(('D'.$i), 'PRISMA / SABI');
		$objPHPExcel->getActiveSheet()->setCellValue(('E'.$i), 'REATNB / PLENUS');
		$objPHPExcel->getActiveSheet()->setCellValue(('F'.$i), 'Situação');

        foreach ($list as $rs) {
			$i += 1;
			$objPHPExcel->getActiveSheet()->setCellValue(('A'.$i), $rs['codigo']);
			$objPHPExcel->getActiveSheet()->setCellValue(('B'.$i), $rs['nome']);
			$objPHPExcel->getActiveSheet()->setCellValue(('C'.$i), $rs['conc_final']);
			$objPHPExcel->getActiveSheet()->setCellValue(('D'.$i), $rs['prisma_sabi']);
			$objPHPExcel->getActiveSheet()->setCellValue(('E'.$i), $rs['reatnb_plenus']);
			$objPHPExcel->getActiveSheet()->setCellValue(('F'.$i), $rs['situacao']);
        }
		$objPHPExcel->getActiveSheet()->setTitle('Cessacao');
	}

    $sheet++;
    $objPHPExcel->createSheet();
	$objPHPExcel->setActiveSheetIndex($sheet);
	
	$query = "SELECT * FROM suspensao ORDER BY id_suspensao;";
	
	$sql = $link->prepare($query);
    
    $sql->execute();
    
    $list = $sql->fetchAll();

	if ($list != null){
		
		$i = 1;
		
		$objPHPExcel->getActiveSheet()->setCellValue(('A'.$i), 'Código');
		$objPHPExcel->getActiveSheet()->setCellValue(('B'.$i), 'Nome');
		$objPHPExcel->getActiveSheet()->setCellValue(('C'.$i), 'Conceito / Finalidade');
		$objPHPExcel->getActiveSheet()->setCellValue(('D'.$i), 'PRISMA / SABI');
		$objPHPExcel->getActiveSheet()->setCellValue(('E'.$i), 'REATNB / PLENUS');
		$objPHPExcel->getActiveSheet()->setCellValue(('F'.$i), 'Situação');

        foreach ($list as $rs) {
			$i += 1;
			$objPHPExcel->getActiveSheet()->setCellValue(('A'.$i), $rs['codigo']);
			$objPHPExcel->getActiveSheet()->setCellValue(('B'.$i), $rs['nome']);
			$objPHPExcel->getActiveSheet()->setCellValue(('C'.$i), $rs['conc_final']);
			$objPHPExcel->getActiveSheet()->setCellValue(('D'.$i), $rs['prisma_sabi']);
			$objPHPExcel->getActiveSheet()->setCellValue(('E'.$i), $rs['reatnb_plenus']);
			$objPHPExcel->getActiveSheet()->setCellValue(('F'.$i), $rs['situacao']);
        }
		$objPHPExcel->getActiveSheet()->setTitle('Suspensão');
	}
	
	header('Content-Type: application/vnd.openxmlformats-officedocument.spreadsheetml.sheet');
	header('Content-Disposition: attachment;filename="Planilha.xlsx"');
	header('Cache-Control: max-age=0');
	
	$objWriter = PHPExcel_IOFactory::createWriter($objPHPExcel, 'Excel2007');
	$objWriter->save('php://output');

	header("location: index.php");
?>