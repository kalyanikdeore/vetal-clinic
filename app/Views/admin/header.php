<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Vetal Clinic - OPD Management Dashboard</title>
  
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet">

<!-- Bootstrap Icons -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css" rel="stylesheet">

<!-- jQuery UI CSS -->
<link rel="stylesheet" href="https://code.jquery.com/ui/1.14.2/themes/base/jquery-ui.css">

<!-- jQuery -->
<script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>

<!-- jQuery UI -->
<script src="https://code.jquery.com/ui/1.14.2/jquery-ui.min.js"></script>

<!-- Bootstrap JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"></script>









    <style>
      /* =====================================================
           ROOT COLORS
        ===================================================== */
      :root {
        --primary: #07446f;
        --primary-light: #087ca0;
        --secondary: #12a69a;x
        --accent: #91f1e3;
        --body-bg: #f4f8fa;
        --card-bg: #ffffff;
        --text-dark: #18364d;
        --text-muted: #748696;
        --border: #e4ebf0;
        --sidebar-width: 260px;
        --topbar-height: 72px;
      }

      /* =====================================================
           GLOBAL
        ===================================================== */
      * {
        box-sizing: border-box;
      }

      html,
      body {
        margin: 0;
        padding: 0;
        min-height: 100%;
      }

      body {
        font-family:
          Inter,
          "Segoe UI",
          Roboto,
          Arial,
          sans-serif;
        background: var(--body-bg);
        color: var(--text-dark);
        font-size: 13px;
      }

      a {
        text-decoration: none;
      }

      /* =====================================================
           SIDEBAR
        ===================================================== */
      .sidebar {
        position: fixed;
        top: 0;
        left: 0;
        bottom: 0;
        width: var(--sidebar-width);
        background:
          linear-gradient(180deg,
            #07446f 0%,
            #086d91 52%,
            #087f82 100%);
        color: #ffffff;
        z-index: 1050;
        overflow-y: auto;
        transition: all .3s ease;
        box-shadow:
          5px 0 25px rgba(0, 55, 80, .08);
      }

      .sidebar::-webkit-scrollbar {
        width: 4px;
      }

      .sidebar::-webkit-scrollbar-thumb {
        background: rgba(255, 255, 255, .2);
        border-radius: 10px;
      }

      /* =====================================================
           BRAND
        ===================================================== */
      .brand {
        height: 82px;
        display: flex;
        align-items: center;
        padding: 0 20px;
        border-bottom:
          1px solid rgba(255, 255, 255, .12);
      }

      .brand-icon {
        width: 44px;
        height: 44px;
        display: flex;
        align-items: center;
        justify-content: center;
        background:
          rgba(255, 255, 255, .13);
        border:
          1px solid rgba(255, 255, 255, .2);
        border-radius: 13px;
        margin-right: 11px;
      }

      .brand-icon i {
        font-size: 23px;
        color: var(--accent);
      }

      .brand-name {
        font-size: 17px;
        font-weight: 800;
        line-height: 1.2;
      }

      .brand-subtitle {
        font-size: 9px;
        color:
          rgba(255, 255, 255, .62);
        margin-top: 3px;
      }

      /* =====================================================
           SIDEBAR MENU
        ===================================================== */
      .menu-section {
        padding: 20px 15px 7px;
        font-size: 9px;
        text-transform: uppercase;
        letter-spacing: 1px;
        color:
          rgba(255, 255, 255, .42);
        font-weight: 700;
      }

      .sidebar-menu {
        padding: 0 10px 15px;
      }

      .sidebar-menu a {
        display: flex;
        align-items: center;
        gap: 12px;
        min-height: 44px;
        padding: 10px 12px;
        margin-bottom: 3px;
        color:
          rgba(255, 255, 255, .72);
        border-radius: 9px;
        font-size: 12px;
        transition: all .2s ease;
      }

      .sidebar-menu a i {
        width: 20px;
        text-align: center;
        font-size: 16px;
      }

      .sidebar-menu a:hover {
        color: #ffffff;
        background:
          rgba(255, 255, 255, .09);
      }

      .sidebar-menu a.active {
        color: #ffffff;
        background:
          rgba(255, 255, 255, .15);
        box-shadow:
          inset 3px 0 0 var(--accent);
      }

      .menu-badge {
        margin-left: auto;
        min-width: 20px;
        padding: 3px 6px;
        text-align: center;
        border-radius: 20px;
        font-size: 9px;
        background: #ff7b62;
        color: #ffffff;
      }

      /* =====================================================
           MAIN
        ===================================================== */
      .main {
        margin-left: var(--sidebar-width);
        min-height: 100vh;
        transition: all .3s ease;
      }

      /* =====================================================
           TOPBAR
        ===================================================== */
      .topbar {
        height: var(--topbar-height);
        background: #ffffff;
        border-bottom:
          1px solid var(--border);
        display: flex;
        align-items: center;
        justify-content: space-between;
        padding: 0 28px;
        position: sticky;
        top: 0;
        z-index: 1000;
      }

      .menu-toggle {
        border: 0;
        background: transparent;
        color: var(--text-dark);
        font-size: 22px;
        display: none;
      }

      .page-title {
        font-size: 19px;
        font-weight: 800;
        margin: 0;
      }

      .breadcrumb-text {
        color: var(--text-muted);
        font-size: 10px;
        margin-top: 3px;
      }

      /* =====================================================
           TOP RIGHT
        ===================================================== */
      .top-actions {
        display: flex;
        align-items: center;
        gap: 12px;
      }

      .top-action {
        width: 38px;
        height: 38px;
        display: flex;
        align-items: center;
        justify-content: center;
        border: 1px solid var(--border);
        background: #ffffff;
        border-radius: 10px;
        color: #62788a;
        position: relative;
      }

      .top-action:hover {
        background: #f3f8fa;
        color: var(--primary);
      }

      .notification-dot {
        position: absolute;
        width: 7px;
        height: 7px;
        background: #ef6756;
        border: 2px solid white;
        border-radius: 50%;
        right: 6px;
        top: 6px;
      }

      /* =====================================================
           USER
        ===================================================== */
      .user-profile {
        display: flex;
        align-items: center;
        gap: 9px;
        padding-left: 8px;
      }

      .user-avatar {
        width: 38px;
        height: 38px;
        display: flex;
        align-items: center;
        justify-content: center;
        border-radius: 11px;
        color: #ffffff;
        background:
          linear-gradient(135deg,
            var(--primary-light),
            var(--secondary));
        font-size: 14px;
        font-weight: 800;
      }

      .user-name {
        font-size: 11px;
        font-weight: 800;
      }

      .user-role {
        font-size: 9px;
        color: var(--text-muted);
      }

      /* =====================================================
           CONTENT
        ===================================================== */
      .content {
        padding: 25px 28px 35px;
      }

      /* =====================================================
           WELCOME
        ===================================================== */
      .welcome-card {
        position: relative;
        overflow: hidden;
        padding: 25px 28px;
        border-radius: 17px;
        color: #ffffff;
        background:
          radial-gradient(circle at 90% 10%,
            rgba(255, 255, 255, .13),
            transparent 28%),
          linear-gradient(135deg,
            var(--primary),
            var(--primary-light) 55%,
            var(--secondary));
        margin-bottom: 22px;
      }

      .welcome-card::after {
        content: "";
        position: absolute;
        width: 250px;
        height: 250px;
        border: 1px solid rgba(255, 255, 255, .08);
        border-radius: 50%;
        right: -100px;
        bottom: -160px;
      }

      .welcome-title {
        position: relative;
        z-index: 2;
        font-size: 23px;
        font-weight: 800;
        margin-bottom: 6px;
      }

      .welcome-text {
        position: relative;
        z-index: 2;
        margin: 0;
        max-width: 600px;
        color:
          rgba(255, 255, 255, .78);
        font-size: 11px;
      }

      .date-box {
        position: absolute;
        right: 25px;
        top: 50%;
        transform: translateY(-50%);
        padding: 10px 15px;
        background:
          rgba(255, 255, 255, .1);
        border:
          1px solid rgba(255, 255, 255, .14);
        border-radius: 10px;
        font-size: 10px;
        z-index: 3;
      }

      /* =====================================================
           STAT CARDS
        ===================================================== */
      .stat-card {
        height: 100%;
        padding: 19px;
        background: var(--card-bg);
        border:
          1px solid var(--border);
        border-radius: 14px;
        transition: all .2s ease;
        box-shadow:
          0 5px 20px rgba(25, 70, 90, .035);
      }

      .stat-card:hover {
        transform: translateY(-2px);
        box-shadow:
          0 10px 25px rgba(25, 70, 90, .08);
      }

      .stat-icon {
        width: 43px;
        height: 43px;
        display: flex;
        align-items: center;
        justify-content: center;
        border-radius: 11px;
        font-size: 19px;
        margin-bottom: 14px;
      }

      .icon-blue {
        color: #087ca0;
        background: #e9f6fb;
      }

      .icon-teal {
        color: #078d82;
        background: #e7f8f5;
      }

      .icon-orange {
        color: #d98220;
        background: #fff4e7;
      }

      .icon-purple {
        color: #7154b7;
        background: #f2edff;
      }

      .stat-label {
        color: var(--text-muted);
        font-size: 10px;
        margin-bottom: 4px;
      }

      .stat-number {
        font-size: 24px;
        font-weight: 800;
        line-height: 1.1;
      }

      .stat-growth {
        margin-top: 8px;
        font-size: 9px;
      }

      .growth-up {
        color: #078d82;
      }

      .growth-warning {
        color: #d98220;
      }

      /* =====================================================
           SECTION
        ===================================================== */
      .section-card {
        height: 100%;
        background: #ffffff;
        border: 1px solid var(--border);
        border-radius: 14px;
        overflow: hidden;
      }

      .section-header {
        display: flex;
        align-items: center;
        justify-content: space-between;
        padding: 17px 19px;
        border-bottom:
          1px solid var(--border);
      }

      .section-title {
        font-size: 13px;
        font-weight: 800;
        margin: 0;
      }

      .view-link {
        color: var(--primary-light);
        font-size: 9px;
        font-weight: 700;
      }

      .section-body {
        padding: 18px;
      }

      /* =====================================================
           TABLE
        ===================================================== */
      .custom-table {
        width: 100%;
        border-collapse: collapse;
      }

      .custom-table th {
        color: #8998a4;
        font-size: 9px;
        font-weight: 700;
        text-transform: uppercase;
        padding: 10px;
        border-bottom:
          1px solid var(--border);
      }

      .custom-table td {
        padding: 12px 10px;
        border-bottom:
          1px solid #edf1f3;
        font-size: 10px;
        vertical-align: middle;
      }

      .custom-table tr:last-child td {
        border-bottom: 0;
      }

      .patient {
        display: flex;
        align-items: center;
        gap: 9px;
      }

      .patient-avatar {
        width: 33px;
        height: 33px;
        display: flex;
        align-items: center;
        justify-content: center;
        border-radius: 9px;
        background: #edf7fa;
        color: var(--primary-light);
        font-size: 11px;
        font-weight: 800;
      }

      .patient-name {
        font-size: 10px;
        font-weight: 700;
      }

      .patient-id {
        font-size: 8px;
        color: var(--text-muted);
        margin-top: 2px;
      }

      /* =====================================================
           STATUS
        ===================================================== */
      .status {
        display: inline-flex;
        padding: 5px 8px;
        border-radius: 20px;
        font-size: 8px;
        font-weight: 700;
      }

      .status-waiting {
        color: #a56a10;
        background: #fff5df;
      }

      .status-consulted {
        color: #078579;
        background: #e7f8f5;
      }

      .status-progress {
        color: #176c9b;
        background: #eaf6fc;
      }

      .status-cancelled {
        color: #bd5047;
        background: #fff0ee;
      }

      /* =====================================================
           QUICK ACTIONS
        ===================================================== */
      .quick-grid {
        display: grid;
        grid-template-columns:
          repeat(2, 1fr);
        gap: 10px;
      }

      .quick-action {
        padding: 13px 10px;
        border: 1px solid var(--border);
        border-radius: 11px;
        color: var(--text-dark);
        background: #fbfdfe;
        text-align: center;
        transition: .2s ease;
      }

      .quick-action:hover {
        border-color: #b8dce7;
        background: #f1fafc;
        transform: translateY(-1px);
      }

      .quick-action i {
        display: block;
        font-size: 19px;
        color: var(--primary-light);
        margin-bottom: 7px;
      }

      .quick-action span {
        font-size: 9px;
        font-weight: 700;
      }

      /* =====================================================
           APPOINTMENTS
        ===================================================== */
      .appointment {
        display: flex;
        align-items: center;
        gap: 11px;
        padding: 11px 0;
        border-bottom:
          1px solid #edf1f3;
      }

      .appointment:last-child {
        border-bottom: 0;
      }

      .appointment-time {
        width: 50px;
        text-align: center;
        color: var(--primary);
        font-size: 9px;
        font-weight: 800;
      }

      .appointment-info {
        flex: 1;
      }

      .appointment-name {
        font-size: 10px;
        font-weight: 700;
      }

      .appointment-type {
        font-size: 8px;
        color: var(--text-muted);
        margin-top: 2px;
      }

      /* =====================================================
           STOCK
        ===================================================== */
      .stock-item {
        padding: 12px 0;
        border-bottom:
          1px solid #edf1f3;
      }

      .stock-item:last-child {
        border-bottom: 0;
      }

      .stock-top {
        display: flex;
        justify-content: space-between;
        margin-bottom: 7px;
      }

      .medicine-name {
        font-size: 10px;
        font-weight: 700;
      }

      .stock-count {
        font-size: 9px;
        font-weight: 800;
        color: #d05e42;
      }

      .progress {
        height: 5px;
        background: #edf2f4;
        border-radius: 20px;
      }

      .progress-bar {
        border-radius: 20px;
        background:
          linear-gradient(90deg,
            var(--primary-light),
            var(--secondary));
      }

      .progress-low {
        background: #e47a55;
      }

      /* =====================================================
           REVENUE
        ===================================================== */
      .revenue-number {
        font-size: 28px;
        font-weight: 800;
        margin-bottom: 3px;
      }

      .revenue-label {
        color: var(--text-muted);
        font-size: 9px;
      }

      .chart-placeholder {
        height: 135px;
        display: flex;
        align-items: flex-end;
        gap: 7px;
        padding-top: 20px;
      }

      .chart-bar {
        flex: 1;
        min-width: 10px;
        background:
          linear-gradient(180deg,
            #12a69a,
            #087ca0);
        border-radius:
          5px 5px 0 0;
        opacity: .85;
      }

      /* =====================================================
           OVERLAY
        ===================================================== */
      .sidebar-overlay {
        display: none;
        position: fixed;
        inset: 0;
        background: rgba(0, 0, 0, .35);
        z-index: 1040;
      }

      /* =====================================================
           RESPONSIVE
        ===================================================== */
      @media (max-width: 1199px) {
        :root {
          --sidebar-width: 230px;
        }

        .content {
          padding: 20px;
        }

        .topbar {
          padding: 0 20px;
        }

        .user-name,
        .user-role {
          display: none;
        }
      }

      @media (max-width: 991px) {
        .sidebar {
          left: -260px;
          width: 260px;
        }

        .sidebar.show {
          left: 0;
        }

        .main {
          margin-left: 0;
        }

        .menu-toggle {
          display: block;
        }

        .sidebar-overlay.show {
          display: block;
        }

        .date-box {
          display: none;
        }
      }

      @media (max-width: 767px) {
        .topbar {
          height: 64px;
          padding: 0 14px;
        }

        .page-title {
          font-size: 16px;
        }

        .breadcrumb-text {
          display: none;
        }

        .top-actions {
          gap: 6px;
        }

        .top-action {
          width: 34px;
          height: 34px;
        }

        .user-profile {
          padding-left: 2px;
        }

        .user-avatar {
          width: 34px;
          height: 34px;
        }

        .content {
          padding: 14px;
        }

        .welcome-card {
          padding: 20px;
          margin-bottom: 16px;
        }

        .welcome-title {
          font-size: 19px;
        }

        .welcome-text {
          font-size: 10px;
        }

        .section-body {
          padding: 12px;
        }

        .custom-table {
          min-width: 580px;
        }

        .table-responsive {
          overflow-x: auto;
        }
      }

      @media (max-width: 575px) {
        .topbar .page-title {
          font-size: 14px;
        }

        .top-action:nth-child(2) {
          display: none;
        }

        .welcome-title {
          font-size: 18px;
        }

        .welcome-card {
          border-radius: 13px;
        }

        .stat-card {
          padding: 15px;
        }

        .stat-icon {
          width: 38px;
          height: 38px;
          font-size: 17px;
        }

        .stat-number {
          font-size: 21px;
        }

        .quick-grid {
          gap: 7px;
        }

        .quick-action {
          padding: 11px 7px;
        }

        .quick-action i {
          font-size: 17px;
        }
      }
    </style>
    <style>
      /* =====================================================
       STOCK MANAGEMENT PAGE
       Uses the existing Vetal Clinic dashboard theme
    ===================================================== */
      .stock-page {
        width: 100%;
      }

      .stock-page .stock-page-title {
        font-size: 1.35rem;
        font-weight: 700;
        color: #1f2937;
      }

      .stock-page .stock-page-subtitle {
        font-size: .82rem;
        color: #6b7280;
      }

      .stock-page .stock-card {
        background: #fff;
        border: 0;
        border-radius: 14px;
        box-shadow: 0 .125rem .35rem rgba(0, 0, 0, .06);
      }

      /* =====================================================
       STAT CARDS
    ===================================================== */
      .stock-page .stat-card {
        background: #fff;
        border: 0;
        border-radius: 14px;
        padding: 17px;
        height: 100%;
        box-shadow: 0 .125rem .35rem rgba(0, 0, 0, .06);
      }

      .stock-page .stat-icon {
        width: 44px;
        height: 44px;
        min-width: 44px;
        border-radius: 11px;
        display: flex;
        align-items: center;
        justify-content: center;
        font-size: 19px;
      }

      .stock-page .stat-label {
        color: #7b8494;
        font-size: .76rem;
        margin-bottom: 3px;
      }

      .stock-page .stat-value {
        color: #1f2937;
        font-size: 1.35rem;
        font-weight: 700;
      }

      /* =====================================================
       TABLE
    ===================================================== */
      .stock-page .stock-card-header {
        background: #fff;
        border-bottom: 1px solid #eef0f3;
        padding: 17px 18px;
      }

      .stock-page .stock-table {
        margin-bottom: 0;
      }

      .stock-page .stock-table th {
        font-size: .75rem;
        color: #6b7280;
        font-weight: 700;
        white-space: nowrap;
        padding: 13px 15px;
      }

      .stock-page .stock-table td {
        font-size: .81rem;
        padding: 13px 15px;
        vertical-align: middle;
      }

      .medicine-icon {
        width: 39px;
        height: 39px;
        min-width: 39px;
        border-radius: 10px;
        display: flex;
        align-items: center;
        justify-content: center;
        font-size: 17px;
      }

      .medicine-name {
        font-weight: 600;
        color: #202631;
      }

      .medicine-code {
        font-size: .66rem;
        color: #8b93a1;
        margin-top: 2px;
      }

      /* =====================================================
       STOCK BADGES
    ===================================================== */
      .stock-badge {
        display: inline-flex;
        align-items: center;
        gap: 4px;
        padding: 5px 9px;
        border-radius: 20px;
        font-size: .67rem;
        font-weight: 600;
        white-space: nowrap;
      }

      .stock-good {
        color: #198754;
        background: #e8f7ef;
      }

      .stock-low {
        color: #a66a00;
        background: #fff4d6;
      }

      .stock-out {
        color: #dc3545;
        background: #fdebec;
      }

      .stock-expired {
        color: #dc3545;
        background: #fdebec;
      }

      .stock-expiring {
        color: #a66a00;
        background: #fff4d6;
      }

      /* =====================================================
       ACTION BUTTONS
    ===================================================== */
      .stock-action-btn {
        width: 31px;
        height: 31px;
        padding: 0;
        display: inline-flex;
        align-items: center;
        justify-content: center;
        border-radius: 7px;
      }

      /* =====================================================
       SEARCH
    ===================================================== */
      .stock-search {
        min-width: 240px;
      }

      .stock-filter {
        min-width: 145px;
      }

      /* =====================================================
       MODAL
    ===================================================== */
      #addStockModal .modal-content {
        border: 0;
        border-radius: 16px;
        overflow: hidden;
      }

      #addStockModal .modal-header {
        padding: 17px 22px;
        border: 0;
      }

      #addStockModal .modal-body {
        padding: 21px;
      }

      #addStockModal .modal-footer {
        padding: 13px 21px;
      }

      #addStockModal .section-heading {
        font-size: .88rem;
        font-weight: 700;
        color: #0d6efd;
        border-bottom: 1px solid #e9ecef;
        padding-bottom: 9px;
        margin-bottom: 15px;
      }

      #addStockModal .form-label {
        font-size: .76rem;
        font-weight: 600;
        color: #374151;
        margin-bottom: 5px;
      }

      #addStockModal .form-control,
      #addStockModal .form-select {
        min-height: 41px;
        border-radius: 8px;
        font-size: .82rem;
      }

      #addStockModal textarea.form-control {
        min-height: 85px;
      }

      #addStockModal .medicine-preview {
        background: #f7f9fc;
        border: 1px solid #edf0f4;
        border-radius: 11px;
        padding: 13px;
      }

      /* =====================================================
       STOCK MOVEMENT MODAL
    ===================================================== */
      #stockMovementModal .modal-content {
        border: 0;
        border-radius: 16px;
        overflow: hidden;
      }

      #stockMovementModal .modal-header {
        padding: 17px 22px;
        border: 0;
      }

      #stockMovementModal .modal-body {
        padding: 21px;
      }

      #stockMovementModal .form-label {
        font-size: .76rem;
        font-weight: 600;
        color: #374151;
      }

      #stockMovementModal .form-control,
      #stockMovementModal .form-select {
        min-height: 41px;
        border-radius: 8px;
        font-size: .82rem;
      }

      /* =====================================================
       MOBILE
    ===================================================== */
      @media (max-width: 991.98px) {
        .stock-search {
          min-width: 0;
          width: 100%;
        }

        .stock-filter {
          min-width: 0;
          width: 100%;
        }

        .stock-filter-area {
          width: 100%;
        }
      }

      @media (max-width: 767.98px) {
        .stock-page .stock-page-title {
          font-size: 1.12rem;
        }

        .stock-page .stock-page-subtitle {
          font-size: .74rem;
        }

        .stock-page .page-action {
          width: 100%;
        }

        .stock-page .page-action .btn {
          width: 100%;
        }

        .stock-page .table-responsive {
          overflow-x: auto;
          -webkit-overflow-scrolling: touch;
        }

        .stock-page .stock-table {
          min-width: 1050px;
        }

        /* #addStockModal .modal-dialog,
        #stockMovementModal .modal-dialog {
          margin: 0;
          max-width: 100%;
        } */

        #addStockModal .modal-content,
        #stockMovementModal .modal-content {
          min-height: 100vh;
          border-radius: 0;
        }

        #addStockModal .modal-body,
        #stockMovementModal .modal-body {
          padding: 15px;
        }
      }

      @media (max-width: 575.98px) {
        .stock-page .stat-card {
          padding: 13px;
        }

        .stock-page .stat-icon {
          width: 38px;
          height: 38px;
          min-width: 38px;
          font-size: 16px;
        }

        .stock-page .stat-value {
          font-size: 1.12rem;
        }

        .stock-page .stat-label {
          font-size: .68rem;
        }

        .stock-page .stock-card-header {
          padding: 13px;
        }

        #addStockModal .modal-header,
        #stockMovementModal .modal-header {
          padding: 14px 15px;
        }

        #addStockModal .modal-title,
        #stockMovementModal .modal-title {
          font-size: .98rem;
        }

        #addStockModal .modal-footer,
        #stockMovementModal .modal-footer {
          padding: 11px 15px;
        }

        #addStockModal .modal-footer .btn,
        #stockMovementModal .modal-footer .btn {
          flex: 1;
          font-size: .76rem;
        }
      }
      .password-modal .form-control.is-invalid {
    border-color: #dc3545;
    box-shadow: none;
}

.password-modal .form-control.is-invalid:focus {
    border-color: #dc3545;
    box-shadow: 0 0 0 .15rem rgba(220, 53, 69, .10);
}

.password-match.error {
    color: #dc3545;
    font-size: 10px;
    margin-top: 5px;
}

.password-match.success {
    color: #198754;
    font-size: 10px;
    margin-top: 5px;
}

#currentPasswordError {
    display: block;
}

    </style>
  </head>
  <body>
    <!-- =====================================================
     MOBILE OVERLAY
===================================================== -->
    <div class="sidebar-overlay" id="sidebarOverlay"></div>
    <!-- =====================================================
     SIDEBAR
===================================================== -->
    <aside class="sidebar" id="sidebar">
      <!-- BRAND -->
      <div class="brand">
        <div class="brand-icon">
          <i class="bi bi-heart-pulse-fill"></i>
        </div>
        <div>
          <div class="brand-name"> Vetal Clinic </div>
          <div class="brand-subtitle"> OPD & Pharmacy Management </div>
        </div>
      </div>
      <!-- MAIN -->
      <div class="menu-section"> Main Menu </div>
      <nav class="sidebar-menu">
        <a href="
									<?=base_url('dashboard');?>" class="active">
          <i class="bi bi-grid-1x2-fill"></i>
          <span>Dashboard</span>
        </a>
        <a href="
									<?=base_url('patients');?>">
          <i class="bi bi-people-fill"></i>
          <span>Patients</span>
          <span class="menu-badge"> 24 </span>
        </a>
        <!-- <a href="#"><i class="bi bi-calendar-check-fill"></i><span>Appointments</span></a> -->
        <a href="
									<?=base_url('OPD-consultation');?>">
          <i class="bi bi-clipboard2-pulse-fill"></i>
          <span>OPD Management</span>
        </a>
        <!-- <a href="#"><i class="bi bi-prescription2"></i><span>Prescriptions</span></a> -->
      </nav>
      <!-- CLINIC -->
      <div class="menu-section"> Clinic Management </div>
      <nav class="sidebar-menu">
        <a href="
									<?=base_url('patient-history');?>">
          <i class="bi bi-person-vcard-fill"></i>
          <span>Patient History</span>
        </a>
        <a href="
									<?=base_url('BP-patients');?>">
          <i class="bi bi-heart-pulse"></i>
          <span>BP Patients</span>
        </a>
        <a href="
									<?=base_url('sugar-patients');?>">
          <i class="bi bi-droplet-fill"></i>
          <span>Sugar Patients</span>
        </a>
        <a href="
									<?=base_url('medical-certificates');?>">
          <i class="bi bi-file-earmark-medical-fill"></i>
          <span>Medical Certificates</span>
        </a>
        <a href="
									<?=base_url('reminders');?>">
          <i class="bi bi-bell-fill"></i>
          <span>Reminders</span>
          <span class="menu-badge"> 8 </span>
        </a>
      </nav>
      <!-- PHARMACY -->
      <div class="menu-section"> Pharmacy </div>
      <nav class="sidebar-menu">
        <!-- <a href="#"><i class="bi bi-capsule-pill"></i><span>Medicine Inventory</span></a> -->
        <a href="
									<?=base_url('stock-management');?>">
          <i class="bi bi-box-seam-fill"></i>
          <span>Stock Management</span>
        </a>
        <a href="
									<?=base_url('pharmacy-billing');?>">
          <i class="bi bi-cart-check-fill"></i>
          <span>Pharmacy Billing</span>
        </a>
        <!-- <a href="#"><i class="bi bi-exclamation-triangle-fill"></i><span>Low Stock</span><span class="menu-badge">
                5
            </span></a> -->
      </nav>
      <!-- FINANCE -->
      <!-- <div class="menu-section">
        Finance & Reports
    </div> -->
      <!-- <nav class="sidebar-menu"><a href="#"><i class="bi bi-receipt-cutoff"></i><span>OPD Billing</span></a><a href="#"><i class="bi bi-bar-chart-fill"></i><span>Reports & Analytics</span></a><a href="#"><i class="bi bi-wallet2"></i><span>Payments</span></a></nav> -->
      <!-- SYSTEM -->
      <div class="menu-section"> System </div>
      <nav class="sidebar-menu">
        <!-- <a href="#"><i class="bi bi-gear-fill"></i><span>Settings</span></a> -->
        <a href="
									<?=base_url('my-profile'); ?>">
          <i class="bi bi-person-circle"></i>
          <span>My Profile</span>
        </a>
        <!-- <a href="#">
          <i class="bi bi-box-arrow-right"></i>
          <span>Logout</span>
        </a> -->
        <a href="<?= base_url('logout') ?>">
    <i class="bi bi-box-arrow-right"></i>
    <span>Logout</span>
</a>
      </nav>
    </aside>
    <!-- =====================================================
     MAIN
===================================================== -->
    <div class="main">
      <!-- =================================================
         TOPBAR
    ================================================== -->
      <header class="topbar">
        <div class="d-flex align-items-center gap-2">
          <button type="button" class="menu-toggle" id="menuToggle">
            <i class="bi bi-list"></i>
          </button>
          <div>
            <h1 class="page-title"> Dashboard </h1>
            <div class="breadcrumb-text"> Vetal Clinic / Overview </div>
          </div>
        </div>
        <div class="top-actions">
          <button class="top-action" title="Search">
            <i class="bi bi-search"></i>
          </button>
          <button class="top-action" title="Notifications">
            <i class="bi bi-bell"></i>
            <span class="notification-dot"></span>
          </button>
          <div class="user-profile">
            <div class="user-avatar"> DS </div>
            <div>
              <div class="user-name"> Dr. Samer </div>
              <div class="user-role"> Administrator / Doctor </div>
            </div>
          </div>
        </div>
      </header>
      <style>
        .btn-primary,
        .bp-primary-btn,
        .sugar-primary-btn,
        .mc-primary-btn,
        .modal-header {
          background: radial-gradient(circle at 90% 10%, rgba(255, 255, 255, .13), transparent 28%), linear-gradient(135deg, var(--primary), var(--primary-light) 55%, var(--secondary)) !important;
          border: 0;
        }





      </style>