<?php
  session_start();
  include 'includes/header.inc';
  if(isset($_SESSION['username']))
  {
	echo "<script> $('#logout').css('display', 'block'); </script>";
  }
?>

<br><br>





<div class="container">

  <div class="location_box">

   <h4>Locations</h4>
      <hr>

    <table>

      <tr>

        <td class="details_location">

          <h5>West Melbourne Location</h5>

          <i class="fa fa-map-marker" aria-hidden="true"></i><span> 420 Jones Street, West Melbourne VIC 3003 </span><br>

          <i class="fa fa-envelope" aria-hidden="true"></i><span> Contact@mcm.com</span><br>

          <i class="fa fa-phone" aria-hidden="true"></i><span> 1300 865 093</span><br>

          <ul>

          <li><i class="fa fa-clock-o" aria-hidden="true"></i> Monday	10am–5pm</li>

          <li><i class="fa fa-clock-o" aria-hidden="true"></i> Tuesday	10am–5pm</li>

          <li><i class="fa fa-clock-o" aria-hidden="true"></i> Wednesday	10am–5pm</li>

          <li><i class="fa fa-clock-o" aria-hidden="true"></i> Thursday	10am–5pm</li>

          <li><i class="fa fa-clock-o" aria-hidden="true"></i> Friday	10am–5pm</li>

          <li><i class="fa fa-clock-o" aria-hidden="true"></i> Saturday	10am–2pm</li>

          <li><i class="fa fa-clock-o" aria-hidden="true"></i> Sunday	Closed</li>

          </ul>

        </td>

        <td>

          <iframe class="location_map"

              frameborder="0"


              src="https://www.google.com/maps/embed/v1/place?key=AIzaSyAUaGg8JkhPhtDMpSzS-XHWgUJdkKziTX0

                &q=West+Melbourne, Victoria" allowfullscreen>

          </iframe>

        </td>

      </tr>

      <tr>

        <td class="details_location">

          <h5>South Bank Location</h5>

          <i class="fa fa-map-marker" aria-hidden="true"></i><span> 43 Sunnyside Road, SouthBank VIC 3006 </span><br>

          <i class="fa fa-envelope" aria-hidden="true"></i><span> Contact@mcm.com</span><br>

          <i class="fa fa-phone" aria-hidden="true"></i><span> 1300 865 093</span><br>

          <ul>

          <li><i class="fa fa-clock-o" aria-hidden="true"></i> Monday	10am–5pm</li>

          <li><i class="fa fa-clock-o" aria-hidden="true"></i> Tuesday	10am–5pm</li>

          <li><i class="fa fa-clock-o" aria-hidden="true"></i> Wednesday	10am–5pm</li>

          <li><i class="fa fa-clock-o" aria-hidden="true"></i> Thursday	10am–5pm</li>

          <li><i class="fa fa-clock-o" aria-hidden="true"></i> Friday	10am–5pm</li>

          <li><i class="fa fa-clock-o" aria-hidden="true"></i> Saturday	10am–2pm</li>

          <li><i class="fa fa-clock-o" aria-hidden="true"></i> Sunday	Closed</li>

          </ul>



        </td>

        <td>

          <iframe class="location_map"

              frameborder="0"

              src="https://www.google.com/maps/embed/v1/place?key=AIzaSyAUaGg8JkhPhtDMpSzS-XHWgUJdkKziTX0

                &q=SouthBank, Victoria" allowfullscreen>

          </iframe>

        </td>

      </tr>

      <tr>

        <td class="details_location">

          <h5>North Melbourne Location</h5>

          <i class="fa fa-map-marker" aria-hidden="true"></i><span>  67 Goldfields Road, North Melbourne VIC 3051 </span><br>

          <i class="fa fa-envelope" aria-hidden="true"></i><span> Contact@mcm.com</span><br>

          <i class="fa fa-phone" aria-hidden="true"></i><span> 1300 865 093</span><br>

          <ul>

          <li><i class="fa fa-clock-o" aria-hidden="true"></i> Monday	10am–5pm</li>

          <li><i class="fa fa-clock-o" aria-hidden="true"></i> Tuesday	10am–5pm</li>

          <li><i class="fa fa-clock-o" aria-hidden="true"></i> Wednesday	10am–5pm</li>

          <li><i class="fa fa-clock-o" aria-hidden="true"></i> Thursday	10am–5pm</li>

          <li><i class="fa fa-clock-o" aria-hidden="true"></i> Friday	10am–5pm</li>

          <li><i class="fa fa-clock-o" aria-hidden="true"></i> Saturday	10am–2pm</li>

          <li><i class="fa fa-clock-o" aria-hidden="true"></i> Sunday	Closed</li>

          </ul>



        </td>

        <td>

          <iframe class="location_map"

              frameborder="0"

              src="https://www.google.com/maps/embed/v1/place?key=AIzaSyAUaGg8JkhPhtDMpSzS-XHWgUJdkKziTX0

                &q=North+Melbourne, Victoria" allowfullscreen>

          </iframe>

        </td>

      </tr>

      <tr>

        <td class="details_location">

          <h5>Port Melbourne Location</h5>

          <i class="fa fa-map-marker" aria-hidden="true"></i><span>28 Beach Street, Port Melbourne VIC 3207 </span><br>

          <i class="fa fa-envelope" aria-hidden="true"></i><span> Contact@mcm.com</span><br>

          <i class="fa fa-phone" aria-hidden="true"></i><span> 1300 865 093</span><br>

          <ul>

          <li><i class="fa fa-clock-o" aria-hidden="true"></i> Monday	10am–5pm</li>

          <li><i class="fa fa-clock-o" aria-hidden="true"></i> Tuesday	10am–5pm</li>

          <li><i class="fa fa-clock-o" aria-hidden="true"></i> Wednesday	10am–5pm</li>

          <li><i class="fa fa-clock-o" aria-hidden="true"></i> Thursday	10am–5pm</li>

          <li><i class="fa fa-clock-o" aria-hidden="true"></i> Friday	10am–5pm</li>

          <li><i class="fa fa-clock-o" aria-hidden="true"></i> Saturday	10am–2pm</li>

          <li><i class="fa fa-clock-o" aria-hidden="true"></i> Sunday	Closed</li>

          </ul>



        </td>

        <td>

          <iframe class="location_map"

              frameborder="0"

              src="https://www.google.com/maps/embed/v1/place?key=AIzaSyAUaGg8JkhPhtDMpSzS-XHWgUJdkKziTX0

                &q=Port+Melbourne, Victoria" allowfullscreen>

          </iframe>

        </td>

      </tr>

      <tr>

        <td class="details_location">

          <h5>Kensington Location</h5>

          <i class="fa fa-map-marker" aria-hidden="true"></i><span> 66 Harris Street, Kensington VIC 3031 </span><br>

          <i class="fa fa-envelope" aria-hidden="true"></i><span> Contact@mcm.com</span><br>

          <i class="fa fa-phone" aria-hidden="true"></i><span> 1300 865 093</span><br>

          <ul>

          <li><i class="fa fa-clock-o" aria-hidden="true"></i> Monday	10am–5pm</li>

          <li><i class="fa fa-clock-o" aria-hidden="true"></i> Tuesday	10am–5pm</li>

          <li><i class="fa fa-clock-o" aria-hidden="true"></i> Wednesday	10am–5pm</li>

          <li><i class="fa fa-clock-o" aria-hidden="true"></i> Thursday	10am–5pm</li>

          <li><i class="fa fa-clock-o" aria-hidden="true"></i> Friday	10am–5pm</li>

          <li><i class="fa fa-clock-o" aria-hidden="true"></i> Saturday	10am–2pm</li>

          <li><i class="fa fa-clock-o" aria-hidden="true"></i> Sunday	Closed</li>

          </ul>



        </td>

        <td>

          <iframe class="location_map"

              frameborder="0"

              src="https://www.google.com/maps/embed/v1/place?key=AIzaSyAUaGg8JkhPhtDMpSzS-XHWgUJdkKziTX0

                &q=Kensington, Victoria" allowfullscreen>

          </iframe>

        </td>

      </tr>

    </table>



  </div>



</div>

<br><br>



</div>



<?php

  include 'includes/footer.inc';

?>

