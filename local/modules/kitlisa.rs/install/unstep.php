<?

use Bitrix\Main\Localization\Loc;

Loc::loadMessages(__FILE__);

if(!check_bitrix_sessid()){

	return;
}

echo(CAdminMessage::ShowNote(Loc::getMessage("KITLISA_RS_UNSTEP_BEFORE")." ".Loc::getMessage("KITLISA_RS_UNSTEP_AFTER")));
?>

<form action="<? echo($APPLICATION->GetCurPage()); ?>">
	<input type="hidden" name="lang" value="<? echo(LANG); ?>" />
	<input type="submit" value="<? echo(Loc::getMessage("KITLISA_RS_UNSTEP_SUBMIT_BACK")); ?>">
</form>
