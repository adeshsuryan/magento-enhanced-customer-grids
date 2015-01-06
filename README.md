magento-enhanced-customer-grids
===============================

Enhanced Customer Grids with Custom Attribute

Enhanced Customer Grids magento extension is event based extension by  which  we can add custom attribute in cutomer section

and append in customer grid .

Events :

core_block_abstract_prepare_layout_before
Compatible with: 1.5, 1.6, 1.6.1, 1.6.2.0, 1.7, 1.8, 1.8.1, 1.9,1.13,1.14

Note : You  can define scope of custom attribute  at  the time of installer  setup  like below :


//$used_in_forms[]="checkout_register";
//$used_in_forms[]="customer_account_create";
//$used_in_forms[]="customer_account_edit";
//$used_in_forms[]="adminhtml_checkout";