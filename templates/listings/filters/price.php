<div class="wpcm-filter wpcm-filter-price">
	<label for=""><?php _e( 'Max Price', 'wp-car-manager' ); ?></label>
	<select name="price_to" data-placeholder="<?php _e( 'All', 'wp-car-manager' ); ?>">
		<option value="0"><?php _e('All', 'wp-car-manager'); ?></option>
		<?php foreach (
			apply_filters( 'wpcm_filter_price', array(
				3000000,
				4000000,
				5000000,
				6000000,
				7000000,
				8000000,
				9000000,
				10000000,
				12000000,
				14000000,
				16000000,
				18000000,
				20000000,
				25000000,
				30000000,
				35000000,
				40000000,
				50000000,
				60000000,
				70000000,
				80000000,
				90000000,
				100000000,
				120000000,
				140000000,
				160000000,
				180000000,
				200000000
			) ) as $price
		) : ?>
			<option value="<?php echo esc_attr( $price ); ?>"><?php echo Never5\WPCarManager\Helper\Format::price( $price ); ?></option>
		<?php endforeach; ?>
	</select>
</div>