<div class="col-md-12">
    <div class="card card-outline card-primary">
        <div class="card-header">
            <h3 class="card-title"> <i class="far fa-calendar sp-2"></i><b><?= $judul ?></b></h3>

            <div class="card-tools">
                <a href="<?= base_url('dataevents/tambah') ?>" class="btn btn-primary">
                    <i class="fas fa-plus"><b>Tambah Data Events</b></i>
                </a>
            </div>
            <!-- /.card-tools -->
        </div>
        <!-- /.card-header -->
        <div class="card-body">
            <table class="table table-bordered text-center">
                <thead>

                    <!-- CSS for full calender -->
                    <link href="public/assets/plugins/cdnjs.cloudflare.com/ajax/libs/fullcalendar/3.9.0/fullcalendar.min.css" rel="stylesheet" />
                    <!-- JS for jQuery -->
                    <script src="public/assets/plugins/cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
                    <!-- JS for full calender -->
                    <script src="public/assets/plugins/cdnjs.cloudflare.com/ajax/libs/moment.js/2.20.1/moment.min.js"></script>
                    <script src="public/assets/plugins/cdnjs.cloudflare.com/ajax/libs/fullcalendar/3.9.0/fullcalendar.min.js"></script>
                    <!-- bootstrap css and js -->
                    <link rel="stylesheet" href="public/assets/plugins/maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" />
                    <script src="public/assets/plugins/maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>

                    <div id="calendar"></div>

                    <!-- Start popup dialog box -->
                    <div class="modal fade" id="event_entry_modal" tabindex="-1" role="dialog" aria-labelledby="modalLabel" aria-hidden="true">
                        <div class="modal-dialog modal-md" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="modalLabel">Add New Event</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">×</span>
                                    </button>
                                </div>
                                <div class="modal-body">
                                    <div class="img-container">
                                        <div class="row">
                                            <div class="col-sm-12">
                                                <div class="form-group">
                                                    <label for="event_name">Event name</label>
                                                    <input type="text" name="event_name" id="event_name" class="form-control" placeholder="Enter your event name">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-sm-6">
                                                <div class="form-group">
                                                    <label for="event_start_date">Event start</label>
                                                    <input type="date" name="event_start_date" id="event_start_date" class="form-control onlydatepicker" placeholder="Event start date">
                                                </div>
                                            </div>
                                            <div class="col-sm-6">
                                                <div class="form-group">
                                                    <label for="event_end_date">Event end</label>
                                                    <input type="date" name="event_end_date" id="event_end_date" class="form-control" placeholder="Event end date">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-primary" onclick="save_event()">Save Event</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End popup dialog box -->

                    <body>
                        <script>
                            $(document).ready(function() {
                                display_events();
                            }); //end document.ready block

                            function display_events() {
                                var events = new Array();
                                $.ajax({
                                    url: 'display_event.php',
                                    dataType: 'json',
                                    success: function(response) {

                                        var result = response.data;
                                        $.each(result, function(i, item) {
                                            events.push({
                                                event_id: result[i].event_id,
                                                title: result[i].title,
                                                start: result[i].start,
                                                end: result[i].end,
                                                color: result[i].color,
                                                url: result[i].url
                                            });
                                        })
                                        var calendar = $('#calendar').fullCalendar({
                                            defaultView: 'month',
                                            timeZone: 'local',
                                            editable: true,
                                            selectable: true,
                                            selectHelper: true,
                                            select: function(start, end) {
                                                alert(start);
                                                alert(end);
                                                $('#event_start_date').val(moment(start).format('YYYY-MM-DD'));
                                                $('#event_end_date').val(moment(end).format('YYYY-MM-DD'));
                                                $('#event_entry_modal').modal('show');
                                            },
                                            events: events,
                                            eventRender: function(event, element, view) {
                                                element.bind('click', function() {
                                                    alert(event.event_id);
                                                });
                                            }
                                        }); //end fullCalendar block	
                                    }, //end success block
                                    error: function(xhr, status) {
                                        alert(response.msg);
                                    }
                                }); //end ajax block	
                            }

                            function save_event() {
                                var event_name = $("#event_name").val();
                                var event_start_date = $("#event_start_date").val();
                                var event_end_date = $("#event_end_date").val();
                                if (event_name == "" || event_start_date == "" || event_end_date == "") {
                                    alert("Please enter all required details.");
                                    return false;
                                }
                                $.ajax({
                                    url: "save_event.php",
                                    type: "POST",
                                    dataType: 'json',
                                    data: {
                                        event_name: event_name,
                                        event_start_date: event_start_date,
                                        event_end_date: event_end_date
                                    },
                                    success: function(response) {
                                        $('#event_entry_modal').modal('hide');
                                        if (response.status == true) {
                                            alert(response.msg);
                                            location.reload();
                                        } else {
                                            alert(response.msg);
                                        }
                                    },
                                    error: function(xhr, status) {
                                        console.log('ajax error = ' + xhr.statusText);
                                        alert(response.msg);
                                    }
                                });
                                return false;
                            }
                        </script>

                    </body>



                </thead>
            </table>
        </div>
        <!-- /.card-body -->
    </div>
    <!-- /.card -->
    <div class="d-none" id="card-refresh-content">
        The body of the card after card refresh
    </div>
</div>