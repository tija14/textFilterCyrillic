<div class='comment-form'>
    <form method=post>
        <input type=hidden name="redirect" value="<?=$this->url->create($pageId)?>">
         
        <fieldset>
        <legend>Translate from latin to crylic</legend>
        <p><label>Text:<br/><textarea name='text'></textarea></label></p>
        
        <p class=buttons>
        
        
            <input type='submit' name='doCreate' value='Comment' onClick="this.form.action = ''"/>
            <input type='reset' value='Reset'/>
            
        </p>
		<?php if(isset($output)) : ?>
        <output><?=$output?></output>
		<?php endif; ?>
        </fieldset>
    </form>
</div>

