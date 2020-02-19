<footer class="main-footer">
        <div class="footer-left">
          Copyright &copy; 2019 
          <!-- <div class="bullet"></div> Design By  -->
        </div>
        <div class="footer-right">
          2.3.0
        </div>
      </footer>
    </div>
  </div>
<script type="text/javascript">
  $(document).ready(function() {
    $('#example').DataTable( {
        dom: 'Bfrtip',
        buttons: [
            'copy', 'csv', 'excel', 'pdf', 'print'
        ]
    } );
} );
</script>
   <script type="text/javascript">
    //  $('tbody').sortable();
    </script>
    <script>

  document.addEventListener('DOMContentLoaded', function() {
    var calendarEl = document.getElementById('calendar');

    var calendar = new FullCalendar.Calendar(calendarEl, {
      plugins: [ 'interaction', 'dayGrid', 'timeGrid' ],
      header: {
        left: 'prev,next today',
        center: 'title',
        right: 'dayGridMonth,timeGridWeek,timeGridDay'
      },
      defaultDate: '2019-08-12',
      navLinks: true, // can click day/week names to navigate views
      selectable: true,
      selectMirror: true,
      select: function(arg) {
        var title = prompt('Event Title:');
        if (title) {
          calendar.addEvent({
            title: title,
            start: arg.start,
            end: arg.end,
            allDay: arg.allDay
          })
        }
        calendar.unselect()
      },
      editable: true,
      eventLimit: true, // allow "more" link when too many events
      events: [
        {
          title: 'All Day Event',
          start: '2019-08-01'
        },
        {
          title: 'Long Event',
          start: '2019-08-07',
          end: '2019-08-10'
        },
        {
          groupId: 999,
          title: 'Repeating Event',
          start: '2019-08-09T16:00:00'
        },
        {
          groupId: 999,
          title: 'Repeating Event',
          start: '2019-08-16T16:00:00'
        },
        {
          title: 'Conference',
          start: '2019-08-11',
          end: '2019-08-13'
        },
        {
          title: 'Meeting',
          start: '2019-08-12T10:30:00',
          end: '2019-08-12T12:30:00'
        },
        {
          title: 'Lunch',
          start: '2019-08-12T12:00:00'
        },
        {
          title: 'Meeting',
          start: '2019-08-12T14:30:00'
        },
        {
          title: 'Happy Hour',
          start: '2019-08-12T17:30:00'
        },
        {
          title: 'Dinner',
          start: '2019-08-12T20:00:00'
        },
        {
          title: 'Birthday Party',
          start: '2019-08-13T07:00:00'
        },
        {
          title: 'Click for Google',
          url: 'http://google.com/',
          start: '2019-08-28'
        }
      ]
    });

    calendar.render();
  });

</script>

<script type="text/javascript">

function gebi(id)
{
    return document.getElementById(id);
}

RowSorter(gebi('table2'), {
    handler: 'td.sorter',
    onDrop: function(tbody, row, new_index, old_index) {
        var table = tbody.nodeName === 'TBODY' ? tbody.parentNode : tbody;
        table.querySelectorAll('tfoot td')[0].innerHTML = (old_index + 1) + '. row moved to ' + (new_index + 1);
    }
});


</script>
<style>
  .chat_close{
    position: absolute;
    right: 10px;
    top:6px;
    color: white;
  }
  .chat_s li span{
    font-size: 12px
  }
</style>
 <!-- <script type="text/javascript">
            $(document).on("click",".check_btn",function(){
              $(".check_btn").removeClass("d-none");
                $(this).addClass("d-none");

            })
          </script> -->
<div class="">         
  <div id="sh_dv" class="bg-primary rounded p-3" style="width: 70px; height: 70px ; bottom:0px;position: fixed;z-index: 12;right: 0px;background: red;cursor: pointer">
    <img src="<?=base_url()?>assets/img/comment.png" class="img-fluid" >         
  </div>
  <div  class="" id="chat_list" style="display: none;bottom:0px;position: fixed;z-index: 12;right: 0px;background: #e6e2e2;cursor: pointer;width: 280px;height: 320px">
    <div class="d-flex bg-info text-white p-2">
      <div class=" "><h6>User's List</h6></div>
      <div class="chat_close"><i class="fas fa-times"></i></div>
    </div>
    <div class="">
      <div class="card p-2">
        <ul class="list-unstyled d-flex chat_s">
          <li class="">
            <img src="<?=base_url()?>assets/img/avatar/avatar-3.png"  style="width: 40px;height: 40px"class="rounded-circle" >
          </li>
          <li class="ml-1 w-75">
            <h6 class="m-0 mt-1">Ali </h6>
            <span>-</span>
          </li>
          <li class="text-center" >
            <h6 class="m-0"><i class="fas fa-circle"></i></h6>
            <span class="">Never</span>
          </li>
        </div>
      </div>
    </div>
  </div>
</div>
<script type="text/javascript">
$(document).on("click","#sh_dv",function(){
  $(this).hide();
  $("#chat_list").show();

})  
$(document).on("click",".chat_close",function(){
  $("#sh_dv").show();
  $("#chat_list").hide();

})  
</script>

</body>
</html>
