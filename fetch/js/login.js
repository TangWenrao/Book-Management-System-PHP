 $(function () {
      $('#myTab li:eq(1) a').tab('show');
   });
 $(document).ready(function(){
 	function ck(){
 		id = $("input[name = 'id2']").val();
 		pd = $("input[name = 'password2']").val();
 		// console.log(row);
 		if (id == ''||pd == '') {
 			alert("js:用户名或密码不能为空");
 			window.location.href = 'login.php';
 		}else{
 			alert("过");
 		}
 	}
 	$(".btn2").click(ck);
 	// ck();
 })