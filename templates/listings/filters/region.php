<div class="wpcm-filter wpcm-filter-region">
	<label><?php _e( 'Región', 'wp-car-manager' ); ?></label>
	<select name="region" data-placeholder="<?php _e( 'All', 'wp-car-manager' ); ?>">
		<option value="0"><?php _e( 'All', 'wp-car-manager' ); ?></option>
		<?php foreach (
			apply_filters( 'wpcm_filter_region', array(
        'RM',
        'VIII'
			) ) as $region
		) : ?>
			<option value="<?php echo esc_attr( $region ); ?>"><?php echo $region; ?></option>
		<?php endforeach; ?>
	</select>
</div>