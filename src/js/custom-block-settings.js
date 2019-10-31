wp.domReady( () => {
    wp.blocks.unregisterBlockStyle( 'core/button', 'squared' );
    wp.blocks.registerBlockStyle( 'core/button', [
        {
            name: 'full',
            label: 'Full Width',
        }
    ]);
} );