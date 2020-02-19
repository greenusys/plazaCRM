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
/*  .chat_minimize{
    position: absolute;
    right: 28px;
    top:9px;
    color: white;
  }*/
  .chat_s li span{
    font-size: 12px
  }
  .chat_popup{
    width: 60px; 
    height: 60px ;
     bottom:0px;
     position: fixed;
     z-index: 12;
     right: 0px;
     cursor: pointer;
     border-radius: 1.25rem!important;
  }
  .chat_list{
    display: none;
    bottom:0px;
    position: fixed;
    z-index: 12;
    right: 0px;
    background: #e6e2e2;
    cursor: pointer;
    width: 280px;
    height: 320px;
  }
  .chat_box{
    
    display: block;
    bottom:0px;
    position: fixed;
    z-index: 1500;
    /*right: 286px;*/
    background: #e6e2e2;
    cursor: pointer;
    width: 280px;
    height: 320px;
  }
  .cht_inpt{
    bottom: 0px;
    position: absolute;
    width: 100%;
  }
  .cht_inpt span{
    position: absolute;
    right: 10px;
    z-index: 12;
    top: 14px;
    font-size: 14px;
  }
  .cht_inpt span i{
    font-size: 16px;
  }
  .pop_list{
    bottom: 0px;
    position: fixed;
    z-index: 1522;
  }
  .chat_time{
        font-size: 10px;
       margin-top: 3px;
  }
</style>
<div class="pop_list">
 <!--  <div class="chat_box" id="chat__">
      <div class="d-flex bg-info text-white p-2">
        <div class=" "><h6>User's Name</h6></div> -->
        <!--    <div class="chat_minimize"><i class="fas fa-minus"></i></div> -->
        <!-- <div class="chat_close"><i class="fas fa-times"></i></div>
     
      </div>
      <div class="">
        <div class="">
            <ul class="m-0 list-unstyled">
              <li class="w-75 m-2">
                <div class="  "><span class="p-1 px-2 rounded bg-primary text-white">hi</span></div>
                <div class="chat_time" >5:40 PM</span>
              </li>
              <li class="w-75 m-2 text-right float-right">
                <div class=""><span class="p-1 px-2 rounded  bg-success text-white">hi</span></div>
                <div class="chat_time" >5:40 PM</span>
              </li>
            </ul>
        </div>
        <div class="cht_inpt" style="">
          <input type="text" placeholder="Enter Message" name="" class="form-control">
          <span><i class="fab fa-telegram-plane"></i></span>
        </div>
      </div>
  </div> -->
</div>



<script type="text/javascript">
  $(document).ready(function(){
    $.ajax({
      url:"<?=base_url('Dashboard/fetchOnlineUser')?>",
      type:"post",
      success:function(response){
        console.log(response);
        response=JSON.parse(response);
        if(response.length>0){
          for(let i=0; i<response.length; i++){
            var card='';
            card+='<div class="card border-bottom p-2 opn_chat" frnd_id="'+response[i].user_id+'">';
            card+='<ul class="list-unstyled d-flex chat_s m-0">';
            card+='<li class="">';
            card+='<img src="<?=base_url()?>assets/img/avatar/avatar-3.png"  style="width: 40px;height: 40px"class="rounded-circle" >';
            card+='</li>';
            card+='<li class="ml-1 w-75">';
            card+='<h6 class="m-0 mt-1">'+response[i].fullname+' </h6>';
            // card+='<span>-</span>';
            card+='</li>';
            card+='<li class="text-center" >';
            card+='<h6 class="m-0"><i class="fas fa-circle text-primary"></i></h6>';
            card+='<span class="">Never</span>';
            card+='</li>';
            card+='</ul>';
            card+='</div>';
            $('#onlineUser').append(card);
          }

        }
      }
    });
  });
</script>
<div class="">         
  <div id="sh_dv" class="chat_popup bg-primary p-3" style="">
    <img src="<?=base_url()?>assets/img/comment.png" class="img-fluid" >         
  </div>
  <div  class="chat_list" id="chat_list" style="">
    <div class="d-flex bg-info text-white p-2">
      <div class=" "><h6>User's List</h6></div>
      <div class="chat_close"><i class="fas fa-times"></i></div>
    </div>
    <div class="" id="onlineUser">
      <!-- <div class="card opn_chat border-bottom p-2">
        <ul class="list-unstyled d-flex chat_s m-0">
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
          </ul>
      </div> -->
      <!-- <div class="card border-bottom p-2">
          <ul class="list-unstyled d-flex chat_s m-0">
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
          </ul>
        </div> -->
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
function getConversation(frndId){
  $.ajax({
    url:"<?=base_url('Rahul/getUserChats')?>",
      type:"post",
      data:{user_id:frnd_id},
      success:function(response){

      }
  });
  var msgs='<li class="w-75 m-2">'+
              '<div class="  "><span class="p-1 px-2 rounded bg-primary text-white">hi</span></div>'+
              '<div class="chat_time" >5:40 PM</span>'+
            '</li>'+
            '<li class="w-75 m-2 text-right float-right">'+
              '<div class=""><span class="p-1 px-2 rounded  bg-success text-white">hi</span></div>'+
              '<div class="chat_time" >5:40 PM</span>'+
            '</li>';
  return msgs;
}
$(document).ready(function(){
  var left =0;
  $(document).on("click",".opn_chat",function(){
    var frnd_id=$(this).attr('frnd_id');
    $.ajax({
      url:"<?=base_url('User/getUserByDetails')?>",
      type:"post",
      data:{user_id:frnd_id},
      success:function(response){
        // console.log(response);
        response=JSON.parse(response);
        if(response.length>0){
          var frndName=response[0].fullname;
          // console.log("Full Name : "+frndName);
          if(left < 859){
          var div = '<div class="chat_box" id="chat__" style="left:'+frndName+'px">'+
                      '<div class="d-flex bg-info text-white p-2">'+
                        '<div class=" "><h6>'+frndName+'</h6></div>'+
                        '<div class="chat_close"><i class="fas fa-times"></i></div>'+
                      '</div>'+
                      '<div class="">'+
                        '<div class="">'+
                          '<ul class="m-0 list-unstyled">'+
                          getConversation(response[0].user_id)
                        '</ul>'+
                        '</div>'+
                        '<div class="cht_inpt" style="">'+
                          '<input type="text" placeholder="Enter Message" name="" class="form-control">'+
                          '<span><i class="fab fa-telegram-plane"></i></span>'+
                        '</div>'+
                      '</div>'+
                  '</div>';
           $(".pop_list").append(div);

          left = left+286;
        }else{

          var lt =0;
            $(".pop_list").find('div:first').remove();
            $(".chat_box").each(function() {
              console.log(lt);
                $(this).css("left",lt+"px");
                lt = lt+286;

            });
                  var div =   '<div class="chat_box" id="chat__" style="left:858px">'+
                        '<div class="d-flex bg-info text-white p-2">'+
                          '<div class=" "><h6>'+left+'</h6></div>'+
                          '<div class="chat_close"><i class="fas fa-times"></i></div>'+
                        '</div>'+
                        '<div class="">'+
                          '<div class="">'+
                            getConversation(response[0].user_id)
                          '</div>'+
                          '<div class="cht_inpt" style="">'+
                            '<input type="text" placeholder="Enter Message" name="" class="form-control">'+
                            '<span><i class="fab fa-telegram-plane"></i></span>'+
                          '</div>'+
                        '</div>'+
                    '</div>';
           $(".pop_list").append(div);
         }
        }
      }
    });
    
   });

});

$(document).on("click",".chat_close",function(){
    var lt =0;
        $(this).parent().parent().remove();
        $(".chat_box").each(function() {
          console.log(lt);
            $(this).css("left",lt+"px");
            lt = lt+286;

        });
})
</script>

</body>
</html>
