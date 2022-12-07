<?
function dump($var, $die = false, $all = false)
{
	global $USER;
	if ($USER -> IsAdmin() || ($all == true))
	{
		?>
		<font style="text-align: left; font-size: 15px">
			<pre><? var_dump($var) ?></pre>
		</font><br>
		<?
	}
	if ($die)
	{
		die;
	}
}

function url_dump ($var)
{
	if ($_REQUEST["url_dump"]=="y") {
		?>
		<font style="text-align: left; font-size: 15px">
			<pre><? var_dump($var) ?></pre>
		</font><br>
		<?
	}
	?>
<?}

?>