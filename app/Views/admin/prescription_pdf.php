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

.prescription-page {
    width: 100%;
    min-height: 100%;
    position: relative;
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

</style>

</head>

<body>

<div class="prescription-page">


    <!-- =====================================================
         CLINIC HEADER
    ====================================================== -->

    <div class="clinic-header">

        <div class="clinic-name">
            Vetal Clinic
        </div>

        <div class="clinic-subtitle">
            Multispeciality Clinic &amp; Pharmacy
        </div>

        <div class="clinic-subtitle">
            Pune, Maharashtra
        </div>

    </div>


    <!-- =====================================================
         DOCTOR
    ====================================================== -->

    <div class="doctor-section">

        <div class="doctor-left">

            <div class="doctor-name">
                Dr. <?= esc($bill['pb_doctor_name'] ?? 'Doctor') ?>
            </div>

            <div class="doctor-details">
                General Medicine<br>
                MBBS, MD
            </div>

        </div>


        <div class="doctor-right">

            <div class="doctor-details">

                Bill No:
                <strong>
                    PH-<?= esc($bill['pb_id'] ?? '') ?>
                </strong>

                <br>

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

                <span class="label">
                    Patient Name:
                </span>

                <span class="value">

                    <?= esc(
                        $bill['pb_patient_name']
                        ?? (
                            ($patient['first_name'] ?? '') . ' ' .
                            ($patient['last_name'] ?? '')
                        )
                    ) ?>

                </span>

            </div>


            <div class="patient-col">

                <span class="label">
                    Patient ID:
                </span>

                <span class="value">

                    <?= esc(
                        $bill['pb_patient_id']
                        ?? ($patient['patient_code'] ?? '-')
                    ) ?>

                </span>

            </div>

        </div>


        <div class="patient-row">

            <div class="patient-col">

                <span class="label">
                    Age:
                </span>

                <span class="value">

                    <?= esc($patient['age'] ?? '-') ?>

                </span>

            </div>


            <div class="patient-col">

                <span class="label">
                    Gender:
                </span>

                <span class="value">

                    <?= esc($patient['gender'] ?? '-') ?>

                </span>

            </div>

        </div>


        <div class="patient-row">

            <div class="patient-col">

                <span class="label">
                    Mobile:
                </span>

                <span class="value">

                    <?= esc($patient['mobile'] ?? '-') ?>

                </span>

            </div>


            <div class="patient-col">

                <span class="label">
                    OPD:
                </span>

                <span class="value">

                    <?= esc($bill['pb_opd_id'] ?? '-') ?>

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

        <?php foreach ($medicines as $medicine): ?>

            <div class="medicine-name">
                <?= esc($medicine['medicine_name'] ?? '') ?>
            </div>

        <?php endforeach; ?>

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