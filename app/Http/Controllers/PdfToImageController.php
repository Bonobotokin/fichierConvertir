<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Imagick;

class PdfToImageController extends Controller
{
    public function convertToImage(Request $request)
    {
        $request->validate(['pdf_file' => 'required|file']);
        // Get the PDF file
        $pdfFile = $request->file('pdf_file');

        // Create an Imagick object
        $imagick = new Imagick();

        // Read the PDF file
        $imagick->readImage($pdfFile->getRealPath());

        // Convert PDF pages to images
        $imagick->setImageFormat('pdf');

        // Save each page as an image
        foreach ($imagick as $pageNumber => $page) {
            $page->writeImage(public_path("pdf_images/page_{$pageNumber}.pdf"));
        }

        // Clear Imagick resources
        $imagick->clear();
        $imagick->destroy();

        return "PDF pages converted to images successfully!";
    }
}
