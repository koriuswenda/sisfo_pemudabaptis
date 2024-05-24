<div class="col-md-12">
  <div class="card card-outline card-primary">
    <div class="card-header">
      <h3 class="card-title"> <i class="far fa-calendar sp-2"></i><b><?= $judul ?></b></h3>

      <div class="card-tools">
        <a href="download-pdf-Datapemuda.php" class="btn btn-danger mb-0 pw-0 p-2">
          <i class="fas fa-file-pdf mb-0 pw-0"> Download Pdf</i></a>
        <a href="<?= base_url('Tambahevents') ?>" class="btn btn-primary">
          <i class="fas fa-plus"><b>Tambah Data Events</b></i>
        </a>
      </div>
      <!-- /.card-tools -->
    </div>
    <!-- /.card-header -->
    <div class="card-body">
      <table class="table table-bordered text-center">
        <thead>

          <head>
            <meta charset='utf-8' />
            <script src='assets/fullcalendar/dist/index.global.js'></script>
            <script>
              document.addEventListener('DOMContentLoaded', function() {
                var calendarEl = document.getElementById('calendar');

                var calendar = new FullCalendar.Calendar(calendarEl, {
                  initialDate: '2024-01-12',
                  initialView: 'timeGridWeek',
                  nowIndicator: true,
                  headerToolbar: {
                    left: 'prev,next today',
                    center: 'title',
                    right: 'dayGridMonth,timeGridWeek,timeGridDay,listWeek'
                  },
                  navLinks: true, // can click day/week names to navigate views
                  editable: true,
                  selectable: true,
                  selectMirror: true,
                  dayMaxEvents: true, // allow "more" link when too many events
                  events: [{
                      title: 'All Day Event',
                      start: '2024-01-01',
                    },
                    {
                      title: 'Long Event',
                      start: '2024-01-07',
                      end: '2024-01-10'
                    },
                    {
                      groupId: 999,
                      title: 'Repeating Event',
                      start: '2024-01-09T16:00:00'
                    },
                    {
                      groupId: 999,
                      title: 'Repeating Event',
                      start: '2024-01-16T16:00:00'
                    },
                    {
                      title: 'Conference',
                      start: '2024-01-11',
                      end: '2024-01-13'
                    },
                    {
                      title: 'Meeting',
                      start: '2024-01-12T10:30:00',
                      end: '2024-01-12T12:30:00'
                    },
                    {
                      title: 'Lunch',
                      start: '2024-01-12T12:00:00'
                    },
                    {
                      title: 'Meeting',
                      start: '2024-01-12T14:30:00'
                    },
                    {
                      title: 'Happy Hour',
                      start: '2024-01-12T17:30:00'
                    },
                    {
                      title: 'Dinner',
                      start: '2024-01-12T20:00:00'
                    },
                    {
                      title: 'pemilihan',
                      start: '2024-01-13T07:00:00'
                    },
                    {
                      title: 'Birthday Party',
                      start: '2024-02-14T07:00:00'
                    },
                    {
                      title: 'Click for Google',
                      url: 'http://google.com/',
                      start: '2024-01-28'
                    }
                  ]
                });

                calendar.render();
              });
            </script>
            <style>
              body {
                margin: 40px 10px;
                padding: 0;
                font-family: Arial, Helvetica Neue, Helvetica, sans-serif;
                font-size: 14px;
              }

              #calendar {
                max-width: 1100px;
                margin: 0 auto;
              }
            </style>
          </head>

          <body>

            <div id='calendar'></div>

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