<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
require('UMS_Controller.php');
class Pdf_u03 extends UMS_Controller {
	function __construct()
	{
		parent::__construct();
		$this->load->library('pdf'); // 
		$this->pdf->fontpath = 'font/'; // Create folder fonts at Codeigniter
	}
	public function index()
	{
		//echo anchor(base_url('index.php/PDM/pdf_u03/test'), 'Download');
		$this->output('PDM/Pdf/v_pdf_u03');
	}
	public function preview()
	{
		$this->pdf = new FPDF();
		$this->pdf->SetMargins( 25.4,25.4,25.4 );
		$this->pdf->AddPage();
		
		
		$this->pdf->AddFont('THSarabun','','THSarabun.php');
		$this->pdf->SetFont('THSarabun','',14);
		$this->pdf->Image('images/PDM/logo.png',27,3,21,0,'');
		//พิมพ์ตัวหนังสือตัวเอียงๆ ที่ตำแหน่งเยื้องขอบกระดาษซ้าย 100หน่วย ขอบกระดาษบน 15หน่วย
		$this->pdf->Text(100,15,iconv('UTF-8','TIS-620','ขอให้พิมพ์หรือเขียนด้วยตัวบรรจงและภาษาอังกฤษให้ใช้ตัวพิมพ์ใหญ่ ' ));
		
		$this->pdf->AddFont('THSarabun','b','THSarabun Bold.php');
		$this->pdf->SetFont('THSarabun','b',14);
		$this->pdf->Text(100,15,iconv('UTF-8','TIS-620','                                                                                    วก. 03'));
		
		$this->pdf->Text(25.4,25,iconv('UTF-8','TIS-620','___________________________________________________________________________________________' ));
		
		
		
		$this->pdf->AddFont('THSarabun','b','THSarabun Bold.php');//หนา
		$this->pdf->SetFont('THSarabun','b',16);
		$this->pdf->Cell(30,10,iconv('UTF-8','TIS-620','            แบบเสนอขออนุมัติสอบและแต่งตั้งกรรมการสอบงานนิพนธ์/วิทยานิพนธ์/ดุษฎีนิพนธ์'));
		$this->pdf->Ln(13);
		
		$this->pdf->AddFont('THSarabun','','THSarabun.php');
		$this->pdf->SetFont('THSarabun','',15);
		$this->pdf->Cell(0,10,iconv('UTF-8','TIS-620','ชื่อนิสิต(นาย/นาง/นางสาว)................................................................รหัสประจำตัว.............................................................'));
		$this->pdf->Ln(7);
		
		$this->pdf->AddFont('THSarabun','','THSarabun.php');
		$this->pdf->SetFont('THSarabun','',15);
		$this->pdf->Cell(0,10,iconv('UTF-8','TIS-620','โทร..................................................................Email.............................................................................................................'));
		$this->pdf->Ln(13);
		
		$this->pdf->AddFont('THSarabun','','THSarabun.php');
		$this->pdf->SetFont('THSarabun','',15);
		$this->pdf->Cell(37,17,iconv('UTF-8','TIS-620',''), 1 );		
		$this->pdf->Cell(60,17,iconv('UTF-8','TIS-620',''), 1 );
		$this->pdf->Cell(39,17,iconv('UTF-8','TIS-620',''), 1 );
		$this->pdf->Cell(37,17,iconv('UTF-8','TIS-620',''), 1 );
		$this->pdf->Ln(-2);
		
		$this->pdf->AddFont('THSarabun','b','THSarabun Bold.php');
		$this->pdf->SetFont('THSarabun','b',15);
		$this->pdf->Cell(0,10,iconv('UTF-8','TIS-620','หลักสูตร                     สาขาวิชา                                       ประเภทนิสิต                 แผนการเรียน'));
		$this->pdf->Ln(5);
		
		$this->pdf->AddFont('THSarabun','','THSarabun.php');
		$this->pdf->SetFont('THSarabun','',15);
		$this->pdf->Cell(0,10,iconv('UTF-8','TIS-620','            วท.ม.                          เทคโนโลยีสารสนเทศ                           ภาคปกติ                      แผน ก'));
		$this->pdf->Image('images/PDM/checkbox1.png',35,63.5,5,0,'');
		$this->pdf->Image('images/PDM/checkbox1.png',72,63.5,5,0,'');
		$this->pdf->Image('images/PDM/checkbox1.png',132,63.5,5,0,'');
		$this->pdf->Image('images/PDM/checkbox1.png',170,63.5,5,0,'');
		$this->pdf->Ln(6);
		
		$this->pdf->AddFont('THSarabun','','THSarabun.php');
		$this->pdf->SetFont('THSarabun','',15);
		$this->pdf->Cell(0,10,iconv('UTF-8','TIS-620','            ปร.ด.                          วิทยาการคอมพิวเตอร์                          ภาคพิเศษ                     แผน ข'));
		$this->pdf->Image('images/PDM/checkbox1.png',35,69.5,5,0,'');
		$this->pdf->Image('images/PDM/checkbox1.png',72,69.5,5,0,'');
		$this->pdf->Image('images/PDM/checkbox1.png',132,69.5,5,0,'');
		$this->pdf->Image('images/PDM/checkbox1.png',170,69.5,5,0,'');
		$this->pdf->Ln(12);
		
		$this->pdf->AddFont('THSarabun','b','THSarabun Bold.php');
		$this->pdf->SetFont('THSarabun','b',15);
		$this->pdf->Cell(0,10,iconv('UTF-8','TIS-620','ขอเสนอเค้าโครงวิทยานิพนธ์/ดุษฎีนิพนธ์เพื่อพิจารณา ดังนี้'));
		$this->pdf->Ln(7);
		
		$this->pdf->AddFont('THSarabun','','THSarabun.php');
		$this->pdf->SetFont('THSarabun','',15);
		$this->pdf->Cell(0,10,iconv('UTF-8','TIS-620','ชื่อเรื่องภาษาไทย....................................................................................................................................................................'));
		$this->pdf->Ln(7);
		
		$this->pdf->AddFont('THSarabun','','THSarabun.php');
		$this->pdf->SetFont('THSarabun','',15);
		$this->pdf->Cell(0,10,iconv('UTF-8','TIS-620','................................................................................................................................................................................................'));
		$this->pdf->Ln(7);
		
		$this->pdf->AddFont('THSarabun','','THSarabun.php');
		$this->pdf->SetFont('THSarabun','',15);
		$this->pdf->Cell(0,10,iconv('UTF-8','TIS-620','ชื่อเรื่องภาษาอังกฤษ...............................................................................................................................................................'));
		$this->pdf->Ln(7);
		
		$this->pdf->AddFont('THSarabun','','THSarabun.php');
		$this->pdf->SetFont('THSarabun','',15);
		$this->pdf->Cell(0,10,iconv('UTF-8','TIS-620','................................................................................................................................................................................................'));
		$this->pdf->Ln(10);
		
		$this->pdf->AddFont('THSarabun','b','THSarabun Bold.php');
		$this->pdf->SetFont('THSarabun','b',15);
		$this->pdf->Cell(0,10,iconv('UTF-8','TIS-620','ข้าพเจ้าได้ศึกษารายวิชาครบตามหลักสูตรที่กำหนดแล้ว '));
		$this->pdf->Ln(0);
		
		$this->pdf->AddFont('THSarabun','','THSarabun.php');
		$this->pdf->SetFont('THSarabun','',15);
		$this->pdf->Cell(0,10,iconv('UTF-8','TIS-620','                                                                      โดยได้ค่าเฉลี่ยสะสม(GPA)...........................'));
		$this->pdf->Ln(7);
		
		$this->pdf->AddFont('THSarabun','b','THSarabun Bold.php');
		$this->pdf->SetFont('THSarabun','b',15);
		$this->pdf->settextcolor(255,0,0);
		$this->pdf->Cell(0,10,iconv('UTF-8','TIS-620','(เฉพาะนิสิตแผนการเรียน ก)'));
		$this->pdf->Ln(7);
		
		$this->pdf->AddFont('THSarabun','b','THSarabun Bold.php');
		$this->pdf->SetFont('THSarabun','b',15);
		$this->pdf->settextcolor(0,0,0);
		$this->pdf->Cell(0,10,iconv('UTF-8','TIS-620','และได้รับอนุมัติเค้าโครงฯ '));
		$this->pdf->Ln(0);
		
		$this->pdf->AddFont('THSarabun','','THSarabun.php');
		$this->pdf->SetFont('THSarabun','',15);
		$this->pdf->Cell(0,10,iconv('UTF-8','TIS-620','                                 เมื่อวันที่...................................................'));
		$this->pdf->Ln(6);
		
		$this->pdf->AddFont('THSarabun','b','THSarabun Bold.php');
		$this->pdf->SetFont('THSarabun','b',15);
		$this->pdf->Cell(0,10,iconv('UTF-8','TIS-620','คณะกรรมการควบคุมฝคณะกรรมการพิจารณาเค้าโครงวิทยานิพนธ์/ดุษฎีนิพนธ์'));
		$this->pdf->Ln(8);
		
		$this->pdf->AddFont('THSarabun','','THSarabun.php');
		$this->pdf->SetFont('THSarabun','',15);
		$this->pdf->Cell(43,12,iconv('UTF-8','TIS-620',''), 1 );		
		$this->pdf->Cell(43,12,iconv('UTF-8','TIS-620',''), 1 );
		$this->pdf->Cell(43,12,iconv('UTF-8','TIS-620',''), 1 );
		$this->pdf->Cell(43,12,iconv('UTF-8','TIS-620',''), 1 );
		$this->pdf->Ln(-6);
		
		$this->pdf->AddFont('THSarabun','b','THSarabun Bold.php');
		$this->pdf->SetFont('THSarabun','b',15);
		$this->pdf->Cell(37,20,iconv('UTF-8','TIS-620','    คณะกรรมการควบคุม         ชื่อ-สกุล พร้อมตำแหน่ง          สังกัดคณะ/สถาบัน         คณะกรรมการพิจารณาเค้า'));
		$this->pdf->Ln(5);
		
		$this->pdf->AddFont('THSarabun','b','THSarabun Bold.php');
		$this->pdf->SetFont('THSarabun','b',15);
		$this->pdf->Cell(37,20,iconv('UTF-8','TIS-620','          วิทยานิพนธ์                      ทางวิชาการ                                                      โครงวิทยานิพนธ์'));
		$this->pdf->Ln(13);
		
		$this->pdf->AddFont('THSarabun','','THSarabun.php');
		$this->pdf->SetFont('THSarabun','',15);
		$this->pdf->Cell(43,6,iconv('UTF-8','TIS-620',''), 1 );		
		$this->pdf->Cell(43,6,iconv('UTF-8','TIS-620',''), 1 );
		$this->pdf->Cell(43,6,iconv('UTF-8','TIS-620',''), 1 );
		$this->pdf->Cell(43,6,iconv('UTF-8','TIS-620',''), 1 );
		$this->pdf->Ln(-7);
		
		$this->pdf->AddFont('THSarabun','','THSarabun.php');
		$this->pdf->SetFont('THSarabun','',15);
		$this->pdf->Cell(37,20,iconv('UTF-8','TIS-620','อาจารย์ที่ปรึกษาหลัก                                                                                       ประธานกรรมการ'));
		$this->pdf->Ln(13);
		
		$this->pdf->AddFont('THSarabun','','THSarabun.php');
		$this->pdf->SetFont('THSarabun','',15);
		$this->pdf->Cell(43,6,iconv('UTF-8','TIS-620',''), 1 );		
		$this->pdf->Cell(43,6,iconv('UTF-8','TIS-620',''), 1 );
		$this->pdf->Cell(43,6,iconv('UTF-8','TIS-620',''), 1 );
		$this->pdf->Cell(43,6,iconv('UTF-8','TIS-620',''), 1 );
		$this->pdf->Ln(-7);
		
		$this->pdf->AddFont('THSarabun','','THSarabun.php');
		$this->pdf->SetFont('THSarabun','',15);
		$this->pdf->Cell(37,20,iconv('UTF-8','TIS-620','อาจารย์ที่ปรึกษาร่วม(ถ้ามี)                                                                                 กรรมการ'));
		$this->pdf->Ln(13);
		
		$this->pdf->AddFont('THSarabun','','THSarabun.php');
		$this->pdf->SetFont('THSarabun','',15);
		$this->pdf->Cell(43,6,iconv('UTF-8','TIS-620',''), 1 );		
		$this->pdf->Cell(43,6,iconv('UTF-8','TIS-620',''), 1 );
		$this->pdf->Cell(43,6,iconv('UTF-8','TIS-620',''), 1 );
		$this->pdf->Cell(43,6,iconv('UTF-8','TIS-620',''), 1 );
		$this->pdf->Ln(-7);
		
		$this->pdf->AddFont('THSarabun','','THSarabun.php');
		$this->pdf->SetFont('THSarabun','',15);
		$this->pdf->Cell(37,20,iconv('UTF-8','TIS-620','อาจารย์ที่ปรึกษาร่วม(ถ้ามี)                                                                                 กรรมการ'));
		$this->pdf->Ln(13);
		
		$this->pdf->AddFont('THSarabun','','THSarabun.php');
		$this->pdf->SetFont('THSarabun','',15);
		$this->pdf->Cell(43,6,iconv('UTF-8','TIS-620',''), 1 );		
		$this->pdf->Cell(43,6,iconv('UTF-8','TIS-620',''), 1 );
		$this->pdf->Cell(43,6,iconv('UTF-8','TIS-620',''), 1 );
		$this->pdf->Cell(43,6,iconv('UTF-8','TIS-620',''), 1 );
		$this->pdf->Ln(-7);
		
		$this->pdf->AddFont('THSarabun','','THSarabun.php');
		$this->pdf->SetFont('THSarabun','',15);
		$this->pdf->Cell(37,20,iconv('UTF-8','TIS-620','อาจารย์ประจำ                                                                                               กรรมการ'));
		$this->pdf->Ln(13);
		
		$this->pdf->AddFont('THSarabun','','THSarabun.php');
		$this->pdf->SetFont('THSarabun','',15);
		$this->pdf->Cell(43,6,iconv('UTF-8','TIS-620',''), 1 );		
		$this->pdf->Cell(43,6,iconv('UTF-8','TIS-620',''), 1 );
		$this->pdf->Cell(43,6,iconv('UTF-8','TIS-620',''), 1 );
		$this->pdf->Cell(43,6,iconv('UTF-8','TIS-620',''), 1 );
		$this->pdf->Ln(-7);
		
		$this->pdf->AddFont('THSarabun','','THSarabun.php');
		$this->pdf->SetFont('THSarabun','',15);
		$this->pdf->Cell(37,20,iconv('UTF-8','TIS-620','ผู้ทรงคุณวุฒิภายนอก                                                                                       กรรมการ'));
		$this->pdf->Ln(15);
		
		$this->pdf->AddFont('THSarabun','b','THSarabun Bold.php');
		$this->pdf->SetFont('THSarabun','b',15);
		$this->pdf->settextcolor(255,0,0);
		$this->pdf->Cell(0,10,iconv('UTF-8','TIS-620','(เฉพาะนิสิตแผนการเรียน ข)'));
		$this->pdf->Ln(7);
		
		$this->pdf->AddFont('THSarabun','b','THSarabun Bold.php');
		$this->pdf->SetFont('THSarabun','b',15);
		$this->pdf->settextcolor(0,0,0);
		$this->pdf->Cell(0,10,iconv('UTF-8','TIS-620','และผ่านการสอบประมวลความรู้ (Comprehensive Examination)'));
		$this->pdf->Ln(7);
		
		$this->pdf->AddFont('THSarabun','','THSarabun.php');
		$this->pdf->SetFont('THSarabun','',15);
		$this->pdf->Cell(0,10,iconv('UTF-8','TIS-620','เมื่อวันที่.....................................................'));
		$this->pdf->Ln(8);
		
		$this->pdf->AddFont('THSarabun','b','THSarabun Bold.php');
		$this->pdf->SetFont('THSarabun','b',15);
		$this->pdf->Cell(0,10,iconv('UTF-8','TIS-620','ขออนุมัติสอบปากเปล่า      งานนิพนธ์      วิทยานิพนธ์      ดุษฎีนิพนธ์ พร้อมเอกสารแนบ ดังนี้'));
		$this->pdf->Image('images/PDM/checkbox2.png',60.5,213.5,5,0,'');
		$this->pdf->Image('images/PDM/checkbox2.png',82.5,213.5,5,0,'');
		$this->pdf->Image('images/PDM/checkbox2.png',106.5,213.5,5,0,'');
		$this->pdf->Ln(6);
		
		$this->pdf->AddFont('THSarabun','','THSarabun.php');
		$this->pdf->SetFont('THSarabun','',15);
		$this->pdf->Cell(0,10,iconv('UTF-8','TIS-620','                  1.  รายงานฉบับ ........ ฉบับ'));
		$this->pdf->Image('images/PDM/checkbox1.png',40,219.5,5,0,'');
		$this->pdf->Ln(6);
				
		$this->pdf->AddFont('THSarabun','','THSarabun.php');
		$this->pdf->SetFont('THSarabun','',15);
		$this->pdf->Cell(0,10,iconv('UTF-8','TIS-620','                  2.  เอกสารแสดงการเผยแพร่ผลงานวิทยานิพนธ์/ดุษฎีนิพนธ์ (เฉาพหลักสูตรที่กำหนด)'));
		$this->pdf->Image('images/PDM/checkbox1.png',40,225.5,5,0,'');
		$this->pdf->Ln(6);
		
		$this->pdf->AddFont('THSarabun','','THSarabun.php');
		$this->pdf->SetFont('THSarabun','',15);
		$this->pdf->Cell(0,10,iconv('UTF-8','TIS-620','                  3.  แบบรายงานผลการพิจารณาจริยธรรมการวิจัย'));
		$this->pdf->Image('images/PDM/checkbox1.png',40,231.5,5,0,'');
		$this->pdf->Ln(6);
		
		$this->pdf->AddFont('THSarabun','','THSarabun.php');
		$this->pdf->SetFont('THSarabun','',15);
		$this->pdf->Cell(0,10,iconv('UTF-8','TIS-620','                  4.  อื่นๆ(ระบุ)...............................................................................................'));
		$this->pdf->Image('images/PDM/checkbox1.png',40,237.5,5,0,'');
		$this->pdf->Ln(10);
		
		$this->pdf->AddFont('THSarabun','','THSarabun.php');
		$this->pdf->SetFont('THSarabun','',15);
		$this->pdf->Cell(0,10,iconv('UTF-8','TIS-620','                                                                        ลายมือชื่อนิสิต................................................'));
		$this->pdf->Ln(6);
		
		$this->pdf->AddFont('THSarabun','','THSarabun.php');
		$this->pdf->SetFont('THSarabun','',15);
		$this->pdf->Cell(0,10,iconv('UTF-8','TIS-620','                                                                                          (............................................)'));
		$this->pdf->Ln(6);
		
		$this->pdf->AddFont('THSarabun','','THSarabun.php');
		$this->pdf->SetFont('THSarabun','',15);
		$this->pdf->Cell(0,10,iconv('UTF-8','TIS-620','                                                                                           วันที่............/.............../............'));
		$this->pdf->Ln(10);
		
 
		//กำหนดใช้ตัวอักษร THSarabun ขนาด 14 หน่วย
		$this->pdf->AddFont('THSarabun','','THSarabun.php');
		$this->pdf->SetFont('THSarabun','',14);
 
		//พิมพ์เลขหน้า ตรงมุมขวาล่าง
		$this->pdf->Text(25.4,280,iconv('UTF-8','TIS-620','_________________________________________________________________________________________________' ));
		$this->pdf->Text(25.4,286,iconv('UTF-8','TIS-620',' สำนักงานจัดการศึกษา คณะวิทยาการสารสนเทศ                                                                                          หน้า 1'));
		
		$this->pdf->SetMargins( 25.4,25.4,25.4 );
		$this->pdf->AddPage();
		
		$this->pdf->AddFont('THSarabun','','THSarabun.php');
		$this->pdf->SetFont('THSarabun','',14);
		$this->pdf->Image('images/PDM/logo.png',27,3,21,0,'');
		//พิมพ์ตัวหนังสือตัวเอียงๆ ที่ตำแหน่งเยื้องขอบกระดาษซ้าย 100หน่วย ขอบกระดาษบน 15หน่วย
		$this->pdf->Text(100,15,iconv('UTF-8','TIS-620','ขอให้พิมพ์หรือเขียนด้วยตัวบรรจงและภาษาอังกฤษให้ใช้ตัวพิมพ์ใหญ่ ' ));
		
		$this->pdf->AddFont('THSarabun','b','THSarabun Bold.php');
		$this->pdf->SetFont('THSarabun','b',14);
		$this->pdf->Text(100,15,iconv('UTF-8','TIS-620','                                                                                    วก. 03'));
		
		$this->pdf->Text(25.4,25,iconv('UTF-8','TIS-620','___________________________________________________________________________________________' ));
		
		$this->pdf->AddFont('THSarabun','b','THSarabun Bold.php');//หนา
		$this->pdf->SetFont('THSarabun','b',16);
		$this->pdf->Cell(30,10,iconv('UTF-8','TIS-620','                                             (สำหรับอาจารย์ที่ปรึษาหลัก)'));
		$this->pdf->Ln(13);
		
		$this->pdf->AddFont('THSarabun','b','THSarabun Bold.php');//หนา
		$this->pdf->SetFont('THSarabun','b',16);
		$this->pdf->Cell(30,10,iconv('UTF-8','TIS-620','ความเห็นของอาจารย์ที่ปรึษาหลัก...................................................................................................................'));
		$this->pdf->Ln(10);
		
		$this->pdf->AddFont('THSarabun','b','THSarabun Bold.php');//หนา
		$this->pdf->SetFont('THSarabun','b',16);
		$this->pdf->Cell(30,10,iconv('UTF-8','TIS-620','          เห็นควรกำหนดสอบงานนิพนธ์/วิทยานิพนธ์/ดุษฎีนิพนธ์ได้ในวันที่.............../..................../...............'));
		$this->pdf->Ln(10);
		
		$this->pdf->AddFont('THSarabun','','THSarabun.php');
		$this->pdf->SetFont('THSarabun','',16);
		$this->pdf->Cell(30,10,iconv('UTF-8','TIS-620','                                                                   ลงนาม......................................................'));
		$this->pdf->Ln(7);
		
		$this->pdf->AddFont('THSarabun','','THSarabun.php');
		$this->pdf->SetFont('THSarabun','',15);
		$this->pdf->Cell(0,10,iconv('UTF-8','TIS-620','                                                                               (.........................................................)'));
		$this->pdf->Ln(7);
		
		$this->pdf->AddFont('THSarabun','','THSarabun.php');
		$this->pdf->SetFont('THSarabun','',15);
		$this->pdf->Cell(0,10,iconv('UTF-8','TIS-620','                                                                                         อาจารย์ที่ปรึกษาหลัก'));
		$this->pdf->Ln(7);
		
		$this->pdf->AddFont('THSarabun','','THSarabun.php');
		$this->pdf->SetFont('THSarabun','',15);
		$this->pdf->Cell(0,10,iconv('UTF-8','TIS-620','                                                                                      วันที่............/.............../............'));
		$this->pdf->Ln(10);
		
		$this->pdf->AddFont('THSarabun','b','THSarabun Bold.php');
		$this->pdf->SetFont('THSarabun','b',15);
		$this->pdf->Cell(0,10,iconv('UTF-8','TIS-620','                                                             (สำหรับประธานสาขาวิชา)'));
		$this->pdf->Ln(7);
		
		$this->pdf->AddFont('THSarabun','b','THSarabun Bold.php');
		$this->pdf->SetFont('THSarabun','b',15);
		$this->pdf->Cell(0,10,iconv('UTF-8','TIS-620','โดยเสนอ................................................................... ผู้ทรงคุณวุฒิ(นอกสถาบัน) เป็นประธานกรรมการสอบ'));
		$this->pdf->Ln(7);
		
		$this->pdf->AddFont('THSarabun','','THSarabun.php');
		$this->pdf->SetFont('THSarabun','',15);
		$this->pdf->Cell(0,10,iconv('UTF-8','TIS-620','วุฒิสูงสุดทางการศึกษา.............................................ตำแหน่งทางวิชาการ(ถ้ามี)......................................................'));
		$this->pdf->Ln(7);
		
		$this->pdf->AddFont('THSarabun','','THSarabun.php');
		$this->pdf->SetFont('THSarabun','',15);
		$this->pdf->Cell(0,10,iconv('UTF-8','TIS-620','ตำแหน่งปัจจุบัน.......................................................................สังกัด.......................................................................'));
		$this->pdf->Ln(7);
		
		$this->pdf->AddFont('THSarabun','','THSarabun.php');
		$this->pdf->SetFont('THSarabun','',15);
		$this->pdf->Cell(0,10,iconv('UTF-8','TIS-620','ที่อยู่..........................................................................................................................................................................'));
		$this->pdf->Ln(7);
		
		$this->pdf->AddFont('THSarabun','','THSarabun.php');
		$this->pdf->SetFont('THSarabun','',15);
		$this->pdf->Cell(0,10,iconv('UTF-8','TIS-620','...............................................................................................เบอร์โทรศัพท์............................................................'));
		$this->pdf->Ln(10);
		
		$this->pdf->AddFont('THSarabun','','THSarabun.php');//หนา
		$this->pdf->SetFont('THSarabun','',16);
		$this->pdf->Cell(30,10,iconv('UTF-8','TIS-620','                                                                     ลงนาม......................................................'));
		$this->pdf->Ln(7);
		
		$this->pdf->AddFont('THSarabun','','THSarabun.php');
		$this->pdf->SetFont('THSarabun','',15);
		$this->pdf->Cell(0,10,iconv('UTF-8','TIS-620','                                                                                 (.........................................................)'));
		$this->pdf->Ln(7);
		
		$this->pdf->AddFont('THSarabun','','THSarabun.php');
		$this->pdf->SetFont('THSarabun','',15);
		$this->pdf->Cell(0,10,iconv('UTF-8','TIS-620','                                                                                             ประธานสาขาวิชา'));
		$this->pdf->Ln(7);
		
		$this->pdf->AddFont('THSarabun','','THSarabun.php');
		$this->pdf->SetFont('THSarabun','',15);
		$this->pdf->Cell(0,10,iconv('UTF-8','TIS-620','                                                                                        วันที่............/.............../............'));
		$this->pdf->Ln(10);
		
		$this->pdf->AddFont('THSarabun','b','THSarabun Bold.php');
		$this->pdf->SetFont('THSarabun','b',15);
		$this->pdf->Cell(0,10,iconv('UTF-8','TIS-620','ความเห็นคณบดีคณะวิทยาการสารสนเทศ'));
		$this->pdf->Ln(7);
		
		$this->pdf->AddFont('THSarabun','','THSarabun.php');
		$this->pdf->SetFont('THSarabun','',15);
		$this->pdf->Cell(0,10,iconv('UTF-8','TIS-620','           อนุมติให้สอบงานนิพนธ์/วิทยานิพนธ์/ดุษฎีนิพนธ์ ในวันที่.........เดือน....................พ.ศ..................'));
		$this->pdf->Ln(7);
		
		$this->pdf->AddFont('THSarabun','','THSarabun.php');
		$this->pdf->SetFont('THSarabun','',15);
		$this->pdf->Cell(0,10,iconv('UTF-8','TIS-620','เวลา...............................สถานที่.....................................................................................................................'));
		$this->pdf->Ln(7);
		
		$this->pdf->AddFont('THSarabun','b','THSarabun Bold.php');
		$this->pdf->SetFont('THSarabun','b',15);
		$this->pdf->Cell(0,10,iconv('UTF-8','TIS-620','โดยคณะกรรมการสอบงานนิพนธ์/วิทยานิพนธ์/ดุษฎีนิพนธ์ ดังรายชื่อต่อไปนี้'));
		$this->pdf->Ln(7);
		
		$this->pdf->AddFont('THSarabun','','THSarabun.php');
		$this->pdf->SetFont('THSarabun','',15);
		$this->pdf->Cell(0,10,iconv('UTF-8','TIS-620','           1) ผู้ทรงคุณวุฒินอกสถาบัน .......................................................................................ประธานกรรมการ'));
		$this->pdf->Ln(6);
		
		$this->pdf->AddFont('THSarabun','','THSarabun.php');
		$this->pdf->SetFont('THSarabun','',15);
		$this->pdf->Cell(0,10,iconv('UTF-8','TIS-620','           2) อาจารย์ที่ปรึกษาหลัก ............................................................................................กรรมการ'));
		$this->pdf->Ln(6);
		
		$this->pdf->AddFont('THSarabun','','THSarabun.php');
		$this->pdf->SetFont('THSarabun','',15);
		$this->pdf->Cell(0,10,iconv('UTF-8','TIS-620','           3) อาจารย์ที่ปรึกษาร่วม (ถ้ามี) ...................................................................................กรรมการ'));
		$this->pdf->Ln(6);
		
		$this->pdf->AddFont('THSarabun','','THSarabun.php');
		$this->pdf->SetFont('THSarabun','',15);
		$this->pdf->Cell(0,10,iconv('UTF-8','TIS-620','           4) อาจารย์ที่ปรึกษาร่วม (ถ้ามี) ...................................................................................กรรมการ'));
		$this->pdf->Ln(6);
		
		$this->pdf->AddFont('THSarabun','','THSarabun.php');
		$this->pdf->SetFont('THSarabun','',15);
		$this->pdf->Cell(0,10,iconv('UTF-8','TIS-620','           5) อาจารย์ประจำในมหาวิทยาลัย ...............................................................................กรรมการ'));
		$this->pdf->Ln(6);
		
		$this->pdf->AddFont('THSarabun','','THSarabun.php');
		$this->pdf->SetFont('THSarabun','',15);
		$this->pdf->Cell(0,10,iconv('UTF-8','TIS-620','           6) อาจารย์ประจำในมหาวิทยาลัย ...............................................................................กรรมการ'));
		$this->pdf->Ln(10);
		
		$this->pdf->AddFont('THSarabun','','THSarabun.php');
		$this->pdf->SetFont('THSarabun','',16);
		$this->pdf->Cell(30,10,iconv('UTF-8','TIS-620','                                                                ลงนาม.....................................................'));
		$this->pdf->Ln(7);
		
		$this->pdf->AddFont('THSarabun','','THSarabun.php');
		$this->pdf->SetFont('THSarabun','',15);
		$this->pdf->Cell(0,10,iconv('UTF-8','TIS-620','                                                                             (....................................................)'));
		$this->pdf->Ln(7);
		
		$this->pdf->AddFont('THSarabun','','THSarabun.php');
		$this->pdf->SetFont('THSarabun','',15);
		$this->pdf->Cell(0,10,iconv('UTF-8','TIS-620','                                                                              คณบดีคณะวิทยาการสารสนเทศ'));
		$this->pdf->Ln(7);
		
		$this->pdf->AddFont('THSarabun','','THSarabun.php');
		$this->pdf->SetFont('THSarabun','',15);
		$this->pdf->Cell(0,10,iconv('UTF-8','TIS-620','                                                                                วันที่............/.............../............'));
		$this->pdf->Ln(10);
		
		//กำหนดใช้ตัวอักษร THSarabun ขนาด 14 หน่วย
		$this->pdf->AddFont('THSarabun','','THSarabun.php');
		$this->pdf->SetFont('THSarabun','',14);
 
		//พิมพ์เลขหน้า ตรงมุมขวาล่าง
		$this->pdf->Text(25.4,280,iconv('UTF-8','TIS-620','_________________________________________________________________________________________________' ));
		$this->pdf->Text(25.4,286,iconv('UTF-8','TIS-620',' สำนักงานจัดการศึกษา คณะวิทยาการสารสนเทศ                                                                                          หน้า 2'));
		
		$this->pdf->SetMargins( 25.4,25.4,25.4 );
		$this->pdf->AddPage();
		
		$this->pdf->AddFont('THSarabun','','THSarabun.php');
		$this->pdf->SetFont('THSarabun','',14);
		$this->pdf->Image('images/PDM/logo.png',27,3,21,0,'');
		//พิมพ์ตัวหนังสือตัวเอียงๆ ที่ตำแหน่งเยื้องขอบกระดาษซ้าย 100หน่วย ขอบกระดาษบน 15หน่วย
		$this->pdf->Text(100,15,iconv('UTF-8','TIS-620','ขอให้พิมพ์หรือเขียนด้วยตัวบรรจงและภาษาอังกฤษให้ใช้ตัวพิมพ์ใหญ่' ));
		
		$this->pdf->AddFont('THSarabun','b','THSarabun Bold.php');
		$this->pdf->SetFont('THSarabun','b',14);
		$this->pdf->Text(100,15,iconv('UTF-8','TIS-620','                                                                                    วก. 03'));
		
		$this->pdf->Text(25.4,25,iconv('UTF-8','TIS-620','___________________________________________________________________________________________' ));
		
		$this->pdf->AddFont('THSarabun','b','THSarabun Bold.php');
		$this->pdf->SetFont('THSarabun','b',16);
		$this->pdf->settextcolor(255,0,0);
		$this->pdf->Cell(0,10,iconv('UTF-8','TIS-620','หมายเหตุ'));
		$this->pdf->Ln(6);
		
		$this->pdf->AddFont('THSarabun','','THSarabun.php');
		$this->pdf->SetFont('THSarabun','',16);
		$this->pdf->Cell(0,10,iconv('UTF-8','TIS-620','1.   นิสิตกรอกข้อมูล วก.03 เสนอประธานควบคุมงานนิพนธ์/วิทยานิพนธ์/ดุษฎีนิพนธ์ เพื่อเสนอแต่งตั้งประธานสอบ'));
		$this->pdf->Ln(6);
		
		$this->pdf->AddFont('THSarabun','','THSarabun.php');
		$this->pdf->SetFont('THSarabun','',16);
		$this->pdf->Cell(0,10,iconv('UTF-8','TIS-620','      งานนิพนธ์/วิทยานิพนธ์/ดุษฎีนิพนธ์'));
		$this->pdf->Ln(6);
		
		$this->pdf->AddFont('THSarabun','','THSarabun.php');
		$this->pdf->SetFont('THSarabun','',16);
		$this->pdf->Cell(0,10,iconv('UTF-8','TIS-620','2.   นิสิตนำเสนอประธานสาขาวิชาเพื่อแต่งตั้งผู้ทรงคุณวุฒิภายนอก'));
		$this->pdf->Ln(6);
		
		$this->pdf->AddFont('THSarabun','','THSarabun.php');
		$this->pdf->SetFont('THSarabun','',16);
		$this->pdf->Cell(0,10,iconv('UTF-8','TIS-620','3.   นิสิตนำ วก.03 ที่ลงนามเรียบร้อยแล้ว ส่งให้สำนักงานจัดการศึกษา คณะวิทยาการสารสนเทศ เพื่อประสานงาน'));
		$this->pdf->Ln(6);
		
		$this->pdf->AddFont('THSarabun','','THSarabun.php');
		$this->pdf->SetFont('THSarabun','',16);
		$this->pdf->Cell(0,10,iconv('UTF-8','TIS-620','      กรรมการ กำหนดวัน  เวลา และสถานที่สอบ                                                                           เพื่อ'));
		$this->pdf->Ln(0);
		
		$this->pdf->AddFont('THSarabun','b','THSarabun Bold.php');
		$this->pdf->SetFont('THSarabun','b',16);
		$this->pdf->Cell(0,10,iconv('UTF-8','TIS-620','                                                         โดยกำหนดสอบไม่น้อยกว่า  21  วันนับจากวันที่ยื่นเอกสาร '));
		$this->pdf->Ln(6);
		
		$this->pdf->AddFont('THSarabun','','THSarabun.php');
		$this->pdf->SetFont('THSarabun','',16);
		$this->pdf->Cell(0,10,iconv('UTF-8','TIS-620','      พิจารณาอนุมัติสอบปากเปล่าต่อไป'));
		$this->pdf->Ln(6);
		
		$this->pdf->AddFont('THSarabun','','THSarabun.php');
		$this->pdf->SetFont('THSarabun','',16);
		$this->pdf->Cell(0,10,iconv('UTF-8','TIS-620','4.    เมื่อสอบปากเปล่าและแก้ไขตามข้อเสนอแนะของคณะกรรมการสอบปากเปล่าเรียบร้อยแล้ว ให้นำส่งงานนิพนธ์/'));
		$this->pdf->Ln(6);
		
		$this->pdf->AddFont('THSarabun','','THSarabun.php');
		$this->pdf->SetFont('THSarabun','',16);
		$this->pdf->Cell(0,10,iconv('UTF-8','TIS-620','      วิทยานิพนธ์/ดุษฎีนิพนธ์ จำนวน 1 เล่ม พร้อม วก.04 เพื่อตรวจความสมบูรณ์และรูปแบบวิทยานิพนธ์ที่'));
		$this->pdf->Ln(6);
		
		$this->pdf->AddFont('THSarabun','','THSarabun.php');
		$this->pdf->SetFont('THSarabun','',16);
		$this->pdf->Cell(0,10,iconv('UTF-8','TIS-620','      สำนักงานจัดการการศึกษา'));
		$this->pdf->Ln(6);
		
		//กำหนดใช้ตัวอักษร THSarabun ขนาด 14 หน่วย
		$this->pdf->AddFont('THSarabun','','THSarabun.php');
		$this->pdf->SetFont('THSarabun','',14);
		$this->pdf->settextcolor(0,0,0);
 
		//พิมพ์เลขหน้า ตรงมุมขวาล่าง
		$this->pdf->Text(25.4,280,iconv('UTF-8','TIS-620','_________________________________________________________________________________________________' ));
		$this->pdf->Text(25.4,286,iconv('UTF-8','TIS-620',' สำนักงานจัดการศึกษา คณะวิทยาการสารสนเทศ                                                                                          หน้า 3'));
		
		$this->pdf->Output( 'PDF/U-03.pdf' , 'I' );
		
		//$this->load->helper('download');
		//$data = file_get_contents("MyPDF/test.pdf");
		//$name = "MyPDF/test.pdf";
		//force_download($name, $data);
		//echo anchor('test.pdf', 'Download');
	}
	
	public function download()
	{
		$this->pdf = new FPDF();
		$this->pdf->SetMargins( 25.4,25.4,25.4 );
		$this->pdf->AddPage();
		
		
		$this->pdf->AddFont('THSarabun','','THSarabun.php');
		$this->pdf->SetFont('THSarabun','',14);
		$this->pdf->Image('images/PDM/logo.png',27,3,21,0,'');
		//พิมพ์ตัวหนังสือตัวเอียงๆ ที่ตำแหน่งเยื้องขอบกระดาษซ้าย 100หน่วย ขอบกระดาษบน 15หน่วย
		$this->pdf->Text(100,15,iconv('UTF-8','TIS-620','ขอให้พิมพ์หรือเขียนด้วยตัวบรรจงและภาษาอังกฤษให้ใช้ตัวพิมพ์ใหญ่ ' ));
		
		$this->pdf->AddFont('THSarabun','b','THSarabun Bold.php');
		$this->pdf->SetFont('THSarabun','b',14);
		$this->pdf->Text(100,15,iconv('UTF-8','TIS-620','                                                                                    วก. 03'));
		
		$this->pdf->Text(25.4,25,iconv('UTF-8','TIS-620','___________________________________________________________________________________________' ));
		
		
		
		$this->pdf->AddFont('THSarabun','b','THSarabun Bold.php');//หนา
		$this->pdf->SetFont('THSarabun','b',16);
		$this->pdf->Cell(30,10,iconv('UTF-8','TIS-620','            แบบเสนอขออนุมัติสอบและแต่งตั้งกรรมการสอบงานนิพนธ์/วิทยานิพนธ์/ดุษฎีนิพนธ์'));
		$this->pdf->Ln(13);
		
		$this->pdf->AddFont('THSarabun','','THSarabun.php');
		$this->pdf->SetFont('THSarabun','',15);
		$this->pdf->Cell(0,10,iconv('UTF-8','TIS-620','ชื่อนิสิต(นาย/นาง/นางสาว)................................................................รหัสประจำตัว.............................................................'));
		$this->pdf->Ln(7);
		
		$this->pdf->AddFont('THSarabun','','THSarabun.php');
		$this->pdf->SetFont('THSarabun','',15);
		$this->pdf->Cell(0,10,iconv('UTF-8','TIS-620','โทร..................................................................Email.............................................................................................................'));
		$this->pdf->Ln(13);
		
		$this->pdf->AddFont('THSarabun','','THSarabun.php');
		$this->pdf->SetFont('THSarabun','',15);
		$this->pdf->Cell(37,17,iconv('UTF-8','TIS-620',''), 1 );		
		$this->pdf->Cell(60,17,iconv('UTF-8','TIS-620',''), 1 );
		$this->pdf->Cell(39,17,iconv('UTF-8','TIS-620',''), 1 );
		$this->pdf->Cell(37,17,iconv('UTF-8','TIS-620',''), 1 );
		$this->pdf->Ln(-2);
		
		$this->pdf->AddFont('THSarabun','b','THSarabun Bold.php');
		$this->pdf->SetFont('THSarabun','b',15);
		$this->pdf->Cell(0,10,iconv('UTF-8','TIS-620','หลักสูตร                     สาขาวิชา                                       ประเภทนิสิต                 แผนการเรียน'));
		$this->pdf->Ln(5);
		
		$this->pdf->AddFont('THSarabun','','THSarabun.php');
		$this->pdf->SetFont('THSarabun','',15);
		$this->pdf->Cell(0,10,iconv('UTF-8','TIS-620','            วท.ม.                          เทคโนโลยีสารสนเทศ                           ภาคปกติ                      แผน ก'));
		$this->pdf->Image('images/PDM/checkbox1.png',35,63.5,5,0,'');
		$this->pdf->Image('images/PDM/checkbox1.png',72,63.5,5,0,'');
		$this->pdf->Image('images/PDM/checkbox1.png',132,63.5,5,0,'');
		$this->pdf->Image('images/PDM/checkbox1.png',170,63.5,5,0,'');
		$this->pdf->Ln(6);
		
		$this->pdf->AddFont('THSarabun','','THSarabun.php');
		$this->pdf->SetFont('THSarabun','',15);
		$this->pdf->Cell(0,10,iconv('UTF-8','TIS-620','            ปร.ด.                          วิทยาการคอมพิวเตอร์                          ภาคพิเศษ                     แผน ข'));
		$this->pdf->Image('images/PDM/checkbox1.png',35,69.5,5,0,'');
		$this->pdf->Image('images/PDM/checkbox1.png',72,69.5,5,0,'');
		$this->pdf->Image('images/PDM/checkbox1.png',132,69.5,5,0,'');
		$this->pdf->Image('images/PDM/checkbox1.png',170,69.5,5,0,'');
		$this->pdf->Ln(12);
		
		$this->pdf->AddFont('THSarabun','b','THSarabun Bold.php');
		$this->pdf->SetFont('THSarabun','b',15);
		$this->pdf->Cell(0,10,iconv('UTF-8','TIS-620','ขอเสนอเค้าโครงวิทยานิพนธ์/ดุษฎีนิพนธ์เพื่อพิจารณา ดังนี้'));
		$this->pdf->Ln(7);
		
		$this->pdf->AddFont('THSarabun','','THSarabun.php');
		$this->pdf->SetFont('THSarabun','',15);
		$this->pdf->Cell(0,10,iconv('UTF-8','TIS-620','ชื่อเรื่องภาษาไทย....................................................................................................................................................................'));
		$this->pdf->Ln(7);
		
		$this->pdf->AddFont('THSarabun','','THSarabun.php');
		$this->pdf->SetFont('THSarabun','',15);
		$this->pdf->Cell(0,10,iconv('UTF-8','TIS-620','................................................................................................................................................................................................'));
		$this->pdf->Ln(7);
		
		$this->pdf->AddFont('THSarabun','','THSarabun.php');
		$this->pdf->SetFont('THSarabun','',15);
		$this->pdf->Cell(0,10,iconv('UTF-8','TIS-620','ชื่อเรื่องภาษาอังกฤษ...............................................................................................................................................................'));
		$this->pdf->Ln(7);
		
		$this->pdf->AddFont('THSarabun','','THSarabun.php');
		$this->pdf->SetFont('THSarabun','',15);
		$this->pdf->Cell(0,10,iconv('UTF-8','TIS-620','................................................................................................................................................................................................'));
		$this->pdf->Ln(10);
		
		$this->pdf->AddFont('THSarabun','b','THSarabun Bold.php');
		$this->pdf->SetFont('THSarabun','b',15);
		$this->pdf->Cell(0,10,iconv('UTF-8','TIS-620','ข้าพเจ้าได้ศึกษารายวิชาครบตามหลักสูตรที่กำหนดแล้ว '));
		$this->pdf->Ln(0);
		
		$this->pdf->AddFont('THSarabun','','THSarabun.php');
		$this->pdf->SetFont('THSarabun','',15);
		$this->pdf->Cell(0,10,iconv('UTF-8','TIS-620','                                                                      โดยได้ค่าเฉลี่ยสะสม(GPA)...........................'));
		$this->pdf->Ln(7);
		
		$this->pdf->AddFont('THSarabun','b','THSarabun Bold.php');
		$this->pdf->SetFont('THSarabun','b',15);
		$this->pdf->settextcolor(255,0,0);
		$this->pdf->Cell(0,10,iconv('UTF-8','TIS-620','(เฉพาะนิสิตแผนการเรียน ก)'));
		$this->pdf->Ln(7);
		
		$this->pdf->AddFont('THSarabun','b','THSarabun Bold.php');
		$this->pdf->SetFont('THSarabun','b',15);
		$this->pdf->settextcolor(0,0,0);
		$this->pdf->Cell(0,10,iconv('UTF-8','TIS-620','และได้รับอนุมัติเค้าโครงฯ '));
		$this->pdf->Ln(0);
		
		$this->pdf->AddFont('THSarabun','','THSarabun.php');
		$this->pdf->SetFont('THSarabun','',15);
		$this->pdf->Cell(0,10,iconv('UTF-8','TIS-620','                                 เมื่อวันที่...................................................'));
		$this->pdf->Ln(6);
		
		$this->pdf->AddFont('THSarabun','b','THSarabun Bold.php');
		$this->pdf->SetFont('THSarabun','b',15);
		$this->pdf->Cell(0,10,iconv('UTF-8','TIS-620','คณะกรรมการควบคุมฝคณะกรรมการพิจารณาเค้าโครงวิทยานิพนธ์/ดุษฎีนิพนธ์'));
		$this->pdf->Ln(8);
		
		$this->pdf->AddFont('THSarabun','','THSarabun.php');
		$this->pdf->SetFont('THSarabun','',15);
		$this->pdf->Cell(43,12,iconv('UTF-8','TIS-620',''), 1 );		
		$this->pdf->Cell(43,12,iconv('UTF-8','TIS-620',''), 1 );
		$this->pdf->Cell(43,12,iconv('UTF-8','TIS-620',''), 1 );
		$this->pdf->Cell(43,12,iconv('UTF-8','TIS-620',''), 1 );
		$this->pdf->Ln(-6);
		
		$this->pdf->AddFont('THSarabun','b','THSarabun Bold.php');
		$this->pdf->SetFont('THSarabun','b',15);
		$this->pdf->Cell(37,20,iconv('UTF-8','TIS-620','    คณะกรรมการควบคุม         ชื่อ-สกุล พร้อมตำแหน่ง          สังกัดคณะ/สถาบัน         คณะกรรมการพิจารณาเค้า'));
		$this->pdf->Ln(5);
		
		$this->pdf->AddFont('THSarabun','b','THSarabun Bold.php');
		$this->pdf->SetFont('THSarabun','b',15);
		$this->pdf->Cell(37,20,iconv('UTF-8','TIS-620','          วิทยานิพนธ์                      ทางวิชาการ                                                      โครงวิทยานิพนธ์'));
		$this->pdf->Ln(13);
		
		$this->pdf->AddFont('THSarabun','','THSarabun.php');
		$this->pdf->SetFont('THSarabun','',15);
		$this->pdf->Cell(43,6,iconv('UTF-8','TIS-620',''), 1 );		
		$this->pdf->Cell(43,6,iconv('UTF-8','TIS-620',''), 1 );
		$this->pdf->Cell(43,6,iconv('UTF-8','TIS-620',''), 1 );
		$this->pdf->Cell(43,6,iconv('UTF-8','TIS-620',''), 1 );
		$this->pdf->Ln(-7);
		
		$this->pdf->AddFont('THSarabun','','THSarabun.php');
		$this->pdf->SetFont('THSarabun','',15);
		$this->pdf->Cell(37,20,iconv('UTF-8','TIS-620','อาจารย์ที่ปรึกษาหลัก                                                                                       ประธานกรรมการ'));
		$this->pdf->Ln(13);
		
		$this->pdf->AddFont('THSarabun','','THSarabun.php');
		$this->pdf->SetFont('THSarabun','',15);
		$this->pdf->Cell(43,6,iconv('UTF-8','TIS-620',''), 1 );		
		$this->pdf->Cell(43,6,iconv('UTF-8','TIS-620',''), 1 );
		$this->pdf->Cell(43,6,iconv('UTF-8','TIS-620',''), 1 );
		$this->pdf->Cell(43,6,iconv('UTF-8','TIS-620',''), 1 );
		$this->pdf->Ln(-7);
		
		$this->pdf->AddFont('THSarabun','','THSarabun.php');
		$this->pdf->SetFont('THSarabun','',15);
		$this->pdf->Cell(37,20,iconv('UTF-8','TIS-620','อาจารย์ที่ปรึกษาร่วม(ถ้ามี)                                                                                 กรรมการ'));
		$this->pdf->Ln(13);
		
		$this->pdf->AddFont('THSarabun','','THSarabun.php');
		$this->pdf->SetFont('THSarabun','',15);
		$this->pdf->Cell(43,6,iconv('UTF-8','TIS-620',''), 1 );		
		$this->pdf->Cell(43,6,iconv('UTF-8','TIS-620',''), 1 );
		$this->pdf->Cell(43,6,iconv('UTF-8','TIS-620',''), 1 );
		$this->pdf->Cell(43,6,iconv('UTF-8','TIS-620',''), 1 );
		$this->pdf->Ln(-7);
		
		$this->pdf->AddFont('THSarabun','','THSarabun.php');
		$this->pdf->SetFont('THSarabun','',15);
		$this->pdf->Cell(37,20,iconv('UTF-8','TIS-620','อาจารย์ที่ปรึกษาร่วม(ถ้ามี)                                                                                 กรรมการ'));
		$this->pdf->Ln(13);
		
		$this->pdf->AddFont('THSarabun','','THSarabun.php');
		$this->pdf->SetFont('THSarabun','',15);
		$this->pdf->Cell(43,6,iconv('UTF-8','TIS-620',''), 1 );		
		$this->pdf->Cell(43,6,iconv('UTF-8','TIS-620',''), 1 );
		$this->pdf->Cell(43,6,iconv('UTF-8','TIS-620',''), 1 );
		$this->pdf->Cell(43,6,iconv('UTF-8','TIS-620',''), 1 );
		$this->pdf->Ln(-7);
		
		$this->pdf->AddFont('THSarabun','','THSarabun.php');
		$this->pdf->SetFont('THSarabun','',15);
		$this->pdf->Cell(37,20,iconv('UTF-8','TIS-620','อาจารย์ประจำ                                                                                               กรรมการ'));
		$this->pdf->Ln(13);
		
		$this->pdf->AddFont('THSarabun','','THSarabun.php');
		$this->pdf->SetFont('THSarabun','',15);
		$this->pdf->Cell(43,6,iconv('UTF-8','TIS-620',''), 1 );		
		$this->pdf->Cell(43,6,iconv('UTF-8','TIS-620',''), 1 );
		$this->pdf->Cell(43,6,iconv('UTF-8','TIS-620',''), 1 );
		$this->pdf->Cell(43,6,iconv('UTF-8','TIS-620',''), 1 );
		$this->pdf->Ln(-7);
		
		$this->pdf->AddFont('THSarabun','','THSarabun.php');
		$this->pdf->SetFont('THSarabun','',15);
		$this->pdf->Cell(37,20,iconv('UTF-8','TIS-620','ผู้ทรงคุณวุฒิภายนอก                                                                                       กรรมการ'));
		$this->pdf->Ln(15);
		
		$this->pdf->AddFont('THSarabun','b','THSarabun Bold.php');
		$this->pdf->SetFont('THSarabun','b',15);
		$this->pdf->settextcolor(255,0,0);
		$this->pdf->Cell(0,10,iconv('UTF-8','TIS-620','(เฉพาะนิสิตแผนการเรียน ข)'));
		$this->pdf->Ln(7);
		
		$this->pdf->AddFont('THSarabun','b','THSarabun Bold.php');
		$this->pdf->SetFont('THSarabun','b',15);
		$this->pdf->settextcolor(0,0,0);
		$this->pdf->Cell(0,10,iconv('UTF-8','TIS-620','และผ่านการสอบประมวลความรู้ (Comprehensive Examination)'));
		$this->pdf->Ln(7);
		
		$this->pdf->AddFont('THSarabun','','THSarabun.php');
		$this->pdf->SetFont('THSarabun','',15);
		$this->pdf->Cell(0,10,iconv('UTF-8','TIS-620','เมื่อวันที่.....................................................'));
		$this->pdf->Ln(8);
		
		$this->pdf->AddFont('THSarabun','b','THSarabun Bold.php');
		$this->pdf->SetFont('THSarabun','b',15);
		$this->pdf->Cell(0,10,iconv('UTF-8','TIS-620','ขออนุมัติสอบปากเปล่า      งานนิพนธ์      วิทยานิพนธ์      ดุษฎีนิพนธ์ พร้อมเอกสารแนบ ดังนี้'));
		$this->pdf->Image('images/PDM/checkbox2.png',60.5,213.5,5,0,'');
		$this->pdf->Image('images/PDM/checkbox2.png',82.5,213.5,5,0,'');
		$this->pdf->Image('images/PDM/checkbox2.png',106.5,213.5,5,0,'');
		$this->pdf->Ln(6);
		
		$this->pdf->AddFont('THSarabun','','THSarabun.php');
		$this->pdf->SetFont('THSarabun','',15);
		$this->pdf->Cell(0,10,iconv('UTF-8','TIS-620','                  1.  รายงานฉบับ ........ ฉบับ'));
		$this->pdf->Image('images/PDM/checkbox1.png',40,219.5,5,0,'');
		$this->pdf->Ln(6);
				
		$this->pdf->AddFont('THSarabun','','THSarabun.php');
		$this->pdf->SetFont('THSarabun','',15);
		$this->pdf->Cell(0,10,iconv('UTF-8','TIS-620','                  2.  เอกสารแสดงการเผยแพร่ผลงานวิทยานิพนธ์/ดุษฎีนิพนธ์ (เฉาพหลักสูตรที่กำหนด)'));
		$this->pdf->Image('images/PDM/checkbox1.png',40,225.5,5,0,'');
		$this->pdf->Ln(6);
		
		$this->pdf->AddFont('THSarabun','','THSarabun.php');
		$this->pdf->SetFont('THSarabun','',15);
		$this->pdf->Cell(0,10,iconv('UTF-8','TIS-620','                  3.  แบบรายงานผลการพิจารณาจริยธรรมการวิจัย'));
		$this->pdf->Image('images/PDM/checkbox1.png',40,231.5,5,0,'');
		$this->pdf->Ln(6);
		
		$this->pdf->AddFont('THSarabun','','THSarabun.php');
		$this->pdf->SetFont('THSarabun','',15);
		$this->pdf->Cell(0,10,iconv('UTF-8','TIS-620','                  4.  อื่นๆ(ระบุ)...............................................................................................'));
		$this->pdf->Image('images/PDM/checkbox1.png',40,237.5,5,0,'');
		$this->pdf->Ln(10);
		
		$this->pdf->AddFont('THSarabun','','THSarabun.php');
		$this->pdf->SetFont('THSarabun','',15);
		$this->pdf->Cell(0,10,iconv('UTF-8','TIS-620','                                                                        ลายมือชื่อนิสิต................................................'));
		$this->pdf->Ln(6);
		
		$this->pdf->AddFont('THSarabun','','THSarabun.php');
		$this->pdf->SetFont('THSarabun','',15);
		$this->pdf->Cell(0,10,iconv('UTF-8','TIS-620','                                                                                          (............................................)'));
		$this->pdf->Ln(6);
		
		$this->pdf->AddFont('THSarabun','','THSarabun.php');
		$this->pdf->SetFont('THSarabun','',15);
		$this->pdf->Cell(0,10,iconv('UTF-8','TIS-620','                                                                                           วันที่............/.............../............'));
		$this->pdf->Ln(10);
		
 
		//กำหนดใช้ตัวอักษร THSarabun ขนาด 14 หน่วย
		$this->pdf->AddFont('THSarabun','','THSarabun.php');
		$this->pdf->SetFont('THSarabun','',14);
 
		//พิมพ์เลขหน้า ตรงมุมขวาล่าง
		$this->pdf->Text(25.4,280,iconv('UTF-8','TIS-620','_________________________________________________________________________________________________' ));
		$this->pdf->Text(25.4,286,iconv('UTF-8','TIS-620',' สำนักงานจัดการศึกษา คณะวิทยาการสารสนเทศ                                                                                          หน้า 1'));
		
		$this->pdf->SetMargins( 25.4,25.4,25.4 );
		$this->pdf->AddPage();
		
		$this->pdf->AddFont('THSarabun','','THSarabun.php');
		$this->pdf->SetFont('THSarabun','',14);
		$this->pdf->Image('images/PDM/logo.png',27,3,21,0,'');
		//พิมพ์ตัวหนังสือตัวเอียงๆ ที่ตำแหน่งเยื้องขอบกระดาษซ้าย 100หน่วย ขอบกระดาษบน 15หน่วย
		$this->pdf->Text(100,15,iconv('UTF-8','TIS-620','ขอให้พิมพ์หรือเขียนด้วยตัวบรรจงและภาษาอังกฤษให้ใช้ตัวพิมพ์ใหญ่ ' ));
		
		$this->pdf->AddFont('THSarabun','b','THSarabun Bold.php');
		$this->pdf->SetFont('THSarabun','b',14);
		$this->pdf->Text(100,15,iconv('UTF-8','TIS-620','                                                                                    วก. 03'));
		
		$this->pdf->Text(25.4,25,iconv('UTF-8','TIS-620','___________________________________________________________________________________________' ));
		
		$this->pdf->AddFont('THSarabun','b','THSarabun Bold.php');//หนา
		$this->pdf->SetFont('THSarabun','b',16);
		$this->pdf->Cell(30,10,iconv('UTF-8','TIS-620','                                             (สำหรับอาจารย์ที่ปรึษาหลัก)'));
		$this->pdf->Ln(13);
		
		$this->pdf->AddFont('THSarabun','b','THSarabun Bold.php');//หนา
		$this->pdf->SetFont('THSarabun','b',16);
		$this->pdf->Cell(30,10,iconv('UTF-8','TIS-620','ความเห็นของอาจารย์ที่ปรึษาหลัก...................................................................................................................'));
		$this->pdf->Ln(10);
		
		$this->pdf->AddFont('THSarabun','b','THSarabun Bold.php');//หนา
		$this->pdf->SetFont('THSarabun','b',16);
		$this->pdf->Cell(30,10,iconv('UTF-8','TIS-620','          เห็นควรกำหนดสอบงานนิพนธ์/วิทยานิพนธ์/ดุษฎีนิพนธ์ได้ในวันที่.............../..................../...............'));
		$this->pdf->Ln(10);
		
		$this->pdf->AddFont('THSarabun','','THSarabun.php');
		$this->pdf->SetFont('THSarabun','',16);
		$this->pdf->Cell(30,10,iconv('UTF-8','TIS-620','                                                                   ลงนาม......................................................'));
		$this->pdf->Ln(7);
		
		$this->pdf->AddFont('THSarabun','','THSarabun.php');
		$this->pdf->SetFont('THSarabun','',15);
		$this->pdf->Cell(0,10,iconv('UTF-8','TIS-620','                                                                               (.........................................................)'));
		$this->pdf->Ln(7);
		
		$this->pdf->AddFont('THSarabun','','THSarabun.php');
		$this->pdf->SetFont('THSarabun','',15);
		$this->pdf->Cell(0,10,iconv('UTF-8','TIS-620','                                                                                         อาจารย์ที่ปรึกษาหลัก'));
		$this->pdf->Ln(7);
		
		$this->pdf->AddFont('THSarabun','','THSarabun.php');
		$this->pdf->SetFont('THSarabun','',15);
		$this->pdf->Cell(0,10,iconv('UTF-8','TIS-620','                                                                                      วันที่............/.............../............'));
		$this->pdf->Ln(10);
		
		$this->pdf->AddFont('THSarabun','b','THSarabun Bold.php');
		$this->pdf->SetFont('THSarabun','b',15);
		$this->pdf->Cell(0,10,iconv('UTF-8','TIS-620','                                                             (สำหรับประธานสาขาวิชา)'));
		$this->pdf->Ln(7);
		
		$this->pdf->AddFont('THSarabun','b','THSarabun Bold.php');
		$this->pdf->SetFont('THSarabun','b',15);
		$this->pdf->Cell(0,10,iconv('UTF-8','TIS-620','โดยเสนอ................................................................... ผู้ทรงคุณวุฒิ(นอกสถาบัน) เป็นประธานกรรมการสอบ'));
		$this->pdf->Ln(7);
		
		$this->pdf->AddFont('THSarabun','','THSarabun.php');
		$this->pdf->SetFont('THSarabun','',15);
		$this->pdf->Cell(0,10,iconv('UTF-8','TIS-620','วุฒิสูงสุดทางการศึกษา.............................................ตำแหน่งทางวิชาการ(ถ้ามี)......................................................'));
		$this->pdf->Ln(7);
		
		$this->pdf->AddFont('THSarabun','','THSarabun.php');
		$this->pdf->SetFont('THSarabun','',15);
		$this->pdf->Cell(0,10,iconv('UTF-8','TIS-620','ตำแหน่งปัจจุบัน.......................................................................สังกัด.......................................................................'));
		$this->pdf->Ln(7);
		
		$this->pdf->AddFont('THSarabun','','THSarabun.php');
		$this->pdf->SetFont('THSarabun','',15);
		$this->pdf->Cell(0,10,iconv('UTF-8','TIS-620','ที่อยู่..........................................................................................................................................................................'));
		$this->pdf->Ln(7);
		
		$this->pdf->AddFont('THSarabun','','THSarabun.php');
		$this->pdf->SetFont('THSarabun','',15);
		$this->pdf->Cell(0,10,iconv('UTF-8','TIS-620','...............................................................................................เบอร์โทรศัพท์............................................................'));
		$this->pdf->Ln(10);
		
		$this->pdf->AddFont('THSarabun','','THSarabun.php');//หนา
		$this->pdf->SetFont('THSarabun','',16);
		$this->pdf->Cell(30,10,iconv('UTF-8','TIS-620','                                                                     ลงนาม......................................................'));
		$this->pdf->Ln(7);
		
		$this->pdf->AddFont('THSarabun','','THSarabun.php');
		$this->pdf->SetFont('THSarabun','',15);
		$this->pdf->Cell(0,10,iconv('UTF-8','TIS-620','                                                                                 (.........................................................)'));
		$this->pdf->Ln(7);
		
		$this->pdf->AddFont('THSarabun','','THSarabun.php');
		$this->pdf->SetFont('THSarabun','',15);
		$this->pdf->Cell(0,10,iconv('UTF-8','TIS-620','                                                                                             ประธานสาขาวิชา'));
		$this->pdf->Ln(7);
		
		$this->pdf->AddFont('THSarabun','','THSarabun.php');
		$this->pdf->SetFont('THSarabun','',15);
		$this->pdf->Cell(0,10,iconv('UTF-8','TIS-620','                                                                                        วันที่............/.............../............'));
		$this->pdf->Ln(10);
		
		$this->pdf->AddFont('THSarabun','b','THSarabun Bold.php');
		$this->pdf->SetFont('THSarabun','b',15);
		$this->pdf->Cell(0,10,iconv('UTF-8','TIS-620','ความเห็นคณบดีคณะวิทยาการสารสนเทศ'));
		$this->pdf->Ln(7);
		
		$this->pdf->AddFont('THSarabun','','THSarabun.php');
		$this->pdf->SetFont('THSarabun','',15);
		$this->pdf->Cell(0,10,iconv('UTF-8','TIS-620','           อนุมติให้สอบงานนิพนธ์/วิทยานิพนธ์/ดุษฎีนิพนธ์ ในวันที่.........เดือน....................พ.ศ..................'));
		$this->pdf->Ln(7);
		
		$this->pdf->AddFont('THSarabun','','THSarabun.php');
		$this->pdf->SetFont('THSarabun','',15);
		$this->pdf->Cell(0,10,iconv('UTF-8','TIS-620','เวลา...............................สถานที่.....................................................................................................................'));
		$this->pdf->Ln(7);
		
		$this->pdf->AddFont('THSarabun','b','THSarabun Bold.php');
		$this->pdf->SetFont('THSarabun','b',15);
		$this->pdf->Cell(0,10,iconv('UTF-8','TIS-620','โดยคณะกรรมการสอบงานนิพนธ์/วิทยานิพนธ์/ดุษฎีนิพนธ์ ดังรายชื่อต่อไปนี้'));
		$this->pdf->Ln(7);
		
		$this->pdf->AddFont('THSarabun','','THSarabun.php');
		$this->pdf->SetFont('THSarabun','',15);
		$this->pdf->Cell(0,10,iconv('UTF-8','TIS-620','           1) ผู้ทรงคุณวุฒินอกสถาบัน .......................................................................................ประธานกรรมการ'));
		$this->pdf->Ln(6);
		
		$this->pdf->AddFont('THSarabun','','THSarabun.php');
		$this->pdf->SetFont('THSarabun','',15);
		$this->pdf->Cell(0,10,iconv('UTF-8','TIS-620','           2) อาจารย์ที่ปรึกษาหลัก ............................................................................................กรรมการ'));
		$this->pdf->Ln(6);
		
		$this->pdf->AddFont('THSarabun','','THSarabun.php');
		$this->pdf->SetFont('THSarabun','',15);
		$this->pdf->Cell(0,10,iconv('UTF-8','TIS-620','           3) อาจารย์ที่ปรึกษาร่วม (ถ้ามี) ...................................................................................กรรมการ'));
		$this->pdf->Ln(6);
		
		$this->pdf->AddFont('THSarabun','','THSarabun.php');
		$this->pdf->SetFont('THSarabun','',15);
		$this->pdf->Cell(0,10,iconv('UTF-8','TIS-620','           4) อาจารย์ที่ปรึกษาร่วม (ถ้ามี) ...................................................................................กรรมการ'));
		$this->pdf->Ln(6);
		
		$this->pdf->AddFont('THSarabun','','THSarabun.php');
		$this->pdf->SetFont('THSarabun','',15);
		$this->pdf->Cell(0,10,iconv('UTF-8','TIS-620','           5) อาจารย์ประจำในมหาวิทยาลัย ...............................................................................กรรมการ'));
		$this->pdf->Ln(6);
		
		$this->pdf->AddFont('THSarabun','','THSarabun.php');
		$this->pdf->SetFont('THSarabun','',15);
		$this->pdf->Cell(0,10,iconv('UTF-8','TIS-620','           6) อาจารย์ประจำในมหาวิทยาลัย ...............................................................................กรรมการ'));
		$this->pdf->Ln(10);
		
		$this->pdf->AddFont('THSarabun','','THSarabun.php');
		$this->pdf->SetFont('THSarabun','',16);
		$this->pdf->Cell(30,10,iconv('UTF-8','TIS-620','                                                                ลงนาม.....................................................'));
		$this->pdf->Ln(7);
		
		$this->pdf->AddFont('THSarabun','','THSarabun.php');
		$this->pdf->SetFont('THSarabun','',15);
		$this->pdf->Cell(0,10,iconv('UTF-8','TIS-620','                                                                             (....................................................)'));
		$this->pdf->Ln(7);
		
		$this->pdf->AddFont('THSarabun','','THSarabun.php');
		$this->pdf->SetFont('THSarabun','',15);
		$this->pdf->Cell(0,10,iconv('UTF-8','TIS-620','                                                                              คณบดีคณะวิทยาการสารสนเทศ'));
		$this->pdf->Ln(7);
		
		$this->pdf->AddFont('THSarabun','','THSarabun.php');
		$this->pdf->SetFont('THSarabun','',15);
		$this->pdf->Cell(0,10,iconv('UTF-8','TIS-620','                                                                                วันที่............/.............../............'));
		$this->pdf->Ln(10);
		
		//กำหนดใช้ตัวอักษร THSarabun ขนาด 14 หน่วย
		$this->pdf->AddFont('THSarabun','','THSarabun.php');
		$this->pdf->SetFont('THSarabun','',14);
 
		//พิมพ์เลขหน้า ตรงมุมขวาล่าง
		$this->pdf->Text(25.4,280,iconv('UTF-8','TIS-620','_________________________________________________________________________________________________' ));
		$this->pdf->Text(25.4,286,iconv('UTF-8','TIS-620',' สำนักงานจัดการศึกษา คณะวิทยาการสารสนเทศ                                                                                          หน้า 2'));
		
		$this->pdf->SetMargins( 25.4,25.4,25.4 );
		$this->pdf->AddPage();
		
		$this->pdf->AddFont('THSarabun','','THSarabun.php');
		$this->pdf->SetFont('THSarabun','',14);
		$this->pdf->Image('images/PDM/logo.png',27,3,21,0,'');
		//พิมพ์ตัวหนังสือตัวเอียงๆ ที่ตำแหน่งเยื้องขอบกระดาษซ้าย 100หน่วย ขอบกระดาษบน 15หน่วย
		$this->pdf->Text(100,15,iconv('UTF-8','TIS-620','ขอให้พิมพ์หรือเขียนด้วยตัวบรรจงและภาษาอังกฤษให้ใช้ตัวพิมพ์ใหญ่' ));
		
		$this->pdf->AddFont('THSarabun','b','THSarabun Bold.php');
		$this->pdf->SetFont('THSarabun','b',14);
		$this->pdf->Text(100,15,iconv('UTF-8','TIS-620','                                                                                    วก. 03'));
		
		$this->pdf->Text(25.4,25,iconv('UTF-8','TIS-620','___________________________________________________________________________________________' ));
		
		$this->pdf->AddFont('THSarabun','b','THSarabun Bold.php');
		$this->pdf->SetFont('THSarabun','b',16);
		$this->pdf->settextcolor(255,0,0);
		$this->pdf->Cell(0,10,iconv('UTF-8','TIS-620','หมายเหตุ'));
		$this->pdf->Ln(6);
		
		$this->pdf->AddFont('THSarabun','','THSarabun.php');
		$this->pdf->SetFont('THSarabun','',16);
		$this->pdf->Cell(0,10,iconv('UTF-8','TIS-620','1.   นิสิตกรอกข้อมูล วก.03 เสนอประธานควบคุมงานนิพนธ์/วิทยานิพนธ์/ดุษฎีนิพนธ์ เพื่อเสนอแต่งตั้งประธานสอบ'));
		$this->pdf->Ln(6);
		
		$this->pdf->AddFont('THSarabun','','THSarabun.php');
		$this->pdf->SetFont('THSarabun','',16);
		$this->pdf->Cell(0,10,iconv('UTF-8','TIS-620','      งานนิพนธ์/วิทยานิพนธ์/ดุษฎีนิพนธ์'));
		$this->pdf->Ln(6);
		
		$this->pdf->AddFont('THSarabun','','THSarabun.php');
		$this->pdf->SetFont('THSarabun','',16);
		$this->pdf->Cell(0,10,iconv('UTF-8','TIS-620','2.   นิสิตนำเสนอประธานสาขาวิชาเพื่อแต่งตั้งผู้ทรงคุณวุฒิภายนอก'));
		$this->pdf->Ln(6);
		
		$this->pdf->AddFont('THSarabun','','THSarabun.php');
		$this->pdf->SetFont('THSarabun','',16);
		$this->pdf->Cell(0,10,iconv('UTF-8','TIS-620','3.   นิสิตนำ วก.03 ที่ลงนามเรียบร้อยแล้ว ส่งให้สำนักงานจัดการศึกษา คณะวิทยาการสารสนเทศ เพื่อประสานงาน'));
		$this->pdf->Ln(6);
		
		$this->pdf->AddFont('THSarabun','','THSarabun.php');
		$this->pdf->SetFont('THSarabun','',16);
		$this->pdf->Cell(0,10,iconv('UTF-8','TIS-620','      กรรมการ กำหนดวัน  เวลา และสถานที่สอบ                                                                           เพื่อ'));
		$this->pdf->Ln(0);
		
		$this->pdf->AddFont('THSarabun','b','THSarabun Bold.php');
		$this->pdf->SetFont('THSarabun','b',16);
		$this->pdf->Cell(0,10,iconv('UTF-8','TIS-620','                                                         โดยกำหนดสอบไม่น้อยกว่า  21  วันนับจากวันที่ยื่นเอกสาร '));
		$this->pdf->Ln(6);
		
		$this->pdf->AddFont('THSarabun','','THSarabun.php');
		$this->pdf->SetFont('THSarabun','',16);
		$this->pdf->Cell(0,10,iconv('UTF-8','TIS-620','      พิจารณาอนุมัติสอบปากเปล่าต่อไป'));
		$this->pdf->Ln(6);
		
		$this->pdf->AddFont('THSarabun','','THSarabun.php');
		$this->pdf->SetFont('THSarabun','',16);
		$this->pdf->Cell(0,10,iconv('UTF-8','TIS-620','4.    เมื่อสอบปากเปล่าและแก้ไขตามข้อเสนอแนะของคณะกรรมการสอบปากเปล่าเรียบร้อยแล้ว ให้นำส่งงานนิพนธ์/'));
		$this->pdf->Ln(6);
		
		$this->pdf->AddFont('THSarabun','','THSarabun.php');
		$this->pdf->SetFont('THSarabun','',16);
		$this->pdf->Cell(0,10,iconv('UTF-8','TIS-620','      วิทยานิพนธ์/ดุษฎีนิพนธ์ จำนวน 1 เล่ม พร้อม วก.04 เพื่อตรวจความสมบูรณ์และรูปแบบวิทยานิพนธ์ที่'));
		$this->pdf->Ln(6);
		
		$this->pdf->AddFont('THSarabun','','THSarabun.php');
		$this->pdf->SetFont('THSarabun','',16);
		$this->pdf->Cell(0,10,iconv('UTF-8','TIS-620','      สำนักงานจัดการการศึกษา'));
		$this->pdf->Ln(6);
		
		//กำหนดใช้ตัวอักษร THSarabun ขนาด 14 หน่วย
		$this->pdf->AddFont('THSarabun','','THSarabun.php');
		$this->pdf->SetFont('THSarabun','',14);
		$this->pdf->settextcolor(0,0,0);
 
		//พิมพ์เลขหน้า ตรงมุมขวาล่าง
		$this->pdf->Text(25.4,280,iconv('UTF-8','TIS-620','_________________________________________________________________________________________________' ));
		$this->pdf->Text(25.4,286,iconv('UTF-8','TIS-620',' สำนักงานจัดการศึกษา คณะวิทยาการสารสนเทศ                                                                                          หน้า 3'));
		
		$this->pdf->Output( 'PDF/U03.pdf' , 'D' );
		
		//$this->load->helper('download');
		//$data = file_get_contents("MyPDF/test.pdf");
		//$name = "MyPDF/test.pdf";
		//force_download($name, $data);
		//echo anchor('test.pdf', 'Download');
	}
}
/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */
?>

