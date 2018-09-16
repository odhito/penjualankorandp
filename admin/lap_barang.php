<?php
include 'config.php';
require('../assets/pdf/fpdf.php');

$pdf = new FPDF("L","cm","A4");

$pdf->SetMargins(2,1,1);
$pdf->AliasNbPages();
$pdf->AddPage();
$pdf->SetFont('Times','B',11);
$pdf->Image('../logo/dumaipos.png',1,1,2,2);
$pdf->SetX(4);            
$pdf->MultiCell(19.5,0.5,'Laporan Penjualan Koran',0,'L');
$pdf->SetX(4);
$pdf->MultiCell(19.5,0.5,'Telpon : 0765-34172',0,'L');    
$pdf->SetFont('Arial','B',10);
$pdf->SetX(4);
$pdf->MultiCell(19.5,0.5,'JL. Dock Yard NO. 100',0,'L');
$pdf->SetX(4);
$pdf->MultiCell(19.5,0.5,'website : www.dumaipos.co email : dumaipos123@yahoo.com',0,'L');
$pdf->Line(1,3.1,28.5,3.1);
$pdf->SetLineWidth(0.1);      
$pdf->Line(1,3.2,28.5,3.2);   
$pdf->SetLineWidth(0);
$pdf->ln(1);
$pdf->SetFont('Arial','B',14);
$pdf->Cell(25.5,0.7,"Laporan Data Koran",0,10,'C');
$pdf->ln(1);
$pdf->SetFont('Arial','B',10);
$pdf->Cell(5,0.7,"Di cetak pada : ".date("D-d/m/Y"),0,0,'C');
$pdf->ln(1);
$pdf->SetFont('Arial','B',10);
$pdf->Cell(1, 0.8, 'NO', 1, 0, 'C');
$pdf->Cell(7, 0.8, 'Nama Koran', 1, 0, 'C');
$pdf->Cell(3, 0.8, 'Jenis', 1, 0, 'C');
$pdf->Cell(4, 0.8, 'Pemesan', 1, 0, 'C');
$pdf->Cell(4.5, 0.8, 'Modal Koran', 1, 0, 'C');
$pdf->Cell(4.5, 0.8, 'Harga Jual', 1, 0, 'C');
$pdf->Cell(2, 0.8, 'Jumlah', 1, 1, 'C');
$pdf->SetFont('Arial','',10);
$no=1;
$query=mysql_query("select * from barang");
while($lihat=mysql_fetch_array($query)){
	$pdf->Cell(1, 0.8, $no , 1, 0, 'C');
	$pdf->Cell(7, 0.8, $lihat['nama'],1, 0, 'C');
	$pdf->Cell(3, 0.8, $lihat['jenis'], 1, 0,'C');
	$pdf->Cell(4, 0.8, $lihat['suplier'],1, 0, 'C');
	$pdf->Cell(4.5, 0.8, $lihat['modal'], 1, 0,'C');
	$pdf->Cell(4.5, 0.8, $lihat['harga'],1, 0, 'C');
	$pdf->Cell(2, 0.8, $lihat['jumlah'], 1, 1,'C');

	$no++;
}

$pdf->Output("laporan_buku.pdf","I");

?>

