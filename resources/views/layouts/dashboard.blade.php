
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Title -->
    <title> TopLearner </title>


        <!-- Favicon -->
    <link rel="shortcut icon" href="{{ asset("/assets/images/logo/favicon.png") }}">
    <!-- Bootstrap -->
    <link rel="stylesheet" href="{{ asset("/assets/css/bootstrap.min.css") }}">
    <!-- file upload -->
    <link rel="stylesheet" href="{{ asset("/assets/css/file-upload.css") }}">
    <!-- file upload -->
    <link rel="stylesheet" href="{{ asset("/assets/css/plyr.css") }}">
    <!-- DataTables -->
    <link rel="stylesheet" href="https://cdn.datatables.net/2.0.8/css/dataTables.dataTables.min.css">
    <!-- full calendar -->
    <link rel="stylesheet" href="{{ asset("/assets/css/full-calendar.css") }}">
    <!-- jquery Ui -->
    <link rel="stylesheet" href="{{ asset("/assets/css/jquery-ui.css") }}">
    <!-- editor quill Ui -->
    <link rel="stylesheet" href="{{ asset("/assets/css/editor-quill.css") }}">
    <!-- apex charts Css -->
    <link rel="stylesheet" href="{{ asset("/assets/css/apexcharts.css") }}">
    <!-- calendar Css -->
    <link rel="stylesheet" href="{{ asset("/assets/css/calendar.css") }}">
    <!-- jvector map Css -->
    <link rel="stylesheet" href="{{ asset("/assets/css/jquery-jvectormap-2.0.5.css") }}">
    <!-- Main css -->
    <link rel="stylesheet" href="{{ asset("/assets/css/main.css") }}">

    @livewireStyles
</head>
<body>



<!-- ============================ Sidebar Start ============================ -->
<livewire:student-dashboard-sidebar />
<!-- ============================ Sidebar End  ============================ -->

{{-- dashboard --}}


@yield('content')

{{-- end dashboard --}}

        <!-- Jquery js -->
    <script src="{{ asset("/assets/js/jquery-3.7.1.min.js") }}"></script>
    <!-- Bootstrap Bundle Js -->
    <script src="{{ asset("/assets/js/boostrap.bundle.min.js") }}"></script>
    <!-- Phosphor Js -->
    <script src="{{ asset("/assets/js/phosphor-icon.js") }}"></script>
    <!-- file upload -->
    <script src="{{ asset("/assets/js/file-upload.js") }}"></script>
    <!-- file upload -->
    <script src="{{ asset("/assets/js/plyr.js") }}"></script>
    <!-- dataTables -->
    <script src="https://cdn.datatables.net/2.0.8/js/dataTables.min.js"></script>
    <!-- full calendar -->
    <script src="{{ asset("/assets/js/full-calendar.js") }}"></script>
    <!-- jQuery UI -->
    <script src="{{ asset("/assets/js/jquery-ui.js") }}"></script>
    <!-- jQuery UI -->
    <script src="{{ asset("/assets/js/editor-quill.js") }}"></script>
    <!-- apex charts -->
    <script src="{{ asset("/assets/js/apexcharts.min.js") }}"></script>
    <!-- jvectormap Js -->
    <script src="{{ asset("/assets/js/jquery-jvectormap-2.0.5.min.js") }}"></script>
    <!-- jvectormap world Js -->
    <script src="{{ asset("/assets/js/jquery-jvectormap-world-mill-en.js") }}"></script>

    <!-- main js -->
    <script src="{{ asset("/assets/js/main.js") }}"></script>



    @livewireScripts
    <script>

     // ========================== Export Js Start ==============================
        document.getElementById('exportOptions').addEventListener('change', function() {
            const format = this.value;
            const table = document.getElementById('studentTable');
            let data = [];
            const headers = [];

            // Get the table headers
            table.querySelectorAll('thead th').forEach(th => {
                headers.push(th.innerText.trim());
            });

            // Get the table rows
            table.querySelectorAll('tbody tr').forEach(tr => {
                const row = {};
                tr.querySelectorAll('td').forEach((td, index) => {
                    row[headers[index]] = td.innerText.trim();
                });
                data.push(row);
            });

            if (format === 'csv') {
                downloadCSV(data);
            } else if (format === 'json') {
                downloadJSON(data);
            }
        });

        function downloadCSV(data) {
            const csv = data.map(row => Object.values(row).join(',')).join('\n');
            const blob = new Blob([csv], { type: 'text/csv' });
            const url = URL.createObjectURL(blob);
            const a = document.createElement('a');
            a.href = url;
            a.download = 'students.csv';
            document.body.appendChild(a);
            a.click();
            document.body.removeChild(a);
        }

        function downloadJSON(data) {
            const json = JSON.stringify(data, null, 2);
            const blob = new Blob([json], { type: 'application/json' });
            const url = URL.createObjectURL(blob);
            const a = document.createElement('a');
            a.href = url;
            a.download = 'students.json';
            document.body.appendChild(a);
            a.click();
            document.body.removeChild(a);
        }
        // ========================== Export Js End ==============================

        // Table Header Checkbox checked all js Start
        $('#selectAll').on('change', function () {
            $('.form-check .form-check-input').prop('checked', $(this).prop('checked'));
        });

        // Data Tables
        new DataTable('#studentTable', {
            searching: false,
            lengthChange: false,
            info: false,   // Bottom Left Text => Showing 1 to 10 of 12 entries
            paging: false,
            "columnDefs": [
                { "orderable": false, "targets": [0] } // Disables sorting on the 7th column (index 6)
            ]
        });
    </script>

    </body>
</html>
