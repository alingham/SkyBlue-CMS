<?php defined('SKYBLUE') or die('Bad file request');

/**
* @version      2.0 2009-06-20 21:41:00 $
* @package      SkyBlueCanvas
* @copyright    Copyright (C) 2005 - 2010 Scott Edwin Lewis. All rights reserved.
* @license      GNU/GPL, see COPYING.txt
* SkyBlueCanvas is free software. This version may have been modified pursuant
* to the GNU General Public License, and as distributed it includes or
* is derivative of works licensed under the GNU General Public License or
* other free or open source software licenses.
* See COPYING.txt for copyright notices and details.
*/

/**
* @author Scott Lewis
* @date   June 20, 2009
*/

$Item = $this->getData();
$theAction = $this->getVar('action');

add_head_element('jquery.cookie');
add_head_element('jquery.utils');
add_head_element('page.onload', TABS_JS);
add_head_element('page.style',  TABS_CSS);

?>
<div class="jquery_tab">
    <div class="content">
        <h2>
            <a href="admin.php?com=snippets"><?php __('COM.SNIPPETS', 'Snippets'); ?></a> / 
            <?php __("GLOBAL.{$theAction}", ucwords($theAction)); ?> / 
            <?php echo $Item->getName(); ?>
        </h2>
        
        <?php echo HtmlUtils::formatMessage($this->getMessage()); ?>
        
        <?php HtmlUtils::mgrFormOpen($this->getVar('com')); ?>

        <p class="buttons-top">
            <?php HtmlUtils::mgrButton('BTN.CANCEL', 'cancel'); ?>
            <?php HtmlUtils::mgrButton('BTN.NEXT', 'next'); ?>
        </p>
        
        <div id="tabs">
            <ul>
                <li><a href="#tab-one"><?php echo $Item->getName(); ?></a></li>
            </ul>
            
            <!-- First Tab -->
            <div class="tab-body" id="tab-one">
                <fieldset class="three-column last">
                    <div class="column">
                        <label for="id"><?php __('SNIPPETS.ID', 'Snippet ID'); ?>:</label> <?php echo $Item->getId(); ?>
                        <input id="id" type="hidden" name="id" value="<?php echo $Item->getId(); ?>" />
                    </div>
                    <div class="column">
                        <label for="snippetType"><?php __('SNIPPETS.SNIPPETTYPE', 'Snippet Type'); ?></label>
                        <?php echo SnippetsHelper::getTypeSelector($Item->getSnippetType()); ?>
                    </div>
                    <div class="clear"></div>
                </fieldset>
           </div>
        </div>
        <p class="buttons-bottom">
            <?php HtmlUtils::mgrButton('BTN.CANCEL', 'cancel'); ?>
            <?php HtmlUtils::mgrButton('BTN.NEXT', 'next'); ?>
        </p>

        <input type="hidden" name="new_item" value="<?php echo $this->getVar('new_item'); ?>" />
        <input type="hidden" name="is_new" value="<?php echo $this->getVar('is_new'); ?>" />
        <?php HtmlUtils::mgrFormClose(); ?>
    </div>
</div>