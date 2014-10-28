<?php
    $this->Pdf->core->addPage('', 'A4');
    $this->Pdf->core->setFont('helvetica', '', 12);
    $this->Pdf->core->cell(30, 0, 'CUIT: '.' '.h($empresa['Empresa']['EmpresaCUIT']).'<h1> hola </h1>');
    $this->Pdf->core->Output('nuevo.pdf', 'I');
    exit();
?>