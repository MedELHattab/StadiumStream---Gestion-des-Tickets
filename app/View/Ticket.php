<?php
require_once('C:\laragon\www\StadiumStream---Gestion-des-Tickets\fpdf186\fpdf.php');


// require('fpdf186/fpdf.php');
// include('C:\Users\Youcode\Desktop\LARAGON\www\BookingTickets\core\QR\phpqrcode\phpqrcode\qrlib.php'); // Include the QR Code library

    class Pdf extends FPDF {
    

        function Header(){


            // $this->Image("../../public/assets/images/KK.jpg",0,0, 5,5); 
            // $this->Image("C:\laragon\www\StadiumStream---Gestion-des-Tickets\public\assets\images\41_2022-637773374533312660-331.jpg", 0, 0, $this -> GetPageWidth(),$this -> GetPageHeight());

            // $this->Image("C:\laragon\www\StadiumStream---Gestion-des-Tickets\public\assets\images\41_2022-637773374533312660-331.jpg", 2, 2, 15, 10); 
            // $this->SetY(8);
       
            // $this->Image("C:\laragon\www\StadiumStream---Gestion-des-Tickets\public\assets\images\41_2022-637773374533312660-331.jpg", 160, 15, 70, 70);
            $this -> Image("C:\laragon\www\StadiumStream---Gestion-des-Tickets\public\assets\images\KK.jpg",0,0 ,$this -> GetPageWidth(),$this -> GetPageHeight());
            $this->SetFont('Arial', '', 30);
            
            $this->SetXY(10, 10);
            $this->Cell(0, 8, 'Exciting moments', 0, 1, 'C');
            $this->SetFont('Arial', '', 30);

            $this->Cell(0, 8, 'Await  you', 0, 1, 'C');

            $this->SetFont('Arial', 'B', 10);
            $this->SetTextColor(255, 255, 255);

            $this -> SetFont('Arial','',15);
            $this->SetXY(98, 27);
            $this->Cell(0, 10, 'TICKET', 0, 1, 'G');
        
            $this->SetFont('Arial', '', 10);

            $this->SetXY(88, 34);
            $this->Cell(0, 8, 'Date: January 1, 2024', 0, 1, 'G');
        
            $this->SetXY(88, 40);
            
            $this->Cell(0, 8, 'Time : 00:00', 0, 1, 'G');
        
            $this->SetXY(88, 46);
            $this->Cell(0, 8, 'Team A vs Team B', 0, 1, 'G');
            
            $this->SetXY(88, 52);
            $this->Cell(0, 8, 'Venue : Stadium XYZ', 0, 1, 'G');

            $this->SetXY(88, 58);
            $this->Cell(0, 8, 'Ticket Number: 123456789', 0, 1, 'G');

            $this->SetXY(88, 64);
            $this->Cell(0, 8, 'Price : 25$', 0, 1, 'G');
          


        // Generate QR code
        // $lien = 'https://www.facebook.com';
        // // $qrCodeImagePath = 'image-qrcode.png';
        // // QRcode::png($lien, $qrCodeImagePath);

        // // Add QR code image to the PDF
        // $this->Image($qrCodeImagePath, 6, 55, 20, 20); // Adjust coordinates and size as needed
        }
    }

    $pdf = new Pdf();
$pdf->SetAutoPageBreak(true, 0);
$pdf->AddPage('L', array($pdf->GetPageWidth(), 80));
// $pdf->SetFont('Arial', '', 12);
$pdf->Output();