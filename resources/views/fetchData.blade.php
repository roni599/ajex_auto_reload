<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
    <title>UI Table</title>
</head>

<body>

    <div class="container mt-5">
        <table class="table">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>AverageHeartRate</th>
                    <th>SPO2</th>
                    <th>BodyTemperature</th>
                    <th>FallStatus</th>
                    <th>EmergencyCall</th>
                    <th>HealthStatus</th>
                    <th>ActiveStatus</th>
                    <th>reading_time</th>
                </tr>
            </thead>
            <tbody id="data-table-body">
               
            </tbody>
        </table>
    </div>

    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

    <script>
        $(document).ready(function() {
            function fetchData() {
                $.ajax({
                    url: '/fetch-data',
                    type: 'GET',
                    dataType: 'json',
                    success: function(data) {
                        console.log('Data fetched successfully:', data);
                        updateTable(data);
                    },
                    error: function(xhr, status, error) {
                        console.error('Error fetching data:', error);
                    }
                });
            }

            function updateTable(data) {
                $('#data-table-body').empty();
                $.each(data, function(index, item) {
                    $('#data-table-body').append(
                        '<tr>' +
                        '<td>' + item.id + '</td>' +
                        '<td>' + item.AverageHeartRate + '</td>' +
                        '<td>' + item.SPO2 + '</td>' +
                        '<td>' + item.BodyTemperature + '</td>' +
                        '<td>' + item.FallStatus + '</td>' +
                        '<td>' + item.EmergencyCall + '</td>' +
                        '<td>' + item.HealthStatus + '</td>' +
                        '<td>' + item.ActiveStatus + '</td>' +
                        '<td>' + item.reading_time + '</td>' +
                        '</tr>'
                    );
                });
            }
            fetchData();
            setInterval(fetchData, 1000);
        });
    </script>

</body>

</html>
