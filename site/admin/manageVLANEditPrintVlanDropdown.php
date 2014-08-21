<?php

/*
 * Print edit subnet
 *********************/

/* required functions */
if(!function_exists('getSubnetStatsDashboard')) {
	require_once('../../functions/functions.php'); 
}

/* verify that user is logged in */
isUserAuthenticated(false);
?>

<select name="masterVlanId" class="form-control input-sm input-w-auto">
	<option disabled="disabled"><?php print _('Select Master VLAN'); ?>:</option>
	<?php
		$vlans = getAllMasterVlans();
		
		if($_POST['action'] == "add") { $vlan['masterVlanId'] = 0; }

		$tmp[0]['vlanId'] = 0;
		$tmp[0]['number'] = _('No VLAN');
		
		array_unshift($vlans, $tmp[0]);
	
		foreach($vlans as $listvlan) {
			/* set structure */
			$printVLAN = $listvlan['number'];
			
			if(!empty($listvlan['name'])) { $printVLAN .= " ($listvlan[name])"; }
			
			/* selected? */
			if($vlan['masterVlanId'] == $listvlan['vlanId']) { print '<option value="'. $listvlan['vlanId'] .'" selected>'. $printVLAN .'</option>'. "\n"; }
			elseif($_POST['masterVlanId'] == $listvlan['vlanId']) 	{ print '<option value="'. $listvlan['vlanId'] .'" selected>'. $printVLAN .'</option>'. "\n"; }
			else 											{ print '<option value="'. $listvlan['vlanId'] .'">'. $printVLAN .'</option>'. "\n"; }
		}
?>
</select>
