<?if(!defined("B_PROLOG_INCLUDED")||B_PROLOG_INCLUDED!==true)die();?>
<div class="container">
	<div class="row">
		<div class="mfeedback">
			<?if(!empty($arResult["ERROR_MESSAGE"]))
			{
				foreach($arResult["ERROR_MESSAGE"] as $v)
					ShowError($v);
			}
			if(strlen($arResult["OK_MESSAGE"]) > 0)
			{
				?><div class="mf-ok-text"><?=$arResult["OK_MESSAGE"]?></div><?
			}
			?>

			<h1>Остались вопросы?</h1>

			<form action="" method="POST">
			<?=bitrix_sessid_post()?>
				<div class="mf-name">
			<!-- 		<div class="mf-text">
						<?=GetMessage("MFT_NAME")?><?if(empty($arParams["REQUIRED_FIELDS"]) || in_array("NAME", $arParams["REQUIRED_FIELDS"])):?><span class="mf-req">*</span><?endif?>
					</div> -->
					<input type="text" name="user_name" placeholder="<?=GetMessage("MFT_NAME")?><?if(empty($arParams["REQUIRED_FIELDS"]) || in_array("NAME", $arParams["REQUIRED_FIELDS"])):?><span class="mf-req">*</span><?endif?>" value="<?=$arResult["AUTHOR_NAME"]?>">
				</div>
				<div class="mf-email">
			<!-- 		<div class="mf-text">
						<?=GetMessage("MFT_EMAIL")?><?if(empty($arParams["REQUIRED_FIELDS"]) || in_array("EMAIL", $arParams["REQUIRED_FIELDS"])):?><span class="mf-req">*</span><?endif?>
					</div> -->
					<input type="text" name="user_email" placeholder="<?=GetMessage("MFT_EMAIL")?><?if(empty($arParams["REQUIRED_FIELDS"]) || in_array("EMAIL", $arParams["REQUIRED_FIELDS"])):?><span class="mf-req">*</span><?endif?>" value="<?=$arResult["AUTHOR_EMAIL"]?>">
				</div>

			<!-- 	<div class="mf-message">
					<div class="mf-text">
						<?=GetMessage("MFT_MESSAGE")?><?if(empty($arParams["REQUIRED_FIELDS"]) || in_array("MESSAGE", $arParams["REQUIRED_FIELDS"])):?><span class="mf-req">*</span><?endif?>
					</div>
					<textarea name="MESSAGE" rows="5" cols="40"><?=$arResult["MESSAGE"]?></textarea>
				</div> -->
				<?foreach($arParams["NEW_EXT_FIELDS"] as $i => $ext_field):?>
					<div class="mf-phone">
			<!-- 			<div class="mf-text">
							<?=$ext_field?>
						</div> -->
						<input type="text" name="custom[<?$i?>]" placeholder="<?=$ext_field?>" value="<?=$arResult["custom_$i"]?>">
					</div>
				<?endforeach;?>
				<?if($arParams["USE_CAPTCHA"] == "Y"):?>
				<div class="mf-captcha">
					<div class="mf-text"><?=GetMessage("MFT_CAPTCHA")?></div>
					<input type="hidden" name="captcha_sid" value="<?=$arResult["capCode"]?>">
					<img src="/bitrix/tools/captcha.php?captcha_sid=<?=$arResult["capCode"]?>" width="180" height="40" alt="CAPTCHA">
					<div class="mf-text"><?=GetMessage("MFT_CAPTCHA_CODE")?><span class="mf-req">*</span></div>
					<input type="text" name="captcha_word" size="30" maxlength="50" value="">
				</div>
				<?endif;?>
				<input type="submit" name="submit" value="<?=GetMessage("MFT_SUBMIT")?>">
			</form>
			</div>
	</div>
</div>
