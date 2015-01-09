<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
require('UMS_Controller.php');
class Pdf_u03_2 extends UMS_Controller {
	function __construct()
	{
		parent::__construct();
		$this->load->library('pdf'); // 
		$this->pdf->fontpath = 'font/'; // Create folder fonts at Codeigniter
	}
	public function index()
	{
		//echo anchor(base_url('index.php/PDM/pdf_u03_2/download'), 'Download');
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
		$this->pdf->Text(100,15,iconv('UTF-8','TIS-620','                                                                                    วก. 03-2'));
		
		$this->pdf->Text(25.4,25,iconv('UTF-8','TIS-620','___________________________________________________________________________________________' ));
		
		$this->pdf->AddFont('THSarabun','b','THSarabun Bold.php');//หนา
		$this->pdf->SetFont('THSarabun','b',16);
		$this->pdf->Cell(30,10,iconv('UTF-8','TIS-620','        แบบบันทึกการสอบปากเปล่าและแบบแจ้งผลการสอบปากเปล่างานนิพนธ์/วิทยานิพนธ์/ดุษฎีนิพนธ์'));
		$this->pdf->Ln(13);
		
		$this->pdf->AddFont('THSarabun','b','THSarabun Bold.php');
		$this->pdf->SetFont('THSarabun','b',15);
		$this->pdf->Cell(0,10,iconv('UTF-8','TIS-620','เรียน'));
		$this->pdf->Ln(7);
		
		$this->pdf->AddFont('THSarabun','','THSarabun.php');
		$this->pdf->SetFont('THSarabun','',15);
		$this->pdf->Cell(0,-4,iconv('UTF-8','TIS-620','       คณบดีคณะวิทยาการสารสนเทศ'));
		$this->pdf->Ln(-1);
		
		$this->pdf->AddFont('THSarabun','','THSarabun.php');
		$this->pdf->SetFont('THSarabun','',15);
		$this->pdf->Cell(0,10,iconv('UTF-8','TIS-620','           ตามที่คณะกรรมการสอบงานนิพนธ์/วิทยานิพนธ์/ดุษฎีนิพนธ์'));
		$this->pdf->Ln(7);
		
		$this->pdf->AddFont('THSarabun','','THSarabun.php');
		$this->pdf->SetFont('THSarabun','',15);
		$this->pdf->Cell(0,10,iconv('UTF-8','TIS-620','นิสิต (นาย/นาง/นางสาว)................................................................รหัสประจำตัว...................................................................'));
		$this->pdf->Ln(6);
		
		$this->pdf->AddFont('THSarabun','','THSarabun.php');
		$this->pdf->SetFont('THSarabun','',15);
		$this->pdf->Cell(0,10,iconv('UTF-8','TIS-620','โทร.....................................................................Email.............................................................................................................'));
		$this->pdf->Ln(14);
		
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
		$this->pdf->Image('images/PDM/checkbox1.png',35,76,5,0,'');
		$this->pdf->Image('images/PDM/checkbox1.png',72,76,5,0,'');
		$this->pdf->Image('images/PDM/checkbox1.png',132,76,5,0,'');
		$this->pdf->Image('images/PDM/checkbox1.png',170,76,5,0,'');
		$this->pdf->Ln(6);
		
		$this->pdf->AddFont('THSarabun','','THSarabun.php');
		$this->pdf->SetFont('THSarabun','',15);
		$this->pdf->Cell(0,10,iconv('UTF-8','TIS-620','            ปร.ด.                          วิทยาการคอมพิวเตอร์                          ภาคพิเศษ                     แผน ข'));
		$this->pdf->Image('images/PDM/checkbox1.png',35,82.5,5,0,'');
		$this->pdf->Image('images/PDM/checkbox1.png',72,82.5,5,0,'');
		$this->pdf->Image('images/PDM/checkbox1.png',132,82.5,5,0,'');
		$this->pdf->Image('images/PDM/checkbox1.png',170,82.5,5,0,'');
		$this->pdf->Ln(12);
		
		$this->pdf->AddFont('THSarabun','b','THSarabun Bold.php');
		$this->pdf->SetFont('THSarabun','b',15);
		$this->pdf->Cell(0,10,iconv('UTF-8','TIS-620','สอบเค้าโครงฯ ผ่าน'));
		$this->pdf->Ln(0);
		
		$this->pdf->AddFont('THSarabun','','THSarabun.php');
		$this->pdf->SetFont('THSarabun','',15);
		$this->pdf->Cell(0,10,iconv('UTF-8','TIS-620','                         เมื่อวันที่......................................................'));
		$this->pdf->Ln(0);
		
		$this->pdf->AddFont('THSarabun','b','THSarabun Bold.php');
		$this->pdf->SetFont('THSarabun','b',15);
		$this->pdf->settextcolor(255,0,0);
		$this->pdf->Cell(0,10,iconv('UTF-8','TIS-620','                                                                        (เฉพาะนิสิตแผนการเรียน ก)'));
		$this->pdf->Ln(7);
		
		$this->pdf->AddFont('THSarabun','','THSarabun.php');
		$this->pdf->SetFont('THSarabun','',15);
		$this->pdf->settextcolor(0,0,0);
		$this->pdf->Cell(0,10,iconv('UTF-8','TIS-620','วันสอบงานนิพนธ์/วิทยานิพนธ์/ดุษฎีนิพนธ์   วันที่..............เดือน.......................................พ.ศ.............เวลา........................... '));
		$this->pdf->Ln(10);
		
		$this->pdf->AddFont('THSarabun','b','THSarabun Bold.php');
		$this->pdf->SetFont('THSarabun','b',15);
		$this->pdf->Cell(0,10,iconv('UTF-8','TIS-620','ผลสอบปรากฏว่า'));
		$this->pdf->Ln(6);
		
		$this->pdf->AddFont('THSarabun','','THSarabun.php');
		$this->pdf->SetFont('THSarabun','',15);
		$this->pdf->Cell(0,10,iconv('UTF-8','TIS-620','                         ผ่าน  ระดับ............S.............'));
		$this->pdf->Image('images/PDM/checkbox1.png',47,118,5,0,'');
		$this->pdf->Ln(6);
		
		$this->pdf->AddFont('THSarabun','','THSarabun.php');
		$this->pdf->SetFont('THSarabun','',15);
		$this->pdf->Cell(0,10,iconv('UTF-8','TIS-620','                         ผ่าน โดยมีเงื่อนไข โดยมีเงื่อนไขให้เวลา............วัน สำหรับการแก้ไข และครบกำหนดส่ง'));
		$this->pdf->Image('images/PDM/checkbox1.png',47,124,5,0,'');
		$this->pdf->Ln(7);
		
		$this->pdf->AddFont('THSarabun','','THSarabun.php');
		$this->pdf->SetFont('THSarabun','',15);
		$this->pdf->Cell(0,10,iconv('UTF-8','TIS-620','งานนิพนธ์/วิทยานิพนธ์/ดุษฎีนิพนธ์ฉบับสมบูรณ์ ในวันที่................เดือน....................................พ.ศ.......................................'));
		$this->pdf->Ln(7);
		
		$this->pdf->AddFont('THSarabun','','THSarabun.php');
		$this->pdf->SetFont('THSarabun','',15);
		$this->pdf->Cell(0,10,iconv('UTF-8','TIS-620','                         ไม่ผ่าน '));
		$this->pdf->Image('images/PDM/checkbox1.png',47,137.5,5,0,'');
		$this->pdf->Ln(8);
		
		$this->pdf->AddFont('THSarabun','','THSarabun.php');
		$this->pdf->SetFont('THSarabun','',15);
		$this->pdf->Cell(0,10,iconv('UTF-8','TIS-620','     ชื่อภาษาไทย (กรณีที่มีการเปลี่ยนแปลงชื่อวิทยานิพนธ์)......................................................................................................'));
		$this->pdf->Ln(6);
		
		$this->pdf->AddFont('THSarabun','','THSarabun.php');
		$this->pdf->SetFont('THSarabun','',15);
		$this->pdf->Cell(0,10,iconv('UTF-8','TIS-620','     .............................................................................................................................................................................................'));
		$this->pdf->Ln(6);
		
		$this->pdf->AddFont('THSarabun','','THSarabun.php');
		$this->pdf->SetFont('THSarabun','',15);
		$this->pdf->Cell(0,10,iconv('UTF-8','TIS-620','     ชื่อภาษาอังกฤษ (กรณีที่มีการเปลี่ยนแปลงชื่อวิทยานิพนธ์).................................................................................................'));
		$this->pdf->Ln(6);
		
		$this->pdf->AddFont('THSarabun','','THSarabun.php');
		$this->pdf->SetFont('THSarabun','',15);
		$this->pdf->Cell(0,10,iconv('UTF-8','TIS-620','     ..............................................................................................................................................................................................'));
		$this->pdf->Ln(10);
		
		$this->pdf->AddFont('THSarabun','','THSarabun.php');
		$this->pdf->SetFont('THSarabun','',15);
		$this->pdf->Cell(0,10,iconv('UTF-8','TIS-620','            จึงเรียนมาเพื่อโปรดทราบ'));
		$this->pdf->Ln(7);
		
		$this->pdf->AddFont('THSarabun','','THSarabun.php');
		$this->pdf->SetFont('THSarabun','',15);
		$this->pdf->Cell(0,10,iconv('UTF-8','TIS-620','ลงนาม...........................................................ประธานกรรมการ      ลงนาม...............................................................กรรมการ'));
		$this->pdf->Ln(7);
		
		$this->pdf->AddFont('THSarabun','','THSarabun.php');
		$this->pdf->SetFont('THSarabun','',15);
		$this->pdf->Cell(0,10,iconv('UTF-8','TIS-620','            (....................................................................)                            (.......................................................................)'));
		$this->pdf->Ln(7);
		
		$this->pdf->AddFont('THSarabun','','THSarabun.php');
		$this->pdf->SetFont('THSarabun','',15);
		$this->pdf->Cell(0,10,iconv('UTF-8','TIS-620','ลงนาม...........................................................กรรมการ                ลงนาม...............................................................กรรมการ'));
		$this->pdf->Ln(7);
		
		$this->pdf->AddFont('THSarabun','','THSarabun.php');
		$this->pdf->SetFont('THSarabun','',15);
		$this->pdf->Cell(0,10,iconv('UTF-8','TIS-620','            (....................................................................)                            (.......................................................................)'));
		$this->pdf->Ln(7);
		
		$this->pdf->AddFont('THSarabun','','THSarabun.php');
		$this->pdf->SetFont('THSarabun','',15);
		$this->pdf->Cell(0,10,iconv('UTF-8','TIS-620','ลงนาม...........................................................กรรมการ                ลงนาม...............................................................กรรมการ'));
		$this->pdf->Ln(7);
		
		$this->pdf->AddFont('THSarabun','','THSarabun.php');
		$this->pdf->SetFont('THSarabun','',15);
		$this->pdf->Cell(0,10,iconv('UTF-8','TIS-620','            (....................................................................)                            (.......................................................................)'));
		$this->pdf->Ln(7);
		
		
		$this->pdf->AddFont('THSarabun','','THSarabun.php');
		$this->pdf->SetFont('THSarabun','',15);
		$this->pdf->Cell(0,10,iconv('UTF-8','TIS-620','ลงนาม...........................................................                            ลงนาม...............................................................'));
		$this->pdf->Ln(7);
		
		$this->pdf->AddFont('THSarabun','','THSarabun.php');
		$this->pdf->SetFont('THSarabun','',15);
		$this->pdf->Cell(0,10,iconv('UTF-8','TIS-620','            (....................................................................)                            (.......................................................................)'));
		$this->pdf->Ln(6);
		
		$this->pdf->AddFont('THSarabun','','THSarabun.php');
		$this->pdf->SetFont('THSarabun','',15);
		$this->pdf->Cell(0,10,iconv('UTF-8','TIS-620','                            ประธานสาขาวิชา                                                    คณบดีคณะวิทยาการสารสนเทศ'));
		$this->pdf->Ln(15);
		
		$this->pdf->AddFont('THSarabun','b','THSarabun Bold.php');
		$this->pdf->SetFont('THSarabun','b',15);
		$this->pdf->settextcolor(255,0,0);
		$this->pdf->Cell(0,10,iconv('UTF-8','TIS-620','หมายเหตุ นิสิตต้องส่งบันทึกนี้ที่ สานักงานจัดการศึกษา คณะวิทยาการสารสนเทศ ภายใน 5 วันทาการหลังการ'));
		$this->pdf->Ln(6);
		
		$this->pdf->AddFont('THSarabun','b','THSarabun Bold.php');
		$this->pdf->SetFont('THSarabun','b',15);
		$this->pdf->Cell(0,10,iconv('UTF-8','TIS-620','             นำเสนองานนิพนธ์/วิทยานิพนธ์/ดุษฎีนิพนธ์'));
		$this->pdf->Ln(10);
		
		//กำหนดใช้ตัวอักษร THSarabun ขนาด 14 หน่วย
		$this->pdf->AddFont('THSarabun','','THSarabun.php');
		$this->pdf->SetFont('THSarabun','',14);
		$this->pdf->settextcolor(0,0,0);
 
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
		$this->pdf->Text(100,15,iconv('UTF-8','TIS-620','                                                                                    วก. 03-2'));
		
		$this->pdf->Text(25.4,25,iconv('UTF-8','TIS-620','___________________________________________________________________________________________' ));
		
		$this->pdf->AddFont('THSarabun','b','THSarabun Bold.php');//หนา
		$this->pdf->SetFont('THSarabun','b',16);
		$this->pdf->Cell(30,10,iconv('UTF-8','TIS-620','                                 รายละเอียดแนบผลการสอบกรณีผ่านโดยต้องแก้ไข'));
		$this->pdf->Ln(12);
		
		$this->pdf->AddFont('THSarabun','','THSarabun.php');
		$this->pdf->SetFont('THSarabun','',15);
		$this->pdf->Cell(0,10,iconv('UTF-8','TIS-620','            ผ่านโดยมีเงื่อนไขว่าต้องปรับแก้ตามมติของคณะกรรมการสอบฯ (ระบุส่วนที่ต้องปรับแก้)'));
		$this->pdf->Image('images/PDM/checkbox2.png',33,39.5,5,0,'');
		$this->pdf->Ln(6);
		
		$this->pdf->AddFont('THSarabun','','THSarabun.php');
		$this->pdf->SetFont('THSarabun','',15);
		$this->pdf->Cell(0,10,iconv('UTF-8','TIS-620','      .............................................................................................................................................................................................'));
		$this->pdf->Ln(6);
		
		$this->pdf->AddFont('THSarabun','','THSarabun.php');
		$this->pdf->SetFont('THSarabun','',15);
		$this->pdf->Cell(0,10,iconv('UTF-8','TIS-620','      .............................................................................................................................................................................................'));
		$this->pdf->Ln(6);
		
		$this->pdf->AddFont('THSarabun','','THSarabun.php');
		$this->pdf->SetFont('THSarabun','',15);
		$this->pdf->Cell(0,10,iconv('UTF-8','TIS-620','      .............................................................................................................................................................................................'));
		$this->pdf->Ln(6);
		
		$this->pdf->AddFont('THSarabun','','THSarabun.php');
		$this->pdf->SetFont('THSarabun','',15);
		$this->pdf->Cell(0,10,iconv('UTF-8','TIS-620','      .............................................................................................................................................................................................'));
		$this->pdf->Ln(6);
		
		$this->pdf->AddFont('THSarabun','','THSarabun.php');
		$this->pdf->SetFont('THSarabun','',15);
		$this->pdf->Cell(0,10,iconv('UTF-8','TIS-620','      .............................................................................................................................................................................................'));
		$this->pdf->Ln(6);
		
		$this->pdf->AddFont('THSarabun','','THSarabun.php');
		$this->pdf->SetFont('THSarabun','',15);
		$this->pdf->Cell(0,10,iconv('UTF-8','TIS-620','      .............................................................................................................................................................................................'));
		$this->pdf->Ln(6);
		
		$this->pdf->AddFont('THSarabun','','THSarabun.php');
		$this->pdf->SetFont('THSarabun','',15);
		$this->pdf->Cell(0,10,iconv('UTF-8','TIS-620','      .............................................................................................................................................................................................'));
		$this->pdf->Ln(6);
		
		$this->pdf->AddFont('THSarabun','','THSarabun.php');
		$this->pdf->SetFont('THSarabun','',15);
		$this->pdf->Cell(0,10,iconv('UTF-8','TIS-620','      .............................................................................................................................................................................................'));
		$this->pdf->Ln(6);
		
		$this->pdf->AddFont('THSarabun','','THSarabun.php');
		$this->pdf->SetFont('THSarabun','',15);
		$this->pdf->Cell(0,10,iconv('UTF-8','TIS-620','      .............................................................................................................................................................................................'));
		$this->pdf->Ln(6);
		
		$this->pdf->AddFont('THSarabun','','THSarabun.php');
		$this->pdf->SetFont('THSarabun','',15);
		$this->pdf->Cell(0,10,iconv('UTF-8','TIS-620','      .............................................................................................................................................................................................'));
		$this->pdf->Ln(6);
		
		$this->pdf->AddFont('THSarabun','','THSarabun.php');
		$this->pdf->SetFont('THSarabun','',15);
		$this->pdf->Cell(0,10,iconv('UTF-8','TIS-620','      .............................................................................................................................................................................................'));
		$this->pdf->Ln(6);
		
		$this->pdf->AddFont('THSarabun','','THSarabun.php');
		$this->pdf->SetFont('THSarabun','',15);
		$this->pdf->Cell(0,10,iconv('UTF-8','TIS-620','      .............................................................................................................................................................................................'));
		$this->pdf->Ln(6);
		
		$this->pdf->AddFont('THSarabun','','THSarabun.php');
		$this->pdf->SetFont('THSarabun','',15);
		$this->pdf->Cell(0,10,iconv('UTF-8','TIS-620','      .............................................................................................................................................................................................'));
		$this->pdf->Ln(6);
		
		$this->pdf->AddFont('THSarabun','','THSarabun.php');
		$this->pdf->SetFont('THSarabun','',15);
		$this->pdf->Cell(0,10,iconv('UTF-8','TIS-620','      .............................................................................................................................................................................................'));
		$this->pdf->Ln(6);
		
		$this->pdf->AddFont('THSarabun','','THSarabun.php');
		$this->pdf->SetFont('THSarabun','',15);
		$this->pdf->Cell(0,10,iconv('UTF-8','TIS-620','      .............................................................................................................................................................................................'));
		$this->pdf->Ln(6);
		
		$this->pdf->AddFont('THSarabun','','THSarabun.php');
		$this->pdf->SetFont('THSarabun','',15);
		$this->pdf->Cell(0,10,iconv('UTF-8','TIS-620','      .............................................................................................................................................................................................'));
		$this->pdf->Ln(6);
		
		$this->pdf->AddFont('THSarabun','','THSarabun.php');
		$this->pdf->SetFont('THSarabun','',15);
		$this->pdf->Cell(0,10,iconv('UTF-8','TIS-620','      .............................................................................................................................................................................................'));
		$this->pdf->Ln(6);
		
		$this->pdf->AddFont('THSarabun','','THSarabun.php');
		$this->pdf->SetFont('THSarabun','',15);
		$this->pdf->Cell(0,10,iconv('UTF-8','TIS-620','      .............................................................................................................................................................................................'));
		$this->pdf->Ln(6);
		
		$this->pdf->AddFont('THSarabun','','THSarabun.php');
		$this->pdf->SetFont('THSarabun','',15);
		$this->pdf->Cell(0,10,iconv('UTF-8','TIS-620','      .............................................................................................................................................................................................'));
		$this->pdf->Ln(6);
		
		$this->pdf->AddFont('THSarabun','','THSarabun.php');
		$this->pdf->SetFont('THSarabun','',15);
		$this->pdf->Cell(0,10,iconv('UTF-8','TIS-620','เหตุผลที่แก้ไข'));
		$this->pdf->Ln(6);
		
		$this->pdf->AddFont('THSarabun','','THSarabun.php');
		$this->pdf->SetFont('THSarabun','',15);
		$this->pdf->Cell(0,10,iconv('UTF-8','TIS-620','      .............................................................................................................................................................................................'));
		$this->pdf->Ln(6);
		
		$this->pdf->AddFont('THSarabun','','THSarabun.php');
		$this->pdf->SetFont('THSarabun','',15);
		$this->pdf->Cell(0,10,iconv('UTF-8','TIS-620','      .............................................................................................................................................................................................'));
		$this->pdf->Ln(6);
		
		$this->pdf->AddFont('THSarabun','','THSarabun.php');
		$this->pdf->SetFont('THSarabun','',15);
		$this->pdf->Cell(0,10,iconv('UTF-8','TIS-620','      .............................................................................................................................................................................................'));
		$this->pdf->Ln(6);
		
		$this->pdf->AddFont('THSarabun','','THSarabun.php');
		$this->pdf->SetFont('THSarabun','',15);
		$this->pdf->Cell(0,10,iconv('UTF-8','TIS-620','      .............................................................................................................................................................................................'));
		$this->pdf->Ln(6);
		
		$this->pdf->AddFont('THSarabun','','THSarabun.php');
		$this->pdf->SetFont('THSarabun','',15);
		$this->pdf->Cell(0,10,iconv('UTF-8','TIS-620','      .............................................................................................................................................................................................'));
		$this->pdf->Ln(6);
		
		$this->pdf->AddFont('THSarabun','','THSarabun.php');
		$this->pdf->SetFont('THSarabun','',15);
		$this->pdf->Cell(0,10,iconv('UTF-8','TIS-620','      .............................................................................................................................................................................................'));
		$this->pdf->Ln(6);
		
		$this->pdf->AddFont('THSarabun','','THSarabun.php');
		$this->pdf->SetFont('THSarabun','',15);
		$this->pdf->Cell(0,10,iconv('UTF-8','TIS-620','      .............................................................................................................................................................................................'));
		$this->pdf->Ln(6);
		
		$this->pdf->AddFont('THSarabun','','THSarabun.php');
		$this->pdf->SetFont('THSarabun','',15);
		$this->pdf->Cell(0,10,iconv('UTF-8','TIS-620','      .............................................................................................................................................................................................'));
		$this->pdf->Ln(6);
		
		$this->pdf->AddFont('THSarabun','','THSarabun.php');
		$this->pdf->SetFont('THSarabun','',15);
		$this->pdf->Cell(0,10,iconv('UTF-8','TIS-620','ลงชื่อนิสิต.....................................................................         ลงชื่อ...................................................................อาจารย์ที่ปรึกษาหลัก'));
		$this->pdf->Ln(7);
		
		$this->pdf->AddFont('THSarabun','','THSarabun.php');
		$this->pdf->SetFont('THSarabun','',15);
		$this->pdf->Cell(0,10,iconv('UTF-8','TIS-620','            (....................................................................)                    (...........................................................)'));
		$this->pdf->Ln(7);
		
		$this->pdf->AddFont('THSarabun','','THSarabun.php');
		$this->pdf->SetFont('THSarabun','',15);
		$this->pdf->Cell(0,10,iconv('UTF-8','TIS-620','                                                                         ลงชื่อ...................................................................ประธานกรรมการ'));
		$this->pdf->Ln(7);
		
		$this->pdf->AddFont('THSarabun','','THSarabun.php');
		$this->pdf->SetFont('THSarabun','',15);
		$this->pdf->Cell(0,10,iconv('UTF-8','TIS-620','                                                                                     (...........................................................)'));
		$this->pdf->Ln(6);
		
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
		$this->pdf->Text(100,15,iconv('UTF-8','TIS-620','ขอให้พิมพ์หรือเขียนด้วยตัวบรรจงและภาษาอังกฤษให้ใช้ตัวพิมพ์ใหญ่ ' ));
		
		$this->pdf->AddFont('THSarabun','b','THSarabun Bold.php');
		$this->pdf->SetFont('THSarabun','b',14);
		$this->pdf->Text(100,15,iconv('UTF-8','TIS-620','                                                                                    วก. 03-2'));
		
		$this->pdf->Text(25.4,25,iconv('UTF-8','TIS-620','___________________________________________________________________________________________' ));
		
		$this->pdf->AddFont('THSarabun','b','THSarabun Bold.php');//หนา
		$this->pdf->SetFont('THSarabun','b',16);
		$this->pdf->Cell(30,10,iconv('UTF-8','TIS-620','                                       รายละเอียดแนบผลการสอบกรณีไม่ผ่าน'));
		$this->pdf->Ln(12);
		
		$this->pdf->AddFont('THSarabun','','THSarabun.php');
		$this->pdf->SetFont('THSarabun','',15);
		$this->pdf->Cell(0,10,iconv('UTF-8','TIS-620','            ไม่ผ่านโดยมีเหตุผลโดยสรุปเป็นประเด็นดังนี้'));
		$this->pdf->Image('images/PDM/checkbox2.png',33,39.5,5,0,'');
		$this->pdf->Ln(6);
		
		$this->pdf->AddFont('THSarabun','','THSarabun.php');
		$this->pdf->SetFont('THSarabun','',15);
		$this->pdf->Cell(0,10,iconv('UTF-8','TIS-620','      .............................................................................................................................................................................................'));
		$this->pdf->Ln(6);
		
		$this->pdf->AddFont('THSarabun','','THSarabun.php');
		$this->pdf->SetFont('THSarabun','',15);
		$this->pdf->Cell(0,10,iconv('UTF-8','TIS-620','      .............................................................................................................................................................................................'));
		$this->pdf->Ln(6);
		
		$this->pdf->AddFont('THSarabun','','THSarabun.php');
		$this->pdf->SetFont('THSarabun','',15);
		$this->pdf->Cell(0,10,iconv('UTF-8','TIS-620','      .............................................................................................................................................................................................'));
		$this->pdf->Ln(6);
		
		$this->pdf->AddFont('THSarabun','','THSarabun.php');
		$this->pdf->SetFont('THSarabun','',15);
		$this->pdf->Cell(0,10,iconv('UTF-8','TIS-620','      .............................................................................................................................................................................................'));
		$this->pdf->Ln(6);
		
		$this->pdf->AddFont('THSarabun','','THSarabun.php');
		$this->pdf->SetFont('THSarabun','',15);
		$this->pdf->Cell(0,10,iconv('UTF-8','TIS-620','      .............................................................................................................................................................................................'));
		$this->pdf->Ln(6);
		
		$this->pdf->AddFont('THSarabun','','THSarabun.php');
		$this->pdf->SetFont('THSarabun','',15);
		$this->pdf->Cell(0,10,iconv('UTF-8','TIS-620','      .............................................................................................................................................................................................'));
		$this->pdf->Ln(6);
		
		$this->pdf->AddFont('THSarabun','','THSarabun.php');
		$this->pdf->SetFont('THSarabun','',15);
		$this->pdf->Cell(0,10,iconv('UTF-8','TIS-620','      .............................................................................................................................................................................................'));
		$this->pdf->Ln(6);
		
		$this->pdf->AddFont('THSarabun','','THSarabun.php');
		$this->pdf->SetFont('THSarabun','',15);
		$this->pdf->Cell(0,10,iconv('UTF-8','TIS-620','      .............................................................................................................................................................................................'));
		$this->pdf->Ln(6);
		
		$this->pdf->AddFont('THSarabun','','THSarabun.php');
		$this->pdf->SetFont('THSarabun','',15);
		$this->pdf->Cell(0,10,iconv('UTF-8','TIS-620','      .............................................................................................................................................................................................'));
		$this->pdf->Ln(6);
		
		$this->pdf->AddFont('THSarabun','','THSarabun.php');
		$this->pdf->SetFont('THSarabun','',15);
		$this->pdf->Cell(0,10,iconv('UTF-8','TIS-620','      .............................................................................................................................................................................................'));
		$this->pdf->Ln(6);
		
		$this->pdf->AddFont('THSarabun','','THSarabun.php');
		$this->pdf->SetFont('THSarabun','',15);
		$this->pdf->Cell(0,10,iconv('UTF-8','TIS-620','      .............................................................................................................................................................................................'));
		$this->pdf->Ln(6);
		
		$this->pdf->AddFont('THSarabun','','THSarabun.php');
		$this->pdf->SetFont('THSarabun','',15);
		$this->pdf->Cell(0,10,iconv('UTF-8','TIS-620','      .............................................................................................................................................................................................'));
		$this->pdf->Ln(6);
		
		$this->pdf->AddFont('THSarabun','','THSarabun.php');
		$this->pdf->SetFont('THSarabun','',15);
		$this->pdf->Cell(0,10,iconv('UTF-8','TIS-620','      .............................................................................................................................................................................................'));
		$this->pdf->Ln(6);
		
		$this->pdf->AddFont('THSarabun','','THSarabun.php');
		$this->pdf->SetFont('THSarabun','',15);
		$this->pdf->Cell(0,10,iconv('UTF-8','TIS-620','      .............................................................................................................................................................................................'));
		$this->pdf->Ln(6);
		
		$this->pdf->AddFont('THSarabun','','THSarabun.php');
		$this->pdf->SetFont('THSarabun','',15);
		$this->pdf->Cell(0,10,iconv('UTF-8','TIS-620','      .............................................................................................................................................................................................'));
		$this->pdf->Ln(6);
		
		$this->pdf->AddFont('THSarabun','','THSarabun.php');
		$this->pdf->SetFont('THSarabun','',15);
		$this->pdf->Cell(0,10,iconv('UTF-8','TIS-620','      .............................................................................................................................................................................................'));
		$this->pdf->Ln(6);
		
		$this->pdf->AddFont('THSarabun','','THSarabun.php');
		$this->pdf->SetFont('THSarabun','',15);
		$this->pdf->Cell(0,10,iconv('UTF-8','TIS-620','      .............................................................................................................................................................................................'));
		$this->pdf->Ln(6);
		
		$this->pdf->AddFont('THSarabun','','THSarabun.php');
		$this->pdf->SetFont('THSarabun','',15);
		$this->pdf->Cell(0,10,iconv('UTF-8','TIS-620','      .............................................................................................................................................................................................'));
		$this->pdf->Ln(6);
		
		$this->pdf->AddFont('THSarabun','','THSarabun.php');
		$this->pdf->SetFont('THSarabun','',15);
		$this->pdf->Cell(0,10,iconv('UTF-8','TIS-620','      .............................................................................................................................................................................................'));
		$this->pdf->Ln(6);
		
		$this->pdf->AddFont('THSarabun','','THSarabun.php');
		$this->pdf->SetFont('THSarabun','',15);
		$this->pdf->Cell(0,10,iconv('UTF-8','TIS-620','เหตุผลที่แก้ไข'));
		$this->pdf->Ln(6);
		
		$this->pdf->AddFont('THSarabun','','THSarabun.php');
		$this->pdf->SetFont('THSarabun','',15);
		$this->pdf->Cell(0,10,iconv('UTF-8','TIS-620','      .............................................................................................................................................................................................'));
		$this->pdf->Ln(6);
		
		$this->pdf->AddFont('THSarabun','','THSarabun.php');
		$this->pdf->SetFont('THSarabun','',15);
		$this->pdf->Cell(0,10,iconv('UTF-8','TIS-620','      .............................................................................................................................................................................................'));
		$this->pdf->Ln(6);
		
		$this->pdf->AddFont('THSarabun','','THSarabun.php');
		$this->pdf->SetFont('THSarabun','',15);
		$this->pdf->Cell(0,10,iconv('UTF-8','TIS-620','      .............................................................................................................................................................................................'));
		$this->pdf->Ln(6);
		
		$this->pdf->AddFont('THSarabun','','THSarabun.php');
		$this->pdf->SetFont('THSarabun','',15);
		$this->pdf->Cell(0,10,iconv('UTF-8','TIS-620','      .............................................................................................................................................................................................'));
		$this->pdf->Ln(6);
		
		$this->pdf->AddFont('THSarabun','','THSarabun.php');
		$this->pdf->SetFont('THSarabun','',15);
		$this->pdf->Cell(0,10,iconv('UTF-8','TIS-620','      .............................................................................................................................................................................................'));
		$this->pdf->Ln(6);
		
		$this->pdf->AddFont('THSarabun','','THSarabun.php');
		$this->pdf->SetFont('THSarabun','',15);
		$this->pdf->Cell(0,10,iconv('UTF-8','TIS-620','      .............................................................................................................................................................................................'));
		$this->pdf->Ln(6);
		
		$this->pdf->AddFont('THSarabun','','THSarabun.php');
		$this->pdf->SetFont('THSarabun','',15);
		$this->pdf->Cell(0,10,iconv('UTF-8','TIS-620','      .............................................................................................................................................................................................'));
		$this->pdf->Ln(6);
		
		
		$this->pdf->AddFont('THSarabun','','THSarabun.php');
		$this->pdf->SetFont('THSarabun','',15);
		$this->pdf->Cell(0,10,iconv('UTF-8','TIS-620','ลงชื่อนิสิต.....................................................................         ลงชื่อ...................................................................อาจารย์ที่ปรึกษาหลัก'));
		$this->pdf->Ln(7);
		
		$this->pdf->AddFont('THSarabun','','THSarabun.php');
		$this->pdf->SetFont('THSarabun','',15);
		$this->pdf->Cell(0,10,iconv('UTF-8','TIS-620','            (....................................................................)                    (...........................................................)'));
		$this->pdf->Ln(7);
		
		$this->pdf->AddFont('THSarabun','','THSarabun.php');
		$this->pdf->SetFont('THSarabun','',15);
		$this->pdf->Cell(0,10,iconv('UTF-8','TIS-620','                                                                         ลงชื่อ...................................................................ประธานกรรมการ'));
		$this->pdf->Ln(7);
		
		$this->pdf->AddFont('THSarabun','','THSarabun.php');
		$this->pdf->SetFont('THSarabun','',15);
		$this->pdf->Cell(0,10,iconv('UTF-8','TIS-620','                                                                                     (...........................................................)'));
		$this->pdf->Ln(6);
		
		//กำหนดใช้ตัวอักษร THSarabun ขนาด 14 หน่วย
		$this->pdf->AddFont('THSarabun','','THSarabun.php');
		$this->pdf->SetFont('THSarabun','',14);

 
		//พิมพ์เลขหน้า ตรงมุมขวาล่าง
		$this->pdf->Text(25.4,280,iconv('UTF-8','TIS-620','_________________________________________________________________________________________________' ));
		$this->pdf->Text(25.4,286,iconv('UTF-8','TIS-620',' สำนักงานจัดการศึกษา คณะวิทยาการสารสนเทศ                                                                                          หน้า 3'));
		
		
		$this->pdf->Output( 'PDF/U03-2.pdf' , 'I' );
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
		$this->pdf->Text(100,15,iconv('UTF-8','TIS-620','                                                                                    วก. 03-2'));
		
		$this->pdf->Text(25.4,25,iconv('UTF-8','TIS-620','___________________________________________________________________________________________' ));
		
		$this->pdf->AddFont('THSarabun','b','THSarabun Bold.php');//หนา
		$this->pdf->SetFont('THSarabun','b',16);
		$this->pdf->Cell(30,10,iconv('UTF-8','TIS-620','        แบบบันทึกการสอบปากเปล่าและแบบแจ้งผลการสอบปากเปล่างานนิพนธ์/วิทยานิพนธ์/ดุษฎีนิพนธ์'));
		$this->pdf->Ln(13);
		
		$this->pdf->AddFont('THSarabun','b','THSarabun Bold.php');
		$this->pdf->SetFont('THSarabun','b',15);
		$this->pdf->Cell(0,10,iconv('UTF-8','TIS-620','เรียน'));
		$this->pdf->Ln(7);
		
		$this->pdf->AddFont('THSarabun','','THSarabun.php');
		$this->pdf->SetFont('THSarabun','',15);
		$this->pdf->Cell(0,-4,iconv('UTF-8','TIS-620','       คณบดีคณะวิทยาการสารสนเทศ'));
		$this->pdf->Ln(-1);
		
		$this->pdf->AddFont('THSarabun','','THSarabun.php');
		$this->pdf->SetFont('THSarabun','',15);
		$this->pdf->Cell(0,10,iconv('UTF-8','TIS-620','           ตามที่คณะกรรมการสอบงานนิพนธ์/วิทยานิพนธ์/ดุษฎีนิพนธ์'));
		$this->pdf->Ln(7);
		
		$this->pdf->AddFont('THSarabun','','THSarabun.php');
		$this->pdf->SetFont('THSarabun','',15);
		$this->pdf->Cell(0,10,iconv('UTF-8','TIS-620','นิสิต (นาย/นาง/นางสาว)................................................................รหัสประจำตัว...................................................................'));
		$this->pdf->Ln(6);
		
		$this->pdf->AddFont('THSarabun','','THSarabun.php');
		$this->pdf->SetFont('THSarabun','',15);
		$this->pdf->Cell(0,10,iconv('UTF-8','TIS-620','โทร.....................................................................Email.............................................................................................................'));
		$this->pdf->Ln(14);
		
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
		$this->pdf->Image('images/PDM/checkbox1.png',35,76,5,0,'');
		$this->pdf->Image('images/PDM/checkbox1.png',72,76,5,0,'');
		$this->pdf->Image('images/PDM/checkbox1.png',132,76,5,0,'');
		$this->pdf->Image('images/PDM/checkbox1.png',170,76,5,0,'');
		$this->pdf->Ln(6);
		
		$this->pdf->AddFont('THSarabun','','THSarabun.php');
		$this->pdf->SetFont('THSarabun','',15);
		$this->pdf->Cell(0,10,iconv('UTF-8','TIS-620','            ปร.ด.                          วิทยาการคอมพิวเตอร์                          ภาคพิเศษ                     แผน ข'));
		$this->pdf->Image('images/PDM/checkbox1.png',35,82.5,5,0,'');
		$this->pdf->Image('images/PDM/checkbox1.png',72,82.5,5,0,'');
		$this->pdf->Image('images/PDM/checkbox1.png',132,82.5,5,0,'');
		$this->pdf->Image('images/PDM/checkbox1.png',170,82.5,5,0,'');
		$this->pdf->Ln(12);
		
		$this->pdf->AddFont('THSarabun','b','THSarabun Bold.php');
		$this->pdf->SetFont('THSarabun','b',15);
		$this->pdf->Cell(0,10,iconv('UTF-8','TIS-620','สอบเค้าโครงฯ ผ่าน'));
		$this->pdf->Ln(0);
		
		$this->pdf->AddFont('THSarabun','','THSarabun.php');
		$this->pdf->SetFont('THSarabun','',15);
		$this->pdf->Cell(0,10,iconv('UTF-8','TIS-620','                         เมื่อวันที่......................................................'));
		$this->pdf->Ln(0);
		
		$this->pdf->AddFont('THSarabun','b','THSarabun Bold.php');
		$this->pdf->SetFont('THSarabun','b',15);
		$this->pdf->settextcolor(255,0,0);
		$this->pdf->Cell(0,10,iconv('UTF-8','TIS-620','                                                                        (เฉพาะนิสิตแผนการเรียน ก)'));
		$this->pdf->Ln(7);
		
		$this->pdf->AddFont('THSarabun','','THSarabun.php');
		$this->pdf->SetFont('THSarabun','',15);
		$this->pdf->settextcolor(0,0,0);
		$this->pdf->Cell(0,10,iconv('UTF-8','TIS-620','วันสอบงานนิพนธ์/วิทยานิพนธ์/ดุษฎีนิพนธ์   วันที่..............เดือน.......................................พ.ศ.............เวลา........................... '));
		$this->pdf->Ln(10);
		
		$this->pdf->AddFont('THSarabun','b','THSarabun Bold.php');
		$this->pdf->SetFont('THSarabun','b',15);
		$this->pdf->Cell(0,10,iconv('UTF-8','TIS-620','ผลสอบปรากฏว่า'));
		$this->pdf->Ln(6);
		
		$this->pdf->AddFont('THSarabun','','THSarabun.php');
		$this->pdf->SetFont('THSarabun','',15);
		$this->pdf->Cell(0,10,iconv('UTF-8','TIS-620','                         ผ่าน  ระดับ............S.............'));
		$this->pdf->Image('images/PDM/checkbox1.png',47,118,5,0,'');
		$this->pdf->Ln(6);
		
		$this->pdf->AddFont('THSarabun','','THSarabun.php');
		$this->pdf->SetFont('THSarabun','',15);
		$this->pdf->Cell(0,10,iconv('UTF-8','TIS-620','                         ผ่าน โดยมีเงื่อนไข โดยมีเงื่อนไขให้เวลา............วัน สำหรับการแก้ไข และครบกำหนดส่ง'));
		$this->pdf->Image('images/PDM/checkbox1.png',47,124,5,0,'');
		$this->pdf->Ln(7);
		
		$this->pdf->AddFont('THSarabun','','THSarabun.php');
		$this->pdf->SetFont('THSarabun','',15);
		$this->pdf->Cell(0,10,iconv('UTF-8','TIS-620','งานนิพนธ์/วิทยานิพนธ์/ดุษฎีนิพนธ์ฉบับสมบูรณ์ ในวันที่................เดือน....................................พ.ศ.......................................'));
		$this->pdf->Ln(7);
		
		$this->pdf->AddFont('THSarabun','','THSarabun.php');
		$this->pdf->SetFont('THSarabun','',15);
		$this->pdf->Cell(0,10,iconv('UTF-8','TIS-620','                         ไม่ผ่าน '));
		$this->pdf->Image('images/PDM/checkbox1.png',47,137.5,5,0,'');
		$this->pdf->Ln(8);
		
		$this->pdf->AddFont('THSarabun','','THSarabun.php');
		$this->pdf->SetFont('THSarabun','',15);
		$this->pdf->Cell(0,10,iconv('UTF-8','TIS-620','     ชื่อภาษาไทย (กรณีที่มีการเปลี่ยนแปลงชื่อวิทยานิพนธ์)......................................................................................................'));
		$this->pdf->Ln(6);
		
		$this->pdf->AddFont('THSarabun','','THSarabun.php');
		$this->pdf->SetFont('THSarabun','',15);
		$this->pdf->Cell(0,10,iconv('UTF-8','TIS-620','     .............................................................................................................................................................................................'));
		$this->pdf->Ln(6);
		
		$this->pdf->AddFont('THSarabun','','THSarabun.php');
		$this->pdf->SetFont('THSarabun','',15);
		$this->pdf->Cell(0,10,iconv('UTF-8','TIS-620','     ชื่อภาษาอังกฤษ (กรณีที่มีการเปลี่ยนแปลงชื่อวิทยานิพนธ์).................................................................................................'));
		$this->pdf->Ln(6);
		
		$this->pdf->AddFont('THSarabun','','THSarabun.php');
		$this->pdf->SetFont('THSarabun','',15);
		$this->pdf->Cell(0,10,iconv('UTF-8','TIS-620','     ..............................................................................................................................................................................................'));
		$this->pdf->Ln(10);
		
		$this->pdf->AddFont('THSarabun','','THSarabun.php');
		$this->pdf->SetFont('THSarabun','',15);
		$this->pdf->Cell(0,10,iconv('UTF-8','TIS-620','            จึงเรียนมาเพื่อโปรดทราบ'));
		$this->pdf->Ln(7);
		
		$this->pdf->AddFont('THSarabun','','THSarabun.php');
		$this->pdf->SetFont('THSarabun','',15);
		$this->pdf->Cell(0,10,iconv('UTF-8','TIS-620','ลงนาม...........................................................ประธานกรรมการ      ลงนาม...............................................................กรรมการ'));
		$this->pdf->Ln(7);
		
		$this->pdf->AddFont('THSarabun','','THSarabun.php');
		$this->pdf->SetFont('THSarabun','',15);
		$this->pdf->Cell(0,10,iconv('UTF-8','TIS-620','            (....................................................................)                            (.......................................................................)'));
		$this->pdf->Ln(7);
		
		$this->pdf->AddFont('THSarabun','','THSarabun.php');
		$this->pdf->SetFont('THSarabun','',15);
		$this->pdf->Cell(0,10,iconv('UTF-8','TIS-620','ลงนาม...........................................................กรรมการ                ลงนาม...............................................................กรรมการ'));
		$this->pdf->Ln(7);
		
		$this->pdf->AddFont('THSarabun','','THSarabun.php');
		$this->pdf->SetFont('THSarabun','',15);
		$this->pdf->Cell(0,10,iconv('UTF-8','TIS-620','            (....................................................................)                            (.......................................................................)'));
		$this->pdf->Ln(7);
		
		$this->pdf->AddFont('THSarabun','','THSarabun.php');
		$this->pdf->SetFont('THSarabun','',15);
		$this->pdf->Cell(0,10,iconv('UTF-8','TIS-620','ลงนาม...........................................................กรรมการ                ลงนาม...............................................................กรรมการ'));
		$this->pdf->Ln(7);
		
		$this->pdf->AddFont('THSarabun','','THSarabun.php');
		$this->pdf->SetFont('THSarabun','',15);
		$this->pdf->Cell(0,10,iconv('UTF-8','TIS-620','            (....................................................................)                            (.......................................................................)'));
		$this->pdf->Ln(7);
		
		
		$this->pdf->AddFont('THSarabun','','THSarabun.php');
		$this->pdf->SetFont('THSarabun','',15);
		$this->pdf->Cell(0,10,iconv('UTF-8','TIS-620','ลงนาม...........................................................                            ลงนาม...............................................................'));
		$this->pdf->Ln(7);
		
		$this->pdf->AddFont('THSarabun','','THSarabun.php');
		$this->pdf->SetFont('THSarabun','',15);
		$this->pdf->Cell(0,10,iconv('UTF-8','TIS-620','            (....................................................................)                            (.......................................................................)'));
		$this->pdf->Ln(6);
		
		$this->pdf->AddFont('THSarabun','','THSarabun.php');
		$this->pdf->SetFont('THSarabun','',15);
		$this->pdf->Cell(0,10,iconv('UTF-8','TIS-620','                            ประธานสาขาวิชา                                                    คณบดีคณะวิทยาการสารสนเทศ'));
		$this->pdf->Ln(15);
		
		$this->pdf->AddFont('THSarabun','b','THSarabun Bold.php');
		$this->pdf->SetFont('THSarabun','b',15);
		$this->pdf->settextcolor(255,0,0);
		$this->pdf->Cell(0,10,iconv('UTF-8','TIS-620','หมายเหตุ นิสิตต้องส่งบันทึกนี้ที่ สานักงานจัดการศึกษา คณะวิทยาการสารสนเทศ ภายใน 5 วันทาการหลังการ'));
		$this->pdf->Ln(6);
		
		$this->pdf->AddFont('THSarabun','b','THSarabun Bold.php');
		$this->pdf->SetFont('THSarabun','b',15);
		$this->pdf->Cell(0,10,iconv('UTF-8','TIS-620','             นำเสนองานนิพนธ์/วิทยานิพนธ์/ดุษฎีนิพนธ์'));
		$this->pdf->Ln(10);
		
		//กำหนดใช้ตัวอักษร THSarabun ขนาด 14 หน่วย
		$this->pdf->AddFont('THSarabun','','THSarabun.php');
		$this->pdf->SetFont('THSarabun','',14);
		$this->pdf->settextcolor(0,0,0);
 
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
		$this->pdf->Text(100,15,iconv('UTF-8','TIS-620','                                                                                    วก. 03-2'));
		
		$this->pdf->Text(25.4,25,iconv('UTF-8','TIS-620','___________________________________________________________________________________________' ));
		
		$this->pdf->AddFont('THSarabun','b','THSarabun Bold.php');//หนา
		$this->pdf->SetFont('THSarabun','b',16);
		$this->pdf->Cell(30,10,iconv('UTF-8','TIS-620','                                 รายละเอียดแนบผลการสอบกรณีผ่านโดยต้องแก้ไข'));
		$this->pdf->Ln(12);
		
		$this->pdf->AddFont('THSarabun','','THSarabun.php');
		$this->pdf->SetFont('THSarabun','',15);
		$this->pdf->Cell(0,10,iconv('UTF-8','TIS-620','            ผ่านโดยมีเงื่อนไขว่าต้องปรับแก้ตามมติของคณะกรรมการสอบฯ (ระบุส่วนที่ต้องปรับแก้)'));
		$this->pdf->Image('images/PDM/checkbox2.png',33,39.5,5,0,'');
		$this->pdf->Ln(6);
		
		$this->pdf->AddFont('THSarabun','','THSarabun.php');
		$this->pdf->SetFont('THSarabun','',15);
		$this->pdf->Cell(0,10,iconv('UTF-8','TIS-620','      .............................................................................................................................................................................................'));
		$this->pdf->Ln(6);
		
		$this->pdf->AddFont('THSarabun','','THSarabun.php');
		$this->pdf->SetFont('THSarabun','',15);
		$this->pdf->Cell(0,10,iconv('UTF-8','TIS-620','      .............................................................................................................................................................................................'));
		$this->pdf->Ln(6);
		
		$this->pdf->AddFont('THSarabun','','THSarabun.php');
		$this->pdf->SetFont('THSarabun','',15);
		$this->pdf->Cell(0,10,iconv('UTF-8','TIS-620','      .............................................................................................................................................................................................'));
		$this->pdf->Ln(6);
		
		$this->pdf->AddFont('THSarabun','','THSarabun.php');
		$this->pdf->SetFont('THSarabun','',15);
		$this->pdf->Cell(0,10,iconv('UTF-8','TIS-620','      .............................................................................................................................................................................................'));
		$this->pdf->Ln(6);
		
		$this->pdf->AddFont('THSarabun','','THSarabun.php');
		$this->pdf->SetFont('THSarabun','',15);
		$this->pdf->Cell(0,10,iconv('UTF-8','TIS-620','      .............................................................................................................................................................................................'));
		$this->pdf->Ln(6);
		
		$this->pdf->AddFont('THSarabun','','THSarabun.php');
		$this->pdf->SetFont('THSarabun','',15);
		$this->pdf->Cell(0,10,iconv('UTF-8','TIS-620','      .............................................................................................................................................................................................'));
		$this->pdf->Ln(6);
		
		$this->pdf->AddFont('THSarabun','','THSarabun.php');
		$this->pdf->SetFont('THSarabun','',15);
		$this->pdf->Cell(0,10,iconv('UTF-8','TIS-620','      .............................................................................................................................................................................................'));
		$this->pdf->Ln(6);
		
		$this->pdf->AddFont('THSarabun','','THSarabun.php');
		$this->pdf->SetFont('THSarabun','',15);
		$this->pdf->Cell(0,10,iconv('UTF-8','TIS-620','      .............................................................................................................................................................................................'));
		$this->pdf->Ln(6);
		
		$this->pdf->AddFont('THSarabun','','THSarabun.php');
		$this->pdf->SetFont('THSarabun','',15);
		$this->pdf->Cell(0,10,iconv('UTF-8','TIS-620','      .............................................................................................................................................................................................'));
		$this->pdf->Ln(6);
		
		$this->pdf->AddFont('THSarabun','','THSarabun.php');
		$this->pdf->SetFont('THSarabun','',15);
		$this->pdf->Cell(0,10,iconv('UTF-8','TIS-620','      .............................................................................................................................................................................................'));
		$this->pdf->Ln(6);
		
		$this->pdf->AddFont('THSarabun','','THSarabun.php');
		$this->pdf->SetFont('THSarabun','',15);
		$this->pdf->Cell(0,10,iconv('UTF-8','TIS-620','      .............................................................................................................................................................................................'));
		$this->pdf->Ln(6);
		
		$this->pdf->AddFont('THSarabun','','THSarabun.php');
		$this->pdf->SetFont('THSarabun','',15);
		$this->pdf->Cell(0,10,iconv('UTF-8','TIS-620','      .............................................................................................................................................................................................'));
		$this->pdf->Ln(6);
		
		$this->pdf->AddFont('THSarabun','','THSarabun.php');
		$this->pdf->SetFont('THSarabun','',15);
		$this->pdf->Cell(0,10,iconv('UTF-8','TIS-620','      .............................................................................................................................................................................................'));
		$this->pdf->Ln(6);
		
		$this->pdf->AddFont('THSarabun','','THSarabun.php');
		$this->pdf->SetFont('THSarabun','',15);
		$this->pdf->Cell(0,10,iconv('UTF-8','TIS-620','      .............................................................................................................................................................................................'));
		$this->pdf->Ln(6);
		
		$this->pdf->AddFont('THSarabun','','THSarabun.php');
		$this->pdf->SetFont('THSarabun','',15);
		$this->pdf->Cell(0,10,iconv('UTF-8','TIS-620','      .............................................................................................................................................................................................'));
		$this->pdf->Ln(6);
		
		$this->pdf->AddFont('THSarabun','','THSarabun.php');
		$this->pdf->SetFont('THSarabun','',15);
		$this->pdf->Cell(0,10,iconv('UTF-8','TIS-620','      .............................................................................................................................................................................................'));
		$this->pdf->Ln(6);
		
		$this->pdf->AddFont('THSarabun','','THSarabun.php');
		$this->pdf->SetFont('THSarabun','',15);
		$this->pdf->Cell(0,10,iconv('UTF-8','TIS-620','      .............................................................................................................................................................................................'));
		$this->pdf->Ln(6);
		
		$this->pdf->AddFont('THSarabun','','THSarabun.php');
		$this->pdf->SetFont('THSarabun','',15);
		$this->pdf->Cell(0,10,iconv('UTF-8','TIS-620','      .............................................................................................................................................................................................'));
		$this->pdf->Ln(6);
		
		$this->pdf->AddFont('THSarabun','','THSarabun.php');
		$this->pdf->SetFont('THSarabun','',15);
		$this->pdf->Cell(0,10,iconv('UTF-8','TIS-620','      .............................................................................................................................................................................................'));
		$this->pdf->Ln(6);
		
		$this->pdf->AddFont('THSarabun','','THSarabun.php');
		$this->pdf->SetFont('THSarabun','',15);
		$this->pdf->Cell(0,10,iconv('UTF-8','TIS-620','เหตุผลที่แก้ไข'));
		$this->pdf->Ln(6);
		
		$this->pdf->AddFont('THSarabun','','THSarabun.php');
		$this->pdf->SetFont('THSarabun','',15);
		$this->pdf->Cell(0,10,iconv('UTF-8','TIS-620','      .............................................................................................................................................................................................'));
		$this->pdf->Ln(6);
		
		$this->pdf->AddFont('THSarabun','','THSarabun.php');
		$this->pdf->SetFont('THSarabun','',15);
		$this->pdf->Cell(0,10,iconv('UTF-8','TIS-620','      .............................................................................................................................................................................................'));
		$this->pdf->Ln(6);
		
		$this->pdf->AddFont('THSarabun','','THSarabun.php');
		$this->pdf->SetFont('THSarabun','',15);
		$this->pdf->Cell(0,10,iconv('UTF-8','TIS-620','      .............................................................................................................................................................................................'));
		$this->pdf->Ln(6);
		
		$this->pdf->AddFont('THSarabun','','THSarabun.php');
		$this->pdf->SetFont('THSarabun','',15);
		$this->pdf->Cell(0,10,iconv('UTF-8','TIS-620','      .............................................................................................................................................................................................'));
		$this->pdf->Ln(6);
		
		$this->pdf->AddFont('THSarabun','','THSarabun.php');
		$this->pdf->SetFont('THSarabun','',15);
		$this->pdf->Cell(0,10,iconv('UTF-8','TIS-620','      .............................................................................................................................................................................................'));
		$this->pdf->Ln(6);
		
		$this->pdf->AddFont('THSarabun','','THSarabun.php');
		$this->pdf->SetFont('THSarabun','',15);
		$this->pdf->Cell(0,10,iconv('UTF-8','TIS-620','      .............................................................................................................................................................................................'));
		$this->pdf->Ln(6);
		
		$this->pdf->AddFont('THSarabun','','THSarabun.php');
		$this->pdf->SetFont('THSarabun','',15);
		$this->pdf->Cell(0,10,iconv('UTF-8','TIS-620','      .............................................................................................................................................................................................'));
		$this->pdf->Ln(6);
		
		$this->pdf->AddFont('THSarabun','','THSarabun.php');
		$this->pdf->SetFont('THSarabun','',15);
		$this->pdf->Cell(0,10,iconv('UTF-8','TIS-620','      .............................................................................................................................................................................................'));
		$this->pdf->Ln(6);
		
		$this->pdf->AddFont('THSarabun','','THSarabun.php');
		$this->pdf->SetFont('THSarabun','',15);
		$this->pdf->Cell(0,10,iconv('UTF-8','TIS-620','ลงชื่อนิสิต.....................................................................         ลงชื่อ...................................................................อาจารย์ที่ปรึกษาหลัก'));
		$this->pdf->Ln(7);
		
		$this->pdf->AddFont('THSarabun','','THSarabun.php');
		$this->pdf->SetFont('THSarabun','',15);
		$this->pdf->Cell(0,10,iconv('UTF-8','TIS-620','            (....................................................................)                    (...........................................................)'));
		$this->pdf->Ln(7);
		
		$this->pdf->AddFont('THSarabun','','THSarabun.php');
		$this->pdf->SetFont('THSarabun','',15);
		$this->pdf->Cell(0,10,iconv('UTF-8','TIS-620','                                                                         ลงชื่อ...................................................................ประธานกรรมการ'));
		$this->pdf->Ln(7);
		
		$this->pdf->AddFont('THSarabun','','THSarabun.php');
		$this->pdf->SetFont('THSarabun','',15);
		$this->pdf->Cell(0,10,iconv('UTF-8','TIS-620','                                                                                     (...........................................................)'));
		$this->pdf->Ln(6);
		
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
		$this->pdf->Text(100,15,iconv('UTF-8','TIS-620','ขอให้พิมพ์หรือเขียนด้วยตัวบรรจงและภาษาอังกฤษให้ใช้ตัวพิมพ์ใหญ่ ' ));
		
		$this->pdf->AddFont('THSarabun','b','THSarabun Bold.php');
		$this->pdf->SetFont('THSarabun','b',14);
		$this->pdf->Text(100,15,iconv('UTF-8','TIS-620','                                                                                    วก. 03-2'));
		
		$this->pdf->Text(25.4,25,iconv('UTF-8','TIS-620','___________________________________________________________________________________________' ));
		
		$this->pdf->AddFont('THSarabun','b','THSarabun Bold.php');//หนา
		$this->pdf->SetFont('THSarabun','b',16);
		$this->pdf->Cell(30,10,iconv('UTF-8','TIS-620','                                       รายละเอียดแนบผลการสอบกรณีไม่ผ่าน'));
		$this->pdf->Ln(12);
		
		$this->pdf->AddFont('THSarabun','','THSarabun.php');
		$this->pdf->SetFont('THSarabun','',15);
		$this->pdf->Cell(0,10,iconv('UTF-8','TIS-620','            ไม่ผ่านโดยมีเหตุผลโดยสรุปเป็นประเด็นดังนี้'));
		$this->pdf->Image('images/PDM/checkbox2.png',33,39.5,5,0,'');
		$this->pdf->Ln(6);
		
		$this->pdf->AddFont('THSarabun','','THSarabun.php');
		$this->pdf->SetFont('THSarabun','',15);
		$this->pdf->Cell(0,10,iconv('UTF-8','TIS-620','      .............................................................................................................................................................................................'));
		$this->pdf->Ln(6);
		
		$this->pdf->AddFont('THSarabun','','THSarabun.php');
		$this->pdf->SetFont('THSarabun','',15);
		$this->pdf->Cell(0,10,iconv('UTF-8','TIS-620','      .............................................................................................................................................................................................'));
		$this->pdf->Ln(6);
		
		$this->pdf->AddFont('THSarabun','','THSarabun.php');
		$this->pdf->SetFont('THSarabun','',15);
		$this->pdf->Cell(0,10,iconv('UTF-8','TIS-620','      .............................................................................................................................................................................................'));
		$this->pdf->Ln(6);
		
		$this->pdf->AddFont('THSarabun','','THSarabun.php');
		$this->pdf->SetFont('THSarabun','',15);
		$this->pdf->Cell(0,10,iconv('UTF-8','TIS-620','      .............................................................................................................................................................................................'));
		$this->pdf->Ln(6);
		
		$this->pdf->AddFont('THSarabun','','THSarabun.php');
		$this->pdf->SetFont('THSarabun','',15);
		$this->pdf->Cell(0,10,iconv('UTF-8','TIS-620','      .............................................................................................................................................................................................'));
		$this->pdf->Ln(6);
		
		$this->pdf->AddFont('THSarabun','','THSarabun.php');
		$this->pdf->SetFont('THSarabun','',15);
		$this->pdf->Cell(0,10,iconv('UTF-8','TIS-620','      .............................................................................................................................................................................................'));
		$this->pdf->Ln(6);
		
		$this->pdf->AddFont('THSarabun','','THSarabun.php');
		$this->pdf->SetFont('THSarabun','',15);
		$this->pdf->Cell(0,10,iconv('UTF-8','TIS-620','      .............................................................................................................................................................................................'));
		$this->pdf->Ln(6);
		
		$this->pdf->AddFont('THSarabun','','THSarabun.php');
		$this->pdf->SetFont('THSarabun','',15);
		$this->pdf->Cell(0,10,iconv('UTF-8','TIS-620','      .............................................................................................................................................................................................'));
		$this->pdf->Ln(6);
		
		$this->pdf->AddFont('THSarabun','','THSarabun.php');
		$this->pdf->SetFont('THSarabun','',15);
		$this->pdf->Cell(0,10,iconv('UTF-8','TIS-620','      .............................................................................................................................................................................................'));
		$this->pdf->Ln(6);
		
		$this->pdf->AddFont('THSarabun','','THSarabun.php');
		$this->pdf->SetFont('THSarabun','',15);
		$this->pdf->Cell(0,10,iconv('UTF-8','TIS-620','      .............................................................................................................................................................................................'));
		$this->pdf->Ln(6);
		
		$this->pdf->AddFont('THSarabun','','THSarabun.php');
		$this->pdf->SetFont('THSarabun','',15);
		$this->pdf->Cell(0,10,iconv('UTF-8','TIS-620','      .............................................................................................................................................................................................'));
		$this->pdf->Ln(6);
		
		$this->pdf->AddFont('THSarabun','','THSarabun.php');
		$this->pdf->SetFont('THSarabun','',15);
		$this->pdf->Cell(0,10,iconv('UTF-8','TIS-620','      .............................................................................................................................................................................................'));
		$this->pdf->Ln(6);
		
		$this->pdf->AddFont('THSarabun','','THSarabun.php');
		$this->pdf->SetFont('THSarabun','',15);
		$this->pdf->Cell(0,10,iconv('UTF-8','TIS-620','      .............................................................................................................................................................................................'));
		$this->pdf->Ln(6);
		
		$this->pdf->AddFont('THSarabun','','THSarabun.php');
		$this->pdf->SetFont('THSarabun','',15);
		$this->pdf->Cell(0,10,iconv('UTF-8','TIS-620','      .............................................................................................................................................................................................'));
		$this->pdf->Ln(6);
		
		$this->pdf->AddFont('THSarabun','','THSarabun.php');
		$this->pdf->SetFont('THSarabun','',15);
		$this->pdf->Cell(0,10,iconv('UTF-8','TIS-620','      .............................................................................................................................................................................................'));
		$this->pdf->Ln(6);
		
		$this->pdf->AddFont('THSarabun','','THSarabun.php');
		$this->pdf->SetFont('THSarabun','',15);
		$this->pdf->Cell(0,10,iconv('UTF-8','TIS-620','      .............................................................................................................................................................................................'));
		$this->pdf->Ln(6);
		
		$this->pdf->AddFont('THSarabun','','THSarabun.php');
		$this->pdf->SetFont('THSarabun','',15);
		$this->pdf->Cell(0,10,iconv('UTF-8','TIS-620','      .............................................................................................................................................................................................'));
		$this->pdf->Ln(6);
		
		$this->pdf->AddFont('THSarabun','','THSarabun.php');
		$this->pdf->SetFont('THSarabun','',15);
		$this->pdf->Cell(0,10,iconv('UTF-8','TIS-620','      .............................................................................................................................................................................................'));
		$this->pdf->Ln(6);
		
		$this->pdf->AddFont('THSarabun','','THSarabun.php');
		$this->pdf->SetFont('THSarabun','',15);
		$this->pdf->Cell(0,10,iconv('UTF-8','TIS-620','      .............................................................................................................................................................................................'));
		$this->pdf->Ln(6);
		
		$this->pdf->AddFont('THSarabun','','THSarabun.php');
		$this->pdf->SetFont('THSarabun','',15);
		$this->pdf->Cell(0,10,iconv('UTF-8','TIS-620','เหตุผลที่แก้ไข'));
		$this->pdf->Ln(6);
		
		$this->pdf->AddFont('THSarabun','','THSarabun.php');
		$this->pdf->SetFont('THSarabun','',15);
		$this->pdf->Cell(0,10,iconv('UTF-8','TIS-620','      .............................................................................................................................................................................................'));
		$this->pdf->Ln(6);
		
		$this->pdf->AddFont('THSarabun','','THSarabun.php');
		$this->pdf->SetFont('THSarabun','',15);
		$this->pdf->Cell(0,10,iconv('UTF-8','TIS-620','      .............................................................................................................................................................................................'));
		$this->pdf->Ln(6);
		
		$this->pdf->AddFont('THSarabun','','THSarabun.php');
		$this->pdf->SetFont('THSarabun','',15);
		$this->pdf->Cell(0,10,iconv('UTF-8','TIS-620','      .............................................................................................................................................................................................'));
		$this->pdf->Ln(6);
		
		$this->pdf->AddFont('THSarabun','','THSarabun.php');
		$this->pdf->SetFont('THSarabun','',15);
		$this->pdf->Cell(0,10,iconv('UTF-8','TIS-620','      .............................................................................................................................................................................................'));
		$this->pdf->Ln(6);
		
		$this->pdf->AddFont('THSarabun','','THSarabun.php');
		$this->pdf->SetFont('THSarabun','',15);
		$this->pdf->Cell(0,10,iconv('UTF-8','TIS-620','      .............................................................................................................................................................................................'));
		$this->pdf->Ln(6);
		
		$this->pdf->AddFont('THSarabun','','THSarabun.php');
		$this->pdf->SetFont('THSarabun','',15);
		$this->pdf->Cell(0,10,iconv('UTF-8','TIS-620','      .............................................................................................................................................................................................'));
		$this->pdf->Ln(6);
		
		$this->pdf->AddFont('THSarabun','','THSarabun.php');
		$this->pdf->SetFont('THSarabun','',15);
		$this->pdf->Cell(0,10,iconv('UTF-8','TIS-620','      .............................................................................................................................................................................................'));
		$this->pdf->Ln(6);
		
		
		$this->pdf->AddFont('THSarabun','','THSarabun.php');
		$this->pdf->SetFont('THSarabun','',15);
		$this->pdf->Cell(0,10,iconv('UTF-8','TIS-620','ลงชื่อนิสิต.....................................................................         ลงชื่อ...................................................................อาจารย์ที่ปรึกษาหลัก'));
		$this->pdf->Ln(7);
		
		$this->pdf->AddFont('THSarabun','','THSarabun.php');
		$this->pdf->SetFont('THSarabun','',15);
		$this->pdf->Cell(0,10,iconv('UTF-8','TIS-620','            (....................................................................)                    (...........................................................)'));
		$this->pdf->Ln(7);
		
		$this->pdf->AddFont('THSarabun','','THSarabun.php');
		$this->pdf->SetFont('THSarabun','',15);
		$this->pdf->Cell(0,10,iconv('UTF-8','TIS-620','                                                                         ลงชื่อ...................................................................ประธานกรรมการ'));
		$this->pdf->Ln(7);
		
		$this->pdf->AddFont('THSarabun','','THSarabun.php');
		$this->pdf->SetFont('THSarabun','',15);
		$this->pdf->Cell(0,10,iconv('UTF-8','TIS-620','                                                                                     (...........................................................)'));
		$this->pdf->Ln(6);
		
		//กำหนดใช้ตัวอักษร THSarabun ขนาด 14 หน่วย
		$this->pdf->AddFont('THSarabun','','THSarabun.php');
		$this->pdf->SetFont('THSarabun','',14);

 
		//พิมพ์เลขหน้า ตรงมุมขวาล่าง
		$this->pdf->Text(25.4,280,iconv('UTF-8','TIS-620','_________________________________________________________________________________________________' ));
		$this->pdf->Text(25.4,286,iconv('UTF-8','TIS-620',' สำนักงานจัดการศึกษา คณะวิทยาการสารสนเทศ                                                                                          หน้า 3'));
		
		
		$this->pdf->Output( 'PDF/U03-2.pdf' , 'D' );
	}
}

?>	