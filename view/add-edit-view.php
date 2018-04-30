<?php
// Check is add or edit mode
$isEdit = isset($isEdit) ? $isEdit : false;
$formAction = ($isEdit) ? "/controller/update/{$id}" : '/controller/create';
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Document</title>
</head>
<body>
  <form action="<?=$formAction?>">
    <table>
      <tr>
        <td>Title</td>
        <td><input type="text" name="title" value="<?=($isEdit) ? $record['title'] : ''?>" /></td>
      </tr>
      <tr> 
        <td>The Option</td>
        <td>
          <select name="option">
            <option value="1" <?php if($isEdit && $record['option']=='1'): ?>selected<?php endif ?>>First Item</option>
            <option value="2" <?php if($isEdit && $record['option']=='2'): ?>selected<?php endif ?>>2nd Item</option>
          </select>
        </td>
      </tr>
      <tr> 
        <td>Options</td>
        <td>
          <input type="checkbox" name="html_enabled" <?php if($isEdit && $record['html_enabled']): ?>checked<?php endif ?> \> HTML Enabled
          <input type="checkbox" name="lock_enabled" <?php if($isEdit && $record['lock_enabled']): ?>checked<?php endif ?> \> Lock Enabled
        </td>
      </tr>
    </table>
  </form>
</body>
</html>
