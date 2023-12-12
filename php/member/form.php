<script type="text/javascript">
	function check_input(){
		if (!document.member.id.value) {
			alert("put id");
			document.member.id.focus();
			return;
		}
		if (!document.member.pass.value) {
			alert("put pass");
			document.member.pass.focus();
			return;
		}
		if (!document.member.pass_confirm.value) {
			alert("put pass_confirm");
			document.member.pass_confirm.focus();
			return;
		}
		if (!document.member.name.value) {
			alert("put name");
			document.member.name.focus();
			return;
		}
		if (!document.member.email.value) {
			alert("put email");
			document.member.email.focus();
			return;
		}
		if (document.member.pass.value != document.member.pass_confirm.value) {
			alert("Try again");
			document.member.pass.focus();
			document.member.pass.select();
			return;
		}
		document.member.submit();
	}
	function reset_form(){
		document.member.id.value = "";
		document.member.pass.value = "";
		document.member.pass_confirm.value = "";
		document.member.name.value = "";
		document.member.email.value = "";
		document.member.id.focus();
	}
	function check_id(){
		window.open("check_id.php?id=" + document.member.id.value,"IDcheck","left=700 ,top=300,whdith=380,height=160,scrollbars=no,resixable=yes");
	}
</script>
<form name="member" accept="insert.php" method="post">
	<div class="join_form">
		<h2>Sign up</h2>
		<ul>
			<li>
				<span class="col1">ID</span>
				<span class="col2"><input type="text" name="id"></span>
				<span class="col3"><button type="button" onclick="check_id()">Multiple Check</button></span>

			</li>
			<li>
				<span class="col1">PASS</span>
				<span class="col2"><input type="password" name="pass"></span>
			</li>
			<li>
				<span class="col1">PASS CHECK</span>
				<span class="col2"><input type="password" name="pass_confirm"></span>
			</li>
			<li>
				<span class="col1">NAME</span>
				<span class="col2"><input type="text" name="name"></span>
			</li>
			<li>
				<span class="col1">EMAIL</span>
				<span class="col2"><input type="text" name="email"></span>
			</li>
		</ul>
		<ul class="buttons">
			<li><button type="button" onclick="check_input()">SAVE</button> </li>
			<li><button type="button" onclick="reset_form()">CANCLE</button> </li>
		</ul>
	</div>
</form>