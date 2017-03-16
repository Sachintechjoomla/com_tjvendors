<?php
/**
 * @version    CVS: 1.0.0
 * @package    Com_Tjvendors
 * @author     Parth Lawate <contact@techjoomla.com>
 * @copyright  2016 Parth Lawate
 * @license    GNU General Public License version 2 or later; see LICENSE.txt
 */
// No direct access
defined('_JEXEC') or die();
?>
<?php if (JFactory::getUser()->id && !empty($this->vendor_id) ){?>

	<input type="hidden" name="client" value="<?php echo $this->input->get('client', '', 'STRING'); ?>" />
<div class="vendor-cover row-fluid">
	<div class="span3">
	<img alt="" src="<?php echo JUri::root() . $this->VendorDetail->vendor_logo; ?>">
	</div>
	<div class="span9">
		<div>
			<h3>
				<?php echo $this->VendorDetail->vendor_title; ?>
			</h3>
		</div>
		<div>
			<?php echo $this->VendorDetail->vendor_description; ?>
		</div>

	</div>
</div>
<div class="vendor-cover row-fluid">
		<div class="span6">
			<?php 
				if(!empty($this->clientsForVendor))
				{
					echo "<br>You are a vendor for:";
					foreach($this->clientsForVendor as $client)
					{
						echo "<li> ".JText::_("COM_TJVENDORS_VENDOR_CLIENT_" . strtoupper($client))." </li> ";
					}
				}
			 ?>
		</div>
		<div class="span6">
			<span class="vendor-action pull-right"><a class="btn btn-primary" href="<?php echo JRoute::_('index.php?option=com_tjvendors&view=vendor&&status=update&layout=edit&client=' .$this->input->get('client', '', 'STRING'). '&vendor_id=' . $this->vendor_id );?>"><?php echo JText::_("COM_TJVENDORS_VENDOR_UPDATE"); ?></a></span>
		</div>
</div>
<?php }
else
{
	$link =JRoute::_('index.php?option=com_users');
	$app = JFactory::getApplication();
	$app->redirect($link);
} ?>
