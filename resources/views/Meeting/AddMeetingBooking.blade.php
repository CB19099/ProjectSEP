<html>

<!---------Add Booking Form for student to book meeting------->
<div class="backgroundbox">
	<!------Button For View Item List & View Booking------->
	<center>
		<button class="btn active"><a href="">Add Booking</a></button>
        <button class="btn active"><a href="" target="_blank">View Booking </a></button>
  </center>
		  <br><br>
<center><fieldset>
<h2 style="text-align: center;">BOOKING FORM</h2>
<br>
<table>
	<form name="meetingForm" method="post" action="">
	<tr>
		<p>
		<td>
		<label for="BookingID">Sv ID:</label>
		</td>
		<td>
		<input type="text" name="SV_ID" id="SV_ID">
		</td>
		</p>
	</tr>

	<tr>
		<p>
		<td>
		<label for="id">Student ID:</label>
		</td>
		<td>
		<input type="text" name="STD_ID" id="STD_ID">
		<td>
		</p>
	</tr>

	
<tr>
	<p>
	<td>
	<label for=Meeting_Date>Booking Date:</label>
	</td>
	<td>
	<input type="date" name="Meeting_Date" id="Meeting_Date">
	</td>
	</p>
</tr>

<tr>
	<p>
	<td>
	<label for=Meeting_Start>Start Time:</label>
	</td>
	<td>
	<input type="time" name="Meeting_Start" id="Meeting_Start">
	</td>
	</p>
</tr>

<tr>
	<p>
	<td>
	<label for=Meeting_End>End Time:</label>
	</td>
	<td>
	<input type="time" name="Meeting_End" id="Meeting_End">
	</td>
	</p>
</tr>

<tr>
		<p>
		<td>
		<label for="Meeting_Purpose">Purpose:</label>
		</td>
		<td>
		<input type="text" name="Meeting_Purpose" id="Meeting_Purpose">
		<td>
		</p>
	</tr>
</table>
<p></p>
<p>
<input type="submit" name="Submit" id="Submit" value="Submit" method="post">
</p>
</form>
</fieldset>
</center>

</div>
</body>
</html>