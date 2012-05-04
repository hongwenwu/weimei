<?php
$this->load->view('header');
?>
<div id="main">
<div id="inner-main">
	<h1>帐号设置</h1>
	<div class="content">
<ul class="ihome-nav">
		<li><a href="/user/set">个人资料</a></li>
		<li class="current">修改头像</a></li>
		<li><a href="/user/set_pwd">修改密码</a></li>
		</ul>
		<div class="br"></div>
		<form action="" id="ihome" method="post">
			<table class="frm-tbl">
				<tbody><tr>
					<td><div style="width:60px;">&nbsp;</div></td>
					<td><span style="color:red" id="error"><?php echo isset($msg)?$msg:'';?></span></td>
				</tr>
				<tr>
					<td>邮箱：</td>
					<td><input type="text" disabled="" id="email" value="<?php echo $email;?>" name="email" class="input-r input-d" ></td>
				</tr>
				<tr>
					<td>昵称：</td>
					<td><input type="text" id="username" value="<?php echo $username;?>" name="username" class="input-r" ></td>
				</tr>
				<tr>
					<td>加入时间：</td>
					<td><input type="text" disabled=""  value="<?=$regTime?>"  class="input-r input-d" ></td>
				</tr>
				
				<tr>
					<td>生日：</td>
					<td><input type="text" name='birthday' value="<?=$birthday?>" class="input-r" ></td>
				</tr>	
				<tr>
					<td>上次登录时间：</td>
					<td><input type="text" disabled='' name='lastLogin' value="<?=$lastLogin?>" class="input-r input-d" ></td>
				</tr>	
				<tr>
					<td>性别：</td>
					<td><input type="text" name='sex' value="<?=$sex?>" class="input-r" >(MM or GG)</td>
				</tr>	
				<tr>
					<td>QQ：</td>
					<td><input type="text" maxlength="11" id="qq" value="<?php echo $qq;?>" name="qq" class="input-r" ></td>
				</tr>
				<tr>
					<td>所在城市：</td>
					<td><input type="text" maxlength="10" id="city" value="<?php echo $city;?>" name="city" class="input-r" ></td>
				</tr>
				<tr>
					<td>关于我：</td>
					<td> <textarea name="about" id="descr" class="textarea" cols="70" rows="10"><?php echo $about;?></textarea></td>
				</tr>
				<tr>
					<td>&nbsp;</td>
					<td><input type="submit" value="保存修改" class="red-btn"></td>
				</tr>
				
				</tbody></table>
			</form>
		</div>
	<div class="sidebar">
	</div>
</div>
</div>
<?php
$this->load->view('footer');
?>