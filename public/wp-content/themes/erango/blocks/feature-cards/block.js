(function (blocks, element, blockEditor) {
    var el = element.createElement;
    var InnerBlocks = blockEditor.InnerBlocks;

    blocks.registerBlockType('erango/erango-feature-cards', {
        title: 'Feature Cards',
        icon: 'universal-access-alt',
        category: 'layout',
        example: {},
        edit: function (props) {
            return el('div', { className: 'feature-cards' },
                el( InnerBlocks, { allowedBlocks: ['erango/erango-feature-card'] } )
            );
        },
        save: function (props) {
            return el('div', { className: 'feature-cards' },
                    el(InnerBlocks.Content)
            );
        },
    });
})(window.wp.blocks, window.wp.element, window.wp.blockEditor);