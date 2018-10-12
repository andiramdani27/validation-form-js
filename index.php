<html>
<body>
  <form name="myForm">
    <table>
      <tr>
        <td>Username:</td>
        <td><input name="username" id="userName" type="text" onblur ="userNameCheck();">
        	<span id="alert"></span></input>
        </td>
      </tr>
      <tr>
        <td>Password:</td>
        <td><input name="password" id="password" type="password"  onblur ="PasswordCheck();">
        	<span id="alert2"></span></input>
        </td>
      </tr>
      <tr>
        <td></td>
        <td><input type="Button" value="Submit"></input>
        </td>
      </tr>
    </table>
  </form>
  <script>
    //User name field validator - Alert a message for empty input fields
    
    var userNameCheck = function() {
      if (document.myForm.username.value == "") {
        	var test = document.getElementById('alert');
        	test.innerHTML = '<b>USERNAME DI ISI BANG</b>';
        	document.myForm.username.style.border = '2px solid red';
      } else {
      		var test = document.getElementById('alert');
      		test.innerHTML = '<b></b>';
      		document.myForm.username.style.border = '2px solid green';
      }
    }

    var PasswordCheck = function() {
      if (document.myForm.password.value == "") {
        	var test2 = document.getElementById('alert2');
        	test2.innerHTML = '<b>PASSWORD DI ISI BANG</b>';
        	document.myForm.password.style.border = '2px solid red';
      } else {
      		var test2 = document.getElementById('alert2');
      		test2.innerHTML = '<b></b>';
      		document.myForm.password.style.border = '2px solid green';
      }
    }
  </script>
</body>
</html>