<?php

namespace Tests\Unit\Services\Pdf;

use App\Constants\PdfTypes;
use App\Services\Pdf\FullPdf;
use App\Structs\PdfData;

class FullPdfTest extends AbstractPdfTestCase
{
    private const FILENAME_PATTERN = 'full_%d.pdf';
    private const HTML_TEMPLATE = 'pdf.full';

    /**
     * @return string
     */
    protected function getFilename(): string
    {
        return sprintf(self::FILENAME_PATTERN, self::USER_ID);
    }

    /**
     * @return string
     */
    protected function getTemplate(): string
    {
        return self::HTML_TEMPLATE;
    }

    /**
     * @return PdfData
     */
    protected function getPdfData(): PdfData
    {
        $pdfDataArray = $this->getPdfDataArray();
        $pdfData = $pdfDataArray[$this->getPdfType()];
        return $pdfData;
    }

    /**
     * @return string
     */
    protected function getPdfClass(): string
    {
        return FullPdf::class;
    }

    /**
     * @return int
     */
    protected function getPdfType(): int
    {
        return PdfTypes::FULL;
    }
}
