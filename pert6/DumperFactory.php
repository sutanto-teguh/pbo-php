<?PHP
class DumperFactory
{
	public static function getDumper()
	{
		return PHP_SAPI === 'cli'
			? new ConsoleDumper()
			: new WebDumper();
	}
}
?>
