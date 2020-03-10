<link href='https://unpkg.com/@fullcalendar/core@4.3.1/main.min.css' rel='stylesheet'/>

<link href='https://unpkg.com/@fullcalendar/daygrid@4.3.0/main.min.css' rel='stylesheet'/>

<link href='https://unpkg.com/@fullcalendar/timegrid@4.3.0/main.min.css' rel='stylesheet'/>

<script src='https://unpkg.com/@fullcalendar/core@4.3.1/main.min.js'></script>

<script src='https://unpkg.com/@fullcalendar/interaction@4.3.0/main.min.js'></script>

<script src='https://unpkg.com/@fullcalendar/daygrid@4.3.0/main.min.js'></script>

<script src='https://unpkg.com/@fullcalendar/timegrid@4.3.0/main.min.js'></script>

<script src="https://code.jquery.com/jquery-1.12.4.min.js"></script>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/js/bootstrap.min.js"></script> <!-- tiene que funcionar de alguna manera -->

<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
        crossorigin="anonymous"></script>

<link href='assets/css/calendar.css' rel='stylesheet' type='text/css'><!--estilo calendario--->

<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js"
        integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k"
        crossorigin="anonymous"></script>



<script>

    document.addEventListener('DOMContentLoaded', function () {
        var calendarEl = document.getElementById('calendar');

        var calendar = new FullCalendar.Calendar(calendarEl, {
            plugins: ['interaction', 'dayGrid', 'timeGrid'],
            defaultView: 'dayGridMonth',
            defaultDate: '2019-11-07',
            header: {
                left: 'prev,next today',
                center: 'title',
                right: 'dayGridMonth,timeGridWeek,timeGridDay'
            },


            events: [


                <?php
                $sql = "SELECT * from habitacion;";
                $host = 'localhost';
                $user = 'root';
                $pass = '';
                $dbname = 'hotel';
                $db = mysqli_connect($host, $user, $pass, $dbname);

                $result = mysqli_query($db, $sql);
                $resultCheck = mysqli_num_rows($result);

                if ($resultCheck > 0) {
                    while ($row = mysqli_fetch_assoc($result)) {
                        echo "
                {
                    codHabitacion:'$row[codHabitacion]',
                    title: 'habitación: $row[codHabitacion]',
                    capacidad: 'Capacidad: $row[capacidad]',
                    description: 'Planta: $row[planta],\\nPrecio por noche: $row[tarifa] euros',
                    start: '$row[Fecha_entrada]',
                    end: '$row[Fecha_salida]'
                },
                
                
                ";
                    }
                }?>
            ],

            eventClick: function events(calEvent) {

                $("#eventIdModal").html(calEvent.event.codHabitacion);
                $("#eventBodyModal").html(calEvent.event._def.extendedProps.description);
                $('#modal-title').html(calEvent.event.title);
                $("#eventLink").attr('href', calEvent.event.codHabitacion);
                $('#myModal').modal('show');

                alert( (calEvent.event._def.extendedProps.description));
            }


            //funciona


        });

        calendar.render();

    });

</script>

<div id="calendar"></div>
