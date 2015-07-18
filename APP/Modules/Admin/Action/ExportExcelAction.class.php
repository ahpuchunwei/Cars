<?php  
	class ExportExcelAction extends Action{
		
		//excel所需数据
		public function index(){
			$aid=I('aid',0,'intval');
			$condition['aid'] = $aid;
			
			$res=M('Regform')->where($condition)->select();
			
			$i=0;
			foreach ($res as $v){
				$data[$i]=$v['uid'];
				$i++;
			}
			
			
			$i=0;
			foreach ($data as $v){
				
				$condition['id']=$v;
				$res=M('user')->where($condition)->find();
				$list[$i]=$res;
				$i++;
			}
			$list[$i]=0;
			
			
// 			$list1=M('user')->select();
// 			var_dump($list1);
//  			die;
			$this->export($list);
			 
		}
		
		
		//导出excel表格
		public function export($list){
		
			Vendor('PHPExcel.PHPExcel');
		
			$objPHPExcel = new PHPExcel();
		
			$objPHPExcel->getProperties()->setCreator("ctos")
		
			->setLastModifiedBy("ctos")
		
			->setTitle("Office 2007 XLSX Test Document")
		
			->setSubject("Office 2007 XLSX
					 Test Document")
		
			->setDescription("Test document for Office 2007 XLS, generated using PHP classes.")
		
			->setKeywords("office 2007 openxml php")
		
			->setCategory("Test result file");
		
			$objPHPExcel->getActiveSheet()->getColumnDimension('A')->setWidth(30);
		
			$objPHPExcel->getActiveSheet()->getColumnDimension('B')->setWidth(10);
		
			$objPHPExcel->getActiveSheet()->getColumnDimension('C')->setWidth(10);
		
			$objPHPExcel->getActiveSheet()->getColumnDimension('D')->setWidth(12);
		
			$objPHPExcel->getActiveSheet()->getColumnDimension('E')->setWidth(30);
		
			$objPHPExcel->getActiveSheet()->getColumnDimension('F')->setWidth(30);
		
			$objPHPExcel->getActiveSheet()->getColumnDimension('G')->setWidth(30);
		
			//设置行高度
		
			$objPHPExcel->getActiveSheet()->getRowDimension('1')->setRowHeight(22);
		
			$objPHPExcel->getActiveSheet()->getRowDimension('2')->setRowHeight(20);
		
			//set font size bold
		
			$objPHPExcel->getActiveSheet()->getDefaultStyle()->getFont()->setSize(10);
		
			$objPHPExcel->getActiveSheet()->getStyle('A2:G2')->getFont()->setBold(true);
		
			$objPHPExcel->getActiveSheet()->getStyle('A2:G2')->getAlignment()->setVertical(PHPExcel_Style_Alignment::VERTICAL_CENTER);
		
			$objPHPExcel->getActiveSheet()->getStyle('A2:G2')->getBorders()->getAllBorders()->setBorderStyle(PHPExcel_Style_Border::BORDER_THIN);
		
			//设置水平居中
		
			$objPHPExcel->getActiveSheet()->getStyle('A1')->getAlignment()->setHorizontal(PHPExcel_Style_Alignment::HORIZONTAL_CENTER);    //标题水平居中
		
			$objPHPExcel->getActiveSheet()->getStyle('A')->getAlignment()->setHorizontal(PHPExcel_Style_Alignment::HORIZONTAL_CENTER);
		
			$objPHPExcel->getActiveSheet()->getStyle('B')->getAlignment()->setHorizontal(PHPExcel_Style_Alignment::HORIZONTAL_CENTER);
		
			$objPHPExcel->getActiveSheet()->getStyle('D')->getAlignment()->setHorizontal(PHPExcel_Style_Alignment::HORIZONTAL_CENTER);
		
			$objPHPExcel->getActiveSheet()->getStyle('F')->getAlignment()->setHorizontal(PHPExcel_Style_Alignment::HORIZONTAL_CENTER);
		
			$objPHPExcel->getActiveSheet()->getStyle('G')->getAlignment()->setHorizontal(PHPExcel_Style_Alignment::HORIZONTAL_CENTER);
		
			//合并cell
		
			$objPHPExcel->getActiveSheet()->mergeCells('A1:G1');
		
			// set table header content
		
			$objPHPExcel->setActiveSheetIndex(0)
		
			->setCellValue('A1', '报名表:'.date('Y-m-d H:i:s'))
		
			->setCellValue('A2', '用户学号')
		
			->setCellValue('B2', '姓名')
		
			->setCellValue('C2', '性别')
		
			->setCellValue('D2', '类型')
		
			->setCellValue('E2', '所在学院')
		
			->setCellValue('F2', '所在班级')
		
			->setCellValue('G2', '手机号码');
		
			// Miscellaneous glyphs, UTF-8
		
			for($i=0;$i<count($list)-1;$i++){
		
				$objPHPExcel->getActiveSheet(0)->setCellValue('A'.($i+3), $list[$i]['uid']);
		
				$objPHPExcel->getActiveSheet(0)->setCellValue('B'.($i+3), $list[$i]['username']);
		
				$objPHPExcel->getActiveSheet(0)->setCellValue('C'.($i+3), $list[$i]['sex']);
		
				$objPHPExcel->getActiveSheet(0)->setCellValue('D'.($i+3), $list[$i]['type']);
		
				$objPHPExcel->getActiveSheet(0)->setCellValue('E'.($i+3), $list[$i]['college']);
		
				$objPHPExcel->getActiveSheet(0)->setCellValue('F'.($i+3), $list[$i]['class']);
		
				$objPHPExcel->getActiveSheet(0)->setCellValue('G'.($i+3), $list[$i]['phone']);
		
				$objPHPExcel->getActiveSheet()->getStyle('A'.($i+3).':G'.($i+3))->getAlignment()->setVertical(PHPExcel_Style_Alignment::VERTICAL_CENTER);
		
				$objPHPExcel->getActiveSheet()->getStyle('A'.($i+3).':G'.($i+3))->getBorders()->getAllBorders()->setBorderStyle(PHPExcel_Style_Border::BORDER_THIN);
		
				$objPHPExcel->getActiveSheet()->getRowDimension($i+3)->setRowHeight(16);
		
			}
		
			//  sheet命名
		
			$objPHPExcel->getActiveSheet()->setTitle('报名表');						//合并标题
		
			// Set active sheet index to the first sheet, so Excel opens this as the first sheet
		
			$objPHPExcel->setActiveSheetIndex(0);
		
			$objWriter = new PHPExcel_Writer_Excel2007($objPHPExcel);
		
			// Set active sheet index to the first sheet, so Excel opens this as the first sheet
		
			$objPHPExcel->setActiveSheetIndex(0);
		
			$objWriter = PHPExcel_IOFactory::createWriter($objPHPExcel, 'Excel2007');
		
			// Redirect output to a client’s web browser (Excel2007)
		
			/* 生成到浏览器，提供下载 */
		
			ob_end_clean();  //清空缓存
		
			header("Pragma: public");
		
			header("Expires: 0");
		
			header("Cache-Control:must-revalidate,post-check=0,pre-check=0");
		
			header("Content-Type:application/force-download"); 
		
			header("Content-Type:application/vnd.ms-execl");
		
			header("Content-Type:application/octet-stream");
		
			header("Content-Type:application/download");
		
			header('Content-Disposition:attachment;filename="报名表.xlsx"');            //输出文件名
		
			header("Content-Transfer-Encoding:binary");
		
			$objWriter->save('php://output');
		
			exit;
		
		}
		
		
	}
?>  