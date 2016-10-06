// Define the rules for each element in the group
$first_name_rule = array('Invalid First Name','minlength',3);
$middle_name_rule = array('Invalid Middle Name','minlength',3);
$last_name_rule_1 = array('Last Name is required','required');
$last_name_rule_2 = array('Invalid Last Name','maxlength',20);

// Collect together the rules for each element
$first_rules = array($first_name_rule);
$middle_rules = array($middle_name_rule);
$last_rules = array($last_name_rule_1, $last_name_rule_2);

// Add the rules to the group
$form->addGroupRule('name',array($first_rules, $middle_rules, $last_rules));
