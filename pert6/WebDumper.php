<?PHP
class WebDumper extends Dumper
{
	public function dump($data)
	{
		echo '<pre>';
		var_dump($data);
		echo '</pre>';
	}
}
?>
