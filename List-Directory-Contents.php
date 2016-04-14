function list_files($dir)
{
	if(is_dir($dir))
  	{
  		if($handle = opendir($dir))
  		{
  			while(($file = readdir($handle)) !== false)
  			{
  				if($file != "." && $file != ".." && $file != "Thumbs.db")
  				{
  					echo '<a target="_blank" href="'.$dir.$file.'">'.$file.'</a><br>'."\n";
  				}
  			}
  			closedir($handle);
  		}
	}
}
