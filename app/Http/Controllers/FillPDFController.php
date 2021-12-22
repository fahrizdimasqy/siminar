<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use setasign\Fpdi\Fpdi;

class FillPDFController extends Controller
{
    //
    public function index()
    {
        # code...
        return view('cetak_sertif');
    }
    public function process(Request $request)
    {
        # code...
        $nama = $request->post('nama');
        $outputfile = public_path().'dcc.pdf';
        $this->fillPDF(public_path().'/master/dcc.pdf', $outputfile, $nama);
        return response()->file($outputfile);
    }

    public function fillPDF($file, $outputfile, $nama)
    {
        # code...
        $fpdi = new FPDI;
        $fpdi->setSourceFile($file);
        $template = $fpdi->importPage(1);
        $size = $fpdi->getTemplateSize($template);
        $fpdi->addPage($size['orientation'],array($size['width'], $size['height']));
        $fpdi->useTemplate($template);
        $top = 455;
        $right = 718;
        $a = -76;
        $name = $nama;
        $fpdi->SetFont('helvetica', "BU",57);
        $fpdi->SetTextColor(25,26,25);
        $fpdi->Cell($right,$top,$name, 0,1,"C");
        return $fpdi->Output($outputfile, 'F');
    }
}
