<div id="wql_menu">
	<ul class="wql_left">
		<h3><?php _e('Orders','woocommerce'); ?></h3>
		<li><a href="<?php echo admin_url('edit.php?post_type=shop_order'); ?>"><?php _e('Orders','woocommerce') ?></a></li>
		<li><a href="<?php echo admin_url('post-new.php?post_type=shop_order'); ?>"><?php _e('Add Order','woocommerce') ?></a></li>
	</ul>
	<ul class="wql_right">
		<h3><?php _e('Coupons','woocommerce'); ?></h3>
		<li><a href="<?php echo admin_url('edit.php?post_type=shop_coupon'); ?>"><?php _e('Coupons','woocommerce') ?></a></li>
		<li><a href="<?php echo admin_url('post-new.php?post_type=shop_coupon'); ?>"><?php _e('Add Coupon','woocommerce') ?></a></li>
	</ul>
	<h3><?php _e('Reports','woocommerce'); ?></h3>

	


			<ul class="wql_left">
			<h4><?php _e('Orders','woocommerce'); ?></h4>
				<li><a href="<?php echo admin_url('admin.php?page=wc-reports&tab=orders&report=sales_by_date'); ?>"><?php _e('Sales by date','woocommerce'); ?></a></li>
				<li><a href="<?php echo admin_url('admin.php?page=wc-reports&tab=orders&report=sales_by_product'); ?>"><?php _e('Sales by product','woocommerce'); ?></a></li>
				<li><a href="<?php echo admin_url('admin.php?page=wc-reports&tab=orders&report=sales_by_category'); ?>"><?php _e('Sales by category','woocommerce'); ?></a></li>
				<li><a href="<?php echo admin_url('admin.php?page=wc-reports&tab=orders&report=coupon_usage'); ?>"><?php _e('Coupons by date','woocommerce'); ?></a></li>
			</ul>
			<ul class="wql_right">
			<h4><?php _e('Customers','woocommerce'); ?></h4>
				<li><a href="<?php echo admin_url('admin.php?page=wc-reports&tab=customers&report=customers'); ?>"><?php _e('Customers vs. Guests','woocommerce'); ?></a></li>
				<li><a href="<?php echo admin_url('admin.php?page=wc-reports&tab=customers&report=customer_list'); ?>"><?php _e('Customer List','woocommerce'); ?></a></li>
			</ul>
			<ul class="wql_left">
			<h4><?php _e('Stock','woocommerce'); ?></h4>
				<li><a href="<?php echo admin_url('admin.php?page=wc-reports&tab=stock&report=low_in_stock'); ?>"><?php _e('Low in stock','woocommerce'); ?></a></li>
				<li><a href="<?php echo admin_url('admin.php?page=wc-reports&tab=stock&report=out_of_stock'); ?>"><?php _e('Out of stock','woocommerce'); ?></a></li>
				<li><a href="<?php echo admin_url('admin.php?page=wc-reports&tab=stock&report=most_stocked'); ?>"><?php _e('Most Stocked','woocommerce'); ?></a></li>
			
			</ul>

	

	<li><a href="<?php echo admin_url('admin.php?page=wc-settings'); ?>"><?php _e('Settings','woocommerce') ?></a>
		<ul>
			<li><a href="<?php echo admin_url('admin.php?page=wc-settings&tab=general'); ?>"><?php _e('General','woocommerce'); ?></a></li>
			<li><a href="<?php echo admin_url('admin.php?page=wc-settings&tab=products'); ?>"><?php _e('Products','woocommerce'); ?></a>
				<ul>
					<li><a href="<?php echo admin_url('admin.php?page=wc-settings&tab=products&section'); ?>"><?php _e('General','woocommerce') ?></a></li>
					<li><a href="<?php echo admin_url('admin.php?page=wc-settings&tab=products&section=display'); ?>"><?php _e('Display','woocommerce') ?></a></li>
					<li><a href="<?php echo admin_url('admin.php?page=wc-settings&tab=products&section=inventory'); ?>"><?php _e('Inventory','woocommerce') ?></a></li>
					<li><a href="<?php echo admin_url('admin.php?page=wc-settings&tab=products&section=downloadable'); ?>"><?php _e('Downloadable Products','woocommerce') ?></a></li>
				</ul>
			</li>
			<li><a href="<?php echo admin_url('admin.php?page=wc-settings&tab=tax'); ?>"><?php _e('Tax','woocommerce'); ?></a>
				<ul>
					<li><a href="<?php echo admin_url('admin.php?page=wc-settings&tab=tax&section'); ?>"><?php _e('Tax Options','woocommerce') ?></a></li>
					<li><a href="<?php echo admin_url('admin.php?page=wc-settings&tab=tax&section=standard'); ?>"><?php _e('Standard Rates','woocommerce') ?></a></li>
				</ul>
			</li>
			<li><a href="<?php echo admin_url('admin.php?page=wc-settings&tab=checkout&section'); ?>"><?php _e('Checkout','woocommerce'); ?></a>
				<ul>
					<li><a href="<?php echo admin_url('admin.php?page=wc-settings&tab=checkout&section'); ?>"><?php _e('Checkout Process','woocommerce') ?></a></li>
					<?php foreach($available_gateways as $key => $gateway): ?>
					<li><a href="<?php echo admin_url('admin.php?page=wc-settings&tab=checkout&section=' . strtolower(get_class($gateway))); ?>"><?php echo $gateway->method_title; ?></a></li>
					<?php  endforeach; ?>
				</ul>
			</li>
			<li><a href="<?php echo admin_url('admin.php?page=wc-settings&tab=shipping'); ?>"><?php _e('Shipping','woocommerce'); ?></a>
				<ul>
					<li><a href="<?php echo admin_url('admin.php?page=wc-settings&tab=shipping&section'); ?>"><?php _e('Shipping Options','woocommerce') ?></a></li>
					<?php foreach($shipping_methods as $key => $shipping_method): ?>
					<li><a href="<?php echo admin_url('admin.php?page=wc-settings&tab=shipping&section=' . strtolower(get_class($shipping_method))); ?>"><?php echo $shipping_method->method_title; ?></a></li>
					<?php  endforeach; ?>
				</ul>
			</li>		
			<li><a href="<?php echo admin_url('admin.php?page=wc-settings&tab=account'); ?>"><?php _e('Accounts','woocommerce'); ?></a></li>					
			<li><a href="<?php echo admin_url('admin.php?page=wc-settings&tab=email'); ?>"><?php _e('Emails','woocommerce'); ?></a></li>					
			<li><a href="<?php echo admin_url('admin.php?page=wc-settings&tab=api'); ?>"><?php _e('API','woocommerce'); ?></a></li>					
			<li><a href="<?php echo admin_url('admin.php?page=wc-status'); ?>"><?php _e('System Status','woocommerce'); ?></a>
				<ul>
					<li><a href="<?php echo admin_url('admin.php?page=wc-status&tab=tools'); ?>"><?php _e('Tools','woocommerce'); ?></a></li>					
					<li><a href="<?php echo admin_url('admin.php?page=wc-status&tab=logs'); ?>"><?php _e('Logs','woocommerce'); ?></a></li>					
				</ul>
			</li>					
		

		</ul>
	</li>

</ul>
</div>
<style type="text/css">
	.wql_left{
		width: 50%;
	    float: left;
	    padding: 0;
	    box-sizing: border-box;
	    margin: 0;
	    border-top: 1px solid #ececec;
	    color: #aaa;
	}
	.wql_right{
		width: 50%;
	    float: right;
	    padding: 0;
	    box-sizing: border-box;
	    margin: 0;
	    border-top: 1px solid #ececec;
	    color: #aaa;
	}
</style>