<?php
$bgImagePath = FCPATH . 'assets/assets/images/prescription-bg.jpeg';

$bgImage = '';

if (file_exists($bgImagePath)) {
    $bgImage = 'data:image/jpeg;base64,' . base64_encode(
        file_get_contents($bgImagePath)
    );
}
?>
<!DOCTYPE html>
<html>

<head>

<meta charset="UTF-8">

<title>Prescription</title>

<style>

@page {
    size: A5 portrait;
    margin: 10mm;
}

* {
    box-sizing: border-box;
}

body {
    margin: 0;
    padding: 0;
    font-family: DejaVu Sans, sans-serif;
    color: #222;
    font-size: 10px;
}



.pdf-background {
    position: fixed;
    top: 0; 
    left: 0;
    width: 100%;
    height: 100%;
    z-index: -1;
    opacity: 0.12;
}
/* =========================================================
   HEADER
========================================================= */

.clinic-header {
    text-align: center;
    border-bottom: 1px solid #777;
    padding-bottom: 8px;
    margin-bottom: 8px;
}

.clinic-name {
    font-size: 18px;
    font-weight: bold;
    color: #087ca0;
    margin-bottom: 3px;
}

.clinic-subtitle {
    font-size: 9px;
    color: #555;
}

.doctor-section {
    width: 100%;
    margin-bottom: 8px;
}

.doctor-left {
    width: 48%;
    display: inline-block;
    vertical-align: top;
}

.doctor-right {
    width: 48%;
    display: inline-block;
    vertical-align: top;
    text-align: right;
}

.doctor-name {
    font-size: 11px;
    font-weight: bold;
}

.doctor-details {
    font-size: 8px;
    line-height: 1.5;
    color: #555;
}


/* =========================================================
   PATIENT INFORMATION
========================================================= */

.patient-box {
    border-top: 1px solid #777;
    border-bottom: 1px solid #777;
    padding: 6px 0;
    margin-bottom: 10px;
}

.patient-row {
    width: 100%;
    margin-bottom: 4px;
}

.patient-col {
    width: 48%;
    display: inline-block;
    vertical-align: top;
}

.label {
    font-weight: bold;
}

.value {
    color: #222;
}


/* =========================================================
   DIAGNOSIS
========================================================= */

.diagnosis-box {
    margin-bottom: 10px;
}

.diagnosis-title {
    font-weight: bold;
}

.diagnosis-text {
    margin-top: 3px;
}


/* =========================================================
   RX
========================================================= */

.rx-title {
    font-size: 14px;
    font-weight: bold;
    margin-bottom: 7px;
}

.medicine-table {
    width: 100%;
    border-collapse: collapse;
    margin-bottom: 10px;
}

.medicine-table th {
    background: #f1f5f7;
    border: 1px solid #bbb;
    padding: 5px;
    font-size: 8px;
    text-align: left;
}

.medicine-table td {
    border: 1px solid #ccc;
    padding: 5px;
    font-size: 8px;
    vertical-align: top;
}

.medicine-name {
    font-weight: bold;
    font-size: 9px;
}

.amount {
    text-align: right;
}


/* =========================================================
   BILL SUMMARY
========================================================= */

.summary-box {
    width: 48%;
    margin-left: auto;
    border-top: 1px solid #777;
    padding-top: 5px;
}

.summary-row {
    width: 100%;
    margin-bottom: 4px;
}

.summary-label {
    width: 55%;
    display: inline-block;
}

.summary-value {
    width: 40%;
    display: inline-block;
    text-align: right;
}

.total {
    font-size: 12px;
    font-weight: bold;
}


/* =========================================================
   FOOTER
========================================================= */

.footer-section {
    position: absolute;
    bottom: 0;
    left: 0;
    width: 100%;
    border-top: 1px solid #777;
    padding-top: 6px;
}

.footer-left {
    width: 65%;
    display: inline-block;
    vertical-align: top;
    font-size: 7px;
    color: #555;
}

.footer-right {
    width: 30%;
    display: inline-block;
    vertical-align: top;
    text-align: right;
}

.signature {
    font-size: 8px;
    font-weight: bold;
}
.medicine-list {
    width: 100%;
    margin-top: 3px;
}

.medicine-item {
    width: 100%;
    margin-bottom: 10px;
    padding-bottom: 7px;
    border-bottom: 1px solid #ddd;
}

.medicine-name {
    font-weight: bold;
    font-size: 10px;
    margin-bottom: 4px;
}

.medicine-details {
    font-size: 8px;
    color: #444;
    line-height: 1.6;
    padding-left: 14px;
}

.medicine-detail-row {
    display: block;
    margin-bottom: 2px;
}

.medicine-details strong {
    color: #222;
}
/* =========================================================
   PATIENT HISTORY
========================================================= */

.history-box {
    border-bottom: 1px solid #777;
    padding-bottom: 7px;
    margin-bottom: 10px;
}

.history-title {
    font-size: 10px;
    font-weight: bold;
    margin-bottom: 5px;
    color: #087ca0;
}

.history-row {
    font-size: 8px;
    line-height: 1.5;
    margin-bottom: 3px;
}

.history-label {
    font-weight: bold;
    color: #222;
    display: inline-block;
    min-width: 100px;
}
/* =========================================================
   CLINIC HEADER - CENTERED 2 COLUMNS
========================================================= */
.clinic-header {
    width: 100%;
    border-bottom: 1px solid #777;
    padding-bottom: 8px;
    margin-bottom: 8px;
    text-align: center;
}

.clinic-header-table {
    width: auto;
    margin: 0 auto;
    border-collapse: collapse;
}

.clinic-header-table td {
    vertical-align: middle;
    padding: 0;
}

.clinic-logo-cell {
    width: auto;
    text-align: right;
    padding-right: 4px !important;
}

.clinic-logo {
    width: 40px;
    height: 40px;
    object-fit: contain;
    display: block;
}

.clinic-info {
    width: auto;
    text-align: left;
    padding: 0 !important;
}

.clinic-name {
    font-size: 18px;
    font-weight: bold;
    color: #087ca0;
    margin: 0 0 2px 0;
}

.clinic-subtitle {
    font-size: 9px;
    color: #555;
    line-height: 1.4;
}
</style>

</head>

<body>

<?php if (!empty($bgImage)): ?>
    <img src="<?= $bgImage ?>" class="pdf-background">
<?php endif; ?>

<div class="prescription-page">

<?php
$clinicLogoPath = FCPATH . 'assets/assets/images/clinic-logo.jpeg';
$clinicLogo = '';

if (file_exists($clinicLogoPath)) {
    $clinicLogo = 'data:image/jpeg;base64,' . base64_encode(
        file_get_contents($clinicLogoPath)
    );
}
?>

<div class="clinic-header">

    <table class="clinic-header-table">
        <tr>

            <!-- LOGO FIRST -->
            <?php if (!empty($clinicLogo)): ?>
            <td class="clinic-logo-cell">
                <img src="<?= $clinicLogo ?>" class="clinic-logo">
            </td>
            <?php endif; ?>

            <!-- CLINIC INFORMATION SECOND -->
            <td class="clinic-info">

                <div class="clinic-name">
                    VETAL NURSING HOME
                </div>

                <div class="clinic-subtitle"> 
                   Pune Panshel Road, Khanapur- 4111025. Mob. 7304841990 / 70207993053
                </div>

               

            </td>

        </tr>
    </table>
    

</div>
    <!-- =====================================================
         DOCTOR
    ====================================================== -->

    <div class="doctor-section">

        <div class="doctor-left">

          <div class="doctor-name">
    <?= esc($doctor['fullname'] ?? $bill['pb_doctor_name'] ?? '-') ?>
</div>

<div class="doctor-details " style="font-size: 12px;">
     <?= esc($doctor['education'] ?? '-') ?>
</div>

        </div>


        <div class="doctor-right">

            <div class="doctor-details">

               

                Date:
                <?= date(
                    'd-m-Y',
                    strtotime($bill['pb_created'] ?? date('Y-m-d'))
                ) ?>

            </div>

        </div>

    </div>

<!-- =====================================================
     PATIENT INFORMATION
====================================================== -->
<div class="patient-box">

    <div class="patient-row">

        <div class="patient-col">
            <span class="label">Patient Name:</span>
            <span class="value">
                <?= esc(
                    trim(
                        ($patient['first_name'] ?? '') . ' ' .
                           ($patient['middle_name'] ?? '') . ' ' .
                        ($patient['last_name'] ?? '')
                    ) ?: '-'
                ) ?>
            </span>
        </div>

        <div class="patient-col">
            <span class="label">Patient ID:</span>
            <span class="value">
                <?= esc($patient['patient_code'] ?? '-') ?>
            </span>
        </div>

    </div>


    <div class="patient-row">

        <div class="patient-col">
            <span class="label">Age:</span>
            <span class="value">
                <?= esc($patient['age'] ?? '-') ?> Years
            </span>
        </div>

        <div class="patient-col">
            <span class="label">Gender:</span>
            <span class="value">
                <?= esc($patient['gender'] ?? '-') ?>
            </span>
        </div>

    </div>


    <div class="patient-row">

        <div class="patient-col">
            <span class="label">Mobile:</span>
            <span class="value">
                <?= esc($patient['mobile'] ?? '-') ?>
            </span>
        </div>

        <div class="patient-col">
            <span class="label">Weight:</span>
            <span class="value">
                <?= esc($opd['weight'] ?? '-') ?> kg
            </span>
        </div>

    </div>


    <div class="patient-row">

        <div class="patient-col">
            <span class="label">OPD:</span>
            <span class="value">
                <?= esc($bill['pb_opd_id'] ?? '-') ?>
            </span>
        </div>

        <div class="patient-col">
            <span class="label">Blood Group:</span>
            <span class="value">
                <?= esc($patient['blood_group'] ?? '-') ?>
            </span>
        </div>

    </div>

</div>


    <!-- =====================================================
         DIAGNOSIS
    ====================================================== -->

    <?php if (!empty($opd['diagnosis'])): ?>

        <div class="diagnosis-box">

            <span class="diagnosis-title">
                Diagnosis:
            </span>

            <span class="diagnosis-text">
                <?= esc($opd['diagnosis']) ?>
            </span>

        </div>

    <?php endif; ?>


    <!-- =====================================================
         RX
    ====================================================== -->

    <div class="rx-title">
        Rx
    </div>

<div class="medicine-list">

    <?php if (!empty($medicines)): ?>

        <div class="row g-3">

            <?php foreach ($medicines as $index => $medicine): ?>

                <div class="col-md-3 col-sm-6">

                    <div class="medicine-item">

                        <!-- MEDICINE NAME -->
                        <div class="medicine-name">
                            <?= ($index + 1) ?>.
                            <?= esc($medicine['medicine_name'] ?? '') ?>
                        </div>

                        <!-- DETAILS BELOW MEDICINE NAME -->
                        <div class="medicine-details">

                            <span>
                                <strong>Prescribed Qty:</strong>
                                <?= esc($medicine['prescribed_qty'] ?? '-') ?>
                            </span>

                            <span>
                                <strong>Frequency:</strong>
                                <?= esc($medicine['frequency'] ?? '-') ?>
                            </span>

                            <span>
                                <strong>Duration:</strong>
                                <?= esc($medicine['duration'] ?? '-') ?>
                            </span>

                            <span>
                                <strong>Timing:</strong>
                                <?= esc($medicine['timing'] ?? '-') ?>
                            </span>

                        </div>

                    </div>

                </div>

            <?php endforeach; ?>

        </div>

    <?php else: ?>

        <div class="medicine-name">
            No medicines prescribed
        </div>

    <?php endif; ?>

</div>
    <!-- =====================================================
         FOOTER
    ====================================================== -->

    <div class="footer-section">

        <div class="footer-left">

            This prescription is generated electronically.

            <br>

            Please follow the doctor's instructions.

            <br>

            Vetal Clinic, Pune, Maharashtra

        </div>


        <div class="footer-right">

            <br><br>

            <div class="signature">

                Dr.
                <?= esc(
                    $bill['pb_doctor_name'] ?? 'Doctor'
                ) ?>

            </div>

            <small>
                Authorized Signature
            </small>

        </div>

    </div>

</div>

</body>

</html>