    var calendar;
    var Calendar = FullCalendar.Calendar;
    var events = [];
    $(function() {
        if (!!agendad) {
            Object.keys(agendad).map(k => {
                var row = agendad[k]
                events.push({ id: row.id, titulo: row.titulo, fecha_ini: row.fecha_ini, fecha_fin: row.fecha_fin });
            })
        }
        var date = new Date()
        var d = date.getDate(),
            m = date.getMonth(),
            y = date.getFullYear()

        calendar = new Calendar(document.getElementById('calendar'), {
            headerToolbar: {
                left: 'prev,next today',
                right: 'dayGridMonth,dayGridWeek,list',
                center: 'titulo',
            },
            selectable: true,
            themeSystem: 'bootstrap',
            //Random default events
            events: events,
            eventClick: function(info) {
                var _details = $('#event-details-modal')
                var id = info.event.id
                if (!!agendad[id]) {
                    _details.find('#title').text(agendad[id].titulo)
                    _details.find('#description').text(agendad[id].description)
                    _details.find('#fecha_ini').text(agendad[id].fecha_ini)
                    _details.find('#fecha_fin').text(agendad[id].fecha_fin)
                    _details.find('#edit,#delete').attr('data-id', id)
                    _details.modal('show')
                } else {
                    alert("El evento no está definido");
                }
            },
            eventDidMount: function(info) {
                // Do Something after events mounted
            },
            editable: true
        });

        calendar.render();

        // Form reset listener
        $('#agendad-form').on('reset', function() {
            $(this).find('input:hidden').val('')
            $(this).find('input:visible').first().focus()
        })

        // Edit Button
        $('#edit').click(function() {
            var id = $(this).attr('data-id')
            if (!!agendad[id]) {
                var _form = $('#agendad-form')
                console.log(String(agendad[id].fecha_ini_datetime), String(agendad[id].fecha_ini_datetime).replace(" ", "\\t"))
                _form.find('[name="id"]').val(id)
                _form.find('[name="titulo"]').val(agendad[id].titulo)
                _form.find('[name="description"]').val(agendad[id].description)
                _form.find('[name="fecha_ini_datetime"]').val(String(agendad[id].fecha_ini_datetime).replace(" ", "T"))
                _form.find('[name="fecha_fin_datetime"]').val(String(agendad[id].fecha_fin_datetime).replace(" ", "T"))
                $('#event-details-modal').modal('hide')
                _form.find('[name="title"]').focus()
            } else {
                alert("El evento no está definido");
            }
        })

        // Delete Button / Deleting an Event
        $('#delete').click(function() {
            var id = $(this).attr('data-id')
            if (!!agendad[id]) {
                var _conf = confirm("¿Estás seguro de eliminar este evento de la agenda?");
                if (_conf === true) {
                    location.href = "./delete_agendad.php?id=" + id;
                }
            } else {
                alert("El evento no está definido");
            }
        })
    })